<?php
/**
 * File containing the eZIEImageFilterSepia class.
 * 
 * @copyright Copyright (C) 1999-2012 eZ Systems AS. All rights reserved.
 * @license http://www.gnu.org/licenses/gpl-2.0.txt GNU General Public License v2
 * @version 5.0.0-beta2
 * @package ezie
 */
class eZIEImageFilterSepia extends eZIEImageAction
{
    /**
     * Creates a sepia filter
     * 
     * @param array $ (int) $region Affected region, as a 4 keys array: x, y, w, h
     * @return array ( ezcImageFilter )
     */
    static function filter( $region = null )
    {
        return array(
            new ezcImageFilter( 
                'colorspace',
                array( 
                    'space' => ezcImageColorspaceFilters::COLORSPACE_SEPIA,
                    'region' => $region 
                ) 
            ) 
        );
    }
}

?>
