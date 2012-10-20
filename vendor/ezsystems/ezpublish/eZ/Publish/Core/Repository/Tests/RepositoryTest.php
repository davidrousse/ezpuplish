<?php
/**
 * File containing the RepositoryTest class.
 *
 * @copyright Copyright (C) 1999-2012 eZ Systems AS. All rights reserved.
 * @license http://ez.no/licenses/gnu_gpl GNU General Public License v2.0
 * @version 2012.9
 */

namespace eZ\Publish\Core\Repository\Tests;

use eZ\Publish\Core\Repository\Tests\Service\Base as BaseServiceTest;

/**
 * @group repository
 */
class RepositoryTest extends BaseServiceTest
{
    /**
     * Generate \eZ\Publish\Core\Repository\Repository
     *
     * Makes it possible to inject different Io / Persistence handlers
     *
     * @return \eZ\Publish\Core\Repository\Repository
     */
    protected function getRepository()
    {
        self::markTestIncomplete( "This test has no tests" );
    }
}
