<?php
/**
 * File containing the LocationList ValueObjectVisitor class
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
 * LocationList value object visitor
 */
class LocationList extends ValueObjectVisitor
{
    /**
     * Visit struct returned by controllers
     *
     * @param \eZ\Publish\Core\REST\Common\Output\Visitor $visitor
     * @param \eZ\Publish\Core\REST\Common\Output\Generator $generator
     * @param \eZ\Publish\Core\REST\Server\Values\LocationList $data
     */
    public function visit( Visitor $visitor, Generator $generator, $data )
    {
        $generator->startObjectElement( 'LocationList' );
        $visitor->setHeader( 'Content-Type', $generator->getMediaType( 'LocationList' ) );

        $generator->startAttribute( 'href', $data->path );
        $generator->endAttribute( 'href' );

        $generator->startList( 'Location' );

        foreach ( $data->locations as $location )
        {
            $generator->startObjectElement( 'Location' );
            $generator->startAttribute(
                'href',
                $this->urlHandler->generate( 'location', array( 'location' => rtrim( $location->pathString, '/' ) ) )
            );
            $generator->endAttribute( 'href' );
            $generator->endObjectElement( 'Location' );
        }

        $generator->endList( 'Location' );

        $generator->endObjectElement( 'LocationList' );
    }
}
