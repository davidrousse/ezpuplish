<?php
// URI:       design/admin/templates/window_controls.tpl
// Filename:  design/admin/templates/window_controls.tpl
// Timestamp: 1349721948 (Mon Oct 8 18:45:48 UTC 2012)
$oldSetArray_e285d96ae187d3f99d64d82c53f84281 = isset( $setArray ) ? $setArray : array();
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

// def $node_url_alias
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'node', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['node'] : null;
$var1 = compiledFetchAttribute( $var, 'url_alias' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( $tpl->hasVariable( 'node_url_alias', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'node_url_alias' is already defined.", array (
  0 => 
  array (
    0 => 2,
    1 => 0,
    2 => 23,
  ),
  1 => 
  array (
    0 => 18,
    1 => 0,
    2 => 1163,
  ),
  2 => 'design/admin/templates/window_controls.tpl',
) );
    $tpl->setVariable( 'node_url_alias', $var, $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'node_url_alias', $var, $rootNamespace );
}

// def $tabs_disabled
unset( $var );
unset( $var1 );
$var1 = eZPreferences::value( "admin_navigation_content" );
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
$var = !( $var1 );
unset( $var1 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( $tpl->hasVariable( 'tabs_disabled', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'tabs_disabled' is already defined.", array (
  0 => 
  array (
    0 => 2,
    1 => 0,
    2 => 23,
  ),
  1 => 
  array (
    0 => 18,
    1 => 0,
    2 => 1163,
  ),
  2 => 'design/admin/templates/window_controls.tpl',
) );
    $tpl->setVariable( 'tabs_disabled', $var, $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'tabs_disabled', $var, $rootNamespace );
}

// def $default_tab
if ( $tpl->hasVariable( 'default_tab', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'default_tab' is already defined.", array (
  0 => 
  array (
    0 => 2,
    1 => 0,
    2 => 23,
  ),
  1 => 
  array (
    0 => 18,
    1 => 0,
    2 => 1163,
  ),
  2 => 'design/admin/templates/window_controls.tpl',
) );
    $tpl->setVariable( 'default_tab', 'view', $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'default_tab', 'view', $rootNamespace );
}

// def $node_tab_index
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( "view_parameters", $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]["view_parameters"] : null;
$var2 = compiledFetchAttribute( $var1, "tab" );
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
    unset( $var2 );
unset( $var2 );
$var2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( "default_tab", $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]["default_tab"] : null;
if (! isset( $var2 ) ) $var2 = NULL;
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();

    if ( isset( $var2 ) )
    {
        $var = $var2;
    }
}
unset( $var1, $var2 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( $tpl->hasVariable( 'node_tab_index', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'node_tab_index' is already defined.", array (
  0 => 
  array (
    0 => 2,
    1 => 0,
    2 => 23,
  ),
  1 => 
  array (
    0 => 18,
    1 => 0,
    2 => 1163,
  ),
  2 => 'design/admin/templates/window_controls.tpl',
) );
    $tpl->setVariable( 'node_tab_index', $var, $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'node_tab_index', $var, $rootNamespace );
}

// def $read_open_tab_by_cookie
if ( $tpl->hasVariable( 'read_open_tab_by_cookie', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'read_open_tab_by_cookie' is already defined.", array (
  0 => 
  array (
    0 => 2,
    1 => 0,
    2 => 23,
  ),
  1 => 
  array (
    0 => 18,
    1 => 0,
    2 => 1163,
  ),
  2 => 'design/admin/templates/window_controls.tpl',
) );
    $tpl->setVariable( 'read_open_tab_by_cookie', true, $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'read_open_tab_by_cookie', true, $rootNamespace );
}

// def $available_languages
unset( $var );
$var = call_user_func_array( array( new eZContentFunctionCollection(), 'fetchPrioritizedLanguages' ),
  array(  ) );
$var = isset( $var['result'] ) ? $var['result'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( $tpl->hasVariable( 'available_languages', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'available_languages' is already defined.", array (
  0 => 
  array (
    0 => 2,
    1 => 0,
    2 => 23,
  ),
  1 => 
  array (
    0 => 18,
    1 => 0,
    2 => 1163,
  ),
  2 => 'design/admin/templates/window_controls.tpl',
) );
    $tpl->setVariable( 'available_languages', $var, $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'available_languages', $var, $rootNamespace );
}

// def $translations
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'node', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['node'] : null;
$var1 = compiledFetchAttribute( $var, 'object' );
unset( $var );
$var = $var1;
$var1 = compiledFetchAttribute( $var, 'languages' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( $tpl->hasVariable( 'translations', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'translations' is already defined.", array (
  0 => 
  array (
    0 => 2,
    1 => 0,
    2 => 23,
  ),
  1 => 
  array (
    0 => 18,
    1 => 0,
    2 => 1163,
  ),
  2 => 'design/admin/templates/window_controls.tpl',
) );
    $tpl->setVariable( 'translations', $var, $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'translations', $var, $rootNamespace );
}

// def $translations_count
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'translations', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['translations'] : null;
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
if ( $tpl->hasVariable( 'translations_count', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'translations_count' is already defined.", array (
  0 => 
  array (
    0 => 2,
    1 => 0,
    2 => 23,
  ),
  1 => 
  array (
    0 => 18,
    1 => 0,
    2 => 1163,
  ),
  2 => 'design/admin/templates/window_controls.tpl',
) );
    $tpl->setVariable( 'translations_count', $var, $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'translations_count', $var, $rootNamespace );
}

// def $states
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'node', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['node'] : null;
$var1 = compiledFetchAttribute( $var, 'object' );
unset( $var );
$var = $var1;
$var1 = compiledFetchAttribute( $var, 'allowed_assign_state_list' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( $tpl->hasVariable( 'states', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'states' is already defined.", array (
  0 => 
  array (
    0 => 2,
    1 => 0,
    2 => 23,
  ),
  1 => 
  array (
    0 => 18,
    1 => 0,
    2 => 1163,
  ),
  2 => 'design/admin/templates/window_controls.tpl',
) );
    $tpl->setVariable( 'states', $var, $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'states', $var, $rootNamespace );
}

// def $states_count
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'states', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['states'] : null;
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
if ( $tpl->hasVariable( 'states_count', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'states_count' is already defined.", array (
  0 => 
  array (
    0 => 2,
    1 => 0,
    2 => 23,
  ),
  1 => 
  array (
    0 => 18,
    1 => 0,
    2 => 1163,
  ),
  2 => 'design/admin/templates/window_controls.tpl',
) );
    $tpl->setVariable( 'states_count', $var, $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'states_count', $var, $rootNamespace );
}

// def $related_objects_count
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'node', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['node'] : null;
$var2 = compiledFetchAttribute( $var1, 'object' );
unset( $var1 );
$var1 = $var2;
$var2 = compiledFetchAttribute( $var1, 'id' );
unset( $var1 );
$var1 = $var2;
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
$var = call_user_func_array( array( new eZContentFunctionCollection(), 'fetchRelatedObjectsCount' ),
  array(     'object_id' => $var1,
    'attribute_identifier' => "0",
    'all_relations' => true ) );
$var = isset( $var['result'] ) ? $var['result'] : null;
unset( $var1 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( $tpl->hasVariable( 'related_objects_count', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'related_objects_count' is already defined.", array (
  0 => 
  array (
    0 => 2,
    1 => 0,
    2 => 23,
  ),
  1 => 
  array (
    0 => 18,
    1 => 0,
    2 => 1163,
  ),
  2 => 'design/admin/templates/window_controls.tpl',
) );
    $tpl->setVariable( 'related_objects_count', $var, $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'related_objects_count', $var, $rootNamespace );
}

// def $reverse_related_objects_count
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'node', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['node'] : null;
$var2 = compiledFetchAttribute( $var1, 'object' );
unset( $var1 );
$var1 = $var2;
$var2 = compiledFetchAttribute( $var1, 'id' );
unset( $var1 );
$var1 = $var2;
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
$var = call_user_func_array( array( new eZContentFunctionCollection(), 'fetchReverseRelatedObjectsCount' ),
  array(     'object_id' => $var1,
    'attribute_identifier' => null,
    'all_relations' => true,
    'ignore_visibility' => null ) );
$var = isset( $var['result'] ) ? $var['result'] : null;
unset( $var1 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( $tpl->hasVariable( 'reverse_related_objects_count', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'reverse_related_objects_count' is already defined.", array (
  0 => 
  array (
    0 => 2,
    1 => 0,
    2 => 23,
  ),
  1 => 
  array (
    0 => 18,
    1 => 0,
    2 => 1163,
  ),
  2 => 'design/admin/templates/window_controls.tpl',
) );
    $tpl->setVariable( 'reverse_related_objects_count', $var, $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'reverse_related_objects_count', $var, $rootNamespace );
}

// def $additional_tabs
if ( $tpl->hasVariable( 'additional_tabs', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'additional_tabs' is already defined.", array (
  0 => 
  array (
    0 => 2,
    1 => 0,
    2 => 23,
  ),
  1 => 
  array (
    0 => 18,
    1 => 0,
    2 => 1163,
  ),
  2 => 'design/admin/templates/window_controls.tpl',
) );
    $tpl->setVariable( 'additional_tabs', array (
), $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'additional_tabs', array (
), $rootNamespace );
}

// def $additional_tabs_count
if ( $tpl->hasVariable( 'additional_tabs_count', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'additional_tabs_count' is already defined.", array (
  0 => 
  array (
    0 => 2,
    1 => 0,
    2 => 23,
  ),
  1 => 
  array (
    0 => 18,
    1 => 0,
    2 => 1163,
  ),
  2 => 'design/admin/templates/window_controls.tpl',
) );
    $tpl->setVariable( 'additional_tabs_count', 0, $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'additional_tabs_count', 0, $rootNamespace );
}

// def $valid_tabs
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'default_tab', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['default_tab'] : null;
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
$var = array( $var1, "details", "translations", "locations", "relations", "states" );unset( $var1 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( $tpl->hasVariable( 'valid_tabs', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'valid_tabs' is already defined.", array (
  0 => 
  array (
    0 => 2,
    1 => 0,
    2 => 23,
  ),
  1 => 
  array (
    0 => 18,
    1 => 0,
    2 => 1163,
  ),
  2 => 'design/admin/templates/window_controls.tpl',
) );
    $tpl->setVariable( 'valid_tabs', $var, $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'valid_tabs', $var, $rootNamespace );
}

// def $navigation_part_name
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
$var1 = compiledFetchAttribute( $var, 'navigation_part_identifier' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( $tpl->hasVariable( 'navigation_part_name', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'navigation_part_name' is already defined.", array (
  0 => 
  array (
    0 => 2,
    1 => 0,
    2 => 23,
  ),
  1 => 
  array (
    0 => 18,
    1 => 0,
    2 => 1163,
  ),
  2 => 'design/admin/templates/window_controls.tpl',
) );
    $tpl->setVariable( 'navigation_part_name', $var, $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'navigation_part_name', $var, $rootNamespace );
}

// if begins
unset( $if_cond );
unset( $if_cond1 );
unset( $if_cond1 );
$if_cond1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'navigation_part_name', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['navigation_part_name'] : null;
if (! isset( $if_cond1 ) ) $if_cond1 = NULL;
while ( is_object( $if_cond1 ) and method_exists( $if_cond1, 'templateValue' ) )
    $if_cond1 = $if_cond1->templateValue();
$if_cond = ( ( $if_cond1 ) == ( 'ezusernavigationpart' ) );
unset( $if_cond1 );
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
// def $assigned_policies
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'node', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['node'] : null;
$var2 = compiledFetchAttribute( $var1, 'contentobject_id' );
unset( $var1 );
$var1 = $var2;
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
$var = call_user_func_array( array( new eZUserFunctionCollection(), 'fetchUserRole' ),
  array(     'user_id' => $var1 ) );
$var = isset( $var['result'] ) ? $var['result'] : null;
unset( $var1 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( $tpl->hasVariable( 'assigned_policies', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'assigned_policies' is already defined.", array (
  0 => 
  array (
    0 => 21,
    1 => 0,
    2 => 1224,
  ),
  1 => 
  array (
    0 => 22,
    1 => 94,
    2 => 1417,
  ),
  2 => 'design/admin/templates/window_controls.tpl',
) );
    $tpl->setVariable( 'assigned_policies', $var, $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'assigned_policies', $var, $rootNamespace );
}

// def $assigned_roles
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'node', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['node'] : null;
$var2 = compiledFetchAttribute( $var1, 'contentobject_id' );
unset( $var1 );
$var1 = $var2;
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
$var = call_user_func_array( array( new eZUserFunctionCollection(), 'fetchMemberOf' ),
  array(     'id' => $var1 ) );
$var = isset( $var['result'] ) ? $var['result'] : null;
unset( $var1 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( $tpl->hasVariable( 'assigned_roles', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'assigned_roles' is already defined.", array (
  0 => 
  array (
    0 => 21,
    1 => 0,
    2 => 1224,
  ),
  1 => 
  array (
    0 => 22,
    1 => 94,
    2 => 1417,
  ),
  2 => 'design/admin/templates/window_controls.tpl',
) );
    $tpl->setVariable( 'assigned_roles', $var, $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'assigned_roles', $var, $rootNamespace );
}

}
unset( $if_cond );
// if ends

// foreach begins
$skipDelimiter = true;
if ( !isset( $fe_variable_stack_da1be2c15db0ffa81f217529f6c85268_2 ) ) $fe_variable_stack_da1be2c15db0ffa81f217529f6c85268_2 = array();
$fe_variable_stack_da1be2c15db0ffa81f217529f6c85268_2[] = compact( 'fe_array_da1be2c15db0ffa81f217529f6c85268_2', 'fe_array_keys_da1be2c15db0ffa81f217529f6c85268_2', 'fe_n_items_da1be2c15db0ffa81f217529f6c85268_2', 'fe_n_items_processed_da1be2c15db0ffa81f217529f6c85268_2', 'fe_i_da1be2c15db0ffa81f217529f6c85268_2', 'fe_key_da1be2c15db0ffa81f217529f6c85268_2', 'fe_val_da1be2c15db0ffa81f217529f6c85268_2', 'fe_offset_da1be2c15db0ffa81f217529f6c85268_2', 'fe_max_da1be2c15db0ffa81f217529f6c85268_2', 'fe_reverse_da1be2c15db0ffa81f217529f6c85268_2', 'fe_first_val_da1be2c15db0ffa81f217529f6c85268_2', 'fe_last_val_da1be2c15db0ffa81f217529f6c85268_2' );
$fe_array_da1be2c15db0ffa81f217529f6c85268_2 = array (
  0 => 'roles',
  1 => 'policies',
);
$fe_array_keys_da1be2c15db0ffa81f217529f6c85268_2 = is_array( $fe_array_da1be2c15db0ffa81f217529f6c85268_2 ) ? array_keys( $fe_array_da1be2c15db0ffa81f217529f6c85268_2 ) : array();
$fe_n_items_da1be2c15db0ffa81f217529f6c85268_2 = count( $fe_array_keys_da1be2c15db0ffa81f217529f6c85268_2 );
$fe_n_items_processed_da1be2c15db0ffa81f217529f6c85268_2 = 0;
$fe_offset_da1be2c15db0ffa81f217529f6c85268_2 = 0;
$fe_max_da1be2c15db0ffa81f217529f6c85268_2 = $fe_n_items_da1be2c15db0ffa81f217529f6c85268_2 - $fe_offset_da1be2c15db0ffa81f217529f6c85268_2;
$fe_reverse_da1be2c15db0ffa81f217529f6c85268_2 = false;
if ( $fe_offset_da1be2c15db0ffa81f217529f6c85268_2 < 0 || $fe_offset_da1be2c15db0ffa81f217529f6c85268_2 >= $fe_n_items_da1be2c15db0ffa81f217529f6c85268_2 )
{
    $fe_offset_da1be2c15db0ffa81f217529f6c85268_2 = ( $fe_offset_da1be2c15db0ffa81f217529f6c85268_2 < 0 ) ? 0 : $fe_n_items_da1be2c15db0ffa81f217529f6c85268_2;
    if ( $fe_n_items_da1be2c15db0ffa81f217529f6c85268_2 || $fe_offset_da1be2c15db0ffa81f217529f6c85268_2 < 0 )
 {
        eZDebug::writeWarning("Invalid 'offset' parameter specified: '$fe_offset_da1be2c15db0ffa81f217529f6c85268_2'. Array count: $fe_n_items_da1be2c15db0ffa81f217529f6c85268_2");   
}
}
if ( $fe_max_da1be2c15db0ffa81f217529f6c85268_2 < 0 || $fe_offset_da1be2c15db0ffa81f217529f6c85268_2 + $fe_max_da1be2c15db0ffa81f217529f6c85268_2 > $fe_n_items_da1be2c15db0ffa81f217529f6c85268_2 )
{
    if ( $fe_max_da1be2c15db0ffa81f217529f6c85268_2 < 0 )
 eZDebug::writeWarning("Invalid 'max' parameter specified: $fe_max_da1be2c15db0ffa81f217529f6c85268_2");
    $fe_max_da1be2c15db0ffa81f217529f6c85268_2 = $fe_n_items_da1be2c15db0ffa81f217529f6c85268_2 - $fe_offset_da1be2c15db0ffa81f217529f6c85268_2;
}
if ( $fe_reverse_da1be2c15db0ffa81f217529f6c85268_2 )
{
    $fe_first_val_da1be2c15db0ffa81f217529f6c85268_2 = $fe_n_items_da1be2c15db0ffa81f217529f6c85268_2 - 1 - $fe_offset_da1be2c15db0ffa81f217529f6c85268_2;
    $fe_last_val_da1be2c15db0ffa81f217529f6c85268_2  = 0;
}
else
{
    $fe_first_val_da1be2c15db0ffa81f217529f6c85268_2 = $fe_offset_da1be2c15db0ffa81f217529f6c85268_2;
    $fe_last_val_da1be2c15db0ffa81f217529f6c85268_2  = $fe_n_items_da1be2c15db0ffa81f217529f6c85268_2 - 1;
}
// foreach
for ( $fe_i_da1be2c15db0ffa81f217529f6c85268_2 = $fe_first_val_da1be2c15db0ffa81f217529f6c85268_2; $fe_n_items_processed_da1be2c15db0ffa81f217529f6c85268_2 < $fe_max_da1be2c15db0ffa81f217529f6c85268_2 && ( $fe_reverse_da1be2c15db0ffa81f217529f6c85268_2 ? $fe_i_da1be2c15db0ffa81f217529f6c85268_2 >= $fe_last_val_da1be2c15db0ffa81f217529f6c85268_2 : $fe_i_da1be2c15db0ffa81f217529f6c85268_2 <= $fe_last_val_da1be2c15db0ffa81f217529f6c85268_2 ); $fe_reverse_da1be2c15db0ffa81f217529f6c85268_2 ? $fe_i_da1be2c15db0ffa81f217529f6c85268_2-- : $fe_i_da1be2c15db0ffa81f217529f6c85268_2++ )
{
$fe_key_da1be2c15db0ffa81f217529f6c85268_2 = $fe_array_keys_da1be2c15db0ffa81f217529f6c85268_2[$fe_i_da1be2c15db0ffa81f217529f6c85268_2];
$fe_val_da1be2c15db0ffa81f217529f6c85268_2 = $fe_array_da1be2c15db0ffa81f217529f6c85268_2[$fe_key_da1be2c15db0ffa81f217529f6c85268_2];
$vars[$rootNamespace]['tab'] = $fe_val_da1be2c15db0ffa81f217529f6c85268_2;
$text .= '    ';
// def $tab_navigation_part
unset( $var );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$varData = array( 'value' => $var );
$tpl->processOperator( 'ezini',
                       array (
  0 => 
  array (
    0 => 
    array (
      0 => 6,
      1 => 
      array (
        0 => 'concat',
        1 => 
        array (
          0 => 
          array (
            0 => 1,
            1 => 'AdditionalTab_',
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
              2 => 'tab',
            ),
            2 => false,
          ),
        ),
      ),
      2 => false,
    ),
  ),
  1 => 
  array (
    0 => 
    array (
      0 => 1,
      1 => 'NavigationPartName',
      2 => false,
    ),
  ),
  2 => 
  array (
    0 => 
    array (
      0 => 1,
      1 => 'admininterface.ini',
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
if ( $tpl->hasVariable( 'tab_navigation_part', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'tab_navigation_part' is already defined.", array (
  0 => 
  array (
    0 => 26,
    1 => 4,
    2 => 1523,
  ),
  1 => 
  array (
    0 => 26,
    1 => 116,
    2 => 1635,
  ),
  2 => 'design/admin/templates/window_controls.tpl',
) );
    $tpl->setVariable( 'tab_navigation_part', $var, $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'tab_navigation_part', $var, $rootNamespace );
}

$text .= '    ';
// if begins
unset( $if_cond );
unset( $if_cond1 );
unset( $if_cond1 );
$if_cond1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'tab_navigation_part', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['tab_navigation_part'] : null;
if (! isset( $if_cond1 ) ) $if_cond1 = NULL;
while ( is_object( $if_cond1 ) and method_exists( $if_cond1, 'templateValue' ) )
    $if_cond1 = $if_cond1->templateValue();
unset( $if_cond2 );
unset( $if_cond2 );
$if_cond2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'navigation_part_name', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['navigation_part_name'] : null;
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
$text .= '        ';
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'tab', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['tab'] : null;
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
unset( $var2 );
unset( $var2 );
$var2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'additional_tabs', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['additional_tabs'] : null;
if (! isset( $var2 ) ) $var2 = NULL;
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
if ( is_string( $var2 ) )
    $var = $var2 . implode( '', array( $var1 ) );
else if( is_array( $var2 ) )
    $var = array_merge( $var2, array( $var1 ) );
unset( $var1, $var2 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( array_key_exists( $currentNamespace, $vars ) && array_key_exists( 'additional_tabs', $vars[$currentNamespace] ) )
{
    $vars[$currentNamespace]['additional_tabs'] = $var;
    unset( $var );
}
$text .= '    ';
}
unset( $if_cond );
// if ends

$text .= '    ';
// undef $tab_navigation_part
$tpl->unsetLocalVariable( 'tab_navigation_part', $rootNamespace );

$fe_n_items_processed_da1be2c15db0ffa81f217529f6c85268_2++;
} // foreach
$skipDelimiter = false;
if ( count( $fe_variable_stack_da1be2c15db0ffa81f217529f6c85268_2 ) ) extract( array_pop( $fe_variable_stack_da1be2c15db0ffa81f217529f6c85268_2 ) );

else
{

unset( $fe_array_da1be2c15db0ffa81f217529f6c85268_2 );

unset( $fe_array_keys_da1be2c15db0ffa81f217529f6c85268_2 );

unset( $fe_n_items_da1be2c15db0ffa81f217529f6c85268_2 );

unset( $fe_n_items_processed_da1be2c15db0ffa81f217529f6c85268_2 );

unset( $fe_i_da1be2c15db0ffa81f217529f6c85268_2 );

unset( $fe_key_da1be2c15db0ffa81f217529f6c85268_2 );

unset( $fe_val_da1be2c15db0ffa81f217529f6c85268_2 );

unset( $fe_offset_da1be2c15db0ffa81f217529f6c85268_2 );

unset( $fe_max_da1be2c15db0ffa81f217529f6c85268_2 );

unset( $fe_reverse_da1be2c15db0ffa81f217529f6c85268_2 );

unset( $fe_first_val_da1be2c15db0ffa81f217529f6c85268_2 );

unset( $fe_last_val_da1be2c15db0ffa81f217529f6c85268_2 );

unset( $fe_variable_stack_da1be2c15db0ffa81f217529f6c85268_2 );

}

// foreach ends
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'additional_tabs', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['additional_tabs'] : null;
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
unset( $var2 );
unset( $var2 );
$var2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'valid_tabs', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['valid_tabs'] : null;
if (! isset( $var2 ) ) $var2 = NULL;
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
if ( is_string( $var2 ) )
    $var = $var2 . implode( '', array( $var1 ) );
else if( is_array( $var2 ) )
    $var = array_merge( $var2, array( $var1 ) );
unset( $var1, $var2 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( array_key_exists( $currentNamespace, $vars ) && array_key_exists( 'valid_tabs', $vars[$currentNamespace] ) )
{
    $vars[$currentNamespace]['valid_tabs'] = $var;
    unset( $var );
}
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'additional_tabs', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['additional_tabs'] : null;
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
if ( array_key_exists( $currentNamespace, $vars ) && array_key_exists( 'additional_tabs_count', $vars[$currentNamespace] ) )
{
    $vars[$currentNamespace]['additional_tabs_count'] = $var;
    unset( $var );
}
// if begins
unset( $if_cond );
unset( $if_cond );
$if_cond = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'tabs_disabled', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['tabs_disabled'] : null;
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '    <div class="button-left"><a id="maincontent-show" class="show-hide-tabs" href="/ezpublish/app/ezpublish_legacy/index.php/ezwebin_site_admin/user/preferences/set/admin_navigation_content/1" title="Activer les &quot;onglets&quot; par défaut lorsque vous parcourez le contenu.">+</a></div>';
}
else
{
$text .= '    <div class="button-left"><a id="maincontent-hide" class="show-hide-tabs" href="/ezpublish/app/ezpublish_legacy/index.php/ezwebin_site_admin/user/preferences/set/admin_navigation_content/0" title="Désactiver les &quot;onglets&quot; par défaut lorsque vous parcourez le contenu.">-</a></div>';
}
unset( $if_cond );
// if ends

unset( $elseif_cond_da1be2c15db0ffa81f217529f6c85268_15 );
unset( $elseif_cond_da1be2c15db0ffa81f217529f6c85268_151 );
unset( $elseif_cond_da1be2c15db0ffa81f217529f6c85268_151 );
$elseif_cond_da1be2c15db0ffa81f217529f6c85268_151 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'view_parameters', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['view_parameters'] : null;
$elseif_cond_da1be2c15db0ffa81f217529f6c85268_152 = compiledFetchAttribute( $elseif_cond_da1be2c15db0ffa81f217529f6c85268_151, 'tab' );
unset( $elseif_cond_da1be2c15db0ffa81f217529f6c85268_151 );
$elseif_cond_da1be2c15db0ffa81f217529f6c85268_151 = $elseif_cond_da1be2c15db0ffa81f217529f6c85268_152;
if (! isset( $elseif_cond_da1be2c15db0ffa81f217529f6c85268_151 ) ) $elseif_cond_da1be2c15db0ffa81f217529f6c85268_151 = NULL;
while ( is_object( $elseif_cond_da1be2c15db0ffa81f217529f6c85268_151 ) and method_exists( $elseif_cond_da1be2c15db0ffa81f217529f6c85268_151, 'templateValue' ) )
    $elseif_cond_da1be2c15db0ffa81f217529f6c85268_151 = $elseif_cond_da1be2c15db0ffa81f217529f6c85268_151->templateValue();
while ( is_object( $elseif_cond_da1be2c15db0ffa81f217529f6c85268_151 ) and method_exists( $elseif_cond_da1be2c15db0ffa81f217529f6c85268_151, 'templateValue' ) )
    $elseif_cond_da1be2c15db0ffa81f217529f6c85268_151 = $elseif_cond_da1be2c15db0ffa81f217529f6c85268_151->templateValue();
$elseif_cond_da1be2c15db0ffa81f217529f6c85268_15 = isset( $elseif_cond_da1be2c15db0ffa81f217529f6c85268_151 );unset( $elseif_cond_da1be2c15db0ffa81f217529f6c85268_151 );
if (! isset( $elseif_cond_da1be2c15db0ffa81f217529f6c85268_15 ) ) $elseif_cond_da1be2c15db0ffa81f217529f6c85268_15 = NULL;
while ( is_object( $elseif_cond_da1be2c15db0ffa81f217529f6c85268_15 ) and method_exists( $elseif_cond_da1be2c15db0ffa81f217529f6c85268_15, 'templateValue' ) )
    $elseif_cond_da1be2c15db0ffa81f217529f6c85268_15 = $elseif_cond_da1be2c15db0ffa81f217529f6c85268_15->templateValue();

// if begins
unset( $if_cond );
unset( $if_cond1 );
unset( $if_cond2 );
unset( $if_cond2 );
$if_cond2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'valid_tabs', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['valid_tabs'] : null;
if (! isset( $if_cond2 ) ) $if_cond2 = NULL;
while ( is_object( $if_cond2 ) and method_exists( $if_cond2, 'templateValue' ) )
    $if_cond2 = $if_cond2->templateValue();
unset( $if_cond3 );
unset( $if_cond3 );
$if_cond3 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'node_tab_index', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['node_tab_index'] : null;
if (! isset( $if_cond3 ) ) $if_cond3 = NULL;
while ( is_object( $if_cond3 ) and method_exists( $if_cond3, 'templateValue' ) )
    $if_cond3 = $if_cond3->templateValue();
if( is_string( $if_cond2 ) )
{
  $if_cond1 = ( strpos( $if_cond2, $if_cond3 ) !== false );
}
else if ( is_array( $if_cond2 ) )
{
  $if_cond1 = in_array( $if_cond3, $if_cond2 );
}
else
{
$if_cond1 = false;
}unset( $if_cond2, $if_cond3 );
if (! isset( $if_cond1 ) ) $if_cond1 = NULL;
while ( is_object( $if_cond1 ) and method_exists( $if_cond1, 'templateValue' ) )
    $if_cond1 = $if_cond1->templateValue();
$if_cond = !( $if_cond1 );
unset( $if_cond1 );
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '    ';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'default_tab', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['default_tab'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( array_key_exists( $currentNamespace, $vars ) && array_key_exists( 'node_tab_index', $vars[$currentNamespace] ) )
{
    $vars[$currentNamespace]['node_tab_index'] = $var;
    unset( $var );
}
}
elseif ( $elseif_cond_da1be2c15db0ffa81f217529f6c85268_15 )
{
$text .= '    
    ';
if ( array_key_exists( $currentNamespace, $vars ) && array_key_exists( 'tabs_disabled', $vars[$currentNamespace] ) )
{
    $vars[$currentNamespace]['tabs_disabled'] = false;
}
$text .= '    
    ';
if ( array_key_exists( $currentNamespace, $vars ) && array_key_exists( 'read_open_tab_by_cookie', $vars[$currentNamespace] ) )
{
    $vars[$currentNamespace]['read_open_tab_by_cookie'] = false;
}
}
unset( $if_cond );
// if ends

unset( $elseif_cond_da1be2c15db0ffa81f217529f6c85268_15 );

$text .= '
<ul class="tabs';
// if begins
unset( $if_cond );
unset( $if_cond );
$if_cond = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'tabs_disabled', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['tabs_disabled'] : null;
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= ' disabled';
}
unset( $if_cond );
// if ends

// if begins
unset( $if_cond );
unset( $if_cond );
$if_cond = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'read_open_tab_by_cookie', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['read_open_tab_by_cookie'] : null;
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= ' tabs-by-cookie';
}
unset( $if_cond );
// if ends

$text .= '">
    
    <li id="node-tab-view" class="first';
// if begins
unset( $if_cond );
unset( $if_cond1 );
unset( $if_cond1 );
$if_cond1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'node_tab_index', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['node_tab_index'] : null;
if (! isset( $if_cond1 ) ) $if_cond1 = NULL;
while ( is_object( $if_cond1 ) and method_exists( $if_cond1, 'templateValue' ) )
    $if_cond1 = $if_cond1->templateValue();
$if_cond = ( ( $if_cond1 ) == ( 'view' ) );
unset( $if_cond1 );
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= ' selected';
}
unset( $if_cond );
// if ends

$text .= '">
        ';
// if begins
unset( $if_cond );
unset( $if_cond );
$if_cond = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'tabs_disabled', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['tabs_disabled'] : null;
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '            <span class="disabled" title="Cet onglet est désactivé, utilisez le bouton à sa gauche pour l\'activer.">Aperçu</span>
        ';
}
else
{
$text .= '            <a href=';
unset( $var );
unset( $var1 );
unset( $var2 );
unset( $var2 );
$var2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'node_url_alias', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['node_url_alias'] : null;
if (! isset( $var2 ) ) $var2 = NULL;
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
$var1 = ( $var2 . '/(tab)/view' );
unset( $var2 );
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

$text .= ' title="Afficher une vue simplifiée du contenu.">Aperçu</a>
        ';
}
unset( $if_cond );
// if ends

$text .= '    </li>

    
    <li id="node-tab-details" class="middle';
// if begins
unset( $if_cond );
unset( $if_cond1 );
unset( $if_cond1 );
$if_cond1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'node_tab_index', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['node_tab_index'] : null;
if (! isset( $if_cond1 ) ) $if_cond1 = NULL;
while ( is_object( $if_cond1 ) and method_exists( $if_cond1, 'templateValue' ) )
    $if_cond1 = $if_cond1->templateValue();
$if_cond = ( ( $if_cond1 ) == ( 'details' ) );
unset( $if_cond1 );
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= ' selected';
}
unset( $if_cond );
// if ends

$text .= '">
        ';
// if begins
unset( $if_cond );
unset( $if_cond );
$if_cond = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'tabs_disabled', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['tabs_disabled'] : null;
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '            <span class="disabled" title="Cet onglet est désactivé, utilisez le bouton à sa gauche pour l\'activer.">Détails</span>
        ';
}
else
{
$text .= '            <a href=';
unset( $var );
unset( $var1 );
unset( $var2 );
unset( $var2 );
$var2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'node_url_alias', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['node_url_alias'] : null;
if (! isset( $var2 ) ) $var2 = NULL;
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
$var1 = ( $var2 . '/(tab)/details' );
unset( $var2 );
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

$text .= ' title="Afficher les détails.">Détails</a>
        ';
}
unset( $if_cond );
// if ends

$text .= '    </li>

    
    ';
// if begins
unset( $if_cond );
unset( $if_cond1 );
$if_cond1 = call_user_func_array( array( new eZContentFunctionCollection(), 'fetchTranslationList' ),
  array(  ) );
$if_cond1 = isset( $if_cond1['result'] ) ? $if_cond1['result'] : null;
if (! isset( $if_cond1 ) ) $if_cond1 = NULL;
while ( is_object( $if_cond1 ) and method_exists( $if_cond1, 'templateValue' ) )
    $if_cond1 = $if_cond1->templateValue();
$if_cond1Data = array( 'value' => $if_cond1 );
$tpl->processOperator( 'count',
                       array (
),
                       $rootNamespace, $currentNamespace, $if_cond1Data, false, false );
$if_cond1 = $if_cond1Data['value'];
unset( $if_cond1Data );
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
// if begins
unset( $if_cond );
unset( $if_cond1 );
unset( $if_cond1 );
$if_cond1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'available_languages', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['available_languages'] : null;
if (! isset( $if_cond1 ) ) $if_cond1 = NULL;
while ( is_object( $if_cond1 ) and method_exists( $if_cond1, 'templateValue' ) )
    $if_cond1 = $if_cond1->templateValue();
$if_cond1Data = array( 'value' => $if_cond1 );
$tpl->processOperator( 'count',
                       array (
),
                       $rootNamespace, $currentNamespace, $if_cond1Data, false, false );
$if_cond1 = $if_cond1Data['value'];
unset( $if_cond1Data );
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
$text .= '    <li id="node-tab-translations" class="middle';
// if begins
unset( $if_cond );
unset( $if_cond1 );
unset( $if_cond1 );
$if_cond1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'node_tab_index', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['node_tab_index'] : null;
if (! isset( $if_cond1 ) ) $if_cond1 = NULL;
while ( is_object( $if_cond1 ) and method_exists( $if_cond1, 'templateValue' ) )
    $if_cond1 = $if_cond1->templateValue();
$if_cond = ( ( $if_cond1 ) == ( 'translations' ) );
unset( $if_cond1 );
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= ' selected';
}
unset( $if_cond );
// if ends

$text .= '">
        ';
// if begins
unset( $if_cond );
unset( $if_cond );
$if_cond = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'tabs_disabled', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['tabs_disabled'] : null;
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '            <span class="disabled" title="Cet onglet est désactivé, utilisez le bouton à sa gauche pour l\'activer.">';
unset( $var );
unset( $var2 );
unset( $var3 );
unset( $var3 );
$var3 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'translations_count', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['translations_count'] : null;
if (! isset( $var3 ) ) $var3 = NULL;
while ( is_object( $var3 ) and method_exists( $var3, 'templateValue' ) )
    $var3 = $var3->templateValue();
$var2 = array( '%count' => $var3 );unset( $var3 );
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
$var = strtr( 'Traductions (%count)', $var3 );
unset( $var2, $var3, $var4, $var5 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= '</span>
        ';
}
else
{
$text .= '            <a href=';
unset( $var );
unset( $var1 );
unset( $var2 );
unset( $var2 );
$var2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'node_url_alias', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['node_url_alias'] : null;
if (! isset( $var2 ) ) $var2 = NULL;
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
$var1 = ( $var2 . '/(tab)/translations' );
unset( $var2 );
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

$text .= ' title="Afficher les traductions disponibles.">';
unset( $var );
unset( $var2 );
unset( $var3 );
unset( $var3 );
$var3 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'translations_count', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['translations_count'] : null;
if (! isset( $var3 ) ) $var3 = NULL;
while ( is_object( $var3 ) and method_exists( $var3, 'templateValue' ) )
    $var3 = $var3->templateValue();
$var2 = array( '%count' => $var3 );unset( $var3 );
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
$var = strtr( 'Traductions (%count)', $var3 );
unset( $var2, $var3, $var4, $var5 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= '</a>
        ';
}
unset( $if_cond );
// if ends

$text .= '    </li>
    ';
}
unset( $if_cond );
// if ends

$text .= '    ';
}
unset( $if_cond );
// if ends

$text .= '
    
    <li id="node-tab-locations" class="middle';
// if begins
unset( $if_cond );
unset( $if_cond1 );
unset( $if_cond1 );
$if_cond1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'node_tab_index', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['node_tab_index'] : null;
if (! isset( $if_cond1 ) ) $if_cond1 = NULL;
while ( is_object( $if_cond1 ) and method_exists( $if_cond1, 'templateValue' ) )
    $if_cond1 = $if_cond1->templateValue();
$if_cond = ( ( $if_cond1 ) == ( 'locations' ) );
unset( $if_cond1 );
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= ' selected';
}
unset( $if_cond );
// if ends

$text .= '">
        ';
// if begins
unset( $if_cond );
unset( $if_cond );
$if_cond = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'tabs_disabled', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['tabs_disabled'] : null;
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '            <span class="disabled" title="Cet onglet est désactivé, utilisez le bouton à sa gauche pour l\'activer.">';
unset( $var );
unset( $var2 );
unset( $var3 );
unset( $var3 );
$var3 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'node', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['node'] : null;
$var4 = compiledFetchAttribute( $var3, 'object' );
unset( $var3 );
$var3 = $var4;
$var4 = compiledFetchAttribute( $var3, 'assigned_nodes' );
unset( $var3 );
$var3 = $var4;
if (! isset( $var3 ) ) $var3 = NULL;
while ( is_object( $var3 ) and method_exists( $var3, 'templateValue' ) )
    $var3 = $var3->templateValue();
$var3Data = array( 'value' => $var3 );
$tpl->processOperator( 'count',
                       array (
),
                       $rootNamespace, $currentNamespace, $var3Data, false, false );
$var3 = $var3Data['value'];
unset( $var3Data );
if (! isset( $var3 ) ) $var3 = NULL;
while ( is_object( $var3 ) and method_exists( $var3, 'templateValue' ) )
    $var3 = $var3->templateValue();
$var2 = array( '%count' => $var3 );unset( $var3 );
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
$var = strtr( 'Emplacements (%count)', $var3 );
unset( $var2, $var3, $var4, $var5 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= '</span>
        ';
}
else
{
$text .= '            <a href=';
unset( $var );
unset( $var1 );
unset( $var2 );
unset( $var2 );
$var2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'node_url_alias', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['node_url_alias'] : null;
if (! isset( $var2 ) ) $var2 = NULL;
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
$var1 = ( $var2 . '/(tab)/locations' );
unset( $var2 );
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

$text .= ' title="Afficher les emplacements.">';
unset( $var );
unset( $var2 );
unset( $var3 );
unset( $var3 );
$var3 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'node', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['node'] : null;
$var4 = compiledFetchAttribute( $var3, 'object' );
unset( $var3 );
$var3 = $var4;
$var4 = compiledFetchAttribute( $var3, 'assigned_nodes' );
unset( $var3 );
$var3 = $var4;
if (! isset( $var3 ) ) $var3 = NULL;
while ( is_object( $var3 ) and method_exists( $var3, 'templateValue' ) )
    $var3 = $var3->templateValue();
$var3Data = array( 'value' => $var3 );
$tpl->processOperator( 'count',
                       array (
),
                       $rootNamespace, $currentNamespace, $var3Data, false, false );
$var3 = $var3Data['value'];
unset( $var3Data );
if (! isset( $var3 ) ) $var3 = NULL;
while ( is_object( $var3 ) and method_exists( $var3, 'templateValue' ) )
    $var3 = $var3->templateValue();
$var2 = array( '%count' => $var3 );unset( $var3 );
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
$var = strtr( 'Emplacements (%count)', $var3 );
unset( $var2, $var3, $var4, $var5 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= '</a>
        ';
}
unset( $if_cond );
// if ends

$text .= '    </li>

    
    <li id="node-tab-relations" class="middle';
// if begins
unset( $if_cond );
unset( $if_cond1 );
unset( $if_cond1 );
$if_cond1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'node_tab_index', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['node_tab_index'] : null;
if (! isset( $if_cond1 ) ) $if_cond1 = NULL;
while ( is_object( $if_cond1 ) and method_exists( $if_cond1, 'templateValue' ) )
    $if_cond1 = $if_cond1->templateValue();
$if_cond = ( ( $if_cond1 ) == ( 'relations' ) );
unset( $if_cond1 );
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= ' selected';
}
unset( $if_cond );
// if ends

$text .= '">
        ';
// if begins
unset( $if_cond );
unset( $if_cond );
$if_cond = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'tabs_disabled', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['tabs_disabled'] : null;
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '            <span class="disabled" title="Cet onglet est désactivé, utilisez le bouton à sa gauche pour l\'activer.">';
unset( $var );
unset( $var2 );
unset( $var3 );
unset( $var4 );
unset( $var4 );
$var4 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'related_objects_count', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['related_objects_count'] : null;
if (! isset( $var4 ) ) $var4 = NULL;
while ( is_object( $var4 ) and method_exists( $var4, 'templateValue' ) )
    $var4 = $var4->templateValue();
while ( is_object( $var4 ) and method_exists( $var4, 'templateValue' ) )
    $var4 = $var4->templateValue();
unset( $var5 );
unset( $var5 );
$var5 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'reverse_related_objects_count', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['reverse_related_objects_count'] : null;
if (! isset( $var5 ) ) $var5 = NULL;
while ( is_object( $var5 ) and method_exists( $var5, 'templateValue' ) )
    $var5 = $var5->templateValue();
while ( is_object( $var5 ) and method_exists( $var5, 'templateValue' ) )
    $var5 = $var5->templateValue();
$var3 = $var4 + $var5;
unset( $var4, $var5 );
if (! isset( $var3 ) ) $var3 = NULL;
while ( is_object( $var3 ) and method_exists( $var3, 'templateValue' ) )
    $var3 = $var3->templateValue();
$var2 = array( '%count' => $var3 );unset( $var3 );
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
$var = strtr( 'Relations (%count)', $var3 );
unset( $var2, $var3, $var4, $var5 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= '</span>
        ';
}
else
{
$text .= '            <a href=';
unset( $var );
unset( $var1 );
unset( $var2 );
unset( $var2 );
$var2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'node_url_alias', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['node_url_alias'] : null;
if (! isset( $var2 ) ) $var2 = NULL;
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
$var1 = ( $var2 . '/(tab)/relations' );
unset( $var2 );
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

$text .= ' title="Afficher les relations d\'objet.">';
unset( $var );
unset( $var2 );
unset( $var3 );
unset( $var4 );
unset( $var4 );
$var4 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'related_objects_count', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['related_objects_count'] : null;
if (! isset( $var4 ) ) $var4 = NULL;
while ( is_object( $var4 ) and method_exists( $var4, 'templateValue' ) )
    $var4 = $var4->templateValue();
while ( is_object( $var4 ) and method_exists( $var4, 'templateValue' ) )
    $var4 = $var4->templateValue();
unset( $var5 );
unset( $var5 );
$var5 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'reverse_related_objects_count', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['reverse_related_objects_count'] : null;
if (! isset( $var5 ) ) $var5 = NULL;
while ( is_object( $var5 ) and method_exists( $var5, 'templateValue' ) )
    $var5 = $var5->templateValue();
while ( is_object( $var5 ) and method_exists( $var5, 'templateValue' ) )
    $var5 = $var5->templateValue();
$var3 = $var4 + $var5;
unset( $var4, $var5 );
if (! isset( $var3 ) ) $var3 = NULL;
while ( is_object( $var3 ) and method_exists( $var3, 'templateValue' ) )
    $var3 = $var3->templateValue();
$var2 = array( '%count' => $var3 );unset( $var3 );
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
$var = strtr( 'Relations (%count)', $var3 );
unset( $var2, $var3, $var4, $var5 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= '</a>
        ';
}
unset( $if_cond );
// if ends

$text .= '    </li>

    
    <li id="node-tab-ordering" class="';
// if begins
unset( $if_cond );
unset( $if_cond );
$if_cond = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'additional_tabs', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['additional_tabs'] : null;
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= 'middle';
}
else
{
$text .= 'last';
}
unset( $if_cond );
// if ends

// if begins
unset( $if_cond );
unset( $if_cond1 );
unset( $if_cond1 );
$if_cond1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'node_tab_index', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['node_tab_index'] : null;
if (! isset( $if_cond1 ) ) $if_cond1 = NULL;
while ( is_object( $if_cond1 ) and method_exists( $if_cond1, 'templateValue' ) )
    $if_cond1 = $if_cond1->templateValue();
$if_cond = ( ( $if_cond1 ) == ( 'ordering' ) );
unset( $if_cond1 );
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= ' selected';
}
unset( $if_cond );
// if ends

$text .= '">
        ';
// if begins
unset( $if_cond );
unset( $if_cond );
$if_cond = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'tabs_disabled', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['tabs_disabled'] : null;
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '            <span class="disabled" title="Cet onglet est désactivé, utilisez le bouton à sa gauche pour l\'activer.">Classement</span>
        ';
}
else
{
$text .= '            <a href=';
unset( $var );
unset( $var1 );
unset( $var2 );
unset( $var2 );
$var2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'node_url_alias', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['node_url_alias'] : null;
if (! isset( $var2 ) ) $var2 = NULL;
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
$var1 = ( $var2 . '/(tab)/ordering' );
unset( $var2 );
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

$text .= ' title="Afficher le tri utilisé pour les sous-éléments.">Classement</a>
        ';
}
unset( $if_cond );
// if ends

$text .= '    </li>
';
$oldRestoreIncludeArray_766476709c8d253a3ec386d809e16d59 = isset( $restoreIncludeArray ) ? $restoreIncludeArray : array();
$restoreIncludeArray = array();

if ( !isset( $dKeys ) )
{
    $resH = $tpl->resourceHandler( "design" );
    $dKeys = $resH->keys();
}

$resourceFound = false;
if ( file_exists( 'var/ezwebin_site/cache/template/compiled/window_controls_extratabs-d4034b3d1cb10a7098cd0e3982267847.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$rootNamespace = $currentNamespace;
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'design/admin/templates/window_controls_extratabs.tpl' );
include( '' . 'var/ezwebin_site/cache/template/compiled/window_controls_extratabs-d4034b3d1cb10a7098cd0e3982267847.php' );
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
$tpl->processURI( 'design/admin/templates/window_controls_extratabs.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
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
$restoreIncludeArray = $oldRestoreIncludeArray_766476709c8d253a3ec386d809e16d59;

$text .= '</ul>
<div class="float-break"></div>
';
// if begins
unset( $if_cond );
unset( $if_cond );
$if_cond = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'tabs_disabled', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['tabs_disabled'] : null;
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '<div class="tabs-content disabled"></div>';
}
else
{
$text .= '<div class="tabs-content">
    ';
$oldRestoreIncludeArray_d0561b925c2766bd997eab4de0cafdae = isset( $restoreIncludeArray ) ? $restoreIncludeArray : array();
$restoreIncludeArray = array();

if ( !isset( $dKeys ) )
{
    $resH = $tpl->resourceHandler( "design" );
    $dKeys = $resH->keys();
}

$resourceFound = false;
if ( file_exists( 'var/ezwebin_site/cache/template/compiled/windows-bb7a87b7391abbdd9fddb5b9996d29b0.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$rootNamespace = $currentNamespace;
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'design/admin/templates/windows.tpl' );
include( '' . 'var/ezwebin_site/cache/template/compiled/windows-bb7a87b7391abbdd9fddb5b9996d29b0.php' );
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
$tpl->processURI( 'design/admin/templates/windows.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
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
$restoreIncludeArray = $oldRestoreIncludeArray_d0561b925c2766bd997eab4de0cafdae;

$text .= '</div>';
}
unset( $if_cond );
// if ends

$text .= '
';
unset( $var );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$varData = array( 'value' => $var );
$tpl->processOperator( 'ezscript_require',
                       array (
  0 => 
  array (
    0 => 
    array (
      0 => 1,
      1 => 'node_tabs.js',
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
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

// undef all
$tpl->unsetLocalVariables();

$setArray = $oldSetArray_e285d96ae187d3f99d64d82c53f84281;
$tpl->Level--;
?>
