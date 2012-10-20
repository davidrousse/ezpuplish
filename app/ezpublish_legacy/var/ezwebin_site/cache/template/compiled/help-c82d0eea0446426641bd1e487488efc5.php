<?php
// URI:       extension/ezwt/design/standard/templates/parts/websitetoolbar/help.tpl
// Filename:  extension/ezwt/design/standard/templates/parts/websitetoolbar/help.tpl
// Timestamp: 1350735748 (Sat Oct 20 12:22:28 UTC 2012)
$oldSetArray_b3ac25e61d1ee00c2cc48e4329ae5125 = isset( $setArray ) ? $setArray : array();
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

$text .= '<div id="ezwt-help">
<a href="http://ez.no/doc" title="Documentation" target="_blank"><span class="hide">Documentation</span>?</a>
</div>';

$setArray = $oldSetArray_b3ac25e61d1ee00c2cc48e4329ae5125;
$tpl->Level--;
?>
