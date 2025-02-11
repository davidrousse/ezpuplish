<?php
/**
 * File containing the Location class
 *
 * @copyright Copyright (C) 1999-2012 eZ Systems AS. All rights reserved.
 * @license http://ez.no/licenses/gnu_gpl GNU General Public License v2.0
 * @version 2012.9
 */

namespace eZ\Publish\SPI\Persistence\Content;
use eZ\Publish\SPI\Persistence\ValueObject;

/**
 * Struct containing accessible properties on Location entities.
 */
class Location extends ValueObject
{
    // Following constants borrowed from eZContentObjectTreeNode, for data compatibility.
    // Actual names ought to be changed to better match current concepts.
    const SORT_FIELD_PATH = 1;
    const SORT_FIELD_PUBLISHED = 2;
    const SORT_FIELD_MODIFIED = 3;
    const SORT_FIELD_SECTION = 4;
    const SORT_FIELD_DEPTH = 5;
    const SORT_FIELD_CLASS_IDENTIFIER = 6;
    const SORT_FIELD_CLASS_NAME = 7;
    const SORT_FIELD_PRIORITY = 8;
    const SORT_FIELD_NAME = 9;
    const SORT_FIELD_MODIFIED_SUBNODE = 10;
    const SORT_FIELD_NODE_ID = 11;
    const SORT_FIELD_CONTENTOBJECT_ID = 12;

    const SORT_ORDER_DESC = 0;
    const SORT_ORDER_ASC = 1;

    /**
     * Location ID.
     *
     * @var mixed Location ID.
     */
    public $id;

    /**
     * Location priority
     *
     * Position of the Location among its siblings when sorted using priority
     * sort order.
     *
     * @var int
     */
    public $priority;

    /**
     * Indicates that the Location entity has been explicitly marked as hidden.
     *
     * @var bool
     */
    public $hidden;

    /**
     * Indicates that the Location is implicitly marked as hidden by a parent
     * location.
     *
     * @var bool
     */
    public $invisible;

    /**
     * Remote ID.
     *
     * A universally unique identifier.
     *
     * @var mixed
     */
    public $remoteId;

    /**
     * ID of the corresponding {@link \eZ\Publish\SPI\Persistence\Content}.
     *
     * @var mixed Content ID.
     */
    public $contentId;

    /**
     * Parent ID.
     *
     * @var mixed Location ID.
     */
    public $parentId;

    /**
     * Legacy format of the url alias.
     *
     * This field might be removed in a later version.
     *
     * @var string
     */
    public $pathIdentificationString;

    /**
     * The materialized path of the location entry, eg: /1/2/
     *
     * @var string
     */
    public $pathString;

    /**
     * Timestamp of the latest update of a content object in a sub location.
     *
     * @var int
     */
    public $modifiedSubLocation;

    /**
     * Identifier of the main location.
     *
     * If the content object in this location has multiple locations,
     * $mainLocationId will point to the main one.
     *
     * @var mixed
     */
    public $mainLocationId;

    /**
     * Depth location has in the location tree.
     *
     * @var int
     */
    public $depth;

    /**
     * Specifies which property the child locations should be sorted on.
     *
     * Valid values are found at {@link Location::SORT_FIELD_*}
     *
     * @var mixed
     */
    public $sortField;

    /**
     * Specifies whether the sort order should be ascending or descending.
     *
     * Valid values are {@link Location::SORT_ORDER_*}
     *
     * @var mixed
     */
    public $sortOrder;
}
