<?php
/**
 * File containing the ObjectStateGroupUpdate parser class
 *
 * @copyright Copyright (C) 1999-2012 eZ Systems AS. All rights reserved.
 * @license http://ez.no/licenses/gnu_gpl GNU General Public License v2.0
 * @version 2012.9
 */

namespace eZ\Publish\Core\REST\Server\Input\Parser;
use eZ\Publish\Core\REST\Common\Input\ParsingDispatcher;
use eZ\Publish\Core\REST\Common\UrlHandler;
use eZ\Publish\Core\REST\Common\Input\ParserTools;
use eZ\Publish\Core\REST\Common\Exceptions;
use eZ\Publish\API\Repository\ObjectStateService;

/**
 * Parser for ObjectStateGroupUpdate
 * @todo There's a clear mismatch between XSD and PAPI specs for updating object state groups
 * @todo XSD says some fields are not mandatory, while PAPI says they are
 */
class ObjectStateGroupUpdate extends Base
{
    /**
     * Object state service
     *
     * @var \eZ\Publish\API\Repository\ObjectStateService
     */
    protected $objectStateService;

    /**
     * @var \eZ\Publish\Core\REST\Common\Input\ParserTools
     */
    protected $parserTools;

    /**
     * Construct
     *
     * @param \eZ\Publish\Core\REST\Common\UrlHandler $urlHandler
     * @param \eZ\Publish\API\Repository\ObjectStateService $objectStateService
     * @param \eZ\Publish\Core\REST\Common\Input\ParserTools $parserTools
     */
    public function __construct( UrlHandler $urlHandler, ObjectStateService $objectStateService, ParserTools $parserTools )
    {
        parent::__construct( $urlHandler );
        $this->objectStateService = $objectStateService;
        $this->parserTools = $parserTools;
    }

    /**
     * Parse input structure
     *
     * @param array $data
     * @param \eZ\Publish\Core\REST\Common\Input\ParsingDispatcher $parsingDispatcher
     * @return \eZ\Publish\API\Repository\Values\ObjectState\ObjectStateGroupUpdateStruct
     */
    public function parse( array $data, ParsingDispatcher $parsingDispatcher )
    {
        $objectStateGroupUpdateStruct = $this->objectStateService->newObjectStateGroupUpdateStruct();

        if ( !array_key_exists( 'identifier', $data ) )
        {
            throw new Exceptions\Parser( "Missing 'identifier' attribute for ObjectStateGroupUpdate." );
        }

        $objectStateGroupUpdateStruct->identifier = $data['identifier'];

        if ( !array_key_exists( 'defaultLanguageCode', $data ) )
        {
            throw new Exceptions\Parser( "Missing 'defaultLanguageCode' attribute for ObjectStateGroupUpdate." );
        }

        $objectStateGroupUpdateStruct->defaultLanguageCode = $data['defaultLanguageCode'];

        if ( !array_key_exists( 'names', $data ) || !is_array( $data['names'] ) )
        {
            throw new Exceptions\Parser( "Missing or invalid 'names' element for ObjectStateGroupUpdate." );
        }

        if ( !array_key_exists( 'value', $data['names'] ) || !is_array( $data['names']['value'] ) )
        {
            throw new Exceptions\Parser( "Missing or invalid 'names' element for ObjectStateGroupUpdate." );
        }

        $objectStateGroupUpdateStruct->names = $this->parserTools->parseTranslatableList( $data['names'] );

        if ( array_key_exists( 'descriptions', $data ) && is_array( $data['descriptions'] ) )
        {
            $objectStateGroupUpdateStruct->descriptions = $this->parserTools->parseTranslatableList( $data['descriptions'] );
        }

        return $objectStateGroupUpdateStruct;
    }
}
