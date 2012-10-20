<?php
/**
 * File containing the eZ\Publish\Core\FieldType\Tests\FieldTypeTest class
 *
 * @copyright Copyright (C) 1999-2012 eZ Systems AS. All rights reserved.
 * @license http://ez.no/licenses/gnu_gpl GNU General Public License v2.0
 * @version 2012.9
 */

namespace eZ\Publish\Core\FieldType\Tests;

use PHPUnit_Framework_TestCase;

abstract class FieldTypeTest extends PHPUnit_Framework_TestCase
{
    /**
     * File service mock.
     *
     * @see getFileServiceMock()
     * @var \eZ\Publish\Core\FieldType\FileService
     */
    private $fileServiceMock;

    protected function setUp()
    {
        parent::setUp();
    }

    protected function tearDown()
    {
        unset( $this->fileServiceMock );
        parent::tearDown();
    }

    /**
     * Returns a re-usable file service mock.
     *
     * Returns a mock unique for the execution of a single test case. The same
     * instance can be received multiple times by calling this method.
     *
     * @return \eZ\Publish\Core\FieldType\FileService
     */
    protected function getFileServiceMock()
    {
        if ( !isset( $this->fileServiceMock ) )
        {
            $this->fileServiceMock = $this->getMock(
                'eZ\\Publish\\Core\\FieldType\\FileService',
                array(),
                array(),
                '',
                false
            );
        }
        return $this->fileServiceMock;
    }
}
