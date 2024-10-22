<?php
/**
 * File containing the Content Search handler class
 *
 * @copyright Copyright (C) 1999-2012 eZ Systems AS. All rights reserved.
 * @license http://ez.no/licenses/gnu_gpl GNU General Public License v2.0
 * @version 2012.9
 */

namespace eZ\Publish\Core\Persistence\Solr\Content\Search\FacetBuilderVisitor;

use eZ\Publish\Core\Persistence\Solr\Content\Search\FacetBuilderVisitor,
    eZ\Publish\API\Repository\Values\Content\Query\FacetBuilder,
    eZ\Publish\API\Repository\Exceptions\NotImplementedException;

/**
 * Visits the facet builder tree into a Solr query
 */
class Aggregate extends FacetBuilderVisitor
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
    public function addVisitor( FacetBuilderVisitor $visitor )
    {
        $this->visitors[] = $visitor;
    }

    /**
     * CHeck if visitor is applicable to current facet result
     *
     * @param string $field
     * @return bool
     */
    public function canMap( $field )
    {
        return true;
    }

    /**
     * Map Solr facet result back to facet objects
     *
     * @param string $field
     * @param array $data
     * @return Facet
     */
    public function map( $field, array $data )
    {
        foreach ( $this->visitors as $visitor )
        {
            if ( $visitor->canMap( $field ) )
            {
                return $visitor->map( $field, $data );
            }
        }

        throw new \OutOfRangeException( "No visitor avialable for: " . $field );
    }

    /**
     * CHeck if visitor is applicable to current facet builder
     *
     * @param FacetBuilder $facetBuilder
     * @return bool
     */
    public function canVisit( FacetBuilder $facetBuilder )
    {
        return true;
    }

    /**
     * Map field value to a proper Solr representation
     *
     * @param FacetBuilder $facetBuilder
     * @return void
     */
    public function visit( FacetBuilder $facetBuilder )
    {
        foreach ( $this->visitors as $visitor )
        {
            if ( $visitor->canVisit( $facetBuilder ) )
            {
                return $visitor->visit( $facetBuilder );
            }
        }

        throw new NotImplementedException( "No visitor avialable for: " . get_class( $facetBuilder ) );
    }
}

