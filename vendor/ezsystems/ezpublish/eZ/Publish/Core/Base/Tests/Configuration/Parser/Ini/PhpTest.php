<?php
/**
 * File contains: Test class
 *
 * @copyright Copyright (C) 1999-2012 eZ Systems AS. All rights reserved.
 * @license http://ez.no/licenses/gnu_gpl GNU General Public License v2.0
 * @version 2012.9
 */

namespace eZ\Publish\Core\Base\Tests\Configuration\Parser\Ini;
use eZ\Publish\Core\Base\Configuration\Parser\Ini as IniParser,
    eZ\Publish\Core\Base\Tests\Configuration\Parser\Ini\Base;

/**
 * Test case for Parser\Ini class
 */
class PHPTest extends Base
{
    public function getParser()
    {
        return new IniParser(
            array( 'IniParserStrict' => true )
        );
    }
}
