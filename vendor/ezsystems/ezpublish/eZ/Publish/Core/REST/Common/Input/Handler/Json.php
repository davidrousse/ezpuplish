<?php
/**
 * File containing the Json handler class
 *
 * @copyright Copyright (C) 1999-2012 eZ Systems AS. All rights reserved.
 * @license http://ez.no/licenses/gnu_gpl GNU General Public License v2.0
 * @version 2012.9
 */

namespace eZ\Publish\Core\REST\Common\Input\Handler;
use eZ\Publish\Core\REST\Common\Input\Handler;

/**
 * Input format handler base class
 */
class Json extends Handler
{
    /**
     * Converts the given string to an array structure
     *
     * @param string $string
     * @return array
     */
    public function convert( $string )
    {
        return json_decode( $string, true );
    }
}
