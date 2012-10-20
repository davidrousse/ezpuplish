<?php
/**
 * File contains: eZ\Publish\Core\Persistence\Legacy\Tests\Content\SearchHandler/TransformationParserTest class
 *
 * @copyright Copyright (C) 1999-2012 eZ Systems AS. All rights reserved.
 * @license http://ez.no/licenses/gnu_gpl GNU General Public License v2.0
 * @version 2012.9
 */

namespace eZ\Publish\Core\Persistence\Legacy\Tests\Content\SearchHandler;
use eZ\Publish\Core\Persistence\Legacy\Tests\TestCase,
    eZ\Publish\Core\Persistence\Legacy\Content\Search;

/**
 * Test case for LocationHandlerTest
 */
class TransformationParserTest extends TestCase
{
    public static function getTestFiles()
    {
        return array_map(
            function ( $file )
            {
                return array( realpath( $file ) );
            },
            glob( __DIR__ . '/_fixtures/transformations/*.tr' )
        );
    }

    /**
     * @dataProvider getTestFiles
     */
    public function testParse( $file )
    {
        $parser = new Search\TransformationParser( self::getInstallationDir() );

        $fixture = include $file . '.result';
        $this->assertEquals(
            $fixture,
            $parser->parse( str_replace( self::getInstallationDir(), '', $file ) )
        );
    }
}

