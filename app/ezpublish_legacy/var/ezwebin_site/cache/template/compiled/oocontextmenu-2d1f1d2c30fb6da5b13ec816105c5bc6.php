<?php
// URI:       design:node/oocontextmenu.tpl
// Filename:  extension/ezodf/design/standard/templates/node/oocontextmenu.tpl
// Timestamp: 1349610639 (Sun Oct 7 11:50:39 UTC 2012)
$oldSetArray_aa40b8302196feabfd158c5b06cdba26 = isset( $setArray ) ? $setArray : array();
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
<a id="menu-openoffice" class="more" href="#" onmouseover="ezpopmenu_showSubLevel( event, \'OpenOffice\', \'menu-openoffice\' ); return false;">OpenOffice.org</a>


<form id="menu-form-export-ooo" method="post" action="/ezpublish/app/ezpublish_legacy/index.php/ezwebin_site_admin/ezodf/export">
  <input type="hidden" name="NodeID" value="%nodeID%" />
  <input type="hidden" name="ObjectID" value="%objectID%" />
  <input type="hidden" name="CurrentURL" value="%currentURL%" />
</form>


<form id="menu-form-export-pdf" method="post" action="/ezpublish/app/ezpublish_legacy/index.php/ezwebin_site_admin/ezodf/export">
  <input type="hidden" name="ExportType" value="PDF" />
  <input type="hidden" name="NodeID" value="%nodeID%" />
  <input type="hidden" name="ObjectID" value="%objectID%" />
  <input type="hidden" name="CurrentURL" value="%currentURL%" />
</form>


<form id="menu-form-export-word" method="post" action="/ezpublish/app/ezpublish_legacy/index.php/ezwebin_site_admin/ezodf/export">
  <input type="hidden" name="ExportType" value="Word" />
  <input type="hidden" name="NodeID" value="%nodeID%" />
  <input type="hidden" name="ObjectID" value="%objectID%" />
  <input type="hidden" name="CurrentURL" value="%currentURL%" />
</form>


<form id="menu-form-import-ooo" method="post" action="/ezpublish/app/ezpublish_legacy/index.php/ezwebin_site_admin/ezodf/import">
  <input type="hidden" name="NodeID" value="%nodeID%" />
  <input type="hidden" name="ObjectID" value="%objectID%" />
  <input type="hidden" name="CurrentURL" value="%currentURL%" />
</form>



<form id="menu-form-replace-ooo" method="post" action="/ezpublish/app/ezpublish_legacy/index.php/ezwebin_site_admin/ezodf/import">
  <input type="hidden" name="ImportType" value="replace" />
  <input type="hidden" name="NodeID" value="%nodeID%" />
  <input type="hidden" name="ObjectID" value="%objectID%" />
  <input type="hidden" name="CurrentURL" value="%currentURL%" />
</form>
';

$setArray = $oldSetArray_aa40b8302196feabfd158c5b06cdba26;
$tpl->Level--;
?>
