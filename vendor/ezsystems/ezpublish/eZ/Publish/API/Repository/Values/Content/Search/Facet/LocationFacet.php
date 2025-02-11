<?php
/**
 * File containing the eZ\Publish\API\Repository\Values\Content\Search\Facet\FieldFacet class.
 *
 * @copyright Copyright (C) 1999-2012 eZ Systems AS. All rights reserved.
 * @license http://ez.no/licenses/gnu_gpl GNU General Public License v2.0
 * @version 2012.9
 */
namespace eZ\Publish\API\Repository\Values\Content\Search\Facet;

use eZ\Publish\API\Repository\Values\Content\Search\Facet;


/**
 * Facet containing counts for content below child locations
 */
class LocationFacet extends Facet {

    /**
     * An array with location id as key and count of matching content objects which are below this location as value
     *
     * @var array
     */
    public $entries;
}