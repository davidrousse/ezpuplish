<?php
/**
 * File containing a test class
 *
 * @copyright Copyright (C) 1999-2012 eZ Systems AS. All rights reserved.
 * @license http://ez.no/licenses/gnu_gpl GNU General Public License v2.0
 * @version 2012.9
 */

namespace eZ\Publish\Core\REST\Server\Tests\Output\ValueObjectVisitor;

use eZ\Publish\Core\REST\Server\Output\ValueObjectVisitor;
use eZ\Publish\Core\REST\Server\Exceptions;
use eZ\Publish\Core\REST\Common;

class BadRequestExceptionTest extends ExceptionTest
{
    /**
     * Get expected status code
     *
     * @return int
     */
    protected function getExpectedStatusCode()
    {
        return 400;
    }

    /**
     * Get expected message
     *
     * @return string
     */
    protected function getExpectedMessage()
    {
        return "Bad Request";
    }

    /**
     * Gets the exception
     *
     * @return \Exception
     */
    protected function getException()
    {
        return new Exceptions\BadRequestException( "Test" );
    }

    /**
     * Gets the exception visitor
     *
     * @return \eZ\Publish\Core\REST\Server\Output\ValueObjectVisitor\BadRequestException
     */
    protected function getExceptionVisitor()
    {
        return new ValueObjectVisitor\BadRequestException(
            new Common\UrlHandler\eZPublish()
        );
    }
}
