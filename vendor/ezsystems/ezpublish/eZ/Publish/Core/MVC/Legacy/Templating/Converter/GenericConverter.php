<?php
/**
 * File containing the GenericConverter class.
 *
 * @copyright Copyright (C) 1999-2012 eZ Systems AS. All rights reserved.
 * @license http://ez.no/licenses/gnu_gpl GNU General Public License v2.0
 * @version 2012.9
 */

namespace eZ\Publish\Core\MVC\Legacy\Templating\Converter;

use eZ\Publish\Core\MVC\Legacy\Templating\LegacyAdapter;

/**
 * Generic converter.
 */
class GenericConverter implements ObjectConverter
{
    /**
     * Converts $object to make it compatible with eZTemplate API.
     *
     * @param mixed $object
     * @return mixed|\eZ\Publish\Core\MVC\Legacy\Templating\LegacyCompatible
     * @throws \InvalidArgumentException If $object is actually not an object
     */
    public function convert( $object )
    {
        if ( !is_object( $object ) )
            throw new \InvalidArgumentException( 'Transferred object must be a real object. Got ' . gettype( $object ) );

        return new LegacyAdapter( $object );
    }
}
