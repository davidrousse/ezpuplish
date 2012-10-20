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

class ResourceDeletedTest extends ValueObjectVisitorBaseTest
{
    /**
     * Test the ResourceDeleted visitor
     *
     * @return string
     */
    public function testVisit()
    {
        $visitor   = $this->getResourceDeletedVisitor();
        $generator = $this->getGenerator();

        $generator->startDocument( null );

        $resourceDeleted = new Values\ResourceDeleted();

        $this->getVisitorMock()->expects( $this->once() )
            ->method( 'setStatus' )
            ->with( $this->equalTo( 204 ) );

        $visitor->visit(
            $this->getVisitorMock(),
            $generator,
            $resourceDeleted
        );

        $this->assertTrue( $generator->isEmpty() );
    }

    /**
     * Get the ResourceDeleted visitor
     *
     * @return \eZ\Publish\Core\REST\Server\Output\ValueObjectVisitor\ResourceDeleted
     */
    protected function getResourceDeletedVisitor()
    {
        return new ValueObjectVisitor\ResourceDeleted(
            new Common\UrlHandler\eZPublish()
        );
    }
}
