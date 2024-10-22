<?php
/**
 * File containing the RelationList FieldType Value class
 *
 * @copyright Copyright (C) 1999-2012 eZ Systems AS. All rights reserved.
 * @license http://ez.no/licenses/gnu_gpl GNU General Public License v2.0
 * @version 2012.9
 */

namespace eZ\Publish\Core\FieldType\RelationList;
use eZ\Publish\Core\FieldType\Value as BaseValue;

/**
 * Value for RelationList field type
 */
class Value extends BaseValue
{
    /**
     * Related content id's
     *
     * @var mixed[]
     */
    public $destinationContentIds;

    /**
     * Construct a new Value object and initialize it $text
     *
     * @param mixed[] $destinationContentIds
     */
    public function __construct( array $destinationContentIds = array() )
    {
        $this->destinationContentIds = $destinationContentIds;
    }

    /**
     * @see \eZ\Publish\Core\FieldType\Value
     */
    public function __toString()
    {
        return implode( ',', $this->destinationContentIds );
    }
}
