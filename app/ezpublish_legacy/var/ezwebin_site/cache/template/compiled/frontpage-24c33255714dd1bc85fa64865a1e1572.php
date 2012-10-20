<?php
// URI:       design:node/view/full.tpl
// Filename:  extension/ezwebin/design/ezwebin/override/templates/full/frontpage.tpl
// Timestamp: 1350735749 (Sat Oct 20 12:22:29 UTC 2012)
$oldSetArray_f3536f39bb3a2084596b12baea0a9922 = isset( $setArray ) ? $setArray : array();
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

$node = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( "node", $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]["node"] : null;
if ( is_object( $node ) )
$object = $node->attribute( 'object' );
if ( isset( $object ) && is_object( $object ) )
$nod_f3536f39bb3a2084596b12baea0a9922 = $object->attribute( 'data_map' );
else
$nod_f3536f39bb3a2084596b12baea0a9922 = false;
unset( $node, $object );

if ( array_key_exists( '', $vars ) && array_key_exists( 'persistent_variable', $vars[''] ) )
{
    $vars['']['persistent_variable'] = array (
  'left_menu' => false,
  'extra_menu' => false,
  'show_path' => false,
);
}
// def $frontpagestyle
if ( $tpl->hasVariable( 'frontpagestyle', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'frontpagestyle' is already defined.", array (
  0 => 
  array (
    0 => 5,
    1 => 0,
    2 => 199,
  ),
  1 => 
  array (
    0 => 5,
    1 => 48,
    2 => 247,
  ),
  2 => 'extension/ezwebin/design/ezwebin/override/templates/full/frontpage.tpl',
) );
    $tpl->setVariable( 'frontpagestyle', 'noleftcolumn norightcolumn', $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'frontpagestyle', 'noleftcolumn norightcolumn', $rootNamespace );
}

// if begins
unset( $if_cond );
$if_cond = $nod_f3536f39bb3a2084596b12baea0a9922;
if ( !$if_cond )
{
unset( $if_cond );
$if_cond = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'node', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['node'] : null;
$if_cond1 = compiledFetchAttribute( $if_cond, 'object' );
unset( $if_cond );
$if_cond = $if_cond1;
$if_cond1 = compiledFetchAttribute( $if_cond, 'data_map' );
unset( $if_cond );
$if_cond = $if_cond1;
}
if ( !isset( $if_cond['left_column'] ) )
{
    $tpl->error( 'eZTemplateCompiler', "PHP variable \$if_cond['left_column'] does not exist, cannot fetch the value." );
    $if_cond = null;
}
else
    $if_cond = $if_cond['left_column'];
if ( !is_object( $if_cond ) )
{
    $if_cond = null;
}
else if ( $if_cond->hasAttribute( "has_content" ) )
{
    $if_cond = $if_cond->attribute( "has_content" );
}
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '    ';
if ( array_key_exists( $currentNamespace, $vars ) && array_key_exists( 'frontpagestyle', $vars[$currentNamespace] ) )
{
    $vars[$currentNamespace]['frontpagestyle'] = 'leftcolumn norightcolumn';
}
}
unset( $if_cond );
// if ends

// if begins
unset( $if_cond );
unset( $if_cond1 );
unset( $if_cond1 );
$if_cond1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'frontpagestyle', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['frontpagestyle'] : null;
if (! isset( $if_cond1 ) ) $if_cond1 = NULL;
while ( is_object( $if_cond1 ) and method_exists( $if_cond1, 'templateValue' ) )
    $if_cond1 = $if_cond1->templateValue();
$if_cond = ( ( $if_cond1 ) == ( 'leftcolumn norightcolumn' ) );
unset( $if_cond1 );
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '    ';
// if begins
unset( $if_cond );
$if_cond = $nod_f3536f39bb3a2084596b12baea0a9922;
if ( !$if_cond )
{
unset( $if_cond );
$if_cond = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'node', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['node'] : null;
$if_cond1 = compiledFetchAttribute( $if_cond, 'object' );
unset( $if_cond );
$if_cond = $if_cond1;
$if_cond1 = compiledFetchAttribute( $if_cond, 'data_map' );
unset( $if_cond );
$if_cond = $if_cond1;
}
if ( !isset( $if_cond['right_column'] ) )
{
    $tpl->error( 'eZTemplateCompiler', "PHP variable \$if_cond['right_column'] does not exist, cannot fetch the value." );
    $if_cond = null;
}
else
    $if_cond = $if_cond['right_column'];
if ( !is_object( $if_cond ) )
{
    $if_cond = null;
}
else if ( $if_cond->hasAttribute( "has_content" ) )
{
    $if_cond = $if_cond->attribute( "has_content" );
}
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '        ';
if ( array_key_exists( $currentNamespace, $vars ) && array_key_exists( 'frontpagestyle', $vars[$currentNamespace] ) )
{
    $vars[$currentNamespace]['frontpagestyle'] = 'leftcolumn rightcolumn';
}
$text .= '    ';
}
unset( $if_cond );
// if ends

}
else
{
$text .= '    
    ';
// if begins
unset( $if_cond );
$if_cond = $nod_f3536f39bb3a2084596b12baea0a9922;
if ( !$if_cond )
{
unset( $if_cond );
$if_cond = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'node', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['node'] : null;
$if_cond1 = compiledFetchAttribute( $if_cond, 'object' );
unset( $if_cond );
$if_cond = $if_cond1;
$if_cond1 = compiledFetchAttribute( $if_cond, 'data_map' );
unset( $if_cond );
$if_cond = $if_cond1;
}
if ( !isset( $if_cond['right_column'] ) )
{
    $tpl->error( 'eZTemplateCompiler', "PHP variable \$if_cond['right_column'] does not exist, cannot fetch the value." );
    $if_cond = null;
}
else
    $if_cond = $if_cond['right_column'];
if ( !is_object( $if_cond ) )
{
    $if_cond = null;
}
else if ( $if_cond->hasAttribute( "has_content" ) )
{
    $if_cond = $if_cond->attribute( "has_content" );
}
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '        ';
if ( array_key_exists( $currentNamespace, $vars ) && array_key_exists( 'frontpagestyle', $vars[$currentNamespace] ) )
{
    $vars[$currentNamespace]['frontpagestyle'] = 'noleftcolumn rightcolumn';
}
$text .= '    ';
}
unset( $if_cond );
// if ends

}
unset( $if_cond );
// if ends

$text .= '
<div class="content-view-full">
    <div class="class-frontpage ';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'frontpagestyle', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['frontpagestyle'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '">
';
// if begins
unset( $if_cond );
$if_cond = $nod_f3536f39bb3a2084596b12baea0a9922;
if ( !$if_cond )
{
unset( $if_cond );
$if_cond = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'node', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['node'] : null;
$if_cond1 = compiledFetchAttribute( $if_cond, 'object' );
unset( $if_cond );
$if_cond = $if_cond1;
$if_cond1 = compiledFetchAttribute( $if_cond, 'data_map' );
unset( $if_cond );
$if_cond = $if_cond1;
}
if ( !isset( $if_cond['billboard'] ) )
{
    $tpl->error( 'eZTemplateCompiler', "PHP variable \$if_cond['billboard'] does not exist, cannot fetch the value." );
    $if_cond = null;
}
else
    $if_cond = $if_cond['billboard'];
if ( !is_object( $if_cond ) )
{
    $if_cond = null;
}
else if ( $if_cond->hasAttribute( "has_content" ) )
{
    $if_cond = $if_cond->attribute( "has_content" );
}
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '    <div class="attribute-billboard">
        ';
unset( $var );
$var = $nod_f3536f39bb3a2084596b12baea0a9922;
if ( !$var )
{
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'node', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['node'] : null;
$var1 = compiledFetchAttribute( $var, 'object' );
unset( $var );
$var = $var1;
$var1 = compiledFetchAttribute( $var, 'data_map' );
unset( $var );
$var = $var1;
}
if ( !isset( $var['billboard'] ) )
{
    $tpl->error( 'eZTemplateCompiler', "PHP variable \$var['billboard'] does not exist, cannot fetch the value." );
    $var = null;
}
else
    $var = $var['billboard'];
if ( !is_object( $var ) )
{
    $tpl->error( 'eZTemplateCompiler', "PHP variable \$var is not an object, cannot fetch content()" );
    $var = null;
}
else
{
     $varTmp = $var->content();
     unset( $var );
     $var = $varTmp;
     unset( $varTmp );
}
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

if ( isset( $dKeys["class_identifier"] ) and ( is_array( $dKeys["class_identifier"] ) ? in_array( "banner", $dKeys["class_identifier"] ) : $dKeys["class_identifier"] == "banner" ) )
{
$resourceFound = false;
if ( file_exists( 'var/ezwebin_site/cache/template/compiled/banner-5df49956b4af55f6360ce0debbcbdd24.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'ContentView' : ( $currentNamespace . ':' . 'ContentView' );
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/ezwebin/design/ezwebin/override/templates/billboard/banner.tpl' );
include( '' . 'var/ezwebin_site/cache/template/compiled/banner-5df49956b4af55f6360ce0debbcbdd24.php' );
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
$tpl->processURI( 'extension/ezwebin/design/ezwebin/override/templates/billboard/banner.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}

}
else  if ( isset( $dKeys["class_identifier"] ) and ( is_array( $dKeys["class_identifier"] ) ? in_array( "flash", $dKeys["class_identifier"] ) : $dKeys["class_identifier"] == "flash" ) )
{
$resourceFound = false;
if ( file_exists( 'var/ezwebin_site/cache/template/compiled/flash-a18442de163af2555c693789b1758183.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'ContentView' : ( $currentNamespace . ':' . 'ContentView' );
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/ezwebin/design/ezwebin/override/templates/billboard/flash.tpl' );
include( '' . 'var/ezwebin_site/cache/template/compiled/flash-a18442de163af2555c693789b1758183.php' );
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
$tpl->processURI( 'extension/ezwebin/design/ezwebin/override/templates/billboard/flash.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}

}
else 
{
$resourceFound = false;
if ( file_exists( 'var/ezwebin_site/cache/template/compiled/billboard-ebe270bc8ff46fbc8b8d2f153109aec7.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'ContentView' : ( $currentNamespace . ':' . 'ContentView' );
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/ezwebin/design/ezwebin/templates/content/view/billboard.tpl' );
include( '' . 'var/ezwebin_site/cache/template/compiled/billboard-ebe270bc8ff46fbc8b8d2f153109aec7.php' );
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
$tpl->processURI( 'extension/ezwebin/design/ezwebin/templates/content/view/billboard.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
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
$text .= '    </div>';
}
unset( $if_cond );
// if ends

$text .= '
    <div class="columns-frontpage float-break">
        <div class="left-column-position">
            <div class="left-column">
            <!-- Content: START -->
                   ';
$textElements = array();
$tpl->processFunction( 'attribute_view_gui', $textElements,
                       false,
                       array (
  'attribute' => 
  array (
    0 => 
    array (
      0 => 4,
      1 => 
      array (
        0 => '',
        1 => 2,
        2 => 'node',
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
          1 => 'object',
          2 => false,
        ),
      ),
      2 => false,
    ),
    2 => 
    array (
      0 => 5,
      1 => 
      array (
        0 => 
        array (
          0 => 3,
          1 => 'data_map',
          2 => false,
        ),
      ),
      2 => false,
    ),
    3 => 
    array (
      0 => 5,
      1 => 
      array (
        0 => 
        array (
          0 => 3,
          1 => 'left_column',
          2 => false,
        ),
      ),
      2 => false,
    ),
  ),
),
                       array (
  0 => 
  array (
    0 => 34,
    1 => 19,
    2 => 1149,
  ),
  1 => 
  array (
    0 => 34,
    1 => 81,
    2 => 1211,
  ),
  2 => 'extension/ezwebin/design/ezwebin/override/templates/full/frontpage.tpl',
),
                       $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );

$text .= '            <!-- Content: END -->
            </div>
        </div>
        <div class="center-column-position">
            <div class="center-column float-break">
                <div class="overflow-fix">
                <!-- Content: START -->
                    ';
$textElements = array();
$tpl->processFunction( 'attribute_view_gui', $textElements,
                       false,
                       array (
  'attribute' => 
  array (
    0 => 
    array (
      0 => 4,
      1 => 
      array (
        0 => '',
        1 => 2,
        2 => 'node',
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
          1 => 'object',
          2 => false,
        ),
      ),
      2 => false,
    ),
    2 => 
    array (
      0 => 5,
      1 => 
      array (
        0 => 
        array (
          0 => 3,
          1 => 'data_map',
          2 => false,
        ),
      ),
      2 => false,
    ),
    3 => 
    array (
      0 => 5,
      1 => 
      array (
        0 => 
        array (
          0 => 3,
          1 => 'center_column',
          2 => false,
        ),
      ),
      2 => false,
    ),
  ),
),
                       array (
  0 => 
  array (
    0 => 42,
    1 => 20,
    2 => 1482,
  ),
  1 => 
  array (
    0 => 42,
    1 => 84,
    2 => 1546,
  ),
  2 => 'extension/ezwebin/design/ezwebin/override/templates/full/frontpage.tpl',
),
                       $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );

$text .= '                <!-- Content: END -->
                </div>
            </div>
        </div>
        <div class="right-column-position">
            <div class="right-column">
            <!-- Content: START -->
                  ';
$textElements = array();
$tpl->processFunction( 'attribute_view_gui', $textElements,
                       false,
                       array (
  'attribute' => 
  array (
    0 => 
    array (
      0 => 4,
      1 => 
      array (
        0 => '',
        1 => 2,
        2 => 'node',
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
          1 => 'object',
          2 => false,
        ),
      ),
      2 => false,
    ),
    2 => 
    array (
      0 => 5,
      1 => 
      array (
        0 => 
        array (
          0 => 3,
          1 => 'data_map',
          2 => false,
        ),
      ),
      2 => false,
    ),
    3 => 
    array (
      0 => 5,
      1 => 
      array (
        0 => 
        array (
          0 => 3,
          1 => 'right_column',
          2 => false,
        ),
      ),
      2 => false,
    ),
  ),
),
                       array (
  0 => 
  array (
    0 => 50,
    1 => 18,
    2 => 1781,
  ),
  1 => 
  array (
    0 => 50,
    1 => 81,
    2 => 1844,
  ),
  2 => 'extension/ezwebin/design/ezwebin/override/templates/full/frontpage.tpl',
),
                       $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );

$text .= '            <!-- Content: END -->
            </div>
        </div>
    </div>

    <div class="attribute-bottom-column">
        ';
$textElements = array();
$tpl->processFunction( 'attribute_view_gui', $textElements,
                       false,
                       array (
  'attribute' => 
  array (
    0 => 
    array (
      0 => 4,
      1 => 
      array (
        0 => '',
        1 => 2,
        2 => 'node',
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
          1 => 'object',
          2 => false,
        ),
      ),
      2 => false,
    ),
    2 => 
    array (
      0 => 5,
      1 => 
      array (
        0 => 
        array (
          0 => 3,
          1 => 'data_map',
          2 => false,
        ),
      ),
      2 => false,
    ),
    3 => 
    array (
      0 => 5,
      1 => 
      array (
        0 => 
        array (
          0 => 3,
          1 => 'bottom_column',
          2 => false,
        ),
      ),
      2 => false,
    ),
  ),
),
                       array (
  0 => 
  array (
    0 => 57,
    1 => 8,
    2 => 1977,
  ),
  1 => 
  array (
    0 => 57,
    1 => 72,
    2 => 2041,
  ),
  2 => 'extension/ezwebin/design/ezwebin/override/templates/full/frontpage.tpl',
),
                       $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );

$text .= '    </div>

    </div>
</div>';

$setArray = $oldSetArray_f3536f39bb3a2084596b12baea0a9922;
$tpl->Level--;
?>
