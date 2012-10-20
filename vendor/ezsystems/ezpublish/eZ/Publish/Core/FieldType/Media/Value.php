<?php
/**
 * File containing the Media Value class
 *
 * @copyright Copyright (C) 1999-2012 eZ Systems AS. All rights reserved.
 * @license http://ez.no/licenses/gnu_gpl GNU General Public License v2.0
 * @version 2012.9
 */

namespace eZ\Publish\Core\FieldType\Media;
use eZ\Publish\Core\FieldType\BinaryBase\Value as BaseValue;

/**
 * Value for Media field type
 */
class Value extends BaseValue
{
    /**
     * If the media has a controller when being displayed
     *
     * @var bool
     */
    public $hasController;

    /**
     * if the media should be automatically played
     *
     * @var bool
     */
    public $autoplay;

    /**
     * if the media should be played in a loop
     *
     * @var bool
     */
    public $loop;

    /**
     * Height of the media
     *
     * @var int
     */
    public $height;

    /**
     * Width of the media
     *
     * @var int
     */
    public $width;
}
