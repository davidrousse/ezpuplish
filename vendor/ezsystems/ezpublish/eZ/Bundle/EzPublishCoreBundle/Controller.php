<?php
/**
 * File containing the Controller class.
 *
 * @copyright Copyright (C) 1999-2012 eZ Systems AS. All rights reserved.
 * @license http://ez.no/licenses/gnu_gpl GNU General Public License v2.0
 * @version 2012.9
 */

namespace eZ\Bundle\EzPublishCoreBundle;

use Symfony\Bundle\FrameworkBundle\Controller\Controller as BaseController,
    eZ\Publish\Core\MVC\Symfony\Security\Authorization\Attribute as AuthorizationAttribute;

class Controller extends BaseController
{
    /**
     * @var \Closure
     */
    private $legacyKernelClosure;

    /**
     * @return \eZ\Publish\API\Repository\Repository
     * @throws \LogicException
     */
    public function getRepository()
    {
        if ( !$this->container->has( 'ezpublish.api.repository' ) )
            throw new \LogicException( 'The EzPublishCoreBundle has not been registered in your application.' );

        return $this->container->get( 'ezpublish.api.repository' );
    }

    /**
     * Returns the legacy kernel object.
     *
     * @return \eZ\Publish\Core\MVC\Legacy\Kernel
     */
    final protected function getLegacyKernel()
    {
        if ( !isset( $this->legacyKernelClosure ) )
            $this->legacyKernelClosure = $this->get( 'ezpublish_legacy.kernel' );

        $legacyKernelClosure = $this->legacyKernelClosure;
        return $legacyKernelClosure();
    }

    /**
     * @return \eZ\Bundle\EzPublishCoreBundle\DependencyInjection\Configuration\ConfigResolver
     */
    protected function getConfigResolver()
    {
        return $this->container->get( 'ezpublish.config.resolver' );
    }

    /**
     * Checks if current user has granted access to provided attribute
     *
     * @param \eZ\Publish\Core\MVC\Symfony\Security\Authorization\Attribute $attribute
     * @return bool
     */
    public function isGranted( AuthorizationAttribute $attribute )
    {
        return $this->container->get( 'security.context' )->isGranted( $attribute );
    }
}
