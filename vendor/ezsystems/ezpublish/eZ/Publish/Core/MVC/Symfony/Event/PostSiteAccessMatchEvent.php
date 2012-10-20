<?php
/**
 * File containing the PostSiteAccessMatchEvent class.
 *
 * @copyright Copyright (C) 1999-2012 eZ Systems AS. All rights reserved.
 * @license http://ez.no/licenses/gnu_gpl GNU General Public License v2.0
 * @version 2012.9
 */

namespace eZ\Publish\Core\MVC\Symfony\Event;

use Symfony\Component\EventDispatcher\Event,
    Symfony\Component\HttpFoundation\Request,
    eZ\Publish\Core\MVC\Symfony\SiteAccess;

/**
 * This event is triggered after SiteAccess matching process and allows further control on it and the associated request.
 */
class PostSiteAccessMatchEvent extends Event
{
    /**
     * @var \eZ\Publish\Core\MVC\Symfony\SiteAccess
     */
    private $siteAccess;

    /**
     * @var \Symfony\Component\HttpFoundation\Request
     */
    private $request;

    public function __construct( SiteAccess $siteAccess, Request $request )
    {
        $this->siteAccess = $siteAccess;
        $this->request = $request;
    }

    /**
     * @return \Symfony\Component\HttpFoundation\Request
     */
    public function getRequest()
    {
        return $this->request;
    }

    /**
     * Returns matched SiteAccess instance
     *
     * @return \eZ\Publish\Core\MVC\Symfony\SiteAccess
     */
    public function getSiteAccess()
    {
        return $this->siteAccess;
    }
}
