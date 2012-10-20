<?php
/**
 * File containing the ezie module definition
 *
 * @copyright Copyright (C) 1999-2012 eZ Systems AS. All rights reserved.
 * @license http://www.gnu.org/licenses/gpl-2.0.txt GNU General Public License v2
 * @version 5.0.0-beta2
 * @package ezie
 */

$Module = array( 'name' => 'ezie' );

$ViewList = array();

$ViewList['prepare'] = array('script' => 'prepare.php',
                             'params' => array( 'object_id', 'edit_language', 'attribute_id', 'version' ),
);

// FILTERS
$ViewList['filter_bw']         = array( 'script' => 'filter_bw.php' );
$ViewList['filter_sepia']      = array( 'script' => 'filter_sepia.php' );
$ViewList['filter_blur']       = array( 'script' => 'filter_blur.php' );
$ViewList['filter_contrast']   = array( 'script' => 'filter_contrast.php' );
$ViewList['filter_brightness'] = array( 'script' => 'filter_brightness.php' );

// TOOLS
$ViewList['tool_flip_hor']   = array( 'script' => 'tool_flip_hor.php' );
$ViewList['tool_flip_ver']   = array( 'script' => 'tool_flip_ver.php' );
$ViewList['tool_rotation']   = array( 'script' => 'tool_rotation.php' );
$ViewList['tool_levels']     = array( 'script' => 'tool_levels.php' );
$ViewList['tool_saturation'] = array( 'script' => 'tool_saturation.php' );
$ViewList['tool_pixelate']   = array( 'script' => 'tool_pixelate.php' );
$ViewList['tool_crop']       = array( 'script' => 'tool_crop.php' );
$ViewList['tool_watermark']  = array( 'script' => 'tool_watermark.php' );

// MENU ACTIONS
$ViewList['no_save_and_quit'] = array('script' => 'no_save_and_quit.php');
$ViewList['save_and_quit']    = array('script' => 'save_and_quit.php');

$FunctionList = array();
?>
