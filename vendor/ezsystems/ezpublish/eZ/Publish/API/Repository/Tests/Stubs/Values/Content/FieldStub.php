<?php
/**
 * File containing the FieldStub class
 *
 * @copyright Copyright (C) 1999-2012 eZ Systems AS. All rights reserved.
 * @license http://ez.no/licenses/gnu_gpl GNU General Public License v2.0
 * @version 2012.9
 */

namespace eZ\Publish\API\Repository\Tests\Stubs\Values\Content;

use \eZ\Publish\API\Repository\Values\Content\Field;

/**
 * Stubbed implementation of the {@link \eZ\Publish\API\Repository\Values\Content\Field}
 * class.
 *
 * @see \eZ\Publish\API\Repository\Values\Content\Field
 */
class FieldStub extends Field
{
    /**
     * Allows to set the value
     *
     * @param mixed $value
     * @return void
     */
    public function setValue( $value )
    {
        $this->value = $value;
    }
}
