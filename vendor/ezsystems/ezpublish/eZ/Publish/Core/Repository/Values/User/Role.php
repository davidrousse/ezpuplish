<?php
/**
 * File containing the eZ\Publish\Core\Repository\Values\User\Role class.
 *
 * @copyright Copyright (C) 1999-2012 eZ Systems AS. All rights reserved.
 * @license http://ez.no/licenses/gnu_gpl GNU General Public License v2.0
 * @version 2012.9
 */

namespace eZ\Publish\Core\Repository\Values\User;
use eZ\Publish\API\Repository\Values\User\Role as APIRole;

/**
 * This class represents a role
 *
 * @property-read \eZ\Publish\API\Repository\Values\User\Policy[] $policies Policies assigned to this role
 */
class Role extends APIRole
{
    /**
     * Policies assigned to this role
     *
     * @var \eZ\Publish\API\Repository\Values\User\Policy[]
     */
    protected $policies = array();

    /**
     * Human readable name in all provided languages
     *
     * @var string[]
     */
    protected $names = array();

    /**
     * Human readable descriptions in all provided languages
     *
     * @var string[]
     */
    protected $descriptions = array();

    /**
     *
     * This method returns the human readable name in all provided languages
     * of the role
     *
     * The structure of the return value is:
     * <code>
     * array( 'eng' => '<name_eng>', 'de' => '<name_de>' );
     * </code>
     *
     * @since 5.0
     *
     * @return string[]
     */
    public function getNames()
    {
        return $this->names;
    }

    /**
     * this method returns the name of the role in the given language
     *
     * @since 5.0
     *
     * @param string $languageCode
     *
     * @return string the name for the given language or null if none exists.
     */
    public function getName( $languageCode )
    {
        if ( !array_key_exists( $languageCode, $this->names ) )
            return null;

        return $this->names[$languageCode];
    }

    /**
     * This method returns the human readable description of the role
     *
     * The structure of this field is:
     * <code>
     * array( 'eng' => '<description_eng>', 'de' => '<description_de>' );
     * </code>
     *
     * @since 5.0
     *
     * @return string[]
     */
    public function getDescriptions()
    {
        return $this->descriptions;
    }

    /**
     * this method returns the name of the role in the given language
     *
     * @since 5.0
     *
     * @param string $languageCode
     *
     * @return string the description for the given language or null if none exists.
     */
    public function getDescription( $languageCode )
    {
        if ( !array_key_exists( $languageCode, $this->descriptions ) )
            return null;

        return $this->descriptions[$languageCode];
    }

    /**
     * returns the list of policies of this role
     * @return \eZ\Publish\API\Repository\Values\User\Policy[]
     */
    public function getPolicies()
    {
        return $this->policies;
    }
}
