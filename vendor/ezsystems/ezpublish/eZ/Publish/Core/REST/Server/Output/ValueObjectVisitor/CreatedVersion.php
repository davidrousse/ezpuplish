<?php
/**
 * File containing the CreatedVersion ValueObjectVisitor class
 *
 * @copyright Copyright (C) 1999-2012 eZ Systems AS. All rights reserved.
 * @license http://ez.no/licenses/gnu_gpl GNU General Public License v2.0
 * @version 2012.9
 */

namespace eZ\Publish\Core\REST\Server\Output\ValueObjectVisitor;

use eZ\Publish\Core\REST\Common\Output\Generator;
use eZ\Publish\Core\REST\Common\Output\Visitor;

/**
 * CreatedVersion value object visitor
 */
class CreatedVersion extends Content
{
    /**
     * Visit struct returned by controllers
     *
     * @param \eZ\Publish\Core\REST\Common\Output\Visitor $visitor
     * @param \eZ\Publish\Core\REST\Common\Output\Generator $generator
     * @param \eZ\Publish\Core\REST\Server\Values\CreatedVersion $data
     */
    public function visit( Visitor $visitor, Generator $generator, $data )
    {
        parent::visit( $visitor, $generator, $data->version );
        $visitor->setHeader(
            'Location',
            $this->urlHandler->generate(
                'objectVersion',
                array(
                    'object' => $data->version->id,
                    'version' => $data->version->getVersionInfo()->versionNo
                )
            )
        );
        $visitor->setStatus( 201 );
    }
}
