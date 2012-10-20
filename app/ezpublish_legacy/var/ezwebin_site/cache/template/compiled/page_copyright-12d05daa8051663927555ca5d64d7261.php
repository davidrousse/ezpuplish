<?php
// URI:       design/admin/templates/page_copyright.tpl
// Filename:  design/admin/templates/page_copyright.tpl
// Timestamp: 1349721948 (Mon Oct 8 18:45:48 UTC 2012)
$oldSetArray_f9ff9d84a2202a32a7e80b11885c9e2f = isset( $setArray ) ? $setArray : array();
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
<p>
';
unset( $var );
unset( $var2 );
unset( $var3 );
$var3 = call_user_func_array( array( new eZSetupFunctionCollection(), 'fetchEdition' ),
  array(  ) );
$var3 = isset( $var3['result'] ) ? $var3['result'] : null;
if (! isset( $var3 ) ) $var3 = NULL;
while ( is_object( $var3 ) and method_exists( $var3, 'templateValue' ) )
    $var3 = $var3->templateValue();
$var2 = array( '%edition' => $var3, '%about_link' => "\"/ezpublish/app/ezpublish_legacy/index.php/ezwebin_site_admin/ezinfo/about\"" );unset( $var3 );
if (! isset( $var2 ) ) $var2 = NULL;
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
$var3 = array();
foreach ( $var2 as $var4 => $var5 )
{
  if ( is_int( $var4 ) )
    $var3['%' . ( ($var4%9) + 1 )] = $var5;
  else
    $var3[$var4] = $var5;
}
$var = strtr( 'Propulsé par %edition. Pour plus d\'informations, voir <a href=%about_link>ezinfo/about</a>.', $var3 );
unset( $var2, $var3, $var4, $var5 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= '<br />
';
unset( $var );
unset( $var2 );
unset( $var3 );
unset( $var5 );
$var5 = call_user_func_array( array( new eZSetupFunctionCollection(), 'fetchFullVersionString' ),
  array(  ) );
$var5 = isset( $var5['result'] ) ? $var5['result'] : null;
if (! isset( $var5 ) ) $var5 = NULL;
while ( is_object( $var5 ) and method_exists( $var5, 'templateValue' ) )
    $var5 = $var5->templateValue();
$var3 = ( 'http://share.ez.no?utm_content=eZ+Publish+Community+Project+' . $var5 . '&utm_source=eZ+Publish+Community+Project+Dashboard&utm_medium=eZ+Publish+Community+Project+Dashboard&utm_campaign=eZ+Publish+Community+Project+Dashboard' );
unset( $var5 );
if (! isset( $var3 ) ) $var3 = NULL;
while ( is_object( $var3 ) and method_exists( $var3, 'templateValue' ) )
    $var3 = $var3->templateValue();
$var2 = array( '%evaluate_link' => "http://ez.no", '%share_link' => $var3, '%ezpublish_link' => "http://ez.no/ezpublish", '%ez_link' => "http://ez.no" );unset( $var3 );
if (! isset( $var2 ) ) $var2 = NULL;
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
$var3 = array();
foreach ( $var2 as $var4 => $var5 )
{
  if ( is_int( $var4 ) )
    $var3['%' . ( ($var4%9) + 1 )] = $var5;
  else
    $var3[$var4] = $var5;
}
$var = strtr( '<a href="%evaluate_link">Evaluez eZ Publish Enterprise Edition</a> - <a href="%share_link">Devenez un membre de la eZ Community, échangez et contribuez</a>. <a href="%ezpublish_link">eZ Publish</a> Copyright &copy; 1999-2012 <a href="%ez_link">eZ Systems AS</a> et autres.', $var3 );
unset( $var2, $var3, $var4, $var5 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= '
</p>';

$setArray = $oldSetArray_f9ff9d84a2202a32a7e80b11885c9e2f;
$tpl->Level--;
?>
