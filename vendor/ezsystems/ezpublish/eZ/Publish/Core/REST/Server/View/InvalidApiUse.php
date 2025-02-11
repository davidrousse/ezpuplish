<?php
/**
 * File containing the InvalidApiUse view class
 *
 * @copyright Copyright (C) 1999-2012 eZ Systems AS. All rights reserved.
 * @license http://ez.no/licenses/gnu_gpl GNU General Public License v2.0
 * @version 2012.9
 */

namespace eZ\Publish\Core\REST\Server\View;

use Qafoo\RMF;

/**
 * Simple view handler used when the API is called with wrong media types
 */
class InvalidApiUse extends RMF\View
{
    /**
     * Display the controller result
     *
     * @param RMF\Request $request
     * @param mixed $result
     */
    public function display( RMF\Request $request, $result )
    {
        header( "Status: 415 Unsupported Media Type" );
        echo "<h1>Unsupported Media Type</h1>";
    }
}
