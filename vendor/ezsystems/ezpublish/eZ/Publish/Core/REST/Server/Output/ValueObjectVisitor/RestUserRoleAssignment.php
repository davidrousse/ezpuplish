<?php
/**
 * File containing the RestUserRoleAssignment ValueObjectVisitor class
 *
 * @copyright Copyright (C) 1999-2012 eZ Systems AS. All rights reserved.
 * @license http://ez.no/licenses/gnu_gpl GNU General Public License v2.0
 * @version 2012.9
 */

namespace eZ\Publish\Core\REST\Server\Output\ValueObjectVisitor;

use eZ\Publish\Core\REST\Common\Output\ValueObjectVisitor;
use eZ\Publish\Core\REST\Common\Output\Generator;
use eZ\Publish\Core\REST\Common\Output\Visitor;

use eZ\Publish\API\Repository\Values\User\Limitation\RoleLimitation;

/**
 * RestUserRoleAssignment value object visitor
 */
class RestUserRoleAssignment extends ValueObjectVisitor
{
    /**
     * Visit struct returned by controllers
     *
     * @param \eZ\Publish\Core\REST\Common\Output\Visitor $visitor
     * @param \eZ\Publish\Core\REST\Common\Output\Generator $generator
     * @param \eZ\Publish\Core\REST\Server\Values\RestUserRoleAssignment $data
     */
    public function visit( Visitor $visitor, Generator $generator, $data )
    {
        $generator->startObjectElement( 'RoleAssignment' );
        $visitor->setHeader( 'Content-Type', $generator->getMediaType( 'RoleAssignment' ) );

        $roleAssignment = $data->roleAssignment;
        $role = $roleAssignment->getRole();

        $generator->startAttribute(
            'href',
            $this->urlHandler->generate(
                'userRoleAssignment', array(
                    'user' => $data->id,
                    'role' => $role->id
                )
            )
        );
        $generator->endAttribute( 'href' );

        $roleLimitation = $roleAssignment->getRoleLimitation();
        if ( $roleLimitation instanceof RoleLimitation )
        {
            $this->visitLimitation( $generator, $roleLimitation );
        }

        $generator->startObjectElement( 'Role' );
        $generator->startAttribute(
            'href',
            $this->urlHandler->generate( 'role', array( 'role' => $role->id ) )
        );
        $generator->endAttribute( 'href' );
        $generator->endObjectElement( 'Role' );

        $generator->endObjectElement( 'RoleAssignment' );
    }
}
