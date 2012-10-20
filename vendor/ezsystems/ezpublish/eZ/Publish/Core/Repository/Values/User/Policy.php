<?php
/**
 * File containing the eZ\Publish\Core\Repository\Values\User\Policy class.
 *
 * @copyright Copyright (C) 1999-2012 eZ Systems AS. All rights reserved.
 * @license http://ez.no/licenses/gnu_gpl GNU General Public License v2.0
 * @version 2012.9
 */

namespace eZ\Publish\Core\Repository\Values\User;

use eZ\Publish\API\Repository\Values\User\Policy as APIPolicy;

/**
 * This class represents a policy value
 */
class Policy extends APIPolicy
{
    /**
     * Limitations assigned to this policy
     *
     * @var \eZ\Publish\API\Repository\Values\User\Limitation[]
     */
    protected $limitations = array();

    /**
     * Returns the list of limitations for this policy
     *
     * @return \eZ\Publish\API\Repository\Values\User\Limitation[]
     */
    public function getLimitations()
    {
        return $this->limitations;
    }
}
