<?php
/**
 * File containing the ImageStorage Gateway
 *
 * @copyright Copyright (C) 1999-2012 eZ Systems AS. All rights reserved.
 * @license http://ez.no/licenses/gnu_gpl GNU General Public License v2.0
 * @version 2012.9
 */

namespace eZ\Publish\Core\FieldType\Image\ImageStorage;
use eZ\Publish\SPI\Persistence\Content\VersionInfo,
    eZ\Publish\Core\FieldType\StorageGateway;

abstract class Gateway extends StorageGateway
{
    /**
     * Returns the node path string of $versionInfo
     *
     * @param VersionInfo $versionInfo
     * @return string
     */
    abstract public function getNodePathString( VersionInfo $versionInfo );

    /**
     * Stores a reference to the image in $path for $fieldId
     *
     * @param string $path
     * @param mixed $fieldId
     * @return void
     */
    abstract public function storeImageReference( $path, $fieldId );

    /**
     * Returns a the XML content stored for the given $fieldIds
     *
     * @parent int $versionNo
     * @param array $fieldIds
     * @return array
     */
    abstract public function getXmlForImages( $versionNo, array $fieldIds );

    /**
     * Removes all references from $fieldId to a path that starts with $path
     *
     * @param string $path
     * @parent int $versionNo
     * @param mixed $fieldId
     * @return void
     */
    abstract public function removeImageReferences( $path, $versionNo, $fieldId );

    /**
     * Returns the number of recorded references to the given $path
     *
     * @param string $path
     * @return int
     */
    abstract public function countImageReferences( $path );
}

