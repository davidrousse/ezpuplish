<?php
/**
 * File containing the UserTest class
 *
 * @copyright Copyright (C) 1999-2012 eZ Systems AS. All rights reserved.
 * @license http://ez.no/licenses/gnu_gpl GNU General Public License v2.0
 * @version 2012.9
 */

namespace eZ\Publish\Core\FieldType\Tests;
use eZ\Publish\Core\FieldType\User\Type as UserType,
    eZ\Publish\Core\FieldType\User\Value as UserValue,
    ReflectionObject;

/**
 * @group fieldType
 * @group ezurl
 */
class UserTest extends StandardizedFieldTypeTest
{
    /**
     * Returns the field type under test.
     *
     * This method is used by all test cases to retrieve the field type under
     * test. Just create the FieldType instance using mocks from the provided
     * get*Mock() methods and/or custom get*Mock() implementations. You MUST
     * NOT take care for test case wide caching of the field type, just return
     * a new instance from this method!
     *
     * @return FieldType
     */
    protected function createFieldTypeUnderTest()
    {
        return new UserType();
    }

    /**
     * Returns the validator configuration schema expected from the field type.
     *
     * @return array
     */
    protected function getValidatorConfigurationSchemaExpectation()
    {
        return array();
    }

    /**
     * Returns the settings schema expected from the field type.
     *
     * @return array
     */
    protected function getSettingsSchemaExpectation()
    {
        return array();
    }

    /**
     * Returns the empty value expected from the field type.
     *
     * @return void
     */
    protected function getEmptyValueExpectation()
    {
        return null;
    }

    /**
     * Data provider for invalid input to acceptValue().
     *
     * Returns an array of data provider sets with 2 arguments: 1. The invalid
     * input to acceptValue(), 2. The expected exception type as a string. For
     * example:
     *
     * <code>
     *  return array(
     *      array(
     *          new \stdClass(),
     *          'eZ\\Publish\\Core\\Base\\Exceptions\\InvalidArgumentException',
     *      ),
     *      array(
     *          array(),
     *          'eZ\\Publish\\Core\\Base\\Exceptions\\InvalidArgumentException',
     *      ),
     *      // ...
     *  );
     * </code>
     *
     * @return array
     */
    public function provideInvalidInputForAcceptValue()
    {
        return array(
            array(
                23,
                'eZ\\Publish\\Core\\Base\\Exceptions\\InvalidArgumentException',
            ),
        );
    }

    /**
     * Data provider for valid input to acceptValue().
     *
     * Returns an array of data provider sets with 2 arguments: 1. The valid
     * input to acceptValue(), 2. The expected return value from acceptValue().
     * For example:
     *
     * <code>
     *  return array(
     *      array(
     *          null,
     *          null
     *      ),
     *      array(
     *          __FILE__,
     *          new BinaryFileValue( array(
     *              'path' => __FILE__,
     *              'fileName' => basename( __FILE__ ),
     *              'fileSize' => filesize( __FILE__ ),
     *              'downloadCount' => 0,
     *              'mimeType' => 'text/plain',
     *          ) )
     *      ),
     *      // ...
     *  );
     * </code>
     *
     * @return array
     */
    public function provideValidInputForAcceptValue()
    {
        return array(
            array(
                null,
                null,
            ),
            array(
                array(),
                new UserValue( array() ),
            ),
            array(
                new UserValue( array( 'login' => 'sindelfingen' ) ),
                new UserValue( array( 'login' => 'sindelfingen' ) ),
            ),
            array(
                ( $userData = array(
                    'hasStoredLogin' => true,
                    'contentId' => 23,
                    'login' => 'sindelfingen',
                    'email' => 'sindelfingen@example.com',
                    'passwordHash' => '1234567890abcdef',
                    'passwordHashType' => 'md5',
                    'enabled' => true,
                    'maxLogin' => 1000,
                ) ),
                new UserValue( $userData ),
            ),
            array(
                new UserValue( $userData = array(
                    'hasStoredLogin' => true,
                    'contentId' => 23,
                    'login' => 'sindelfingen',
                    'email' => 'sindelfingen@example.com',
                    'passwordHash' => '1234567890abcdef',
                    'passwordHashType' => 'md5',
                    'enabled' => true,
                    'maxLogin' => 1000,
                ) ),
                new UserValue( $userData ),
            ),
        );
    }

    /**
     * Provide input for the toHash() method
     *
     * Returns an array of data provider sets with 2 arguments: 1. The valid
     * input to toHash(), 2. The expected return value from toHash().
     * For example:
     *
     * <code>
     *  return array(
     *      array(
     *          null,
     *          null
     *      ),
     *      array(
     *          new BinaryFileValue( array(
     *              'path' => 'some/file/here',
     *              'fileName' => 'sindelfingen.jpg',
     *              'fileSize' => 2342,
     *              'downloadCount' => 0,
     *              'mimeType' => 'image/jpeg',
     *          ) ),
     *          array(
     *              'path' => 'some/file/here',
     *              'fileName' => 'sindelfingen.jpg',
     *              'fileSize' => 2342,
     *              'downloadCount' => 0,
     *              'mimeType' => 'image/jpeg',
     *          )
     *      ),
     *      // ...
     *  );
     * </code>
     *
     * @return array
     */
    public function provideInputForToHash()
    {
        return array(
            array(
                null,
                null
            ),
            array(
                new UserValue( $userData = array(
                    'hasStoredLogin' => true,
                    'contentId' => 23,
                    'login' => 'sindelfingen',
                    'email' => 'sindelfingen@example.com',
                    'passwordHash' => '1234567890abcdef',
                    'passwordHashType' => 'md5',
                    'enabled' => true,
                    'maxLogin' => 1000,
                ) ),
                $userData,
            ),
        );
    }

    /**
     * Provide input to fromHash() method
     *
     * Returns an array of data provider sets with 2 arguments: 1. The valid
     * input to fromHash(), 2. The expected return value from fromHash().
     * For example:
     *
     * <code>
     *  return array(
     *      array(
     *          null,
     *          null
     *      ),
     *      array(
     *          array(
     *              'path' => 'some/file/here',
     *              'fileName' => 'sindelfingen.jpg',
     *              'fileSize' => 2342,
     *              'downloadCount' => 0,
     *              'mimeType' => 'image/jpeg',
     *          ),
     *          new BinaryFileValue( array(
     *              'path' => 'some/file/here',
     *              'fileName' => 'sindelfingen.jpg',
     *              'fileSize' => 2342,
     *              'downloadCount' => 0,
     *              'mimeType' => 'image/jpeg',
     *          ) )
     *      ),
     *      // ...
     *  );
     * </code>
     *
     * @return array
     */
    public function provideInputForFromHash()
    {
        return array(
            array(
                null,
                null
            ),
            array(
                ( $userData = array(
                    'hasStoredLogin' => true,
                    'contentId' => 23,
                    'login' => 'sindelfingen',
                    'email' => 'sindelfingen@example.com',
                    'passwordHash' => '1234567890abcdef',
                    'passwordHashType' => 'md5',
                    'enabled' => true,
                    'maxLogin' => 1000,
                ) ),
                new UserValue( $userData ),
            ),
        );
    }
}
