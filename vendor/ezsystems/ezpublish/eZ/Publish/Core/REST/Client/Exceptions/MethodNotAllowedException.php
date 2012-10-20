<?php
/**
 * File containing the MethodNotAllowedException class
 *
 * @copyright Copyright (C) 1999-2012 eZ Systems AS. All rights reserved.
 * @license http://ez.no/licenses/gnu_gpl GNU General Public License v2.0
 * @version 2012.9
 */

namespace eZ\Publish\Core\REST\Client\Exceptions;

/**
 * Exception thrown if an unsupported method is called.
 */
class MethodNotAllowedException extends \BadMethodCallException
{
}
