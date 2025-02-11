<?php
/**
 * File containing a RoleListTest class
 *
 * @copyright Copyright (C) 1999-2012 eZ Systems AS. All rights reserved.
 * @license http://ez.no/licenses/gnu_gpl GNU General Public License v2.0
 * @version 2012.9
 */

namespace eZ\Publish\Core\REST\Client\Tests\Input\Parser;

use eZ\Publish\Core\REST\Client\Input\Parser;

class RoleListTest extends BaseTest
{
    /**
     * Tests the parsing of role list
     */
    public function testParse()
    {
        $roleListParser = $this->getParser();

        $inputArray = array(
            'Role'  => array(
                array( '_media-type' => 'application/vnd.ez.api.Role+xml' ),
                array( '_media-type' => 'application/vnd.ez.api.Role+xml' ),
            ),
        );

        $this->getParsingDispatcherMock()
            ->expects( $this->exactly( 2 ) )
            ->method( 'parse' )
            ->with(
                array( '_media-type' => 'application/vnd.ez.api.Role+xml' ),
                'application/vnd.ez.api.Role+xml'
            )
            ->will( $this->returnValue( 'foo' ) );

        $result = $roleListParser->parse( $inputArray, $this->getParsingDispatcherMock() );

        $this->assertEquals(
            array( 'foo', 'foo' ),
            $result
        );
    }

    /**
     * Gets the role list parser
     *
     * @return \eZ\Publish\Core\REST\Client\Input\Parser\RoleList;
     */
    protected function getParser()
    {
        return new Parser\RoleList();
    }
}
