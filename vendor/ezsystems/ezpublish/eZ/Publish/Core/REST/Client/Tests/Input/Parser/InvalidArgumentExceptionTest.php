<?php
/**
 * File containing a InvalidArgumentExceptionTest class
 *
 * @copyright Copyright (C) 1999-2012 eZ Systems AS. All rights reserved.
 * @license http://ez.no/licenses/gnu_gpl GNU General Public License v2.0
 * @version 2012.9
 */

namespace eZ\Publish\Core\REST\Client\Tests\Input\Parser;

use eZ\Publish\Core\REST\Client\Input\Parser;

class InvalidArgumentExceptionTest extends BaseTest
{
    /**
     * Tests parsing of InvalidArgumentException error message
     *
     * @expectedException \eZ\Publish\API\Repository\Exceptions\InvalidArgumentException
     * @expectedExceptionMessage Section with ID "23" not found.
     */
    public function testParse()
    {
        $parser = $this->getParser();

        $inputArray = array(
            'errorDescription' => 'Section with ID "23" not found.',
            'errorCode'        => '406',
        );

        $parser->parse( $inputArray, $this->getParsingDispatcherMock() );
    }

    /**
     * Gets the error message parser
     *
     * @return \eZ\Publish\Core\REST\Client\Input\Parser\ErrorMessage
     */
    protected function getParser()
    {
        return new Parser\ErrorMessage();
    }
}
