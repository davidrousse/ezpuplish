<?php
// URI:       design:content/view/embed.tpl
// Filename:  extension/ezwebin/design/ezwebin/override/templates/embed/vertically_listed_sub_items.tpl
// Timestamp: 1350735749 (Sat Oct 20 12:22:29 UTC 2012)
$oldSetArray_51ae7ccce3219e51bfc5ac242cc57ee4 = isset( $setArray ) ? $setArray : array();
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

<h2>';
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

$text .= '</h2>

<div class="border-box box-3">
<div class="border-tl"><div class="border-tr"><div class="border-tc"></div></div></div>
<div class="border-ml"><div class="border-mr"><div class="border-mc float-break">
    ';
// def $children
if ( $tpl->hasVariable( 'children', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'children' is already defined.", array (
  0 => 
  array (
    0 => 8,
    1 => 4,
    2 => 272,
  ),
  1 => 
  array (
    0 => 10,
    1 => 20,
    2 => 336,
  ),
  2 => 'extension/ezwebin/design/ezwebin/override/templates/embed/vertically_listed_sub_items.tpl',
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
    0 => 8,
    1 => 4,
    2 => 272,
  ),
  1 => 
  array (
    0 => 10,
    1 => 20,
    2 => 336,
  ),
  2 => 'extension/ezwebin/design/ezwebin/override/templates/embed/vertically_listed_sub_items.tpl',
) );
    $tpl->setVariable( 'limit', 3, $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'limit', 3, $rootNamespace );
}

// def $offset
if ( $tpl->hasVariable( 'offset', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'offset' is already defined.", array (
  0 => 
  array (
    0 => 8,
    1 => 4,
    2 => 272,
  ),
  1 => 
  array (
    0 => 10,
    1 => 20,
    2 => 336,
  ),
  2 => 'extension/ezwebin/design/ezwebin/override/templates/embed/vertically_listed_sub_items.tpl',
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
$var2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'object', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['object'] : null;
$var3 = compiledFetchAttribute( $var2, 'main_node' );
unset( $var2 );
$var2 = $var3;
$var3 = compiledFetchAttribute( $var2, 'sort_array' );
unset( $var2 );
$var2 = $var3;
if (! isset( $var2 ) ) $var2 = NULL;
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
unset( $var3 );
unset( $var3 );
$var3 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'offset', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['offset'] : null;
if (! isset( $var3 ) ) $var3 = NULL;
while ( is_object( $var3 ) and method_exists( $var3, 'templateValue' ) )
    $var3 = $var3->templateValue();
while ( is_object( $var3 ) and method_exists( $var3, 'templateValue' ) )
    $var3 = $var3->templateValue();
unset( $var4 );
unset( $var4 );
$var4 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'limit', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['limit'] : null;
if (! isset( $var4 ) ) $var4 = NULL;
while ( is_object( $var4 ) and method_exists( $var4, 'templateValue' ) )
    $var4 = $var4->templateValue();
while ( is_object( $var4 ) and method_exists( $var4, 'templateValue' ) )
    $var4 = $var4->templateValue();
$var = call_user_func_array( array( new eZContentFunctionCollection(), 'fetchObjectTree' ),
  array(     'parent_node_id' => $var1,
    'sort_by' => $var2,
    'only_translated' => false,
    'language' => false,
    'offset' => $var3,
    'limit' => $var4,
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
unset( $var1, $var2, $var3, $var4 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( array_key_exists( $currentNamespace, $vars ) && array_key_exists( 'children', $vars[$currentNamespace] ) )
{
    $vars[$currentNamespace]['children'] = $var;
    unset( $var );
}
$text .= '
    <div class="content-view-children float-break">
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
$text .= '    ';
// foreach begins
$skipDelimiter = true;
if ( !isset( $fe_variable_stack_8f673efd4d7ff9d5acb5a4fd5ca433db_1 ) ) $fe_variable_stack_8f673efd4d7ff9d5acb5a4fd5ca433db_1 = array();
$fe_variable_stack_8f673efd4d7ff9d5acb5a4fd5ca433db_1[] = compact( 'fe_array_8f673efd4d7ff9d5acb5a4fd5ca433db_1', 'fe_array_keys_8f673efd4d7ff9d5acb5a4fd5ca433db_1', 'fe_n_items_8f673efd4d7ff9d5acb5a4fd5ca433db_1', 'fe_n_items_processed_8f673efd4d7ff9d5acb5a4fd5ca433db_1', 'fe_i_8f673efd4d7ff9d5acb5a4fd5ca433db_1', 'fe_key_8f673efd4d7ff9d5acb5a4fd5ca433db_1', 'fe_val_8f673efd4d7ff9d5acb5a4fd5ca433db_1', 'fe_offset_8f673efd4d7ff9d5acb5a4fd5ca433db_1', 'fe_max_8f673efd4d7ff9d5acb5a4fd5ca433db_1', 'fe_reverse_8f673efd4d7ff9d5acb5a4fd5ca433db_1', 'fe_first_val_8f673efd4d7ff9d5acb5a4fd5ca433db_1', 'fe_last_val_8f673efd4d7ff9d5acb5a4fd5ca433db_1' );
unset( $fe_array_8f673efd4d7ff9d5acb5a4fd5ca433db_1 );
unset( $fe_array_8f673efd4d7ff9d5acb5a4fd5ca433db_1 );
$fe_array_8f673efd4d7ff9d5acb5a4fd5ca433db_1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'children', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['children'] : null;
if (! isset( $fe_array_8f673efd4d7ff9d5acb5a4fd5ca433db_1 ) ) $fe_array_8f673efd4d7ff9d5acb5a4fd5ca433db_1 = NULL;
while ( is_object( $fe_array_8f673efd4d7ff9d5acb5a4fd5ca433db_1 ) and method_exists( $fe_array_8f673efd4d7ff9d5acb5a4fd5ca433db_1, 'templateValue' ) )
    $fe_array_8f673efd4d7ff9d5acb5a4fd5ca433db_1 = $fe_array_8f673efd4d7ff9d5acb5a4fd5ca433db_1->templateValue();

$fe_array_keys_8f673efd4d7ff9d5acb5a4fd5ca433db_1 = is_array( $fe_array_8f673efd4d7ff9d5acb5a4fd5ca433db_1 ) ? array_keys( $fe_array_8f673efd4d7ff9d5acb5a4fd5ca433db_1 ) : array();
$fe_n_items_8f673efd4d7ff9d5acb5a4fd5ca433db_1 = count( $fe_array_keys_8f673efd4d7ff9d5acb5a4fd5ca433db_1 );
$fe_n_items_processed_8f673efd4d7ff9d5acb5a4fd5ca433db_1 = 0;
$fe_offset_8f673efd4d7ff9d5acb5a4fd5ca433db_1 = 0;
$fe_max_8f673efd4d7ff9d5acb5a4fd5ca433db_1 = $fe_n_items_8f673efd4d7ff9d5acb5a4fd5ca433db_1 - $fe_offset_8f673efd4d7ff9d5acb5a4fd5ca433db_1;
$fe_reverse_8f673efd4d7ff9d5acb5a4fd5ca433db_1 = false;
if ( $fe_offset_8f673efd4d7ff9d5acb5a4fd5ca433db_1 < 0 || $fe_offset_8f673efd4d7ff9d5acb5a4fd5ca433db_1 >= $fe_n_items_8f673efd4d7ff9d5acb5a4fd5ca433db_1 )
{
    $fe_offset_8f673efd4d7ff9d5acb5a4fd5ca433db_1 = ( $fe_offset_8f673efd4d7ff9d5acb5a4fd5ca433db_1 < 0 ) ? 0 : $fe_n_items_8f673efd4d7ff9d5acb5a4fd5ca433db_1;
    if ( $fe_n_items_8f673efd4d7ff9d5acb5a4fd5ca433db_1 || $fe_offset_8f673efd4d7ff9d5acb5a4fd5ca433db_1 < 0 )
 {
        eZDebug::writeWarning("Invalid 'offset' parameter specified: '$fe_offset_8f673efd4d7ff9d5acb5a4fd5ca433db_1'. Array count: $fe_n_items_8f673efd4d7ff9d5acb5a4fd5ca433db_1");   
}
}
if ( $fe_max_8f673efd4d7ff9d5acb5a4fd5ca433db_1 < 0 || $fe_offset_8f673efd4d7ff9d5acb5a4fd5ca433db_1 + $fe_max_8f673efd4d7ff9d5acb5a4fd5ca433db_1 > $fe_n_items_8f673efd4d7ff9d5acb5a4fd5ca433db_1 )
{
    if ( $fe_max_8f673efd4d7ff9d5acb5a4fd5ca433db_1 < 0 )
 eZDebug::writeWarning("Invalid 'max' parameter specified: $fe_max_8f673efd4d7ff9d5acb5a4fd5ca433db_1");
    $fe_max_8f673efd4d7ff9d5acb5a4fd5ca433db_1 = $fe_n_items_8f673efd4d7ff9d5acb5a4fd5ca433db_1 - $fe_offset_8f673efd4d7ff9d5acb5a4fd5ca433db_1;
}
if ( $fe_reverse_8f673efd4d7ff9d5acb5a4fd5ca433db_1 )
{
    $fe_first_val_8f673efd4d7ff9d5acb5a4fd5ca433db_1 = $fe_n_items_8f673efd4d7ff9d5acb5a4fd5ca433db_1 - 1 - $fe_offset_8f673efd4d7ff9d5acb5a4fd5ca433db_1;
    $fe_last_val_8f673efd4d7ff9d5acb5a4fd5ca433db_1  = 0;
}
else
{
    $fe_first_val_8f673efd4d7ff9d5acb5a4fd5ca433db_1 = $fe_offset_8f673efd4d7ff9d5acb5a4fd5ca433db_1;
    $fe_last_val_8f673efd4d7ff9d5acb5a4fd5ca433db_1  = $fe_n_items_8f673efd4d7ff9d5acb5a4fd5ca433db_1 - 1;
}
// foreach
for ( $fe_i_8f673efd4d7ff9d5acb5a4fd5ca433db_1 = $fe_first_val_8f673efd4d7ff9d5acb5a4fd5ca433db_1; $fe_n_items_processed_8f673efd4d7ff9d5acb5a4fd5ca433db_1 < $fe_max_8f673efd4d7ff9d5acb5a4fd5ca433db_1 && ( $fe_reverse_8f673efd4d7ff9d5acb5a4fd5ca433db_1 ? $fe_i_8f673efd4d7ff9d5acb5a4fd5ca433db_1 >= $fe_last_val_8f673efd4d7ff9d5acb5a4fd5ca433db_1 : $fe_i_8f673efd4d7ff9d5acb5a4fd5ca433db_1 <= $fe_last_val_8f673efd4d7ff9d5acb5a4fd5ca433db_1 ); $fe_reverse_8f673efd4d7ff9d5acb5a4fd5ca433db_1 ? $fe_i_8f673efd4d7ff9d5acb5a4fd5ca433db_1-- : $fe_i_8f673efd4d7ff9d5acb5a4fd5ca433db_1++ )
{
$fe_key_8f673efd4d7ff9d5acb5a4fd5ca433db_1 = $fe_array_keys_8f673efd4d7ff9d5acb5a4fd5ca433db_1[$fe_i_8f673efd4d7ff9d5acb5a4fd5ca433db_1];
$fe_val_8f673efd4d7ff9d5acb5a4fd5ca433db_1 = $fe_array_8f673efd4d7ff9d5acb5a4fd5ca433db_1[$fe_key_8f673efd4d7ff9d5acb5a4fd5ca433db_1];
$vars[$rootNamespace]['child'] = $fe_val_8f673efd4d7ff9d5acb5a4fd5ca433db_1;
if ( $skipDelimiter )
    $skipDelimiter = false;
else
{ // delimiter begins
$text .= '             ';
$textElements = array();
$tpl->processFunction( 'include', $textElements,
                       false,
                       array (
  'uri' => 
  array (
    0 => 
    array (
      0 => 1,
      1 => 'design:content/datatype/view/ezxmltags/separator.tpl',
      2 => false,
    ),
  ),
),
                       array (
  0 => 
  array (
    0 => 30,
    1 => 13,
    2 => 1063,
  ),
  1 => 
  array (
    0 => 30,
    1 => 79,
    2 => 1129,
  ),
  2 => 'extension/ezwebin/design/ezwebin/override/templates/embed/vertically_listed_sub_items.tpl',
),
                       $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );

$text .= '         ';
} // delimiter ends

$text .= '         ';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'child', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['child'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$namespace = $currentNamespace;
if ( $namespace == '' )
    $namespace = "NodeView";
else
    $namespace .= ':NodeView';
$vars[$namespace]['node'] = $var;
unset( $var );
if ( !isset( $dKeys ) )
{
    $resH = $tpl->resourceHandler( 'design' );
    $dKeys = $resH->keys();
}
if ( !isset( $dKeysStack ) )
{
    $dKeysStack = array();
}
$dKeysStack[] = $dKeys;
unset( $dKey );
$namespace = $currentNamespace;
if ( $namespace == '' )
    $namespace = "NodeView";
else
    $namespace .= ':NodeView';
unset( $dKey );
$dKey = ( array_key_exists( $namespace, $vars ) and array_key_exists( 'node', $vars[$namespace] ) ) ? $vars[$namespace]['node'] : null;
$dKey1 = compiledFetchAttribute( $dKey, 'node_id' );
unset( $dKey );
$dKey = $dKey1;
if (! isset( $dKey ) ) $dKey = NULL;
while ( is_object( $dKey ) and method_exists( $dKey, 'templateValue' ) )
    $dKey = $dKey->templateValue();

$dKeys["node"] = $dKey;
unset( $dKey );

unset( $dKey );
$namespace = $currentNamespace;
if ( $namespace == '' )
    $namespace = "NodeView";
else
    $namespace .= ':NodeView';
unset( $dKey );
$dKey = ( array_key_exists( $namespace, $vars ) and array_key_exists( 'node', $vars[$namespace] ) ) ? $vars[$namespace]['node'] : null;
$dKey1 = compiledFetchAttribute( $dKey, 'contentobject_id' );
unset( $dKey );
$dKey = $dKey1;
if (! isset( $dKey ) ) $dKey = NULL;
while ( is_object( $dKey ) and method_exists( $dKey, 'templateValue' ) )
    $dKey = $dKey->templateValue();

$dKeys["object"] = $dKey;
unset( $dKey );

unset( $dKey );
$namespace = $currentNamespace;
if ( $namespace == '' )
    $namespace = "NodeView";
else
    $namespace .= ':NodeView';
unset( $dKey );
$dKey = ( array_key_exists( $namespace, $vars ) and array_key_exists( 'node', $vars[$namespace] ) ) ? $vars[$namespace]['node'] : null;
$dKey1 = compiledFetchAttribute( $dKey, 'object' );
unset( $dKey );
$dKey = $dKey1;
$dKey1 = compiledFetchAttribute( $dKey, 'contentclass_id' );
unset( $dKey );
$dKey = $dKey1;
if (! isset( $dKey ) ) $dKey = NULL;
while ( is_object( $dKey ) and method_exists( $dKey, 'templateValue' ) )
    $dKey = $dKey->templateValue();

$dKeys["class"] = $dKey;
unset( $dKey );

unset( $dKey );
$namespace = $currentNamespace;
if ( $namespace == '' )
    $namespace = "NodeView";
else
    $namespace .= ':NodeView';
unset( $dKey );
$dKey = ( array_key_exists( $namespace, $vars ) and array_key_exists( 'node', $vars[$namespace] ) ) ? $vars[$namespace]['node'] : null;
$dKey1 = compiledFetchAttribute( $dKey, 'object' );
unset( $dKey );
$dKey = $dKey1;
$dKey1 = compiledFetchAttribute( $dKey, 'section_id' );
unset( $dKey );
$dKey = $dKey1;
if (! isset( $dKey ) ) $dKey = NULL;
while ( is_object( $dKey ) and method_exists( $dKey, 'templateValue' ) )
    $dKey = $dKey->templateValue();

$dKeys["section"] = $dKey;
unset( $dKey );

unset( $dKey );
$namespace = $currentNamespace;
if ( $namespace == '' )
    $namespace = "NodeView";
else
    $namespace .= ':NodeView';
unset( $dKey );
$dKey = ( array_key_exists( $namespace, $vars ) and array_key_exists( 'node', $vars[$namespace] ) ) ? $vars[$namespace]['node'] : null;
$dKey1 = compiledFetchAttribute( $dKey, 'object' );
unset( $dKey );
$dKey = $dKey1;
$dKey1 = compiledFetchAttribute( $dKey, 'class_identifier' );
unset( $dKey );
$dKey = $dKey1;
if (! isset( $dKey ) ) $dKey = NULL;
while ( is_object( $dKey ) and method_exists( $dKey, 'templateValue' ) )
    $dKey = $dKey->templateValue();

$dKeys["class_identifier"] = $dKey;
unset( $dKey );

unset( $dKey );
$namespace = $currentNamespace;
if ( $namespace == '' )
    $namespace = "NodeView";
else
    $namespace .= ':NodeView';
unset( $dKey );
$dKey = ( array_key_exists( $namespace, $vars ) and array_key_exists( 'node', $vars[$namespace] ) ) ? $vars[$namespace]['node'] : null;
$dKey1 = compiledFetchAttribute( $dKey, 'object' );
unset( $dKey );
$dKey = $dKey1;
$dKey1 = compiledFetchAttribute( $dKey, 'match_ingroup_id_list' );
unset( $dKey );
$dKey = $dKey1;
if (! isset( $dKey ) ) $dKey = NULL;
while ( is_object( $dKey ) and method_exists( $dKey, 'templateValue' ) )
    $dKey = $dKey->templateValue();

$dKeys["class_group"] = $dKey;
unset( $dKey );

unset( $dKey );
$namespace = $currentNamespace;
if ( $namespace == '' )
    $namespace = "NodeView";
else
    $namespace .= ':NodeView';
unset( $dKey );
$dKey = ( array_key_exists( $namespace, $vars ) and array_key_exists( 'node', $vars[$namespace] ) ) ? $vars[$namespace]['node'] : null;
$dKey1 = compiledFetchAttribute( $dKey, 'object' );
unset( $dKey );
$dKey = $dKey1;
$dKey1 = compiledFetchAttribute( $dKey, 'state_id_array' );
unset( $dKey );
$dKey = $dKey1;
if (! isset( $dKey ) ) $dKey = NULL;
while ( is_object( $dKey ) and method_exists( $dKey, 'templateValue' ) )
    $dKey = $dKey->templateValue();

$dKeys["state"] = $dKey;
unset( $dKey );

unset( $dKey );
$namespace = $currentNamespace;
if ( $namespace == '' )
    $namespace = "NodeView";
else
    $namespace .= ':NodeView';
unset( $dKey );
$dKey = ( array_key_exists( $namespace, $vars ) and array_key_exists( 'node', $vars[$namespace] ) ) ? $vars[$namespace]['node'] : null;
$dKey1 = compiledFetchAttribute( $dKey, 'object' );
unset( $dKey );
$dKey = $dKey1;
$dKey1 = compiledFetchAttribute( $dKey, 'state_identifier_array' );
unset( $dKey );
$dKey = $dKey1;
if (! isset( $dKey ) ) $dKey = NULL;
while ( is_object( $dKey ) and method_exists( $dKey, 'templateValue' ) )
    $dKey = $dKey->templateValue();

$dKeys["state_identifier"] = $dKey;
unset( $dKey );

unset( $dKey );
$namespace = $currentNamespace;
if ( $namespace == '' )
    $namespace = "NodeView";
else
    $namespace .= ':NodeView';
unset( $dKey );
$dKey = ( array_key_exists( $namespace, $vars ) and array_key_exists( 'node', $vars[$namespace] ) ) ? $vars[$namespace]['node'] : null;
$dKey1 = compiledFetchAttribute( $dKey, 'parent_node_id' );
unset( $dKey );
$dKey = $dKey1;
if (! isset( $dKey ) ) $dKey = NULL;
while ( is_object( $dKey ) and method_exists( $dKey, 'templateValue' ) )
    $dKey = $dKey->templateValue();

$dKeys["parent_node"] = $dKey;
unset( $dKey );

unset( $dKey );
$namespace = $currentNamespace;
if ( $namespace == '' )
    $namespace = "NodeView";
else
    $namespace .= ':NodeView';
unset( $dKey );
$dKey = ( array_key_exists( $namespace, $vars ) and array_key_exists( 'node', $vars[$namespace] ) ) ? $vars[$namespace]['node'] : null;
$dKey1 = compiledFetchAttribute( $dKey, 'depth' );
unset( $dKey );
$dKey = $dKey1;
if (! isset( $dKey ) ) $dKey = NULL;
while ( is_object( $dKey ) and method_exists( $dKey, 'templateValue' ) )
    $dKey = $dKey->templateValue();

$dKeys["depth"] = $dKey;
unset( $dKey );

unset( $dKey );
$namespace = $currentNamespace;
if ( $namespace == '' )
    $namespace = "NodeView";
else
    $namespace .= ':NodeView';
unset( $dKey );
$dKey = ( array_key_exists( $namespace, $vars ) and array_key_exists( 'node', $vars[$namespace] ) ) ? $vars[$namespace]['node'] : null;
$dKey1 = compiledFetchAttribute( $dKey, 'url_alias' );
unset( $dKey );
$dKey = $dKey1;
if (! isset( $dKey ) ) $dKey = NULL;
while ( is_object( $dKey ) and method_exists( $dKey, 'templateValue' ) )
    $dKey = $dKey->templateValue();

$dKeys["url_alias"] = $dKey;
unset( $dKey );

unset( $dKey );
$namespace = $currentNamespace;
if ( $namespace == '' )
    $namespace = "NodeView";
else
    $namespace .= ':NodeView';
unset( $dKey );
$dKey = ( array_key_exists( $namespace, $vars ) and array_key_exists( 'node', $vars[$namespace] ) ) ? $vars[$namespace]['node'] : null;
$dKey1 = compiledFetchAttribute( $dKey, 'object' );
unset( $dKey );
$dKey = $dKey1;
$dKey1 = compiledFetchAttribute( $dKey, 'remote_id' );
unset( $dKey );
$dKey = $dKey1;
if (! isset( $dKey ) ) $dKey = NULL;
while ( is_object( $dKey ) and method_exists( $dKey, 'templateValue' ) )
    $dKey = $dKey->templateValue();

$dKeys["remote_id"] = $dKey;
unset( $dKey );

unset( $dKey );
$namespace = $currentNamespace;
if ( $namespace == '' )
    $namespace = "NodeView";
else
    $namespace .= ':NodeView';
unset( $dKey );
$dKey = ( array_key_exists( $namespace, $vars ) and array_key_exists( 'node', $vars[$namespace] ) ) ? $vars[$namespace]['node'] : null;
$dKey1 = compiledFetchAttribute( $dKey, 'remote_id' );
unset( $dKey );
$dKey = $dKey1;
if (! isset( $dKey ) ) $dKey = NULL;
while ( is_object( $dKey ) and method_exists( $dKey, 'templateValue' ) )
    $dKey = $dKey->templateValue();

$dKeys["node_remote_id"] = $dKey;
unset( $dKey );

unset( $dKey );
$namespace = $currentNamespace;
if ( $namespace == '' )
    $namespace = "NodeView";
else
    $namespace .= ':NodeView';
unset( $dKey );
$dKey = ( array_key_exists( $namespace, $vars ) and array_key_exists( 'node', $vars[$namespace] ) ) ? $vars[$namespace]['node'] : null;
$dKey1 = compiledFetchAttribute( $dKey, 'parent' );
unset( $dKey );
$dKey = $dKey1;
$dKey1 = compiledFetchAttribute( $dKey, 'class_identifier' );
unset( $dKey );
$dKey = $dKey1;
if (! isset( $dKey ) ) $dKey = NULL;
while ( is_object( $dKey ) and method_exists( $dKey, 'templateValue' ) )
    $dKey = $dKey->templateValue();

$dKeys["parent_class_identifier"] = $dKey;
unset( $dKey );

unset( $dKey );
$namespace = $currentNamespace;
if ( $namespace == '' )
    $namespace = "NodeView";
else
    $namespace .= ':NodeView';
unset( $dKey );
$dKey = ( array_key_exists( $namespace, $vars ) and array_key_exists( 'node', $vars[$namespace] ) ) ? $vars[$namespace]['node'] : null;
$dKey1 = compiledFetchAttribute( $dKey, 'parent' );
unset( $dKey );
$dKey = $dKey1;
$dKey1 = compiledFetchAttribute( $dKey, 'remote_id' );
unset( $dKey );
$dKey = $dKey1;
if (! isset( $dKey ) ) $dKey = NULL;
while ( is_object( $dKey ) and method_exists( $dKey, 'templateValue' ) )
    $dKey = $dKey->templateValue();

$dKeys["parent_node_remote_id"] = $dKey;
unset( $dKey );

unset( $dKey );
$namespace = $currentNamespace;
if ( $namespace == '' )
    $namespace = "NodeView";
else
    $namespace .= ':NodeView';
unset( $dKey );
$dKey = ( array_key_exists( $namespace, $vars ) and array_key_exists( 'node', $vars[$namespace] ) ) ? $vars[$namespace]['node'] : null;
$dKey1 = compiledFetchAttribute( $dKey, 'parent' );
unset( $dKey );
$dKey = $dKey1;
$dKey1 = compiledFetchAttribute( $dKey, 'object' );
unset( $dKey );
$dKey = $dKey1;
$dKey1 = compiledFetchAttribute( $dKey, 'remote_id' );
unset( $dKey );
$dKey = $dKey1;
if (! isset( $dKey ) ) $dKey = NULL;
while ( is_object( $dKey ) and method_exists( $dKey, 'templateValue' ) )
    $dKey = $dKey->templateValue();

$dKeys["parent_object_remote_id"] = $dKey;
unset( $dKey );

if ( isset( $dKeys["class_identifier"] ) and ( is_array( $dKeys["class_identifier"] ) ? in_array( "article", $dKeys["class_identifier"] ) : $dKeys["class_identifier"] == "article" ) )
{
$resourceFound = false;
if ( file_exists( 'var/ezwebin_site/cache/template/compiled/article-8afd0e6c181da6aea1f49449776112de.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/ezwebin/design/ezwebin/override/templates/line/article.tpl' );
include( '' . 'var/ezwebin_site/cache/template/compiled/article-8afd0e6c181da6aea1f49449776112de.php' );
$tpl->unsetLocalVariables();
$tpl->destroyLocalVariablesList();
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}
else
{
    $resourceFound = true;
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$textElements = array();
$extraParameters = array();
$tpl->processURI( 'extension/ezwebin/design/ezwebin/override/templates/line/article.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}

}
else  if ( isset( $dKeys["class_identifier"] ) and ( is_array( $dKeys["class_identifier"] ) ? in_array( "geo_article", $dKeys["class_identifier"] ) : $dKeys["class_identifier"] == "geo_article" ) )
{
$resourceFound = false;
if ( file_exists( 'var/ezwebin_site/cache/template/compiled/geo_article-255c9105ff41acbea30ad71164e2d846.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/ezwebin/design/ezwebin/override/templates/line/geo_article.tpl' );
include( '' . 'var/ezwebin_site/cache/template/compiled/geo_article-255c9105ff41acbea30ad71164e2d846.php' );
$tpl->unsetLocalVariables();
$tpl->destroyLocalVariablesList();
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}
else
{
    $resourceFound = true;
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$textElements = array();
$extraParameters = array();
$tpl->processURI( 'extension/ezwebin/design/ezwebin/override/templates/line/geo_article.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}

}
else  if ( isset( $dKeys["class_identifier"] ) and ( is_array( $dKeys["class_identifier"] ) ? in_array( "article_mainpage", $dKeys["class_identifier"] ) : $dKeys["class_identifier"] == "article_mainpage" ) )
{
$resourceFound = false;
if ( file_exists( 'var/ezwebin_site/cache/template/compiled/article_mainpage-ac592ac6cb48812f9cb7461edf522560.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/ezwebin/design/ezwebin/override/templates/line/article_mainpage.tpl' );
include( '' . 'var/ezwebin_site/cache/template/compiled/article_mainpage-ac592ac6cb48812f9cb7461edf522560.php' );
$tpl->unsetLocalVariables();
$tpl->destroyLocalVariablesList();
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}
else
{
    $resourceFound = true;
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$textElements = array();
$extraParameters = array();
$tpl->processURI( 'extension/ezwebin/design/ezwebin/override/templates/line/article_mainpage.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}

}
else  if ( isset( $dKeys["class_identifier"] ) and ( is_array( $dKeys["class_identifier"] ) ? in_array( "article_subpage", $dKeys["class_identifier"] ) : $dKeys["class_identifier"] == "article_subpage" ) )
{
$resourceFound = false;
if ( file_exists( 'var/ezwebin_site/cache/template/compiled/article_subpage-a315753d29fb12dcdff36a813d65453b.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/ezwebin/design/ezwebin/override/templates/line/article_subpage.tpl' );
include( '' . 'var/ezwebin_site/cache/template/compiled/article_subpage-a315753d29fb12dcdff36a813d65453b.php' );
$tpl->unsetLocalVariables();
$tpl->destroyLocalVariablesList();
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}
else
{
    $resourceFound = true;
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$textElements = array();
$extraParameters = array();
$tpl->processURI( 'extension/ezwebin/design/ezwebin/override/templates/line/article_subpage.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}

}
else  if ( isset( $dKeys["class_identifier"] ) and ( is_array( $dKeys["class_identifier"] ) ? in_array( "banner", $dKeys["class_identifier"] ) : $dKeys["class_identifier"] == "banner" ) )
{
$resourceFound = false;
if ( file_exists( 'var/ezwebin_site/cache/template/compiled/banner-63896d57bf7d711cbc80f6e257cb2d5f.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/ezwebin/design/ezwebin/override/templates/line/banner.tpl' );
include( '' . 'var/ezwebin_site/cache/template/compiled/banner-63896d57bf7d711cbc80f6e257cb2d5f.php' );
$tpl->unsetLocalVariables();
$tpl->destroyLocalVariablesList();
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}
else
{
    $resourceFound = true;
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$textElements = array();
$extraParameters = array();
$tpl->processURI( 'extension/ezwebin/design/ezwebin/override/templates/line/banner.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}

}
else  if ( isset( $dKeys["class_identifier"] ) and ( is_array( $dKeys["class_identifier"] ) ? in_array( "blog", $dKeys["class_identifier"] ) : $dKeys["class_identifier"] == "blog" ) )
{
$resourceFound = false;
if ( file_exists( 'var/ezwebin_site/cache/template/compiled/blog-175c245c1564e3a39b922cded0c0f700.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/ezwebin/design/ezwebin/override/templates/line/blog.tpl' );
include( '' . 'var/ezwebin_site/cache/template/compiled/blog-175c245c1564e3a39b922cded0c0f700.php' );
$tpl->unsetLocalVariables();
$tpl->destroyLocalVariablesList();
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}
else
{
    $resourceFound = true;
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$textElements = array();
$extraParameters = array();
$tpl->processURI( 'extension/ezwebin/design/ezwebin/override/templates/line/blog.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}

}
else  if ( isset( $dKeys["class_identifier"] ) and ( is_array( $dKeys["class_identifier"] ) ? in_array( "blog_post", $dKeys["class_identifier"] ) : $dKeys["class_identifier"] == "blog_post" ) )
{
$resourceFound = false;
if ( file_exists( 'var/ezwebin_site/cache/template/compiled/blog_post-b6e5f66c27b53bf79910a1b21100ec82.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/ezwebin/design/ezwebin/override/templates/line/blog_post.tpl' );
include( '' . 'var/ezwebin_site/cache/template/compiled/blog_post-b6e5f66c27b53bf79910a1b21100ec82.php' );
$tpl->unsetLocalVariables();
$tpl->destroyLocalVariablesList();
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}
else
{
    $resourceFound = true;
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$textElements = array();
$extraParameters = array();
$tpl->processURI( 'extension/ezwebin/design/ezwebin/override/templates/line/blog_post.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}

}
else  if ( isset( $dKeys["class_identifier"] ) and ( is_array( $dKeys["class_identifier"] ) ? in_array( "comment", $dKeys["class_identifier"] ) : $dKeys["class_identifier"] == "comment" ) )
{
$resourceFound = false;
if ( file_exists( 'var/ezwebin_site/cache/template/compiled/comment-9f32f8b96575aa872f251c76cf697118.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/ezwebin/design/ezwebin/override/templates/line/comment.tpl' );
include( '' . 'var/ezwebin_site/cache/template/compiled/comment-9f32f8b96575aa872f251c76cf697118.php' );
$tpl->unsetLocalVariables();
$tpl->destroyLocalVariablesList();
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}
else
{
    $resourceFound = true;
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$textElements = array();
$extraParameters = array();
$tpl->processURI( 'extension/ezwebin/design/ezwebin/override/templates/line/comment.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}

}
else  if ( isset( $dKeys["class_identifier"] ) and ( is_array( $dKeys["class_identifier"] ) ? in_array( "documentation_page", $dKeys["class_identifier"] ) : $dKeys["class_identifier"] == "documentation_page" ) )
{
$resourceFound = false;
if ( file_exists( 'var/ezwebin_site/cache/template/compiled/documentation_page-3a362b5addac760b280c8adb4ae59305.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/ezwebin/design/ezwebin/override/templates/line/documentation_page.tpl' );
include( '' . 'var/ezwebin_site/cache/template/compiled/documentation_page-3a362b5addac760b280c8adb4ae59305.php' );
$tpl->unsetLocalVariables();
$tpl->destroyLocalVariablesList();
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}
else
{
    $resourceFound = true;
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$textElements = array();
$extraParameters = array();
$tpl->processURI( 'extension/ezwebin/design/ezwebin/override/templates/line/documentation_page.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}

}
else  if ( isset( $dKeys["class_identifier"] ) and ( is_array( $dKeys["class_identifier"] ) ? in_array( "event_calendar", $dKeys["class_identifier"] ) : $dKeys["class_identifier"] == "event_calendar" ) )
{
$resourceFound = false;
if ( file_exists( 'var/ezwebin_site/cache/template/compiled/event_calendar-3b89f43b80f80b76926a0141a060ae2a.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/ezwebin/design/ezwebin/override/templates/line/event_calendar.tpl' );
include( '' . 'var/ezwebin_site/cache/template/compiled/event_calendar-3b89f43b80f80b76926a0141a060ae2a.php' );
$tpl->unsetLocalVariables();
$tpl->destroyLocalVariablesList();
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}
else
{
    $resourceFound = true;
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$textElements = array();
$extraParameters = array();
$tpl->processURI( 'extension/ezwebin/design/ezwebin/override/templates/line/event_calendar.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}

}
else  if ( isset( $dKeys["class_identifier"] ) and ( is_array( $dKeys["class_identifier"] ) ? in_array( "event", $dKeys["class_identifier"] ) : $dKeys["class_identifier"] == "event" ) )
{
$resourceFound = false;
if ( file_exists( 'var/ezwebin_site/cache/template/compiled/event-0049c023217b78895d3833b9b22ca386.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/ezwebin/design/ezwebin/override/templates/line/event.tpl' );
include( '' . 'var/ezwebin_site/cache/template/compiled/event-0049c023217b78895d3833b9b22ca386.php' );
$tpl->unsetLocalVariables();
$tpl->destroyLocalVariablesList();
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}
else
{
    $resourceFound = true;
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$textElements = array();
$extraParameters = array();
$tpl->processURI( 'extension/ezwebin/design/ezwebin/override/templates/line/event.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}

}
else  if ( isset( $dKeys["class_identifier"] ) and ( is_array( $dKeys["class_identifier"] ) ? in_array( "feedback_form", $dKeys["class_identifier"] ) : $dKeys["class_identifier"] == "feedback_form" ) )
{
$resourceFound = false;
if ( file_exists( 'var/ezwebin_site/cache/template/compiled/feedback_form-2fd7d3747998b754e709f7c4b4b6a20f.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/ezwebin/design/ezwebin/override/templates/line/feedback_form.tpl' );
include( '' . 'var/ezwebin_site/cache/template/compiled/feedback_form-2fd7d3747998b754e709f7c4b4b6a20f.php' );
$tpl->unsetLocalVariables();
$tpl->destroyLocalVariablesList();
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}
else
{
    $resourceFound = true;
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$textElements = array();
$extraParameters = array();
$tpl->processURI( 'extension/ezwebin/design/ezwebin/override/templates/line/feedback_form.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}

}
else  if ( isset( $dKeys["class_identifier"] ) and ( is_array( $dKeys["class_identifier"] ) ? in_array( "file", $dKeys["class_identifier"] ) : $dKeys["class_identifier"] == "file" ) )
{
$resourceFound = false;
if ( file_exists( 'var/ezwebin_site/cache/template/compiled/file-a4b73337a69a097b356b76ddca5be7bc.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/ezwebin/design/ezwebin/override/templates/line/file.tpl' );
include( '' . 'var/ezwebin_site/cache/template/compiled/file-a4b73337a69a097b356b76ddca5be7bc.php' );
$tpl->unsetLocalVariables();
$tpl->destroyLocalVariablesList();
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}
else
{
    $resourceFound = true;
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$textElements = array();
$extraParameters = array();
$tpl->processURI( 'extension/ezwebin/design/ezwebin/override/templates/line/file.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}

}
else  if ( isset( $dKeys["class_identifier"] ) and ( is_array( $dKeys["class_identifier"] ) ? in_array( "flash", $dKeys["class_identifier"] ) : $dKeys["class_identifier"] == "flash" ) )
{
$resourceFound = false;
if ( file_exists( 'var/ezwebin_site/cache/template/compiled/flash-d7577c1ac8996bcf45f2ffd0f0a7f52e.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/ezwebin/design/ezwebin/override/templates/line/flash.tpl' );
include( '' . 'var/ezwebin_site/cache/template/compiled/flash-d7577c1ac8996bcf45f2ffd0f0a7f52e.php' );
$tpl->unsetLocalVariables();
$tpl->destroyLocalVariablesList();
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}
else
{
    $resourceFound = true;
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$textElements = array();
$extraParameters = array();
$tpl->processURI( 'extension/ezwebin/design/ezwebin/override/templates/line/flash.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}

}
else  if ( isset( $dKeys["class_identifier"] ) and ( is_array( $dKeys["class_identifier"] ) ? in_array( "folder", $dKeys["class_identifier"] ) : $dKeys["class_identifier"] == "folder" ) )
{
$resourceFound = false;
if ( file_exists( 'var/ezwebin_site/cache/template/compiled/folder-79d4f45d3ab19fa0cec4fc202d7e2952.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/ezwebin/design/ezwebin/override/templates/line/folder.tpl' );
include( '' . 'var/ezwebin_site/cache/template/compiled/folder-79d4f45d3ab19fa0cec4fc202d7e2952.php' );
$tpl->unsetLocalVariables();
$tpl->destroyLocalVariablesList();
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}
else
{
    $resourceFound = true;
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$textElements = array();
$extraParameters = array();
$tpl->processURI( 'extension/ezwebin/design/ezwebin/override/templates/line/folder.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}

}
else  if ( isset( $dKeys["class_identifier"] ) and ( is_array( $dKeys["class_identifier"] ) ? in_array( "forum", $dKeys["class_identifier"] ) : $dKeys["class_identifier"] == "forum" ) )
{
$resourceFound = false;
if ( file_exists( 'var/ezwebin_site/cache/template/compiled/forum-30dfc50b396abc9312e56e61743b2810.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/ezwebin/design/ezwebin/override/templates/line/forum.tpl' );
include( '' . 'var/ezwebin_site/cache/template/compiled/forum-30dfc50b396abc9312e56e61743b2810.php' );
$tpl->unsetLocalVariables();
$tpl->destroyLocalVariablesList();
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}
else
{
    $resourceFound = true;
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$textElements = array();
$extraParameters = array();
$tpl->processURI( 'extension/ezwebin/design/ezwebin/override/templates/line/forum.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}

}
else  if ( isset( $dKeys["class_identifier"] ) and ( is_array( $dKeys["class_identifier"] ) ? in_array( "forum_reply", $dKeys["class_identifier"] ) : $dKeys["class_identifier"] == "forum_reply" ) )
{
$resourceFound = false;
if ( file_exists( 'var/ezwebin_site/cache/template/compiled/forum_reply-08e00a81f9054e6f412084396295e88b.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/ezwebin/design/ezwebin/override/templates/line/forum_reply.tpl' );
include( '' . 'var/ezwebin_site/cache/template/compiled/forum_reply-08e00a81f9054e6f412084396295e88b.php' );
$tpl->unsetLocalVariables();
$tpl->destroyLocalVariablesList();
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}
else
{
    $resourceFound = true;
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$textElements = array();
$extraParameters = array();
$tpl->processURI( 'extension/ezwebin/design/ezwebin/override/templates/line/forum_reply.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}

}
else  if ( isset( $dKeys["class_identifier"] ) and ( is_array( $dKeys["class_identifier"] ) ? in_array( "forum_topic", $dKeys["class_identifier"] ) : $dKeys["class_identifier"] == "forum_topic" ) )
{
$resourceFound = false;
if ( file_exists( 'var/ezwebin_site/cache/template/compiled/forum_topic-1689dcaecc1e7760aeb84519b900bfbe.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/ezwebin/design/ezwebin/override/templates/line/forum_topic.tpl' );
include( '' . 'var/ezwebin_site/cache/template/compiled/forum_topic-1689dcaecc1e7760aeb84519b900bfbe.php' );
$tpl->unsetLocalVariables();
$tpl->destroyLocalVariablesList();
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}
else
{
    $resourceFound = true;
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$textElements = array();
$extraParameters = array();
$tpl->processURI( 'extension/ezwebin/design/ezwebin/override/templates/line/forum_topic.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}

}
else  if ( isset( $dKeys["class_identifier"] ) and ( is_array( $dKeys["class_identifier"] ) ? in_array( "forums", $dKeys["class_identifier"] ) : $dKeys["class_identifier"] == "forums" ) )
{
$resourceFound = false;
if ( file_exists( 'var/ezwebin_site/cache/template/compiled/forums-6e3b2fad5b6afd9b02a2e442a3a93018.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/ezwebin/design/ezwebin/override/templates/line/forums.tpl' );
include( '' . 'var/ezwebin_site/cache/template/compiled/forums-6e3b2fad5b6afd9b02a2e442a3a93018.php' );
$tpl->unsetLocalVariables();
$tpl->destroyLocalVariablesList();
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}
else
{
    $resourceFound = true;
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$textElements = array();
$extraParameters = array();
$tpl->processURI( 'extension/ezwebin/design/ezwebin/override/templates/line/forums.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}

}
else  if ( isset( $dKeys["class_identifier"] ) and ( is_array( $dKeys["class_identifier"] ) ? in_array( "gallery", $dKeys["class_identifier"] ) : $dKeys["class_identifier"] == "gallery" ) )
{
$resourceFound = false;
if ( file_exists( 'var/ezwebin_site/cache/template/compiled/gallery-e5cc9c8b5165e0741a805313d46b30f4.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/ezwebin/design/ezwebin/override/templates/line/gallery.tpl' );
include( '' . 'var/ezwebin_site/cache/template/compiled/gallery-e5cc9c8b5165e0741a805313d46b30f4.php' );
$tpl->unsetLocalVariables();
$tpl->destroyLocalVariablesList();
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}
else
{
    $resourceFound = true;
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$textElements = array();
$extraParameters = array();
$tpl->processURI( 'extension/ezwebin/design/ezwebin/override/templates/line/gallery.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}

}
else  if ( isset( $dKeys["class_identifier"] ) and ( is_array( $dKeys["class_identifier"] ) ? in_array( "image", $dKeys["class_identifier"] ) : $dKeys["class_identifier"] == "image" ) )
{
$resourceFound = false;
if ( file_exists( 'var/ezwebin_site/cache/template/compiled/image-1a81114e1aa121d5eb9e8d70cfbe151c.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/ezwebin/design/ezwebin/override/templates/line/image.tpl' );
include( '' . 'var/ezwebin_site/cache/template/compiled/image-1a81114e1aa121d5eb9e8d70cfbe151c.php' );
$tpl->unsetLocalVariables();
$tpl->destroyLocalVariablesList();
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}
else
{
    $resourceFound = true;
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$textElements = array();
$extraParameters = array();
$tpl->processURI( 'extension/ezwebin/design/ezwebin/override/templates/line/image.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}

}
else  if ( isset( $dKeys["class_identifier"] ) and ( is_array( $dKeys["class_identifier"] ) ? in_array( "infobox", $dKeys["class_identifier"] ) : $dKeys["class_identifier"] == "infobox" ) )
{
$resourceFound = false;
if ( file_exists( 'var/ezwebin_site/cache/template/compiled/infobox-ea49b3b6cc2e50d09bf37cfb4a7a4462.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/ezwebin/design/ezwebin/override/templates/line/infobox.tpl' );
include( '' . 'var/ezwebin_site/cache/template/compiled/infobox-ea49b3b6cc2e50d09bf37cfb4a7a4462.php' );
$tpl->unsetLocalVariables();
$tpl->destroyLocalVariablesList();
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}
else
{
    $resourceFound = true;
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$textElements = array();
$extraParameters = array();
$tpl->processURI( 'extension/ezwebin/design/ezwebin/override/templates/line/infobox.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}

}
else  if ( isset( $dKeys["class_identifier"] ) and ( is_array( $dKeys["class_identifier"] ) ? in_array( "link", $dKeys["class_identifier"] ) : $dKeys["class_identifier"] == "link" ) )
{
$resourceFound = false;
if ( file_exists( 'var/ezwebin_site/cache/template/compiled/link-3b952de1e7e6bc3bc90f8a19c31b2c12.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/ezwebin/design/ezwebin/override/templates/line/link.tpl' );
include( '' . 'var/ezwebin_site/cache/template/compiled/link-3b952de1e7e6bc3bc90f8a19c31b2c12.php' );
$tpl->unsetLocalVariables();
$tpl->destroyLocalVariablesList();
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}
else
{
    $resourceFound = true;
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$textElements = array();
$extraParameters = array();
$tpl->processURI( 'extension/ezwebin/design/ezwebin/override/templates/line/link.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}

}
else  if ( isset( $dKeys["class_identifier"] ) and ( is_array( $dKeys["class_identifier"] ) ? in_array( "multicalendar", $dKeys["class_identifier"] ) : $dKeys["class_identifier"] == "multicalendar" ) )
{
$resourceFound = false;
if ( file_exists( 'var/ezwebin_site/cache/template/compiled/multicalendar-eaeedede09126dac58d5ec2f5b866ff9.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/ezwebin/design/ezwebin/override/templates/line/multicalendar.tpl' );
include( '' . 'var/ezwebin_site/cache/template/compiled/multicalendar-eaeedede09126dac58d5ec2f5b866ff9.php' );
$tpl->unsetLocalVariables();
$tpl->destroyLocalVariablesList();
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}
else
{
    $resourceFound = true;
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$textElements = array();
$extraParameters = array();
$tpl->processURI( 'extension/ezwebin/design/ezwebin/override/templates/line/multicalendar.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}

}
else  if ( isset( $dKeys["class_identifier"] ) and ( is_array( $dKeys["class_identifier"] ) ? in_array( "poll", $dKeys["class_identifier"] ) : $dKeys["class_identifier"] == "poll" ) )
{
$resourceFound = false;
if ( file_exists( 'var/ezwebin_site/cache/template/compiled/poll-46248476716feda5a7a95fd8399f85f2.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/ezwebin/design/ezwebin/override/templates/line/poll.tpl' );
include( '' . 'var/ezwebin_site/cache/template/compiled/poll-46248476716feda5a7a95fd8399f85f2.php' );
$tpl->unsetLocalVariables();
$tpl->destroyLocalVariablesList();
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}
else
{
    $resourceFound = true;
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$textElements = array();
$extraParameters = array();
$tpl->processURI( 'extension/ezwebin/design/ezwebin/override/templates/line/poll.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}

}
else  if ( isset( $dKeys["class_identifier"] ) and ( is_array( $dKeys["class_identifier"] ) ? in_array( "product", $dKeys["class_identifier"] ) : $dKeys["class_identifier"] == "product" ) )
{
$resourceFound = false;
if ( file_exists( 'var/ezwebin_site/cache/template/compiled/product-ca6b8a08ef4bfc5e3cc1aff09c621ccc.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/ezwebin/design/ezwebin/override/templates/line/product.tpl' );
include( '' . 'var/ezwebin_site/cache/template/compiled/product-ca6b8a08ef4bfc5e3cc1aff09c621ccc.php' );
$tpl->unsetLocalVariables();
$tpl->destroyLocalVariablesList();
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}
else
{
    $resourceFound = true;
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$textElements = array();
$extraParameters = array();
$tpl->processURI( 'extension/ezwebin/design/ezwebin/override/templates/line/product.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}

}
else  if ( isset( $dKeys["class_identifier"] ) and ( is_array( $dKeys["class_identifier"] ) ? in_array( "silverlight", $dKeys["class_identifier"] ) : $dKeys["class_identifier"] == "silverlight" ) )
{
$resourceFound = false;
if ( file_exists( 'var/ezwebin_site/cache/template/compiled/silverlight-50190a389c2e420da2003a1f1329149b.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/ezwebin/design/ezwebin/override/templates/line/silverlight.tpl' );
include( '' . 'var/ezwebin_site/cache/template/compiled/silverlight-50190a389c2e420da2003a1f1329149b.php' );
$tpl->unsetLocalVariables();
$tpl->destroyLocalVariablesList();
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}
else
{
    $resourceFound = true;
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$textElements = array();
$extraParameters = array();
$tpl->processURI( 'extension/ezwebin/design/ezwebin/override/templates/line/silverlight.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}

}
else  if ( isset( $dKeys["class_identifier"] ) and ( is_array( $dKeys["class_identifier"] ) ? in_array( "quicktime", $dKeys["class_identifier"] ) : $dKeys["class_identifier"] == "quicktime" ) )
{
$resourceFound = false;
if ( file_exists( 'var/ezwebin_site/cache/template/compiled/quicktime-5924de710dea9210193c7db1db990b45.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/ezwebin/design/ezwebin/override/templates/line/quicktime.tpl' );
include( '' . 'var/ezwebin_site/cache/template/compiled/quicktime-5924de710dea9210193c7db1db990b45.php' );
$tpl->unsetLocalVariables();
$tpl->destroyLocalVariablesList();
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}
else
{
    $resourceFound = true;
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$textElements = array();
$extraParameters = array();
$tpl->processURI( 'extension/ezwebin/design/ezwebin/override/templates/line/quicktime.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}

}
else  if ( isset( $dKeys["class_identifier"] ) and ( is_array( $dKeys["class_identifier"] ) ? in_array( "real_video", $dKeys["class_identifier"] ) : $dKeys["class_identifier"] == "real_video" ) )
{
$resourceFound = false;
if ( file_exists( 'var/ezwebin_site/cache/template/compiled/real_video-a0de05c76d9ea0276cd382f7179dc734.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/ezwebin/design/ezwebin/override/templates/line/real_video.tpl' );
include( '' . 'var/ezwebin_site/cache/template/compiled/real_video-a0de05c76d9ea0276cd382f7179dc734.php' );
$tpl->unsetLocalVariables();
$tpl->destroyLocalVariablesList();
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}
else
{
    $resourceFound = true;
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$textElements = array();
$extraParameters = array();
$tpl->processURI( 'extension/ezwebin/design/ezwebin/override/templates/line/real_video.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}

}
else  if ( isset( $dKeys["class_identifier"] ) and ( is_array( $dKeys["class_identifier"] ) ? in_array( "windows_media", $dKeys["class_identifier"] ) : $dKeys["class_identifier"] == "windows_media" ) )
{
$resourceFound = false;
if ( file_exists( 'var/ezwebin_site/cache/template/compiled/windows_media-3c0dec8a2a899c0fea0274ccac59f115.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/ezwebin/design/ezwebin/override/templates/line/windows_media.tpl' );
include( '' . 'var/ezwebin_site/cache/template/compiled/windows_media-3c0dec8a2a899c0fea0274ccac59f115.php' );
$tpl->unsetLocalVariables();
$tpl->destroyLocalVariablesList();
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}
else
{
    $resourceFound = true;
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$textElements = array();
$extraParameters = array();
$tpl->processURI( 'extension/ezwebin/design/ezwebin/override/templates/line/windows_media.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}

}
else 
{
$resourceFound = false;
if ( file_exists( 'var/ezwebin_site/cache/template/compiled/line-94386ae0c377796aaf4b80a8ec725919.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/ezwebin/design/ezwebin/templates/node/view/line.tpl' );
include( '' . 'var/ezwebin_site/cache/template/compiled/line-94386ae0c377796aaf4b80a8ec725919.php' );
$tpl->unsetLocalVariables();
$tpl->destroyLocalVariablesList();
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}
else
{
    $resourceFound = true;
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$textElements = array();
$extraParameters = array();
$tpl->processURI( 'extension/ezwebin/design/ezwebin/templates/node/view/line.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}

}
$dKeys = array_pop( $dKeysStack );
$namespace = $currentNamespace;
if ( $namespace == '' )
    $namespace = "NodeView";
else
    $namespace .= ':NodeView';
unset( $vars[$namespace]['node'] );
$text .= '             ';
$fe_n_items_processed_8f673efd4d7ff9d5acb5a4fd5ca433db_1++;
} // foreach
$skipDelimiter = false;
if ( count( $fe_variable_stack_8f673efd4d7ff9d5acb5a4fd5ca433db_1 ) ) extract( array_pop( $fe_variable_stack_8f673efd4d7ff9d5acb5a4fd5ca433db_1 ) );

else
{

unset( $fe_array_8f673efd4d7ff9d5acb5a4fd5ca433db_1 );

unset( $fe_array_keys_8f673efd4d7ff9d5acb5a4fd5ca433db_1 );

unset( $fe_n_items_8f673efd4d7ff9d5acb5a4fd5ca433db_1 );

unset( $fe_n_items_processed_8f673efd4d7ff9d5acb5a4fd5ca433db_1 );

unset( $fe_i_8f673efd4d7ff9d5acb5a4fd5ca433db_1 );

unset( $fe_key_8f673efd4d7ff9d5acb5a4fd5ca433db_1 );

unset( $fe_val_8f673efd4d7ff9d5acb5a4fd5ca433db_1 );

unset( $fe_offset_8f673efd4d7ff9d5acb5a4fd5ca433db_1 );

unset( $fe_max_8f673efd4d7ff9d5acb5a4fd5ca433db_1 );

unset( $fe_reverse_8f673efd4d7ff9d5acb5a4fd5ca433db_1 );

unset( $fe_first_val_8f673efd4d7ff9d5acb5a4fd5ca433db_1 );

unset( $fe_last_val_8f673efd4d7ff9d5acb5a4fd5ca433db_1 );

unset( $fe_variable_stack_8f673efd4d7ff9d5acb5a4fd5ca433db_1 );

}

// foreach ends
$text .= '    ';
}
unset( $if_cond );
// if ends

$text .= '    </div>

</div></div></div>
<div class="border-bl"><div class="border-br"><div class="border-bc"></div></div></div>
</div>

</div>';

$setArray = $oldSetArray_51ae7ccce3219e51bfc5ac242cc57ee4;
$tpl->Level--;
?>
