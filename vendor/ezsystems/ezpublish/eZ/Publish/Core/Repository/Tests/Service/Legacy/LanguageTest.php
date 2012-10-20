<?php
/**
 * File contains: eZ\Publish\Core\Repository\Tests\Service\Legacy\LanguageTest class
 *
 * @copyright Copyright (C) 1999-2012 eZ Systems AS. All rights reserved.
 * @license http://ez.no/licenses/gnu_gpl GNU General Public License v2.0
 * @version 2012.9
 */

namespace eZ\Publish\Core\Repository\Tests\Service\Legacy;
use eZ\Publish\Core\Repository\Tests\Service\LanguageBase as BaseLanguageServiceTest;

/**
 * Test case for Language Service using Legacy storage class
 */
class LanguageTest extends BaseLanguageServiceTest
{
    protected function getRepository()
    {
        return Utils::getRepository();
    }
}
