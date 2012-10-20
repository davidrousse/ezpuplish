<?php
/**
 * File containing the RoleAssignmentList parser class
 *
 * @copyright Copyright (C) 1999-2012 eZ Systems AS. All rights reserved.
 * @license http://ez.no/licenses/gnu_gpl GNU General Public License v2.0
 * @version 2012.9
 */

namespace eZ\Publish\Core\REST\Client\Input\Parser;

use eZ\Publish\Core\REST\Common\Input\Parser;
use eZ\Publish\Core\REST\Common\Input\ParsingDispatcher;

/**
 * Parser for RoleAssignmentList
 */
class RoleAssignmentList extends Parser
{
    /**
     * Parse input structure
     *
     * @param array $data
     * @param \eZ\Publish\Core\REST\Common\Input\ParsingDispatcher $parsingDispatcher
     * @return \eZ\Publish\API\Repository\Values\User\RoleAssignment[]
     * @todo Error handling
     */
    public function parse( array $data, ParsingDispatcher $parsingDispatcher )
    {
        $roleAssignments = array();
        foreach ( $data['RoleAssignment'] as $rawRoleAssignmentData )
        {
            $roleAssignments[] = $parsingDispatcher->parse(
                $rawRoleAssignmentData,
                $rawRoleAssignmentData['_media-type']
            );
        }
        return $roleAssignments;
    }
}
