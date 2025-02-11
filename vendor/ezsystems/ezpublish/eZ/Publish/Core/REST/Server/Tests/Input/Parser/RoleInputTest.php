<?php
/**
 * File containing a test class
 *
 * @copyright Copyright (C) 1999-2012 eZ Systems AS. All rights reserved.
 * @license http://ez.no/licenses/gnu_gpl GNU General Public License v2.0
 * @version 2012.9
 */

namespace eZ\Publish\Core\REST\Server\Tests\Input\Parser;

use eZ\Publish\Core\REST\Server\Input\Parser\RoleInput;
use eZ\Publish\Core\Repository\Values\User\RoleCreateStruct;

class RoleInputTest extends BaseTest
{
    /**
     * Tests the RoleInput parser
     */
    public function testParse()
    {
        $inputArray = array(
            'identifier' => 'Identifier Bar',
            'mainLanguageCode' => 'eng-GB',
            'names' => array(
                'value' => array(
                    array(
                        '_languageCode' => 'eng-GB',
                        '#text' => 'Test role'
                    )
                )
            ),
            'descriptions' => array(
                'value' => array(
                    array(
                        '_languageCode' => 'eng-GB',
                        '#text' => 'Test role description'
                    )
                )
            )
        );

        $roleInput = $this->getRoleInput();
        $result = $roleInput->parse( $inputArray, $this->getParsingDispatcherMock() );

        $this->assertInstanceOf(
            '\\eZ\\Publish\\API\\Repository\\Values\\User\\RoleCreateStruct',
            $result,
            'RoleCreateStruct not created correctly.'
        );

        $this->assertEquals(
            'Identifier Bar',
            $result->identifier,
            'RoleCreateStruct identifier property not created correctly.'
        );

        $this->assertEquals(
            array( 'eng-GB' => 'Test role' ),
            $result->names,
            'RoleCreateStruct names property not created correctly.'
        );

        $this->assertEquals(
            array( 'eng-GB' => 'Test role description' ),
            $result->descriptions,
            'RoleCreateStruct descriptions property not created correctly.'
        );
    }

    /**
     * Returns the role input parser
     *
     * @return \eZ\Publish\Core\REST\Server\Input\Parser\RoleInput
     */
    protected function getRoleInput()
    {
        return new RoleInput(
            $this->getUrlHandler(),
            $this->getRoleServiceMock(),
            $this->getParserTools()
        );
    }

    /**
     * Get the role service mock object
     *
     * @return \eZ\Publish\API\Repository\RoleService
     */
    protected function getRoleServiceMock()
    {
        $roleServiceMock =  $this->getMock(
            'eZ\\Publish\\Core\\Repository\\RoleService',
            array(),
            array(),
            '',
            false
        );

        $roleServiceMock->expects( $this->any() )
            ->method( 'newRoleCreateStruct' )
            ->with( $this->equalTo( 'Identifier Bar' ) )
            ->will(
                $this->returnValue( new RoleCreateStruct( array( 'identifier' => 'Identifier Bar' ) ) )
            );

        return $roleServiceMock;
    }
}
