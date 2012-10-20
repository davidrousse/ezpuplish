<?php
/**
 * File contains: eZ\Publish\Core\Repository\Tests\Service\UrlWildcardBase class
 *
 * @copyright Copyright (C) 1999-2012 eZ Systems AS. All rights reserved.
 * @license http://ez.no/licenses/gnu_gpl GNU General Public License v2.0
 * @version 2012.9
 */

namespace eZ\Publish\Core\Repository\Tests\Service;

use eZ\Publish\Core\Repository\Tests\Service\Base as BaseServiceTest,
    eZ\Publish\Core\Repository\URLWildcardService,
    eZ\Publish\API\Repository\Values\Content\URLWildcard,
    eZ\Publish\API\Repository\Values\Content\URLWildcardTranslationResult;

/**
 * Test case for UrlWildcard Service
 */
abstract class UrlWildcardBase extends BaseServiceTest
{
    /**
     * Test for the __construct() method.
     *
     * @covers \eZ\Publish\Core\Repository\UrlWildcardService::__construct
     */
    public function testConstructor()
    {
        $service = $this->getMockedService();

        self::assertAttributeSame( $this->getRepositoryMock(), "repository", $service );
        self::assertAttributeSame( $this->getHandlerMock(), "urlWildcardHandler", $service );
        self::assertAttributeSame( array( "settings" ), "settings", $service );
    }

    /**
     * Test for the load() method.
     *
     * @covers \eZ\Publish\Core\Repository\UrlWildcardService::load
     */
    public function testLoad()
    {
        $service = $this->repository->getURLWildcardService();
        $service->create( "fruit/*", "food/{1}", true );

        $urlWildcard = $service->load( 1 );
        self::assertEquals(
            new URLWildcard(
                array(
                    "id" => 1,
                    "sourceUrl" => "fruit/*",
                    "destinationUrl" => "food/{1}",
                    "forward" => true
                )
            ),
            $urlWildcard
        );
    }

    /**
     * Test for the load() method.
     *
     * @covers \eZ\Publish\Core\Repository\UrlWildcardService::load
     * @expectedException \eZ\Publish\API\Repository\Exceptions\NotFoundException
     */
    public function testLoadThrowsNotFoundException()
    {
        $service = $this->repository->getURLWildcardService();

        $service->load( 100 );
    }

    /**
     * @return array
     */
    public function providerForTestCreate()
    {
        return array(
            array( "fruit", "food", true ),
            array( " /fruit/ ", " /food/ ", true ),
            array( "fruit/*", "food", false ),
            array( "fruit/*", "food/{1}", true ),
            array( "fruit/*/*", "food/{1}", true ),
            array( "fruit/*/*", "food/{2}", true ),
            array( "fruit/*/*", "food/{1}/{2}", true ),
        );
    }

    /**
     * Test for the create() method.
     *
     * @covers \eZ\Publish\Core\Repository\UrlWildcardService::create
     * @dataProvider providerForTestCreate
     */
    public function testCreate( $sourceUrl, $destinationUrl, $forward )
    {
        $service = $this->repository->getURLWildcardService();
        $urlWildcard = $service->create( $sourceUrl, $destinationUrl, $forward );

        self::assertEquals(
            new URLWildcard(
                array(
                    "id" => 1,
                    "sourceUrl" => trim( $sourceUrl, "/ " ),
                    "destinationUrl" => trim( $destinationUrl, "/ " ),
                    "forward" => $forward
                )
            ),
            $urlWildcard
        );

        return $urlWildcard;
    }

    /**
     * Test for the create() method.
     *
     * @covers \eZ\Publish\Core\Repository\UrlWildcardService::create
     * @dataProvider providerForTestCreate
     */
    public function testCreatedUrlWildcardIsLoadable( $sourceUrl, $destinationUrl, $forward )
    {
        $service = $this->repository->getURLWildcardService();
        $urlWildcard = $service->create( $sourceUrl, $destinationUrl, $forward );

        self::assertEquals(
            $urlWildcard,
            $service->load( $urlWildcard->id )
        );
    }

    /**
     * Test for the create() method.
     *
     * @covers \eZ\Publish\Core\Repository\UrlWildcardService::create
     * @depends testCreate
     * @depends testLoad
     * @expectedException \eZ\Publish\API\Repository\Exceptions\NotFoundException
     */
    public function testCreateWithRollback()
    {
        $service = $this->repository->getURLWildcardService();

        $this->repository->beginTransaction();
        $service->create( "fruit/*", "food/{1}", true );
        $this->repository->rollback();

        $service->load( 1 );
    }

    /**
     * Test for the create() method.
     *
     * @covers \eZ\Publish\Core\Repository\UrlWildcardService::create
     * @expectedException \eZ\Publish\API\Repository\Exceptions\InvalidArgumentException
     */
    public function testCreateThrowsInvalidArgumentException()
    {
        $service = $this->repository->getURLWildcardService();

        $service->create( "fruit/*", "food/{1}", true );
        $service->create( "fruit/*", "food/{1}", true );
    }

    /**
     * @return array
     */
    public function providerForTestCreateThrowsContentValidationException()
    {
        return array(
            array( "fruit", "food/{1}", true ),
            array( "fruit/*", "food/{2}", false ),
            array( "fruit/*/*", "food/{3}", true ),
        );
    }

    /**
     * Test for the create() method.
     *
     * @covers \eZ\Publish\Core\Repository\UrlWildcardService::create
     * @expectedException \eZ\Publish\API\Repository\Exceptions\ContentValidationException
     * @dataProvider providerForTestCreateThrowsContentValidationException
     */
    public function testCreateThrowsContentValidationException( $sourceUrl, $destinationUrl, $forward )
    {
        $service = $this->repository->getURLWildcardService();

        $service->create( $sourceUrl, $destinationUrl, $forward );
    }

    /**
     * Test for the create() method.
     *
     * @covers \eZ\Publish\Core\Repository\UrlWildcardService::create
     * @expectedException \eZ\Publish\API\Repository\Exceptions\UnauthorizedException
     */
    public function testCreateThrowsUnauthorizedException()
    {
        $mockedService = $this->getMockedService();
        $repositoryMock = $this->getRepositoryMock();
        $repositoryMock->expects(
            $this->once()
        )->method(
            "hasAccess"
        )->with(
            $this->equalTo( "content" ),
            $this->equalTo( "urltranslator" )
        )->will(
            $this->returnValue( false )
        );

        $mockedService->create( "lorem/ipsum", "opossum", true );
    }

    /**
     * Test for the remove() method.
     *
     * @covers \eZ\Publish\Core\Repository\UrlWildcardService::remove
     * @depends testCreate
     * @depends testLoad
     * @expectedException \eZ\Publish\API\Repository\Exceptions\NotFoundException
     */
    public function testRemove()
    {
        $service = $this->repository->getURLWildcardService();

        $service->create( "fruit/*", "food/{1}", true );
        $urlWildcard = $service->load( 1 );
        $service->remove( $urlWildcard );

        $service->load( 1 );
    }

    /**
     * Test for the remove() method.
     *
     * @covers \eZ\Publish\Core\Repository\UrlWildcardService::remove
     * @depends testRemove
     */
    public function testRemoveWithRollback()
    {
        $service = $this->repository->getURLWildcardService();

        $service->create( "fruit/*", "food/{1}", true );
        $urlWildcard = $service->load( 1 );

        $this->repository->beginTransaction();
        $service->remove( $urlWildcard );
        $this->repository->rollback();

        self::assertEquals(
            $urlWildcard,
            $service->load( 1 )
        );
    }

    /**
     * Test for the remove() method.
     *
     * @covers \eZ\Publish\Core\Repository\UrlWildcardService::remove
     * @expectedException \eZ\Publish\API\Repository\Exceptions\UnauthorizedException
     */
    public function testRemoveThrowsUnauthorizedException()
    {
        $mockedService = $this->getMockedService();
        $repositoryMock = $this->getRepositoryMock();
        $repositoryMock->expects(
            $this->once()
        )->method(
            "hasAccess"
        )->with(
            $this->equalTo( "content" ),
            $this->equalTo( "urltranslator" )
        )->will(
            $this->returnValue( false )
        );

        $mockedService->remove( new URLWildcard() );
    }

    /**
     * Test for the loadAll() method.
     *
     * @covers \eZ\Publish\Core\Repository\UrlWildcardService::loadAll
     * @depends testCreate
     */
    public function testLoadAll()
    {
        $service = $this->repository->getURLWildcardService();
        $service->create( "fruit/*", "food/{1}", true );
        $service->create( "vegetable/*", "food/{1}", true );

        $urlWildcard = $service->loadAll();
        self::assertEquals(
            array(
                new URLWildcard(
                    array(
                        "id" => 1,
                        "sourceUrl" => "fruit/*",
                        "destinationUrl" => "food/{1}",
                        "forward" => true
                    )
                ),
                new URLWildcard(
                    array(
                        "id" => 2,
                        "sourceUrl" => "vegetable/*",
                        "destinationUrl" => "food/{1}",
                        "forward" => true
                    )
                ),
            ),
            $urlWildcard
        );
    }

    /**
     * Test for the loadAll() method.
     *
     * @covers \eZ\Publish\Core\Repository\UrlWildcardService::loadAll
     * @depends testCreate
     */
    public function testLoadAllWithOffset()
    {
        $service = $this->repository->getURLWildcardService();
        $service->create( "fruit/*", "food/{1}", true );
        $service->create( "vegetable/*", "food/{1}", true );
        $service->create( "seed/*", "food/{1}", true );

        $urlWildcard = $service->loadAll( 1 );
        self::assertEquals(
            array(
                new URLWildcard(
                    array(
                        "id" => 2,
                        "sourceUrl" => "vegetable/*",
                        "destinationUrl" => "food/{1}",
                        "forward" => true
                    )
                ),
                new URLWildcard(
                    array(
                        "id" => 3,
                        "sourceUrl" => "seed/*",
                        "destinationUrl" => "food/{1}",
                        "forward" => true
                    )
                ),
            ),
            $urlWildcard
        );
    }

    /**
     * Test for the loadAll() method.
     *
     * @covers \eZ\Publish\Core\Repository\UrlWildcardService::loadAll
     * @depends testCreate
     */
    public function testLoadAllWithOffsetAndLimit()
    {
        $service = $this->repository->getURLWildcardService();
        $service->create( "fruit/*", "food/{1}", true );
        $service->create( "vegetable/*", "food/{1}", true );
        $service->create( "seed/*", "food/{1}", true );

        $urlWildcard = $service->loadAll( 1, 1 );
        self::assertEquals(
            array(
                new URLWildcard(
                    array(
                        "id" => 2,
                        "sourceUrl" => "vegetable/*",
                        "destinationUrl" => "food/{1}",
                        "forward" => true
                    )
                ),
            ),
            $urlWildcard
        );
    }

    /**
     * @return array
     */
    public function providerForTestTranslate()
    {
        return array(
            array(
                array( "fruit/apricot", "food/apricot", true ),
                "fruit/apricot",
                "food/apricot"
            ),
            array(
                array( "fruit/*", "food/{1}", true ),
                "fruit/citrus",
                "food/citrus"
            ),
            array(
                array( "fruit/*", "food/{1}", true ),
                "fruit/citrus/orange",
                "food/citrus/orange"
            ),
            array(
                array( "fruit/*/*", "food/{2}", true ),
                "fruit/citrus/orange",
                "food/orange"
            ),
            array(
                array( "fruit/*/*", "food/{1}/{2}", true ),
                "fruit/citrus/orange",
                "food/citrus/orange"
            ),
        );
    }

    /**
     * Test for the translate() method.
     *
     * @covers \eZ\Publish\Core\Repository\UrlWildcardService::translate
     * @dataProvider providerForTestTranslate
     * @depends testCreate
     */
    public function testTranslate( $createArray, $url, $uri )
    {
        $service = $this->repository->getURLWildcardService();
        list( $createSourceUrl, $createDestinationUrl, $createForward ) = $createArray;
        $service->create( $createSourceUrl, $createDestinationUrl, $createForward );

        $translationResult = $service->translate( $url );

        self::assertEquals(
            new URLWildcardTranslationResult(
                array(
                    "uri" => $uri,
                    "forward" => $createForward
                )
            ),
            $translationResult
        );
    }

    /**
     * Test for the translate() method.
     *
     * @covers \eZ\Publish\Core\Repository\UrlWildcardService::translate
     */
    public function testTranslateUsesLongestMatchingWildcard()
    {
        $service = $this->repository->getURLWildcardService();
        $service->create( "something/*", "short", true );
        $service->create( "something/something/*", "long", false );

        $translationResult = $service->translate( "something/something/thing" );

        self::assertEquals(
            new URLWildcardTranslationResult(
                array(
                    "uri" => "long",
                    "forward" => false
                )
            ),
            $translationResult
        );
    }

    /**
     * Test for the translate() method.
     *
     * @covers \eZ\Publish\Core\Repository\UrlWildcardService::translate
     * @expectedException \eZ\Publish\API\Repository\Exceptions\NotFoundException
     */
    public function testTranslateThrowsNotFoundException()
    {
        $service = $this->repository->getURLWildcardService();

        $service->translate( "cant/get/there/from/here" );
    }

    /**
     * @var \eZ\Publish\Core\Repository\URLWildcardService
     */
    private $mockedService;

    /**
     * @var \eZ\Publish\API\Repository\Repository
     */
    private $repositoryMock;

    /**
     * @var \eZ\Publish\SPI\Persistence\Content\UrlWildcard\Handler
     */
    private $handlerMock;

    /**
     * @return \eZ\Publish\Core\Repository\URLWildcardService
     */
    private function getMockedService()
    {
        if ( !isset( $this->mockedService ) )
        {
            $this->mockedService = new URLWildcardService(
                $this->getRepositoryMock(),
                $this->getHandlerMock(),
                array( "settings" )
            );
        }

        return $this->mockedService;
    }

    /**
     * @return \eZ\Publish\API\Repository\Repository|\PHPUnit_Framework_MockObject_MockObject
     */
    private function getRepositoryMock()
    {
        if ( !isset( $this->repositoryMock ) )
        {
            $this->repositoryMock = self::getMock( "eZ\\Publish\\API\\Repository\\Repository" );
        }

        return $this->repositoryMock;
    }

    /**
     * @return \eZ\Publish\SPI\Persistence\Content\UrlWildcard\Handler|\PHPUnit_Framework_MockObject_MockObject
     */
    private function getHandlerMock()
    {
        if ( !isset( $this->handlerMock ) )
        {
            $this->handlerMock = self::getMock( "eZ\\Publish\\SPI\\Persistence\\Content\\UrlWildcard\\Handler" );
        }

        return $this->handlerMock;
    }
}
