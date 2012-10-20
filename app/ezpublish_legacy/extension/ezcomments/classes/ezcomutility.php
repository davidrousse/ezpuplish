<?php
/**
 * File containing the ezcomUtility class
 *
 * @copyright Copyright (C) 1999-2012 eZ Systems AS. All rights reserved.
 * @license http://www.gnu.org/licenses/gpl-2.0.txt GNU General Public License v2
 *
 */

/**
 * Utility library for comment system
 *
 */
class ezcomUtility
{
    /**
     * validate url string. URL can not start with javascript/vbscript/mailto
     */
    public static function validateURLString( $value )
    {
        if( preg_match( "/^(java|vb)script:.*/i" , $value ) )
        {
            return ezpI18n::tr( 'ezcomments/comment/add', 'Javascript code in url is not allowed.' );
        }
        if( preg_match( "/^mailto:(.*)/i" , $value ) )
        {
            return ezpI18n::tr( 'ezcomments/comment/add',  "Email link in url is not allowed." );
        }
        return true;
    }

    public function generateSusbcriberHashString( $subscriber )
    {
        return strtoupper( hash( 'md5', uniqid( '', true ). time() ) );
    }

    /**
     * generate the hashstring of a subscription
     * @param $input
     * @return string the hashed string
     */
    public function generateSubscriptionHashString( $subscription )
    {
        return strtoupper( hash( 'md5', uniqid( '', true ). time() ) );
    }
    
    /**
     * get ip address of a user commenting
     * @return string
     */
    public function getUserIP()
    {
        if( isset( $_SERVER['HTTP_X_FORWARDED_FOR'] ) )
        {
            return $_SERVER['HTTP_X_FORWARDED_FOR'];
        }
        if ( isset( $_SERVER['HTTP_CLIENT_IP'] ) )
        {
            return $_SERVER['HTTP_CLIENT_IP'];
        }
        return $_SERVER['REMOTE_ADDR'];
    }

    /**
     * create new instance of the object
     * TODO: load the class dynamically
     * @return ezcomUtility
     */
    public static function instance()
    {
        return new ezcomUtility();
    }
}

?>
