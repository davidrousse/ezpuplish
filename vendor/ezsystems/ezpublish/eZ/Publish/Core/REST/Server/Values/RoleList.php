<?php
/**
 * File containing the RoleList class
 *
 * @copyright Copyright (C) 1999-2012 eZ Systems AS. All rights reserved.
 * @license http://ez.no/licenses/gnu_gpl GNU General Public License v2.0
 * @version 2012.9
 */

namespace eZ\Publish\Core\REST\Server\Values;

use eZ\Publish\Core\REST\Common\Value as RestValue;

/**
 * Role list view model
 */
class RoleList extends RestValue
{
    /**
     * Roles
     *
     * @var \eZ\Publish\API\Repository\Values\User\Role[]
     */
    public $roles;

    /**
     * Construct
     *
     * @param \eZ\Publish\API\Repository\Values\User\Role[] $roles
     */
    public function __construct( array $roles )
    {
        $this->roles = $roles;
    }
}
