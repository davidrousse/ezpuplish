<?php
/**
 * File containing a EzcDatabase sort clause handler class
 *
 * @copyright Copyright (C) 1999-2012 eZ Systems AS. All rights reserved.
 * @license http://ez.no/licenses/gnu_gpl GNU General Public License v2.0
 * @version 2012.9
 */

namespace eZ\Publish\Core\Persistence\Legacy\Content\Search\Gateway\SortClauseHandler;
use eZ\Publish\Core\Persistence\Legacy\Content\Search\Gateway\SortClauseHandler,
    eZ\Publish\API\Repository\Values\Content\Query\SortClause,
    ezcQuerySelect;

/**
 * Content locator gateway implementation using the zeta database component.
 */
class DateModified extends SortClauseHandler
{
    /**
     * Check if this sort clause handler accepts to handle the given sort clause.
     *
     * @param \eZ\Publish\API\Repository\Values\Content\Query\SortClause $sortClause
     * @return bool
     */
    public function accept( SortClause $sortClause )
    {
        return $sortClause instanceof SortClause\DateModified;
    }

    /**
     * Apply selects to the query
     *
     * Returns the name of the (aliased) column, which information should be
     * used for sorting.
     *
     * @param \ezcQuerySelect $query
     * @param \eZ\Publish\API\Repository\Values\Content\Query\SortClause $sortClause
     * @param int $number
     * @return string
     */
    public function applySelect( ezcQuerySelect $query, SortClause $sortClause, $number )
    {
        $query
            ->select(
                $query->alias(
                    $this->dbHandler->quoteColumn(
                        "modified",
                        "ezcontentobject"
                    ),
                    $column = $this->getSortColumnName( $number )
                )
            );

        return $column;
    }
}
