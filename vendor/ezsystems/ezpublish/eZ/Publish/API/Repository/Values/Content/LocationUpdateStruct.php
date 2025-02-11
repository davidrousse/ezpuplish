<?php
/**
 * File containing the eZ\Publish\API\Repository\Values\Content\LocationUpdateStruct class.
 *
 * @copyright Copyright (C) 1999-2012 eZ Systems AS. All rights reserved.
 * @license http://ez.no/licenses/gnu_gpl GNU General Public License v2.0
 * @version 2012.9
 */

namespace eZ\Publish\API\Repository\Values\Content;
use eZ\Publish\API\Repository\Values\ValueObject;
/**
 *
 * This class is used for updating location meta data.
 */
class LocationUpdateStruct extends ValueObject
{
    /**
     * If set the location priority is changed to the new value
     *
     * @var int
     */
    public $priority;

    /**
     * If set the location gets a new remoteId.
     *
     * Needs to be a unique Location->remoteId string value.
     *
     * @var mixed
     */
    public $remoteId;

    /**
     * If set the sortField is changed.
     * The sort field specifies which property the child locations should be sorted on.
     * Valid values are found at {@link Location::SORT_FIELD_*}
     *
     * @var mixed
     */
    public $sortField;

    /**
     * if set the sortOrder is changed.
     * The sort order specifies whether the sort order should be ascending or descending.
     * Valid values are {@link Location::SORT_ORDER_*}
     *
     * @var mixed
     */
    public $sortOrder;
}
