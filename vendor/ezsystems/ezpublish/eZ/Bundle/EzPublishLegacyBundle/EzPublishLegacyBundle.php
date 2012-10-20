<?php
/**
 * File containing the EzPublishLegacy class.
 *
 * @copyright Copyright (C) 1999-2012 eZ Systems AS. All rights reserved.
 * @license http://ez.no/licenses/gnu_gpl GNU General Public License v2.0
 * @version 2012.9
 */

namespace eZ\Bundle\EzPublishLegacyBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;
use eZ\Bundle\EzPublishLegacyBundle\DependencyInjection\Compiler\LegacyPass;
use Symfony\Component\DependencyInjection\ContainerBuilder;

class EzPublishLegacyBundle extends Bundle
{
    public function boot()
    {
        if ( !$this->container->getParameter( 'ezpublish_legacy.enabled' ) )
            return;

        // Deactivate eZComponents loading from legacy autoload.php as they are already loaded
        if ( !defined( 'EZCBASE_ENABLED' ) )
            define( 'EZCBASE_ENABLED', false );

        require_once $this->container->getParameter( 'ezpublish_legacy.root_dir' ) . "/autoload.php";
    }

    public function build( ContainerBuilder $container )
    {
        parent::build($container);
        $container->addCompilerPass( new LegacyPass() );
    }
}
