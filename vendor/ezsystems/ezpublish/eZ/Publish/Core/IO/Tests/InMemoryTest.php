<?php
/**
 * File containing a Io Handler test
 *
 * @copyright Copyright (C) 1999-2012 eZ Systems AS. All rights reserved.
 * @license http://ez.no/licenses/gnu_gpl GNU General Public License v2.0
 * @version 2012.9
 */

namespace eZ\Publish\Core\IO\Tests;
use eZ\Publish\Core\IO\InMemoryHandler as InMemory,
    eZ\Publish\Core\IO\Tests\Base as BaseHandlerTest;

/**
 * Handler test
 */
class InMemoryTest extends BaseHandlerTest
{
    /**
     * @return \eZ\Publish\SPI\IO\Handler
     */
    protected function getIoHandler()
    {
        return new InMemory();
    }
}
