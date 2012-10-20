<?php
/**
 * File containing the eZ\Publish\API\Repository\Values\User\UserCreateStruct class.
 *
 * @copyright Copyright (C) 1999-2012 eZ Systems AS. All rights reserved.
 * @license http://ez.no/licenses/gnu_gpl GNU General Public License v2.0
 * @version 2012.9
 */

namespace eZ\Publish\API\Repository\Values\User;

use eZ\Publish\API\Repository\Values\Content\ContentCreateStruct;

/**
 * This class is used to create a new user in the repository
 */
abstract class UserCreateStruct extends ContentCreateStruct
{
    /**
     * User login
     *
     * @required
     *
     * @var string
     */
    public $login;

    /**
     * User E-Mail address
     *
     * @required
     *
     * @var string
     */
    public $email;

    /**
     * The plain password
     *
     * @required
     *
     * @var string
     */
    public $password;

    /**
     * Indicates if the user is enabled after creation
     *
     * @var boolean
     */
    public $enabled = true;
}
