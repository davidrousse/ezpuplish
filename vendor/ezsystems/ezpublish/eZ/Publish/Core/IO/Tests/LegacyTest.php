<?php
/**
 * File containing a Io Handler test
 *
 * @copyright Copyright (C) 1999-2012 eZ Systems AS. All rights reserved.
 * @license http://ez.no/licenses/gnu_gpl GNU General Public License v2.0
 * @version 2012.9
 */

namespace eZ\Publish\Core\IO\Tests;
use eZ\Publish\Core\IO\LegacyHandler as Legacy,
    eZ\Publish\Core\IO\Tests\Base as BaseHandlerTest,
    ezcBaseFile;

/**
 * Handler test
 */
class LegacyTest extends BaseHandlerTest
{
    protected $legacyPath;
    protected $originalDir;

    /**
     * @return \eZ\Publish\SPI\IO\Handler
     */
    protected function getIoHandler()
    {
        if ( !isset( $_ENV['legacyKernel'] ) )
        {
            self::markTestSkipped(
                'Legacy kernel is needed to run these tests. Please ensure that "legacyKernel" environment variable is properly set with a eZ\\Publish\\Core\\MVC\\Legacy\\Kernel instance'
            );
        }

        return new Legacy( $_ENV['legacyKernel'] );
    }

    public function setUp()
    {
        parent::setUp();
        $this->legacyPath = $_ENV['legacyPath'];
        $this->originalDir = getcwd();
    }

    protected function tearDown()
    {
        chdir( $this->legacyPath );
        if ( file_exists( 'var/test' ) )
        {
            ezcBaseFile::removeRecursive( 'var/test' );
        }
        chdir( $this->originalDir );
        parent::tearDown();
    }

    /**
     * Updating mtime isn't supported by the Legacy handler
     */
    public function testUpdateMtime()
    {
        self::markTestIncomplete( "Not supported by Legacy io handler, aka incomplete" );
    }

    /**
     * Updating ctime isn't supported by the Legacy handler
     */
    public function testUpdateCtime()
    {
        self::markTestIncomplete( "Not supported by Legacy io handler, aka incomplete" );
    }
}
