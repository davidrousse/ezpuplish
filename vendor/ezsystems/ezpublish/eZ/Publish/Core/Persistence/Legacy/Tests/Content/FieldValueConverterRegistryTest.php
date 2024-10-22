<?php
/**
 * File contains: eZ\Publish\Core\Persistence\Legacy\Tests\Content\FieldValueConverterRegistryTest class
 *
 * @copyright Copyright (C) 1999-2012 eZ Systems AS. All rights reserved.
 * @license http://ez.no/licenses/gnu_gpl GNU General Public License v2.0
 * @version 2012.9
 */

namespace eZ\Publish\Core\Persistence\Legacy\Tests\Content;
use eZ\Publish\Core\Persistence\Legacy\Tests\TestCase,
    eZ\Publish\Core\Persistence\Legacy\Content\FieldValue\ConverterRegistry as Registry;

/**
 * Test case for FieldValue Converter Registry
 */
class FieldValueConverterRegistryTest extends TestCase
{
    /**
     * @return void
     * @covers eZ\Publish\Core\Persistence\Legacy\Content\FieldValue\ConverterRegistry::register
     */
    public function testRegister()
    {
        $converter = $this->getFieldValueConverterMock();
        $registry = new Registry( array( 'some-type' => $converter ) );

        $this->assertAttributeSame(
            array(
                'some-type' => $converter,
            ),
            'converterMap',
            $registry
        );
    }

    /**
     * @return void
     * @covers eZ\Publish\Core\Persistence\Legacy\Content\FieldValue\ConverterRegistry::getConverter
     */
    public function testGetStorage()
    {
        $converter = $this->getFieldValueConverterMock();
        $registry = new Registry( array( 'some-type' => $converter ) );

        $res = $registry->getConverter( 'some-type' );

        $this->assertSame(
            $converter,
            $res
        );
    }

    /**
     * @return void
     * @covers eZ\Publish\Core\Persistence\Legacy\Content\FieldValue\ConverterRegistry::getConverter
     * @covers eZ\Publish\Core\Persistence\Legacy\Content\FieldValue\Converter\Exception\NotFound
     * @expectedException eZ\Publish\Core\Persistence\Legacy\Content\FieldValue\Converter\Exception\NotFound
     */
    public function testGetNotFound()
    {
        $registry = new Registry( array() );

        $registry->getConverter( 'not-found' );
    }

    /**
     * Returns a mock for Storage
     *
     * @return Storage
     */
    protected function getFieldValueConverterMock()
    {
        return $this->getMock(
            'eZ\\Publish\\Core\\Persistence\\Legacy\\Content\\FieldValue\\Converter'
        );
    }

    /**
     * Returns the test suite with all tests declared in this class.
     *
     * @return \PHPUnit_Framework_TestSuite
     */
    public static function suite()
    {
        return new \PHPUnit_Framework_TestSuite( __CLASS__ );
    }
}
