<?php
/**
 * File containing the eZ\Publish\Core\Repository\Values\Content\ContentCreateStruct class.
 *
 * @copyright Copyright (C) 1999-2012 eZ Systems AS. All rights reserved.
 * @license http://ez.no/licenses/gnu_gpl GNU General Public License v2.0
 * @version 2012.9
 */

namespace eZ\Publish\Core\Repository\Values\Content;

use eZ\Publish\API\Repository\Values\Content\ContentCreateStruct as APIContentCreateStruct,
    eZ\Publish\API\Repository\Values\Content\Field;

/**
 * This class is used for creating a new content object
 * @property-write array $fields an array of {@link Field}
 */
class ContentCreateStruct extends APIContentCreateStruct
{
    /**
     * Field collection
     *
     * @var \eZ\Publish\API\Repository\Values\Content\Field[] $fields an array of {@link Field}
     */
    public $fields = array();

    /**
     * Adds a field to the field collection.
     *
     * This method could also be implemented by a magic setter so that
     * $fields[$fieldDefIdentifier][$language] = $value or without language $fields[$fieldDefIdentifier] = $value
     * is an equivalent call.
     *
     * @param string $fieldDefIdentifier the identifier of the field definition
     *
     * @param mixed $value Either a plain value which is understandable by the corresponding
     *                     field type or an instance of a Value class provided by the field type
     *
     * @param string|null $language If not given on a translatable field the initial language is used
     */
    public function setField( $fieldDefIdentifier, $value, $language = null )
    {
        if ( !isset( $language ) )
            $language = $this->mainLanguageCode;

        $this->fields[] = new Field(
            array(
                'fieldDefIdentifier' => $fieldDefIdentifier,
                'value' => $value,
                'languageCode' => $language
            )
        );
    }
}
