<?php
/**
 * File containing the Relation FieldType Value class
 *
 * @copyright Copyright (C) 1999-2012 eZ Systems AS. All rights reserved.
 * @license http://ez.no/licenses/gnu_gpl GNU General Public License v2.0
 * @version 2012.9
 */

namespace eZ\Publish\Core\FieldType\Relation;
use eZ\Publish\Core\FieldType\Value as BaseValue,
    eZ\Publish\Core\Repository\Values\Content\ContentInfo;

/**
 * Value for Relation field type
 */
class Value extends BaseValue
{
    /**
     * Related content
     *
     * @var mixed|null
     */
    public $destinationContentId;

    /**
     * Construct a new Value object and initialize it $destinationContent
     *
     * @param mixed $destinationContentId Content id the relation is to
     */
    public function __construct( $destinationContentId = null )
    {
        $this->destinationContentId = $destinationContentId;
    }

    /**
     * Returns the related content's name
     * @see \eZ\Publish\Core\FieldType\Value
     */
    public function __toString()
    {
        return (string)$this->destinationContentId;
    }
}
