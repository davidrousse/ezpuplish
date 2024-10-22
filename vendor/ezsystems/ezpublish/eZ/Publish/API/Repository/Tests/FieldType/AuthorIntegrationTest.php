<?php
/**
 * File contains: eZ\Publish\API\Repository\Tests\FieldType\AuthorIntegrationTest class
 *
 * @copyright Copyright (C) 1999-2012 eZ Systems AS. All rights reserved.
 * @license http://ez.no/licenses/gnu_gpl GNU General Public License v2.0
 * @version 2012.9
 */

namespace eZ\Publish\API\Repository\Tests\FieldType;
use eZ\Publish\Core\FieldType\Author\Author,
    eZ\Publish\Core\FieldType\Author\AuthorCollection,
    eZ\Publish\Core\FieldType\Author\Value as AuthorValue,
    eZ\Publish\API\Repository\Values\Content\Field;

/**
 * Integration test for use field type
 *
 * @group integration
 * @group field-type
 */
class AuthorIntegrationTest extends BaseIntegrationTest
{
    /**
     * Get name of tested field tyoe
     *
     * @return string
     */
    public function getTypeName()
    {
        return 'ezauthor';
    }

    /**
     * Get expected settings schema
     *
     * @return array
     */
    public function getSettingsSchema()
    {
        return array();
    }

    /**
     * Get a valid $fieldSettings value
     *
     * @return mixed
     */
    public function getValidFieldSettings()
    {
        return array();
    }

    /**
     * Get $fieldSettings value not accepted by the field type
     *
     * @return mixed
     */
    public function getInvalidFieldSettings()
    {
        return array(
            'somethingUnknown' => 0,
        );
    }

    /**
     * Get expected validator schema
     *
     * @return array
     */
    public function getValidatorSchema()
    {
        return array();
    }

    /**
     * Get a valid $validatorConfiguration
     *
     * @return mixed
     */
    public function getValidValidatorConfiguration()
    {
        return array();
    }

    /**
     * Get $validatorConfiguration not accepted by the field type
     *
     * @return mixed
     */
    public function getInvalidValidatorConfiguration()
    {
        return array(
            'unknown' => array( 'value' => 42 ),
        );
    }

    /**
     * Get initial field data for valid object creation
     *
     * @return mixed
     */
    public function getValidCreationFieldData()
    {
        // We may only create times from timestamps here, since storing will
        // loose information about the timezone.
        return new AuthorValue( array(
            new Author( array(
                'id'    => 23,
                'name'  => 'Hans Mueller',
                'email' => 'hans@example.com',
            ) ),
        ) );
    }

    /**
     * Asserts that the field data was loaded correctly.
     *
     * Asserts that the data provided by {@link getValidCreationFieldData()}
     * was stored and loaded correctly.
     *
     * @param Field $field
     * @return void
     */
    public function assertFieldDataLoadedCorrect( Field $field)
    {
        $this->assertInstanceOf(
            'eZ\\Publish\\Core\\FieldType\\Author\\Value',
            $field->value
        );

        $expectedData = array(
            'authors' => new AuthorCollection( array(
                new Author( array(
                    'id'    => 23,
                    'name'  => 'Hans Mueller',
                    'email' => 'hans@example.com',
                ) ),
            ) )
        );
        $this->assertPropertiesCorrect(
            $expectedData,
            $field->value
        );
    }

    /**
     * Get field data which will result in errors during creation
     *
     * This is a PHPUnit data provider.
     *
     * The returned records must contain of an error producing data value and
     * the expected exception class (from the API or SPI, not implementation
     * specific!) as the second element. For example:
     *
     * <code>
     * array(
     *      array(
     *          new DoomedValue( true ),
     *          'eZ\\Publish\\API\\Repository\\Exceptions\\ContentValidationException'
     *      ),
     *      // ...
     * );
     * </code>
     *
     * @return array[]
     */
    public function provideInvalidCreationFieldData()
    {
        return array(
            array( 'Sindelfingen', 'eZ\\Publish\\API\\Repository\\Exceptions\\InvalidArgumentException' ),
        );
    }

    /**
     * Get update field externals data
     *
     * @return array
     */
    public function getValidUpdateFieldData()
    {
        return new AuthorValue( array(
            new Author( array(
                'id'    => 42,
                'name'  => 'Lieschen Mueller',
                'email' => 'lieschen@example.com',
            ) ),
        ) );
    }

    /**
     * Get externals updated field data values
     *
     * This is a PHPUnit data provider
     *
     * @return array
     */
    public function assertUpdatedFieldDataLoadedCorrect( Field $field )
    {
        $this->assertInstanceOf(
            'eZ\\Publish\\Core\\FieldType\\Author\\Value',
            $field->value
        );

        $expectedData = array(
            'authors' => new AuthorCollection( array(
                new Author( array(
                    'id'    => 42,
                    'name'  => 'Lieschen Mueller',
                    'email' => 'lieschen@example.com',
                ) ),
            ) )
        );
        $this->assertPropertiesCorrect(
            $expectedData,
            $field->value
        );
    }

    /**
     * Get field data which will result in errors during update
     *
     * This is a PHPUnit data provider.
     *
     * The returned records must contain of an error producing data value and
     * the expected exception class (from the API or SPI, not implementation
     * specific!) as the second element. For example:
     *
     * <code>
     * array(
     *      array(
     *          new DoomedValue( true ),
     *          'eZ\\Publish\\API\\Repository\\Exceptions\\ContentValidationException'
     *      ),
     *      // ...
     * );
     * </code>
     *
     * @return array[]
     */
    public function provideInvalidUpdateFieldData()
    {
        return $this->provideInvalidCreationFieldData();
    }

    /**
     * Asserts the the field data was loaded correctly.
     *
     * Asserts that the data provided by {@link getValidCreationFieldData()}
     * was copied and loaded correctly.
     *
     * @param Field $field
     */
    public function assertCopiedFieldDataLoadedCorrectly( Field $field )
    {
        $this->assertInstanceOf(
            'eZ\\Publish\\Core\\FieldType\\Author\\Value',
            $field->value
        );

        $expectedData = array(
            'authors' => new AuthorCollection( array(
                new Author( array(
                    'id'    => 23,
                    'name'  => 'Hans Mueller',
                    'email' => 'hans@example.com',
                ) ),
            ) )
        );
        $this->assertPropertiesCorrect(
            $expectedData,
            $field->value
        );
    }

    /**
     * Get data to test to hash method
     *
     * This is a PHPUnit data provider
     *
     * The returned records must have the the original value assigned to the
     * first index and the expected hash result to the second. For example:
     *
     * <code>
     * array(
     *      array(
     *          new MyValue( true ),
     *          array( 'myValue' => true ),
     *      ),
     *      // ...
     * );
     * </code>
     *
     * @return array
     */
    public function provideToHashData()
    {
        return array(
            array(
                new AuthorValue( array(
                    new Author( array(
                        'id'    => 23,
                        'name'  => 'Hans Mueller',
                        'email' => 'hans@example.com',
                    ) ),
                ) ),
                array(
                    array(
                        'id'    => 23,
                        'name'  => 'Hans Mueller',
                        'email' => 'hans@example.com',
                    ),
                ),
            ),
        );
    }

    /**
     * Get expectations for the fromHash call on our field value
     *
     * This is a PHPUnit data provider
     *
     * @return array
     */
    public function provideFromHashData()
    {
        return array(
            array(
                array(
                    array(
                        'id'    => 23,
                        'name'  => 'Hans Mueller',
                        'email' => 'hans@example.com',
                    ),
                ),
                new AuthorValue( array(
                    new Author( array(
                        'id'    => 23,
                        'name'  => 'Hans Mueller',
                        'email' => 'hans@example.com',
                    ) ),
                ) ),
            ),
        );
    }
}

