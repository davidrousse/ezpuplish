<?php
/**
 * File containing the SectionList class
 *
 * @copyright Copyright (C) 1999-2012 eZ Systems AS. All rights reserved.
 * @license http://ez.no/licenses/gnu_gpl GNU General Public License v2.0
 * @version 2012.9
 */

namespace eZ\Publish\Core\REST\Server\Values;

use eZ\Publish\Core\REST\Common\Value as RestValue;

/**
 * Section list view model
 */
class SectionList extends RestValue
{
    /**
     * Sections
     *
     * @var \eZ\Publish\API\Repository\Values\Content\Section[]
     */
    public $sections;

    /**
     * Construct
     *
     * @param \eZ\Publish\API\Repository\Values\Content\Section[] $sections
     */
    public function __construct( array $sections )
    {
        $this->sections = $sections;
    }
}
