<?php
/**
 * File containing the Provider class.
 *
 * @copyright Copyright (C) 1999-2012 eZ Systems AS. All rights reserved.
 * @license http://ez.no/licenses/gnu_gpl GNU General Public License v2.0
 * @version 2012.9
 */

namespace eZ\Publish\Core\MVC\Symfony\Security\Authentication;

use Symfony\Component\Security\Core\Authentication\Provider\PreAuthenticatedAuthenticationProvider,
    Symfony\Component\Security\Core\Authentication\Token\TokenInterface,
    Symfony\Component\Security\Core\Authentication\Token\PreAuthenticatedToken,
    Symfony\Component\Security\Core\Exception\AuthenticationException,
    eZ\Publish\Core\MVC\Symfony\Security\User;

class Provider extends PreAuthenticatedAuthenticationProvider
{
    /**
     * @var \Closure
     */
    protected $lazyRepository;

    public function setLazyRepository( \Closure $lazyRepository )
    {
        $this->lazyRepository = $lazyRepository;
    }

    /**
     * @return \eZ\Publish\API\Repository\Repository
     */
    protected function getRepository()
    {
        $lazyRepository = $this->lazyRepository;
        return $lazyRepository();
    }

    /**
     * Attempts to authenticates a TokenInterface object.
     *
     * @param TokenInterface $token The TokenInterface instance to authenticate
     *
     * @return TokenInterface An authenticated TokenInterface instance, never null
     *
     * @throws AuthenticationException if the authentication fails
     */
    public function authenticate( TokenInterface $token )
    {
        if ( !$this->supports( $token ) )
            return null;

        $authenticatedToken = parent::authenticate( $token );
        if ( $authenticatedToken instanceof PreAuthenticatedToken )
        {
            $user = $authenticatedToken->getUser();
            if ( !$user instanceof User )
                throw new AuthenticationException( 'Invalid eZ Publish user. Expected type is eZ\\Publish\\Core\\MVC\\Symfony\\Security\\User. Got ' . get_class( $user ) );

            // Inject current user in the repository
            $this->getRepository()->setCurrentUser( $user->getAPIUser() );

            return $authenticatedToken;
        }

        throw new AuthenticationException( 'The eZ Publish user could not be retrieved from the session' );
    }
}
