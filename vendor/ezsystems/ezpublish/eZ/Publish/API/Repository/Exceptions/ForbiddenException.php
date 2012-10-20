<?php
/**
 * File containing the eZ\Publish\API\Repository\Exceptions\ForbiddenException class.
 *
 * @copyright Copyright (C) 1999-2012 eZ Systems AS. All rights reserved.
 * @license http://ez.no/licenses/gnu_gpl GNU General Public License v2.0
 * @version 2012.9
 */

namespace eZ\Publish\API\Repository\Exceptions;

use Exception;

/**
 * An Exception which is thrown if an operation cannot be performed by a service
 * although the current user would have permission to perform this action.
 *
 * @package eZ\Publish\API\Repository\Exceptions
 */
abstract class ForbiddenException extends Exception
{
}
