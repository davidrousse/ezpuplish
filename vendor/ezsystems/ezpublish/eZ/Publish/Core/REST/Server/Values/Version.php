<?php
/**
 * File containing the Version class
 *
 * @copyright Copyright (C) 1999-2012 eZ Systems AS. All rights reserved.
 * @license http://ez.no/licenses/gnu_gpl GNU General Public License v2.0
 * @version 2012.9
 */

namespace eZ\Publish\Core\REST\Server\Values;

use eZ\Publish\API\Repository\Values\Content\VersionInfo;
use eZ\Publish\Core\REST\Common\Value as RestValue;

/**
 * Version view model
 */
class Version extends RestValue
{
    /**
     * Version info
     *
     * @var \eZ\Publish\API\Repository\Values\Content\VersionInfo
     */
    public $versionInfo;

    /**
     * @param \eZ\Publish\API\Repository\Values\Content\VersionInfo $versionInfo
     */
    public function __construct( VersionInfo $versionInfo )
    {
        $this->versionInfo = $versionInfo;
    }
}
