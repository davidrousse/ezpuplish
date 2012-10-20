<?php
/**
 * Contains BadState Exception implementation
 *
 * @copyright Copyright (C) 1999-2012 eZ Systems AS. All rights reserved.
 * @license http://ez.no/licenses/gnu_gpl GNU General Public License v2.0
 * @version 2012.9
 */

namespace eZ\Publish\Core\Base\Exceptions;
use eZ\Publish\API\Repository\Exceptions\BadStateException as APIBadStateException,
    Exception;

/**
 * BadState Exception implementation
 *
 * @use: throw new BadState( 'nodes', 'array' );
 */
class BadStateException extends APIBadStateException
{
    /**
     * Generates: "Argument '{$argumentName}' has a bad state: {$whatIsWrong}"
     *
     * @param string $argumentName
     * @param string $whatIsWrong
     * @param \Exception|null $previous
     */
    public function __construct( $argumentName, $whatIsWrong, Exception $previous = null )
    {
        parent::__construct(
            "Argument '{$argumentName}' has a bad state: {$whatIsWrong}",
            0,
            $previous
        );
    }
}
