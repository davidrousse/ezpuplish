<?php
/**
 * File containing the PathGenerator base class
 *
 * @copyright Copyright (C) 1999-2012 eZ Systems AS. All rights reserved.
 * @license http://ez.no/licenses/gnu_gpl GNU General Public License v2.0
 * @version 2012.9
 */

namespace eZ\Publish\Core\FieldType\Image;

abstract class PathGenerator
{
    /**
     * Generates the storage path for the field identified by parameters
     *
     * Returns a relative storage path.
     *
     * @param mixed $fieldId
     * @param int $versionNo
     * @param strung $languageCode
     * @param string $nodePathString
     * @return string
     */
    abstract public function getStoragePathForField( $fieldId, $versionNo, $languageCode, $nodePathString );
}
