<?php
/**
 * File containing the eZ\Publish\API\Repository\Exceptions\PropertyReadOnlyException class.
 *
 * @copyright Copyright (C) 1999-2012 eZ Systems AS. All rights reserved.
 * @license http://ez.no/licenses/gnu_gpl GNU General Public License v2.0
 * @version 2012.9
 */

namespace eZ\Publish\API\Repository\Exceptions;

use Exception;

/**
 * This Exception is thrown on a write attempt in a read only property in a value object.
 *
 * @package eZ\Publish\API\Repository\Exceptions
 */
class PropertyReadOnlyException extends Exception
{
    /**
     * Generates: Property '{$propertyName}' is readonly[ on class '{$className}']
     *
     * @param string $propertyName
     * @param string|null $className Optionally to specify class in abstract/parent classes
     * @param \Exception|null $previous
     */
    public function __construct( $propertyName, $className = null, Exception $previous = null )
    {
        if ( $className === null )
            parent::__construct( "Property '{$propertyName}' is readonly", 0, $previous );
        else
            parent::__construct( "Property '{$propertyName}' is readonly on class '{$className}'", 0, $previous );
    }
}
