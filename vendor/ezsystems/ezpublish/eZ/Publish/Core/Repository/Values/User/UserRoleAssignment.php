<?php
/**
 * File containing the eZ\Publish\Core\Repository\Values\User\UserRoleAssignment class.
 *
 * @copyright Copyright (C) 1999-2012 eZ Systems AS. All rights reserved.
 * @license http://ez.no/licenses/gnu_gpl GNU General Public License v2.0
 * @version 2012.9
 */

namespace eZ\Publish\Core\Repository\Values\User;

use eZ\Publish\API\Repository\Values\User\UserRoleAssignment as APIUserRoleAssignment;

/**
 * This class represents a user to role assignment
 */
class UserRoleAssignment extends APIUserRoleAssignment
{
    /**
     * the limitation of this role assignment
     *
     * @var \eZ\Publish\API\Repository\Values\User\Limitation\RoleLimitation|null
     */
    protected $limitation;

    /**
     * the role which is assigned to the user
     *
     * @var \eZ\Publish\API\Repository\Values\User\Role
     */
    protected $role;

    /**
     * user to which the role is assigned to
     *
     * @var \eZ\Publish\API\Repository\Values\User\User
     */
    protected $user;

    /**
     * returns the limitation of the user role assignment
     *
     * @return \eZ\Publish\API\Repository\Values\User\Limitation\RoleLimitation|null
     */
    public function getRoleLimitation()
    {
        return $this->limitation;
    }

    /**
     * returns the role to which the user is assigned to
     *
     * @return \eZ\Publish\API\Repository\Values\User\Role
     */
    public function getRole()
    {
        return $this->role;
    }

    /**
     * returns the user to which the role is assigned to
     *
     * @return \eZ\Publish\API\Repository\Values\User\User
     */
    public function getUser()
    {
        return $this->user;
    }
}
