<?php
/**
 * File containing the BaseHandler class.
 *
 * @copyright Copyright (C) 1999-2012 eZ Systems AS. All rights reserved.
 * @license http://ez.no/licenses/gnu_gpl GNU General Public License v2.0
 * @version 2012.9
 */

namespace eZ\Publish\Core\IO\LegacyHandler\FileResourceProvider;

use eZ\Publish\Core\MVC\Legacy\LegacyKernelAware,
    eZ\Publish\Core\MVC\Legacy\Kernel as LegacyKernel;

abstract class BaseHandler implements LegacyKernelAware
{
    /**
     * @var \eZ\Publish\Core\MVC\Legacy\Kernel
     */
    protected $legacyKernel;

    /**
     * Injects the legacy kernel instance.
     *
     * @param \eZ\Publish\Core\MVC\Legacy\Kernel $legacyKernel
     * @return void
     */
    public function setLegacyKernel( LegacyKernel $legacyKernel )
    {
        $this->legacyKernel = $legacyKernel;
    }

    /**
     * Gets the legacy kernel instance.
     *
     * @return \eZ\Publish\Core\MVC\Legacy\Kernel
     */
    protected function getLegacyKernel()
    {
        return $this->legacyKernel;
    }
}
