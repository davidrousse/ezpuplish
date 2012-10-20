<?php
/**
 * File containing the eZ\Publish\API\Repository\Values\Content\LanguageCreateStruct class.
 *
 * @copyright Copyright (C) 1999-2012 eZ Systems AS. All rights reserved.
 * @license http://ez.no/licenses/gnu_gpl GNU General Public License v2.0
 * @version 2012.9
 */

namespace eZ\Publish\API\Repository\Values\Content;

use eZ\Publish\API\Repository\Values\ValueObject;

/**
 * This class represents a value for creating a language
 */
class LanguageCreateStruct extends ValueObject
{

    /**
     * The languageCode code
     *
     * Needs to be a unique.
     *
     * @var string
     */
    public $languageCode;

    /**
     * Human readable name of the language
     *
     * @var string
     */
    public $name;

    /**
     * indicates if the language is enabled or not.
     *
     * @var boolean
     */
    public $enabled = true;
}

