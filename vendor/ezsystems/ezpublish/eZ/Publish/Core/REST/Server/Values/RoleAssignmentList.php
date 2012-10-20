<?php
/**
 * File containing the RoleAssignmentList class
 *
 * @copyright Copyright (C) 1999-2012 eZ Systems AS. All rights reserved.
 * @license http://ez.no/licenses/gnu_gpl GNU General Public License v2.0
 * @version 2012.9
 */

namespace eZ\Publish\Core\REST\Server\Values;

use eZ\Publish\Core\REST\Common\Value as RestValue;

/**
 * RoleAssignment list view model
 */
class RoleAssignmentList extends RestValue
{
    /**
     * Role assignments
     *
     * @var \eZ\Publish\API\Repository\Values\User\RoleAssignment[]
     */
    public $roleAssignments;

    /**
     * User or user group ID to which the roles are assigned
     *
     * @var mixed
     */
    public $id;

    /**
     * Indicator if the role assignment is for user group
     *
     * @var bool
     */
    public $isGroupAssignment;

    /**
     * Construct
     *
     * @param \eZ\Publish\API\Repository\Values\User\RoleAssignment[] $roleAssignments
     * @param mixed $id
     * @param bool $isGroupAssignment
     */
    public function __construct( array $roleAssignments, $id, $isGroupAssignment = false )
    {
        $this->roleAssignments = $roleAssignments;
        $this->id = $id;
        $this->isGroupAssignment = $isGroupAssignment;
    }
}
