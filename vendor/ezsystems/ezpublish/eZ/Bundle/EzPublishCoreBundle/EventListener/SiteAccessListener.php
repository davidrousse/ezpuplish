<?php
/**
 * File containing the SiteAccessListener class.
 *
 * @copyright Copyright (C) 1999-2012 eZ Systems AS. All rights reserved.
 * @license http://ez.no/licenses/gnu_gpl GNU General Public License v2.0
 * @version 2012.9
 */

namespace eZ\Bundle\EzPublishCoreBundle\EventListener;

use eZ\Publish\Core\MVC\Symfony\MVCEvents,
    eZ\Publish\Core\MVC\Symfony\Event\PostSiteAccessMatchEvent,
    eZ\Publish\Core\MVC\Symfony\SiteAccess\URILexer,
    Symfony\Component\EventDispatcher\EventSubscriberInterface,
    Symfony\Component\DependencyInjection\ContainerInterface;

/**
 * SiteAccess match listener.
 */
class SiteAccessListener implements EventSubscriberInterface
{
    /**
     * @var \Symfony\Component\DependencyInjection\ContainerInterface
     */
    private $container;

    public function __construct( ContainerInterface $container )
    {
        $this->container = $container;
    }

    public static function getSubscribedEvents()
    {
        return array(
            MVCEvents::SITEACCESS => array( 'onSiteAccessMatch', 255 )
        );
    }

    public function onSiteAccessMatch( PostSiteAccessMatchEvent $event )
    {
        $siteAccess = $event->getSiteAccess();
        $this->container->set( 'ezpublish.siteaccess', $siteAccess );

        // Analyse the pathinfo if needed since it might contain the siteaccess (i.e. like in URI mode)
        $pathinfo = $event->getRequest()->getPathInfo();
        if ( $siteAccess->matcher instanceof URILexer )
        {
            $semanticPathinfo = $siteAccess->matcher->analyseURI( $pathinfo );
        }
        else
        {
            $semanticPathinfo = $pathinfo;
        }

        // Storing the modified pathinfo in 'semanticPathinfo' request attribute, to keep a trace of it.
        // Routers implementing RequestMatcherInterface should thus use this attribute instead of the original pathinfo
        $event->getRequest()->attributes->set(
            'semanticPathinfo',
            $semanticPathinfo
        );

        if ( $this->container->hasParameter( "ezpublish.siteaccess.config.$siteAccess->name" ) )
        {
            $siteAccess->attributes->add(
                $this->container->getParameter( "ezpublish.siteaccess.config.$siteAccess->name" )
            );
        }
    }
}
