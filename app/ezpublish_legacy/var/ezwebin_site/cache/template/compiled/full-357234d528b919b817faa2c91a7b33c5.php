<?php
// URI:       design:node/view/full.tpl
// Filename:  design/admin/templates/node/view/full.tpl
// Timestamp: 1349721948 (Mon Oct 8 18:45:48 UTC 2012)
$oldSetArray_137435716855962f789a66aa2a346a94 = isset( $setArray ) ? $setArray : array();
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

$text .= '<div class="content-view-full">
 <div class="class-';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'node', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['node'] : null;
$var1 = compiledFetchAttribute( $var, 'class_identifier' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '">
';
$oldRestoreIncludeArray_b93313f29b0248458a89e6d2be372ef9 = isset( $restoreIncludeArray ) ? $restoreIncludeArray : array();
$restoreIncludeArray = array();

if ( !isset( $dKeys ) )
{
    $resH = $tpl->resourceHandler( "design" );
    $dKeys = $resH->keys();
}

$resourceFound = false;
if ( file_exists( 'var/ezwebin_site/cache/template/compiled/infocollection_validation-546a0658b157f9cb2b10e122cb869f97.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$rootNamespace = $currentNamespace;
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'design/admin/templates/infocollection_validation.tpl' );
include( '' . 'var/ezwebin_site/cache/template/compiled/infocollection_validation-546a0658b157f9cb2b10e122cb869f97.php' );
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
$tpl->processURI( 'design/admin/templates/infocollection_validation.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
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
$restoreIncludeArray = $oldRestoreIncludeArray_b93313f29b0248458a89e6d2be372ef9;

$text .= '
<div class="content-navigation">


<div class="context-block">

<div class="box-header">
';
// def $js_class_languages
unset( $var );
unset( $var1 );
unset( $var2 );
unset( $var2 );
$var2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'node', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['node'] : null;
$var3 = compiledFetchAttribute( $var2, 'object' );
unset( $var2 );
$var2 = $var3;
$var3 = compiledFetchAttribute( $var2, 'content_class' );
unset( $var2 );
$var2 = $var3;
$var3 = compiledFetchAttribute( $var2, 'prioritized_languages_js_array' );
unset( $var2 );
$var2 = $var3;
if (! isset( $var2 ) ) $var2 = NULL;
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
if ( is_string( $var2 ) )
{
	$var1 = explode( "\"", $var2 );
}
else if ( is_array( $var2 ) )
{
	$var1 = array( array_slice( $var2, 0, "\"" ), array_slice( $var2, "\"" ) );
}
else
{
	$var1 = null;
}
unset( $var2 );
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
$var = implode( "'", $var1 );unset( $var1 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( $tpl->hasVariable( 'js_class_languages', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'js_class_languages' is already defined.", array (
  0 => 
  array (
    0 => 13,
    1 => 0,
    2 => 271,
  ),
  1 => 
  array (
    0 => 16,
    1 => 22,
    2 => 630,
  ),
  2 => 'design/admin/templates/node/view/full.tpl',
) );
    $tpl->setVariable( 'js_class_languages', $var, $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'js_class_languages', $var, $rootNamespace );
}

// def $disable_another_language
unset( $var );
unset( $var1 );
unset( $var3 );
if (! isset( $var3 ) ) $var3 = NULL;
while ( is_object( $var3 ) and method_exists( $var3, 'templateValue' ) )
    $var3 = $var3->templateValue();
$var3Data = array( 'value' => $var3 );
$tpl->processOperator( 'count',
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
          1 => 'content_class',
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
          1 => 'can_create_languages',
          2 => false,
        ),
      ),
      2 => false,
    ),
  ),
),
                       $rootNamespace, $currentNamespace, $var3Data, false, false );
$var3 = $var3Data['value'];
unset( $var3Data );
if (! isset( $var3 ) ) $var3 = NULL;
while ( is_object( $var3 ) and method_exists( $var3, 'templateValue' ) )
    $var3 = $var3->templateValue();
$var1 = ( ( 0 ) == ( $var3 ) );
unset( $var3 );
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
if ( $var1 )
{
    $var = "'edit-class-another-language'";
}
else
{
    
    $var = '-1';
}
unset( $var1 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( $tpl->hasVariable( 'disable_another_language', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'disable_another_language' is already defined.", array (
  0 => 
  array (
    0 => 13,
    1 => 0,
    2 => 271,
  ),
  1 => 
  array (
    0 => 16,
    1 => 22,
    2 => 630,
  ),
  2 => 'design/admin/templates/node/view/full.tpl',
) );
    $tpl->setVariable( 'disable_another_language', $var, $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'disable_another_language', $var, $rootNamespace );
}

// def $disabled_sub_menu
if ( $tpl->hasVariable( 'disabled_sub_menu', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'disabled_sub_menu' is already defined.", array (
  0 => 
  array (
    0 => 13,
    1 => 0,
    2 => 271,
  ),
  1 => 
  array (
    0 => 16,
    1 => 22,
    2 => 630,
  ),
  2 => 'design/admin/templates/node/view/full.tpl',
) );
    $tpl->setVariable( 'disabled_sub_menu', '[\'class-createnodefeed\', \'class-removenodefeed\']', $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'disabled_sub_menu', '[\'class-createnodefeed\', \'class-removenodefeed\']', $rootNamespace );
}

// def $hide_status
if ( $tpl->hasVariable( 'hide_status', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'hide_status' is already defined.", array (
  0 => 
  array (
    0 => 13,
    1 => 0,
    2 => 271,
  ),
  1 => 
  array (
    0 => 16,
    1 => 22,
    2 => 630,
  ),
  2 => 'design/admin/templates/node/view/full.tpl',
) );
    $tpl->setVariable( 'hide_status', '', $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'hide_status', '', $rootNamespace );
}

// if begins
unset( $if_cond );
unset( $if_cond );
$if_cond = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'node', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['node'] : null;
$if_cond1 = compiledFetchAttribute( $if_cond, 'is_invisible' );
unset( $if_cond );
$if_cond = $if_cond1;
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '    ';
unset( $var );
unset( $var2 );
unset( $var2 );
$var2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'node', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['node'] : null;
$var3 = compiledFetchAttribute( $var2, 'hidden_status_string' );
unset( $var2 );
$var2 = $var3;
if (! isset( $var2 ) ) $var2 = NULL;
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
$var = ( '(' . $var2 . ')' );
unset( $var2 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( array_key_exists( $currentNamespace, $vars ) && array_key_exists( 'hide_status', $vars[$currentNamespace] ) )
{
    $vars[$currentNamespace]['hide_status'] = $var;
    unset( $var );
}
}
unset( $if_cond );
// if ends

$text .= '
';
// if begins
unset( $if_cond );
unset( $if_cond1 );
$if_cond1 = array (
  'folder' => 'article',
);
unset( $if_cond3 );
unset( $if_cond3 );
$if_cond3 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'node', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['node'] : null;
$if_cond4 = compiledFetchAttribute( $if_cond3, 'class_identifier' );
unset( $if_cond3 );
$if_cond3 = $if_cond4;
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
$text .= '    ';
// def $create_rss_access
unset( $var );
$var = call_user_func_array( array( new eZUserFunctionCollection(), 'hasAccessTo' ),
  array(     'module' => "rss",
    'function' => "edit",
    'user_id' => null ) );
$var = isset( $var['result'] ) ? $var['result'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( $tpl->hasVariable( 'create_rss_access', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'create_rss_access' is already defined.", array (
  0 => 
  array (
    0 => 24,
    1 => 4,
    2 => 934,
  ),
  1 => 
  array (
    0 => 24,
    1 => 106,
    2 => 1036,
  ),
  2 => 'design/admin/templates/node/view/full.tpl',
) );
    $tpl->setVariable( 'create_rss_access', $var, $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'create_rss_access', $var, $rootNamespace );
}

$text .= '    ';
// if begins
unset( $if_cond );
unset( $if_cond );
$if_cond = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'create_rss_access', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['create_rss_access'] : null;
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '        ';
// if begins
unset( $if_cond );
unset( $if_cond1 );
unset( $if_cond1 );
$if_cond1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'node', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['node'] : null;
$if_cond2 = compiledFetchAttribute( $if_cond1, 'node_id' );
unset( $if_cond1 );
$if_cond1 = $if_cond2;
if (! isset( $if_cond1 ) ) $if_cond1 = NULL;
while ( is_object( $if_cond1 ) and method_exists( $if_cond1, 'templateValue' ) )
    $if_cond1 = $if_cond1->templateValue();
$if_cond = call_user_func_array( array( new eZRSSFunctionCollection(), 'hasExportByNode' ),
  array(     'node_id' => $if_cond1 ) );
$if_cond = isset( $if_cond['result'] ) ? $if_cond['result'] : null;
unset( $if_cond1 );
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '            ';
if ( array_key_exists( $currentNamespace, $vars ) && array_key_exists( 'disabled_sub_menu', $vars[$currentNamespace] ) )
{
    $vars[$currentNamespace]['disabled_sub_menu'] = '\'class-createnodefeed\'';
}
$text .= '        ';
}
else
{
$text .= '            ';
if ( array_key_exists( $currentNamespace, $vars ) && array_key_exists( 'disabled_sub_menu', $vars[$currentNamespace] ) )
{
    $vars[$currentNamespace]['disabled_sub_menu'] = '\'class-removenodefeed\'';
}
$text .= '        ';
}
unset( $if_cond );
// if ends

$text .= '    ';
}
unset( $if_cond );
// if ends

}
unset( $if_cond );
// if ends

$text .= '
<h1 class="context-title"><a href=';
unset( $var );
unset( $var1 );
unset( $var3 );
unset( $var3 );
$var3 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'node', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['node'] : null;
$var4 = compiledFetchAttribute( $var3, 'object' );
unset( $var3 );
$var3 = $var4;
$var4 = compiledFetchAttribute( $var3, 'contentclass_id' );
unset( $var3 );
$var3 = $var4;
if (! isset( $var3 ) ) $var3 = NULL;
while ( is_object( $var3 ) and method_exists( $var3, 'templateValue' ) )
    $var3 = $var3->templateValue();
while ( is_object( $var3 ) and method_exists( $var3, 'templateValue' ) )
    $var3 = $var3->templateValue();
$var1 = ( '/class/view/' . $var3 );
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

$text .= ' onclick="ezpopmenu_showTopLevel( event, \'ClassMenu\', ez_createAArray( new Array( \'%classID%\', ';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'node', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['node'] : null;
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

$text .= ', \'%objectID%\', ';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'node', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['node'] : null;
$var1 = compiledFetchAttribute( $var, 'contentobject_id' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= ', \'%nodeID%\', ';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'node', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['node'] : null;
$var1 = compiledFetchAttribute( $var, 'node_id' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= ', \'%currentURL%\', \'';
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'node', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['node'] : null;
$var2 = compiledFetchAttribute( $var1, 'url' );
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

$text .= '\', \'%languages%\', ';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'js_class_languages', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['js_class_languages'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= ' ) ), \'';
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'node', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['node'] : null;
$var2 = compiledFetchAttribute( $var1, 'class_name' );
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

$text .= '\', ';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'disabled_sub_menu', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['disabled_sub_menu'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= ', ';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'disable_another_language', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['disable_another_language'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= ' ); return false;">';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'node', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['node'] : null;
$var1 = compiledFetchAttribute( $var, 'class_identifier' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$varData = array( 'value' => $var );
$tpl->processOperator( 'class_icon',
                       array (
  0 => 
  array (
    0 => 
    array (
      0 => 3,
      1 => 'normal',
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
          1 => 'class_name',
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
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '</a>&nbsp;';
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'node', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['node'] : null;
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

$text .= '&nbsp;[';
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'node', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['node'] : null;
$var2 = compiledFetchAttribute( $var1, 'class_name' );
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

$text .= ']&nbsp;';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'hide_status', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['hide_status'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '</h1>
';
// undef $js_class_languages
$tpl->unsetLocalVariable( 'js_class_languages', $rootNamespace );

// undef $disable_another_language
$tpl->unsetLocalVariable( 'disable_another_language', $rootNamespace );

// undef $disabled_sub_menu
$tpl->unsetLocalVariable( 'disabled_sub_menu', $rootNamespace );

// undef $hide_status
$tpl->unsetLocalVariable( 'hide_status', $rootNamespace );

$text .= '
<div class="header-mainline"></div>

</div>


<div class="box-content">

<div class="context-information">
<p class="left modified">Dernière modification: ';
unset( $var );
// l10nTransformation begin
$locale = eZLocale::instance();
// l10nTransformation: static
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'node', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['node'] : null;
$var2 = compiledFetchAttribute( $var1, 'object' );
unset( $var1 );
$var1 = $var2;
$var2 = compiledFetchAttribute( $var1, 'modified' );
unset( $var1 );
$var1 = $var2;
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
unset( $var2 );
if (! isset( $var2 ) ) $var2 = NULL;
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
unset( $var3 );
if (! isset( $var3 ) ) $var3 = NULL;
while ( is_object( $var3 ) and method_exists( $var3, 'templateValue' ) )
    $var3 = $var3->templateValue();
while ( is_object( $var3 ) and method_exists( $var3, 'templateValue' ) )
    $var3 = $var3->templateValue();

$var = $locale->formatShortDateTime( $var1 );
unset( $var1, $var2, $var3 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= ', <a href=';
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'node', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['node'] : null;
$var2 = compiledFetchAttribute( $var1, 'object' );
unset( $var1 );
$var1 = $var2;
$var2 = compiledFetchAttribute( $var1, 'current' );
unset( $var1 );
$var1 = $var2;
$var2 = compiledFetchAttribute( $var1, 'creator' );
unset( $var1 );
$var1 = $var2;
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
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'node', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['node'] : null;
$var2 = compiledFetchAttribute( $var1, 'object' );
unset( $var1 );
$var1 = $var2;
$var2 = compiledFetchAttribute( $var1, 'current' );
unset( $var1 );
$var1 = $var2;
$var2 = compiledFetchAttribute( $var1, 'creator' );
unset( $var1 );
$var1 = $var2;
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

$text .= '</a> (ID du Nœud : ';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'node', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['node'] : null;
$var1 = compiledFetchAttribute( $var, 'node_id' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= ', ID de l\'objet : ';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'node', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['node'] : null;
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

$text .= ')</p>
<p class="right translation">';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'node', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['node'] : null;
$var1 = compiledFetchAttribute( $var, 'object' );
unset( $var );
$var = $var1;
$var1 = compiledFetchAttribute( $var, 'current_language_object' );
unset( $var );
$var = $var1;
$var1 = compiledFetchAttribute( $var, 'locale_object' );
unset( $var );
$var = $var1;
$var1 = compiledFetchAttribute( $var, 'intl_language_name' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '&nbsp;<img src="';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'node', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['node'] : null;
$var1 = compiledFetchAttribute( $var, 'object' );
unset( $var );
$var = $var1;
$var1 = compiledFetchAttribute( $var, 'current_language' );
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

$text .= '" width="18" height="12" alt="';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'language_code', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['language_code'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '" style="vertical-align: middle;" /></p>
<div class="break"></div>
</div>

<div id="window-controls" class="tab-block">
';
$oldRestoreIncludeArray_5c0a2a7e6d25179f5106d6b7e4ea205c = isset( $restoreIncludeArray ) ? $restoreIncludeArray : array();
$restoreIncludeArray = array();

if ( !isset( $dKeys ) )
{
    $resH = $tpl->resourceHandler( "design" );
    $dKeys = $resH->keys();
}

$resourceFound = false;
if ( file_exists( 'var/ezwebin_site/cache/template/compiled/window_controls-9d14943ad7f797e37b22f0d898ed44e0.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$rootNamespace = $currentNamespace;
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'design/admin/templates/window_controls.tpl' );
include( '' . 'var/ezwebin_site/cache/template/compiled/window_controls-9d14943ad7f797e37b22f0d898ed44e0.php' );
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
$tpl->processURI( 'design/admin/templates/window_controls.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
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
$restoreIncludeArray = $oldRestoreIncludeArray_5c0a2a7e6d25179f5106d6b7e4ea205c;

$text .= '
</div>

</div>

<div class="controlbar">


<form method="post" action="/ezpublish/app/ezpublish_legacy/index.php/ezwebin_site_admin/content/action">
<input type="hidden" name="TopLevelNode" value="';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'node', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['node'] : null;
$var1 = compiledFetchAttribute( $var, 'object' );
unset( $var );
$var = $var1;
$var1 = compiledFetchAttribute( $var, 'main_node_id' );
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
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'node', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['node'] : null;
$var1 = compiledFetchAttribute( $var, 'node_id' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '" />
<input type="hidden" name="ContentObjectID" value="';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'node', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['node'] : null;
$var1 = compiledFetchAttribute( $var, 'contentobject_id' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '" />

<div class="button-left">
<div class=\'block\'>
';
// def $can_create_languages
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'node', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['node'] : null;
$var1 = compiledFetchAttribute( $var, 'object' );
unset( $var );
$var = $var1;
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
    0 => 70,
    1 => 0,
    2 => 3428,
  ),
  1 => 
  array (
    0 => 71,
    1 => 72,
    2 => 3562,
  ),
  2 => 'design/admin/templates/node/view/full.tpl',
) );
    $tpl->setVariable( 'can_create_languages', $var, $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'can_create_languages', $var, $rootNamespace );
}

// def $languages
unset( $var );
$var = call_user_func_array( array( new eZContentFunctionCollection(), 'fetchPrioritizedLanguages' ),
  array(  ) );
$var = isset( $var['result'] ) ? $var['result'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( $tpl->hasVariable( 'languages', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'languages' is already defined.", array (
  0 => 
  array (
    0 => 70,
    1 => 0,
    2 => 3428,
  ),
  1 => 
  array (
    0 => 71,
    1 => 72,
    2 => 3562,
  ),
  2 => 'design/admin/templates/node/view/full.tpl',
) );
    $tpl->setVariable( 'languages', $var, $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'languages', $var, $rootNamespace );
}

// if begins
unset( $if_cond );
unset( $if_cond );
$if_cond = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'node', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['node'] : null;
$if_cond1 = compiledFetchAttribute( $if_cond, 'can_edit' );
unset( $if_cond );
$if_cond = $if_cond1;
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '    ';
// if begins
unset( $if_cond );
unset( $if_cond1 );
unset( $if_cond2 );
unset( $if_cond2 );
$if_cond2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'languages', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['languages'] : null;
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
$if_cond1 = ( ( $if_cond2 ) == ( 1 ) );
unset( $if_cond2 );
if (! isset( $if_cond1 ) ) $if_cond1 = NULL;
while ( is_object( $if_cond1 ) and method_exists( $if_cond1, 'templateValue' ) )
    $if_cond1 = $if_cond1->templateValue();
unset( $if_cond2 );
unset( $if_cond3 );
unset( $if_cond3 );
$if_cond3 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'languages', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['languages'] : null;
$if_cond4 = compiledFetchAttribute( $if_cond3, 0 );
unset( $if_cond3 );
$if_cond3 = $if_cond4;
if (! isset( $if_cond3 ) ) $if_cond3 = NULL;
while ( is_object( $if_cond3 ) and method_exists( $if_cond3, 'templateValue' ) )
    $if_cond3 = $if_cond3->templateValue();
$if_cond2 = isset( $if_cond3 );unset( $if_cond3 );
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
$text .= '            <input name="ContentObjectLanguageCode" value="';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'languages', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['languages'] : null;
$var1 = compiledFetchAttribute( $var, 0 );
unset( $var );
$var = $var1;
$var1 = compiledFetchAttribute( $var, 'locale' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '" type="hidden" />
    ';
}
else
{
$text .= '            <select name="ContentObjectLanguageCode">
            ';
// foreach begins
$skipDelimiter = true;
if ( !isset( $fe_variable_stack_d3fb2e88b20594142ca8b204cd5aeab6_1 ) ) $fe_variable_stack_d3fb2e88b20594142ca8b204cd5aeab6_1 = array();
$fe_variable_stack_d3fb2e88b20594142ca8b204cd5aeab6_1[] = compact( 'fe_array_d3fb2e88b20594142ca8b204cd5aeab6_1', 'fe_array_keys_d3fb2e88b20594142ca8b204cd5aeab6_1', 'fe_n_items_d3fb2e88b20594142ca8b204cd5aeab6_1', 'fe_n_items_processed_d3fb2e88b20594142ca8b204cd5aeab6_1', 'fe_i_d3fb2e88b20594142ca8b204cd5aeab6_1', 'fe_key_d3fb2e88b20594142ca8b204cd5aeab6_1', 'fe_val_d3fb2e88b20594142ca8b204cd5aeab6_1', 'fe_offset_d3fb2e88b20594142ca8b204cd5aeab6_1', 'fe_max_d3fb2e88b20594142ca8b204cd5aeab6_1', 'fe_reverse_d3fb2e88b20594142ca8b204cd5aeab6_1', 'fe_first_val_d3fb2e88b20594142ca8b204cd5aeab6_1', 'fe_last_val_d3fb2e88b20594142ca8b204cd5aeab6_1' );
unset( $fe_array_d3fb2e88b20594142ca8b204cd5aeab6_1 );
unset( $fe_array_d3fb2e88b20594142ca8b204cd5aeab6_1 );
$fe_array_d3fb2e88b20594142ca8b204cd5aeab6_1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'node', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['node'] : null;
$fe_array_d3fb2e88b20594142ca8b204cd5aeab6_11 = compiledFetchAttribute( $fe_array_d3fb2e88b20594142ca8b204cd5aeab6_1, 'object' );
unset( $fe_array_d3fb2e88b20594142ca8b204cd5aeab6_1 );
$fe_array_d3fb2e88b20594142ca8b204cd5aeab6_1 = $fe_array_d3fb2e88b20594142ca8b204cd5aeab6_11;
$fe_array_d3fb2e88b20594142ca8b204cd5aeab6_11 = compiledFetchAttribute( $fe_array_d3fb2e88b20594142ca8b204cd5aeab6_1, 'can_edit_languages' );
unset( $fe_array_d3fb2e88b20594142ca8b204cd5aeab6_1 );
$fe_array_d3fb2e88b20594142ca8b204cd5aeab6_1 = $fe_array_d3fb2e88b20594142ca8b204cd5aeab6_11;
if (! isset( $fe_array_d3fb2e88b20594142ca8b204cd5aeab6_1 ) ) $fe_array_d3fb2e88b20594142ca8b204cd5aeab6_1 = NULL;
while ( is_object( $fe_array_d3fb2e88b20594142ca8b204cd5aeab6_1 ) and method_exists( $fe_array_d3fb2e88b20594142ca8b204cd5aeab6_1, 'templateValue' ) )
    $fe_array_d3fb2e88b20594142ca8b204cd5aeab6_1 = $fe_array_d3fb2e88b20594142ca8b204cd5aeab6_1->templateValue();

$fe_array_keys_d3fb2e88b20594142ca8b204cd5aeab6_1 = is_array( $fe_array_d3fb2e88b20594142ca8b204cd5aeab6_1 ) ? array_keys( $fe_array_d3fb2e88b20594142ca8b204cd5aeab6_1 ) : array();
$fe_n_items_d3fb2e88b20594142ca8b204cd5aeab6_1 = count( $fe_array_keys_d3fb2e88b20594142ca8b204cd5aeab6_1 );
$fe_n_items_processed_d3fb2e88b20594142ca8b204cd5aeab6_1 = 0;
$fe_offset_d3fb2e88b20594142ca8b204cd5aeab6_1 = 0;
$fe_max_d3fb2e88b20594142ca8b204cd5aeab6_1 = $fe_n_items_d3fb2e88b20594142ca8b204cd5aeab6_1 - $fe_offset_d3fb2e88b20594142ca8b204cd5aeab6_1;
$fe_reverse_d3fb2e88b20594142ca8b204cd5aeab6_1 = false;
if ( $fe_offset_d3fb2e88b20594142ca8b204cd5aeab6_1 < 0 || $fe_offset_d3fb2e88b20594142ca8b204cd5aeab6_1 >= $fe_n_items_d3fb2e88b20594142ca8b204cd5aeab6_1 )
{
    $fe_offset_d3fb2e88b20594142ca8b204cd5aeab6_1 = ( $fe_offset_d3fb2e88b20594142ca8b204cd5aeab6_1 < 0 ) ? 0 : $fe_n_items_d3fb2e88b20594142ca8b204cd5aeab6_1;
    if ( $fe_n_items_d3fb2e88b20594142ca8b204cd5aeab6_1 || $fe_offset_d3fb2e88b20594142ca8b204cd5aeab6_1 < 0 )
 {
        eZDebug::writeWarning("Invalid 'offset' parameter specified: '$fe_offset_d3fb2e88b20594142ca8b204cd5aeab6_1'. Array count: $fe_n_items_d3fb2e88b20594142ca8b204cd5aeab6_1");   
}
}
if ( $fe_max_d3fb2e88b20594142ca8b204cd5aeab6_1 < 0 || $fe_offset_d3fb2e88b20594142ca8b204cd5aeab6_1 + $fe_max_d3fb2e88b20594142ca8b204cd5aeab6_1 > $fe_n_items_d3fb2e88b20594142ca8b204cd5aeab6_1 )
{
    if ( $fe_max_d3fb2e88b20594142ca8b204cd5aeab6_1 < 0 )
 eZDebug::writeWarning("Invalid 'max' parameter specified: $fe_max_d3fb2e88b20594142ca8b204cd5aeab6_1");
    $fe_max_d3fb2e88b20594142ca8b204cd5aeab6_1 = $fe_n_items_d3fb2e88b20594142ca8b204cd5aeab6_1 - $fe_offset_d3fb2e88b20594142ca8b204cd5aeab6_1;
}
if ( $fe_reverse_d3fb2e88b20594142ca8b204cd5aeab6_1 )
{
    $fe_first_val_d3fb2e88b20594142ca8b204cd5aeab6_1 = $fe_n_items_d3fb2e88b20594142ca8b204cd5aeab6_1 - 1 - $fe_offset_d3fb2e88b20594142ca8b204cd5aeab6_1;
    $fe_last_val_d3fb2e88b20594142ca8b204cd5aeab6_1  = 0;
}
else
{
    $fe_first_val_d3fb2e88b20594142ca8b204cd5aeab6_1 = $fe_offset_d3fb2e88b20594142ca8b204cd5aeab6_1;
    $fe_last_val_d3fb2e88b20594142ca8b204cd5aeab6_1  = $fe_n_items_d3fb2e88b20594142ca8b204cd5aeab6_1 - 1;
}
// foreach
for ( $fe_i_d3fb2e88b20594142ca8b204cd5aeab6_1 = $fe_first_val_d3fb2e88b20594142ca8b204cd5aeab6_1; $fe_n_items_processed_d3fb2e88b20594142ca8b204cd5aeab6_1 < $fe_max_d3fb2e88b20594142ca8b204cd5aeab6_1 && ( $fe_reverse_d3fb2e88b20594142ca8b204cd5aeab6_1 ? $fe_i_d3fb2e88b20594142ca8b204cd5aeab6_1 >= $fe_last_val_d3fb2e88b20594142ca8b204cd5aeab6_1 : $fe_i_d3fb2e88b20594142ca8b204cd5aeab6_1 <= $fe_last_val_d3fb2e88b20594142ca8b204cd5aeab6_1 ); $fe_reverse_d3fb2e88b20594142ca8b204cd5aeab6_1 ? $fe_i_d3fb2e88b20594142ca8b204cd5aeab6_1-- : $fe_i_d3fb2e88b20594142ca8b204cd5aeab6_1++ )
{
$fe_key_d3fb2e88b20594142ca8b204cd5aeab6_1 = $fe_array_keys_d3fb2e88b20594142ca8b204cd5aeab6_1[$fe_i_d3fb2e88b20594142ca8b204cd5aeab6_1];
$fe_val_d3fb2e88b20594142ca8b204cd5aeab6_1 = $fe_array_d3fb2e88b20594142ca8b204cd5aeab6_1[$fe_key_d3fb2e88b20594142ca8b204cd5aeab6_1];
$vars[$rootNamespace]['language'] = $fe_val_d3fb2e88b20594142ca8b204cd5aeab6_1;
$text .= '                       <option value="';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'language', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['language'] : null;
$var1 = compiledFetchAttribute( $var, 'locale' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '"';
// if begins
unset( $if_cond );
unset( $if_cond1 );
unset( $if_cond1 );
$if_cond1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'language', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['language'] : null;
$if_cond2 = compiledFetchAttribute( $if_cond1, 'locale' );
unset( $if_cond1 );
$if_cond1 = $if_cond2;
if (! isset( $if_cond1 ) ) $if_cond1 = NULL;
while ( is_object( $if_cond1 ) and method_exists( $if_cond1, 'templateValue' ) )
    $if_cond1 = $if_cond1->templateValue();
unset( $if_cond2 );
unset( $if_cond2 );
$if_cond2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'node', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['node'] : null;
$if_cond3 = compiledFetchAttribute( $if_cond2, 'object' );
unset( $if_cond2 );
$if_cond2 = $if_cond3;
$if_cond3 = compiledFetchAttribute( $if_cond2, 'current_language' );
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
$text .= ' selected="selected"';
}
unset( $if_cond );
// if ends

$text .= '>';
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'language', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['language'] : null;
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
$fe_n_items_processed_d3fb2e88b20594142ca8b204cd5aeab6_1++;
} // foreach
$skipDelimiter = false;
if ( count( $fe_variable_stack_d3fb2e88b20594142ca8b204cd5aeab6_1 ) ) extract( array_pop( $fe_variable_stack_d3fb2e88b20594142ca8b204cd5aeab6_1 ) );

else
{

unset( $fe_array_d3fb2e88b20594142ca8b204cd5aeab6_1 );

unset( $fe_array_keys_d3fb2e88b20594142ca8b204cd5aeab6_1 );

unset( $fe_n_items_d3fb2e88b20594142ca8b204cd5aeab6_1 );

unset( $fe_n_items_processed_d3fb2e88b20594142ca8b204cd5aeab6_1 );

unset( $fe_i_d3fb2e88b20594142ca8b204cd5aeab6_1 );

unset( $fe_key_d3fb2e88b20594142ca8b204cd5aeab6_1 );

unset( $fe_val_d3fb2e88b20594142ca8b204cd5aeab6_1 );

unset( $fe_offset_d3fb2e88b20594142ca8b204cd5aeab6_1 );

unset( $fe_max_d3fb2e88b20594142ca8b204cd5aeab6_1 );

unset( $fe_reverse_d3fb2e88b20594142ca8b204cd5aeab6_1 );

unset( $fe_first_val_d3fb2e88b20594142ca8b204cd5aeab6_1 );

unset( $fe_last_val_d3fb2e88b20594142ca8b204cd5aeab6_1 );

unset( $fe_variable_stack_d3fb2e88b20594142ca8b204cd5aeab6_1 );

}

// foreach ends
$text .= '            ';
// if begins
unset( $if_cond );
unset( $if_cond1 );
unset( $if_cond1 );
$if_cond1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'can_create_languages', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['can_create_languages'] : null;
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
$if_cond = ( ( $if_cond1 ) > ( 0 ) );
unset( $if_cond1 );
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '                <option value="">Nouvelle traduction</option>
            ';
}
unset( $if_cond );
// if ends

$text .= '            </select>
    ';
}
unset( $if_cond );
// if ends

$text .= '    <input class="button" type="submit" name="EditButton" value="Modifier" title="Modifier le contenu de cet élément." />';
}
else
{
$text .= '    <select name="ContentObjectLanguageCode" disabled="disabled">
        <option value="">Non disponible</option>
    </select>
    <input class="button-disabled" type="submit" name="EditButton" value="Modifier" title="Vous n\'avez pas le droit de modifier cet élément." disabled="disabled" />';
}
unset( $if_cond );
// if ends

// undef $can_create_languages
$tpl->unsetLocalVariable( 'can_create_languages', $rootNamespace );

$text .= '
';
// if begins
unset( $if_cond );
unset( $if_cond );
$if_cond = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'node', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['node'] : null;
$if_cond1 = compiledFetchAttribute( $if_cond, 'can_move' );
unset( $if_cond );
$if_cond = $if_cond1;
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '    <input class="button" type="submit" name="MoveNodeButton" value="Déplacer" title="Déplacement cet élément à un autre emplacement." />';
}
else
{
$text .= '    <input class="button-disabled" type="submit" name="MoveNodeButton" value="Déplacer" title="Vous n\'avez pas le droit de déplacer cet élément vers un autre emplacement." disabled="disabled" />';
}
unset( $if_cond );
// if ends

$text .= '
';
// if begins
unset( $if_cond );
unset( $if_cond );
$if_cond = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'node', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['node'] : null;
$if_cond1 = compiledFetchAttribute( $if_cond, 'can_remove' );
unset( $if_cond );
$if_cond = $if_cond1;
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '    <input class="button" type="submit" name="ActionRemove" value="Supprimer" title="Supprimer cet élément." />';
}
else
{
$text .= '    <input class="button-disabled" type="submit" name="ActionRemove" value="Supprimer" title="Vous n\'avez pas le droit de supprimer cet élément." disabled="disabled" />';
}
unset( $if_cond );
// if ends

$text .= '</div>
</div>

<div class="button-right">
	<p class=\'versions\'>
    
    <a href=';
unset( $var );
unset( $var1 );
unset( $var3 );
unset( $var3 );
$var3 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'node', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['node'] : null;
$var4 = compiledFetchAttribute( $var3, 'contentobject_id' );
unset( $var3 );
$var3 = $var4;
if (! isset( $var3 ) ) $var3 = NULL;
while ( is_object( $var3 ) and method_exists( $var3, 'templateValue' ) )
    $var3 = $var3->templateValue();
while ( is_object( $var3 ) and method_exists( $var3, 'templateValue' ) )
    $var3 = $var3->templateValue();
$var1 = ( 'content/history/' . $var3 );
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

$text .= ' title="Afficher et gérer (copier, supprimer, etc.) les versions de cet objet.">Gérer les versions</a>
    </p>
</div>

<div class="float-break"></div>
</form>

</div>


</div>


<div id="content-view-children">';
// if begins
unset( $if_cond );
unset( $if_cond );
$if_cond = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'node', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['node'] : null;
$if_cond1 = compiledFetchAttribute( $if_cond, 'is_container' );
unset( $if_cond );
$if_cond = $if_cond1;
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '    ';
$oldRestoreIncludeArray_01bbd51d2ebf8e54461b5e6775fca5bd = isset( $restoreIncludeArray ) ? $restoreIncludeArray : array();
$restoreIncludeArray = array();

if ( !isset( $dKeys ) )
{
    $resH = $tpl->resourceHandler( "design" );
    $dKeys = $resH->keys();
}

$resourceFound = false;
if ( file_exists( 'var/ezwebin_site/cache/template/compiled/children-f5988c6e579ae71d564e2db65130742d.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$rootNamespace = $currentNamespace;
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'design/admin/templates/children.tpl' );
include( '' . 'var/ezwebin_site/cache/template/compiled/children-f5988c6e579ae71d564e2db65130742d.php' );
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
$tpl->processURI( 'design/admin/templates/children.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
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
$restoreIncludeArray = $oldRestoreIncludeArray_01bbd51d2ebf8e54461b5e6775fca5bd;

}
else
{
$text .= '    ';
$oldRestoreIncludeArray_3c24234ed948f04fd686e53c80cac7db = isset( $restoreIncludeArray ) ? $restoreIncludeArray : array();
$restoreIncludeArray = array();

if ( !isset( $dKeys ) )
{
    $resH = $tpl->resourceHandler( "design" );
    $dKeys = $resH->keys();
}

$resourceFound = false;
if ( file_exists( 'var/ezwebin_site/cache/template/compiled/no_children-9263c5c67ce7f6033c2dbd498908be84.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$rootNamespace = $currentNamespace;
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'design/admin/templates/no_children.tpl' );
include( '' . 'var/ezwebin_site/cache/template/compiled/no_children-9263c5c67ce7f6033c2dbd498908be84.php' );
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
$tpl->processURI( 'design/admin/templates/no_children.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
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
$restoreIncludeArray = $oldRestoreIncludeArray_3c24234ed948f04fd686e53c80cac7db;

}
unset( $if_cond );
// if ends

$text .= '</div>

</div>

 </div>
</div>';

$setArray = $oldSetArray_137435716855962f789a66aa2a346a94;
$tpl->Level--;
?>
