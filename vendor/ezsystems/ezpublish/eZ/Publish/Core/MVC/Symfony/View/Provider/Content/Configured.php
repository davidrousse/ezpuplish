<?php
/**
 * File containing the View\Provider\Content\Configured class.
 *
 * @copyright Copyright (C) 1999-2012 eZ Systems AS. All rights reserved.
 * @license http://ez.no/licenses/gnu_gpl GNU General Public License v2.0
 * @version 2012.9
 */

namespace eZ\Publish\Core\MVC\Symfony\View\Provider\Content;

use eZ\Publish\Core\MVC\Symfony\View\Provider\Content as ContentViewProvider,
    eZ\Publish\Core\MVC\Symfony\View\Provider\Configured as ProviderConfigured,
    eZ\Publish\API\Repository\Values\Content\ContentInfo;

class Configured extends ProviderConfigured implements ContentViewProvider
{
    /**
     * Returns a ContentView object corresponding to $contentInfo, or void if not applicable
     *
     * @param \eZ\Publish\API\Repository\Values\Content\ContentInfo $contentInfo
     * @param string $viewType Variation of display for your content
     * @return \eZ\Publish\Core\MVC\Symfony\View\ContentView|void
     */
    public function getView( ContentInfo $contentInfo, $viewType )
    {
    }
}
