<?php
/**
 * File contains: eZ\Publish\Core\Repository\Tests\Service\InMemory\IOTest class
 *
 * @copyright Copyright (C) 1999-2012 eZ Systems AS. All rights reserved.
 * @license http://ez.no/licenses/gnu_gpl GNU General Public License v2.0
 * @version 2012.9
 */

namespace eZ\Publish\Core\Repository\Tests\Service\InMemory;
use eZ\Publish\Core\Repository\Tests\Service\IOBase as BaseIOServiceTest;

/**
 * Test case for IO Service using InMemory storage class
 */
class IOTest extends BaseIOServiceTest
{
    /**
     * @return \PHPUnit_Extensions_PhptTestCase
     */
    protected function getFileUploadTest()
    {
        return new IOUploadPHPT();
    }

    protected function getRepository()
    {
        return Utils::getRepository();
    }
}
