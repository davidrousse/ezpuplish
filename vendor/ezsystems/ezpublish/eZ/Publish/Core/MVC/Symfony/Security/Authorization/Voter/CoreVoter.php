<?php
/**
 * File containing the CoreVoter class.
 *
 * @copyright Copyright (C) 1999-2012 eZ Systems AS. All rights reserved.
 * @license http://ez.no/licenses/gnu_gpl GNU General Public License v2.0
 * @version 2012.9
 */

namespace eZ\Publish\Core\MVC\Symfony\Security\Authorization\Voter;

use Symfony\Component\Security\Core\Authorization\Voter\VoterInterface,
    Symfony\Component\Security\Core\Authentication\Token\TokenInterface,
    eZ\Publish\API\Repository\Repository,
    eZ\Publish\Core\MVC\Symfony\Security\Authorization\Attribute as AuthorizationAttribute,
    eZ\Publish\Core\MVC\Symfony\Security\User;

class CoreVoter implements VoterInterface
{
    /**
     * @var \Closure
     */
    private $lazyRepository;

    public function __construct( \Closure $lazyRepository )
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
     * Checks if the voter supports the given attribute.
     *
     * @param string $attribute An attribute
     *
     * @return Boolean true if this Voter supports the attribute, false otherwise
     */
    public function supportsAttribute( $attribute )
    {
        return $attribute instanceof AuthorizationAttribute;
    }

    /**
     * Checks if the voter supports the given class.
     *
     * @param string $class A class name
     *
     * @return true if this Voter can process the class
     */
    public function supportsClass( $class )
    {
        return true;
    }

    /**
     * Returns the vote for the given parameters.
     *
     * This method must return one of the following constants:
     * ACCESS_GRANTED, ACCESS_DENIED, or ACCESS_ABSTAIN.
     *
     * @param TokenInterface $token      A TokenInterface instance
     * @param object         $object     The object to secure
     * @param array          $attributes An array of attributes associated with the method being invoked
     *
     * @return integer either ACCESS_GRANTED, ACCESS_ABSTAIN, or ACCESS_DENIED
     */
    public function vote( TokenInterface $token, $object, array $attributes )
    {
        $user = $token->getUser();
        if ( $user instanceof User )
        {
            foreach ( $attributes as $attribute )
            {
                if ( $this->supportsAttribute( $attribute ) )
                {
                    // TODO: add limitation when available in the repository
                    if ( $this->getRepository()->hasAccess( $attribute->module, $attribute->function ) === false )
                        return VoterInterface::ACCESS_DENIED;

                    return VoterInterface::ACCESS_GRANTED;
                }
            }
        }

        return VoterInterface::ACCESS_ABSTAIN;
    }
}
