<?php
/**
 * File containing the Configuration class.
 *
 * @copyright Copyright (C) 1999-2012 eZ Systems AS. All rights reserved.
 * @license http://ez.no/licenses/gnu_gpl GNU General Public License v2.0
 * @version 2012.9
 */

namespace eZ\Bundle\EzPublishLegacyBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

/**
 * This is the class that validates and merges configuration from your app/config files
 *
 * To learn more see {@link http://symfony.com/doc/current/cookbook/bundles/extension.html#cookbook-bundles-extension-config-class}
 */
class Configuration implements ConfigurationInterface
{
    /**
     * {@inheritDoc}
     */
    public function getConfigTreeBuilder()
    {
        $treeBuilder = new TreeBuilder();
        $treeBuilder
            ->root( 'ezpublish_legacy' )
            ->children()
                ->booleanNode( 'enabled' )->defaultFalse()->end()
                ->scalarNode( 'root_dir' )
                    ->validate()
                        ->ifTrue(
                            function ( $v )
                            {
                                return !file_exists( $v );
                            }
                        )
                        ->thenInvalid( "Provided eZ Publish Legacy root dir does not exist!'" )
                ->end()
            ->end();

        return $treeBuilder;
    }
}
