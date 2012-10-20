<?php
/**
 * File containing the BaseTest class.
 *
 * @copyright Copyright (C) 1999-2012 eZ Systems AS. All rights reserved.
 * @license http://ez.no/licenses/gnu_gpl GNU General Public License v2.0
 * @version 2012.9
 */

namespace eZ\Publish\Core\MVC\Symfony\View\Tests\ContentViewProvider\Configured;

abstract class BaseTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var \PHPUnit_Framework_MockObject_MockObject
     */
    protected $repositoryMock;

    protected function setUp()
    {
        parent::setUp();
        $this->repositoryMock = $this->getRepositoryMock();
    }

    /**
     * @param array $matchingConfig
     * @return \PHPUnit_Framework_MockObject_MockObject
     */
    protected function getPartiallyMockedLocationViewProvider( array $matchingConfig = array() )
    {
        return $this
            ->getMockBuilder( 'eZ\\Publish\\Core\\MVC\\Symfony\\View\\Provider\\Location\\Configured' )
            ->setConstructorArgs(
                array(
                    $this->repositoryMock,
                    $matchingConfig
                )
            )
            ->setMethods( array( 'getMatcher' ) )
            ->getMock()
        ;
    }

    /**
     * @return \PHPUnit_Framework_MockObject_MockObject
     */
    protected function getRepositoryMock()
    {
        return $this
            ->getMockBuilder( 'eZ\\Publish\\API\\Repository\Repository' )
            ->disableOriginalConstructor()
            ->getMock()
        ;
    }

    /**
     * @param array $properties
     * @return \PHPUnit_Framework_MockObject_MockObject
     */
    protected function getLocationMock( array $properties = array() )
    {
        return $this
            ->getMockBuilder( 'eZ\\Publish\\API\\Repository\\Values\\Content\\Location' )
            ->setConstructorArgs( array( $properties ) )
            ->getMockForAbstractClass()
        ;
    }

    /**
     * @param array $properties
     * @return \PHPUnit_Framework_MockObject_MockObject
     */
    protected function getContentInfoMock( array $properties = array() )
    {
        return $this->
            getMockBuilder( 'eZ\\Publish\\API\\Repository\\Values\\Content\\ContentInfo' )
            ->setConstructorArgs( array( $properties ) )
            ->getMockForAbstractClass()
        ;
    }
}
