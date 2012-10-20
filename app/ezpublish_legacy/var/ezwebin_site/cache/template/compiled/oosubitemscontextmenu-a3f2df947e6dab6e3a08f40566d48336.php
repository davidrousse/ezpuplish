<?php
// URI:       design:node/oosubitemscontextmenu.tpl
// Filename:  extension/ezodf/design/standard/templates/node/oosubitemscontextmenu.tpl
// Timestamp: 1349610639 (Sun Oct 7 11:50:39 UTC 2012)
$oldSetArray_4d2f124ffb4549da0a9c24250d09efb7 = isset( $setArray ) ? $setArray : array();
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

$text .= '<script type="text/javascript">
menuArray[\'OpenOffice\'] = [];
menuArray[\'OpenOffice\'][\'depth\'] = 1;
menuArray[\'OpenOffice\'][\'elements\'] = [];
</script>

<hr />
<a id="child-menu-openoffice" class="more" href="#" onmouseover="ezpopmenu_showSubLevel( event, \'OpenOffice\', \'child-menu-openoffice\' ); return false;">OpenOffice.org</a>

';

$setArray = $oldSetArray_4d2f124ffb4549da0a9c24250d09efb7;
$tpl->Level--;
?>
