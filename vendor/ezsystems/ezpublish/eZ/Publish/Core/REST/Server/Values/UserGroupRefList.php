<?php
/**
 * File containing the UserGroupRefList class
 *
 * @copyright Copyright (C) 1999-2012 eZ Systems AS. All rights reserved.
 * @license http://ez.no/licenses/gnu_gpl GNU General Public License v2.0
 * @version 2012.9
 */

namespace eZ\Publish\Core\REST\Server\Values;

use eZ\Publish\Core\REST\Common\Value as RestValue;

/**
 * User group list view model
 */
class UserGroupRefList extends RestValue
{
    /**
     * User groups
     *
     * @var \eZ\Publish\Core\REST\Server\Values\RestUserGroup[]
     */
    public $userGroups;

    /**
     * Path which was used to fetch the list of user groups
     *
     * @var string
     */
    public $path;

    /**
     * User ID whose groups are the ones in the list
     *
     * @var mixed
     */
    public $userId;

    /**
     * Construct
     *
     * @param \eZ\Publish\Core\REST\Server\Values\RestUserGroup[] $userGroups
     * @param string $path
     * @param mixed $userId
     */
    public function __construct( array $userGroups, $path, $userId = null )
    {
        $this->userGroups = $userGroups;
        $this->path = $path;
        $this->userId = $userId;
    }
}
