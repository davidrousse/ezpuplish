<?php
/**
 * File contains: eZ\Publish\Core\Repository\Tests\Service\InMemory\UrlAliasTest class
 *
 * @copyright Copyright (C) 1999-2012 eZ Systems AS. All rights reserved.
 * @license http://ez.no/licenses/gnu_gpl GNU General Public License v2.0
 * @version 2012.9
 */

namespace eZ\Publish\Core\Repository\Tests\Service\InMemory;
use eZ\Publish\Core\Repository\Tests\Service\UrlAliasBase as BaseUrlAliasTest;

/**
 * Test case for UrlAlias Service using InMemory storage class
 */
class UrlAliasTest extends BaseUrlAliasTest
{
    protected function getRepository()
    {
        return Utils::getRepository();
    }
}