<?php
/**
 * File containing the PathGenerator interface
 *
 * @copyright Copyright (C) 1999-2012 eZ Systems AS. All rights reserved.
 * @license http://ez.no/licenses/gnu_gpl GNU General Public License v2.0
 * @version 2012.9
 */

namespace eZ\Publish\Core\FieldType\BinaryBase;
use eZ\Publish\SPI\Persistence\Content\VersionInfo,
    eZ\Publish\SPI\Persistence\Content\Field;

abstract class PathGenerator
{
    abstract public function getStoragePathForField( Field $field, VersionInfo $versionInfo );
}
