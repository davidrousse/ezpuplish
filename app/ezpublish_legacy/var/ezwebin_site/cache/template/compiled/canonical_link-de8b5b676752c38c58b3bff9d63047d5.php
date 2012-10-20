<?php
// URI:       extension/ezwebin/design/ezwebin/templates/canonical_link.tpl
// Filename:  extension/ezwebin/design/ezwebin/templates/canonical_link.tpl
// Timestamp: 1350735749 (Sat Oct 20 12:22:29 UTC 2012)
$oldSetArray_66d132eb4c1ac66f942c7e845f385e12 = isset( $setArray ) ? $setArray : array();
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

unset( $elseif_cond_5bab29054a21c33ef681c0073adb318a_79 );
unset( $elseif_cond_5bab29054a21c33ef681c0073adb318a_79 );
$elseif_cond_5bab29054a21c33ef681c0073adb318a_79 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'pagedata', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['pagedata'] : null;
$elseif_cond_5bab29054a21c33ef681c0073adb318a_791 = compiledFetchAttribute( $elseif_cond_5bab29054a21c33ef681c0073adb318a_79, 'canonical_language_url' );
unset( $elseif_cond_5bab29054a21c33ef681c0073adb318a_79 );
$elseif_cond_5bab29054a21c33ef681c0073adb318a_79 = $elseif_cond_5bab29054a21c33ef681c0073adb318a_791;
if (! isset( $elseif_cond_5bab29054a21c33ef681c0073adb318a_79 ) ) $elseif_cond_5bab29054a21c33ef681c0073adb318a_79 = NULL;
while ( is_object( $elseif_cond_5bab29054a21c33ef681c0073adb318a_79 ) and method_exists( $elseif_cond_5bab29054a21c33ef681c0073adb318a_79, 'templateValue' ) )
    $elseif_cond_5bab29054a21c33ef681c0073adb318a_79 = $elseif_cond_5bab29054a21c33ef681c0073adb318a_79->templateValue();

// if begins
unset( $if_cond );
unset( $if_cond );
$if_cond = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'pagedata', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['pagedata'] : null;
$if_cond1 = compiledFetchAttribute( $if_cond, 'canonical_url' );
unset( $if_cond );
$if_cond = $if_cond1;
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '    
    <link rel="canonical" href="';
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'pagedata', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['pagedata'] : null;
$var2 = compiledFetchAttribute( $var1, 'canonical_url' );
unset( $var1 );
$var1 = $var2;
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();

eZURI::transformURI( $var1, false, 'full' );
$var = $var1;
unset( $var1 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= '" />';
}
elseif ( $elseif_cond_5bab29054a21c33ef681c0073adb318a_79 )
{
$text .= '    
    <link rel="canonical" href="';
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'pagedata', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['pagedata'] : null;
$var2 = compiledFetchAttribute( $var1, 'canonical_language_url' );
unset( $var1 );
$var1 = $var2;
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
$var = htmlspecialchars( $var1 );
unset( $var1 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= '" />';
}
unset( $if_cond );
// if ends

unset( $elseif_cond_5bab29054a21c33ef681c0073adb318a_79 );


$setArray = $oldSetArray_66d132eb4c1ac66f942c7e845f385e12;
$tpl->Level--;
?>
