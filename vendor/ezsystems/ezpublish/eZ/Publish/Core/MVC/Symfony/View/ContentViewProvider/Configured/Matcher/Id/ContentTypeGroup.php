<?php
/**
 * File containing the ContentTypeGroup Id matcher class.
 *
 * @copyright Copyright (C) 1999-2012 eZ Systems AS. All rights reserved.
 * @license http://ez.no/licenses/gnu_gpl GNU General Public License v2.0
 * @version 2012.9
 */

namespace eZ\Publish\Core\MVC\Symfony\View\ContentViewProvider\Configured\Matcher\Id;

use eZ\Publish\Core\MVC\Symfony\View\ContentViewProvider\Configured\Matcher\MultipleValued,
    eZ\Publish\API\Repository\Values\Content\Location,
    eZ\Publish\API\Repository\Values\Content\ContentInfo;

class ContentTypeGroup extends MultipleValued
{
    /**
     * Checks if a Location object matches.
     *
     * @param \eZ\Publish\API\Repository\Values\Content\Location $location
     * @return bool
     */
    public function matchLocation( Location $location )
    {
        return $this->matchContentInfo( $location->getContentInfo() );
    }

    /**
     * Checks if a ContentInfo object matches.
     *
     * @param \eZ\Publish\API\Repository\Values\Content\ContentInfo $contentInfo
     * @return bool
     */
    public function matchContentInfo( ContentInfo $contentInfo )
    {
        foreach ( $contentInfo->getContentType()->getContentTypeGroups() as $group )
        {
            if ( isset( $this->values[$group->id] ) )
                return true;
        }

        return false;
    }
}
