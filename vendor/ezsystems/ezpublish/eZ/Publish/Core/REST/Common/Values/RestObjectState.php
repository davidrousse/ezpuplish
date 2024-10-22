<?php
/**
 * File containing the RestObjectState class
 *
 * @copyright Copyright (C) 1999-2012 eZ Systems AS. All rights reserved.
 * @license http://ez.no/licenses/gnu_gpl GNU General Public License v2.0
 * @version 2012.9
 */

namespace eZ\Publish\Core\REST\Common\Values;

use eZ\Publish\API\Repository\Values\ObjectState\ObjectState;

use eZ\Publish\Core\REST\Common\Value as RestValue;

/**
 * This class wraps the object state with added groupId property
 */
class RestObjectState extends RestValue
{
    /**
     * Wrapped object state
     *
     * @var \eZ\Publish\API\Repository\Values\ObjectState\ObjectState
     */
    public $objectState;

    /**
     * Group ID to which wrapped state belongs
     *
     * @var mixed
     */
    public $groupId;

    /**
     * Constructor
     *
     * @param \eZ\Publish\API\Repository\Values\ObjectState\ObjectState $objectState
     * @param mixed $groupId
     */
    public function __construct( ObjectState $objectState, $groupId )
    {
        $this->objectState = $objectState;
        $this->groupId = $groupId;
    }
}
