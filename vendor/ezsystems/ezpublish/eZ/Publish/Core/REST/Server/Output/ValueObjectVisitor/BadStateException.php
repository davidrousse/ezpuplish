<?php
/**
 * File containing the BadStateException ValueObjectVisitor class
 *
 * @copyright Copyright (C) 1999-2012 eZ Systems AS. All rights reserved.
 * @license http://ez.no/licenses/gnu_gpl GNU General Public License v2.0
 * @version 2012.9
 */

namespace eZ\Publish\Core\REST\Server\Output\ValueObjectVisitor;

/**
 * BadStateException value object visitor
 */
class BadStateException extends Exception
{
    /**
     * Return HTTP status code
     *
     * @return int
     */
    protected function getStatus()
    {
        return 409;
    }
}
