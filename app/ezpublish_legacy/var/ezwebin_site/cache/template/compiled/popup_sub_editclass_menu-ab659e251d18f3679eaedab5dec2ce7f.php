<?php
// URI:       design/admin/templates/popupmenu/popup_sub_editclass_menu.tpl
// Filename:  design/admin/templates/popupmenu/popup_sub_editclass_menu.tpl
// Timestamp: 1349721948 (Mon Oct 8 18:45:48 UTC 2012)
$oldSetArray_2182f5ca506447c10badf9b3e3a46b92 = isset( $setArray ) ? $setArray : array();
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

$text .= '<!-- Edit class submenu -->
<script type="text/javascript">
menuArray[\'EditClassSubmenu\'] = { \'depth\': 1 };
menuArray[\'EditClassSubmenu\'][\'elements\'] = {};
menuArray[\'EditClassSubmenu\'][\'elements\'][\'edit-class-languages\'] = { \'variable\': \'%languages%\' };
menuArray[\'EditClassSubmenu\'][\'elements\'][\'edit-class-languages\'][\'content\'] = \'<a href="/ezpublish/app/ezpublish_legacy/index.php/ezwebin_site_admin/class/edit/%classID%/(language)/%locale%" onmouseover="ezpopmenu_mouseOver( \\\'EditClassSubmenu\\\' )">%name%<\\/a>\';
menuArray[\'EditClassSubmenu\'][\'elements\'][\'edit-class-another-language\'] = { \'url\': "/ezpublish/app/ezpublish_legacy/index.php/ezwebin_site_admin/class/edit/%classID%" };
menuArray[\'EditClassSubmenu\'][\'elements\'][\'edit-class-another-language\'][\'disabled_class\'] = \'menu-item-disabled\';
</script>

<div class="popupmenu" id="EditClassSubmenu">
    <div id="edit-class-languages"></div>
    <hr />
    <!-- <a id="edit-class-another-language" href="#" onmouseover="ezpopmenu_mouseOver( \'EditClassSubmenu\' )">Autre langue</a> -->
    <!-- <div id="edit-class-another-language"></div> -->
    <a id="edit-class-another-language" href="#" onmouseover="ezpopmenu_mouseOver( \'EditClassSubmenu\' )">Nouvelle traduction</a>
</div>';

$setArray = $oldSetArray_2182f5ca506447c10badf9b3e3a46b92;
$tpl->Level--;
?>
