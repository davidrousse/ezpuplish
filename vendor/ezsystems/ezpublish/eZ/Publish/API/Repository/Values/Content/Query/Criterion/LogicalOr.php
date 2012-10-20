<?php
/**
 * File containing the eZ\Publish\API\Repository\Values\Content\Query\Criterion\LogicalOr class.
 *
 * @copyright Copyright (C) 1999-2012 eZ Systems AS. All rights reserved.
 * @license http://ez.no/licenses/gnu_gpl GNU General Public License v2.0
 * @version 2012.9
 */

namespace eZ\Publish\API\Repository\Values\Content\Query\Criterion;

/**
 * This class does...
 */
class LogicalOr extends LogicalOperator
{
    /**
     * Creates a new OR logic criterion.
     *
     * This criterion will match if AT LEAST ONE of the given criteria match
     *
     * @param Criterion[] $criteria
     */
    public function __construct( array $criteria )
    {
        parent::__construct( $criteria );
    }
}
