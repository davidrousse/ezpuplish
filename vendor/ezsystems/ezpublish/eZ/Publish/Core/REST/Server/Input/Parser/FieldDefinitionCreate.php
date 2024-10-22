<?php
/**
 * File containing the FieldDefinitionCreate parser class
 *
 * @copyright Copyright (C) 1999-2012 eZ Systems AS. All rights reserved.
 * @license http://ez.no/licenses/gnu_gpl GNU General Public License v2.0
 * @version 2012.9
 */

namespace eZ\Publish\Core\REST\Server\Input\Parser;
use eZ\Publish\Core\REST\Common\Input\ParsingDispatcher;
use eZ\Publish\Core\REST\Common\UrlHandler;
use eZ\Publish\Core\REST\Common\Input\ParserTools;
use eZ\Publish\API\Repository\ContentTypeService;
use eZ\Publish\Core\REST\Common\Exceptions;

/**
 * Parser for FieldDefinitionCreate
 */
class FieldDefinitionCreate extends Base
{
    /**
     * ContentType service
     *
     * @var \eZ\Publish\API\Repository\ContentTypeService
     */
    protected $contentTypeService;

    /**
     * Parser tools
     *
     * @var \eZ\Publish\Core\REST\Common\Input\ParserTools
     */
    protected $parserTools;

    /**
     * Construct
     *
     * @param \eZ\Publish\Core\REST\Common\UrlHandler $urlHandler
     * @param \eZ\Publish\API\Repository\ContentTypeService $contentTypeService
     * @param \eZ\Publish\Core\REST\Common\Input\ParserTools $parserTools
     */
    public function __construct( UrlHandler $urlHandler, ContentTypeService $contentTypeService, ParserTools $parserTools )
    {
        parent::__construct( $urlHandler );
        $this->contentTypeService = $contentTypeService;
        $this->parserTools = $parserTools;
    }

    /**
     * Parse input structure
     *
     * @param array $data
     * @param \eZ\Publish\Core\REST\Common\Input\ParsingDispatcher $parsingDispatcher
     * @return \eZ\Publish\API\Repository\Values\ContentType\FieldDefinitionCreateStruct
     */
    public function parse( array $data, ParsingDispatcher $parsingDispatcher )
    {
        if ( !array_key_exists( 'identifier', $data ) )
        {
            throw new Exceptions\Parser( "Missing 'identifier' element for FieldDefinitionCreate." );
        }

        if ( !array_key_exists( 'fieldType', $data ) )
        {
            throw new Exceptions\Parser( "Missing 'fieldType' element for FieldDefinitionCreate." );
        }

        $fieldDefinitionCreate = $this->contentTypeService->newFieldDefinitionCreateStruct(
            $data['identifier'],
            $data['fieldType']
        );

        // @TODO XSD says that descriptions is mandatory, but content type can be created without it
        if ( array_key_exists( 'names', $data ) )
        {
            if ( !is_array( $data['names'] ) || !array_key_exists( 'value', $data['names'] ) || !is_array( $data['names']['value'] ) )
            {
                throw new Exceptions\Parser( "Invalid 'names' element for FieldDefinitionCreate." );
            }

            $fieldDefinitionCreate->names = $this->parserTools->parseTranslatableList( $data['names'] );
        }

        // @TODO XSD says that descriptions is mandatory, but content type can be created without it
        if ( array_key_exists( 'descriptions', $data ) )
        {
            if ( !is_array( $data['descriptions'] ) || !array_key_exists( 'value', $data['descriptions'] ) || !is_array( $data['descriptions']['value'] ) )
            {
                throw new Exceptions\Parser( "Invalid 'descriptions' element for FieldDefinitionCreate." );
            }

            $fieldDefinitionCreate->descriptions = $this->parserTools->parseTranslatableList( $data['descriptions'] );
        }

        // @TODO XSD says that fieldGroup is mandatory, but content type can be created without it
        if ( array_key_exists( 'fieldGroup', $data ) )
        {
            $fieldDefinitionCreate->fieldGroup = $data['fieldGroup'];
        }

        // @TODO XSD says that position is mandatory, but content type can be created without it
        if ( array_key_exists( 'position', $data ) )
        {
            $fieldDefinitionCreate->position = (int) $data['position'];
        }

        // @TODO XSD says that isTranslatable is mandatory, but content type can be created without it
        if ( array_key_exists( 'isTranslatable', $data ) )
        {
            $fieldDefinitionCreate->isTranslatable = $this->parserTools->parseBooleanValue( $data['isTranslatable'] );
        }

        // @TODO XSD says that isRequired is mandatory, but content type can be created without it
        if ( array_key_exists( 'isRequired', $data ) )
        {
            $fieldDefinitionCreate->isRequired = $this->parserTools->parseBooleanValue( $data['isRequired'] );
        }

        // @TODO XSD says that isInfoCollector is mandatory, but content type can be created without it
        if ( array_key_exists( 'isInfoCollector', $data ) )
        {
            $fieldDefinitionCreate->isInfoCollector = $this->parserTools->parseBooleanValue( $data['isInfoCollector'] );
        }

        // @TODO XSD says that isSearchable is mandatory, but content type can be created without it
        if ( array_key_exists( 'isSearchable', $data ) )
        {
            $fieldDefinitionCreate->isSearchable = $this->parserTools->parseBooleanValue( $data['isSearchable'] );
        }

        // @TODO XSD says that defaultValue is mandatory, but content type can be created without it
        if ( array_key_exists( 'defaultValue', $data ) )
        {
            $fieldDefinitionCreate->defaultValue = $data['defaultValue'];
        }

        //@TODO fieldSettings - Not specified
        //@TODO validatorConfiguration - Not specified

        return $fieldDefinitionCreate;
    }
}
