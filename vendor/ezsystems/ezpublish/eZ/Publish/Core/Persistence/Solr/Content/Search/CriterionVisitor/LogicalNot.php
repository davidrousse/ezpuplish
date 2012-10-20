<?php
/**
 * File containing the Content Search handler class
 *
 * @copyright Copyright (C) 1999-2012 eZ Systems AS. All rights reserved.
 * @license http://ez.no/licenses/gnu_gpl GNU General Public License v2.0
 * @version 2012.9
 */

namespace eZ\Publish\Core\Persistence\Solr\Content\Search\CriterionVisitor;

use eZ\Publish\Core\Persistence\Solr\Content\Search\CriterionVisitor,
    eZ\Publish\API\Repository\Values\Content\Query\Criterion;

/**
 * Visits the LogicalNot criterion
 */
class LogicalNot extends CriterionVisitor
{
    /**
     * CHeck if visitor is applicable to current criterion
     *
     * @param Criterion $criterion
     * @return bool
     */
    public function canVisit( Criterion $criterion )
    {
        return $criterion instanceof Criterion\LogicalNot;
    }

    /**
     * Map field value to a proper Solr representation
     *
     * @param Criterion $criterion
     * @param CriterionVisitor $subVisitor
     * @return void
     */
    public function visit( Criterion $criterion, CriterionVisitor $subVisitor = null )
    {
        if ( !isset( $criterion->criteria[0] ) ||
             ( count( $criterion->criteria ) > 1 ) )
        {
            throw new \RuntimeException( "Invalid aggregation in LogicalNot criterion." );
        }

        return 'NOT (' . $subVisitor->visit( $criterion->criteria[0] ) . ')';
    }
}

