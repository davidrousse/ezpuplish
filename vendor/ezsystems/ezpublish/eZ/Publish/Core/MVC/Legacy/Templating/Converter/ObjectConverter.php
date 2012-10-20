<?php
/**
 * File containing the ObjectConverter interface.
 *
 * @copyright Copyright (C) 1999-2012 eZ Systems AS. All rights reserved.
 * @license http://ez.no/licenses/gnu_gpl GNU General Public License v2.0
 * @version 2012.9
 */

namespace eZ\Publish\Core\MVC\Legacy\Templating\Converter;

/**
 * Interface for object converters.
 * The purpose of an object converter is to make objects compatible to eZ Publish legacy templates.
 */
interface ObjectConverter
{
    /**
     * Converts $object to make it compatible with eZTemplate API.
     *
     * @abstract
     * @param $object
     * @return mixed|\eZ\Publish\Core\MVC\Legacy\Templating\LegacyCompatible
     * @throws \InvalidArgumentException If $object is actually not an object
     */
    public function convert( $object );
}
