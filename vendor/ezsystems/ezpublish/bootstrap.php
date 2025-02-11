<?php
/**
 * File containing the bootstrapping of eZ Publish API
 *
 * Setups class loading.
 *
 * @copyright Copyright (C) 1999-2012 eZ Systems AS. All rights reserved.
 * @license http://ez.no/licenses/gnu_gpl GNU General Public License v2.0
 * @version 2012.9
 */


use eZ\Publish\Core\Base\ClassLoader;
use eZ\Publish\Core\MVC\Legacy\Kernel as LegacyKernel;
use eZ\Publish\Core\MVC\Legacy\Kernel\CLIHandler as LegacyKernelCLI;

// Get globl config.php settings
if ( !( $settings = include ( __DIR__ . '/config.php' ) ) )
{
    throw new \RuntimeException( 'Could not find config.php, please copy config.php-DEVELOPMENT to config.php customize to your needs!' );
}

// Setup class loader
require_once __DIR__ . '/eZ/Publish/Core/Base/ClassLoader.php';

$classLoader = new ClassLoader(
    include $settings['base']['ClassLoader']['NamespaceMap'],
    include $settings['base']['ClassLoader']['ClassMap'],
    $settings['service']['parameters']['legacy_dir']
);
spl_autoload_register( array( $classLoader, 'load' ) );

$classLoader = require_once __DIR__ . "/vendor/autoload.php";

if ( $classLoader instanceof Composer\Autoload\ClassLoader )
    $classLoader->register();

// Bootstrap eZ Publish legacy kernel if configured
if ( !empty( $settings['service']['parameters']['legacy_dir'] ) )
{
    // Define $legacyKernelHandler to whatever you need before loading this bootstrap file.
    // CLI handler is used by defaut, but you must use \ezpKernelWeb if not in CLI context (i.e. REST server)
    // $legacyKernelHandler can be a closure returning the appropriate kernel handler (to avoid autoloading issues)
    if ( isset( $legacyKernelHandler ) )
    {
        $legacyKernelHandler = $legacyKernelHandler instanceof \Closure ? $legacyKernelHandler() : $legacyKernelHandler;
    }
    else
    {
        $legacyKernelHandler = new LegacyKernelCLI;
    }
    $legacyKernel = new LegacyKernel( $legacyKernelHandler, $settings['service']['parameters']['legacy_dir'], getcwd() );
    set_exception_handler( null );
    // Avoid "Fatal error" text from legacy kernel if not called
    $legacyKernel->runCallback(
        function ()
        {
            eZExecution::setCleanExit();
        }
    );

    // Exposing in env variables in order be able to use them in test cases.
    $_ENV['legacyKernel'] = $legacyKernel;
    $_ENV['legacyPath'] = $settings['service']['parameters']['legacy_dir'];
}

return include 'container.php';
