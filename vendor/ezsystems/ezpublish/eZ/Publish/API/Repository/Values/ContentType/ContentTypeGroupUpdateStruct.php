<?php
/**
 * File containing the eZ\Publish\API\Repository\Values\ContentType\ContentTypeGroupUpdateStruct class.
 *
 * @copyright Copyright (C) 1999-2012 eZ Systems AS. All rights reserved.
 * @license http://ez.no/licenses/gnu_gpl GNU General Public License v2.0
 * @version 2012.9
 */

namespace eZ\Publish\API\Repository\Values\ContentType;
use eZ\Publish\API\Repository\Values\ValueObject;

/**
 * This class is used for updating a content type group
 */
class ContentTypeGroupUpdateStruct extends ValueObject
{

    /**
     * Readable and unique string identifier of a group
     *
     * @var string
     */
    public $identifier;

    /**
     * if set this value overrides the current user as modifier
     *
     * @var mixed
     */
    public $modifierId = null;

    /**
     * If set this value overrides the current time for modified
     *
     * @var \DateTime
     */
    public $modificationDate = null;

    /**
     * if set the main language code is changed to this value
     *
     * @since 5.0
     *
     * @var string
     */
    public $mainLanguageCode;

    /**
     * If set this array of names with languageCode keys replace the complete name collection
     *
     * @var array an array of string
     */
    public $names;

    /**
     * If set this array of descriptions with languageCode keys replace the complete description collection
     *
     * @var array an array of string
     */
    public $descriptions;
}
