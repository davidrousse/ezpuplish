<?php
/**
 * File containing the LegacyStorageEnginePass class.
 *
 * @copyright Copyright (C) 1999-2012 eZ Systems AS. All rights reserved.
 * @license http://ez.no/licenses/gnu_gpl GNU General Public License v2.0
 * @version 2012.9
 */

namespace eZ\Bundle\EzPublishCoreBundle\DependencyInjection\Compiler;

use Symfony\Component\DependencyInjection\Compiler\CompilerPassInterface;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Exception\LogicException;
use Symfony\Component\DependencyInjection\Reference;

/**
 * This compiler pass will register eZ Publish field types.
 */
class LegacyStorageEnginePass implements CompilerPassInterface
{

    /**
     * @param \Symfony\Component\DependencyInjection\ContainerBuilder $container
     */
    public function process( ContainerBuilder $container )
    {
        if ( !$container->hasDefinition( 'ezpublish.api.storage_engine.legacy.factory' ) )
            return;

        $legacyStorageEngineDef = $container->getDefinition( 'ezpublish.api.storage_engine.legacy.factory' );

        foreach ( $container->findTaggedServiceIds( 'ezpublish.storageEngine.legacy.converter' ) as $id => $attributes )
        {
            if ( isset( $attributes[0]['lazy'] ) && $attributes[0]['lazy'] === true )
            {
                if ( !isset( $attributes[0]['callback'] ) )
                    throw new LogicException( "Converter service '$id' is marked as lazy but no callback is provided! Please provide a callback." );

                $converter = $attributes[0]['callback'];
                if ( strpos( $converter, '::' ) === 0 )
                {
                    $converter = $container->getDefinition( $id )->getClass() . $converter;
                }
            }
            else
            {
                $converter = new Reference( $id );
            }

            $legacyStorageEngineDef->addMethodCall(
                'registerFieldTypeConverter',
                array(
                     // TODO: Maybe there should be some validation here. What if no alias is provided ?
                     $attributes[0]['alias'],
                     $converter
                )
            );
        }
    }
}
