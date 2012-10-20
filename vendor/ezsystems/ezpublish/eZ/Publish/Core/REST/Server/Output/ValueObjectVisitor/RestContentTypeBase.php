<?php
/**
 * File containing the RestContentTypeBase ValueObjectVisitor class
 *
 * @copyright Copyright (C) 1999-2012 eZ Systems AS. All rights reserved.
 * @license http://ez.no/licenses/gnu_gpl GNU General Public License v2.0
 * @version 2012.9
 */

namespace eZ\Publish\Core\REST\Server\Output\ValueObjectVisitor;

use eZ\Publish\Core\REST\Common\UrlHandler,
    eZ\Publish\Core\REST\Common\Output\ValueObjectVisitor,
    eZ\Publish\Core\REST\Common\Output\Generator,
    eZ\Publish\Core\REST\Common\Output\Visitor,

    eZ\Publish\API\Repository\Values;

/**
 * Base for RestContentType related value object visitors
 */
abstract class RestContentTypeBase extends ValueObjectVisitor
{
    /**
     * Returns a suffix for the URL type to generate on basis of the given
     * $contentTypeStatus.
     *
     * @param int $contentTypeStatus
     * @return string
     */
    protected function getUrlTypeSuffix( $contentTypeStatus )
    {
        switch ( $contentTypeStatus )
        {
            case Values\ContentType\ContentType::STATUS_DEFINED:
                return '';

            case Values\ContentType\ContentType::STATUS_DRAFT:
                return 'Draft';

            case Values\ContentType\ContentType::STATUS_MODIFIED:
                return 'Modified';
        }

        return '';
    }
}
