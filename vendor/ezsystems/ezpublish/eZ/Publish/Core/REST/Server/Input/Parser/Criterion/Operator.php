<?php
/**
 *
 * File containing the Operator Criterion parser class
 * @copyright Copyright (C) 1999-2012 eZ Systems AS. All rights reserved.
 * @license http://ez.no/licenses/gnu_gpl GNU General Public License v2.0
 * @version 2012.9
 */

namespace eZ\Publish\Core\REST\Server\Input\Parser\Criterion;
use eZ\Publish\Core\REST\Server\Input\Parser\Base;
use eZ\Publish\Core\REST\Common\Input\ParsingDispatcher;
use eZ\Publish\Core\REST\Common\UrlHandler;
use eZ\Publish\Core\REST\Common\Exceptions;
use eZ\Publish\API\Repository\Values\Content\Query\Criterion\Operator as OperatorCriterion;

/**
 * Parser for Operator Criterion
 */
class Operator extends Base
{
    /**
     * Parses input structure to a Criterion object
     *
     * @param array $data
     * @param \eZ\Publish\Core\REST\Common\Input\ParsingDispatcher $parsingDispatcher
     *
     * @throws \eZ\Publish\Core\REST\Common\Exceptions\Parser
     * @return \eZ\Publish\API\Repository\Values\Content\Query\Criterion\Operator
     */
    public function parse( array $data, ParsingDispatcher $parsingDispatcher )
    {
        throw new \Exception( '@todo implement' );
    }
}