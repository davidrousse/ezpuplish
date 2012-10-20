<?php
/**
 * File containing the ContentTypeList class
 *
 * @copyright Copyright (C) 1999-2012 eZ Systems AS. All rights reserved.
 * @license http://ez.no/licenses/gnu_gpl GNU General Public License v2.0
 * @version 2012.9
 */

namespace eZ\Publish\Core\REST\Server\Values;

use eZ\Publish\Core\REST\Common\Value as RestValue;

/**
 * ContentType list view model
 */
class ContentTypeList extends RestValue
{
    /**
     * Content types
     *
     * @var \eZ\Publish\API\Repository\Values\ContentType\ContentType[]
     */
    public $contentTypes;

    /**
     * Path which was used to fetch the list of content types
     *
     * @var string
     */
    public $path;

    /**
     * Construct
     *
     * @param \eZ\Publish\API\Repository\Values\ContentType\ContentType[] $contentTypes
     * @param string $path
     */
    public function __construct( array $contentTypes, $path )
    {
        $this->contentTypes = $contentTypes;
        $this->path = $path;
    }
}
