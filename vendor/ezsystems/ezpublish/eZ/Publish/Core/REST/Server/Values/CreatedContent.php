<?php
/**
 * File containing the CreatedContent class
 *
 * @copyright Copyright (C) 1999-2012 eZ Systems AS. All rights reserved.
 * @license http://ez.no/licenses/gnu_gpl GNU General Public License v2.0
 * @version 2012.9
 */

namespace eZ\Publish\Core\REST\Server\Values;
use \eZ\Publish\API\Repository\Values\ValueObject;

/**
 * Struct representing a freshly created Content.
 */
class CreatedContent extends ValueObject
{
    /**
     * The created content
     *
     * @var \eZ\Publish\Core\REST\Server\Values\RestContent
     */
    public $content;
}