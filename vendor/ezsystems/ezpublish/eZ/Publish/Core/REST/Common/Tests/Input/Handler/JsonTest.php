<?php
/**
 * File containing the JsonTest class
 *
 * @copyright Copyright (C) 1999-2012 eZ Systems AS. All rights reserved.
 * @license http://ez.no/licenses/gnu_gpl GNU General Public License v2.0
 * @version 2012.9
 */

namespace eZ\Publish\Core\REST\Common\Tests\Input\Handler;

use eZ\Publish\Core\REST\Common;

/**
 * Json input handler test
 */
class JsonTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Tests conversion of array to JSON
     */
    public function testConvertJson()
    {
        $handler = $this->getHandler();

        $this->assertSame(
            array(
                'text' => 'Hello world!',
            ),
            $handler->convert( '{"text":"Hello world!"}' )
        );
    }

    public function testConvertFieldValue()
    {
        $handler = $this->getHandler();

        $this->assertSame(
              array(
                'Field' => array(
                    'fieldValue' => array(
                        array(
                            'id' => 1,
                            'name' => 'Joe Sindelfingen',
                            'email' => 'sindelfingen@example.com',
                        ),
                        array(
                            'id' => 2,
                            'name' => 'Joe Bielefeld',
                            'email' => 'bielefeld@example.com',
                        ),
                    )
                )
            ),
            $handler->convert(
                '{"Field":{"fieldValue":[{"id":1,"name":"Joe Sindelfingen","email":"sindelfingen@example.com"},{"id":2,"name":"Joe Bielefeld","email":"bielefeld@example.com"}]}}'
            )
        );
    }

    protected function getHandler()
    {
        return new Common\Input\Handler\Json();
    }
}
