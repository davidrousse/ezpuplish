<?php
/**
 * File containing the XmlTextTest class
 *
 * @copyright Copyright (C) 1999-2012 eZ Systems AS. All rights reserved.
 * @license http://ez.no/licenses/gnu_gpl GNU General Public License v2.0
 * @version 2012.9
 */

namespace eZ\Publish\Core\Persistence\Legacy\Tests\Content\FieldValue\Converter;
use eZ\Publish\SPI\Persistence\Content\FieldValue,
    eZ\Publish\Core\Persistence\Legacy\Content\StorageFieldValue,
    eZ\Publish\Core\Persistence\Legacy\Content\FieldValue\Converter\XmlText as XmlTextConverter,
    PHPUnit_Framework_TestCase;

/**
 * Test case for XmlText converter in Legacy storage
 *
 * @group fieldType
 * @group ezxmltext
 */
class XmlTextTest extends PHPUnit_Framework_TestCase
{
    /**
     * @var \eZ\Publish\Core\Persistence\Legacy\Content\FieldValue\Converter\XmlText
     */
    protected $converter;

    /**
     * @var string
     */
    private $xmlText;

    protected function setUp()
    {
        parent::setUp();
        $this->converter = new XmlTextConverter;
        $this->xmlText = <<<EOT
<?xml version="1.0" encoding="utf-8"?>
<section xmlns:image="http://ez.no/namespaces/ezpublish3/image/" xmlns:xhtml="http://ez.no/namespaces/ezpublish3/xhtml/" xmlns:custom="http://ez.no/namespaces/ezpublish3/custom/"><paragraph>Some paragraph content</paragraph></section>
EOT;
    }

    protected function tearDown()
    {
        unset( $this->xmlText );
        parent::tearDown();
    }

    /**
     * @covers \eZ\Publish\Core\Persistence\Legacy\Content\FieldValue\Converter\XmlText::toStorageValue
     */
    public function testToStorageValue()
    {
        $value = new FieldValue;
        $value->data = $this->xmlText;
        $storageFieldValue = new StorageFieldValue;

        $this->converter->toStorageValue( $value, $storageFieldValue );
        self::assertSame( $value->data, $storageFieldValue->dataText );
    }

    /**
     * @covers \eZ\Publish\Core\Persistence\Legacy\Content\FieldValue\Converter\XmlText::toFieldValue
     */
    public function testToFieldValue()
    {
        $storageFieldValue = new StorageFieldValue;
        $storageFieldValue->dataText = $this->xmlText;
        $fieldValue = new FieldValue;

        $this->converter->toFieldValue( $storageFieldValue, $fieldValue );
        self::assertSame( $storageFieldValue->dataText, $fieldValue->data );
    }
}
