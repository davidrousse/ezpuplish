<?php
/**
 * File containing the RestUserGroup class
 *
 * @copyright Copyright (C) 1999-2012 eZ Systems AS. All rights reserved.
 * @license http://ez.no/licenses/gnu_gpl GNU General Public License v2.0
 * @version 2012.9
 */

namespace eZ\Publish\Core\REST\Server\Values;

use eZ\Publish\API\Repository\Values\Content\Content;
use eZ\Publish\API\Repository\Values\Content\ContentInfo;
use eZ\Publish\API\Repository\Values\Content\Location;
use eZ\Publish\Core\REST\Common\Value as RestValue;

/**
 * REST UserGroup, as received by /user/groups/<path>
 */
class RestUserGroup extends RestValue
{
    /**
     * @var \eZ\Publish\API\Repository\Values\Content\Content
     */
    public $content;

    /**
     * @var \eZ\Publish\API\Repository\Values\Content\ContentInfo
     */
    public $contentInfo;

    /**
     * @var \eZ\Publish\API\Repository\Values\Content\Location
     */
    public $mainLocation;

    /**
     * Construct
     *
     * @param \eZ\Publish\API\Repository\Values\Content\Content $content
     * @param \eZ\Publish\API\Repository\Values\Content\ContentInfo $contentInfo
     * @param \eZ\Publish\API\Repository\Values\Content\Location $mainLocation
     */
    public function __construct( Content $content, ContentInfo $contentInfo, Location $mainLocation )
    {
        $this->content = $content;
        $this->contentInfo = $contentInfo;
        $this->mainLocation = $mainLocation;
    }
}
