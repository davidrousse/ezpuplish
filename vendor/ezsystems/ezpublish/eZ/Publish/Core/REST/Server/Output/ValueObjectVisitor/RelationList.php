<?php
/**
 * File containing the RelationList ValueObjectVisitor class
 *
 * @copyright Copyright (C) 1999-2012 eZ Systems AS. All rights reserved.
 * @license http://ez.no/licenses/gnu_gpl GNU General Public License v2.0
 * @version 2012.9
 */

namespace eZ\Publish\Core\REST\Server\Output\ValueObjectVisitor;

use eZ\Publish\Core\REST\Common\Output\ValueObjectVisitor;
use eZ\Publish\Core\REST\Common\Output\Generator;
use eZ\Publish\Core\REST\Common\Output\Visitor;

use eZ\Publish\Core\REST\Server\Values\RestRelation;

/**
 * RelationList value object visitor
 */
class RelationList extends ValueObjectVisitor
{
    /**
     * Visit struct returned by controllers
     *
     * @param \eZ\Publish\Core\REST\Common\Output\Visitor $visitor
     * @param \eZ\Publish\Core\REST\Common\Output\Generator $generator
     * @param \eZ\Publish\Core\REST\Server\Values\RelationList $data
     */
    public function visit( Visitor $visitor, Generator $generator, $data )
    {
        $generator->startObjectElement( 'Relations', 'RelationList' );
        $visitor->setHeader( 'Content-Type', $generator->getMediaType( 'RelationList' ) );

        $generator->startAttribute(
            'href',
            $this->urlHandler->generate(
                'objectVersionRelations',
                array(
                    'object' => $data->contentId,
                    'version' => $data->versionNo
                )
            )
        );
        $generator->endAttribute( 'href' );

        $generator->startList( 'Relation' );
        foreach ( $data->relations as $relation )
        {
            $visitor->visitValueObject( new RestRelation( $relation, $data->contentId, $data->versionNo ) );
        }
        $generator->endList( 'Relation' );

        $generator->endObjectElement( 'Relations' );
    }
}
