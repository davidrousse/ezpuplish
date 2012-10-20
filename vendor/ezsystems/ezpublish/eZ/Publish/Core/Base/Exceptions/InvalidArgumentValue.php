<?php
/**
 * Contains Invalid Argument Type Exception implementation
 *
 * @copyright Copyright (C) 1999-2012 eZ Systems AS. All rights reserved.
 * @license http://ez.no/licenses/gnu_gpl GNU General Public License v2.0
 * @version 2012.9
 */

namespace eZ\Publish\Core\Base\Exceptions;
use eZ\Publish\Core\Base\Exceptions\InvalidArgumentException,
    Exception;

/**
 * Invalid Argument Type Exception implementation
 *
 * @use: throw new InvalidArgument( 'nodes', 'array' );
 */
class InvalidArgumentValue extends InvalidArgumentException
{
    /**
     * Generates: "Argument '{$argumentName}' is invalid: '{$value}' is wrong value[ in class '{$className}']"
     *
     * @param string $argumentName
     * @param mixed $value
     * @param string|null $className Optionally to specify class in abstract/parent classes
     * @param \Exception|null $previous
     */
    public function __construct( $argumentName, $value, $className = null, Exception $previous = null )
    {
        parent::__construct(
            $argumentName,
            "'" . var_export( $value, true ) . "' is wrong value" . ( $className ? " in class '{$className}'" : "" ),
            $previous
        );
    }
}
