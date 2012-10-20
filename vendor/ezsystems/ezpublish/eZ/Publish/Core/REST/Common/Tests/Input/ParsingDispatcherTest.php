<?php
/**
 * File containing the ParsingDispatcherTest class
 *
 * @copyright Copyright (C) 1999-2012 eZ Systems AS. All rights reserved.
 * @license http://ez.no/licenses/gnu_gpl GNU General Public License v2.0
 * @version 2012.9
 */

namespace eZ\Publish\Core\REST\Common\Tests\Input;

use eZ\Publish\Core\REST\Common;

/**
 * ParsingDispatcher test class
 */
class ParsingDispatcherTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @expectedException \eZ\Publish\Core\REST\Common\Exceptions\Parser
     */
    public function testParseMissingContentType()
    {
        $dispatcher = new Common\Input\ParsingDispatcher();

        $dispatcher->parse( array(), 'text/unknown' );
    }

    public function testParse()
    {
        $parser     = $this->getMock( '\\eZ\\Publish\\Core\\REST\\Common\\Input\\Parser' );
        $dispatcher = new Common\Input\ParsingDispatcher( array(
            'text/html' => $parser,
        ) );

        $parser
            ->expects( $this->at( 0 ) )
            ->method( 'parse' )
            ->with( array( 42 ), $dispatcher )
            ->will( $this->returnValue( 23 ) );

        $this->assertSame(
            23,
            $dispatcher->parse( array( 42 ), 'text/html' )
        );
    }

    public function testParseStripFormat()
    {
        $parser     = $this->getMock( '\\eZ\\Publish\\Core\\REST\\Common\\Input\\Parser' );
        $dispatcher = new Common\Input\ParsingDispatcher( array(
            'text/html' => $parser,
        ) );

        $parser
            ->expects( $this->at( 0 ) )
            ->method( 'parse' )
            ->with( array( 42 ), $dispatcher )
            ->will( $this->returnValue( 23 ) );

        $this->assertSame(
            23,
            $dispatcher->parse( array( 42 ), 'text/html+json' )
        );
    }
}
