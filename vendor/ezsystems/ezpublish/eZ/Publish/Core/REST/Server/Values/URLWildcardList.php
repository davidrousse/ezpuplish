<?php
/**
 * File containing the URLWildcardList class
 *
 * @copyright Copyright (C) 1999-2012 eZ Systems AS. All rights reserved.
 * @license http://ez.no/licenses/gnu_gpl GNU General Public License v2.0
 * @version 2012.9
 */

namespace eZ\Publish\Core\REST\Server\Values;

use eZ\Publish\Core\REST\Common\Value as RestValue;

/**
 * URLWildcard list view model
 */
class URLWildcardList extends RestValue
{
    /**
     * URL wildcards
     *
     * @var \eZ\Publish\API\Repository\Values\Content\URLWildcard[]
     */
    public $urlWildcards;

    /**
     * Construct
     *
     * @param \eZ\Publish\API\Repository\Values\Content\URLWildcard[] $urlWildcards
     */
    public function __construct( array $urlWildcards )
    {
        $this->urlWildcards = $urlWildcards;
    }
}
