<?php
/**
 * File containing the Input Dispatcher class
 *
 * @copyright Copyright (C) 1999-2012 eZ Systems AS. All rights reserved.
 * @license http://ez.no/licenses/gnu_gpl GNU General Public License v2.0
 * @version 2012.9
 */

namespace eZ\Publish\Core\REST\Common\Input;
use eZ\Publish\Core\REST\Common\Message;
use eZ\Publish\Core\REST\Common\Exceptions;

/**
 * Input dispatcher
 */
class Dispatcher
{
    /**
     * Array of handlers
     *
     * Structure:
     *
     * <code>
     *  array(
     *      <type> => <handler>,
     *      …
     *  )
     * </code>
     *
     * @var array
     */
    protected $handlers = array();

    /**
     * @var \eZ\Publish\Core\REST\Common\Input\ParsingDispatcher
     */
    protected $parsingDispatcher;

    /**
     * Construct from optional parsers array
     *
     * @param \eZ\Publish\Core\REST\Common\Input\ParsingDispatcher $parsingDispatcher
     * @param array $handlers
     */
    public function __construct( ParsingDispatcher $parsingDispatcher, array $handlers = array() )
    {
        $this->parsingDispatcher = $parsingDispatcher;
        foreach ( $handlers as $type => $handler )
        {
            $this->addHandler( $type, $handler );
        }
    }

    /**
     * Add another handler for the given Content Type
     *
     * @param string $type
     * @param \eZ\Publish\Core\REST\Common\Input\Handler $handler
     */
    public function addHandler( $type, Handler $handler )
    {
        $this->handlers[$type] = $handler;
    }

    /**
     * Parse provided request
     *
     * @param \eZ\Publish\Core\REST\Common\Message $message
     * @return mixed
     */
    public function parse( Message $message )
    {
        if ( !isset( $message->headers['Content-Type'] ) )
        {
            throw new Exceptions\Parser( 'Missing Content-Type header in message.' );
        }

        $contentTypeParts = explode( '+', $message->headers['Content-Type'] );
        if ( count( $contentTypeParts ) !== 2 )
        {
            throw new Exceptions\Parser( "No format specification in content type. Missing '+(json|xml|…)' in '{$message->headers['Content-Type']}'." );
        }

        $media  = $contentTypeParts[0];
        $format = $contentTypeParts[1];

        if ( !isset( $this->handlers[$format] ) )
        {
            throw new Exceptions\Parser( "Unknown format specification: '{$format}'." );
        }

        $rawArray = $this->handlers[$format]->convert( $message->body );

        // Only 1 XML root node
        $rootNodeArray = reset( $rawArray );

        // @TODO: This needs to be refactored in order to make the called URL
        // available to parsers in the server in a sane way
        if ( isset( $message->headers['Url'] ) )
        {
            $rootNodeArray['__url'] = $message->headers['Url'];
        }

        return $this->parsingDispatcher->parse(
            $rootNodeArray, $media
        );
    }
}
