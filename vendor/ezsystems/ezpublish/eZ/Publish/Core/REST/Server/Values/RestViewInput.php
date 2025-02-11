<?php
/**
 * File containing the RestViewInput class
 *
 * @copyright Copyright (C) 1999-2012 eZ Systems AS. All rights reserved.
 * @license http://ez.no/licenses/gnu_gpl GNU General Public License v2.0
 * @version 2012.9
 */

namespace eZ\Publish\Core\REST\Server\Values;

use eZ\Publish\API\Repository\Values\Content\Query;
use eZ\Publish\Core\REST\Common\Value as RestValue;

/**
 * RestContentCreateStruct view model
 */
class RestViewInput extends RestValue
{
    /**
     * The search query
     * @var \eZ\Publish\API\Repository\Values\Content\Query
     */
    public $query;

    /**
     * View identifier
     * @var string
     */
    public $identifier;
}
