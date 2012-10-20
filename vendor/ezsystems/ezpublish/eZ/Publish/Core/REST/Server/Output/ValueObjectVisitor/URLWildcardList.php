<?php
/**
 * File containing the URLWildcardList ValueObjectVisitor class
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
 * URLWildcardList value object visitor
 */
class URLWildcardList extends ValueObjectVisitor
{
    /**
     * Visit struct returned by controllers
     *
     * @param \eZ\Publish\Core\REST\Common\Output\Visitor $visitor
     * @param \eZ\Publish\Core\REST\Common\Output\Generator $generator
     * @param \eZ\Publish\Core\REST\Server\Values\URLWildcardList $data
     */
    public function visit( Visitor $visitor, Generator $generator, $data )
    {
        $generator->startObjectElement( 'UrlWildcardList' );
        $visitor->setHeader( 'Content-Type', $generator->getMediaType( 'UrlWildcardList' ) );

        $generator->startAttribute(
            'href',
            $this->urlHandler->generate( 'urlWildcards' )
        );
        $generator->endAttribute( 'href' );

        $generator->startList( 'UrlWildcard' );
        foreach ( $data->urlWildcards as $urlWildcard )
        {
            $visitor->visitValueObject( $urlWildcard );
        }
        $generator->endList( 'UrlWildcard' );

        $generator->endObjectElement( 'UrlWildcardList' );
    }
}
