<?php
/**
 * File containing the Service class
 *
 * @copyright Copyright (C) 1999-2012 eZ Systems AS. All rights reserved.
 * @license http://ez.no/licenses/gnu_gpl GNU General Public License v2.0
 * @version 2012.9
 */

namespace eZ\Publish\Core\FieldType\Page\Parts;

class Zone extends Base
{
    /**
     * Adds new $block to Zone object
     *
     * @param \eZ\Publish\Core\FieldType\Page\Parts\Block $block
     * @return \eZ\Publish\Core\FieldType\Page\Parts\Block
     */
    public function addBlock( Block $block )
    {
        $this->properties['blocks'][] = $block;
        return $block;
    }
}
