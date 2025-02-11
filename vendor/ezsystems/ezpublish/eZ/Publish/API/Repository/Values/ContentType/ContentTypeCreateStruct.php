<?php
/**
 * File containing the eZ\Publish\API\Repository\Values\ContentType\ContentTypeCreateStruct class.
 *
 * @copyright Copyright (C) 1999-2012 eZ Systems AS. All rights reserved.
 * @license http://ez.no/licenses/gnu_gpl GNU General Public License v2.0
 * @version 2012.9
 */

namespace eZ\Publish\API\Repository\Values\ContentType;

use eZ\Publish\API\Repository\Values\ValueObject;
use eZ\Publish\API\Repository\Values\Content\Location;

/**
 * this clss is used for creating content types
 *
 * @property $fieldDefinitions the collection of field definitions
 */
abstract class ContentTypeCreateStruct extends ValueObject
{
    /**
     * String unique identifier of a type
     *
     * @required
     *
     * @var string
     */
    public $identifier;

    /**
     * Main language Code.
     *
     * @required
     *
     * @var string
     */
    public $mainLanguageCode;

    /**
     * The renote id
     *
     * @var string
     */
    public $remoteId;

    /**
     * URL alias schema
     *
     * @var string
     */
    public $urlAliasSchema;

    /**
     * Name schema
     *
     * @var string
     */
    public $nameSchema;

    /**
     * Determines if the type is a container
     *
     * @var boolean
     */
    public $isContainer = false;

    /**
     * Specifies which property the child locations should be sorted on by default when created
     *
     * Valid values are found at {@link Location::SORT_FIELD_*}
     *
     * @var mixed
     */
    public $defaultSortField = Location::SORT_FIELD_PUBLISHED;

    /**
     * Specifies whether the sort order should be ascending or descending by default when created
     *
     * Valid values are {@link Location::SORT_ORDER_*}
     *
     * @var mixed
     */
    public $defaultSortOrder = Location::SORT_ORDER_DESC;

    /**
     * if an instance of acontent type is created the always available flag is set
     * by default this this value.
     *
     * @var boolean
     */
    public $defaultAlwaysAvailable = true;

    /**
     * AN array of names with languageCode keys
     *
     * @reauired - at least one name in the main language is required
     *
     * @var array an array of string
     */
    public $names;

    /**
     * An array of descriptions with languageCode keys
     *
     * @var array an array of string
     */
    public $descriptions;

    /**
     * adds a new field definition
     *
     * @param FieldDefinitionCreateStruct $fieldDef
     */
    abstract public function addFieldDefinition( FieldDefinitionCreateStruct $fieldDef );

    /**
     * if set this value overrides the current user as creator
     * @var mixed
     */
    public $creatorId = null;

    /**
     * If set this value overrides the current time for creation
     * @var \DateTime
     */
    public $creationDate = null;
}
