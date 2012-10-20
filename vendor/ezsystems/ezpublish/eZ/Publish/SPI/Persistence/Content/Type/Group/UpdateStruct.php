<?php
/**
 * File containing the UpdateStruct class
 *
 * @copyright Copyright (C) 1999-2012 eZ Systems AS. All rights reserved.
 * @license http://ez.no/licenses/gnu_gpl GNU General Public License v2.0
 * @version 2012.9
 */

namespace eZ\Publish\SPI\Persistence\Content\Type\Group;
use eZ\Publish\SPI\Persistence\ValueObject;

/**
 */
class UpdateStruct extends ValueObject
{
    /**
     * Primary key
     *
     * @var mixed
     */
    public $id;

    /**
     * Name
     *
     * @since 5.0
     * @var string[]
     */
    public $name;

    /**
     * Description
     *
     * @since 5.0
     * @var string[]
     */
    public $description = array();

    /**
     * Readable string identifier of a group
     *
     * @var string
     */
    public $identifier;

    /**
     * Modified date (timestamp)
     *
     * @var int
     */
    public $modified;

    /**
     * Modifier user id
     *
     * @var mixed
     *
     */
    public $modifierId;
}
