<?php
/**
 * File containing the CLIHandler class.
 *
 * @copyright Copyright (C) 1999-2012 eZ Systems AS. All rights reserved.
 * @license http://ez.no/licenses/gnu_gpl GNU General Public License v2.0
 * @version 2012.9
 */

namespace eZ\Publish\Core\MVC\Legacy\Kernel;

use ezpKernelHandler,
    eZScript,
    RuntimeException,
    eZ\Publish\Core\MVC\Symfony\SiteAccess;

class CLIHandler implements ezpKernelHandler
{
    /**
     * @var \eZScript
     */
    protected $script;

    /**
     * Constructor
     *
     * @param array $settings Settings to pass to \eZScript constructor.
     * @param \eZ\Publish\Core\MVC\Symfony\SiteAccess $siteAccess
     */
    public function __construct( array $settings = array(), SiteAccess $siteAccess = null )
    {
        $this->script = eZScript::instance( $settings );
        $this->script->startup();
        if ( isset( $siteAccess ) )
            $this->script->setUseSiteAccess( $siteAccess->name );

        $this->script->initialize();
    }

    /**
     * Not supported by CLIHandler
     *
     * @throws \RuntimeException
     */
    public function run()
    {
        throw new RuntimeException( 'run() method is not supported by CLIHandler' );
    }

    /**
     * Runs a callback function in the legacy kernel environment.
     * This is useful to run eZ Publish 4.x code from a non-related context (like eZ Publish 5)
     *
     * @param \Closure $callback
     * @param bool $postReinitialize Default is true.
     *                               If set to false, the kernel environment will not be reinitialized.
     *                               This can be useful to optimize several calls to the kernel within the same context.
     * @return mixed The result of the callback
     */
    public function runCallback( \Closure $callback, $postReinitialize = true )
    {
        $return = $callback();
        $this->script->shutdown();
        if ( !$postReinitialize )
            $this->script->setIsInitialized( true );

        return $return;
    }

    /**
     * Not supported by CLIHandler
     *
     * @param bool $useExceptions
     * @throws \RuntimeException
     */
    public function setUseExceptions( $useExceptions )
    {
    }

    /**
     * Reinitializes the kernel environment.
     *
     * @return void
     */
    public function reInitialize()
    {
        $this->script->setIsInitialized( false );
    }

    /**
     * Checks whether the kernel handler has the Symfony Dependency Injection
     * container or not.
     *
     * @return bool
     */
    public function hasServiceContainer()
    {
        return false;
    }

    /**
     * Returns the Symfony Dependency Injection container if it has been injected,
     * otherwise returns null.
     *
     * @return \Symfony\Component\DependencyInjection\ContainerInterface|null
     */
    public function getServiceContainer()
    {
        return null;
    }
}
