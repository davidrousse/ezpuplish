<?php
/**
 * File containing the eZ\Publish\API\Repository\Values\Content\Query\Criterion\Status class.
 *
 * @copyright Copyright (C) 1999-2012 eZ Systems AS. All rights reserved.
 * @license http://ez.no/licenses/gnu_gpl GNU General Public License v2.0
 * @version 2012.9
 */

namespace eZ\Publish\API\Repository\Values\Content\Query\Criterion;
use eZ\Publish\API\Repository\Values\Content\Query\Criterion,
    eZ\Publish\API\Repository\Values\Content\Query\Criterion\Operator\Specifications,
    eZ\Publish\API\Repository\Values\Content\Query\CriterionInterface,
    InvalidArgumentException;

/**
 * A criterion that matches content based on its status
 *
 * Multiple statuses can be used, as an array of statuses
 */
class Status extends Criterion implements CriterionInterface
{
    /**
     * Status constant: draft
     */
    const STATUS_DRAFT = "draft";

    /**
     * Status constant: published
     */
    const STATUS_PUBLISHED = "published";

    /**
     * Status constant: archived
     */
    const STATUS_ARCHIVED = "archived";

    /**
     * Creates a new Status criterion
     *
     * @param string|string[] $value Status: self::STATUS_ARCHIVED, self::STATUS_DRAFT, self::STATUS_PUBLISHED
     *
     * @throws \InvalidArgumentException
     */
    public function __construct( $value )
    {
        foreach ( (array)$value as $statusValue )
        {
            switch ( $statusValue )
            {
                case self::STATUS_ARCHIVED:
                case self::STATUS_DRAFT:
                case self::STATUS_PUBLISHED:
                    continue;

                default:
                    throw new InvalidArgumentException( "Invalid status $statusValue" );
            }
        }
        parent::__construct( null, null, $value );
    }

    public function getSpecifications()
    {
        return array(
            new Specifications(
                Operator::IN,
                Specifications::FORMAT_ARRAY,
                Specifications::TYPE_STRING
            ),
            new Specifications(
                Operator::EQ,
                Specifications::FORMAT_SINGLE,
                Specifications::TYPE_STRING
            ),
        );
    }

    public static function createFromQueryBuilder( $target, $operator, $value )
    {
        return new self( $value );
    }
}
