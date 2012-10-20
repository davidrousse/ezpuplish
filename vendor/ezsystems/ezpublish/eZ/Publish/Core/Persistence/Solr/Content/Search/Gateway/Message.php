<?php
/**
 * File containing the Response class
 *
 * @copyright Copyright (C) 1999-2012 eZ Systems AS. All rights reserved.
 * @license http://ez.no/licenses/gnu_gpl GNU General Public License v2.0
 * @version 2012.9
 */

namespace eZ\Publish\Core\Persistence\Solr\Content\Search\Gateway;

/**
 * Simple response struct
 */
class Message
{
    /**
     * Reponse headers
     *
     * @var array
     */
    public $headers;

    /**
     * Reponse body
     *
     * @var string
     */
    public $body;

    /**
     * Construct from headers and body
     *
     * @param array $headers
     * @param string $body
     * @return void
     */
    public function __construct( array $headers = array(), $body = '' )
    {
        $this->headers = $headers;
        $this->body    = $body;
    }
}

