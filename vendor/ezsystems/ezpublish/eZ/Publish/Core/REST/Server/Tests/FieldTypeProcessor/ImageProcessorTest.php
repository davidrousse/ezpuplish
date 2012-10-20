<?php
/**
 * File containing the ImageProcessorTest class
 *
 * @copyright Copyright (C) 1999-2012 eZ Systems AS. All rights reserved.
 * @license http://ez.no/licenses/gnu_gpl GNU General Public License v2.0
 * @version 2012.9
 */

namespace eZ\Publish\Core\REST\Server\Tests\FieldTypeProcessor;

use eZ\Publish\Core\REST\Server\FieldTypeProcessor\ImageProcessor;

class ImageProcessorTest extends BinaryInputProcessorTest
{
    public function testPostProcessHash()
    {
        $processor = $this->getProcessor();

        $inputHash = array(
            'path' => 'var/some_site/223-1-eng-US/Cool-File.jpg',
        );

        $outputHash = $processor->postProcessHash( $inputHash );

        $this->assertEquals(
            array(
                'path' => 'var/some_site/223-1-eng-US/Cool-File.jpg',
                'variants' => array(
                    array(
                        'variant' => 'original',
                        'contentType' => 'image/jpeg',
                        'url' => 'http://example.com/images/223-1/original',
                    ),
                    array(
                        'variant' => 'thumbnail',
                        'contentType' => 'image/png',
                        'url' => 'http://example.com/images/223-1/thumbnail',
                    ),
                ),
            ),
            $outputHash
        );
    }

    /**
     * Returns the processor under test
     *
     * @return \eZ\Publish\Core\REST\Server\FieldTypeProcessor\BinaryInputProcessor
     */
    protected function getProcessor()
    {
        return new ImageProcessor(
            $this->getTempDir(),
            'http://example.com/images/{fieldId}-{versionNo}/{variant}',
            array(
                'original' => 'image/jpeg',
                'thumbnail' => 'image/png',
            )
        );
    }
}
