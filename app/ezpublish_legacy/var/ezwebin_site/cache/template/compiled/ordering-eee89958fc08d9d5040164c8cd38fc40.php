<?php
// URI:       design/admin/templates/ordering.tpl
// Filename:  design/admin/templates/ordering.tpl
// Timestamp: 1349721948 (Mon Oct 8 18:45:48 UTC 2012)
$oldSetArray_e22957b807f4191350045fc411905820 = isset( $setArray ) ? $setArray : array();
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

$text .= '
<form name="ordering" method="post" action="/ezpublish/app/ezpublish_legacy/index.php/ezwebin_site_admin/content/action">
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
<div class="block">    
    <fieldset>
        <legend>Tri</legend>
    
        ';
// def $sort_fields
if ( $tpl->hasVariable( 'sort_fields', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'sort_fields' is already defined.", array (
  0 => 
  array (
    0 => 8,
    1 => 8,
    2 => 298,
  ),
  1 => 
  array (
    0 => 18,
    1 => 45,
    2 => 1285,
  ),
  2 => 'design/admin/templates/ordering.tpl',
) );
    $tpl->setVariable( 'sort_fields', array (
  6 => 'Identifiant de classe',
  7 => 'Nom de la classe',
  5 => 'Profondeur',
  3 => 'Modifié',
  9 => 'Nom',
  1 => 'Fil d\'Ariane (chemin)',
  8 => 'Priorité',
  2 => 'Publié',
  4 => 'Section',
), $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'sort_fields', array (
  6 => 'Identifiant de classe',
  7 => 'Nom de la classe',
  5 => 'Profondeur',
  3 => 'Modifié',
  9 => 'Nom',
  1 => 'Fil d\'Ariane (chemin)',
  8 => 'Priorité',
  2 => 'Publié',
  4 => 'Section',
), $rootNamespace );
}

// def $title
if ( $tpl->hasVariable( 'title', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'title' is already defined.", array (
  0 => 
  array (
    0 => 8,
    1 => 8,
    2 => 298,
  ),
  1 => 
  array (
    0 => 18,
    1 => 45,
    2 => 1285,
  ),
  2 => 'design/admin/templates/ordering.tpl',
) );
    $tpl->setVariable( 'title', 'Vous ne pouvez pas définir la méthode de tri à l\'emplacement actuel parce que vous n\'avez pas le droit de modifier l\'élément courant.', $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'title', 'Vous ne pouvez pas définir la méthode de tri à l\'emplacement actuel parce que vous n\'avez pas le droit de modifier l\'élément courant.', $rootNamespace );
}

// def $disabled
if ( $tpl->hasVariable( 'disabled', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'disabled' is already defined.", array (
  0 => 
  array (
    0 => 8,
    1 => 8,
    2 => 298,
  ),
  1 => 
  array (
    0 => 18,
    1 => 45,
    2 => 1285,
  ),
  2 => 'design/admin/templates/ordering.tpl',
) );
    $tpl->setVariable( 'disabled', ' disabled="disabled"', $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'disabled', ' disabled="disabled"', $rootNamespace );
}

$text .= '    
        ';
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
$text .= '            ';
if ( array_key_exists( $currentNamespace, $vars ) && array_key_exists( 'title', $vars[$currentNamespace] ) )
{
    $vars[$currentNamespace]['title'] = 'Utilisez ces contrôles pour modifier la méthode de tri des sous-éléments de l\'emplacement actuel.';
}
$text .= '            ';
if ( array_key_exists( $currentNamespace, $vars ) && array_key_exists( 'disabled', $vars[$currentNamespace] ) )
{
    $vars[$currentNamespace]['disabled'] = '';
}
$text .= '            <input type="hidden" name="ContentObjectID" value="';
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
        ';
}
unset( $if_cond );
// if ends

$text .= '        
        <div class="block">';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'title', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['title'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '</div>
        <select id="ezasi-sort-field" name="SortingField" title="';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'title', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['title'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '"';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'disabled', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['disabled'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '>
        ';
// foreach begins
$skipDelimiter = true;
if ( !isset( $fe_variable_stack_132e1aa4c75f4f26f0cec1020a2ed20d_15 ) ) $fe_variable_stack_132e1aa4c75f4f26f0cec1020a2ed20d_15 = array();
$fe_variable_stack_132e1aa4c75f4f26f0cec1020a2ed20d_15[] = compact( 'fe_array_132e1aa4c75f4f26f0cec1020a2ed20d_15', 'fe_array_keys_132e1aa4c75f4f26f0cec1020a2ed20d_15', 'fe_n_items_132e1aa4c75f4f26f0cec1020a2ed20d_15', 'fe_n_items_processed_132e1aa4c75f4f26f0cec1020a2ed20d_15', 'fe_i_132e1aa4c75f4f26f0cec1020a2ed20d_15', 'fe_key_132e1aa4c75f4f26f0cec1020a2ed20d_15', 'fe_val_132e1aa4c75f4f26f0cec1020a2ed20d_15', 'fe_offset_132e1aa4c75f4f26f0cec1020a2ed20d_15', 'fe_max_132e1aa4c75f4f26f0cec1020a2ed20d_15', 'fe_reverse_132e1aa4c75f4f26f0cec1020a2ed20d_15', 'fe_first_val_132e1aa4c75f4f26f0cec1020a2ed20d_15', 'fe_last_val_132e1aa4c75f4f26f0cec1020a2ed20d_15' );
unset( $fe_array_132e1aa4c75f4f26f0cec1020a2ed20d_15 );
unset( $fe_array_132e1aa4c75f4f26f0cec1020a2ed20d_15 );
$fe_array_132e1aa4c75f4f26f0cec1020a2ed20d_15 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'sort_fields', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['sort_fields'] : null;
if (! isset( $fe_array_132e1aa4c75f4f26f0cec1020a2ed20d_15 ) ) $fe_array_132e1aa4c75f4f26f0cec1020a2ed20d_15 = NULL;
while ( is_object( $fe_array_132e1aa4c75f4f26f0cec1020a2ed20d_15 ) and method_exists( $fe_array_132e1aa4c75f4f26f0cec1020a2ed20d_15, 'templateValue' ) )
    $fe_array_132e1aa4c75f4f26f0cec1020a2ed20d_15 = $fe_array_132e1aa4c75f4f26f0cec1020a2ed20d_15->templateValue();

$fe_array_keys_132e1aa4c75f4f26f0cec1020a2ed20d_15 = is_array( $fe_array_132e1aa4c75f4f26f0cec1020a2ed20d_15 ) ? array_keys( $fe_array_132e1aa4c75f4f26f0cec1020a2ed20d_15 ) : array();
$fe_n_items_132e1aa4c75f4f26f0cec1020a2ed20d_15 = count( $fe_array_keys_132e1aa4c75f4f26f0cec1020a2ed20d_15 );
$fe_n_items_processed_132e1aa4c75f4f26f0cec1020a2ed20d_15 = 0;
$fe_offset_132e1aa4c75f4f26f0cec1020a2ed20d_15 = 0;
$fe_max_132e1aa4c75f4f26f0cec1020a2ed20d_15 = $fe_n_items_132e1aa4c75f4f26f0cec1020a2ed20d_15 - $fe_offset_132e1aa4c75f4f26f0cec1020a2ed20d_15;
$fe_reverse_132e1aa4c75f4f26f0cec1020a2ed20d_15 = false;
if ( $fe_offset_132e1aa4c75f4f26f0cec1020a2ed20d_15 < 0 || $fe_offset_132e1aa4c75f4f26f0cec1020a2ed20d_15 >= $fe_n_items_132e1aa4c75f4f26f0cec1020a2ed20d_15 )
{
    $fe_offset_132e1aa4c75f4f26f0cec1020a2ed20d_15 = ( $fe_offset_132e1aa4c75f4f26f0cec1020a2ed20d_15 < 0 ) ? 0 : $fe_n_items_132e1aa4c75f4f26f0cec1020a2ed20d_15;
    if ( $fe_n_items_132e1aa4c75f4f26f0cec1020a2ed20d_15 || $fe_offset_132e1aa4c75f4f26f0cec1020a2ed20d_15 < 0 )
 {
        eZDebug::writeWarning("Invalid 'offset' parameter specified: '$fe_offset_132e1aa4c75f4f26f0cec1020a2ed20d_15'. Array count: $fe_n_items_132e1aa4c75f4f26f0cec1020a2ed20d_15");   
}
}
if ( $fe_max_132e1aa4c75f4f26f0cec1020a2ed20d_15 < 0 || $fe_offset_132e1aa4c75f4f26f0cec1020a2ed20d_15 + $fe_max_132e1aa4c75f4f26f0cec1020a2ed20d_15 > $fe_n_items_132e1aa4c75f4f26f0cec1020a2ed20d_15 )
{
    if ( $fe_max_132e1aa4c75f4f26f0cec1020a2ed20d_15 < 0 )
 eZDebug::writeWarning("Invalid 'max' parameter specified: $fe_max_132e1aa4c75f4f26f0cec1020a2ed20d_15");
    $fe_max_132e1aa4c75f4f26f0cec1020a2ed20d_15 = $fe_n_items_132e1aa4c75f4f26f0cec1020a2ed20d_15 - $fe_offset_132e1aa4c75f4f26f0cec1020a2ed20d_15;
}
if ( $fe_reverse_132e1aa4c75f4f26f0cec1020a2ed20d_15 )
{
    $fe_first_val_132e1aa4c75f4f26f0cec1020a2ed20d_15 = $fe_n_items_132e1aa4c75f4f26f0cec1020a2ed20d_15 - 1 - $fe_offset_132e1aa4c75f4f26f0cec1020a2ed20d_15;
    $fe_last_val_132e1aa4c75f4f26f0cec1020a2ed20d_15  = 0;
}
else
{
    $fe_first_val_132e1aa4c75f4f26f0cec1020a2ed20d_15 = $fe_offset_132e1aa4c75f4f26f0cec1020a2ed20d_15;
    $fe_last_val_132e1aa4c75f4f26f0cec1020a2ed20d_15  = $fe_n_items_132e1aa4c75f4f26f0cec1020a2ed20d_15 - 1;
}
// foreach
for ( $fe_i_132e1aa4c75f4f26f0cec1020a2ed20d_15 = $fe_first_val_132e1aa4c75f4f26f0cec1020a2ed20d_15; $fe_n_items_processed_132e1aa4c75f4f26f0cec1020a2ed20d_15 < $fe_max_132e1aa4c75f4f26f0cec1020a2ed20d_15 && ( $fe_reverse_132e1aa4c75f4f26f0cec1020a2ed20d_15 ? $fe_i_132e1aa4c75f4f26f0cec1020a2ed20d_15 >= $fe_last_val_132e1aa4c75f4f26f0cec1020a2ed20d_15 : $fe_i_132e1aa4c75f4f26f0cec1020a2ed20d_15 <= $fe_last_val_132e1aa4c75f4f26f0cec1020a2ed20d_15 ); $fe_reverse_132e1aa4c75f4f26f0cec1020a2ed20d_15 ? $fe_i_132e1aa4c75f4f26f0cec1020a2ed20d_15-- : $fe_i_132e1aa4c75f4f26f0cec1020a2ed20d_15++ )
{
$fe_key_132e1aa4c75f4f26f0cec1020a2ed20d_15 = $fe_array_keys_132e1aa4c75f4f26f0cec1020a2ed20d_15[$fe_i_132e1aa4c75f4f26f0cec1020a2ed20d_15];
$fe_val_132e1aa4c75f4f26f0cec1020a2ed20d_15 = $fe_array_132e1aa4c75f4f26f0cec1020a2ed20d_15[$fe_key_132e1aa4c75f4f26f0cec1020a2ed20d_15];
$vars[$rootNamespace]['field'] = $fe_val_132e1aa4c75f4f26f0cec1020a2ed20d_15;
$vars[$rootNamespace]['key'] = $fe_key_132e1aa4c75f4f26f0cec1020a2ed20d_15;
$text .= '            <option value="';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'key', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['key'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '" ';
// if begins
unset( $if_cond );
unset( $if_cond1 );
unset( $if_cond1 );
$if_cond1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'key', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['key'] : null;
if (! isset( $if_cond1 ) ) $if_cond1 = NULL;
while ( is_object( $if_cond1 ) and method_exists( $if_cond1, 'templateValue' ) )
    $if_cond1 = $if_cond1->templateValue();
unset( $if_cond2 );
unset( $if_cond2 );
$if_cond2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'node', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['node'] : null;
$if_cond3 = compiledFetchAttribute( $if_cond2, 'sort_field' );
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
$text .= 'selected="selected"';
}
unset( $if_cond );
// if ends

$text .= '>';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'field', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['field'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '</option>
        ';
$fe_n_items_processed_132e1aa4c75f4f26f0cec1020a2ed20d_15++;
} // foreach
$skipDelimiter = false;
if ( count( $fe_variable_stack_132e1aa4c75f4f26f0cec1020a2ed20d_15 ) ) extract( array_pop( $fe_variable_stack_132e1aa4c75f4f26f0cec1020a2ed20d_15 ) );

else
{

unset( $fe_array_132e1aa4c75f4f26f0cec1020a2ed20d_15 );

unset( $fe_array_keys_132e1aa4c75f4f26f0cec1020a2ed20d_15 );

unset( $fe_n_items_132e1aa4c75f4f26f0cec1020a2ed20d_15 );

unset( $fe_n_items_processed_132e1aa4c75f4f26f0cec1020a2ed20d_15 );

unset( $fe_i_132e1aa4c75f4f26f0cec1020a2ed20d_15 );

unset( $fe_key_132e1aa4c75f4f26f0cec1020a2ed20d_15 );

unset( $fe_val_132e1aa4c75f4f26f0cec1020a2ed20d_15 );

unset( $fe_offset_132e1aa4c75f4f26f0cec1020a2ed20d_15 );

unset( $fe_max_132e1aa4c75f4f26f0cec1020a2ed20d_15 );

unset( $fe_reverse_132e1aa4c75f4f26f0cec1020a2ed20d_15 );

unset( $fe_first_val_132e1aa4c75f4f26f0cec1020a2ed20d_15 );

unset( $fe_last_val_132e1aa4c75f4f26f0cec1020a2ed20d_15 );

unset( $fe_variable_stack_132e1aa4c75f4f26f0cec1020a2ed20d_15 );

}

// foreach ends
$text .= '        </select>
    
        <select id="ezasi-sort-order" name="SortingOrder" title="';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'title', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['title'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '"';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'disabled', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['disabled'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '>
            <option value="0"';
// if begins
unset( $if_cond );
unset( $if_cond1 );
unset( $if_cond1 );
$if_cond1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'node', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['node'] : null;
$if_cond2 = compiledFetchAttribute( $if_cond1, 'sort_order' );
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
$text .= ' selected="selected"';
}
unset( $if_cond );
// if ends

$text .= '>Décroissant</option>
            <option value="1"';
// if begins
unset( $if_cond );
unset( $if_cond1 );
unset( $if_cond1 );
$if_cond1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'node', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['node'] : null;
$if_cond2 = compiledFetchAttribute( $if_cond1, 'sort_order' );
unset( $if_cond1 );
$if_cond1 = $if_cond2;
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
$text .= ' selected="selected"';
}
unset( $if_cond );
// if ends

$text .= '>Croissant</option>
        </select>
    
        <input  id="ezasi-sort-set" ';
// if begins
unset( $if_cond );
unset( $if_cond );
$if_cond = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'disabled', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['disabled'] : null;
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= 'class="button-disabled"';
}
else
{
$text .= 'class="button"';
}
unset( $if_cond );
// if ends

$text .= ' type="submit" name="SetSorting" value="Affecter" title="';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'title', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['title'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '" ';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'disabled', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['disabled'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= ' />
    
        ';
// undef all
$tpl->unsetLocalVariables();
$text .= '    </fieldset>
</div>
</form>



<script type="text/javascript">
jQuery(\'#ezasi-sort-field, #ezasi-sort-order\').each( function(){
    jQuery( this ).attr( \'initial\', this.value );
} ).change(function(){
    var t = $(this), o = $(this.id === \'ezasi-sort-field\' ? \'#ezasi-sort-order\' : \'#ezasi-sort-field\'), s = $(\'#ezasi-sort-set\');
    // signal in gui if user needs to save this or not
    if ( t.val() === t.attr(\'initial\') && o.val() === o.attr(\'initial\') )
        s.removeClass(\'defaultbutton\').addClass(\'button\');
    else
        s.removeClass(\'button\').addClass(\'defaultbutton\');
});
</script>

';

$setArray = $oldSetArray_e22957b807f4191350045fc411905820;
$tpl->Level--;
?>
