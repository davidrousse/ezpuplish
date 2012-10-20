<?php
/**
 * File containing the InvalidTypeException class
 *
 * @copyright Copyright (C) 1999-2012 eZ Systems AS. All rights reserved.
 * @license http://ez.no/licenses/gnu_gpl GNU General Public License v2.0
 * @version 2012.9
 */

namespace eZ\Publish\Core\REST\Common\Output\Exceptions;

/**
 * Output visiting invalid type exception
 */
class InvalidTypeException extends \RuntimeException
{
    /**
     * Construct from invalid data
     *
     * @param mixed $data
     */
    public function __construct( $data )
    {
        parent::__construct(
            'You must provide a ValueObject for visiting, "' . gettype( $data ) . '" provided.'
        );
    }
}
