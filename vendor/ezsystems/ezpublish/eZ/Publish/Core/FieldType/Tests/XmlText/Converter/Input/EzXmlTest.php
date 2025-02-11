<?php
/**
 * File containing the XmlText EzXml Converter test
 *
 * @copyright Copyright (C) 1999-2012 eZ Systems AS. All rights reserved.
 * @license http://ez.no/licenses/gnu_gpl GNU General Public License v2.0
 * @version 2012.9
 */

namespace eZ\Publish\Core\Repository\Tests\FieldType\XmlText\Converter\Input;

use eZ\Publish\Core\FieldType\XmlText\Converter\Input\EzXml as Converter,
    PHPUnit_Framework_TestCase,
    Exception;

class EzXmlTest extends PHPUnit_Framework_TestCase
{
    /**
     * @var \eZ\Publish\Core\FieldType\XmlText\Converter\Input
     */
    private $converter;

    public function setUp()
    {
        $this->converter = new Converter(
            __DIR__ . "/../../../../../../../Bundle/EzPublishCoreBundle/Resources/schemas/ezxml.xsd"
        );
    }

    /**
     * @dataProvider providerForTestConvertCorrect
     */
    public function testConvertCorrect( $xmlString )
    {
        $this->assertEquals( $xmlString, $this->converter->convert( $xmlString ) );
    }

    public function providerForTestConvertCorrect()
    {
        return array(
            array(
                '<?xml version="1.0" encoding="utf-8"?>
<section xmlns:image="http://ez.no/namespaces/ezpublish3/image/" xmlns:xhtml="http://ez.no/namespaces/ezpublish3/xhtml/" xmlns:custom="http://ez.no/namespaces/ezpublish3/custom/"><paragraph>&lt;test&gt;</paragraph></section>
',
            ),
        );
    }

    /**
     * @dataProvider providerForTestConvertIncorrect
     */
    public function testConvertIncorrect( $xmlString, $exceptionMessage )
    {
        try
        {
            $this->converter->convert( $xmlString );
        }
        catch ( \Exception $e )
        {
            $this->assertEquals( $exceptionMessage, $e->getMessage() );
            return;
        }

        $this->fail( "Expecting an Exception with message: " . $exceptionMessage );
    }

    public function providerForTestConvertIncorrect()
    {
        return array(
            array(
                '<?xml version="1.0" encoding="utf-8"?><section><wrongTag/></section>',
                "Element 'wrongTag': This element is not expected. Expected is one of ( section, paragraph, header ).",
            ),
            array(
                '<?xml version="1.0" encoding="utf-8"?><section><paragraph wrongAttribute="foo">Some content</paragraph>
<paragraph>
<table><tr></tr></table>
<link node_id="abc"><link object_id="123">This is a link</link></link>
</paragraph>
</section>',
                "Element 'paragraph', attribute 'wrongAttribute': The attribute 'wrongAttribute' is not allowed.
Element 'tr': Missing child element(s). Expected is one of ( th, td ).
Element 'link', attribute 'node_id': 'abc' is not a valid value of the atomic type 'xs:integer'.
Element 'link': This element is not expected. Expected is one of ( custom, strong, emphasize, embed, embed-inline ).",
            ),
        );
    }
}
