<?php
/**
 * File containing the Test Setup Factory base class
 *
 * @copyright Copyright (C) 1999-2012 eZ Systems AS. All rights reserved.
 * @license http://ez.no/licenses/gnu_gpl GNU General Public License v2.0
 * @version 2012.9
 */

namespace eZ\Publish\API\Repository\Tests\SetupFactory;
use eZ\Publish\API\Repository\Tests\SetupFactory;
use eZ\Publish\API\Repository\Tests\IdManager;
use eZ\Publish\API\Repository\Tests\Stubs\RepositoryStub;

/**
 * A Test Factory is used to setup the infrastructure for a tests, based on a
 * specific repository implementation to test.
 */
class Memory extends SetupFactory
{
    /**
     * Returns a configured repository for testing.
     *
     * @param bool $initializeFromScratch if the back end should be initialized
     *                                    from scratch or re-used
     * @return \eZ\Publish\API\Repository\Repository
     */
    public function getRepository( $initializeFromScratch = true )
    {
        $repository = new RepositoryStub(
            __DIR__ . '/../_fixtures',
            ( isset( $_ENV['backendVersion'] ) ? (int) $_ENV['backendVersion'] : 5 )
        );

        $repository->setCurrentUser(
            new \eZ\Publish\API\Repository\Tests\Stubs\Values\User\UserStub(
                array(
                    'content' => new \eZ\Publish\API\Repository\Tests\Stubs\Values\Content\ContentStub(
                        array(
                            'id' => 14
                        )
                    )
                )
            )
        );

        return $repository;
    }

    /**
     * Returns a repository specific ID manager.
     *
     * @return \eZ\Publish\API\Repository\Tests\IdManager
     */
    public function getIdManager()
    {
        return new IdManager\Php;
    }

    /**
     * Returns a config value for $configKey.
     *
     * @param string $configKey
     * @return mixed
     * @throws Exception if $configKey could not be found.
     */
    public function getConfigValue( $configKey )
    {
        throw new \RuntimeException( "Memory implementation does not support config." );
    }
}
