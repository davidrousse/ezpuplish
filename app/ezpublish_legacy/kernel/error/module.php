<?php
/**
 * @copyright Copyright (C) 1999-2012 eZ Systems AS. All rights reserved.
 * @license http://www.gnu.org/licenses/gpl-2.0.txt GNU General Public License v2
 * @version  2012.9
 * @package kernel
 */

$Module = array( "name" => "eZError" );

$ViewList = array();
$ViewList["view"] = array(
    "script" => "view.php",
    "params" => array( 'Type', 'Number', 'ExtraParameters' ) );

?>
