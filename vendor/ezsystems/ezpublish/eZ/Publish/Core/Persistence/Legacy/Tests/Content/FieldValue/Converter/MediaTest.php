<?php
/**
 * File containing the MediaTest class
 *
 * @copyright Copyright (C) 1999-2012 eZ Systems AS. All rights reserved.
 * @license http://ez.no/licenses/gnu_gpl GNU General Public License v2.0
 * @version 2012.9
 */

namespace eZ\Publish\Core\Persistence\Legacy\Tests\Content\FieldValue\Converter;
use eZ\Publish\Core\FieldType\Media\Type as MediaType,
    eZ\Publish\Core\FieldType\Media\Value as MediaTypeValue,
    eZ\Publish\Core\FieldType\FieldSettings,
    eZ\Publish\SPI\Persistence\Content\FieldValue,
    eZ\Publish\Core\Persistence\Legacy\Content\StorageFieldValue,
    eZ\Publish\Core\Persistence\Legacy\Content\StorageFieldDefinition,
    eZ\Publish\Core\Persistence\Legacy\Content\FieldValue\Converter\Media as MediaTypeConverter,
    eZ\Publish\SPI\Persistence\Content\Type\FieldDefinition as PersistenceFieldDefinition,
    eZ\Publish\SPI\Persistence\Content\FieldTypeConstraints,
    eZ\Publish\Core\Repository\Repository,
    eZ\Publish\Core\IO\InMemoryHandler as InMemoryIOHandler,
    eZ\Publish\Core\Persistence\InMemory\Handler as InMemoryPersistenceHandler;

/**
 * Test case for MediaType converter in Legacy storage
 */
class MediaTest extends \PHPUnit_Framework_TestCase
{
    protected $converter;

    protected function setUp()
    {
        $this->converter = MediaTypeConverter::create();
    }

    /**
     * @group fieldType
     * @group ezmedia
     * @covers \eZ\Publish\Core\Persistence\Legacy\Content\FieldValue\Converter\Media::toStorageFieldDefinition
     */
    public function testToStorageFieldDefinition()
    {
        $storageFieldDef = new StorageFieldDefinition;

        $fieldTypeConstraints = new FieldTypeConstraints;
        $fieldTypeConstraints->validators = array(
            // Setting max file size to 1MB (1.048.576 bytes)
            'FileSizeValidator' => array( 'maxFileSize' => 1048576 )
        );
        $fieldTypeConstraints->fieldSettings = new FieldSettings(
            array(
                'mediaType' => MediaType::TYPE_HTML5_VIDEO
            )
        );

        $fieldDef = new PersistenceFieldDefinition(
            array(
                'fieldTypeConstraints' => $fieldTypeConstraints,
                'defaultValue' => null
            )
        );

        $this->converter->toStorageFieldDefinition( $fieldDef, $storageFieldDef );

        self::assertSame(
            $fieldDef->fieldTypeConstraints->validators['FileSizeValidator'],
            array( 'maxFileSize' => $storageFieldDef->dataInt1 )
        );
        self::assertSame(
            $fieldDef->fieldTypeConstraints->fieldSettings['mediaType'],
            $storageFieldDef->dataText1
        );
    }

    /**
     * @group fieldType
     * @group ezmedia
     * @covers \eZ\Publish\Core\Persistence\Legacy\Content\FieldValue\Converter\Media::toFieldDefinition
     */
    public function testToFieldDefinition()
    {
        $fieldDef = new PersistenceFieldDefinition;
        $storageDef = new StorageFieldDefinition(
            array(
                'dataInt1' => 1048576,
                'dataText1' => MediaType::TYPE_HTML5_VIDEO
            )
        );

        $this->converter->toFieldDefinition( $storageDef, $fieldDef );
        self::assertSame(
            array(
                'FileSizeValidator' => array( 'maxFileSize' => $storageDef->dataInt1 )
            ),
            $fieldDef->fieldTypeConstraints->validators
        );
        self::assertInstanceOf( 'eZ\\Publish\\Core\\FieldType\\FieldSettings', $fieldDef->fieldTypeConstraints->fieldSettings );
        self::assertSame(
            array( 'mediaType' => MediaType::TYPE_HTML5_VIDEO ),
            $fieldDef->fieldTypeConstraints->fieldSettings->getArrayCopy()
        );
    }
}
