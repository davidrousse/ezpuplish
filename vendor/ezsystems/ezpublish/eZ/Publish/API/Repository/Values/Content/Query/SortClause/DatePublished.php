<?php
/**
 * File containing the eZ\Publish\API\Repository\Values\Content\Query\SortClause\DatePublished class.
 *
 * @copyright Copyright (C) 1999-2012 eZ Systems AS. All rights reserved.
 * @license http://ez.no/licenses/gnu_gpl GNU General Public License v2.0
 * @version 2012.9
 */

namespace eZ\Publish\API\Repository\Values\Content\Query\SortClause;

use eZ\Publish\API\Repository\Values\Content\Query,
    eZ\Publish\API\Repository\Values\Content\Query\SortClause;

/**
 * Sets sort direction on the content creation date for a content query
 */
class DatePublished extends SortClause
{
    /**
     * Constructs a new DatePublished SortClause
     * @param string $sortDirection
     */
    public function __construct( $sortDirection = Query::SORT_ASC )
    {
        parent::__construct( 'date_published', $sortDirection );
    }
}
