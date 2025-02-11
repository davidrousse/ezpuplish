<?php
/**
 * File containing the ezcWebdavGetLastModifiedProperty class.
 *
 * @package Webdav
 * @version //autogentag//
 * @copyright Copyright (C) 2005-2008 eZ systems as. All rights reserved.
 * @license http://ez.no/licenses/new_bsd New BSD License
 */
/**
 * An object of this class represents the Webdav property <getlastmodified>.
 *
 * @property ezcWebdavDateTime $date
 *           The last modification date.
 *
 * @version //autogentag//
 * @package Webdav
 */
class ezcWebdavGetLastModifiedProperty extends ezcWebdavLiveProperty
{
    /**
     * Creates a new ezcWebdavGetLastModifiedProperty.
     *
     * The $date parameter indicates the last modification time of the affected
     * resource.
     * 
     * @param ezcWebdavDateTime $date
     * @return void
     */
    public function __construct( ezcWebdavDateTime $date = null )
    {
        parent::__construct( 'getlastmodified' );

        $this->date = $date;
    }

    /**
     * Sets a property.
     * This method is called when an property is to be set.
     * 
     * @param string $propertyName The name of the property to set.
     * @param mixed $propertyValue The property value.
     * @return void
     * @ignore
     *
     * @throws ezcBasePropertyNotFoundException
     *         if the given property does not exist.
     * @throws ezcBaseValueException
     *         if the value to be assigned to a property is invalid.
     * @throws ezcBasePropertyPermissionException
     *         if the property to be set is a read-only property.
     */
    public function __set( $propertyName, $propertyValue )
    {
        switch ( $propertyName )
        {
            case 'date':
                if ( !( $propertyValue instanceof ezcWebdavDateTime ) && $propertyValue !== null )
                {
                    return $this->hasError( $propertyName, $propertyValue, 'ezcWebdavDateTime' );
                }

                $this->properties[$propertyName] = $propertyValue;
                break;

            default:
                parent::__set( $propertyName, $propertyValue );
        }
    }

    /**
     * Returns if property has no content.
     *
     * Returns true, if the property has no content stored.
     * 
     * @return bool
     */
    public function hasNoContent()
    {
        return $this->properties['date'] === null;
    }
}

?>
