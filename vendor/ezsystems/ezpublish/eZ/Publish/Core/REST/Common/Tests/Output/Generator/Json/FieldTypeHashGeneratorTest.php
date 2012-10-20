<?php
/**
 * File containing the  class
 *
 * @copyright Copyright (C) 1999-2012 eZ Systems AS. All rights reserved.
 * @license http://ez.no/licenses/gnu_gpl GNU General Public License v2.0
 * @version 2012.9
 */

namespace eZ\Publish\Core\REST\Common\Tests\Output\Generator\Json;

use eZ\Publish\Core\REST\Common,
    eZ\Publish\Core\REST\Common\Tests\Output\Generator\FieldTypeHashGeneratorBaseTest;

class FieldTypeHashGeneratorTest extends FieldTypeHashGeneratorBaseTest
{
    /**
     * Initializes the field type hash generator
     *
     * @return \eZ\Publish\Core\REST\Common\Output\Generator\Json\FieldTypeHashGenerator
     */
    protected function initializeFieldTypeHashGenerator()
    {
        return new Common\Output\Generator\Json\FieldTypeHashGenerator();
    }

    /**
     * Initializes the generator
     *
     * @return \eZ\Publish\Core\REST\Common\Output\Generator
     */
    protected function initializeGenerator()
    {
        return new Common\Output\Generator\Json(
            $this->getFieldTypeHashGenerator()
        );
    }
}
