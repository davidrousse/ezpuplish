<?php
/**
 * File containing the eZ\Publish\API\Repository\Values\Content\URLWildcard class.
 *
 * @copyright Copyright (C) 1999-2012 eZ Systems AS. All rights reserved.
 * @license http://ez.no/licenses/gnu_gpl GNU General Public License v2.0
 * @version 2012.9
 */

namespace eZ\Publish\API\Repository\Values\Content;

use eZ\Publish\API\Repository\Values\ValueObject;

/**
 * This class represents a url alias in the repository
 *
 * @property-read mixed $id A unique identifier for the alias
 * @property-read string $sourceUrl The source url with wildcards
 * @property-read string $destinationUrl The destination URL with placeholders
 * @property-read boolean $forward indicates if the url is redirected or not
 */

class URLWildcard extends ValueObject
{
    /**
     *
     * The unique id
     *
     * @var mixed
     */
    protected $id;

    /**
     * The source url including "*"
     *
     * @var string
     */
    protected $sourceUrl;

    /**
     * The destination url containing placeholders e.g. /destination/{1}
     *
     * @var string
     */
    protected $destinationUrl;

    /**
     * indicates if the url is redirected or not
     *
     * @var boolean
     */
    protected $forward;
}
