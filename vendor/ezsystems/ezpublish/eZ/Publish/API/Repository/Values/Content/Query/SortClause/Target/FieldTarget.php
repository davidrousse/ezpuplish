<?php
/**
 * File containing the eZ\Publish\API\Repository\Values\Content\Query\SortClause\Target\FieldTarget class.
 *
 * @copyright Copyright (C) 1999-2012 eZ Systems AS. All rights reserved.
 * @license http://ez.no/licenses/gnu_gpl GNU General Public License v2.0
 * @version 2012.9
 *
 *
 * @package eZ\Publish\API\Repository\Values\Content\Query
 */

namespace eZ\Publish\API\Repository\Values\Content\Query\SortClause\Target;

use eZ\Publish\API\Repository\Values\Content\Query\SortClause\Target;

/**
 * Struct that stores extra target informations for a SortClause object
 * @package eZ\Publish\API\Repository\Values\Content\Query
 */
class FieldTarget extends Target
{
    public $typeIdentifier;
    public $fieldIdentifier;

    public function __construct( $typeIdentifier, $fieldIdentifier )
    {
        $this->typeIdentifier = $typeIdentifier;
        $this->fieldIdentifier = $fieldIdentifier;
    }
}
