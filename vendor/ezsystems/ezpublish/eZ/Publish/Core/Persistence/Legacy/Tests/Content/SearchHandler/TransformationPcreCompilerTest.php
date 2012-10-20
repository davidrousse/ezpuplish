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
class TransformationPcreCompilerTest extends TestCase
{
    /**
     * Applies the transformations
     *
     * @param array $transformations
     * @param string $string
     * @return string
     */
    protected function applyTransformations( array $transformations, $string )
    {
        foreach ( $transformations as $rules )
        {
            foreach ( $rules as $rule )
            {
                $string = preg_replace_callback( $rule['regexp'], $rule['callback'], $string );
            }
        }

        return $string;
    }

    public function testCompileMap()
    {
        $parser = new Search\TransformationParser( self::getInstallationDir() );
        $compiler = new Search\TransformationPcreCompiler( new Search\Utf8Converter() );

        $rules = $compiler->compile(
            $parser->parseString(
                "map_test:\n" .
                "U+00e4 = \"ae\""
            )
        );

        $this->assertSame(
            'aeöü',
            $this->applyTransformations( $rules, 'äöü' )
        );
    }

    public function testCompileMapRemove()
    {
        $parser = new Search\TransformationParser( self::getInstallationDir() );
        $compiler = new Search\TransformationPcreCompiler( new Search\Utf8Converter() );

        $rules = $compiler->compile(
            $parser->parseString(
                "map_test:\n" .
                "U+00e4 = remove"
            )
        );

        $this->assertSame(
            'öü',
            $this->applyTransformations( $rules, 'äöü' )
        );
    }

    public function testCompileMapKeep()
    {
        $parser = new Search\TransformationParser( self::getInstallationDir() );
        $compiler = new Search\TransformationPcreCompiler( new Search\Utf8Converter() );

        $rules = $compiler->compile(
            $parser->parseString(
                "map_test:\n" .
                "U+00e4 = keep"
            )
        );

        $this->assertSame(
            'äöü',
            $this->applyTransformations( $rules, 'äöü' )
        );
    }

    public function testCompileMapAscii()
    {
        $parser = new Search\TransformationParser( self::getInstallationDir() );
        $compiler = new Search\TransformationPcreCompiler( new Search\Utf8Converter() );

        $rules = $compiler->compile(
            $parser->parseString(
                "map_test:\n" .
                "U+00e4 = 41"
            )
        );

        $this->assertSame(
            'Aöü',
            $this->applyTransformations( $rules, 'äöü' )
        );
    }

    public function testCompileMapUnicode()
    {
        $parser = new Search\TransformationParser( self::getInstallationDir() );
        $compiler = new Search\TransformationPcreCompiler( new Search\Utf8Converter() );

        $rules = $compiler->compile(
            $parser->parseString(
                "map_test:\n" .
                "U+00e4 = U+00e5"
            )
        );

        $this->assertSame(
            'åöü',
            $this->applyTransformations( $rules, 'äöü' )
        );
    }

    public function testCompileReplace()
    {
        $parser = new Search\TransformationParser( self::getInstallationDir() );
        $compiler = new Search\TransformationPcreCompiler( new Search\Utf8Converter() );

        $rules = $compiler->compile(
            $parser->parseString(
                "replace_test:\n" .
                "U+00e0 - U+00e6 = \"a\""
            )
        );

        $this->assertSame(
            'aaaaaaaçè',
            $this->applyTransformations( $rules, 'àáâãäåæçè' )
        );
    }

    public function testCompileTranspose()
    {
        $parser = new Search\TransformationParser( self::getInstallationDir() );
        $compiler = new Search\TransformationPcreCompiler( new Search\Utf8Converter() );

        $rules = $compiler->compile(
            $parser->parseString(
                "transpose_test:\n" .
                "U+00e0 - U+00e6 - 02"
            )
        );

        $this->assertSame(
            'Þßàáâãäçè',
            $this->applyTransformations( $rules, 'àáâãäåæçè' )
        );
    }

    public function testCompileTransposeAsciiLowercase()
    {
        $parser = new Search\TransformationParser( self::getInstallationDir() );
        $compiler = new Search\TransformationPcreCompiler( new Search\Utf8Converter() );

        $rules = $compiler->compile(
            $parser->parseString(
                "ascii_lowercase:\n" .
                "U+0041 - U+005A + 20"
            )
        );

        $this->assertSame(
            'hello world',
            $this->applyTransformations( $rules, 'Hello World' )
        );
    }

    public function testCompileTransposePlus()
    {
        $parser = new Search\TransformationParser( self::getInstallationDir() );
        $compiler = new Search\TransformationPcreCompiler( new Search\Utf8Converter() );

        $rules = $compiler->compile(
            $parser->parseString(
                "transpose_test:\n" .
                "U+00e0 - U+00e6 + 02"
            )
        );

        $this->assertSame(
            'âãäåæçèçè',
            $this->applyTransformations( $rules, 'àáâãäåæçè' )
        );
    }

    public function testCompileModuloTranspose()
    {
        $parser = new Search\TransformationParser( self::getInstallationDir() );
        $compiler = new Search\TransformationPcreCompiler( new Search\Utf8Converter() );

        $rules = $compiler->compile(
            $parser->parseString(
                "transpose_modulo_test:\n" .
                "U+00e0 - U+00e6 % 02 - 01"
            )
        );

        $this->assertSame(
            'ßááããååçè',
            $this->applyTransformations( $rules, 'àáâãäåæçè' )
        );
    }
}

