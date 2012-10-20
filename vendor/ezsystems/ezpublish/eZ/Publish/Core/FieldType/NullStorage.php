<?php
/**
 * File containing the NullStorage class
 *
 * @copyright Copyright (C) 1999-2012 eZ Systems AS. All rights reserved.
 * @license http://ez.no/licenses/gnu_gpl GNU General Public License v2.0
 * @version 2012.9
 */

namespace eZ\Publish\Core\FieldType;
use eZ\Publish\SPI\FieldType\FieldStorage,
    eZ\Publish\SPI\Persistence\Content\VersionInfo,
    eZ\Publish\SPI\Persistence\Content\Field;

/**
 * Description of NullStorage
 */
class NullStorage implements FieldStorage
{
    /**
     * @see \eZ\Publish\SPI\FieldType\FieldStorage::storeFieldData()
     */
    public function storeFieldData( VersionInfo $versionInfo, Field $field, array $context )
    {
        return false;
    }

    /**
     * @see \eZ\Publish\SPI\FieldType\FieldStorage::getFieldData()
     */
    public function getFieldData( VersionInfo $versionInfo, Field $field, array $context )
    {
        return;
    }

    /**
     * @see \eZ\Publish\SPI\FieldType\FieldStorage::deleteFieldData()
     */
    public function deleteFieldData( VersionInfo $versionInfo, array $fieldIds, array $context )
    {
        return true;
    }

    /**
     * @see \eZ\Publish\SPI\FieldType\FieldStorage::hasFieldData()
     * @return bool
     */
    public function hasFieldData()
    {
        return false;
    }

    /**
     * @see \eZ\Publish\SPI\FieldType\FieldStorage::copyFieldData()
     */
    public function copyFieldData( VersionInfo $versionInfo, Field $field, array $context )
    {
        return;
    }

    /**
     * @see \eZ\Publish\SPI\FieldType\FieldStorage::getIndexData()
     */
    public function getIndexData( VersionInfo $versionInfo, Field $field, array $context )
    {
        return false;
    }
}
