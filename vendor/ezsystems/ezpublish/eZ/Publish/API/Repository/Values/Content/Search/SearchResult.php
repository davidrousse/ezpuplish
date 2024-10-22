<?php
/**
 * File containing the eZ\Publish\API\Repository\Values\Content\Search\SearchResult class.
 *
 * @copyright Copyright (C) 1999-2012 eZ Systems AS. All rights reserved.
 * @license http://ez.no/licenses/gnu_gpl GNU General Public License v2.0
 * @version 2012.9
 */

namespace eZ\Publish\API\Repository\Values\Content\Search;

use eZ\Publish\API\Repository\Values\ValueObject;

/**
 * This class represents a search result
 *
 */
class SearchResult extends ValueObject {

    /**
     * The facets for this search
     *
     * @var \eZ\Publish\API\Repository\Values\Content\Search\Facet[]
     */
    public $facets = array();

    /**
     * The value objects found for the query
     *
     * @var \eZ\Publish\API\Repository\Values\Content\Search\SearchHit[]
     */
    public $searchHits = array();

    /**
     * If spellcheck is on this field contains a collated query suggestion where in the aprropriate
     * criterions the wrong spelled value is replaced by a corrected one (TBD).
     *
     * @var \eZ\Publish\API\Repository\Values\Content\Query\Criterion
     */
    public $spellSuggestion;

    /**
     * The duration of the search procesing in ms
     *
     * @var int
     */
    public $time;

    /**
     * Indicates if the search has timed out
     *
     * @var boolean
     */
    public $timedOut;

    /**
     * The maximum score of this query
     *
     * @var float
     */
    public $maxScore;

    /**
     * The total number of searchHits
     *
     * @var int
     */
    public $totalCount;

}
