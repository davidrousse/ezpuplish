<?php
/**
 * File containing the eZ\Publish\API\Repository\Values\Content\URLWildcardTranslationResult class.
 *
 * @copyright Copyright (C) 1999-2012 eZ Systems AS. All rights reserved.
 * @license http://ez.no/licenses/gnu_gpl GNU General Public License v2.0
 * @version 2012.9
 */

namespace eZ\Publish\API\Repository\Values\Content;

use eZ\Publish\API\Repository\Values\ValueObject;

/**
 * This class represents a result of a translated url wildcard which is not an URLAlias
 *
 * @property-read string $uri The found resource uri
 * @property-read boolean $forward indicates if the url is redirected or not
 */

class URLWildcardTranslationResult extends ValueObject
{
    /**
     * The found resource uri
     *
     * @var string
     */
    protected $uri;

    /**
     * indicates if the url is redirected or not
     *
     * @var boolean
     */
    protected $forward;
}
