<?php
/**
 * File containing the ContentList parser class
 *
 * @copyright Copyright (C) 1999-2012 eZ Systems AS. All rights reserved.
 * @license http://ez.no/licenses/gnu_gpl GNU General Public License v2.0
 * @version 2012.9
 */

namespace eZ\Publish\Core\REST\Client\Input\Parser;

use eZ\Publish\Core\REST\Common\Input\Parser;
use eZ\Publish\Core\REST\Common\Input\ParsingDispatcher;

/**
 * Parser for ContentList
 */
class ContentList extends Parser
{
    /**
     * Parse input structure
     *
     * @param array $data
     * @param \eZ\Publish\Core\REST\Common\Input\ParsingDispatcher $parsingDispatcher
     * @return \eZ\Publish\API\Repository\Values\Content\ContentInfo[]
     * @todo Error handling
     */
    public function parse( array $data, ParsingDispatcher $parsingDispatcher )
    {
        $contents = array();
        foreach ( $data['Content'] as $rawContentData )
        {
            $contents[] = $parsingDispatcher->parse(
                $rawContentData,
                $rawContentData['_media-type']
            );
        }
        return $contents;
    }
}
