<?php
/**
 * File contains: eZ\Publish\Core\Persistence\Legacy\Tests\Content\SearchHandler/TransformationProcessorTest class
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
class TransformationProcessorTest extends TestCase
{
    public function getProcessor()
    {
        $processor = new Search\TransformationProcessor(
            new Search\TransformationParser( self::getInstallationDir() ),
            new Search\TransformationPcreCompiler( new Search\Utf8Converter() )
        );

        foreach ( glob( __DIR__ . '/_fixtures/transformations/*.tr' ) as $file )
        {
            $processor->loadRules( str_replace( self::getInstallationDir(), '', $file ) );
        }
        return $processor;
    }

    public function testSimpleNormalizationLowercase()
    {
        $processor = $this->getProcessor();

        $this->assertSame(
            'hello world!',
            $processor->transform( 'Hello World!', array( 'ascii_lowercase' ) )
        );
    }

    public function testSimpleNormalizationUppercase()
    {
        $processor = $this->getProcessor();

        $this->assertSame(
            'HELLO WORLD!',
            $processor->transform( 'Hello World!', array( 'ascii_uppercase' ) )
        );
    }

    /**
     * The main point of this test is, that it shows that all normalizations
     * available can be compiled without errors. The actual expectation is not
     * important.
     */
    public function testAllNormalizations()
    {
        $processor = $this->getProcessor();

        $this->assertSame(
            'HELLO WORLD.',
            $processor->transform( 'Hello World!' )
        );
    }
}

