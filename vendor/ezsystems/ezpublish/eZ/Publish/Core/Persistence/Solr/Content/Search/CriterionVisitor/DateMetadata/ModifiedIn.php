<?php
/**
 * File containing the Content Search handler class
 *
 * @copyright Copyright (C) 1999-2012 eZ Systems AS. All rights reserved.
 * @license http://ez.no/licenses/gnu_gpl GNU General Public License v2.0
 * @version 2012.9
 */

namespace eZ\Publish\Core\Persistence\Solr\Content\Search\CriterionVisitor\DateMetadata;

use eZ\Publish\Core\Persistence\Solr\Content\Search\CriterionVisitor\DateMetadata,
    eZ\Publish\Core\Persistence\Solr\Content\Search\CriterionVisitor,
    eZ\Publish\API\Repository\Values\Content\Query\Criterion,
    eZ\Publish\API\Repository\Values\Content\Query\Criterion\Operator;

/**
 * Visits the DateMetadata criterion
 */
class ModifiedIn extends DateMetadata
{
    /**
     * CHeck if visitor is applicable to current criterion
     *
     * @param Criterion $criterion
     * @return bool
     */
    public function canVisit( Criterion $criterion )
    {
        return
            $criterion instanceof Criterion\DateMetadata &&
            $criterion->target === "modified" &&
            ( ( $criterion->operator ?: Operator::IN ) === Operator::IN ||
              $criterion->operator === Operator::EQ );
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
        return '(' .
            implode(
                ' OR ',
                array_map(
                    function( $value )
                    {
                        return 'modified_dt:"' . $this->getSolrTime( $value ) . '"';
                    },
                    $criterion->value
                )
            ) .
            ')';
    }
}

