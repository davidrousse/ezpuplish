<?php
// URI:       extension/ezwt/design/standard/templates/parts/websitetoolbar/floating_toolbar.tpl
// Filename:  extension/ezwt/design/standard/templates/parts/websitetoolbar/floating_toolbar.tpl
// Timestamp: 1350735748 (Sat Oct 20 12:22:28 UTC 2012)
$oldSetArray_68f4e18bcf73fae13dcb337b54a2ab71 = isset( $setArray ) ? $setArray : array();
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

<script type="text/javascript">
(function()
{
    var body = document.body, ezwt = document.getElementById( \'ezwt\' );
    if ( !ezwt ) return;
    if ( body.className.indexOf(\'ie6\') !== -1 ) return;

    if ( body.className )
        body.className += \' floating-wt\';
    else
        body.className = \'floating-wt\';

    // Set padding on header / body based on height of toolbar
    var page = document.getElementById( \'page\' )
    if ( page )
        page.getElementsByTagName(\'div\')[0].style.paddingTop = ezwt.offsetHeight + \'px\';
    else
        body.style.paddingTop = ezwt.offsetHeight + \'px\';
})();
</script>

';

$setArray = $oldSetArray_68f4e18bcf73fae13dcb337b54a2ab71;
$tpl->Level--;
?>
