<?php
// URI:       design:menu/flat_left.tpl
// Filename:  extension/ezwebin/design/ezwebin/templates/menu/flat_left.tpl
// Timestamp: 1350735749 (Sat Oct 20 12:22:29 UTC 2012)
$oldSetArray_90d02849dd0fe30cf39a91dab9890a20 = isset( $setArray ) ? $setArray : array();
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

$text .= '<div class="border-box">
<div class="border-tl"><div class="border-tr"><div class="border-tc"></div></div></div>
<div class="border-ml"><div class="border-mr"><div class="border-mc">';
// def $left_menu_depth
unset( $var );
unset( $var1 );
unset( $var2 );
unset( $var2 );
$var2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'pagedata', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['pagedata'] : null;
$var3 = compiledFetchAttribute( $var2, 'current_menu' );
unset( $var2 );
$var2 = $var3;
if (! isset( $var2 ) ) $var2 = NULL;
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
$var1 = ( ( $var2 ) == ( 'LeftOnly' ) );
unset( $var2 );
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
$var = $var1 ? 0 : 1;
unset( $var1 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( $tpl->hasVariable( 'left_menu_depth', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'left_menu_depth' is already defined.", array (
  0 => 
  array (
    0 => 4,
    1 => 0,
    2 => 184,
  ),
  1 => 
  array (
    0 => 5,
    1 => 156,
    2 => 416,
  ),
  2 => 'extension/ezwebin/design/ezwebin/templates/menu/flat_left.tpl',
) );
    $tpl->setVariable( 'left_menu_depth', $var, $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'left_menu_depth', $var, $rootNamespace );
}

// def $left_menu_root_url
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'pagedata', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['pagedata'] : null;
$var2 = compiledFetchAttribute( $var1, 'path_array' );
unset( $var1 );
$var1 = $var2;
unset( $var3 );
unset( $var3 );
$var3 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'left_menu_depth', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['left_menu_depth'] : null;
if (! isset( $var3 ) ) $var3 = NULL;
while ( is_object( $var3 ) and method_exists( $var3, 'templateValue' ) )
    $var3 = $var3->templateValue();
$var2 = compiledFetchAttribute( $var1, $var3 );
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
if ( $var1 )
{
    unset( $var2 );
unset( $var2 );
$var2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( "pagedata", $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]["pagedata"] : null;
$var3 = compiledFetchAttribute( $var2, "path_array" );
unset( $var2 );
$var2 = $var3;
unset( $var4 );
unset( $var4 );
$var4 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( "left_menu_depth", $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]["left_menu_depth"] : null;
if (! isset( $var4 ) ) $var4 = NULL;
while ( is_object( $var4 ) and method_exists( $var4, 'templateValue' ) )
    $var4 = $var4->templateValue();
$var3 = compiledFetchAttribute( $var2, $var4 );
unset( $var2 );
$var2 = $var3;
$var3 = compiledFetchAttribute( $var2, "url_alias" );
unset( $var2 );
$var2 = $var3;
if (! isset( $var2 ) ) $var2 = NULL;
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();

    $var = $var2;
}
else
{
    unset( $var3 );
unset( $var3 );
$var3 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( "requested_uri_string", $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]["requested_uri_string"] : null;
if (! isset( $var3 ) ) $var3 = NULL;
while ( is_object( $var3 ) and method_exists( $var3, 'templateValue' ) )
    $var3 = $var3->templateValue();
while ( is_object( $var3 ) and method_exists( $var3, 'templateValue' ) )
    $var3 = $var3->templateValue();

    $var = $var3;
}
unset( $var1, $var2, $var3 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( $tpl->hasVariable( 'left_menu_root_url', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'left_menu_root_url' is already defined.", array (
  0 => 
  array (
    0 => 4,
    1 => 0,
    2 => 184,
  ),
  1 => 
  array (
    0 => 5,
    1 => 156,
    2 => 416,
  ),
  2 => 'extension/ezwebin/design/ezwebin/templates/menu/flat_left.tpl',
) );
    $tpl->setVariable( 'left_menu_root_url', $var, $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'left_menu_root_url', $var, $rootNamespace );
}

$text .= '
    <h4><a href=';
// if begins
unset( $if_cond );
unset( $if_cond1 );
unset( $if_cond1 );
$if_cond1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'ui_context', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['ui_context'] : null;
if (! isset( $if_cond1 ) ) $if_cond1 = NULL;
while ( is_object( $if_cond1 ) and method_exists( $if_cond1, 'templateValue' ) )
    $if_cond1 = $if_cond1->templateValue();
$if_cond = ( ( $if_cond1 ) == ( 'browse' ) );
unset( $if_cond1 );
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
unset( $var );
unset( $var1 );
unset( $var3 );
unset( $var3 );
$var3 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'pagedata', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['pagedata'] : null;
$var4 = compiledFetchAttribute( $var3, 'path_array' );
unset( $var3 );
$var3 = $var4;
unset( $var5 );
unset( $var5 );
$var5 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'left_menu_depth', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['left_menu_depth'] : null;
if (! isset( $var5 ) ) $var5 = NULL;
while ( is_object( $var5 ) and method_exists( $var5, 'templateValue' ) )
    $var5 = $var5->templateValue();
$var4 = compiledFetchAttribute( $var3, $var5 );
unset( $var3 );
$var3 = $var4;
$var4 = compiledFetchAttribute( $var3, 'node_id' );
unset( $var3 );
$var3 = $var4;
if (! isset( $var3 ) ) $var3 = NULL;
while ( is_object( $var3 ) and method_exists( $var3, 'templateValue' ) )
    $var3 = $var3->templateValue();
while ( is_object( $var3 ) and method_exists( $var3, 'templateValue' ) )
    $var3 = $var3->templateValue();
$var1 = ( 'content/browse/' . $var3 );
unset( $var3 );
if (! isset( $var1 ) ) $var1 = NULL;
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

}
else
{
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'left_menu_root_url', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['left_menu_root_url'] : null;
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

}
unset( $if_cond );
// if ends

$text .= '>';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'pagedata', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['pagedata'] : null;
$var1 = compiledFetchAttribute( $var, 'path_array' );
unset( $var );
$var = $var1;
unset( $var2 );
unset( $var2 );
$var2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'left_menu_depth', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['left_menu_depth'] : null;
if (! isset( $var2 ) ) $var2 = NULL;
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
$var1 = compiledFetchAttribute( $var, $var2 );
unset( $var );
$var = $var1;
$var1 = compiledFetchAttribute( $var, 'text' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '</a></h4>
';
// if begins
unset( $if_cond );
unset( $if_cond1 );
unset( $if_cond1 );
$if_cond1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'pagedata', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['pagedata'] : null;
$if_cond2 = compiledFetchAttribute( $if_cond1, 'class_identifier' );
unset( $if_cond1 );
$if_cond1 = $if_cond2;
if (! isset( $if_cond1 ) ) $if_cond1 = NULL;
while ( is_object( $if_cond1 ) and method_exists( $if_cond1, 'templateValue' ) )
    $if_cond1 = $if_cond1->templateValue();
$if_cond = ( ( $if_cond1 ) != ( 'documentation_page' ) );
unset( $if_cond1 );
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '    ';
// def $root_node
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'pagedata', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['pagedata'] : null;
$var2 = compiledFetchAttribute( $var1, 'path_array' );
unset( $var1 );
$var1 = $var2;
unset( $var3 );
unset( $var3 );
$var3 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'left_menu_depth', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['left_menu_depth'] : null;
if (! isset( $var3 ) ) $var3 = NULL;
while ( is_object( $var3 ) and method_exists( $var3, 'templateValue' ) )
    $var3 = $var3->templateValue();
$var2 = compiledFetchAttribute( $var1, $var3 );
unset( $var1 );
$var1 = $var2;
$var2 = compiledFetchAttribute( $var1, 'node_id' );
unset( $var1 );
$var1 = $var2;
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
$var = call_user_func_array( array( new eZContentFunctionCollection(), 'fetchContentNode' ),
  array(     'node_id' => $var1,
    'node_path' => false,
    'language_code' => false,
    'remote_id' => false ) );
$var = isset( $var['result'] ) ? $var['result'] : null;
unset( $var1 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( $tpl->hasVariable( 'root_node', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'root_node' is already defined.", array (
  0 => 
  array (
    0 => 10,
    1 => 4,
    2 => 708,
  ),
  1 => 
  array (
    0 => 20,
    1 => 105,
    2 => 1662,
  ),
  2 => 'extension/ezwebin/design/ezwebin/templates/menu/flat_left.tpl',
) );
    $tpl->setVariable( 'root_node', $var, $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'root_node', $var, $rootNamespace );
}

// def $left_menu_items
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'root_node', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['root_node'] : null;
$var2 = compiledFetchAttribute( $var1, 'node_id' );
unset( $var1 );
$var1 = $var2;
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
unset( $var2 );
unset( $var2 );
$var2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'root_node', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['root_node'] : null;
$var3 = compiledFetchAttribute( $var2, 'sort_array' );
unset( $var2 );
$var2 = $var3;
if (! isset( $var2 ) ) $var2 = NULL;
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
$var = call_user_func_array( array( new eZContentFunctionCollection(), 'fetchObjectTree' ),
  array(     'parent_node_id' => $var1,
    'sort_by' => $var2,
    'only_translated' => false,
    'language' => false,
    'offset' => false,
    'limit' => false,
    'depth' => 1,
    'depth_operator' => "le",
    'class_id' => false,
    'attribute_filter' => false,
    'extended_attribute_filter' => false,
    'class_filter_type' => "include",
    'class_filter_array' => array( "folder",
       "feedback_form",
       "folder",
       "feedback_form",
       "gallery",
       "forum",
       "documentation_page",
       "forums",
       "event_calendar",
       "multicalendar",
       "link",
       "blog",
       "frontpage" ),
    'group_by' => false,
    'main_node_only' => false,
    'ignore_visibility' => false,
    'limitation' => null,
    'as_object' => null,
    'objectname_filter' => null,
    'load_data_map' => false ) );
$var = isset( $var['result'] ) ? $var['result'] : null;
unset( $var1, $var2 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( $tpl->hasVariable( 'left_menu_items', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'left_menu_items' is already defined.", array (
  0 => 
  array (
    0 => 10,
    1 => 4,
    2 => 708,
  ),
  1 => 
  array (
    0 => 20,
    1 => 105,
    2 => 1662,
  ),
  2 => 'extension/ezwebin/design/ezwebin/templates/menu/flat_left.tpl',
) );
    $tpl->setVariable( 'left_menu_items', $var, $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'left_menu_items', $var, $rootNamespace );
}

// def $left_menu_items_count
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'left_menu_items', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['left_menu_items'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$varData = array( 'value' => $var );
$tpl->processOperator( 'count',
                       array (
),
                       $rootNamespace, $currentNamespace, $varData, false, false );
$var = $varData['value'];
unset( $varData );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( $tpl->hasVariable( 'left_menu_items_count', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'left_menu_items_count' is already defined.", array (
  0 => 
  array (
    0 => 10,
    1 => 4,
    2 => 708,
  ),
  1 => 
  array (
    0 => 20,
    1 => 105,
    2 => 1662,
  ),
  2 => 'extension/ezwebin/design/ezwebin/templates/menu/flat_left.tpl',
) );
    $tpl->setVariable( 'left_menu_items_count', $var, $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'left_menu_items_count', $var, $rootNamespace );
}

// def $li_class
if ( $tpl->hasVariable( 'li_class', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'li_class' is already defined.", array (
  0 => 
  array (
    0 => 10,
    1 => 4,
    2 => 708,
  ),
  1 => 
  array (
    0 => 20,
    1 => 105,
    2 => 1662,
  ),
  2 => 'extension/ezwebin/design/ezwebin/templates/menu/flat_left.tpl',
) );
    $tpl->setVariable( 'li_class', array (
), $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'li_class', array (
), $rootNamespace );
}

// def $a_class
if ( $tpl->hasVariable( 'a_class', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'a_class' is already defined.", array (
  0 => 
  array (
    0 => 10,
    1 => 4,
    2 => 708,
  ),
  1 => 
  array (
    0 => 20,
    1 => 105,
    2 => 1662,
  ),
  2 => 'extension/ezwebin/design/ezwebin/templates/menu/flat_left.tpl',
) );
    $tpl->setVariable( 'a_class', array (
), $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'a_class', array (
), $rootNamespace );
}

// def $current_node_in_path_2
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( "pagedata", $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]["pagedata"] : null;
$var2 = compiledFetchAttribute( $var1, "path_array" );
unset( $var1 );
$var1 = $var2;
unset( $var3 );
unset( $var3 );
$var3 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( "left_menu_depth", $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]["left_menu_depth"] : null;
if (! isset( $var3 ) ) $var3 = NULL;
while ( is_object( $var3 ) and method_exists( $var3, 'templateValue' ) )
    $var3 = $var3->templateValue();
$var3Data = array( 'value' => $var3 );
$tpl->processOperator( "inc",
                       array(),
                       $rootNamespace, $currentNamespace, $var3Data, false, false );
$var3 = $var3Data['value'];
unset( $var3Data );
if (! isset( $var3 ) ) $var3 = NULL;
while ( is_object( $var3 ) and method_exists( $var3, 'templateValue' ) )
    $var3 = $var3->templateValue();
$var2 = compiledFetchAttribute( $var1, $var3 );
unset( $var1 );
$var1 = $var2;
$var2 = compiledFetchAttribute( $var1, "node_id" );
unset( $var1 );
$var1 = $var2;
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();

if ( isset( $var1 ) )
{
    $var = $var1;
}
else
{
    $var = 0;
}
unset( $var1 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( $tpl->hasVariable( 'current_node_in_path_2', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'current_node_in_path_2' is already defined.", array (
  0 => 
  array (
    0 => 10,
    1 => 4,
    2 => 708,
  ),
  1 => 
  array (
    0 => 20,
    1 => 105,
    2 => 1662,
  ),
  2 => 'extension/ezwebin/design/ezwebin/templates/menu/flat_left.tpl',
) );
    $tpl->setVariable( 'current_node_in_path_2', $var, $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'current_node_in_path_2', $var, $rootNamespace );
}

// def $current_node_in_path_3
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( "pagedata", $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]["pagedata"] : null;
$var2 = compiledFetchAttribute( $var1, "path_array" );
unset( $var1 );
$var1 = $var2;
unset( $var3 );
unset( $var3 );
$var3 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( "left_menu_depth", $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]["left_menu_depth"] : null;
if (! isset( $var3 ) ) $var3 = NULL;
while ( is_object( $var3 ) and method_exists( $var3, 'templateValue' ) )
    $var3 = $var3->templateValue();
$var3Data = array( 'value' => $var3 );
$tpl->processOperator( "sum",
                       array( array( array( 2,
                                            2,
                                            false ) ) ),
                       $rootNamespace, $currentNamespace, $var3Data, false, false );
$var3 = $var3Data['value'];
unset( $var3Data );
if (! isset( $var3 ) ) $var3 = NULL;
while ( is_object( $var3 ) and method_exists( $var3, 'templateValue' ) )
    $var3 = $var3->templateValue();
$var2 = compiledFetchAttribute( $var1, $var3 );
unset( $var1 );
$var1 = $var2;
$var2 = compiledFetchAttribute( $var1, "node_id" );
unset( $var1 );
$var1 = $var2;
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();

if ( isset( $var1 ) )
{
    $var = $var1;
}
else
{
    $var = 0;
}
unset( $var1 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( $tpl->hasVariable( 'current_node_in_path_3', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'current_node_in_path_3' is already defined.", array (
  0 => 
  array (
    0 => 10,
    1 => 4,
    2 => 708,
  ),
  1 => 
  array (
    0 => 20,
    1 => 105,
    2 => 1662,
  ),
  2 => 'extension/ezwebin/design/ezwebin/templates/menu/flat_left.tpl',
) );
    $tpl->setVariable( 'current_node_in_path_3', $var, $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'current_node_in_path_3', $var, $rootNamespace );
}

$text .= '
    ';
// if begins
unset( $if_cond );
unset( $if_cond );
$if_cond = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'left_menu_items_count', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['left_menu_items_count'] : null;
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '        <ul class="menu-list">
        ';
// foreach begins
$skipDelimiter = true;
if ( !isset( $fe_variable_stack_e93438d6dc9d58cd56510383f81607a4_5 ) ) $fe_variable_stack_e93438d6dc9d58cd56510383f81607a4_5 = array();
$fe_variable_stack_e93438d6dc9d58cd56510383f81607a4_5[] = compact( 'fe_array_e93438d6dc9d58cd56510383f81607a4_5', 'fe_array_keys_e93438d6dc9d58cd56510383f81607a4_5', 'fe_n_items_e93438d6dc9d58cd56510383f81607a4_5', 'fe_n_items_processed_e93438d6dc9d58cd56510383f81607a4_5', 'fe_i_e93438d6dc9d58cd56510383f81607a4_5', 'fe_key_e93438d6dc9d58cd56510383f81607a4_5', 'fe_val_e93438d6dc9d58cd56510383f81607a4_5', 'fe_offset_e93438d6dc9d58cd56510383f81607a4_5', 'fe_max_e93438d6dc9d58cd56510383f81607a4_5', 'fe_reverse_e93438d6dc9d58cd56510383f81607a4_5', 'fe_first_val_e93438d6dc9d58cd56510383f81607a4_5', 'fe_last_val_e93438d6dc9d58cd56510383f81607a4_5' );
unset( $fe_array_e93438d6dc9d58cd56510383f81607a4_5 );
unset( $fe_array_e93438d6dc9d58cd56510383f81607a4_5 );
$fe_array_e93438d6dc9d58cd56510383f81607a4_5 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'left_menu_items', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['left_menu_items'] : null;
if (! isset( $fe_array_e93438d6dc9d58cd56510383f81607a4_5 ) ) $fe_array_e93438d6dc9d58cd56510383f81607a4_5 = NULL;
while ( is_object( $fe_array_e93438d6dc9d58cd56510383f81607a4_5 ) and method_exists( $fe_array_e93438d6dc9d58cd56510383f81607a4_5, 'templateValue' ) )
    $fe_array_e93438d6dc9d58cd56510383f81607a4_5 = $fe_array_e93438d6dc9d58cd56510383f81607a4_5->templateValue();

$fe_array_keys_e93438d6dc9d58cd56510383f81607a4_5 = is_array( $fe_array_e93438d6dc9d58cd56510383f81607a4_5 ) ? array_keys( $fe_array_e93438d6dc9d58cd56510383f81607a4_5 ) : array();
$fe_n_items_e93438d6dc9d58cd56510383f81607a4_5 = count( $fe_array_keys_e93438d6dc9d58cd56510383f81607a4_5 );
$fe_n_items_processed_e93438d6dc9d58cd56510383f81607a4_5 = 0;
$fe_offset_e93438d6dc9d58cd56510383f81607a4_5 = 0;
$fe_max_e93438d6dc9d58cd56510383f81607a4_5 = $fe_n_items_e93438d6dc9d58cd56510383f81607a4_5 - $fe_offset_e93438d6dc9d58cd56510383f81607a4_5;
$fe_reverse_e93438d6dc9d58cd56510383f81607a4_5 = false;
if ( $fe_offset_e93438d6dc9d58cd56510383f81607a4_5 < 0 || $fe_offset_e93438d6dc9d58cd56510383f81607a4_5 >= $fe_n_items_e93438d6dc9d58cd56510383f81607a4_5 )
{
    $fe_offset_e93438d6dc9d58cd56510383f81607a4_5 = ( $fe_offset_e93438d6dc9d58cd56510383f81607a4_5 < 0 ) ? 0 : $fe_n_items_e93438d6dc9d58cd56510383f81607a4_5;
    if ( $fe_n_items_e93438d6dc9d58cd56510383f81607a4_5 || $fe_offset_e93438d6dc9d58cd56510383f81607a4_5 < 0 )
 {
        eZDebug::writeWarning("Invalid 'offset' parameter specified: '$fe_offset_e93438d6dc9d58cd56510383f81607a4_5'. Array count: $fe_n_items_e93438d6dc9d58cd56510383f81607a4_5");   
}
}
if ( $fe_max_e93438d6dc9d58cd56510383f81607a4_5 < 0 || $fe_offset_e93438d6dc9d58cd56510383f81607a4_5 + $fe_max_e93438d6dc9d58cd56510383f81607a4_5 > $fe_n_items_e93438d6dc9d58cd56510383f81607a4_5 )
{
    if ( $fe_max_e93438d6dc9d58cd56510383f81607a4_5 < 0 )
 eZDebug::writeWarning("Invalid 'max' parameter specified: $fe_max_e93438d6dc9d58cd56510383f81607a4_5");
    $fe_max_e93438d6dc9d58cd56510383f81607a4_5 = $fe_n_items_e93438d6dc9d58cd56510383f81607a4_5 - $fe_offset_e93438d6dc9d58cd56510383f81607a4_5;
}
if ( $fe_reverse_e93438d6dc9d58cd56510383f81607a4_5 )
{
    $fe_first_val_e93438d6dc9d58cd56510383f81607a4_5 = $fe_n_items_e93438d6dc9d58cd56510383f81607a4_5 - 1 - $fe_offset_e93438d6dc9d58cd56510383f81607a4_5;
    $fe_last_val_e93438d6dc9d58cd56510383f81607a4_5  = 0;
}
else
{
    $fe_first_val_e93438d6dc9d58cd56510383f81607a4_5 = $fe_offset_e93438d6dc9d58cd56510383f81607a4_5;
    $fe_last_val_e93438d6dc9d58cd56510383f81607a4_5  = $fe_n_items_e93438d6dc9d58cd56510383f81607a4_5 - 1;
}
// foreach
for ( $fe_i_e93438d6dc9d58cd56510383f81607a4_5 = $fe_first_val_e93438d6dc9d58cd56510383f81607a4_5; $fe_n_items_processed_e93438d6dc9d58cd56510383f81607a4_5 < $fe_max_e93438d6dc9d58cd56510383f81607a4_5 && ( $fe_reverse_e93438d6dc9d58cd56510383f81607a4_5 ? $fe_i_e93438d6dc9d58cd56510383f81607a4_5 >= $fe_last_val_e93438d6dc9d58cd56510383f81607a4_5 : $fe_i_e93438d6dc9d58cd56510383f81607a4_5 <= $fe_last_val_e93438d6dc9d58cd56510383f81607a4_5 ); $fe_reverse_e93438d6dc9d58cd56510383f81607a4_5 ? $fe_i_e93438d6dc9d58cd56510383f81607a4_5-- : $fe_i_e93438d6dc9d58cd56510383f81607a4_5++ )
{
$fe_key_e93438d6dc9d58cd56510383f81607a4_5 = $fe_array_keys_e93438d6dc9d58cd56510383f81607a4_5[$fe_i_e93438d6dc9d58cd56510383f81607a4_5];
$fe_val_e93438d6dc9d58cd56510383f81607a4_5 = $fe_array_e93438d6dc9d58cd56510383f81607a4_5[$fe_key_e93438d6dc9d58cd56510383f81607a4_5];
$vars[$rootNamespace]['item'] = $fe_val_e93438d6dc9d58cd56510383f81607a4_5;
$vars[$rootNamespace]['key'] = $fe_key_e93438d6dc9d58cd56510383f81607a4_5;
$text .= '            ';
unset( $var );
unset( $var1 );
unset( $var2 );
unset( $var2 );
$var2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'current_node_in_path_2', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['current_node_in_path_2'] : null;
if (! isset( $var2 ) ) $var2 = NULL;
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
unset( $var3 );
unset( $var3 );
$var3 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'item', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['item'] : null;
$var4 = compiledFetchAttribute( $var3, 'node_id' );
unset( $var3 );
$var3 = $var4;
if (! isset( $var3 ) ) $var3 = NULL;
while ( is_object( $var3 ) and method_exists( $var3, 'templateValue' ) )
    $var3 = $var3->templateValue();
while ( is_object( $var3 ) and method_exists( $var3, 'templateValue' ) )
    $var3 = $var3->templateValue();
$var1 = ( ( $var2 ) == ( $var3 ) );
unset( $var2, $var3 );
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
if ( $var1 )
{
    $var = array( "selected" );
}
else
{
    
    $var = array (
);
}
unset( $var1 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( array_key_exists( $currentNamespace, $vars ) && array_key_exists( 'a_class', $vars[$currentNamespace] ) )
{
    $vars[$currentNamespace]['a_class'] = $var;
    unset( $var );
}
unset( $var );
unset( $var1 );
unset( $var2 );
unset( $var2 );
$var2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'key', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['key'] : null;
if (! isset( $var2 ) ) $var2 = NULL;
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
$var1 = ( ( $var2 ) == ( 0 ) );
unset( $var2 );
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
if ( $var1 )
{
    $var = array( "firstli" );
}
else
{
    
    $var = array (
);
}
unset( $var1 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( array_key_exists( $currentNamespace, $vars ) && array_key_exists( 'li_class', $vars[$currentNamespace] ) )
{
    $vars[$currentNamespace]['li_class'] = $var;
    unset( $var );
}
$text .= '
            ';
// if begins
unset( $if_cond );
unset( $if_cond1 );
unset( $if_cond1 );
$if_cond1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'left_menu_items_count', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['left_menu_items_count'] : null;
if (! isset( $if_cond1 ) ) $if_cond1 = NULL;
while ( is_object( $if_cond1 ) and method_exists( $if_cond1, 'templateValue' ) )
    $if_cond1 = $if_cond1->templateValue();
unset( $if_cond2 );
unset( $if_cond3 );
unset( $if_cond3 );
$if_cond3 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'key', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['key'] : null;
if (! isset( $if_cond3 ) ) $if_cond3 = NULL;
while ( is_object( $if_cond3 ) and method_exists( $if_cond3, 'templateValue' ) )
    $if_cond3 = $if_cond3->templateValue();
$if_cond2 = $if_cond3 + 1;
unset( $if_cond3 );
if (! isset( $if_cond2 ) ) $if_cond2 = NULL;
while ( is_object( $if_cond2 ) and method_exists( $if_cond2, 'templateValue' ) )
    $if_cond2 = $if_cond2->templateValue();
$if_cond = ( ( $if_cond1 ) == ( $if_cond2 ) );
unset( $if_cond1, $if_cond2 );
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '                ';
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'li_class', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['li_class'] : null;
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
if ( is_string( $var1 ) )
    $var = $var1 . implode( '', array( "lastli" ) );
else if( is_array( $var1 ) )
    $var = array_merge( $var1, array( "lastli" ) );
unset( $var1 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( array_key_exists( $currentNamespace, $vars ) && array_key_exists( 'li_class', $vars[$currentNamespace] ) )
{
    $vars[$currentNamespace]['li_class'] = $var;
    unset( $var );
}
$text .= '            ';
}
unset( $if_cond );
// if ends

$text .= '            ';
// if begins
unset( $if_cond );
unset( $if_cond1 );
unset( $if_cond1 );
$if_cond1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'item', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['item'] : null;
$if_cond2 = compiledFetchAttribute( $if_cond1, 'node_id' );
unset( $if_cond1 );
$if_cond1 = $if_cond2;
if (! isset( $if_cond1 ) ) $if_cond1 = NULL;
while ( is_object( $if_cond1 ) and method_exists( $if_cond1, 'templateValue' ) )
    $if_cond1 = $if_cond1->templateValue();
unset( $if_cond2 );
unset( $if_cond2 );
$if_cond2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'current_node_id', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['current_node_id'] : null;
if (! isset( $if_cond2 ) ) $if_cond2 = NULL;
while ( is_object( $if_cond2 ) and method_exists( $if_cond2, 'templateValue' ) )
    $if_cond2 = $if_cond2->templateValue();
$if_cond = ( ( $if_cond1 ) == ( $if_cond2 ) );
unset( $if_cond1, $if_cond2 );
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '                ';
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'a_class', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['a_class'] : null;
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
if ( is_string( $var1 ) )
    $var = $var1 . implode( '', array( "current" ) );
else if( is_array( $var1 ) )
    $var = array_merge( $var1, array( "current" ) );
unset( $var1 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( array_key_exists( $currentNamespace, $vars ) && array_key_exists( 'a_class', $vars[$currentNamespace] ) )
{
    $vars[$currentNamespace]['a_class'] = $var;
    unset( $var );
}
$text .= '            ';
}
unset( $if_cond );
// if ends

$text .= '            ';
// if begins
unset( $if_cond );
unset( $if_cond1 );
unset( $if_cond1 );
$if_cond1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'item', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['item'] : null;
$if_cond2 = compiledFetchAttribute( $if_cond1, 'class_identifier' );
unset( $if_cond1 );
$if_cond1 = $if_cond2;
if (! isset( $if_cond1 ) ) $if_cond1 = NULL;
while ( is_object( $if_cond1 ) and method_exists( $if_cond1, 'templateValue' ) )
    $if_cond1 = $if_cond1->templateValue();
$if_cond = ( ( $if_cond1 ) == ( 'link' ) );
unset( $if_cond1 );
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '                <li';
// if begins
unset( $if_cond );
unset( $if_cond );
$if_cond = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'li_class', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['li_class'] : null;
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= ' class="';
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'li_class', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['li_class'] : null;
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
$var = implode( " ", $var1 );unset( $var1 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= '"';
}
unset( $if_cond );
// if ends

$text .= '><div class="second_level_menu"><a ';
// if begins
unset( $if_cond );
unset( $if_cond1 );
unset( $if_cond1 );
$if_cond1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'ui_context', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['ui_context'] : null;
if (! isset( $if_cond1 ) ) $if_cond1 = NULL;
while ( is_object( $if_cond1 ) and method_exists( $if_cond1, 'templateValue' ) )
    $if_cond1 = $if_cond1->templateValue();
$if_cond = ( ( $if_cond1 ) == ( 'browse' ) );
unset( $if_cond1 );
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= 'href=';
unset( $var );
unset( $var1 );
unset( $var3 );
unset( $var3 );
$var3 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'item', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['item'] : null;
$var4 = compiledFetchAttribute( $var3, 'node_id' );
unset( $var3 );
$var3 = $var4;
if (! isset( $var3 ) ) $var3 = NULL;
while ( is_object( $var3 ) and method_exists( $var3, 'templateValue' ) )
    $var3 = $var3->templateValue();
while ( is_object( $var3 ) and method_exists( $var3, 'templateValue' ) )
    $var3 = $var3->templateValue();
$var1 = ( 'content/browse/' . $var3 );
unset( $var3 );
if (! isset( $var1 ) ) $var1 = NULL;
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

}
else
{
$text .= 'href=';
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'item', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['item'] : null;
$var2 = compiledFetchAttribute( $var1, 'data_map' );
unset( $var1 );
$var1 = $var2;
$var2 = compiledFetchAttribute( $var1, 'location' );
unset( $var1 );
$var1 = $var2;
$var2 = compiledFetchAttribute( $var1, 'content' );
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

// if begins
unset( $if_cond );
unset( $if_cond1 );
unset( $if_cond2 );
unset( $if_cond2 );
$if_cond2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'item', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['item'] : null;
$if_cond3 = compiledFetchAttribute( $if_cond2, 'data_map' );
unset( $if_cond2 );
$if_cond2 = $if_cond3;
$if_cond3 = compiledFetchAttribute( $if_cond2, 'open_in_new_window' );
unset( $if_cond2 );
$if_cond2 = $if_cond3;
if (! isset( $if_cond2 ) ) $if_cond2 = NULL;
while ( is_object( $if_cond2 ) and method_exists( $if_cond2, 'templateValue' ) )
    $if_cond2 = $if_cond2->templateValue();
$if_cond1 = isset( $if_cond2 );unset( $if_cond2 );
if (! isset( $if_cond1 ) ) $if_cond1 = NULL;
while ( is_object( $if_cond1 ) and method_exists( $if_cond1, 'templateValue' ) )
    $if_cond1 = $if_cond1->templateValue();
unset( $if_cond2 );
unset( $if_cond2 );
$if_cond2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'item', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['item'] : null;
$if_cond3 = compiledFetchAttribute( $if_cond2, 'data_map' );
unset( $if_cond2 );
$if_cond2 = $if_cond3;
$if_cond3 = compiledFetchAttribute( $if_cond2, 'open_in_new_window' );
unset( $if_cond2 );
$if_cond2 = $if_cond3;
$if_cond3 = compiledFetchAttribute( $if_cond2, 'data_int' );
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
$text .= ' target="_blank"';
}
unset( $if_cond );
// if ends

}
unset( $if_cond );
// if ends

// if begins
unset( $if_cond );
unset( $if_cond );
$if_cond = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'a_class', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['a_class'] : null;
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= ' class="';
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'a_class', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['a_class'] : null;
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
$var = implode( " ", $var1 );unset( $var1 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= '"';
}
unset( $if_cond );
// if ends

$text .= ' title="';
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'item', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['item'] : null;
$var2 = compiledFetchAttribute( $var1, 'data_map' );
unset( $var1 );
$var1 = $var2;
$var2 = compiledFetchAttribute( $var1, 'location' );
unset( $var1 );
$var1 = $var2;
$var2 = compiledFetchAttribute( $var1, 'data_text' );
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

$text .= '" class="menu-item-link" rel=';
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'item', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['item'] : null;
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
// if begins
unset( $if_cond );
unset( $if_cond );
$if_cond = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'item', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['item'] : null;
$if_cond1 = compiledFetchAttribute( $if_cond, 'data_map' );
unset( $if_cond );
$if_cond = $if_cond1;
$if_cond1 = compiledFetchAttribute( $if_cond, 'location' );
unset( $if_cond );
$if_cond = $if_cond1;
$if_cond1 = compiledFetchAttribute( $if_cond, 'data_text' );
unset( $if_cond );
$if_cond = $if_cond1;
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'item', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['item'] : null;
$var2 = compiledFetchAttribute( $var1, 'data_map' );
unset( $var1 );
$var1 = $var2;
$var2 = compiledFetchAttribute( $var1, 'location' );
unset( $var1 );
$var1 = $var2;
$var2 = compiledFetchAttribute( $var1, 'data_text' );
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

}
else
{
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'item', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['item'] : null;
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

}
unset( $if_cond );
// if ends

$text .= '</a></div>
            ';
}
else
{
$text .= '                <li';
// if begins
unset( $if_cond );
unset( $if_cond );
$if_cond = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'li_class', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['li_class'] : null;
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= ' class="';
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'li_class', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['li_class'] : null;
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
$var = implode( " ", $var1 );unset( $var1 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= '"';
}
unset( $if_cond );
// if ends

$text .= '><div class="second_level_menu"><a href=';
// if begins
unset( $if_cond );
unset( $if_cond1 );
unset( $if_cond1 );
$if_cond1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'ui_context', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['ui_context'] : null;
if (! isset( $if_cond1 ) ) $if_cond1 = NULL;
while ( is_object( $if_cond1 ) and method_exists( $if_cond1, 'templateValue' ) )
    $if_cond1 = $if_cond1->templateValue();
$if_cond = ( ( $if_cond1 ) == ( 'browse' ) );
unset( $if_cond1 );
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
unset( $var );
unset( $var1 );
unset( $var3 );
unset( $var3 );
$var3 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'item', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['item'] : null;
$var4 = compiledFetchAttribute( $var3, 'node_id' );
unset( $var3 );
$var3 = $var4;
if (! isset( $var3 ) ) $var3 = NULL;
while ( is_object( $var3 ) and method_exists( $var3, 'templateValue' ) )
    $var3 = $var3->templateValue();
while ( is_object( $var3 ) and method_exists( $var3, 'templateValue' ) )
    $var3 = $var3->templateValue();
$var1 = ( 'content/browse/' . $var3 );
unset( $var3 );
if (! isset( $var1 ) ) $var1 = NULL;
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

}
else
{
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'item', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['item'] : null;
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

}
unset( $if_cond );
// if ends

// if begins
unset( $if_cond );
unset( $if_cond );
$if_cond = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'a_class', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['a_class'] : null;
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= ' class="';
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'a_class', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['a_class'] : null;
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
$var = implode( " ", $var1 );unset( $var1 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= '"';
}
unset( $if_cond );
// if ends

$text .= '>';
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'item', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['item'] : null;
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

$text .= '</a></div>
            ';
}
unset( $if_cond );
// if ends

$text .= '
            ';
// if begins
unset( $if_cond );
unset( $if_cond1 );
unset( $if_cond1 );
$if_cond1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'current_node_in_path_2', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['current_node_in_path_2'] : null;
if (! isset( $if_cond1 ) ) $if_cond1 = NULL;
while ( is_object( $if_cond1 ) and method_exists( $if_cond1, 'templateValue' ) )
    $if_cond1 = $if_cond1->templateValue();
unset( $if_cond2 );
unset( $if_cond2 );
$if_cond2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'item', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['item'] : null;
$if_cond3 = compiledFetchAttribute( $if_cond2, 'node_id' );
unset( $if_cond2 );
$if_cond2 = $if_cond3;
if (! isset( $if_cond2 ) ) $if_cond2 = NULL;
while ( is_object( $if_cond2 ) and method_exists( $if_cond2, 'templateValue' ) )
    $if_cond2 = $if_cond2->templateValue();
$if_cond = ( ( $if_cond1 ) == ( $if_cond2 ) );
unset( $if_cond1, $if_cond2 );
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '                ';
// def $sub_menu_items
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'item', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['item'] : null;
$var2 = compiledFetchAttribute( $var1, 'node_id' );
unset( $var1 );
$var1 = $var2;
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
unset( $var2 );
unset( $var2 );
$var2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'item', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['item'] : null;
$var3 = compiledFetchAttribute( $var2, 'sort_array' );
unset( $var2 );
$var2 = $var3;
if (! isset( $var2 ) ) $var2 = NULL;
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
$var = call_user_func_array( array( new eZContentFunctionCollection(), 'fetchObjectTree' ),
  array(     'parent_node_id' => $var1,
    'sort_by' => $var2,
    'only_translated' => false,
    'language' => false,
    'offset' => false,
    'limit' => false,
    'depth' => 1,
    'depth_operator' => "le",
    'class_id' => false,
    'attribute_filter' => false,
    'extended_attribute_filter' => false,
    'class_filter_type' => "include",
    'class_filter_array' => array( "folder",
       "feedback_form",
       "folder",
       "feedback_form",
       "gallery",
       "forum",
       "documentation_page",
       "forums",
       "event_calendar",
       "multicalendar",
       "link",
       "blog",
       "frontpage" ),
    'group_by' => false,
    'main_node_only' => false,
    'ignore_visibility' => false,
    'limitation' => null,
    'as_object' => null,
    'objectname_filter' => null,
    'load_data_map' => false ) );
$var = isset( $var['result'] ) ? $var['result'] : null;
unset( $var1, $var2 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( $tpl->hasVariable( 'sub_menu_items', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'sub_menu_items' is already defined.", array (
  0 => 
  array (
    0 => 41,
    1 => 16,
    2 => 3341,
  ),
  1 => 
  array (
    0 => 46,
    1 => 66,
    2 => 3952,
  ),
  2 => 'extension/ezwebin/design/ezwebin/templates/menu/flat_left.tpl',
) );
    $tpl->setVariable( 'sub_menu_items', $var, $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'sub_menu_items', $var, $rootNamespace );
}

// def $sub_menu_items_count
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'sub_menu_items', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['sub_menu_items'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$varData = array( 'value' => $var );
$tpl->processOperator( 'count',
                       array (
),
                       $rootNamespace, $currentNamespace, $varData, false, false );
$var = $varData['value'];
unset( $varData );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( $tpl->hasVariable( 'sub_menu_items_count', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'sub_menu_items_count' is already defined.", array (
  0 => 
  array (
    0 => 41,
    1 => 16,
    2 => 3341,
  ),
  1 => 
  array (
    0 => 46,
    1 => 66,
    2 => 3952,
  ),
  2 => 'extension/ezwebin/design/ezwebin/templates/menu/flat_left.tpl',
) );
    $tpl->setVariable( 'sub_menu_items_count', $var, $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'sub_menu_items_count', $var, $rootNamespace );
}

$text .= '                ';
// if begins
unset( $if_cond );
unset( $if_cond );
$if_cond = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'sub_menu_items_count', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['sub_menu_items_count'] : null;
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '                <ul class="submenu-list">
                    ';
// foreach begins
$skipDelimiter = true;
if ( !isset( $fe_variable_stack_e93438d6dc9d58cd56510383f81607a4_4 ) ) $fe_variable_stack_e93438d6dc9d58cd56510383f81607a4_4 = array();
$fe_variable_stack_e93438d6dc9d58cd56510383f81607a4_4[] = compact( 'fe_array_e93438d6dc9d58cd56510383f81607a4_4', 'fe_array_keys_e93438d6dc9d58cd56510383f81607a4_4', 'fe_n_items_e93438d6dc9d58cd56510383f81607a4_4', 'fe_n_items_processed_e93438d6dc9d58cd56510383f81607a4_4', 'fe_i_e93438d6dc9d58cd56510383f81607a4_4', 'fe_key_e93438d6dc9d58cd56510383f81607a4_4', 'fe_val_e93438d6dc9d58cd56510383f81607a4_4', 'fe_offset_e93438d6dc9d58cd56510383f81607a4_4', 'fe_max_e93438d6dc9d58cd56510383f81607a4_4', 'fe_reverse_e93438d6dc9d58cd56510383f81607a4_4', 'fe_first_val_e93438d6dc9d58cd56510383f81607a4_4', 'fe_last_val_e93438d6dc9d58cd56510383f81607a4_4' );
unset( $fe_array_e93438d6dc9d58cd56510383f81607a4_4 );
unset( $fe_array_e93438d6dc9d58cd56510383f81607a4_4 );
$fe_array_e93438d6dc9d58cd56510383f81607a4_4 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'sub_menu_items', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['sub_menu_items'] : null;
if (! isset( $fe_array_e93438d6dc9d58cd56510383f81607a4_4 ) ) $fe_array_e93438d6dc9d58cd56510383f81607a4_4 = NULL;
while ( is_object( $fe_array_e93438d6dc9d58cd56510383f81607a4_4 ) and method_exists( $fe_array_e93438d6dc9d58cd56510383f81607a4_4, 'templateValue' ) )
    $fe_array_e93438d6dc9d58cd56510383f81607a4_4 = $fe_array_e93438d6dc9d58cd56510383f81607a4_4->templateValue();

$fe_array_keys_e93438d6dc9d58cd56510383f81607a4_4 = is_array( $fe_array_e93438d6dc9d58cd56510383f81607a4_4 ) ? array_keys( $fe_array_e93438d6dc9d58cd56510383f81607a4_4 ) : array();
$fe_n_items_e93438d6dc9d58cd56510383f81607a4_4 = count( $fe_array_keys_e93438d6dc9d58cd56510383f81607a4_4 );
$fe_n_items_processed_e93438d6dc9d58cd56510383f81607a4_4 = 0;
$fe_offset_e93438d6dc9d58cd56510383f81607a4_4 = 0;
$fe_max_e93438d6dc9d58cd56510383f81607a4_4 = $fe_n_items_e93438d6dc9d58cd56510383f81607a4_4 - $fe_offset_e93438d6dc9d58cd56510383f81607a4_4;
$fe_reverse_e93438d6dc9d58cd56510383f81607a4_4 = false;
if ( $fe_offset_e93438d6dc9d58cd56510383f81607a4_4 < 0 || $fe_offset_e93438d6dc9d58cd56510383f81607a4_4 >= $fe_n_items_e93438d6dc9d58cd56510383f81607a4_4 )
{
    $fe_offset_e93438d6dc9d58cd56510383f81607a4_4 = ( $fe_offset_e93438d6dc9d58cd56510383f81607a4_4 < 0 ) ? 0 : $fe_n_items_e93438d6dc9d58cd56510383f81607a4_4;
    if ( $fe_n_items_e93438d6dc9d58cd56510383f81607a4_4 || $fe_offset_e93438d6dc9d58cd56510383f81607a4_4 < 0 )
 {
        eZDebug::writeWarning("Invalid 'offset' parameter specified: '$fe_offset_e93438d6dc9d58cd56510383f81607a4_4'. Array count: $fe_n_items_e93438d6dc9d58cd56510383f81607a4_4");   
}
}
if ( $fe_max_e93438d6dc9d58cd56510383f81607a4_4 < 0 || $fe_offset_e93438d6dc9d58cd56510383f81607a4_4 + $fe_max_e93438d6dc9d58cd56510383f81607a4_4 > $fe_n_items_e93438d6dc9d58cd56510383f81607a4_4 )
{
    if ( $fe_max_e93438d6dc9d58cd56510383f81607a4_4 < 0 )
 eZDebug::writeWarning("Invalid 'max' parameter specified: $fe_max_e93438d6dc9d58cd56510383f81607a4_4");
    $fe_max_e93438d6dc9d58cd56510383f81607a4_4 = $fe_n_items_e93438d6dc9d58cd56510383f81607a4_4 - $fe_offset_e93438d6dc9d58cd56510383f81607a4_4;
}
if ( $fe_reverse_e93438d6dc9d58cd56510383f81607a4_4 )
{
    $fe_first_val_e93438d6dc9d58cd56510383f81607a4_4 = $fe_n_items_e93438d6dc9d58cd56510383f81607a4_4 - 1 - $fe_offset_e93438d6dc9d58cd56510383f81607a4_4;
    $fe_last_val_e93438d6dc9d58cd56510383f81607a4_4  = 0;
}
else
{
    $fe_first_val_e93438d6dc9d58cd56510383f81607a4_4 = $fe_offset_e93438d6dc9d58cd56510383f81607a4_4;
    $fe_last_val_e93438d6dc9d58cd56510383f81607a4_4  = $fe_n_items_e93438d6dc9d58cd56510383f81607a4_4 - 1;
}
// foreach
for ( $fe_i_e93438d6dc9d58cd56510383f81607a4_4 = $fe_first_val_e93438d6dc9d58cd56510383f81607a4_4; $fe_n_items_processed_e93438d6dc9d58cd56510383f81607a4_4 < $fe_max_e93438d6dc9d58cd56510383f81607a4_4 && ( $fe_reverse_e93438d6dc9d58cd56510383f81607a4_4 ? $fe_i_e93438d6dc9d58cd56510383f81607a4_4 >= $fe_last_val_e93438d6dc9d58cd56510383f81607a4_4 : $fe_i_e93438d6dc9d58cd56510383f81607a4_4 <= $fe_last_val_e93438d6dc9d58cd56510383f81607a4_4 ); $fe_reverse_e93438d6dc9d58cd56510383f81607a4_4 ? $fe_i_e93438d6dc9d58cd56510383f81607a4_4-- : $fe_i_e93438d6dc9d58cd56510383f81607a4_4++ )
{
$fe_key_e93438d6dc9d58cd56510383f81607a4_4 = $fe_array_keys_e93438d6dc9d58cd56510383f81607a4_4[$fe_i_e93438d6dc9d58cd56510383f81607a4_4];
$fe_val_e93438d6dc9d58cd56510383f81607a4_4 = $fe_array_e93438d6dc9d58cd56510383f81607a4_4[$fe_key_e93438d6dc9d58cd56510383f81607a4_4];
$vars[$rootNamespace]['subitem'] = $fe_val_e93438d6dc9d58cd56510383f81607a4_4;
$vars[$rootNamespace]['subkey'] = $fe_key_e93438d6dc9d58cd56510383f81607a4_4;
$text .= '                       ';
unset( $var );
unset( $var1 );
unset( $var2 );
unset( $var2 );
$var2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'current_node_in_path_3', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['current_node_in_path_3'] : null;
if (! isset( $var2 ) ) $var2 = NULL;
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
unset( $var3 );
unset( $var3 );
$var3 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'subitem', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['subitem'] : null;
$var4 = compiledFetchAttribute( $var3, 'node_id' );
unset( $var3 );
$var3 = $var4;
if (! isset( $var3 ) ) $var3 = NULL;
while ( is_object( $var3 ) and method_exists( $var3, 'templateValue' ) )
    $var3 = $var3->templateValue();
while ( is_object( $var3 ) and method_exists( $var3, 'templateValue' ) )
    $var3 = $var3->templateValue();
$var1 = ( ( $var2 ) == ( $var3 ) );
unset( $var2, $var3 );
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
if ( $var1 )
{
    $var = array( "selected" );
}
else
{
    
    $var = array (
);
}
unset( $var1 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( array_key_exists( $currentNamespace, $vars ) && array_key_exists( 'a_class', $vars[$currentNamespace] ) )
{
    $vars[$currentNamespace]['a_class'] = $var;
    unset( $var );
}
unset( $var );
unset( $var1 );
unset( $var2 );
unset( $var2 );
$var2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'subkey', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['subkey'] : null;
if (! isset( $var2 ) ) $var2 = NULL;
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
$var1 = ( ( $var2 ) == ( 0 ) );
unset( $var2 );
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
if ( $var1 )
{
    $var = array( "firstli" );
}
else
{
    
    $var = array (
);
}
unset( $var1 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( array_key_exists( $currentNamespace, $vars ) && array_key_exists( 'li_class', $vars[$currentNamespace] ) )
{
    $vars[$currentNamespace]['li_class'] = $var;
    unset( $var );
}
$text .= '                    ';
// if begins
unset( $if_cond );
unset( $if_cond1 );
unset( $if_cond1 );
$if_cond1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'sub_menu_items_count', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['sub_menu_items_count'] : null;
if (! isset( $if_cond1 ) ) $if_cond1 = NULL;
while ( is_object( $if_cond1 ) and method_exists( $if_cond1, 'templateValue' ) )
    $if_cond1 = $if_cond1->templateValue();
unset( $if_cond2 );
unset( $if_cond3 );
unset( $if_cond3 );
$if_cond3 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'subkey', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['subkey'] : null;
if (! isset( $if_cond3 ) ) $if_cond3 = NULL;
while ( is_object( $if_cond3 ) and method_exists( $if_cond3, 'templateValue' ) )
    $if_cond3 = $if_cond3->templateValue();
$if_cond2 = $if_cond3 + 1;
unset( $if_cond3 );
if (! isset( $if_cond2 ) ) $if_cond2 = NULL;
while ( is_object( $if_cond2 ) and method_exists( $if_cond2, 'templateValue' ) )
    $if_cond2 = $if_cond2->templateValue();
$if_cond = ( ( $if_cond1 ) == ( $if_cond2 ) );
unset( $if_cond1, $if_cond2 );
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '                        ';
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'li_class', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['li_class'] : null;
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
if ( is_string( $var1 ) )
    $var = $var1 . implode( '', array( "lastli" ) );
else if( is_array( $var1 ) )
    $var = array_merge( $var1, array( "lastli" ) );
unset( $var1 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( array_key_exists( $currentNamespace, $vars ) && array_key_exists( 'li_class', $vars[$currentNamespace] ) )
{
    $vars[$currentNamespace]['li_class'] = $var;
    unset( $var );
}
$text .= '                    ';
}
unset( $if_cond );
// if ends

$text .= '                    ';
// if begins
unset( $if_cond );
unset( $if_cond1 );
unset( $if_cond1 );
$if_cond1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'subitem', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['subitem'] : null;
$if_cond2 = compiledFetchAttribute( $if_cond1, 'node_id' );
unset( $if_cond1 );
$if_cond1 = $if_cond2;
if (! isset( $if_cond1 ) ) $if_cond1 = NULL;
while ( is_object( $if_cond1 ) and method_exists( $if_cond1, 'templateValue' ) )
    $if_cond1 = $if_cond1->templateValue();
unset( $if_cond2 );
unset( $if_cond2 );
$if_cond2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'current_node_id', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['current_node_id'] : null;
if (! isset( $if_cond2 ) ) $if_cond2 = NULL;
while ( is_object( $if_cond2 ) and method_exists( $if_cond2, 'templateValue' ) )
    $if_cond2 = $if_cond2->templateValue();
$if_cond = ( ( $if_cond1 ) == ( $if_cond2 ) );
unset( $if_cond1, $if_cond2 );
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '                        ';
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'a_class', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['a_class'] : null;
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
if ( is_string( $var1 ) )
    $var = $var1 . implode( '', array( "current" ) );
else if( is_array( $var1 ) )
    $var = array_merge( $var1, array( "current" ) );
unset( $var1 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( array_key_exists( $currentNamespace, $vars ) && array_key_exists( 'a_class', $vars[$currentNamespace] ) )
{
    $vars[$currentNamespace]['a_class'] = $var;
    unset( $var );
}
$text .= '                    ';
}
unset( $if_cond );
// if ends

$text .= '                    ';
// if begins
unset( $if_cond );
unset( $if_cond1 );
unset( $if_cond1 );
$if_cond1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'subitem', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['subitem'] : null;
$if_cond2 = compiledFetchAttribute( $if_cond1, 'class_identifier' );
unset( $if_cond1 );
$if_cond1 = $if_cond2;
if (! isset( $if_cond1 ) ) $if_cond1 = NULL;
while ( is_object( $if_cond1 ) and method_exists( $if_cond1, 'templateValue' ) )
    $if_cond1 = $if_cond1->templateValue();
$if_cond = ( ( $if_cond1 ) == ( 'link' ) );
unset( $if_cond1 );
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '                        <li';
// if begins
unset( $if_cond );
unset( $if_cond );
$if_cond = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'li_class', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['li_class'] : null;
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= ' class="';
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'li_class', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['li_class'] : null;
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
$var = implode( " ", $var1 );unset( $var1 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= '"';
}
unset( $if_cond );
// if ends

$text .= '><div class="third_level_menu"><a ';
// if begins
unset( $if_cond );
unset( $if_cond1 );
unset( $if_cond1 );
$if_cond1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'ui_context', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['ui_context'] : null;
if (! isset( $if_cond1 ) ) $if_cond1 = NULL;
while ( is_object( $if_cond1 ) and method_exists( $if_cond1, 'templateValue' ) )
    $if_cond1 = $if_cond1->templateValue();
$if_cond = ( ( $if_cond1 ) == ( 'browse' ) );
unset( $if_cond1 );
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= 'href=';
unset( $var );
unset( $var1 );
unset( $var3 );
unset( $var3 );
$var3 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'subitem', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['subitem'] : null;
$var4 = compiledFetchAttribute( $var3, 'node_id' );
unset( $var3 );
$var3 = $var4;
if (! isset( $var3 ) ) $var3 = NULL;
while ( is_object( $var3 ) and method_exists( $var3, 'templateValue' ) )
    $var3 = $var3->templateValue();
while ( is_object( $var3 ) and method_exists( $var3, 'templateValue' ) )
    $var3 = $var3->templateValue();
$var1 = ( 'content/browse/' . $var3 );
unset( $var3 );
if (! isset( $var1 ) ) $var1 = NULL;
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

}
else
{
$text .= 'href=';
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'subitem', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['subitem'] : null;
$var2 = compiledFetchAttribute( $var1, 'data_map' );
unset( $var1 );
$var1 = $var2;
$var2 = compiledFetchAttribute( $var1, 'location' );
unset( $var1 );
$var1 = $var2;
$var2 = compiledFetchAttribute( $var1, 'content' );
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

// if begins
unset( $if_cond );
unset( $if_cond1 );
unset( $if_cond2 );
unset( $if_cond2 );
$if_cond2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'subitem', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['subitem'] : null;
$if_cond3 = compiledFetchAttribute( $if_cond2, 'data_map' );
unset( $if_cond2 );
$if_cond2 = $if_cond3;
$if_cond3 = compiledFetchAttribute( $if_cond2, 'open_in_new_window' );
unset( $if_cond2 );
$if_cond2 = $if_cond3;
if (! isset( $if_cond2 ) ) $if_cond2 = NULL;
while ( is_object( $if_cond2 ) and method_exists( $if_cond2, 'templateValue' ) )
    $if_cond2 = $if_cond2->templateValue();
$if_cond1 = isset( $if_cond2 );unset( $if_cond2 );
if (! isset( $if_cond1 ) ) $if_cond1 = NULL;
while ( is_object( $if_cond1 ) and method_exists( $if_cond1, 'templateValue' ) )
    $if_cond1 = $if_cond1->templateValue();
unset( $if_cond2 );
unset( $if_cond2 );
$if_cond2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'subitem', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['subitem'] : null;
$if_cond3 = compiledFetchAttribute( $if_cond2, 'data_map' );
unset( $if_cond2 );
$if_cond2 = $if_cond3;
$if_cond3 = compiledFetchAttribute( $if_cond2, 'open_in_new_window' );
unset( $if_cond2 );
$if_cond2 = $if_cond3;
$if_cond3 = compiledFetchAttribute( $if_cond2, 'data_int' );
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
$text .= ' target="_blank"';
}
unset( $if_cond );
// if ends

}
unset( $if_cond );
// if ends

// if begins
unset( $if_cond );
unset( $if_cond );
$if_cond = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'a_class', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['a_class'] : null;
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= ' class="';
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'a_class', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['a_class'] : null;
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
$var = implode( " ", $var1 );unset( $var1 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= '"';
}
unset( $if_cond );
// if ends

$text .= ' title="';
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'subitem', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['subitem'] : null;
$var2 = compiledFetchAttribute( $var1, 'data_map' );
unset( $var1 );
$var1 = $var2;
$var2 = compiledFetchAttribute( $var1, 'location' );
unset( $var1 );
$var1 = $var2;
$var2 = compiledFetchAttribute( $var1, 'data_text' );
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

$text .= '" class="menu-item-link" rel=';
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'subitem', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['subitem'] : null;
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
// if begins
unset( $if_cond );
unset( $if_cond );
$if_cond = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'subitem', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['subitem'] : null;
$if_cond1 = compiledFetchAttribute( $if_cond, 'data_map' );
unset( $if_cond );
$if_cond = $if_cond1;
$if_cond1 = compiledFetchAttribute( $if_cond, 'location' );
unset( $if_cond );
$if_cond = $if_cond1;
$if_cond1 = compiledFetchAttribute( $if_cond, 'data_text' );
unset( $if_cond );
$if_cond = $if_cond1;
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'subitem', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['subitem'] : null;
$var2 = compiledFetchAttribute( $var1, 'data_map' );
unset( $var1 );
$var1 = $var2;
$var2 = compiledFetchAttribute( $var1, 'location' );
unset( $var1 );
$var1 = $var2;
$var2 = compiledFetchAttribute( $var1, 'data_text' );
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

}
else
{
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'subitem', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['subitem'] : null;
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

}
unset( $if_cond );
// if ends

$text .= '</a></div></li>
                    ';
}
else
{
$text .= '                        <li';
// if begins
unset( $if_cond );
unset( $if_cond );
$if_cond = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'li_class', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['li_class'] : null;
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= ' class="';
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'li_class', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['li_class'] : null;
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
$var = implode( " ", $var1 );unset( $var1 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= '"';
}
unset( $if_cond );
// if ends

$text .= '><div class="third_level_menu"><a href=';
// if begins
unset( $if_cond );
unset( $if_cond1 );
unset( $if_cond1 );
$if_cond1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'ui_context', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['ui_context'] : null;
if (! isset( $if_cond1 ) ) $if_cond1 = NULL;
while ( is_object( $if_cond1 ) and method_exists( $if_cond1, 'templateValue' ) )
    $if_cond1 = $if_cond1->templateValue();
$if_cond = ( ( $if_cond1 ) == ( 'browse' ) );
unset( $if_cond1 );
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
unset( $var );
unset( $var1 );
unset( $var3 );
unset( $var3 );
$var3 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'subitem', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['subitem'] : null;
$var4 = compiledFetchAttribute( $var3, 'node_id' );
unset( $var3 );
$var3 = $var4;
if (! isset( $var3 ) ) $var3 = NULL;
while ( is_object( $var3 ) and method_exists( $var3, 'templateValue' ) )
    $var3 = $var3->templateValue();
while ( is_object( $var3 ) and method_exists( $var3, 'templateValue' ) )
    $var3 = $var3->templateValue();
$var1 = ( 'content/browse/' . $var3 );
unset( $var3 );
if (! isset( $var1 ) ) $var1 = NULL;
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

}
else
{
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'subitem', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['subitem'] : null;
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

}
unset( $if_cond );
// if ends

// if begins
unset( $if_cond );
unset( $if_cond );
$if_cond = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'a_class', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['a_class'] : null;
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= ' class="';
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'a_class', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['a_class'] : null;
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
$var = implode( " ", $var1 );unset( $var1 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= '"';
}
unset( $if_cond );
// if ends

$text .= '>';
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'subitem', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['subitem'] : null;
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

$text .= '</a></div></li>
                    ';
}
unset( $if_cond );
// if ends

$text .= '                    ';
$fe_n_items_processed_e93438d6dc9d58cd56510383f81607a4_4++;
} // foreach
$skipDelimiter = false;
if ( count( $fe_variable_stack_e93438d6dc9d58cd56510383f81607a4_4 ) ) extract( array_pop( $fe_variable_stack_e93438d6dc9d58cd56510383f81607a4_4 ) );

else
{

unset( $fe_array_e93438d6dc9d58cd56510383f81607a4_4 );

unset( $fe_array_keys_e93438d6dc9d58cd56510383f81607a4_4 );

unset( $fe_n_items_e93438d6dc9d58cd56510383f81607a4_4 );

unset( $fe_n_items_processed_e93438d6dc9d58cd56510383f81607a4_4 );

unset( $fe_i_e93438d6dc9d58cd56510383f81607a4_4 );

unset( $fe_key_e93438d6dc9d58cd56510383f81607a4_4 );

unset( $fe_val_e93438d6dc9d58cd56510383f81607a4_4 );

unset( $fe_offset_e93438d6dc9d58cd56510383f81607a4_4 );

unset( $fe_max_e93438d6dc9d58cd56510383f81607a4_4 );

unset( $fe_reverse_e93438d6dc9d58cd56510383f81607a4_4 );

unset( $fe_first_val_e93438d6dc9d58cd56510383f81607a4_4 );

unset( $fe_last_val_e93438d6dc9d58cd56510383f81607a4_4 );

unset( $fe_variable_stack_e93438d6dc9d58cd56510383f81607a4_4 );

}

// foreach ends
$text .= '                </ul>
                ';
}
unset( $if_cond );
// if ends

$text .= '            ';
// undef $sub_menu_items
$tpl->unsetLocalVariable( 'sub_menu_items', $rootNamespace );

// undef $sub_menu_items_count
$tpl->unsetLocalVariable( 'sub_menu_items_count', $rootNamespace );

$text .= '            ';
}
unset( $if_cond );
// if ends

$text .= '            </li>
        ';
$fe_n_items_processed_e93438d6dc9d58cd56510383f81607a4_5++;
} // foreach
$skipDelimiter = false;
if ( count( $fe_variable_stack_e93438d6dc9d58cd56510383f81607a4_5 ) ) extract( array_pop( $fe_variable_stack_e93438d6dc9d58cd56510383f81607a4_5 ) );

else
{

unset( $fe_array_e93438d6dc9d58cd56510383f81607a4_5 );

unset( $fe_array_keys_e93438d6dc9d58cd56510383f81607a4_5 );

unset( $fe_n_items_e93438d6dc9d58cd56510383f81607a4_5 );

unset( $fe_n_items_processed_e93438d6dc9d58cd56510383f81607a4_5 );

unset( $fe_i_e93438d6dc9d58cd56510383f81607a4_5 );

unset( $fe_key_e93438d6dc9d58cd56510383f81607a4_5 );

unset( $fe_val_e93438d6dc9d58cd56510383f81607a4_5 );

unset( $fe_offset_e93438d6dc9d58cd56510383f81607a4_5 );

unset( $fe_max_e93438d6dc9d58cd56510383f81607a4_5 );

unset( $fe_reverse_e93438d6dc9d58cd56510383f81607a4_5 );

unset( $fe_first_val_e93438d6dc9d58cd56510383f81607a4_5 );

unset( $fe_last_val_e93438d6dc9d58cd56510383f81607a4_5 );

unset( $fe_variable_stack_e93438d6dc9d58cd56510383f81607a4_5 );

}

// foreach ends
$text .= '        </ul>
    ';
}
unset( $if_cond );
// if ends

$text .= '    ';
// undef $root_node
$tpl->unsetLocalVariable( 'root_node', $rootNamespace );

// undef $left_menu_items
$tpl->unsetLocalVariable( 'left_menu_items', $rootNamespace );

// undef $left_menu_items_count
$tpl->unsetLocalVariable( 'left_menu_items_count', $rootNamespace );

// undef $a_class
$tpl->unsetLocalVariable( 'a_class', $rootNamespace );

// undef $li_class
$tpl->unsetLocalVariable( 'li_class', $rootNamespace );

// undef $current_node_in_path_2
$tpl->unsetLocalVariable( 'current_node_in_path_2', $rootNamespace );

// undef $current_node_in_path_3
$tpl->unsetLocalVariable( 'current_node_in_path_3', $rootNamespace );

}
else
{
$text .= '
    <div class="contentstructure">
    ';
// def $current_node
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'current_node_id', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['current_node_id'] : null;
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
$var = call_user_func_array( array( new eZContentFunctionCollection(), 'fetchContentNode' ),
  array(     'node_id' => $var1,
    'node_path' => false,
    'language_code' => false,
    'remote_id' => false ) );
$var = isset( $var['result'] ) ? $var['result'] : null;
unset( $var1 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( $tpl->hasVariable( 'current_node', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'current_node' is already defined.", array (
  0 => 
  array (
    0 => 76,
    1 => 4,
    2 => 6143,
  ),
  1 => 
  array (
    0 => 81,
    1 => 146,
    2 => 6878,
  ),
  2 => 'extension/ezwebin/design/ezwebin/templates/menu/flat_left.tpl',
) );
    $tpl->setVariable( 'current_node', $var, $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'current_node', $var, $rootNamespace );
}

// def $chapter_container
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'current_node', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['current_node'] : null;
$var2 = compiledFetchAttribute( $var1, 'path_array' );
unset( $var1 );
$var1 = $var2;
unset( $var3 );
unset( $var3 );
$var3 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'left_menu_depth', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['left_menu_depth'] : null;
if (! isset( $var3 ) ) $var3 = NULL;
while ( is_object( $var3 ) and method_exists( $var3, 'templateValue' ) )
    $var3 = $var3->templateValue();
$var3Data = array( 'value' => $var3 );
$tpl->processOperator( 'inc',
                       array (
),
                       $rootNamespace, $currentNamespace, $var3Data, false, false );
$var3 = $var3Data['value'];
unset( $var3Data );
if (! isset( $var3 ) ) $var3 = NULL;
while ( is_object( $var3 ) and method_exists( $var3, 'templateValue' ) )
    $var3 = $var3->templateValue();
$var2 = compiledFetchAttribute( $var1, $var3 );
unset( $var1 );
$var1 = $var2;
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
$var = call_user_func_array( array( new eZContentFunctionCollection(), 'fetchContentNode' ),
  array(     'node_id' => $var1,
    'node_path' => false,
    'language_code' => false,
    'remote_id' => false ) );
$var = isset( $var['result'] ) ? $var['result'] : null;
unset( $var1 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( $tpl->hasVariable( 'chapter_container', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'chapter_container' is already defined.", array (
  0 => 
  array (
    0 => 76,
    1 => 4,
    2 => 6143,
  ),
  1 => 
  array (
    0 => 81,
    1 => 146,
    2 => 6878,
  ),
  2 => 'extension/ezwebin/design/ezwebin/templates/menu/flat_left.tpl',
) );
    $tpl->setVariable( 'chapter_container', $var, $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'chapter_container', $var, $rootNamespace );
}

// def $class_filter
if ( $tpl->hasVariable( 'class_filter', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'class_filter' is already defined.", array (
  0 => 
  array (
    0 => 76,
    1 => 4,
    2 => 6143,
  ),
  1 => 
  array (
    0 => 81,
    1 => 146,
    2 => 6878,
  ),
  2 => 'extension/ezwebin/design/ezwebin/templates/menu/flat_left.tpl',
) );
    $tpl->setVariable( 'class_filter', array (
  0 => 'folder',
  1 => 'documentation_page',
  2 => 'frontpage',
  3 => 'forums',
), $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'class_filter', array (
  0 => 'folder',
  1 => 'documentation_page',
  2 => 'frontpage',
  3 => 'forums',
), $rootNamespace );
}

// def $depth
unset( $var );
unset( $var1 );
unset( $var2 );
unset( $var2 );
$var2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'current_node', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['current_node'] : null;
$var3 = compiledFetchAttribute( $var2, 'path_array' );
unset( $var2 );
$var2 = $var3;
unset( $var4 );
unset( $var4 );
$var4 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'left_menu_depth', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['left_menu_depth'] : null;
if (! isset( $var4 ) ) $var4 = NULL;
while ( is_object( $var4 ) and method_exists( $var4, 'templateValue' ) )
    $var4 = $var4->templateValue();
$var4Data = array( 'value' => $var4 );
$tpl->processOperator( 'sum',
                       array (
  0 => 
  array (
    0 => 
    array (
      0 => 2,
      1 => 2,
      2 => false,
    ),
  ),
),
                       $rootNamespace, $currentNamespace, $var4Data, false, false );
$var4 = $var4Data['value'];
unset( $var4Data );
if (! isset( $var4 ) ) $var4 = NULL;
while ( is_object( $var4 ) and method_exists( $var4, 'templateValue' ) )
    $var4 = $var4->templateValue();
$var3 = compiledFetchAttribute( $var2, $var4 );
unset( $var2 );
$var2 = $var3;
if (! isset( $var2 ) ) $var2 = NULL;
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
$var1 = isset( $var2 );unset( $var2 );
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
unset( $var2 );
unset( $var3 );
unset( $var3 );
$var3 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'left_menu_depth', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['left_menu_depth'] : null;
if (! isset( $var3 ) ) $var3 = NULL;
while ( is_object( $var3 ) and method_exists( $var3, 'templateValue' ) )
    $var3 = $var3->templateValue();
while ( is_object( $var3 ) and method_exists( $var3, 'templateValue' ) )
    $var3 = $var3->templateValue();
$var2 = $var3 + 3.000000;
unset( $var3 );
if (! isset( $var2 ) ) $var2 = NULL;
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
$var = $var1 ? 0 : $var2;
unset( $var1, $var2 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( $tpl->hasVariable( 'depth', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'depth' is already defined.", array (
  0 => 
  array (
    0 => 76,
    1 => 4,
    2 => 6143,
  ),
  1 => 
  array (
    0 => 81,
    1 => 146,
    2 => 6878,
  ),
  2 => 'extension/ezwebin/design/ezwebin/templates/menu/flat_left.tpl',
) );
    $tpl->setVariable( 'depth', $var, $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'depth', $var, $rootNamespace );
}

// def $node_to_unfold
unset( $var );
unset( $var1 );
unset( $var2 );
unset( $var2 );
$var2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'current_node', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['current_node'] : null;
$var3 = compiledFetchAttribute( $var2, 'path_array' );
unset( $var2 );
$var2 = $var3;
unset( $var4 );
unset( $var4 );
$var4 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'left_menu_depth', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['left_menu_depth'] : null;
if (! isset( $var4 ) ) $var4 = NULL;
while ( is_object( $var4 ) and method_exists( $var4, 'templateValue' ) )
    $var4 = $var4->templateValue();
$var4Data = array( 'value' => $var4 );
$tpl->processOperator( 'sum',
                       array (
  0 => 
  array (
    0 => 
    array (
      0 => 2,
      1 => 2,
      2 => false,
    ),
  ),
),
                       $rootNamespace, $currentNamespace, $var4Data, false, false );
$var4 = $var4Data['value'];
unset( $var4Data );
if (! isset( $var4 ) ) $var4 = NULL;
while ( is_object( $var4 ) and method_exists( $var4, 'templateValue' ) )
    $var4 = $var4->templateValue();
$var3 = compiledFetchAttribute( $var2, $var4 );
unset( $var2 );
$var2 = $var3;
if (! isset( $var2 ) ) $var2 = NULL;
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
$var1 = isset( $var2 );unset( $var2 );
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
unset( $var3 );
unset( $var3 );
$var3 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'current_node', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['current_node'] : null;
$var4 = compiledFetchAttribute( $var3, 'path_array' );
unset( $var3 );
$var3 = $var4;
unset( $var5 );
unset( $var5 );
$var5 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'left_menu_depth', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['left_menu_depth'] : null;
if (! isset( $var5 ) ) $var5 = NULL;
while ( is_object( $var5 ) and method_exists( $var5, 'templateValue' ) )
    $var5 = $var5->templateValue();
$var5Data = array( 'value' => $var5 );
$tpl->processOperator( 'sum',
                       array (
  0 => 
  array (
    0 => 
    array (
      0 => 2,
      1 => 2,
      2 => false,
    ),
  ),
),
                       $rootNamespace, $currentNamespace, $var5Data, false, false );
$var5 = $var5Data['value'];
unset( $var5Data );
if (! isset( $var5 ) ) $var5 = NULL;
while ( is_object( $var5 ) and method_exists( $var5, 'templateValue' ) )
    $var5 = $var5->templateValue();
$var4 = compiledFetchAttribute( $var3, $var5 );
unset( $var3 );
$var3 = $var4;
if (! isset( $var3 ) ) $var3 = NULL;
while ( is_object( $var3 ) and method_exists( $var3, 'templateValue' ) )
    $var3 = $var3->templateValue();
while ( is_object( $var3 ) and method_exists( $var3, 'templateValue' ) )
    $var3 = $var3->templateValue();
$var = $var1 ? $var3 : 0;
unset( $var1, $var3 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( $tpl->hasVariable( 'node_to_unfold', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'node_to_unfold' is already defined.", array (
  0 => 
  array (
    0 => 76,
    1 => 4,
    2 => 6143,
  ),
  1 => 
  array (
    0 => 81,
    1 => 146,
    2 => 6878,
  ),
  2 => 'extension/ezwebin/design/ezwebin/templates/menu/flat_left.tpl',
) );
    $tpl->setVariable( 'node_to_unfold', $var, $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'node_to_unfold', $var, $rootNamespace );
}

// def $contentStructureTree
unset( $var );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$varData = array( 'value' => $var );
$tpl->processOperator( 'content_structure_tree',
                       array (
  0 => 
  array (
    0 => 
    array (
      0 => 4,
      1 => 
      array (
        0 => '',
        1 => 2,
        2 => 'chapter_container',
      ),
      2 => false,
    ),
    1 => 
    array (
      0 => 5,
      1 => 
      array (
        0 => 
        array (
          0 => 3,
          1 => 'node_id',
          2 => false,
        ),
      ),
      2 => false,
    ),
  ),
  1 => 
  array (
    0 => 
    array (
      0 => 4,
      1 => 
      array (
        0 => '',
        1 => 2,
        2 => 'class_filter',
      ),
      2 => false,
    ),
  ),
  2 => 
  array (
    0 => 
    array (
      0 => 4,
      1 => 
      array (
        0 => '',
        1 => 2,
        2 => 'depth',
      ),
      2 => false,
    ),
  ),
  3 => 
  array (
    0 => 
    array (
      0 => 2,
      1 => 0,
      2 => false,
    ),
  ),
  4 => 
  array (
    0 => 
    array (
      0 => 1,
      1 => 'false',
      2 => false,
    ),
  ),
  5 => 
  array (
    0 => 
    array (
      0 => 7,
      1 => false,
      2 => false,
    ),
  ),
  6 => 
  array (
    0 => 
    array (
      0 => 4,
      1 => 
      array (
        0 => '',
        1 => 2,
        2 => 'node_to_unfold',
      ),
      2 => false,
    ),
  ),
),
                       $rootNamespace, $currentNamespace, $varData, false, false );
$var = $varData['value'];
unset( $varData );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( $tpl->hasVariable( 'contentStructureTree', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'contentStructureTree' is already defined.", array (
  0 => 
  array (
    0 => 76,
    1 => 4,
    2 => 6143,
  ),
  1 => 
  array (
    0 => 81,
    1 => 146,
    2 => 6878,
  ),
  2 => 'extension/ezwebin/design/ezwebin/templates/menu/flat_left.tpl',
) );
    $tpl->setVariable( 'contentStructureTree', $var, $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'contentStructureTree', $var, $rootNamespace );
}

$text .= '
    ';
$oldRestoreIncludeArray_3ff6a607d17b12a08b3d924c58b858fb = isset( $restoreIncludeArray ) ? $restoreIncludeArray : array();
$restoreIncludeArray = array();

if ( isset( $currentNamespace ) and isset( $vars[$currentNamespace]['contentStructureTree'] ) )
    $restoreIncludeArray[] = array( $currentNamespace, 'contentStructureTree', $vars[$currentNamespace]['contentStructureTree'] );
elseif ( !isset( $vars[( isset( $currentNamespace ) ? $currentNamespace : '' )]['contentStructureTree'] ) ) 
    $restoreIncludeArray[] = array( ( isset( $currentNamespace ) ? $currentNamespace : '' ), 'contentStructureTree', 'unset' );

unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'contentStructureTree', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['contentStructureTree'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$vars[$currentNamespace]['contentStructureTree'] = $var;
unset( $var );
if ( isset( $currentNamespace ) and isset( $vars[$currentNamespace]['is_root_node'] ) )
    $restoreIncludeArray[] = array( $currentNamespace, 'is_root_node', $vars[$currentNamespace]['is_root_node'] );
elseif ( !isset( $vars[( isset( $currentNamespace ) ? $currentNamespace : '' )]['is_root_node'] ) ) 
    $restoreIncludeArray[] = array( ( isset( $currentNamespace ) ? $currentNamespace : '' ), 'is_root_node', 'unset' );

$vars[$currentNamespace]['is_root_node'] = true;
if ( isset( $currentNamespace ) and isset( $vars[$currentNamespace]['skip_self_node'] ) )
    $restoreIncludeArray[] = array( $currentNamespace, 'skip_self_node', $vars[$currentNamespace]['skip_self_node'] );
elseif ( !isset( $vars[( isset( $currentNamespace ) ? $currentNamespace : '' )]['skip_self_node'] ) ) 
    $restoreIncludeArray[] = array( ( isset( $currentNamespace ) ? $currentNamespace : '' ), 'skip_self_node', 'unset' );

$vars[$currentNamespace]['skip_self_node'] = true;
if ( isset( $currentNamespace ) and isset( $vars[$currentNamespace]['current_node_id'] ) )
    $restoreIncludeArray[] = array( $currentNamespace, 'current_node_id', $vars[$currentNamespace]['current_node_id'] );
elseif ( !isset( $vars[( isset( $currentNamespace ) ? $currentNamespace : '' )]['current_node_id'] ) ) 
    $restoreIncludeArray[] = array( ( isset( $currentNamespace ) ? $currentNamespace : '' ), 'current_node_id', 'unset' );

unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'current_node_id', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['current_node_id'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$vars[$currentNamespace]['current_node_id'] = $var;
unset( $var );
if ( isset( $currentNamespace ) and isset( $vars[$currentNamespace]['unfold_node'] ) )
    $restoreIncludeArray[] = array( $currentNamespace, 'unfold_node', $vars[$currentNamespace]['unfold_node'] );
elseif ( !isset( $vars[( isset( $currentNamespace ) ? $currentNamespace : '' )]['unfold_node'] ) ) 
    $restoreIncludeArray[] = array( ( isset( $currentNamespace ) ? $currentNamespace : '' ), 'unfold_node', 'unset' );

unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'node_to_unfold', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['node_to_unfold'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$vars[$currentNamespace]['unfold_node'] = $var;
unset( $var );
if ( isset( $currentNamespace ) and isset( $vars[$currentNamespace]['chapter_level'] ) )
    $restoreIncludeArray[] = array( $currentNamespace, 'chapter_level', $vars[$currentNamespace]['chapter_level'] );
elseif ( !isset( $vars[( isset( $currentNamespace ) ? $currentNamespace : '' )]['chapter_level'] ) ) 
    $restoreIncludeArray[] = array( ( isset( $currentNamespace ) ? $currentNamespace : '' ), 'chapter_level', 'unset' );

$vars[$currentNamespace]['chapter_level'] = 0;
if ( !isset( $dKeys ) )
{
    $resH = $tpl->resourceHandler( "design" );
    $dKeys = $resH->keys();
}

$resourceFound = false;
if ( file_exists( 'var/ezwebin_site/cache/template/compiled/show_simplified_menu-159930105e913765ee39429236398e27.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$rootNamespace = $currentNamespace;
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/ezwebin/design/ezwebin/templates/simplified_treemenu/show_simplified_menu.tpl' );
include( '' . 'var/ezwebin_site/cache/template/compiled/show_simplified_menu-159930105e913765ee39429236398e27.php' );
$tpl->unsetLocalVariables();
$tpl->destroyLocalVariablesList();
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}
else
{
    $resourceFound = true;
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$rootNamespace = $currentNamespace;
$textElements = array();
$extraParameters = array();
$tpl->processURI( 'extension/ezwebin/design/ezwebin/templates/simplified_treemenu/show_simplified_menu.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}

foreach ( $restoreIncludeArray as $element )
{
    if ( $element[2] === 'unset' )
    {
        unset( $vars[$element[0]][$element[1]] );
        continue;
    }
    $vars[$element[0]][$element[1]] = $element[2];
}
$restoreIncludeArray = $oldRestoreIncludeArray_3ff6a607d17b12a08b3d924c58b858fb;

$text .= '
    ';
// undef $current_node
$tpl->unsetLocalVariable( 'current_node', $rootNamespace );

// undef $chapter_container
$tpl->unsetLocalVariable( 'chapter_container', $rootNamespace );

// undef $class_filter
$tpl->unsetLocalVariable( 'class_filter', $rootNamespace );

// undef $depth
$tpl->unsetLocalVariable( 'depth', $rootNamespace );

// undef $node_to_unfold
$tpl->unsetLocalVariable( 'node_to_unfold', $rootNamespace );

// undef $contentStructureTree
$tpl->unsetLocalVariable( 'contentStructureTree', $rootNamespace );

$text .= '    </div>';
}
unset( $if_cond );
// if ends

// undef $left_menu_root_url
$tpl->unsetLocalVariable( 'left_menu_root_url', $rootNamespace );

// undef $left_menu_depth
$tpl->unsetLocalVariable( 'left_menu_depth', $rootNamespace );

$text .= '
</div></div></div>
<div class="border-bl"><div class="border-br"><div class="border-bc"></div></div></div>
</div>
';

$setArray = $oldSetArray_90d02849dd0fe30cf39a91dab9890a20;
$tpl->Level--;
?>
