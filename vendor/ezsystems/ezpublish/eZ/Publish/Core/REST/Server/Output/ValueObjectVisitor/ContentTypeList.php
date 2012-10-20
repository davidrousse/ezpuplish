<?php
/**
 * File containing the ContentTypeList ValueObjectVisitor class
 *
 * @copyright Copyright (C) 1999-2012 eZ Systems AS. All rights reserved.
 * @license http://ez.no/licenses/gnu_gpl GNU General Public License v2.0
 * @version 2012.9
 */

namespace eZ\Publish\Core\REST\Server\Output\ValueObjectVisitor;

use eZ\Publish\Core\REST\Common\Output\ValueObjectVisitor;
use eZ\Publish\Core\REST\Common\Output\Generator;
use eZ\Publish\Core\REST\Common\Output\Visitor;

use eZ\Publish\Core\REST\Server\Values;

/**
 * ContentTypeList value object visitor
 */
class ContentTypeList extends ValueObjectVisitor
{
    /**
     * Visit struct returned by controllers
     *
     * @param \eZ\Publish\Core\REST\Common\Output\Visitor $visitor
     * @param \eZ\Publish\Core\REST\Common\Output\Generator $generator
     * @param \eZ\Publish\Core\REST\Server\Values\ContentTypeList $data
     */
    public function visit( Visitor $visitor, Generator $generator, $data )
    {
        $generator->startObjectElement( 'ContentTypeList' );
        $visitor->setHeader( 'Content-Type', $generator->getMediaType( 'ContentTypeList' ) );
        //@TODO Needs refactoring, disabling certain headers should not be done this way
        $visitor->setHeader( 'Accept-Patch', false );

        $generator->startAttribute( 'href', $data->path );
        $generator->endAttribute( 'href' );

        $generator->startList( 'ContentType' );
        foreach ( $data->contentTypes as $contentType )
        {
            $visitor->visitValueObject(
                new Values\RestContentType(
                    $contentType,
                    $contentType->getFieldDefinitions()
                )
            );
        }
        $generator->endList( 'ContentType' );

        $generator->endObjectElement( 'ContentTypeList' );
    }
}
