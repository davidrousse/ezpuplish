<?php
/**
 * File containing the PolicyList class
 *
 * @copyright Copyright (C) 1999-2012 eZ Systems AS. All rights reserved.
 * @license http://ez.no/licenses/gnu_gpl GNU General Public License v2.0
 * @version 2012.9
 */

namespace eZ\Publish\Core\REST\Server\Values;

use eZ\Publish\Core\REST\Common\Value as RestValue;

/**
 * Policy list view model
 */
class PolicyList extends RestValue
{
    /**
     * Policies
     *
     * @var \eZ\Publish\API\Repository\Values\User\Policy[]
     */
    public $policies;

    /**
     * Path which was used to fetch the list of policies
     *
     * @var string
     */
    public $path;

    /**
     * Construct
     *
     * @param \eZ\Publish\API\Repository\Values\User\Policy[] $policies
     * @param string $path
     */
    public function __construct( array $policies, $path )
    {
        $this->policies = $policies;
        $this->path = $path;
    }
}
