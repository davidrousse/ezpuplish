<?php
/**
 * File containing the eZ\Publish\API\Repository\Values\Content\Search\SearchHit class.
 *
 * @copyright Copyright (C) 1999-2012 eZ Systems AS. All rights reserved.
 * @license http://ez.no/licenses/gnu_gpl GNU General Public License v2.0
 * @version 2012.9
 */

namespace eZ\Publish\API\Repository\Values\Content\Search;

use eZ\Publish\API\Repository\Values\ValueObject;

/**
 * This class represents a SearchHit matching the query
 *
 */
class SearchHit extends ValueObject {
    /**
     * The value found by the search
     *
     * @var \eZ\Publish\API\Repository\Values\ValueObject
     */
    public $valueObject;

    /**
     * The score of this value;
     *
     * @var float
     */
    public $score;

    /**
     * The index identifier where this value was found
     *
     * @var string
     */
    public $index;

    /**
     * A representation of the search hit including highlighted terms
     *
     * @var string
     */
    public $highlight;
}
