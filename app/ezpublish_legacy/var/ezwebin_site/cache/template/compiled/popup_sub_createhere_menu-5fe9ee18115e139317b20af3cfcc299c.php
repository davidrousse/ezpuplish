<?php
// URI:       design/admin/templates/popupmenu/popup_sub_createhere_menu.tpl
// Filename:  design/admin/templates/popupmenu/popup_sub_createhere_menu.tpl
// Timestamp: 1349721948 (Mon Oct 8 18:45:48 UTC 2012)
$oldSetArray_e30ad55095410b07dd588866a2a0c5d6 = isset( $setArray ) ? $setArray : array();
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

$text .= '<!-- Create here menu -->
<script type="text/javascript">
menuArray[\'CreateHereMenu\'] = { \'depth\': 1 };
menuArray[\'CreateHereMenu\'][\'elements\'] = {};
menuArray[\'CreateHereMenu\'][\'elements\'][\'menu-classes\'] = { \'variable\': \'%classList%\' };
menuArray[\'CreateHereMenu\'][\'elements\'][\'menu-classes\'][\'content\'] = \'<a id="menu-item-create-here" href="#" onclick="ezpopmenu_submitForm( \\\'menu-form-create-here\\\', new Array( \\\'classID\\\', \\\'%classID%\\\' ) ); return false;">%name%<\\/a>\';
</script>

<div class="popupmenu" id="CreateHereMenu">
    <div id="menu-classes"></div>
</div>


<form id="menu-form-create-here" method="post" action="/ezpublish/app/ezpublish_legacy/index.php/ezwebin_site_admin/content/action">
  <input type="hidden" name="NewButton" value="x" />
  <input type="hidden" name="ContentNodeID" value="%nodeID%" />
  <input type="hidden" name="NodeID" value="%nodeID%" />
  <input type="hidden" name="ContentObjectID" value="%objectID%" />
  <input type="hidden" name="ClassID" value="%classID%" />
  <input type="hidden" name="ViewMode" value="full" />
  
</form>';

$setArray = $oldSetArray_e30ad55095410b07dd588866a2a0c5d6;
$tpl->Level--;
?>
