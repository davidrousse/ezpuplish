<?php
/**
 * File containing the eZ\Publish\API\Repository\Values\Content\Query\Criterion\LogicalNot class.
 *
 * @copyright Copyright (C) 1999-2012 eZ Systems AS. All rights reserved.
 * @license http://ez.no/licenses/gnu_gpl GNU General Public License v2.0
 * @version 2012.9
 */

namespace eZ\Publish\API\Repository\Values\Content\Query\Criterion;
use eZ\Publish\API\Repository\Values\Content\Query\Criterion;

/**
 * A NOT logical criterion
 */
class LogicalNot extends LogicalOperator
{
    /**
     * Creates a new NOT logic criterion.
     *
     * Will match of the given criterion doesn't match
     *
     * @param Criterion[] $criteria One criterion, as a an array
     *
     * @throws \InvalidArgumentException if more than one criterion is given in the array parameter
     */
    public function __construct( Criterion $criterion )
    {
        parent::__construct( array( $criterion ) );
    }
}
