<?php
/**
 * File containing the LegacyBasedTestCase class.
 *
 * @copyright Copyright (C) 1999-2012 eZ Systems AS. All rights reserved.
 * @license http://ez.no/licenses/gnu_gpl GNU General Public License v2.0
 * @version 2012.9
 */

namespace eZ\Publish\Core\MVC\Legacy\Tests;

/**
 * Base test case for legacy based tests.
 */
abstract class LegacyBasedTestCase extends \PHPUnit_Framework_TestCase
{
    protected function setUp()
    {
        parent::setUp();
        if ( !isset( $_ENV['legacyKernel'] ) )
            self::markTestSkipped( 'Legacy kernel is needed to run this test.' );
    }

    /**
     * @return \eZ\Publish\Core\MVC\Legacy\Kernel
     */
    protected function getLegacyKernel()
    {
        return $_ENV['legacyKernel'];
    }
}
