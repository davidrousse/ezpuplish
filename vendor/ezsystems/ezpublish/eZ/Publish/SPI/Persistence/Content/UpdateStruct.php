<?php
/**
 * File containing the UpdateStruct struct
 *
 * @copyright Copyright (C) 1999-2012 eZ Systems AS. All rights reserved.
 * @license http://ez.no/licenses/gnu_gpl GNU General Public License v2.0
 * @version 2012.9
 */

namespace eZ\Publish\SPI\Persistence\Content;
use eZ\Publish\SPI\Persistence\ValueObject;

/**
 */
class UpdateStruct extends ValueObject
{
    /**
     * @var string[] Eg. array( 'eng-GB' => "New Article" )
     */
    public $name = array();

    /**
     * Creator user ID for the version
     *
     * @var int
     */
    public $creatorId;

    /**
     * Contains fields to be updated.
     *
     * @var \eZ\Publish\SPI\Persistence\Content\Field[]
     */
    public $fields = array();

    /**
     * Modification date for the version.
     * Unix timestamp.
     *
     * @var int
     */
    public $modificationDate;

    /**
     * ID for initial (main) language for this version.
     *
     * @var mixed
     */
    public $initialLanguageId = false;
}
