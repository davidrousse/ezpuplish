<?php
/**
 * File contains: eZ\Publish\Core\Persistence\InMemory\Tests\Content\Type\CreateStructTest class
 *
 * @copyright Copyright (C) 1999-2012 eZ Systems AS. All rights reserved.
 * @license http://ez.no/licenses/gnu_gpl GNU General Public License v2.0
 * @version 2012.9
 */

namespace eZ\Publish\Core\Persistence\InMemory\Tests\Content\Type;
use eZ\Publish\SPI\Persistence\Content\Type\CreateStruct,
    eZ\Publish\SPI\Persistence\Content\Type\FieldDefinition;

/**
 * Test case for CreateStruct.
 */
class CreateStructTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @return void
     */
    public function testClone()
    {
        $cStruct = new CreateStruct();

        $cStruct->identifier = "foo";
        $cStruct->fieldDefinitions = array(
            new FieldDefinition(),
        );

        $cStructClone = clone $cStruct;

        $this->assertEquals(
            $cStruct->identifier,
            $cStructClone->identifier,
            "Identifier not cloned correctly"
        );
        $this->assertNotSame(
            $cStruct->fieldDefinitions[0],
            $cStructClone->fieldDefinitions[0],
            "Field definitions not cloned"
        );
        $this->assertEquals(
            $cStruct->fieldDefinitions[0],
            $cStructClone->fieldDefinitions[0],
            "Field definitions not clonedc correctly"
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
