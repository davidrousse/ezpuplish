<?php
/**
 * File containing the eZ\Publish\API\Repository\Values\User\UserUpdateStruct class.
 *
 * @copyright Copyright (C) 1999-2012 eZ Systems AS. All rights reserved.
 * @license http://ez.no/licenses/gnu_gpl GNU General Public License v2.0
 * @version 2012.9
 */

namespace eZ\Publish\API\Repository\Values\User;

use eZ\Publish\API\Repository\Values\ValueObject;

/**
 * This class is used to update a user in the repository
 */
class UserUpdateStruct extends ValueObject
{
    /**
     * If set the email address is updated with this value
     *
     * @var string|null
     */
    public $email;

    /**
     * If set the password is updated with this plain password
     *
     * @var string|null
     */
    public $password;

    /**
     * Flag to signal if user is enabled or not
     * If set the enabled status is changed to this value
     *
     * @var boolean|null
     */
    public $enabled;

    /**
     * Max number of time user is allowed to login
     * If set the maximal number of logins is changed to this value
     *
     * @var int|null
     */
    public $maxLogin;

    /**
     * The update structure for the profile content
     *
     * @var \eZ\Publish\API\Repository\Values\Content\ContentUpdateStruct
     */
    public $contentUpdateStruct = null;

    /**
     * The update structure  for the profile meta data
     *
     * @var \eZ\Publish\API\Repository\Values\Content\ContentMetadataUpdateStruct
     */
    public $contentMetadataUpdateStruct = null;
}
