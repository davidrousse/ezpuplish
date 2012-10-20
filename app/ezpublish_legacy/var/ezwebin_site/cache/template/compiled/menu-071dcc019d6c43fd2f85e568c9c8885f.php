<?php
// URI:       design:parts/content/menu.tpl
// Filename:  design/admin/templates/parts/content/menu.tpl
// Timestamp: 1349721948 (Mon Oct 8 18:45:48 UTC 2012)
$oldSetArray_26eacbbdc45a6d6c16cbb31a41f885de = isset( $setArray ) ? $setArray : array();
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
<h4>Contenus</h4>
</div></div>
<div class="box-bc"><div class="box-ml"><div class="box-content">


<div id="contentstructure">
    ';
$oldRestoreIncludeArray_cd5172f7dbe0783ea443ae5296cf2997 = isset( $restoreIncludeArray ) ? $restoreIncludeArray : array();
$restoreIncludeArray = array();

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
$restoreIncludeArray = $oldRestoreIncludeArray_cd5172f7dbe0783ea443ae5296cf2997;

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

$text .= ' title="Voir et gérer le contenu de la corbeille."><img src="/ezpublish/app/ezpublish_legacy/design/admin/images/trash-icon-16x16.gif" width="16" height="16" alt="Corbeille" />&nbsp;<span>Corbeille</span></a>
</div>';
}
unset( $if_cond );
// if ends

$text .= '



</div></div></div>

</div>

';
$oldRestoreIncludeArray_4989e3ab7640b1ea8d6139de3073a213 = isset( $restoreIncludeArray ) ? $restoreIncludeArray : array();
$restoreIncludeArray = array();

if ( isset( $currentNamespace ) and isset( $vars[$currentNamespace]['ini_section'] ) )
    $restoreIncludeArray[] = array( $currentNamespace, 'ini_section', $vars[$currentNamespace]['ini_section'] );
elseif ( !isset( $vars[( isset( $currentNamespace ) ? $currentNamespace : '' )]['ini_section'] ) ) 
    $restoreIncludeArray[] = array( ( isset( $currentNamespace ) ? $currentNamespace : '' ), 'ini_section', 'unset' );

$vars[$currentNamespace]['ini_section'] = 'Leftmenu_content';
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
$restoreIncludeArray = $oldRestoreIncludeArray_4989e3ab7640b1ea8d6139de3073a213;

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
        0 => 33,
        1 => 51,
        2 => 1298,
      ),
      1 => 
      array (
        0 => 34,
        1 => 4,
        2 => 1303,
      ),
      2 => 'design/admin/templates/parts/content/menu.tpl',
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
            0 => 34,
            1 => 23,
            2 => 1324,
          ),
          1 => 
          array (
            0 => 35,
            1 => 12,
            2 => 1337,
          ),
          2 => 'design/admin/templates/parts/content/menu.tpl',
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
            0 => 35,
            1 => 12,
            2 => 1338,
          ),
          1 => 
          array (
            0 => 35,
            1 => 68,
            2 => 1394,
          ),
          2 => 'design/admin/templates/parts/content/menu.tpl',
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
            0 => 35,
            1 => 68,
            2 => 1395,
          ),
          1 => 
          array (
            0 => 35,
            1 => 76,
            2 => 1403,
          ),
          2 => 'design/admin/templates/parts/content/menu.tpl',
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
                  1 => 'design/admin/parts/content/menu',
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
            1 => 76,
            2 => 1404,
          ),
          1 => 
          array (
            0 => 35,
            1 => 161,
            2 => 1489,
          ),
          2 => 'design/admin/templates/parts/content/menu.tpl',
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
            0 => 35,
            1 => 161,
            2 => 1490,
          ),
          1 => 
          array (
            0 => 35,
            1 => 163,
            2 => 1492,
          ),
          2 => 'design/admin/templates/parts/content/menu.tpl',
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
                  1 => 'design/admin/parts/content/menu',
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
            1 => 163,
            2 => 1493,
          ),
          1 => 
          array (
            0 => 35,
            1 => 212,
            2 => 1542,
          ),
          2 => 'design/admin/templates/parts/content/menu.tpl',
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
            0 => 35,
            1 => 212,
            2 => 1543,
          ),
          1 => 
          array (
            0 => 36,
            1 => 26,
            2 => 1574,
          ),
          2 => 'design/admin/templates/parts/content/menu.tpl',
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
                  1 => 'design/admin/parts/content/menu',
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
            1 => 26,
            2 => 1575,
          ),
          1 => 
          array (
            0 => 36,
            1 => 76,
            2 => 1625,
          ),
          2 => 'design/admin/templates/parts/content/menu.tpl',
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
            0 => 36,
            1 => 76,
            2 => 1626,
          ),
          1 => 
          array (
            0 => 37,
            1 => 12,
            2 => 1646,
          ),
          2 => 'design/admin/templates/parts/content/menu.tpl',
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
            0 => 37,
            1 => 12,
            2 => 1647,
          ),
          1 => 
          array (
            0 => 37,
            1 => 68,
            2 => 1703,
          ),
          2 => 'design/admin/templates/parts/content/menu.tpl',
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
            0 => 37,
            1 => 68,
            2 => 1704,
          ),
          1 => 
          array (
            0 => 37,
            1 => 76,
            2 => 1712,
          ),
          2 => 'design/admin/templates/parts/content/menu.tpl',
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
                  1 => 'design/admin/parts/content/menu',
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
            0 => 37,
            1 => 76,
            2 => 1713,
          ),
          1 => 
          array (
            0 => 37,
            1 => 161,
            2 => 1798,
          ),
          2 => 'design/admin/templates/parts/content/menu.tpl',
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
            0 => 37,
            1 => 161,
            2 => 1799,
          ),
          1 => 
          array (
            0 => 37,
            1 => 163,
            2 => 1801,
          ),
          2 => 'design/admin/templates/parts/content/menu.tpl',
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
                  1 => 'design/admin/parts/content/menu',
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
            0 => 37,
            1 => 163,
            2 => 1802,
          ),
          1 => 
          array (
            0 => 37,
            1 => 212,
            2 => 1851,
          ),
          2 => 'design/admin/templates/parts/content/menu.tpl',
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
            0 => 37,
            1 => 212,
            2 => 1852,
          ),
          1 => 
          array (
            0 => 38,
            1 => 4,
            2 => 1861,
          ),
          2 => 'design/admin/templates/parts/content/menu.tpl',
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
        0 => 34,
        1 => 4,
        2 => 1304,
      ),
      1 => 
      array (
        0 => 34,
        1 => 23,
        2 => 1323,
      ),
      2 => 'design/admin/templates/parts/content/menu.tpl',
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
        0 => 38,
        1 => 8,
        2 => 1868,
      ),
      1 => 
      array (
        0 => 40,
        1 => 4,
        2 => 1874,
      ),
      2 => 'design/admin/templates/parts/content/menu.tpl',
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
            0 => 40,
            1 => 22,
            2 => 1894,
          ),
          1 => 
          array (
            0 => 41,
            1 => 12,
            2 => 1907,
          ),
          2 => 'design/admin/templates/parts/content/menu.tpl',
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
            0 => 41,
            1 => 12,
            2 => 1908,
          ),
          1 => 
          array (
            0 => 41,
            1 => 68,
            2 => 1964,
          ),
          2 => 'design/admin/templates/parts/content/menu.tpl',
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
            0 => 41,
            1 => 68,
            2 => 1965,
          ),
          1 => 
          array (
            0 => 41,
            1 => 76,
            2 => 1973,
          ),
          2 => 'design/admin/templates/parts/content/menu.tpl',
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
                  1 => 'design/admin/parts/content/menu',
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
            1 => 76,
            2 => 1974,
          ),
          1 => 
          array (
            0 => 41,
            1 => 161,
            2 => 2059,
          ),
          2 => 'design/admin/templates/parts/content/menu.tpl',
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
            0 => 41,
            1 => 161,
            2 => 2060,
          ),
          1 => 
          array (
            0 => 41,
            1 => 163,
            2 => 2062,
          ),
          2 => 'design/admin/templates/parts/content/menu.tpl',
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
                  1 => 'design/admin/parts/content/menu',
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
            2 => 2063,
          ),
          1 => 
          array (
            0 => 41,
            1 => 212,
            2 => 2112,
          ),
          2 => 'design/admin/templates/parts/content/menu.tpl',
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
            0 => 41,
            1 => 212,
            2 => 2113,
          ),
          1 => 
          array (
            0 => 42,
            1 => 12,
            2 => 2130,
          ),
          2 => 'design/admin/templates/parts/content/menu.tpl',
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
            0 => 42,
            1 => 12,
            2 => 2131,
          ),
          1 => 
          array (
            0 => 42,
            1 => 69,
            2 => 2188,
          ),
          2 => 'design/admin/templates/parts/content/menu.tpl',
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
            0 => 42,
            1 => 69,
            2 => 2189,
          ),
          1 => 
          array (
            0 => 42,
            1 => 77,
            2 => 2197,
          ),
          2 => 'design/admin/templates/parts/content/menu.tpl',
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
                  1 => 'design/admin/parts/content/menu',
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
            1 => 77,
            2 => 2198,
          ),
          1 => 
          array (
            0 => 42,
            1 => 163,
            2 => 2284,
          ),
          2 => 'design/admin/templates/parts/content/menu.tpl',
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
            0 => 42,
            1 => 163,
            2 => 2285,
          ),
          1 => 
          array (
            0 => 42,
            1 => 165,
            2 => 2287,
          ),
          2 => 'design/admin/templates/parts/content/menu.tpl',
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
                  1 => 'design/admin/parts/content/menu',
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
            1 => 165,
            2 => 2288,
          ),
          1 => 
          array (
            0 => 42,
            1 => 215,
            2 => 2338,
          ),
          2 => 'design/admin/templates/parts/content/menu.tpl',
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
            0 => 42,
            1 => 215,
            2 => 2339,
          ),
          1 => 
          array (
            0 => 43,
            1 => 26,
            2 => 2370,
          ),
          2 => 'design/admin/templates/parts/content/menu.tpl',
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
                  1 => 'design/admin/parts/content/menu',
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
            0 => 43,
            1 => 26,
            2 => 2371,
          ),
          1 => 
          array (
            0 => 43,
            1 => 75,
            2 => 2420,
          ),
          2 => 'design/admin/templates/parts/content/menu.tpl',
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
            0 => 43,
            1 => 75,
            2 => 2421,
          ),
          1 => 
          array (
            0 => 44,
            1 => 4,
            2 => 2433,
          ),
          2 => 'design/admin/templates/parts/content/menu.tpl',
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
        0 => 40,
        1 => 4,
        2 => 1875,
      ),
      1 => 
      array (
        0 => 40,
        1 => 22,
        2 => 1893,
      ),
      2 => 'design/admin/templates/parts/content/menu.tpl',
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
        0 => 44,
        1 => 8,
        2 => 2440,
      ),
      1 => 
      array (
        0 => 46,
        1 => 4,
        2 => 2446,
      ),
      2 => 'design/admin/templates/parts/content/menu.tpl',
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
            0 => 46,
            1 => 32,
            2 => 2476,
          ),
          1 => 
          array (
            0 => 47,
            1 => 26,
            2 => 2503,
          ),
          2 => 'design/admin/templates/parts/content/menu.tpl',
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
                  1 => 'design/admin/parts/content/menu',
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
            1 => 26,
            2 => 2504,
          ),
          1 => 
          array (
            0 => 47,
            1 => 75,
            2 => 2553,
          ),
          2 => 'design/admin/templates/parts/content/menu.tpl',
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
            0 => 47,
            1 => 75,
            2 => 2554,
          ),
          1 => 
          array (
            0 => 48,
            1 => 12,
            2 => 2574,
          ),
          2 => 'design/admin/templates/parts/content/menu.tpl',
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
            0 => 48,
            1 => 12,
            2 => 2575,
          ),
          1 => 
          array (
            0 => 48,
            1 => 69,
            2 => 2632,
          ),
          2 => 'design/admin/templates/parts/content/menu.tpl',
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
            0 => 48,
            1 => 69,
            2 => 2633,
          ),
          1 => 
          array (
            0 => 48,
            1 => 77,
            2 => 2641,
          ),
          2 => 'design/admin/templates/parts/content/menu.tpl',
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
                  1 => 'design/admin/parts/content/menu',
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
            1 => 77,
            2 => 2642,
          ),
          1 => 
          array (
            0 => 48,
            1 => 163,
            2 => 2728,
          ),
          2 => 'design/admin/templates/parts/content/menu.tpl',
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
            0 => 48,
            1 => 163,
            2 => 2729,
          ),
          1 => 
          array (
            0 => 48,
            1 => 165,
            2 => 2731,
          ),
          2 => 'design/admin/templates/parts/content/menu.tpl',
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
                  1 => 'design/admin/parts/content/menu',
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
            1 => 165,
            2 => 2732,
          ),
          1 => 
          array (
            0 => 48,
            1 => 215,
            2 => 2782,
          ),
          2 => 'design/admin/templates/parts/content/menu.tpl',
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
            0 => 48,
            1 => 215,
            2 => 2783,
          ),
          1 => 
          array (
            0 => 49,
            1 => 12,
            2 => 2800,
          ),
          2 => 'design/admin/templates/parts/content/menu.tpl',
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
            0 => 49,
            1 => 12,
            2 => 2801,
          ),
          1 => 
          array (
            0 => 49,
            1 => 68,
            2 => 2857,
          ),
          2 => 'design/admin/templates/parts/content/menu.tpl',
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
            0 => 49,
            1 => 68,
            2 => 2858,
          ),
          1 => 
          array (
            0 => 49,
            1 => 76,
            2 => 2866,
          ),
          2 => 'design/admin/templates/parts/content/menu.tpl',
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
                  1 => 'design/admin/parts/content/menu',
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
            0 => 49,
            1 => 76,
            2 => 2867,
          ),
          1 => 
          array (
            0 => 49,
            1 => 161,
            2 => 2952,
          ),
          2 => 'design/admin/templates/parts/content/menu.tpl',
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
            0 => 49,
            1 => 161,
            2 => 2953,
          ),
          1 => 
          array (
            0 => 49,
            1 => 163,
            2 => 2955,
          ),
          2 => 'design/admin/templates/parts/content/menu.tpl',
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
                  1 => 'design/admin/parts/content/menu',
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
            0 => 49,
            1 => 163,
            2 => 2956,
          ),
          1 => 
          array (
            0 => 49,
            1 => 212,
            2 => 3005,
          ),
          2 => 'design/admin/templates/parts/content/menu.tpl',
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
            0 => 49,
            1 => 212,
            2 => 3006,
          ),
          1 => 
          array (
            0 => 50,
            1 => 4,
            2 => 3015,
          ),
          2 => 'design/admin/templates/parts/content/menu.tpl',
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
        0 => 46,
        1 => 4,
        2 => 2447,
      ),
      1 => 
      array (
        0 => 46,
        1 => 32,
        2 => 2475,
      ),
      2 => 'design/admin/templates/parts/content/menu.tpl',
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
        0 => 50,
        1 => 8,
        2 => 3022,
      ),
      1 => 
      array (
        0 => 52,
        1 => 4,
        2 => 3028,
      ),
      2 => 'design/admin/templates/parts/content/menu.tpl',
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
            0 => 52,
            1 => 8,
            2 => 3034,
          ),
          1 => 
          array (
            0 => 53,
            1 => 12,
            2 => 3047,
          ),
          2 => 'design/admin/templates/parts/content/menu.tpl',
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
            0 => 53,
            1 => 12,
            2 => 3048,
          ),
          1 => 
          array (
            0 => 53,
            1 => 68,
            2 => 3104,
          ),
          2 => 'design/admin/templates/parts/content/menu.tpl',
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
            0 => 53,
            1 => 68,
            2 => 3105,
          ),
          1 => 
          array (
            0 => 53,
            1 => 76,
            2 => 3113,
          ),
          2 => 'design/admin/templates/parts/content/menu.tpl',
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
                  1 => 'design/admin/parts/content/menu',
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
            1 => 76,
            2 => 3114,
          ),
          1 => 
          array (
            0 => 53,
            1 => 161,
            2 => 3199,
          ),
          2 => 'design/admin/templates/parts/content/menu.tpl',
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
            0 => 53,
            1 => 161,
            2 => 3200,
          ),
          1 => 
          array (
            0 => 53,
            1 => 163,
            2 => 3202,
          ),
          2 => 'design/admin/templates/parts/content/menu.tpl',
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
                  1 => 'design/admin/parts/content/menu',
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
            2 => 3203,
          ),
          1 => 
          array (
            0 => 53,
            1 => 212,
            2 => 3252,
          ),
          2 => 'design/admin/templates/parts/content/menu.tpl',
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
            0 => 53,
            1 => 212,
            2 => 3253,
          ),
          1 => 
          array (
            0 => 54,
            1 => 12,
            2 => 3270,
          ),
          2 => 'design/admin/templates/parts/content/menu.tpl',
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
            0 => 54,
            1 => 12,
            2 => 3271,
          ),
          1 => 
          array (
            0 => 54,
            1 => 69,
            2 => 3328,
          ),
          2 => 'design/admin/templates/parts/content/menu.tpl',
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
            0 => 54,
            1 => 69,
            2 => 3329,
          ),
          1 => 
          array (
            0 => 54,
            1 => 77,
            2 => 3337,
          ),
          2 => 'design/admin/templates/parts/content/menu.tpl',
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
                  1 => 'design/admin/parts/content/menu',
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
            1 => 77,
            2 => 3338,
          ),
          1 => 
          array (
            0 => 54,
            1 => 163,
            2 => 3424,
          ),
          2 => 'design/admin/templates/parts/content/menu.tpl',
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
            0 => 54,
            1 => 163,
            2 => 3425,
          ),
          1 => 
          array (
            0 => 54,
            1 => 165,
            2 => 3427,
          ),
          2 => 'design/admin/templates/parts/content/menu.tpl',
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
                  1 => 'design/admin/parts/content/menu',
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
            1 => 165,
            2 => 3428,
          ),
          1 => 
          array (
            0 => 54,
            1 => 215,
            2 => 3478,
          ),
          2 => 'design/admin/templates/parts/content/menu.tpl',
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
            0 => 54,
            1 => 215,
            2 => 3479,
          ),
          1 => 
          array (
            0 => 55,
            1 => 12,
            2 => 3496,
          ),
          2 => 'design/admin/templates/parts/content/menu.tpl',
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
            0 => 55,
            1 => 12,
            2 => 3497,
          ),
          1 => 
          array (
            0 => 55,
            1 => 68,
            2 => 3553,
          ),
          2 => 'design/admin/templates/parts/content/menu.tpl',
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
            0 => 55,
            1 => 68,
            2 => 3554,
          ),
          1 => 
          array (
            0 => 55,
            1 => 76,
            2 => 3562,
          ),
          2 => 'design/admin/templates/parts/content/menu.tpl',
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
                  1 => 'design/admin/parts/content/menu',
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
            0 => 55,
            1 => 76,
            2 => 3563,
          ),
          1 => 
          array (
            0 => 55,
            1 => 161,
            2 => 3648,
          ),
          2 => 'design/admin/templates/parts/content/menu.tpl',
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
            0 => 55,
            1 => 161,
            2 => 3649,
          ),
          1 => 
          array (
            0 => 55,
            1 => 163,
            2 => 3651,
          ),
          2 => 'design/admin/templates/parts/content/menu.tpl',
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
                  1 => 'design/admin/parts/content/menu',
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
            0 => 55,
            1 => 163,
            2 => 3652,
          ),
          1 => 
          array (
            0 => 55,
            1 => 212,
            2 => 3701,
          ),
          2 => 'design/admin/templates/parts/content/menu.tpl',
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
            0 => 55,
            1 => 212,
            2 => 3702,
          ),
          1 => 
          array (
            0 => 56,
            1 => 4,
            2 => 3711,
          ),
          2 => 'design/admin/templates/parts/content/menu.tpl',
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
        0 => 52,
        1 => 4,
        2 => 3029,
      ),
      1 => 
      array (
        0 => 52,
        1 => 8,
        2 => 3033,
      ),
      2 => 'design/admin/templates/parts/content/menu.tpl',
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
        0 => 56,
        1 => 8,
        2 => 3718,
      ),
      1 => 
      array (
        0 => 57,
        1 => 0,
        2 => 3719,
      ),
      2 => 'design/admin/templates/parts/content/menu.tpl',
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
    0 => 33,
    1 => 0,
    2 => 1246,
  ),
  1 => 
  array (
    0 => 33,
    1 => 51,
    2 => 1297,
  ),
  2 => 'design/admin/templates/parts/content/menu.tpl',
),
                       $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );

$text .= '</p>
</div>


<div id="widthcontrol-handler" class="hide">
<div class="widthcontrol-grippy"></div>
</div>
';

$setArray = $oldSetArray_26eacbbdc45a6d6c16cbb31a41f885de;
$tpl->Level--;
?>
