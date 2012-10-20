<?php
/**
 * File containing the eZ\Publish\API\Repository\Values\Content\Field class.
 *
 * @copyright Copyright (C) 1999-2012 eZ Systems AS. All rights reserved.
 * @license http://ez.no/licenses/gnu_gpl GNU General Public License v2.0
 * @version 2012.9
 */

namespace eZ\Publish\API\Repository\Values\Content;

use eZ\Publish\API\Repository\Values\ValueObject;

/**
 * This class represents a field of a content object
 *
 * @property-read mixed $id an internal id of the field
 * @property-read string $fieldDefIdentifier the field definition identifier
 * @property-read $value the value of the field
 * @property-read string $languageCode the language code of the field
 */
class Field extends ValueObject
{
    /**
     * The field id
     *
     * @todo may be not needed
     *
     * @var mixed
     */
    protected $id;

    /**
     *
     * The field definition identifier
     *
     * @var string
     */
    protected $fieldDefIdentifier;

    /**
     * a field type value or a value type which can be converted by the corresponding field type
     *
     * @var mixed
     */
    protected $value;

    /**
     * the language code
     *
     * @var string
     */
    protected $languageCode;
}
