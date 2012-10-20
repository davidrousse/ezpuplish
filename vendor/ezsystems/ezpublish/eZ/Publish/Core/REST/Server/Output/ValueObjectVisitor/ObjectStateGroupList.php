<?php
/**
 * File containing the ObjectStateGroupList ValueObjectVisitor class
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
 * ObjectStateGroupList value object visitor
 */
class ObjectStateGroupList extends ValueObjectVisitor
{
    /**
     * Visit struct returned by controllers
     *
     * @param \eZ\Publish\Core\REST\Common\Output\Visitor $visitor
     * @param \eZ\Publish\Core\REST\Common\Output\Generator $generator
     * @param \eZ\Publish\Core\REST\Server\Values\ObjectStateGroupList $data
     */
    public function visit( Visitor $visitor, Generator $generator, $data )
    {
        $generator->startObjectElement( 'ObjectStateGroupList' );
        $visitor->setHeader( 'Content-Type', $generator->getMediaType( 'ObjectStateGroupList' ) );
        //@TODO Needs refactoring, disabling certain headers should not be done this way
        $visitor->setHeader( 'Accept-Patch', false );

        $generator->startAttribute( 'href', $this->urlHandler->generate( 'objectstategroups' ) );
        $generator->endAttribute( 'href' );

        $generator->startList( 'ObjectStateGroup' );
        foreach ( $data->groups as $group )
        {
            $visitor->visitValueObject( $group );
        }
        $generator->endList( 'ObjectStateGroup' );

        $generator->endObjectElement( 'ObjectStateGroupList' );
    }
}
