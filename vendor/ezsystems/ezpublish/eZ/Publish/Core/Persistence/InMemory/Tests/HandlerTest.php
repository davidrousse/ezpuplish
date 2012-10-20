<?php
/**
 * File contains: eZ\Publish\Core\Persistence\InMemory\Tests\HandlerTest class
 *
 * @copyright Copyright (C) 1999-2012 eZ Systems AS. All rights reserved.
 * @license http://ez.no/licenses/gnu_gpl GNU General Public License v2.0
 * @version 2012.9
 */

namespace eZ\Publish\Core\Persistence\InMemory\Tests;
use eZ\Publish\Core\Persistence\InMemory\Handler as InMemoryHandler,
    PHPUnit_Framework_TestCase;

/**
 * Test case for Handler using in memory storage.
 */
abstract class HandlerTest extends PHPUnit_Framework_TestCase
{
    /**
     * @var \eZ\Publish\SPI\Persistence\Handler
     */
    protected $persistenceHandler;

    /**
     * Setup the HandlerTest.
     */
    protected function setUp()
    {
        parent::setUp();

        // Get in-memory Handler instance
        $this->persistenceHandler = new InMemoryHandler();
    }

    /**
     * Tear down test (properties)
     */
    protected function tearDown()
    {
        unset( $this->persistenceHandler );
        parent::tearDown();
    }
}
