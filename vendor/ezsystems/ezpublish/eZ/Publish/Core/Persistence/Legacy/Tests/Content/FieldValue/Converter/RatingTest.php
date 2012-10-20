<?php
/**
 * File containing the RatingTest class
 *
 * @copyright Copyright (C) 1999-2012 eZ Systems AS. All rights reserved.
 * @license http://ez.no/licenses/gnu_gpl GNU General Public License v2.0
 * @version 2012.9
 */

namespace eZ\Publish\Core\Persistence\Legacy\Tests\Content\FieldValue\Converter;
use eZ\Publish\SPI\Persistence\Content\FieldValue,
    eZ\Publish\Core\Persistence\Legacy\Content\StorageFieldValue,
    eZ\Publish\Core\Persistence\Legacy\Content\StorageFieldDefinition,
    eZ\Publish\Core\Persistence\Legacy\Content\FieldValue\Converter\Rating as RatingConverter,
    eZ\Publish\SPI\Persistence\Content\Type\FieldDefinition as PersistenceFieldDefinition,
    PHPUnit_Framework_TestCase;

/**
 * Test case for Rating converter in Legacy storage
 */
class RatingTest extends PHPUnit_Framework_TestCase
{
    /**
     * @var \eZ\Publish\Core\Persistence\Legacy\Content\FieldValue\Converter\Rating
     */
    protected $converter;

    protected function setUp()
    {
        parent::setUp();
        $this->converter = new RatingConverter;
    }

    /**
     * @group fieldType
     * @group rating
     * @covers \eZ\Publish\Core\Persistence\Legacy\Content\FieldValue\Converter\Rating::toStorageValue
     */
    public function testToStorageValue()
    {
        $value = new FieldValue;
        $value->data = false;
        $value->sortKey = false;
        $storageFieldValue = new StorageFieldValue;

        $this->converter->toStorageValue( $value, $storageFieldValue );
        self::assertSame( null, $storageFieldValue->dataInt );
    }

    /**
     * @group fieldType
     * @group rating
     * @covers \eZ\Publish\Core\Persistence\Legacy\Content\FieldValue\Converter\Rating::toStorageValue
     */
    public function testToStorageValueDisabled()
    {
        $value = new FieldValue;
        $value->data = true;
        $value->sortKey = false;
        $storageFieldValue = new StorageFieldValue;

        $this->converter->toStorageValue( $value, $storageFieldValue );
        self::assertSame( 1, $storageFieldValue->dataInt );
    }

    /**
     * @group fieldType
     * @group rating
     * @covers \eZ\Publish\Core\Persistence\Legacy\Content\FieldValue\Converter\Rating::toFieldValue
     */
    public function testToFieldValue()
    {
        $storageFieldValue = new StorageFieldValue;
        $storageFieldValue->dataInt = null;
        $fieldValue = new FieldValue;

        $this->converter->toFieldValue( $storageFieldValue, $fieldValue );
        self::assertSame( false, $fieldValue->data );
    }

    /**
     * @group fieldType
     * @group rating
     * @covers \eZ\Publish\Core\Persistence\Legacy\Content\FieldValue\Converter\Rating::toFieldValue
     */
    public function testToFieldValueDisabled()
    {
        $storageFieldValue = new StorageFieldValue;
        $storageFieldValue->dataInt = 1;
        $fieldValue = new FieldValue;

        $this->converter->toFieldValue( $storageFieldValue, $fieldValue );
        self::assertSame( true, $fieldValue->data );
    }

    /**
     * @group fieldType
     * @group rating
     * @covers \eZ\Publish\Core\Persistence\Legacy\Content\FieldValue\Converter\Rating::toStorageFieldDefinition
     */
    public function testToStorageFieldDefinition()
    {
        $this->converter->toStorageFieldDefinition( new PersistenceFieldDefinition, new StorageFieldDefinition );
    }

    /**
     * @group fieldType
     * @group rating
     * @covers \eZ\Publish\Core\Persistence\Legacy\Content\FieldValue\Converter\Rating::toFieldDefinition
     */
    public function testToFieldDefinition()
    {
        $this->converter->toFieldDefinition( new StorageFieldDefinition, new PersistenceFieldDefinition );
    }
}
