<?php
/**
 * File containing the CreatedUserGroup ValueObjectVisitor class
 *
 * @copyright Copyright (C) 1999-2012 eZ Systems AS. All rights reserved.
 * @license http://ez.no/licenses/gnu_gpl GNU General Public License v2.0
 * @version 2012.9
 */

namespace eZ\Publish\Core\REST\Server\Output\ValueObjectVisitor;

use eZ\Publish\Core\REST\Common\Output\Generator;
use eZ\Publish\Core\REST\Common\Output\Visitor;

/**
 * CreatedUserGroup value object visitor
 */
class CreatedUserGroup extends RestUserGroup
{
    /**
     * Visit struct returned by controllers
     *
     * @param \eZ\Publish\Core\REST\Common\Output\Visitor $visitor
     * @param \eZ\Publish\Core\REST\Common\Output\Generator $generator
     * @param \eZ\Publish\Core\REST\Server\Values\CreatedUserGroup $data
     */
    public function visit( Visitor $visitor, Generator $generator, $data )
    {
        parent::visit( $visitor, $generator, $data->userGroup );
        $visitor->setHeader(
            'Location',
            $this->urlHandler->generate(
                'group',
                array( 'group' => rtrim( $data->userGroup->mainLocation->pathString, '/' ) )
            )
        );
        $visitor->setStatus( 201 );
    }
}
