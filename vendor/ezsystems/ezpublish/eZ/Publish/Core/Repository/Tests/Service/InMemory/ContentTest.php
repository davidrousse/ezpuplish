<?php
/**
 * File contains: eZ\Publish\Core\Repository\Tests\Service\InMemory\ContentTest class
 *
 * @copyright Copyright (C) 1999-2012 eZ Systems AS. All rights reserved.
 * @license http://ez.no/licenses/gnu_gpl GNU General Public License v2.0
 * @version 2012.9
 */

namespace eZ\Publish\Core\Repository\Tests\Service\InMemory;
use eZ\Publish\Core\Repository\Tests\Service\ContentBase as BaseContentServiceTest;

/**
 * Test case for Content Service using InMemory storage class
 */
class ContentTest extends BaseContentServiceTest
{
    protected function getRepository()
    {
        return Utils::getRepository();
    }
}
