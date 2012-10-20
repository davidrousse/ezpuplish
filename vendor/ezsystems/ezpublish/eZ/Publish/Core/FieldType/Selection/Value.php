<?php
/**
 * File containing the Selection Value class
 *
 * @copyright Copyright (C) 1999-2012 eZ Systems AS. All rights reserved.
 * @license http://ez.no/licenses/gnu_gpl GNU General Public License v2.0
 * @version 2012.9
 */

namespace eZ\Publish\Core\FieldType\Selection;
use eZ\Publish\Core\FieldType\Value as BaseValue;

/**
 * Value for Selection field type
 */
class Value extends BaseValue
{
    /**
     * Selection content
     *
     * @var int[]
     */
    public $selection;

    /**
     * Construct a new Value object and initialize it $selection
     *
     * @param int[] $selection
     */
    public function __construct( array $selection = array() )
    {
        $this->selection = $selection;
    }

    /**
     * @see \eZ\Publish\Core\FieldType\Value
     */
    public function __toString()
    {
        return implode( ",", $this->selection );
    }
}
