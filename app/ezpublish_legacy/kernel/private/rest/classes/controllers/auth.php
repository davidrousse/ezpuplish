<?php
/**
 * File containing ezpRestAuthController
 *
 * @copyright Copyright (C) 1999-2012 eZ Systems AS. All rights reserved.
 * @license http://www.gnu.org/licenses/gpl-2.0.txt GNU General Public License v2
 * @version  2012.9
 * @package kernel
 */

/**
 * Handles authentication with the REST interface.
 */
class ezpRestAuthController extends ezcMvcController
{
    public function doBasicAuth()
    {
        $res = new ezcMvcResult();
        $res->status = new ezcMvcResultUnauthorized( "eZ Publish REST" );
        return $res;
    }

    public function doOauthRequired()
    {
        $res = new ezcMvcResult();
        $statusCode = ezpOauthFilter::STATUS_TOKEN_UNAVAILABLE;
        if ( isset( $this->ezpAuth_reason ) )
        {
            $statusCode = $this->ezpAuth_reason;
        }

        switch ( $statusCode )
        {
            case ezpOauthFilter::STATUS_TOKEN_UNAVAILABLE:
                $status = new ezpOauthRequired( ezpOauthRequired::DEFAULT_REALM );
                $res->variables['error'] = ezpOauthErrorType::INVALID_REQUEST;
            break;

            case ezpOauthFilter::STATUS_TOKEN_EXPIRED:
                $status = new ezpOauthRequired( ezpOauthRequired::DEFAULT_REALM, ezpOauthErrorType::EXPIRED_TOKEN );
                $res->variables['error'] = ezpOauthErrorType::EXPIRED_TOKEN;
            break;

            case ezpOauthFilter::STATUS_TOKEN_INVALID:
                $status = new ezpOauthRequired( ezpOauthRequired::DEFAULT_REALM, ezpOauthErrorType::INVALID_TOKEN );
                $res->variables['error'] = ezpOauthErrorType::INVALID_TOKEN;
            break;

            case ezpOauthFilter::STATUS_TOKEN_INSUFFICIENT_SCOPE:
                $status = new ezpOauthRequired( ezpOauthRequired::DEFAULT_REALM, ezpOauthErrorType::INSUFFICIENT_SCOPE );
                $res->variables['error'] = ezpOauthErrorType::INSUFFICIENT_SCOPE;
            break;

            default:
                $status = new ezpOauthRequired( ezpOauthRequired::DEFAULT_REALM, ezpOauthErrorType::INVALID_REQUEST );
                $res->variables['error'] = ezpOauthErrorType::INVALID_REQUEST;
            break;
        }

        $res->status = $status;
        return $res;
    }
}

?>
