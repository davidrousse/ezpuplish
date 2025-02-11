<?php
/**
 * File contains: eZ\Publish\Core\Persistence\Legacy\Tests\Content\Language\LanguageHandlerTest class
 *
 * @copyright Copyright (C) 1999-2012 eZ Systems AS. All rights reserved.
 * @license http://ez.no/licenses/gnu_gpl GNU General Public License v2.0
 * @version 2012.9
 */

namespace eZ\Publish\Core\Persistence\Legacy\Tests\Content\Language;
use eZ\Publish\Core\Persistence\Legacy\Tests\TestCase,
    eZ\Publish\SPI\Persistence\Content\Language,
    eZ\Publish\Core\Persistence\Legacy\Content\Language\Handler;

/**
 * Test case for Language Handler
 */
class LanguageHandlerTest extends TestCase
{
    /**
     * Language handler
     *
     * @var \eZ\Publish\Core\Persistence\Legacy\Content\Language\Handler
     */
    protected $languageHandler;

    /**
     * Language gateway mock
     *
     * @var \eZ\Publish\Core\Persistence\Legacy\Content\Language\Gateway
     */
    protected $gatewayMock;

    /**
     * Language mapper mock
     *
     * @var \eZ\Publish\Core\Persistence\Legacy\Content\Language\Mapper
     */
    protected $mapperMock;

    /**
     * @return void
     * @covers \eZ\Publish\Core\Persistence\Legacy\Content\Language\Handler::create
     */
    public function testCreate()
    {
        $handler = $this->getLanguageHandler();

        $mapperMock = $this->getMapperMock();
        $mapperMock->expects( $this->once() )
            ->method( 'createLanguageFromCreateStruct' )
            ->with(
                $this->isInstanceOf(
                    'eZ\\Publish\\SPI\\Persistence\\Content\\Language\\CreateStruct'
                )
            )->will( $this->returnValue( new Language() ) );

        $gatewayMock = $this->getGatewayMock();
        $gatewayMock->expects( $this->once() )
            ->method( 'insertLanguage' )
            ->with(
                $this->isInstanceOf(
                    'eZ\\Publish\\SPI\\Persistence\\Content\\Language'
                )
            )->will( $this->returnValue( 2 ) );

        $createStruct = $this->getCreateStructFixture();

        $result = $handler->create( $createStruct );

        $this->assertInstanceOf(
            'eZ\\Publish\\SPI\\Persistence\\Content\\Language',
            $result
        );
        $this->assertEquals(
            2,
            $result->id
        );
    }

    /**
     * Returns a Language CreateStruct
     *
     * @return \eZ\Publish\SPI\Persistence\Content\Language\CreateStruct
     */
    protected function getCreateStructFixture()
    {
        return new Language\CreateStruct();
    }

    /**
     * @return void
     * @covers \eZ\Publish\Core\Persistence\Legacy\Content\Language\Handler::update
     */
    public function testUpdate()
    {
        $handler = $this->getLanguageHandler();

        $gatewayMock = $this->getGatewayMock();
        $gatewayMock->expects( $this->once() )
            ->method( 'updateLanguage' )
            ->with( $this->isInstanceOf( 'eZ\\Publish\\SPI\\Persistence\\Content\\Language' ) );

        $handler->update( $this->getLanguageFixture() );
    }

    /**
     * Returns a Language
     *
     * @return \eZ\Publish\SPI\Persistence\Content\Language
     */
    protected function getLanguageFixture()
    {
        return new Language();
    }

    /**
     * @return void
     * @covers \eZ\Publish\Core\Persistence\Legacy\Content\Language\Handler::load
     */
    public function testLoad()
    {
        $handler = $this->getLanguageHandler();
        $mapperMock = $this->getMapperMock();
        $gatewayMock = $this->getGatewayMock();

        $gatewayMock->expects( $this->once() )
            ->method( 'loadLanguageData' )
            ->with( $this->equalTo( 2 ) )
            ->will( $this->returnValue( array() ) );

        $mapperMock->expects( $this->once() )
            ->method( 'extractLanguagesFromRows' )
            ->with( $this->equalTo( array() ) )
            ->will( $this->returnValue( array( new Language() ) ) );

        $result = $handler->load( 2 );

        $this->assertInstanceOf(
            'eZ\\Publish\\SPI\\Persistence\\Content\\Language',
            $result
        );
    }

    /**
     * @return void
     * @covers \eZ\Publish\Core\Persistence\Legacy\Content\Language\Handler::load
     * @expectedException \eZ\Publish\API\Repository\Exceptions\NotFoundException
     */
    public function testLoadFailure()
    {
        $handler = $this->getLanguageHandler();
        $mapperMock = $this->getMapperMock();
        $gatewayMock = $this->getGatewayMock();

        $gatewayMock->expects( $this->once() )
            ->method( 'loadLanguageData' )
            ->with( $this->equalTo( 2 ) )
            ->will( $this->returnValue( array() ) );

        $mapperMock->expects( $this->once() )
            ->method( 'extractLanguagesFromRows' )
            ->with( $this->equalTo( array() ) )
            // No language extracted
            ->will( $this->returnValue( array() ) );

        $result = $handler->load( 2 );
    }

    /**
     * @return void
     * @covers \eZ\Publish\Core\Persistence\Legacy\Content\Language\Handler::loadByLanguageCode
     */
    public function testLoadByLanguageCode()
    {
        $handler = $this->getLanguageHandler();
        $mapperMock = $this->getMapperMock();
        $gatewayMock = $this->getGatewayMock();

        $gatewayMock->expects( $this->once() )
            ->method( 'loadLanguageDataByLanguageCode' )
            ->with( $this->equalTo( 'eng-US' ) )
            ->will( $this->returnValue( array() ) );

        $mapperMock->expects( $this->once() )
            ->method( 'extractLanguagesFromRows' )
            ->with( $this->equalTo( array() ) )
            ->will( $this->returnValue( array( new Language() ) ) );

        $result = $handler->loadByLanguageCode( 'eng-US' );

        $this->assertInstanceOf(
            'eZ\\Publish\\SPI\\Persistence\\Content\\Language',
            $result
        );
    }

    /**
     * @return void
     * @covers \eZ\Publish\Core\Persistence\Legacy\Content\Language\Handler::loadByLanguageCode
     * @expectedException \eZ\Publish\API\Repository\Exceptions\NotFoundException
     */
    public function testLoadByLanguageCodeFailure()
    {
        $handler = $this->getLanguageHandler();
        $mapperMock = $this->getMapperMock();
        $gatewayMock = $this->getGatewayMock();

        $gatewayMock->expects( $this->once() )
            ->method( 'loadLanguageDataByLanguageCode' )
            ->with( $this->equalTo( 'eng-US' ) )
            ->will( $this->returnValue( array() ) );

        $mapperMock->expects( $this->once() )
            ->method( 'extractLanguagesFromRows' )
            ->with( $this->equalTo( array() ) )
            // No language extracted
            ->will( $this->returnValue( array() ) );

        $result = $handler->loadByLanguageCode( 'eng-US' );
    }

    /**
     * @return void
     * @covers \eZ\Publish\Core\Persistence\Legacy\Content\Language\Handler::loadAll
     */
    public function testLoadAll()
    {
        $handler = $this->getLanguageHandler();
        $mapperMock = $this->getMapperMock();
        $gatewayMock = $this->getGatewayMock();

        $gatewayMock->expects( $this->once() )
            ->method( 'loadAllLanguagesData' )
            ->will( $this->returnValue( array() ) );

        $mapperMock->expects( $this->once() )
            ->method( 'extractLanguagesFromRows' )
            ->with( $this->equalTo( array() ) )
            ->will( $this->returnValue( array( new Language() ) ) );

        $result = $handler->loadAll();

        $this->assertInternalType(
            'array',
            $result
        );
    }

    /**
     * @return void
     * @covers \eZ\Publish\Core\Persistence\Legacy\Content\Language\Handler::delete
     */
    public function testDeleteSuccess()
    {
        $handler = $this->getLanguageHandler();
        $gatewayMock = $this->getGatewayMock();

        $gatewayMock->expects( $this->once() )
            ->method( 'canDeleteLanguage' )
            ->with( $this->equalTo( 2 ) )
            ->will( $this->returnValue( true ) );
        $gatewayMock->expects( $this->once() )
            ->method( 'deleteLanguage' )
            ->with( $this->equalTo( 2 ) );

        $result = $handler->delete( 2 );
    }

    /**
     * @covers \eZ\Publish\Core\Persistence\Legacy\Content\Language\Handler::delete
     * @expectedException LogicException
     */
    public function testDeleteFail()
    {
        $handler = $this->getLanguageHandler();
        $gatewayMock = $this->getGatewayMock();

        $gatewayMock->expects( $this->once() )
            ->method( 'canDeleteLanguage' )
            ->with( $this->equalTo( 2 ) )
            ->will( $this->returnValue( false ) );
        $gatewayMock->expects( $this->never() )
            ->method( 'deleteLanguage' );

        $result = $handler->delete( 2 );
    }

    /**
     * Returns the language handler to test
     *
     * @return \eZ\Publish\Core\Persistence\Legacy\Content\Language\Handler
     */
    protected function getLanguageHandler()
    {
        if ( !isset( $this->languageHandler ) )
        {
            $this->languageHandler = new Handler(
                $this->getGatewayMock(),
                $this->getMapperMock()
            );
        }
        return $this->languageHandler;
    }

    /**
     * Returns a language mapper mock
     *
     * @return \eZ\Publish\Core\Persistence\Legacy\Content\Language\Mapper
     */
    protected function getMapperMock()
    {
        if ( !isset( $this->mapperMock ) )
        {
            $this->mapperMock = $this->getMock(
                'eZ\\Publish\\Core\\Persistence\\Legacy\\Content\\Language\\Mapper'
            );
        }
        return $this->mapperMock;
    }

    /**
     * Returns a mock for the language gateway
     *
     * @return \eZ\Publish\Core\Persistence\Legacy\Content\Language\Gateway
     */
    protected function getGatewayMock()
    {
        if ( !isset( $this->gatewayMock ) )
        {
            $this->gatewayMock = $this->getMockForAbstractClass(
                'eZ\\Publish\\Core\\Persistence\\Legacy\\Content\\Language\\Gateway'
            );
        }
        return $this->gatewayMock;
    }

    /**
     * Returns the test suite with all tests declared in this class.
     *
     * @return \PHPUnit_Framework_TestSuite
     */
    public static function suite()
    {
        return new \PHPUnit_Framework_TestSuite( __CLASS__ );
    }
}
