<?php
/**
 * File containing the PropertyReadOnlyException class
 *
 * @copyright Copyright (C) 1999-2012 eZ Systems AS. All rights reserved.
 * @license http://ez.no/licenses/gnu_gpl GNU General Public License v2.0
 * @version 2012.9
 */

namespace eZ\Publish\Core\REST\Client\Exceptions;

/**
 * This Exception is thrown on a write attempt in a read only property in a value object.
 *
 * @package eZ\Publish\API\Repository\Exceptions
 */
class PropertyReadOnlyException extends \eZ\Publish\API\Repository\Exceptions\PropertyReadOnlyException
{
    public function __construct( $propertyName )
    {
        parent::__construct(
            sprintf( 'Property "%s" is read-only.', $propertyName )
        );
    }
}
