<?php
/**
 * File containing the eZ\Publish\API\Repository\Values\Content\Search\Facet\ContentTypeFacet class.
 *
 * @copyright Copyright (C) 1999-2012 eZ Systems AS. All rights reserved.
 * @license http://ez.no/licenses/gnu_gpl GNU General Public License v2.0
 * @version 2012.9
 *
 * @package eZ\Publish\API\Repository\Values\Content\Search\Facet
 */
namespace eZ\Publish\API\Repository\Values\Content\Search\Facet;

use eZ\Publish\API\Repository\Values\Content\Search\Facet;

/**
 * This class holds counts of content with content type
 *
 */
class ContentTypeFacet extends Facet {

    /**
     * An array with contentTypeIdentifier as key and count of matching content objects as value
     *
     * @var array
     */
    public $entries;
}