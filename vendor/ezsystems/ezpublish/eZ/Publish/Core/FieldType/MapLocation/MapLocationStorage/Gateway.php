<?php
/**
 * File containing the MapLocationStorage Gateway
 *
 * @copyright Copyright (C) 1999-2012 eZ Systems AS. All rights reserved.
 * @license http://ez.no/licenses/gnu_gpl GNU General Public License v2.0
 * @version 2012.9
 */

namespace eZ\Publish\Core\FieldType\MapLocation\MapLocationStorage;
use eZ\Publish\SPI\Persistence\Content\Field,
    eZ\Publish\SPI\Persistence\Content\VersionInfo,
    eZ\Publish\Core\FieldType\StorageGateway;

abstract class Gateway extends StorageGateway
{
    /**
     * Stores the data stored in the given $field
     *
     * Potentially rewrites data in $field and returns true, if the $field
     * needs to be updated in the database.
     *
     * @param VersionInfo $versionInfo
     * @param Field $field
     * @return bool If restoring of the internal field data is required
     */
    abstract public function storeFieldData( VersionInfo $versionInfo, Field $field );

    /**
     * Sets the loaded field data into $field->externalData.
     *
     * @param VersionInfo $versionInfo
     * @param Field $field
     * @return array
     */
    abstract public function getFieldData( VersionInfo $versionInfo, Field $field );

    /**
     * Deletes the data for all given $fieldIds
     *
     * @param VersionInfo $versionInfo
     * @param array $fieldIds
     * @return void
     */
    abstract public function deleteFieldData( VersionInfo $versionInfo, array $fieldIds );
}

