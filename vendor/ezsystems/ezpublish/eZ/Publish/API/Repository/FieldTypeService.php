<?php
/**
 * File containing the eZ\Publish\API\Repository\FieldTypeService class.
 *
 * @copyright Copyright (C) 1999-2012 eZ Systems AS. All rights reserved.
 * @license http://ez.no/licenses/gnu_gpl GNU General Public License v2.0
 * @version 2012.9
 * @package eZ\Publish\API\Repository
 */

namespace eZ\Publish\API\Repository;

/**
 * An implementation of this class provides access to FieldTypes
 *
 * @package eZ\Publish\API\Repository
 * @see eZ\Publish\API\Repository\FieldType
 */
interface FieldTypeService
{
    /**
     * Returns a list of all field types.
     *
     * @return \eZ\Publish\API\Repository\FieldType[]
     */
    public function getFieldTypes();

    /**
     * Returns the FieldType registered with the given identifier
     *
     * @param string $identifier
     * @return \eZ\Publish\API\Repository\FieldType
     * @throws \eZ\Publish\API\Repository\Exceptions\NotFoundException
     *         if there is no FieldType registered with $identifier
     */
    public function getFieldType( $identifier );

    /**
     * Returns if there is a FieldType registered under $identifier
     *
     * @param string $identifier
     * @return bool
     */
    public function hasFieldType( $identifier );
}
