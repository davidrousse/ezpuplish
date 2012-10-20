<?php
/**
 * File containing the eZ\Publish\API\Repository\Values\User\UserGroupRoleAssignment class.
 *
 * @copyright Copyright (C) 1999-2012 eZ Systems AS. All rights reserved.
 * @license http://ez.no/licenses/gnu_gpl GNU General Public License v2.0
 * @version 2012.9
 */

namespace eZ\Publish\API\Repository\Values\User;

/**
 * This class represents a user group to role assignment
 * @property-read \eZ\Publish\API\Repository\Values\User\UserGroup $userGroup calls getUserGroup()
 */
abstract class UserGroupRoleAssignment extends RoleAssignment
{
    /**
     * returns the user group to which the role is assigned to
     *
     * @return \eZ\Publish\API\Repository\Values\User\UserGroup
     */
    abstract function getUserGroup();
}
