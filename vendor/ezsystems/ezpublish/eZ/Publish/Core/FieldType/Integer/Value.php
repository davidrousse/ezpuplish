<?php
/**
 * File containing the Integer Value class
 *
 * @copyright Copyright (C) 1999-2012 eZ Systems AS. All rights reserved.
 * @license http://ez.no/licenses/gnu_gpl GNU General Public License v2.0
 * @version 2012.9
 */

namespace eZ\Publish\Core\FieldType\Integer;
use eZ\Publish\Core\FieldType\Value as BaseValue;

/**
 * Value for Integer field type
 */
class Value extends BaseValue
{
    /**
     * Content of the value
     *
     * @var int
     */
    public $value = 0;

    /**
     * Construct a new Value object and initialize with $value
     *
     * @param int $value
     */
    public function __construct( $value = null )
    {
        if ( $value !== null )
            $this->value = $value;
    }

    /**
     * @see \eZ\Publish\Core\FieldType\Value
     */
    public function __toString()
    {
        return (string)$this->value;
    }
}
