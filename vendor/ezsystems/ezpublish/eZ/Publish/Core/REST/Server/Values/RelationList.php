<?php
/**
 * File containing the RelationList class
 *
 * @copyright Copyright (C) 1999-2012 eZ Systems AS. All rights reserved.
 * @license http://ez.no/licenses/gnu_gpl GNU General Public License v2.0
 * @version 2012.9
 */

namespace eZ\Publish\Core\REST\Server\Values;

use eZ\Publish\Core\REST\Common\Value as RestValue;

/**
 * Relation list view model
 */
class RelationList extends RestValue
{
    /**
     * Relations
     *
     * @var \eZ\Publish\API\Repository\Values\Content\Relation[]
     */
    public $relations;

    /**
     * Content ID to which this relation belongs to
     *
     * @var mixed
     */
    public $contentId;

    /**
     * Version number to which this relation belongs to
     *
     * @var mixed
     */
    public $versionNo;

    /**
     * Construct
     *
     * @param \eZ\Publish\API\Repository\Values\Content\Relation[] $relations
     * @param mixed $contentId
     * @param mixed $versionNo
     */
    public function __construct( array $relations, $contentId, $versionNo )
    {
        $this->relations = $relations;
        $this->contentId = $contentId;
        $this->versionNo = $versionNo;
    }
}
