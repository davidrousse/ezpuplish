<?php
/**
 * File containing the Subtree parser class
 *
 * @copyright Copyright (C) 1999-2012 eZ Systems AS. All rights reserved.
 * @license http://ez.no/licenses/gnu_gpl GNU General Public License v2.0
 * @version 2012.9
 */

namespace eZ\Publish\Core\REST\Server\Input\Parser\Criterion;
use eZ\Publish\Core\REST\Server\Input\Parser\Base;
use eZ\Publish\Core\REST\Common\Input\ParsingDispatcher;
use eZ\Publish\Core\REST\Common\UrlHandler;
use eZ\Publish\Core\REST\Common\Exceptions;
use eZ\Publish\API\Repository\Values\Content\Query\Criterion\Subtree as SubtreeCriterion;

/**
 * Parser for Subtree Criterion
 */
class Subtree extends Base
{
    /**
     * Parses input structure to a Criterion object
     *
     * @param array $data
     * @param \eZ\Publish\Core\REST\Common\Input\ParsingDispatcher $parsingDispatcher
     *
     * @throws \eZ\Publish\Core\REST\Common\Exceptions\Parser
     * @return \eZ\Publish\API\Repository\Values\Content\Query\Criterion\Subtree
     */
    public function parse( array $data, ParsingDispatcher $parsingDispatcher )
    {
        if ( !array_key_exists( "SubtreeCriterion", $data ) )
        {
            throw new Exceptions\Parser( "Invalid <SubtreeCriterion> format" );
        }
        return new SubtreeCriterion( explode( ',', $data["SubtreeCriterion"] ) );
    }
}
