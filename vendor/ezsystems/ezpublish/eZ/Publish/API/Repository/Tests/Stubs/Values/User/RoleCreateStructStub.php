<?php
/**
 * File containing the RoleCreateStructStub class
 *
 * @copyright Copyright (C) 1999-2012 eZ Systems AS. All rights reserved.
 * @license http://ez.no/licenses/gnu_gpl GNU General Public License v2.0
 * @version 2012.9
 */

namespace eZ\Publish\API\Repository\Tests\Stubs\Values\User;

use \eZ\Publish\API\Repository\Values\User\PolicyCreateStruct;
use \eZ\Publish\API\Repository\Values\User\RoleCreateStruct;

/**
 * Stubbed implementation of the {@link \eZ\Publish\API\Repository\Values\User\RoleCreateStruct}
 * class.
 *
 * @see \eZ\Publish\API\Repository\Values\User\RoleCreateStruct
 */
class RoleCreateStructStub extends RoleCreateStruct
{
    /**
     * @var \eZ\Publish\API\Repository\Values\User\PolicyCreateStruct[]
     */
    private $policies = array();

    /**
     * instanciates a role create class
     *
     * @param string $name
     */
    public function __construct( $name )
    {
        parent::__construct( array( 'identifier' => $name ) );
    }

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
     * @param \eZ\Publish\API\Repository\Values\User\PolicyCreateStruct $policyCreateStruct
     */
    public function addPolicy( PolicyCreateStruct $policyCreateStruct )
    {
        $this->policies[] = $policyCreateStruct;
    }
}
