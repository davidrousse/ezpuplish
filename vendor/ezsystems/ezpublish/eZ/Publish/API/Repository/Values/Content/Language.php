<?php
/**
 * File containing the eZ\Publish\API\Repository\Values\Content\Language class.
 *
 * @copyright Copyright (C) 1999-2012 eZ Systems AS. All rights reserved.
 * @license http://ez.no/licenses/gnu_gpl GNU General Public License v2.0
 * @version 2012.9
 */

namespace eZ\Publish\API\Repository\Values\Content;

use eZ\Publish\API\Repository\Values\ValueObject;

/**
 * This class represents a language in the repository.
 *
 * @property-read mixed $id the language id
 * @property-read string $languageCode the language code in
 * @property-read string $name human readable name of the language
 * @property-read boolean $enabled indicates if the language is enabled or not.
 */
class Language extends ValueObject
{
    /**
     * The language id (auto generated)
     *
     * @var mixed
     */
    protected $id;

    /**
     * the languageCode code
     *
     * @var string
     */
    protected $languageCode;

    /**
     * Human readable name of the language
     *
     * @var string
     */
    protected $name;

    /**
     * indicates if the language is enabled or not.
     *
     * @var boolean
     */
    protected $enabled;
}
