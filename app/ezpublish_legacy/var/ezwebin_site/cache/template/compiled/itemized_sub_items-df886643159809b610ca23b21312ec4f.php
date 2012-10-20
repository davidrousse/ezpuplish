<?php
// URI:       design:content/view/embed.tpl
// Filename:  extension/ezwebin/design/ezwebin/override/templates/embed/itemized_sub_items.tpl
// Timestamp: 1350735749 (Sat Oct 20 12:22:29 UTC 2012)
$oldSetArray_3a9b7db737be726a97b029fa4c85079f = isset( $setArray ) ? $setArray : array();
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

unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'object', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['object'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$namespace = $currentNamespace;
if ( $namespace == '' )
    $namespace = "ContentView";
else
    $namespace .= ':ContentView';
$vars[$namespace]['object'] = $var;
unset( $var );
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'object_parameters', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['object_parameters'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$namespace = $currentNamespace;
if ( $namespace == '' )
    $namespace = "ContentView";
else
    $namespace .= ':ContentView';
$vars[$namespace]['object_parameters'] = $var;
unset( $var );
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'link_parameters', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['link_parameters'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$namespace = $currentNamespace;
if ( $namespace == '' )
    $namespace = "ContentView";
else
    $namespace .= ':ContentView';
$vars[$namespace]['link_parameters'] = $var;
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
    $namespace = "ContentView";
else
    $namespace .= ':ContentView';
unset( $dKey );
$dKey = ( array_key_exists( $namespace, $vars ) and array_key_exists( 'object', $vars[$namespace] ) ) ? $vars[$namespace]['object'] : null;
$dKey1 = compiledFetchAttribute( $dKey, 'id' );
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
    $namespace = "ContentView";
else
    $namespace .= ':ContentView';
unset( $dKey );
$dKey = ( array_key_exists( $namespace, $vars ) and array_key_exists( 'object', $vars[$namespace] ) ) ? $vars[$namespace]['object'] : null;
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
    $namespace = "ContentView";
else
    $namespace .= ':ContentView';
unset( $dKey );
$dKey = ( array_key_exists( $namespace, $vars ) and array_key_exists( 'object', $vars[$namespace] ) ) ? $vars[$namespace]['object'] : null;
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
    $namespace = "ContentView";
else
    $namespace .= ':ContentView';
unset( $dKey );
$dKey = ( array_key_exists( $namespace, $vars ) and array_key_exists( 'object', $vars[$namespace] ) ) ? $vars[$namespace]['object'] : null;
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
    $namespace = "ContentView";
else
    $namespace .= ':ContentView';
unset( $dKey );
$dKey = ( array_key_exists( $namespace, $vars ) and array_key_exists( 'object', $vars[$namespace] ) ) ? $vars[$namespace]['object'] : null;
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
    $namespace = "ContentView";
else
    $namespace .= ':ContentView';
unset( $dKey );
$dKey = ( array_key_exists( $namespace, $vars ) and array_key_exists( 'object', $vars[$namespace] ) ) ? $vars[$namespace]['object'] : null;
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
    $namespace = "ContentView";
else
    $namespace .= ':ContentView';
unset( $dKey );
$dKey = ( array_key_exists( $namespace, $vars ) and array_key_exists( 'object', $vars[$namespace] ) ) ? $vars[$namespace]['object'] : null;
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
    $namespace = "ContentView";
else
    $namespace .= ':ContentView';
unset( $dKey );
$dKey = ( array_key_exists( $namespace, $vars ) and array_key_exists( 'object', $vars[$namespace] ) ) ? $vars[$namespace]['object'] : null;
$dKey1 = compiledFetchAttribute( $dKey, 'state_identifier_array' );
unset( $dKey );
$dKey = $dKey1;
if (! isset( $dKey ) ) $dKey = NULL;
while ( is_object( $dKey ) and method_exists( $dKey, 'templateValue' ) )
    $dKey = $dKey->templateValue();

$dKeys["state_identifier"] = $dKey;
unset( $dKey );

if ( isset( $dKeys["class_identifier"] ) and ( is_array( $dKeys["class_identifier"] ) ? in_array( "gallery", $dKeys["class_identifier"] ) : $dKeys["class_identifier"] == "gallery" ) )
{
$resourceFound = false;
if ( file_exists( 'var/ezwebin_site/cache/template/compiled/gallery-f575ad6d3b05c0ed73714f1dbd69722b.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'ContentView' : ( $currentNamespace . ':' . 'ContentView' );
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/ezwebin/design/ezwebin/override/templates/itemizedsubitems/gallery.tpl' );
include( '' . 'var/ezwebin_site/cache/template/compiled/gallery-f575ad6d3b05c0ed73714f1dbd69722b.php' );
$tpl->unsetLocalVariables();
$tpl->destroyLocalVariablesList();
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}
else
{
    $resourceFound = true;
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'ContentView' : ( $currentNamespace . ':' . 'ContentView' );
$textElements = array();
$extraParameters = array();
$tpl->processURI( 'extension/ezwebin/design/ezwebin/override/templates/itemizedsubitems/gallery.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}

}
else  if ( isset( $dKeys["class_identifier"] ) and ( is_array( $dKeys["class_identifier"] ) ? in_array( "forum", $dKeys["class_identifier"] ) : $dKeys["class_identifier"] == "forum" ) )
{
$resourceFound = false;
if ( file_exists( 'var/ezwebin_site/cache/template/compiled/forum-b4cf3e24624ef3574c101eb6c15ee568.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'ContentView' : ( $currentNamespace . ':' . 'ContentView' );
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/ezwebin/design/ezwebin/override/templates/itemizedsubitems/forum.tpl' );
include( '' . 'var/ezwebin_site/cache/template/compiled/forum-b4cf3e24624ef3574c101eb6c15ee568.php' );
$tpl->unsetLocalVariables();
$tpl->destroyLocalVariablesList();
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}
else
{
    $resourceFound = true;
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'ContentView' : ( $currentNamespace . ':' . 'ContentView' );
$textElements = array();
$extraParameters = array();
$tpl->processURI( 'extension/ezwebin/design/ezwebin/override/templates/itemizedsubitems/forum.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}

}
else  if ( isset( $dKeys["class_identifier"] ) and ( is_array( $dKeys["class_identifier"] ) ? in_array( "folder", $dKeys["class_identifier"] ) : $dKeys["class_identifier"] == "folder" ) )
{
$resourceFound = false;
if ( file_exists( 'var/ezwebin_site/cache/template/compiled/folder-406ddbd625522e8f2294c0b586e1139e.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'ContentView' : ( $currentNamespace . ':' . 'ContentView' );
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/ezwebin/design/ezwebin/override/templates/itemizedsubitems/folder.tpl' );
include( '' . 'var/ezwebin_site/cache/template/compiled/folder-406ddbd625522e8f2294c0b586e1139e.php' );
$tpl->unsetLocalVariables();
$tpl->destroyLocalVariablesList();
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}
else
{
    $resourceFound = true;
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'ContentView' : ( $currentNamespace . ':' . 'ContentView' );
$textElements = array();
$extraParameters = array();
$tpl->processURI( 'extension/ezwebin/design/ezwebin/override/templates/itemizedsubitems/folder.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}

}
else  if ( isset( $dKeys["class_identifier"] ) and ( is_array( $dKeys["class_identifier"] ) ? in_array( "event_calendar", $dKeys["class_identifier"] ) : $dKeys["class_identifier"] == "event_calendar" ) )
{
$resourceFound = false;
if ( file_exists( 'var/ezwebin_site/cache/template/compiled/event_calendar-e5285b55dc2c0c1dbabee43a37ce71fe.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'ContentView' : ( $currentNamespace . ':' . 'ContentView' );
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/ezwebin/design/ezwebin/override/templates/itemizedsubitems/event_calendar.tpl' );
include( '' . 'var/ezwebin_site/cache/template/compiled/event_calendar-e5285b55dc2c0c1dbabee43a37ce71fe.php' );
$tpl->unsetLocalVariables();
$tpl->destroyLocalVariablesList();
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}
else
{
    $resourceFound = true;
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'ContentView' : ( $currentNamespace . ':' . 'ContentView' );
$textElements = array();
$extraParameters = array();
$tpl->processURI( 'extension/ezwebin/design/ezwebin/override/templates/itemizedsubitems/event_calendar.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}

}
else  if ( isset( $dKeys["class_identifier"] ) and ( is_array( $dKeys["class_identifier"] ) ? in_array( "documentation_page", $dKeys["class_identifier"] ) : $dKeys["class_identifier"] == "documentation_page" ) )
{
$resourceFound = false;
if ( file_exists( 'var/ezwebin_site/cache/template/compiled/documentation_page-07e6df2f7b489ada75fe20a6d20ffd33.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'ContentView' : ( $currentNamespace . ':' . 'ContentView' );
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/ezwebin/design/ezwebin/override/templates/itemizedsubitems/documentation_page.tpl' );
include( '' . 'var/ezwebin_site/cache/template/compiled/documentation_page-07e6df2f7b489ada75fe20a6d20ffd33.php' );
$tpl->unsetLocalVariables();
$tpl->destroyLocalVariablesList();
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}
else
{
    $resourceFound = true;
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'ContentView' : ( $currentNamespace . ':' . 'ContentView' );
$textElements = array();
$extraParameters = array();
$tpl->processURI( 'extension/ezwebin/design/ezwebin/override/templates/itemizedsubitems/documentation_page.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}

}
else {
$resourceFound = false;
if ( file_exists( 'var/ezwebin_site/cache/template/compiled/itemized_sub_items-80e2780fb5a718fa3e18706bf09b7418.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'ContentView' : ( $currentNamespace . ':' . 'ContentView' );
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/ezwebin/design/ezwebin/override/templates/itemizedsubitems/itemized_sub_items.tpl' );
include( '' . 'var/ezwebin_site/cache/template/compiled/itemized_sub_items-80e2780fb5a718fa3e18706bf09b7418.php' );
$tpl->unsetLocalVariables();
$tpl->destroyLocalVariablesList();
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}
else
{
    $resourceFound = true;
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'ContentView' : ( $currentNamespace . ':' . 'ContentView' );
$textElements = array();
$extraParameters = array();
$tpl->processURI( 'extension/ezwebin/design/ezwebin/override/templates/itemizedsubitems/itemized_sub_items.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}

}
$dKeys = array_pop( $dKeysStack );
$namespace = $currentNamespace;
if ( $namespace == '' )
    $namespace = "ContentView";
else
    $namespace .= ':ContentView';
unset( $vars[$namespace]['object'] );
$namespace = $currentNamespace;
if ( $namespace == '' )
    $namespace = "ContentView";
else
    $namespace .= ':ContentView';
unset( $vars[$namespace]['object_parameters'] );
$namespace = $currentNamespace;
if ( $namespace == '' )
    $namespace = "ContentView";
else
    $namespace .= ':ContentView';
unset( $vars[$namespace]['link_parameters'] );

$setArray = $oldSetArray_3a9b7db737be726a97b029fa4c85079f;
$tpl->Level--;
?>
