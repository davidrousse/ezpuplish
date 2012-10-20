<?php
// URI:       design:parts/media/menu.tpl
// Filename:  design/admin/templates/parts/media/menu.tpl
// Timestamp: 1349721948 (Mon Oct 8 18:45:48 UTC 2012)
$oldSetArray_a09abeaa11e537d5ba8a377b836f8dff = isset( $setArray ) ? $setArray : array();
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

$text .= '<div id="content-tree">

<div class="box-header"><div class="box-ml">
<h4>Médiathèque</h4>
</div></div>

<div class="box-bc"><div class="box-ml"><div class="box-content">


<div id="contentstructure">
    ';
$oldRestoreIncludeArray_268d40956c8357518773935eccac473a = isset( $restoreIncludeArray ) ? $restoreIncludeArray : array();
$restoreIncludeArray = array();

if ( isset( $currentNamespace ) and isset( $vars[$currentNamespace]['custom_root_node_id'] ) )
    $restoreIncludeArray[] = array( $currentNamespace, 'custom_root_node_id', $vars[$currentNamespace]['custom_root_node_id'] );
elseif ( !isset( $vars[( isset( $currentNamespace ) ? $currentNamespace : '' )]['custom_root_node_id'] ) ) 
    $restoreIncludeArray[] = array( ( isset( $currentNamespace ) ? $currentNamespace : '' ), 'custom_root_node_id', 'unset' );

$vars[$currentNamespace]['custom_root_node_id'] = '43';
if ( !isset( $dKeys ) )
{
    $resH = $tpl->resourceHandler( "design" );
    $dKeys = $resH->keys();
}

$resourceFound = false;
if ( file_exists( 'var/ezwebin_site/cache/template/compiled/content_structure_menu_dynamic-4a708eb8e2ea0879859cf64a20bce851.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$rootNamespace = $currentNamespace;
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'design/admin/templates/contentstructuremenu/content_structure_menu_dynamic.tpl' );
include( '' . 'var/ezwebin_site/cache/template/compiled/content_structure_menu_dynamic-4a708eb8e2ea0879859cf64a20bce851.php' );
$tpl->unsetLocalVariables();
$tpl->destroyLocalVariablesList();
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}
else
{
    $resourceFound = true;
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$rootNamespace = $currentNamespace;
$textElements = array();
$extraParameters = array();
$tpl->processURI( 'design/admin/templates/contentstructuremenu/content_structure_menu_dynamic.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}

foreach ( $restoreIncludeArray as $element )
{
    if ( $element[2] === 'unset' )
    {
        unset( $vars[$element[0]][$element[1]] );
        continue;
    }
    $vars[$element[0]][$element[1]] = $element[2];
}
$restoreIncludeArray = $oldRestoreIncludeArray_268d40956c8357518773935eccac473a;

$text .= '</div>

';
// if begins
unset( $if_cond );
unset( $if_cond1 );
unset( $if_cond1 );
$if_cond1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'ui_context', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['ui_context'] : null;
if (! isset( $if_cond1 ) ) $if_cond1 = NULL;
while ( is_object( $if_cond1 ) and method_exists( $if_cond1, 'templateValue' ) )
    $if_cond1 = $if_cond1->templateValue();
$if_cond = ( ( $if_cond1 ) != ( 'browse' ) );
unset( $if_cond1 );
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '<div id="trash">
<a class="image-text" href=';
unset( $var );
unset( $var1 );
$var1 = ( '/content/trash/' . '2' );
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();

eZURI::transformURI( $var1, false, eZURI::getTransformURIMode() );
$var1 = '"' . $var1 . '"';
$var = $var1;
unset( $var1 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= ' title="Voir et gérer le contenu de la corbeille."><img src="/ezpublish/app/ezpublish_legacy/design/admin/images/trash-icon-16x16.gif" width="16" height="16" alt="Trash" />&nbsp;<span>Corbeille</span></a>
</div>';
}
unset( $if_cond );
// if ends

$text .= '
</div></div></div>
</div>


';
$oldRestoreIncludeArray_40a0359f80bd826c1331ce07fac47bb4 = isset( $restoreIncludeArray ) ? $restoreIncludeArray : array();
$restoreIncludeArray = array();

if ( isset( $currentNamespace ) and isset( $vars[$currentNamespace]['ini_section'] ) )
    $restoreIncludeArray[] = array( $currentNamespace, 'ini_section', $vars[$currentNamespace]['ini_section'] );
elseif ( !isset( $vars[( isset( $currentNamespace ) ? $currentNamespace : '' )]['ini_section'] ) ) 
    $restoreIncludeArray[] = array( ( isset( $currentNamespace ) ? $currentNamespace : '' ), 'ini_section', 'unset' );

$vars[$currentNamespace]['ini_section'] = 'Leftmenu_media';
if ( !isset( $dKeys ) )
{
    $resH = $tpl->resourceHandler( "design" );
    $dKeys = $resH->keys();
}

$resourceFound = false;
if ( file_exists( 'var/ezwebin_site/cache/template/compiled/ini_menu-55353d700765f5b0d995fd3e66c326ce.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$rootNamespace = $currentNamespace;
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'design/admin/templates/parts/ini_menu.tpl' );
include( '' . 'var/ezwebin_site/cache/template/compiled/ini_menu-55353d700765f5b0d995fd3e66c326ce.php' );
$tpl->unsetLocalVariables();
$tpl->destroyLocalVariablesList();
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}
else
{
    $resourceFound = true;
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$rootNamespace = $currentNamespace;
$textElements = array();
$extraParameters = array();
$tpl->processURI( 'design/admin/templates/parts/ini_menu.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}

foreach ( $restoreIncludeArray as $element )
{
    if ( $element[2] === 'unset' )
    {
        unset( $vars[$element[0]][$element[1]] );
        continue;
    }
    $vars[$element[0]][$element[1]] = $element[2];
}
$restoreIncludeArray = $oldRestoreIncludeArray_40a0359f80bd826c1331ce07fac47bb4;

$text .= '


<div id="widthcontrol-links" class="widthcontrol">
<p>';
$textElements = array();
$tpl->processFunction( 'switch', $textElements,
                       array (
  0 => 
  array (
    0 => 2,
    1 => false,
    2 => '    ',
    3 => 
    array (
      0 => 
      array (
        0 => 32,
        1 => 51,
        2 => 1314,
      ),
      1 => 
      array (
        0 => 33,
        1 => 4,
        2 => 1319,
      ),
      2 => 'design/admin/templates/parts/media/menu.tpl',
    ),
  ),
  1 => 
  array (
    0 => 4,
    1 => 
    array (
      0 => 
      array (
        0 => 2,
        1 => false,
        2 => '    <a href=',
        3 => 
        array (
          0 => 
          array (
            0 => 33,
            1 => 23,
            2 => 1340,
          ),
          1 => 
          array (
            0 => 34,
            1 => 12,
            2 => 1353,
          ),
          2 => 'design/admin/templates/parts/media/menu.tpl',
        ),
      ),
      1 => 
      array (
        0 => 3,
        1 => false,
        2 => 
        array (
          0 => 
          array (
            0 => 1,
            1 => '/user/preferences/set/admin_left_menu_size/small',
            2 => false,
          ),
          1 => 
          array (
            0 => 6,
            1 => 
            array (
              0 => 'ezurl',
            ),
            2 => false,
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            0 => 34,
            1 => 12,
            2 => 1354,
          ),
          1 => 
          array (
            0 => 34,
            1 => 68,
            2 => 1410,
          ),
          2 => 'design/admin/templates/parts/media/menu.tpl',
        ),
      ),
      2 => 
      array (
        0 => 2,
        1 => false,
        2 => ' title="',
        3 => 
        array (
          0 => 
          array (
            0 => 34,
            1 => 68,
            2 => 1411,
          ),
          1 => 
          array (
            0 => 34,
            1 => 76,
            2 => 1419,
          ),
          2 => 'design/admin/templates/parts/media/menu.tpl',
        ),
      ),
      3 => 
      array (
        0 => 3,
        1 => false,
        2 => 
        array (
          0 => 
          array (
            0 => 1,
            1 => 'Change the left menu width to small size.',
            2 => false,
          ),
          1 => 
          array (
            0 => 6,
            1 => 
            array (
              0 => 'i18n',
              1 => 
              array (
                0 => 
                array (
                  0 => 1,
                  1 => 'design/admin/parts/media/menu',
                  2 => false,
                ),
              ),
            ),
            2 => false,
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            0 => 34,
            1 => 76,
            2 => 1420,
          ),
          1 => 
          array (
            0 => 34,
            1 => 159,
            2 => 1503,
          ),
          2 => 'design/admin/templates/parts/media/menu.tpl',
        ),
      ),
      4 => 
      array (
        0 => 2,
        1 => false,
        2 => '">',
        3 => 
        array (
          0 => 
          array (
            0 => 34,
            1 => 159,
            2 => 1504,
          ),
          1 => 
          array (
            0 => 34,
            1 => 161,
            2 => 1506,
          ),
          2 => 'design/admin/templates/parts/media/menu.tpl',
        ),
      ),
      5 => 
      array (
        0 => 3,
        1 => false,
        2 => 
        array (
          0 => 
          array (
            0 => 1,
            1 => 'Small',
            2 => false,
          ),
          1 => 
          array (
            0 => 6,
            1 => 
            array (
              0 => 'i18n',
              1 => 
              array (
                0 => 
                array (
                  0 => 1,
                  1 => 'design/admin/parts/media/menu',
                  2 => false,
                ),
              ),
            ),
            2 => false,
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            0 => 34,
            1 => 161,
            2 => 1507,
          ),
          1 => 
          array (
            0 => 34,
            1 => 208,
            2 => 1554,
          ),
          2 => 'design/admin/templates/parts/media/menu.tpl',
        ),
      ),
      6 => 
      array (
        0 => 2,
        1 => false,
        2 => '</a>
    <span class="current">',
        3 => 
        array (
          0 => 
          array (
            0 => 34,
            1 => 208,
            2 => 1555,
          ),
          1 => 
          array (
            0 => 35,
            1 => 26,
            2 => 1586,
          ),
          2 => 'design/admin/templates/parts/media/menu.tpl',
        ),
      ),
      7 => 
      array (
        0 => 3,
        1 => false,
        2 => 
        array (
          0 => 
          array (
            0 => 1,
            1 => 'Medium',
            2 => false,
          ),
          1 => 
          array (
            0 => 6,
            1 => 
            array (
              0 => 'i18n',
              1 => 
              array (
                0 => 
                array (
                  0 => 1,
                  1 => 'design/admin/parts/media/menu',
                  2 => false,
                ),
              ),
            ),
            2 => false,
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            0 => 35,
            1 => 26,
            2 => 1587,
          ),
          1 => 
          array (
            0 => 35,
            1 => 74,
            2 => 1635,
          ),
          2 => 'design/admin/templates/parts/media/menu.tpl',
        ),
      ),
      8 => 
      array (
        0 => 2,
        1 => false,
        2 => '</span>
    <a href=',
        3 => 
        array (
          0 => 
          array (
            0 => 35,
            1 => 74,
            2 => 1636,
          ),
          1 => 
          array (
            0 => 36,
            1 => 12,
            2 => 1656,
          ),
          2 => 'design/admin/templates/parts/media/menu.tpl',
        ),
      ),
      9 => 
      array (
        0 => 3,
        1 => false,
        2 => 
        array (
          0 => 
          array (
            0 => 1,
            1 => '/user/preferences/set/admin_left_menu_size/large',
            2 => false,
          ),
          1 => 
          array (
            0 => 6,
            1 => 
            array (
              0 => 'ezurl',
            ),
            2 => false,
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            0 => 36,
            1 => 12,
            2 => 1657,
          ),
          1 => 
          array (
            0 => 36,
            1 => 68,
            2 => 1713,
          ),
          2 => 'design/admin/templates/parts/media/menu.tpl',
        ),
      ),
      10 => 
      array (
        0 => 2,
        1 => false,
        2 => ' title="',
        3 => 
        array (
          0 => 
          array (
            0 => 36,
            1 => 68,
            2 => 1714,
          ),
          1 => 
          array (
            0 => 36,
            1 => 76,
            2 => 1722,
          ),
          2 => 'design/admin/templates/parts/media/menu.tpl',
        ),
      ),
      11 => 
      array (
        0 => 3,
        1 => false,
        2 => 
        array (
          0 => 
          array (
            0 => 1,
            1 => 'Change the left menu width to large size.',
            2 => false,
          ),
          1 => 
          array (
            0 => 6,
            1 => 
            array (
              0 => 'i18n',
              1 => 
              array (
                0 => 
                array (
                  0 => 1,
                  1 => 'design/admin/parts/media/menu',
                  2 => false,
                ),
              ),
            ),
            2 => false,
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            0 => 36,
            1 => 76,
            2 => 1723,
          ),
          1 => 
          array (
            0 => 36,
            1 => 159,
            2 => 1806,
          ),
          2 => 'design/admin/templates/parts/media/menu.tpl',
        ),
      ),
      12 => 
      array (
        0 => 2,
        1 => false,
        2 => '">',
        3 => 
        array (
          0 => 
          array (
            0 => 36,
            1 => 159,
            2 => 1807,
          ),
          1 => 
          array (
            0 => 36,
            1 => 161,
            2 => 1809,
          ),
          2 => 'design/admin/templates/parts/media/menu.tpl',
        ),
      ),
      13 => 
      array (
        0 => 3,
        1 => false,
        2 => 
        array (
          0 => 
          array (
            0 => 1,
            1 => 'Large',
            2 => false,
          ),
          1 => 
          array (
            0 => 6,
            1 => 
            array (
              0 => 'i18n',
              1 => 
              array (
                0 => 
                array (
                  0 => 1,
                  1 => 'design/admin/parts/media/menu',
                  2 => false,
                ),
              ),
            ),
            2 => false,
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            0 => 36,
            1 => 161,
            2 => 1810,
          ),
          1 => 
          array (
            0 => 36,
            1 => 208,
            2 => 1857,
          ),
          2 => 'design/admin/templates/parts/media/menu.tpl',
        ),
      ),
      14 => 
      array (
        0 => 2,
        1 => false,
        2 => '</a>
    ',
        3 => 
        array (
          0 => 
          array (
            0 => 36,
            1 => 208,
            2 => 1858,
          ),
          1 => 
          array (
            0 => 37,
            1 => 4,
            2 => 1867,
          ),
          2 => 'design/admin/templates/parts/media/menu.tpl',
        ),
      ),
    ),
    2 => 'case',
    3 => 
    array (
      'match' => 
      array (
        0 => 
        array (
          0 => 1,
          1 => 'medium',
          2 => false,
        ),
      ),
    ),
    4 => 
    array (
      0 => 
      array (
        0 => 33,
        1 => 4,
        2 => 1320,
      ),
      1 => 
      array (
        0 => 33,
        1 => 23,
        2 => 1339,
      ),
      2 => 'design/admin/templates/parts/media/menu.tpl',
    ),
  ),
  2 => 
  array (
    0 => 2,
    1 => false,
    2 => '
    ',
    3 => 
    array (
      0 => 
      array (
        0 => 37,
        1 => 8,
        2 => 1874,
      ),
      1 => 
      array (
        0 => 39,
        1 => 4,
        2 => 1880,
      ),
      2 => 'design/admin/templates/parts/media/menu.tpl',
    ),
  ),
  3 => 
  array (
    0 => 4,
    1 => 
    array (
      0 => 
      array (
        0 => 2,
        1 => false,
        2 => '    <a href=',
        3 => 
        array (
          0 => 
          array (
            0 => 39,
            1 => 22,
            2 => 1900,
          ),
          1 => 
          array (
            0 => 40,
            1 => 12,
            2 => 1913,
          ),
          2 => 'design/admin/templates/parts/media/menu.tpl',
        ),
      ),
      1 => 
      array (
        0 => 3,
        1 => false,
        2 => 
        array (
          0 => 
          array (
            0 => 1,
            1 => '/user/preferences/set/admin_left_menu_size/small',
            2 => false,
          ),
          1 => 
          array (
            0 => 6,
            1 => 
            array (
              0 => 'ezurl',
            ),
            2 => false,
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            0 => 40,
            1 => 12,
            2 => 1914,
          ),
          1 => 
          array (
            0 => 40,
            1 => 68,
            2 => 1970,
          ),
          2 => 'design/admin/templates/parts/media/menu.tpl',
        ),
      ),
      2 => 
      array (
        0 => 2,
        1 => false,
        2 => ' title="',
        3 => 
        array (
          0 => 
          array (
            0 => 40,
            1 => 68,
            2 => 1971,
          ),
          1 => 
          array (
            0 => 40,
            1 => 76,
            2 => 1979,
          ),
          2 => 'design/admin/templates/parts/media/menu.tpl',
        ),
      ),
      3 => 
      array (
        0 => 3,
        1 => false,
        2 => 
        array (
          0 => 
          array (
            0 => 1,
            1 => 'Change the left menu width to small size.',
            2 => false,
          ),
          1 => 
          array (
            0 => 6,
            1 => 
            array (
              0 => 'i18n',
              1 => 
              array (
                0 => 
                array (
                  0 => 1,
                  1 => 'design/admin/parts/media/menu',
                  2 => false,
                ),
              ),
            ),
            2 => false,
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            0 => 40,
            1 => 76,
            2 => 1980,
          ),
          1 => 
          array (
            0 => 40,
            1 => 159,
            2 => 2063,
          ),
          2 => 'design/admin/templates/parts/media/menu.tpl',
        ),
      ),
      4 => 
      array (
        0 => 2,
        1 => false,
        2 => '">',
        3 => 
        array (
          0 => 
          array (
            0 => 40,
            1 => 159,
            2 => 2064,
          ),
          1 => 
          array (
            0 => 40,
            1 => 161,
            2 => 2066,
          ),
          2 => 'design/admin/templates/parts/media/menu.tpl',
        ),
      ),
      5 => 
      array (
        0 => 3,
        1 => false,
        2 => 
        array (
          0 => 
          array (
            0 => 1,
            1 => 'Small',
            2 => false,
          ),
          1 => 
          array (
            0 => 6,
            1 => 
            array (
              0 => 'i18n',
              1 => 
              array (
                0 => 
                array (
                  0 => 1,
                  1 => 'design/admin/parts/media/menu',
                  2 => false,
                ),
              ),
            ),
            2 => false,
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            0 => 40,
            1 => 161,
            2 => 2067,
          ),
          1 => 
          array (
            0 => 40,
            1 => 208,
            2 => 2114,
          ),
          2 => 'design/admin/templates/parts/media/menu.tpl',
        ),
      ),
      6 => 
      array (
        0 => 2,
        1 => false,
        2 => '</a>
    <a href=',
        3 => 
        array (
          0 => 
          array (
            0 => 40,
            1 => 208,
            2 => 2115,
          ),
          1 => 
          array (
            0 => 41,
            1 => 12,
            2 => 2132,
          ),
          2 => 'design/admin/templates/parts/media/menu.tpl',
        ),
      ),
      7 => 
      array (
        0 => 3,
        1 => false,
        2 => 
        array (
          0 => 
          array (
            0 => 1,
            1 => '/user/preferences/set/admin_left_menu_size/medium',
            2 => false,
          ),
          1 => 
          array (
            0 => 6,
            1 => 
            array (
              0 => 'ezurl',
            ),
            2 => false,
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            0 => 41,
            1 => 12,
            2 => 2133,
          ),
          1 => 
          array (
            0 => 41,
            1 => 69,
            2 => 2190,
          ),
          2 => 'design/admin/templates/parts/media/menu.tpl',
        ),
      ),
      8 => 
      array (
        0 => 2,
        1 => false,
        2 => ' title="',
        3 => 
        array (
          0 => 
          array (
            0 => 41,
            1 => 69,
            2 => 2191,
          ),
          1 => 
          array (
            0 => 41,
            1 => 77,
            2 => 2199,
          ),
          2 => 'design/admin/templates/parts/media/menu.tpl',
        ),
      ),
      9 => 
      array (
        0 => 3,
        1 => false,
        2 => 
        array (
          0 => 
          array (
            0 => 1,
            1 => 'Change the left menu width to medium size.',
            2 => false,
          ),
          1 => 
          array (
            0 => 6,
            1 => 
            array (
              0 => 'i18n',
              1 => 
              array (
                0 => 
                array (
                  0 => 1,
                  1 => 'design/admin/parts/media/menu',
                  2 => false,
                ),
              ),
            ),
            2 => false,
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            0 => 41,
            1 => 77,
            2 => 2200,
          ),
          1 => 
          array (
            0 => 41,
            1 => 161,
            2 => 2284,
          ),
          2 => 'design/admin/templates/parts/media/menu.tpl',
        ),
      ),
      10 => 
      array (
        0 => 2,
        1 => false,
        2 => '">',
        3 => 
        array (
          0 => 
          array (
            0 => 41,
            1 => 161,
            2 => 2285,
          ),
          1 => 
          array (
            0 => 41,
            1 => 163,
            2 => 2287,
          ),
          2 => 'design/admin/templates/parts/media/menu.tpl',
        ),
      ),
      11 => 
      array (
        0 => 3,
        1 => false,
        2 => 
        array (
          0 => 
          array (
            0 => 1,
            1 => 'Medium',
            2 => false,
          ),
          1 => 
          array (
            0 => 6,
            1 => 
            array (
              0 => 'i18n',
              1 => 
              array (
                0 => 
                array (
                  0 => 1,
                  1 => 'design/admin/parts/media/menu',
                  2 => false,
                ),
              ),
            ),
            2 => false,
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            0 => 41,
            1 => 163,
            2 => 2288,
          ),
          1 => 
          array (
            0 => 41,
            1 => 211,
            2 => 2336,
          ),
          2 => 'design/admin/templates/parts/media/menu.tpl',
        ),
      ),
      12 => 
      array (
        0 => 2,
        1 => false,
        2 => '</a>
    <span class="current">',
        3 => 
        array (
          0 => 
          array (
            0 => 41,
            1 => 211,
            2 => 2337,
          ),
          1 => 
          array (
            0 => 42,
            1 => 26,
            2 => 2368,
          ),
          2 => 'design/admin/templates/parts/media/menu.tpl',
        ),
      ),
      13 => 
      array (
        0 => 3,
        1 => false,
        2 => 
        array (
          0 => 
          array (
            0 => 1,
            1 => 'Large',
            2 => false,
          ),
          1 => 
          array (
            0 => 6,
            1 => 
            array (
              0 => 'i18n',
              1 => 
              array (
                0 => 
                array (
                  0 => 1,
                  1 => 'design/admin/parts/media/menu',
                  2 => false,
                ),
              ),
            ),
            2 => false,
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            0 => 42,
            1 => 26,
            2 => 2369,
          ),
          1 => 
          array (
            0 => 42,
            1 => 73,
            2 => 2416,
          ),
          2 => 'design/admin/templates/parts/media/menu.tpl',
        ),
      ),
      14 => 
      array (
        0 => 2,
        1 => false,
        2 => '</span>
    ',
        3 => 
        array (
          0 => 
          array (
            0 => 42,
            1 => 73,
            2 => 2417,
          ),
          1 => 
          array (
            0 => 43,
            1 => 4,
            2 => 2429,
          ),
          2 => 'design/admin/templates/parts/media/menu.tpl',
        ),
      ),
    ),
    2 => 'case',
    3 => 
    array (
      'match' => 
      array (
        0 => 
        array (
          0 => 1,
          1 => 'large',
          2 => false,
        ),
      ),
    ),
    4 => 
    array (
      0 => 
      array (
        0 => 39,
        1 => 4,
        2 => 1881,
      ),
      1 => 
      array (
        0 => 39,
        1 => 22,
        2 => 1899,
      ),
      2 => 'design/admin/templates/parts/media/menu.tpl',
    ),
  ),
  4 => 
  array (
    0 => 2,
    1 => false,
    2 => '
    ',
    3 => 
    array (
      0 => 
      array (
        0 => 43,
        1 => 8,
        2 => 2436,
      ),
      1 => 
      array (
        0 => 45,
        1 => 4,
        2 => 2442,
      ),
      2 => 'design/admin/templates/parts/media/menu.tpl',
    ),
  ),
  5 => 
  array (
    0 => 4,
    1 => 
    array (
      0 => 
      array (
        0 => 2,
        1 => false,
        2 => '    <span class="current">',
        3 => 
        array (
          0 => 
          array (
            0 => 45,
            1 => 32,
            2 => 2472,
          ),
          1 => 
          array (
            0 => 46,
            1 => 26,
            2 => 2499,
          ),
          2 => 'design/admin/templates/parts/media/menu.tpl',
        ),
      ),
      1 => 
      array (
        0 => 3,
        1 => false,
        2 => 
        array (
          0 => 
          array (
            0 => 1,
            1 => 'Small',
            2 => false,
          ),
          1 => 
          array (
            0 => 6,
            1 => 
            array (
              0 => 'i18n',
              1 => 
              array (
                0 => 
                array (
                  0 => 1,
                  1 => 'design/admin/parts/media/menu',
                  2 => false,
                ),
              ),
            ),
            2 => false,
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            0 => 46,
            1 => 26,
            2 => 2500,
          ),
          1 => 
          array (
            0 => 46,
            1 => 73,
            2 => 2547,
          ),
          2 => 'design/admin/templates/parts/media/menu.tpl',
        ),
      ),
      2 => 
      array (
        0 => 2,
        1 => false,
        2 => '</span>
    <a href=',
        3 => 
        array (
          0 => 
          array (
            0 => 46,
            1 => 73,
            2 => 2548,
          ),
          1 => 
          array (
            0 => 47,
            1 => 12,
            2 => 2568,
          ),
          2 => 'design/admin/templates/parts/media/menu.tpl',
        ),
      ),
      3 => 
      array (
        0 => 3,
        1 => false,
        2 => 
        array (
          0 => 
          array (
            0 => 1,
            1 => '/user/preferences/set/admin_left_menu_size/medium',
            2 => false,
          ),
          1 => 
          array (
            0 => 6,
            1 => 
            array (
              0 => 'ezurl',
            ),
            2 => false,
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            0 => 47,
            1 => 12,
            2 => 2569,
          ),
          1 => 
          array (
            0 => 47,
            1 => 69,
            2 => 2626,
          ),
          2 => 'design/admin/templates/parts/media/menu.tpl',
        ),
      ),
      4 => 
      array (
        0 => 2,
        1 => false,
        2 => ' title="',
        3 => 
        array (
          0 => 
          array (
            0 => 47,
            1 => 69,
            2 => 2627,
          ),
          1 => 
          array (
            0 => 47,
            1 => 77,
            2 => 2635,
          ),
          2 => 'design/admin/templates/parts/media/menu.tpl',
        ),
      ),
      5 => 
      array (
        0 => 3,
        1 => false,
        2 => 
        array (
          0 => 
          array (
            0 => 1,
            1 => 'Change the left menu width to medium size.',
            2 => false,
          ),
          1 => 
          array (
            0 => 6,
            1 => 
            array (
              0 => 'i18n',
              1 => 
              array (
                0 => 
                array (
                  0 => 1,
                  1 => 'design/admin/parts/media/menu',
                  2 => false,
                ),
              ),
            ),
            2 => false,
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            0 => 47,
            1 => 77,
            2 => 2636,
          ),
          1 => 
          array (
            0 => 47,
            1 => 161,
            2 => 2720,
          ),
          2 => 'design/admin/templates/parts/media/menu.tpl',
        ),
      ),
      6 => 
      array (
        0 => 2,
        1 => false,
        2 => '">',
        3 => 
        array (
          0 => 
          array (
            0 => 47,
            1 => 161,
            2 => 2721,
          ),
          1 => 
          array (
            0 => 47,
            1 => 163,
            2 => 2723,
          ),
          2 => 'design/admin/templates/parts/media/menu.tpl',
        ),
      ),
      7 => 
      array (
        0 => 3,
        1 => false,
        2 => 
        array (
          0 => 
          array (
            0 => 1,
            1 => 'Medium',
            2 => false,
          ),
          1 => 
          array (
            0 => 6,
            1 => 
            array (
              0 => 'i18n',
              1 => 
              array (
                0 => 
                array (
                  0 => 1,
                  1 => 'design/admin/parts/media/menu',
                  2 => false,
                ),
              ),
            ),
            2 => false,
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            0 => 47,
            1 => 163,
            2 => 2724,
          ),
          1 => 
          array (
            0 => 47,
            1 => 211,
            2 => 2772,
          ),
          2 => 'design/admin/templates/parts/media/menu.tpl',
        ),
      ),
      8 => 
      array (
        0 => 2,
        1 => false,
        2 => '</a>
    <a href=',
        3 => 
        array (
          0 => 
          array (
            0 => 47,
            1 => 211,
            2 => 2773,
          ),
          1 => 
          array (
            0 => 48,
            1 => 12,
            2 => 2790,
          ),
          2 => 'design/admin/templates/parts/media/menu.tpl',
        ),
      ),
      9 => 
      array (
        0 => 3,
        1 => false,
        2 => 
        array (
          0 => 
          array (
            0 => 1,
            1 => '/user/preferences/set/admin_left_menu_size/large',
            2 => false,
          ),
          1 => 
          array (
            0 => 6,
            1 => 
            array (
              0 => 'ezurl',
            ),
            2 => false,
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            0 => 48,
            1 => 12,
            2 => 2791,
          ),
          1 => 
          array (
            0 => 48,
            1 => 68,
            2 => 2847,
          ),
          2 => 'design/admin/templates/parts/media/menu.tpl',
        ),
      ),
      10 => 
      array (
        0 => 2,
        1 => false,
        2 => ' title="',
        3 => 
        array (
          0 => 
          array (
            0 => 48,
            1 => 68,
            2 => 2848,
          ),
          1 => 
          array (
            0 => 48,
            1 => 76,
            2 => 2856,
          ),
          2 => 'design/admin/templates/parts/media/menu.tpl',
        ),
      ),
      11 => 
      array (
        0 => 3,
        1 => false,
        2 => 
        array (
          0 => 
          array (
            0 => 1,
            1 => 'Change the left menu width to large size.',
            2 => false,
          ),
          1 => 
          array (
            0 => 6,
            1 => 
            array (
              0 => 'i18n',
              1 => 
              array (
                0 => 
                array (
                  0 => 1,
                  1 => 'design/admin/parts/media/menu',
                  2 => false,
                ),
              ),
            ),
            2 => false,
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            0 => 48,
            1 => 76,
            2 => 2857,
          ),
          1 => 
          array (
            0 => 48,
            1 => 159,
            2 => 2940,
          ),
          2 => 'design/admin/templates/parts/media/menu.tpl',
        ),
      ),
      12 => 
      array (
        0 => 2,
        1 => false,
        2 => '">',
        3 => 
        array (
          0 => 
          array (
            0 => 48,
            1 => 159,
            2 => 2941,
          ),
          1 => 
          array (
            0 => 48,
            1 => 161,
            2 => 2943,
          ),
          2 => 'design/admin/templates/parts/media/menu.tpl',
        ),
      ),
      13 => 
      array (
        0 => 3,
        1 => false,
        2 => 
        array (
          0 => 
          array (
            0 => 1,
            1 => 'Large',
            2 => false,
          ),
          1 => 
          array (
            0 => 6,
            1 => 
            array (
              0 => 'i18n',
              1 => 
              array (
                0 => 
                array (
                  0 => 1,
                  1 => 'design/admin/parts/media/menu',
                  2 => false,
                ),
              ),
            ),
            2 => false,
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            0 => 48,
            1 => 161,
            2 => 2944,
          ),
          1 => 
          array (
            0 => 48,
            1 => 208,
            2 => 2991,
          ),
          2 => 'design/admin/templates/parts/media/menu.tpl',
        ),
      ),
      14 => 
      array (
        0 => 2,
        1 => false,
        2 => '</a>
    ',
        3 => 
        array (
          0 => 
          array (
            0 => 48,
            1 => 208,
            2 => 2992,
          ),
          1 => 
          array (
            0 => 49,
            1 => 4,
            2 => 3001,
          ),
          2 => 'design/admin/templates/parts/media/menu.tpl',
        ),
      ),
    ),
    2 => 'case',
    3 => 
    array (
      'in' => 
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
                1 => 'small',
                2 => false,
              ),
            ),
            2 => 
            array (
              0 => 
              array (
                0 => 1,
                1 => '',
                2 => false,
              ),
            ),
          ),
          2 => false,
        ),
      ),
    ),
    4 => 
    array (
      0 => 
      array (
        0 => 45,
        1 => 4,
        2 => 2443,
      ),
      1 => 
      array (
        0 => 45,
        1 => 32,
        2 => 2471,
      ),
      2 => 'design/admin/templates/parts/media/menu.tpl',
    ),
  ),
  6 => 
  array (
    0 => 2,
    1 => false,
    2 => '
    ',
    3 => 
    array (
      0 => 
      array (
        0 => 49,
        1 => 8,
        2 => 3008,
      ),
      1 => 
      array (
        0 => 51,
        1 => 4,
        2 => 3014,
      ),
      2 => 'design/admin/templates/parts/media/menu.tpl',
    ),
  ),
  7 => 
  array (
    0 => 4,
    1 => 
    array (
      0 => 
      array (
        0 => 2,
        1 => false,
        2 => '    <a href=',
        3 => 
        array (
          0 => 
          array (
            0 => 51,
            1 => 8,
            2 => 3020,
          ),
          1 => 
          array (
            0 => 52,
            1 => 12,
            2 => 3033,
          ),
          2 => 'design/admin/templates/parts/media/menu.tpl',
        ),
      ),
      1 => 
      array (
        0 => 3,
        1 => false,
        2 => 
        array (
          0 => 
          array (
            0 => 1,
            1 => '/user/preferences/set/admin_left_menu_size/small',
            2 => false,
          ),
          1 => 
          array (
            0 => 6,
            1 => 
            array (
              0 => 'ezurl',
            ),
            2 => false,
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            0 => 52,
            1 => 12,
            2 => 3034,
          ),
          1 => 
          array (
            0 => 52,
            1 => 68,
            2 => 3090,
          ),
          2 => 'design/admin/templates/parts/media/menu.tpl',
        ),
      ),
      2 => 
      array (
        0 => 2,
        1 => false,
        2 => ' title="',
        3 => 
        array (
          0 => 
          array (
            0 => 52,
            1 => 68,
            2 => 3091,
          ),
          1 => 
          array (
            0 => 52,
            1 => 76,
            2 => 3099,
          ),
          2 => 'design/admin/templates/parts/media/menu.tpl',
        ),
      ),
      3 => 
      array (
        0 => 3,
        1 => false,
        2 => 
        array (
          0 => 
          array (
            0 => 1,
            1 => 'Change the left menu width to small size.',
            2 => false,
          ),
          1 => 
          array (
            0 => 6,
            1 => 
            array (
              0 => 'i18n',
              1 => 
              array (
                0 => 
                array (
                  0 => 1,
                  1 => 'design/admin/parts/media/menu',
                  2 => false,
                ),
              ),
            ),
            2 => false,
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            0 => 52,
            1 => 76,
            2 => 3100,
          ),
          1 => 
          array (
            0 => 52,
            1 => 159,
            2 => 3183,
          ),
          2 => 'design/admin/templates/parts/media/menu.tpl',
        ),
      ),
      4 => 
      array (
        0 => 2,
        1 => false,
        2 => '">',
        3 => 
        array (
          0 => 
          array (
            0 => 52,
            1 => 159,
            2 => 3184,
          ),
          1 => 
          array (
            0 => 52,
            1 => 161,
            2 => 3186,
          ),
          2 => 'design/admin/templates/parts/media/menu.tpl',
        ),
      ),
      5 => 
      array (
        0 => 3,
        1 => false,
        2 => 
        array (
          0 => 
          array (
            0 => 1,
            1 => 'Small',
            2 => false,
          ),
          1 => 
          array (
            0 => 6,
            1 => 
            array (
              0 => 'i18n',
              1 => 
              array (
                0 => 
                array (
                  0 => 1,
                  1 => 'design/admin/parts/media/menu',
                  2 => false,
                ),
              ),
            ),
            2 => false,
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            0 => 52,
            1 => 161,
            2 => 3187,
          ),
          1 => 
          array (
            0 => 52,
            1 => 208,
            2 => 3234,
          ),
          2 => 'design/admin/templates/parts/media/menu.tpl',
        ),
      ),
      6 => 
      array (
        0 => 2,
        1 => false,
        2 => '</a>
    <a href=',
        3 => 
        array (
          0 => 
          array (
            0 => 52,
            1 => 208,
            2 => 3235,
          ),
          1 => 
          array (
            0 => 53,
            1 => 12,
            2 => 3252,
          ),
          2 => 'design/admin/templates/parts/media/menu.tpl',
        ),
      ),
      7 => 
      array (
        0 => 3,
        1 => false,
        2 => 
        array (
          0 => 
          array (
            0 => 1,
            1 => '/user/preferences/set/admin_left_menu_size/medium',
            2 => false,
          ),
          1 => 
          array (
            0 => 6,
            1 => 
            array (
              0 => 'ezurl',
            ),
            2 => false,
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            0 => 53,
            1 => 12,
            2 => 3253,
          ),
          1 => 
          array (
            0 => 53,
            1 => 69,
            2 => 3310,
          ),
          2 => 'design/admin/templates/parts/media/menu.tpl',
        ),
      ),
      8 => 
      array (
        0 => 2,
        1 => false,
        2 => ' title="',
        3 => 
        array (
          0 => 
          array (
            0 => 53,
            1 => 69,
            2 => 3311,
          ),
          1 => 
          array (
            0 => 53,
            1 => 77,
            2 => 3319,
          ),
          2 => 'design/admin/templates/parts/media/menu.tpl',
        ),
      ),
      9 => 
      array (
        0 => 3,
        1 => false,
        2 => 
        array (
          0 => 
          array (
            0 => 1,
            1 => 'Change the left menu width to medium size.',
            2 => false,
          ),
          1 => 
          array (
            0 => 6,
            1 => 
            array (
              0 => 'i18n',
              1 => 
              array (
                0 => 
                array (
                  0 => 1,
                  1 => 'design/admin/parts/media/menu',
                  2 => false,
                ),
              ),
            ),
            2 => false,
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            0 => 53,
            1 => 77,
            2 => 3320,
          ),
          1 => 
          array (
            0 => 53,
            1 => 161,
            2 => 3404,
          ),
          2 => 'design/admin/templates/parts/media/menu.tpl',
        ),
      ),
      10 => 
      array (
        0 => 2,
        1 => false,
        2 => '">',
        3 => 
        array (
          0 => 
          array (
            0 => 53,
            1 => 161,
            2 => 3405,
          ),
          1 => 
          array (
            0 => 53,
            1 => 163,
            2 => 3407,
          ),
          2 => 'design/admin/templates/parts/media/menu.tpl',
        ),
      ),
      11 => 
      array (
        0 => 3,
        1 => false,
        2 => 
        array (
          0 => 
          array (
            0 => 1,
            1 => 'Medium',
            2 => false,
          ),
          1 => 
          array (
            0 => 6,
            1 => 
            array (
              0 => 'i18n',
              1 => 
              array (
                0 => 
                array (
                  0 => 1,
                  1 => 'design/admin/parts/media/menu',
                  2 => false,
                ),
              ),
            ),
            2 => false,
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            0 => 53,
            1 => 163,
            2 => 3408,
          ),
          1 => 
          array (
            0 => 53,
            1 => 211,
            2 => 3456,
          ),
          2 => 'design/admin/templates/parts/media/menu.tpl',
        ),
      ),
      12 => 
      array (
        0 => 2,
        1 => false,
        2 => '</a>
    <a href=',
        3 => 
        array (
          0 => 
          array (
            0 => 53,
            1 => 211,
            2 => 3457,
          ),
          1 => 
          array (
            0 => 54,
            1 => 12,
            2 => 3474,
          ),
          2 => 'design/admin/templates/parts/media/menu.tpl',
        ),
      ),
      13 => 
      array (
        0 => 3,
        1 => false,
        2 => 
        array (
          0 => 
          array (
            0 => 1,
            1 => '/user/preferences/set/admin_left_menu_size/large',
            2 => false,
          ),
          1 => 
          array (
            0 => 6,
            1 => 
            array (
              0 => 'ezurl',
            ),
            2 => false,
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            0 => 54,
            1 => 12,
            2 => 3475,
          ),
          1 => 
          array (
            0 => 54,
            1 => 68,
            2 => 3531,
          ),
          2 => 'design/admin/templates/parts/media/menu.tpl',
        ),
      ),
      14 => 
      array (
        0 => 2,
        1 => false,
        2 => ' title="',
        3 => 
        array (
          0 => 
          array (
            0 => 54,
            1 => 68,
            2 => 3532,
          ),
          1 => 
          array (
            0 => 54,
            1 => 76,
            2 => 3540,
          ),
          2 => 'design/admin/templates/parts/media/menu.tpl',
        ),
      ),
      15 => 
      array (
        0 => 3,
        1 => false,
        2 => 
        array (
          0 => 
          array (
            0 => 1,
            1 => 'Change the left menu width to large size.',
            2 => false,
          ),
          1 => 
          array (
            0 => 6,
            1 => 
            array (
              0 => 'i18n',
              1 => 
              array (
                0 => 
                array (
                  0 => 1,
                  1 => 'design/admin/parts/media/menu',
                  2 => false,
                ),
              ),
            ),
            2 => false,
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            0 => 54,
            1 => 76,
            2 => 3541,
          ),
          1 => 
          array (
            0 => 54,
            1 => 159,
            2 => 3624,
          ),
          2 => 'design/admin/templates/parts/media/menu.tpl',
        ),
      ),
      16 => 
      array (
        0 => 2,
        1 => false,
        2 => '">',
        3 => 
        array (
          0 => 
          array (
            0 => 54,
            1 => 159,
            2 => 3625,
          ),
          1 => 
          array (
            0 => 54,
            1 => 161,
            2 => 3627,
          ),
          2 => 'design/admin/templates/parts/media/menu.tpl',
        ),
      ),
      17 => 
      array (
        0 => 3,
        1 => false,
        2 => 
        array (
          0 => 
          array (
            0 => 1,
            1 => 'Large',
            2 => false,
          ),
          1 => 
          array (
            0 => 6,
            1 => 
            array (
              0 => 'i18n',
              1 => 
              array (
                0 => 
                array (
                  0 => 1,
                  1 => 'design/admin/parts/media/menu',
                  2 => false,
                ),
              ),
            ),
            2 => false,
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            0 => 54,
            1 => 161,
            2 => 3628,
          ),
          1 => 
          array (
            0 => 54,
            1 => 208,
            2 => 3675,
          ),
          2 => 'design/admin/templates/parts/media/menu.tpl',
        ),
      ),
      18 => 
      array (
        0 => 2,
        1 => false,
        2 => '</a>
    ',
        3 => 
        array (
          0 => 
          array (
            0 => 54,
            1 => 208,
            2 => 3676,
          ),
          1 => 
          array (
            0 => 55,
            1 => 4,
            2 => 3685,
          ),
          2 => 'design/admin/templates/parts/media/menu.tpl',
        ),
      ),
    ),
    2 => 'case',
    3 => 
    array (
    ),
    4 => 
    array (
      0 => 
      array (
        0 => 51,
        1 => 4,
        2 => 3015,
      ),
      1 => 
      array (
        0 => 51,
        1 => 8,
        2 => 3019,
      ),
      2 => 'design/admin/templates/parts/media/menu.tpl',
    ),
  ),
  8 => 
  array (
    0 => 2,
    1 => false,
    2 => false,
    3 => 
    array (
      0 => 
      array (
        0 => 55,
        1 => 8,
        2 => 3692,
      ),
      1 => 
      array (
        0 => 56,
        1 => 0,
        2 => 3693,
      ),
      2 => 'design/admin/templates/parts/media/menu.tpl',
    ),
  ),
),
                       array (
  'match' => 
  array (
    0 => 
    array (
      0 => 6,
      1 => 
      array (
        0 => 'ezpreference',
        1 => 
        array (
          0 => 
          array (
            0 => 1,
            1 => 'admin_left_menu_size',
            2 => false,
          ),
        ),
      ),
      2 => false,
    ),
  ),
),
                       array (
  0 => 
  array (
    0 => 32,
    1 => 0,
    2 => 1262,
  ),
  1 => 
  array (
    0 => 32,
    1 => 51,
    2 => 1313,
  ),
  2 => 'design/admin/templates/parts/media/menu.tpl',
),
                       $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );

$text .= '</p>
</div>


<div id="widthcontrol-handler" class="hide">
<div class="widthcontrol-grippy"></div>
</div>
';

$setArray = $oldSetArray_a09abeaa11e537d5ba8a377b836f8dff;
$tpl->Level--;
?>
