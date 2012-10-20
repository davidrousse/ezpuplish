<?php
/**
 * File containing the Service class
 *
 * @copyright Copyright (C) 1999-2012 eZ Systems AS. All rights reserved.
 * @license http://ez.no/licenses/gnu_gpl GNU General Public License v2.0
 * @version 2012.9
 */

namespace eZ\Publish\Core\FieldType\Page\Parts;

class Block extends Base
{
    public function addItem( Item $item )
    {
        $this->properties['items'][] = $item;
    }
}
