<?php
/**
 * File containing the ObjectStateGroup parser class
 *
 * @copyright Copyright (C) 1999-2012 eZ Systems AS. All rights reserved.
 * @license http://ez.no/licenses/gnu_gpl GNU General Public License v2.0
 * @version 2012.9
 */

namespace eZ\Publish\Core\REST\Client\Input\Parser;

use eZ\Publish\Core\REST\Common\Input\Parser;
use eZ\Publish\Core\REST\Common\Input\ParsingDispatcher;
use eZ\Publish\Core\REST\Common\Input\ParserTools;
use eZ\Publish\Core\Repository\Values\ObjectState\ObjectStateGroup as CoreObjectStateGroup;

/**
 * Parser for ObjectStateGroup
 */
class ObjectStateGroup extends Parser
{
    /**
     * @var \eZ\Publish\Core\REST\Common\Input\ParserTools
     */
    protected $parserTools;

    public function __construct( ParserTools $parserTools )
    {
        $this->parserTools = $parserTools;
    }

    /**
     * Parse input structure
     *
     * @param array $data
     * @param \eZ\Publish\Core\REST\Common\Input\ParsingDispatcher $parsingDispatcher
     * @return \eZ\Publish\API\Repository\Values\ObjectState\ObjectStateGroup
     * @todo Error handling
     */
    public function parse( array $data, ParsingDispatcher $parsingDispatcher )
    {
        $names = $this->parserTools->parseTranslatableList( $data['names'] );

        $descriptions = isset( $data['descriptions'] )
            ? $this->parserTools->parseTranslatableList( $data['descriptions'] )
            : array();

        return new CoreObjectStateGroup(
            array(
                'id' => $data['_href'],
                'identifier' => $data['identifier'],
                'defaultLanguageCode' => $data['defaultLanguageCode'],
                'languageCodes' => explode( ',', $data['languageCodes'] ),
                'names' => $names,
                'descriptions' => $descriptions
            )
        );
    }
}
