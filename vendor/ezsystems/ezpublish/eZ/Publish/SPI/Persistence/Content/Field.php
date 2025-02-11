<?php
/**
 * File containing the (content) Field class
 *
 * @copyright Copyright (C) 1999-2012 eZ Systems AS. All rights reserved.
 * @license http://ez.no/licenses/gnu_gpl GNU General Public License v2.0
 * @version 2012.9
 */

namespace eZ\Publish\SPI\Persistence\Content;
use eZ\Publish\SPI\Persistence\ValueObject;

/**
 */
class Field extends ValueObject
{
    /**
     * Field ID
     *
     * @var mixed
     */
    public $id;

    /**
     * Corresponding field definition
     *
     * @var mixed
     */
    public $fieldDefinitionId;

    /**
     * Data type name.
     *
     * @var string
     */
    public $type;

    /**
     * Value of the field
     *
     * @var \eZ\Publish\SPI\Persistence\Content\FieldValue
     */
    public $value;

    /**
     * Language code of this Field
     *
     * @var string
     */
    public $languageCode;

    /**
     * @var int|null Null if not created yet
     * @todo Normally we would use a create struct here
     */
    public $versionNo;
}
