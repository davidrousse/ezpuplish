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
    eZ\Publish\API\Repository\Values\Content\Query\Criterion,
    eZ\Publish\API\Repository\Exceptions\NotImplementedException;

/**
 * Visits the criterion tree into a Solr query
 */
class Aggregate extends CriterionVisitor
{
    /**
     * Array of available visitors
     *
     * @var array
     */
    protected $visitors = array();

    /**
     * COnstruct from optional visitor array
     *
     * @param array $visitors
     * @return void
     */
    public function __construct( array $visitors = array() )
    {
        foreach ( $visitors as $visitor )
        {
            $this->addVisitor( $visitor );
        }
    }

    /**
     * Add visitor
     *
     * @param FieldValueVisitor $visitor
     * @return void
     */
    public function addVisitor( CriterionVisitor $visitor )
    {
        $this->visitors[] = $visitor;
    }

    /**
     * CHeck if visitor is applicable to current criterion
     *
     * @param Criterion $criterion
     * @return bool
     */
    public function canVisit( Criterion $criterion )
    {
        return true;
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
        foreach ( $this->visitors as $visitor )
        {
            if ( $visitor->canVisit( $criterion ) )
            {
                return $visitor->visit( $criterion, $this );
            }
        }

        throw new NotImplementedException( "No visitor avialable for: " . get_class( $criterion ) . ' with operator ' . $criterion->operator );
    }
}

