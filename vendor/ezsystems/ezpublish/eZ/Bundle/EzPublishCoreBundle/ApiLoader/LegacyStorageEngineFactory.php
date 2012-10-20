<?php
/**
 * File containing the LegacyStorageEngineFactory class.
 *
 * @copyright Copyright (C) 1999-2012 eZ Systems AS. All rights reserved.
 * @license http://ez.no/licenses/gnu_gpl GNU General Public License v2.0
 * @version 2012.9
 */

namespace eZ\Bundle\EzPublishCoreBundle\ApiLoader;

use eZ\Publish\Core\Persistence\Legacy\EzcDbHandler,
    eZ\Publish\Core\Persistence\Legacy\Content\FieldValue\ConverterRegistry,
    eZ\Publish\Core\Persistence\Legacy\Content\StorageRegistry,
    eZ\Publish\Core\MVC\ConfigResolverInterface,
    Symfony\Component\DependencyInjection\ContainerInterface;

class LegacyStorageEngineFactory
{
    /**
     * @var \eZ\Publish\Core\MVC\ConfigResolverInterface
     */
    protected $configResolver;

    /**
     * @var \Symfony\Component\DependencyInjection\ContainerInterface
     */
    protected $container;

    protected $converters = array();

    public function __construct( ConfigResolverInterface $configResolver, ContainerInterface $container )
    {
        $this->configResolver = $configResolver;
        $this->container = $container;
    }

    /**
     * Registers a field type converter as expected in legacy storage engine.
     * $className must implement eZ\Publish\Core\Persistence\Legacy\Content\FieldValue\Converter interface.
     *
     * @param string $typeIdentifier Field type identifier the converter will be used for
     * @param string $className FQN of the converter class
     */
    public function registerFieldTypeConverter( $typeIdentifier, $className )
    {
        $this->converters[$typeIdentifier] = $className;
    }

    /**
     * Builds the Legacy Storage Engine
     *
     * @param $deferTypeUpdate
     * @return \eZ\Publish\Core\Persistence\Legacy\Handler
     */
    public function buildLegacyEngine( $deferTypeUpdate )
    {
        $legacyEngineClass = $this->container->getParameter( 'ezpublish.api.storage_engine.legacy.class' );
        return new $legacyEngineClass(
            EzcDbHandler::create(
                $this->configResolver->getParameter( 'database.dsn' )
            ),
            new ConverterRegistry( $this->converters ),
            new StorageRegistry(
                $this->container->get( 'ezpublish.api.repository.factory' )->getExternalStorageHandlers()
            ),
            $this->container->get( 'ezpublish.api.storage_engine.legacy.transformation_processor' ),
            array(
                 'defer_type_update'            => (bool)$deferTypeUpdate,
            )
        );
    }
}
