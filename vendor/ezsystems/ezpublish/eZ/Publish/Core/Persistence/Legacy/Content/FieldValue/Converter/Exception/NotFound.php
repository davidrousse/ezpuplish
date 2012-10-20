<?php
/**
 * File containing the FieldValue Converter NotFound Exception class
 *
 * @copyright Copyright (C) 1999-2012 eZ Systems AS. All rights reserved.
 * @license http://ez.no/licenses/gnu_gpl GNU General Public License v2.0
 * @version 2012.9
 */

namespace eZ\Publish\Core\Persistence\Legacy\Content\FieldValue\Converter\Exception;
use eZ\Publish\Core\Base\Exceptions\NotFoundException;

/**
 * Exception thrown if no converter for a type was found
 */
class NotFound extends NotFoundException
{
    /**
     * Creates a new exception for $typeName
     *
     * @param mixed $typeName
     */
    public function __construct( $typeName )
    {
        parent::__construct(
            'eZ\\Publish\\SPI\\Persistence\\Content\\FieldValue\\Converter\\*',
            $typeName
        );
    }
}
