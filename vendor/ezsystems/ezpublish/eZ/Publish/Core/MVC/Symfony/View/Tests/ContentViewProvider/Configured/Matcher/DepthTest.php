<?php
/**
 * File containing the DepthTest class.
 *
 * @copyright Copyright (C) 1999-2012 eZ Systems AS. All rights reserved.
 * @license http://ez.no/licenses/gnu_gpl GNU General Public License v2.0
 * @version 2012.9
 */

namespace eZ\Publish\Core\MVC\Symfony\View\Tests\ContentViewProvider\Configured\Matcher;

use eZ\Publish\Core\MVC\Symfony\View\ContentViewProvider\Configured\Matcher\Depth as DepthMatcher,
    eZ\Publish\API\Repository\Values\Content\Location,
    eZ\Publish\API\Repository\Values\Content\ContentInfo,
    eZ\Publish\Core\MVC\Symfony\View\Tests\ContentViewProvider\Configured\BaseTest,
    eZ\Publish\API\Repository\Repository;

class ParentLocationTest extends BaseTest
{
    /**
     * @var \eZ\Publish\Core\MVC\Symfony\View\ContentViewProvider\Configured\Matcher\Depth
     */
    private $matcher;

    protected function setUp()
    {
        parent::setUp();
        $this->matcher = new DepthMatcher;
    }

    /**
     * @dataProvider matchLocationProvider
     * @covers \eZ\Publish\Core\MVC\Symfony\View\ContentViewProvider\Configured\Matcher\Depth::matchLocation
     * @covers \eZ\Publish\Core\MVC\Symfony\View\ContentViewProvider\Configured\Matcher\MultipleValued::setMatchingConfig
     *
     * @param $matchingConfig
     * @param \eZ\Publish\API\Repository\Values\Content\Location $location
     * @param $expectedResult
     */
    public function testMatchLocation( $matchingConfig, Location $location, $expectedResult )
    {
        $this->matcher->setMatchingConfig( $matchingConfig );
        $this->assertSame( $expectedResult, $this->matcher->matchLocation( $location ) );
    }

    public function matchLocationProvider()
    {
        return array(
            array(
                1,
                $this->getLocationMock( array( 'depth' => 1 ) ),
                true
            ),
            array(
                1,
                $this->getLocationMock( array( 'depth' => 2 ) ),
                false
            ),
            array(
                array( 1, 3 ),
                $this->getLocationMock( array( 'depth' => 2 ) ),
                false
            ),
            array(
                array( 1, 3 ),
                $this->getLocationMock( array( 'depth' => 3 ) ),
                true
            ),
            array(
                array( 1, 3 ),
                $this->getLocationMock( array( 'depth' => 0 ) ),
                false
            ),
            array(
                array( 0, 1 ),
                $this->getLocationMock( array( 'depth' => 0 ) ),
                true
            )
        );
    }

    /**
     * @dataProvider matchContentInfoProvider
     * @covers eZ\Publish\Core\MVC\Symfony\View\ContentViewProvider\Configured\Matcher\Depth::matchContentInfo
     * @covers eZ\Publish\Core\MVC\Symfony\View\ContentViewProvider\Configured\Matcher\MultipleValued::setMatchingConfig
     * @covers \eZ\Publish\Core\MVC\RepositoryAware::setRepository
     *
     * @param $matchingConfig
     * @param \eZ\Publish\API\Repository\Repository $repository
     * @param $expectedResult
     * @return void
     */
    public function testMatchContentInfo( $matchingConfig, Repository $repository, $expectedResult )
    {
        $this->matcher->setRepository( $repository );
        $this->matcher->setMatchingConfig( $matchingConfig );
        $this->assertSame(
            $expectedResult,
            $this->matcher->matchContentInfo( $this->getContentInfoMock() )
        );
    }

    public function matchContentInfoProvider()
    {
        return array(
            array(
                1,
                $this->generateRepositoryMockForDepth( 1 ),
                true
            ),
            array(
                1,
                $this->generateRepositoryMockForDepth( 2 ),
                false
            ),
            array(
                array( 1, 3 ),
                $this->generateRepositoryMockForDepth( 2 ),
                false
            ),
            array(
                array( 1, 3 ),
                $this->generateRepositoryMockForDepth( 3 ),
                true
            )
        );
    }

    /**
     * Returns a Repository mock configured to return the appropriate Location object with given parent location Id
     *
     * @param $depth
     * @return \PHPUnit_Framework_MockObject_MockObject
     */
    private function generateRepositoryMockForDepth( $depth )
    {
        $locationServiceMock = $this
            ->getMockBuilder( 'eZ\\Publish\\API\\Repository\\LocationService' )
            ->disableOriginalConstructor()
            ->getMock()
        ;
        $locationServiceMock->expects( $this->once() )
            ->method( 'loadMainLocation' )
            ->with( $this->isInstanceOf( 'eZ\\Publish\\API\\Repository\\Values\\Content\\ContentInfo' ) )
            ->will(
                $this->returnValue(
                    $this->getLocationMock( array( 'depth' => $depth ) )
                )
            )
        ;

        $repository = $this->getRepositoryMock();
        $repository
            ->expects( $this->once() )
            ->method( 'getLocationService' )
            ->will( $this->returnValue( $locationServiceMock ) )
        ;

        return $repository;
    }
}
