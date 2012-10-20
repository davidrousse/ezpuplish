<?php
// URI:       design:parts/setup/menu.tpl
// Filename:  design/admin/templates/parts/setup/menu.tpl
// Timestamp: 1349721948 (Mon Oct 8 18:45:48 UTC 2012)
$oldSetArray_df0192b467e0ad480e1418e2390fa99e = isset( $setArray ) ? $setArray : array();
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
$oldRestoreIncludeArray_ae541c9ecb5f361674ec624cdc02e98f = isset( $restoreIncludeArray ) ? $restoreIncludeArray : array();
$restoreIncludeArray = array();

if ( isset( $currentNamespace ) and isset( $vars[$currentNamespace]['ini_section'] ) )
    $restoreIncludeArray[] = array( $currentNamespace, 'ini_section', $vars[$currentNamespace]['ini_section'] );
elseif ( !isset( $vars[( isset( $currentNamespace ) ? $currentNamespace : '' )]['ini_section'] ) ) 
    $restoreIncludeArray[] = array( ( isset( $currentNamespace ) ? $currentNamespace : '' ), 'ini_section', 'unset' );

$vars[$currentNamespace]['ini_section'] = 'Leftmenu_setup';
if ( isset( $currentNamespace ) and isset( $vars[$currentNamespace]['i18n_hash'] ) )
    $restoreIncludeArray[] = array( $currentNamespace, 'i18n_hash', $vars[$currentNamespace]['i18n_hash'] );
elseif ( !isset( $vars[( isset( $currentNamespace ) ? $currentNamespace : '' )]['i18n_hash'] ) ) 
    $restoreIncludeArray[] = array( ( isset( $currentNamespace ) ? $currentNamespace : '' ), 'i18n_hash', 'unset' );

$vars[$currentNamespace]['i18n_hash'] = array (
  'setup' => 'Administration',
  'cache' => 'Gestion du cache',
  'classes' => 'Classes',
  'collected' => 'Information recueillie',
  'extensions' => 'Extensions',
  'global_setting' => 'Configuration globale',
  'ini' => 'Configuration .ini',
  'languages' => 'Langues',
  'notification' => 'Notification',
  'pdf_export' => 'Export PDF',
  'packages' => 'Paquetages',
  'rad' => 'RAD',
  'roles_and_policies' => 'Rôles et droits',
  'rss' => 'Syndication',
  'search_statistics' => 'Statistiques de recherche',
  'sections' => 'Sections',
  'states' => 'États des objets',
  'sessions' => 'Sessions',
  'system_information' => 'Informations système',
  'upgrade_check' => 'Vérifier la mise à jour',
  'triggers' => 'Déclencheurs',
  'url_management' => 'Gestion des liens',
  'url_translator' => 'Traducteur d\'URL',
  'url_wildcards' => 'URL avec jokers',
  'workflows' => 'Workflows',
  'workflow_processes' => 'Processus de workflow',
  'look_and_feel' => 'Apparence',
  'menu_management' => 'Gestion des menus',
  'toolbar_management' => 'Gestion des barres d\'outils',
  'templates' => 'Modèles',
);
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
$restoreIncludeArray = $oldRestoreIncludeArray_ae541c9ecb5f361674ec624cdc02e98f;

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
        0 => 45,
        1 => 51,
        2 => 3110,
      ),
      1 => 
      array (
        0 => 46,
        1 => 4,
        2 => 3115,
      ),
      2 => 'design/admin/templates/parts/setup/menu.tpl',
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
            0 => 46,
            1 => 23,
            2 => 3136,
          ),
          1 => 
          array (
            0 => 47,
            1 => 12,
            2 => 3149,
          ),
          2 => 'design/admin/templates/parts/setup/menu.tpl',
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
            0 => 47,
            1 => 12,
            2 => 3150,
          ),
          1 => 
          array (
            0 => 47,
            1 => 68,
            2 => 3206,
          ),
          2 => 'design/admin/templates/parts/setup/menu.tpl',
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
            0 => 47,
            1 => 68,
            2 => 3207,
          ),
          1 => 
          array (
            0 => 47,
            1 => 76,
            2 => 3215,
          ),
          2 => 'design/admin/templates/parts/setup/menu.tpl',
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
                  1 => 'design/admin/parts/user/menu',
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
            1 => 76,
            2 => 3216,
          ),
          1 => 
          array (
            0 => 47,
            1 => 158,
            2 => 3298,
          ),
          2 => 'design/admin/templates/parts/setup/menu.tpl',
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
            0 => 47,
            1 => 158,
            2 => 3299,
          ),
          1 => 
          array (
            0 => 47,
            1 => 160,
            2 => 3301,
          ),
          2 => 'design/admin/templates/parts/setup/menu.tpl',
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
                  1 => 'design/admin/parts/user/menu',
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
            1 => 160,
            2 => 3302,
          ),
          1 => 
          array (
            0 => 47,
            1 => 206,
            2 => 3348,
          ),
          2 => 'design/admin/templates/parts/setup/menu.tpl',
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
            0 => 47,
            1 => 206,
            2 => 3349,
          ),
          1 => 
          array (
            0 => 48,
            1 => 26,
            2 => 3380,
          ),
          2 => 'design/admin/templates/parts/setup/menu.tpl',
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
                  1 => 'design/admin/parts/user/menu',
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
            1 => 26,
            2 => 3381,
          ),
          1 => 
          array (
            0 => 48,
            1 => 73,
            2 => 3428,
          ),
          2 => 'design/admin/templates/parts/setup/menu.tpl',
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
            0 => 48,
            1 => 73,
            2 => 3429,
          ),
          1 => 
          array (
            0 => 49,
            1 => 12,
            2 => 3449,
          ),
          2 => 'design/admin/templates/parts/setup/menu.tpl',
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
            2 => 3450,
          ),
          1 => 
          array (
            0 => 49,
            1 => 68,
            2 => 3506,
          ),
          2 => 'design/admin/templates/parts/setup/menu.tpl',
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
            2 => 3507,
          ),
          1 => 
          array (
            0 => 49,
            1 => 76,
            2 => 3515,
          ),
          2 => 'design/admin/templates/parts/setup/menu.tpl',
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
                  1 => 'design/admin/parts/user/menu',
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
            2 => 3516,
          ),
          1 => 
          array (
            0 => 49,
            1 => 158,
            2 => 3598,
          ),
          2 => 'design/admin/templates/parts/setup/menu.tpl',
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
            1 => 158,
            2 => 3599,
          ),
          1 => 
          array (
            0 => 49,
            1 => 160,
            2 => 3601,
          ),
          2 => 'design/admin/templates/parts/setup/menu.tpl',
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
                  1 => 'design/admin/parts/user/menu',
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
            1 => 160,
            2 => 3602,
          ),
          1 => 
          array (
            0 => 49,
            1 => 206,
            2 => 3648,
          ),
          2 => 'design/admin/templates/parts/setup/menu.tpl',
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
            1 => 206,
            2 => 3649,
          ),
          1 => 
          array (
            0 => 50,
            1 => 4,
            2 => 3658,
          ),
          2 => 'design/admin/templates/parts/setup/menu.tpl',
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
        0 => 46,
        1 => 4,
        2 => 3116,
      ),
      1 => 
      array (
        0 => 46,
        1 => 23,
        2 => 3135,
      ),
      2 => 'design/admin/templates/parts/setup/menu.tpl',
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
        0 => 50,
        1 => 8,
        2 => 3665,
      ),
      1 => 
      array (
        0 => 52,
        1 => 4,
        2 => 3671,
      ),
      2 => 'design/admin/templates/parts/setup/menu.tpl',
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
            0 => 52,
            1 => 22,
            2 => 3691,
          ),
          1 => 
          array (
            0 => 53,
            1 => 12,
            2 => 3704,
          ),
          2 => 'design/admin/templates/parts/setup/menu.tpl',
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
            2 => 3705,
          ),
          1 => 
          array (
            0 => 53,
            1 => 68,
            2 => 3761,
          ),
          2 => 'design/admin/templates/parts/setup/menu.tpl',
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
            2 => 3762,
          ),
          1 => 
          array (
            0 => 53,
            1 => 76,
            2 => 3770,
          ),
          2 => 'design/admin/templates/parts/setup/menu.tpl',
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
                  1 => 'design/admin/parts/user/menu',
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
            2 => 3771,
          ),
          1 => 
          array (
            0 => 53,
            1 => 158,
            2 => 3853,
          ),
          2 => 'design/admin/templates/parts/setup/menu.tpl',
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
            1 => 158,
            2 => 3854,
          ),
          1 => 
          array (
            0 => 53,
            1 => 160,
            2 => 3856,
          ),
          2 => 'design/admin/templates/parts/setup/menu.tpl',
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
                  1 => 'design/admin/parts/user/menu',
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
            1 => 160,
            2 => 3857,
          ),
          1 => 
          array (
            0 => 53,
            1 => 206,
            2 => 3903,
          ),
          2 => 'design/admin/templates/parts/setup/menu.tpl',
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
            1 => 206,
            2 => 3904,
          ),
          1 => 
          array (
            0 => 54,
            1 => 12,
            2 => 3921,
          ),
          2 => 'design/admin/templates/parts/setup/menu.tpl',
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
            2 => 3922,
          ),
          1 => 
          array (
            0 => 54,
            1 => 69,
            2 => 3979,
          ),
          2 => 'design/admin/templates/parts/setup/menu.tpl',
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
            2 => 3980,
          ),
          1 => 
          array (
            0 => 54,
            1 => 77,
            2 => 3988,
          ),
          2 => 'design/admin/templates/parts/setup/menu.tpl',
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
                  1 => 'design/admin/parts/user/menu',
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
            2 => 3989,
          ),
          1 => 
          array (
            0 => 54,
            1 => 160,
            2 => 4072,
          ),
          2 => 'design/admin/templates/parts/setup/menu.tpl',
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
            1 => 160,
            2 => 4073,
          ),
          1 => 
          array (
            0 => 54,
            1 => 162,
            2 => 4075,
          ),
          2 => 'design/admin/templates/parts/setup/menu.tpl',
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
                  1 => 'design/admin/parts/user/menu',
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
            1 => 162,
            2 => 4076,
          ),
          1 => 
          array (
            0 => 54,
            1 => 209,
            2 => 4123,
          ),
          2 => 'design/admin/templates/parts/setup/menu.tpl',
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
            0 => 54,
            1 => 209,
            2 => 4124,
          ),
          1 => 
          array (
            0 => 55,
            1 => 26,
            2 => 4155,
          ),
          2 => 'design/admin/templates/parts/setup/menu.tpl',
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
                  1 => 'design/admin/parts/user/menu',
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
            1 => 26,
            2 => 4156,
          ),
          1 => 
          array (
            0 => 55,
            1 => 72,
            2 => 4202,
          ),
          2 => 'design/admin/templates/parts/setup/menu.tpl',
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
            0 => 55,
            1 => 72,
            2 => 4203,
          ),
          1 => 
          array (
            0 => 56,
            1 => 4,
            2 => 4215,
          ),
          2 => 'design/admin/templates/parts/setup/menu.tpl',
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
        0 => 52,
        1 => 4,
        2 => 3672,
      ),
      1 => 
      array (
        0 => 52,
        1 => 22,
        2 => 3690,
      ),
      2 => 'design/admin/templates/parts/setup/menu.tpl',
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
        0 => 56,
        1 => 8,
        2 => 4222,
      ),
      1 => 
      array (
        0 => 58,
        1 => 4,
        2 => 4228,
      ),
      2 => 'design/admin/templates/parts/setup/menu.tpl',
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
            0 => 58,
            1 => 32,
            2 => 4258,
          ),
          1 => 
          array (
            0 => 59,
            1 => 26,
            2 => 4285,
          ),
          2 => 'design/admin/templates/parts/setup/menu.tpl',
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
                  1 => 'design/admin/parts/user/menu',
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
            0 => 59,
            1 => 26,
            2 => 4286,
          ),
          1 => 
          array (
            0 => 59,
            1 => 72,
            2 => 4332,
          ),
          2 => 'design/admin/templates/parts/setup/menu.tpl',
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
            0 => 59,
            1 => 72,
            2 => 4333,
          ),
          1 => 
          array (
            0 => 60,
            1 => 12,
            2 => 4353,
          ),
          2 => 'design/admin/templates/parts/setup/menu.tpl',
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
            0 => 60,
            1 => 12,
            2 => 4354,
          ),
          1 => 
          array (
            0 => 60,
            1 => 69,
            2 => 4411,
          ),
          2 => 'design/admin/templates/parts/setup/menu.tpl',
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
            0 => 60,
            1 => 69,
            2 => 4412,
          ),
          1 => 
          array (
            0 => 60,
            1 => 77,
            2 => 4420,
          ),
          2 => 'design/admin/templates/parts/setup/menu.tpl',
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
                  1 => 'design/admin/parts/user/menu',
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
            0 => 60,
            1 => 77,
            2 => 4421,
          ),
          1 => 
          array (
            0 => 60,
            1 => 160,
            2 => 4504,
          ),
          2 => 'design/admin/templates/parts/setup/menu.tpl',
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
            0 => 60,
            1 => 160,
            2 => 4505,
          ),
          1 => 
          array (
            0 => 60,
            1 => 162,
            2 => 4507,
          ),
          2 => 'design/admin/templates/parts/setup/menu.tpl',
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
                  1 => 'design/admin/parts/user/menu',
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
            0 => 60,
            1 => 162,
            2 => 4508,
          ),
          1 => 
          array (
            0 => 60,
            1 => 209,
            2 => 4555,
          ),
          2 => 'design/admin/templates/parts/setup/menu.tpl',
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
            0 => 60,
            1 => 209,
            2 => 4556,
          ),
          1 => 
          array (
            0 => 61,
            1 => 12,
            2 => 4573,
          ),
          2 => 'design/admin/templates/parts/setup/menu.tpl',
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
            0 => 61,
            1 => 12,
            2 => 4574,
          ),
          1 => 
          array (
            0 => 61,
            1 => 68,
            2 => 4630,
          ),
          2 => 'design/admin/templates/parts/setup/menu.tpl',
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
            0 => 61,
            1 => 68,
            2 => 4631,
          ),
          1 => 
          array (
            0 => 61,
            1 => 76,
            2 => 4639,
          ),
          2 => 'design/admin/templates/parts/setup/menu.tpl',
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
                  1 => 'design/admin/parts/user/menu',
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
            0 => 61,
            1 => 76,
            2 => 4640,
          ),
          1 => 
          array (
            0 => 61,
            1 => 158,
            2 => 4722,
          ),
          2 => 'design/admin/templates/parts/setup/menu.tpl',
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
            0 => 61,
            1 => 158,
            2 => 4723,
          ),
          1 => 
          array (
            0 => 61,
            1 => 160,
            2 => 4725,
          ),
          2 => 'design/admin/templates/parts/setup/menu.tpl',
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
                  1 => 'design/admin/parts/user/menu',
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
            0 => 61,
            1 => 160,
            2 => 4726,
          ),
          1 => 
          array (
            0 => 61,
            1 => 206,
            2 => 4772,
          ),
          2 => 'design/admin/templates/parts/setup/menu.tpl',
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
            0 => 61,
            1 => 206,
            2 => 4773,
          ),
          1 => 
          array (
            0 => 62,
            1 => 4,
            2 => 4782,
          ),
          2 => 'design/admin/templates/parts/setup/menu.tpl',
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
        0 => 58,
        1 => 4,
        2 => 4229,
      ),
      1 => 
      array (
        0 => 58,
        1 => 32,
        2 => 4257,
      ),
      2 => 'design/admin/templates/parts/setup/menu.tpl',
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
        0 => 62,
        1 => 8,
        2 => 4789,
      ),
      1 => 
      array (
        0 => 64,
        1 => 4,
        2 => 4795,
      ),
      2 => 'design/admin/templates/parts/setup/menu.tpl',
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
            0 => 64,
            1 => 8,
            2 => 4801,
          ),
          1 => 
          array (
            0 => 65,
            1 => 12,
            2 => 4814,
          ),
          2 => 'design/admin/templates/parts/setup/menu.tpl',
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
            0 => 65,
            1 => 12,
            2 => 4815,
          ),
          1 => 
          array (
            0 => 65,
            1 => 68,
            2 => 4871,
          ),
          2 => 'design/admin/templates/parts/setup/menu.tpl',
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
            0 => 65,
            1 => 68,
            2 => 4872,
          ),
          1 => 
          array (
            0 => 65,
            1 => 76,
            2 => 4880,
          ),
          2 => 'design/admin/templates/parts/setup/menu.tpl',
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
                  1 => 'design/admin/parts/user/menu',
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
            0 => 65,
            1 => 76,
            2 => 4881,
          ),
          1 => 
          array (
            0 => 65,
            1 => 158,
            2 => 4963,
          ),
          2 => 'design/admin/templates/parts/setup/menu.tpl',
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
            0 => 65,
            1 => 158,
            2 => 4964,
          ),
          1 => 
          array (
            0 => 65,
            1 => 160,
            2 => 4966,
          ),
          2 => 'design/admin/templates/parts/setup/menu.tpl',
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
                  1 => 'design/admin/parts/user/menu',
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
            0 => 65,
            1 => 160,
            2 => 4967,
          ),
          1 => 
          array (
            0 => 65,
            1 => 206,
            2 => 5013,
          ),
          2 => 'design/admin/templates/parts/setup/menu.tpl',
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
            0 => 65,
            1 => 206,
            2 => 5014,
          ),
          1 => 
          array (
            0 => 66,
            1 => 12,
            2 => 5031,
          ),
          2 => 'design/admin/templates/parts/setup/menu.tpl',
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
            0 => 66,
            1 => 12,
            2 => 5032,
          ),
          1 => 
          array (
            0 => 66,
            1 => 69,
            2 => 5089,
          ),
          2 => 'design/admin/templates/parts/setup/menu.tpl',
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
            0 => 66,
            1 => 69,
            2 => 5090,
          ),
          1 => 
          array (
            0 => 66,
            1 => 77,
            2 => 5098,
          ),
          2 => 'design/admin/templates/parts/setup/menu.tpl',
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
                  1 => 'design/admin/parts/user/menu',
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
            0 => 66,
            1 => 77,
            2 => 5099,
          ),
          1 => 
          array (
            0 => 66,
            1 => 160,
            2 => 5182,
          ),
          2 => 'design/admin/templates/parts/setup/menu.tpl',
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
            0 => 66,
            1 => 160,
            2 => 5183,
          ),
          1 => 
          array (
            0 => 66,
            1 => 162,
            2 => 5185,
          ),
          2 => 'design/admin/templates/parts/setup/menu.tpl',
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
                  1 => 'design/admin/parts/user/menu',
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
            0 => 66,
            1 => 162,
            2 => 5186,
          ),
          1 => 
          array (
            0 => 66,
            1 => 209,
            2 => 5233,
          ),
          2 => 'design/admin/templates/parts/setup/menu.tpl',
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
            0 => 66,
            1 => 209,
            2 => 5234,
          ),
          1 => 
          array (
            0 => 67,
            1 => 12,
            2 => 5251,
          ),
          2 => 'design/admin/templates/parts/setup/menu.tpl',
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
            0 => 67,
            1 => 12,
            2 => 5252,
          ),
          1 => 
          array (
            0 => 67,
            1 => 68,
            2 => 5308,
          ),
          2 => 'design/admin/templates/parts/setup/menu.tpl',
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
            0 => 67,
            1 => 68,
            2 => 5309,
          ),
          1 => 
          array (
            0 => 67,
            1 => 76,
            2 => 5317,
          ),
          2 => 'design/admin/templates/parts/setup/menu.tpl',
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
                  1 => 'design/admin/parts/user/menu',
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
            0 => 67,
            1 => 76,
            2 => 5318,
          ),
          1 => 
          array (
            0 => 67,
            1 => 158,
            2 => 5400,
          ),
          2 => 'design/admin/templates/parts/setup/menu.tpl',
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
            0 => 67,
            1 => 158,
            2 => 5401,
          ),
          1 => 
          array (
            0 => 67,
            1 => 160,
            2 => 5403,
          ),
          2 => 'design/admin/templates/parts/setup/menu.tpl',
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
                  1 => 'design/admin/parts/user/menu',
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
            0 => 67,
            1 => 160,
            2 => 5404,
          ),
          1 => 
          array (
            0 => 67,
            1 => 206,
            2 => 5450,
          ),
          2 => 'design/admin/templates/parts/setup/menu.tpl',
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
            0 => 67,
            1 => 206,
            2 => 5451,
          ),
          1 => 
          array (
            0 => 68,
            1 => 4,
            2 => 5460,
          ),
          2 => 'design/admin/templates/parts/setup/menu.tpl',
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
        0 => 64,
        1 => 4,
        2 => 4796,
      ),
      1 => 
      array (
        0 => 64,
        1 => 8,
        2 => 4800,
      ),
      2 => 'design/admin/templates/parts/setup/menu.tpl',
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
        0 => 68,
        1 => 8,
        2 => 5467,
      ),
      1 => 
      array (
        0 => 69,
        1 => 0,
        2 => 5468,
      ),
      2 => 'design/admin/templates/parts/setup/menu.tpl',
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
    0 => 45,
    1 => 0,
    2 => 3058,
  ),
  1 => 
  array (
    0 => 45,
    1 => 51,
    2 => 3109,
  ),
  2 => 'design/admin/templates/parts/setup/menu.tpl',
),
                       $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );

$text .= '</p>
</div>


<div id="widthcontrol-handler" class="hide">
<div class="widthcontrol-grippy"></div>
</div>
';

$setArray = $oldSetArray_df0192b467e0ad480e1418e2390fa99e;
$tpl->Level--;
?>
