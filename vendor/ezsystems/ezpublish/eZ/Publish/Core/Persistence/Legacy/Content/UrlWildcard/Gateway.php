<?php
/**
 * File containing the UrlWildcard Gateway class
 *
 * @copyright Copyright (C) 1999-2012 eZ Systems AS. All rights reserved.
 * @license http://ez.no/licenses/gnu_gpl GNU General Public License v2.0
 * @version 2012.9
 */

namespace eZ\Publish\Core\Persistence\Legacy\Content\UrlWildcard;

use eZ\Publish\SPI\Persistence\Content\UrlWildcard;

/**
 * UrlWildcard Gateway
 */
abstract class Gateway
{
    /**
     * Inserts the given UrlWildcard
     *
     * @param \eZ\Publish\SPI\Persistence\Content\UrlWildcard $urlWildcard
     *
     * @return mixed UrlWildcard id
     */
    abstract public function insertUrlWildcard( UrlWildcard $urlWildcard );

    /**
     * Deletes the UrlWildcard with given $id
     *
     * @param mixed $id
     *
     * @return void
     */
    abstract public function deleteUrlWildcard( $id );

    /**
     * Loads an array with data about UrlWildcard with $id
     *
     * @param mixed $id
     *
     * @return array
     */
    abstract public function loadUrlWildcardData( $id );

    /**
     * Loads an array with data about UrlWildcards (paged)
     *
     * @param mixed $offset
     * @param mixed $limit
     *
     * @return array
     */
    abstract public function loadUrlWildcardsData( $offset = 0, $limit = -1 );
}
