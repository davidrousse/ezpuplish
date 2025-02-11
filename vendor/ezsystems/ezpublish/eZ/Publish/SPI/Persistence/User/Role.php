<?php
/**
 * File containing the Role class
 *
 * @copyright Copyright (C) 1999-2012 eZ Systems AS. All rights reserved.
 * @license http://ez.no/licenses/gnu_gpl GNU General Public License v2.0
 * @version 2012.9
 */

namespace eZ\Publish\SPI\Persistence\User;
use eZ\Publish\SPI\Persistence\ValueObject;

/**
 */
class Role extends ValueObject
{
    /**
     * ID of the user rule
     *
     * @var mixed
     */
    public $id;

    /**
     * Identifier of the role
     *
     * Legacy note: Maps to name in 4.x.
     *
     * @var string
     */
    public $identifier;

    /**
     * Name of the role
     *
     * @since 5.0
     * @var string[]
     */
    public $name;

    /**
     * Name of the role
     *
     * @since 5.0
     * @var string[]
     */
    public $description = array();

    /**
     * Policies associated with the role
     *
     * @var Policy[]
     */
    public $policies = array();

    /**
     * Contains an array of group IDs that has this role assigned.
     *
     * In legacy storage engine, these are the contentobject_id's in ezuser_role.
     * These id's can by the nature of legacy engine both point to a user group and a user,
     * but the latter is deprecated.
     *
     * @var mixed[] In current implementation, id's are contentId's
     */
    public $groupIds = array();
}
