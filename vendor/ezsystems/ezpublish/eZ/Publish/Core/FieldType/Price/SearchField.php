<?php
/**
 * File containing the UserStorage class
 *
 * @copyright Copyright (C) 1999-2012 eZ Systems AS. All rights reserved.
 * @license http://ez.no/licenses/gnu_gpl GNU General Public License v2.0
 * @version 2012.9
 */

namespace eZ\Publish\Core\FieldType\Price;

use eZ\Publish\SPI\Persistence\Content\Field,
    eZ\Publish\SPI\FieldType\Indexable,
    eZ\Publish\SPI\Persistence\Content\Search;

/**
 * Indexable definition for string field type
 */
class SearchField implements Indexable
{
    /**
     * Get index data for field for search backend
     *
     * @param Field $field
     * @return \eZ\Publish\SPI\Persistence\Content\Search\Field[]
     */
    public function getIndexData( Field $field )
    {
        return array(
            new Search\Field(
                'value',
                // @TODO: Data is yet empty, this seems wrong, so we use the
                // sort field for now
                $field->value->sortKey['sort_key_int'] / 1000,
                new Search\FieldType\PriceField()
            ),
        );
    }

    /**
     * Get index fied types for search backend
     *
     * @return \eZ\Publish\SPI\Persistence\Content\Search\FieldType[]
     */
    public function getIndexDefinition()
    {
        return array(
            'value' => new Search\FieldType\PriceField(),
        );
    }
}

