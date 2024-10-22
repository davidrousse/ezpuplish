<?php
/**
 * File containing the LegacyPathGeneratorTest class.
 *
 * @copyright Copyright (C) 1999-2012 eZ Systems AS. All rights reserved.
 * @license http://ez.no/licenses/gnu_gpl GNU General Public License v2.0
 * @version 2012.9
 */

namespace eZ\Publish\Core\FieldType\Tests\Image\PathGenerator;
use eZ\Publish\Core\FieldType\Image\PathGenerator\LegacyPathGenerator;

/**
 * @group fieldType
 * @group ezimage
 */
class LegacyPathGeneratorTest extends \PHPUnit_Framework_TestCase
{

    /**
     * @param mixed $data
     * @param mixed $expectedPath
     * @return void
     * @dataProvider provideStoragePathForFieldData
     */
    public function testGetStoragePathForField( $data, $expectedPath )
    {
        $pathGenerator = new LegacyPathGenerator();

        $this->assertEquals(
            $expectedPath,
            $pathGenerator->getStoragePathForField(
                $data['fieldId'],
                $data['versionNo'],
                $data['languageCode'],
                $data['nodePathString']
            )
        );
    }

    public function provideStoragePathForFieldData()
    {
        return array(
            array(
                array(
                    'fieldId' => 23,
                    'versionNo' => 1,
                    'languageCode' => 'eng-US',
                    'nodePathString' => 'sindelfingen/bielefeld/',
                ),
                'sindelfingen/bielefeld/23-1-eng-US',
            ),
            array(
                array(
                    'fieldId' => 23,
                    'versionNo' => 42,
                    'languageCode' => 'ger-DE',
                    'nodePathString' => 'sindelfingen/',
                ),
                'sindelfingen/23-42-ger-DE',
            ),
            array(
                array(
                    'fieldId' => 23,
                    'versionNo' => 2,
                    'languageCode' => 'eng-GB',
                    'nodePathString' => null,
                ),
                '23-2-eng-GB',
            ),
        );
    }
}
