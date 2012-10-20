<?php
/**
 * File containing the eZ\Publish\API\Repository\Values\Content\Query\FacetBuider\UserFacetBuilder class.
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
 * Build a user facet
 *
 * If provided the search service returns a UserFacet for the given type.
 *
 * @package eZ\Publish\API\Repository\Values\Content\Query
 */
class UserFacetBuilder extends FacetBuilder {

    /**
     * Owner user
     */
    const OWNER = 'owner';

    /**
     * Owner user group
     */
    const GROUP = 'group';

    /**
     * Creator
     */
    const CREATOR = 'creator';

    /**
     * Modifier
     */
    const MODIFIER = 'modifier';

    /**
     * The type of the user facet
     *
     * @var string
     */
    public $type = UserFacetBuilder::OWNER;

}