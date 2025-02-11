<?php
/**
 * File containing the Prefixed class.
 *
 * @copyright Copyright (C) 2012 eZ Systems AS. All rights reserved.
 * @license http://ez.no/licenses/gnu_gpl GNU General Public License v2.0
 * @version 2012.9
 */
namespace eZ\Publish\Core\REST\Common\UrlHandler;

use eZ\Publish\Core\REST\Common\UrlHandler\eZPublish as EzPublishUrlHandler;

class Prefixed extends EzPublishUrlHandler
{
    /**
     * @var string
     */
    protected $prefix;

    public function __construct( $prefix = '', array $map = array() )
    {
        $this->prefix = $prefix;
        parent::__construct( $map );
    }

    public function generate( $type, array $values = array() )
    {
        return $this->prefix . parent::generate( $type, $values );
    }

    public function parse( $type, $url )
    {
        if ( strpos( $url, $this->prefix ) === 0 )
        {
            $url = substr( $url, strlen( $this->prefix ) );
        }
        return parent::parse( $type, $url );
    }


}
