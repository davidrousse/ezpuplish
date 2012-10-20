<?php
/**
 * File containing the Page Value class
 *
 * @copyright Copyright (C) 1999-2012 eZ Systems AS. All rights reserved.
 * @license http://ez.no/licenses/gnu_gpl GNU General Public License v2.0
 * @version 2012.9
 */

namespace eZ\Publish\Core\FieldType\Page;
use eZ\Publish\Core\FieldType\Value as BaseValue,
    eZ\Publish\Core\FieldType\Page\Parts\Page as Page;

class Value extends BaseValue
{
    /**
     * Container for page definition
     *
     * @var \eZ\Publish\Core\FieldType\Page\Parts\Page
     */
    public $page;

    /**
     * Construct a new Value object
     *
     * @param \eZ\Publish\Core\FieldType\Page\Parts\Page $page
     */
    public function __construct( Page $page = null )
    {
        $this->page = $page;
    }

    /**
     * Returns a string representation of the field value.
     * This string representation must be compatible with format accepted via
     * {@link \eZ\Publish\SPI\FieldType\FieldType::buildValue}
     *
     * @return string
     */
    public function __toString()
    {
        return '';
    }
}
