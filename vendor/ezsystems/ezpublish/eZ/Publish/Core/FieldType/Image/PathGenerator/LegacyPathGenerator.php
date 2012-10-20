<?php
/**
 * File containing the PathGenerator implementation compatible to the legacy
 * kernel.
 *
 * @copyright Copyright (C) 1999-2012 eZ Systems AS. All rights reserved.
 * @license http://ez.no/licenses/gnu_gpl GNU General Public License v2.0
 * @version 2012.9
 */

namespace eZ\Publish\Core\FieldType\Image\PathGenerator;
use eZ\Publish\Core\FieldType\Image\PathGenerator;

class LegacyPathGenerator extends PathGenerator
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
    public function getStoragePathForField( $fieldId, $versionNo, $languageCode, $nodePathString )
    {
        return sprintf(
            '%s%s-%s-%s',
            $nodePathString, // note that $nodePathString ends with a "/"
            $fieldId,
            $versionNo,
            $languageCode
        );
    }
}
