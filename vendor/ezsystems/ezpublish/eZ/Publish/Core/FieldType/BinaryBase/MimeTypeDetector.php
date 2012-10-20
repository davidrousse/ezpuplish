<?php
/**
 * File containing the MimeTypeDetector interface
 *
 * @copyright Copyright (C) 1999-2012 eZ Systems AS. All rights reserved.
 * @license http://ez.no/licenses/gnu_gpl GNU General Public License v2.0
 * @version 2012.9
 */

namespace eZ\Publish\Core\FieldType\BinaryBase;

interface MimeTypeDetector
{
    /**
     * Returns the MIME type of the file identified by $path
     *
     * @param string $path
     * @return string
     */
    public function getMimeType( $path );
}
