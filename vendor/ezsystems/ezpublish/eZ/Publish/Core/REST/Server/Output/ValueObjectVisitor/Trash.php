<?php
/**
 * File containing the Trash ValueObjectVisitor class
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
 * Trash value object visitor
 */
class Trash extends ValueObjectVisitor
{
    /**
     * Visit struct returned by controllers
     *
     * @param \eZ\Publish\Core\REST\Common\Output\Visitor $visitor
     * @param \eZ\Publish\Core\REST\Common\Output\Generator $generator
     * @param \eZ\Publish\Core\REST\Server\Values\Trash $data
     */
    public function visit( Visitor $visitor, Generator $generator, $data )
    {
        $generator->startObjectElement( 'Trash' );
        $visitor->setHeader( 'Content-Type', $generator->getMediaType( 'Trash' ) );

        $generator->startAttribute(
            'href',
            $this->urlHandler->generate( 'trashItems' )
        );
        $generator->endAttribute( 'href' );

        $generator->startList( 'TrashItem' );

        foreach ( $data->trashItems as $trashItem )
        {
            $generator->startObjectElement( 'TrashItem' );
            $generator->startAttribute(
                'href',
                $this->urlHandler->generate( 'trash', array( 'trash' => $trashItem->id ) )
            );
            $generator->endAttribute( 'href' );
            $generator->endObjectElement( 'TrashItem' );
        }

        $generator->endList( 'TrashItem' );

        $generator->endObjectElement( 'Trash' );
    }
}
