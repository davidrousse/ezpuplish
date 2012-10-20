<?php
/**
 * File containing the RestContentMetadataUpdateStruct
 *
 * @copyright Copyright (C) 1999-2012 eZ Systems AS. All rights reserved.
 * @license http://ez.no/licenses/gnu_gpl GNU General Public License v2.0
 * @version 2012.9
 */

namespace eZ\Publish\Core\REST\Common\Values;

use eZ\Publish\API\Repository\Values\Content\ContentMetadataUpdateStruct;

/**
 * Extended ContentMetadataUpdateStruct that includes section information.
 */
class RestContentMetadataUpdateStruct extends ContentMetadataUpdateStruct
{
    /**
     * ID of the section to assign.
     *
     * Leave null to not change section assignment.
     *
     * @var mixed
     */
    public $sectionId;
}
