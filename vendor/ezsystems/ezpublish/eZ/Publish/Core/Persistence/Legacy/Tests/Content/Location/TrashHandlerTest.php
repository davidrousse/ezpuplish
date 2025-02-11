<?php
/**
 * File contains: eZ\Publish\Core\Persistence\Legacy\Tests\Content\Trash\TrashHandlerTest class
 *
 * @copyright Copyright (C) 1999-2012 eZ Systems AS. All rights reserved.
 * @license http://ez.no/licenses/gnu_gpl GNU General Public License v2.0
 * @version 2012.9
 */

namespace eZ\Publish\Core\Persistence\Legacy\Tests\Content\Location;
use eZ\Publish\Core\Persistence\Legacy\Tests\TestCase,
    eZ\Publish\Core\Persistence\Legacy\Content\Location\Trash\Handler,
    eZ\Publish\SPI\Persistence\Content\Location\Trashed;

/**
 * Test case for TrashHandlerTest
 */
class TrashHandlerTest extends TestCase
{
    /**
     * Mocked location gateway instance
     *
     * @var \eZ\Publish\Core\Persistence\Legacy\Content\Location\Gateway
     */
    protected $locationGateway;

    /**
     * Mocked location mapper instance
     *
     * @var \eZ\Publish\Core\Persistence\Legacy\Content\Location\Mapper
     */
    protected $locationMapper;

    /**
     * Mocked content handler instance
     *
     * @var \PHPUnit_Framework_MockObject_MockObject
     */
    protected $contentHandler;

    /**
     * Returns the test suite with all tests declared in this class.
     *
     * @return \PHPUnit_Framework_TestSuite
     */
    public static function suite()
    {
        return new \PHPUnit_Framework_TestSuite( __CLASS__ );
    }

    protected function getTrashHandler()
    {
        $dbHandler = $this->getDatabaseHandler();
        return new Handler(
            $this->locationGateway = $this->getMock( 'eZ\\Publish\\Core\\Persistence\\Legacy\\Content\\Location\\Gateway' ),
            $this->locationMapper = $this->getMock( 'eZ\\Publish\\Core\\Persistence\\Legacy\\Content\\Location\\Mapper' ),
            $this->contentHandler = $this->getMockBuilder( 'eZ\\Publish\\Core\\Persistence\\Legacy\\Content\\Handler' )
                ->disableOriginalConstructor()
                ->getMock()
        );
    }

    /**
     * @covers \eZ\Publish\Core\Persistence\Legacy\Content\Location\Trash\Handler::trash
     */
    public function testTrash()
    {
        $handler = $this->getTrashHandler();

        $this->locationGateway
            ->expects( $this->at( 0 ) )
            ->method( 'getBasicNodeData' )
            ->with( 69 )
            ->will(
                $this->returnValue(
                    array(
                        'node_id' => 69,
                        'path_string' => '/1/2/69/',
                        'contentobject_id' => 67,
                    )
                )
            );

        $this->locationGateway
            ->expects( $this->once() )
            ->method( 'trashSubtree' )
            ->with( '/1/2/69/' );

        $this->locationGateway
            ->expects( $this->once() )
            ->method( 'loadTrashByLocation' )
            ->with( 69 )
            ->will( $this->returnValue( $array = array( 'data…' ) ) );

        $this->locationMapper
            ->expects( $this->once() )
            ->method( 'createLocationFromRow' )
            ->with( $array, null, new Trashed() )
            ->will( $this->returnValue( new Trashed( array( 'id' => 69 ) ) ) );

        $trashedObject = $handler->trash( 69 );
        self::assertInstanceOf( 'eZ\\Publish\\SPI\\Persistence\\Content\\Location\\Trashed', $trashedObject );
        self::assertSame( 69, $trashedObject->id );
    }

    /**
     * @covers \eZ\Publish\Core\Persistence\Legacy\Content\Location\Trash\Handler::recover
     */
    public function testRecover()
    {
        $handler = $this->getTrashHandler();

        $this->locationGateway
            ->expects( $this->at( 0 ) )
            ->method( 'untrashLocation' )
            ->with( 69, 23 )
            ->will(
                $this->returnValue(
                    new Trashed( array( 'id' => 70 ) )
                )
            );

        self::assertSame( 70, $handler->recover( 69, 23 ) );
    }

    /**
     * @covers \eZ\Publish\Core\Persistence\Legacy\Content\Location\Trash\Handler::loadTrashItem
     */
    public function testLoadTrashItem()
    {
        $handler = $this->getTrashHandler();

        $this->locationGateway
            ->expects( $this->at( 0 ) )
            ->method( 'loadTrashByLocation' )
            ->with( 69 )
            ->will( $this->returnValue( $array = array( 'data…' ) ) );

        $this->locationMapper
            ->expects( $this->at( 0 ) )
            ->method( 'createLocationFromRow' )
            ->with( $array, null, new Trashed() );

        $handler->loadTrashItem( 69 );
    }

    /**
     * @covers \eZ\Publish\Core\Persistence\Legacy\Content\Location\Trash\Handler::emptyTrash
     */
    public function testEmptyTrash()
    {
        $handler = $this->getTrashHandler();

        $expectedTrashed = array(
            array(
                'node_id' => 69,
                'path_string' => '/1/2/69/',
                'contentobject_id' => 67,
            ),
            array(
                'node_id' => 70,
                'path_string' => '/1/2/70/',
                'contentobject_id' => 68,
            )
        );

        // Index for locationGateway calls
        $i = 0;
        // Index for contentHandler calls
        $iContent = 0;
        // Index for locationMapper calls
        $iLocation = 0;
        $this->locationGateway
            ->expects( $this->at( $i++ ) )
            ->method( 'listTrashed' )
            ->will(
                $this->returnValue( $expectedTrashed )
            );

        foreach ( $expectedTrashed as $trashedElement )
        {
            $this->locationMapper
                ->expects( $this->at( $iLocation++ ) )
                ->method( 'createLocationFromRow' )
                ->will(
                    $this->returnValue(
                        new Trashed(
                            array(
                                'id' => $trashedElement['node_id'],
                                'contentId' => $trashedElement['contentobject_id'],
                                'pathString' => $trashedElement['path_string']
                            )
                        )
                    )
                );
            $this->locationGateway
                ->expects( $this->at( $i++ ) )
                ->method( 'removeElementFromTrash' )
                ->with( $trashedElement['node_id'] );

            $this->locationGateway
                ->expects( $this->at( $i++ ) )
                ->method( 'countLocationsByContentId' )
                ->with( $trashedElement['contentobject_id'] )
                ->will( $this->returnValue( 0 ) );

            $this->contentHandler
                ->expects( $this->at( $iContent++ ) )
                ->method( 'deleteContent' )
                ->with( $trashedElement['contentobject_id'] );
        }

        $handler->emptyTrash();
    }

    /**
     * @covers \eZ\Publish\Core\Persistence\Legacy\Content\Location\Trash\Handler::deleteTrashItem
     */
    public function testDeleteTrashItemNoMoreLocations()
    {
        $handler = $this->getTrashHandler();

        $this->locationGateway
            ->expects( $this->once() )
            ->method( 'loadTrashByLocation' )
            ->with( 69 )
            ->will(
                $this->returnValue(
                    array(
                        'node_id' => 69,
                        'contentobject_id' => 67,
                        'path_string' => '/1/2/69'
                    )
                )
            );

        $this->locationMapper
            ->expects( $this->once() )
            ->method( 'createLocationFromRow' )
            ->will(
                $this->returnValue(
                    new Trashed(
                        array(
                            'id' => 69,
                            'contentId' => 67,
                            'pathString' => '/1/2/69'
                        )
                    )
                )
            );

        $this->locationGateway
            ->expects( $this->once() )
            ->method( 'removeElementFromTrash' )
            ->with( 69 );

        $this->locationGateway
            ->expects( $this->once() )
            ->method( 'countLocationsByContentId' )
            ->with( 67 )
            ->will( $this->returnValue( 0 ) );

        $this->contentHandler
            ->expects( $this->once() )
            ->method( 'deleteContent' )
            ->with( 67 );

        $handler->deleteTrashItem( 69 );
    }

    /**
     * @covers \eZ\Publish\Core\Persistence\Legacy\Content\Location\Trash\Handler::deleteTrashItem
     */
    public function testDeleteTrashItemStillHaveLocations()
    {
        $handler = $this->getTrashHandler();

        $this->locationGateway
            ->expects( $this->once() )
            ->method( 'loadTrashByLocation' )
            ->with( 69 )
            ->will(
                $this->returnValue(
                    array(
                        'node_id' => 69,
                        'contentobject_id' => 67,
                        'path_string' => '/1/2/69'
                    )
                )
            );

        $this->locationMapper
            ->expects( $this->once() )
            ->method( 'createLocationFromRow' )
            ->will(
                $this->returnValue(
                    new Trashed(
                        array(
                            'id' => 69,
                            'contentId' => 67,
                            'pathString' => '/1/2/69'
                        )
                    )
                )
            );

        $this->locationGateway
            ->expects( $this->once() )
            ->method( 'removeElementFromTrash' )
            ->with( 69 );

        $this->locationGateway
            ->expects( $this->once() )
            ->method( 'countLocationsByContentId' )
            ->with( 67 )
            ->will( $this->returnValue( 1 ) );

        $this->contentHandler
            ->expects( $this->never() )
            ->method( 'deleteContent' );

        $handler->deleteTrashItem( 69 );
    }
}
