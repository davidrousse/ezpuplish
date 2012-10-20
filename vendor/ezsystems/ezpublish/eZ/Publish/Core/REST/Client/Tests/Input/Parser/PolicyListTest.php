<?php
/**
 * File containing a PolicyListTest class
 *
 * @copyright Copyright (C) 1999-2012 eZ Systems AS. All rights reserved.
 * @license http://ez.no/licenses/gnu_gpl GNU General Public License v2.0
 * @version 2012.9
 */

namespace eZ\Publish\Core\REST\Client\Tests\Input\Parser;

use eZ\Publish\Core\REST\Client\Input\Parser;

class PolicyListTest extends BaseTest
{
    /**
     * Tests the parsing of policy list
     */
    public function testParse()
    {
        $policyListParser = $this->getParser();

        $inputArray = array(
            'Policy'  => array(
                array( '_media-type' => 'application/vnd.ez.api.Policy+xml' ),
                array( '_media-type' => 'application/vnd.ez.api.Policy+xml' ),
            ),
        );

        $this->getParsingDispatcherMock()
            ->expects( $this->exactly( 2 ) )
            ->method( 'parse' )
            ->with(
                array( '_media-type' => 'application/vnd.ez.api.Policy+xml' ),
                'application/vnd.ez.api.Policy+xml'
            )
            ->will( $this->returnValue( 'foo' ) );

        $result = $policyListParser->parse( $inputArray, $this->getParsingDispatcherMock() );

        $this->assertEquals(
            array( 'foo', 'foo' ),
            $result
        );
    }

    /**
     * Gets the policy list parser
     *
     * @return \eZ\Publish\Core\REST\Client\Input\Parser\PolicyList;
     */
    protected function getParser()
    {
        return new Parser\PolicyList();
    }
}
