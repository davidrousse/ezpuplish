<?php
/**
 * File containing the eZ\Publish\API\Repository\Values\Content\Section class.
 *
 * @copyright Copyright (C) 1999-2012 eZ Systems AS. All rights reserved.
 * @license http://ez.no/licenses/gnu_gpl GNU General Public License v2.0
 * @version 2012.9
 */

namespace eZ\Publish\API\Repository\Values\Content;

use eZ\Publish\API\Repository\Values\ValueObject;

/**
 * This class represents a section
 *
 * @property-read mixed $id the id of the section
 * @property-read string $identifier the identifier of the section
 * @property-read string $name human readable name of the section
 */
class Section extends ValueObject
{
    /**
     * Id of the section
     *
     * @var mixed
     */
    protected $id;

    /**
     * Unique identifier of the section
     *
     * @var string
     */
    protected $identifier;

    /**
     * Name of the section
     *
     * @var string
     */
    protected $name;
}
