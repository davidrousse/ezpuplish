<?php
// URI:       extension/ezwebin/design/ezwebin/override/templates/itemizedsubitems/forum.tpl
// Filename:  extension/ezwebin/design/ezwebin/override/templates/itemizedsubitems/forum.tpl
// Timestamp: 1350735749 (Sat Oct 20 12:22:29 UTC 2012)
$oldSetArray_8c8baedd755e6ba6d3910edbdba76b8a = isset( $setArray ) ? $setArray : array();
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

$text .= '<div class="content-view-embed">
    <div class="class-forum">

    <h2><a href=';
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'object', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['object'] : null;
$var2 = compiledFetchAttribute( $var1, 'main_node' );
unset( $var1 );
$var1 = $var2;
$var2 = compiledFetchAttribute( $var1, 'url_alias' );
unset( $var1 );
$var1 = $var2;
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();

eZURI::transformURI( $var1, false, eZURI::getTransformURIMode() );
$var1 = '"' . $var1 . '"';
$var = $var1;
unset( $var1 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= '>';
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'object', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['object'] : null;
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

$text .= '</a></h2>

    <div class="border-box">
    <div class="border-tl"><div class="border-tr"><div class="border-tc"></div></div></div>
    <div class="border-ml"><div class="border-mr"><div class="border-mc float-break">

    ';
// def $children
if ( $tpl->hasVariable( 'children', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'children' is already defined.", array (
  0 => 
  array (
    0 => 10,
    1 => 4,
    2 => 361,
  ),
  1 => 
  array (
    0 => 12,
    1 => 20,
    2 => 425,
  ),
  2 => 'extension/ezwebin/design/ezwebin/override/templates/itemizedsubitems/forum.tpl',
) );
    $tpl->setVariable( 'children', array (
), $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'children', array (
), $rootNamespace );
}

// def $limit
if ( $tpl->hasVariable( 'limit', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'limit' is already defined.", array (
  0 => 
  array (
    0 => 10,
    1 => 4,
    2 => 361,
  ),
  1 => 
  array (
    0 => 12,
    1 => 20,
    2 => 425,
  ),
  2 => 'extension/ezwebin/design/ezwebin/override/templates/itemizedsubitems/forum.tpl',
) );
    $tpl->setVariable( 'limit', 5, $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'limit', 5, $rootNamespace );
}

// def $offset
if ( $tpl->hasVariable( 'offset', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'offset' is already defined.", array (
  0 => 
  array (
    0 => 10,
    1 => 4,
    2 => 361,
  ),
  1 => 
  array (
    0 => 12,
    1 => 20,
    2 => 425,
  ),
  2 => 'extension/ezwebin/design/ezwebin/override/templates/itemizedsubitems/forum.tpl',
) );
    $tpl->setVariable( 'offset', 0, $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'offset', 0, $rootNamespace );
}

$text .= '
    ';
// if begins
unset( $if_cond );
unset( $if_cond1 );
unset( $if_cond1 );
$if_cond1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'object_parameters', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['object_parameters'] : null;
$if_cond2 = compiledFetchAttribute( $if_cond1, 'limit' );
unset( $if_cond1 );
$if_cond1 = $if_cond2;
if (! isset( $if_cond1 ) ) $if_cond1 = NULL;
while ( is_object( $if_cond1 ) and method_exists( $if_cond1, 'templateValue' ) )
    $if_cond1 = $if_cond1->templateValue();
$if_cond = isset( $if_cond1 );unset( $if_cond1 );
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '        ';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'object_parameters', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['object_parameters'] : null;
$var1 = compiledFetchAttribute( $var, 'limit' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( array_key_exists( $currentNamespace, $vars ) && array_key_exists( 'limit', $vars[$currentNamespace] ) )
{
    $vars[$currentNamespace]['limit'] = $var;
    unset( $var );
}
$text .= '    ';
}
unset( $if_cond );
// if ends

$text .= '
    ';
// if begins
unset( $if_cond );
unset( $if_cond1 );
unset( $if_cond1 );
$if_cond1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'object_parameters', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['object_parameters'] : null;
$if_cond2 = compiledFetchAttribute( $if_cond1, 'offset' );
unset( $if_cond1 );
$if_cond1 = $if_cond2;
if (! isset( $if_cond1 ) ) $if_cond1 = NULL;
while ( is_object( $if_cond1 ) and method_exists( $if_cond1, 'templateValue' ) )
    $if_cond1 = $if_cond1->templateValue();
$if_cond = isset( $if_cond1 );unset( $if_cond1 );
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '        ';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'object_parameters', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['object_parameters'] : null;
$var1 = compiledFetchAttribute( $var, 'offset' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( array_key_exists( $currentNamespace, $vars ) && array_key_exists( 'offset', $vars[$currentNamespace] ) )
{
    $vars[$currentNamespace]['offset'] = $var;
    unset( $var );
}
$text .= '    ';
}
unset( $if_cond );
// if ends

$text .= '
    ';
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'object', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['object'] : null;
$var2 = compiledFetchAttribute( $var1, 'main_node_id' );
unset( $var1 );
$var1 = $var2;
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
unset( $var2 );
unset( $var2 );
$var2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'offset', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['offset'] : null;
if (! isset( $var2 ) ) $var2 = NULL;
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
unset( $var3 );
unset( $var3 );
$var3 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'limit', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['limit'] : null;
if (! isset( $var3 ) ) $var3 = NULL;
while ( is_object( $var3 ) and method_exists( $var3, 'templateValue' ) )
    $var3 = $var3->templateValue();
while ( is_object( $var3 ) and method_exists( $var3, 'templateValue' ) )
    $var3 = $var3->templateValue();
$var = call_user_func_array( array( new eZContentFunctionCollection(), 'fetchObjectTree' ),
  array(     'parent_node_id' => $var1,
    'sort_by' => array( array( "modified_subnode",
              false ),
       array( "node_id",
              false ) ),
    'only_translated' => false,
    'language' => false,
    'offset' => $var2,
    'limit' => $var3,
    'depth' => 1,
    'depth_operator' => "le",
    'class_id' => false,
    'attribute_filter' => false,
    'extended_attribute_filter' => false,
    'class_filter_type' => false,
    'class_filter_array' => false,
    'group_by' => false,
    'main_node_only' => false,
    'ignore_visibility' => false,
    'limitation' => null,
    'as_object' => null,
    'objectname_filter' => null,
    'load_data_map' => null ) );
$var = isset( $var['result'] ) ? $var['result'] : null;
unset( $var1, $var2, $var3 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( array_key_exists( $currentNamespace, $vars ) && array_key_exists( 'children', $vars[$currentNamespace] ) )
{
    $vars[$currentNamespace]['children'] = $var;
    unset( $var );
}
$text .= '
    ';
// if begins
unset( $if_cond );
unset( $if_cond );
$if_cond = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'children', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['children'] : null;
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();
$if_condData = array( 'value' => $if_cond );
$tpl->processOperator( 'count',
                       array (
),
                       $rootNamespace, $currentNamespace, $if_condData, false, false );
$if_cond = $if_condData['value'];
unset( $if_condData );
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '    
    <ul>
    ';
// foreach begins
$skipDelimiter = true;
if ( !isset( $fe_variable_stack_3662fc188ac6dbd8d5ee102dea5e3f00_3 ) ) $fe_variable_stack_3662fc188ac6dbd8d5ee102dea5e3f00_3 = array();
$fe_variable_stack_3662fc188ac6dbd8d5ee102dea5e3f00_3[] = compact( 'fe_array_3662fc188ac6dbd8d5ee102dea5e3f00_3', 'fe_array_keys_3662fc188ac6dbd8d5ee102dea5e3f00_3', 'fe_n_items_3662fc188ac6dbd8d5ee102dea5e3f00_3', 'fe_n_items_processed_3662fc188ac6dbd8d5ee102dea5e3f00_3', 'fe_i_3662fc188ac6dbd8d5ee102dea5e3f00_3', 'fe_key_3662fc188ac6dbd8d5ee102dea5e3f00_3', 'fe_val_3662fc188ac6dbd8d5ee102dea5e3f00_3', 'fe_offset_3662fc188ac6dbd8d5ee102dea5e3f00_3', 'fe_max_3662fc188ac6dbd8d5ee102dea5e3f00_3', 'fe_reverse_3662fc188ac6dbd8d5ee102dea5e3f00_3', 'fe_first_val_3662fc188ac6dbd8d5ee102dea5e3f00_3', 'fe_last_val_3662fc188ac6dbd8d5ee102dea5e3f00_3' );
unset( $fe_array_3662fc188ac6dbd8d5ee102dea5e3f00_3 );
unset( $fe_array_3662fc188ac6dbd8d5ee102dea5e3f00_3 );
$fe_array_3662fc188ac6dbd8d5ee102dea5e3f00_3 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'children', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['children'] : null;
if (! isset( $fe_array_3662fc188ac6dbd8d5ee102dea5e3f00_3 ) ) $fe_array_3662fc188ac6dbd8d5ee102dea5e3f00_3 = NULL;
while ( is_object( $fe_array_3662fc188ac6dbd8d5ee102dea5e3f00_3 ) and method_exists( $fe_array_3662fc188ac6dbd8d5ee102dea5e3f00_3, 'templateValue' ) )
    $fe_array_3662fc188ac6dbd8d5ee102dea5e3f00_3 = $fe_array_3662fc188ac6dbd8d5ee102dea5e3f00_3->templateValue();

$fe_array_keys_3662fc188ac6dbd8d5ee102dea5e3f00_3 = is_array( $fe_array_3662fc188ac6dbd8d5ee102dea5e3f00_3 ) ? array_keys( $fe_array_3662fc188ac6dbd8d5ee102dea5e3f00_3 ) : array();
$fe_n_items_3662fc188ac6dbd8d5ee102dea5e3f00_3 = count( $fe_array_keys_3662fc188ac6dbd8d5ee102dea5e3f00_3 );
$fe_n_items_processed_3662fc188ac6dbd8d5ee102dea5e3f00_3 = 0;
$fe_offset_3662fc188ac6dbd8d5ee102dea5e3f00_3 = 0;
$fe_max_3662fc188ac6dbd8d5ee102dea5e3f00_3 = $fe_n_items_3662fc188ac6dbd8d5ee102dea5e3f00_3 - $fe_offset_3662fc188ac6dbd8d5ee102dea5e3f00_3;
$fe_reverse_3662fc188ac6dbd8d5ee102dea5e3f00_3 = false;
if ( $fe_offset_3662fc188ac6dbd8d5ee102dea5e3f00_3 < 0 || $fe_offset_3662fc188ac6dbd8d5ee102dea5e3f00_3 >= $fe_n_items_3662fc188ac6dbd8d5ee102dea5e3f00_3 )
{
    $fe_offset_3662fc188ac6dbd8d5ee102dea5e3f00_3 = ( $fe_offset_3662fc188ac6dbd8d5ee102dea5e3f00_3 < 0 ) ? 0 : $fe_n_items_3662fc188ac6dbd8d5ee102dea5e3f00_3;
    if ( $fe_n_items_3662fc188ac6dbd8d5ee102dea5e3f00_3 || $fe_offset_3662fc188ac6dbd8d5ee102dea5e3f00_3 < 0 )
 {
        eZDebug::writeWarning("Invalid 'offset' parameter specified: '$fe_offset_3662fc188ac6dbd8d5ee102dea5e3f00_3'. Array count: $fe_n_items_3662fc188ac6dbd8d5ee102dea5e3f00_3");   
}
}
if ( $fe_max_3662fc188ac6dbd8d5ee102dea5e3f00_3 < 0 || $fe_offset_3662fc188ac6dbd8d5ee102dea5e3f00_3 + $fe_max_3662fc188ac6dbd8d5ee102dea5e3f00_3 > $fe_n_items_3662fc188ac6dbd8d5ee102dea5e3f00_3 )
{
    if ( $fe_max_3662fc188ac6dbd8d5ee102dea5e3f00_3 < 0 )
 eZDebug::writeWarning("Invalid 'max' parameter specified: $fe_max_3662fc188ac6dbd8d5ee102dea5e3f00_3");
    $fe_max_3662fc188ac6dbd8d5ee102dea5e3f00_3 = $fe_n_items_3662fc188ac6dbd8d5ee102dea5e3f00_3 - $fe_offset_3662fc188ac6dbd8d5ee102dea5e3f00_3;
}
if ( $fe_reverse_3662fc188ac6dbd8d5ee102dea5e3f00_3 )
{
    $fe_first_val_3662fc188ac6dbd8d5ee102dea5e3f00_3 = $fe_n_items_3662fc188ac6dbd8d5ee102dea5e3f00_3 - 1 - $fe_offset_3662fc188ac6dbd8d5ee102dea5e3f00_3;
    $fe_last_val_3662fc188ac6dbd8d5ee102dea5e3f00_3  = 0;
}
else
{
    $fe_first_val_3662fc188ac6dbd8d5ee102dea5e3f00_3 = $fe_offset_3662fc188ac6dbd8d5ee102dea5e3f00_3;
    $fe_last_val_3662fc188ac6dbd8d5ee102dea5e3f00_3  = $fe_n_items_3662fc188ac6dbd8d5ee102dea5e3f00_3 - 1;
}
// foreach
for ( $fe_i_3662fc188ac6dbd8d5ee102dea5e3f00_3 = $fe_first_val_3662fc188ac6dbd8d5ee102dea5e3f00_3; $fe_n_items_processed_3662fc188ac6dbd8d5ee102dea5e3f00_3 < $fe_max_3662fc188ac6dbd8d5ee102dea5e3f00_3 && ( $fe_reverse_3662fc188ac6dbd8d5ee102dea5e3f00_3 ? $fe_i_3662fc188ac6dbd8d5ee102dea5e3f00_3 >= $fe_last_val_3662fc188ac6dbd8d5ee102dea5e3f00_3 : $fe_i_3662fc188ac6dbd8d5ee102dea5e3f00_3 <= $fe_last_val_3662fc188ac6dbd8d5ee102dea5e3f00_3 ); $fe_reverse_3662fc188ac6dbd8d5ee102dea5e3f00_3 ? $fe_i_3662fc188ac6dbd8d5ee102dea5e3f00_3-- : $fe_i_3662fc188ac6dbd8d5ee102dea5e3f00_3++ )
{
$fe_key_3662fc188ac6dbd8d5ee102dea5e3f00_3 = $fe_array_keys_3662fc188ac6dbd8d5ee102dea5e3f00_3[$fe_i_3662fc188ac6dbd8d5ee102dea5e3f00_3];
$fe_val_3662fc188ac6dbd8d5ee102dea5e3f00_3 = $fe_array_3662fc188ac6dbd8d5ee102dea5e3f00_3[$fe_key_3662fc188ac6dbd8d5ee102dea5e3f00_3];
$vars[$rootNamespace]['child'] = $fe_val_3662fc188ac6dbd8d5ee102dea5e3f00_3;
$text .= '       <li>
               <a href=';
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'child', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['child'] : null;
$var2 = compiledFetchAttribute( $var1, 'url_alias' );
unset( $var1 );
$var1 = $var2;
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();

eZURI::transformURI( $var1, false, eZURI::getTransformURIMode() );
$var1 = '"' . $var1 . '"';
$var = $var1;
unset( $var1 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= '>';
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'child', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['child'] : null;
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

$text .= '</a>
            <div class="attribute-byline float-break">
                   <p class="date">';
unset( $var );
$locale = eZLocale::instance();
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'child', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['child'] : null;
$var2 = compiledFetchAttribute( $var1, 'object' );
unset( $var1 );
$var1 = $var2;
$var2 = compiledFetchAttribute( $var1, 'published' );
unset( $var1 );
$var1 = $var2;
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
$var = $locale->formatDateTimeType( '%d %M %Y %H:%i', $var1 );
unset( $var1 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= '</p>
                <p class="author">';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'child', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['child'] : null;
$var1 = compiledFetchAttribute( $var, 'object' );
unset( $var );
$var = $var1;
$var1 = compiledFetchAttribute( $var, 'owner' );
unset( $var );
$var = $var1;
$var1 = compiledFetchAttribute( $var, 'name' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '</p>
            </div>
       </li>
    ';
$fe_n_items_processed_3662fc188ac6dbd8d5ee102dea5e3f00_3++;
} // foreach
$skipDelimiter = false;
if ( count( $fe_variable_stack_3662fc188ac6dbd8d5ee102dea5e3f00_3 ) ) extract( array_pop( $fe_variable_stack_3662fc188ac6dbd8d5ee102dea5e3f00_3 ) );

else
{

unset( $fe_array_3662fc188ac6dbd8d5ee102dea5e3f00_3 );

unset( $fe_array_keys_3662fc188ac6dbd8d5ee102dea5e3f00_3 );

unset( $fe_n_items_3662fc188ac6dbd8d5ee102dea5e3f00_3 );

unset( $fe_n_items_processed_3662fc188ac6dbd8d5ee102dea5e3f00_3 );

unset( $fe_i_3662fc188ac6dbd8d5ee102dea5e3f00_3 );

unset( $fe_key_3662fc188ac6dbd8d5ee102dea5e3f00_3 );

unset( $fe_val_3662fc188ac6dbd8d5ee102dea5e3f00_3 );

unset( $fe_offset_3662fc188ac6dbd8d5ee102dea5e3f00_3 );

unset( $fe_max_3662fc188ac6dbd8d5ee102dea5e3f00_3 );

unset( $fe_reverse_3662fc188ac6dbd8d5ee102dea5e3f00_3 );

unset( $fe_first_val_3662fc188ac6dbd8d5ee102dea5e3f00_3 );

unset( $fe_last_val_3662fc188ac6dbd8d5ee102dea5e3f00_3 );

unset( $fe_variable_stack_3662fc188ac6dbd8d5ee102dea5e3f00_3 );

}

// foreach ends
$text .= '    </ul>
    
    ';
}
unset( $if_cond );
// if ends

$text .= '
    </div></div></div>
    <div class="border-bl"><div class="border-br"><div class="border-bc"></div></div></div>
    </div>

    </div>
</div>';

$setArray = $oldSetArray_8c8baedd755e6ba6d3910edbdba76b8a;
$tpl->Level--;
?>