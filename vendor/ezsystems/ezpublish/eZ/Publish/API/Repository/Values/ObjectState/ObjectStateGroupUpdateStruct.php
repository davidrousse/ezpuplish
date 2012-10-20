<?php
/**
 * File containing the ObjectStateGroupUpdateStruct class
 *
 * @copyright Copyright (C) 1999-2012 eZ Systems AS. All rights reserved.
 * @license http://ez.no/licenses/gnu_gpl GNU General Public License v2.0
 * @version 2012.9
 */

namespace eZ\Publish\API\Repository\Values\ObjectState;
use eZ\Publish\API\Repository\Values\ValueObject;

/**
 * This class represents a value for updating object state groups
 */
class ObjectStateGroupUpdateStruct extends ValueObject
{
    /**
     * Readable unique string identifier of a group
     *
     * @var string
     */
    public $identifier;

    /**
     * The default language code
     *
     * @var string
     */
    public $defaultLanguageCode;

    /**
     * An array of names with languageCode keys
     *
     * @var string[]
     */
    public $names;

    /**
     * An array of descriptions with languageCode keys
     *
     * @var string[]
     */
    public $descriptions;

}
