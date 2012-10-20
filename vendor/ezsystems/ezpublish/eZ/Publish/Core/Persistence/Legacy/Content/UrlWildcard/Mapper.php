<?php
/**
 * File containing the UrlWildcard Mapper class
 *
 * @copyright Copyright (C) 1999-2012 eZ Systems AS. All rights reserved.
 * @license http://ez.no/licenses/gnu_gpl GNU General Public License v2.0
 * @version 2012.9
 */

namespace eZ\Publish\Core\Persistence\Legacy\Content\UrlWildcard;

use eZ\Publish\SPI\Persistence\Content\UrlWildcard;

/**
 * UrlWildcard Mapper
 */
class Mapper
{
    /**
     * Creates a UrlWildcard object from given parameters
     *
     * @param string $sourceUrl
     * @param string $destinationUrl
     * @param boolean $forward
     *
     * @return \eZ\Publish\SPI\Persistence\Content\UrlWildcard
     */
    public function createUrlWildcard( $sourceUrl, $destinationUrl, $forward )
    {
        $urlWildcard = new UrlWildcard();

        $urlWildcard->destinationUrl = $destinationUrl;
        $urlWildcard->sourceUrl = $sourceUrl;
        $urlWildcard->forward = $forward;

        return $urlWildcard;
    }

    /**
     * Extracts UrlWildcard object from given database $row
     *
     * @param array $row
     *
     * @return \eZ\Publish\SPI\Persistence\Content\UrlWildcard
     */
    public function extractUrlWildcardFromRow( array $row )
    {
        $urlWildcard = new UrlWildcard();

        $urlWildcard->destinationUrl = $row["destination_url"];
        $urlWildcard->id = (int)$row["id"];
        $urlWildcard->sourceUrl = $row["source_url"];
        $urlWildcard->forward = (int)$row["type"] === 1 ? true : false;

        return $urlWildcard;
    }

    /**
     * Extracts UrlWildcard objects from database $rows
     *
     * @param array $rows
     *
     * @return \eZ\Publish\SPI\Persistence\Content\UrlWildcard[]
     */
    public function extractUrlWildcardsFromRows( array $rows )
    {
        $urlWildcards = array();

        foreach ( $rows as $row )
        {
            $urlWildcards[] = $this->extractUrlWildcardFromRow( $row );
        }

        return $urlWildcards;
    }
}
