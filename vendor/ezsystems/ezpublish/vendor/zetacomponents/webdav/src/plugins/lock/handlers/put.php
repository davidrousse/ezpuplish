<?php
/**
 * File containing the ezcWebdavLockPutRequestResponseHandler class.
 *
 * @package Webdav
 * @version //autogentag//
 * @copyright Copyright (C) 2005-2008 eZ systems as. All rights reserved.
 * @license http://ez.no/licenses/new_bsd New BSD License
 *
 * @access private
 */
/**
 * Handler class for the PUT request.
 * 
 * @package Webdav
 * @version //autogen//
 *
 * @access private
 */
class ezcWebdavLockPutRequestResponseHandler extends ezcWebdavLockMakeCollectionRequestResponseHandler
{
    /**
     * Handles responses to the PUT request.
     *
     *
     * @param ezcWebdavResponse $response 
     * @return ezcWebdavResponse|null
     */
    public function generatedResponse( ezcWebdavResponse $response )
    {
        if ( !( $response instanceof ezcWebdavPutResponse ) )
        {
            return null;
        }
        
        $this->updateLockProperties();
    }
}

?>
