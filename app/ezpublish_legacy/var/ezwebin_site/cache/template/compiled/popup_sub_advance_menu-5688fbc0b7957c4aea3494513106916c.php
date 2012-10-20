<?php
// URI:       design/admin/templates/popupmenu/popup_sub_advance_menu.tpl
// Filename:  design/admin/templates/popupmenu/popup_sub_advance_menu.tpl
// Timestamp: 1349721948 (Mon Oct 8 18:45:48 UTC 2012)
$oldSetArray_2d2e98f6280b26270854d8a7cf97d33a = isset( $setArray ) ? $setArray : array();
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

$text .= '<!-- Advanced menu -->
<script type="text/javascript">
menuArray[\'Advanced\'] = { \'depth\': 1 };
menuArray[\'Advanced\'][\'elements\'] = {};
menuArray[\'Advanced\'][\'elements\'][\'menu-hide\'] = { \'url\': "/ezpublish/app/ezpublish_legacy/index.php/ezwebin_site_admin/content/hide/%nodeID%" };
menuArray[\'Advanced\'][\'elements\'][\'menu-list\'] = { \'url\': "/ezpublish/app/ezpublish_legacy/index.php/ezwebin_site_admin/content/view/sitemap/%nodeID%" };
menuArray[\'Advanced\'][\'elements\'][\'reverse-related\'] = { \'url\': "/ezpublish/app/ezpublish_legacy/index.php/ezwebin_site_admin/content/reverserelatedlist/%nodeID%" };
menuArray[\'Advanced\'][\'elements\'][\'menu-history\'] = { \'url\': "/ezpublish/app/ezpublish_legacy/index.php/ezwebin_site_admin/content/history/%objectID%" };
menuArray[\'Advanced\'][\'elements\'][\'menu-url-alias\'] = { \'url\': "/ezpublish/app/ezpublish_legacy/index.php/ezwebin_site_admin/content/urlalias/%nodeID%" };
</script>

<div class="popupmenu" id="Advanced">
    <a id="menu-swap" href="#" onmouseover="ezpopmenu_mouseOver( \'Advanced\' )" onclick="ezpopmenu_submitForm( \'menu-form-swap\' ); return false;">Échanger avec un autre nœud</a>
    <a id="menu-hide" href="#" onmouseover="ezpopmenu_mouseOver( \'Advanced\' )">Cacher / rendre visible</a>
    <hr />
    <a id="menu-list" href="#" onmouseover="ezpopmenu_mouseOver( \'Advanced\' )">Plan de la sous-arborescence</a>
    <a id="reverse-related" href="#" onmouseover="ezpopmenu_mouseOver( \'Advanced\' )">Objets associés par relation inverse pour la sous arborescence</a>
    <hr />
    <a id="menu-history" href="#" onmouseover="ezpopmenu_mouseOver( \'Advanced\' )">Gérer les versions</a>
    <a id="menu-url-alias" href="#" onmouseover="ezpopmenu_mouseOver( \'Advanced\' )">Gérer les alias d\'URL</a>

    
    ';
// foreach begins
$skipDelimiter = true;
if ( !isset( $fe_variable_stack_5a40b38520ba97ac5aa4aedba172886c_21 ) ) $fe_variable_stack_5a40b38520ba97ac5aa4aedba172886c_21 = array();
$fe_variable_stack_5a40b38520ba97ac5aa4aedba172886c_21[] = compact( 'fe_array_5a40b38520ba97ac5aa4aedba172886c_21', 'fe_array_keys_5a40b38520ba97ac5aa4aedba172886c_21', 'fe_n_items_5a40b38520ba97ac5aa4aedba172886c_21', 'fe_n_items_processed_5a40b38520ba97ac5aa4aedba172886c_21', 'fe_i_5a40b38520ba97ac5aa4aedba172886c_21', 'fe_key_5a40b38520ba97ac5aa4aedba172886c_21', 'fe_val_5a40b38520ba97ac5aa4aedba172886c_21', 'fe_offset_5a40b38520ba97ac5aa4aedba172886c_21', 'fe_max_5a40b38520ba97ac5aa4aedba172886c_21', 'fe_reverse_5a40b38520ba97ac5aa4aedba172886c_21', 'fe_first_val_5a40b38520ba97ac5aa4aedba172886c_21', 'fe_last_val_5a40b38520ba97ac5aa4aedba172886c_21' );
$fe_array_5a40b38520ba97ac5aa4aedba172886c_21 = array (
);
$fe_array_keys_5a40b38520ba97ac5aa4aedba172886c_21 = is_array( $fe_array_5a40b38520ba97ac5aa4aedba172886c_21 ) ? array_keys( $fe_array_5a40b38520ba97ac5aa4aedba172886c_21 ) : array();
$fe_n_items_5a40b38520ba97ac5aa4aedba172886c_21 = count( $fe_array_keys_5a40b38520ba97ac5aa4aedba172886c_21 );
$fe_n_items_processed_5a40b38520ba97ac5aa4aedba172886c_21 = 0;
$fe_offset_5a40b38520ba97ac5aa4aedba172886c_21 = 0;
$fe_max_5a40b38520ba97ac5aa4aedba172886c_21 = $fe_n_items_5a40b38520ba97ac5aa4aedba172886c_21 - $fe_offset_5a40b38520ba97ac5aa4aedba172886c_21;
$fe_reverse_5a40b38520ba97ac5aa4aedba172886c_21 = false;
if ( $fe_offset_5a40b38520ba97ac5aa4aedba172886c_21 < 0 || $fe_offset_5a40b38520ba97ac5aa4aedba172886c_21 >= $fe_n_items_5a40b38520ba97ac5aa4aedba172886c_21 )
{
    $fe_offset_5a40b38520ba97ac5aa4aedba172886c_21 = ( $fe_offset_5a40b38520ba97ac5aa4aedba172886c_21 < 0 ) ? 0 : $fe_n_items_5a40b38520ba97ac5aa4aedba172886c_21;
    if ( $fe_n_items_5a40b38520ba97ac5aa4aedba172886c_21 || $fe_offset_5a40b38520ba97ac5aa4aedba172886c_21 < 0 )
 {
        eZDebug::writeWarning("Invalid 'offset' parameter specified: '$fe_offset_5a40b38520ba97ac5aa4aedba172886c_21'. Array count: $fe_n_items_5a40b38520ba97ac5aa4aedba172886c_21");   
}
}
if ( $fe_max_5a40b38520ba97ac5aa4aedba172886c_21 < 0 || $fe_offset_5a40b38520ba97ac5aa4aedba172886c_21 + $fe_max_5a40b38520ba97ac5aa4aedba172886c_21 > $fe_n_items_5a40b38520ba97ac5aa4aedba172886c_21 )
{
    if ( $fe_max_5a40b38520ba97ac5aa4aedba172886c_21 < 0 )
 eZDebug::writeWarning("Invalid 'max' parameter specified: $fe_max_5a40b38520ba97ac5aa4aedba172886c_21");
    $fe_max_5a40b38520ba97ac5aa4aedba172886c_21 = $fe_n_items_5a40b38520ba97ac5aa4aedba172886c_21 - $fe_offset_5a40b38520ba97ac5aa4aedba172886c_21;
}
if ( $fe_reverse_5a40b38520ba97ac5aa4aedba172886c_21 )
{
    $fe_first_val_5a40b38520ba97ac5aa4aedba172886c_21 = $fe_n_items_5a40b38520ba97ac5aa4aedba172886c_21 - 1 - $fe_offset_5a40b38520ba97ac5aa4aedba172886c_21;
    $fe_last_val_5a40b38520ba97ac5aa4aedba172886c_21  = 0;
}
else
{
    $fe_first_val_5a40b38520ba97ac5aa4aedba172886c_21 = $fe_offset_5a40b38520ba97ac5aa4aedba172886c_21;
    $fe_last_val_5a40b38520ba97ac5aa4aedba172886c_21  = $fe_n_items_5a40b38520ba97ac5aa4aedba172886c_21 - 1;
}
// foreach
for ( $fe_i_5a40b38520ba97ac5aa4aedba172886c_21 = $fe_first_val_5a40b38520ba97ac5aa4aedba172886c_21; $fe_n_items_processed_5a40b38520ba97ac5aa4aedba172886c_21 < $fe_max_5a40b38520ba97ac5aa4aedba172886c_21 && ( $fe_reverse_5a40b38520ba97ac5aa4aedba172886c_21 ? $fe_i_5a40b38520ba97ac5aa4aedba172886c_21 >= $fe_last_val_5a40b38520ba97ac5aa4aedba172886c_21 : $fe_i_5a40b38520ba97ac5aa4aedba172886c_21 <= $fe_last_val_5a40b38520ba97ac5aa4aedba172886c_21 ); $fe_reverse_5a40b38520ba97ac5aa4aedba172886c_21 ? $fe_i_5a40b38520ba97ac5aa4aedba172886c_21-- : $fe_i_5a40b38520ba97ac5aa4aedba172886c_21++ )
{
$fe_key_5a40b38520ba97ac5aa4aedba172886c_21 = $fe_array_keys_5a40b38520ba97ac5aa4aedba172886c_21[$fe_i_5a40b38520ba97ac5aa4aedba172886c_21];
$fe_val_5a40b38520ba97ac5aa4aedba172886c_21 = $fe_array_5a40b38520ba97ac5aa4aedba172886c_21[$fe_key_5a40b38520ba97ac5aa4aedba172886c_21];
$vars[$rootNamespace]['template'] = $fe_val_5a40b38520ba97ac5aa4aedba172886c_21;
$text .= '        ';
$textElements = array();
$tpl->processFunction( 'include', $textElements,
                       false,
                       array (
  'uri' => 
  array (
    0 => 
    array (
      0 => 6,
      1 => 
      array (
        0 => 'concat',
        1 => 
        array (
          0 => 
          array (
            0 => 1,
            1 => 'design:',
            2 => false,
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            0 => 4,
            1 => 
            array (
              0 => '',
              1 => 2,
              2 => 'template',
            ),
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
    0 => 24,
    1 => 8,
    2 => 1930,
  ),
  1 => 
  array (
    0 => 24,
    1 => 49,
    2 => 1971,
  ),
  2 => 'design/admin/templates/popupmenu/popup_sub_advance_menu.tpl',
),
                       $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );

$text .= '    ';
$fe_n_items_processed_5a40b38520ba97ac5aa4aedba172886c_21++;
} // foreach
$skipDelimiter = false;
if ( count( $fe_variable_stack_5a40b38520ba97ac5aa4aedba172886c_21 ) ) extract( array_pop( $fe_variable_stack_5a40b38520ba97ac5aa4aedba172886c_21 ) );

else
{

unset( $fe_array_5a40b38520ba97ac5aa4aedba172886c_21 );

unset( $fe_array_keys_5a40b38520ba97ac5aa4aedba172886c_21 );

unset( $fe_n_items_5a40b38520ba97ac5aa4aedba172886c_21 );

unset( $fe_n_items_processed_5a40b38520ba97ac5aa4aedba172886c_21 );

unset( $fe_i_5a40b38520ba97ac5aa4aedba172886c_21 );

unset( $fe_key_5a40b38520ba97ac5aa4aedba172886c_21 );

unset( $fe_val_5a40b38520ba97ac5aa4aedba172886c_21 );

unset( $fe_offset_5a40b38520ba97ac5aa4aedba172886c_21 );

unset( $fe_max_5a40b38520ba97ac5aa4aedba172886c_21 );

unset( $fe_reverse_5a40b38520ba97ac5aa4aedba172886c_21 );

unset( $fe_first_val_5a40b38520ba97ac5aa4aedba172886c_21 );

unset( $fe_last_val_5a40b38520ba97ac5aa4aedba172886c_21 );

unset( $fe_variable_stack_5a40b38520ba97ac5aa4aedba172886c_21 );

}

// foreach ends
$text .= '</div>


<form id="menu-form-swap" method="post" action="/ezpublish/app/ezpublish_legacy/index.php/ezwebin_site_admin/content/action">
  <input type="hidden" name="TopLevelNode" value="%nodeID%" />
  <input type="hidden" name="ContentNodeID" value="%nodeID%" />
  <input type="hidden" name="ContentObjectID" value="%objectID%" />
  <input type="hidden" name="SwapNodeButton" value="x" />
</form>';

$setArray = $oldSetArray_2d2e98f6280b26270854d8a7cf97d33a;
$tpl->Level--;
?>
