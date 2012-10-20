<?php
// URI:       extension/ezwt/design/standard/templates/parts/website_toolbar_edit.tpl
// Filename:  extension/ezwt/design/standard/templates/parts/website_toolbar_edit.tpl
// Timestamp: 1350735748 (Sat Oct 20 12:22:28 UTC 2012)
$oldSetArray_df9487bdde30814494e60dcb95df65ce = isset( $setArray ) ? $setArray : array();
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
    0 => 2,
    1 => 96,
    2 => 199,
  ),
  2 => 'extension/ezwt/design/standard/templates/parts/website_toolbar_edit.tpl',
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
    0 => 2,
    1 => 96,
    2 => 199,
  ),
  2 => 'extension/ezwt/design/standard/templates/parts/website_toolbar_edit.tpl',
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

$text .= '
<!-- eZ website toolbar: START -->

<div id="ezwt">
<div id="ezwt-content" class="float-break">

<!-- eZ website toolbar content: START -->
';
$oldRestoreIncludeArray_2abe568e81a4cec92f0179f9f1ec06e8 = isset( $restoreIncludeArray ) ? $restoreIncludeArray : array();
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
$restoreIncludeArray = $oldRestoreIncludeArray_2abe568e81a4cec92f0179f9f1ec06e8;

$text .= '
<div id="ezwt-editaction" class="ezwt-actiongroup">
    <input class="defaultbutton" type="submit" name="PublishButton" value="Envoi pour publication" title="Publier le contenu du brouillon en court de modification. Ce brouillon sera la version publiée de l\'objet." />
    <input class="button" type="submit" name="StoreButton" value="Enregistrer le brouillon" title="Sauvegarder le contenu du brouillon qui est actuellement modifié et continuer la modification. Utilisez ce bouton périodiquement pour sauvegarder votre travail tout en le modifiant." />
    <input class="button" type="submit" name="StoreExitButton" value="Enregistrer le brouillon et quitter" title="Enregistrer le brouillon en cours de modification et quitter le mode modification. Utilisez ce bouton pour enregistrer votre travail pour revenir plus tard." />
    <input class="button" type="submit" name="DiscardButton" value="Annuler le brouillon" onclick="return window.confirmDiscard ? confirmDiscard( \'';
unset( $var );
$var = 'Voulez-vous vraiment supprimer le brouillon ?' ;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= '\' ): true;" title="Supprimer le brouillon actuellement modifié. Cette action supprimera aussi les traductions qui appartiennent au brouillon (si elles existent)." />
</div>

<div id="ezwt-versionaction" class="ezwt-actiongroup">
    <input class="ezwt-input-image" type="image" src="/ezpublish/app/ezpublish_legacy/extension/ezwt/design/standard/images/websitetoolbar/ezwt-icon-versions.png" name="VersionsButton" title="Gérer les versions" />
    <input class="ezwt-input-image" type="image" src="/ezpublish/app/ezpublish_legacy/extension/ezwt/design/standard/images/websitetoolbar/ezwt-icon-preview.png" name="PreviewButton" title="Prévisualisation" />
';
// if begins
unset( $if_cond );
unset( $if_cond1 );
unset( $if_cond1 );
$if_cond1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'object', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['object'] : null;
$if_cond2 = compiledFetchAttribute( $if_cond1, 'status' );
unset( $if_cond1 );
$if_cond1 = $if_cond2;
if (! isset( $if_cond1 ) ) $if_cond1 = NULL;
while ( is_object( $if_cond1 ) and method_exists( $if_cond1, 'templateValue' ) )
    $if_cond1 = $if_cond1->templateValue();
$if_cond = ( ( $if_cond1 ) == ( 0 ) );
unset( $if_cond1 );
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '    <select name="FromLanguage" class="disabled" disabled="disabled">
    <option value=""';
// if begins
unset( $if_cond );
unset( $if_cond1 );
unset( $if_cond1 );
$if_cond1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'from_language', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['from_language'] : null;
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
$text .= ' selected="selected"';
}
unset( $if_cond );
// if ends

$text .= '> Traduire de</option>
    </select>
    <input class="ezwt-input-image disabled" disabled="disabled" type="image" src="/ezpublish/app/ezpublish_legacy/extension/ezwt/design/standard/images/websitetoolbar/ezwt-icon-translation-disabled.png" name="FromLanguageButton" title="Traduire" />';
}
else
{
$text .= '    <select name="FromLanguage">
    <option value=""';
// if begins
unset( $if_cond );
unset( $if_cond1 );
unset( $if_cond1 );
$if_cond1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'from_language', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['from_language'] : null;
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
$text .= ' selected="selected"';
}
unset( $if_cond );
// if ends

$text .= '> Traduire de</option>

    ';
// foreach begins
$skipDelimiter = true;
if ( !isset( $fe_variable_stack_f9b57d79a29be2bcab3e40648a2de92c_3 ) ) $fe_variable_stack_f9b57d79a29be2bcab3e40648a2de92c_3 = array();
$fe_variable_stack_f9b57d79a29be2bcab3e40648a2de92c_3[] = compact( 'fe_array_f9b57d79a29be2bcab3e40648a2de92c_3', 'fe_array_keys_f9b57d79a29be2bcab3e40648a2de92c_3', 'fe_n_items_f9b57d79a29be2bcab3e40648a2de92c_3', 'fe_n_items_processed_f9b57d79a29be2bcab3e40648a2de92c_3', 'fe_i_f9b57d79a29be2bcab3e40648a2de92c_3', 'fe_key_f9b57d79a29be2bcab3e40648a2de92c_3', 'fe_val_f9b57d79a29be2bcab3e40648a2de92c_3', 'fe_offset_f9b57d79a29be2bcab3e40648a2de92c_3', 'fe_max_f9b57d79a29be2bcab3e40648a2de92c_3', 'fe_reverse_f9b57d79a29be2bcab3e40648a2de92c_3', 'fe_first_val_f9b57d79a29be2bcab3e40648a2de92c_3', 'fe_last_val_f9b57d79a29be2bcab3e40648a2de92c_3' );
unset( $fe_array_f9b57d79a29be2bcab3e40648a2de92c_3 );
unset( $fe_array_f9b57d79a29be2bcab3e40648a2de92c_3 );
$fe_array_f9b57d79a29be2bcab3e40648a2de92c_3 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'object', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['object'] : null;
$fe_array_f9b57d79a29be2bcab3e40648a2de92c_31 = compiledFetchAttribute( $fe_array_f9b57d79a29be2bcab3e40648a2de92c_3, 'languages' );
unset( $fe_array_f9b57d79a29be2bcab3e40648a2de92c_3 );
$fe_array_f9b57d79a29be2bcab3e40648a2de92c_3 = $fe_array_f9b57d79a29be2bcab3e40648a2de92c_31;
if (! isset( $fe_array_f9b57d79a29be2bcab3e40648a2de92c_3 ) ) $fe_array_f9b57d79a29be2bcab3e40648a2de92c_3 = NULL;
while ( is_object( $fe_array_f9b57d79a29be2bcab3e40648a2de92c_3 ) and method_exists( $fe_array_f9b57d79a29be2bcab3e40648a2de92c_3, 'templateValue' ) )
    $fe_array_f9b57d79a29be2bcab3e40648a2de92c_3 = $fe_array_f9b57d79a29be2bcab3e40648a2de92c_3->templateValue();

$fe_array_keys_f9b57d79a29be2bcab3e40648a2de92c_3 = is_array( $fe_array_f9b57d79a29be2bcab3e40648a2de92c_3 ) ? array_keys( $fe_array_f9b57d79a29be2bcab3e40648a2de92c_3 ) : array();
$fe_n_items_f9b57d79a29be2bcab3e40648a2de92c_3 = count( $fe_array_keys_f9b57d79a29be2bcab3e40648a2de92c_3 );
$fe_n_items_processed_f9b57d79a29be2bcab3e40648a2de92c_3 = 0;
$fe_offset_f9b57d79a29be2bcab3e40648a2de92c_3 = 0;
$fe_max_f9b57d79a29be2bcab3e40648a2de92c_3 = $fe_n_items_f9b57d79a29be2bcab3e40648a2de92c_3 - $fe_offset_f9b57d79a29be2bcab3e40648a2de92c_3;
$fe_reverse_f9b57d79a29be2bcab3e40648a2de92c_3 = false;
if ( $fe_offset_f9b57d79a29be2bcab3e40648a2de92c_3 < 0 || $fe_offset_f9b57d79a29be2bcab3e40648a2de92c_3 >= $fe_n_items_f9b57d79a29be2bcab3e40648a2de92c_3 )
{
    $fe_offset_f9b57d79a29be2bcab3e40648a2de92c_3 = ( $fe_offset_f9b57d79a29be2bcab3e40648a2de92c_3 < 0 ) ? 0 : $fe_n_items_f9b57d79a29be2bcab3e40648a2de92c_3;
    if ( $fe_n_items_f9b57d79a29be2bcab3e40648a2de92c_3 || $fe_offset_f9b57d79a29be2bcab3e40648a2de92c_3 < 0 )
 {
        eZDebug::writeWarning("Invalid 'offset' parameter specified: '$fe_offset_f9b57d79a29be2bcab3e40648a2de92c_3'. Array count: $fe_n_items_f9b57d79a29be2bcab3e40648a2de92c_3");   
}
}
if ( $fe_max_f9b57d79a29be2bcab3e40648a2de92c_3 < 0 || $fe_offset_f9b57d79a29be2bcab3e40648a2de92c_3 + $fe_max_f9b57d79a29be2bcab3e40648a2de92c_3 > $fe_n_items_f9b57d79a29be2bcab3e40648a2de92c_3 )
{
    if ( $fe_max_f9b57d79a29be2bcab3e40648a2de92c_3 < 0 )
 eZDebug::writeWarning("Invalid 'max' parameter specified: $fe_max_f9b57d79a29be2bcab3e40648a2de92c_3");
    $fe_max_f9b57d79a29be2bcab3e40648a2de92c_3 = $fe_n_items_f9b57d79a29be2bcab3e40648a2de92c_3 - $fe_offset_f9b57d79a29be2bcab3e40648a2de92c_3;
}
if ( $fe_reverse_f9b57d79a29be2bcab3e40648a2de92c_3 )
{
    $fe_first_val_f9b57d79a29be2bcab3e40648a2de92c_3 = $fe_n_items_f9b57d79a29be2bcab3e40648a2de92c_3 - 1 - $fe_offset_f9b57d79a29be2bcab3e40648a2de92c_3;
    $fe_last_val_f9b57d79a29be2bcab3e40648a2de92c_3  = 0;
}
else
{
    $fe_first_val_f9b57d79a29be2bcab3e40648a2de92c_3 = $fe_offset_f9b57d79a29be2bcab3e40648a2de92c_3;
    $fe_last_val_f9b57d79a29be2bcab3e40648a2de92c_3  = $fe_n_items_f9b57d79a29be2bcab3e40648a2de92c_3 - 1;
}
// foreach
for ( $fe_i_f9b57d79a29be2bcab3e40648a2de92c_3 = $fe_first_val_f9b57d79a29be2bcab3e40648a2de92c_3; $fe_n_items_processed_f9b57d79a29be2bcab3e40648a2de92c_3 < $fe_max_f9b57d79a29be2bcab3e40648a2de92c_3 && ( $fe_reverse_f9b57d79a29be2bcab3e40648a2de92c_3 ? $fe_i_f9b57d79a29be2bcab3e40648a2de92c_3 >= $fe_last_val_f9b57d79a29be2bcab3e40648a2de92c_3 : $fe_i_f9b57d79a29be2bcab3e40648a2de92c_3 <= $fe_last_val_f9b57d79a29be2bcab3e40648a2de92c_3 ); $fe_reverse_f9b57d79a29be2bcab3e40648a2de92c_3 ? $fe_i_f9b57d79a29be2bcab3e40648a2de92c_3-- : $fe_i_f9b57d79a29be2bcab3e40648a2de92c_3++ )
{
$fe_key_f9b57d79a29be2bcab3e40648a2de92c_3 = $fe_array_keys_f9b57d79a29be2bcab3e40648a2de92c_3[$fe_i_f9b57d79a29be2bcab3e40648a2de92c_3];
$fe_val_f9b57d79a29be2bcab3e40648a2de92c_3 = $fe_array_f9b57d79a29be2bcab3e40648a2de92c_3[$fe_key_f9b57d79a29be2bcab3e40648a2de92c_3];
$vars[$rootNamespace]['lang'] = $fe_val_f9b57d79a29be2bcab3e40648a2de92c_3;
$text .= '    <option value="';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'lang', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['lang'] : null;
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
$if_cond1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'lang', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['lang'] : null;
$if_cond2 = compiledFetchAttribute( $if_cond1, 'locale' );
unset( $if_cond1 );
$if_cond1 = $if_cond2;
if (! isset( $if_cond1 ) ) $if_cond1 = NULL;
while ( is_object( $if_cond1 ) and method_exists( $if_cond1, 'templateValue' ) )
    $if_cond1 = $if_cond1->templateValue();
unset( $if_cond2 );
unset( $if_cond2 );
$if_cond2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'from_language', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['from_language'] : null;
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

$text .= '>
    ';
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'lang', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['lang'] : null;
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

$text .= '
    </option>
    ';
$fe_n_items_processed_f9b57d79a29be2bcab3e40648a2de92c_3++;
} // foreach
$skipDelimiter = false;
if ( count( $fe_variable_stack_f9b57d79a29be2bcab3e40648a2de92c_3 ) ) extract( array_pop( $fe_variable_stack_f9b57d79a29be2bcab3e40648a2de92c_3 ) );

else
{

unset( $fe_array_f9b57d79a29be2bcab3e40648a2de92c_3 );

unset( $fe_array_keys_f9b57d79a29be2bcab3e40648a2de92c_3 );

unset( $fe_n_items_f9b57d79a29be2bcab3e40648a2de92c_3 );

unset( $fe_n_items_processed_f9b57d79a29be2bcab3e40648a2de92c_3 );

unset( $fe_i_f9b57d79a29be2bcab3e40648a2de92c_3 );

unset( $fe_key_f9b57d79a29be2bcab3e40648a2de92c_3 );

unset( $fe_val_f9b57d79a29be2bcab3e40648a2de92c_3 );

unset( $fe_offset_f9b57d79a29be2bcab3e40648a2de92c_3 );

unset( $fe_max_f9b57d79a29be2bcab3e40648a2de92c_3 );

unset( $fe_reverse_f9b57d79a29be2bcab3e40648a2de92c_3 );

unset( $fe_first_val_f9b57d79a29be2bcab3e40648a2de92c_3 );

unset( $fe_last_val_f9b57d79a29be2bcab3e40648a2de92c_3 );

unset( $fe_variable_stack_f9b57d79a29be2bcab3e40648a2de92c_3 );

}

// foreach ends
$text .= '    </select>
    <input class="ezwt-input-image" type="image" src="/ezpublish/app/ezpublish_legacy/extension/ezwt/design/standard/images/websitetoolbar/ezwt-icon-translation.png" name="FromLanguageButton" title="Traduire" />';
}
unset( $if_cond );
// if ends

$text .= '</div>


';
// def $custom_view_templates
if ( $tpl->hasVariable( 'custom_view_templates', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'custom_view_templates' is already defined.", array (
  0 => 
  array (
    0 => 45,
    1 => 0,
    2 => 3401,
  ),
  1 => 
  array (
    0 => 45,
    1 => 36,
    2 => 3437,
  ),
  2 => 'extension/ezwt/design/standard/templates/parts/website_toolbar_edit.tpl',
) );
    $tpl->setVariable( 'custom_view_templates', array (
), $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'custom_view_templates', array (
), $rootNamespace );
}

// foreach begins
$skipDelimiter = true;
if ( !isset( $fe_variable_stack_f9b57d79a29be2bcab3e40648a2de92c_4 ) ) $fe_variable_stack_f9b57d79a29be2bcab3e40648a2de92c_4 = array();
$fe_variable_stack_f9b57d79a29be2bcab3e40648a2de92c_4[] = compact( 'fe_array_f9b57d79a29be2bcab3e40648a2de92c_4', 'fe_array_keys_f9b57d79a29be2bcab3e40648a2de92c_4', 'fe_n_items_f9b57d79a29be2bcab3e40648a2de92c_4', 'fe_n_items_processed_f9b57d79a29be2bcab3e40648a2de92c_4', 'fe_i_f9b57d79a29be2bcab3e40648a2de92c_4', 'fe_key_f9b57d79a29be2bcab3e40648a2de92c_4', 'fe_val_f9b57d79a29be2bcab3e40648a2de92c_4', 'fe_offset_f9b57d79a29be2bcab3e40648a2de92c_4', 'fe_max_f9b57d79a29be2bcab3e40648a2de92c_4', 'fe_reverse_f9b57d79a29be2bcab3e40648a2de92c_4', 'fe_first_val_f9b57d79a29be2bcab3e40648a2de92c_4', 'fe_last_val_f9b57d79a29be2bcab3e40648a2de92c_4' );
unset( $fe_array_f9b57d79a29be2bcab3e40648a2de92c_4 );
unset( $fe_array_f9b57d79a29be2bcab3e40648a2de92c_4 );
$fe_array_f9b57d79a29be2bcab3e40648a2de92c_4 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'custom_templates', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['custom_templates'] : null;
if (! isset( $fe_array_f9b57d79a29be2bcab3e40648a2de92c_4 ) ) $fe_array_f9b57d79a29be2bcab3e40648a2de92c_4 = NULL;
while ( is_object( $fe_array_f9b57d79a29be2bcab3e40648a2de92c_4 ) and method_exists( $fe_array_f9b57d79a29be2bcab3e40648a2de92c_4, 'templateValue' ) )
    $fe_array_f9b57d79a29be2bcab3e40648a2de92c_4 = $fe_array_f9b57d79a29be2bcab3e40648a2de92c_4->templateValue();

$fe_array_keys_f9b57d79a29be2bcab3e40648a2de92c_4 = is_array( $fe_array_f9b57d79a29be2bcab3e40648a2de92c_4 ) ? array_keys( $fe_array_f9b57d79a29be2bcab3e40648a2de92c_4 ) : array();
$fe_n_items_f9b57d79a29be2bcab3e40648a2de92c_4 = count( $fe_array_keys_f9b57d79a29be2bcab3e40648a2de92c_4 );
$fe_n_items_processed_f9b57d79a29be2bcab3e40648a2de92c_4 = 0;
$fe_offset_f9b57d79a29be2bcab3e40648a2de92c_4 = 0;
$fe_max_f9b57d79a29be2bcab3e40648a2de92c_4 = $fe_n_items_f9b57d79a29be2bcab3e40648a2de92c_4 - $fe_offset_f9b57d79a29be2bcab3e40648a2de92c_4;
$fe_reverse_f9b57d79a29be2bcab3e40648a2de92c_4 = false;
if ( $fe_offset_f9b57d79a29be2bcab3e40648a2de92c_4 < 0 || $fe_offset_f9b57d79a29be2bcab3e40648a2de92c_4 >= $fe_n_items_f9b57d79a29be2bcab3e40648a2de92c_4 )
{
    $fe_offset_f9b57d79a29be2bcab3e40648a2de92c_4 = ( $fe_offset_f9b57d79a29be2bcab3e40648a2de92c_4 < 0 ) ? 0 : $fe_n_items_f9b57d79a29be2bcab3e40648a2de92c_4;
    if ( $fe_n_items_f9b57d79a29be2bcab3e40648a2de92c_4 || $fe_offset_f9b57d79a29be2bcab3e40648a2de92c_4 < 0 )
 {
        eZDebug::writeWarning("Invalid 'offset' parameter specified: '$fe_offset_f9b57d79a29be2bcab3e40648a2de92c_4'. Array count: $fe_n_items_f9b57d79a29be2bcab3e40648a2de92c_4");   
}
}
if ( $fe_max_f9b57d79a29be2bcab3e40648a2de92c_4 < 0 || $fe_offset_f9b57d79a29be2bcab3e40648a2de92c_4 + $fe_max_f9b57d79a29be2bcab3e40648a2de92c_4 > $fe_n_items_f9b57d79a29be2bcab3e40648a2de92c_4 )
{
    if ( $fe_max_f9b57d79a29be2bcab3e40648a2de92c_4 < 0 )
 eZDebug::writeWarning("Invalid 'max' parameter specified: $fe_max_f9b57d79a29be2bcab3e40648a2de92c_4");
    $fe_max_f9b57d79a29be2bcab3e40648a2de92c_4 = $fe_n_items_f9b57d79a29be2bcab3e40648a2de92c_4 - $fe_offset_f9b57d79a29be2bcab3e40648a2de92c_4;
}
if ( $fe_reverse_f9b57d79a29be2bcab3e40648a2de92c_4 )
{
    $fe_first_val_f9b57d79a29be2bcab3e40648a2de92c_4 = $fe_n_items_f9b57d79a29be2bcab3e40648a2de92c_4 - 1 - $fe_offset_f9b57d79a29be2bcab3e40648a2de92c_4;
    $fe_last_val_f9b57d79a29be2bcab3e40648a2de92c_4  = 0;
}
else
{
    $fe_first_val_f9b57d79a29be2bcab3e40648a2de92c_4 = $fe_offset_f9b57d79a29be2bcab3e40648a2de92c_4;
    $fe_last_val_f9b57d79a29be2bcab3e40648a2de92c_4  = $fe_n_items_f9b57d79a29be2bcab3e40648a2de92c_4 - 1;
}
// foreach
for ( $fe_i_f9b57d79a29be2bcab3e40648a2de92c_4 = $fe_first_val_f9b57d79a29be2bcab3e40648a2de92c_4; $fe_n_items_processed_f9b57d79a29be2bcab3e40648a2de92c_4 < $fe_max_f9b57d79a29be2bcab3e40648a2de92c_4 && ( $fe_reverse_f9b57d79a29be2bcab3e40648a2de92c_4 ? $fe_i_f9b57d79a29be2bcab3e40648a2de92c_4 >= $fe_last_val_f9b57d79a29be2bcab3e40648a2de92c_4 : $fe_i_f9b57d79a29be2bcab3e40648a2de92c_4 <= $fe_last_val_f9b57d79a29be2bcab3e40648a2de92c_4 ); $fe_reverse_f9b57d79a29be2bcab3e40648a2de92c_4 ? $fe_i_f9b57d79a29be2bcab3e40648a2de92c_4-- : $fe_i_f9b57d79a29be2bcab3e40648a2de92c_4++ )
{
$fe_key_f9b57d79a29be2bcab3e40648a2de92c_4 = $fe_array_keys_f9b57d79a29be2bcab3e40648a2de92c_4[$fe_i_f9b57d79a29be2bcab3e40648a2de92c_4];
$fe_val_f9b57d79a29be2bcab3e40648a2de92c_4 = $fe_array_f9b57d79a29be2bcab3e40648a2de92c_4[$fe_key_f9b57d79a29be2bcab3e40648a2de92c_4];
$vars[$rootNamespace]['custom_template'] = $fe_val_f9b57d79a29be2bcab3e40648a2de92c_4;
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
    0 => 48,
    1 => 8,
    2 => 3550,
  ),
  1 => 
  array (
    0 => 48,
    1 => 70,
    2 => 3612,
  ),
  2 => 'extension/ezwt/design/standard/templates/parts/website_toolbar_edit.tpl',
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
  $if_cond = ( strpos( $if_cond1, "edit" ) !== false );
}
else if ( is_array( $if_cond1 ) )
{
  $if_cond = in_array( "edit", $if_cond1 );
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
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'custom_template', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['custom_template'] : null;
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
unset( $var2 );
unset( $var2 );
$var2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'custom_view_templates', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['custom_view_templates'] : null;
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
if ( array_key_exists( $currentNamespace, $vars ) && array_key_exists( 'custom_view_templates', $vars[$currentNamespace] ) )
{
    $vars[$currentNamespace]['custom_view_templates'] = $var;
    unset( $var );
}
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

$fe_n_items_processed_f9b57d79a29be2bcab3e40648a2de92c_4++;
} // foreach
$skipDelimiter = false;
if ( count( $fe_variable_stack_f9b57d79a29be2bcab3e40648a2de92c_4 ) ) extract( array_pop( $fe_variable_stack_f9b57d79a29be2bcab3e40648a2de92c_4 ) );

else
{

unset( $fe_array_f9b57d79a29be2bcab3e40648a2de92c_4 );

unset( $fe_array_keys_f9b57d79a29be2bcab3e40648a2de92c_4 );

unset( $fe_n_items_f9b57d79a29be2bcab3e40648a2de92c_4 );

unset( $fe_n_items_processed_f9b57d79a29be2bcab3e40648a2de92c_4 );

unset( $fe_i_f9b57d79a29be2bcab3e40648a2de92c_4 );

unset( $fe_key_f9b57d79a29be2bcab3e40648a2de92c_4 );

unset( $fe_val_f9b57d79a29be2bcab3e40648a2de92c_4 );

unset( $fe_offset_f9b57d79a29be2bcab3e40648a2de92c_4 );

unset( $fe_max_f9b57d79a29be2bcab3e40648a2de92c_4 );

unset( $fe_reverse_f9b57d79a29be2bcab3e40648a2de92c_4 );

unset( $fe_first_val_f9b57d79a29be2bcab3e40648a2de92c_4 );

unset( $fe_last_val_f9b57d79a29be2bcab3e40648a2de92c_4 );

unset( $fe_variable_stack_f9b57d79a29be2bcab3e40648a2de92c_4 );

}

// foreach ends
// if begins
unset( $if_cond );
unset( $if_cond );
$if_cond = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'custom_view_templates', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['custom_view_templates'] : null;
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '<div id="ezwt-miscaction" class="ezwt-actiongroup">';
// foreach begins
$skipDelimiter = true;
if ( !isset( $fe_variable_stack_f9b57d79a29be2bcab3e40648a2de92c_5 ) ) $fe_variable_stack_f9b57d79a29be2bcab3e40648a2de92c_5 = array();
$fe_variable_stack_f9b57d79a29be2bcab3e40648a2de92c_5[] = compact( 'fe_array_f9b57d79a29be2bcab3e40648a2de92c_5', 'fe_array_keys_f9b57d79a29be2bcab3e40648a2de92c_5', 'fe_n_items_f9b57d79a29be2bcab3e40648a2de92c_5', 'fe_n_items_processed_f9b57d79a29be2bcab3e40648a2de92c_5', 'fe_i_f9b57d79a29be2bcab3e40648a2de92c_5', 'fe_key_f9b57d79a29be2bcab3e40648a2de92c_5', 'fe_val_f9b57d79a29be2bcab3e40648a2de92c_5', 'fe_offset_f9b57d79a29be2bcab3e40648a2de92c_5', 'fe_max_f9b57d79a29be2bcab3e40648a2de92c_5', 'fe_reverse_f9b57d79a29be2bcab3e40648a2de92c_5', 'fe_first_val_f9b57d79a29be2bcab3e40648a2de92c_5', 'fe_last_val_f9b57d79a29be2bcab3e40648a2de92c_5' );
unset( $fe_array_f9b57d79a29be2bcab3e40648a2de92c_5 );
unset( $fe_array_f9b57d79a29be2bcab3e40648a2de92c_5 );
$fe_array_f9b57d79a29be2bcab3e40648a2de92c_5 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'custom_view_templates', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['custom_view_templates'] : null;
if (! isset( $fe_array_f9b57d79a29be2bcab3e40648a2de92c_5 ) ) $fe_array_f9b57d79a29be2bcab3e40648a2de92c_5 = NULL;
while ( is_object( $fe_array_f9b57d79a29be2bcab3e40648a2de92c_5 ) and method_exists( $fe_array_f9b57d79a29be2bcab3e40648a2de92c_5, 'templateValue' ) )
    $fe_array_f9b57d79a29be2bcab3e40648a2de92c_5 = $fe_array_f9b57d79a29be2bcab3e40648a2de92c_5->templateValue();

$fe_array_keys_f9b57d79a29be2bcab3e40648a2de92c_5 = is_array( $fe_array_f9b57d79a29be2bcab3e40648a2de92c_5 ) ? array_keys( $fe_array_f9b57d79a29be2bcab3e40648a2de92c_5 ) : array();
$fe_n_items_f9b57d79a29be2bcab3e40648a2de92c_5 = count( $fe_array_keys_f9b57d79a29be2bcab3e40648a2de92c_5 );
$fe_n_items_processed_f9b57d79a29be2bcab3e40648a2de92c_5 = 0;
$fe_offset_f9b57d79a29be2bcab3e40648a2de92c_5 = 0;
$fe_max_f9b57d79a29be2bcab3e40648a2de92c_5 = $fe_n_items_f9b57d79a29be2bcab3e40648a2de92c_5 - $fe_offset_f9b57d79a29be2bcab3e40648a2de92c_5;
$fe_reverse_f9b57d79a29be2bcab3e40648a2de92c_5 = false;
if ( $fe_offset_f9b57d79a29be2bcab3e40648a2de92c_5 < 0 || $fe_offset_f9b57d79a29be2bcab3e40648a2de92c_5 >= $fe_n_items_f9b57d79a29be2bcab3e40648a2de92c_5 )
{
    $fe_offset_f9b57d79a29be2bcab3e40648a2de92c_5 = ( $fe_offset_f9b57d79a29be2bcab3e40648a2de92c_5 < 0 ) ? 0 : $fe_n_items_f9b57d79a29be2bcab3e40648a2de92c_5;
    if ( $fe_n_items_f9b57d79a29be2bcab3e40648a2de92c_5 || $fe_offset_f9b57d79a29be2bcab3e40648a2de92c_5 < 0 )
 {
        eZDebug::writeWarning("Invalid 'offset' parameter specified: '$fe_offset_f9b57d79a29be2bcab3e40648a2de92c_5'. Array count: $fe_n_items_f9b57d79a29be2bcab3e40648a2de92c_5");   
}
}
if ( $fe_max_f9b57d79a29be2bcab3e40648a2de92c_5 < 0 || $fe_offset_f9b57d79a29be2bcab3e40648a2de92c_5 + $fe_max_f9b57d79a29be2bcab3e40648a2de92c_5 > $fe_n_items_f9b57d79a29be2bcab3e40648a2de92c_5 )
{
    if ( $fe_max_f9b57d79a29be2bcab3e40648a2de92c_5 < 0 )
 eZDebug::writeWarning("Invalid 'max' parameter specified: $fe_max_f9b57d79a29be2bcab3e40648a2de92c_5");
    $fe_max_f9b57d79a29be2bcab3e40648a2de92c_5 = $fe_n_items_f9b57d79a29be2bcab3e40648a2de92c_5 - $fe_offset_f9b57d79a29be2bcab3e40648a2de92c_5;
}
if ( $fe_reverse_f9b57d79a29be2bcab3e40648a2de92c_5 )
{
    $fe_first_val_f9b57d79a29be2bcab3e40648a2de92c_5 = $fe_n_items_f9b57d79a29be2bcab3e40648a2de92c_5 - 1 - $fe_offset_f9b57d79a29be2bcab3e40648a2de92c_5;
    $fe_last_val_f9b57d79a29be2bcab3e40648a2de92c_5  = 0;
}
else
{
    $fe_first_val_f9b57d79a29be2bcab3e40648a2de92c_5 = $fe_offset_f9b57d79a29be2bcab3e40648a2de92c_5;
    $fe_last_val_f9b57d79a29be2bcab3e40648a2de92c_5  = $fe_n_items_f9b57d79a29be2bcab3e40648a2de92c_5 - 1;
}
// foreach
for ( $fe_i_f9b57d79a29be2bcab3e40648a2de92c_5 = $fe_first_val_f9b57d79a29be2bcab3e40648a2de92c_5; $fe_n_items_processed_f9b57d79a29be2bcab3e40648a2de92c_5 < $fe_max_f9b57d79a29be2bcab3e40648a2de92c_5 && ( $fe_reverse_f9b57d79a29be2bcab3e40648a2de92c_5 ? $fe_i_f9b57d79a29be2bcab3e40648a2de92c_5 >= $fe_last_val_f9b57d79a29be2bcab3e40648a2de92c_5 : $fe_i_f9b57d79a29be2bcab3e40648a2de92c_5 <= $fe_last_val_f9b57d79a29be2bcab3e40648a2de92c_5 ); $fe_reverse_f9b57d79a29be2bcab3e40648a2de92c_5 ? $fe_i_f9b57d79a29be2bcab3e40648a2de92c_5-- : $fe_i_f9b57d79a29be2bcab3e40648a2de92c_5++ )
{
$fe_key_f9b57d79a29be2bcab3e40648a2de92c_5 = $fe_array_keys_f9b57d79a29be2bcab3e40648a2de92c_5[$fe_i_f9b57d79a29be2bcab3e40648a2de92c_5];
$fe_val_f9b57d79a29be2bcab3e40648a2de92c_5 = $fe_array_f9b57d79a29be2bcab3e40648a2de92c_5[$fe_key_f9b57d79a29be2bcab3e40648a2de92c_5];
$vars[$rootNamespace]['custom_template'] = $fe_val_f9b57d79a29be2bcab3e40648a2de92c_5;
$text .= '    ';
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
    0 => 59,
    1 => 4,
    2 => 3943,
  ),
  1 => 
  array (
    0 => 59,
    1 => 82,
    2 => 4021,
  ),
  2 => 'extension/ezwt/design/standard/templates/parts/website_toolbar_edit.tpl',
),
                       $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );

$fe_n_items_processed_f9b57d79a29be2bcab3e40648a2de92c_5++;
} // foreach
$skipDelimiter = false;
if ( count( $fe_variable_stack_f9b57d79a29be2bcab3e40648a2de92c_5 ) ) extract( array_pop( $fe_variable_stack_f9b57d79a29be2bcab3e40648a2de92c_5 ) );

else
{

unset( $fe_array_f9b57d79a29be2bcab3e40648a2de92c_5 );

unset( $fe_array_keys_f9b57d79a29be2bcab3e40648a2de92c_5 );

unset( $fe_n_items_f9b57d79a29be2bcab3e40648a2de92c_5 );

unset( $fe_n_items_processed_f9b57d79a29be2bcab3e40648a2de92c_5 );

unset( $fe_i_f9b57d79a29be2bcab3e40648a2de92c_5 );

unset( $fe_key_f9b57d79a29be2bcab3e40648a2de92c_5 );

unset( $fe_val_f9b57d79a29be2bcab3e40648a2de92c_5 );

unset( $fe_offset_f9b57d79a29be2bcab3e40648a2de92c_5 );

unset( $fe_max_f9b57d79a29be2bcab3e40648a2de92c_5 );

unset( $fe_reverse_f9b57d79a29be2bcab3e40648a2de92c_5 );

unset( $fe_first_val_f9b57d79a29be2bcab3e40648a2de92c_5 );

unset( $fe_last_val_f9b57d79a29be2bcab3e40648a2de92c_5 );

unset( $fe_variable_stack_f9b57d79a29be2bcab3e40648a2de92c_5 );

}

// foreach ends
$text .= '</div>';
}
unset( $if_cond );
// if ends

$oldRestoreIncludeArray_aea210f0f088e6469d644275bf3bfe4a = isset( $restoreIncludeArray ) ? $restoreIncludeArray : array();
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
$restoreIncludeArray = $oldRestoreIncludeArray_aea210f0f088e6469d644275bf3bfe4a;

$text .= '
<!-- eZ website toolbar content: END -->

</div>
</div>
';
$oldRestoreIncludeArray_d9fae8ff0cf3d23e9e4b1055de62cb55 = isset( $restoreIncludeArray ) ? $restoreIncludeArray : array();
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
$restoreIncludeArray = $oldRestoreIncludeArray_d9fae8ff0cf3d23e9e4b1055de62cb55;

$text .= '
<!-- eZ website toolbar: END -->';

$setArray = $oldSetArray_df9487bdde30814494e60dcb95df65ce;
$tpl->Level--;
?>
