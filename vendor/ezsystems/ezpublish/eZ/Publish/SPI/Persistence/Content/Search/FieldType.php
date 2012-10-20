<?php
/**
 * File containing the eZ\Publish\SPI\Persistence\Content\Search\FieldType class.
 *
 * @copyright Copyright (C) 1999-2012 eZ Systems AS. All rights reserved.
 * @license http://ez.no/licenses/gnu_gpl GNU General Public License v2.0
 * @version 2012.9
 */
namespace eZ\Publish\SPI\Persistence\Content\Search;

use eZ\Publish\SPI\Persistence\ValueObject;

/**
 * Base class for document field definitions
 */
abstract class FieldType extends ValueObject
{
    /**
     * Name of the document field. Will be used to query this field.
     *
     * @var string
     */
    public $name;

    /**
     * The type name of the facet. Has to be handled by the solr schema.
     *
     * @var string
     */
    protected $type;

    /**
     * Whether highlighting should be performed for this field on result documents
     *
     * @var bool
     */
    public $highlight = false;

    /**
     * The importance of that field ( boost factor) )
     *
     * @var int
     */
    public $boost = 1;

    /**
     * Whether the field supports multiple values
     *
     * @var bool
     */
    public $multiValue = false;

    /**
     * Whether the field should be a part of the resulting document
     *
     * @var bool
     */
    public $inResult = true;
}

