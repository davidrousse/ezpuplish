<?php
// URI:       design:content/datatype/edit/ezpackage.tpl
// Filename:  design/standard/templates/content/datatype/edit/ezpackage.tpl
// Timestamp: 1349721948 (Mon Oct 8 18:45:48 UTC 2012)
$oldSetArray_7b35490123173c162bcdf41b3180885c = isset( $setArray ) ? $setArray : array();
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

if ( !isset( $vars[$currentNamespace]['attribute_base'] ) )
{
    $vars[$currentNamespace]['attribute_base'] = 'ContentObjectAttribute';
    $setArray[$currentNamespace]['attribute_base'] = true;
}

unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'attribute', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['attribute'] : null;
$var1 = compiledFetchAttribute( $var, 'data_text' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$vars[$currentNamespace]['package_attr_name'] = $var;
unset( $var );
unset( $var );
unset( $var1 );
unset( $var2 );
unset( $var3 );
unset( $var3 );
$var3 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'attribute', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['attribute'] : null;
$var4 = compiledFetchAttribute( $var3, 'contentclass_attribute' );
unset( $var3 );
$var3 = $var4;
$var4 = compiledFetchAttribute( $var3, 'data_text1' );
unset( $var3 );
$var3 = $var4;
if (! isset( $var3 ) ) $var3 = NULL;
while ( is_object( $var3 ) and method_exists( $var3, 'templateValue' ) )
    $var3 = $var3->templateValue();
while ( is_object( $var3 ) and method_exists( $var3, 'templateValue' ) )
    $var3 = $var3->templateValue();
$var2 = array( "type", $var3 );unset( $var3 );
if (! isset( $var2 ) ) $var2 = NULL;
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
$var1 = array( $var2 );unset( $var2 );
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
$var = call_user_func_array( array( new eZPackageFunctionCollection(), 'fetchList' ),
  array(     'filter_array' => $var1,
    'offset' => false,
    'limit' => false,
    'repository_id' => false ) );
$var = isset( $var['result'] ) ? $var['result'] : null;
unset( $var1 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$vars[$currentNamespace]['package_list'] = $var;
unset( $var );
$text .= '<div class="block">
<label for="ezpackage_data_text_';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'attribute', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['attribute'] : null;
$var1 = compiledFetchAttribute( $var, 'id' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '_siteaccess">Siteaccess:</label>
<select id="ezpackage_data_text_';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'attribute', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['attribute'] : null;
$var1 = compiledFetchAttribute( $var, 'id' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '_siteaccess" name="CurrentSiteAccess">
    <option value="Global">Général (override)</option>
    ';
$loopItem = array (
  0 => 'ezwebin_site',
  1 => 'fre',
  2 => 'ezwebin_site_admin',
);
$namespaceStack[] = $currentNamespace;
$currentNamespace .= ( $currentNamespace ? ":" : "" ) . 'SiteAccess';

if ( !isset( $sectionStack ) )
    $sectionStack = array();
$index = 0;
$currentIndex = 1;
if ( is_array( $loopItem ) )
{
    $loopKeys = array_keys( $loopItem );
    $loopCount = count( $loopKeys );
}
else if ( is_numeric( $loopItem ) )
{
    $loopKeys = false;
    if ( $loopItem < 0 )
        $loopCountValue = -$loopItem;
    else
        $loopCountValue = $loopItem;
    $loopCount = $loopCountValue - 0;
}
else if ( is_string( $loopItem ) )
{
    $loopKeys = false;
    $loopCount = strlen( $loopItem ) - 0;
}
else
{
    $loopKeys = false;
    $loopCount = 0;
}
while ( $index < $loopCount )
{
    if ( is_array( $loopItem ) )
    {
        $loopKey = $loopKeys[$index];
        unset( $item );
        $item = $loopItem[$loopKey];
    }
    else if ( is_numeric( $loopItem ) )
    {
        unset( $item );
        $item = $index + 0 + 1;
        if ( $loopItem < 0 )
            $item = -$item;
        $loopKey = $index + 0;
    }
    else if ( is_string( $loopItem ) )
    {
        unset( $item );
        $loopKey = $index + 0;
        $item = $loopItem[$loopKey];
    }
    unset( $last );
    $last = false;

$vars[$currentNamespace]['key'] = $loopKey;
$vars[$currentNamespace]['item'] = $item;
$currentIndexInc = $currentIndex - 1;

$vars[$currentNamespace]['index'] = $currentIndexInc;
$vars[$currentNamespace]['number'] = $currentIndex;
$sectionStack[] = array( &$loopItem, $loopKeys, $loopCount, $currentIndex, $index );
unset( $loopItem, $loopKeys );

$text .= '        <option value="';
unset( $var );
$namespace = $rootNamespace;
if ( $namespace == '' )
    $namespace = "SiteAccess";
else
    $namespace .= ':SiteAccess';
unset( $var );
$var = ( array_key_exists( $namespace, $vars ) and array_key_exists( 'item', $vars[$namespace] ) ) ? $vars[$namespace]['item'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '"
        ';
// foreach begins
$skipDelimiter = true;
if ( !isset( $fe_variable_stack_d7cc126f504beb93aef3bc7a611bf163_9 ) ) $fe_variable_stack_d7cc126f504beb93aef3bc7a611bf163_9 = array();
$fe_variable_stack_d7cc126f504beb93aef3bc7a611bf163_9[] = compact( 'fe_array_d7cc126f504beb93aef3bc7a611bf163_9', 'fe_array_keys_d7cc126f504beb93aef3bc7a611bf163_9', 'fe_n_items_d7cc126f504beb93aef3bc7a611bf163_9', 'fe_n_items_processed_d7cc126f504beb93aef3bc7a611bf163_9', 'fe_i_d7cc126f504beb93aef3bc7a611bf163_9', 'fe_key_d7cc126f504beb93aef3bc7a611bf163_9', 'fe_val_d7cc126f504beb93aef3bc7a611bf163_9', 'fe_offset_d7cc126f504beb93aef3bc7a611bf163_9', 'fe_max_d7cc126f504beb93aef3bc7a611bf163_9', 'fe_reverse_d7cc126f504beb93aef3bc7a611bf163_9', 'fe_first_val_d7cc126f504beb93aef3bc7a611bf163_9', 'fe_last_val_d7cc126f504beb93aef3bc7a611bf163_9' );
unset( $fe_array_d7cc126f504beb93aef3bc7a611bf163_9 );
unset( $fe_array_d7cc126f504beb93aef3bc7a611bf163_9 );
$fe_array_d7cc126f504beb93aef3bc7a611bf163_9 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'package_list', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['package_list'] : null;
if (! isset( $fe_array_d7cc126f504beb93aef3bc7a611bf163_9 ) ) $fe_array_d7cc126f504beb93aef3bc7a611bf163_9 = NULL;
while ( is_object( $fe_array_d7cc126f504beb93aef3bc7a611bf163_9 ) and method_exists( $fe_array_d7cc126f504beb93aef3bc7a611bf163_9, 'templateValue' ) )
    $fe_array_d7cc126f504beb93aef3bc7a611bf163_9 = $fe_array_d7cc126f504beb93aef3bc7a611bf163_9->templateValue();

$fe_array_keys_d7cc126f504beb93aef3bc7a611bf163_9 = is_array( $fe_array_d7cc126f504beb93aef3bc7a611bf163_9 ) ? array_keys( $fe_array_d7cc126f504beb93aef3bc7a611bf163_9 ) : array();
$fe_n_items_d7cc126f504beb93aef3bc7a611bf163_9 = count( $fe_array_keys_d7cc126f504beb93aef3bc7a611bf163_9 );
$fe_n_items_processed_d7cc126f504beb93aef3bc7a611bf163_9 = 0;
$fe_offset_d7cc126f504beb93aef3bc7a611bf163_9 = 0;
$fe_max_d7cc126f504beb93aef3bc7a611bf163_9 = $fe_n_items_d7cc126f504beb93aef3bc7a611bf163_9 - $fe_offset_d7cc126f504beb93aef3bc7a611bf163_9;
$fe_reverse_d7cc126f504beb93aef3bc7a611bf163_9 = false;
if ( $fe_offset_d7cc126f504beb93aef3bc7a611bf163_9 < 0 || $fe_offset_d7cc126f504beb93aef3bc7a611bf163_9 >= $fe_n_items_d7cc126f504beb93aef3bc7a611bf163_9 )
{
    $fe_offset_d7cc126f504beb93aef3bc7a611bf163_9 = ( $fe_offset_d7cc126f504beb93aef3bc7a611bf163_9 < 0 ) ? 0 : $fe_n_items_d7cc126f504beb93aef3bc7a611bf163_9;
    if ( $fe_n_items_d7cc126f504beb93aef3bc7a611bf163_9 || $fe_offset_d7cc126f504beb93aef3bc7a611bf163_9 < 0 )
 {
        eZDebug::writeWarning("Invalid 'offset' parameter specified: '$fe_offset_d7cc126f504beb93aef3bc7a611bf163_9'. Array count: $fe_n_items_d7cc126f504beb93aef3bc7a611bf163_9");   
}
}
if ( $fe_max_d7cc126f504beb93aef3bc7a611bf163_9 < 0 || $fe_offset_d7cc126f504beb93aef3bc7a611bf163_9 + $fe_max_d7cc126f504beb93aef3bc7a611bf163_9 > $fe_n_items_d7cc126f504beb93aef3bc7a611bf163_9 )
{
    if ( $fe_max_d7cc126f504beb93aef3bc7a611bf163_9 < 0 )
 eZDebug::writeWarning("Invalid 'max' parameter specified: $fe_max_d7cc126f504beb93aef3bc7a611bf163_9");
    $fe_max_d7cc126f504beb93aef3bc7a611bf163_9 = $fe_n_items_d7cc126f504beb93aef3bc7a611bf163_9 - $fe_offset_d7cc126f504beb93aef3bc7a611bf163_9;
}
if ( $fe_reverse_d7cc126f504beb93aef3bc7a611bf163_9 )
{
    $fe_first_val_d7cc126f504beb93aef3bc7a611bf163_9 = $fe_n_items_d7cc126f504beb93aef3bc7a611bf163_9 - 1 - $fe_offset_d7cc126f504beb93aef3bc7a611bf163_9;
    $fe_last_val_d7cc126f504beb93aef3bc7a611bf163_9  = 0;
}
else
{
    $fe_first_val_d7cc126f504beb93aef3bc7a611bf163_9 = $fe_offset_d7cc126f504beb93aef3bc7a611bf163_9;
    $fe_last_val_d7cc126f504beb93aef3bc7a611bf163_9  = $fe_n_items_d7cc126f504beb93aef3bc7a611bf163_9 - 1;
}
// foreach
for ( $fe_i_d7cc126f504beb93aef3bc7a611bf163_9 = $fe_first_val_d7cc126f504beb93aef3bc7a611bf163_9; $fe_n_items_processed_d7cc126f504beb93aef3bc7a611bf163_9 < $fe_max_d7cc126f504beb93aef3bc7a611bf163_9 && ( $fe_reverse_d7cc126f504beb93aef3bc7a611bf163_9 ? $fe_i_d7cc126f504beb93aef3bc7a611bf163_9 >= $fe_last_val_d7cc126f504beb93aef3bc7a611bf163_9 : $fe_i_d7cc126f504beb93aef3bc7a611bf163_9 <= $fe_last_val_d7cc126f504beb93aef3bc7a611bf163_9 ); $fe_reverse_d7cc126f504beb93aef3bc7a611bf163_9 ? $fe_i_d7cc126f504beb93aef3bc7a611bf163_9-- : $fe_i_d7cc126f504beb93aef3bc7a611bf163_9++ )
{
$fe_key_d7cc126f504beb93aef3bc7a611bf163_9 = $fe_array_keys_d7cc126f504beb93aef3bc7a611bf163_9[$fe_i_d7cc126f504beb93aef3bc7a611bf163_9];
$fe_val_d7cc126f504beb93aef3bc7a611bf163_9 = $fe_array_d7cc126f504beb93aef3bc7a611bf163_9[$fe_key_d7cc126f504beb93aef3bc7a611bf163_9];
$vars[$rootNamespace]['Package'] = $fe_val_d7cc126f504beb93aef3bc7a611bf163_9;
$text .= '        ';
// if begins
unset( $if_cond );
unset( $if_cond1 );
unset( $if_cond2 );
unset( $if_cond2 );
$if_cond2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'Package', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['Package'] : null;
$if_cond3 = compiledFetchAttribute( $if_cond2, 'name' );
unset( $if_cond2 );
$if_cond2 = $if_cond3;
if (! isset( $if_cond2 ) ) $if_cond2 = NULL;
while ( is_object( $if_cond2 ) and method_exists( $if_cond2, 'templateValue' ) )
    $if_cond2 = $if_cond2->templateValue();
unset( $if_cond4 );
$namespace = $rootNamespace;
if ( $namespace == '' )
    $namespace = "SiteAccess";
else
    $namespace .= ':SiteAccess';
unset( $if_cond4 );
$if_cond4 = ( array_key_exists( $namespace, $vars ) and array_key_exists( 'item', $vars[$namespace] ) ) ? $vars[$namespace]['item'] : null;
if (! isset( $if_cond4 ) ) $if_cond4 = NULL;
while ( is_object( $if_cond4 ) and method_exists( $if_cond4, 'templateValue' ) )
    $if_cond4 = $if_cond4->templateValue();
$if_cond1 = ( $if_cond2 . ':' . $if_cond4 );
unset( $if_cond2, $if_cond4 );
if (! isset( $if_cond1 ) ) $if_cond1 = NULL;
while ( is_object( $if_cond1 ) and method_exists( $if_cond1, 'templateValue' ) )
    $if_cond1 = $if_cond1->templateValue();
unset( $if_cond2 );
unset( $if_cond2 );
$if_cond2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'attribute', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['attribute'] : null;
$if_cond3 = compiledFetchAttribute( $if_cond2, 'data_text' );
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
$text .= '                selected="selected"
            ';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'Package', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['Package'] : null;
$var1 = compiledFetchAttribute( $var, 'name' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( array_key_exists( $rootNamespace, $vars ) && array_key_exists( 'package_attr_name', $vars[$rootNamespace] ) )
{
    $vars[$rootNamespace]['package_attr_name'] = $var;
    unset( $var );
}
$text .= '            ';
break;

$text .= '        ';
}
unset( $if_cond );
// if ends

$text .= '        ';
$fe_n_items_processed_d7cc126f504beb93aef3bc7a611bf163_9++;
} // foreach
$skipDelimiter = false;
if ( count( $fe_variable_stack_d7cc126f504beb93aef3bc7a611bf163_9 ) ) extract( array_pop( $fe_variable_stack_d7cc126f504beb93aef3bc7a611bf163_9 ) );

else
{

unset( $fe_array_d7cc126f504beb93aef3bc7a611bf163_9 );

unset( $fe_array_keys_d7cc126f504beb93aef3bc7a611bf163_9 );

unset( $fe_n_items_d7cc126f504beb93aef3bc7a611bf163_9 );

unset( $fe_n_items_processed_d7cc126f504beb93aef3bc7a611bf163_9 );

unset( $fe_i_d7cc126f504beb93aef3bc7a611bf163_9 );

unset( $fe_key_d7cc126f504beb93aef3bc7a611bf163_9 );

unset( $fe_val_d7cc126f504beb93aef3bc7a611bf163_9 );

unset( $fe_offset_d7cc126f504beb93aef3bc7a611bf163_9 );

unset( $fe_max_d7cc126f504beb93aef3bc7a611bf163_9 );

unset( $fe_reverse_d7cc126f504beb93aef3bc7a611bf163_9 );

unset( $fe_first_val_d7cc126f504beb93aef3bc7a611bf163_9 );

unset( $fe_last_val_d7cc126f504beb93aef3bc7a611bf163_9 );

unset( $fe_variable_stack_d7cc126f504beb93aef3bc7a611bf163_9 );

}

// foreach ends
$text .= '        >';
unset( $var );
unset( $var );
$var = ( array_key_exists( $currentNamespace, $vars ) and array_key_exists( 'item', $vars[$currentNamespace] ) ) ? $vars[$currentNamespace]['item'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '</option>
    ';
list( $loopItem, $loopKeys, $loopCount, $currentIndex, $index ) = array_pop( $sectionStack );
++$currentIndex;

++$index;

}
unset( $loopKeys, $loopCount, $index, $last, $loopIndex, $loopItem );
$currentNamespace = array_pop( $namespaceStack );

$text .= '</select>
</div>

<div class="block">';
unset( $loopItem );
unset( $loopItem );
$loopItem = ( array_key_exists( $currentNamespace, $vars ) and array_key_exists( 'package_list', $vars[$currentNamespace] ) ) ? $vars[$currentNamespace]['package_list'] : null;
if (! isset( $loopItem ) ) $loopItem = NULL;
while ( is_object( $loopItem ) and method_exists( $loopItem, 'templateValue' ) )
    $loopItem = $loopItem->templateValue();

$namespaceStack[] = $currentNamespace;
$currentNamespace .= ( $currentNamespace ? ":" : "" ) . 'Package';

if ( !isset( $sectionStack ) )
    $sectionStack = array();
$index = 0;
$currentIndex = 1;
if ( is_array( $loopItem ) )
{
    $loopKeys = array_keys( $loopItem );
    $loopCount = count( $loopKeys );
}
else if ( is_numeric( $loopItem ) )
{
    $loopKeys = false;
    if ( $loopItem < 0 )
        $loopCountValue = -$loopItem;
    else
        $loopCountValue = $loopItem;
    $loopCount = $loopCountValue - 0;
}
else if ( is_string( $loopItem ) )
{
    $loopKeys = false;
    $loopCount = strlen( $loopItem ) - 0;
}
else
{
    $loopKeys = false;
    $loopCount = 0;
}
while ( $index < $loopCount )
{
    if ( is_array( $loopItem ) )
    {
        $loopKey = $loopKeys[$index];
        unset( $item );
        $item = $loopItem[$loopKey];
    }
    else if ( is_numeric( $loopItem ) )
    {
        unset( $item );
        $item = $index + 0 + 1;
        if ( $loopItem < 0 )
            $item = -$item;
        $loopKey = $index + 0;
    }
    else if ( is_string( $loopItem ) )
    {
        unset( $item );
        $loopKey = $index + 0;
        $item = $loopItem[$loopKey];
    }
    unset( $last );
    $last = false;

$vars[$currentNamespace]['key'] = $loopKey;
$vars[$currentNamespace]['item'] = $item;
$currentIndexInc = $currentIndex - 1;

$vars[$currentNamespace]['index'] = $currentIndexInc;
$vars[$currentNamespace]['number'] = $currentIndex;
$sectionStack[] = array( &$loopItem, $loopKeys, $loopCount, $currentIndex, $index );
unset( $loopItem, $loopKeys );

if ( $currentIndex > 1 and ( ( $currentIndex - 1 ) % 4 ) == 0 )
{
$text .= '    </div>
    <div class="block">
 ';
}

$text .= ' <div class="package_element">
      <label for="ezpackage_data_text_';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'attribute', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['attribute'] : null;
$var1 = compiledFetchAttribute( $var, 'id' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '_';
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $currentNamespace, $vars ) and array_key_exists( 'item', $vars[$currentNamespace] ) ) ? $vars[$currentNamespace]['item'] : null;
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

$text .= '"><img class="package-thumbnail" src=';
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $currentNamespace, $vars ) and array_key_exists( 'item', $vars[$currentNamespace] ) ) ? $vars[$currentNamespace]['item'] : null;
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
$var1Data = array( 'value' => $var1 );
$tpl->processOperator( 'ezpackage',
                       array (
  0 => 
  array (
    0 => 
    array (
      0 => 3,
      1 => 'thumbnail',
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
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
if ( preg_match( "#^[a-zA-Z0-9]+:#", $var1 ) or
substr( $var1, 0, 2 ) == '//' )
  $var1 = '/';
else if ( strlen( $var1 ) > 0 and
  $var1[0] != '/' )
$var1 = '/' . $var1;
eZURI::transformURI( $var1, true, eZURI::getTransformURIMode() );
$var1 = '"' . $var1 . '"';
$var = $var1;
unset( $var1 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= ' alt="';
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $currentNamespace, $vars ) and array_key_exists( 'item', $vars[$currentNamespace] ) ) ? $vars[$currentNamespace]['item'] : null;
$var2 = compiledFetchAttribute( $var1, 'summary' );
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

$text .= '" /></label>
      <br />
      <input type="radio" id="ezpackage_data_text_';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'attribute', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['attribute'] : null;
$var1 = compiledFetchAttribute( $var, 'id' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '_';
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $currentNamespace, $vars ) and array_key_exists( 'item', $vars[$currentNamespace] ) ) ? $vars[$currentNamespace]['item'] : null;
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

$text .= '" name="';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'attribute_base', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['attribute_base'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '_ezpackage_data_text_';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'attribute', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['attribute'] : null;
$var1 = compiledFetchAttribute( $var, 'id' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '" value="';
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $currentNamespace, $vars ) and array_key_exists( 'item', $vars[$currentNamespace] ) ) ? $vars[$currentNamespace]['item'] : null;
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

$text .= '"
      ';
// if begins
unset( $if_cond );
unset( $if_cond1 );
unset( $if_cond1 );
$if_cond1 = ( array_key_exists( $currentNamespace, $vars ) and array_key_exists( 'item', $vars[$currentNamespace] ) ) ? $vars[$currentNamespace]['item'] : null;
$if_cond2 = compiledFetchAttribute( $if_cond1, 'name' );
unset( $if_cond1 );
$if_cond1 = $if_cond2;
if (! isset( $if_cond1 ) ) $if_cond1 = NULL;
while ( is_object( $if_cond1 ) and method_exists( $if_cond1, 'templateValue' ) )
    $if_cond1 = $if_cond1->templateValue();
unset( $if_cond2 );
unset( $if_cond2 );
$if_cond2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'package_attr_name', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['package_attr_name'] : null;
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
$text .= ' checked';
}
unset( $if_cond );
// if ends

$text .= ' /><label for="ezpackage_data_text_';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'attribute', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['attribute'] : null;
$var1 = compiledFetchAttribute( $var, 'id' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '_';
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $currentNamespace, $vars ) and array_key_exists( 'item', $vars[$currentNamespace] ) ) ? $vars[$currentNamespace]['item'] : null;
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

$text .= '">';
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $currentNamespace, $vars ) and array_key_exists( 'item', $vars[$currentNamespace] ) ) ? $vars[$currentNamespace]['item'] : null;
$var2 = compiledFetchAttribute( $var1, 'summary' );
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

$text .= ':</label>
 </div>
 ';
list( $loopItem, $loopKeys, $loopCount, $currentIndex, $index ) = array_pop( $sectionStack );
++$currentIndex;

++$index;

}
unset( $loopKeys, $loopCount, $index, $last, $loopIndex, $loopItem );
$currentNamespace = array_pop( $namespaceStack );

$text .= '</div>
';
unset( $vars[$currentNamespace]['package_attr_name'] );
unset( $vars[$currentNamespace]['package_list'] );
if ( isset( $setArray[$currentNamespace]['attribute_base'] ) )
{
unset( $vars[$currentNamespace]['attribute_base'] );
}


$setArray = $oldSetArray_7b35490123173c162bcdf41b3180885c;
$tpl->Level--;
?>
