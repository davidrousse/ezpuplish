<?php
/**
 * File containing the CreateStruct class
 *
 * @copyright Copyright (C) 1999-2012 eZ Systems AS. All rights reserved.
 * @license http://ez.no/licenses/gnu_gpl GNU General Public License v2.0
 * @version 2012.9
 */

namespace eZ\Publish\SPI\Persistence\Content\Location;
use eZ\Publish\SPI\Persistence\ValueObject;

class UpdateStruct extends ValueObject
{
    /**
     * Location priority
     *
     * Position of the Location among its siblings when sorted using priority
     * sort order.
     *
     * @var int
     */
    public $priority = 0;

    /**
     * Remote ID.
     *
     * A universally unique identifier.
     *
     * @var mixed
     */
    public $remoteId;

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
