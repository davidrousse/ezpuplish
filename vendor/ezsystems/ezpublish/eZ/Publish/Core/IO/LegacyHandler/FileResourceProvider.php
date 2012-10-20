<?php
/**
 * File containing the FileResourceProvider interface.
 *
 * @copyright Copyright (C) 1999-2012 eZ Systems AS. All rights reserved.
 * @license http://ez.no/licenses/gnu_gpl GNU General Public License v2.0
 * @version 2012.9
 */

namespace eZ\Publish\Core\IO\LegacyHandler;

/**
 * This interface handles providing of a file resource based on a cluster handler / cluster file
 */

interface FileResourceProvider
{
    /**
     * Returns a file resource for $clusterFile
     * @param eZClusterFileHandlerInterface $clusterFile Note: no hinting as not all handlers implement the interface
     * @return resource
     */
    public function getResource( $clusterFile );
}
