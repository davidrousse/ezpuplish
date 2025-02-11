<?php
/**
 * File containing the Content Type Handler class
 *
 * @copyright Copyright (C) 1999-2012 eZ Systems AS. All rights reserved.
 * @license http://ez.no/licenses/gnu_gpl GNU General Public License v2.0
 * @version 2012.9
 */

namespace eZ\Publish\Core\Persistence\Legacy\Content\Type;
use eZ\Publish\SPI\Persistence\Content\Type,
    eZ\Publish\SPI\Persistence\Content\Type\Handler as BaseContentTypeHandler,
    eZ\Publish\SPI\Persistence\Content\Type\CreateStruct,
    eZ\Publish\SPI\Persistence\Content\Type\UpdateStruct,
    eZ\Publish\SPI\Persistence\Content\Type\FieldDefinition,
    eZ\Publish\SPI\Persistence\Content\Type\Group,
    eZ\Publish\SPI\Persistence\Content\Type\Group\CreateStruct as GroupCreateStruct,
    eZ\Publish\SPI\Persistence\Content\Type\Group\UpdateStruct as GroupUpdateStruct,
    eZ\Publish\Core\Persistence\Legacy\Content\StorageFieldDefinition,
    eZ\Publish\Core\Persistence\Legacy\Content\Type\Update\Handler as UpdateHandler,
    eZ\Publish\Core\Persistence\Legacy\Exception,
    eZ\Publish\Core\Base\Exceptions\NotFoundException,
    eZ\Publish\Core\Base\Exceptions\BadStateException;

/**
 */
class Handler implements BaseContentTypeHandler
{
    /**
     * @var \eZ\Publish\Core\Persistence\Legacy\Content\Type\Gateway
     */
    protected $contentTypeGateway;

    /**
     * Mappper for Type objects.
     *
     * @var Mapper
     */
    protected $mapper;

    /**
     * Content Type update handler
     *
     * @var \eZ\Publish\Core\Persistence\Legacy\Content\Type\Update\Handler
     */
    protected $updateHandler;

    /**
     * Creates a new content type handler.
     *
     * @param \eZ\Publish\Core\Persistence\Legacy\Content\Type\Gateway $contentTypeGateway
     * @param \eZ\Publish\Core\Persistence\Legacy\Content\Type\Mapper $mapper
     * @param \eZ\Publish\Core\Persistence\Legacy\Content\Type\Update\Handler $updateHandler
     */
    public function __construct(
        Gateway $contentTypeGateway,
        Mapper $mapper,
        UpdateHandler $updateHandler )
    {
        $this->contentTypeGateway = $contentTypeGateway;
        $this->mapper = $mapper;
        $this->updateHandler = $updateHandler;
    }

    /**
     * @param \eZ\Publish\SPI\Persistence\Content\Type\Group\CreateStruct $createStruct
     * @return Group
     */
    public function createGroup( GroupCreateStruct $createStruct )
    {
        $group = $this->mapper->createGroupFromCreateStruct(
            $createStruct
        );

        $group->id = $this->contentTypeGateway->insertGroup(
            $group
        );

        return $group;
    }

    /**
     * @param \eZ\Publish\SPI\Persistence\Content\Type\Group\UpdateStruct $struct
     * @return \eZ\Publish\SPI\Persistence\Content\Type\Group
     */
    public function updateGroup( GroupUpdateStruct $struct )
    {
        $this->contentTypeGateway->updateGroup(
            $struct
        );
        return $this->loadGroup( $struct->id );
    }

    /**
     * @param mixed $groupId
     * @throws \eZ\Publish\API\Repository\Exceptions\BadStateException If type group contains types
     * @throws \eZ\Publish\API\Repository\Exceptions\NotFoundException If type group with id is not found
     */
    public function deleteGroup( $groupId )
    {
        if ( $this->contentTypeGateway->countTypesInGroup( $groupId ) !== 0 )
        {
            throw new Exception\GroupNotEmpty( $groupId );
        }
        $this->contentTypeGateway->deleteGroup( $groupId );
    }

    /**
     * @param mixed $groupId
     * @return Group
     * @throws \eZ\Publish\API\Repository\Exceptions\NotFoundException If type group with $groupId is not found
     */
    public function loadGroup( $groupId )
    {
        $groups = $this->mapper->extractGroupsFromRows(
            $this->contentTypeGateway->loadGroupData( $groupId )
        );

        if ( count( $groups ) !== 1 )
        {
            throw new Exception\TypeGroupNotFound( $groupId );
        }

        return $groups[0];
    }

    /**
     * @param string $identifier
     * @return \eZ\Publish\SPI\Persistence\Content\Type\Group
     * @throws \eZ\Publish\API\Repository\Exceptions\NotFoundException If type group with $identifier is not found
     */
    public function loadGroupByIdentifier( $identifier )
    {
        $groups = $this->mapper->extractGroupsFromRows(
            $this->contentTypeGateway->loadGroupDataByIdentifier( $identifier )
        );

        if ( count( $groups ) !== 1 )
        {
            throw new Exception\TypeGroupNotFound( $identifier );
        }

        return $groups[0];
    }

    /**
     * @return Group[]
     */
    public function loadAllGroups()
    {
        return $this->mapper->extractGroupsFromRows(
            $this->contentTypeGateway->loadAllGroupsData()
        );
    }

    /**
     * @param mixed $groupId
     * @param int $status
     * @return Type[]
     */
    public function loadContentTypes( $groupId, $status = 0 )
    {
        return $this->mapper->extractTypesFromRows(
            $this->contentTypeGateway->loadTypesDataForGroup( $groupId, $status )
        );
    }

    /**
     * @param int $contentTypeId
     * @param int $status
     * @return \eZ\Publish\SPI\Persistence\Content\Type
     */
    public function load( $contentTypeId, $status = Type::STATUS_DEFINED )
    {
        return $this->loadFromRows(
            $this->contentTypeGateway->loadTypeData(
                $contentTypeId, $status
            ),
            $contentTypeId,
            $status
        );
    }

    /**
     * Load a (defined) content type by identifier
     *
     * @param string $identifier
     * @return \eZ\Publish\SPI\Persistence\Content\Type
     * @throws \eZ\Publish\API\Repository\Exceptions\NotFoundException If defined type is not found
     */
    public function loadByIdentifier( $identifier )
    {
        $rows = $this->contentTypeGateway->loadTypeDataByIdentifier(
            $identifier, Type::STATUS_DEFINED
        );
        return $this->loadFromRows( $rows, $identifier, Type::STATUS_DEFINED );
    }

    /**
     * Load a (defined) content type by remote id
     *
     * @param mixed $remoteId
     * @return \eZ\Publish\SPI\Persistence\Content\Type
     * @throws \eZ\Publish\API\Repository\Exceptions\NotFoundException If defined type is not found
     */
    public function loadByRemoteId( $remoteId )
    {
        return $this->loadFromRows(
            $this->contentTypeGateway->loadTypeDataByRemoteId(
                $remoteId, Type::STATUS_DEFINED
            ),
            $remoteId,
            Type::STATUS_DEFINED
        );
    }

    /**
     * Loads a single Type from $rows
     *
     * @param array $rows
     * @param mixed $typeIdentifier
     * @param int $status
     * @return \eZ\Publish\SPI\Persistence\Content\Type
     */
    protected function loadFromRows( array $rows, $typeIdentifier, $status )
    {
        $types = $this->mapper->extractTypesFromRows( $rows );
        if ( count( $types ) !== 1 )
        {
            throw new Exception\TypeNotFound( $typeIdentifier, $status );
        }

        return $types[0];
    }

    /**
     * @param \eZ\Publish\SPI\Persistence\Content\Type\CreateStruct $createStruct
     *
     * @return \eZ\Publish\SPI\Persistence\Content\Type
     */
    public function create( CreateStruct $createStruct )
    {
        return $this->internalCreate( $createStruct );
    }

    /**
     * Internal method for creating ContentType
     *
     * Used by self::create(), self::createDraft() and self::copy()
     *
     * @param \eZ\Publish\SPI\Persistence\Content\Type\CreateStruct $createStruct
     * @param mixed|null $contentTypeId Used by self::createDraft() to retain ContentType id in the draft
     *
     * @return \eZ\Publish\SPI\Persistence\Content\Type
     */
    protected function internalCreate( CreateStruct $createStruct, $contentTypeId = null )
    {
        $createStruct = clone $createStruct;
        $contentType = $this->mapper->createTypeFromCreateStruct(
            $createStruct
        );

        $contentType->id = $this->contentTypeGateway->insertType(
            $contentType,
            $contentTypeId
        );

        foreach ( $contentType->groupIds as $groupId )
        {
            $this->contentTypeGateway->insertGroupAssignment(
                $groupId,
                $contentType->id,
                $contentType->status
            );
        }

        foreach ( $contentType->fieldDefinitions as $fieldDef )
        {
            $storageFieldDef = new StorageFieldDefinition();
            $this->mapper->toStorageFieldDefinition( $fieldDef, $storageFieldDef );
            $fieldDef->id = $this->contentTypeGateway->insertFieldDefinition(
                $contentType->id,
                $contentType->status,
                $fieldDef,
                $storageFieldDef
            );
        }

        return $contentType;
    }

    /**
     * @param mixed $typeId
     * @param int $status
     * @param \eZ\Publish\SPI\Persistence\Content\Type\UpdateStruct $contentType
     * @return Type
     */
    public function update( $typeId, $status, UpdateStruct $contentType )
    {
        $this->contentTypeGateway->updateType(
            $typeId, $status, $contentType
        );
        return $this->load(
            $typeId, $status
        );
    }

    /**
     *
     *
     * @throws \eZ\Publish\API\Repository\Exceptions\BadStateException If type is defined and still has content
     * @throws \eZ\Publish\API\Repository\Exceptions\NotFoundException If type is not found
     *
     * @param mixed $contentTypeId
     * @param int $status
     *
     * @return boolean
     */
    public function delete( $contentTypeId, $status )
    {
        if ( !$this->contentTypeGateway->loadTypeData( $contentTypeId, $status ) )
        {
            throw new NotFoundException(
                "ContentType",
                array(
                    "id" => $contentTypeId,
                    "status" => $status
                )
            );
        }

        if ( Type::STATUS_DEFINED === $status && $this->contentTypeGateway->countInstancesOfType( $contentTypeId ) )
        {
            throw new BadStateException(
                "\$contentTypeId",
                "ContentType with given id still has content instances and therefore can't be deleted"
            );
        }

        $this->contentTypeGateway->delete(
            $contentTypeId, $status
        );

        // FIXME: Return true only if deletion happened
        return true;
    }

    /**
     * Creates a draft of existing defined content type
     *
     * Updates modified date, sets $modifierId and status to Type::STATUS_DRAFT on the new returned draft.
     *
     * @param mixed $modifierId
     * @param mixed $contentTypeId
     * @return \eZ\Publish\SPI\Persistence\Content\Type
     * @throws \eZ\Publish\API\Repository\Exceptions\NotFoundException If type with defined status is not found
     */
    public function createDraft( $modifierId, $contentTypeId )
    {
        $createStruct = $this->mapper->createCreateStructFromType(
            $this->load( $contentTypeId, Type::STATUS_DEFINED )
        );
        $createStruct->status = Type::STATUS_DRAFT;
        $createStruct->modifierId = $modifierId;
        $createStruct->modified = time();

        return $this->internalCreate( $createStruct, $contentTypeId );
    }

    /**
     * @param mixed $userId
     * @param mixed $contentTypeId
     * @param int $status One of Type::STATUS_DEFINED|Type::STATUS_DRAFT|Type::STATUS_MODIFIED
     * @return Type
     */
    public function copy( $userId, $contentTypeId, $status )
    {
        $createStruct = $this->mapper->createCreateStructFromType(
            $this->load( $contentTypeId, $status )
        );
        $createStruct->modifierId = $userId;
        $createStruct->created = $createStruct->modified = time();
        $createStruct->creatorId = $userId;
        $createStruct->identifier .= '_' . ( $createStruct->remoteId = md5( uniqid( get_class( $createStruct ), true ) ) );
        // Set FieldDefinition ids to null to trigger creating new id
        foreach ( $createStruct->fieldDefinitions as $fieldDefinition )
        {
            $fieldDefinition->id = null;
        }

        return $this->internalCreate( $createStruct );
    }

    /**
     * Unlink a content type group from a content type
     *
     * @param mixed $groupId
     * @param mixed $contentTypeId
     * @param int $status
     * @throws \eZ\Publish\API\Repository\Exceptions\NotFoundException If group or type with provided status is not found
     * @throws \eZ\Publish\API\Repository\Exceptions\BadStateException If $groupId is last group on $contentTypeId or
     *                                                                 not a group assigned to type
     * @todo Add throws for NotFound and BadState when group is not assigned to type
     */
    public function unlink( $groupId, $contentTypeId, $status )
    {
        $groupCount = $this->contentTypeGateway->countGroupsForType(
            $contentTypeId, $status
        );
        if ( $groupCount < 2 )
        {
            throw new Exception\RemoveLastGroupFromType(
                $contentTypeId, $status
            );
        }

        $this->contentTypeGateway->deleteGroupAssignment(
            $groupId, $contentTypeId, $status
        );
        // FIXME: What is to be returned?
        return true;
    }

    /**
     * Link a content type group with a content type
     *
     * @param mixed $groupId
     * @param mixed $contentTypeId
     * @throws \eZ\Publish\API\Repository\Exceptions\NotFoundException If group or type with provided status is not found
     * @throws \eZ\Publish\API\Repository\Exceptions\BadStateException If type is already part of group
     * @todo Above throws are not implemented
     */
    public function link( $groupId, $contentTypeId, $status )
    {
        $this->contentTypeGateway->insertGroupAssignment(
            $groupId, $contentTypeId, $status
        );
        // FIXME: What is to be returned?
        return true;
    }


    /**
     * Returns field definition for the given field definition id
     *
     * @throws \eZ\Publish\API\Repository\Exceptions\NotFoundException If field definition is not found
     *
     * @param mixed $id
     * @param int $status One of Type::STATUS_DEFINED|Type::STATUS_DRAFT|Type::STATUS_MODIFIED
     *
     * @return \eZ\Publish\SPI\Persistence\Content\Type\FieldDefinition
     */
    public function getFieldDefinition( $id, $status )
    {
        $row = $this->contentTypeGateway->loadFieldDefinition( $id, $status );

        if ( $row === false )
        {
            throw new NotFoundException(
                "FieldDefinition",
                array(
                    "id" => $id,
                    "status" => $status
                )
            );
        }

        return $this->mapper->extractFieldFromRow( $row );
    }

    /**
     * Adds a new field definition to an existing Type.
     *
     * This method creates a new status of the Type with the $fieldDefinition
     * added. It does not update existing content objects depending on the
     * field (default) values.
     *
     * @param mixed $contentTypeId
     * @param int $status One of Type::STATUS_DEFINED|Type::STATUS_DRAFT|Type::STATUS_MODIFIED
     * @param \eZ\Publish\SPI\Persistence\Content\Type\FieldDefinition $fieldDefinition
     * @return void
     */
    public function addFieldDefinition( $contentTypeId, $status, FieldDefinition $fieldDefinition )
    {
        $storageFieldDef = new StorageFieldDefinition();
        $this->mapper->toStorageFieldDefinition(
            $fieldDefinition, $storageFieldDef
        );
        $fieldDefinition->id = $this->contentTypeGateway->insertFieldDefinition(
            $contentTypeId, $status, $fieldDefinition, $storageFieldDef
        );
    }

    /**
     * Removes a field definition from an existing Type.
     *
     * This method creates a new status of the Type with the field definition
     * referred to by $fieldDefinitionId removed. It does not update existing
     * content objects depending on the field (default) values.
     *
     * @param mixed $contentTypeId
     * @param mixed $fieldDefinitionId
     * @return boolean
     */
    public function removeFieldDefinition( $contentTypeId, $status, $fieldDefinitionId )
    {
        $this->contentTypeGateway->deleteFieldDefinition(
            $contentTypeId, $status, $fieldDefinitionId
        );
        // FIXME: Return true only if deletion happened
        return true;
    }

    /**
     * This method updates the given $fieldDefinition on a Type.
     *
     * This method creates a new status of the Type with the updated
     * $fieldDefinition. It does not update existing content objects depending
     * on the
     * field (default) values.
     *
     * @param mixed $contentTypeId
     * @param \eZ\Publish\SPI\Persistence\Content\Type\FieldDefinition $fieldDefinition
     * @return void
     */
    public function updateFieldDefinition( $contentTypeId, $status, FieldDefinition $fieldDefinition )
    {
        $storageFieldDef = new StorageFieldDefinition();
        $this->mapper->toStorageFieldDefinition(
            $fieldDefinition, $storageFieldDef
        );
        $this->contentTypeGateway->updateFieldDefinition(
            $contentTypeId, $status, $fieldDefinition, $storageFieldDef
        );
    }

    /**
     * Update content objects
     *
     * Updates content objects, depending on the changed field definitions.
     *
     * A content type has a state which tells if its content objects yet have
     * been adapted.
     *
     * Flags the content type as updated.
     *
     * @param mixed $contentTypeId
     * @return void
     */
    public function publish( $contentTypeId )
    {
        $toType = $this->load( $contentTypeId, Type::STATUS_DRAFT );

        try
        {
            $fromType = $this->load( $contentTypeId, Type::STATUS_DEFINED );
            $this->updateHandler->updateContentObjects( $fromType, $toType );
            $this->updateHandler->deleteOldType( $fromType );
        }
        // If no old type is found, no updates are necessary to it
        catch ( Exception\TypeNotFound $e )
        {
        }

        $this->updateHandler->publishNewType( $toType, Type::STATUS_DEFINED );
    }
}
