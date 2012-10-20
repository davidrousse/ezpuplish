<?php
/**
 * File containing the XmlText Value class
 *
 * @copyright Copyright (C) 1999-2012 eZ Systems AS. All rights reserved.
 * @license http://ez.no/licenses/gnu_gpl GNU General Public License v2.0
 * @version 2012.9
 */

namespace eZ\Publish\Core\FieldType\XmlText;
use eZ\Publish\Core\FieldType\Value as BaseValue;

/**
 * Basic for TextLine field type
 */
class Value extends BaseValue
{
    /**
     * Text content
     *
     * @var string
     */
    public $text;

    /**
     * Initializes a new XmlText Value object with $text in
     *
     * @param string $text
     */
    public function __construct( $text = "" )
    {
        $this->text = $text;
    }

    /**
     * @see \eZ\Publish\Core\FieldType\Value
     */
    public function __toString()
    {
        return (string)$this->text;
    }
}
