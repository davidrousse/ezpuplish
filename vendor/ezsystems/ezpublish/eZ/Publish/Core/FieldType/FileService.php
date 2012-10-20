<?php
/**
 * File containing the FileService interface
 *
 * @copyright Copyright (C) 1999-2012 eZ Systems AS. All rights reserved.
 * @license http://ez.no/licenses/gnu_gpl GNU General Public License v2.0
 * @version 2012.9
 */

namespace eZ\Publish\Core\FieldType;

interface FileService
{
    /**
     * Store the local file identified by $sourcePath in a location that corresponds
     * to $storageIdentifier. Returns an $storageIdentifier again.
     *
     * @param string $sourcePath
     * @param string $storageIdentifier
     * @return string
     */
    public function storeFile( $sourcePath, $storageIdentifier );

    /**
     * Returns a hash of meta data for $storageIdentifier
     *
     * array(
     *  'width' => <int>,
     *  'height' => <int>,
     *  'mime' => <string>,
     * );
     *
     * @param string $storageIdentifier
     * @return array
     */
    public function getMetaData( $storageIdentifier );

    /**
     * Returns the file size of the file identified by $storageIdentifier
     *
     * @param string $storageIdentifier
     * @return int
     */
    public function getFileSize( $storageIdentifier );

    /**
     * Removes the path identified by $storageIdentifier, potentially
     * $recursive.
     *
     * Attemts to removed the path identified by $storageIdentifier. If
     * $storageIdentifier is a directory which is not empty and $recursive is
     * set to false, an exception is thrown. Attemting to remove a non
     * existing $storageIdentifier is silently ignored.
     *
     * @param string $storageIdentifier
     * @param bool $recursive
     * @return void
     * @throws \RuntimeException if children of $storageIdentifier exist and
     *                           $recursive is false
     * @throws \RuntimeException if $storageIdentifier could not be removed (most
     *                           likely permission issues)
     */
    public function remove( $storageIdentifier, $recursive = false );

    /**
     * Returns a storage identifier for the given $path
     *
     * The storage identifier is used to identify $path inside the storage
     * encapsulated by the file service.
     *
     * @param string $path
     * @return string
     */
    public function getStorageIdentifier( $path );

    /**
     * Returns is a file/directory with the given $storageIdentifier exists
     *
     * @param string $storageIdentifier
     * @return bool
     */
    public function exists( $storageIdentifier );
}
