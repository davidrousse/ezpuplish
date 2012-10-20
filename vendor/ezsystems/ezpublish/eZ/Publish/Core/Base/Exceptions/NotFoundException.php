<?php
/**
 * Contains Not Found Exception implementation
 *
 * @copyright Copyright (C) 1999-2012 eZ Systems AS. All rights reserved.
 * @license http://ez.no/licenses/gnu_gpl GNU General Public License v2.0
 * @version 2012.9
 */

namespace eZ\Publish\Core\Base\Exceptions;
use eZ\Publish\API\Repository\Exceptions\NotFoundException as APINotFoundException,
    Exception;

/**
 * Not Found Exception implementation
 *
 * Use:
 *   throw new NotFound( 'Content', 42 );
 */
class NotFoundException extends APINotFoundException implements Httpable
{
    /**
     * Generates: Could not find '{$what}' with identifier '{$identifier}'
     *
     * @param string $what
     * @param mixed $identifier
     * @param \Exception|null $previous
     */
    public function __construct( $what, $identifier, Exception $previous = null )
    {
        parent::__construct(
            "Could not find '{$what}' with identifier '" .
            ( is_array( $identifier ) ? var_export( $identifier, true ) : $identifier ) .
            "'",
            self::NOT_FOUND,
            $previous
        );
    }
}
