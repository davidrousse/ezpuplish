<?php
/**
 * File containing the KeywordStorage Gateway
 *
 * @copyright Copyright (C) 1999-2012 eZ Systems AS. All rights reserved.
 * @license http://ez.no/licenses/gnu_gpl GNU General Public License v2.0
 * @version 2012.9
 */

namespace eZ\Publish\Core\FieldType\Keyword\KeywordStorage;
use eZ\Publish\SPI\Persistence\Content\Field,
    eZ\Publish\Core\FieldType\StorageGateway;

abstract class Gateway extends StorageGateway
{
    /**
     * @see \eZ\Publish\SPI\FieldType\FieldStorage::storeFieldData()
     */
    abstract public function storeFieldData( Field $field, $contentTypeID );

    /**
     * Sets the list of assigned keywords into $field->value->externalData
     *
     * @param Field $field
     * @return void
     */
    abstract public function getFieldData( Field $field );

    /**
     * Retrieve the ContentType ID for the given $field
     *
     * @param \eZ\Publish\SPI\Persistence\Content\Field $field
     * @return mixed
     */
    abstract public function getContentTypeID( Field $field );
}

