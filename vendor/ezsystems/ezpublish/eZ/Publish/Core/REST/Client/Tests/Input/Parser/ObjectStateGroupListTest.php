<?php
/**
 * File containing a ObjectStateGroupListTest class
 *
 * @copyright Copyright (C) 1999-2012 eZ Systems AS. All rights reserved.
 * @license http://ez.no/licenses/gnu_gpl GNU General Public License v2.0
 * @version 2012.9
 */

namespace eZ\Publish\Core\REST\Client\Tests\Input\Parser;

use eZ\Publish\Core\REST\Client\Input\Parser;

class ObjectStateGroupListTest extends BaseTest
{
    /**
     * Tests the parsing of ObjectStateGroupList
     */
    public function testParse()
    {
        $groupListParser = $this->getParser();

        $inputArray = array(
            'ObjectStateGroup'  => array(
                array( '_media-type' => 'application/vnd.ez.api.ObjectStateGroup+xml' ),
                array( '_media-type' => 'application/vnd.ez.api.ObjectStateGroup+xml' ),
            ),
        );

        $this->getParsingDispatcherMock()
            ->expects( $this->exactly( 2 ) )
            ->method( 'parse' )
            ->with(
                array( '_media-type' => 'application/vnd.ez.api.ObjectStateGroup+xml' ),
                'application/vnd.ez.api.ObjectStateGroup+xml'
            )
            ->will( $this->returnValue( 'foo' ) );

        $result = $groupListParser->parse( $inputArray, $this->getParsingDispatcherMock() );

        $this->assertEquals(
            array( 'foo', 'foo' ),
            $result
        );
    }

    /**
     * Gets the ObjectStateGroupList parser
     *
     * @return \eZ\Publish\Core\REST\Client\Input\Parser\ObjectStateGroupList;
     */
    protected function getParser()
    {
        return new Parser\ObjectStateGroupList();
    }
}
