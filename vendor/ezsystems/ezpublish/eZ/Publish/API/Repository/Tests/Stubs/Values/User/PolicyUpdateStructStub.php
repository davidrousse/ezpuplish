<?php
/**
 * File containing the PolicyUpdateStructStub class
 *
 * @copyright Copyright (C) 1999-2012 eZ Systems AS. All rights reserved.
 * @license http://ez.no/licenses/gnu_gpl GNU General Public License v2.0
 * @version 2012.9
 */

namespace eZ\Publish\API\Repository\Tests\Stubs\Values\User;

use \eZ\Publish\API\Repository\Values\User\Limitation;
use \eZ\Publish\API\Repository\Values\User\PolicyUpdateStruct;

/**
 * Stubbed implementation of the {@link \eZ\Publish\API\Repository\Values\User\PolicyUpdateStruct}
 * class.
 *
 * @see \eZ\Publish\API\Repository\Values\User\PolicyUpdateStruct
 */
class PolicyUpdateStructStub extends PolicyUpdateStruct
{
    /**
     * @var \eZ\Publish\API\Repository\Values\User\Limitation[]
     */
    private $limitations;

    /**
     * Returns list of limitations added to policy
     *
     * @return \eZ\Publish\API\Repository\Values\User\Limitation[]
     */
    public function getLimitations()
    {
        return $this->limitations;
    }

    /**
     * Adds a limitation to the policy - if a Limitation exists with the same identifier
     * the existing limitation is replaced
     *
     * @param \eZ\Publish\API\Repository\Values\User\Limitation $limitation
     * @return void
     */
    public function addLimitation( Limitation $limitation )
    {
        $this->limitations[] = $limitation;
    }

}
