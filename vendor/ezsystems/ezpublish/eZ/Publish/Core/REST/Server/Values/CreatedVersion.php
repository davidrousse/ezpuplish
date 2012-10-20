<?php
/**
 * File containing the CreatedVersion class
 *
 * @copyright Copyright (C) 1999-2012 eZ Systems AS. All rights reserved.
 * @license http://ez.no/licenses/gnu_gpl GNU General Public License v2.0
 * @version 2012.9
 */

namespace eZ\Publish\Core\REST\Server\Values;
use \eZ\Publish\API\Repository\Values\ValueObject;

/**
 * Struct representing a freshly created version.
 */
class CreatedVersion extends ValueObject
{
    /**
     * The created version
     *
     * @var \eZ\Publish\API\Repository\Values\Content\Content
     */
    public $version;
}
