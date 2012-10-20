<?php
/**
 * File containing the RouterMapURITest class.
 *
 * @copyright Copyright (C) 1999-2012 eZ Systems AS. All rights reserved.
 * @license http://ez.no/licenses/gnu_gpl GNU General Public License v2.0
 * @version 2012.9
 */

namespace eZ\Publish\Core\MVC\Symfony\SiteAccess\Tests;

use eZ\Publish\Core\MVC\Symfony\SiteAccess\Matcher\Map\URI as URIMapMatcher,
    eZ\Publish\Core\MVC\Symfony\Routing\SimplifiedRequest;

class RouterMapURITest extends \PHPUnit_Framework_TestCase
{
    /**
     * @param $uri
     * @param $expectedFixedUpURI
     * @dataProvider fixupURIProvider
     * @covers \eZ\Publish\Core\MVC\Symfony\SiteAccess\Matcher\Map\URI::analyseURI
     */
    public function testAnalyseURI( $uri, $expectedFixedUpURI )
    {
        $matcher = new URIMapMatcher( array() );
        $matcher->setRequest(
            new SimplifiedRequest( array( 'pathinfo' => $uri ) )
        );
        $this->assertSame( $expectedFixedUpURI, $matcher->analyseURI( $uri ) );
    }

    /**
     * @param $fullUri
     * @param $linkUri
     * @dataProvider fixupURIProvider
     * @covers \eZ\Publish\Core\MVC\Symfony\SiteAccess\Matcher\Map\URI::analyseLink
     */
    public function testAnalyseLink( $fullUri, $linkUri )
    {
        $matcher = new URIMapMatcher( array() );
        $matcher->setRequest(
            new SimplifiedRequest( array( 'pathinfo' => $fullUri ) )
        );
        $this->assertSame( $fullUri, $matcher->analyseLink( $linkUri ) );
    }

    public function fixupURIProvider()
    {
        return array(
            array( '/my_siteaccess/foo/bar', '/foo/bar' ),
            array( '/vive/le/sucre', '/le/sucre' )
        );
    }
}
