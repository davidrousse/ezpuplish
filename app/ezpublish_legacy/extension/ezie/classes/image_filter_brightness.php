<?php
/**
 * File containing the eZIEImageFilterBrightness class.
 *
 * @copyright Copyright (C) 1999-2012 eZ Systems AS. All rights reserved.
 * @license http://www.gnu.org/licenses/gpl-2.0.txt GNU General Public License v2
 * @version 5.0.0-beta2
 * @package ezie
 */
class eZIEImageFilterBrightness extends eZIEImageAction
{
    /**
     * Creates a brightness filter
     *
     * @param int $value Brightness value
     *
     * @return array( ezcImageFilter )
     */
    static function filter( $value = 0, $region = null )
    {
        return array(
            new ezcImageFilter(
                'brightness',
                array(
                    'value' => $value,
                    'region' => $region
                )
            )
        );
    }
}
?>
