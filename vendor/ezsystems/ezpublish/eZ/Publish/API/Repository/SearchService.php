<?php
/**
 * File containing the eZ\Publish\API\Repository\SearchService class.
 *
 * @copyright Copyright (C) 1999-2012 eZ Systems AS. All rights reserved.
 * @license http://ez.no/licenses/gnu_gpl GNU General Public License v2.0
 * @version 2012.9
 * @package eZ\Publish\API\Repository
 */

namespace eZ\Publish\API\Repository;

use \eZ\Publish\API\Repository\Values\Content\Query\Criterion;
use \eZ\Publish\API\Repository\Values\Content\Query;

/**
 * Search service
 *
 * @package eZ\Publish\API\Repository
 */
interface SearchService {

    /**
     * Finds content objects for the given query.
     *
     * @TODO define structs for the field filters
     *
     * @param \eZ\Publish\API\Repository\Values\Content\Query $query
     * @param array  $fieldFilters - a map of filters for the returned fields.
     *        Currently supported: <code>array("languages" => array(<language1>,..))</code>.
     * @param boolean $filterOnUserPermissions if true only the objects which is the user allowed to read are returned.
     *
     * @return \eZ\Publish\API\Repository\Values\Content\Search\SearchResult
     */
    public function findContent( Query $query, array $fieldFilters = array(), $filterOnUserPermissions = true );

    /**
     * Performs a query for a single content object
     *
     * @throws \eZ\Publish\API\Repository\Exceptions\NotFoundException if the object was not found by the query or due to permissions
     * @throws \eZ\Publish\API\Repository\Exceptions\InvalidArgumentException if there is more than than one result matching the criterions
     *
     * @TODO define structs for the field filters
     * @param \eZ\Publish\API\Repository\Values\Content\Query\Criterion $criterion
     * @param array  $fieldFilters - a map of filters for the returned fields.
     *        Currently supported: <code>array("languages" => array(<language1>,..))</code>.
     * @param boolean $filterOnUserPermissions if true only the objects which is the user allowed to read are returned.
     *
     * @return \eZ\Publish\API\Repository\Values\Content\Content
     */
    public function findSingle( Criterion $criterion, array $fieldFilters = array(), $filterOnUserPermissions = true );

    /**
     * Suggests a list of values for the given prefix
     *
     * @param string $prefix
     * @param string[] $fieldpath
     * @param int $limit
     * @param \eZ\Publish\API\Repository\Values\Content\Query\Criterion $filter
     */
    public function suggest( $prefix, $fieldPaths = array(), $limit = 10, Criterion $filter = null );

}

