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
class InvalidArgumentType extends InvalidArgumentException
{
    /**
     * Generates: "Argument '{$argumentName}' is invalid: expected value to be of type '{$expectedType}'[, got '{$value}']"
     *
     * @param string $argumentName
     * @param string $expectedType
     * @param mixed|null $value Optionally to output the type that was recived
     * @param \Exception|null $previous
     */
    public function __construct( $argumentName, $expectedType, $value = null, Exception $previous = null )
    {
        if ( $value === null )
            $valueString = '';
        else if ( is_object( $value ) )
            $valueString = ", got '". get_class( $value ) . "'";
        else
            $valueString = ", got '". gettype( $value ) . "'";

        parent::__construct(
            $argumentName,
            "expected value to be of type '{$expectedType}'" . $valueString,
            $previous
        );
    }
}
