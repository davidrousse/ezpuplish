<?php
/**
 * File containing the eZ\Publish\Core\MVC\Symfony\SiteAccess\Tests\RouterHostPortURITest class
 *
 * @copyright Copyright (C) 1999-2012 eZ Systems AS. All rights reserved.
 * @license http://ez.no/licenses/gnu_gpl GNU General Public License v2.0
 * @version 2012.9
 */

namespace eZ\Publish\Core\MVC\Symfony\SiteAccess\Tests;
use PHPUnit_Framework_TestCase,
    eZ\Publish\Core\MVC\Symfony\SiteAccess\Router,
    eZ\Publish\Core\MVC\Symfony\Routing\SimplifiedRequest;

class RouterHostPortURITest extends PHPUnit_Framework_TestCase
{
    /**
     * @covers \eZ\Publish\Core\MVC\Symfony\SiteAccess\Router::__construct
     */
    public function testConstruct()
    {
        return new Router(
            "default_sa",
            array(
                "Map\\Host" => array(
                    "first_sa" => "first_sa",
                    "first_siteaccess" => "first_sa",
                    "third_siteaccess" => "third_sa",
                ),
                "Map\\Port" => array(
                    80 => "fifth_sa",
                    81 => "third_sa",
                    82 => "fourth_sa",
                    83 => "first_sa",
                    85 => "first_sa",
                    443 => "fourth_sa",
                ),
                "Map\\URI" => array(
                    "first_sa" => "first_sa",
                    "second_sa" => "second_sa",
                ),
            )
        );
    }

    /**
     * @depends testConstruct
     * @dataProvider matchProvider
     * @covers \eZ\Publish\Core\MVC\Symfony\SiteAccess\Router::match
     * @covers \eZ\Publish\Core\MVC\Symfony\SiteAccess\Matcher\Map::__construct
     * @covers \eZ\Publish\Core\MVC\Symfony\SiteAccess\Matcher\Map::match
     * @covers \eZ\Publish\Core\MVC\Symfony\SiteAccess\Matcher\Map\URI::__construct
     * @covers \eZ\Publish\Core\MVC\Symfony\SiteAccess\Matcher\Map\Host::__construct
     * @covers \eZ\Publish\Core\MVC\Symfony\SiteAccess\Matcher\Map\Port::__construct
     */
    public function testMatch( $request, $siteAccess, $router )
    {
        $sa = $router->match( $request );
        $this->assertInstanceOf( 'eZ\\Publish\\Core\\MVC\\Symfony\\SiteAccess', $sa );
        $this->assertSame( $siteAccess, $sa->name );
    }

    public function matchProvider()
    {
        return array(
            array( SimplifiedRequest::fromUrl( "http://example.com" ), "fifth_sa" ),
            array( SimplifiedRequest::fromUrl( "https://example.com" ), "fourth_sa" ),
            array( SimplifiedRequest::fromUrl( "http://example.com/" ), "fifth_sa" ),
            array( SimplifiedRequest::fromUrl( "https://example.com/" ), "fourth_sa" ),
            array( SimplifiedRequest::fromUrl( "http://example.com//" ), "fifth_sa" ),
            array( SimplifiedRequest::fromUrl( "https://example.com//" ), "fourth_sa" ),
            array( SimplifiedRequest::fromUrl( "http://example.com:8080/" ), "default_sa" ),
            array( SimplifiedRequest::fromUrl( "http://example.com/first_siteaccess/" ), "fifth_sa" ),
            array( SimplifiedRequest::fromUrl( "http://example.com/?first_siteaccess" ), "fifth_sa" ),
            array( SimplifiedRequest::fromUrl( "http://example.com/?first_sa" ), "fifth_sa" ),
            array( SimplifiedRequest::fromUrl( "http://example.com/first_salt" ), "fifth_sa" ),
            array( SimplifiedRequest::fromUrl( "http://example.com/first_sa.foo" ), "fifth_sa" ),
            array( SimplifiedRequest::fromUrl( "http://example.com/test" ), "fifth_sa" ),
            array( SimplifiedRequest::fromUrl( "http://example.com/test/foo/" ), "fifth_sa" ),
            array( SimplifiedRequest::fromUrl( "http://example.com/test/foo/bar/" ), "fifth_sa" ),
            array( SimplifiedRequest::fromUrl( "http://example.com/test/foo/bar/first_sa" ), "fifth_sa" ),
            array( SimplifiedRequest::fromUrl( "http://example.com/default_sa" ), "fifth_sa" ),

            array( SimplifiedRequest::fromUrl( "http://example.com/first_sa" ), "fifth_sa" ),
            array( SimplifiedRequest::fromUrl( "http://example.com/first_sa/" ), "fifth_sa" ),
            array( SimplifiedRequest::fromUrl( "http://example.com/first_sa//" ), "fifth_sa" ),
            array( SimplifiedRequest::fromUrl( "http://example.com/first_sa///test" ), "fifth_sa" ),
            array( SimplifiedRequest::fromUrl( "http://example.com/first_sa/foo" ), "fifth_sa" ),
            array( SimplifiedRequest::fromUrl( "http://example.com/first_sa/foo/bar" ), "fifth_sa" ),
            array( SimplifiedRequest::fromUrl( "http://example.com:82/first_sa/" ), "fourth_sa" ),
            array( SimplifiedRequest::fromUrl( "http://third_siteaccess/first_sa/" ), "third_sa" ),
            array( SimplifiedRequest::fromUrl( "http://first_sa/" ), "first_sa" ),
            array( SimplifiedRequest::fromUrl( "https://first_sa/" ), "first_sa" ),
            array( SimplifiedRequest::fromUrl( "http://first_sa:81/" ), "first_sa" ),
            array( SimplifiedRequest::fromUrl( "http://first_siteaccess/" ), "first_sa" ),
            array( SimplifiedRequest::fromUrl( "http://first_siteaccess:82/" ), "first_sa" ),
            array( SimplifiedRequest::fromUrl( "http://first_siteaccess:83/" ), "first_sa" ),
            array( SimplifiedRequest::fromUrl( "http://first_siteaccess/foo/" ), "first_sa" ),
            array( SimplifiedRequest::fromUrl( "http://first_siteaccess:82/foo/" ), "first_sa" ),
            array( SimplifiedRequest::fromUrl( "http://first_siteaccess:83/foo/" ), "first_sa" ),

            array( SimplifiedRequest::fromUrl( "http://example.com/second_sa" ), "fifth_sa" ),
            array( SimplifiedRequest::fromUrl( "http://example.com/second_sa/" ), "fifth_sa" ),
            array( SimplifiedRequest::fromUrl( "http://example.com/second_sa?param1=foo" ), "fifth_sa" ),
            array( SimplifiedRequest::fromUrl( "http://example.com/second_sa/foo/" ), "fifth_sa" ),
            array( SimplifiedRequest::fromUrl( "http://example.com:82/second_sa/" ), "fourth_sa" ),
            array( SimplifiedRequest::fromUrl( "http://example.com:83/second_sa/" ), "first_sa" ),
            array( SimplifiedRequest::fromUrl( "http://first_siteaccess:82/second_sa/" ), "first_sa" ),
            array( SimplifiedRequest::fromUrl( "http://first_siteaccess:83/second_sa/" ), "first_sa" ),

            array( SimplifiedRequest::fromUrl( "http://first_sa:123/second_sa" ), "first_sa" ),
            array( SimplifiedRequest::fromUrl( "http://first_siteaccess:123/second_sa/" ), "first_sa" ),
            array( SimplifiedRequest::fromUrl( "http://example.com:123/second_sa?param1=foo" ), "second_sa" ),
            array( SimplifiedRequest::fromUrl( "http://example.com:123/second_sa/foo/" ), "second_sa" ),
            array( SimplifiedRequest::fromUrl( "http://example.com:123/second_sa" ), "second_sa" ),
            array( SimplifiedRequest::fromUrl( "http://example.com:123/second_sa/" ), "second_sa" ),
            array( SimplifiedRequest::fromUrl( "http://example.com:123/second_sa?param1=foo" ), "second_sa" ),
            array( SimplifiedRequest::fromUrl( "http://example.com:123/second_sa/foo/" ), "second_sa" ),

            array( SimplifiedRequest::fromUrl( "http://example.com:81/" ), "third_sa" ),
            array( SimplifiedRequest::fromUrl( "https://example.com:81/" ), "third_sa" ),
            array( SimplifiedRequest::fromUrl( "http://example.com:81/foo" ), "third_sa" ),
            array( SimplifiedRequest::fromUrl( "http://example.com:81/foo/bar" ), "third_sa" ),

            array( SimplifiedRequest::fromUrl( "http://example.com:82/" ), "fourth_sa" ),
            array( SimplifiedRequest::fromUrl( "https://example.com:82/" ), "fourth_sa" ),
            array( SimplifiedRequest::fromUrl( "https://example.com:82/foo" ), "fourth_sa" ),
        );
    }
}
