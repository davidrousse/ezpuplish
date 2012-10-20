<?php
/**
 * File containing the CreatedLocation class
 *
 * @copyright Copyright (C) 1999-2012 eZ Systems AS. All rights reserved.
 * @license http://ez.no/licenses/gnu_gpl GNU General Public License v2.0
 * @version 2012.9
 */

namespace eZ\Publish\Core\REST\Server\Values;
use \eZ\Publish\API\Repository\Values\ValueObject;

/**
 * Struct representing a freshly created location.
 */
class CreatedLocation extends ValueObject
{
    /**
     * The created location
     *
     * @var \eZ\Publish\API\Repository\Values\Content\Location
     */
    public $location;
}
