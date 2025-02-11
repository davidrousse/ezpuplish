<?php
/**
 * File containing the UrlWildcard class
 *
 * @copyright Copyright (C) 1999-2012 eZ Systems AS. All rights reserved.
 * @license http://ez.no/licenses/gnu_gpl GNU General Public License v2.0
 * @version 2012.9
 */

namespace eZ\Publish\SPI\Persistence\Content;

use eZ\Publish\SPI\Persistence\ValueObject;

/**
 * UrlWildCard models one url alias path with wild cards
 *
 */
class UrlWildcard extends ValueObject
{
    /**
     *
     * The unique id
     *
     * @var mixed
     */
    public $id;

    /**
     * The source url including "*"
     *
     * @var string
     */
    public $sourceUrl;

    /**
     * The destination url containing placeholders e.g. /destination/{1}
     *
     * @var string
     */
    public $destinationUrl;

    /**
     * indicates if the url is redirected or not
     *
     * @var boolean
     */
    public $forward;
}
