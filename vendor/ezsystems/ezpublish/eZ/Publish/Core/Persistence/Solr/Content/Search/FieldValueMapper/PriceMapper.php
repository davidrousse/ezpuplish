<?php
/**
 * File containing the Content Search handler class
 *
 * @copyright Copyright (C) 1999-2012 eZ Systems AS. All rights reserved.
 * @license http://ez.no/licenses/gnu_gpl GNU General Public License v2.0
 * @version 2012.9
 */

namespace eZ\Publish\Core\Persistence\Solr\Content\Search\FieldValueMapper;

use eZ\Publish\Core\Persistence\Solr\Content\Search\FieldValueMapper,
    eZ\Publish\SPI\Persistence\Content\Search\Field,
    eZ\Publish\SPI\Persistence\Content\Search\FieldType;

/**
 * Maps raw document field values to something Solr can index.
 */
class PriceMapper extends FieldValueMapper
{
    /**
     * Check if field can be mapped
     *
     * @param Field $field
     * @return void
     */
    public function canMap( Field $field )
    {
        return $field->type instanceof FieldType\PriceField;
    }

    /**
     * Map field value to a proper Solr representation
     *
     * @param Field $field
     * @return void
     */
    public function map( Field $field )
    {
        return (double) $field->value;
    }
}

