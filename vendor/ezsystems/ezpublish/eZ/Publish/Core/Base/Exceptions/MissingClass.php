<?php
/**
 * Contains MissingClass Exception implementation
 *
 * @copyright Copyright (C) 1999-2012 eZ Systems AS. All rights reserved.
 * @license http://ez.no/licenses/gnu_gpl GNU General Public License v2.0
 * @version 2012.9
 */

namespace eZ\Publish\Core\Base\Exceptions;
use Exception,
    LogicException;

/**
 * MissingClass Exception implementation
 *
 * Use:
 *   throw new MissingClass( $className, 'field type' );
 *
 * @todo Add a exception type in API that uses Logic exception and change this to extend it
 */
class MissingClass extends LogicException
{
    /**
     * Generates: Could not find[ {$classType}] class '{$className}'
     *
     * @param string $className
     * @param string|null $classType Optional string to specify what kind of class this is
     * @param \Exception|null $previous
     */
    public function __construct( $className, $classType = null, Exception $previous = null )
    {
        if ( $classType === null )
            parent::__construct( "Could not find class '{$className}'", 0, $previous );
        else
            parent::__construct( "Could not find {$classType} class '{$className}'", 0, $previous );
    }
}
