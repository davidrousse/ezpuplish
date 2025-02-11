<?php
/**
 * File containing the eZ\Publish\API\Repository\Exceptions\BadStateException class.
 *
 * @copyright Copyright (C) 1999-2012 eZ Systems AS. All rights reserved.
 * @license http://ez.no/licenses/gnu_gpl GNU General Public License v2.0
 * @version 2012.9
 */

namespace eZ\Publish\API\Repository\Exceptions;

/**
 * This Exception is thrown if a feature has not been implemented
 * _intentionally_. The main prupose is the search handler, where some features 
 * are just not supported in the legacy search implementation.
 */
class NotImplementedException extends ForbiddenException
{
    /**
     * Generates: Intentionally not implemented: {$feature}
     *
     * @param string $propertyName
     * @param string|null $className Optionally to specify class in abstract/parent classes
     * @param \Exception|null $previous
     */
    public function __construct( $feature, $code = 0, \Exception $previous = null )
    {
        parent::__construct( "Intentionally not implemented: {$feature}", $code, $previous );
    }
}
