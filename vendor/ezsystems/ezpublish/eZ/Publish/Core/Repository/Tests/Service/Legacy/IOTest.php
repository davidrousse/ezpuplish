<?php
/**
 * File contains: eZ\Publish\Core\Repository\Tests\Service\Legacy\IOTest class
 *
 * @copyright Copyright (C) 1999-2012 eZ Systems AS. All rights reserved.
 * @license http://ez.no/licenses/gnu_gpl GNU General Public License v2.0
 * @version 2012.9
 */

namespace eZ\Publish\Core\Repository\Tests\Service\Legacy;
use eZ\Publish\Core\Repository\Tests\Service\IOBase as BaseIOServiceTest;

/**
 * Test case for IO Service using Legacy storage class
 */
class IOTest extends BaseIOServiceTest
{
    protected function tearDown()
    {
        $legacyKernel = $_ENV['legacyKernel'];
        $legacyKernel->enterLegacyRootDir();
        if ( file_exists( 'var/test' ) )
        {
            \ezcBaseFile::removeRecursive( 'var/test' );
        }
        $legacyKernel->leaveLegacyRootDir();
        parent::tearDown();
    }

    /**
     * @return \PHPUnit_Extensions_PhptTestCase
     */
    protected function getFileUploadTest()
    {
        return new IOUploadPHPT();
    }

    protected function getRepository()
    {
        try
        {
            if ( !isset( $_ENV['legacyKernel'] ) )
            {
                self::markTestSkipped(
                    'Legacy kernel is needed to run these tests. Please ensure that "legacyKernel" environment variable is properly set with a eZ\\Publish\\Core\\MVC\\Legacy\\Kernel instance'
                );
            }

            return Utils::getRepository();
        }
        catch ( \Exception $e )
        {
            $this->markTestIncomplete(  $e->getMessage() );
        }
    }
}
