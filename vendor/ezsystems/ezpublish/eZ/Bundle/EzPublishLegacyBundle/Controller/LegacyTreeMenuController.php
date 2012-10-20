<?php
/**
 * File containing the LegacyTreeMenuController class.
 *
 * @copyright Copyright (C) 1999-2012 eZ Systems AS. All rights reserved.
 * @license http://ez.no/licenses/gnu_gpl GNU General Public License v2.0
 * @version 2012.9
 */

namespace eZ\Bundle\EzPublishLegacyBundle\Controller;

use eZ\Publish\Core\MVC\Symfony\Controller\Controller,
    eZ\Publish\Core\MVC\Legacy\Kernel\Loader,
    ezpKernelTreeMenu,
    Symfony\Component\HttpFoundation\Response,
    Symfony\Component\OptionsResolver\OptionsResolver;

class LegacyTreeMenuController extends Controller
{
    /**
     * @var \ezpKernelHandler
     */
    protected $treeMenuKernel;

    public function __construct( \Closure $treeMenuKernelHandler, Loader $legacyKernelFactory, array $options = array() )
    {
        $kernelClosure = $legacyKernelFactory->buildLegacyKernel( $treeMenuKernelHandler );
        $this->treeMenuKernel = $kernelClosure();
    }

    /**
     * Action rendering the tree menu for admin interface.
     * Note that parameters are not used at all since the request is entirely forwarded to the legacy kernel.
     *
     * @param $nodeId
     * @param $modified
     * @param $expiry
     * @param $perm
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function viewMenu( $nodeId, $modified, $expiry, $perm )
    {
        $response = new Response();
        if ( $this->getParameter( 'treemenu.http_cache' ) )
        {
            $request = $this->getRequest();
            $response->setMaxAge( $this->getParameter( 'treemenu.ttl_cache' ) );
            // Aggressive cache : Always return a 304 response if "If-Modified-Since" request header is present.
            if ( $request->headers->has( 'If-Modified-Since' ) )
            {
                $response->setNotModified();
                return $response;
            }
        }

        $result = $this->treeMenuKernel->run();
        if ( $result->hasAttribute( 'lastModified' ) )
            $response->setLastModified( $result->getAttribute( 'lastModified' ) );
        $response->setContent( $result->getContent() );
        return $response;
    }
}
