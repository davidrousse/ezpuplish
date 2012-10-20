<?php
/**
 * File containing the LegacyKernelAware interface.
 *
 * @copyright Copyright (C) 1999-2012 eZ Systems AS. All rights reserved.
 * @license http://ez.no/licenses/gnu_gpl GNU General Public License v2.0
 * @version 2012.9
 */

namespace eZ\Publish\Core\MVC\Legacy;

/**
 * Interface for "legacy kernel aware" services.
 */
interface LegacyKernelAware
{
    /**
     * Injects the legacy kernel instance.
     *
     * @abstract
     * @param \eZ\Publish\Core\MVC\Legacy\Kernel $legacyKernel
     * @return void
     */
    public function setLegacyKernel( Kernel $legacyKernel );
}
