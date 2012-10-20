<?php
// URI:       extension/ezwt/design/standard/templates/parts/website_toolbar.tpl
// Filename:  extension/ezwt/design/standard/templates/parts/website_toolbar.tpl
// Timestamp: 1350735748 (Sat Oct 20 12:22:28 UTC 2012)
$oldSetArray_9939ba16b1fc2fd1294e01321f095706 = isset( $setArray ) ? $setArray : array();
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
    0 => 1,
    1 => 0,
    2 => 1,
  ),
  1 => 
  array (
    0 => 17,
    1 => 113,
    2 => 1500,
  ),
  2 => 'extension/ezwt/design/standard/templates/parts/website_toolbar.tpl',
) );
    $tpl->setVariable( 'current_node', $var, $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'current_node', $var, $rootNamespace );
}

// def $content_object
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'current_node', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['current_node'] : null;
$var1 = compiledFetchAttribute( $var, 'object' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( $tpl->hasVariable( 'content_object', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'content_object' is already defined.", array (
  0 => 
  array (
    0 => 1,
    1 => 0,
    2 => 1,
  ),
  1 => 
  array (
    0 => 17,
    1 => 113,
    2 => 1500,
  ),
  2 => 'extension/ezwt/design/standard/templates/parts/website_toolbar.tpl',
) );
    $tpl->setVariable( 'content_object', $var, $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'content_object', $var, $rootNamespace );
}

// def $can_edit_languages
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'content_object', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['content_object'] : null;
$var1 = compiledFetchAttribute( $var, 'can_edit_languages' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( $tpl->hasVariable( 'can_edit_languages', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'can_edit_languages' is already defined.", array (
  0 => 
  array (
    0 => 1,
    1 => 0,
    2 => 1,
  ),
  1 => 
  array (
    0 => 17,
    1 => 113,
    2 => 1500,
  ),
  2 => 'extension/ezwt/design/standard/templates/parts/website_toolbar.tpl',
) );
    $tpl->setVariable( 'can_edit_languages', $var, $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'can_edit_languages', $var, $rootNamespace );
}

// def $can_manage_location
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'current_node', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['current_node'] : null;
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
$var = call_user_func_array( array( new eZContentFunctionCollection(), 'checkAccess' ),
  array(     'access' => "manage_locations",
    'contentobject' => $var1,
    'contentclass_id' => false,
    'parent_contentclass_id' => false,
    'language' => false ) );
$var = isset( $var['result'] ) ? $var['result'] : null;
unset( $var1 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( $tpl->hasVariable( 'can_manage_location', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'can_manage_location' is already defined.", array (
  0 => 
  array (
    0 => 1,
    1 => 0,
    2 => 1,
  ),
  1 => 
  array (
    0 => 17,
    1 => 113,
    2 => 1500,
  ),
  2 => 'extension/ezwt/design/standard/templates/parts/website_toolbar.tpl',
) );
    $tpl->setVariable( 'can_manage_location', $var, $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'can_manage_location', $var, $rootNamespace );
}

// def $can_create_languages
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'content_object', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['content_object'] : null;
$var1 = compiledFetchAttribute( $var, 'can_create_languages' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( $tpl->hasVariable( 'can_create_languages', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'can_create_languages' is already defined.", array (
  0 => 
  array (
    0 => 1,
    1 => 0,
    2 => 1,
  ),
  1 => 
  array (
    0 => 17,
    1 => 113,
    2 => 1500,
  ),
  2 => 'extension/ezwt/design/standard/templates/parts/website_toolbar.tpl',
) );
    $tpl->setVariable( 'can_create_languages', $var, $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'can_create_languages', $var, $rootNamespace );
}

// def $is_container
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'content_object', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['content_object'] : null;
$var1 = compiledFetchAttribute( $var, 'content_class' );
unset( $var );
$var = $var1;
$var1 = compiledFetchAttribute( $var, 'is_container' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( $tpl->hasVariable( 'is_container', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'is_container' is already defined.", array (
  0 => 
  array (
    0 => 1,
    1 => 0,
    2 => 1,
  ),
  1 => 
  array (
    0 => 17,
    1 => 113,
    2 => 1500,
  ),
  2 => 'extension/ezwt/design/standard/templates/parts/website_toolbar.tpl',
) );
    $tpl->setVariable( 'is_container', $var, $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'is_container', $var, $rootNamespace );
}

// def $odf_display_classes
if ( $tpl->hasVariable( 'odf_display_classes', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'odf_display_classes' is already defined.", array (
  0 => 
  array (
    0 => 1,
    1 => 0,
    2 => 1,
  ),
  1 => 
  array (
    0 => 17,
    1 => 113,
    2 => 1500,
  ),
  2 => 'extension/ezwt/design/standard/templates/parts/website_toolbar.tpl',
) );
    $tpl->setVariable( 'odf_display_classes', array (
  0 => 'documentation_page',
  1 => 'blog',
  2 => 'blog_post',
  3 => 'folder',
  4 => 'article',
  5 => 'article_mainpage',
  6 => 'article_subpage',
  7 => 'event',
), $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'odf_display_classes', array (
  0 => 'documentation_page',
  1 => 'blog',
  2 => 'blog_post',
  3 => 'folder',
  4 => 'article',
  5 => 'article_mainpage',
  6 => 'article_subpage',
  7 => 'event',
), $rootNamespace );
}

// def $odf_hide_container_classes
if ( $tpl->hasVariable( 'odf_hide_container_classes', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'odf_hide_container_classes' is already defined.", array (
  0 => 
  array (
    0 => 1,
    1 => 0,
    2 => 1,
  ),
  1 => 
  array (
    0 => 17,
    1 => 113,
    2 => 1500,
  ),
  2 => 'extension/ezwt/design/standard/templates/parts/website_toolbar.tpl',
) );
    $tpl->setVariable( 'odf_hide_container_classes', array (
  0 => 'article',
), $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'odf_hide_container_classes', array (
  0 => 'article',
), $rootNamespace );
}

// def $website_toolbar_access
unset( $var );
$var = call_user_func_array( array( new eZUserFunctionCollection(), 'hasAccessTo' ),
  array(     'module' => "websitetoolbar",
    'function' => "use",
    'user_id' => null ) );
$var = isset( $var['result'] ) ? $var['result'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( $tpl->hasVariable( 'website_toolbar_access', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'website_toolbar_access' is already defined.", array (
  0 => 
  array (
    0 => 1,
    1 => 0,
    2 => 1,
  ),
  1 => 
  array (
    0 => 17,
    1 => 113,
    2 => 1500,
  ),
  2 => 'extension/ezwt/design/standard/templates/parts/website_toolbar.tpl',
) );
    $tpl->setVariable( 'website_toolbar_access', $var, $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'website_toolbar_access', $var, $rootNamespace );
}

// def $odf_import_access
unset( $var );
$var = call_user_func_array( array( new eZUserFunctionCollection(), 'hasAccessTo' ),
  array(     'module' => "ezodf",
    'function' => "import",
    'user_id' => null ) );
$var = isset( $var['result'] ) ? $var['result'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( $tpl->hasVariable( 'odf_import_access', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'odf_import_access' is already defined.", array (
  0 => 
  array (
    0 => 1,
    1 => 0,
    2 => 1,
  ),
  1 => 
  array (
    0 => 17,
    1 => 113,
    2 => 1500,
  ),
  2 => 'extension/ezwt/design/standard/templates/parts/website_toolbar.tpl',
) );
    $tpl->setVariable( 'odf_import_access', $var, $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'odf_import_access', $var, $rootNamespace );
}

// def $odf_export_access
unset( $var );
$var = call_user_func_array( array( new eZUserFunctionCollection(), 'hasAccessTo' ),
  array(     'module' => "ezodf",
    'function' => "export",
    'user_id' => null ) );
$var = isset( $var['result'] ) ? $var['result'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( $tpl->hasVariable( 'odf_export_access', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'odf_export_access' is already defined.", array (
  0 => 
  array (
    0 => 1,
    1 => 0,
    2 => 1,
  ),
  1 => 
  array (
    0 => 17,
    1 => 113,
    2 => 1500,
  ),
  2 => 'extension/ezwt/design/standard/templates/parts/website_toolbar.tpl',
) );
    $tpl->setVariable( 'odf_export_access', $var, $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'odf_export_access', $var, $rootNamespace );
}

// def $content_object_language_code
if ( $tpl->hasVariable( 'content_object_language_code', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'content_object_language_code' is already defined.", array (
  0 => 
  array (
    0 => 1,
    1 => 0,
    2 => 1,
  ),
  1 => 
  array (
    0 => 17,
    1 => 113,
    2 => 1500,
  ),
  2 => 'extension/ezwt/design/standard/templates/parts/website_toolbar.tpl',
) );
    $tpl->setVariable( 'content_object_language_code', '', $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'content_object_language_code', '', $rootNamespace );
}

// def $policies
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'current_user', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['current_user'] : null;
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
if ( $tpl->hasVariable( 'policies', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'policies' is already defined.", array (
  0 => 
  array (
    0 => 1,
    1 => 0,
    2 => 1,
  ),
  1 => 
  array (
    0 => 17,
    1 => 113,
    2 => 1500,
  ),
  2 => 'extension/ezwt/design/standard/templates/parts/website_toolbar.tpl',
) );
    $tpl->setVariable( 'policies', $var, $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'policies', $var, $rootNamespace );
}

// def $available_for_current_class
if ( $tpl->hasVariable( 'available_for_current_class', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'available_for_current_class' is already defined.", array (
  0 => 
  array (
    0 => 1,
    1 => 0,
    2 => 1,
  ),
  1 => 
  array (
    0 => 17,
    1 => 113,
    2 => 1500,
  ),
  2 => 'extension/ezwt/design/standard/templates/parts/website_toolbar.tpl',
) );
    $tpl->setVariable( 'available_for_current_class', false, $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'available_for_current_class', false, $rootNamespace );
}

// def $custom_templates
if ( $tpl->hasVariable( 'custom_templates', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'custom_templates' is already defined.", array (
  0 => 
  array (
    0 => 1,
    1 => 0,
    2 => 1,
  ),
  1 => 
  array (
    0 => 17,
    1 => 113,
    2 => 1500,
  ),
  2 => 'extension/ezwt/design/standard/templates/parts/website_toolbar.tpl',
) );
    $tpl->setVariable( 'custom_templates', array (
  0 => 'object_states',
  1 => 'link',
  2 => 'rss',
  3 => 'ezmultiupload',
), $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'custom_templates', array (
  0 => 'object_states',
  1 => 'link',
  2 => 'rss',
  3 => 'ezmultiupload',
), $rootNamespace );
}

// def $include_in_view
if ( $tpl->hasVariable( 'include_in_view', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'include_in_view' is already defined.", array (
  0 => 
  array (
    0 => 1,
    1 => 0,
    2 => 1,
  ),
  1 => 
  array (
    0 => 17,
    1 => 113,
    2 => 1500,
  ),
  2 => 'extension/ezwt/design/standard/templates/parts/website_toolbar.tpl',
) );
    $tpl->setVariable( 'include_in_view', array (
  'object_states' => 'full',
  'link' => 'full',
  'rss' => 'full',
  'ezmultiupload' => 'full',
), $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'include_in_view', array (
  'object_states' => 'full',
  'link' => 'full',
  'rss' => 'full',
  'ezmultiupload' => 'full',
), $rootNamespace );
}

// def $node_hint
unset( $var );
unset( $var1 );
unset( $var2 );
unset( $var2 );
$var2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'current_node', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['current_node'] : null;
$var3 = compiledFetchAttribute( $var2, 'name' );
unset( $var2 );
$var2 = $var3;
if (! isset( $var2 ) ) $var2 = NULL;
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
$var1 = htmlspecialchars( $var2 );
unset( $var2 );
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
unset( $var2 );
unset( $var3 );
unset( $var3 );
$var3 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'content_object', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['content_object'] : null;
$var4 = compiledFetchAttribute( $var3, 'content_class' );
unset( $var3 );
$var3 = $var4;
$var4 = compiledFetchAttribute( $var3, 'name' );
unset( $var3 );
$var3 = $var4;
if (! isset( $var3 ) ) $var3 = NULL;
while ( is_object( $var3 ) and method_exists( $var3, 'templateValue' ) )
    $var3 = $var3->templateValue();
while ( is_object( $var3 ) and method_exists( $var3, 'templateValue' ) )
    $var3 = $var3->templateValue();
$var2 = htmlspecialchars( $var3 );
unset( $var3 );
if (! isset( $var2 ) ) $var2 = NULL;
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
if ( is_string( ": " ) )
    $var = ": " . implode( '', array( $var1, " [", $var2, "]" ) );
else if( is_array( ": " ) )
    $var = array_merge( ": ", array( $var1 ), array( " [" ), array( $var2 ), array( "]" ) );
unset( $var1, $var2 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( $tpl->hasVariable( 'node_hint', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'node_hint' is already defined.", array (
  0 => 
  array (
    0 => 1,
    1 => 0,
    2 => 1,
  ),
  1 => 
  array (
    0 => 17,
    1 => 113,
    2 => 1500,
  ),
  2 => 'extension/ezwt/design/standard/templates/parts/website_toolbar.tpl',
) );
    $tpl->setVariable( 'node_hint', $var, $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'node_hint', $var, $rootNamespace );
}

$text .= '
     ';
// foreach begins
$skipDelimiter = true;
if ( !isset( $fe_variable_stack_b038cefefab7a06fcb792cf731d0c8a8_1 ) ) $fe_variable_stack_b038cefefab7a06fcb792cf731d0c8a8_1 = array();
$fe_variable_stack_b038cefefab7a06fcb792cf731d0c8a8_1[] = compact( 'fe_array_b038cefefab7a06fcb792cf731d0c8a8_1', 'fe_array_keys_b038cefefab7a06fcb792cf731d0c8a8_1', 'fe_n_items_b038cefefab7a06fcb792cf731d0c8a8_1', 'fe_n_items_processed_b038cefefab7a06fcb792cf731d0c8a8_1', 'fe_i_b038cefefab7a06fcb792cf731d0c8a8_1', 'fe_key_b038cefefab7a06fcb792cf731d0c8a8_1', 'fe_val_b038cefefab7a06fcb792cf731d0c8a8_1', 'fe_offset_b038cefefab7a06fcb792cf731d0c8a8_1', 'fe_max_b038cefefab7a06fcb792cf731d0c8a8_1', 'fe_reverse_b038cefefab7a06fcb792cf731d0c8a8_1', 'fe_first_val_b038cefefab7a06fcb792cf731d0c8a8_1', 'fe_last_val_b038cefefab7a06fcb792cf731d0c8a8_1' );
unset( $fe_array_b038cefefab7a06fcb792cf731d0c8a8_1 );
unset( $fe_array_b038cefefab7a06fcb792cf731d0c8a8_1 );
$fe_array_b038cefefab7a06fcb792cf731d0c8a8_1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'policies', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['policies'] : null;
if (! isset( $fe_array_b038cefefab7a06fcb792cf731d0c8a8_1 ) ) $fe_array_b038cefefab7a06fcb792cf731d0c8a8_1 = NULL;
while ( is_object( $fe_array_b038cefefab7a06fcb792cf731d0c8a8_1 ) and method_exists( $fe_array_b038cefefab7a06fcb792cf731d0c8a8_1, 'templateValue' ) )
    $fe_array_b038cefefab7a06fcb792cf731d0c8a8_1 = $fe_array_b038cefefab7a06fcb792cf731d0c8a8_1->templateValue();

$fe_array_keys_b038cefefab7a06fcb792cf731d0c8a8_1 = is_array( $fe_array_b038cefefab7a06fcb792cf731d0c8a8_1 ) ? array_keys( $fe_array_b038cefefab7a06fcb792cf731d0c8a8_1 ) : array();
$fe_n_items_b038cefefab7a06fcb792cf731d0c8a8_1 = count( $fe_array_keys_b038cefefab7a06fcb792cf731d0c8a8_1 );
$fe_n_items_processed_b038cefefab7a06fcb792cf731d0c8a8_1 = 0;
$fe_offset_b038cefefab7a06fcb792cf731d0c8a8_1 = 0;
$fe_max_b038cefefab7a06fcb792cf731d0c8a8_1 = $fe_n_items_b038cefefab7a06fcb792cf731d0c8a8_1 - $fe_offset_b038cefefab7a06fcb792cf731d0c8a8_1;
$fe_reverse_b038cefefab7a06fcb792cf731d0c8a8_1 = false;
if ( $fe_offset_b038cefefab7a06fcb792cf731d0c8a8_1 < 0 || $fe_offset_b038cefefab7a06fcb792cf731d0c8a8_1 >= $fe_n_items_b038cefefab7a06fcb792cf731d0c8a8_1 )
{
    $fe_offset_b038cefefab7a06fcb792cf731d0c8a8_1 = ( $fe_offset_b038cefefab7a06fcb792cf731d0c8a8_1 < 0 ) ? 0 : $fe_n_items_b038cefefab7a06fcb792cf731d0c8a8_1;
    if ( $fe_n_items_b038cefefab7a06fcb792cf731d0c8a8_1 || $fe_offset_b038cefefab7a06fcb792cf731d0c8a8_1 < 0 )
 {
        eZDebug::writeWarning("Invalid 'offset' parameter specified: '$fe_offset_b038cefefab7a06fcb792cf731d0c8a8_1'. Array count: $fe_n_items_b038cefefab7a06fcb792cf731d0c8a8_1");   
}
}
if ( $fe_max_b038cefefab7a06fcb792cf731d0c8a8_1 < 0 || $fe_offset_b038cefefab7a06fcb792cf731d0c8a8_1 + $fe_max_b038cefefab7a06fcb792cf731d0c8a8_1 > $fe_n_items_b038cefefab7a06fcb792cf731d0c8a8_1 )
{
    if ( $fe_max_b038cefefab7a06fcb792cf731d0c8a8_1 < 0 )
 eZDebug::writeWarning("Invalid 'max' parameter specified: $fe_max_b038cefefab7a06fcb792cf731d0c8a8_1");
    $fe_max_b038cefefab7a06fcb792cf731d0c8a8_1 = $fe_n_items_b038cefefab7a06fcb792cf731d0c8a8_1 - $fe_offset_b038cefefab7a06fcb792cf731d0c8a8_1;
}
if ( $fe_reverse_b038cefefab7a06fcb792cf731d0c8a8_1 )
{
    $fe_first_val_b038cefefab7a06fcb792cf731d0c8a8_1 = $fe_n_items_b038cefefab7a06fcb792cf731d0c8a8_1 - 1 - $fe_offset_b038cefefab7a06fcb792cf731d0c8a8_1;
    $fe_last_val_b038cefefab7a06fcb792cf731d0c8a8_1  = 0;
}
else
{
    $fe_first_val_b038cefefab7a06fcb792cf731d0c8a8_1 = $fe_offset_b038cefefab7a06fcb792cf731d0c8a8_1;
    $fe_last_val_b038cefefab7a06fcb792cf731d0c8a8_1  = $fe_n_items_b038cefefab7a06fcb792cf731d0c8a8_1 - 1;
}
// foreach
for ( $fe_i_b038cefefab7a06fcb792cf731d0c8a8_1 = $fe_first_val_b038cefefab7a06fcb792cf731d0c8a8_1; $fe_n_items_processed_b038cefefab7a06fcb792cf731d0c8a8_1 < $fe_max_b038cefefab7a06fcb792cf731d0c8a8_1 && ( $fe_reverse_b038cefefab7a06fcb792cf731d0c8a8_1 ? $fe_i_b038cefefab7a06fcb792cf731d0c8a8_1 >= $fe_last_val_b038cefefab7a06fcb792cf731d0c8a8_1 : $fe_i_b038cefefab7a06fcb792cf731d0c8a8_1 <= $fe_last_val_b038cefefab7a06fcb792cf731d0c8a8_1 ); $fe_reverse_b038cefefab7a06fcb792cf731d0c8a8_1 ? $fe_i_b038cefefab7a06fcb792cf731d0c8a8_1-- : $fe_i_b038cefefab7a06fcb792cf731d0c8a8_1++ )
{
$fe_key_b038cefefab7a06fcb792cf731d0c8a8_1 = $fe_array_keys_b038cefefab7a06fcb792cf731d0c8a8_1[$fe_i_b038cefefab7a06fcb792cf731d0c8a8_1];
$fe_val_b038cefefab7a06fcb792cf731d0c8a8_1 = $fe_array_b038cefefab7a06fcb792cf731d0c8a8_1[$fe_key_b038cefefab7a06fcb792cf731d0c8a8_1];
$vars[$rootNamespace]['policy'] = $fe_val_b038cefefab7a06fcb792cf731d0c8a8_1;
$text .= '        ';
unset( $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_2 );
unset( $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_21 );
unset( $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_22 );
unset( $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_23 );
unset( $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_23 );
$elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_23 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'policy', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['policy'] : null;
$elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_24 = compiledFetchAttribute( $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_23, 'moduleName' );
unset( $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_23 );
$elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_23 = $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_24;
if (! isset( $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_23 ) ) $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_23 = NULL;
while ( is_object( $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_23 ) and method_exists( $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_23, 'templateValue' ) )
    $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_23 = $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_23->templateValue();
while ( is_object( $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_23 ) and method_exists( $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_23, 'templateValue' ) )
    $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_23 = $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_23->templateValue();
$elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_22 = ( ( $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_23 ) == ( '*' ) );
unset( $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_23 );
if (! isset( $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_22 ) ) $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_22 = NULL;
while ( is_object( $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_22 ) and method_exists( $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_22, 'templateValue' ) )
    $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_22 = $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_22->templateValue();
unset( $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_23 );
unset( $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_24 );
unset( $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_24 );
$elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_24 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'policy', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['policy'] : null;
$elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_25 = compiledFetchAttribute( $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_24, 'functionName' );
unset( $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_24 );
$elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_24 = $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_25;
if (! isset( $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_24 ) ) $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_24 = NULL;
while ( is_object( $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_24 ) and method_exists( $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_24, 'templateValue' ) )
    $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_24 = $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_24->templateValue();
while ( is_object( $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_24 ) and method_exists( $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_24, 'templateValue' ) )
    $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_24 = $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_24->templateValue();
$elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_23 = ( ( $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_24 ) == ( '*' ) );
unset( $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_24 );
if (! isset( $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_23 ) ) $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_23 = NULL;
while ( is_object( $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_23 ) and method_exists( $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_23, 'templateValue' ) )
    $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_23 = $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_23->templateValue();
unset( $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_24 );
unset( $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_25 );
unset( $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_25 );
$elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_25 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'policy', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['policy'] : null;
$elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_26 = compiledFetchAttribute( $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_25, 'limitation' );
unset( $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_25 );
$elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_25 = $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_26;
if (! isset( $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_25 ) ) $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_25 = NULL;
while ( is_object( $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_25 ) and method_exists( $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_25, 'templateValue' ) )
    $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_25 = $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_25->templateValue();
while ( is_object( $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_25 ) and method_exists( $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_25, 'templateValue' ) )
    $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_25 = $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_25->templateValue();
$elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_24 = ( ( $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_25 ) == ( '*' ) );
unset( $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_25 );
if (! isset( $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_24 ) ) $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_24 = NULL;
while ( is_object( $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_24 ) and method_exists( $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_24, 'templateValue' ) )
    $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_24 = $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_24->templateValue();
if ( !$elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_22 )
    $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_21 = false;
else if ( !$elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_23 )
    $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_21 = false;
else if ( !$elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_24 )
    $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_21 = false;
else
    $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_21 = $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_24;
unset( $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_22, $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_23, $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_24 );
if (! isset( $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_21 ) ) $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_21 = NULL;
while ( is_object( $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_21 ) and method_exists( $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_21, 'templateValue' ) )
    $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_21 = $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_21->templateValue();
unset( $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_22 );
unset( $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_23 );
unset( $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_24 );
unset( $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_24 );
$elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_24 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'policy', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['policy'] : null;
$elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_25 = compiledFetchAttribute( $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_24, 'moduleName' );
unset( $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_24 );
$elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_24 = $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_25;
if (! isset( $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_24 ) ) $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_24 = NULL;
while ( is_object( $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_24 ) and method_exists( $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_24, 'templateValue' ) )
    $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_24 = $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_24->templateValue();
while ( is_object( $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_24 ) and method_exists( $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_24, 'templateValue' ) )
    $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_24 = $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_24->templateValue();
$elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_23 = ( ( $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_24 ) == ( 'websitetoolbar' ) );
unset( $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_24 );
if (! isset( $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_23 ) ) $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_23 = NULL;
while ( is_object( $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_23 ) and method_exists( $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_23, 'templateValue' ) )
    $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_23 = $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_23->templateValue();
unset( $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_24 );
unset( $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_25 );
unset( $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_25 );
$elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_25 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'policy', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['policy'] : null;
$elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_26 = compiledFetchAttribute( $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_25, 'functionName' );
unset( $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_25 );
$elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_25 = $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_26;
if (! isset( $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_25 ) ) $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_25 = NULL;
while ( is_object( $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_25 ) and method_exists( $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_25, 'templateValue' ) )
    $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_25 = $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_25->templateValue();
while ( is_object( $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_25 ) and method_exists( $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_25, 'templateValue' ) )
    $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_25 = $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_25->templateValue();
$elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_24 = ( ( $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_25 ) == ( '*' ) );
unset( $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_25 );
if (! isset( $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_24 ) ) $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_24 = NULL;
while ( is_object( $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_24 ) and method_exists( $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_24, 'templateValue' ) )
    $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_24 = $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_24->templateValue();
unset( $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_25 );
unset( $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_26 );
unset( $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_26 );
$elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_26 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'policy', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['policy'] : null;
$elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_27 = compiledFetchAttribute( $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_26, 'limitation' );
unset( $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_26 );
$elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_26 = $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_27;
if (! isset( $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_26 ) ) $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_26 = NULL;
while ( is_object( $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_26 ) and method_exists( $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_26, 'templateValue' ) )
    $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_26 = $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_26->templateValue();
while ( is_object( $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_26 ) and method_exists( $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_26, 'templateValue' ) )
    $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_26 = $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_26->templateValue();
$elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_25 = ( ( $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_26 ) == ( '*' ) );
unset( $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_26 );
if (! isset( $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_25 ) ) $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_25 = NULL;
while ( is_object( $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_25 ) and method_exists( $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_25, 'templateValue' ) )
    $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_25 = $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_25->templateValue();
if ( !$elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_23 )
    $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_22 = false;
else if ( !$elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_24 )
    $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_22 = false;
else if ( !$elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_25 )
    $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_22 = false;
else
    $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_22 = $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_25;
unset( $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_23, $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_24, $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_25 );
if (! isset( $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_22 ) ) $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_22 = NULL;
while ( is_object( $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_22 ) and method_exists( $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_22, 'templateValue' ) )
    $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_22 = $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_22->templateValue();
unset( $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_23 );
unset( $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_24 );
unset( $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_25 );
unset( $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_25 );
$elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_25 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'policy', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['policy'] : null;
$elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_26 = compiledFetchAttribute( $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_25, 'moduleName' );
unset( $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_25 );
$elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_25 = $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_26;
if (! isset( $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_25 ) ) $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_25 = NULL;
while ( is_object( $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_25 ) and method_exists( $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_25, 'templateValue' ) )
    $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_25 = $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_25->templateValue();
while ( is_object( $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_25 ) and method_exists( $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_25, 'templateValue' ) )
    $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_25 = $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_25->templateValue();
$elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_24 = ( ( $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_25 ) == ( 'websitetoolbar' ) );
unset( $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_25 );
if (! isset( $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_24 ) ) $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_24 = NULL;
while ( is_object( $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_24 ) and method_exists( $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_24, 'templateValue' ) )
    $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_24 = $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_24->templateValue();
unset( $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_25 );
unset( $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_26 );
unset( $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_26 );
$elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_26 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'policy', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['policy'] : null;
$elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_27 = compiledFetchAttribute( $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_26, 'functionName' );
unset( $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_26 );
$elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_26 = $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_27;
if (! isset( $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_26 ) ) $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_26 = NULL;
while ( is_object( $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_26 ) and method_exists( $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_26, 'templateValue' ) )
    $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_26 = $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_26->templateValue();
while ( is_object( $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_26 ) and method_exists( $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_26, 'templateValue' ) )
    $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_26 = $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_26->templateValue();
$elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_25 = ( ( $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_26 ) == ( 'use' ) );
unset( $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_26 );
if (! isset( $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_25 ) ) $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_25 = NULL;
while ( is_object( $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_25 ) and method_exists( $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_25, 'templateValue' ) )
    $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_25 = $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_25->templateValue();
unset( $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_26 );
unset( $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_27 );
unset( $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_27 );
$elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_27 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'policy', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['policy'] : null;
$elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_28 = compiledFetchAttribute( $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_27, 'limitation' );
unset( $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_27 );
$elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_27 = $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_28;
if (! isset( $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_27 ) ) $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_27 = NULL;
while ( is_object( $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_27 ) and method_exists( $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_27, 'templateValue' ) )
    $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_27 = $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_27->templateValue();
while ( is_object( $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_27 ) and method_exists( $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_27, 'templateValue' ) )
    $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_27 = $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_27->templateValue();
$elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_26 = ( ( $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_27 ) == ( '*' ) );
unset( $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_27 );
if (! isset( $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_26 ) ) $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_26 = NULL;
while ( is_object( $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_26 ) and method_exists( $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_26, 'templateValue' ) )
    $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_26 = $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_26->templateValue();
if ( !$elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_24 )
    $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_23 = false;
else if ( !$elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_25 )
    $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_23 = false;
else if ( !$elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_26 )
    $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_23 = false;
else
    $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_23 = $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_26;
unset( $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_24, $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_25, $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_26 );
if (! isset( $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_23 ) ) $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_23 = NULL;
while ( is_object( $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_23 ) and method_exists( $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_23, 'templateValue' ) )
    $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_23 = $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_23->templateValue();
if ( $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_21 )
    $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_2 = $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_21;
else if ( $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_22 )
    $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_2 = $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_22;
else if ( $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_23 )
    $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_2 = $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_23;
else
    $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_2 = false;
unset( $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_21, $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_22, $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_23 );
if (! isset( $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_2 ) ) $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_2 = NULL;
while ( is_object( $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_2 ) and method_exists( $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_2, 'templateValue' ) )
    $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_2 = $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_2->templateValue();

// if begins
unset( $if_cond );
unset( $if_cond1 );
unset( $if_cond2 );
unset( $if_cond2 );
$if_cond2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'policy', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['policy'] : null;
$if_cond3 = compiledFetchAttribute( $if_cond2, 'moduleName' );
unset( $if_cond2 );
$if_cond2 = $if_cond3;
if (! isset( $if_cond2 ) ) $if_cond2 = NULL;
while ( is_object( $if_cond2 ) and method_exists( $if_cond2, 'templateValue' ) )
    $if_cond2 = $if_cond2->templateValue();
$if_cond1 = ( ( $if_cond2 ) == ( 'websitetoolbar' ) );
unset( $if_cond2 );
if (! isset( $if_cond1 ) ) $if_cond1 = NULL;
while ( is_object( $if_cond1 ) and method_exists( $if_cond1, 'templateValue' ) )
    $if_cond1 = $if_cond1->templateValue();
unset( $if_cond2 );
unset( $if_cond3 );
unset( $if_cond3 );
$if_cond3 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'policy', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['policy'] : null;
$if_cond4 = compiledFetchAttribute( $if_cond3, 'functionName' );
unset( $if_cond3 );
$if_cond3 = $if_cond4;
if (! isset( $if_cond3 ) ) $if_cond3 = NULL;
while ( is_object( $if_cond3 ) and method_exists( $if_cond3, 'templateValue' ) )
    $if_cond3 = $if_cond3->templateValue();
$if_cond2 = ( ( $if_cond3 ) == ( 'use' ) );
unset( $if_cond3 );
if (! isset( $if_cond2 ) ) $if_cond2 = NULL;
while ( is_object( $if_cond2 ) and method_exists( $if_cond2, 'templateValue' ) )
    $if_cond2 = $if_cond2->templateValue();
unset( $if_cond3 );
unset( $if_cond4 );
unset( $if_cond4 );
$if_cond4 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'policy', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['policy'] : null;
$if_cond5 = compiledFetchAttribute( $if_cond4, 'limitation' );
unset( $if_cond4 );
$if_cond4 = $if_cond5;
if (! isset( $if_cond4 ) ) $if_cond4 = NULL;
while ( is_object( $if_cond4 ) and method_exists( $if_cond4, 'templateValue' ) )
    $if_cond4 = $if_cond4->templateValue();
$if_cond3 = is_array( $if_cond4 );unset( $if_cond4 );
if (! isset( $if_cond3 ) ) $if_cond3 = NULL;
while ( is_object( $if_cond3 ) and method_exists( $if_cond3, 'templateValue' ) )
    $if_cond3 = $if_cond3->templateValue();
if ( !$if_cond1 )
    $if_cond = false;
else if ( !$if_cond2 )
    $if_cond = false;
else if ( !$if_cond3 )
    $if_cond = false;
else
    $if_cond = $if_cond3;
unset( $if_cond1, $if_cond2, $if_cond3 );
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '            ';
// if begins
unset( $if_cond );
unset( $if_cond1 );
unset( $if_cond1 );
$if_cond1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'policy', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['policy'] : null;
$if_cond2 = compiledFetchAttribute( $if_cond1, 'limitation' );
unset( $if_cond1 );
$if_cond1 = $if_cond2;
$if_cond2 = compiledFetchAttribute( $if_cond1, 0 );
unset( $if_cond1 );
$if_cond1 = $if_cond2;
$if_cond2 = compiledFetchAttribute( $if_cond1, 'values_as_array' );
unset( $if_cond1 );
$if_cond1 = $if_cond2;
if (! isset( $if_cond1 ) ) $if_cond1 = NULL;
while ( is_object( $if_cond1 ) and method_exists( $if_cond1, 'templateValue' ) )
    $if_cond1 = $if_cond1->templateValue();
unset( $if_cond2 );
unset( $if_cond2 );
$if_cond2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'content_object', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['content_object'] : null;
$if_cond3 = compiledFetchAttribute( $if_cond2, 'content_class' );
unset( $if_cond2 );
$if_cond2 = $if_cond3;
$if_cond3 = compiledFetchAttribute( $if_cond2, 'id' );
unset( $if_cond2 );
$if_cond2 = $if_cond3;
if (! isset( $if_cond2 ) ) $if_cond2 = NULL;
while ( is_object( $if_cond2 ) and method_exists( $if_cond2, 'templateValue' ) )
    $if_cond2 = $if_cond2->templateValue();
if( is_string( $if_cond1 ) )
{
  $if_cond = ( strpos( $if_cond1, $if_cond2 ) !== false );
}
else if ( is_array( $if_cond1 ) )
{
  $if_cond = in_array( $if_cond2, $if_cond1 );
}
else
{
$if_cond = false;
}unset( $if_cond1, $if_cond2 );
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '                ';
if ( array_key_exists( $currentNamespace, $vars ) && array_key_exists( 'available_for_current_class', $vars[$currentNamespace] ) )
{
    $vars[$currentNamespace]['available_for_current_class'] = true;
}
$text .= '            ';
}
unset( $if_cond );
// if ends

$text .= '        ';
}
elseif ( $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_2 )
{
$text .= '            ';
if ( array_key_exists( $currentNamespace, $vars ) && array_key_exists( 'available_for_current_class', $vars[$currentNamespace] ) )
{
    $vars[$currentNamespace]['available_for_current_class'] = true;
}
$text .= '        ';
}
unset( $if_cond );
// if ends

unset( $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_2 );

$text .= '     ';
$fe_n_items_processed_b038cefefab7a06fcb792cf731d0c8a8_1++;
} // foreach
$skipDelimiter = false;
if ( count( $fe_variable_stack_b038cefefab7a06fcb792cf731d0c8a8_1 ) ) extract( array_pop( $fe_variable_stack_b038cefefab7a06fcb792cf731d0c8a8_1 ) );

else
{

unset( $fe_array_b038cefefab7a06fcb792cf731d0c8a8_1 );

unset( $fe_array_keys_b038cefefab7a06fcb792cf731d0c8a8_1 );

unset( $fe_n_items_b038cefefab7a06fcb792cf731d0c8a8_1 );

unset( $fe_n_items_processed_b038cefefab7a06fcb792cf731d0c8a8_1 );

unset( $fe_i_b038cefefab7a06fcb792cf731d0c8a8_1 );

unset( $fe_key_b038cefefab7a06fcb792cf731d0c8a8_1 );

unset( $fe_val_b038cefefab7a06fcb792cf731d0c8a8_1 );

unset( $fe_offset_b038cefefab7a06fcb792cf731d0c8a8_1 );

unset( $fe_max_b038cefefab7a06fcb792cf731d0c8a8_1 );

unset( $fe_reverse_b038cefefab7a06fcb792cf731d0c8a8_1 );

unset( $fe_first_val_b038cefefab7a06fcb792cf731d0c8a8_1 );

unset( $fe_last_val_b038cefefab7a06fcb792cf731d0c8a8_1 );

unset( $fe_variable_stack_b038cefefab7a06fcb792cf731d0c8a8_1 );

}

// foreach ends
// if begins
unset( $if_cond );
unset( $if_cond1 );
unset( $if_cond1 );
$if_cond1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'website_toolbar_access', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['website_toolbar_access'] : null;
if (! isset( $if_cond1 ) ) $if_cond1 = NULL;
while ( is_object( $if_cond1 ) and method_exists( $if_cond1, 'templateValue' ) )
    $if_cond1 = $if_cond1->templateValue();
unset( $if_cond2 );
unset( $if_cond2 );
$if_cond2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'available_for_current_class', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['available_for_current_class'] : null;
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
$text .= '
<!-- eZ website toolbar: START -->

<div id="ezwt">
<div id="ezwt-content" class="float-break">

<!-- eZ website toolbar content: START -->
';
$oldRestoreIncludeArray_03d8b2109838a03eeb9629bf9a9de976 = isset( $restoreIncludeArray ) ? $restoreIncludeArray : array();
$restoreIncludeArray = array();

if ( !isset( $dKeys ) )
{
    $resH = $tpl->resourceHandler( "design" );
    $dKeys = $resH->keys();
}

$resourceFound = false;
if ( file_exists( 'var/ezwebin_site/cache/template/compiled/logo-2eabe380bb9d4a2b32425f821ee03e98.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$rootNamespace = $currentNamespace;
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/ezwt/design/standard/templates/parts/websitetoolbar/logo.tpl' );
include( '' . 'var/ezwebin_site/cache/template/compiled/logo-2eabe380bb9d4a2b32425f821ee03e98.php' );
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
$tpl->processURI( 'extension/ezwt/design/standard/templates/parts/websitetoolbar/logo.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
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
$restoreIncludeArray = $oldRestoreIncludeArray_03d8b2109838a03eeb9629bf9a9de976;

$text .= '
<form method="post" action="/ezpublish/app/ezpublish_legacy/index.php/fre/content/action">
';
// if begins
unset( $if_cond );
unset( $if_cond1 );
unset( $if_cond1 );
$if_cond1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'content_object', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['content_object'] : null;
$if_cond2 = compiledFetchAttribute( $if_cond1, 'can_create' );
unset( $if_cond1 );
$if_cond1 = $if_cond2;
if (! isset( $if_cond1 ) ) $if_cond1 = NULL;
while ( is_object( $if_cond1 ) and method_exists( $if_cond1, 'templateValue' ) )
    $if_cond1 = $if_cond1->templateValue();
unset( $if_cond2 );
unset( $if_cond2 );
$if_cond2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'is_container', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['is_container'] : null;
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
$text .= '<div id="ezwt-creataction" class="ezwt-actiongroup">
<label for="ezwt-create" class="hide">Create:</label>';
// def $can_create_class_list
unset( $var );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$varData = array( 'value' => $var );
$tpl->processOperator( 'ezcreateclasslistgroups',
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
        2 => 'content_object',
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
          1 => 'can_create_class_list',
          2 => false,
        ),
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
if ( $tpl->hasVariable( 'can_create_class_list', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'can_create_class_list' is already defined.", array (
  0 => 
  array (
    0 => 55,
    1 => 0,
    2 => 3038,
  ),
  1 => 
  array (
    0 => 55,
    1 => 93,
    2 => 3131,
  ),
  2 => 'extension/ezwt/design/standard/templates/parts/website_toolbar.tpl',
) );
    $tpl->setVariable( 'can_create_class_list', $var, $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'can_create_class_list', $var, $rootNamespace );
}

$text .= '  ';
// if begins
unset( $if_cond );
unset( $if_cond );
$if_cond = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'can_create_class_list', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['can_create_class_list'] : null;
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
$text .= '  <select name="ClassID" id="ezwt-create">
  ';
// foreach begins
$skipDelimiter = true;
if ( !isset( $fe_variable_stack_b038cefefab7a06fcb792cf731d0c8a8_3 ) ) $fe_variable_stack_b038cefefab7a06fcb792cf731d0c8a8_3 = array();
$fe_variable_stack_b038cefefab7a06fcb792cf731d0c8a8_3[] = compact( 'fe_array_b038cefefab7a06fcb792cf731d0c8a8_3', 'fe_array_keys_b038cefefab7a06fcb792cf731d0c8a8_3', 'fe_n_items_b038cefefab7a06fcb792cf731d0c8a8_3', 'fe_n_items_processed_b038cefefab7a06fcb792cf731d0c8a8_3', 'fe_i_b038cefefab7a06fcb792cf731d0c8a8_3', 'fe_key_b038cefefab7a06fcb792cf731d0c8a8_3', 'fe_val_b038cefefab7a06fcb792cf731d0c8a8_3', 'fe_offset_b038cefefab7a06fcb792cf731d0c8a8_3', 'fe_max_b038cefefab7a06fcb792cf731d0c8a8_3', 'fe_reverse_b038cefefab7a06fcb792cf731d0c8a8_3', 'fe_first_val_b038cefefab7a06fcb792cf731d0c8a8_3', 'fe_last_val_b038cefefab7a06fcb792cf731d0c8a8_3' );
unset( $fe_array_b038cefefab7a06fcb792cf731d0c8a8_3 );
unset( $fe_array_b038cefefab7a06fcb792cf731d0c8a8_3 );
$fe_array_b038cefefab7a06fcb792cf731d0c8a8_3 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'can_create_class_list', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['can_create_class_list'] : null;
if (! isset( $fe_array_b038cefefab7a06fcb792cf731d0c8a8_3 ) ) $fe_array_b038cefefab7a06fcb792cf731d0c8a8_3 = NULL;
while ( is_object( $fe_array_b038cefefab7a06fcb792cf731d0c8a8_3 ) and method_exists( $fe_array_b038cefefab7a06fcb792cf731d0c8a8_3, 'templateValue' ) )
    $fe_array_b038cefefab7a06fcb792cf731d0c8a8_3 = $fe_array_b038cefefab7a06fcb792cf731d0c8a8_3->templateValue();

$fe_array_keys_b038cefefab7a06fcb792cf731d0c8a8_3 = is_array( $fe_array_b038cefefab7a06fcb792cf731d0c8a8_3 ) ? array_keys( $fe_array_b038cefefab7a06fcb792cf731d0c8a8_3 ) : array();
$fe_n_items_b038cefefab7a06fcb792cf731d0c8a8_3 = count( $fe_array_keys_b038cefefab7a06fcb792cf731d0c8a8_3 );
$fe_n_items_processed_b038cefefab7a06fcb792cf731d0c8a8_3 = 0;
$fe_offset_b038cefefab7a06fcb792cf731d0c8a8_3 = 0;
$fe_max_b038cefefab7a06fcb792cf731d0c8a8_3 = $fe_n_items_b038cefefab7a06fcb792cf731d0c8a8_3 - $fe_offset_b038cefefab7a06fcb792cf731d0c8a8_3;
$fe_reverse_b038cefefab7a06fcb792cf731d0c8a8_3 = false;
if ( $fe_offset_b038cefefab7a06fcb792cf731d0c8a8_3 < 0 || $fe_offset_b038cefefab7a06fcb792cf731d0c8a8_3 >= $fe_n_items_b038cefefab7a06fcb792cf731d0c8a8_3 )
{
    $fe_offset_b038cefefab7a06fcb792cf731d0c8a8_3 = ( $fe_offset_b038cefefab7a06fcb792cf731d0c8a8_3 < 0 ) ? 0 : $fe_n_items_b038cefefab7a06fcb792cf731d0c8a8_3;
    if ( $fe_n_items_b038cefefab7a06fcb792cf731d0c8a8_3 || $fe_offset_b038cefefab7a06fcb792cf731d0c8a8_3 < 0 )
 {
        eZDebug::writeWarning("Invalid 'offset' parameter specified: '$fe_offset_b038cefefab7a06fcb792cf731d0c8a8_3'. Array count: $fe_n_items_b038cefefab7a06fcb792cf731d0c8a8_3");   
}
}
if ( $fe_max_b038cefefab7a06fcb792cf731d0c8a8_3 < 0 || $fe_offset_b038cefefab7a06fcb792cf731d0c8a8_3 + $fe_max_b038cefefab7a06fcb792cf731d0c8a8_3 > $fe_n_items_b038cefefab7a06fcb792cf731d0c8a8_3 )
{
    if ( $fe_max_b038cefefab7a06fcb792cf731d0c8a8_3 < 0 )
 eZDebug::writeWarning("Invalid 'max' parameter specified: $fe_max_b038cefefab7a06fcb792cf731d0c8a8_3");
    $fe_max_b038cefefab7a06fcb792cf731d0c8a8_3 = $fe_n_items_b038cefefab7a06fcb792cf731d0c8a8_3 - $fe_offset_b038cefefab7a06fcb792cf731d0c8a8_3;
}
if ( $fe_reverse_b038cefefab7a06fcb792cf731d0c8a8_3 )
{
    $fe_first_val_b038cefefab7a06fcb792cf731d0c8a8_3 = $fe_n_items_b038cefefab7a06fcb792cf731d0c8a8_3 - 1 - $fe_offset_b038cefefab7a06fcb792cf731d0c8a8_3;
    $fe_last_val_b038cefefab7a06fcb792cf731d0c8a8_3  = 0;
}
else
{
    $fe_first_val_b038cefefab7a06fcb792cf731d0c8a8_3 = $fe_offset_b038cefefab7a06fcb792cf731d0c8a8_3;
    $fe_last_val_b038cefefab7a06fcb792cf731d0c8a8_3  = $fe_n_items_b038cefefab7a06fcb792cf731d0c8a8_3 - 1;
}
// foreach
for ( $fe_i_b038cefefab7a06fcb792cf731d0c8a8_3 = $fe_first_val_b038cefefab7a06fcb792cf731d0c8a8_3; $fe_n_items_processed_b038cefefab7a06fcb792cf731d0c8a8_3 < $fe_max_b038cefefab7a06fcb792cf731d0c8a8_3 && ( $fe_reverse_b038cefefab7a06fcb792cf731d0c8a8_3 ? $fe_i_b038cefefab7a06fcb792cf731d0c8a8_3 >= $fe_last_val_b038cefefab7a06fcb792cf731d0c8a8_3 : $fe_i_b038cefefab7a06fcb792cf731d0c8a8_3 <= $fe_last_val_b038cefefab7a06fcb792cf731d0c8a8_3 ); $fe_reverse_b038cefefab7a06fcb792cf731d0c8a8_3 ? $fe_i_b038cefefab7a06fcb792cf731d0c8a8_3-- : $fe_i_b038cefefab7a06fcb792cf731d0c8a8_3++ )
{
$fe_key_b038cefefab7a06fcb792cf731d0c8a8_3 = $fe_array_keys_b038cefefab7a06fcb792cf731d0c8a8_3[$fe_i_b038cefefab7a06fcb792cf731d0c8a8_3];
$fe_val_b038cefefab7a06fcb792cf731d0c8a8_3 = $fe_array_b038cefefab7a06fcb792cf731d0c8a8_3[$fe_key_b038cefefab7a06fcb792cf731d0c8a8_3];
$vars[$rootNamespace]['group'] = $fe_val_b038cefefab7a06fcb792cf731d0c8a8_3;
$text .= '    <optgroup label="';
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

$text .= '">
    ';
// foreach begins
$skipDelimiter = true;
if ( !isset( $fe_variable_stack_b038cefefab7a06fcb792cf731d0c8a8_2 ) ) $fe_variable_stack_b038cefefab7a06fcb792cf731d0c8a8_2 = array();
$fe_variable_stack_b038cefefab7a06fcb792cf731d0c8a8_2[] = compact( 'fe_array_b038cefefab7a06fcb792cf731d0c8a8_2', 'fe_array_keys_b038cefefab7a06fcb792cf731d0c8a8_2', 'fe_n_items_b038cefefab7a06fcb792cf731d0c8a8_2', 'fe_n_items_processed_b038cefefab7a06fcb792cf731d0c8a8_2', 'fe_i_b038cefefab7a06fcb792cf731d0c8a8_2', 'fe_key_b038cefefab7a06fcb792cf731d0c8a8_2', 'fe_val_b038cefefab7a06fcb792cf731d0c8a8_2', 'fe_offset_b038cefefab7a06fcb792cf731d0c8a8_2', 'fe_max_b038cefefab7a06fcb792cf731d0c8a8_2', 'fe_reverse_b038cefefab7a06fcb792cf731d0c8a8_2', 'fe_first_val_b038cefefab7a06fcb792cf731d0c8a8_2', 'fe_last_val_b038cefefab7a06fcb792cf731d0c8a8_2' );
unset( $fe_array_b038cefefab7a06fcb792cf731d0c8a8_2 );
unset( $fe_array_b038cefefab7a06fcb792cf731d0c8a8_2 );
$fe_array_b038cefefab7a06fcb792cf731d0c8a8_2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'group', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['group'] : null;
$fe_array_b038cefefab7a06fcb792cf731d0c8a8_21 = compiledFetchAttribute( $fe_array_b038cefefab7a06fcb792cf731d0c8a8_2, 'items' );
unset( $fe_array_b038cefefab7a06fcb792cf731d0c8a8_2 );
$fe_array_b038cefefab7a06fcb792cf731d0c8a8_2 = $fe_array_b038cefefab7a06fcb792cf731d0c8a8_21;
if (! isset( $fe_array_b038cefefab7a06fcb792cf731d0c8a8_2 ) ) $fe_array_b038cefefab7a06fcb792cf731d0c8a8_2 = NULL;
while ( is_object( $fe_array_b038cefefab7a06fcb792cf731d0c8a8_2 ) and method_exists( $fe_array_b038cefefab7a06fcb792cf731d0c8a8_2, 'templateValue' ) )
    $fe_array_b038cefefab7a06fcb792cf731d0c8a8_2 = $fe_array_b038cefefab7a06fcb792cf731d0c8a8_2->templateValue();

$fe_array_keys_b038cefefab7a06fcb792cf731d0c8a8_2 = is_array( $fe_array_b038cefefab7a06fcb792cf731d0c8a8_2 ) ? array_keys( $fe_array_b038cefefab7a06fcb792cf731d0c8a8_2 ) : array();
$fe_n_items_b038cefefab7a06fcb792cf731d0c8a8_2 = count( $fe_array_keys_b038cefefab7a06fcb792cf731d0c8a8_2 );
$fe_n_items_processed_b038cefefab7a06fcb792cf731d0c8a8_2 = 0;
$fe_offset_b038cefefab7a06fcb792cf731d0c8a8_2 = 0;
$fe_max_b038cefefab7a06fcb792cf731d0c8a8_2 = $fe_n_items_b038cefefab7a06fcb792cf731d0c8a8_2 - $fe_offset_b038cefefab7a06fcb792cf731d0c8a8_2;
$fe_reverse_b038cefefab7a06fcb792cf731d0c8a8_2 = false;
if ( $fe_offset_b038cefefab7a06fcb792cf731d0c8a8_2 < 0 || $fe_offset_b038cefefab7a06fcb792cf731d0c8a8_2 >= $fe_n_items_b038cefefab7a06fcb792cf731d0c8a8_2 )
{
    $fe_offset_b038cefefab7a06fcb792cf731d0c8a8_2 = ( $fe_offset_b038cefefab7a06fcb792cf731d0c8a8_2 < 0 ) ? 0 : $fe_n_items_b038cefefab7a06fcb792cf731d0c8a8_2;
    if ( $fe_n_items_b038cefefab7a06fcb792cf731d0c8a8_2 || $fe_offset_b038cefefab7a06fcb792cf731d0c8a8_2 < 0 )
 {
        eZDebug::writeWarning("Invalid 'offset' parameter specified: '$fe_offset_b038cefefab7a06fcb792cf731d0c8a8_2'. Array count: $fe_n_items_b038cefefab7a06fcb792cf731d0c8a8_2");   
}
}
if ( $fe_max_b038cefefab7a06fcb792cf731d0c8a8_2 < 0 || $fe_offset_b038cefefab7a06fcb792cf731d0c8a8_2 + $fe_max_b038cefefab7a06fcb792cf731d0c8a8_2 > $fe_n_items_b038cefefab7a06fcb792cf731d0c8a8_2 )
{
    if ( $fe_max_b038cefefab7a06fcb792cf731d0c8a8_2 < 0 )
 eZDebug::writeWarning("Invalid 'max' parameter specified: $fe_max_b038cefefab7a06fcb792cf731d0c8a8_2");
    $fe_max_b038cefefab7a06fcb792cf731d0c8a8_2 = $fe_n_items_b038cefefab7a06fcb792cf731d0c8a8_2 - $fe_offset_b038cefefab7a06fcb792cf731d0c8a8_2;
}
if ( $fe_reverse_b038cefefab7a06fcb792cf731d0c8a8_2 )
{
    $fe_first_val_b038cefefab7a06fcb792cf731d0c8a8_2 = $fe_n_items_b038cefefab7a06fcb792cf731d0c8a8_2 - 1 - $fe_offset_b038cefefab7a06fcb792cf731d0c8a8_2;
    $fe_last_val_b038cefefab7a06fcb792cf731d0c8a8_2  = 0;
}
else
{
    $fe_first_val_b038cefefab7a06fcb792cf731d0c8a8_2 = $fe_offset_b038cefefab7a06fcb792cf731d0c8a8_2;
    $fe_last_val_b038cefefab7a06fcb792cf731d0c8a8_2  = $fe_n_items_b038cefefab7a06fcb792cf731d0c8a8_2 - 1;
}
// foreach
for ( $fe_i_b038cefefab7a06fcb792cf731d0c8a8_2 = $fe_first_val_b038cefefab7a06fcb792cf731d0c8a8_2; $fe_n_items_processed_b038cefefab7a06fcb792cf731d0c8a8_2 < $fe_max_b038cefefab7a06fcb792cf731d0c8a8_2 && ( $fe_reverse_b038cefefab7a06fcb792cf731d0c8a8_2 ? $fe_i_b038cefefab7a06fcb792cf731d0c8a8_2 >= $fe_last_val_b038cefefab7a06fcb792cf731d0c8a8_2 : $fe_i_b038cefefab7a06fcb792cf731d0c8a8_2 <= $fe_last_val_b038cefefab7a06fcb792cf731d0c8a8_2 ); $fe_reverse_b038cefefab7a06fcb792cf731d0c8a8_2 ? $fe_i_b038cefefab7a06fcb792cf731d0c8a8_2-- : $fe_i_b038cefefab7a06fcb792cf731d0c8a8_2++ )
{
$fe_key_b038cefefab7a06fcb792cf731d0c8a8_2 = $fe_array_keys_b038cefefab7a06fcb792cf731d0c8a8_2[$fe_i_b038cefefab7a06fcb792cf731d0c8a8_2];
$fe_val_b038cefefab7a06fcb792cf731d0c8a8_2 = $fe_array_b038cefefab7a06fcb792cf731d0c8a8_2[$fe_key_b038cefefab7a06fcb792cf731d0c8a8_2];
$vars[$rootNamespace]['class'] = $fe_val_b038cefefab7a06fcb792cf731d0c8a8_2;
$text .= '        <option value="';
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

$text .= '">';
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
$var = htmlspecialchars( $var1 );
unset( $var1 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= '</option>
    ';
$fe_n_items_processed_b038cefefab7a06fcb792cf731d0c8a8_2++;
} // foreach
$skipDelimiter = false;
if ( count( $fe_variable_stack_b038cefefab7a06fcb792cf731d0c8a8_2 ) ) extract( array_pop( $fe_variable_stack_b038cefefab7a06fcb792cf731d0c8a8_2 ) );

else
{

unset( $fe_array_b038cefefab7a06fcb792cf731d0c8a8_2 );

unset( $fe_array_keys_b038cefefab7a06fcb792cf731d0c8a8_2 );

unset( $fe_n_items_b038cefefab7a06fcb792cf731d0c8a8_2 );

unset( $fe_n_items_processed_b038cefefab7a06fcb792cf731d0c8a8_2 );

unset( $fe_i_b038cefefab7a06fcb792cf731d0c8a8_2 );

unset( $fe_key_b038cefefab7a06fcb792cf731d0c8a8_2 );

unset( $fe_val_b038cefefab7a06fcb792cf731d0c8a8_2 );

unset( $fe_offset_b038cefefab7a06fcb792cf731d0c8a8_2 );

unset( $fe_max_b038cefefab7a06fcb792cf731d0c8a8_2 );

unset( $fe_reverse_b038cefefab7a06fcb792cf731d0c8a8_2 );

unset( $fe_first_val_b038cefefab7a06fcb792cf731d0c8a8_2 );

unset( $fe_last_val_b038cefefab7a06fcb792cf731d0c8a8_2 );

unset( $fe_variable_stack_b038cefefab7a06fcb792cf731d0c8a8_2 );

}

// foreach ends
$text .= '    </optgroup>
  ';
$fe_n_items_processed_b038cefefab7a06fcb792cf731d0c8a8_3++;
} // foreach
$skipDelimiter = false;
if ( count( $fe_variable_stack_b038cefefab7a06fcb792cf731d0c8a8_3 ) ) extract( array_pop( $fe_variable_stack_b038cefefab7a06fcb792cf731d0c8a8_3 ) );

else
{

unset( $fe_array_b038cefefab7a06fcb792cf731d0c8a8_3 );

unset( $fe_array_keys_b038cefefab7a06fcb792cf731d0c8a8_3 );

unset( $fe_n_items_b038cefefab7a06fcb792cf731d0c8a8_3 );

unset( $fe_n_items_processed_b038cefefab7a06fcb792cf731d0c8a8_3 );

unset( $fe_i_b038cefefab7a06fcb792cf731d0c8a8_3 );

unset( $fe_key_b038cefefab7a06fcb792cf731d0c8a8_3 );

unset( $fe_val_b038cefefab7a06fcb792cf731d0c8a8_3 );

unset( $fe_offset_b038cefefab7a06fcb792cf731d0c8a8_3 );

unset( $fe_max_b038cefefab7a06fcb792cf731d0c8a8_3 );

unset( $fe_reverse_b038cefefab7a06fcb792cf731d0c8a8_3 );

unset( $fe_first_val_b038cefefab7a06fcb792cf731d0c8a8_3 );

unset( $fe_last_val_b038cefefab7a06fcb792cf731d0c8a8_3 );

unset( $fe_variable_stack_b038cefefab7a06fcb792cf731d0c8a8_3 );

}

// foreach ends
$text .= '  </select>
  ';
}
unset( $if_cond );
// if ends

$text .= '  <input type="hidden" name="ContentLanguageCode" value="fre-FR" />
  <input class="ezwt-input-image" type="image" src="/ezpublish/app/ezpublish_legacy/extension/ezwt/design/standard/images/websitetoolbar/ezwt-icon-create.png" name="NewButton" title="Créer ici" />
</div>';
}
unset( $if_cond );
// if ends

$text .= '
<div id="ezwt-currentpageaction" class="ezwt-actiongroup">
';
// if begins
unset( $if_cond );
unset( $if_cond );
$if_cond = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'content_object', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['content_object'] : null;
$if_cond1 = compiledFetchAttribute( $if_cond, 'can_edit' );
unset( $if_cond );
$if_cond = $if_cond1;
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '    <input type="hidden" name="ContentObjectLanguageCode" value="fre-FR" />
    <input class="ezwt-input-image" type="image" src="/ezpublish/app/ezpublish_legacy/extension/ezwt/design/standard/images/websitetoolbar/ezwt-icon-edit.png" name="EditButton" title="Modifier';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'node_hint', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['node_hint'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '" />';
}
unset( $if_cond );
// if ends

// if begins
unset( $if_cond );
unset( $if_cond );
$if_cond = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'content_object', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['content_object'] : null;
$if_cond1 = compiledFetchAttribute( $if_cond, 'can_move' );
unset( $if_cond );
$if_cond = $if_cond1;
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '    <input class="ezwt-input-image" type="image" src="/ezpublish/app/ezpublish_legacy/extension/ezwt/design/standard/images/websitetoolbar/ezwt-icon-move.png" name="MoveNodeButton" title="Déplacer';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'node_hint', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['node_hint'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '" />';
}
unset( $if_cond );
// if ends

// if begins
unset( $if_cond );
unset( $if_cond );
$if_cond = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'content_object', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['content_object'] : null;
$if_cond1 = compiledFetchAttribute( $if_cond, 'can_remove' );
unset( $if_cond );
$if_cond = $if_cond1;
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '    <input class="ezwt-input-image" type="image" src="/ezpublish/app/ezpublish_legacy/extension/ezwt/design/standard/images/websitetoolbar/ezwt-icon-remove.png" name="ActionRemove" title="Supprimer';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'node_hint', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['node_hint'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '" />';
}
unset( $if_cond );
// if ends

// if begins
unset( $if_cond );
unset( $if_cond );
$if_cond = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'can_manage_location', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['can_manage_location'] : null;
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
$if_cond1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'can_manage_location', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['can_manage_location'] : null;
if (! isset( $if_cond1 ) ) $if_cond1 = NULL;
while ( is_object( $if_cond1 ) and method_exists( $if_cond1, 'templateValue' ) )
    $if_cond1 = $if_cond1->templateValue();
unset( $if_cond2 );
unset( $if_cond3 );
unset( $if_cond3 );
$if_cond3 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'current_node', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['current_node'] : null;
$if_cond4 = compiledFetchAttribute( $if_cond3, 'node_id' );
unset( $if_cond3 );
$if_cond3 = $if_cond4;
if (! isset( $if_cond3 ) ) $if_cond3 = NULL;
while ( is_object( $if_cond3 ) and method_exists( $if_cond3, 'templateValue' ) )
    $if_cond3 = $if_cond3->templateValue();
$if_cond2 = ( ( $if_cond3 ) != ( '2' ) );
unset( $if_cond3 );
if (! isset( $if_cond2 ) ) $if_cond2 = NULL;
while ( is_object( $if_cond2 ) and method_exists( $if_cond2, 'templateValue' ) )
    $if_cond2 = $if_cond2->templateValue();
unset( $if_cond3 );
unset( $if_cond4 );
unset( $if_cond4 );
$if_cond4 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'current_node', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['current_node'] : null;
$if_cond5 = compiledFetchAttribute( $if_cond4, 'node_id' );
unset( $if_cond4 );
$if_cond4 = $if_cond5;
if (! isset( $if_cond4 ) ) $if_cond4 = NULL;
while ( is_object( $if_cond4 ) and method_exists( $if_cond4, 'templateValue' ) )
    $if_cond4 = $if_cond4->templateValue();
$if_cond3 = ( ( $if_cond4 ) != ( '43' ) );
unset( $if_cond4 );
if (! isset( $if_cond3 ) ) $if_cond3 = NULL;
while ( is_object( $if_cond3 ) and method_exists( $if_cond3, 'templateValue' ) )
    $if_cond3 = $if_cond3->templateValue();
unset( $if_cond4 );
unset( $if_cond5 );
unset( $if_cond5 );
$if_cond5 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'current_node', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['current_node'] : null;
$if_cond6 = compiledFetchAttribute( $if_cond5, 'node_id' );
unset( $if_cond5 );
$if_cond5 = $if_cond6;
if (! isset( $if_cond5 ) ) $if_cond5 = NULL;
while ( is_object( $if_cond5 ) and method_exists( $if_cond5, 'templateValue' ) )
    $if_cond5 = $if_cond5->templateValue();
$if_cond4 = ( ( $if_cond5 ) != ( '5' ) );
unset( $if_cond5 );
if (! isset( $if_cond4 ) ) $if_cond4 = NULL;
while ( is_object( $if_cond4 ) and method_exists( $if_cond4, 'templateValue' ) )
    $if_cond4 = $if_cond4->templateValue();
if ( !$if_cond1 )
    $if_cond = false;
else if ( !$if_cond2 )
    $if_cond = false;
else if ( !$if_cond3 )
    $if_cond = false;
else if ( !$if_cond4 )
    $if_cond = false;
else
    $if_cond = $if_cond4;
unset( $if_cond1, $if_cond2, $if_cond3, $if_cond4 );
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '        <input class="ezwt-input-image" type="image" src="/ezpublish/app/ezpublish_legacy/extension/ezwt/design/standard/images/websitetoolbar/ezwt-icon-locations.png" name="AddAssignmentButton" title="Ajouter des emplacements" />
    ';
}
else
{
$text .= '        <input class="ezwt-input-image disabled" type="image" src="/ezpublish/app/ezpublish_legacy/extension/ezwt/design/standard/images/websitetoolbar/ezwt-icon-locations-disabled.png" name="AddAssignmentButton" title="Ajouter des emplacements" disabled="disabled" />
    ';
}
unset( $if_cond );
// if ends

}
unset( $if_cond );
// if ends

$text .= '
<a href=';
unset( $var );
unset( $var1 );
unset( $var3 );
unset( $var3 );
$var3 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'current_node', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['current_node'] : null;
$var4 = compiledFetchAttribute( $var3, 'node_id' );
unset( $var3 );
$var3 = $var4;
if (! isset( $var3 ) ) $var3 = NULL;
while ( is_object( $var3 ) and method_exists( $var3, 'templateValue' ) )
    $var3 = $var3->templateValue();
while ( is_object( $var3 ) and method_exists( $var3, 'templateValue' ) )
    $var3 = $var3->templateValue();
$var1 = ( 'websitetoolbar/sort/' . $var3 );
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

$text .= ' title="Tri"><img src="/ezpublish/app/ezpublish_legacy/extension/ezwt/design/standard/images/websitetoolbar/ezwt-icon-sort.png" alt="Tri" /></a>

</div>

<div id="ezwt-miscaction" class="ezwt-actiongroup">
';
// foreach begins
$skipDelimiter = true;
if ( !isset( $fe_variable_stack_b038cefefab7a06fcb792cf731d0c8a8_4 ) ) $fe_variable_stack_b038cefefab7a06fcb792cf731d0c8a8_4 = array();
$fe_variable_stack_b038cefefab7a06fcb792cf731d0c8a8_4[] = compact( 'fe_array_b038cefefab7a06fcb792cf731d0c8a8_4', 'fe_array_keys_b038cefefab7a06fcb792cf731d0c8a8_4', 'fe_n_items_b038cefefab7a06fcb792cf731d0c8a8_4', 'fe_n_items_processed_b038cefefab7a06fcb792cf731d0c8a8_4', 'fe_i_b038cefefab7a06fcb792cf731d0c8a8_4', 'fe_key_b038cefefab7a06fcb792cf731d0c8a8_4', 'fe_val_b038cefefab7a06fcb792cf731d0c8a8_4', 'fe_offset_b038cefefab7a06fcb792cf731d0c8a8_4', 'fe_max_b038cefefab7a06fcb792cf731d0c8a8_4', 'fe_reverse_b038cefefab7a06fcb792cf731d0c8a8_4', 'fe_first_val_b038cefefab7a06fcb792cf731d0c8a8_4', 'fe_last_val_b038cefefab7a06fcb792cf731d0c8a8_4' );
unset( $fe_array_b038cefefab7a06fcb792cf731d0c8a8_4 );
unset( $fe_array_b038cefefab7a06fcb792cf731d0c8a8_4 );
$fe_array_b038cefefab7a06fcb792cf731d0c8a8_4 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'custom_templates', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['custom_templates'] : null;
if (! isset( $fe_array_b038cefefab7a06fcb792cf731d0c8a8_4 ) ) $fe_array_b038cefefab7a06fcb792cf731d0c8a8_4 = NULL;
while ( is_object( $fe_array_b038cefefab7a06fcb792cf731d0c8a8_4 ) and method_exists( $fe_array_b038cefefab7a06fcb792cf731d0c8a8_4, 'templateValue' ) )
    $fe_array_b038cefefab7a06fcb792cf731d0c8a8_4 = $fe_array_b038cefefab7a06fcb792cf731d0c8a8_4->templateValue();

$fe_array_keys_b038cefefab7a06fcb792cf731d0c8a8_4 = is_array( $fe_array_b038cefefab7a06fcb792cf731d0c8a8_4 ) ? array_keys( $fe_array_b038cefefab7a06fcb792cf731d0c8a8_4 ) : array();
$fe_n_items_b038cefefab7a06fcb792cf731d0c8a8_4 = count( $fe_array_keys_b038cefefab7a06fcb792cf731d0c8a8_4 );
$fe_n_items_processed_b038cefefab7a06fcb792cf731d0c8a8_4 = 0;
$fe_offset_b038cefefab7a06fcb792cf731d0c8a8_4 = 0;
$fe_max_b038cefefab7a06fcb792cf731d0c8a8_4 = $fe_n_items_b038cefefab7a06fcb792cf731d0c8a8_4 - $fe_offset_b038cefefab7a06fcb792cf731d0c8a8_4;
$fe_reverse_b038cefefab7a06fcb792cf731d0c8a8_4 = false;
if ( $fe_offset_b038cefefab7a06fcb792cf731d0c8a8_4 < 0 || $fe_offset_b038cefefab7a06fcb792cf731d0c8a8_4 >= $fe_n_items_b038cefefab7a06fcb792cf731d0c8a8_4 )
{
    $fe_offset_b038cefefab7a06fcb792cf731d0c8a8_4 = ( $fe_offset_b038cefefab7a06fcb792cf731d0c8a8_4 < 0 ) ? 0 : $fe_n_items_b038cefefab7a06fcb792cf731d0c8a8_4;
    if ( $fe_n_items_b038cefefab7a06fcb792cf731d0c8a8_4 || $fe_offset_b038cefefab7a06fcb792cf731d0c8a8_4 < 0 )
 {
        eZDebug::writeWarning("Invalid 'offset' parameter specified: '$fe_offset_b038cefefab7a06fcb792cf731d0c8a8_4'. Array count: $fe_n_items_b038cefefab7a06fcb792cf731d0c8a8_4");   
}
}
if ( $fe_max_b038cefefab7a06fcb792cf731d0c8a8_4 < 0 || $fe_offset_b038cefefab7a06fcb792cf731d0c8a8_4 + $fe_max_b038cefefab7a06fcb792cf731d0c8a8_4 > $fe_n_items_b038cefefab7a06fcb792cf731d0c8a8_4 )
{
    if ( $fe_max_b038cefefab7a06fcb792cf731d0c8a8_4 < 0 )
 eZDebug::writeWarning("Invalid 'max' parameter specified: $fe_max_b038cefefab7a06fcb792cf731d0c8a8_4");
    $fe_max_b038cefefab7a06fcb792cf731d0c8a8_4 = $fe_n_items_b038cefefab7a06fcb792cf731d0c8a8_4 - $fe_offset_b038cefefab7a06fcb792cf731d0c8a8_4;
}
if ( $fe_reverse_b038cefefab7a06fcb792cf731d0c8a8_4 )
{
    $fe_first_val_b038cefefab7a06fcb792cf731d0c8a8_4 = $fe_n_items_b038cefefab7a06fcb792cf731d0c8a8_4 - 1 - $fe_offset_b038cefefab7a06fcb792cf731d0c8a8_4;
    $fe_last_val_b038cefefab7a06fcb792cf731d0c8a8_4  = 0;
}
else
{
    $fe_first_val_b038cefefab7a06fcb792cf731d0c8a8_4 = $fe_offset_b038cefefab7a06fcb792cf731d0c8a8_4;
    $fe_last_val_b038cefefab7a06fcb792cf731d0c8a8_4  = $fe_n_items_b038cefefab7a06fcb792cf731d0c8a8_4 - 1;
}
// foreach
for ( $fe_i_b038cefefab7a06fcb792cf731d0c8a8_4 = $fe_first_val_b038cefefab7a06fcb792cf731d0c8a8_4; $fe_n_items_processed_b038cefefab7a06fcb792cf731d0c8a8_4 < $fe_max_b038cefefab7a06fcb792cf731d0c8a8_4 && ( $fe_reverse_b038cefefab7a06fcb792cf731d0c8a8_4 ? $fe_i_b038cefefab7a06fcb792cf731d0c8a8_4 >= $fe_last_val_b038cefefab7a06fcb792cf731d0c8a8_4 : $fe_i_b038cefefab7a06fcb792cf731d0c8a8_4 <= $fe_last_val_b038cefefab7a06fcb792cf731d0c8a8_4 ); $fe_reverse_b038cefefab7a06fcb792cf731d0c8a8_4 ? $fe_i_b038cefefab7a06fcb792cf731d0c8a8_4-- : $fe_i_b038cefefab7a06fcb792cf731d0c8a8_4++ )
{
$fe_key_b038cefefab7a06fcb792cf731d0c8a8_4 = $fe_array_keys_b038cefefab7a06fcb792cf731d0c8a8_4[$fe_i_b038cefefab7a06fcb792cf731d0c8a8_4];
$fe_val_b038cefefab7a06fcb792cf731d0c8a8_4 = $fe_array_b038cefefab7a06fcb792cf731d0c8a8_4[$fe_key_b038cefefab7a06fcb792cf731d0c8a8_4];
$vars[$rootNamespace]['custom_template'] = $fe_val_b038cefefab7a06fcb792cf731d0c8a8_4;
$text .= '    ';
// if begins
unset( $if_cond );
unset( $if_cond1 );
unset( $if_cond1 );
$if_cond1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'include_in_view', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['include_in_view'] : null;
unset( $if_cond3 );
unset( $if_cond3 );
$if_cond3 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'custom_template', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['custom_template'] : null;
if (! isset( $if_cond3 ) ) $if_cond3 = NULL;
while ( is_object( $if_cond3 ) and method_exists( $if_cond3, 'templateValue' ) )
    $if_cond3 = $if_cond3->templateValue();
$if_cond2 = compiledFetchAttribute( $if_cond1, $if_cond3 );
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
// def $views
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'include_in_view', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['include_in_view'] : null;
unset( $var3 );
unset( $var3 );
$var3 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'custom_template', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['custom_template'] : null;
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
if ( is_string( $var1 ) )
{
	$var = explode( ";", $var1 );
}
else if ( is_array( $var1 ) )
{
	$var = array( array_slice( $var1, 0, ";" ), array_slice( $var1, ";" ) );
}
else
{
	$var = null;
}
unset( $var1 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( $tpl->hasVariable( 'views', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'views' is already defined.", array (
  0 => 
  array (
    0 => 103,
    1 => 8,
    2 => 5976,
  ),
  1 => 
  array (
    0 => 103,
    1 => 70,
    2 => 6038,
  ),
  2 => 'extension/ezwt/design/standard/templates/parts/website_toolbar.tpl',
) );
    $tpl->setVariable( 'views', $var, $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'views', $var, $rootNamespace );
}

$text .= '        ';
// if begins
unset( $if_cond );
unset( $if_cond1 );
unset( $if_cond1 );
$if_cond1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'views', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['views'] : null;
if (! isset( $if_cond1 ) ) $if_cond1 = NULL;
while ( is_object( $if_cond1 ) and method_exists( $if_cond1, 'templateValue' ) )
    $if_cond1 = $if_cond1->templateValue();
if( is_string( $if_cond1 ) )
{
  $if_cond = ( strpos( $if_cond1, "full" ) !== false );
}
else if ( is_array( $if_cond1 ) )
{
  $if_cond = in_array( "full", $if_cond1 );
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
$text .= '            ';
$textElements = array();
$tpl->processFunction( 'include', $textElements,
                       false,
                       array (
  'uri' => 
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
            1 => 'design:parts/websitetoolbar/',
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
              2 => 'custom_template',
            ),
            2 => false,
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            0 => 1,
            1 => '.tpl',
            2 => false,
          ),
        ),
      ),
      2 => false,
    ),
  ),
),
                       array (
  0 => 
  array (
    0 => 105,
    1 => 12,
    2 => 6092,
  ),
  1 => 
  array (
    0 => 105,
    1 => 90,
    2 => 6170,
  ),
  2 => 'extension/ezwt/design/standard/templates/parts/website_toolbar.tpl',
),
                       $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );

$text .= '        ';
}
unset( $if_cond );
// if ends

$text .= '        ';
// undef $views
$tpl->unsetLocalVariable( 'views', $rootNamespace );

$text .= '    ';
}
unset( $if_cond );
// if ends

$fe_n_items_processed_b038cefefab7a06fcb792cf731d0c8a8_4++;
} // foreach
$skipDelimiter = false;
if ( count( $fe_variable_stack_b038cefefab7a06fcb792cf731d0c8a8_4 ) ) extract( array_pop( $fe_variable_stack_b038cefefab7a06fcb792cf731d0c8a8_4 ) );

else
{

unset( $fe_array_b038cefefab7a06fcb792cf731d0c8a8_4 );

unset( $fe_array_keys_b038cefefab7a06fcb792cf731d0c8a8_4 );

unset( $fe_n_items_b038cefefab7a06fcb792cf731d0c8a8_4 );

unset( $fe_n_items_processed_b038cefefab7a06fcb792cf731d0c8a8_4 );

unset( $fe_i_b038cefefab7a06fcb792cf731d0c8a8_4 );

unset( $fe_key_b038cefefab7a06fcb792cf731d0c8a8_4 );

unset( $fe_val_b038cefefab7a06fcb792cf731d0c8a8_4 );

unset( $fe_offset_b038cefefab7a06fcb792cf731d0c8a8_4 );

unset( $fe_max_b038cefefab7a06fcb792cf731d0c8a8_4 );

unset( $fe_reverse_b038cefefab7a06fcb792cf731d0c8a8_4 );

unset( $fe_first_val_b038cefefab7a06fcb792cf731d0c8a8_4 );

unset( $fe_last_val_b038cefefab7a06fcb792cf731d0c8a8_4 );

unset( $fe_variable_stack_b038cefefab7a06fcb792cf731d0c8a8_4 );

}

// foreach ends
$text .= '
  <input type="hidden" name="HasMainAssignment" value="1" />
  <input type="hidden" name="ContentObjectID" value="';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'content_object', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['content_object'] : null;
$var1 = compiledFetchAttribute( $var, 'id' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '" />
  <input type="hidden" name="NodeID" value="';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'current_node', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['current_node'] : null;
$var1 = compiledFetchAttribute( $var, 'node_id' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '" />
  <input type="hidden" name="ContentNodeID" value="';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'current_node', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['current_node'] : null;
$var1 = compiledFetchAttribute( $var, 'node_id' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '" />
  
  ';
// def $avail_languages
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'content_object', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['content_object'] : null;
$var1 = compiledFetchAttribute( $var, 'available_languages' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( $tpl->hasVariable( 'avail_languages', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'avail_languages' is already defined.", array (
  0 => 
  array (
    0 => 116,
    1 => 2,
    2 => 6673,
  ),
  1 => 
  array (
    0 => 117,
    1 => 59,
    2 => 6791,
  ),
  2 => 'extension/ezwt/design/standard/templates/parts/website_toolbar.tpl',
) );
    $tpl->setVariable( 'avail_languages', $var, $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'avail_languages', $var, $rootNamespace );
}

// def $default_language
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'content_object', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['content_object'] : null;
$var1 = compiledFetchAttribute( $var, 'default_language' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( $tpl->hasVariable( 'default_language', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'default_language' is already defined.", array (
  0 => 
  array (
    0 => 116,
    1 => 2,
    2 => 6673,
  ),
  1 => 
  array (
    0 => 117,
    1 => 59,
    2 => 6791,
  ),
  2 => 'extension/ezwt/design/standard/templates/parts/website_toolbar.tpl',
) );
    $tpl->setVariable( 'default_language', $var, $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'default_language', $var, $rootNamespace );
}

$text .= '  ';
// if begins
unset( $if_cond );
unset( $if_cond1 );
unset( $if_cond2 );
unset( $if_cond2 );
$if_cond2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'avail_languages', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['avail_languages'] : null;
if (! isset( $if_cond2 ) ) $if_cond2 = NULL;
while ( is_object( $if_cond2 ) and method_exists( $if_cond2, 'templateValue' ) )
    $if_cond2 = $if_cond2->templateValue();
$if_cond2Data = array( 'value' => $if_cond2 );
$tpl->processOperator( 'count',
                       array (
),
                       $rootNamespace, $currentNamespace, $if_cond2Data, false, false );
$if_cond2 = $if_cond2Data['value'];
unset( $if_cond2Data );
if (! isset( $if_cond2 ) ) $if_cond2 = NULL;
while ( is_object( $if_cond2 ) and method_exists( $if_cond2, 'templateValue' ) )
    $if_cond2 = $if_cond2->templateValue();
$if_cond1 = ( ( $if_cond2 ) >= ( 1 ) );
unset( $if_cond2 );
if (! isset( $if_cond1 ) ) $if_cond1 = NULL;
while ( is_object( $if_cond1 ) and method_exists( $if_cond1, 'templateValue' ) )
    $if_cond1 = $if_cond1->templateValue();
unset( $if_cond2 );
unset( $if_cond3 );
unset( $if_cond3 );
$if_cond3 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'avail_languages', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['avail_languages'] : null;
if (! isset( $if_cond3 ) ) $if_cond3 = NULL;
while ( is_object( $if_cond3 ) and method_exists( $if_cond3, 'templateValue' ) )
    $if_cond3 = $if_cond3->templateValue();
unset( $if_cond4 );
unset( $if_cond4 );
$if_cond4 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'default_language', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['default_language'] : null;
if (! isset( $if_cond4 ) ) $if_cond4 = NULL;
while ( is_object( $if_cond4 ) and method_exists( $if_cond4, 'templateValue' ) )
    $if_cond4 = $if_cond4->templateValue();
if( is_string( $if_cond3 ) )
{
  $if_cond2 = ( strpos( $if_cond3, $if_cond4 ) !== false );
}
else if ( is_array( $if_cond3 ) )
{
  $if_cond2 = in_array( $if_cond4, $if_cond3 );
}
else
{
$if_cond2 = false;
}unset( $if_cond3, $if_cond4 );
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
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'default_language', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['default_language'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( array_key_exists( $currentNamespace, $vars ) && array_key_exists( 'content_object_language_code', $vars[$currentNamespace] ) )
{
    $vars[$currentNamespace]['content_object_language_code'] = $var;
    unset( $var );
}
$text .= '  ';
}
else
{
$text .= '    ';
if ( array_key_exists( $currentNamespace, $vars ) && array_key_exists( 'content_object_language_code', $vars[$currentNamespace] ) )
{
    $vars[$currentNamespace]['content_object_language_code'] = '';
}
$text .= '  ';
}
unset( $if_cond );
// if ends

$text .= '  <input type="hidden" name="ContentObjectLanguageCode" value="';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'content_object_language_code', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['content_object_language_code'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '" />
';
// if begins
$if_cond = 'http://localhost/ezpublish/app/ezpublish_legacy/index.php/ezwebin_site_admin/user/login';
if ( $if_cond )
{
$text .= '
    <a href="';
unset( $var );
$var = array (
  0 => 'http://localhost/ezpublish/app/ezpublish_legacy/index.php/ezwebin_site_admin/',
  1 => '',
);
$var1 = compiledFetchAttribute( $var, 0 );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'current_node', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['current_node'] : null;
$var1 = compiledFetchAttribute( $var, 'url_alias' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '" target="_blank" title="Aller dans l\'interface d\'administration."><img src="/ezpublish/app/ezpublish_legacy/extension/ezwt/design/standard/images/websitetoolbar/ezwt-icon-admin.png" alt="Aller dans l\'interface d\'administration." /></a>';
}
unset( $if_cond );
// if ends

$text .= '
</div>
</form>
';
// def $disable_oo
if ( $tpl->hasVariable( 'disable_oo', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'disable_oo' is already defined.", array (
  0 => 
  array (
    0 => 132,
    1 => 0,
    2 => 7652,
  ),
  1 => 
  array (
    0 => 132,
    1 => 22,
    2 => 7674,
  ),
  2 => 'extension/ezwt/design/standard/templates/parts/website_toolbar.tpl',
) );
    $tpl->setVariable( 'disable_oo', true, $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'disable_oo', true, $rootNamespace );
}

// if begins
unset( $if_cond );
unset( $if_cond1 );
unset( $if_cond1 );
$if_cond1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'odf_display_classes', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['odf_display_classes'] : null;
if (! isset( $if_cond1 ) ) $if_cond1 = NULL;
while ( is_object( $if_cond1 ) and method_exists( $if_cond1, 'templateValue' ) )
    $if_cond1 = $if_cond1->templateValue();
unset( $if_cond2 );
unset( $if_cond2 );
$if_cond2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'content_object', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['content_object'] : null;
$if_cond3 = compiledFetchAttribute( $if_cond2, 'content_class' );
unset( $if_cond2 );
$if_cond2 = $if_cond3;
$if_cond3 = compiledFetchAttribute( $if_cond2, 'identifier' );
unset( $if_cond2 );
$if_cond2 = $if_cond3;
if (! isset( $if_cond2 ) ) $if_cond2 = NULL;
while ( is_object( $if_cond2 ) and method_exists( $if_cond2, 'templateValue' ) )
    $if_cond2 = $if_cond2->templateValue();
if( is_string( $if_cond1 ) )
{
  $if_cond = ( strpos( $if_cond1, $if_cond2 ) !== false );
}
else if ( is_array( $if_cond1 ) )
{
  $if_cond = in_array( $if_cond2, $if_cond1 );
}
else
{
$if_cond = false;
}unset( $if_cond1, $if_cond2 );
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '    ';
if ( array_key_exists( $currentNamespace, $vars ) && array_key_exists( 'disable_oo', $vars[$currentNamespace] ) )
{
    $vars[$currentNamespace]['disable_oo'] = false;
}
}
unset( $if_cond );
// if ends

// if begins
unset( $if_cond );
unset( $if_cond1 );
unset( $if_cond1 );
$if_cond1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'disable_oo', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['disable_oo'] : null;
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
$text .= '<div id="ezwt-ooaction" class="ezwt-actiongroup">
';
// if begins
unset( $if_cond );
unset( $if_cond );
$if_cond = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'odf_import_access', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['odf_import_access'] : null;
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '<form method="post" action="/ezpublish/app/ezpublish_legacy/index.php/fre/ezodf/import" class="right">
  <input type="hidden" name="ImportType" value="replace" />
  <input type="hidden" name="NodeID" value="';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'current_node', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['current_node'] : null;
$var1 = compiledFetchAttribute( $var, 'node_id' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '" />
  <input type="hidden" name="ObjectID" value="';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'content_object', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['content_object'] : null;
$var1 = compiledFetchAttribute( $var, 'id' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '" />
  <input type="image" class="ezwt-input-image" src="/ezpublish/app/ezpublish_legacy/extension/ezwt/design/standard/images/websitetoolbar/ezwt-icon-replace.png" name="ReplaceAction" title="Remplacer" />
</form>';
}
unset( $if_cond );
// if ends

// if begins
unset( $if_cond );
unset( $if_cond );
$if_cond = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'odf_export_access', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['odf_export_access'] : null;
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '<form method="post" action="/ezpublish/app/ezpublish_legacy/index.php/fre/ezodf/export" class="right">
  <input type="hidden" name="NodeID" value="';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'current_node', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['current_node'] : null;
$var1 = compiledFetchAttribute( $var, 'node_id' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '" />
  <input type="hidden" name="ObjectID" value="';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'content_object', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['content_object'] : null;
$var1 = compiledFetchAttribute( $var, 'id' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '" />
  <input type="image" class="ezwt-input-image" src="/ezpublish/app/ezpublish_legacy/extension/ezwt/design/standard/images/websitetoolbar/ezwt-icon-export.png" name="ExportAction" title="Exporter" />
</form>';
}
unset( $if_cond );
// if ends

// if begins
unset( $if_cond );
unset( $if_cond1 );
unset( $if_cond1 );
$if_cond1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'content_object', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['content_object'] : null;
$if_cond2 = compiledFetchAttribute( $if_cond1, 'content_class' );
unset( $if_cond1 );
$if_cond1 = $if_cond2;
$if_cond2 = compiledFetchAttribute( $if_cond1, 'is_container' );
unset( $if_cond1 );
$if_cond1 = $if_cond2;
if (! isset( $if_cond1 ) ) $if_cond1 = NULL;
while ( is_object( $if_cond1 ) and method_exists( $if_cond1, 'templateValue' ) )
    $if_cond1 = $if_cond1->templateValue();
unset( $if_cond2 );
unset( $if_cond3 );
unset( $if_cond4 );
unset( $if_cond4 );
$if_cond4 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'odf_hide_container_classes', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['odf_hide_container_classes'] : null;
if (! isset( $if_cond4 ) ) $if_cond4 = NULL;
while ( is_object( $if_cond4 ) and method_exists( $if_cond4, 'templateValue' ) )
    $if_cond4 = $if_cond4->templateValue();
unset( $if_cond5 );
unset( $if_cond5 );
$if_cond5 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'content_object', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['content_object'] : null;
$if_cond6 = compiledFetchAttribute( $if_cond5, 'content_class' );
unset( $if_cond5 );
$if_cond5 = $if_cond6;
$if_cond6 = compiledFetchAttribute( $if_cond5, 'identifier' );
unset( $if_cond5 );
$if_cond5 = $if_cond6;
if (! isset( $if_cond5 ) ) $if_cond5 = NULL;
while ( is_object( $if_cond5 ) and method_exists( $if_cond5, 'templateValue' ) )
    $if_cond5 = $if_cond5->templateValue();
if( is_string( $if_cond4 ) )
{
  $if_cond3 = ( strpos( $if_cond4, $if_cond5 ) !== false );
}
else if ( is_array( $if_cond4 ) )
{
  $if_cond3 = in_array( $if_cond5, $if_cond4 );
}
else
{
$if_cond3 = false;
}unset( $if_cond4, $if_cond5 );
if (! isset( $if_cond3 ) ) $if_cond3 = NULL;
while ( is_object( $if_cond3 ) and method_exists( $if_cond3, 'templateValue' ) )
    $if_cond3 = $if_cond3->templateValue();
$if_cond2 = !( $if_cond3 );
unset( $if_cond3 );
if (! isset( $if_cond2 ) ) $if_cond2 = NULL;
while ( is_object( $if_cond2 ) and method_exists( $if_cond2, 'templateValue' ) )
    $if_cond2 = $if_cond2->templateValue();
unset( $if_cond3 );
unset( $if_cond3 );
$if_cond3 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'odf_import_access', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['odf_import_access'] : null;
if (! isset( $if_cond3 ) ) $if_cond3 = NULL;
while ( is_object( $if_cond3 ) and method_exists( $if_cond3, 'templateValue' ) )
    $if_cond3 = $if_cond3->templateValue();
if ( !$if_cond1 )
    $if_cond = false;
else if ( !$if_cond2 )
    $if_cond = false;
else if ( !$if_cond3 )
    $if_cond = false;
else
    $if_cond = $if_cond3;
unset( $if_cond1, $if_cond2, $if_cond3 );
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '<form method="post" action="/ezpublish/app/ezpublish_legacy/index.php/fre/ezodf/import" class="right">
  <input type="hidden" name="NodeID" value="';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'current_node', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['current_node'] : null;
$var1 = compiledFetchAttribute( $var, 'node_id' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '" />
  <input type="hidden" name="ObjectID" value="';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'content_object', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['content_object'] : null;
$var1 = compiledFetchAttribute( $var, 'id' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '" />
  <input type="image" class="ezwt-input-image" src="/ezpublish/app/ezpublish_legacy/extension/ezwt/design/standard/images/websitetoolbar/ezwt-icon-import.png" name="ImportAction" title="Importer" />
</form>';
}
unset( $if_cond );
// if ends

$text .= '
</div>';
}
unset( $if_cond );
// if ends

$oldRestoreIncludeArray_0e977148f836ce8755fa7ba5b13410e7 = isset( $restoreIncludeArray ) ? $restoreIncludeArray : array();
$restoreIncludeArray = array();

if ( !isset( $dKeys ) )
{
    $resH = $tpl->resourceHandler( "design" );
    $dKeys = $resH->keys();
}

$resourceFound = false;
if ( file_exists( 'var/ezwebin_site/cache/template/compiled/help-c82d0eea0446426641bd1e487488efc5.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$rootNamespace = $currentNamespace;
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/ezwt/design/standard/templates/parts/websitetoolbar/help.tpl' );
include( '' . 'var/ezwebin_site/cache/template/compiled/help-c82d0eea0446426641bd1e487488efc5.php' );
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
$tpl->processURI( 'extension/ezwt/design/standard/templates/parts/websitetoolbar/help.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
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
$restoreIncludeArray = $oldRestoreIncludeArray_0e977148f836ce8755fa7ba5b13410e7;

$text .= '
<!-- eZ website toolbar content: END -->

</div>
</div>
';
$oldRestoreIncludeArray_b9eea7952491c64143f04907a2ce0093 = isset( $restoreIncludeArray ) ? $restoreIncludeArray : array();
$restoreIncludeArray = array();

if ( !isset( $dKeys ) )
{
    $resH = $tpl->resourceHandler( "design" );
    $dKeys = $resH->keys();
}

$resourceFound = false;
if ( file_exists( 'var/ezwebin_site/cache/template/compiled/floating_toolbar-cb128fd2b50afe0323e51364a61f0d01.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$rootNamespace = $currentNamespace;
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/ezwt/design/standard/templates/parts/websitetoolbar/floating_toolbar.tpl' );
include( '' . 'var/ezwebin_site/cache/template/compiled/floating_toolbar-cb128fd2b50afe0323e51364a61f0d01.php' );
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
$tpl->processURI( 'extension/ezwt/design/standard/templates/parts/websitetoolbar/floating_toolbar.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
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
$restoreIncludeArray = $oldRestoreIncludeArray_b9eea7952491c64143f04907a2ce0093;

$text .= '
<!-- eZ website toolbar: END -->
';
}
unset( $if_cond );
// if ends


$setArray = $oldSetArray_9939ba16b1fc2fd1294e01321f095706;
$tpl->Level--;
?>
