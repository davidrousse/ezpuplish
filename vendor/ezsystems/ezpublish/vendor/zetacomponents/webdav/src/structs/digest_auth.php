<?php
/**
 * File containing the ezcWebdavDigestAuth struct.
 *
 * @package Webdav
 * @version //autogentag//
 * @copyright Copyright (C) 2005-2008 eZ systems as. All rights reserved.
 * @license http://ez.no/licenses/new_bsd New BSD License
 */
/**
 * Struct containing digest authentication information.
 *
 * This struct represents authentication data as provided by the HTTP Digest
 * specification.
 * 
 * @package Webdav
 * @version //autogen//
 */
class ezcWebdavDigestAuth extends ezcWebdavAuth
{
    /**
     * The method of the current request. 
     * 
     * @var string
     */
    public $requestMethod;

    /**
     * The authentication realm used. 
     * 
     * @var string
     */
    public $realm;

    /**
     * The nounce used to hash the password. 
     * 
     * @var mixed
     */
    public $nonce;

    /**
     * The request URI.
     *
     * Attention! This URI is not translated into a local path by the transport
     * layer, since this would affect the hashing of {@link $repsonse}.
     * 
     * @var string
     */
    public $uri;

    /**
     * The response hash.
     *
     * This is the authentication value itself. It is a MD5 hashed version of
     * the following string:
     *
     * <code>
     * <?php
     * $ha1      := md5( "$username:$realm:$password" );
     * $ha2      := md5( "$method:$uri" );
     * $response := md5( "$ha1:$nonce:$nonceCount:$clientNonce:$qop:$ha2" );
     * ?>
     * </code>
     *
     * @var string
     */
    public $response;

    /**
     * This should be MD5, since we only allow this one.
     *
     * You should safely ignore this property.
     * 
     * @var string
     */
    public $algorithm;

    /**
     * The qop field of the request. 
     * 
     * @var string
     */
    public $qualityOfProtection;

    /**
     * Serial number of the request (nc header field).
     * 
     * @var string
     */
    public $nonceCount;

    /**
     * Request nonce generated by client (cnonce header field).
     * 
     * @var string
     */
    public $clientNonce;

    /**
     * Opaque value.
     *
     * Generated by the server and re-submitted by the client as is, to verify
     * correct communication.
     * 
     * @var string
     */
    public $opaque;

    /**
     * Creates a new credential struct for digest authentication.
     *
     * Receives the information stored in the digest authentication header. See
     * attributes for further details.
     *
     * @param string $requestMethod
     * @param string $username
     * @param string $realm
     * @param string $nonce
     * @param string $uri
     * @param string $response
     * @param string $algorithm
     * @param string $qualityOfProtection
     * @param string $nonceCount
     * @param string $clientNonce
     * @param string $opaque
     */
    public function __construct(
        $requestMethod = '',
        $username = '',
        $realm = '',
        $nonce = '',
        $uri = '',
        $response = '',
        $algorithm = 'MD5',
        $qualityOfProtection = null,
        $nonceCount = null,
        $clientNonce = null,
        $opaque = null
    )
    {
        parent::__construct( $username );

        $this->requestMethod       = $requestMethod;
        $this->realm               = $realm;
        $this->nonce               = $nonce;
        $this->uri                 = $uri;
        $this->response            = $response;
        $this->algorithm           = $algorithm;
        $this->qualityOfProtection = $qualityOfProtection;
        $this->nonceCount          = $nonceCount;
        $this->clientNonce         = $clientNonce;
        $this->opaque              = $opaque;
    }
}

?>