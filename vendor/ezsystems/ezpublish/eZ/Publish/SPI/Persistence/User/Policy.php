<?php
/**
 * File containing the Policy class
 *
 * @copyright Copyright (C) 1999-2012 eZ Systems AS. All rights reserved.
 * @license http://ez.no/licenses/gnu_gpl GNU General Public License v2.0
 * @version 2012.9
 */

namespace eZ\Publish\SPI\Persistence\User;
use eZ\Publish\SPI\Persistence\ValueObject;

/**
 */
class Policy extends ValueObject
{
    /**
     * ID of the policy
     *
     * @var mixed
     */
    public $id;

    /**
     * Foreign ID of the role
     *
     * @var mixed
     */
    public $roleId;

    /**
     * Name of module, associated with the Policy
     *
     * Eg: content
     *
     * @var string
     */
    public $module;

    /**
     * Name of the module function Or all functions with '*'
     *
     * Eg: read
     *
     * @var string
     */
    public $function;

    /**
     * Array of policy limitations, which is just a random hash map.
     *
     * The limitation array may look like:
     * <code>
     *  array(
     *      'Subtree' => array(
     *          '/1/2/',
     *          '/1/4/',
     *      ),
     *      'Foo' => array( 'Bar' ),
     *      …
     *  )
     * </code>
     *
     * Where the keys are the limitation identifiers, and the respective values
     * are an array of limitation values
     *
     * @var array|string If string, then only the value '*' is allowed, meaning all limitations.
     *                   Can not be a empty array as '*' should be used in this case.
     */
    public $limitations;
}
