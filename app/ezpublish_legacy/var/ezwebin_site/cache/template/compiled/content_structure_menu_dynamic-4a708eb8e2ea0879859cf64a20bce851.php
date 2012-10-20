<?php
// URI:       design/admin/templates/contentstructuremenu/content_structure_menu_dynamic.tpl
// Filename:  design/admin/templates/contentstructuremenu/content_structure_menu_dynamic.tpl
// Timestamp: 1349721948 (Mon Oct 8 18:45:48 UTC 2012)
$oldSetArray_100537522ff1ec29ed46a0e20105e76b = isset( $setArray ) ? $setArray : array();
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

unset( $elseif_cond_2548ad230e8251363a099a99c141d13f_82 );
unset( $elseif_cond_2548ad230e8251363a099a99c141d13f_821 );
unset( $elseif_cond_2548ad230e8251363a099a99c141d13f_821 );
$elseif_cond_2548ad230e8251363a099a99c141d13f_821 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'custom_root_node_id', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['custom_root_node_id'] : null;
if (! isset( $elseif_cond_2548ad230e8251363a099a99c141d13f_821 ) ) $elseif_cond_2548ad230e8251363a099a99c141d13f_821 = NULL;
while ( is_object( $elseif_cond_2548ad230e8251363a099a99c141d13f_821 ) and method_exists( $elseif_cond_2548ad230e8251363a099a99c141d13f_821, 'templateValue' ) )
    $elseif_cond_2548ad230e8251363a099a99c141d13f_821 = $elseif_cond_2548ad230e8251363a099a99c141d13f_821->templateValue();
while ( is_object( $elseif_cond_2548ad230e8251363a099a99c141d13f_821 ) and method_exists( $elseif_cond_2548ad230e8251363a099a99c141d13f_821, 'templateValue' ) )
    $elseif_cond_2548ad230e8251363a099a99c141d13f_821 = $elseif_cond_2548ad230e8251363a099a99c141d13f_821->templateValue();
$elseif_cond_2548ad230e8251363a099a99c141d13f_82 = isset( $elseif_cond_2548ad230e8251363a099a99c141d13f_821 );unset( $elseif_cond_2548ad230e8251363a099a99c141d13f_821 );
if (! isset( $elseif_cond_2548ad230e8251363a099a99c141d13f_82 ) ) $elseif_cond_2548ad230e8251363a099a99c141d13f_82 = NULL;
while ( is_object( $elseif_cond_2548ad230e8251363a099a99c141d13f_82 ) and method_exists( $elseif_cond_2548ad230e8251363a099a99c141d13f_82, 'templateValue' ) )
    $elseif_cond_2548ad230e8251363a099a99c141d13f_82 = $elseif_cond_2548ad230e8251363a099a99c141d13f_82->templateValue();

// if begins
unset( $if_cond );
unset( $if_cond1 );
unset( $if_cond1 );
$if_cond1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'custom_root_node', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['custom_root_node'] : null;
if (! isset( $if_cond1 ) ) $if_cond1 = NULL;
while ( is_object( $if_cond1 ) and method_exists( $if_cond1, 'templateValue' ) )
    $if_cond1 = $if_cond1->templateValue();
$if_cond = isset( $if_cond1 );unset( $if_cond1 );
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '    ';
// def $root_node
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'custom_root_node', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['custom_root_node'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( $tpl->hasVariable( 'root_node', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'root_node' is already defined.", array (
  0 => 
  array (
    0 => 2,
    1 => 4,
    2 => 38,
  ),
  1 => 
  array (
    0 => 3,
    1 => 43,
    2 => 119,
  ),
  2 => 'design/admin/templates/contentstructuremenu/content_structure_menu_dynamic.tpl',
) );
    $tpl->setVariable( 'root_node', $var, $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'root_node', $var, $rootNamespace );
}

// def $root_node_id
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'root_node', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['root_node'] : null;
$var1 = compiledFetchAttribute( $var, 'node_id' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( $tpl->hasVariable( 'root_node_id', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'root_node_id' is already defined.", array (
  0 => 
  array (
    0 => 2,
    1 => 4,
    2 => 38,
  ),
  1 => 
  array (
    0 => 3,
    1 => 43,
    2 => 119,
  ),
  2 => 'design/admin/templates/contentstructuremenu/content_structure_menu_dynamic.tpl',
) );
    $tpl->setVariable( 'root_node_id', $var, $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'root_node_id', $var, $rootNamespace );
}

}
elseif ( $elseif_cond_2548ad230e8251363a099a99c141d13f_82 )
{
$text .= '    ';
// def $root_node_id
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'custom_root_node_id', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['custom_root_node_id'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( $tpl->hasVariable( 'root_node_id', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'root_node_id' is already defined.", array (
  0 => 
  array (
    0 => 5,
    1 => 4,
    2 => 166,
  ),
  1 => 
  array (
    0 => 6,
    1 => 85,
    2 => 292,
  ),
  2 => 'design/admin/templates/contentstructuremenu/content_structure_menu_dynamic.tpl',
) );
    $tpl->setVariable( 'root_node_id', $var, $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'root_node_id', $var, $rootNamespace );
}

// def $root_node
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'root_node_id', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['root_node_id'] : null;
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
    0 => 5,
    1 => 4,
    2 => 166,
  ),
  1 => 
  array (
    0 => 6,
    1 => 85,
    2 => 292,
  ),
  2 => 'design/admin/templates/contentstructuremenu/content_structure_menu_dynamic.tpl',
) );
    $tpl->setVariable( 'root_node', $var, $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'root_node', $var, $rootNamespace );
}

}
else
{
$text .= '    ';
// def $root_node_id
if ( $tpl->hasVariable( 'root_node_id', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'root_node_id' is already defined.", array (
  0 => 
  array (
    0 => 8,
    1 => 4,
    2 => 306,
  ),
  1 => 
  array (
    0 => 9,
    1 => 85,
    2 => 469,
  ),
  2 => 'design/admin/templates/contentstructuremenu/content_structure_menu_dynamic.tpl',
) );
    $tpl->setVariable( 'root_node_id', '2', $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'root_node_id', '2', $rootNamespace );
}

// def $root_node
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'root_node_id', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['root_node_id'] : null;
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
    0 => 8,
    1 => 4,
    2 => 306,
  ),
  1 => 
  array (
    0 => 9,
    1 => 85,
    2 => 469,
  ),
  2 => 'design/admin/templates/contentstructuremenu/content_structure_menu_dynamic.tpl',
) );
    $tpl->setVariable( 'root_node', $var, $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'root_node', $var, $rootNamespace );
}

}
unset( $if_cond );
// if ends

unset( $elseif_cond_2548ad230e8251363a099a99c141d13f_82 );

// if begins
unset( $if_cond );
unset( $if_cond1 );
unset( $if_cond1 );
$if_cond1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'menu_persistence', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['menu_persistence'] : null;
if (! isset( $if_cond1 ) ) $if_cond1 = NULL;
while ( is_object( $if_cond1 ) and method_exists( $if_cond1, 'templateValue' ) )
    $if_cond1 = $if_cond1->templateValue();
$if_cond = !isset( $if_cond1 );unset( $if_cond1 );
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '    ';
// def $menu_persistence
if ( $tpl->hasVariable( 'menu_persistence', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'menu_persistence' is already defined.", array (
  0 => 
  array (
    0 => 12,
    1 => 4,
    2 => 517,
  ),
  1 => 
  array (
    0 => 12,
    1 => 104,
    2 => 617,
  ),
  2 => 'design/admin/templates/contentstructuremenu/content_structure_menu_dynamic.tpl',
) );
    $tpl->setVariable( 'menu_persistence', true, $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'menu_persistence', true, $rootNamespace );
}

}
unset( $if_cond );
// if ends

// if begins
unset( $if_cond );
unset( $if_cond1 );
unset( $if_cond1 );
$if_cond1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'hide_node_list', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['hide_node_list'] : null;
if (! isset( $if_cond1 ) ) $if_cond1 = NULL;
while ( is_object( $if_cond1 ) and method_exists( $if_cond1, 'templateValue' ) )
    $if_cond1 = $if_cond1->templateValue();
$if_cond = !isset( $if_cond1 );unset( $if_cond1 );
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '    ';
// def $hide_node_list
if ( $tpl->hasVariable( 'hide_node_list', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'hide_node_list' is already defined.", array (
  0 => 
  array (
    0 => 15,
    1 => 4,
    2 => 663,
  ),
  1 => 
  array (
    0 => 15,
    1 => 33,
    2 => 692,
  ),
  2 => 'design/admin/templates/contentstructuremenu/content_structure_menu_dynamic.tpl',
) );
    $tpl->setVariable( 'hide_node_list', array (
), $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'hide_node_list', array (
), $rootNamespace );
}

}
unset( $if_cond );
// if ends

// if begins
unset( $if_cond );
unset( $if_cond1 );
unset( $if_cond2 );
unset( $if_cond2 );
$if_cond2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'search_subtree_array', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['search_subtree_array'] : null;
$if_cond3 = compiledFetchAttribute( $if_cond2, 0 );
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
unset( $if_cond3 );
unset( $if_cond3 );
$if_cond3 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'search_subtree_array', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['search_subtree_array'] : null;
$if_cond4 = compiledFetchAttribute( $if_cond3, 0 );
unset( $if_cond3 );
$if_cond3 = $if_cond4;
if (! isset( $if_cond3 ) ) $if_cond3 = NULL;
while ( is_object( $if_cond3 ) and method_exists( $if_cond3, 'templateValue' ) )
    $if_cond3 = $if_cond3->templateValue();
$if_cond2 = ( ( $if_cond3 ) != ( '1' ) );
unset( $if_cond3 );
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
// def $search_node
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'search_subtree_array', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['search_subtree_array'] : null;
$var2 = compiledFetchAttribute( $var1, 0 );
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
if ( $tpl->hasVariable( 'search_node', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'search_node' is already defined.", array (
  0 => 
  array (
    0 => 18,
    1 => 4,
    2 => 788,
  ),
  1 => 
  array (
    0 => 18,
    1 => 93,
    2 => 877,
  ),
  2 => 'design/admin/templates/contentstructuremenu/content_structure_menu_dynamic.tpl',
) );
    $tpl->setVariable( 'search_node', $var, $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'search_node', $var, $rootNamespace );
}

$text .= '    ';
// if begins
unset( $if_cond );
unset( $if_cond1 );
unset( $if_cond1 );
$if_cond1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'search_node', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['search_node'] : null;
$if_cond2 = compiledFetchAttribute( $if_cond1, 'path_array' );
unset( $if_cond1 );
$if_cond1 = $if_cond2;
$if_cond2 = compiledFetchAttribute( $if_cond1, 1 );
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
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'search_node', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['search_node'] : null;
$var1 = compiledFetchAttribute( $var, 'path_array' );
unset( $var );
$var = $var1;
$var1 = compiledFetchAttribute( $var, 1 );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( array_key_exists( $currentNamespace, $vars ) && array_key_exists( 'root_node_id', $vars[$currentNamespace] ) )
{
    $vars[$currentNamespace]['root_node_id'] = $var;
    unset( $var );
}
$text .= '    ';
}
unset( $if_cond );
// if ends

$text .= '    ';
// undef $search_node
$tpl->unsetLocalVariable( 'search_node', $rootNamespace );

}
unset( $if_cond );
// if ends

// def $user_class_group_id
if ( $tpl->hasVariable( 'user_class_group_id', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'user_class_group_id' is already defined.", array (
  0 => 
  array (
    0 => 24,
    1 => 0,
    2 => 1024,
  ),
  1 => 
  array (
    0 => 27,
    1 => 0,
    2 => 1257,
  ),
  2 => 'design/admin/templates/contentstructuremenu/content_structure_menu_dynamic.tpl',
) );
    $tpl->setVariable( 'user_class_group_id', '2', $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'user_class_group_id', '2', $rootNamespace );
}

// def $setup_class_group_id
if ( $tpl->hasVariable( 'setup_class_group_id', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'setup_class_group_id' is already defined.", array (
  0 => 
  array (
    0 => 24,
    1 => 0,
    2 => 1024,
  ),
  1 => 
  array (
    0 => 27,
    1 => 0,
    2 => 1257,
  ),
  2 => 'design/admin/templates/contentstructuremenu/content_structure_menu_dynamic.tpl',
) );
    $tpl->setVariable( 'setup_class_group_id', '4', $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'setup_class_group_id', '4', $rootNamespace );
}

// def $user_root_node_id
if ( $tpl->hasVariable( 'user_root_node_id', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'user_root_node_id' is already defined.", array (
  0 => 
  array (
    0 => 24,
    1 => 0,
    2 => 1024,
  ),
  1 => 
  array (
    0 => 27,
    1 => 0,
    2 => 1257,
  ),
  2 => 'design/admin/templates/contentstructuremenu/content_structure_menu_dynamic.tpl',
) );
    $tpl->setVariable( 'user_root_node_id', '5', $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'user_root_node_id', '5', $rootNamespace );
}

// if begins
unset( $if_cond );
unset( $if_cond1 );
unset( $if_cond1 );
$if_cond1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'root_node_id', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['root_node_id'] : null;
if (! isset( $if_cond1 ) ) $if_cond1 = NULL;
while ( is_object( $if_cond1 ) and method_exists( $if_cond1, 'templateValue' ) )
    $if_cond1 = $if_cond1->templateValue();
$if_cond = ( ( $if_cond1 ) > ( 1 ) );
unset( $if_cond1 );
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '    ';
// def $filter_type
unset( $var );
unset( $var1 );
unset( $var2 );
unset( $var2 );
$var2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'root_node', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['root_node'] : null;
$var3 = compiledFetchAttribute( $var2, 'path_array' );
unset( $var2 );
$var2 = $var3;
if (! isset( $var2 ) ) $var2 = NULL;
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
unset( $var3 );
unset( $var3 );
$var3 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'user_root_node_id', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['user_root_node_id'] : null;
if (! isset( $var3 ) ) $var3 = NULL;
while ( is_object( $var3 ) and method_exists( $var3, 'templateValue' ) )
    $var3 = $var3->templateValue();
while ( is_object( $var3 ) and method_exists( $var3, 'templateValue' ) )
    $var3 = $var3->templateValue();
if( is_string( $var2 ) )
{
  $var1 = ( strpos( $var2, $var3 ) !== false );
}
else if ( is_array( $var2 ) )
{
  $var1 = in_array( $var3, $var2 );
}
else
{
$var1 = false;
}unset( $var2, $var3 );
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
if ( $var1 )
{
    $var = "include";
}
else
{
    
    $var = 'exclude';
}
unset( $var1 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( $tpl->hasVariable( 'filter_type', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'filter_type' is already defined.", array (
  0 => 
  array (
    0 => 29,
    1 => 4,
    2 => 1291,
  ),
  1 => 
  array (
    0 => 30,
    1 => 177,
    2 => 1578,
  ),
  2 => 'design/admin/templates/contentstructuremenu/content_structure_menu_dynamic.tpl',
) );
    $tpl->setVariable( 'filter_type', $var, $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'filter_type', $var, $rootNamespace );
}

// def $filter_groups
unset( $var );
unset( $var1 );
unset( $var2 );
unset( $var2 );
$var2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'root_node', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['root_node'] : null;
$var3 = compiledFetchAttribute( $var2, 'path_array' );
unset( $var2 );
$var2 = $var3;
if (! isset( $var2 ) ) $var2 = NULL;
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
unset( $var3 );
unset( $var3 );
$var3 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'user_root_node_id', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['user_root_node_id'] : null;
if (! isset( $var3 ) ) $var3 = NULL;
while ( is_object( $var3 ) and method_exists( $var3, 'templateValue' ) )
    $var3 = $var3->templateValue();
while ( is_object( $var3 ) and method_exists( $var3, 'templateValue' ) )
    $var3 = $var3->templateValue();
if( is_string( $var2 ) )
{
  $var1 = ( strpos( $var2, $var3 ) !== false );
}
else if ( is_array( $var2 ) )
{
  $var1 = in_array( $var3, $var2 );
}
else
{
$var1 = false;
}unset( $var2, $var3 );
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
if ( $var1 )
{
    unset( $var2 );
unset( $var3 );
unset( $var3 );
$var3 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( "user_class_group_id", $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]["user_class_group_id"] : null;
if (! isset( $var3 ) ) $var3 = NULL;
while ( is_object( $var3 ) and method_exists( $var3, 'templateValue' ) )
    $var3 = $var3->templateValue();
while ( is_object( $var3 ) and method_exists( $var3, 'templateValue' ) )
    $var3 = $var3->templateValue();
$var2 = array( $var3 );unset( $var3 );
if (! isset( $var2 ) ) $var2 = NULL;
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();

    $var = $var2;
}
else
{
    unset( $var3 );
unset( $var4 );
unset( $var4 );
$var4 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( "user_class_group_id", $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]["user_class_group_id"] : null;
if (! isset( $var4 ) ) $var4 = NULL;
while ( is_object( $var4 ) and method_exists( $var4, 'templateValue' ) )
    $var4 = $var4->templateValue();
while ( is_object( $var4 ) and method_exists( $var4, 'templateValue' ) )
    $var4 = $var4->templateValue();
unset( $var5 );
unset( $var5 );
$var5 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( "setup_class_group_id", $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]["setup_class_group_id"] : null;
if (! isset( $var5 ) ) $var5 = NULL;
while ( is_object( $var5 ) and method_exists( $var5, 'templateValue' ) )
    $var5 = $var5->templateValue();
while ( is_object( $var5 ) and method_exists( $var5, 'templateValue' ) )
    $var5 = $var5->templateValue();
$var3 = array( $var4, $var5 );unset( $var4, $var5 );
if (! isset( $var3 ) ) $var3 = NULL;
while ( is_object( $var3 ) and method_exists( $var3, 'templateValue' ) )
    $var3 = $var3->templateValue();

    $var = $var3;
}
unset( $var1, $var2, $var3 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( $tpl->hasVariable( 'filter_groups', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'filter_groups' is already defined.", array (
  0 => 
  array (
    0 => 29,
    1 => 4,
    2 => 1291,
  ),
  1 => 
  array (
    0 => 30,
    1 => 177,
    2 => 1578,
  ),
  2 => 'design/admin/templates/contentstructuremenu/content_structure_menu_dynamic.tpl',
) );
    $tpl->setVariable( 'filter_groups', $var, $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'filter_groups', $var, $rootNamespace );
}

}
else
{
$text .= '    ';
// def $filter_type
if ( $tpl->hasVariable( 'filter_type', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'filter_type' is already defined.", array (
  0 => 
  array (
    0 => 32,
    1 => 4,
    2 => 1592,
  ),
  1 => 
  array (
    0 => 33,
    1 => 40,
    2 => 1670,
  ),
  2 => 'design/admin/templates/contentstructuremenu/content_structure_menu_dynamic.tpl',
) );
    $tpl->setVariable( 'filter_type', 'exclude', $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'filter_type', 'exclude', $rootNamespace );
}

// def $filter_groups
if ( $tpl->hasVariable( 'filter_groups', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'filter_groups' is already defined.", array (
  0 => 
  array (
    0 => 32,
    1 => 4,
    2 => 1592,
  ),
  1 => 
  array (
    0 => 33,
    1 => 40,
    2 => 1670,
  ),
  2 => 'design/admin/templates/contentstructuremenu/content_structure_menu_dynamic.tpl',
) );
    $tpl->setVariable( 'filter_groups', array (
), $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'filter_groups', array (
), $rootNamespace );
}

}
unset( $if_cond );
// if ends

// def $click_action
if ( $tpl->hasVariable( 'click_action', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'click_action' is already defined.", array (
  0 => 
  array (
    0 => 36,
    1 => 0,
    2 => 1680,
  ),
  1 => 
  array (
    0 => 36,
    1 => 82,
    2 => 1762,
  ),
  2 => 'design/admin/templates/contentstructuremenu/content_structure_menu_dynamic.tpl',
) );
    $tpl->setVariable( 'click_action', '', $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'click_action', '', $rootNamespace );
}

// if begins
unset( $if_cond );
unset( $if_cond1 );
unset( $if_cond2 );
unset( $if_cond2 );
$if_cond2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'csm_menu_item_click_action', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['csm_menu_item_click_action'] : null;
if (! isset( $if_cond2 ) ) $if_cond2 = NULL;
while ( is_object( $if_cond2 ) and method_exists( $if_cond2, 'templateValue' ) )
    $if_cond2 = $if_cond2->templateValue();
$if_cond1 = isset( $if_cond2 );unset( $if_cond2 );
if (! isset( $if_cond1 ) ) $if_cond1 = NULL;
while ( is_object( $if_cond1 ) and method_exists( $if_cond1, 'templateValue' ) )
    $if_cond1 = $if_cond1->templateValue();
unset( $if_cond2 );
unset( $if_cond3 );
unset( $if_cond3 );
$if_cond3 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'click_action', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['click_action'] : null;
if (! isset( $if_cond3 ) ) $if_cond3 = NULL;
while ( is_object( $if_cond3 ) and method_exists( $if_cond3, 'templateValue' ) )
    $if_cond3 = $if_cond3->templateValue();
$if_cond2 = !( $if_cond3 );
unset( $if_cond3 );
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
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'csm_menu_item_click_action', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['csm_menu_item_click_action'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( array_key_exists( $currentNamespace, $vars ) && array_key_exists( 'click_action', $vars[$currentNamespace] ) )
{
    $vars[$currentNamespace]['click_action'] = $var;
    unset( $var );
}
}
unset( $if_cond );
// if ends

// if begins
unset( $if_cond );
unset( $if_cond );
$if_cond = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'click_action', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['click_action'] : null;
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '    ';
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'click_action', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['click_action'] : null;
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();

eZURI::transformURI( $var1, false, eZURI::getTransformURIMode() );
$var = $var1;
unset( $var1 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( array_key_exists( $currentNamespace, $vars ) && array_key_exists( 'click_action', $vars[$currentNamespace] ) )
{
    $vars[$currentNamespace]['click_action'] = $var;
    unset( $var );
}
}
unset( $if_cond );
// if ends

$text .= '
<script type="text/javascript">
var treeMenu;
(function(){';
unset( $cacheKeys );
unset( $cacheKeys1 );
unset( $cacheKeys1 );
$cacheKeys1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'root_node_id', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['root_node_id'] : null;
if (! isset( $cacheKeys1 ) ) $cacheKeys1 = NULL;
while ( is_object( $cacheKeys1 ) and method_exists( $cacheKeys1, 'templateValue' ) )
    $cacheKeys1 = $cacheKeys1->templateValue();
while ( is_object( $cacheKeys1 ) and method_exists( $cacheKeys1, 'templateValue' ) )
    $cacheKeys1 = $cacheKeys1->templateValue();
unset( $cacheKeys2 );
unset( $cacheKeys2 );
$cacheKeys2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'access_type', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['access_type'] : null;
if (! isset( $cacheKeys2 ) ) $cacheKeys2 = NULL;
while ( is_object( $cacheKeys2 ) and method_exists( $cacheKeys2, 'templateValue' ) )
    $cacheKeys2 = $cacheKeys2->templateValue();
while ( is_object( $cacheKeys2 ) and method_exists( $cacheKeys2, 'templateValue' ) )
    $cacheKeys2 = $cacheKeys2->templateValue();
$cacheKeys = array( $cacheKeys1, $cacheKeys2 );unset( $cacheKeys1, $cacheKeys2 );
if (! isset( $cacheKeys ) ) $cacheKeys = NULL;
while ( is_object( $cacheKeys ) and method_exists( $cacheKeys, 'templateValue' ) )
    $cacheKeys = $cacheKeys->templateValue();

$subtreeExpiry = NULL;
$cacheKeys = array( $cacheKeys, "49_0_49_62_design/admin/templates/contentstructuremenu/content_structure_menu_dynamic.tpl", "ezwebin_site_admin" );

list($cacheHandler_df722cd69f1b47012ce7f2e1ea081d57, $contentData) =
  eZTemplateCacheBlock::retrieve( $cacheKeys, $subtreeExpiry, null, true );
if ( !( $contentData instanceof eZClusterFileFailure ) )
{

$text .= $contentData;
    unset( $contentData );
}
else
{
    unset( $contentData );
if ( !isset( $textStack ) )
    $textStack = array();
$textStack[] = $text;
$text = '';
$text .= '    ';
// def $root_node_url
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'root_node', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['root_node'] : null;
$var1 = compiledFetchAttribute( $var, 'url' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( $tpl->hasVariable( 'root_node_url', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'root_node_url' is already defined.", array (
  0 => 
  array (
    0 => 50,
    1 => 4,
    2 => 2107,
  ),
  1 => 
  array (
    0 => 50,
    1 => 39,
    2 => 2142,
  ),
  2 => 'design/admin/templates/contentstructuremenu/content_structure_menu_dynamic.tpl',
) );
    $tpl->setVariable( 'root_node_url', $var, $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'root_node_url', $var, $rootNamespace );
}

$text .= '    ';
unset( $elseif_cond_2548ad230e8251363a099a99c141d13f_91 );
unset( $elseif_cond_2548ad230e8251363a099a99c141d13f_911 );
unset( $elseif_cond_2548ad230e8251363a099a99c141d13f_911 );
$elseif_cond_2548ad230e8251363a099a99c141d13f_911 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'root_node_url', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['root_node_url'] : null;
if (! isset( $elseif_cond_2548ad230e8251363a099a99c141d13f_911 ) ) $elseif_cond_2548ad230e8251363a099a99c141d13f_911 = NULL;
while ( is_object( $elseif_cond_2548ad230e8251363a099a99c141d13f_911 ) and method_exists( $elseif_cond_2548ad230e8251363a099a99c141d13f_911, 'templateValue' ) )
    $elseif_cond_2548ad230e8251363a099a99c141d13f_911 = $elseif_cond_2548ad230e8251363a099a99c141d13f_911->templateValue();
while ( is_object( $elseif_cond_2548ad230e8251363a099a99c141d13f_911 ) and method_exists( $elseif_cond_2548ad230e8251363a099a99c141d13f_911, 'templateValue' ) )
    $elseif_cond_2548ad230e8251363a099a99c141d13f_911 = $elseif_cond_2548ad230e8251363a099a99c141d13f_911->templateValue();
$elseif_cond_2548ad230e8251363a099a99c141d13f_91 = ( ( $elseif_cond_2548ad230e8251363a099a99c141d13f_911 ) == ( '' ) );
unset( $elseif_cond_2548ad230e8251363a099a99c141d13f_911 );
if (! isset( $elseif_cond_2548ad230e8251363a099a99c141d13f_91 ) ) $elseif_cond_2548ad230e8251363a099a99c141d13f_91 = NULL;
while ( is_object( $elseif_cond_2548ad230e8251363a099a99c141d13f_91 ) and method_exists( $elseif_cond_2548ad230e8251363a099a99c141d13f_91, 'templateValue' ) )
    $elseif_cond_2548ad230e8251363a099a99c141d13f_91 = $elseif_cond_2548ad230e8251363a099a99c141d13f_91->templateValue();

// if begins
unset( $if_cond );
unset( $if_cond1 );
unset( $if_cond1 );
$if_cond1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'root_node_id', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['root_node_id'] : null;
if (! isset( $if_cond1 ) ) $if_cond1 = NULL;
while ( is_object( $if_cond1 ) and method_exists( $if_cond1, 'templateValue' ) )
    $if_cond1 = $if_cond1->templateValue();
$if_cond = ( ( $if_cond1 ) == ( 1 ) );
unset( $if_cond1 );
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '        ';
if ( array_key_exists( $currentNamespace, $vars ) && array_key_exists( 'root_node_url', $vars[$currentNamespace] ) )
{
    $vars[$currentNamespace]['root_node_url'] = 'content/dashboard';
}
$text .= '    ';
}
elseif ( $elseif_cond_2548ad230e8251363a099a99c141d13f_91 )
{
$text .= '        ';
unset( $var );
unset( $var2 );
unset( $var2 );
$var2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'root_node_id', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['root_node_id'] : null;
if (! isset( $var2 ) ) $var2 = NULL;
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
$var = ( 'content/view/full/' . $var2 );
unset( $var2 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( array_key_exists( $currentNamespace, $vars ) && array_key_exists( 'root_node_url', $vars[$currentNamespace] ) )
{
    $vars[$currentNamespace]['root_node_url'] = $var;
    unset( $var );
}
$text .= '    ';
}
unset( $if_cond );
// if ends

unset( $elseif_cond_2548ad230e8251363a099a99c141d13f_91 );

$text .= '
    var rootNode = {"node_id":';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'root_node_id', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['root_node_id'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= ',"object_id":';
// if begins
unset( $if_cond );
unset( $if_cond );
$if_cond = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'root_node', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['root_node'] : null;
$if_cond1 = compiledFetchAttribute( $if_cond, 'object' );
unset( $if_cond );
$if_cond = $if_cond1;
$if_cond1 = compiledFetchAttribute( $if_cond, 'id' );
unset( $if_cond );
$if_cond = $if_cond1;
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'root_node', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['root_node'] : null;
$var1 = compiledFetchAttribute( $var, 'object' );
unset( $var );
$var = $var1;
$var1 = compiledFetchAttribute( $var, 'id' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

}
else
{
$text .= '0';
}
unset( $if_cond );
// if ends

$text .= ',"class_id":';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'root_node', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['root_node'] : null;
$var1 = compiledFetchAttribute( $var, 'object' );
unset( $var );
$var = $var1;
$var1 = compiledFetchAttribute( $var, 'contentclass_id' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= ',"has_children":';
// if begins
unset( $if_cond );
unset( $if_cond );
$if_cond = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'root_node', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['root_node'] : null;
$if_cond1 = compiledFetchAttribute( $if_cond, 'children_count' );
unset( $if_cond );
$if_cond = $if_cond1;
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= 'true';
}
else
{
$text .= 'false';
}
unset( $if_cond );
// if ends

$text .= ',"name":"';
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'root_node', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['root_node'] : null;
$var2 = compiledFetchAttribute( $var1, 'name' );
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

$text .= '","url":';
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'root_node_url', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['root_node_url'] : null;
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

$text .= ',"modified_subnode":';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'root_node', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['root_node'] : null;
$var1 = compiledFetchAttribute( $var, 'modified_subnode' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= ',"languages":["';
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'root_node', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['root_node'] : null;
$var2 = compiledFetchAttribute( $var1, 'object' );
unset( $var1 );
$var1 = $var2;
$var2 = compiledFetchAttribute( $var1, 'language_codes' );
unset( $var1 );
$var1 = $var2;
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
$var = implode( "\", \"", $var1 );unset( $var1 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= '"],"class_list":[';
// foreach begins
$skipDelimiter = true;
if ( !isset( $fe_variable_stack_2548ad230e8251363a099a99c141d13f_14 ) ) $fe_variable_stack_2548ad230e8251363a099a99c141d13f_14 = array();
$fe_variable_stack_2548ad230e8251363a099a99c141d13f_14[] = compact( 'fe_array_2548ad230e8251363a099a99c141d13f_14', 'fe_array_keys_2548ad230e8251363a099a99c141d13f_14', 'fe_n_items_2548ad230e8251363a099a99c141d13f_14', 'fe_n_items_processed_2548ad230e8251363a099a99c141d13f_14', 'fe_i_2548ad230e8251363a099a99c141d13f_14', 'fe_key_2548ad230e8251363a099a99c141d13f_14', 'fe_val_2548ad230e8251363a099a99c141d13f_14', 'fe_offset_2548ad230e8251363a099a99c141d13f_14', 'fe_max_2548ad230e8251363a099a99c141d13f_14', 'fe_reverse_2548ad230e8251363a099a99c141d13f_14', 'fe_first_val_2548ad230e8251363a099a99c141d13f_14', 'fe_last_val_2548ad230e8251363a099a99c141d13f_14' );
unset( $fe_array_2548ad230e8251363a099a99c141d13f_14 );
unset( $fe_array_2548ad230e8251363a099a99c141d13f_141 );
unset( $fe_array_2548ad230e8251363a099a99c141d13f_141 );
$fe_array_2548ad230e8251363a099a99c141d13f_141 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'filter_groups', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['filter_groups'] : null;
if (! isset( $fe_array_2548ad230e8251363a099a99c141d13f_141 ) ) $fe_array_2548ad230e8251363a099a99c141d13f_141 = NULL;
while ( is_object( $fe_array_2548ad230e8251363a099a99c141d13f_141 ) and method_exists( $fe_array_2548ad230e8251363a099a99c141d13f_141, 'templateValue' ) )
    $fe_array_2548ad230e8251363a099a99c141d13f_141 = $fe_array_2548ad230e8251363a099a99c141d13f_141->templateValue();
while ( is_object( $fe_array_2548ad230e8251363a099a99c141d13f_141 ) and method_exists( $fe_array_2548ad230e8251363a099a99c141d13f_141, 'templateValue' ) )
    $fe_array_2548ad230e8251363a099a99c141d13f_141 = $fe_array_2548ad230e8251363a099a99c141d13f_141->templateValue();
unset( $fe_array_2548ad230e8251363a099a99c141d13f_142 );
unset( $fe_array_2548ad230e8251363a099a99c141d13f_142 );
$fe_array_2548ad230e8251363a099a99c141d13f_142 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'root_node', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['root_node'] : null;
if (! isset( $fe_array_2548ad230e8251363a099a99c141d13f_142 ) ) $fe_array_2548ad230e8251363a099a99c141d13f_142 = NULL;
while ( is_object( $fe_array_2548ad230e8251363a099a99c141d13f_142 ) and method_exists( $fe_array_2548ad230e8251363a099a99c141d13f_142, 'templateValue' ) )
    $fe_array_2548ad230e8251363a099a99c141d13f_142 = $fe_array_2548ad230e8251363a099a99c141d13f_142->templateValue();
while ( is_object( $fe_array_2548ad230e8251363a099a99c141d13f_142 ) and method_exists( $fe_array_2548ad230e8251363a099a99c141d13f_142, 'templateValue' ) )
    $fe_array_2548ad230e8251363a099a99c141d13f_142 = $fe_array_2548ad230e8251363a099a99c141d13f_142->templateValue();
unset( $fe_array_2548ad230e8251363a099a99c141d13f_143 );
unset( $fe_array_2548ad230e8251363a099a99c141d13f_143 );
$fe_array_2548ad230e8251363a099a99c141d13f_143 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'filter_type', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['filter_type'] : null;
if (! isset( $fe_array_2548ad230e8251363a099a99c141d13f_143 ) ) $fe_array_2548ad230e8251363a099a99c141d13f_143 = NULL;
while ( is_object( $fe_array_2548ad230e8251363a099a99c141d13f_143 ) and method_exists( $fe_array_2548ad230e8251363a099a99c141d13f_143, 'templateValue' ) )
    $fe_array_2548ad230e8251363a099a99c141d13f_143 = $fe_array_2548ad230e8251363a099a99c141d13f_143->templateValue();
while ( is_object( $fe_array_2548ad230e8251363a099a99c141d13f_143 ) and method_exists( $fe_array_2548ad230e8251363a099a99c141d13f_143, 'templateValue' ) )
    $fe_array_2548ad230e8251363a099a99c141d13f_143 = $fe_array_2548ad230e8251363a099a99c141d13f_143->templateValue();
$fe_array_2548ad230e8251363a099a99c141d13f_14 = call_user_func_array( array( new eZContentFunctionCollection(), 'canInstantiateClassList' ),
  array(     'group_id' => $fe_array_2548ad230e8251363a099a99c141d13f_141,
    'parent_node' => $fe_array_2548ad230e8251363a099a99c141d13f_142,
    'filter_type' => $fe_array_2548ad230e8251363a099a99c141d13f_143,
    'fetch_id' => false,
    'as_object' => true,
    'group_by_class_group' => false ) );
$fe_array_2548ad230e8251363a099a99c141d13f_14 = isset( $fe_array_2548ad230e8251363a099a99c141d13f_14['result'] ) ? $fe_array_2548ad230e8251363a099a99c141d13f_14['result'] : null;
unset( $fe_array_2548ad230e8251363a099a99c141d13f_141, $fe_array_2548ad230e8251363a099a99c141d13f_142, $fe_array_2548ad230e8251363a099a99c141d13f_143 );
if (! isset( $fe_array_2548ad230e8251363a099a99c141d13f_14 ) ) $fe_array_2548ad230e8251363a099a99c141d13f_14 = NULL;
while ( is_object( $fe_array_2548ad230e8251363a099a99c141d13f_14 ) and method_exists( $fe_array_2548ad230e8251363a099a99c141d13f_14, 'templateValue' ) )
    $fe_array_2548ad230e8251363a099a99c141d13f_14 = $fe_array_2548ad230e8251363a099a99c141d13f_14->templateValue();

$fe_array_keys_2548ad230e8251363a099a99c141d13f_14 = is_array( $fe_array_2548ad230e8251363a099a99c141d13f_14 ) ? array_keys( $fe_array_2548ad230e8251363a099a99c141d13f_14 ) : array();
$fe_n_items_2548ad230e8251363a099a99c141d13f_14 = count( $fe_array_keys_2548ad230e8251363a099a99c141d13f_14 );
$fe_n_items_processed_2548ad230e8251363a099a99c141d13f_14 = 0;
$fe_offset_2548ad230e8251363a099a99c141d13f_14 = 0;
$fe_max_2548ad230e8251363a099a99c141d13f_14 = $fe_n_items_2548ad230e8251363a099a99c141d13f_14 - $fe_offset_2548ad230e8251363a099a99c141d13f_14;
$fe_reverse_2548ad230e8251363a099a99c141d13f_14 = false;
if ( $fe_offset_2548ad230e8251363a099a99c141d13f_14 < 0 || $fe_offset_2548ad230e8251363a099a99c141d13f_14 >= $fe_n_items_2548ad230e8251363a099a99c141d13f_14 )
{
    $fe_offset_2548ad230e8251363a099a99c141d13f_14 = ( $fe_offset_2548ad230e8251363a099a99c141d13f_14 < 0 ) ? 0 : $fe_n_items_2548ad230e8251363a099a99c141d13f_14;
    if ( $fe_n_items_2548ad230e8251363a099a99c141d13f_14 || $fe_offset_2548ad230e8251363a099a99c141d13f_14 < 0 )
 {
        eZDebug::writeWarning("Invalid 'offset' parameter specified: '$fe_offset_2548ad230e8251363a099a99c141d13f_14'. Array count: $fe_n_items_2548ad230e8251363a099a99c141d13f_14");   
}
}
if ( $fe_max_2548ad230e8251363a099a99c141d13f_14 < 0 || $fe_offset_2548ad230e8251363a099a99c141d13f_14 + $fe_max_2548ad230e8251363a099a99c141d13f_14 > $fe_n_items_2548ad230e8251363a099a99c141d13f_14 )
{
    if ( $fe_max_2548ad230e8251363a099a99c141d13f_14 < 0 )
 eZDebug::writeWarning("Invalid 'max' parameter specified: $fe_max_2548ad230e8251363a099a99c141d13f_14");
    $fe_max_2548ad230e8251363a099a99c141d13f_14 = $fe_n_items_2548ad230e8251363a099a99c141d13f_14 - $fe_offset_2548ad230e8251363a099a99c141d13f_14;
}
if ( $fe_reverse_2548ad230e8251363a099a99c141d13f_14 )
{
    $fe_first_val_2548ad230e8251363a099a99c141d13f_14 = $fe_n_items_2548ad230e8251363a099a99c141d13f_14 - 1 - $fe_offset_2548ad230e8251363a099a99c141d13f_14;
    $fe_last_val_2548ad230e8251363a099a99c141d13f_14  = 0;
}
else
{
    $fe_first_val_2548ad230e8251363a099a99c141d13f_14 = $fe_offset_2548ad230e8251363a099a99c141d13f_14;
    $fe_last_val_2548ad230e8251363a099a99c141d13f_14  = $fe_n_items_2548ad230e8251363a099a99c141d13f_14 - 1;
}
// foreach
for ( $fe_i_2548ad230e8251363a099a99c141d13f_14 = $fe_first_val_2548ad230e8251363a099a99c141d13f_14; $fe_n_items_processed_2548ad230e8251363a099a99c141d13f_14 < $fe_max_2548ad230e8251363a099a99c141d13f_14 && ( $fe_reverse_2548ad230e8251363a099a99c141d13f_14 ? $fe_i_2548ad230e8251363a099a99c141d13f_14 >= $fe_last_val_2548ad230e8251363a099a99c141d13f_14 : $fe_i_2548ad230e8251363a099a99c141d13f_14 <= $fe_last_val_2548ad230e8251363a099a99c141d13f_14 ); $fe_reverse_2548ad230e8251363a099a99c141d13f_14 ? $fe_i_2548ad230e8251363a099a99c141d13f_14-- : $fe_i_2548ad230e8251363a099a99c141d13f_14++ )
{
$fe_key_2548ad230e8251363a099a99c141d13f_14 = $fe_array_keys_2548ad230e8251363a099a99c141d13f_14[$fe_i_2548ad230e8251363a099a99c141d13f_14];
$fe_val_2548ad230e8251363a099a99c141d13f_14 = $fe_array_2548ad230e8251363a099a99c141d13f_14[$fe_key_2548ad230e8251363a099a99c141d13f_14];
$vars[$rootNamespace]['class'] = $fe_val_2548ad230e8251363a099a99c141d13f_14;
if ( $skipDelimiter )
    $skipDelimiter = false;
else
{ // delimiter begins
$text .= ',';
} // delimiter ends

unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'class', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['class'] : null;
$var1 = compiledFetchAttribute( $var, 'id' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$fe_n_items_processed_2548ad230e8251363a099a99c141d13f_14++;
} // foreach
$skipDelimiter = false;
if ( count( $fe_variable_stack_2548ad230e8251363a099a99c141d13f_14 ) ) extract( array_pop( $fe_variable_stack_2548ad230e8251363a099a99c141d13f_14 ) );

else
{

unset( $fe_array_2548ad230e8251363a099a99c141d13f_14 );

unset( $fe_array_keys_2548ad230e8251363a099a99c141d13f_14 );

unset( $fe_n_items_2548ad230e8251363a099a99c141d13f_14 );

unset( $fe_n_items_processed_2548ad230e8251363a099a99c141d13f_14 );

unset( $fe_i_2548ad230e8251363a099a99c141d13f_14 );

unset( $fe_key_2548ad230e8251363a099a99c141d13f_14 );

unset( $fe_val_2548ad230e8251363a099a99c141d13f_14 );

unset( $fe_offset_2548ad230e8251363a099a99c141d13f_14 );

unset( $fe_max_2548ad230e8251363a099a99c141d13f_14 );

unset( $fe_reverse_2548ad230e8251363a099a99c141d13f_14 );

unset( $fe_first_val_2548ad230e8251363a099a99c141d13f_14 );

unset( $fe_last_val_2548ad230e8251363a099a99c141d13f_14 );

unset( $fe_variable_stack_2548ad230e8251363a099a99c141d13f_14 );

}

// foreach ends
$text .= ']};

    ';
unset( $cacheKeys );
unset( $cacheKeys1 );
unset( $cacheKeys2 );
unset( $cacheKeys2 );
$cacheKeys2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'root_node_id', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['root_node_id'] : null;
if (! isset( $cacheKeys2 ) ) $cacheKeys2 = NULL;
while ( is_object( $cacheKeys2 ) and method_exists( $cacheKeys2, 'templateValue' ) )
    $cacheKeys2 = $cacheKeys2->templateValue();
while ( is_object( $cacheKeys2 ) and method_exists( $cacheKeys2, 'templateValue' ) )
    $cacheKeys2 = $cacheKeys2->templateValue();
$cacheKeys1 = ( ( $cacheKeys2 ) > ( 1 ) );
unset( $cacheKeys2 );
if (! isset( $cacheKeys1 ) ) $cacheKeys1 = NULL;
while ( is_object( $cacheKeys1 ) and method_exists( $cacheKeys1, 'templateValue' ) )
    $cacheKeys1 = $cacheKeys1->templateValue();
unset( $cacheKeys2 );
unset( $cacheKeys2 );
$cacheKeys2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'access_type', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['access_type'] : null;
if (! isset( $cacheKeys2 ) ) $cacheKeys2 = NULL;
while ( is_object( $cacheKeys2 ) and method_exists( $cacheKeys2, 'templateValue' ) )
    $cacheKeys2 = $cacheKeys2->templateValue();
while ( is_object( $cacheKeys2 ) and method_exists( $cacheKeys2, 'templateValue' ) )
    $cacheKeys2 = $cacheKeys2->templateValue();
$cacheKeys = array( $cacheKeys1, $cacheKeys2 );unset( $cacheKeys1, $cacheKeys2 );
if (! isset( $cacheKeys ) ) $cacheKeys = NULL;
while ( is_object( $cacheKeys ) and method_exists( $cacheKeys, 'templateValue' ) )
    $cacheKeys = $cacheKeys->templateValue();

$subtreeExpiry = NULL;
$cacheKeys = array( $cacheKeys, "68_4_68_100_design/admin/templates/contentstructuremenu/content_structure_menu_dynamic.tpl", "ezwebin_site_admin" );

list($cacheHandler_20cf1c53b01038963d6a796e466967a9, $contentData) =
  eZTemplateCacheBlock::retrieve( $cacheKeys, $subtreeExpiry, 86400, false );
if ( !( $contentData instanceof eZClusterFileFailure ) )
{

$text .= $contentData;
    unset( $contentData );
}
else
{
    unset( $contentData );
if ( !isset( $textStack ) )
    $textStack = array();
$textStack[] = $text;
$text = '';
$text .= '        ';
// def $iconInfo
unset( $var );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$varData = array( 'value' => $var );
$tpl->processOperator( 'icon_info',
                       array (
  0 => 
  array (
    0 => 
    array (
      0 => 1,
      1 => 'class',
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
if ( $tpl->hasVariable( 'iconInfo', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'iconInfo' is already defined.", array (
  0 => 
  array (
    0 => 69,
    1 => 8,
    2 => 3229,
  ),
  1 => 
  array (
    0 => 70,
    1 => 91,
    2 => 3360,
  ),
  2 => 'design/admin/templates/contentstructuremenu/content_structure_menu_dynamic.tpl',
) );
    $tpl->setVariable( 'iconInfo', $var, $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'iconInfo', $var, $rootNamespace );
}

// def $classIconsSize
if ( $tpl->hasVariable( 'classIconsSize', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'classIconsSize' is already defined.", array (
  0 => 
  array (
    0 => 69,
    1 => 8,
    2 => 3229,
  ),
  1 => 
  array (
    0 => 70,
    1 => 91,
    2 => 3360,
  ),
  2 => 'design/admin/templates/contentstructuremenu/content_structure_menu_dynamic.tpl',
) );
    $tpl->setVariable( 'classIconsSize', 'small', $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'classIconsSize', 'small', $rootNamespace );
}

$text .= '        var params = {"iconsList":[],"contentTreeUrl":"/ezpublish/app/ezpublish_legacy/index.php/ezwebin_site_admin/content/treemenu/","wwwDirPrefix":"/ezpublish/app/ezpublish_legacy/';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'iconInfo', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['iconInfo'] : null;
$var1 = compiledFetchAttribute( $var, 'theme_path' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '/';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'iconInfo', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['iconInfo'] : null;
$var1 = compiledFetchAttribute( $var, 'size_path_list' );
unset( $var );
$var = $var1;
unset( $var2 );
unset( $var2 );
$var2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'classIconsSize', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['classIconsSize'] : null;
if (! isset( $var2 ) ) $var2 = NULL;
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
$var1 = compiledFetchAttribute( $var, $var2 );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '/"};

        params.languages = {';
// foreach begins
$skipDelimiter = true;
if ( !isset( $fe_variable_stack_2548ad230e8251363a099a99c141d13f_15 ) ) $fe_variable_stack_2548ad230e8251363a099a99c141d13f_15 = array();
$fe_variable_stack_2548ad230e8251363a099a99c141d13f_15[] = compact( 'fe_array_2548ad230e8251363a099a99c141d13f_15', 'fe_array_keys_2548ad230e8251363a099a99c141d13f_15', 'fe_n_items_2548ad230e8251363a099a99c141d13f_15', 'fe_n_items_processed_2548ad230e8251363a099a99c141d13f_15', 'fe_i_2548ad230e8251363a099a99c141d13f_15', 'fe_key_2548ad230e8251363a099a99c141d13f_15', 'fe_val_2548ad230e8251363a099a99c141d13f_15', 'fe_offset_2548ad230e8251363a099a99c141d13f_15', 'fe_max_2548ad230e8251363a099a99c141d13f_15', 'fe_reverse_2548ad230e8251363a099a99c141d13f_15', 'fe_first_val_2548ad230e8251363a099a99c141d13f_15', 'fe_last_val_2548ad230e8251363a099a99c141d13f_15' );
unset( $fe_array_2548ad230e8251363a099a99c141d13f_15 );
$fe_array_2548ad230e8251363a099a99c141d13f_15 = call_user_func_array( array( new eZContentFunctionCollection(), 'fetchTranslationList' ),
  array(  ) );
$fe_array_2548ad230e8251363a099a99c141d13f_15 = isset( $fe_array_2548ad230e8251363a099a99c141d13f_15['result'] ) ? $fe_array_2548ad230e8251363a099a99c141d13f_15['result'] : null;
if (! isset( $fe_array_2548ad230e8251363a099a99c141d13f_15 ) ) $fe_array_2548ad230e8251363a099a99c141d13f_15 = NULL;
while ( is_object( $fe_array_2548ad230e8251363a099a99c141d13f_15 ) and method_exists( $fe_array_2548ad230e8251363a099a99c141d13f_15, 'templateValue' ) )
    $fe_array_2548ad230e8251363a099a99c141d13f_15 = $fe_array_2548ad230e8251363a099a99c141d13f_15->templateValue();

$fe_array_keys_2548ad230e8251363a099a99c141d13f_15 = is_array( $fe_array_2548ad230e8251363a099a99c141d13f_15 ) ? array_keys( $fe_array_2548ad230e8251363a099a99c141d13f_15 ) : array();
$fe_n_items_2548ad230e8251363a099a99c141d13f_15 = count( $fe_array_keys_2548ad230e8251363a099a99c141d13f_15 );
$fe_n_items_processed_2548ad230e8251363a099a99c141d13f_15 = 0;
$fe_offset_2548ad230e8251363a099a99c141d13f_15 = 0;
$fe_max_2548ad230e8251363a099a99c141d13f_15 = $fe_n_items_2548ad230e8251363a099a99c141d13f_15 - $fe_offset_2548ad230e8251363a099a99c141d13f_15;
$fe_reverse_2548ad230e8251363a099a99c141d13f_15 = false;
if ( $fe_offset_2548ad230e8251363a099a99c141d13f_15 < 0 || $fe_offset_2548ad230e8251363a099a99c141d13f_15 >= $fe_n_items_2548ad230e8251363a099a99c141d13f_15 )
{
    $fe_offset_2548ad230e8251363a099a99c141d13f_15 = ( $fe_offset_2548ad230e8251363a099a99c141d13f_15 < 0 ) ? 0 : $fe_n_items_2548ad230e8251363a099a99c141d13f_15;
    if ( $fe_n_items_2548ad230e8251363a099a99c141d13f_15 || $fe_offset_2548ad230e8251363a099a99c141d13f_15 < 0 )
 {
        eZDebug::writeWarning("Invalid 'offset' parameter specified: '$fe_offset_2548ad230e8251363a099a99c141d13f_15'. Array count: $fe_n_items_2548ad230e8251363a099a99c141d13f_15");   
}
}
if ( $fe_max_2548ad230e8251363a099a99c141d13f_15 < 0 || $fe_offset_2548ad230e8251363a099a99c141d13f_15 + $fe_max_2548ad230e8251363a099a99c141d13f_15 > $fe_n_items_2548ad230e8251363a099a99c141d13f_15 )
{
    if ( $fe_max_2548ad230e8251363a099a99c141d13f_15 < 0 )
 eZDebug::writeWarning("Invalid 'max' parameter specified: $fe_max_2548ad230e8251363a099a99c141d13f_15");
    $fe_max_2548ad230e8251363a099a99c141d13f_15 = $fe_n_items_2548ad230e8251363a099a99c141d13f_15 - $fe_offset_2548ad230e8251363a099a99c141d13f_15;
}
if ( $fe_reverse_2548ad230e8251363a099a99c141d13f_15 )
{
    $fe_first_val_2548ad230e8251363a099a99c141d13f_15 = $fe_n_items_2548ad230e8251363a099a99c141d13f_15 - 1 - $fe_offset_2548ad230e8251363a099a99c141d13f_15;
    $fe_last_val_2548ad230e8251363a099a99c141d13f_15  = 0;
}
else
{
    $fe_first_val_2548ad230e8251363a099a99c141d13f_15 = $fe_offset_2548ad230e8251363a099a99c141d13f_15;
    $fe_last_val_2548ad230e8251363a099a99c141d13f_15  = $fe_n_items_2548ad230e8251363a099a99c141d13f_15 - 1;
}
// foreach
for ( $fe_i_2548ad230e8251363a099a99c141d13f_15 = $fe_first_val_2548ad230e8251363a099a99c141d13f_15; $fe_n_items_processed_2548ad230e8251363a099a99c141d13f_15 < $fe_max_2548ad230e8251363a099a99c141d13f_15 && ( $fe_reverse_2548ad230e8251363a099a99c141d13f_15 ? $fe_i_2548ad230e8251363a099a99c141d13f_15 >= $fe_last_val_2548ad230e8251363a099a99c141d13f_15 : $fe_i_2548ad230e8251363a099a99c141d13f_15 <= $fe_last_val_2548ad230e8251363a099a99c141d13f_15 ); $fe_reverse_2548ad230e8251363a099a99c141d13f_15 ? $fe_i_2548ad230e8251363a099a99c141d13f_15-- : $fe_i_2548ad230e8251363a099a99c141d13f_15++ )
{
$fe_key_2548ad230e8251363a099a99c141d13f_15 = $fe_array_keys_2548ad230e8251363a099a99c141d13f_15[$fe_i_2548ad230e8251363a099a99c141d13f_15];
$fe_val_2548ad230e8251363a099a99c141d13f_15 = $fe_array_2548ad230e8251363a099a99c141d13f_15[$fe_key_2548ad230e8251363a099a99c141d13f_15];
$vars[$rootNamespace]['language'] = $fe_val_2548ad230e8251363a099a99c141d13f_15;
if ( $skipDelimiter )
    $skipDelimiter = false;
else
{ // delimiter begins
$text .= ',';
} // delimiter ends

$text .= '"';
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

$text .= '":"';
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

$text .= '"';
$fe_n_items_processed_2548ad230e8251363a099a99c141d13f_15++;
} // foreach
$skipDelimiter = false;
if ( count( $fe_variable_stack_2548ad230e8251363a099a99c141d13f_15 ) ) extract( array_pop( $fe_variable_stack_2548ad230e8251363a099a99c141d13f_15 ) );

else
{

unset( $fe_array_2548ad230e8251363a099a99c141d13f_15 );

unset( $fe_array_keys_2548ad230e8251363a099a99c141d13f_15 );

unset( $fe_n_items_2548ad230e8251363a099a99c141d13f_15 );

unset( $fe_n_items_processed_2548ad230e8251363a099a99c141d13f_15 );

unset( $fe_i_2548ad230e8251363a099a99c141d13f_15 );

unset( $fe_key_2548ad230e8251363a099a99c141d13f_15 );

unset( $fe_val_2548ad230e8251363a099a99c141d13f_15 );

unset( $fe_offset_2548ad230e8251363a099a99c141d13f_15 );

unset( $fe_max_2548ad230e8251363a099a99c141d13f_15 );

unset( $fe_reverse_2548ad230e8251363a099a99c141d13f_15 );

unset( $fe_first_val_2548ad230e8251363a099a99c141d13f_15 );

unset( $fe_last_val_2548ad230e8251363a099a99c141d13f_15 );

unset( $fe_variable_stack_2548ad230e8251363a099a99c141d13f_15 );

}

// foreach ends
$text .= '};

        params.classes = {';
// foreach begins
$skipDelimiter = true;
if ( !isset( $fe_variable_stack_2548ad230e8251363a099a99c141d13f_16 ) ) $fe_variable_stack_2548ad230e8251363a099a99c141d13f_16 = array();
$fe_variable_stack_2548ad230e8251363a099a99c141d13f_16[] = compact( 'fe_array_2548ad230e8251363a099a99c141d13f_16', 'fe_array_keys_2548ad230e8251363a099a99c141d13f_16', 'fe_n_items_2548ad230e8251363a099a99c141d13f_16', 'fe_n_items_processed_2548ad230e8251363a099a99c141d13f_16', 'fe_i_2548ad230e8251363a099a99c141d13f_16', 'fe_key_2548ad230e8251363a099a99c141d13f_16', 'fe_val_2548ad230e8251363a099a99c141d13f_16', 'fe_offset_2548ad230e8251363a099a99c141d13f_16', 'fe_max_2548ad230e8251363a099a99c141d13f_16', 'fe_reverse_2548ad230e8251363a099a99c141d13f_16', 'fe_first_val_2548ad230e8251363a099a99c141d13f_16', 'fe_last_val_2548ad230e8251363a099a99c141d13f_16' );
unset( $fe_array_2548ad230e8251363a099a99c141d13f_16 );
$fe_array_2548ad230e8251363a099a99c141d13f_16 = call_user_func_array( array( new eZClassFunctionCollection(), 'fetchClassList' ),
  array(     'class_filter' => false,
    'sort_by' => array() ) );
$fe_array_2548ad230e8251363a099a99c141d13f_16 = isset( $fe_array_2548ad230e8251363a099a99c141d13f_16['result'] ) ? $fe_array_2548ad230e8251363a099a99c141d13f_16['result'] : null;
if (! isset( $fe_array_2548ad230e8251363a099a99c141d13f_16 ) ) $fe_array_2548ad230e8251363a099a99c141d13f_16 = NULL;
while ( is_object( $fe_array_2548ad230e8251363a099a99c141d13f_16 ) and method_exists( $fe_array_2548ad230e8251363a099a99c141d13f_16, 'templateValue' ) )
    $fe_array_2548ad230e8251363a099a99c141d13f_16 = $fe_array_2548ad230e8251363a099a99c141d13f_16->templateValue();

$fe_array_keys_2548ad230e8251363a099a99c141d13f_16 = is_array( $fe_array_2548ad230e8251363a099a99c141d13f_16 ) ? array_keys( $fe_array_2548ad230e8251363a099a99c141d13f_16 ) : array();
$fe_n_items_2548ad230e8251363a099a99c141d13f_16 = count( $fe_array_keys_2548ad230e8251363a099a99c141d13f_16 );
$fe_n_items_processed_2548ad230e8251363a099a99c141d13f_16 = 0;
$fe_offset_2548ad230e8251363a099a99c141d13f_16 = 0;
$fe_max_2548ad230e8251363a099a99c141d13f_16 = $fe_n_items_2548ad230e8251363a099a99c141d13f_16 - $fe_offset_2548ad230e8251363a099a99c141d13f_16;
$fe_reverse_2548ad230e8251363a099a99c141d13f_16 = false;
if ( $fe_offset_2548ad230e8251363a099a99c141d13f_16 < 0 || $fe_offset_2548ad230e8251363a099a99c141d13f_16 >= $fe_n_items_2548ad230e8251363a099a99c141d13f_16 )
{
    $fe_offset_2548ad230e8251363a099a99c141d13f_16 = ( $fe_offset_2548ad230e8251363a099a99c141d13f_16 < 0 ) ? 0 : $fe_n_items_2548ad230e8251363a099a99c141d13f_16;
    if ( $fe_n_items_2548ad230e8251363a099a99c141d13f_16 || $fe_offset_2548ad230e8251363a099a99c141d13f_16 < 0 )
 {
        eZDebug::writeWarning("Invalid 'offset' parameter specified: '$fe_offset_2548ad230e8251363a099a99c141d13f_16'. Array count: $fe_n_items_2548ad230e8251363a099a99c141d13f_16");   
}
}
if ( $fe_max_2548ad230e8251363a099a99c141d13f_16 < 0 || $fe_offset_2548ad230e8251363a099a99c141d13f_16 + $fe_max_2548ad230e8251363a099a99c141d13f_16 > $fe_n_items_2548ad230e8251363a099a99c141d13f_16 )
{
    if ( $fe_max_2548ad230e8251363a099a99c141d13f_16 < 0 )
 eZDebug::writeWarning("Invalid 'max' parameter specified: $fe_max_2548ad230e8251363a099a99c141d13f_16");
    $fe_max_2548ad230e8251363a099a99c141d13f_16 = $fe_n_items_2548ad230e8251363a099a99c141d13f_16 - $fe_offset_2548ad230e8251363a099a99c141d13f_16;
}
if ( $fe_reverse_2548ad230e8251363a099a99c141d13f_16 )
{
    $fe_first_val_2548ad230e8251363a099a99c141d13f_16 = $fe_n_items_2548ad230e8251363a099a99c141d13f_16 - 1 - $fe_offset_2548ad230e8251363a099a99c141d13f_16;
    $fe_last_val_2548ad230e8251363a099a99c141d13f_16  = 0;
}
else
{
    $fe_first_val_2548ad230e8251363a099a99c141d13f_16 = $fe_offset_2548ad230e8251363a099a99c141d13f_16;
    $fe_last_val_2548ad230e8251363a099a99c141d13f_16  = $fe_n_items_2548ad230e8251363a099a99c141d13f_16 - 1;
}
// foreach
for ( $fe_i_2548ad230e8251363a099a99c141d13f_16 = $fe_first_val_2548ad230e8251363a099a99c141d13f_16; $fe_n_items_processed_2548ad230e8251363a099a99c141d13f_16 < $fe_max_2548ad230e8251363a099a99c141d13f_16 && ( $fe_reverse_2548ad230e8251363a099a99c141d13f_16 ? $fe_i_2548ad230e8251363a099a99c141d13f_16 >= $fe_last_val_2548ad230e8251363a099a99c141d13f_16 : $fe_i_2548ad230e8251363a099a99c141d13f_16 <= $fe_last_val_2548ad230e8251363a099a99c141d13f_16 ); $fe_reverse_2548ad230e8251363a099a99c141d13f_16 ? $fe_i_2548ad230e8251363a099a99c141d13f_16-- : $fe_i_2548ad230e8251363a099a99c141d13f_16++ )
{
$fe_key_2548ad230e8251363a099a99c141d13f_16 = $fe_array_keys_2548ad230e8251363a099a99c141d13f_16[$fe_i_2548ad230e8251363a099a99c141d13f_16];
$fe_val_2548ad230e8251363a099a99c141d13f_16 = $fe_array_2548ad230e8251363a099a99c141d13f_16[$fe_key_2548ad230e8251363a099a99c141d13f_16];
$vars[$rootNamespace]['class'] = $fe_val_2548ad230e8251363a099a99c141d13f_16;
if ( $skipDelimiter )
    $skipDelimiter = false;
else
{ // delimiter begins
$text .= ',';
} // delimiter ends

$text .= '"';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'class', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['class'] : null;
$var1 = compiledFetchAttribute( $var, 'id' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '":{name:"';
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'class', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['class'] : null;
$var2 = compiledFetchAttribute( $var1, 'name' );
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

$text .= '",identifier:"';
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'class', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['class'] : null;
$var2 = compiledFetchAttribute( $var1, 'identifier' );
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

$text .= '"}';
$fe_n_items_processed_2548ad230e8251363a099a99c141d13f_16++;
} // foreach
$skipDelimiter = false;
if ( count( $fe_variable_stack_2548ad230e8251363a099a99c141d13f_16 ) ) extract( array_pop( $fe_variable_stack_2548ad230e8251363a099a99c141d13f_16 ) );

else
{

unset( $fe_array_2548ad230e8251363a099a99c141d13f_16 );

unset( $fe_array_keys_2548ad230e8251363a099a99c141d13f_16 );

unset( $fe_n_items_2548ad230e8251363a099a99c141d13f_16 );

unset( $fe_n_items_processed_2548ad230e8251363a099a99c141d13f_16 );

unset( $fe_i_2548ad230e8251363a099a99c141d13f_16 );

unset( $fe_key_2548ad230e8251363a099a99c141d13f_16 );

unset( $fe_val_2548ad230e8251363a099a99c141d13f_16 );

unset( $fe_offset_2548ad230e8251363a099a99c141d13f_16 );

unset( $fe_max_2548ad230e8251363a099a99c141d13f_16 );

unset( $fe_reverse_2548ad230e8251363a099a99c141d13f_16 );

unset( $fe_first_val_2548ad230e8251363a099a99c141d13f_16 );

unset( $fe_last_val_2548ad230e8251363a099a99c141d13f_16 );

unset( $fe_variable_stack_2548ad230e8251363a099a99c141d13f_16 );

}

// foreach ends
$text .= '};

        ';
// foreach begins
$skipDelimiter = true;
if ( !isset( $fe_variable_stack_2548ad230e8251363a099a99c141d13f_17 ) ) $fe_variable_stack_2548ad230e8251363a099a99c141d13f_17 = array();
$fe_variable_stack_2548ad230e8251363a099a99c141d13f_17[] = compact( 'fe_array_2548ad230e8251363a099a99c141d13f_17', 'fe_array_keys_2548ad230e8251363a099a99c141d13f_17', 'fe_n_items_2548ad230e8251363a099a99c141d13f_17', 'fe_n_items_processed_2548ad230e8251363a099a99c141d13f_17', 'fe_i_2548ad230e8251363a099a99c141d13f_17', 'fe_key_2548ad230e8251363a099a99c141d13f_17', 'fe_val_2548ad230e8251363a099a99c141d13f_17', 'fe_offset_2548ad230e8251363a099a99c141d13f_17', 'fe_max_2548ad230e8251363a099a99c141d13f_17', 'fe_reverse_2548ad230e8251363a099a99c141d13f_17', 'fe_first_val_2548ad230e8251363a099a99c141d13f_17', 'fe_last_val_2548ad230e8251363a099a99c141d13f_17' );
unset( $fe_array_2548ad230e8251363a099a99c141d13f_17 );
unset( $fe_array_2548ad230e8251363a099a99c141d13f_17 );
$fe_array_2548ad230e8251363a099a99c141d13f_17 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'iconInfo', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['iconInfo'] : null;
$fe_array_2548ad230e8251363a099a99c141d13f_171 = compiledFetchAttribute( $fe_array_2548ad230e8251363a099a99c141d13f_17, 'icons' );
unset( $fe_array_2548ad230e8251363a099a99c141d13f_17 );
$fe_array_2548ad230e8251363a099a99c141d13f_17 = $fe_array_2548ad230e8251363a099a99c141d13f_171;
if (! isset( $fe_array_2548ad230e8251363a099a99c141d13f_17 ) ) $fe_array_2548ad230e8251363a099a99c141d13f_17 = NULL;
while ( is_object( $fe_array_2548ad230e8251363a099a99c141d13f_17 ) and method_exists( $fe_array_2548ad230e8251363a099a99c141d13f_17, 'templateValue' ) )
    $fe_array_2548ad230e8251363a099a99c141d13f_17 = $fe_array_2548ad230e8251363a099a99c141d13f_17->templateValue();

$fe_array_keys_2548ad230e8251363a099a99c141d13f_17 = is_array( $fe_array_2548ad230e8251363a099a99c141d13f_17 ) ? array_keys( $fe_array_2548ad230e8251363a099a99c141d13f_17 ) : array();
$fe_n_items_2548ad230e8251363a099a99c141d13f_17 = count( $fe_array_keys_2548ad230e8251363a099a99c141d13f_17 );
$fe_n_items_processed_2548ad230e8251363a099a99c141d13f_17 = 0;
$fe_offset_2548ad230e8251363a099a99c141d13f_17 = 0;
$fe_max_2548ad230e8251363a099a99c141d13f_17 = $fe_n_items_2548ad230e8251363a099a99c141d13f_17 - $fe_offset_2548ad230e8251363a099a99c141d13f_17;
$fe_reverse_2548ad230e8251363a099a99c141d13f_17 = false;
if ( $fe_offset_2548ad230e8251363a099a99c141d13f_17 < 0 || $fe_offset_2548ad230e8251363a099a99c141d13f_17 >= $fe_n_items_2548ad230e8251363a099a99c141d13f_17 )
{
    $fe_offset_2548ad230e8251363a099a99c141d13f_17 = ( $fe_offset_2548ad230e8251363a099a99c141d13f_17 < 0 ) ? 0 : $fe_n_items_2548ad230e8251363a099a99c141d13f_17;
    if ( $fe_n_items_2548ad230e8251363a099a99c141d13f_17 || $fe_offset_2548ad230e8251363a099a99c141d13f_17 < 0 )
 {
        eZDebug::writeWarning("Invalid 'offset' parameter specified: '$fe_offset_2548ad230e8251363a099a99c141d13f_17'. Array count: $fe_n_items_2548ad230e8251363a099a99c141d13f_17");   
}
}
if ( $fe_max_2548ad230e8251363a099a99c141d13f_17 < 0 || $fe_offset_2548ad230e8251363a099a99c141d13f_17 + $fe_max_2548ad230e8251363a099a99c141d13f_17 > $fe_n_items_2548ad230e8251363a099a99c141d13f_17 )
{
    if ( $fe_max_2548ad230e8251363a099a99c141d13f_17 < 0 )
 eZDebug::writeWarning("Invalid 'max' parameter specified: $fe_max_2548ad230e8251363a099a99c141d13f_17");
    $fe_max_2548ad230e8251363a099a99c141d13f_17 = $fe_n_items_2548ad230e8251363a099a99c141d13f_17 - $fe_offset_2548ad230e8251363a099a99c141d13f_17;
}
if ( $fe_reverse_2548ad230e8251363a099a99c141d13f_17 )
{
    $fe_first_val_2548ad230e8251363a099a99c141d13f_17 = $fe_n_items_2548ad230e8251363a099a99c141d13f_17 - 1 - $fe_offset_2548ad230e8251363a099a99c141d13f_17;
    $fe_last_val_2548ad230e8251363a099a99c141d13f_17  = 0;
}
else
{
    $fe_first_val_2548ad230e8251363a099a99c141d13f_17 = $fe_offset_2548ad230e8251363a099a99c141d13f_17;
    $fe_last_val_2548ad230e8251363a099a99c141d13f_17  = $fe_n_items_2548ad230e8251363a099a99c141d13f_17 - 1;
}
// foreach
for ( $fe_i_2548ad230e8251363a099a99c141d13f_17 = $fe_first_val_2548ad230e8251363a099a99c141d13f_17; $fe_n_items_processed_2548ad230e8251363a099a99c141d13f_17 < $fe_max_2548ad230e8251363a099a99c141d13f_17 && ( $fe_reverse_2548ad230e8251363a099a99c141d13f_17 ? $fe_i_2548ad230e8251363a099a99c141d13f_17 >= $fe_last_val_2548ad230e8251363a099a99c141d13f_17 : $fe_i_2548ad230e8251363a099a99c141d13f_17 <= $fe_last_val_2548ad230e8251363a099a99c141d13f_17 ); $fe_reverse_2548ad230e8251363a099a99c141d13f_17 ? $fe_i_2548ad230e8251363a099a99c141d13f_17-- : $fe_i_2548ad230e8251363a099a99c141d13f_17++ )
{
$fe_key_2548ad230e8251363a099a99c141d13f_17 = $fe_array_keys_2548ad230e8251363a099a99c141d13f_17[$fe_i_2548ad230e8251363a099a99c141d13f_17];
$fe_val_2548ad230e8251363a099a99c141d13f_17 = $fe_array_2548ad230e8251363a099a99c141d13f_17[$fe_key_2548ad230e8251363a099a99c141d13f_17];
$vars[$rootNamespace]['icon'] = $fe_val_2548ad230e8251363a099a99c141d13f_17;
$vars[$rootNamespace]['class'] = $fe_key_2548ad230e8251363a099a99c141d13f_17;
$text .= 'params.iconsList[\'';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'class', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['class'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '\'] = params.wwwDirPrefix + "';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'icon', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['icon'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '";
        ';
$fe_n_items_processed_2548ad230e8251363a099a99c141d13f_17++;
} // foreach
$skipDelimiter = false;
if ( count( $fe_variable_stack_2548ad230e8251363a099a99c141d13f_17 ) ) extract( array_pop( $fe_variable_stack_2548ad230e8251363a099a99c141d13f_17 ) );

else
{

unset( $fe_array_2548ad230e8251363a099a99c141d13f_17 );

unset( $fe_array_keys_2548ad230e8251363a099a99c141d13f_17 );

unset( $fe_n_items_2548ad230e8251363a099a99c141d13f_17 );

unset( $fe_n_items_processed_2548ad230e8251363a099a99c141d13f_17 );

unset( $fe_i_2548ad230e8251363a099a99c141d13f_17 );

unset( $fe_key_2548ad230e8251363a099a99c141d13f_17 );

unset( $fe_val_2548ad230e8251363a099a99c141d13f_17 );

unset( $fe_offset_2548ad230e8251363a099a99c141d13f_17 );

unset( $fe_max_2548ad230e8251363a099a99c141d13f_17 );

unset( $fe_reverse_2548ad230e8251363a099a99c141d13f_17 );

unset( $fe_first_val_2548ad230e8251363a099a99c141d13f_17 );

unset( $fe_last_val_2548ad230e8251363a099a99c141d13f_17 );

unset( $fe_variable_stack_2548ad230e8251363a099a99c141d13f_17 );

}

// foreach ends
$text .= '        params.iconsList[\'__default__\'] = params.wwwDirPrefix + "';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'iconInfo', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['iconInfo'] : null;
$var1 = compiledFetchAttribute( $var, 'default' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '";

        ';
// if begins
$if_cond = true;
if ( $if_cond )
{
$text .= '        ezjslib_preloadImageList( params.iconsList );
        ';
}
unset( $if_cond );
// if ends

$text .= '
        params.showTips       = ';
// if begins
$if_cond = true;
if ( $if_cond )
{
$text .= 'true';
}
else
{
$text .= 'false';
}
unset( $if_cond );
// if ends

$text .= ';
        params.createHereMenu = "simplified";
        params.autoOpen       = ';
// if begins
$if_cond = true;
if ( $if_cond )
{
$text .= 'true';
}
else
{
$text .= 'false';
}
unset( $if_cond );
// if ends

$text .= ';

        var i18n = {"expand":"';
unset( $var );
unset( $var1 );
$var1 = 'Cliquez sur l\'icône pour visualiser un menu contextuel.' ;
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
$var = str_replace( array( "\\", "\"", "'" ),
                                             array( "\\\\", "\\042", "\\047" ) , $var1 ); unset( $var1 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= '","node_id":"';
unset( $var );
unset( $var1 );
$var1 = 'ID du Nœud ' ;
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
$var = str_replace( array( "\\", "\"", "'" ),
                                             array( "\\\\", "\\042", "\\047" ) , $var1 ); unset( $var1 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= '","object_id":"';
unset( $var );
unset( $var1 );
$var1 = 'ID de l\'objet ' ;
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
$var = str_replace( array( "\\", "\"", "'" ),
                                             array( "\\\\", "\\042", "\\047" ) , $var1 ); unset( $var1 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= '","visibility":"';
unset( $var );
unset( $var1 );
$var1 = 'Visibilité ' ;
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
$var = str_replace( array( "\\", "\"", "'" ),
                                             array( "\\\\", "\\042", "\\047" ) , $var1 ); unset( $var1 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= '","hidden":"';
unset( $var );
unset( $var1 );
$var1 = 'Caché' ;
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
$var = str_replace( array( "\\", "\"", "'" ),
                                             array( "\\\\", "\\042", "\\047" ) , $var1 ); unset( $var1 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= '","visible":"';
unset( $var );
unset( $var1 );
$var1 = 'Visible' ;
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
$var = str_replace( array( "\\", "\"", "'" ),
                                             array( "\\\\", "\\042", "\\047" ) , $var1 ); unset( $var1 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= '","hiddenbyparent":"';
unset( $var );
unset( $var1 );
$var1 = 'Caché par un élément supérieur' ;
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
$var = str_replace( array( "\\", "\"", "'" ),
                                             array( "\\\\", "\\042", "\\047" ) , $var1 ); unset( $var1 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= '","disabled":"';
unset( $var );
$var = 'Le menu arborescent dynamique est désactivé pour ce siteaccess!' ;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= '","not_exist":"';
unset( $var );
$var = 'Le nœud n\\047existe pas' ;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= '","internal_error":"';
unset( $var );
$var = 'Erreur interne' ;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= '"};
        ';
// undef $iconInfo
$tpl->unsetLocalVariable( 'iconInfo', $rootNamespace );

// undef $classIconsSize
$tpl->unsetLocalVariable( 'classIconsSize', $rootNamespace );

$text .= '    ';
$cachedText = $text;
$cacheHandler_20cf1c53b01038963d6a796e466967a9->storeCache( array( 'scope' => 'template-block', 'binarydata' => $cachedText ) );

$text = array_pop( $textStack );
$text .= $cachedText;
    unset( $cachedText, $cacheHandler_20cf1c53b01038963d6a796e466967a9 );
}

$cachedText = $text;
$cacheHandler_df722cd69f1b47012ce7f2e1ea081d57->storeCache( array( 'scope' => 'template-block', 'binarydata' => $cachedText ) );

$text = array_pop( $textStack );
$text .= $cachedText;
    unset( $cachedText, $cacheHandler_df722cd69f1b47012ce7f2e1ea081d57 );
}

$text .= '
   
    params.action    = "';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'click_action', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['click_action'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '";
    params.context   = "';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'ui_context', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['ui_context'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '";
    params.hideNodes = [';
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'hide_node_list', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['hide_node_list'] : null;
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
$var = implode( ",", $var1 );unset( $var1 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= '];
    params.expiry    = "';
unset( $var );
$var = call_user_func_array( array( new eZContentFunctionCollection(), 'fetchContentTreeMenuExpiry' ),
  array(  ) );
$var = isset( $var['result'] ) ? $var['result'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= '";
    params.useCookie = ';
// if begins
unset( $if_cond );
unset( $if_cond );
$if_cond = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'menu_persistence', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['menu_persistence'] : null;
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= 'true';
}
else
{
$text .= 'false';
}
unset( $if_cond );
// if ends

$text .= ';
    params.path      = [';
// if begins
unset( $if_cond );
unset( $if_cond1 );
unset( $if_cond1 );
$if_cond1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'module_result', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['module_result'] : null;
$if_cond2 = compiledFetchAttribute( $if_cond1, 'path' );
unset( $if_cond1 );
$if_cond1 = $if_cond2;
$if_cond2 = compiledFetchAttribute( $if_cond1, 0 );
unset( $if_cond1 );
$if_cond1 = $if_cond2;
$if_cond2 = compiledFetchAttribute( $if_cond1, 'node_id' );
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
// foreach begins
$skipDelimiter = true;
if ( !isset( $fe_variable_stack_2548ad230e8251363a099a99c141d13f_18 ) ) $fe_variable_stack_2548ad230e8251363a099a99c141d13f_18 = array();
$fe_variable_stack_2548ad230e8251363a099a99c141d13f_18[] = compact( 'fe_array_2548ad230e8251363a099a99c141d13f_18', 'fe_array_keys_2548ad230e8251363a099a99c141d13f_18', 'fe_n_items_2548ad230e8251363a099a99c141d13f_18', 'fe_n_items_processed_2548ad230e8251363a099a99c141d13f_18', 'fe_i_2548ad230e8251363a099a99c141d13f_18', 'fe_key_2548ad230e8251363a099a99c141d13f_18', 'fe_val_2548ad230e8251363a099a99c141d13f_18', 'fe_offset_2548ad230e8251363a099a99c141d13f_18', 'fe_max_2548ad230e8251363a099a99c141d13f_18', 'fe_reverse_2548ad230e8251363a099a99c141d13f_18', 'fe_first_val_2548ad230e8251363a099a99c141d13f_18', 'fe_last_val_2548ad230e8251363a099a99c141d13f_18' );
unset( $fe_array_2548ad230e8251363a099a99c141d13f_18 );
unset( $fe_array_2548ad230e8251363a099a99c141d13f_18 );
$fe_array_2548ad230e8251363a099a99c141d13f_18 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'module_result', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['module_result'] : null;
$fe_array_2548ad230e8251363a099a99c141d13f_181 = compiledFetchAttribute( $fe_array_2548ad230e8251363a099a99c141d13f_18, 'path' );
unset( $fe_array_2548ad230e8251363a099a99c141d13f_18 );
$fe_array_2548ad230e8251363a099a99c141d13f_18 = $fe_array_2548ad230e8251363a099a99c141d13f_181;
if (! isset( $fe_array_2548ad230e8251363a099a99c141d13f_18 ) ) $fe_array_2548ad230e8251363a099a99c141d13f_18 = NULL;
while ( is_object( $fe_array_2548ad230e8251363a099a99c141d13f_18 ) and method_exists( $fe_array_2548ad230e8251363a099a99c141d13f_18, 'templateValue' ) )
    $fe_array_2548ad230e8251363a099a99c141d13f_18 = $fe_array_2548ad230e8251363a099a99c141d13f_18->templateValue();

$fe_array_keys_2548ad230e8251363a099a99c141d13f_18 = is_array( $fe_array_2548ad230e8251363a099a99c141d13f_18 ) ? array_keys( $fe_array_2548ad230e8251363a099a99c141d13f_18 ) : array();
$fe_n_items_2548ad230e8251363a099a99c141d13f_18 = count( $fe_array_keys_2548ad230e8251363a099a99c141d13f_18 );
$fe_n_items_processed_2548ad230e8251363a099a99c141d13f_18 = 0;
$fe_offset_2548ad230e8251363a099a99c141d13f_18 = 0;
$fe_max_2548ad230e8251363a099a99c141d13f_18 = $fe_n_items_2548ad230e8251363a099a99c141d13f_18 - $fe_offset_2548ad230e8251363a099a99c141d13f_18;
$fe_reverse_2548ad230e8251363a099a99c141d13f_18 = false;
if ( $fe_offset_2548ad230e8251363a099a99c141d13f_18 < 0 || $fe_offset_2548ad230e8251363a099a99c141d13f_18 >= $fe_n_items_2548ad230e8251363a099a99c141d13f_18 )
{
    $fe_offset_2548ad230e8251363a099a99c141d13f_18 = ( $fe_offset_2548ad230e8251363a099a99c141d13f_18 < 0 ) ? 0 : $fe_n_items_2548ad230e8251363a099a99c141d13f_18;
    if ( $fe_n_items_2548ad230e8251363a099a99c141d13f_18 || $fe_offset_2548ad230e8251363a099a99c141d13f_18 < 0 )
 {
        eZDebug::writeWarning("Invalid 'offset' parameter specified: '$fe_offset_2548ad230e8251363a099a99c141d13f_18'. Array count: $fe_n_items_2548ad230e8251363a099a99c141d13f_18");   
}
}
if ( $fe_max_2548ad230e8251363a099a99c141d13f_18 < 0 || $fe_offset_2548ad230e8251363a099a99c141d13f_18 + $fe_max_2548ad230e8251363a099a99c141d13f_18 > $fe_n_items_2548ad230e8251363a099a99c141d13f_18 )
{
    if ( $fe_max_2548ad230e8251363a099a99c141d13f_18 < 0 )
 eZDebug::writeWarning("Invalid 'max' parameter specified: $fe_max_2548ad230e8251363a099a99c141d13f_18");
    $fe_max_2548ad230e8251363a099a99c141d13f_18 = $fe_n_items_2548ad230e8251363a099a99c141d13f_18 - $fe_offset_2548ad230e8251363a099a99c141d13f_18;
}
if ( $fe_reverse_2548ad230e8251363a099a99c141d13f_18 )
{
    $fe_first_val_2548ad230e8251363a099a99c141d13f_18 = $fe_n_items_2548ad230e8251363a099a99c141d13f_18 - 1 - $fe_offset_2548ad230e8251363a099a99c141d13f_18;
    $fe_last_val_2548ad230e8251363a099a99c141d13f_18  = 0;
}
else
{
    $fe_first_val_2548ad230e8251363a099a99c141d13f_18 = $fe_offset_2548ad230e8251363a099a99c141d13f_18;
    $fe_last_val_2548ad230e8251363a099a99c141d13f_18  = $fe_n_items_2548ad230e8251363a099a99c141d13f_18 - 1;
}
// foreach
for ( $fe_i_2548ad230e8251363a099a99c141d13f_18 = $fe_first_val_2548ad230e8251363a099a99c141d13f_18; $fe_n_items_processed_2548ad230e8251363a099a99c141d13f_18 < $fe_max_2548ad230e8251363a099a99c141d13f_18 && ( $fe_reverse_2548ad230e8251363a099a99c141d13f_18 ? $fe_i_2548ad230e8251363a099a99c141d13f_18 >= $fe_last_val_2548ad230e8251363a099a99c141d13f_18 : $fe_i_2548ad230e8251363a099a99c141d13f_18 <= $fe_last_val_2548ad230e8251363a099a99c141d13f_18 ); $fe_reverse_2548ad230e8251363a099a99c141d13f_18 ? $fe_i_2548ad230e8251363a099a99c141d13f_18-- : $fe_i_2548ad230e8251363a099a99c141d13f_18++ )
{
$fe_key_2548ad230e8251363a099a99c141d13f_18 = $fe_array_keys_2548ad230e8251363a099a99c141d13f_18[$fe_i_2548ad230e8251363a099a99c141d13f_18];
$fe_val_2548ad230e8251363a099a99c141d13f_18 = $fe_array_2548ad230e8251363a099a99c141d13f_18[$fe_key_2548ad230e8251363a099a99c141d13f_18];
$vars[$rootNamespace]['element'] = $fe_val_2548ad230e8251363a099a99c141d13f_18;
if ( $skipDelimiter )
    $skipDelimiter = false;
else
{ // delimiter begins
$text .= ',';
} // delimiter ends

$text .= '\'';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'element', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['element'] : null;
$var1 = compiledFetchAttribute( $var, 'node_id' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '\'';
$fe_n_items_processed_2548ad230e8251363a099a99c141d13f_18++;
} // foreach
$skipDelimiter = false;
if ( count( $fe_variable_stack_2548ad230e8251363a099a99c141d13f_18 ) ) extract( array_pop( $fe_variable_stack_2548ad230e8251363a099a99c141d13f_18 ) );

else
{

unset( $fe_array_2548ad230e8251363a099a99c141d13f_18 );

unset( $fe_array_keys_2548ad230e8251363a099a99c141d13f_18 );

unset( $fe_n_items_2548ad230e8251363a099a99c141d13f_18 );

unset( $fe_n_items_processed_2548ad230e8251363a099a99c141d13f_18 );

unset( $fe_i_2548ad230e8251363a099a99c141d13f_18 );

unset( $fe_key_2548ad230e8251363a099a99c141d13f_18 );

unset( $fe_val_2548ad230e8251363a099a99c141d13f_18 );

unset( $fe_offset_2548ad230e8251363a099a99c141d13f_18 );

unset( $fe_max_2548ad230e8251363a099a99c141d13f_18 );

unset( $fe_reverse_2548ad230e8251363a099a99c141d13f_18 );

unset( $fe_first_val_2548ad230e8251363a099a99c141d13f_18 );

unset( $fe_last_val_2548ad230e8251363a099a99c141d13f_18 );

unset( $fe_variable_stack_2548ad230e8251363a099a99c141d13f_18 );

}

// foreach ends
}
unset( $if_cond );
// if ends

$text .= '];';
unset( $var );
$var = call_user_func_array( array( new eZUserFunctionCollection(), 'fetchCurrentUser' ),
  array(  ) );
$var = isset( $var['result'] ) ? $var['result'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( !isset( $vars[$currentNamespace]['current_user'] ) )
{
    $vars[$currentNamespace]['current_user'] = $var;
    unset( $var );
    $setArray[$currentNamespace]['current_user'] = true;
}

$text .= '    params.perm      = "';
unset( $var );
unset( $var1 );
unset( $var2 );
unset( $var3 );
unset( $var3 );
$var3 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'current_user', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['current_user'] : null;
$var4 = compiledFetchAttribute( $var3, 'role_id_list' );
unset( $var3 );
$var3 = $var4;
if (! isset( $var3 ) ) $var3 = NULL;
while ( is_object( $var3 ) and method_exists( $var3, 'templateValue' ) )
    $var3 = $var3->templateValue();
while ( is_object( $var3 ) and method_exists( $var3, 'templateValue' ) )
    $var3 = $var3->templateValue();
$var2 = implode( ",", $var3 );unset( $var3 );
if (! isset( $var2 ) ) $var2 = NULL;
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
unset( $var4 );
unset( $var5 );
unset( $var5 );
$var5 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'current_user', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['current_user'] : null;
$var6 = compiledFetchAttribute( $var5, 'limited_assignment_value_list' );
unset( $var5 );
$var5 = $var6;
if (! isset( $var5 ) ) $var5 = NULL;
while ( is_object( $var5 ) and method_exists( $var5, 'templateValue' ) )
    $var5 = $var5->templateValue();
while ( is_object( $var5 ) and method_exists( $var5, 'templateValue' ) )
    $var5 = $var5->templateValue();
$var4 = implode( ",", $var5 );unset( $var5 );
if (! isset( $var4 ) ) $var4 = NULL;
while ( is_object( $var4 ) and method_exists( $var4, 'templateValue' ) )
    $var4 = $var4->templateValue();
$var1 = ( $var2 . '|' . $var4 );
unset( $var2, $var4 );
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
$var = md5( $var1 );
unset( $var1 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= '";';
if ( isset( $setArray[$currentNamespace]['current_user'] ) )
{
unset( $vars[$currentNamespace]['current_user'] );
}

$text .= '
    treeMenu = new ContentStructureMenu( params, i18n );

    document.writeln( \'<ul id="content_tree_menu">\' );
    document.writeln( treeMenu.generateEntry( rootNode, false, true ) );
    document.writeln( \'<\\/ul>\' );

    treeMenu.load( false, rootNode.node_id, rootNode.modified_subnode );})();
</script>
';

$setArray = $oldSetArray_100537522ff1ec29ed46a0e20105e76b;
$tpl->Level--;
?>
