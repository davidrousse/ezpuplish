<?php
/**
 * File contains: eZ\Publish\Core\Repository\Tests\Service\Legacy\NameSchemaTest class
 *
 * @copyright Copyright (C) 1999-2012 eZ Systems AS. All rights reserved.
 * @license http://ez.no/licenses/gnu_gpl GNU General Public License v2.0
 * @version 2012.9
 */

namespace eZ\Publish\Core\Repository\Tests\Service\InMemory;
use eZ\Publish\Core\Repository\Tests\Service\NameSchemaBase as BaseNameSchemaTest;

/**
 * Test case for NameSchema Service using InMemory storage class
 */
class NameSchemaTest extends BaseNameSchemaTest
{
    protected function getRepository()
    {
        return Utils::getRepository();
    }
}
