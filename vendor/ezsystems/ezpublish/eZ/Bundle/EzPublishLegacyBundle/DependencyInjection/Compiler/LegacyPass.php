<?php
/**
 * File containing the LegacyPass class.
 *
 * @copyright Copyright (C) 1999-2012 eZ Systems AS. All rights reserved.
 * @license http://ez.no/licenses/gnu_gpl GNU General Public License v2.0
 * @version 2012.9
 */

namespace eZ\Bundle\EzPublishLegacyBundle\DependencyInjection\Compiler;

use Symfony\Component\DependencyInjection\Compiler\CompilerPassInterface;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Reference;

class LegacyPass implements CompilerPassInterface
{
    public function process( ContainerBuilder $container )
    {
        if ( !$container->hasDefinition( 'ezpublish_legacy.templating.delegating_converter' ) )
            return;

        $definition = $container->getDefinition( 'ezpublish_legacy.templating.delegating_converter' );
        foreach ( $container->findTaggedServiceIds( 'ezpublish_legacy.templating.converter' ) as $id => $attributes )
        {
            foreach ( $attributes as $attribute )
            {
                if ( !isset( $attribute['for'] ) )
                    continue;

                $definition->addMethodCall(
                    'addConverter',
                    array(
                         new Reference( $id ),
                         $attribute['for']
                    )
                );
            }
        }
    }
}
