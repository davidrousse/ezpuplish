<?php
/**
 * File containing the Relation class
 *
 * @copyright Copyright (C) 1999-2012 eZ Systems AS. All rights reserved.
 * @license http://ez.no/licenses/gnu_gpl GNU General Public License v2.0
 * @version 2012.9
 */

namespace eZ\Publish\Core\REST\Client\Values\Content;


/**
 * Implementation of the {@link \eZ\Publish\API\Repository\Values\Content\Relation}
 * class.
 *
 * @see \eZ\Publish\API\Repository\Values\Content\Relation
 */
class Relation extends \eZ\Publish\API\Repository\Values\Content\Relation
{
    /**
     * @var \eZ\Publish\API\Repository\Values\Content\ContentInfo
     */
    protected $sourceContentInfo;

    /**
     * @var \eZ\Publish\API\Repository\Values\Content\ContentInfo
     */
    protected $destinationContentInfo;

    /**
     * @var int
     */
    protected $type;

    /**
     * the content of the source content of the relation
     *
     * @return \eZ\Publish\API\Repository\Values\Content\ContentInfo
     */
    public function getSourceContentInfo()
    {
        return $this->sourceContentInfo;
    }

    /**
     * the content of the destination content of the relation
     *
     * @return \eZ\Publish\API\Repository\Values\Content\ContentInfo
     */
    public function getDestinationContentInfo()
    {
        return $this->destinationContentInfo;
    }
}
