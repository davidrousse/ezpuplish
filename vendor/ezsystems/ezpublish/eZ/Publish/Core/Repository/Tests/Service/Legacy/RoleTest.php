<?php
/**
 * File contains: eZ\Publish\Core\Repository\Tests\Service\Legacy\RoleTest class
 *
 * @copyright Copyright (C) 1999-2012 eZ Systems AS. All rights reserved.
 * @license http://ez.no/licenses/gnu_gpl GNU General Public License v2.0
 * @version 2012.9
 */

namespace eZ\Publish\Core\Repository\Tests\Service\Legacy;
use eZ\Publish\Core\Repository\Tests\Service\RoleBase as BaseRoleServiceTest;

/**
 * Test case for Role Service using Legacy storage class
 */
class RoleTest extends BaseRoleServiceTest
{
    protected function getRepository()
    {
        try
        {
            return Utils::getRepository();
        }
        catch ( \Exception $e )
        {
            $this->markTestIncomplete(  $e->getMessage() );
        }
    }
}
