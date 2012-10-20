<?php
/**
 * File containing a test class
 *
 * @copyright Copyright (C) 1999-2012 eZ Systems AS. All rights reserved.
 * @license http://ez.no/licenses/gnu_gpl GNU General Public License v2.0
 * @version 2012.9
 */

namespace eZ\Publish\Core\REST\Server\Tests\Input\Parser;

use eZ\Publish\Core\REST\Server\Input\Parser\ObjectStateUpdate;
use eZ\Publish\API\Repository\Values\ObjectState\ObjectStateUpdateStruct;

class ObjectStateUpdateTest extends BaseTest
{
    /**
     * Tests the ObjectStateUpdate parser
     */
    public function testParse()
    {
        $inputArray = array(
            'identifier' => 'test-state',
            'defaultLanguageCode' => 'eng-GB',
            'names' => array(
                'value' => array(
                    array(
                        '_languageCode' => 'eng-GB',
                        '#text' => 'Test state'
                    )
                )
            ),
            'descriptions' => array(
                'value' => array(
                    array(
                        '_languageCode' => 'eng-GB',
                        '#text' => 'Test description'
                    )
                )
            )
        );

        $objectStateUpdate = $this->getObjectStateUpdate();
        $result = $objectStateUpdate->parse( $inputArray, $this->getParsingDispatcherMock() );

        $this->assertInstanceOf(
            '\\eZ\\Publish\\API\\Repository\\Values\\ObjectState\\ObjectStateUpdateStruct',
            $result,
            'ObjectStateUpdateStruct not created correctly.'
        );

        $this->assertEquals(
            'test-state',
            $result->identifier,
            'ObjectStateUpdateStruct identifier property not created correctly.'
        );

        $this->assertEquals(
            'eng-GB',
            $result->defaultLanguageCode,
            'ObjectStateUpdateStruct defaultLanguageCode property not created correctly.'
        );

        $this->assertEquals(
            array( 'eng-GB' => 'Test state' ),
            $result->names,
            'ObjectStateUpdateStruct names property not created correctly.'
        );

        $this->assertEquals(
            array( 'eng-GB' => 'Test description' ),
            $result->descriptions,
            'ObjectStateUpdateStruct descriptions property not created correctly.'
        );
    }

    /**
     * Test ObjectStateUpdate parser throwing exception on missing identifier
     *
     * @expectedException \eZ\Publish\Core\REST\Common\Exceptions\Parser
     * @expectedExceptionMessage Missing 'identifier' attribute for ObjectStateUpdate.
     */
    public function testParseExceptionOnMissingIdentifier()
    {
        $inputArray = array(
            'defaultLanguageCode' => 'eng-GB',
            'names' => array(
                'value' => array(
                    array(
                        '_languageCode' => 'eng-GB',
                        '#text' => 'Test state'
                    )
                )
            ),
            'descriptions' => array(
                'value' => array(
                    array(
                        '_languageCode' => 'eng-GB',
                        '#text' => 'Test description'
                    )
                )
            )
        );

        $objectStateUpdate = $this->getObjectStateUpdate();
        $objectStateUpdate->parse( $inputArray, $this->getParsingDispatcherMock() );
    }

    /**
     * Test ObjectStateUpdate parser throwing exception on missing defaultLanguageCode
     *
     * @expectedException \eZ\Publish\Core\REST\Common\Exceptions\Parser
     * @expectedExceptionMessage Missing 'defaultLanguageCode' attribute for ObjectStateUpdate.
     */
    public function testParseExceptionOnMissingDefaultLanguageCode()
    {
        $inputArray = array(
            'identifier' => 'test-state',
            'names' => array(
                'value' => array(
                    array(
                        '_languageCode' => 'eng-GB',
                        '#text' => 'Test state'
                    )
                )
            ),
            'descriptions' => array(
                'value' => array(
                    array(
                        '_languageCode' => 'eng-GB',
                        '#text' => 'Test description'
                    )
                )
            )
        );

        $objectStateUpdate = $this->getObjectStateUpdate();
        $objectStateUpdate->parse( $inputArray, $this->getParsingDispatcherMock() );
    }

    /**
     * Test ObjectStateUpdate parser throwing exception on missing names
     *
     * @expectedException \eZ\Publish\Core\REST\Common\Exceptions\Parser
     * @expectedExceptionMessage Missing or invalid 'names' element for ObjectStateUpdate.
     */
    public function testParseExceptionOnMissingNames()
    {
        $inputArray = array(
            'identifier' => 'test-state',
            'defaultLanguageCode' => 'eng-GB',
            'descriptions' => array(
                'value' => array(
                    array(
                        '_languageCode' => 'eng-GB',
                        '#text' => 'Test description'
                    )
                )
            )
        );

        $objectStateUpdate = $this->getObjectStateUpdate();
        $objectStateUpdate->parse( $inputArray, $this->getParsingDispatcherMock() );
    }

    /**
     * Test ObjectStateUpdate parser throwing exception on invalid names structure
     *
     * @expectedException \eZ\Publish\Core\REST\Common\Exceptions\Parser
     * @expectedExceptionMessage Missing or invalid 'names' element for ObjectStateUpdate.
     */
    public function testParseExceptionOnInvalidNames()
    {
        $inputArray = array(
            'identifier' => 'test-state',
            'defaultLanguageCode' => 'eng-GB',
            'names' => array(),
            'descriptions' => array(
                'value' => array(
                    array(
                        '_languageCode' => 'eng-GB',
                        '#text' => 'Test description'
                    )
                )
            )
        );

        $objectStateUpdate = $this->getObjectStateUpdate();
        $objectStateUpdate->parse( $inputArray, $this->getParsingDispatcherMock() );
    }

    /**
     * Returns the ObjectStateUpdate parser
     *
     * @return \eZ\Publish\Core\REST\Server\Input\Parser\ObjectStateUpdate
     */
    protected function getObjectStateUpdate()
    {
        return new ObjectStateUpdate(
            $this->getUrlHandler(),
            $this->getObjectStateServiceMock(),
            $this->getParserTools()
        );
    }

    /**
     * Get the object state service mock object
     *
     * @return \eZ\Publish\API\Repository\ObjectStateService
     */
    protected function getObjectStateServiceMock()
    {
        $objectStateServiceMock =  $this->getMock(
            'eZ\\Publish\\Core\\Repository\\ObjectStateService',
            array(),
            array(),
            '',
            false
        );

        $objectStateServiceMock->expects( $this->any() )
            ->method( 'newObjectStateUpdateStruct' )
            ->will(
                $this->returnValue( new ObjectStateUpdateStruct() )
            );

        return $objectStateServiceMock;
    }
}
