<?php
/**
 * File containing the eZ\Publish\Core\IO\Legacy\FileResourceProvider\eZFSFileHandler class.
 *
 * @copyright Copyright (C) 1999-2012 eZ Systems AS. All rights reserved.
 * @license http://ez.no/licenses/gnu_gpl GNU General Public License v2.0
 * @version 2012.9
 */

namespace eZ\Publish\Core\IO\LegacyHandler\FileResourceProvider;

use eZ\Publish\Core\IO\LegacyHandler\FileResourceProvider;

/**
 * This class provides file resource functionnality for a cluster file
 */

class eZFSFileHandler extends BaseHandler implements FileResourceProvider
{
    /**
     * Returns a read file resource for $clusterFile
     * @param eZClusterFileHandlerInterface $clusterFile Note: no hinting as not all handlers implement the interface
     * @return resource
     */
    public function getResource( $file )
    {
        $this->legacyKernel->enterLegacyRootDir();
        $fh = fopen( $file->path, 'rb' );
        $this->legacyKernel->leaveLegacyRootDir();

        return $fh;
    }
}
