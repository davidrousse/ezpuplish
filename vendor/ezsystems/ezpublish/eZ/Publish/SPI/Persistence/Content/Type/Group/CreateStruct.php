<?php
/**
 * File containing the Content Type Group CreateStruct class
 *
 * @copyright Copyright (C) 1999-2012 eZ Systems AS. All rights reserved.
 * @license http://ez.no/licenses/gnu_gpl GNU General Public License v2.0
 * @version 2012.9
 */

namespace eZ\Publish\SPI\Persistence\Content\Type\Group;
use eZ\Publish\SPI\Persistence\ValueObject;

/**
 */
class CreateStruct extends ValueObject
{
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
     * Created date (timestamp)
     *
     * @var int
     */
    public $created;

    /**
     * Modified date (timestamp)
     *
     * @var int
     */
    public $modified;

    /**
     * Creator user id
     *
     * @var mixed
     */
    public $creatorId;

    /**
     * Modifier user id
     *
     * @var mixed
     *
     */
    public $modifierId;
}
