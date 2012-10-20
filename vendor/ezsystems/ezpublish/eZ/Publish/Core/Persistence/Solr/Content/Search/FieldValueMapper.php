<?php
/**
 * File containing the Content Search handler class
 *
 * @copyright Copyright (C) 1999-2012 eZ Systems AS. All rights reserved.
 * @license http://ez.no/licenses/gnu_gpl GNU General Public License v2.0
 * @version 2012.9
 */

namespace eZ\Publish\Core\Persistence\Solr\Content\Search;

use eZ\Publish\SPI\Persistence\Content\Search\Field;

/**
 * Maps raw document field values to something Solr can index.
 */
abstract class FieldValueMapper
{
    /**
     * Check if field can be mapped
     *
     * @param Field $field
     * @return void
     */
    abstract public function canMap( Field $field );

    /**
     * Map field value to a proper Solr representation
     *
     * @param Field $field
     * @return void
     */
    abstract public function map( Field $field );
}

