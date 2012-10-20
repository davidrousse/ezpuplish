<?php
/**
 * File containing the Url Value class
 *
 * @copyright Copyright (C) 1999-2012 eZ Systems AS. All rights reserved.
 * @license http://ez.no/licenses/gnu_gpl GNU General Public License v2.0
 * @version 2012.9
 */

namespace eZ\Publish\Core\FieldType\Url;
use eZ\Publish\Core\FieldType\Value as BaseValue;

/**
 * Value for Url field type
 */
class Value extends BaseValue
{
    /**
     * Link content
     *
     * @var string
     */
    public $link;

    /**
     * Text content
     *
     * @var string
     */
    public $text;

    /**
     * Construct a new Value object and initialize it with its $link and optional $text
     *
     * @param string $link
     * @param string $text
     */
    public function __construct( $link, $text = null )
    {
        $this->link = $link;

        if ( $text !== null )
            $this->text = $text;
    }

    /**
     * @see \eZ\Publish\Core\FieldType\Value
     */
    public function __toString()
    {
        return (string)$this->link;
    }
}
