<?php
/**
 * Contains UnauthorizedException Exception implementation
 *
 * @copyright Copyright (C) 1999-2012 eZ Systems AS. All rights reserved.
 * @license http://ez.no/licenses/gnu_gpl GNU General Public License v2.0
 * @version 2012.9
 */

namespace eZ\Publish\Core\Base\Exceptions;
use eZ\Publish\API\Repository\Exceptions\UnauthorizedException as APIUnauthorizedException,
    Exception;

/**
 * UnauthorizedException Exception implementation
 *
 * Use:
 *   throw new UnauthorizedException( 'content', 'read', 42 );
 */
class UnauthorizedException extends APIUnauthorizedException implements Httpable
{
    /**
     * Generates: User does not have access to '{$function}' '{$module}'[ with identifier '{$identifier}']
     *
     * Example: User does not have access to 'read' 'content' with identifier '42'
     *
     * @param string $module The module name should be in sync with the name of the domain object in question
     * @param string $function
     * @param string|null $identifier
     * @param \Exception|null $previous
     */
    public function __construct( $module, $function, array $properties = null, Exception $previous = null )
    {
        $identificationString = '';
        if ( $properties !== null )
        {
            foreach ( $properties as $name => $value )
            {
                $identificationString .= $identificationString === '' ? ' with' : ' and';
                $identificationString .= " {$name} '{$value}'";
            }
        }

        parent::__construct(
            "User does not have access to '{$function}' '{$module}'" . $identificationString,
            self::UNAUTHORIZED,
            $previous
        );
    }
}
