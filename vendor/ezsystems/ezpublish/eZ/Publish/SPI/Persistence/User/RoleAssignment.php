<?php
/**
 * File containing the RoleAssignment class
 *
 * @copyright Copyright (C) 1999-2012 eZ Systems AS. All rights reserved.
 * @license http://ez.no/licenses/gnu_gpl GNU General Public License v2.0
 * @version 2012.9
 */

namespace eZ\Publish\SPI\Persistence\User;
use eZ\Publish\SPI\Persistence\ValueObject;

/**
 */
class RoleAssignment extends ValueObject
{
    /**
     * The Role connected to this assignment
     *
     * @var \eZ\Publish\SPI\Persistence\User\Role
     */
    public $role;

    /**
     * The user or user group id
     *
     * @var mixed
     */
    public $contentId;

    /**
     * One of 'Subtree' or 'Section'
     *
     * @var string|null
     */
    public $limitationIdentifier;

    /**
     * The subtree paths or section ids.
     *
     * @var mixed[]|null
     */
    public $values;
}
