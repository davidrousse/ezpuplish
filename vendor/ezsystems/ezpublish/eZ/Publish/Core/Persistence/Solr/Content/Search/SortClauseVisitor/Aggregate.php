<?php
/**
 * File containing the Content Search handler class
 *
 * @copyright Copyright (C) 1999-2012 eZ Systems AS. All rights reserved.
 * @license http://ez.no/licenses/gnu_gpl GNU General Public License v2.0
 * @version 2012.9
 */

namespace eZ\Publish\Core\Persistence\Solr\Content\Search\SortClauseVisitor;

use eZ\Publish\Core\Persistence\Solr\Content\Search\SortClauseVisitor,
    eZ\Publish\API\Repository\Values\Content\Query\SortClause,
    eZ\Publish\API\Repository\Exceptions\NotImplementedException;

/**
 * Visits the sortClause tree into a Solr query
 */
class Aggregate extends SortClauseVisitor
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
    public function addVisitor( SortClauseVisitor $visitor )
    {
        $this->visitors[] = $visitor;
    }

    /**
     * CHeck if visitor is applicable to current sortClause
     *
     * @param SortClause $sortClause
     * @return bool
     */
    public function canVisit( SortClause $sortClause )
    {
        return true;
    }

    /**
     * Map field value to a proper Solr representation
     *
     * @param SortClause $sortClause
     * @return void
     */
    public function visit( SortClause $sortClause )
    {
        foreach ( $this->visitors as $visitor )
        {
            if ( $visitor->canVisit( $sortClause ) )
            {
                return $visitor->visit( $sortClause, $this );
            }
        }

        throw new NotImplementedException( "No visitor avialable for: " . get_class( $sortClause ) );
    }
}

