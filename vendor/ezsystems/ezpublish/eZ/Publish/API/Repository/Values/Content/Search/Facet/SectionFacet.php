<?php
/**
 * File containing the eZ\Publish\API\Repository\Values\Content\Search\Facet\SectionFacet class.
 *
 * @copyright Copyright (C) 1999-2012 eZ Systems AS. All rights reserved.
 * @license http://ez.no/licenses/gnu_gpl GNU General Public License v2.0
 * @version 2012.9
 */
namespace eZ\Publish\API\Repository\Values\Content\Search\Facet;

use eZ\Publish\API\Repository\Values\Content\Search\Facet;

/**
 * this class hold counts for content in sections
 *
 */
class SectionFacet extends Facet {

    /**
     * An array with sectionIdentifier as key and count of matching content objects as value
     *
     * @var array
     */
    public $entries;
}