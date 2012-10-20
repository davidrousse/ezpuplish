<?php
/**
 * File containing the FieldSettings class
 *
 * @copyright Copyright (C) 1999-2012 eZ Systems AS. All rights reserved.
 * @license http://ez.no/licenses/gnu_gpl GNU General Public License v2.0
 * @version 2012.9
 */

namespace eZ\Publish\Core\FieldType;
use ArrayObject,
    eZ\Publish\API\Repository\Exceptions\PropertyReadOnlyException,
    eZ\Publish\API\Repository\Exceptions\PropertyNotFoundException;

/**
 * Container for field type specific properties.
 *
 * @internal
 */
class FieldSettings extends ArrayObject
{
    /**
     * Only allows existing indexes to be updated.
     *
     * This is so that only settings specified by a field type can be set.
     *
     * @throws \eZ\Publish\API\Repository\Exceptions\PropertyReadOnlyException On non existing indexes
     * @param string|int $index
     * @param mixed $value
     * @return void
     */
    public function offsetSet( $index, $value )
    {
        if ( !parent::offsetExists( $index ) )
            throw new PropertyReadOnlyException( $index, __CLASS__ );

        parent::offsetSet( $index, $value );
    }

    /**
     * Returns value from internal array, identified by $index.
     *
     * @param string $index
     * @return mixed
     * @throws \eZ\Publish\API\Repository\Exceptions\PropertyNotFoundException If $index is not found
     */
    public function offsetGet( $index )
    {
        if ( !parent::offsetExists( $index ) )
            throw new PropertyNotFoundException( $index, __CLASS__ );

        return parent::offsetGet( $index );
    }
}
