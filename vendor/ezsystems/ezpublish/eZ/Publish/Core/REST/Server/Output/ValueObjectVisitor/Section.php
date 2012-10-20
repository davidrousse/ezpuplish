<?php
/**
 * File containing the Section ValueObjectVisitor class
 *
 * @copyright Copyright (C) 1999-2012 eZ Systems AS. All rights reserved.
 * @license http://ez.no/licenses/gnu_gpl GNU General Public License v2.0
 * @version 2012.9
 */

namespace eZ\Publish\Core\REST\Server\Output\ValueObjectVisitor;

use eZ\Publish\Core\REST\Common\Output\ValueObjectVisitor;
use eZ\Publish\Core\REST\Common\Output\Generator;
use eZ\Publish\Core\REST\Common\Output\Visitor;

/**
 * Section value object visitor
 */
class Section extends ValueObjectVisitor
{
    /**
     * Visit struct returned by controllers
     *
     * @param \eZ\Publish\Core\REST\Common\Output\Visitor $visitor
     * @param \eZ\Publish\Core\REST\Common\Output\Generator $generator
     * @param \eZ\Publish\API\Repository\Values\Content\Section $data
     */
    public function visit( Visitor $visitor, Generator $generator, $data )
    {
        $generator->startObjectElement( 'Section' );
        $visitor->setHeader( 'Content-Type', $generator->getMediaType( 'Section' ) );
        $visitor->setHeader( 'Accept-Patch', $generator->getMediaType( 'SectionInput' ) );

        $generator->startAttribute(
            'href',
            $this->urlHandler->generate( 'section', array( 'section' => $data->id ) )
        );
        $generator->endAttribute( 'href' );

        $generator->startValueElement( 'sectionId', $data->id );
        $generator->endValueElement( 'sectionId' );

        $generator->startValueElement( 'identifier', $data->identifier );
        $generator->endValueElement( 'identifier' );

        $generator->startValueElement( 'name', $data->name );
        $generator->endValueElement( 'name' );

        $generator->endObjectElement( 'Section' );
    }
}
