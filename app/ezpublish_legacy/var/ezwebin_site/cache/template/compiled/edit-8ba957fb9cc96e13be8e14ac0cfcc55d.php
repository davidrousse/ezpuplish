<?php
// URI:       design:content/edit.tpl
// Filename:  extension/ezwebin/design/ezwebin/templates/content/edit.tpl
// Timestamp: 1350735749 (Sat Oct 20 12:22:29 UTC 2012)
$oldSetArray_97818beb7273fdfb984810916b37edb7 = isset( $setArray ) ? $setArray : array();
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

$text .= '<form name="editform" id="editform" enctype="multipart/form-data" method="post" action=';
unset( $var );
unset( $var1 );
unset( $var3 );
unset( $var3 );
$var3 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'object', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['object'] : null;
$var4 = compiledFetchAttribute( $var3, 'id' );
unset( $var3 );
$var3 = $var4;
if (! isset( $var3 ) ) $var3 = NULL;
while ( is_object( $var3 ) and method_exists( $var3, 'templateValue' ) )
    $var3 = $var3->templateValue();
while ( is_object( $var3 ) and method_exists( $var3, 'templateValue' ) )
    $var3 = $var3->templateValue();
unset( $var5 );
unset( $var5 );
$var5 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'edit_version', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['edit_version'] : null;
if (! isset( $var5 ) ) $var5 = NULL;
while ( is_object( $var5 ) and method_exists( $var5, 'templateValue' ) )
    $var5 = $var5->templateValue();
while ( is_object( $var5 ) and method_exists( $var5, 'templateValue' ) )
    $var5 = $var5->templateValue();
unset( $var7 );
unset( $var8 );
unset( $var9 );
unset( $var9 );
$var9 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'edit_language', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['edit_language'] : null;
if (! isset( $var9 ) ) $var9 = NULL;
while ( is_object( $var9 ) and method_exists( $var9, 'templateValue' ) )
    $var9 = $var9->templateValue();
while ( is_object( $var9 ) and method_exists( $var9, 'templateValue' ) )
    $var9 = $var9->templateValue();
$var8 = !( $var9 );
unset( $var9 );
if (! isset( $var8 ) ) $var8 = NULL;
while ( is_object( $var8 ) and method_exists( $var8, 'templateValue' ) )
    $var8 = $var8->templateValue();
unset( $var9 );
unset( $var10 );
unset( $var10 );
$var10 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'edit_language', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['edit_language'] : null;
if (! isset( $var10 ) ) $var10 = NULL;
while ( is_object( $var10 ) and method_exists( $var10, 'templateValue' ) )
    $var10 = $var10->templateValue();
while ( is_object( $var10 ) and method_exists( $var10, 'templateValue' ) )
    $var10 = $var10->templateValue();
$var9 = ( $var10 . '/' );
unset( $var10 );
if (! isset( $var9 ) ) $var9 = NULL;
while ( is_object( $var9 ) and method_exists( $var9, 'templateValue' ) )
    $var9 = $var9->templateValue();
$var7 = $var8 ? '/' : $var9;
unset( $var8, $var9 );
if (! isset( $var7 ) ) $var7 = NULL;
while ( is_object( $var7 ) and method_exists( $var7, 'templateValue' ) )
    $var7 = $var7->templateValue();
unset( $var8 );
unset( $var9 );
unset( $var10 );
unset( $var10 );
$var10 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'is_translating_content', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['is_translating_content'] : null;
if (! isset( $var10 ) ) $var10 = NULL;
while ( is_object( $var10 ) and method_exists( $var10, 'templateValue' ) )
    $var10 = $var10->templateValue();
while ( is_object( $var10 ) and method_exists( $var10, 'templateValue' ) )
    $var10 = $var10->templateValue();
$var9 = !( $var10 );
unset( $var10 );
if (! isset( $var9 ) ) $var9 = NULL;
while ( is_object( $var9 ) and method_exists( $var9, 'templateValue' ) )
    $var9 = $var9->templateValue();
unset( $var10 );
unset( $var11 );
unset( $var11 );
$var11 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'from_language', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['from_language'] : null;
if (! isset( $var11 ) ) $var11 = NULL;
while ( is_object( $var11 ) and method_exists( $var11, 'templateValue' ) )
    $var11 = $var11->templateValue();
while ( is_object( $var11 ) and method_exists( $var11, 'templateValue' ) )
    $var11 = $var11->templateValue();
$var10 = ( $var11 . '/' );
unset( $var11 );
if (! isset( $var10 ) ) $var10 = NULL;
while ( is_object( $var10 ) and method_exists( $var10, 'templateValue' ) )
    $var10 = $var10->templateValue();
$var8 = $var9 ? '' : $var10;
unset( $var9, $var10 );
if (! isset( $var8 ) ) $var8 = NULL;
while ( is_object( $var8 ) and method_exists( $var8, 'templateValue' ) )
    $var8 = $var8->templateValue();
$var1 = ( '/content/edit/' . $var3 . '/' . $var5 . '/' . $var7 . $var8 );
unset( $var3, $var5, $var7, $var8 );
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

$text .= '>
';
$oldRestoreIncludeArray_120c2bf1c6384e4709cd2edc57402c52 = isset( $restoreIncludeArray ) ? $restoreIncludeArray : array();
$restoreIncludeArray = array();

if ( !isset( $dKeys ) )
{
    $resH = $tpl->resourceHandler( "design" );
    $dKeys = $resH->keys();
}

$resourceFound = false;
if ( file_exists( 'var/ezwebin_site/cache/template/compiled/website_toolbar_edit-033c421ea33eb521ab386980aab62695.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$rootNamespace = $currentNamespace;
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/ezwt/design/standard/templates/parts/website_toolbar_edit.tpl' );
include( '' . 'var/ezwebin_site/cache/template/compiled/website_toolbar_edit-033c421ea33eb521ab386980aab62695.php' );
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
$tpl->processURI( 'extension/ezwt/design/standard/templates/parts/website_toolbar_edit.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
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
$restoreIncludeArray = $oldRestoreIncludeArray_120c2bf1c6384e4709cd2edc57402c52;

$text .= '
<div class="border-box">
<div class="border-tl"><div class="border-tr"><div class="border-tc"></div></div></div>
<div class="border-ml"><div class="border-mr"><div class="border-mc float-break">

<div class="content-edit">

';
// def $content_language
if ( $tpl->hasVariable( 'content_language', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'content_language' is already defined.", array (
  0 => 
  array (
    0 => 12,
    1 => 0,
    2 => 664,
  ),
  1 => 
  array (
    0 => 12,
    1 => 61,
    2 => 725,
  ),
  2 => 'extension/ezwebin/design/ezwebin/templates/content/edit.tpl',
) );
    $tpl->setVariable( 'content_language', 'fre-FR', $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'content_language', 'fre-FR', $rootNamespace );
}

$text .= '
    <div class="attribute-header">
        <h1 class="long">';
unset( $var );
unset( $var1 );
$var1 = 'Edit <%object_name> (%class_name)';
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
$var1Data = array( 'value' => $var1 );
$tpl->processOperator( 'i18n',
                       array (
  0 => 
  array (
    0 => 
    array (
      0 => 1,
      1 => 'design/ezwebin/content/edit',
      2 => false,
    ),
  ),
  1 => 
  array (
  ),
  2 => 
  array (
    0 => 
    array (
      0 => 6,
      1 => 
      array (
        0 => 'hash',
        1 => 
        array (
          0 => 
          array (
            0 => 1,
            1 => '%object_name',
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
              2 => 'object',
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
                1 => 'name',
                2 => false,
              ),
            ),
            2 => false,
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            0 => 1,
            1 => '%class_name',
            2 => false,
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            0 => 6,
            1 => 
            array (
              0 => 'first_set',
              1 => 
              array (
                0 => 
                array (
                  0 => 4,
                  1 => 
                  array (
                    0 => '',
                    1 => 2,
                    2 => 'class',
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
                      1 => 'nameList',
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
                      0 => 4,
                      1 => 
                      array (
                        0 => '',
                        1 => 2,
                        2 => 'content_language',
                      ),
                      2 => false,
                    ),
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
                    2 => 'class',
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
                      1 => 'name',
                      2 => false,
                    ),
                  ),
                  2 => false,
                ),
              ),
            ),
            2 => false,
          ),
        ),
      ),
      2 => false,
    ),
  ),
),
                       $rootNamespace, $currentNamespace, $var1Data, false, false );
$var1 = $var1Data['value'];
unset( $var1Data );
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
$var = htmlspecialchars( $var1 );
unset( $var1 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= '</h1>
    </div>

    <div class="context-information">

    ';
// if begins
unset( $if_cond );
unset( $if_cond );
$if_cond = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'object', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['object'] : null;
$if_cond1 = compiledFetchAttribute( $if_cond, 'content_class' );
unset( $if_cond );
$if_cond = $if_cond1;
$if_cond1 = compiledFetchAttribute( $if_cond, 'description' );
unset( $if_cond );
$if_cond = $if_cond1;
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '    <p class="left class-description">
        ';
unset( $var );
unset( $var1 );
unset( $var2 );
unset( $var2 );
$var2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( "class", $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]["class"] : null;
$var3 = compiledFetchAttribute( $var2, "descriptionList" );
unset( $var2 );
$var2 = $var3;
unset( $var4 );
unset( $var4 );
$var4 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( "content_language", $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]["content_language"] : null;
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

if ( isset( $var2 ) )
{
    $var1 = $var2;
}
else
{
    unset( $var3 );
unset( $var3 );
$var3 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( "class", $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]["class"] : null;
$var4 = compiledFetchAttribute( $var3, "description" );
unset( $var3 );
$var3 = $var4;
if (! isset( $var3 ) ) $var3 = NULL;
while ( is_object( $var3 ) and method_exists( $var3, 'templateValue' ) )
    $var3 = $var3->templateValue();
while ( is_object( $var3 ) and method_exists( $var3, 'templateValue' ) )
    $var3 = $var3->templateValue();

    if ( isset( $var3 ) )
    {
        $var1 = $var3;
    }
}
unset( $var2, $var3 );
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
$var = htmlspecialchars( $var1 );
unset( $var1 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= '
    </p>
    ';
}
unset( $if_cond );
// if ends

$text .= '
    <p class="right translation">
    ';
// def $language_index
if ( $tpl->hasVariable( 'language_index', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'language_index' is already defined.", array (
  0 => 
  array (
    0 => 27,
    1 => 4,
    2 => 1273,
  ),
  1 => 
  array (
    0 => 29,
    1 => 62,
    2 => 1393,
  ),
  2 => 'extension/ezwebin/design/ezwebin/templates/content/edit.tpl',
) );
    $tpl->setVariable( 'language_index', 0, $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'language_index', 0, $rootNamespace );
}

// def $from_language_index
if ( $tpl->hasVariable( 'from_language_index', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'from_language_index' is already defined.", array (
  0 => 
  array (
    0 => 27,
    1 => 4,
    2 => 1273,
  ),
  1 => 
  array (
    0 => 29,
    1 => 62,
    2 => 1393,
  ),
  2 => 'extension/ezwebin/design/ezwebin/templates/content/edit.tpl',
) );
    $tpl->setVariable( 'from_language_index', 0, $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'from_language_index', 0, $rootNamespace );
}

// def $translation_list
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'content_version', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['content_version'] : null;
$var1 = compiledFetchAttribute( $var, 'translation_list' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( $tpl->hasVariable( 'translation_list', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'translation_list' is already defined.", array (
  0 => 
  array (
    0 => 27,
    1 => 4,
    2 => 1273,
  ),
  1 => 
  array (
    0 => 29,
    1 => 62,
    2 => 1393,
  ),
  2 => 'extension/ezwebin/design/ezwebin/templates/content/edit.tpl',
) );
    $tpl->setVariable( 'translation_list', $var, $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'translation_list', $var, $rootNamespace );
}

$text .= '
    ';
// foreach begins
$skipDelimiter = true;
if ( !isset( $fe_variable_stack_d34eacd4c3d9c9f01e8f04e516c244f5_1 ) ) $fe_variable_stack_d34eacd4c3d9c9f01e8f04e516c244f5_1 = array();
$fe_variable_stack_d34eacd4c3d9c9f01e8f04e516c244f5_1[] = compact( 'fe_array_d34eacd4c3d9c9f01e8f04e516c244f5_1', 'fe_array_keys_d34eacd4c3d9c9f01e8f04e516c244f5_1', 'fe_n_items_d34eacd4c3d9c9f01e8f04e516c244f5_1', 'fe_n_items_processed_d34eacd4c3d9c9f01e8f04e516c244f5_1', 'fe_i_d34eacd4c3d9c9f01e8f04e516c244f5_1', 'fe_key_d34eacd4c3d9c9f01e8f04e516c244f5_1', 'fe_val_d34eacd4c3d9c9f01e8f04e516c244f5_1', 'fe_offset_d34eacd4c3d9c9f01e8f04e516c244f5_1', 'fe_max_d34eacd4c3d9c9f01e8f04e516c244f5_1', 'fe_reverse_d34eacd4c3d9c9f01e8f04e516c244f5_1', 'fe_first_val_d34eacd4c3d9c9f01e8f04e516c244f5_1', 'fe_last_val_d34eacd4c3d9c9f01e8f04e516c244f5_1' );
unset( $fe_array_d34eacd4c3d9c9f01e8f04e516c244f5_1 );
unset( $fe_array_d34eacd4c3d9c9f01e8f04e516c244f5_1 );
$fe_array_d34eacd4c3d9c9f01e8f04e516c244f5_1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'translation_list', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['translation_list'] : null;
if (! isset( $fe_array_d34eacd4c3d9c9f01e8f04e516c244f5_1 ) ) $fe_array_d34eacd4c3d9c9f01e8f04e516c244f5_1 = NULL;
while ( is_object( $fe_array_d34eacd4c3d9c9f01e8f04e516c244f5_1 ) and method_exists( $fe_array_d34eacd4c3d9c9f01e8f04e516c244f5_1, 'templateValue' ) )
    $fe_array_d34eacd4c3d9c9f01e8f04e516c244f5_1 = $fe_array_d34eacd4c3d9c9f01e8f04e516c244f5_1->templateValue();

$fe_array_keys_d34eacd4c3d9c9f01e8f04e516c244f5_1 = is_array( $fe_array_d34eacd4c3d9c9f01e8f04e516c244f5_1 ) ? array_keys( $fe_array_d34eacd4c3d9c9f01e8f04e516c244f5_1 ) : array();
$fe_n_items_d34eacd4c3d9c9f01e8f04e516c244f5_1 = count( $fe_array_keys_d34eacd4c3d9c9f01e8f04e516c244f5_1 );
$fe_n_items_processed_d34eacd4c3d9c9f01e8f04e516c244f5_1 = 0;
$fe_offset_d34eacd4c3d9c9f01e8f04e516c244f5_1 = 0;
$fe_max_d34eacd4c3d9c9f01e8f04e516c244f5_1 = $fe_n_items_d34eacd4c3d9c9f01e8f04e516c244f5_1 - $fe_offset_d34eacd4c3d9c9f01e8f04e516c244f5_1;
$fe_reverse_d34eacd4c3d9c9f01e8f04e516c244f5_1 = false;
if ( $fe_offset_d34eacd4c3d9c9f01e8f04e516c244f5_1 < 0 || $fe_offset_d34eacd4c3d9c9f01e8f04e516c244f5_1 >= $fe_n_items_d34eacd4c3d9c9f01e8f04e516c244f5_1 )
{
    $fe_offset_d34eacd4c3d9c9f01e8f04e516c244f5_1 = ( $fe_offset_d34eacd4c3d9c9f01e8f04e516c244f5_1 < 0 ) ? 0 : $fe_n_items_d34eacd4c3d9c9f01e8f04e516c244f5_1;
    if ( $fe_n_items_d34eacd4c3d9c9f01e8f04e516c244f5_1 || $fe_offset_d34eacd4c3d9c9f01e8f04e516c244f5_1 < 0 )
 {
        eZDebug::writeWarning("Invalid 'offset' parameter specified: '$fe_offset_d34eacd4c3d9c9f01e8f04e516c244f5_1'. Array count: $fe_n_items_d34eacd4c3d9c9f01e8f04e516c244f5_1");   
}
}
if ( $fe_max_d34eacd4c3d9c9f01e8f04e516c244f5_1 < 0 || $fe_offset_d34eacd4c3d9c9f01e8f04e516c244f5_1 + $fe_max_d34eacd4c3d9c9f01e8f04e516c244f5_1 > $fe_n_items_d34eacd4c3d9c9f01e8f04e516c244f5_1 )
{
    if ( $fe_max_d34eacd4c3d9c9f01e8f04e516c244f5_1 < 0 )
 eZDebug::writeWarning("Invalid 'max' parameter specified: $fe_max_d34eacd4c3d9c9f01e8f04e516c244f5_1");
    $fe_max_d34eacd4c3d9c9f01e8f04e516c244f5_1 = $fe_n_items_d34eacd4c3d9c9f01e8f04e516c244f5_1 - $fe_offset_d34eacd4c3d9c9f01e8f04e516c244f5_1;
}
if ( $fe_reverse_d34eacd4c3d9c9f01e8f04e516c244f5_1 )
{
    $fe_first_val_d34eacd4c3d9c9f01e8f04e516c244f5_1 = $fe_n_items_d34eacd4c3d9c9f01e8f04e516c244f5_1 - 1 - $fe_offset_d34eacd4c3d9c9f01e8f04e516c244f5_1;
    $fe_last_val_d34eacd4c3d9c9f01e8f04e516c244f5_1  = 0;
}
else
{
    $fe_first_val_d34eacd4c3d9c9f01e8f04e516c244f5_1 = $fe_offset_d34eacd4c3d9c9f01e8f04e516c244f5_1;
    $fe_last_val_d34eacd4c3d9c9f01e8f04e516c244f5_1  = $fe_n_items_d34eacd4c3d9c9f01e8f04e516c244f5_1 - 1;
}
// foreach
for ( $fe_i_d34eacd4c3d9c9f01e8f04e516c244f5_1 = $fe_first_val_d34eacd4c3d9c9f01e8f04e516c244f5_1; $fe_n_items_processed_d34eacd4c3d9c9f01e8f04e516c244f5_1 < $fe_max_d34eacd4c3d9c9f01e8f04e516c244f5_1 && ( $fe_reverse_d34eacd4c3d9c9f01e8f04e516c244f5_1 ? $fe_i_d34eacd4c3d9c9f01e8f04e516c244f5_1 >= $fe_last_val_d34eacd4c3d9c9f01e8f04e516c244f5_1 : $fe_i_d34eacd4c3d9c9f01e8f04e516c244f5_1 <= $fe_last_val_d34eacd4c3d9c9f01e8f04e516c244f5_1 ); $fe_reverse_d34eacd4c3d9c9f01e8f04e516c244f5_1 ? $fe_i_d34eacd4c3d9c9f01e8f04e516c244f5_1-- : $fe_i_d34eacd4c3d9c9f01e8f04e516c244f5_1++ )
{
$fe_key_d34eacd4c3d9c9f01e8f04e516c244f5_1 = $fe_array_keys_d34eacd4c3d9c9f01e8f04e516c244f5_1[$fe_i_d34eacd4c3d9c9f01e8f04e516c244f5_1];
$fe_val_d34eacd4c3d9c9f01e8f04e516c244f5_1 = $fe_array_d34eacd4c3d9c9f01e8f04e516c244f5_1[$fe_key_d34eacd4c3d9c9f01e8f04e516c244f5_1];
$vars[$rootNamespace]['translation'] = $fe_val_d34eacd4c3d9c9f01e8f04e516c244f5_1;
$vars[$rootNamespace]['index'] = $fe_key_d34eacd4c3d9c9f01e8f04e516c244f5_1;
$text .= '       ';
// if begins
unset( $if_cond );
unset( $if_cond1 );
unset( $if_cond1 );
$if_cond1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'edit_language', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['edit_language'] : null;
if (! isset( $if_cond1 ) ) $if_cond1 = NULL;
while ( is_object( $if_cond1 ) and method_exists( $if_cond1, 'templateValue' ) )
    $if_cond1 = $if_cond1->templateValue();
unset( $if_cond2 );
unset( $if_cond2 );
$if_cond2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'translation', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['translation'] : null;
$if_cond3 = compiledFetchAttribute( $if_cond2, 'language_code' );
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
$text .= '          ';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'index', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['index'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( array_key_exists( $currentNamespace, $vars ) && array_key_exists( 'language_index', $vars[$currentNamespace] ) )
{
    $vars[$currentNamespace]['language_index'] = $var;
    unset( $var );
}
$text .= '       ';
}
unset( $if_cond );
// if ends

$text .= '    ';
$fe_n_items_processed_d34eacd4c3d9c9f01e8f04e516c244f5_1++;
} // foreach
$skipDelimiter = false;
if ( count( $fe_variable_stack_d34eacd4c3d9c9f01e8f04e516c244f5_1 ) ) extract( array_pop( $fe_variable_stack_d34eacd4c3d9c9f01e8f04e516c244f5_1 ) );

else
{

unset( $fe_array_d34eacd4c3d9c9f01e8f04e516c244f5_1 );

unset( $fe_array_keys_d34eacd4c3d9c9f01e8f04e516c244f5_1 );

unset( $fe_n_items_d34eacd4c3d9c9f01e8f04e516c244f5_1 );

unset( $fe_n_items_processed_d34eacd4c3d9c9f01e8f04e516c244f5_1 );

unset( $fe_i_d34eacd4c3d9c9f01e8f04e516c244f5_1 );

unset( $fe_key_d34eacd4c3d9c9f01e8f04e516c244f5_1 );

unset( $fe_val_d34eacd4c3d9c9f01e8f04e516c244f5_1 );

unset( $fe_offset_d34eacd4c3d9c9f01e8f04e516c244f5_1 );

unset( $fe_max_d34eacd4c3d9c9f01e8f04e516c244f5_1 );

unset( $fe_reverse_d34eacd4c3d9c9f01e8f04e516c244f5_1 );

unset( $fe_first_val_d34eacd4c3d9c9f01e8f04e516c244f5_1 );

unset( $fe_last_val_d34eacd4c3d9c9f01e8f04e516c244f5_1 );

unset( $fe_variable_stack_d34eacd4c3d9c9f01e8f04e516c244f5_1 );

}

// foreach ends
$text .= '
    ';
// if begins
unset( $if_cond );
unset( $if_cond );
$if_cond = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'is_translating_content', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['is_translating_content'] : null;
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '
        ';
// def $from_language_object
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'object', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['object'] : null;
$var1 = compiledFetchAttribute( $var, 'languages' );
unset( $var );
$var = $var1;
unset( $var2 );
unset( $var2 );
$var2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'from_language', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['from_language'] : null;
if (! isset( $var2 ) ) $var2 = NULL;
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
$var1 = compiledFetchAttribute( $var, $var2 );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( $tpl->hasVariable( 'from_language_object', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'from_language_object' is already defined.", array (
  0 => 
  array (
    0 => 39,
    1 => 8,
    2 => 1628,
  ),
  1 => 
  array (
    0 => 39,
    1 => 69,
    2 => 1689,
  ),
  2 => 'extension/ezwebin/design/ezwebin/templates/content/edit.tpl',
) );
    $tpl->setVariable( 'from_language_object', $var, $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'from_language_object', $var, $rootNamespace );
}

$text .= '
        ';
unset( $var );
unset( $var2 );
unset( $var3 );
unset( $var4 );
unset( $var4 );
$var4 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'from_language_object', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['from_language_object'] : null;
$var5 = compiledFetchAttribute( $var4, 'name' );
unset( $var4 );
$var4 = $var5;
if (! isset( $var4 ) ) $var4 = NULL;
while ( is_object( $var4 ) and method_exists( $var4, 'templateValue' ) )
    $var4 = $var4->templateValue();
while ( is_object( $var4 ) and method_exists( $var4, 'templateValue' ) )
    $var4 = $var4->templateValue();
unset( $var6 );
unset( $var6 );
$var6 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'from_language_object', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['from_language_object'] : null;
$var7 = compiledFetchAttribute( $var6, 'locale' );
unset( $var6 );
$var6 = $var7;
if (! isset( $var6 ) ) $var6 = NULL;
while ( is_object( $var6 ) and method_exists( $var6, 'templateValue' ) )
    $var6 = $var6->templateValue();
$var6Data = array( 'value' => $var6 );
$tpl->processOperator( 'flag_icon',
                       array (
),
                       $rootNamespace, $currentNamespace, $var6Data, false, false );
$var6 = $var6Data['value'];
unset( $var6Data );
if (! isset( $var6 ) ) $var6 = NULL;
while ( is_object( $var6 ) and method_exists( $var6, 'templateValue' ) )
    $var6 = $var6->templateValue();
while ( is_object( $var6 ) and method_exists( $var6, 'templateValue' ) )
    $var6 = $var6->templateValue();
unset( $var8 );
unset( $var8 );
$var8 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'from_language_object', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['from_language_object'] : null;
$var9 = compiledFetchAttribute( $var8, 'locale' );
unset( $var8 );
$var8 = $var9;
if (! isset( $var8 ) ) $var8 = NULL;
while ( is_object( $var8 ) and method_exists( $var8, 'templateValue' ) )
    $var8 = $var8->templateValue();
while ( is_object( $var8 ) and method_exists( $var8, 'templateValue' ) )
    $var8 = $var8->templateValue();
$var3 = ( $var4 . '&nbsp;<img src="' . $var6 . '" style="vertical-align: middle;" alt="' . $var8 . '" />' );
unset( $var4, $var6, $var8 );
if (! isset( $var3 ) ) $var3 = NULL;
while ( is_object( $var3 ) and method_exists( $var3, 'templateValue' ) )
    $var3 = $var3->templateValue();
unset( $var4 );
unset( $var5 );
unset( $var5 );
$var5 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'translation_list', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['translation_list'] : null;
unset( $var7 );
unset( $var7 );
$var7 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'language_index', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['language_index'] : null;
if (! isset( $var7 ) ) $var7 = NULL;
while ( is_object( $var7 ) and method_exists( $var7, 'templateValue' ) )
    $var7 = $var7->templateValue();
$var6 = compiledFetchAttribute( $var5, $var7 );
unset( $var5 );
$var5 = $var6;
$var6 = compiledFetchAttribute( $var5, 'locale' );
unset( $var5 );
$var5 = $var6;
$var6 = compiledFetchAttribute( $var5, 'intl_language_name' );
unset( $var5 );
$var5 = $var6;
if (! isset( $var5 ) ) $var5 = NULL;
while ( is_object( $var5 ) and method_exists( $var5, 'templateValue' ) )
    $var5 = $var5->templateValue();
while ( is_object( $var5 ) and method_exists( $var5, 'templateValue' ) )
    $var5 = $var5->templateValue();
unset( $var7 );
unset( $var7 );
$var7 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'translation_list', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['translation_list'] : null;
unset( $var9 );
unset( $var9 );
$var9 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'language_index', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['language_index'] : null;
if (! isset( $var9 ) ) $var9 = NULL;
while ( is_object( $var9 ) and method_exists( $var9, 'templateValue' ) )
    $var9 = $var9->templateValue();
$var8 = compiledFetchAttribute( $var7, $var9 );
unset( $var7 );
$var7 = $var8;
$var8 = compiledFetchAttribute( $var7, 'language_code' );
unset( $var7 );
$var7 = $var8;
if (! isset( $var7 ) ) $var7 = NULL;
while ( is_object( $var7 ) and method_exists( $var7, 'templateValue' ) )
    $var7 = $var7->templateValue();
$var7Data = array( 'value' => $var7 );
$tpl->processOperator( 'flag_icon',
                       array (
),
                       $rootNamespace, $currentNamespace, $var7Data, false, false );
$var7 = $var7Data['value'];
unset( $var7Data );
if (! isset( $var7 ) ) $var7 = NULL;
while ( is_object( $var7 ) and method_exists( $var7, 'templateValue' ) )
    $var7 = $var7->templateValue();
while ( is_object( $var7 ) and method_exists( $var7, 'templateValue' ) )
    $var7 = $var7->templateValue();
unset( $var9 );
unset( $var9 );
$var9 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'translation_list', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['translation_list'] : null;
unset( $var11 );
unset( $var11 );
$var11 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'language_index', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['language_index'] : null;
if (! isset( $var11 ) ) $var11 = NULL;
while ( is_object( $var11 ) and method_exists( $var11, 'templateValue' ) )
    $var11 = $var11->templateValue();
$var10 = compiledFetchAttribute( $var9, $var11 );
unset( $var9 );
$var9 = $var10;
$var10 = compiledFetchAttribute( $var9, 'language_code' );
unset( $var9 );
$var9 = $var10;
if (! isset( $var9 ) ) $var9 = NULL;
while ( is_object( $var9 ) and method_exists( $var9, 'templateValue' ) )
    $var9 = $var9->templateValue();
while ( is_object( $var9 ) and method_exists( $var9, 'templateValue' ) )
    $var9 = $var9->templateValue();
$var4 = ( $var5 . '&nbsp;<img src="' . $var7 . '" style="vertical-align: middle;" alt="' . $var9 . '" />' );
unset( $var5, $var7, $var9 );
if (! isset( $var4 ) ) $var4 = NULL;
while ( is_object( $var4 ) and method_exists( $var4, 'templateValue' ) )
    $var4 = $var4->templateValue();
$var2 = array( '%from_lang' => $var3, '%to_lang' => $var4 );unset( $var3, $var4 );
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
$var = strtr( 'Traduction du contenu à partir de %from_lang vers %to_lang', $var3 );
unset( $var2, $var3, $var4, $var5 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= '

    ';
}
else
{
$text .= '
        ';
unset( $var );
unset( $var2 );
unset( $var3 );
unset( $var3 );
$var3 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'translation_list', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['translation_list'] : null;
unset( $var5 );
unset( $var5 );
$var5 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'language_index', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['language_index'] : null;
if (! isset( $var5 ) ) $var5 = NULL;
while ( is_object( $var5 ) and method_exists( $var5, 'templateValue' ) )
    $var5 = $var5->templateValue();
$var4 = compiledFetchAttribute( $var3, $var5 );
unset( $var3 );
$var3 = $var4;
$var4 = compiledFetchAttribute( $var3, 'locale' );
unset( $var3 );
$var3 = $var4;
$var4 = compiledFetchAttribute( $var3, 'intl_language_name' );
unset( $var3 );
$var3 = $var4;
if (! isset( $var3 ) ) $var3 = NULL;
while ( is_object( $var3 ) and method_exists( $var3, 'templateValue' ) )
    $var3 = $var3->templateValue();
$var2 = array( '%language' => $var3 );unset( $var3 );
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
$var = strtr( 'Contenu en %language', $var3 );
unset( $var2, $var3, $var4, $var5 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= '&nbsp;<img src="';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'translation_list', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['translation_list'] : null;
unset( $var2 );
unset( $var2 );
$var2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'language_index', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['language_index'] : null;
if (! isset( $var2 ) ) $var2 = NULL;
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
$var1 = compiledFetchAttribute( $var, $var2 );
unset( $var );
$var = $var1;
$var1 = compiledFetchAttribute( $var, 'language_code' );
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

$text .= '" style="vertical-align: middle;" alt="';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'translation_list', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['translation_list'] : null;
unset( $var2 );
unset( $var2 );
$var2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'language_index', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['language_index'] : null;
if (! isset( $var2 ) ) $var2 = NULL;
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
$var1 = compiledFetchAttribute( $var, $var2 );
unset( $var );
$var = $var1;
$var1 = compiledFetchAttribute( $var, 'language_code' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '" />

    ';
}
unset( $if_cond );
// if ends

$text .= '    </p>
    <div class="break"></div>
    </div>

    ';
$oldRestoreIncludeArray_786892c6f8163496521f8d93bc768de2 = isset( $restoreIncludeArray ) ? $restoreIncludeArray : array();
$restoreIncludeArray = array();

if ( !isset( $dKeys ) )
{
    $resH = $tpl->resourceHandler( "design" );
    $dKeys = $resH->keys();
}

$resourceFound = false;
if ( file_exists( 'var/ezwebin_site/cache/template/compiled/edit_validation-9796102e0344f3b5f6c2f0a8689ae084.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$rootNamespace = $currentNamespace;
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'design/standard/templates/content/edit_validation.tpl' );
include( '' . 'var/ezwebin_site/cache/template/compiled/edit_validation-9796102e0344f3b5f6c2f0a8689ae084.php' );
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
$tpl->processURI( 'design/standard/templates/content/edit_validation.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
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
$restoreIncludeArray = $oldRestoreIncludeArray_786892c6f8163496521f8d93bc768de2;

$text .= '
    ';
// if begins
unset( $if_cond );
unset( $if_cond );
$if_cond = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'is_translating_content', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['is_translating_content'] : null;
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '    <div class="content-translation">
    ';
}
unset( $if_cond );
// if ends

$text .= '
    ';
// foreach begins
$skipDelimiter = true;
if ( !isset( $fe_variable_stack_d34eacd4c3d9c9f01e8f04e516c244f5_2 ) ) $fe_variable_stack_d34eacd4c3d9c9f01e8f04e516c244f5_2 = array();
$fe_variable_stack_d34eacd4c3d9c9f01e8f04e516c244f5_2[] = compact( 'fe_array_d34eacd4c3d9c9f01e8f04e516c244f5_2', 'fe_array_keys_d34eacd4c3d9c9f01e8f04e516c244f5_2', 'fe_n_items_d34eacd4c3d9c9f01e8f04e516c244f5_2', 'fe_n_items_processed_d34eacd4c3d9c9f01e8f04e516c244f5_2', 'fe_i_d34eacd4c3d9c9f01e8f04e516c244f5_2', 'fe_key_d34eacd4c3d9c9f01e8f04e516c244f5_2', 'fe_val_d34eacd4c3d9c9f01e8f04e516c244f5_2', 'fe_offset_d34eacd4c3d9c9f01e8f04e516c244f5_2', 'fe_max_d34eacd4c3d9c9f01e8f04e516c244f5_2', 'fe_reverse_d34eacd4c3d9c9f01e8f04e516c244f5_2', 'fe_first_val_d34eacd4c3d9c9f01e8f04e516c244f5_2', 'fe_last_val_d34eacd4c3d9c9f01e8f04e516c244f5_2' );
$fe_array_d34eacd4c3d9c9f01e8f04e516c244f5_2 = array (
  0 => 'content/edit/autosave.tpl',
);
$fe_array_keys_d34eacd4c3d9c9f01e8f04e516c244f5_2 = is_array( $fe_array_d34eacd4c3d9c9f01e8f04e516c244f5_2 ) ? array_keys( $fe_array_d34eacd4c3d9c9f01e8f04e516c244f5_2 ) : array();
$fe_n_items_d34eacd4c3d9c9f01e8f04e516c244f5_2 = count( $fe_array_keys_d34eacd4c3d9c9f01e8f04e516c244f5_2 );
$fe_n_items_processed_d34eacd4c3d9c9f01e8f04e516c244f5_2 = 0;
$fe_offset_d34eacd4c3d9c9f01e8f04e516c244f5_2 = 0;
$fe_max_d34eacd4c3d9c9f01e8f04e516c244f5_2 = $fe_n_items_d34eacd4c3d9c9f01e8f04e516c244f5_2 - $fe_offset_d34eacd4c3d9c9f01e8f04e516c244f5_2;
$fe_reverse_d34eacd4c3d9c9f01e8f04e516c244f5_2 = false;
if ( $fe_offset_d34eacd4c3d9c9f01e8f04e516c244f5_2 < 0 || $fe_offset_d34eacd4c3d9c9f01e8f04e516c244f5_2 >= $fe_n_items_d34eacd4c3d9c9f01e8f04e516c244f5_2 )
{
    $fe_offset_d34eacd4c3d9c9f01e8f04e516c244f5_2 = ( $fe_offset_d34eacd4c3d9c9f01e8f04e516c244f5_2 < 0 ) ? 0 : $fe_n_items_d34eacd4c3d9c9f01e8f04e516c244f5_2;
    if ( $fe_n_items_d34eacd4c3d9c9f01e8f04e516c244f5_2 || $fe_offset_d34eacd4c3d9c9f01e8f04e516c244f5_2 < 0 )
 {
        eZDebug::writeWarning("Invalid 'offset' parameter specified: '$fe_offset_d34eacd4c3d9c9f01e8f04e516c244f5_2'. Array count: $fe_n_items_d34eacd4c3d9c9f01e8f04e516c244f5_2");   
}
}
if ( $fe_max_d34eacd4c3d9c9f01e8f04e516c244f5_2 < 0 || $fe_offset_d34eacd4c3d9c9f01e8f04e516c244f5_2 + $fe_max_d34eacd4c3d9c9f01e8f04e516c244f5_2 > $fe_n_items_d34eacd4c3d9c9f01e8f04e516c244f5_2 )
{
    if ( $fe_max_d34eacd4c3d9c9f01e8f04e516c244f5_2 < 0 )
 eZDebug::writeWarning("Invalid 'max' parameter specified: $fe_max_d34eacd4c3d9c9f01e8f04e516c244f5_2");
    $fe_max_d34eacd4c3d9c9f01e8f04e516c244f5_2 = $fe_n_items_d34eacd4c3d9c9f01e8f04e516c244f5_2 - $fe_offset_d34eacd4c3d9c9f01e8f04e516c244f5_2;
}
if ( $fe_reverse_d34eacd4c3d9c9f01e8f04e516c244f5_2 )
{
    $fe_first_val_d34eacd4c3d9c9f01e8f04e516c244f5_2 = $fe_n_items_d34eacd4c3d9c9f01e8f04e516c244f5_2 - 1 - $fe_offset_d34eacd4c3d9c9f01e8f04e516c244f5_2;
    $fe_last_val_d34eacd4c3d9c9f01e8f04e516c244f5_2  = 0;
}
else
{
    $fe_first_val_d34eacd4c3d9c9f01e8f04e516c244f5_2 = $fe_offset_d34eacd4c3d9c9f01e8f04e516c244f5_2;
    $fe_last_val_d34eacd4c3d9c9f01e8f04e516c244f5_2  = $fe_n_items_d34eacd4c3d9c9f01e8f04e516c244f5_2 - 1;
}
// foreach
for ( $fe_i_d34eacd4c3d9c9f01e8f04e516c244f5_2 = $fe_first_val_d34eacd4c3d9c9f01e8f04e516c244f5_2; $fe_n_items_processed_d34eacd4c3d9c9f01e8f04e516c244f5_2 < $fe_max_d34eacd4c3d9c9f01e8f04e516c244f5_2 && ( $fe_reverse_d34eacd4c3d9c9f01e8f04e516c244f5_2 ? $fe_i_d34eacd4c3d9c9f01e8f04e516c244f5_2 >= $fe_last_val_d34eacd4c3d9c9f01e8f04e516c244f5_2 : $fe_i_d34eacd4c3d9c9f01e8f04e516c244f5_2 <= $fe_last_val_d34eacd4c3d9c9f01e8f04e516c244f5_2 ); $fe_reverse_d34eacd4c3d9c9f01e8f04e516c244f5_2 ? $fe_i_d34eacd4c3d9c9f01e8f04e516c244f5_2-- : $fe_i_d34eacd4c3d9c9f01e8f04e516c244f5_2++ )
{
$fe_key_d34eacd4c3d9c9f01e8f04e516c244f5_2 = $fe_array_keys_d34eacd4c3d9c9f01e8f04e516c244f5_2[$fe_i_d34eacd4c3d9c9f01e8f04e516c244f5_2];
$fe_val_d34eacd4c3d9c9f01e8f04e516c244f5_2 = $fe_array_d34eacd4c3d9c9f01e8f04e516c244f5_2[$fe_key_d34eacd4c3d9c9f01e8f04e516c244f5_2];
$vars[$rootNamespace]['additional_tpl'] = $fe_val_d34eacd4c3d9c9f01e8f04e516c244f5_2;
$text .= '        ';
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
            1 => 'design:',
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
              2 => 'additional_tpl',
            ),
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
    0 => 61,
    1 => 8,
    2 => 2921,
  ),
  1 => 
  array (
    0 => 61,
    1 => 56,
    2 => 2969,
  ),
  2 => 'extension/ezwebin/design/ezwebin/templates/content/edit.tpl',
),
                       $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );

$text .= '    ';
$fe_n_items_processed_d34eacd4c3d9c9f01e8f04e516c244f5_2++;
} // foreach
$skipDelimiter = false;
if ( count( $fe_variable_stack_d34eacd4c3d9c9f01e8f04e516c244f5_2 ) ) extract( array_pop( $fe_variable_stack_d34eacd4c3d9c9f01e8f04e516c244f5_2 ) );

else
{

unset( $fe_array_d34eacd4c3d9c9f01e8f04e516c244f5_2 );

unset( $fe_array_keys_d34eacd4c3d9c9f01e8f04e516c244f5_2 );

unset( $fe_n_items_d34eacd4c3d9c9f01e8f04e516c244f5_2 );

unset( $fe_n_items_processed_d34eacd4c3d9c9f01e8f04e516c244f5_2 );

unset( $fe_i_d34eacd4c3d9c9f01e8f04e516c244f5_2 );

unset( $fe_key_d34eacd4c3d9c9f01e8f04e516c244f5_2 );

unset( $fe_val_d34eacd4c3d9c9f01e8f04e516c244f5_2 );

unset( $fe_offset_d34eacd4c3d9c9f01e8f04e516c244f5_2 );

unset( $fe_max_d34eacd4c3d9c9f01e8f04e516c244f5_2 );

unset( $fe_reverse_d34eacd4c3d9c9f01e8f04e516c244f5_2 );

unset( $fe_first_val_d34eacd4c3d9c9f01e8f04e516c244f5_2 );

unset( $fe_last_val_d34eacd4c3d9c9f01e8f04e516c244f5_2 );

unset( $fe_variable_stack_d34eacd4c3d9c9f01e8f04e516c244f5_2 );

}

// foreach ends
$text .= '
    <div class="context-attributes">
    ';
$oldRestoreIncludeArray_d66b0fc81e4871a806bbefa7dbf6dc37 = isset( $restoreIncludeArray ) ? $restoreIncludeArray : array();
$restoreIncludeArray = array();

if ( isset( $currentNamespace ) and isset( $vars[$currentNamespace]['view_parameters'] ) )
    $restoreIncludeArray[] = array( $currentNamespace, 'view_parameters', $vars[$currentNamespace]['view_parameters'] );
elseif ( !isset( $vars[( isset( $currentNamespace ) ? $currentNamespace : '' )]['view_parameters'] ) ) 
    $restoreIncludeArray[] = array( ( isset( $currentNamespace ) ? $currentNamespace : '' ), 'view_parameters', 'unset' );

unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'view_parameters', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['view_parameters'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$vars[$currentNamespace]['view_parameters'] = $var;
unset( $var );
if ( !isset( $dKeys ) )
{
    $resH = $tpl->resourceHandler( "design" );
    $dKeys = $resH->keys();
}

$resourceFound = false;
if ( file_exists( 'var/ezwebin_site/cache/template/compiled/edit_attribute-dfbd8392d86a4aa660796126ce74975a.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$rootNamespace = $currentNamespace;
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/ezwebin/design/ezwebin/templates/content/edit_attribute.tpl' );
include( '' . 'var/ezwebin_site/cache/template/compiled/edit_attribute-dfbd8392d86a4aa660796126ce74975a.php' );
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
$tpl->processURI( 'extension/ezwebin/design/ezwebin/templates/content/edit_attribute.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
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
$restoreIncludeArray = $oldRestoreIncludeArray_d66b0fc81e4871a806bbefa7dbf6dc37;

$text .= '    </div>

    ';
// if begins
unset( $if_cond );
unset( $if_cond );
$if_cond = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'is_translating_content', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['is_translating_content'] : null;
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '    </div>
    ';
}
unset( $if_cond );
// if ends

$text .= '
    <div class="buttonblock">
    <input class="defaultbutton" type="submit" name="PublishButton" value="Envoyer pour publication" title="Publier le contenu du brouillon en cours d\'édition. Le brouillon deviendra la version publiée de l\'objet." />
    <input class="button" type="submit" name="StoreButton" value="Stocker le brouillon" title="Enregistrer le contenu du brouillon en cours d\'édition et continuer l\'édition. Utiliser ce bouton pour sauvegarder régulièrement votre travail pendant la rédaction." />
    <input class="button" type="submit" name="StoreExitButton" value="Enregistrer le brouillon et quitter" title="Enregistrer le brouillon qui est édité et quitter le mode édition. A utiliser lorsque vous souhaitez quitter votre travail et poursuivre la rédaction plus tard." />
    <input class="button" type="submit" name="DiscardButton" value="Annuler le brouillon" title="Annuler le brouillon qui est en cours d\'édition. Cela supprimera aussi les traductions appartenant à ce brouillon (le cas échéant)." />
    <input type="hidden" name="DiscardConfirm" value="0" />
    <input type="hidden" name="RedirectIfDiscarded" value="';
// if begins
unset( $if_cond );
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();
$if_condData = array( 'value' => $if_cond );
$tpl->processOperator( 'ezhttp_hasvariable',
                       array (
  0 => 
  array (
    0 => 
    array (
      0 => 1,
      1 => 'LastAccessesURI',
      2 => false,
    ),
  ),
  1 => 
  array (
    0 => 
    array (
      0 => 1,
      1 => 'session',
      2 => false,
    ),
  ),
),
                       $rootNamespace, $currentNamespace, $if_condData, false, false );
$if_cond = $if_condData['value'];
unset( $if_condData );
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
unset( $var );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$varData = array( 'value' => $var );
$tpl->processOperator( 'ezhttp',
                       array (
  0 => 
  array (
    0 => 
    array (
      0 => 1,
      1 => 'LastAccessesURI',
      2 => false,
    ),
  ),
  1 => 
  array (
    0 => 
    array (
      0 => 1,
      1 => 'session',
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

}
unset( $if_cond );
// if ends

$text .= '" />
    <input type="hidden" name="RedirectURIAfterPublish" value="';
// if begins
unset( $if_cond );
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();
$if_condData = array( 'value' => $if_cond );
$tpl->processOperator( 'ezhttp_hasvariable',
                       array (
  0 => 
  array (
    0 => 
    array (
      0 => 1,
      1 => 'LastAccessesURI',
      2 => false,
    ),
  ),
  1 => 
  array (
    0 => 
    array (
      0 => 1,
      1 => 'session',
      2 => false,
    ),
  ),
),
                       $rootNamespace, $currentNamespace, $if_condData, false, false );
$if_cond = $if_condData['value'];
unset( $if_condData );
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
unset( $var );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$varData = array( 'value' => $var );
$tpl->processOperator( 'ezhttp',
                       array (
  0 => 
  array (
    0 => 
    array (
      0 => 1,
      1 => 'LastAccessesURI',
      2 => false,
    ),
  ),
  1 => 
  array (
    0 => 
    array (
      0 => 1,
      1 => 'session',
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

}
unset( $if_cond );
// if ends

$text .= '" />
    </div>
</div>

</div></div></div>
<div class="border-bl"><div class="border-br"><div class="border-bc"></div></div></div>
</div>

</form>
';

$setArray = $oldSetArray_97818beb7273fdfb984810916b37edb7;
$tpl->Level--;
?>
