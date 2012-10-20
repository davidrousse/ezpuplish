<?php
/**
 * File containing the Provider abstract class.
 *
 * @copyright Copyright (C) 1999-2012 eZ Systems AS. All rights reserved.
 * @license http://ez.no/licenses/gnu_gpl GNU General Public License v2.0
 * @version 2012.9
 */

namespace eZ\Publish\Core\MVC\Legacy\View;

use eZ\Publish\Core\MVC\Legacy\View\TwigContentViewLayoutDecorator,
    Symfony\Component\HttpKernel\Log\LoggerInterface,
    Closure;

abstract class Provider
{
    /**
     * @var \Closure
     */
    private $legacyKernelClosure;

    /**
     * @var \Symfony\Component\HttpKernel\Log\LoggerInterface
     */
    protected $logger;

    /**
     * @var \eZ\Publish\Core\MVC\Legacy\View\TwigContentViewLayoutDecorator
     */
    protected $decorator;

    public function __construct( Closure $legacyKernelClosure, TwigContentViewLayoutDecorator $decorator, LoggerInterface $logger = null )
    {
        $this->legacyKernelClosure = $legacyKernelClosure;
        $this->decorator = $decorator;
        $this->logger = $logger;
    }

    /**
     * @return \eZ\Publish\Core\MVC\Legacy\Kernel
     */
    protected function getLegacyKernel()
    {
        $legacyKernelClosure = $this->legacyKernelClosure;
        return $legacyKernelClosure();
    }
}
