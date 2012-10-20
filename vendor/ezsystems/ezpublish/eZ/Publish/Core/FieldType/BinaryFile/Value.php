<?php
/**
 * File containing the BinaryFile Value class
 *
 * @copyright Copyright (C) 1999-2012 eZ Systems AS. All rights reserved.
 * @license http://ez.no/licenses/gnu_gpl GNU General Public License v2.0
 * @version 2012.9
 */

namespace eZ\Publish\Core\FieldType\BinaryFile;
use eZ\Publish\Core\FieldType\BinaryBase\Value as BaseValue;

/**
 * Value for BinaryFile field type
 */
class Value extends BaseValue
{
    /**
     * Number of times the file has been downloaded through content/download module
     *
     * @var int
     */
    public $downloadCount = 0;
}
