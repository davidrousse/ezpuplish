<?php
/**
 * File contains: eZ\Publish\Core\Repository\Tests\Service\Legacy\FieldTypeTest class
 *
 * @copyright Copyright (C) 1999-2012 eZ Systems AS. All rights reserved.
 * @license http://ez.no/licenses/gnu_gpl GNU General Public License v2.0
 * @version 2012.9
 */

namespace eZ\Publish\Core\Repository\Tests\Service\Legacy;
use eZ\Publish\Core\Repository\Tests\Service\FieldTypeBase as BaseFieldTypeTest;

/**
 * Test case for FieldType Service using Legacy storage class
 */
class FieldTypeTest extends BaseFieldTypeTest
{
    protected function getRepository()
    {
        return Utils::getRepository();
    }
}
