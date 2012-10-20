<?php
/**
 * File containing the Float Value class
 *
 * @copyright Copyright (C) 1999-2012 eZ Systems AS. All rights reserved.
 * @license http://ez.no/licenses/gnu_gpl GNU General Public License v2.0
 * @version 2012.9
 */

namespace eZ\Publish\Core\FieldType\Float;
use eZ\Publish\Core\FieldType\Value as BaseValue;

/**
 * Value for Float field type
 */
class Value extends BaseValue
{
    /**
     * Float content
     *
     * @var float
     */
    public $value = 0.0;

    /**
     * Construct a new Value object and initialize with $value
     *
     * @param float $value
     */
    public function __construct( $value )
    {
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
