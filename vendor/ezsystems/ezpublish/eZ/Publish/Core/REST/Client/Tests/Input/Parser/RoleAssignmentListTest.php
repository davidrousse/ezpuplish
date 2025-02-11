<?php
/**
 * File containing a RoleAssignmentListTest class
 *
 * @copyright Copyright (C) 1999-2012 eZ Systems AS. All rights reserved.
 * @license http://ez.no/licenses/gnu_gpl GNU General Public License v2.0
 * @version 2012.9
 */

namespace eZ\Publish\Core\REST\Client\Tests\Input\Parser;

use eZ\Publish\Core\REST\Client\Input\Parser;

class RoleAssignmentListTest extends BaseTest
{
    /**
     * Tests the parsing of RoleAssignmentList
     */
    public function testParse()
    {
        $roleAssignmentListParser = $this->getParser();

        $inputArray = array(
            'RoleAssignment'  => array(
                array( '_media-type' => 'application/vnd.ez.api.RoleAssignment+xml' ),
                array( '_media-type' => 'application/vnd.ez.api.RoleAssignment+xml' ),
            ),
        );

        $this->getParsingDispatcherMock()
            ->expects( $this->exactly( 2 ) )
            ->method( 'parse' )
            ->with(
                array( '_media-type' => 'application/vnd.ez.api.RoleAssignment+xml' ),
                'application/vnd.ez.api.RoleAssignment+xml'
            )
            ->will( $this->returnValue( 'foo' ) );

        $result = $roleAssignmentListParser->parse( $inputArray, $this->getParsingDispatcherMock() );

        $this->assertEquals(
            array( 'foo', 'foo' ),
            $result
        );
    }

    /**
     * Gets the RoleAssignmentList parser
     *
     * @return \eZ\Publish\Core\REST\Client\Input\Parser\RoleAssignmentList;
     */
    protected function getParser()
    {
        return new Parser\RoleAssignmentList();
    }
}
