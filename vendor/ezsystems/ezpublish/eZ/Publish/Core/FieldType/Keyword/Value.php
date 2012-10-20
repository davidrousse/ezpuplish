<?php
/**
 * File containing the Keyword Value class
 *
 * @copyright Copyright (C) 1999-2012 eZ Systems AS. All rights reserved.
 * @license http://ez.no/licenses/gnu_gpl GNU General Public License v2.0
 * @version 2012.9
 */

namespace eZ\Publish\Core\FieldType\Keyword;
use eZ\Publish\Core\FieldType\Value as BaseValue;

/**
 * Value for Keyword field type
 */
class Value extends BaseValue
{
    /**
     * Content of the value
     *
     * @var string[]
     */
    public $values = array();

    /**
     * Construct a new Value object and initialize with $values
     *
     * @param string[]|string $values
     */
    public function __construct( $values = null )
    {
        if ( $values !== null )
        {
            if ( !is_array( $values ) )
            {
                $tags = array();
                foreach ( explode( ',', $values ) as $tag )
                {
                    $tag = trim( $tag );
                    if ( $tag )
                        $tags[] = $tag;
                }
                $values = $tags;
            }

            $this->values = array_unique( $values );
        }
    }

    /**
     * Returns a string representation of the keyword value.
     *
     * @return string A comma separated list of tags, eg: "php, eZ Publish, html5"
     */
    public function __toString()
    {
        return implode( ', ', $this->values );
    }
}
