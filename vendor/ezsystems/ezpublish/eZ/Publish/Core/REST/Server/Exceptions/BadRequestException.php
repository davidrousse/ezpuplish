<?php
/**
 * File containing the BadRequestException tests
 *
 * @copyright Copyright (C) 1999-2012 eZ Systems AS. All rights reserved.
 * @license http://ez.no/licenses/gnu_gpl GNU General Public License v2.0
 * @version 2012.9
 */

namespace eZ\Publish\Core\REST\Server\Exceptions;

/**
 * Exception thrown if the request is not formatted correctly
 */
class BadRequestException extends \InvalidArgumentException
{
}
