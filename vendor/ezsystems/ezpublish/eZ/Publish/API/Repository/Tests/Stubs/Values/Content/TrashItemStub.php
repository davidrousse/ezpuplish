<?php
/**
 * File containing the TrashItemStub class
 *
 * @copyright Copyright (C) 1999-2012 eZ Systems AS. All rights reserved.
 * @license http://ez.no/licenses/gnu_gpl GNU General Public License v2.0
 * @version 2012.9
 */

namespace eZ\Publish\API\Repository\Tests\Stubs\Values\Content;

use \eZ\Publish\API\Repository\Values\Content\TrashItem;

/**
 * Stubbed implementation of the {@link \eZ\Publish\API\Repository\Values\Content\TrashItem}
 * class.
 *
 * @see \eZ\Publish\API\Repository\Values\Content\TrashItem
 */
class TrashItemStub extends TrashItem
{
    /**
     * @var \eZ\Publish\API\Repository\Values\Content\Location
     */
    protected $location;

    /**
     * returns the content info of the content object of this location
     *
     * @return \eZ\Publish\API\Repository\Values\Content\ContentInfo
     */
    public function getContentInfo()
    {
        return $this->location->getContentInfo();
    }

    public function __get( $property )
    {
        switch ( $property )
        {
            case 'contentId':
                return $this->getContentInfo()->id;
        }
        return parent::__get( $property );
    }


}
