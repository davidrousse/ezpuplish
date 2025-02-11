<?php
/**
 * File containing the ContentViewPass class.
 *
 * @copyright Copyright (C) 1999-2012 eZ Systems AS. All rights reserved.
 * @license http://ez.no/licenses/gnu_gpl GNU General Public License v2.0
 * @version 2012.9
 */

namespace eZ\Bundle\EzPublishCoreBundle\DependencyInjection\Compiler;

/**
 * The ContentViewPass adds DIC compiler pass related to content view.
 * This includes adding ContentViewProvider implementations.
 *
 * @see \eZ\Publish\Core\MVC\Symfony\View\Manager
 * @see \eZ\Publish\Core\MVC\Symfony\View\ContentViewProvider
 */
class ContentViewPass extends ViewPass
{
    const VIEW_PROVIDER_IDENTIFIER = "ezpublish.content_view_provider";
    const ADD_VIEW_PROVIDER_METHOD = "addContentViewProvider";
}
