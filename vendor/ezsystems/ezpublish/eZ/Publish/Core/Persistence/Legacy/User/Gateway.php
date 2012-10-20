<?php
/**
 * File containing the User Gateway class
 *
 * @copyright Copyright (C) 1999-2012 eZ Systems AS. All rights reserved.
 * @license http://ez.no/licenses/gnu_gpl GNU General Public License v2.0
 * @version 2012.9
 */

namespace eZ\Publish\Core\Persistence\Legacy\User;
use eZ\Publish\SPI\Persistence\User;

/**
 * Base class for user gateways.
 */
abstract class Gateway
{
    /**
     * Create user
     *
     * @param user $user
     * @return mixed
     */
    abstract public function createUser( User $user );

    /**
     * Delete user with the given ID.
     *
     * @param mixed $userId
     */
    abstract public function deleteUser( $userId );

    /**
     * Load user with user ID.
     *
     * @param mixed $userId
     * @return array
     */
    abstract public function load( $userId );

    /**
     * Load user with user ID.
     *
     * @param string $login
     * @param string|null $email
     * @return array
     */
     abstract public function loadByLoginOrMail( $login, $email = null );

    /**
     * Update the user information specified by the user struct
     *
     * @param User $user
     */
    abstract public function updateUser( User $user );

    /**
     * Assign role to user with given limitation
     *
     * @param mixed $contentId
     * @param mixed $roleId
     * @param array $limitation
     */
    abstract public function assignRole( $contentId, $roleId, array $limitation );

    /**
     * Remove role from user
     *
     * @param mixed $contentId
     * @param mixed $roleId
     */
    abstract public function removeRole( $contentId, $roleId );
}
