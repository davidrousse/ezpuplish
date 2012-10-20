<?php
/**
 * File containing the eZ\Publish\API\Repository\Values\Content\Search\Facet\CriterionFacet class.
 *
 * @copyright Copyright (C) 1999-2012 eZ Systems AS. All rights reserved.
 * @license http://ez.no/licenses/gnu_gpl GNU General Public License v2.0
 * @version 2012.9
 */
namespace eZ\Publish\API\Repository\Values\Content\Search\Facet;

use eZ\Publish\API\Repository\Values\Content\Search\Facet;

/**
 * This class holds the count of cotnent mathing the criterion
 */
class CriterionFacet extends Facet {
    /**
     * The count of objects matching the criterion
     *
     * @var int
     */
    public $count;
}