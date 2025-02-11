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
use eZ\Publish\Core\REST\Common\Values\ContentObjectStates;
use eZ\Publish\Core\REST\Common;

class ContentObjectStatesTest extends ValueObjectVisitorBaseTest
{
    /**
     * Test the ContentObjectStates visitor
     *
     * @return string
     */
    public function testVisit()
    {
        $visitor   = $this->getContentObjectStatesVisitor();
        $generator = $this->getGenerator();

        $generator->startDocument( null );

        $stateList = new ContentObjectStates( array() );

        $visitor->visit(
            $this->getVisitorMock(),
            $generator,
            $stateList
        );

        $result = $generator->endDocument( null );

        $this->assertNotNull( $result );

        return $result;
    }

    /**
     * Test if result contains ContentObjectStates element
     *
     * @param string $result
     * @depends testVisit
     */
    public function testResultContainsContentObjectStatesElement( $result )
    {
        $this->assertTag(
            array(
                'tag' => 'ContentObjectStates',
            ),
            $result,
            'Invalid <ContentObjectStates> element.',
            false
        );
    }

    /**
     * Test if result contains ContentObjectStates element attributes
     *
     * @param string $result
     * @depends testVisit
     */
    public function testResultContainsContentObjectStatesAttributes( $result )
    {
        $this->assertTag(
            array(
                'tag' => 'ContentObjectStates',
                'attributes' => array(
                    'media-type' => 'application/vnd.ez.api.ContentObjectStates+xml',
                )
            ),
            $result,
            'Invalid <ContentObjectStates> attributes.',
            false
        );
    }

    /**
     * Get the ContentObjectStates visitor
     *
     * @return \eZ\Publish\Core\REST\Server\Output\ValueObjectVisitor\ContentObjectStates
     */
    protected function getContentObjectStatesVisitor()
    {
        return new ValueObjectVisitor\ContentObjectStates(
            new Common\UrlHandler\eZPublish()
        );
    }
}
