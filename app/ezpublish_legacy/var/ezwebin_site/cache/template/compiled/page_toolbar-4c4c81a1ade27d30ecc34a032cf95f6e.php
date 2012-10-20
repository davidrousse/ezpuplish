<?php
// URI:       extension/ezwebin/design/ezwebin/templates/page_toolbar.tpl
// Filename:  extension/ezwebin/design/ezwebin/templates/page_toolbar.tpl
// Timestamp: 1350735749 (Sat Oct 20 12:22:29 UTC 2012)
$oldSetArray_57cbc9e3da65bdf2c3102b4f5e0c97ca = isset( $setArray ) ? $setArray : array();
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

$text .= '  <div id="toolbar">
  ';
$oldRestoreIncludeArray_6cf0d54fff925eb44a82ef5687774851 = isset( $restoreIncludeArray ) ? $restoreIncludeArray : array();
$restoreIncludeArray = array();

if ( !isset( $dKeys ) )
{
    $resH = $tpl->resourceHandler( "design" );
    $dKeys = $resH->keys();
}

$resourceFound = false;
if ( file_exists( 'var/ezwebin_site/cache/template/compiled/website_toolbar-4eff7c43c84056dfee3e6cd474d59645.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$rootNamespace = $currentNamespace;
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/ezwt/design/standard/templates/parts/website_toolbar.tpl' );
include( '' . 'var/ezwebin_site/cache/template/compiled/website_toolbar-4eff7c43c84056dfee3e6cd474d59645.php' );
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
$tpl->processURI( 'extension/ezwt/design/standard/templates/parts/website_toolbar.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
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
$restoreIncludeArray = $oldRestoreIncludeArray_6cf0d54fff925eb44a82ef5687774851;

$text .= '  </div>';

$setArray = $oldSetArray_57cbc9e3da65bdf2c3102b4f5e0c97ca;
$tpl->Level--;
?>
