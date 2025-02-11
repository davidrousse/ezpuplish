<?php
/**
 * Contains BadConfiguration Exception implementation
 *
 * @copyright Copyright (C) 1999-2012 eZ Systems AS. All rights reserved.
 * @license http://ez.no/licenses/gnu_gpl GNU General Public License v2.0
 * @version 2012.9
 */

namespace eZ\Publish\Core\Base\Exceptions;
use Exception,
    LogicException;

/**
 * BadConfiguration Exception implementation
 *
 * Use:
 *   throw new BadConfiguration( "base\\[configuration]\\parsers", "could not parse configuration files" );
 *
 * @todo Add a exception type in API that uses Logic exception and change this to extend it
 */
class BadConfiguration extends LogicException
{
    /**
     * Generates: '$setting' setting is invalid[, $consequence]
     *
     * @param string $setting
     * @param string|null $consequence Optional string to explain consequence of configuration mistake
     * @param \Exception|null $previous
     */
    public function __construct( $setting, $consequence = null, Exception $previous = null )
    {
        if ( $consequence === null )
            parent::__construct( "'{$setting}' setting is invalid", 0, $previous );
        else
            parent::__construct( "'{$setting}' setting is invalid, {$consequence}", 0, $previous );
    }
}
