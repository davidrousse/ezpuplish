<?php
/**
 * File containing the eZ\Publish\API\Repository\Values\Content\Search\Facet\DateRangeFacet class.
 *
 * @copyright Copyright (C) 1999-2012 eZ Systems AS. All rights reserved.
 * @license http://ez.no/licenses/gnu_gpl GNU General Public License v2.0
 * @version 2012.9
 */
namespace eZ\Publish\API\Repository\Values\Content\Search\Facet;

use eZ\Publish\API\Repository\Values\Content\Search\Facet;


/**
 * This calss represents a date range facet holding counts for content in the built date ranges.
 */
class DateRangeFacet extends Facet {

    /**
     * The date invervals with statitical data
     *
     * @var \eZ\Publish\API\Repository\Values\Content\Search\Facet\RangeFacetEntry
     */
    public $entries;
}