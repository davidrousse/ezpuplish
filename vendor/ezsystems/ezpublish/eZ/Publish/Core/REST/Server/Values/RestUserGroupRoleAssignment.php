<?php
/**
 * File containing the RestUserGroupRoleAssignment class
 *
 * @copyright Copyright (C) 1999-2012 eZ Systems AS. All rights reserved.
 * @license http://ez.no/licenses/gnu_gpl GNU General Public License v2.0
 * @version 2012.9
 */

namespace eZ\Publish\Core\REST\Server\Values;

use eZ\Publish\API\Repository\Values\User\UserGroupRoleAssignment;
use eZ\Publish\Core\REST\Common\Value as RestValue;

/**
 * RestUserGroupRoleAssignment view model
 */
class RestUserGroupRoleAssignment extends RestValue
{
    /**
     * Role assignment
     *
     * @var \eZ\Publish\API\Repository\Values\User\UserGroupRoleAssignment
     */
    public $roleAssignment;

    /**
     * User group ID to which the role is assigned
     *
     * @var mixed
     */
    public $id;

    /**
     * Construct
     *
     * @param \eZ\Publish\API\Repository\Values\User\UserGroupRoleAssignment $roleAssignment
     * @param mixed $id
     */
    public function __construct( UserGroupRoleAssignment $roleAssignment, $id )
    {
        $this->roleAssignment = $roleAssignment;
        $this->id = $id;
    }
}
