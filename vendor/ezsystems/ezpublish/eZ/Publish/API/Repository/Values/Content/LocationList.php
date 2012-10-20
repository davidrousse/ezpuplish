<?php
/**
 * File containing the eZ\Publish\API\Repository\Values\Content\LocationList class.
 *
 * @copyright Copyright (C) 1999-2012 eZ Systems AS. All rights reserved.
 * @license http://ez.no/licenses/gnu_gpl GNU General Public License v2.0
 * @version 2012.9
 */

namespace eZ\Publish\API\Repository\Values\Content;

use eZ\Publish\API\Repository\Values\ValueObject;

use eZ\Publish\API\Repository\Values\Content\Location;

/**
 * This class represents a queried location list holding a totalCount and a partial list of locations
 * (by offset/limit parameters and permission filters)
 *
 * @property-read int $totalCount - the total count of found locations (filtered by permissions)
 * @property-read \eZ\Publish\API\Repository\Values\Content\Location[] $locations - the partial list of locations controlled by offset/limit
 **/

class LocationList extends ValueObject
{
    /**
     * the total count of found locations (filtered by permissions)
     *
     * @var int
     */
    protected $totalCount;

    /**
     * the partial list of locations controlled by offset/limit
     *
     * @var \eZ\Publish\API\Repository\Values\Content\Location[]
     */
    protected $locations;
}