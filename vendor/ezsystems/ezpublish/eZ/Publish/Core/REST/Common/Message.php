<?php
/**
 * File containing the Message class
 *
 * @copyright Copyright (C) 1999-2012 eZ Systems AS. All rights reserved.
 * @license http://ez.no/licenses/gnu_gpl GNU General Public License v2.0
 * @version 2012.9
 */

namespace eZ\Publish\Core\REST\Common;

/**
 * Simple response struct
 */
class Message
{
    /**
     * Response headers
     *
     * @var array
     */
    public $headers;

    /**
     * Response body
     *
     * @var string
     */
    public $body;

    /**
     * HTTP status code
     * @var int
     */
    public $statusCode;

    /**
     * Construct from headers and body
     *
     * @param array $headers
     * @param string $body
     * @param int $statusCode
     */
    public function __construct( array $headers = array(), $body = '', $statusCode = 200 )
    {
        $this->headers    = $headers;
        $this->body       = $body;
        $this->statusCode = $statusCode;
    }
}
