<?php
/**
 * File containing a test class
 *
 * @copyright Copyright (C) 1999-2012 eZ Systems AS. All rights reserved.
 * @license http://ez.no/licenses/gnu_gpl GNU General Public License v2.0
 * @version 2012.9
 */

namespace eZ\Publish\Core\REST\Server\Tests\Output\ValueObjectVisitor;
use eZ\Publish\Core\REST\Common\Tests\Output\ValueObjectVisitorBaseTest;

use eZ\Publish\Core\REST\Server\Output\ValueObjectVisitor;
use eZ\Publish\Core\REST\Server\Values;
use eZ\Publish\Core\REST\Common;

class PermanentRedirectTest extends ValueObjectVisitorBaseTest
{
    /**
     * Test the PermanentRedirect visitor
     *
     * @return string
     */
    public function testVisit()
    {
        $visitor   = $this->getPermanentRedirectVisitor();
        $generator = $this->getGenerator();

        $generator->startDocument( null );

        $redirect = new Values\PermanentRedirect(
            '/some/redirect/uri',
            'Version'
        );

        $this->getVisitorMock()->expects( $this->once() )
            ->method( 'setStatus' )
            ->with( $this->equalTo( 301 ) );
        $this->getVisitorMock()->expects( $this->once() )
            ->method( 'setHeader' )
            ->with( $this->equalTo( 'Location' ), $this->equalTo( '/some/redirect/uri' ) );

        $visitor->visit(
            $this->getVisitorMock(),
            $generator,
            $redirect
        );

        $this->assertTrue( $generator->isEmpty() );
    }

    /**
     * Get the PermanentRedirect visitor
     *
     * @return \eZ\Publish\Core\REST\Server\Output\ValueObjectVisitor\PermanentRedirect
     */
    protected function getPermanentRedirectVisitor()
    {
        return new ValueObjectVisitor\PermanentRedirect(
            new Common\UrlHandler\eZPublish()
        );
    }
}
