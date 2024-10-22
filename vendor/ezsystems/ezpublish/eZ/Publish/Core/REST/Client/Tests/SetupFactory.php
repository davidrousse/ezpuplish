<?php
/**
 * File containing the Test Setup Factory for the REST SDK
 *
 * @copyright Copyright (C) 1999-2012 eZ Systems AS. All rights reserved.
 * @license http://ez.no/licenses/gnu_gpl GNU General Public License v2.0
 * @version 2012.9
 */

namespace eZ\Publish\Core\REST\Client\Tests;
use eZ\Publish\Core\REST\Common;
use eZ\Publish\API\Repository;

/**
 * A Test Factory is used to setup the infrastructure for a tests, based on a
 * specific repository implementation to test.
 */
class SetupFactory extends Repository\Tests\SetupFactory
{
    /**
     * Returns a configured repository for testing.
     *
     * @param bool $initializeFromScratch
     * @return \eZ\Publish\API\Repository\Repository
     */
    public function getRepository( $initializeFromScratch = true )
    {
        return require __DIR__ . '/../../common.php';
    }

    /**
     * Returns a repository specific ID manager.
     *
     * @return \eZ\Publish\API\Repository\Tests\IdManager
     */
    public function getIdManager()
    {
        return new IdManager(
            new Common\UrlHandler\eZPublish()
        );
    }

    /**
     * Returns a config value for $configKey.
     *
     * @param string $configKey
     * @return mixed
     * @throws \Exception if $configKey could not be found.
     */
    public function getConfigValue( $configKey )
    {
        throw new \RuntimeException( "REST implementation does not support config." );
    }
}
