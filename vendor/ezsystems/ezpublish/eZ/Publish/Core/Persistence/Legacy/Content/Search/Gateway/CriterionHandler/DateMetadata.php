<?php
/**
 * File containing the EzcDatabase date metadata criterion handler class
 *
 * @copyright Copyright (C) 1999-2012 eZ Systems AS. All rights reserved.
 * @license http://ez.no/licenses/gnu_gpl GNU General Public License v2.0
 * @version 2012.9
 */

namespace eZ\Publish\Core\Persistence\Legacy\Content\Search\Gateway\CriterionHandler;
use eZ\Publish\Core\Persistence\Legacy\Content\Search\Gateway\CriterionHandler,
    eZ\Publish\Core\Persistence\Legacy\Content\Search\Gateway\CriteriaConverter,
    eZ\Publish\API\Repository\Values\Content\Query\Criterion,
    ezcQuerySelect,
    RuntimeException;

/**
 * Date metadata criterion handler
 */
class DateMetadata extends CriterionHandler
{
    /**
     * Check if this criterion handler accepts to handle the given criterion.
     *
     * @param \eZ\Publish\API\Repository\Values\Content\Query\Criterion$criterion
     * @return bool
     */
    public function accept( Criterion $criterion )
    {
        return $criterion instanceof Criterion\DateMetadata;
    }

    /**
     * Check if this criterion handler accepts to handle the given criterion.
     *
     * @param \eZ\Publish\Core\Persistence\Legacy\Content\Search\Gateway\CriteriaConverter$converter
     * @param \ezcQuerySelect $query
     * @param \eZ\Publish\API\Repository\Values\Content\Query\Criterion$criterion
     * @return \ezcQueryExpression
     */
    public function handle( CriteriaConverter $converter, ezcQuerySelect $query, Criterion $criterion )
    {
        $column = $this->dbHandler->quoteColumn(
            $criterion->target === Criterion\DateMetadata::MODIFIED
                ? 'modified'
                : 'published',
            'ezcontentobject'
        );

        switch ( $criterion->operator )
        {
            case Criterion\Operator::IN:
                return $query->expr->in(
                    $column,
                    $criterion->value
                );

            case Criterion\Operator::BETWEEN:
                return $query->expr->between(
                    $column,
                    $query->bindValue( $criterion->value[0] ),
                    $query->bindValue( $criterion->value[1] )
                );

            case Criterion\Operator::EQ:
            case Criterion\Operator::GT:
            case Criterion\Operator::GTE:
            case Criterion\Operator::LT:
            case Criterion\Operator::LTE:
                $operatorFunction = $this->comparatorMap[$criterion->operator];
                return $query->expr->$operatorFunction(
                    $column,
                    $query->bindValue( reset( $criterion->value ) )
                );

            default:
                throw new RuntimeException( 'Unknown operator.' );
        }

    }
}

