<?php
/**
 * File containing the ContentTypeGroupList class
 *
 * @copyright Copyright (C) 1999-2012 eZ Systems AS. All rights reserved.
 * @license http://ez.no/licenses/gnu_gpl GNU General Public License v2.0
 * @version 2012.9
 */

namespace eZ\Publish\Core\REST\Server\Values;

use eZ\Publish\Core\REST\Common\Value as RestValue;

/**
 * ContentTypeGroup list view model
 */
class ContentTypeGroupList extends RestValue
{
    /**
     * Content type groups
     *
     * @var \eZ\Publish\API\Repository\Values\ContentType\ContentTypeGroup[]
     */
    public $contentTypeGroups;

    /**
     * Construct
     *
     * @param \eZ\Publish\API\Repository\Values\ContentType\ContentTypeGroup[] $contentTypeGroups
     */
    public function __construct( array $contentTypeGroups )
    {
        $this->contentTypeGroups = $contentTypeGroups;
    }
}
