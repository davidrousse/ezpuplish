<?php
/**
 * File generates service container instance
 *
 * Expects global $settings to be set by caller
 *
 * @copyright Copyright (C) 1999-2012 eZ Systems AS. All rights reserved.
 * @license http://ez.no/licenses/gnu_gpl GNU General Public License v2.0
 * @version 2012.9
 */

use eZ\Publish\Core\Base\ConfigurationManager;
use eZ\Publish\Core\Base\ServiceContainer;

if ( !isset( $settings ) )
{
    throw new \RuntimeException( '$settings not provided to container.php' );
}

// Setup Configuration object to be able to read service.ini settings
$configManager = new ConfigurationManager(
    $settings,
    $settings['base']['Configuration']['Paths']
);

// [temp] Inject legacy kernel, as it does not yet have a factory
$dependencies = array();
if ( isset( $_ENV['legacyKernel'] ) )
{
    $dependencies['@legacyKernel'] = $_ENV['legacyKernel'];
}

// Return Service container with service.ini settings
return new ServiceContainer(
    $configManager->getConfiguration('service')->getAll(),
    $dependencies
);
