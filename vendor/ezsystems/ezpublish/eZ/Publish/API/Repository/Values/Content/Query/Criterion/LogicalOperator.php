<?php
/**
 * File containing the eZ\Publish\API\Repository\Values\Content\Query\Criterion\LogicalOperator class.
 *
 * @copyright Copyright (C) 1999-2012 eZ Systems AS. All rights reserved.
 * @license http://ez.no/licenses/gnu_gpl GNU General Public License v2.0
 * @version 2012.9
 */

namespace eZ\Publish\API\Repository\Values\Content\Query\Criterion;

use eZ\Publish\API\Repository\Values\Content\Query\Criterion,
    InvalidArgumentException;

/**
 *
 * Note that the class should ideally have been in a Logical namespace, but it would have then be named 'And',
 * and 'And' is a PHP reserved word.
 */
abstract class LogicalOperator extends Criterion
{
    /**
     * The set of criteria combined by the logical operator
     * @var Criterion[]
     */
    public $criteria = array();

    /**
     * Creates a Logic operation with the given criteria
     *
     * @param Criterion[] $criteria
     *
     * @throws \InvalidArgumentException
     */
    public function __construct( array $criteria )
    {
        foreach ( $criteria as $criterion )
        {
            if ( !$criterion instanceof Criterion )
            {
                throw new InvalidArgumentException( "Only Criterion objects are accepted" );
            }
            $this->criteria[] = $criterion;
        }
    }
}
