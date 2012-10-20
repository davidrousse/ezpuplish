<?php
/**
 * File containing the LegacyEvents class.
 *
 * @copyright Copyright (C) 1999-2012 eZ Systems AS. All rights reserved.
 * @license http://ez.no/licenses/gnu_gpl GNU General Public License v2.0
 * @version 2012.9
 */

namespace eZ\Publish\Core\MVC\Legacy;

final class LegacyEvents
{
    /*
     * The PRE_BUILD_LEGACY_KERNEL_WEB occurs right before the build of the legacy
     * kernel web handler. This event allows to inject parameters into the web
     * handler.
     *
     * The event listener method receives a
     * \eZ\Publish\Core\MVC\Legacy\Event\PreBuildKernelWebHandlerEvent
     */
    const PRE_BUILD_LEGACY_KERNEL_WEB = 'ezpublish_legacy.build_kernel_web_handler';
}
