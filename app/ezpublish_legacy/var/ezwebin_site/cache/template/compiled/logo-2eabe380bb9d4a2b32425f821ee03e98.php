<?php
// URI:       extension/ezwt/design/standard/templates/parts/websitetoolbar/logo.tpl
// Filename:  extension/ezwt/design/standard/templates/parts/websitetoolbar/logo.tpl
// Timestamp: 1350735748 (Sat Oct 20 12:22:28 UTC 2012)
$oldSetArray_0a6908d0bdf4f3fa8020bf6a28f858e5 = isset( $setArray ) ? $setArray : array();
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

$text .= '<div id="ezwt-ezlogo">
<a href="/ezpublish/app/ezpublish_legacy/index.php/fre/ezinfo/about" title="À propos" target="_blank"><img src="/ezpublish/app/ezpublish_legacy/extension/ezwt/design/standard/images/websitetoolbar/ezwt-logo.png" width="66" height="25" alt="eZ" /></a>
</div>';

$setArray = $oldSetArray_0a6908d0bdf4f3fa8020bf6a28f858e5;
$tpl->Level--;
?>
