<?php
/**
 * File containing a LocationListTest class
 *
 * @copyright Copyright (C) 1999-2012 eZ Systems AS. All rights reserved.
 * @license http://ez.no/licenses/gnu_gpl GNU General Public License v2.0
 * @version 2012.9
 */

namespace eZ\Publish\Core\REST\Client\Tests\Input\Parser;

use eZ\Publish\Core\REST\Client\Input\Parser;

class LocationListTest extends BaseTest
{
    /**
     * Tests the parsing of location list
     */
    public function testParse()
    {
        $locationListParser = $this->getParser();

        $inputArray = array(
            'Location'  => array(
                array( '_media-type' => 'application/vnd.ez.api.Location+xml' ),
                array( '_media-type' => 'application/vnd.ez.api.Location+xml' ),
            ),
        );

        $this->getParsingDispatcherMock()
            ->expects( $this->exactly( 2 ) )
            ->method( 'parse' )
            ->with(
                array( '_media-type' => 'application/vnd.ez.api.Location+xml' ),
                'application/vnd.ez.api.Location+xml'
            )
            ->will( $this->returnValue( 'foo' ) );

        $result = $locationListParser->parse( $inputArray, $this->getParsingDispatcherMock() );

        $this->assertEquals(
            array( 'foo', 'foo' ),
            $result
        );
    }

    /**
     * Gets the location list parser
     *
     * @return \eZ\Publish\Core\REST\Client\Input\Parser\LocationList;
     */
    protected function getParser()
    {
        return new Parser\LocationList();
    }
}
