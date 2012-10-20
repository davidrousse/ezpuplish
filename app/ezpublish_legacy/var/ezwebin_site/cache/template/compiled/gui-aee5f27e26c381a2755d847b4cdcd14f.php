<?php
// URI:       extension/ezie/design/standard/templates/ezie/gui.tpl
// Filename:  extension/ezie/design/standard/templates/ezie/gui.tpl
// Timestamp: 1349610630 (Sun Oct 7 11:50:30 UTC 2012)
$oldSetArray_c2b2893d46b63ae4cb196e2fd8066dbc = isset( $setArray ) ? $setArray : array();
$setArray = array();
$tpl->Level++;
if ( $tpl->Level > 40 )
{
$text = $tpl->MaxLevelWarning;$tpl->Level--;
return;
}
$eZTemplateCompilerCodeDate = 1074699607;
if ( !defined( 'EZ_TEMPLATE_COMPILER_COMMON_CODE' ) )
include_once( 'var/ezwebin_site/cache/template/compiled/common.php' );

$text .= '

';
unset( $var );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$varData = array( 'value' => $var );
$tpl->processOperator( 'ezscript_require',
                       array (
  0 => 
  array (
    0 => 
    array (
      0 => 6,
      1 => 
      array (
        0 => 'array',
        1 => 
        array (
          0 => 
          array (
            0 => 1,
            1 => 'ezjsc::jquery',
            2 => false,
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            0 => 1,
            1 => 'ezjsc::jqueryio',
            2 => false,
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            0 => 1,
            1 => 'ezjsc::jqueryUI',
            2 => false,
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            0 => 1,
            1 => 'ezie.namespaces.js',
            2 => false,
          ),
        ),
        5 => 
        array (
          0 => 
          array (
            0 => 1,
            1 => 'ezie.js',
            2 => false,
          ),
        ),
        6 => 
        array (
          0 => 
          array (
            0 => 1,
            1 => 'ezie.ezconnect.success_default.js',
            2 => false,
          ),
        ),
        7 => 
        array (
          0 => 
          array (
            0 => 1,
            1 => 'ezie.ezconnect.failure_default.js',
            2 => false,
          ),
        ),
        8 => 
        array (
          0 => 
          array (
            0 => 1,
            1 => 'ezie.ezconnect.complete_default.js',
            2 => false,
          ),
        ),
        9 => 
        array (
          0 => 
          array (
            0 => 1,
            1 => 'ezie.ezconnect.connect.js',
            2 => false,
          ),
        ),
        10 => 
        array (
          0 => 
          array (
            0 => 1,
            1 => 'ezie.ezconnect.prepare.js',
            2 => false,
          ),
        ),
        11 => 
        array (
          0 => 
          array (
            0 => 1,
            1 => 'ezie.history.js',
            2 => false,
          ),
        ),
        12 => 
        array (
          0 => 
          array (
            0 => 1,
            1 => 'ezie.gui.js',
            2 => false,
          ),
        ),
        13 => 
        array (
          0 => 
          array (
            0 => 1,
            1 => 'ezie.gui.selection.js',
            2 => false,
          ),
        ),
        14 => 
        array (
          0 => 
          array (
            0 => 1,
            1 => 'ezie.gui.config.bind.filter_black_and_white.js',
            2 => false,
          ),
        ),
        15 => 
        array (
          0 => 
          array (
            0 => 1,
            1 => 'ezie.gui.config.bind.filter_sepia.js',
            2 => false,
          ),
        ),
        16 => 
        array (
          0 => 
          array (
            0 => 1,
            1 => 'ezie.gui.config.bind.filter_contrast.js',
            2 => false,
          ),
        ),
        17 => 
        array (
          0 => 
          array (
            0 => 1,
            1 => 'ezie.gui.config.bind.filter_brightness.js',
            2 => false,
          ),
        ),
        18 => 
        array (
          0 => 
          array (
            0 => 1,
            1 => 'ezie.gui.config.bind.menu_close_without_saving.js',
            2 => false,
          ),
        ),
        19 => 
        array (
          0 => 
          array (
            0 => 1,
            1 => 'ezie.gui.config.bind.menu_save_and_close.js',
            2 => false,
          ),
        ),
        20 => 
        array (
          0 => 
          array (
            0 => 1,
            1 => 'ezie.gui.config.bind.tool_flip_hor.js',
            2 => false,
          ),
        ),
        21 => 
        array (
          0 => 
          array (
            0 => 1,
            1 => 'ezie.gui.config.bind.tool_flip_ver.js',
            2 => false,
          ),
        ),
        22 => 
        array (
          0 => 
          array (
            0 => 1,
            1 => 'ezie.gui.config.bind.tool_redo.js',
            2 => false,
          ),
        ),
        23 => 
        array (
          0 => 
          array (
            0 => 1,
            1 => 'ezie.gui.config.bind.tool_select.js',
            2 => false,
          ),
        ),
        24 => 
        array (
          0 => 
          array (
            0 => 1,
            1 => 'ezie.gui.config.bind.tool_undo.js',
            2 => false,
          ),
        ),
        25 => 
        array (
          0 => 
          array (
            0 => 1,
            1 => 'ezie.gui.config.bind.tool_watermark.js',
            2 => false,
          ),
        ),
        26 => 
        array (
          0 => 
          array (
            0 => 1,
            1 => 'ezie.gui.config.bind.tool_pixelate.js',
            2 => false,
          ),
        ),
        27 => 
        array (
          0 => 
          array (
            0 => 1,
            1 => 'ezie.gui.config.bind.tool_rotation.js',
            2 => false,
          ),
        ),
        28 => 
        array (
          0 => 
          array (
            0 => 1,
            1 => 'ezie.gui.config.bind.tool_zoom.js',
            2 => false,
          ),
        ),
        29 => 
        array (
          0 => 
          array (
            0 => 1,
            1 => 'ezie.gui.config.bind.tool_crop.js',
            2 => false,
          ),
        ),
        30 => 
        array (
          0 => 
          array (
            0 => 1,
            1 => 'ezie.gui.config.bind.opts_attach.js',
            2 => false,
          ),
        ),
        31 => 
        array (
          0 => 
          array (
            0 => 1,
            1 => 'ezie.gui.config.bind.opts_detach.js',
            2 => false,
          ),
        ),
        32 => 
        array (
          0 => 
          array (
            0 => 1,
            1 => 'ezie.gui.config.zoom.js',
            2 => false,
          ),
        ),
        33 => 
        array (
          0 => 
          array (
            0 => 1,
            1 => 'ezie.gui.main_window.js',
            2 => false,
          ),
        ),
        34 => 
        array (
          0 => 
          array (
            0 => 1,
            1 => 'ezie.gui.tools_window.js',
            2 => false,
          ),
        ),
        35 => 
        array (
          0 => 
          array (
            0 => 1,
            1 => 'ezie.gui.opts_window.js',
            2 => false,
          ),
        ),
        36 => 
        array (
          0 => 
          array (
            0 => 1,
            1 => 'ezie.gui.config.bindings.opts_items_sliders.js',
            2 => false,
          ),
        ),
        37 => 
        array (
          0 => 
          array (
            0 => 1,
            1 => 'ezie.gui.config.bindings.opts_items_buttons.js',
            2 => false,
          ),
        ),
        38 => 
        array (
          0 => 
          array (
            0 => 1,
            1 => 'ezie.gui.config.bindings.main_window.js',
            2 => false,
          ),
        ),
        39 => 
        array (
          0 => 
          array (
            0 => 1,
            1 => 'ezie.gui.config.bindings.tools_window.js',
            2 => false,
          ),
        ),
        40 => 
        array (
          0 => 
          array (
            0 => 1,
            1 => 'ezie.gui.config.bindings.opts_window.js',
            2 => false,
          ),
        ),
        41 => 
        array (
          0 => 
          array (
            0 => 1,
            1 => 'jquery.ezie.js',
            2 => false,
          ),
        ),
        42 => 
        array (
          0 => 
          array (
            0 => 1,
            1 => 'jquery.Jcrop.min.js',
            2 => false,
          ),
        ),
        43 => 
        array (
          0 => 
          array (
            0 => 1,
            1 => 'jquery.hotkeys.js',
            2 => false,
          ),
        ),
        44 => 
        array (
          0 => 
          array (
            0 => 1,
            1 => 'jquery.circular.slider.js',
            2 => false,
          ),
        ),
        45 => 
        array (
          0 => 
          array (
            0 => 1,
            1 => 'colorpicker/colorpicker.js',
            2 => false,
          ),
        ),
        46 => 
        array (
          0 => 
          array (
            0 => 1,
            1 => 'colorpicker/eye.js',
            2 => false,
          ),
        ),
        47 => 
        array (
          0 => 
          array (
            0 => 1,
            1 => 'colorpicker/utils.js',
            2 => false,
          ),
        ),
        48 => 
        array (
          0 => 
          array (
            0 => 1,
            1 => 'vtip-min.js',
            2 => false,
          ),
        ),
        49 => 
        array (
          0 => 
          array (
            0 => 1,
            1 => 'wait.js',
            2 => false,
          ),
        ),
        50 => 
        array (
          0 => 
          array (
            0 => 1,
            1 => 'ezie.js',
            2 => false,
          ),
        ),
      ),
      2 => false,
    ),
  ),
),
                       $rootNamespace, $currentNamespace, $varData, false, false );
$var = $varData['value'];
unset( $varData );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '

';
unset( $var );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$varData = array( 'value' => $var );
$tpl->processOperator( 'ezcss_require',
                       array (
  0 => 
  array (
    0 => 
    array (
      0 => 6,
      1 => 
      array (
        0 => 'array',
        1 => 
        array (
          0 => 
          array (
            0 => 1,
            1 => 'ezie/ezie.css',
            2 => false,
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            0 => 1,
            1 => 'ezie/slider.css',
            2 => false,
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            0 => 1,
            1 => 'ezie/colorpicker.css',
            2 => false,
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            0 => 1,
            1 => 'ezie/vtip.css',
            2 => false,
          ),
        ),
        5 => 
        array (
          0 => 
          array (
            0 => 1,
            1 => 'ezie/jquery.Jcrop.css',
            2 => false,
          ),
        ),
      ),
      2 => false,
    ),
  ),
),
                       $rootNamespace, $currentNamespace, $varData, false, false );
$var = $varData['value'];
unset( $varData );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '

<div id="ezieMainContainer">
    <div class="ezieBox drawZone" id="ezieMainWindow">
        <div class="topBar">
            <div class="leftCorner"></div><div class="rightCorner"></div>
            <div class="topBarContent">
                <h2>Éditeur d\'image eZ</h2>
                <ul id="window">
                    <li><a id="ezie_close" href="#"></a></li>
                </ul>
            </div>
        </div>
        <div class="contentLeft"><div class="contentRight">
                <div class="content" id="resize">
                    <ul class="topMenu">
                        <li><a href="" id="ezie_save_and_close" title="Enregistrer et quitter">Enregistrer &amp; quitter</a></li>
                        <li><a href="" id="ezie_quit_without_saving" title="Quitter sans enregistrer">Quitter</a></li>
                    </ul>
                    <div id="grid">
                        <span id="main_image">
                        </span>
                    </div>
                    <div id="sideBar" class="detachBox">
                        <div class="topMenu">
                            <h2>Miniature</h2>
                            <a class="sep" href="#"></a>
                        </div>
                        <div id="miniature">

                        </div>

                        <div id="optsRotation" class="opts">
                            <div class="topMenu"><h2>Rotation</h2></div>
                            <div id="selectAngle">
                                <p class="relative">
                                    <a class="preset zero" href="javascript:void(0)">0°</a>
                                    <a class="preset halfpi" href="javascript:void(0)">90°</a>
                                    <a class="preset pi" href="javascript:void(0)">180°</a>
                                    <a class="preset threehalfpi" href="javascript:void(0)">270°</a>
                                </p>
                                <p id="circularSlider">
                                    <input type="text" name="angle" value="0" />
                                </p>
                             </div>

                            <input type="hidden" name="color" value="FFFFFF" />
                            <div id="colorSelector"><div style="background-color: #ffffff"></div></div>
                            <button type="button">Ok</button>
                        </div>

                        <div id="optsSelect" class="opts">
                            <div class="topMenu"><h2>Sélectionner</h2></div>

                            <fieldset>
                                <legend>Dimensions</legend>
                                <input type="text" name="selection_width" value="100" /> x
                                <input type="text" name="selection_height" value="100" />
                            </fieldset>

                            <ul class="box-content">
                                <li><input type="radio" name="selection_type" value="ratio" id="selection_type_ratio" /><label for="selection_type_ratio">Conserver l\'aspect</label></li>
                                <li><input type="radio" name="selection_type" value="free" id="selection_type_free" checked="checked" /><label for="selection_type_free">Libre</label></li>
                            </ul>

                            <div id="optsCrop" class="opts">
                                <button class="submit">Rogner</button>
                            </div>
                        </div>


                        <div id="optsZoom" class="opts">
                            <div class="topMenu"><h2>Zoom</h2></div>
                            <ul class="tools">
                                <li class="current"><a id="zoomIn" href="#"></a></li>
                                <li><a id="zoomOut" href="#"></a></li>
                            </ul>
                            <button class="button" id="actualPixels">Taille réelle</button>
                            <button class="button" id="fitOnScreen">Ajuster à l\'écran</button>
                        </div>

                        <div id="optsWatermarks" class="opts">
                            <div class="topMenu"><h2>Marquages</h2></div>

                            <div id="optsWatermarksPositions">
                                <button></button>
                                <button></button>
                                <button></button>
                                <button></button>
                                <button></button>
                                <button></button>
                                <button></button>
                                <button></button>
                                <button></button>
                            </div>

                            ';
// def $watermarks
if ( $tpl->hasVariable( 'watermarks', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'watermarks' is already defined.", array (
  0 => 
  array (
    0 => 156,
    1 => 28,
    2 => 8515,
  ),
  1 => 
  array (
    0 => 156,
    1 => 84,
    2 => 8571,
  ),
  2 => 'extension/ezie/design/standard/templates/ezie/gui.tpl',
) );
    $tpl->setVariable( 'watermarks', array (
  0 => 'elephpant.png',
  1 => 'ez-logo.png',
), $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'watermarks', array (
  0 => 'elephpant.png',
  1 => 'ez-logo.png',
), $rootNamespace );
}

$text .= '
                            <ul>
                                ';
// foreach begins
$skipDelimiter = true;
if ( !isset( $fe_variable_stack_cb7246d616f87e008eb9a7b55fe4c200_8 ) ) $fe_variable_stack_cb7246d616f87e008eb9a7b55fe4c200_8 = array();
$fe_variable_stack_cb7246d616f87e008eb9a7b55fe4c200_8[] = compact( 'fe_array_cb7246d616f87e008eb9a7b55fe4c200_8', 'fe_array_keys_cb7246d616f87e008eb9a7b55fe4c200_8', 'fe_n_items_cb7246d616f87e008eb9a7b55fe4c200_8', 'fe_n_items_processed_cb7246d616f87e008eb9a7b55fe4c200_8', 'fe_i_cb7246d616f87e008eb9a7b55fe4c200_8', 'fe_key_cb7246d616f87e008eb9a7b55fe4c200_8', 'fe_val_cb7246d616f87e008eb9a7b55fe4c200_8', 'fe_offset_cb7246d616f87e008eb9a7b55fe4c200_8', 'fe_max_cb7246d616f87e008eb9a7b55fe4c200_8', 'fe_reverse_cb7246d616f87e008eb9a7b55fe4c200_8', 'fe_first_val_cb7246d616f87e008eb9a7b55fe4c200_8', 'fe_last_val_cb7246d616f87e008eb9a7b55fe4c200_8' );
unset( $fe_array_cb7246d616f87e008eb9a7b55fe4c200_8 );
unset( $fe_array_cb7246d616f87e008eb9a7b55fe4c200_8 );
$fe_array_cb7246d616f87e008eb9a7b55fe4c200_8 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'watermarks', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['watermarks'] : null;
if (! isset( $fe_array_cb7246d616f87e008eb9a7b55fe4c200_8 ) ) $fe_array_cb7246d616f87e008eb9a7b55fe4c200_8 = NULL;
while ( is_object( $fe_array_cb7246d616f87e008eb9a7b55fe4c200_8 ) and method_exists( $fe_array_cb7246d616f87e008eb9a7b55fe4c200_8, 'templateValue' ) )
    $fe_array_cb7246d616f87e008eb9a7b55fe4c200_8 = $fe_array_cb7246d616f87e008eb9a7b55fe4c200_8->templateValue();

$fe_array_keys_cb7246d616f87e008eb9a7b55fe4c200_8 = is_array( $fe_array_cb7246d616f87e008eb9a7b55fe4c200_8 ) ? array_keys( $fe_array_cb7246d616f87e008eb9a7b55fe4c200_8 ) : array();
$fe_n_items_cb7246d616f87e008eb9a7b55fe4c200_8 = count( $fe_array_keys_cb7246d616f87e008eb9a7b55fe4c200_8 );
$fe_n_items_processed_cb7246d616f87e008eb9a7b55fe4c200_8 = 0;
$fe_offset_cb7246d616f87e008eb9a7b55fe4c200_8 = 0;
$fe_max_cb7246d616f87e008eb9a7b55fe4c200_8 = $fe_n_items_cb7246d616f87e008eb9a7b55fe4c200_8 - $fe_offset_cb7246d616f87e008eb9a7b55fe4c200_8;
$fe_reverse_cb7246d616f87e008eb9a7b55fe4c200_8 = false;
if ( $fe_offset_cb7246d616f87e008eb9a7b55fe4c200_8 < 0 || $fe_offset_cb7246d616f87e008eb9a7b55fe4c200_8 >= $fe_n_items_cb7246d616f87e008eb9a7b55fe4c200_8 )
{
    $fe_offset_cb7246d616f87e008eb9a7b55fe4c200_8 = ( $fe_offset_cb7246d616f87e008eb9a7b55fe4c200_8 < 0 ) ? 0 : $fe_n_items_cb7246d616f87e008eb9a7b55fe4c200_8;
    if ( $fe_n_items_cb7246d616f87e008eb9a7b55fe4c200_8 || $fe_offset_cb7246d616f87e008eb9a7b55fe4c200_8 < 0 )
 {
        eZDebug::writeWarning("Invalid 'offset' parameter specified: '$fe_offset_cb7246d616f87e008eb9a7b55fe4c200_8'. Array count: $fe_n_items_cb7246d616f87e008eb9a7b55fe4c200_8");   
}
}
if ( $fe_max_cb7246d616f87e008eb9a7b55fe4c200_8 < 0 || $fe_offset_cb7246d616f87e008eb9a7b55fe4c200_8 + $fe_max_cb7246d616f87e008eb9a7b55fe4c200_8 > $fe_n_items_cb7246d616f87e008eb9a7b55fe4c200_8 )
{
    if ( $fe_max_cb7246d616f87e008eb9a7b55fe4c200_8 < 0 )
 eZDebug::writeWarning("Invalid 'max' parameter specified: $fe_max_cb7246d616f87e008eb9a7b55fe4c200_8");
    $fe_max_cb7246d616f87e008eb9a7b55fe4c200_8 = $fe_n_items_cb7246d616f87e008eb9a7b55fe4c200_8 - $fe_offset_cb7246d616f87e008eb9a7b55fe4c200_8;
}
if ( $fe_reverse_cb7246d616f87e008eb9a7b55fe4c200_8 )
{
    $fe_first_val_cb7246d616f87e008eb9a7b55fe4c200_8 = $fe_n_items_cb7246d616f87e008eb9a7b55fe4c200_8 - 1 - $fe_offset_cb7246d616f87e008eb9a7b55fe4c200_8;
    $fe_last_val_cb7246d616f87e008eb9a7b55fe4c200_8  = 0;
}
else
{
    $fe_first_val_cb7246d616f87e008eb9a7b55fe4c200_8 = $fe_offset_cb7246d616f87e008eb9a7b55fe4c200_8;
    $fe_last_val_cb7246d616f87e008eb9a7b55fe4c200_8  = $fe_n_items_cb7246d616f87e008eb9a7b55fe4c200_8 - 1;
}
// foreach
for ( $fe_i_cb7246d616f87e008eb9a7b55fe4c200_8 = $fe_first_val_cb7246d616f87e008eb9a7b55fe4c200_8; $fe_n_items_processed_cb7246d616f87e008eb9a7b55fe4c200_8 < $fe_max_cb7246d616f87e008eb9a7b55fe4c200_8 && ( $fe_reverse_cb7246d616f87e008eb9a7b55fe4c200_8 ? $fe_i_cb7246d616f87e008eb9a7b55fe4c200_8 >= $fe_last_val_cb7246d616f87e008eb9a7b55fe4c200_8 : $fe_i_cb7246d616f87e008eb9a7b55fe4c200_8 <= $fe_last_val_cb7246d616f87e008eb9a7b55fe4c200_8 ); $fe_reverse_cb7246d616f87e008eb9a7b55fe4c200_8 ? $fe_i_cb7246d616f87e008eb9a7b55fe4c200_8-- : $fe_i_cb7246d616f87e008eb9a7b55fe4c200_8++ )
{
$fe_key_cb7246d616f87e008eb9a7b55fe4c200_8 = $fe_array_keys_cb7246d616f87e008eb9a7b55fe4c200_8[$fe_i_cb7246d616f87e008eb9a7b55fe4c200_8];
$fe_val_cb7246d616f87e008eb9a7b55fe4c200_8 = $fe_array_cb7246d616f87e008eb9a7b55fe4c200_8[$fe_key_cb7246d616f87e008eb9a7b55fe4c200_8];
$vars[$rootNamespace]['wm'] = $fe_val_cb7246d616f87e008eb9a7b55fe4c200_8;
$text .= '                                    <li><img class="ezie-watermark-image" src=';
unset( $var );
unset( $var1 );
unset( $var3 );
unset( $var3 );
$var3 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'wm', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['wm'] : null;
if (! isset( $var3 ) ) $var3 = NULL;
while ( is_object( $var3 ) and method_exists( $var3, 'templateValue' ) )
    $var3 = $var3->templateValue();
while ( is_object( $var3 ) and method_exists( $var3, 'templateValue' ) )
    $var3 = $var3->templateValue();
$var1 = ( 'watermarks/' . $var3 );
unset( $var3 );
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
$var1 = eZURLOperator::eZImage( $tpl, $var1, "ezimage", false );
$var1 = '"' . $var1 . '"';
$var = $var1;
unset( $var1 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= ' alt="" /></li>
                                ';
$fe_n_items_processed_cb7246d616f87e008eb9a7b55fe4c200_8++;
} // foreach
$skipDelimiter = false;
if ( count( $fe_variable_stack_cb7246d616f87e008eb9a7b55fe4c200_8 ) ) extract( array_pop( $fe_variable_stack_cb7246d616f87e008eb9a7b55fe4c200_8 ) );

else
{

unset( $fe_array_cb7246d616f87e008eb9a7b55fe4c200_8 );

unset( $fe_array_keys_cb7246d616f87e008eb9a7b55fe4c200_8 );

unset( $fe_n_items_cb7246d616f87e008eb9a7b55fe4c200_8 );

unset( $fe_n_items_processed_cb7246d616f87e008eb9a7b55fe4c200_8 );

unset( $fe_i_cb7246d616f87e008eb9a7b55fe4c200_8 );

unset( $fe_key_cb7246d616f87e008eb9a7b55fe4c200_8 );

unset( $fe_val_cb7246d616f87e008eb9a7b55fe4c200_8 );

unset( $fe_offset_cb7246d616f87e008eb9a7b55fe4c200_8 );

unset( $fe_max_cb7246d616f87e008eb9a7b55fe4c200_8 );

unset( $fe_reverse_cb7246d616f87e008eb9a7b55fe4c200_8 );

unset( $fe_first_val_cb7246d616f87e008eb9a7b55fe4c200_8 );

unset( $fe_last_val_cb7246d616f87e008eb9a7b55fe4c200_8 );

unset( $fe_variable_stack_cb7246d616f87e008eb9a7b55fe4c200_8 );

}

// foreach ends
$text .= '                            </ul>
                            
                            <button class="submit">Appliquer</button>
                        </div>

                        <!-- CONTRAST -->
                        <div id="optsContrast" class="opts">
                            <div class="topMenu"><h2>Contraste</h2></div>
                            <div>
                                <div class="slider"></div>
                                <input type="text" name="optsContrastValue" value="0" />
                            </div>
                            <button class="submit">Appliquer</button>
                        </div>

                        <!-- BRIGHTNESS -->
                        <div id="optsBrightness" class="opts">
                            <div class="topMenu"><h2>Luminosité</h2></div>
                            <div>
                                <div class="slider"></div>
                                <input type="text" name="optsBrightnessValue" value="0" />
                            </div>
                            <button class="submit">Appliquer</button>
                        </div>

                    </div>
                </div>
        </div></div>
        <div class="bottomBar">
            <div class="leftCorner"></div><div class="rightCorner"></div>
            <div class="bottomBarContent">
                <p></p>
                <div id="loadingBar"></div>
            </div>
        </div>
    </div>


    <div class="ezieBox" id="ezieToolsWindow">
        <div class="topBar">
            <div class="leftCorner"></div><div class="rightCorner"></div>
            <div class="topBarContent">
                <h2>Actions</h2>
            </div>
        </div>
        <div class="contentLeft"><div class="contentRight">
                <div class="content">
                    <div class="section">
                        <div class="sectionHeader">
                            <h4>Outils</h4>
                        </div>
                        <div class="sectionContent">
                            <ul class="tools">
                                <li><a class="vtip" id="ezie_select" href="" title="Sélectionner"></a></li>
                                <li class="current"><a class="vtip" id="ezie_zoom" href="" title="Zoom"></a></li>
                                <li class="less"><a class="vtip" id="ezie_undo" href="" title="Annuler"></a></li>
                                <li class="less"><a class="vtip" id="ezie_redo" href="" title="Rétablir"></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="section">
                        <div class="sectionHeader">
                            <h4>Image</h4>
                        </div>
                        <div class="sectionContent">
                            <ul class="filters">
                                <li><a href="" id="ezie_flip_hor" title=Symétrie horizontale">Symétrie horizontale</a></li>
                                <li><a href="" id="ezie_flip_ver" title="Symétrie verticale">Symétrie verticale</a></li>
                                <li class="more"><a href="" id="ezie_rotation" title="Rotation">Rotation</a></li>
                                <li class="more"><a href="" id="ezie_crop" title="Crop">Rogner</a><span id="ezie_alternative_crop_text">Appliquer le rognage</span></li>
                                <li class="more"><a href="" id="ezie_watermark" title="Marquage">Marquage</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="section">
                        <div class="sectionHeader">
                            <h4>Effets</h4>
                        </div>
                        <div class="sectionContent">
                            <ul class="filters">
                                <li class="more"><a href="" id="ezie_contrast" title="Contraste">Contraste</a></li>
                                <li class="more"><a href="" id="ezie_brightness" title="Luminosité">Luminosité</a></li>
                                <li><a href="" id="ezie_pixelate" title="Pixelisation">Pixelisation</a></li>
                                <li><a href="" id="ezie_blackandwhite" title="Noir et blanc">Noir et blanc</a></li>
                                <li><a href="" id="ezie_sepia" title="Sépia">Sépia</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
        </div></div>
        <div class="bottomBar">
            <div class="leftCorner"></div><div class="rightCorner"></div>
            <div class="bottomBarContent">
                <p></p>
            </div>
        </div>
    </div>

    <div class="ezieBox" id="ezieOptsWindow">
        <div class="topBar">
            <div class="leftCorner"></div><div class="rightCorner"></div>
            <div class="topBarContent">
                <h2>Options</h2>
            </div>
        </div>
        <div class="contentLeft"><div class="contentRight">
                <div class="content">
                </div>
        </div></div>
        <div class="bottomBar">
            <div class="leftCorner"></div><div class="rightCorner"></div>
            <div class="bottomBarContent">
                <p></p>
            </div>
        </div>
    </div>

    <div id="ezieConnectionError" class="ezieBox">
        <div>
            <p>L\'image n\'est pas chargée en raison d\'une erreur côté serveur.</p>
        </div>
        <div>
            <input id="ezieConfirmMessage" type="button" class="button" value="Quitter" />
        </div>
    </div>

    <div id="ezieControlBar"></div>
</div>
';

$setArray = $oldSetArray_c2b2893d46b63ae4cb196e2fd8066dbc;
$tpl->Level--;
?>
