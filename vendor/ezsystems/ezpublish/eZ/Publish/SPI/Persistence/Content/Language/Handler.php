<?php
/**
 * File containing the Language Handler interface
 *
 * @copyright Copyright (C) 1999-2012 eZ Systems AS. All rights reserved.
 * @license http://ez.no/licenses/gnu_gpl GNU General Public License v2.0
 * @version 2012.9
 */

namespace eZ\Publish\SPI\Persistence\Content\Language;
use eZ\Publish\SPI\Persistence\Content\Language,
    eZ\Publish\SPI\Persistence\Content\Language\CreateStruct;

/**
 * Language Handler interface
 */
interface Handler
{
    /**
     * Create a new language
     *
     * @param \eZ\Publish\SPI\Persistence\Content\Language\CreateStruct $struct
     * @return \eZ\Publish\SPI\Persistence\Content\Language
     */
    public function create( CreateStruct $struct );

    /**
     * Update language
     *
     * @param \eZ\Publish\SPI\Persistence\Content\Language $struct
     */
    public function update( Language $struct );

    /**
     * Get language by id
     *
     * @param mixed $id
     * @return \eZ\Publish\SPI\Persistence\Content\Language
     * @throws \eZ\Publish\API\Repository\Exceptions\NotFoundException If language could not be found by $id
     */
    public function load( $id );

    /**
     * Get language by Language Code (eg: eng-GB)
     *
     * @param string $languageCode
     * @return \eZ\Publish\SPI\Persistence\Content\Language
     * @throws \eZ\Publish\API\Repository\Exceptions\NotFoundException If language could not be found by $languageCode
     */
    public function loadByLanguageCode( $languageCode );

    /**
     * Get all languages
     *
     * Return list of languages where key of hash is language code.
     *
     * @return \eZ\Publish\SPI\Persistence\Content\Language[]
     */
    public function loadAll();

    /**
     * Delete a language
     *
     * @throws \LogicException If language could not be deleted
     *
     * @param mixed $id
     */
    public function delete( $id );
}
