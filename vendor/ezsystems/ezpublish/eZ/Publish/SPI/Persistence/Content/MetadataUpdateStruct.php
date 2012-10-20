<?php
/**
 * File containing the MetadataUpdateStruct struct
 *
 * @copyright Copyright (C) 1999-2012 eZ Systems AS. All rights reserved.
 * @license http://ez.no/licenses/gnu_gpl GNU General Public License v2.0
 * @version 2012.9
 */

namespace eZ\Publish\SPI\Persistence\Content;
use eZ\Publish\SPI\Persistence\ValueObject;

/**
 */
class MetadataUpdateStruct extends ValueObject
{
    /**
     * If set, this value changes the content's owner ID.
     *
     * @var int
     */
    public $ownerId;

    /**
     * If set, will change the content's "always-available" name
     *
     * @var string
     */
    public $name;

    /**
     * If set this value overrides the publication date of the content.
     * Unix timestamp.
     *
     * @var int
     */
    public $publicationDate;

    /**
     * If set this value overrides the modification date.
     * Unix timestamp.
     *
     * @var int
     */
    public $modificationDate;

    /**
     * If set, the content's main language will be changed.
     *
     * @var int
     */
    public $mainLanguageId;

    /**
     * If set, this value will change the always available flag.
     *
     * @var bool
     */
    public $alwaysAvailable;

    /**
     * If set, this value will change the content's remote ID.
     *
     * @var string
     */
    public $remoteId;
}
