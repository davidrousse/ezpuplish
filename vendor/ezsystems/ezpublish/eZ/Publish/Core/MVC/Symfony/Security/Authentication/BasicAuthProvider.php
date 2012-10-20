<?php
/**
 * File containing the BasicAuthProvider class.
 *
 * @copyright Copyright (C) 1999-2012 eZ Systems AS. All rights reserved.
 * @license http://ez.no/licenses/gnu_gpl GNU General Public License v2.0
 * @version 2012.9
 */

namespace eZ\Publish\Core\MVC\Symfony\Security\Authentication;

use Symfony\Component\Security\Core\Authentication\Provider\UserAuthenticationProvider,
    Symfony\Component\Security\Core\Authentication\Token\UsernamePasswordToken,
    Symfony\Component\Security\Core\User\UserInterface,
    Symfony\Component\Security\Core\User\UserCheckerInterface,
    Symfony\Component\Security\Core\Exception\AuthenticationException,
    eZ\Publish\Core\MVC\Symfony\Security\User,
    eZ\Publish\Core\Base\Exceptions\NotFoundException;

class BasicAuthProvider extends UserAuthenticationProvider
{
    /**
     * @var \Closure
     */
    private $lazyRepository;

    public function __construct( \Closure $lazyRepository, UserCheckerInterface $userChecker, $providerKey, $hideUserNotFoundExceptions = true )
    {
        parent::__construct( $userChecker, $providerKey, $hideUserNotFoundExceptions );
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
     * {@inheritdoc}
     */
    protected function retrieveUser( $username, UsernamePasswordToken $token )
    {
        $repository = $this->getRepository();

        try
        {
            $apiUser = $repository->getUserService()->loadUserByCredentials( $username, $token->getCredentials() );
            $repository->setCurrentUser( $apiUser );
            return new User( $apiUser );
        }
        catch ( NotFoundException $e )
        {
            throw new AuthenticationException( 'Authentication to eZ Publish failed', null, $e->getCode(), $e );
        }
    }

    /**
     * {@inheritdoc}
     */
    protected function checkAuthentication( UserInterface $user, UsernamePasswordToken $token )
    {
        // No additional checks needed since everything is handled by the repository
        return;
    }
}
