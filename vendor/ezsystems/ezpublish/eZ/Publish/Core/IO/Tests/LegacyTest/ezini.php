<?php
/**
 * File containing the eZINI mock class.
 *
 * @copyright Copyright (C) 1999-2012 eZ Systems AS. All rights reserved.
 * @license http://ez.no/licenses/gnu_gpl GNU General Public License v2.0
 * @version 2012.9
 */

class eZINI
{
    public static function instance( $file = false )
    {
        return new self( $file );
    }

    public function __construct( $file )
    {
        if ( $file === false )
        {
            $file = 'site.ini';
        }
        $this->file = $file;
    }

    public function variable( $group, $variable )
    {
        if ( !isset( self::$data[ $this->file][$group][$variable] ) )
        {
            throw new Exception( "eZINI setting not found: $this->file / $group / $variable" );
        }

        return self::$data[ $this->file][$group][$variable];
    }

    public function __call( $method, $args )
    {

    }

    public static function __callStatic( $method, $args )
    {

    }

    private static $data = array(
        'site.ini' => array(
            'FileSettings' => array(
                'StorageDirPermissions' => '0777',
                'StorageFilePermissions' => '0666',
            ),
        ),
        'file.ini' => array(
            'FileSettings' => array(
                'Handlers' => array(),
            ),
        ),
    );

    private $file;
}
