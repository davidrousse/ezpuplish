<?php
// URI:       design:content/datatype/view/ezxmltags/separator.tpl
// Filename:  extension/ezwebin/design/ezwebin/templates/content/datatype/view/ezxmltags/separator.tpl
// Timestamp: 1350735749 (Sat Oct 20 12:22:29 UTC 2012)
$oldSetArray_f6ccfc1524563b17a4c661d8a3056707 = isset( $setArray ) ? $setArray : array();
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

$text .= '<div class="separator">
    <div class="separator-design"></div>
</div>';

$setArray = $oldSetArray_f6ccfc1524563b17a4c661d8a3056707;
$tpl->Level--;
?>
