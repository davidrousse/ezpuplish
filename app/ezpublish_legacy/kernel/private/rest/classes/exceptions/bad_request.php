<?php
/**
 * File containing the ezpOauthBadRequestException class.
 *
 * @copyright Copyright (C) 1999-2012 eZ Systems AS. All rights reserved.
 * @license http://www.gnu.org/licenses/gpl-2.0.txt GNU General Public License v2
 * @version  2012.9
 * @package kernel
 */

/**
 * This is the base exception for triggering BAD REQUEST response.
 *
 * @package oauth
 */
abstract class ezpOauthBadRequestException extends ezpOauthException
{
    public function __construct( $message )
    {
        parent::__construct( $message );
    }
}
?>
