<?php
/**
 * File containing the eZ\Publish\API\Repository\Values\Content\Query\FacetBuider\SubtreeFacetBuilder class.
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
 * Build a Subtree facet
 *
 * If provided the search service returns a LocationFacet
 * which contains the counts for all content objects below the child locations.
 *
 * TODO: check hierarchical facets
 *
 * @package eZ\Publish\API\Repository\Values\Content\Query
 */
class LocationFacetBuilder extends FacetBuilder {
    /**
     * The parent location
     *
     * @var eZ\Publish\API\Repository\Values\Content\Location
     */
    public $location;

}