<?php
/**
 * File containing the MessageTest class
 *
 * @copyright Copyright (C) 1999-2012 eZ Systems AS. All rights reserved.
 * @license http://ez.no/licenses/gnu_gpl GNU General Public License v2.0
 * @version 2012.9
 */

namespace eZ\Publish\Core\REST\Common\Tests;

use eZ\Publish\Core\REST\Common;

/**
 * Tests for Message class
 */
class MessageTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Tests creating the message with default headers
     */
    public function testCreateMessageDefaultHeaders()
    {
        $message = new Common\Message();

        $this->assertSame( array(), $message->headers );
    }

    /**
     * Tests creating the message with default body
     */
    public function testCreateMessageDefaultBody()
    {
        $message = new Common\Message();

        $this->assertSame( '', $message->body );
    }

    /**
     * Tests creating message with headers set through constructor
     */
    public function testCreateMessageConstructorHeaders()
    {
        $message = new Common\Message(
            $headers = array(
                'Content-Type' => 'text/xml',
            )
        );

        $this->assertSame( $headers, $message->headers );
    }

    /**
     * Tests creating message with body set through constructor
     */
    public function testCreateMessageConstructorBody()
    {
        $message = new Common\Message(
            array(),
            'Hello world!'
        );

        $this->assertSame( 'Hello world!', $message->body );
    }
}
