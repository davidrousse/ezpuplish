<?php
// URI:       design/admin/templates/children_detailed.tpl
// Filename:  design/admin/templates/children_detailed.tpl
// Timestamp: 1349721948 (Mon Oct 8 18:45:48 UTC 2012)
$oldSetArray_3f566d40399cea56ca6fc2f41717b59a = isset( $setArray ) ? $setArray : array();
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

// def $section
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'node', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['node'] : null;
$var2 = compiledFetchAttribute( $var1, 'object' );
unset( $var1 );
$var1 = $var2;
$var2 = compiledFetchAttribute( $var1, 'section_id' );
unset( $var1 );
$var1 = $var2;
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
$var = call_user_func_array( array( new eZSectionFunctionCollection(), 'fetchSectionObject' ),
  array(     'section_id' => $var1,
    'identifier' => false ) );
$var = isset( $var['result'] ) ? $var['result'] : null;
unset( $var1 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( $tpl->hasVariable( 'section', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'section' is already defined.", array (
  0 => 
  array (
    0 => 1,
    1 => 0,
    2 => 1,
  ),
  1 => 
  array (
    0 => 3,
    1 => 63,
    2 => 245,
  ),
  2 => 'design/admin/templates/children_detailed.tpl',
) );
    $tpl->setVariable( 'section', $var, $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'section', $var, $rootNamespace );
}

// def $visible_columns
if ( $tpl->hasVariable( 'visible_columns', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'visible_columns' is already defined.", array (
  0 => 
  array (
    0 => 1,
    1 => 0,
    2 => 1,
  ),
  1 => 
  array (
    0 => 3,
    1 => 63,
    2 => 245,
  ),
  2 => 'design/admin/templates/children_detailed.tpl',
) );
    $tpl->setVariable( 'visible_columns', array (
  'ezcontentnavigationpart' => 'checkbox;crank;name;published_date;translations;priority',
  'ezmedianavigationpart' => 'checkbox;crank;thumbnail;name;hidden_status_string;class_name',
  'ezusernavigationpart' => 'checkbox;crank;name;creator;published_date',
), $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'visible_columns', array (
  'ezcontentnavigationpart' => 'checkbox;crank;name;published_date;translations;priority',
  'ezmedianavigationpart' => 'checkbox;crank;thumbnail;name;hidden_status_string;class_name',
  'ezusernavigationpart' => 'checkbox;crank;name;creator;published_date',
), $rootNamespace );
}

// def $locales
unset( $var );
$var = call_user_func_array( array( new eZContentFunctionCollection(), 'fetchTranslationList' ),
  array(  ) );
$var = isset( $var['result'] ) ? $var['result'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( $tpl->hasVariable( 'locales', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'locales' is already defined.", array (
  0 => 
  array (
    0 => 1,
    1 => 0,
    2 => 1,
  ),
  1 => 
  array (
    0 => 3,
    1 => 63,
    2 => 245,
  ),
  2 => 'design/admin/templates/children_detailed.tpl',
) );
    $tpl->setVariable( 'locales', $var, $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'locales', $var, $rootNamespace );
}

$text .= '

<script type="text/javascript">
(function() {


var availableLanguages = {';
// foreach begins
$skipDelimiter = true;
if ( !isset( $fe_variable_stack_b7c10f1d772380f731276dc282927e7b_17 ) ) $fe_variable_stack_b7c10f1d772380f731276dc282927e7b_17 = array();
$fe_variable_stack_b7c10f1d772380f731276dc282927e7b_17[] = compact( 'fe_array_b7c10f1d772380f731276dc282927e7b_17', 'fe_array_keys_b7c10f1d772380f731276dc282927e7b_17', 'fe_n_items_b7c10f1d772380f731276dc282927e7b_17', 'fe_n_items_processed_b7c10f1d772380f731276dc282927e7b_17', 'fe_i_b7c10f1d772380f731276dc282927e7b_17', 'fe_key_b7c10f1d772380f731276dc282927e7b_17', 'fe_val_b7c10f1d772380f731276dc282927e7b_17', 'fe_offset_b7c10f1d772380f731276dc282927e7b_17', 'fe_max_b7c10f1d772380f731276dc282927e7b_17', 'fe_reverse_b7c10f1d772380f731276dc282927e7b_17', 'fe_first_val_b7c10f1d772380f731276dc282927e7b_17', 'fe_last_val_b7c10f1d772380f731276dc282927e7b_17' );
unset( $fe_array_b7c10f1d772380f731276dc282927e7b_17 );
unset( $fe_array_b7c10f1d772380f731276dc282927e7b_17 );
$fe_array_b7c10f1d772380f731276dc282927e7b_17 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'locales', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['locales'] : null;
if (! isset( $fe_array_b7c10f1d772380f731276dc282927e7b_17 ) ) $fe_array_b7c10f1d772380f731276dc282927e7b_17 = NULL;
while ( is_object( $fe_array_b7c10f1d772380f731276dc282927e7b_17 ) and method_exists( $fe_array_b7c10f1d772380f731276dc282927e7b_17, 'templateValue' ) )
    $fe_array_b7c10f1d772380f731276dc282927e7b_17 = $fe_array_b7c10f1d772380f731276dc282927e7b_17->templateValue();

$fe_array_keys_b7c10f1d772380f731276dc282927e7b_17 = is_array( $fe_array_b7c10f1d772380f731276dc282927e7b_17 ) ? array_keys( $fe_array_b7c10f1d772380f731276dc282927e7b_17 ) : array();
$fe_n_items_b7c10f1d772380f731276dc282927e7b_17 = count( $fe_array_keys_b7c10f1d772380f731276dc282927e7b_17 );
$fe_n_items_processed_b7c10f1d772380f731276dc282927e7b_17 = 0;
$fe_offset_b7c10f1d772380f731276dc282927e7b_17 = 0;
$fe_max_b7c10f1d772380f731276dc282927e7b_17 = $fe_n_items_b7c10f1d772380f731276dc282927e7b_17 - $fe_offset_b7c10f1d772380f731276dc282927e7b_17;
$fe_reverse_b7c10f1d772380f731276dc282927e7b_17 = false;
if ( $fe_offset_b7c10f1d772380f731276dc282927e7b_17 < 0 || $fe_offset_b7c10f1d772380f731276dc282927e7b_17 >= $fe_n_items_b7c10f1d772380f731276dc282927e7b_17 )
{
    $fe_offset_b7c10f1d772380f731276dc282927e7b_17 = ( $fe_offset_b7c10f1d772380f731276dc282927e7b_17 < 0 ) ? 0 : $fe_n_items_b7c10f1d772380f731276dc282927e7b_17;
    if ( $fe_n_items_b7c10f1d772380f731276dc282927e7b_17 || $fe_offset_b7c10f1d772380f731276dc282927e7b_17 < 0 )
 {
        eZDebug::writeWarning("Invalid 'offset' parameter specified: '$fe_offset_b7c10f1d772380f731276dc282927e7b_17'. Array count: $fe_n_items_b7c10f1d772380f731276dc282927e7b_17");   
}
}
if ( $fe_max_b7c10f1d772380f731276dc282927e7b_17 < 0 || $fe_offset_b7c10f1d772380f731276dc282927e7b_17 + $fe_max_b7c10f1d772380f731276dc282927e7b_17 > $fe_n_items_b7c10f1d772380f731276dc282927e7b_17 )
{
    if ( $fe_max_b7c10f1d772380f731276dc282927e7b_17 < 0 )
 eZDebug::writeWarning("Invalid 'max' parameter specified: $fe_max_b7c10f1d772380f731276dc282927e7b_17");
    $fe_max_b7c10f1d772380f731276dc282927e7b_17 = $fe_n_items_b7c10f1d772380f731276dc282927e7b_17 - $fe_offset_b7c10f1d772380f731276dc282927e7b_17;
}
if ( $fe_reverse_b7c10f1d772380f731276dc282927e7b_17 )
{
    $fe_first_val_b7c10f1d772380f731276dc282927e7b_17 = $fe_n_items_b7c10f1d772380f731276dc282927e7b_17 - 1 - $fe_offset_b7c10f1d772380f731276dc282927e7b_17;
    $fe_last_val_b7c10f1d772380f731276dc282927e7b_17  = 0;
}
else
{
    $fe_first_val_b7c10f1d772380f731276dc282927e7b_17 = $fe_offset_b7c10f1d772380f731276dc282927e7b_17;
    $fe_last_val_b7c10f1d772380f731276dc282927e7b_17  = $fe_n_items_b7c10f1d772380f731276dc282927e7b_17 - 1;
}
// foreach
for ( $fe_i_b7c10f1d772380f731276dc282927e7b_17 = $fe_first_val_b7c10f1d772380f731276dc282927e7b_17; $fe_n_items_processed_b7c10f1d772380f731276dc282927e7b_17 < $fe_max_b7c10f1d772380f731276dc282927e7b_17 && ( $fe_reverse_b7c10f1d772380f731276dc282927e7b_17 ? $fe_i_b7c10f1d772380f731276dc282927e7b_17 >= $fe_last_val_b7c10f1d772380f731276dc282927e7b_17 : $fe_i_b7c10f1d772380f731276dc282927e7b_17 <= $fe_last_val_b7c10f1d772380f731276dc282927e7b_17 ); $fe_reverse_b7c10f1d772380f731276dc282927e7b_17 ? $fe_i_b7c10f1d772380f731276dc282927e7b_17-- : $fe_i_b7c10f1d772380f731276dc282927e7b_17++ )
{
$fe_key_b7c10f1d772380f731276dc282927e7b_17 = $fe_array_keys_b7c10f1d772380f731276dc282927e7b_17[$fe_i_b7c10f1d772380f731276dc282927e7b_17];
$fe_val_b7c10f1d772380f731276dc282927e7b_17 = $fe_array_b7c10f1d772380f731276dc282927e7b_17[$fe_key_b7c10f1d772380f731276dc282927e7b_17];
$vars[$rootNamespace]['language'] = $fe_val_b7c10f1d772380f731276dc282927e7b_17;
if ( $skipDelimiter )
    $skipDelimiter = false;
else
{ // delimiter begins
$text .= ',';
} // delimiter ends

$text .= '\'';
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'language', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['language'] : null;
$var2 = compiledFetchAttribute( $var1, 'locale_code' );
unset( $var1 );
$var1 = $var2;
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
$var = str_replace( array( "\\", "\"", "'" ),
                                             array( "\\\\", "\\042", "\\047" ) , $var1 ); unset( $var1 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= '\': \'';
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'language', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['language'] : null;
$var2 = compiledFetchAttribute( $var1, 'intl_language_name' );
unset( $var1 );
$var1 = $var2;
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
$var = str_replace( array( "\\", "\"", "'" ),
                                             array( "\\\\", "\\042", "\\047" ) , $var1 ); unset( $var1 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= '\'';
$fe_n_items_processed_b7c10f1d772380f731276dc282927e7b_17++;
} // foreach
$skipDelimiter = false;
if ( count( $fe_variable_stack_b7c10f1d772380f731276dc282927e7b_17 ) ) extract( array_pop( $fe_variable_stack_b7c10f1d772380f731276dc282927e7b_17 ) );

else
{

unset( $fe_array_b7c10f1d772380f731276dc282927e7b_17 );

unset( $fe_array_keys_b7c10f1d772380f731276dc282927e7b_17 );

unset( $fe_n_items_b7c10f1d772380f731276dc282927e7b_17 );

unset( $fe_n_items_processed_b7c10f1d772380f731276dc282927e7b_17 );

unset( $fe_i_b7c10f1d772380f731276dc282927e7b_17 );

unset( $fe_key_b7c10f1d772380f731276dc282927e7b_17 );

unset( $fe_val_b7c10f1d772380f731276dc282927e7b_17 );

unset( $fe_offset_b7c10f1d772380f731276dc282927e7b_17 );

unset( $fe_max_b7c10f1d772380f731276dc282927e7b_17 );

unset( $fe_reverse_b7c10f1d772380f731276dc282927e7b_17 );

unset( $fe_first_val_b7c10f1d772380f731276dc282927e7b_17 );

unset( $fe_last_val_b7c10f1d772380f731276dc282927e7b_17 );

unset( $fe_variable_stack_b7c10f1d772380f731276dc282927e7b_17 );

}

// foreach ends
$text .= '};

var icons = {';
// foreach begins
$skipDelimiter = true;
if ( !isset( $fe_variable_stack_b7c10f1d772380f731276dc282927e7b_18 ) ) $fe_variable_stack_b7c10f1d772380f731276dc282927e7b_18 = array();
$fe_variable_stack_b7c10f1d772380f731276dc282927e7b_18[] = compact( 'fe_array_b7c10f1d772380f731276dc282927e7b_18', 'fe_array_keys_b7c10f1d772380f731276dc282927e7b_18', 'fe_n_items_b7c10f1d772380f731276dc282927e7b_18', 'fe_n_items_processed_b7c10f1d772380f731276dc282927e7b_18', 'fe_i_b7c10f1d772380f731276dc282927e7b_18', 'fe_key_b7c10f1d772380f731276dc282927e7b_18', 'fe_val_b7c10f1d772380f731276dc282927e7b_18', 'fe_offset_b7c10f1d772380f731276dc282927e7b_18', 'fe_max_b7c10f1d772380f731276dc282927e7b_18', 'fe_reverse_b7c10f1d772380f731276dc282927e7b_18', 'fe_first_val_b7c10f1d772380f731276dc282927e7b_18', 'fe_last_val_b7c10f1d772380f731276dc282927e7b_18' );
unset( $fe_array_b7c10f1d772380f731276dc282927e7b_18 );
unset( $fe_array_b7c10f1d772380f731276dc282927e7b_18 );
$fe_array_b7c10f1d772380f731276dc282927e7b_18 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'locales', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['locales'] : null;
if (! isset( $fe_array_b7c10f1d772380f731276dc282927e7b_18 ) ) $fe_array_b7c10f1d772380f731276dc282927e7b_18 = NULL;
while ( is_object( $fe_array_b7c10f1d772380f731276dc282927e7b_18 ) and method_exists( $fe_array_b7c10f1d772380f731276dc282927e7b_18, 'templateValue' ) )
    $fe_array_b7c10f1d772380f731276dc282927e7b_18 = $fe_array_b7c10f1d772380f731276dc282927e7b_18->templateValue();

$fe_array_keys_b7c10f1d772380f731276dc282927e7b_18 = is_array( $fe_array_b7c10f1d772380f731276dc282927e7b_18 ) ? array_keys( $fe_array_b7c10f1d772380f731276dc282927e7b_18 ) : array();
$fe_n_items_b7c10f1d772380f731276dc282927e7b_18 = count( $fe_array_keys_b7c10f1d772380f731276dc282927e7b_18 );
$fe_n_items_processed_b7c10f1d772380f731276dc282927e7b_18 = 0;
$fe_offset_b7c10f1d772380f731276dc282927e7b_18 = 0;
$fe_max_b7c10f1d772380f731276dc282927e7b_18 = $fe_n_items_b7c10f1d772380f731276dc282927e7b_18 - $fe_offset_b7c10f1d772380f731276dc282927e7b_18;
$fe_reverse_b7c10f1d772380f731276dc282927e7b_18 = false;
if ( $fe_offset_b7c10f1d772380f731276dc282927e7b_18 < 0 || $fe_offset_b7c10f1d772380f731276dc282927e7b_18 >= $fe_n_items_b7c10f1d772380f731276dc282927e7b_18 )
{
    $fe_offset_b7c10f1d772380f731276dc282927e7b_18 = ( $fe_offset_b7c10f1d772380f731276dc282927e7b_18 < 0 ) ? 0 : $fe_n_items_b7c10f1d772380f731276dc282927e7b_18;
    if ( $fe_n_items_b7c10f1d772380f731276dc282927e7b_18 || $fe_offset_b7c10f1d772380f731276dc282927e7b_18 < 0 )
 {
        eZDebug::writeWarning("Invalid 'offset' parameter specified: '$fe_offset_b7c10f1d772380f731276dc282927e7b_18'. Array count: $fe_n_items_b7c10f1d772380f731276dc282927e7b_18");   
}
}
if ( $fe_max_b7c10f1d772380f731276dc282927e7b_18 < 0 || $fe_offset_b7c10f1d772380f731276dc282927e7b_18 + $fe_max_b7c10f1d772380f731276dc282927e7b_18 > $fe_n_items_b7c10f1d772380f731276dc282927e7b_18 )
{
    if ( $fe_max_b7c10f1d772380f731276dc282927e7b_18 < 0 )
 eZDebug::writeWarning("Invalid 'max' parameter specified: $fe_max_b7c10f1d772380f731276dc282927e7b_18");
    $fe_max_b7c10f1d772380f731276dc282927e7b_18 = $fe_n_items_b7c10f1d772380f731276dc282927e7b_18 - $fe_offset_b7c10f1d772380f731276dc282927e7b_18;
}
if ( $fe_reverse_b7c10f1d772380f731276dc282927e7b_18 )
{
    $fe_first_val_b7c10f1d772380f731276dc282927e7b_18 = $fe_n_items_b7c10f1d772380f731276dc282927e7b_18 - 1 - $fe_offset_b7c10f1d772380f731276dc282927e7b_18;
    $fe_last_val_b7c10f1d772380f731276dc282927e7b_18  = 0;
}
else
{
    $fe_first_val_b7c10f1d772380f731276dc282927e7b_18 = $fe_offset_b7c10f1d772380f731276dc282927e7b_18;
    $fe_last_val_b7c10f1d772380f731276dc282927e7b_18  = $fe_n_items_b7c10f1d772380f731276dc282927e7b_18 - 1;
}
// foreach
for ( $fe_i_b7c10f1d772380f731276dc282927e7b_18 = $fe_first_val_b7c10f1d772380f731276dc282927e7b_18; $fe_n_items_processed_b7c10f1d772380f731276dc282927e7b_18 < $fe_max_b7c10f1d772380f731276dc282927e7b_18 && ( $fe_reverse_b7c10f1d772380f731276dc282927e7b_18 ? $fe_i_b7c10f1d772380f731276dc282927e7b_18 >= $fe_last_val_b7c10f1d772380f731276dc282927e7b_18 : $fe_i_b7c10f1d772380f731276dc282927e7b_18 <= $fe_last_val_b7c10f1d772380f731276dc282927e7b_18 ); $fe_reverse_b7c10f1d772380f731276dc282927e7b_18 ? $fe_i_b7c10f1d772380f731276dc282927e7b_18-- : $fe_i_b7c10f1d772380f731276dc282927e7b_18++ )
{
$fe_key_b7c10f1d772380f731276dc282927e7b_18 = $fe_array_keys_b7c10f1d772380f731276dc282927e7b_18[$fe_i_b7c10f1d772380f731276dc282927e7b_18];
$fe_val_b7c10f1d772380f731276dc282927e7b_18 = $fe_array_b7c10f1d772380f731276dc282927e7b_18[$fe_key_b7c10f1d772380f731276dc282927e7b_18];
$vars[$rootNamespace]['locale'] = $fe_val_b7c10f1d772380f731276dc282927e7b_18;
if ( $skipDelimiter )
    $skipDelimiter = false;
else
{ // delimiter begins
$text .= ',';
} // delimiter ends

$text .= '\'';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'locale', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['locale'] : null;
$var1 = compiledFetchAttribute( $var, 'locale_code' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '\': \'';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'locale', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['locale'] : null;
$var1 = compiledFetchAttribute( $var, 'locale_code' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$varData = array( 'value' => $var );
$tpl->processOperator( 'flag_icon',
                       array (
),
                       $rootNamespace, $currentNamespace, $varData, false, false );
$var = $varData['value'];
unset( $varData );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '\'';
$fe_n_items_processed_b7c10f1d772380f731276dc282927e7b_18++;
} // foreach
$skipDelimiter = false;
if ( count( $fe_variable_stack_b7c10f1d772380f731276dc282927e7b_18 ) ) extract( array_pop( $fe_variable_stack_b7c10f1d772380f731276dc282927e7b_18 ) );

else
{

unset( $fe_array_b7c10f1d772380f731276dc282927e7b_18 );

unset( $fe_array_keys_b7c10f1d772380f731276dc282927e7b_18 );

unset( $fe_n_items_b7c10f1d772380f731276dc282927e7b_18 );

unset( $fe_n_items_processed_b7c10f1d772380f731276dc282927e7b_18 );

unset( $fe_i_b7c10f1d772380f731276dc282927e7b_18 );

unset( $fe_key_b7c10f1d772380f731276dc282927e7b_18 );

unset( $fe_val_b7c10f1d772380f731276dc282927e7b_18 );

unset( $fe_offset_b7c10f1d772380f731276dc282927e7b_18 );

unset( $fe_max_b7c10f1d772380f731276dc282927e7b_18 );

unset( $fe_reverse_b7c10f1d772380f731276dc282927e7b_18 );

unset( $fe_first_val_b7c10f1d772380f731276dc282927e7b_18 );

unset( $fe_last_val_b7c10f1d772380f731276dc282927e7b_18 );

unset( $fe_variable_stack_b7c10f1d772380f731276dc282927e7b_18 );

}

// foreach ends
$text .= '};

var vcols = {';
// foreach begins
$skipDelimiter = true;
if ( !isset( $fe_variable_stack_b7c10f1d772380f731276dc282927e7b_19 ) ) $fe_variable_stack_b7c10f1d772380f731276dc282927e7b_19 = array();
$fe_variable_stack_b7c10f1d772380f731276dc282927e7b_19[] = compact( 'fe_array_b7c10f1d772380f731276dc282927e7b_19', 'fe_array_keys_b7c10f1d772380f731276dc282927e7b_19', 'fe_n_items_b7c10f1d772380f731276dc282927e7b_19', 'fe_n_items_processed_b7c10f1d772380f731276dc282927e7b_19', 'fe_i_b7c10f1d772380f731276dc282927e7b_19', 'fe_key_b7c10f1d772380f731276dc282927e7b_19', 'fe_val_b7c10f1d772380f731276dc282927e7b_19', 'fe_offset_b7c10f1d772380f731276dc282927e7b_19', 'fe_max_b7c10f1d772380f731276dc282927e7b_19', 'fe_reverse_b7c10f1d772380f731276dc282927e7b_19', 'fe_first_val_b7c10f1d772380f731276dc282927e7b_19', 'fe_last_val_b7c10f1d772380f731276dc282927e7b_19' );
unset( $fe_array_b7c10f1d772380f731276dc282927e7b_19 );
unset( $fe_array_b7c10f1d772380f731276dc282927e7b_19 );
$fe_array_b7c10f1d772380f731276dc282927e7b_19 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'visible_columns', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['visible_columns'] : null;
if (! isset( $fe_array_b7c10f1d772380f731276dc282927e7b_19 ) ) $fe_array_b7c10f1d772380f731276dc282927e7b_19 = NULL;
while ( is_object( $fe_array_b7c10f1d772380f731276dc282927e7b_19 ) and method_exists( $fe_array_b7c10f1d772380f731276dc282927e7b_19, 'templateValue' ) )
    $fe_array_b7c10f1d772380f731276dc282927e7b_19 = $fe_array_b7c10f1d772380f731276dc282927e7b_19->templateValue();

$fe_array_keys_b7c10f1d772380f731276dc282927e7b_19 = is_array( $fe_array_b7c10f1d772380f731276dc282927e7b_19 ) ? array_keys( $fe_array_b7c10f1d772380f731276dc282927e7b_19 ) : array();
$fe_n_items_b7c10f1d772380f731276dc282927e7b_19 = count( $fe_array_keys_b7c10f1d772380f731276dc282927e7b_19 );
$fe_n_items_processed_b7c10f1d772380f731276dc282927e7b_19 = 0;
$fe_offset_b7c10f1d772380f731276dc282927e7b_19 = 0;
$fe_max_b7c10f1d772380f731276dc282927e7b_19 = $fe_n_items_b7c10f1d772380f731276dc282927e7b_19 - $fe_offset_b7c10f1d772380f731276dc282927e7b_19;
$fe_reverse_b7c10f1d772380f731276dc282927e7b_19 = false;
if ( $fe_offset_b7c10f1d772380f731276dc282927e7b_19 < 0 || $fe_offset_b7c10f1d772380f731276dc282927e7b_19 >= $fe_n_items_b7c10f1d772380f731276dc282927e7b_19 )
{
    $fe_offset_b7c10f1d772380f731276dc282927e7b_19 = ( $fe_offset_b7c10f1d772380f731276dc282927e7b_19 < 0 ) ? 0 : $fe_n_items_b7c10f1d772380f731276dc282927e7b_19;
    if ( $fe_n_items_b7c10f1d772380f731276dc282927e7b_19 || $fe_offset_b7c10f1d772380f731276dc282927e7b_19 < 0 )
 {
        eZDebug::writeWarning("Invalid 'offset' parameter specified: '$fe_offset_b7c10f1d772380f731276dc282927e7b_19'. Array count: $fe_n_items_b7c10f1d772380f731276dc282927e7b_19");   
}
}
if ( $fe_max_b7c10f1d772380f731276dc282927e7b_19 < 0 || $fe_offset_b7c10f1d772380f731276dc282927e7b_19 + $fe_max_b7c10f1d772380f731276dc282927e7b_19 > $fe_n_items_b7c10f1d772380f731276dc282927e7b_19 )
{
    if ( $fe_max_b7c10f1d772380f731276dc282927e7b_19 < 0 )
 eZDebug::writeWarning("Invalid 'max' parameter specified: $fe_max_b7c10f1d772380f731276dc282927e7b_19");
    $fe_max_b7c10f1d772380f731276dc282927e7b_19 = $fe_n_items_b7c10f1d772380f731276dc282927e7b_19 - $fe_offset_b7c10f1d772380f731276dc282927e7b_19;
}
if ( $fe_reverse_b7c10f1d772380f731276dc282927e7b_19 )
{
    $fe_first_val_b7c10f1d772380f731276dc282927e7b_19 = $fe_n_items_b7c10f1d772380f731276dc282927e7b_19 - 1 - $fe_offset_b7c10f1d772380f731276dc282927e7b_19;
    $fe_last_val_b7c10f1d772380f731276dc282927e7b_19  = 0;
}
else
{
    $fe_first_val_b7c10f1d772380f731276dc282927e7b_19 = $fe_offset_b7c10f1d772380f731276dc282927e7b_19;
    $fe_last_val_b7c10f1d772380f731276dc282927e7b_19  = $fe_n_items_b7c10f1d772380f731276dc282927e7b_19 - 1;
}
// foreach
for ( $fe_i_b7c10f1d772380f731276dc282927e7b_19 = $fe_first_val_b7c10f1d772380f731276dc282927e7b_19; $fe_n_items_processed_b7c10f1d772380f731276dc282927e7b_19 < $fe_max_b7c10f1d772380f731276dc282927e7b_19 && ( $fe_reverse_b7c10f1d772380f731276dc282927e7b_19 ? $fe_i_b7c10f1d772380f731276dc282927e7b_19 >= $fe_last_val_b7c10f1d772380f731276dc282927e7b_19 : $fe_i_b7c10f1d772380f731276dc282927e7b_19 <= $fe_last_val_b7c10f1d772380f731276dc282927e7b_19 ); $fe_reverse_b7c10f1d772380f731276dc282927e7b_19 ? $fe_i_b7c10f1d772380f731276dc282927e7b_19-- : $fe_i_b7c10f1d772380f731276dc282927e7b_19++ )
{
$fe_key_b7c10f1d772380f731276dc282927e7b_19 = $fe_array_keys_b7c10f1d772380f731276dc282927e7b_19[$fe_i_b7c10f1d772380f731276dc282927e7b_19];
$fe_val_b7c10f1d772380f731276dc282927e7b_19 = $fe_array_b7c10f1d772380f731276dc282927e7b_19[$fe_key_b7c10f1d772380f731276dc282927e7b_19];
$vars[$rootNamespace]['object'] = $fe_val_b7c10f1d772380f731276dc282927e7b_19;
$vars[$rootNamespace]['index'] = $fe_key_b7c10f1d772380f731276dc282927e7b_19;
if ( $skipDelimiter )
    $skipDelimiter = false;
else
{ // delimiter begins
$text .= ',
';
} // delimiter ends

$text .= '    ';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'index', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['index'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= ' : \'';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'object', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['object'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '\'.split(\';\')';
$fe_n_items_processed_b7c10f1d772380f731276dc282927e7b_19++;
} // foreach
$skipDelimiter = false;
if ( count( $fe_variable_stack_b7c10f1d772380f731276dc282927e7b_19 ) ) extract( array_pop( $fe_variable_stack_b7c10f1d772380f731276dc282927e7b_19 ) );

else
{

unset( $fe_array_b7c10f1d772380f731276dc282927e7b_19 );

unset( $fe_array_keys_b7c10f1d772380f731276dc282927e7b_19 );

unset( $fe_n_items_b7c10f1d772380f731276dc282927e7b_19 );

unset( $fe_n_items_processed_b7c10f1d772380f731276dc282927e7b_19 );

unset( $fe_i_b7c10f1d772380f731276dc282927e7b_19 );

unset( $fe_key_b7c10f1d772380f731276dc282927e7b_19 );

unset( $fe_val_b7c10f1d772380f731276dc282927e7b_19 );

unset( $fe_offset_b7c10f1d772380f731276dc282927e7b_19 );

unset( $fe_max_b7c10f1d772380f731276dc282927e7b_19 );

unset( $fe_reverse_b7c10f1d772380f731276dc282927e7b_19 );

unset( $fe_first_val_b7c10f1d772380f731276dc282927e7b_19 );

unset( $fe_last_val_b7c10f1d772380f731276dc282927e7b_19 );

unset( $fe_variable_stack_b7c10f1d772380f731276dc282927e7b_19 );

}

// foreach ends
$text .= '};

var confObj = {
';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'node', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['node'] : null;
$var1 = compiledFetchAttribute( $var, 'sort_field' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$vars[$currentNamespace]['match'] = $var;
unset( $var );
unset( $match );
unset( $match );
$match = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'node', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['node'] : null;
$match1 = compiledFetchAttribute( $match, 'sort_field' );
unset( $match );
$match = $match1;
if (! isset( $match ) ) $match = NULL;
while ( is_object( $match ) and method_exists( $match, 'templateValue' ) )
    $match = $match->templateValue();

switch ( $match )
{
    case "2":
    {
$text .= '    sortKey: "published_date",';
    } break;
    case "3":
    {
$text .= '    sortKey: "modified_date",';
    } break;
    case "4":
    {
$text .= '    sortKey: "section",';
    } break;
    case "7":
    {
$text .= '    sortKey: "class_name",';
    } break;
    case "8":
    {
$text .= '    sortKey: "priority",';
    } break;
    case "9":
    {
$text .= '    sortKey: "name",';
    } break;
    default:
    {
$text .= '    sortKey: "published_date",';
    } break;
}
unset( $match );

unset( $vars[$currentNamespace]['match'] );
$text .= '
    dataSourceURL: "';
unset( $var );
unset( $var1 );
unset( $var3 );
unset( $var3 );
$var3 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'node', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['node'] : null;
$var4 = compiledFetchAttribute( $var3, 'node_id' );
unset( $var3 );
$var3 = $var4;
if (! isset( $var3 ) ) $var3 = NULL;
while ( is_object( $var3 ) and method_exists( $var3, 'templateValue' ) )
    $var3 = $var3->templateValue();
while ( is_object( $var3 ) and method_exists( $var3, 'templateValue' ) )
    $var3 = $var3->templateValue();
$var1 = ( 'ezjscore/call/ezjscnode::subtree::' . $var3 );
unset( $var3 );
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();

eZURI::transformURI( $var1, false, eZURI::getTransformURIMode() );
$var = $var1;
unset( $var1 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= '",
    editPrefixURL: "/ezpublish/app/ezpublish_legacy/index.php/ezwebin_site_admin/content/edit",
    rowsPrPage: ';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'number_of_items', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['number_of_items'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= ',
    sortOrder: ';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'node', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['node'] : null;
$var1 = compiledFetchAttribute( $var, 'sort_order' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= ',
    nameFilter: \'';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'view_parameters', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['view_parameters'] : null;
$var1 = compiledFetchAttribute( $var, 'namefilter' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '\',
    defaultShownColumns: vcols,
    navigationPart: "';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'section', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['section'] : null;
$var1 = compiledFetchAttribute( $var, 'navigation_part_identifier' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '",
    cookieName: "eZSubitemColumns",
    cookieSecure: false,
    cookieDomain: "localhost",
    languages: availableLanguages,
    classesString: ';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'node', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['node'] : null;
$var1 = compiledFetchAttribute( $var, 'classes_js_array' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= ',
    flagIcons: icons
}

var labelsObj = {

    DATA_TABLE: {
                        msg_loading: "';
unset( $var );
$var = 'Chargement ...' ;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= '"
                    },

    DATA_TABLE_COLS: {
                        thumbnail: "';
unset( $var );
$var = 'Miniature' ;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= '",
                        name: "';
unset( $var );
$var = 'Nom' ;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= '",
                        visibility: "';
unset( $var );
$var = 'Visibilité' ;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= '",
                        type: "';
unset( $var );
$var = 'Type' ;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= '",
                        modifier: "';
unset( $var );
$var = 'Modificateur' ;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= '",
                        modified: "';
unset( $var );
$var = 'Modifié' ;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= '",
                        published: "';
unset( $var );
$var = 'Publié' ;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= '",
                        section: "';
unset( $var );
$var = 'Section' ;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= '",
                        translations: "';
unset( $var );
$var = 'Traductions' ;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= '",
                        priority: "';
unset( $var );
$var = 'Priorité' ;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= '",
                        nodeid: "';
unset( $var );
$var = 'ID du Nœud ' ;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= '",
                        objectid: "';
unset( $var );
$var = 'ID de l\\047objet ' ;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= '",
                        noderemoteid: "';
unset( $var );
$var = 'ID externe du nœud' ;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= '",
                        objectremoteid: "';
unset( $var );
$var = 'ID externe de l\\047objet' ;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= '",
                        objectstate: "';
unset( $var );
$var = 'État d\\047objet' ;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= '"
                    },

    TABLE_OPTIONS: {
                        header: "';
unset( $var );
$var = 'Options du tableau' ;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= '",
                        header_noipp: "';
unset( $var );
$var = 'Nombre d\\047éléments par page :' ;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= '",
                        header_vtc: "';
unset( $var );
$var = 'Colonnes visibles :' ;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= '",
                        button_close: "';
unset( $var );
$var = 'Fermer' ;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= '"
                   },

    ACTION_BUTTONS: {
                        select: "';
unset( $var );
$var = 'Sélectionner' ;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= '",
                        select_sav: "';
unset( $var );
$var = 'Sélectionner tous les éléments visibles' ;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= '",
                        select_sn: "';
unset( $var );
$var = 'Tout désélectionner' ;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= '",
                        select_inv: "';
unset( $var );
$var = 'Inverser la sélection' ;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= '",
                        create_new: "';
unset( $var );
$var = 'Créer un nouvel élément' ;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= '",
                        more_actions: "';
unset( $var );
$var = 'Plus d\\047actions' ;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= '",
                        more_actions_rs: "';
unset( $var );
$var = 'Supprimer la sélection' ;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= '",
                        more_actions_ms: "';
unset( $var );
$var = 'Déplacer la sélection' ;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= '",
                        more_actions_no: "';
unset( $var );
$var = 'Utilisez les cases à cocher pour sélectionner un ou plusieurs éléments.' ;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= '",
                        table_options: "';
unset( $var );
$var = 'Options du tableau' ;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= '",
                        first_page: "&laquo;&nbsp;';
unset( $var );
$var = 'premier' ;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= '",
                        previous_page: "&lsaquo;&nbsp;';
unset( $var );
$var = 'précédent' ;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= '",
                        next_page: "';
unset( $var );
$var = 'suivant' ;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= '&nbsp;&rsaquo;",
                        last_page: "';
unset( $var );
$var = 'dernier' ;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= '&nbsp;&raquo;"
                    }
};
';
// if begins
unset( $if_cond );
unset( $if_cond1 );
unset( $if_cond1 );
$if_cond1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'node', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['node'] : null;
$if_cond2 = compiledFetchAttribute( $if_cond1, 'is_container' );
unset( $if_cond1 );
$if_cond1 = $if_cond2;
if (! isset( $if_cond1 ) ) $if_cond1 = NULL;
while ( is_object( $if_cond1 ) and method_exists( $if_cond1, 'templateValue' ) )
    $if_cond1 = $if_cond1->templateValue();
unset( $if_cond2 );
unset( $if_cond2 );
$if_cond2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'node', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['node'] : null;
$if_cond3 = compiledFetchAttribute( $if_cond2, 'can_create' );
unset( $if_cond2 );
$if_cond2 = $if_cond3;
if (! isset( $if_cond2 ) ) $if_cond2 = NULL;
while ( is_object( $if_cond2 ) and method_exists( $if_cond2, 'templateValue' ) )
    $if_cond2 = $if_cond2->templateValue();
if ( !$if_cond1 )
    $if_cond = false;
else if ( !$if_cond2 )
    $if_cond = false;
else
    $if_cond = $if_cond2;
unset( $if_cond1, $if_cond2 );
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '    ';
unset( $elseif_cond_b7c10f1d772380f731276dc282927e7b_114 );
unset( $elseif_cond_b7c10f1d772380f731276dc282927e7b_1141 );
unset( $elseif_cond_b7c10f1d772380f731276dc282927e7b_1141 );
$elseif_cond_b7c10f1d772380f731276dc282927e7b_1141 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'node', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['node'] : null;
$elseif_cond_b7c10f1d772380f731276dc282927e7b_1142 = compiledFetchAttribute( $elseif_cond_b7c10f1d772380f731276dc282927e7b_1141, 'path_array' );
unset( $elseif_cond_b7c10f1d772380f731276dc282927e7b_1141 );
$elseif_cond_b7c10f1d772380f731276dc282927e7b_1141 = $elseif_cond_b7c10f1d772380f731276dc282927e7b_1142;
if (! isset( $elseif_cond_b7c10f1d772380f731276dc282927e7b_1141 ) ) $elseif_cond_b7c10f1d772380f731276dc282927e7b_1141 = NULL;
while ( is_object( $elseif_cond_b7c10f1d772380f731276dc282927e7b_1141 ) and method_exists( $elseif_cond_b7c10f1d772380f731276dc282927e7b_1141, 'templateValue' ) )
    $elseif_cond_b7c10f1d772380f731276dc282927e7b_1141 = $elseif_cond_b7c10f1d772380f731276dc282927e7b_1141->templateValue();
while ( is_object( $elseif_cond_b7c10f1d772380f731276dc282927e7b_1141 ) and method_exists( $elseif_cond_b7c10f1d772380f731276dc282927e7b_1141, 'templateValue' ) )
    $elseif_cond_b7c10f1d772380f731276dc282927e7b_1141 = $elseif_cond_b7c10f1d772380f731276dc282927e7b_1141->templateValue();
if( is_string( $elseif_cond_b7c10f1d772380f731276dc282927e7b_1141 ) )
{
  $elseif_cond_b7c10f1d772380f731276dc282927e7b_114 = ( strpos( $elseif_cond_b7c10f1d772380f731276dc282927e7b_1141, "5" ) !== false );
}
else if ( is_array( $elseif_cond_b7c10f1d772380f731276dc282927e7b_1141 ) )
{
  $elseif_cond_b7c10f1d772380f731276dc282927e7b_114 = in_array( "5", $elseif_cond_b7c10f1d772380f731276dc282927e7b_1141 );
}
else
{
$elseif_cond_b7c10f1d772380f731276dc282927e7b_114 = false;
}unset( $elseif_cond_b7c10f1d772380f731276dc282927e7b_1141 );
if (! isset( $elseif_cond_b7c10f1d772380f731276dc282927e7b_114 ) ) $elseif_cond_b7c10f1d772380f731276dc282927e7b_114 = NULL;
while ( is_object( $elseif_cond_b7c10f1d772380f731276dc282927e7b_114 ) and method_exists( $elseif_cond_b7c10f1d772380f731276dc282927e7b_114, 'templateValue' ) )
    $elseif_cond_b7c10f1d772380f731276dc282927e7b_114 = $elseif_cond_b7c10f1d772380f731276dc282927e7b_114->templateValue();

// if begins
unset( $if_cond );
unset( $if_cond1 );
unset( $if_cond1 );
$if_cond1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'node', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['node'] : null;
$if_cond2 = compiledFetchAttribute( $if_cond1, 'path_array' );
unset( $if_cond1 );
$if_cond1 = $if_cond2;
if (! isset( $if_cond1 ) ) $if_cond1 = NULL;
while ( is_object( $if_cond1 ) and method_exists( $if_cond1, 'templateValue' ) )
    $if_cond1 = $if_cond1->templateValue();
if( is_string( $if_cond1 ) )
{
  $if_cond = ( strpos( $if_cond1, "43" ) !== false );
}
else if ( is_array( $if_cond1 ) )
{
  $if_cond = in_array( "43", $if_cond1 );
}
else
{
$if_cond = false;
}unset( $if_cond1 );
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '        ';
// def $group_id
if ( $tpl->hasVariable( 'group_id', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'group_id' is already defined.", array (
  0 => 
  array (
    0 => 122,
    1 => 8,
    2 => 6203,
  ),
  1 => 
  array (
    0 => 123,
    1 => 82,
    2 => 6358,
  ),
  2 => 'design/admin/templates/children_detailed.tpl',
) );
    $tpl->setVariable( 'group_id', array (
  0 => '2',
  1 => '4',
), $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'group_id', array (
  0 => '2',
  1 => '4',
), $rootNamespace );
}

$text .= '    ';
}
elseif ( $elseif_cond_b7c10f1d772380f731276dc282927e7b_114 )
{
$text .= '        ';
// def $group_id
if ( $tpl->hasVariable( 'group_id', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'group_id' is already defined.", array (
  0 => 
  array (
    0 => 125,
    1 => 8,
    2 => 6466,
  ),
  1 => 
  array (
    0 => 127,
    1 => 82,
    2 => 6705,
  ),
  2 => 'design/admin/templates/children_detailed.tpl',
) );
    $tpl->setVariable( 'group_id', array (
  0 => '4',
  1 => '1',
  2 => '3',
), $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'group_id', array (
  0 => '4',
  1 => '1',
  2 => '3',
), $rootNamespace );
}

$text .= '    ';
}
else
{
$text .= '        ';
// def $group_id
if ( $tpl->hasVariable( 'group_id', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'group_id' is already defined.", array (
  0 => 
  array (
    0 => 129,
    1 => 8,
    2 => 6727,
  ),
  1 => 
  array (
    0 => 129,
    1 => 31,
    2 => 6750,
  ),
  2 => 'design/admin/templates/children_detailed.tpl',
) );
    $tpl->setVariable( 'group_id', false, $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'group_id', false, $rootNamespace );
}

$text .= '    ';
}
unset( $if_cond );
// if ends

unset( $elseif_cond_b7c10f1d772380f731276dc282927e7b_114 );

$text .= '
    ';
// def $can_create_classes
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'group_id', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['group_id'] : null;
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
unset( $var2 );
unset( $var2 );
$var2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'node', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['node'] : null;
if (! isset( $var2 ) ) $var2 = NULL;
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
$var = call_user_func_array( array( new eZContentFunctionCollection(), 'canInstantiateClassList' ),
  array(     'group_id' => $var1,
    'parent_node' => $var2,
    'filter_type' => "exclude",
    'fetch_id' => false,
    'as_object' => true,
    'group_by_class_group' => true ) );
$var = isset( $var['result'] ) ? $var['result'] : null;
unset( $var1, $var2 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( $tpl->hasVariable( 'can_create_classes', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'can_create_classes' is already defined.", array (
  0 => 
  array (
    0 => 132,
    1 => 4,
    2 => 6768,
  ),
  1 => 
  array (
    0 => 135,
    1 => 119,
    2 => 7208,
  ),
  2 => 'design/admin/templates/children_detailed.tpl',
) );
    $tpl->setVariable( 'can_create_classes', $var, $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'can_create_classes', $var, $rootNamespace );
}

$text .= '
    var createGroups = [

    ';
// foreach begins
$skipDelimiter = true;
if ( !isset( $fe_variable_stack_b7c10f1d772380f731276dc282927e7b_20 ) ) $fe_variable_stack_b7c10f1d772380f731276dc282927e7b_20 = array();
$fe_variable_stack_b7c10f1d772380f731276dc282927e7b_20[] = compact( 'fe_array_b7c10f1d772380f731276dc282927e7b_20', 'fe_array_keys_b7c10f1d772380f731276dc282927e7b_20', 'fe_n_items_b7c10f1d772380f731276dc282927e7b_20', 'fe_n_items_processed_b7c10f1d772380f731276dc282927e7b_20', 'fe_i_b7c10f1d772380f731276dc282927e7b_20', 'fe_key_b7c10f1d772380f731276dc282927e7b_20', 'fe_val_b7c10f1d772380f731276dc282927e7b_20', 'fe_offset_b7c10f1d772380f731276dc282927e7b_20', 'fe_max_b7c10f1d772380f731276dc282927e7b_20', 'fe_reverse_b7c10f1d772380f731276dc282927e7b_20', 'fe_first_val_b7c10f1d772380f731276dc282927e7b_20', 'fe_last_val_b7c10f1d772380f731276dc282927e7b_20' );
unset( $fe_array_b7c10f1d772380f731276dc282927e7b_20 );
unset( $fe_array_b7c10f1d772380f731276dc282927e7b_20 );
$fe_array_b7c10f1d772380f731276dc282927e7b_20 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'can_create_classes', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['can_create_classes'] : null;
if (! isset( $fe_array_b7c10f1d772380f731276dc282927e7b_20 ) ) $fe_array_b7c10f1d772380f731276dc282927e7b_20 = NULL;
while ( is_object( $fe_array_b7c10f1d772380f731276dc282927e7b_20 ) and method_exists( $fe_array_b7c10f1d772380f731276dc282927e7b_20, 'templateValue' ) )
    $fe_array_b7c10f1d772380f731276dc282927e7b_20 = $fe_array_b7c10f1d772380f731276dc282927e7b_20->templateValue();

$fe_array_keys_b7c10f1d772380f731276dc282927e7b_20 = is_array( $fe_array_b7c10f1d772380f731276dc282927e7b_20 ) ? array_keys( $fe_array_b7c10f1d772380f731276dc282927e7b_20 ) : array();
$fe_n_items_b7c10f1d772380f731276dc282927e7b_20 = count( $fe_array_keys_b7c10f1d772380f731276dc282927e7b_20 );
$fe_n_items_processed_b7c10f1d772380f731276dc282927e7b_20 = 0;
$fe_offset_b7c10f1d772380f731276dc282927e7b_20 = 0;
$fe_max_b7c10f1d772380f731276dc282927e7b_20 = $fe_n_items_b7c10f1d772380f731276dc282927e7b_20 - $fe_offset_b7c10f1d772380f731276dc282927e7b_20;
$fe_reverse_b7c10f1d772380f731276dc282927e7b_20 = false;
if ( $fe_offset_b7c10f1d772380f731276dc282927e7b_20 < 0 || $fe_offset_b7c10f1d772380f731276dc282927e7b_20 >= $fe_n_items_b7c10f1d772380f731276dc282927e7b_20 )
{
    $fe_offset_b7c10f1d772380f731276dc282927e7b_20 = ( $fe_offset_b7c10f1d772380f731276dc282927e7b_20 < 0 ) ? 0 : $fe_n_items_b7c10f1d772380f731276dc282927e7b_20;
    if ( $fe_n_items_b7c10f1d772380f731276dc282927e7b_20 || $fe_offset_b7c10f1d772380f731276dc282927e7b_20 < 0 )
 {
        eZDebug::writeWarning("Invalid 'offset' parameter specified: '$fe_offset_b7c10f1d772380f731276dc282927e7b_20'. Array count: $fe_n_items_b7c10f1d772380f731276dc282927e7b_20");   
}
}
if ( $fe_max_b7c10f1d772380f731276dc282927e7b_20 < 0 || $fe_offset_b7c10f1d772380f731276dc282927e7b_20 + $fe_max_b7c10f1d772380f731276dc282927e7b_20 > $fe_n_items_b7c10f1d772380f731276dc282927e7b_20 )
{
    if ( $fe_max_b7c10f1d772380f731276dc282927e7b_20 < 0 )
 eZDebug::writeWarning("Invalid 'max' parameter specified: $fe_max_b7c10f1d772380f731276dc282927e7b_20");
    $fe_max_b7c10f1d772380f731276dc282927e7b_20 = $fe_n_items_b7c10f1d772380f731276dc282927e7b_20 - $fe_offset_b7c10f1d772380f731276dc282927e7b_20;
}
if ( $fe_reverse_b7c10f1d772380f731276dc282927e7b_20 )
{
    $fe_first_val_b7c10f1d772380f731276dc282927e7b_20 = $fe_n_items_b7c10f1d772380f731276dc282927e7b_20 - 1 - $fe_offset_b7c10f1d772380f731276dc282927e7b_20;
    $fe_last_val_b7c10f1d772380f731276dc282927e7b_20  = 0;
}
else
{
    $fe_first_val_b7c10f1d772380f731276dc282927e7b_20 = $fe_offset_b7c10f1d772380f731276dc282927e7b_20;
    $fe_last_val_b7c10f1d772380f731276dc282927e7b_20  = $fe_n_items_b7c10f1d772380f731276dc282927e7b_20 - 1;
}
// foreach
for ( $fe_i_b7c10f1d772380f731276dc282927e7b_20 = $fe_first_val_b7c10f1d772380f731276dc282927e7b_20; $fe_n_items_processed_b7c10f1d772380f731276dc282927e7b_20 < $fe_max_b7c10f1d772380f731276dc282927e7b_20 && ( $fe_reverse_b7c10f1d772380f731276dc282927e7b_20 ? $fe_i_b7c10f1d772380f731276dc282927e7b_20 >= $fe_last_val_b7c10f1d772380f731276dc282927e7b_20 : $fe_i_b7c10f1d772380f731276dc282927e7b_20 <= $fe_last_val_b7c10f1d772380f731276dc282927e7b_20 ); $fe_reverse_b7c10f1d772380f731276dc282927e7b_20 ? $fe_i_b7c10f1d772380f731276dc282927e7b_20-- : $fe_i_b7c10f1d772380f731276dc282927e7b_20++ )
{
$fe_key_b7c10f1d772380f731276dc282927e7b_20 = $fe_array_keys_b7c10f1d772380f731276dc282927e7b_20[$fe_i_b7c10f1d772380f731276dc282927e7b_20];
$fe_val_b7c10f1d772380f731276dc282927e7b_20 = $fe_array_b7c10f1d772380f731276dc282927e7b_20[$fe_key_b7c10f1d772380f731276dc282927e7b_20];
$vars[$rootNamespace]['group'] = $fe_val_b7c10f1d772380f731276dc282927e7b_20;
if ( $skipDelimiter )
    $skipDelimiter = false;
else
{ // delimiter begins
$text .= '        ,
        ';
} // delimiter ends

$text .= '        "';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'group', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['group'] : null;
$var1 = compiledFetchAttribute( $var, 'group_name' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '"
            ';
$fe_n_items_processed_b7c10f1d772380f731276dc282927e7b_20++;
} // foreach
$skipDelimiter = false;
if ( count( $fe_variable_stack_b7c10f1d772380f731276dc282927e7b_20 ) ) extract( array_pop( $fe_variable_stack_b7c10f1d772380f731276dc282927e7b_20 ) );

else
{

unset( $fe_array_b7c10f1d772380f731276dc282927e7b_20 );

unset( $fe_array_keys_b7c10f1d772380f731276dc282927e7b_20 );

unset( $fe_n_items_b7c10f1d772380f731276dc282927e7b_20 );

unset( $fe_n_items_processed_b7c10f1d772380f731276dc282927e7b_20 );

unset( $fe_i_b7c10f1d772380f731276dc282927e7b_20 );

unset( $fe_key_b7c10f1d772380f731276dc282927e7b_20 );

unset( $fe_val_b7c10f1d772380f731276dc282927e7b_20 );

unset( $fe_offset_b7c10f1d772380f731276dc282927e7b_20 );

unset( $fe_max_b7c10f1d772380f731276dc282927e7b_20 );

unset( $fe_reverse_b7c10f1d772380f731276dc282927e7b_20 );

unset( $fe_first_val_b7c10f1d772380f731276dc282927e7b_20 );

unset( $fe_last_val_b7c10f1d772380f731276dc282927e7b_20 );

unset( $fe_variable_stack_b7c10f1d772380f731276dc282927e7b_20 );

}

// foreach ends
$text .= '
    ];

    var createOptions = [

    ';
// foreach begins
$skipDelimiter = true;
if ( !isset( $fe_variable_stack_b7c10f1d772380f731276dc282927e7b_22 ) ) $fe_variable_stack_b7c10f1d772380f731276dc282927e7b_22 = array();
$fe_variable_stack_b7c10f1d772380f731276dc282927e7b_22[] = compact( 'fe_array_b7c10f1d772380f731276dc282927e7b_22', 'fe_array_keys_b7c10f1d772380f731276dc282927e7b_22', 'fe_n_items_b7c10f1d772380f731276dc282927e7b_22', 'fe_n_items_processed_b7c10f1d772380f731276dc282927e7b_22', 'fe_i_b7c10f1d772380f731276dc282927e7b_22', 'fe_key_b7c10f1d772380f731276dc282927e7b_22', 'fe_val_b7c10f1d772380f731276dc282927e7b_22', 'fe_offset_b7c10f1d772380f731276dc282927e7b_22', 'fe_max_b7c10f1d772380f731276dc282927e7b_22', 'fe_reverse_b7c10f1d772380f731276dc282927e7b_22', 'fe_first_val_b7c10f1d772380f731276dc282927e7b_22', 'fe_last_val_b7c10f1d772380f731276dc282927e7b_22' );
unset( $fe_array_b7c10f1d772380f731276dc282927e7b_22 );
unset( $fe_array_b7c10f1d772380f731276dc282927e7b_22 );
$fe_array_b7c10f1d772380f731276dc282927e7b_22 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'can_create_classes', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['can_create_classes'] : null;
if (! isset( $fe_array_b7c10f1d772380f731276dc282927e7b_22 ) ) $fe_array_b7c10f1d772380f731276dc282927e7b_22 = NULL;
while ( is_object( $fe_array_b7c10f1d772380f731276dc282927e7b_22 ) and method_exists( $fe_array_b7c10f1d772380f731276dc282927e7b_22, 'templateValue' ) )
    $fe_array_b7c10f1d772380f731276dc282927e7b_22 = $fe_array_b7c10f1d772380f731276dc282927e7b_22->templateValue();

$fe_array_keys_b7c10f1d772380f731276dc282927e7b_22 = is_array( $fe_array_b7c10f1d772380f731276dc282927e7b_22 ) ? array_keys( $fe_array_b7c10f1d772380f731276dc282927e7b_22 ) : array();
$fe_n_items_b7c10f1d772380f731276dc282927e7b_22 = count( $fe_array_keys_b7c10f1d772380f731276dc282927e7b_22 );
$fe_n_items_processed_b7c10f1d772380f731276dc282927e7b_22 = 0;
$fe_offset_b7c10f1d772380f731276dc282927e7b_22 = 0;
$fe_max_b7c10f1d772380f731276dc282927e7b_22 = $fe_n_items_b7c10f1d772380f731276dc282927e7b_22 - $fe_offset_b7c10f1d772380f731276dc282927e7b_22;
$fe_reverse_b7c10f1d772380f731276dc282927e7b_22 = false;
if ( $fe_offset_b7c10f1d772380f731276dc282927e7b_22 < 0 || $fe_offset_b7c10f1d772380f731276dc282927e7b_22 >= $fe_n_items_b7c10f1d772380f731276dc282927e7b_22 )
{
    $fe_offset_b7c10f1d772380f731276dc282927e7b_22 = ( $fe_offset_b7c10f1d772380f731276dc282927e7b_22 < 0 ) ? 0 : $fe_n_items_b7c10f1d772380f731276dc282927e7b_22;
    if ( $fe_n_items_b7c10f1d772380f731276dc282927e7b_22 || $fe_offset_b7c10f1d772380f731276dc282927e7b_22 < 0 )
 {
        eZDebug::writeWarning("Invalid 'offset' parameter specified: '$fe_offset_b7c10f1d772380f731276dc282927e7b_22'. Array count: $fe_n_items_b7c10f1d772380f731276dc282927e7b_22");   
}
}
if ( $fe_max_b7c10f1d772380f731276dc282927e7b_22 < 0 || $fe_offset_b7c10f1d772380f731276dc282927e7b_22 + $fe_max_b7c10f1d772380f731276dc282927e7b_22 > $fe_n_items_b7c10f1d772380f731276dc282927e7b_22 )
{
    if ( $fe_max_b7c10f1d772380f731276dc282927e7b_22 < 0 )
 eZDebug::writeWarning("Invalid 'max' parameter specified: $fe_max_b7c10f1d772380f731276dc282927e7b_22");
    $fe_max_b7c10f1d772380f731276dc282927e7b_22 = $fe_n_items_b7c10f1d772380f731276dc282927e7b_22 - $fe_offset_b7c10f1d772380f731276dc282927e7b_22;
}
if ( $fe_reverse_b7c10f1d772380f731276dc282927e7b_22 )
{
    $fe_first_val_b7c10f1d772380f731276dc282927e7b_22 = $fe_n_items_b7c10f1d772380f731276dc282927e7b_22 - 1 - $fe_offset_b7c10f1d772380f731276dc282927e7b_22;
    $fe_last_val_b7c10f1d772380f731276dc282927e7b_22  = 0;
}
else
{
    $fe_first_val_b7c10f1d772380f731276dc282927e7b_22 = $fe_offset_b7c10f1d772380f731276dc282927e7b_22;
    $fe_last_val_b7c10f1d772380f731276dc282927e7b_22  = $fe_n_items_b7c10f1d772380f731276dc282927e7b_22 - 1;
}
// foreach
for ( $fe_i_b7c10f1d772380f731276dc282927e7b_22 = $fe_first_val_b7c10f1d772380f731276dc282927e7b_22; $fe_n_items_processed_b7c10f1d772380f731276dc282927e7b_22 < $fe_max_b7c10f1d772380f731276dc282927e7b_22 && ( $fe_reverse_b7c10f1d772380f731276dc282927e7b_22 ? $fe_i_b7c10f1d772380f731276dc282927e7b_22 >= $fe_last_val_b7c10f1d772380f731276dc282927e7b_22 : $fe_i_b7c10f1d772380f731276dc282927e7b_22 <= $fe_last_val_b7c10f1d772380f731276dc282927e7b_22 ); $fe_reverse_b7c10f1d772380f731276dc282927e7b_22 ? $fe_i_b7c10f1d772380f731276dc282927e7b_22-- : $fe_i_b7c10f1d772380f731276dc282927e7b_22++ )
{
$fe_key_b7c10f1d772380f731276dc282927e7b_22 = $fe_array_keys_b7c10f1d772380f731276dc282927e7b_22[$fe_i_b7c10f1d772380f731276dc282927e7b_22];
$fe_val_b7c10f1d772380f731276dc282927e7b_22 = $fe_array_b7c10f1d772380f731276dc282927e7b_22[$fe_key_b7c10f1d772380f731276dc282927e7b_22];
$vars[$rootNamespace]['group'] = $fe_val_b7c10f1d772380f731276dc282927e7b_22;
if ( $skipDelimiter )
    $skipDelimiter = false;
else
{ // delimiter begins
$text .= '        ,
        ';
} // delimiter ends

$text .= '        [
        ';
// foreach begins
$skipDelimiter = true;
if ( !isset( $fe_variable_stack_b7c10f1d772380f731276dc282927e7b_21 ) ) $fe_variable_stack_b7c10f1d772380f731276dc282927e7b_21 = array();
$fe_variable_stack_b7c10f1d772380f731276dc282927e7b_21[] = compact( 'fe_array_b7c10f1d772380f731276dc282927e7b_21', 'fe_array_keys_b7c10f1d772380f731276dc282927e7b_21', 'fe_n_items_b7c10f1d772380f731276dc282927e7b_21', 'fe_n_items_processed_b7c10f1d772380f731276dc282927e7b_21', 'fe_i_b7c10f1d772380f731276dc282927e7b_21', 'fe_key_b7c10f1d772380f731276dc282927e7b_21', 'fe_val_b7c10f1d772380f731276dc282927e7b_21', 'fe_offset_b7c10f1d772380f731276dc282927e7b_21', 'fe_max_b7c10f1d772380f731276dc282927e7b_21', 'fe_reverse_b7c10f1d772380f731276dc282927e7b_21', 'fe_first_val_b7c10f1d772380f731276dc282927e7b_21', 'fe_last_val_b7c10f1d772380f731276dc282927e7b_21' );
unset( $fe_array_b7c10f1d772380f731276dc282927e7b_21 );
unset( $fe_array_b7c10f1d772380f731276dc282927e7b_21 );
$fe_array_b7c10f1d772380f731276dc282927e7b_21 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'group', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['group'] : null;
$fe_array_b7c10f1d772380f731276dc282927e7b_211 = compiledFetchAttribute( $fe_array_b7c10f1d772380f731276dc282927e7b_21, 'items' );
unset( $fe_array_b7c10f1d772380f731276dc282927e7b_21 );
$fe_array_b7c10f1d772380f731276dc282927e7b_21 = $fe_array_b7c10f1d772380f731276dc282927e7b_211;
if (! isset( $fe_array_b7c10f1d772380f731276dc282927e7b_21 ) ) $fe_array_b7c10f1d772380f731276dc282927e7b_21 = NULL;
while ( is_object( $fe_array_b7c10f1d772380f731276dc282927e7b_21 ) and method_exists( $fe_array_b7c10f1d772380f731276dc282927e7b_21, 'templateValue' ) )
    $fe_array_b7c10f1d772380f731276dc282927e7b_21 = $fe_array_b7c10f1d772380f731276dc282927e7b_21->templateValue();

$fe_array_keys_b7c10f1d772380f731276dc282927e7b_21 = is_array( $fe_array_b7c10f1d772380f731276dc282927e7b_21 ) ? array_keys( $fe_array_b7c10f1d772380f731276dc282927e7b_21 ) : array();
$fe_n_items_b7c10f1d772380f731276dc282927e7b_21 = count( $fe_array_keys_b7c10f1d772380f731276dc282927e7b_21 );
$fe_n_items_processed_b7c10f1d772380f731276dc282927e7b_21 = 0;
$fe_offset_b7c10f1d772380f731276dc282927e7b_21 = 0;
$fe_max_b7c10f1d772380f731276dc282927e7b_21 = $fe_n_items_b7c10f1d772380f731276dc282927e7b_21 - $fe_offset_b7c10f1d772380f731276dc282927e7b_21;
$fe_reverse_b7c10f1d772380f731276dc282927e7b_21 = false;
if ( $fe_offset_b7c10f1d772380f731276dc282927e7b_21 < 0 || $fe_offset_b7c10f1d772380f731276dc282927e7b_21 >= $fe_n_items_b7c10f1d772380f731276dc282927e7b_21 )
{
    $fe_offset_b7c10f1d772380f731276dc282927e7b_21 = ( $fe_offset_b7c10f1d772380f731276dc282927e7b_21 < 0 ) ? 0 : $fe_n_items_b7c10f1d772380f731276dc282927e7b_21;
    if ( $fe_n_items_b7c10f1d772380f731276dc282927e7b_21 || $fe_offset_b7c10f1d772380f731276dc282927e7b_21 < 0 )
 {
        eZDebug::writeWarning("Invalid 'offset' parameter specified: '$fe_offset_b7c10f1d772380f731276dc282927e7b_21'. Array count: $fe_n_items_b7c10f1d772380f731276dc282927e7b_21");   
}
}
if ( $fe_max_b7c10f1d772380f731276dc282927e7b_21 < 0 || $fe_offset_b7c10f1d772380f731276dc282927e7b_21 + $fe_max_b7c10f1d772380f731276dc282927e7b_21 > $fe_n_items_b7c10f1d772380f731276dc282927e7b_21 )
{
    if ( $fe_max_b7c10f1d772380f731276dc282927e7b_21 < 0 )
 eZDebug::writeWarning("Invalid 'max' parameter specified: $fe_max_b7c10f1d772380f731276dc282927e7b_21");
    $fe_max_b7c10f1d772380f731276dc282927e7b_21 = $fe_n_items_b7c10f1d772380f731276dc282927e7b_21 - $fe_offset_b7c10f1d772380f731276dc282927e7b_21;
}
if ( $fe_reverse_b7c10f1d772380f731276dc282927e7b_21 )
{
    $fe_first_val_b7c10f1d772380f731276dc282927e7b_21 = $fe_n_items_b7c10f1d772380f731276dc282927e7b_21 - 1 - $fe_offset_b7c10f1d772380f731276dc282927e7b_21;
    $fe_last_val_b7c10f1d772380f731276dc282927e7b_21  = 0;
}
else
{
    $fe_first_val_b7c10f1d772380f731276dc282927e7b_21 = $fe_offset_b7c10f1d772380f731276dc282927e7b_21;
    $fe_last_val_b7c10f1d772380f731276dc282927e7b_21  = $fe_n_items_b7c10f1d772380f731276dc282927e7b_21 - 1;
}
// foreach
for ( $fe_i_b7c10f1d772380f731276dc282927e7b_21 = $fe_first_val_b7c10f1d772380f731276dc282927e7b_21; $fe_n_items_processed_b7c10f1d772380f731276dc282927e7b_21 < $fe_max_b7c10f1d772380f731276dc282927e7b_21 && ( $fe_reverse_b7c10f1d772380f731276dc282927e7b_21 ? $fe_i_b7c10f1d772380f731276dc282927e7b_21 >= $fe_last_val_b7c10f1d772380f731276dc282927e7b_21 : $fe_i_b7c10f1d772380f731276dc282927e7b_21 <= $fe_last_val_b7c10f1d772380f731276dc282927e7b_21 ); $fe_reverse_b7c10f1d772380f731276dc282927e7b_21 ? $fe_i_b7c10f1d772380f731276dc282927e7b_21-- : $fe_i_b7c10f1d772380f731276dc282927e7b_21++ )
{
$fe_key_b7c10f1d772380f731276dc282927e7b_21 = $fe_array_keys_b7c10f1d772380f731276dc282927e7b_21[$fe_i_b7c10f1d772380f731276dc282927e7b_21];
$fe_val_b7c10f1d772380f731276dc282927e7b_21 = $fe_array_b7c10f1d772380f731276dc282927e7b_21[$fe_key_b7c10f1d772380f731276dc282927e7b_21];
$vars[$rootNamespace]['can_create_class'] = $fe_val_b7c10f1d772380f731276dc282927e7b_21;
if ( $skipDelimiter )
    $skipDelimiter = false;
else
{ // delimiter begins
// if begins
unset( $if_cond );
unset( $if_cond );
$if_cond = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'can_create_class', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['can_create_class'] : null;
$if_cond1 = compiledFetchAttribute( $if_cond, 'can_instantiate_languages' );
unset( $if_cond );
$if_cond = $if_cond1;
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= ',';
}
unset( $if_cond );
// if ends

} // delimiter ends

$text .= '            ';
// if begins
unset( $if_cond );
unset( $if_cond );
$if_cond = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'can_create_class', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['can_create_class'] : null;
$if_cond1 = compiledFetchAttribute( $if_cond, 'can_instantiate_languages' );
unset( $if_cond );
$if_cond = $if_cond1;
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '            { text: "';
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'can_create_class', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['can_create_class'] : null;
$var2 = compiledFetchAttribute( $var1, 'name' );
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

$text .= '", value: ';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'can_create_class', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['can_create_class'] : null;
$var1 = compiledFetchAttribute( $var, 'id' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= ' }
            ';
}
unset( $if_cond );
// if ends

$text .= '                    ';
$fe_n_items_processed_b7c10f1d772380f731276dc282927e7b_21++;
} // foreach
$skipDelimiter = false;
if ( count( $fe_variable_stack_b7c10f1d772380f731276dc282927e7b_21 ) ) extract( array_pop( $fe_variable_stack_b7c10f1d772380f731276dc282927e7b_21 ) );

else
{

unset( $fe_array_b7c10f1d772380f731276dc282927e7b_21 );

unset( $fe_array_keys_b7c10f1d772380f731276dc282927e7b_21 );

unset( $fe_n_items_b7c10f1d772380f731276dc282927e7b_21 );

unset( $fe_n_items_processed_b7c10f1d772380f731276dc282927e7b_21 );

unset( $fe_i_b7c10f1d772380f731276dc282927e7b_21 );

unset( $fe_key_b7c10f1d772380f731276dc282927e7b_21 );

unset( $fe_val_b7c10f1d772380f731276dc282927e7b_21 );

unset( $fe_offset_b7c10f1d772380f731276dc282927e7b_21 );

unset( $fe_max_b7c10f1d772380f731276dc282927e7b_21 );

unset( $fe_reverse_b7c10f1d772380f731276dc282927e7b_21 );

unset( $fe_first_val_b7c10f1d772380f731276dc282927e7b_21 );

unset( $fe_last_val_b7c10f1d772380f731276dc282927e7b_21 );

unset( $fe_variable_stack_b7c10f1d772380f731276dc282927e7b_21 );

}

// foreach ends
$text .= '        ]
            ';
$fe_n_items_processed_b7c10f1d772380f731276dc282927e7b_22++;
} // foreach
$skipDelimiter = false;
if ( count( $fe_variable_stack_b7c10f1d772380f731276dc282927e7b_22 ) ) extract( array_pop( $fe_variable_stack_b7c10f1d772380f731276dc282927e7b_22 ) );

else
{

unset( $fe_array_b7c10f1d772380f731276dc282927e7b_22 );

unset( $fe_array_keys_b7c10f1d772380f731276dc282927e7b_22 );

unset( $fe_n_items_b7c10f1d772380f731276dc282927e7b_22 );

unset( $fe_n_items_processed_b7c10f1d772380f731276dc282927e7b_22 );

unset( $fe_i_b7c10f1d772380f731276dc282927e7b_22 );

unset( $fe_key_b7c10f1d772380f731276dc282927e7b_22 );

unset( $fe_val_b7c10f1d772380f731276dc282927e7b_22 );

unset( $fe_offset_b7c10f1d772380f731276dc282927e7b_22 );

unset( $fe_max_b7c10f1d772380f731276dc282927e7b_22 );

unset( $fe_reverse_b7c10f1d772380f731276dc282927e7b_22 );

unset( $fe_first_val_b7c10f1d772380f731276dc282927e7b_22 );

unset( $fe_last_val_b7c10f1d772380f731276dc282927e7b_22 );

unset( $fe_variable_stack_b7c10f1d772380f731276dc282927e7b_22 );

}

// foreach ends
$text .= '    ];
';
}
else
{
$text .= '    var createGroups = [];
    var createOptions = [];';
}
unset( $if_cond );
// if ends

$text .= '

YUILoader.require([\'datatable\', \'button\', \'container\', \'cookie\', \'element\']);
YUILoader.onSuccess = function() {
    sortableSubitems.init(confObj, labelsObj, createGroups, createOptions);
};
var options = [];
YUILoader.insert(options, \'js\');

})();
';
// undef $section
$tpl->unsetLocalVariable( 'section', $rootNamespace );

// undef $visible_columns
$tpl->unsetLocalVariable( 'visible_columns', $rootNamespace );

// undef $locales
$tpl->unsetLocalVariable( 'locales', $rootNamespace );

$text .= '</script>

<div id="action-controls-container">
    <div id="action-controls"></div>
    <div id="tpg"></div>
</div>
<div id="content-sub-items-list" class="content-navigation-childlist"></div>
<div id="bpg"></div>

<div id="to-dialog-container"></div>
';

$setArray = $oldSetArray_3f566d40399cea56ca6fc2f41717b59a;
$tpl->Level--;
?>
