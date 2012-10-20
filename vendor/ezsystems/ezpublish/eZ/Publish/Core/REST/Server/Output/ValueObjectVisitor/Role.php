<?php
/**
 * File containing the Role ValueObjectVisitor class
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
 * Role value object visitor
 */
class Role extends ValueObjectVisitor
{
    /**
     * Visit struct returned by controllers
     *
     * @param \eZ\Publish\Core\REST\Common\Output\Visitor $visitor
     * @param \eZ\Publish\Core\REST\Common\Output\Generator $generator
     * @param \eZ\Publish\API\Repository\Values\User\Role $data
     */
    public function visit( Visitor $visitor, Generator $generator, $data )
    {
        $generator->startObjectElement( 'Role' );
        $visitor->setHeader( 'Content-Type', $generator->getMediaType( 'Role' ) );
        $visitor->setHeader( 'Accept-Patch', $generator->getMediaType( 'RoleInput' ) );

        $generator->startAttribute(
            'href',
            $this->urlHandler->generate( 'role', array( 'role' => $data->id ) )
        );
        $generator->endAttribute( 'href' );

        $generator->startValueElement( 'identifier', $data->identifier );
        $generator->endValueElement( 'identifier' );

        if ( !empty( $data->mainLanguageCode ) )
        {
            $generator->startValueElement( 'mainLanguageCode', $data->mainLanguageCode );
            $generator->endValueElement( 'mainLanguageCode' );
        }

        $names = $data->getNames();
        if ( !empty( $names ) )
        {
            $this->visitNamesList( $generator, $names );
        }

        $descriptions = $data->getDescriptions();
        if ( !empty( $descriptions ) )
        {
            $this->visitDescriptionsList( $generator, $descriptions );
        }

        $generator->startObjectElement( 'Policies', 'PolicyList' );
        $generator->startAttribute(
            'href',
            $this->urlHandler->generate( 'policies', array( 'role' => $data->id ) )
        );
        $generator->endAttribute( 'href' );
        $generator->endObjectElement( 'Policies' );

        $generator->endObjectElement( 'Role' );
    }
}
