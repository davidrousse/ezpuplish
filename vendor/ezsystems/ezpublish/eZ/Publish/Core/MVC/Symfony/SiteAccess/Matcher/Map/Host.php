<?php
/**
 * File containing the eZ\Publish\Core\MVC\Symfony\SiteAccess\Matcher\Map\Host class.
 *
 * @copyright Copyright (C) 1999-2012 eZ Systems AS. All rights reserved.
 * @license http://ez.no/licenses/gnu_gpl GNU General Public License v2.0
 * @version 2012.9
 */

namespace eZ\Publish\Core\MVC\Symfony\SiteAccess\Matcher\Map;

use eZ\Publish\Core\MVC\Symfony\SiteAccess\Matcher,
    eZ\Publish\Core\MVC\Symfony\SiteAccess\Matcher\Map,
    eZ\Publish\Core\MVC\Symfony\Routing\SimplifiedRequest;

class Host extends Map implements Matcher
{
    /**
     * Constructor.
     *
     * @param array $siteAccessesConfiguration SiteAccesses configuration.
     */
    public function __construct( array $siteAccessesConfiguration )
    {
        parent::__construct( $siteAccessesConfiguration );
    }

    public function getName()
    {
        return 'host:map';
    }

    /**
     * Injects the request object to match against.
     *
     * @param \eZ\Publish\Core\MVC\Symfony\Routing\SimplifiedRequest $request
     * @return void
     */
    public function setRequest( SimplifiedRequest $request )
    {
        $this->setMapKey( $request->host );
    }
}
