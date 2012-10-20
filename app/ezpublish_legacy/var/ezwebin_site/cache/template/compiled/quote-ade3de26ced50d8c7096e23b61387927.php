<?php
// URI:       design:content/datatype/view/ezxmltags/quote.tpl
// Filename:  design/standard/templates/content/datatype/view/ezxmltags/quote.tpl
// Timestamp: 1349721948 (Mon Oct 8 18:45:48 UTC 2012)
$oldSetArray_c51e60a5d7a2f603a21d4a69eded1d81 = isset( $setArray ) ? $setArray : array();
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

$text .= '<blockquote><span class="hide">"</span>';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'content', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['content'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '<span class="hide">"</span></blockquote>
';

$setArray = $oldSetArray_c51e60a5d7a2f603a21d4a69eded1d81;
$tpl->Level--;
?>
