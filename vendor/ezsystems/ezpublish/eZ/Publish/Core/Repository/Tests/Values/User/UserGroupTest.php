<?php
/**
 * File containing the UserGroupTest class
 *
 * @copyright Copyright (C) 1999-2012 eZ Systems AS. All rights reserved.
 * @license http://ez.no/licenses/gnu_gpl GNU General Public License v2.0
 * @version 2012.9
 */

namespace eZ\Publish\Core\Repository\Tests\Values\User;
use eZ\Publish\Core\Repository\Values\User\UserGroup,
    PHPUnit_Framework_TestCase;

/**
 *
 */
class UserGroupTest extends PHPUnit_Framework_TestCase
{
    /**
     * @covers \eZ\Publish\Core\Repository\Values\User\User::getIterator
     * @covers \eZ\Publish\Core\Repository\Values\User\User::getProperties
     */
    public function testObjectProperties()
    {
        self::markTestIncomplete( "Design issues in User, awaiting changes regarding it extending Content" );
        $object = new UserGroup;
        $properties = $object->attributes();
        self::assertNotContains( 'internalFields', $properties, 'Internal property found ' );
        self::assertContains( 'id', $properties, 'Property not found' );
        self::assertContains( 'fields', $properties, 'Property not found' );
        self::assertContains( 'relations', $properties, 'Property not found' );
        self::assertContains( 'versionInfo', $properties, 'Property not found' );
        self::assertContains( 'contentInfo', $properties, 'Property not found' );
        self::assertContains( 'contentType', $properties, 'Property not found' );
        self::assertContains( 'parentId', $properties, 'Property not found' );
        self::assertContains( 'subGroupCount', $properties, 'Property not found' );

        // check for duplicates and double check existence of property
        $propertiesHash = array();
        foreach ( $properties as $property )
        {
            if ( isset( $propertiesHash[$property] ) )
            {
                self::fail( "Property '{$property}' exists several times in properties list" );
            }
            else if ( !isset( $object->$property ) )
            {
                self::fail( "Property '{$property}' does not exist on object, even though it was hinted to be there" );
            }
            $propertiesHash[$property] = 1;
        }
    }
}