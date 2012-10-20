<?php
/**
 * File containing the RoleAssignment class
 *
 * @copyright Copyright (C) 1999-2012 eZ Systems AS. All rights reserved.
 * @license http://ez.no/licenses/gnu_gpl GNU General Public License v2.0
 * @version 2012.9
 */

namespace eZ\Publish\Core\REST\Server\Values;

use \eZ\Publish\API\Repository\Values\User\Limitation\RoleLimitation;
use eZ\Publish\Core\REST\Common\Value as RestValue;

/**
 * RoleAssignment view model
 */
class RoleAssignment extends RestValue
{
    /**
     * Role ID
     *
     * @var mixed
     */
    public $roleId;

    /**
     * Role limitation
     *
     * @var \eZ\Publish\API\Repository\Values\User\Limitation\RoleLimitation
     */
    public $limitation;

    /**
     * Construct
     *
     * @param mixed $roleId
     * @param \eZ\Publish\API\Repository\Values\User\Limitation\RoleLimitation $limitation
     */
    public function __construct( $roleId, RoleLimitation $limitation = null )
    {
        $this->roleId = $roleId;
        $this->limitation = $limitation;
    }
}
