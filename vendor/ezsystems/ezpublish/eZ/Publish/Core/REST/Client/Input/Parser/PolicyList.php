<?php
/**
 * File containing the PolicyList parser class
 *
 * @copyright Copyright (C) 1999-2012 eZ Systems AS. All rights reserved.
 * @license http://ez.no/licenses/gnu_gpl GNU General Public License v2.0
 * @version 2012.9
 */

namespace eZ\Publish\Core\REST\Client\Input\Parser;

use eZ\Publish\Core\REST\Common\Input\Parser;
use eZ\Publish\Core\REST\Common\Input\ParsingDispatcher;

/**
 * Parser for PolicyList
 */
class PolicyList extends Parser
{
    /**
     * Parse input structure
     *
     * @param array $data
     * @param \eZ\Publish\Core\REST\Common\Input\ParsingDispatcher $parsingDispatcher
     * @return \eZ\Publish\API\Repository\Values\User\Policy[]
     * @todo Error handling
     */
    public function parse( array $data, ParsingDispatcher $parsingDispatcher )
    {
        $policies = array();

        if ( array_key_exists( 'Policy', $data ) && is_array( $data['Policy'] ) )
        {
            foreach ( $data['Policy'] as $rawPolicyData )
            {
                $policies[] = $parsingDispatcher->parse(
                    $rawPolicyData,
                    $rawPolicyData['_media-type']
                );
            }
        }

        return $policies;
    }
}
