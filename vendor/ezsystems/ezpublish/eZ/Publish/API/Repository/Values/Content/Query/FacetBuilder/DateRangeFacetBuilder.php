<?php
/**
 * File containing the eZ\Publish\API\Repository\Values\Content\Query\FacetBuider\DateRangeFacetBuilder class.
 *
 * @copyright Copyright (C) 1999-2012 eZ Systems AS. All rights reserved.
 * @license http://ez.no/licenses/gnu_gpl GNU General Public License v2.0
 * @version 2012.9
 *
 * @package eZ\Publish\API\Repository\Values\Content\Query\FacetBuilder
 */

namespace eZ\Publish\API\Repository\Values\Content\Query\FacetBuilder;

use eZ\Publish\API\Repository\Values\Content\Query\FacetBuilder;

/**
 * Build a date range facet
 *
 * If provided the search service returns a DateRangeFacet depending on the provided
 * type (PUBLISHED, CREATED, MODIFIED)
 *
 * @package eZ\Publish\API\Repository\Values\Content\Query
 */
abstract class DateRangeFacetBuilder extends FacetBuilder {

    const PUBLISHED = 0;
    const CREATED = 1;
    const MODIFIED = 2;

    public $type = DateRangeFacetBuider::PUBLISHED;

    /**
     * Adds a range entry with explicit to and unbounded from.
     *
     * @param DateTime $to
     */
    public abstract function addUnboundedFrom($to);

    /**
     * Adds a date range
     *
     * @param DateTime $from
     * @param DateTime $to
     */
    public abstract function addRange($from, $to);

    /**
     * Adds a range entry with explicit from and unbounded to.
     *
     * @param DateTime $from
     */
    public abstract function addUnboundedTo($from);


}