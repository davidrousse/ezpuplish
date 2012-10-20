<?php
/**
 * File containing the CountryTest class
 *
 * @copyright Copyright (C) 1999-2012 eZ Systems AS. All rights reserved.
 * @license http://ez.no/licenses/gnu_gpl GNU General Public License v2.0
 * @version 2012.9
 */

namespace eZ\Publish\Core\FieldType\Tests;
use eZ\Publish\Core\FieldType\Country\Type as Country,
    eZ\Publish\Core\FieldType\Country\Value as CountryValue,
    ReflectionObject;

/**
 * @group fieldType
 * @group ezcountry
 * @todo Migrate to StandardizedFieldTypeTest
 */
class CountryTest extends FieldTypeTest
{
    /**
     * @var \eZ\Publish\Core\FieldType\Country\Type
     */
    protected $ft;

    public function setUp()
    {
        $this->markTestIncomplete( 'Country FieldType needs clarification and potentially refactoring.' );
        parent::setUp();
        $this->ft = new Country(
            array(
                "BE" => array(
                    "Name" => "Belgium",
                    "Alpha2" => "BE",
                    "Alpha3" => "BEL",
                    "IDC" => 32,
                ),
                "FR" => array(
                    "Name" => "France",
                    "Alpha2" => "FR",
                    "Alpha3" => "FRA",
                    "IDC" => 33,
                ),
                "NO" => array(
                    "Name" => "Norway",
                    "Alpha2" => "NO",
                    "Alpha3" => "NOR",
                    "IDC" => 47,
                ),
                "KP" => array(
                    "Name" => "Korea, Democratic People's Republic of",
                    "Alpha2" => "KP",
                    "Alpha3" => "PRK",
                    "IDC" => 850,
                ),
                "TF" => array(
                    "Name" => "French Southern Territories",
                    "Alpha2" => "TF",
                    "Alpha3" => "ATF",
                    "IDC" => 0,
                ),
                "CF" => array(
                    "Name" => "Central African Republic",
                    "Alpha2" => "CF",
                    "Alpha3" => "CAF",
                    "IDC" => 236,
                ),
            )
        );
    }

    /**
     * @covers \eZ\Publish\Core\FieldType\FieldType::getValidatorConfigurationSchema
     */
    public function testValidatorConfigurationSchema()
    {
        self::assertSame(
            array(),
            $this->ft->getValidatorConfigurationSchema(),
            "The validator configuration schema does not match what is expected."
        );
    }

    /**
     * @covers \eZ\Publish\Core\FieldType\FieldType::getSettingsSchema
     */
    public function testSettingsSchema()
    {
        self::assertSame(
            array(),
            $this->ft->getValidatorConfigurationSchema(),
            "The settings schema does not match what is expected."
        );
    }

    /**
     * @covers \eZ\Publish\Core\FieldType\Country\Type::acceptValue
     */
    public function testAcceptValueValidFormatSingle()
    {
        $ref = new ReflectionObject( $this->ft );
        $refMethod = $ref->getMethod( "acceptValue" );
        $refMethod->setAccessible( true );

        $value = new CountryValue( array( "Belgium" ) );
        self::assertSame( $value, $refMethod->invoke( $this->ft, $value ) );
    }

    /**
     * @covers \eZ\Publish\Core\FieldType\Country\Type::acceptValue
     */
    public function testAcceptValueValidFormatMultiple()
    {
        $ref = new ReflectionObject( $this->ft );
        $refMethod = $ref->getMethod( "acceptValue" );
        $refMethod->setAccessible( true );

        $value = new CountryValue( array( "Belgium", "Norway" ) );
        self::assertSame( $value, $refMethod->invoke( $this->ft, $value ) );
    }

    /**
     * @covers \eZ\Publish\Core\FieldType\Country\Type::toPersistenceValue
     */
    public function testToPersistenceValue()
    {
        $countries = array( "Belgium", "Norway" );
        $fieldValue = $this->ft->toPersistenceValue( new CountryValue( $countries ) );

        self::assertSame( $countries, $fieldValue->data );
    }

    /**
     * @covers \eZ\Publish\Core\FieldType\Country\Value::__construct
     */
    public function testBuildFieldValueWithParam()
    {
        $countries = array( "Belgium", "Norway" );
        $countriesData = array(
            "BE" => array(
                "Name" => "Belgium",
                "Alpha2" => "BE",
                "Alpha3" => "BEL",
                "IDC" => 32,
            ),
            "NO" => array(
                "Name" => "Norway",
                "Alpha2" => "NO",
                "Alpha3" => "NOR",
                "IDC" => 47,
            ),
        );
        $value = new CountryValue( $countries, $countriesData );
        self::assertSame(
            $countries,
            $value->values
        );
        self::assertSame(
            $countriesData,
            $value->data
        );
    }

    /**
     * @covers \eZ\Publish\Core\FieldType\Country\Value::__toString
     */
    public function testFieldValueToString()
    {
        $country = "Belgium";
        $value = new CountryValue( (array)$country );
        self::assertSame( $country, (string)$value );

        $value2 = new CountryValue( (array)((string)$value) );
        self::assertSame(
            array( "Belgium" ),
            $value2->values,
            "fromString() and __toString() must be compatible"
        );
    }

    /**
     * Tests creating countries
     *
     * @dataProvider providerForConstructorOK
     * @covers \eZ\Publish\Core\FieldType\Country\Type::buildValue
     */
    public function testConstructorCorrectValues( $value )
    {
        $this->assertInstanceOf( "eZ\\Publish\\Core\\FieldType\\Country\\Value", $this->ft->buildValue( $value ) );
    }

    public function providerForConstructorOK()
    {
        return array(
            array( null ),
            array( array() ),
            array( "Belgium" ),
            array( array( "Belgium" ) ),
            array( array( "BE" ) ),
            array( array( "BEL" ) ),
            array( array( "Belgium", "Norway", "France" ) ),
            array( array( "BE", "NO", "FR" ) ),
            array( array( "BEL", "NOR", "FRA" ) ),
            array(
                array(
                    "Korea, Democratic People's Republic of",
                    "French Southern Territories",
                    "Central African Republic",
                )
            ),
        );
    }

    /**
     * Tests validating a wrong value
     *
     * @dataProvider providerForConstructorKO
     * @expectedException \eZ\Publish\Core\FieldType\Country\Exception\InvalidValue
     * @expectedExceptionMessage is not a valid value country identifier
     * @covers \eZ\Publish\Core\FieldType\Country\Type::buildValue
     */
    public function testConstructorWrongValues( $value )
    {
        $this->assertInstanceOf( "eZ\\Publish\\Core\\FieldType\\Country\\Value", $this->ft->buildValue( $value ) );
    }

    public function providerForConstructorKO()
    {
        return array(
            array( "LegoLand" ),
            array( array( "Norway", "France", "LegoLand" ) ),
            array( array( "FR", "BE", "LE" ) ),
            array( array( "FRE", "BEL", "LEG" ) ),
        );
    }
}
