<?php
/**
 * File containing the eZ\Publish\Core\Repository\Values\User\RoleCreateStruct class.
 *
 * @copyright Copyright (C) 1999-2012 eZ Systems AS. All rights reserved.
 * @license http://ez.no/licenses/gnu_gpl GNU General Public License v2.0
 * @version 2012.9
 */

namespace eZ\Publish\Core\Repository\Values\User;
use eZ\Publish\API\Repository\Values\User\RoleCreateStruct as APIRoleCreateStruct,
    eZ\Publish\API\Repository\Values\User\PolicyCreateStruct as APIPolicyCreateStruct;

/**
 * This class is used to create a new role
 */
class RoleCreateStruct extends APIRoleCreateStruct
{
    /**
     * Policies associated with the role
     *
     * @var \eZ\Publish\API\Repository\Values\User\PolicyCreateStruct[]
     */
    protected $policies = array();

    /**
     * Returns policies associated with the role
     *
     * @return \eZ\Publish\API\Repository\Values\User\PolicyCreateStruct[]
     */
    public function getPolicies()
    {
        return $this->policies;
    }

    /**
     * Adds a policy to this role
     *
     * @param \eZ\Publish\API\Repository\Values\User\PolicyCreateStruct $policyCreate
     */
    public function addPolicy( APIPolicyCreateStruct $policyCreate )
    {
        $this->policies[] = $policyCreate;
    }
}
