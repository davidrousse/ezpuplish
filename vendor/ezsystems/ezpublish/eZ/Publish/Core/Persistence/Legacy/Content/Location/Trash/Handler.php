<?php
/**
 * File containing the Trash Handler class
 *
 * @copyright Copyright (C) 1999-2012 eZ Systems AS. All rights reserved.
 * @license http://ez.no/licenses/gnu_gpl GNU General Public License v2.0
 * @version 2012.9
 */

namespace eZ\Publish\Core\Persistence\Legacy\Content\Location\Trash;
use eZ\Publish\SPI\Persistence\Content\Location\Trashed,
    eZ\Publish\SPI\Persistence\Content\Location\Trash\Handler as BaseTrashHandler,
    eZ\Publish\Core\Persistence\Legacy\Content\Handler as ContentHandler,
    eZ\Publish\API\Repository\Values\Content\Query\Criterion,
    eZ\Publish\Core\Persistence\Legacy\Content\Location\Gateway as LocationGateway,
    eZ\Publish\Core\Persistence\Legacy\Content\Location\Mapper as LocationMapper;

/**
 * The Location Handler interface defines operations on Location elements in the storage engine.
 */
class Handler implements BaseTrashHandler
{
    /**
     * Gateway for handling location data
     *
     * @var \eZ\Publish\Core\Persistence\Legacy\Content\Location\Gateway
     */
    protected $locationGateway;

    /**
     * Mapper for handling location data
     *
     * @var \eZ\Publish\Core\Persistence\Legacy\Content\Location\Mapper
     */
    protected $locationMapper;

    /**
     * Content handler
     *
     * @var \eZ\Publish\Core\Persistence\Legacy\Content\Handler
     */
    protected $contentHandler;

    /**
     * Construct from userGateway
     *
     * @param \eZ\Publish\Core\Persistence\Legacy\Content\Location\Gateway $locationGateway
     * @param \eZ\Publish\Core\Persistence\Legacy\Content\Location\Mapper $locationMapper
     * @param \eZ\Publish\Core\Persistence\Legacy\Content\Handler $contentHandler
     *
     * @return \eZ\Publish\Core\Persistence\Legacy\Content\Location\Trash\Handler
     */
    public function __construct(
        LocationGateway $locationGateway,
        LocationMapper $locationMapper,
        ContentHandler $contentHandler
    )
    {
        $this->locationGateway = $locationGateway;
        $this->locationMapper = $locationMapper;
        $this->contentHandler = $contentHandler;
    }

    /**
     * Loads the data for the trashed location identified by $id.
     * $id is the same as original location (which has been previously trashed)
     *
     * @param int $id
     * @return \eZ\Publish\SPI\Persistence\Content\Location\Trashed
     * @throws \eZ\Publish\API\Repository\Exceptions\NotFoundException
     */
    public function loadTrashItem( $id )
    {
        $data = $this->locationGateway->loadTrashByLocation( $id );
        return $this->locationMapper->createLocationFromRow( $data, null, new Trashed() );
    }

    /**
     * Sends a subtree starting to $locationId to the trash
     * and returns a Trashed object corresponding to $locationId.
     *
     * Moves all locations in the subtree to the Trash. The associated content
     * objects are left untouched.
     *
     * @param mixed $locationId
     * @return \eZ\Publish\SPI\Persistence\Content\Location\Trashed
     * @todo Handle field types actions
     */
    public function trash( $locationId )
    {
        $sourceNodeData = $this->locationGateway->getBasicNodeData( $locationId );
        $this->locationGateway->trashSubtree( $sourceNodeData['path_string'] );
        return $this->loadTrashItem( $locationId );
    }

    /**
     * Returns a trashed location to normal state.
     *
     * Recreates the originally trashed location in the new position.
     * If this is not possible (because the old location does not exist any more),
     * a ParentNotFound exception is thrown.
     *
     * Returns newly restored location Id.
     *
     * @param mixed $trashedId
     * @param mixed $newParentId
     * @return int Newly restored location id
     * @throws \eZ\Publish\Core\Base\Exceptions\NotFoundException If $newParentId is invalid
     * @todo Handle field types actions
     */
    public function recover( $trashedId, $newParentId )
    {
        return $this->locationGateway->untrashLocation( $trashedId, $newParentId )->id;
    }

    /**
     * Returns an array of all trashed locations satisfying the $criterion (if provided),
     * sorted with SortClause objects contained in $sort (if any).
     * If no criterion is provided (null), no filter is applied
     *
     * @param \eZ\Publish\API\Repository\Values\Content\Query\Criterion $criterion
     * @param int $offset Offset to start listing from, 0 by default
     * @param int $limit Limit for the listing. Null by default (no limit)
     * @param \eZ\Publish\API\Repository\Values\Content\Query\SortClause[] $sort
     * @return \eZ\Publish\SPI\Persistence\Content\Location\Trashed[]
     */
    public function findTrashItems( Criterion $criterion = null, $offset = 0, $limit = null, array $sort = null )
    {
        // CBA: Ignore criterion for now.
        $rows = $this->locationGateway->listTrashed( $offset, $limit, $sort );
        $items = array();

        foreach ( $rows as $row )
        {
            $items[] = $this->locationMapper->createLocationFromRow( $row, null, new Trashed() );
        }

        return $items;
    }

    /**
     * Empties the trash
     * Everything contained in the trash must be removed
     *
     * @return void
     */
    public function emptyTrash()
    {
        $trashedItems = $this->findTrashItems();
        foreach ( $trashedItems as $item )
        {
            $this->delete( $item );
        }

        $this->locationGateway->cleanupTrash();
    }

    /**
     * Removes a trashed location identified by $trashedLocationId from trash
     * Associated content has to be deleted
     *
     * @param int $trashedId
     * @return void
     */
    public function deleteTrashItem( $trashedId )
    {
        $this->delete( $this->loadTrashItem( $trashedId ) );
    }

    /**
     * Triggers delete operations for $trashItem.
     * If there is no more locations for corresponding content, then it will be deleted as well.
     *
     * @param \eZ\Publish\SPI\Persistence\Content\Location\Trashed $trashItem
     * @return void
     */
    protected function delete( Trashed $trashItem )
    {
        $this->locationGateway->removeElementFromTrash( $trashItem->id );

        if ( $this->locationGateway->countLocationsByContentId( $trashItem->contentId ) < 1 )
            $this->contentHandler->deleteContent( $trashItem->contentId );
    }
}

