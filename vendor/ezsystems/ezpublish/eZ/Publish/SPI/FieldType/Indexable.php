<?php
/**
 * File containing the FieldType Indexable interface
 *
 * @copyright Copyright (C) 1999-2012 eZ Systems AS. All rights reserved.
 * @license http://ez.no/licenses/gnu_gpl GNU General Public License v2.0
 * @version 2012.9
 */

namespace eZ\Publish\SPI\FieldType;

use eZ\Publish\SPI\Persistence\Content\Field;

/**
 * The field type interface which all field types have to implement to be
 * indexable by search backends.
 *
 * @package FieldTypeProviderInterface
 */
interface Indexable
{
    /**
     * Get index data for field for search backend
     *
     * @param Field $field
     * @return \eZ\Publish\SPI\Persistence\Content\Search\Field[]
     */
    public function getIndexData( Field $field );

    /**
     * Get index fied types for search backend
     *
     * @return \eZ\Publish\SPI\Persistence\Content\Search\FieldType[]
     */
    public function getIndexDefinition();
}

