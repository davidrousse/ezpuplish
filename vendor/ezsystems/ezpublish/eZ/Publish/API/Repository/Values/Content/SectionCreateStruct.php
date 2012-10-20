<?php
/**
 * File containing the eZ\Publish\API\Repository\Values\Content\SectionCreateStruct class.
 *
 * @copyright Copyright (C) 1999-2012 eZ Systems AS. All rights reserved.
 * @license http://ez.no/licenses/gnu_gpl GNU General Public License v2.0
 * @version 2012.9
 */

namespace eZ\Publish\API\Repository\Values\Content;

use eZ\Publish\API\Repository\Values\ValueObject;

/**
 * This class represents a section
 */
class SectionCreateStruct extends ValueObject
{

    /**
     * Unique string identifier of the section
     *
     * @required
     *
     * @var string
     */
    public $identifier;

    /**
     * Name of the section
     *
     * @required
     *
     * @var string
     */
    public $name;
}
