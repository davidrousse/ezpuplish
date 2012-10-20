<?php
/**
 * File containing the eZ\Publish\Core\FieldType\XmlText\Converter interface
 *
 * @copyright Copyright (C) 1999-2012 eZ Systems AS. All rights reserved.
 * @license http://ez.no/licenses/gnu_gpl GNU General Public License v2.0
 * @version 2012.9
 */

namespace eZ\Publish\Core\FieldType\XmlText;

interface Converter
{
    /**
     * Convert $xmlString to or from internal representation
     *
     * @param string $xmlString
     * @return string
     */
    public function convert( $xmlString );
}
