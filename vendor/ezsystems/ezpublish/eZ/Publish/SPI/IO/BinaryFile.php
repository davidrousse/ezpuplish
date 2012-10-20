<?php
/**
 * File containing the \eZ\Publish\SPI\IO\BinaryFile class.
 *
 * @copyright Copyright (C) 1999-2012 eZ Systems AS. All rights reserved.
 * @license http://ez.no/licenses/gnu_gpl GNU General Public License v2.0
 * @version 2012.9
 */

namespace eZ\Publish\SPI\IO;

/**
 * This class provides an abstract access to binary files.
 *
 * It allows reading & writing of files in a unified way
 */

class BinaryFile
{
    /**
     * Relative path to the file
     *
     * @var string
     */
    public $path;

    /**
     * File size, in bytes
     *
     * @var int
     */
    public $size;

    /**
     * File modification time
     *
     * @var \DateTime
     */
    public $mtime;

    /**
     * File creation time
     *
     * @var \DateTime
     */
    public $ctime;

    /**
     * File mime type (aka contentType, like image/jpeg, audio/mp3, etc)
     *
     * @var string
     */
    public $mimeType;

    /**
     * HTTP URI to the binary file
     *
     * @var string
     */
    public $uri;

    /**
     * Original file name
     *
     * @var string
     */
    public $originalFile;
}
