<?php
/**
 * File containing the ConnectionException class
 *
 * @copyright Copyright (C) 1999-2012 eZ Systems AS. All rights reserved.
 * @license http://ez.no/licenses/gnu_gpl GNU General Public License v2.0
 * @version 2012.9
 */

namespace eZ\Publish\Core\Persistence\Solr\Content\Search\Gateway\HttpClient;

/**
 * HTTPClient connection exception
 */
class ConnectionException extends \RuntimeException
{
    public function __construct( $server, $path, $method )
    {
        parent::__construct(
            "Could not connect to server $server."
        );
    }
}
