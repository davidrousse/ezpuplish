<?php
/**
 * File containing the TypeNotFound class
 *
 * @copyright Copyright (C) 1999-2012 eZ Systems AS. All rights reserved.
 * @license http://ez.no/licenses/gnu_gpl GNU General Public License v2.0
 * @version 2012.9
 */

namespace eZ\Publish\Core\Persistence\Legacy\Exception;
use eZ\Publish\Core\Base\Exceptions\NotFoundException;

/**
 * Exception thrown when a Type to be loaded is not found
 */
class TypeGroupNotFound extends NotFoundException
{
    /**
     * Creates a new exception for $typeId in $status;
     *
     * @param mixed $typeGroupId
     * @param mixed $status
     */
    public function __construct( $typeGroupId )
    {
        parent::__construct(
            'eZ\\Publish\\SPI\\Persistence\\Content\\Type\\Group',
            sprintf( 'ID: %s', $typeGroupId )
        );
    }
}
