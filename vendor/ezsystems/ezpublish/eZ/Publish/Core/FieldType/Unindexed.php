<?php
/**
 * File containing the UserStorage class
 *
 * @copyright Copyright (C) 1999-2012 eZ Systems AS. All rights reserved.
 * @license http://ez.no/licenses/gnu_gpl GNU General Public License v2.0
 * @version 2012.9
 */

namespace eZ\Publish\Core\FieldType;

use eZ\Publish\SPI\Persistence\Content\Field,
    eZ\Publish\SPI\FieldType\Indexable;

/**
 * Indexable definition for string field type
 */
class Unindexed implements Indexable
{
    /**
     * Get index data for field for search backend
     *
     * @param Field $field
     * @return \eZ\Publish\SPI\Persistence\Content\Search\Field[]
     */
    public function getIndexData( Field $field )
    {
        return array();
    }

    /**
     * Get index fied types for search backend
     *
     * @return \eZ\Publish\SPI\Persistence\Content\Search\FieldType[]
     */
    public function getIndexDefinition()
    {
        return array();
    }
}

