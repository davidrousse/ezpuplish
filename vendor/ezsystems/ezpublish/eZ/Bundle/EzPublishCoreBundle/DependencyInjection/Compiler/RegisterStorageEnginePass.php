<?php
/**
 * File containing the RegisterStorageEnginePass class.
 *
 * @copyright Copyright (C) 1999-2012 eZ Systems AS. All rights reserved.
 * @license http://ez.no/licenses/gnu_gpl GNU General Public License v2.0
 * @version 2012.9
 */

namespace eZ\Bundle\EzPublishCoreBundle\DependencyInjection\Compiler;

use Symfony\Component\DependencyInjection\Compiler\CompilerPassInterface;
use Symfony\Component\DependencyInjection\ContainerBuilder;

/**
 * This compiler pass will register eZ Publish field types.
 */
class RegisterStorageEnginePass implements CompilerPassInterface
{

    /**
     * @param \Symfony\Component\DependencyInjection\ContainerBuilder $container
     */
    public function process( ContainerBuilder $container )
    {
        if ( !$container->hasDefinition( 'ezpublish.api.storage_engine.factory' ) )
            return;

        $storageEngineFactoryDef = $container->getDefinition( 'ezpublish.api.storage_engine.factory' );

        foreach ( $container->findTaggedServiceIds( 'ezpublish.storageEngine' ) as $id => $attributes )
        {
            $storageEngineFactoryDef->addMethodCall(
                'registerStorageEngine',
                array(
                     $id,
                     // TODO: Maybe there should be some validation here. What if no alias is provided ?
                     $attributes[0]['alias']
                )
            );
        }
    }
}
