<?php
// URI:       extension/ezwebin/design/ezwebin/templates/page_head.tpl
// Filename:  extension/ezwebin/design/ezwebin/templates/page_head.tpl
// Timestamp: 1350735749 (Sat Oct 20 12:22:29 UTC 2012)
$oldSetArray_3094384005a047ed57741e66db1189ac = isset( $setArray ) ? $setArray : array();
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

if ( !isset( $vars[$currentNamespace]['enable_help'] ) )
{
    $vars[$currentNamespace]['enable_help'] = true;
    $setArray[$currentNamespace]['enable_help'] = true;
}

if ( !isset( $vars[$currentNamespace]['enable_link'] ) )
{
    $vars[$currentNamespace]['enable_link'] = true;
    $setArray[$currentNamespace]['enable_link'] = true;
}

if ( !isset( $vars[$currentNamespace]['canonical_link'] ) )
{
    $vars[$currentNamespace]['canonical_link'] = true;
    $setArray[$currentNamespace]['canonical_link'] = true;
}

// if begins
unset( $if_cond );
unset( $if_cond1 );
unset( $if_cond1 );
$if_cond1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'module_result', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['module_result'] : null;
$if_cond2 = compiledFetchAttribute( $if_cond1, 'content_info' );
unset( $if_cond1 );
$if_cond1 = $if_cond2;
$if_cond2 = compiledFetchAttribute( $if_cond1, 'persistent_variable' );
unset( $if_cond1 );
$if_cond1 = $if_cond2;
$if_cond2 = compiledFetchAttribute( $if_cond1, 'site_title' );
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
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'module_result', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['module_result'] : null;
$var1 = compiledFetchAttribute( $var, 'content_info' );
unset( $var );
$var = $var1;
$var1 = compiledFetchAttribute( $var, 'persistent_variable' );
unset( $var );
$var = $var1;
$var1 = compiledFetchAttribute( $var, 'site_title' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( array_key_exists( $rootNamespace, $vars ) && array_key_exists( 'site_title', $vars[$rootNamespace] ) )
{
    $vars[$rootNamespace]['site_title'] = $var;
    unset( $var );
}
}
else
{
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'module_result', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['module_result'] : null;
$var1 = compiledFetchAttribute( $var, 'path' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$namespace = $currentNamespace;
if ( $namespace == '' )
    $namespace = "Path";
else
    $namespace .= ':Path';
$vars[$namespace]['path'] = $var;
unset( $var );
$namespace = $currentNamespace;
if ( $namespace == '' )
    $namespace = "Path";
else
    $namespace .= ':Path';
$vars[$namespace]['reverse_path'] = array (
);
$namespaceStack[] = $currentNamespace;
$currentNamespace .= ( $currentNamespace ? ":" : "" ) . 'Path';

$text .= '  ';
unset( $elseif_cond_995e82e26af823319fdc0ffdbf1a563d_71 );
unset( $elseif_cond_995e82e26af823319fdc0ffdbf1a563d_711 );
unset( $elseif_cond_995e82e26af823319fdc0ffdbf1a563d_711 );
$elseif_cond_995e82e26af823319fdc0ffdbf1a563d_711 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'module_result', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['module_result'] : null;
$elseif_cond_995e82e26af823319fdc0ffdbf1a563d_712 = compiledFetchAttribute( $elseif_cond_995e82e26af823319fdc0ffdbf1a563d_711, 'title_path' );
unset( $elseif_cond_995e82e26af823319fdc0ffdbf1a563d_711 );
$elseif_cond_995e82e26af823319fdc0ffdbf1a563d_711 = $elseif_cond_995e82e26af823319fdc0ffdbf1a563d_712;
if (! isset( $elseif_cond_995e82e26af823319fdc0ffdbf1a563d_711 ) ) $elseif_cond_995e82e26af823319fdc0ffdbf1a563d_711 = NULL;
while ( is_object( $elseif_cond_995e82e26af823319fdc0ffdbf1a563d_711 ) and method_exists( $elseif_cond_995e82e26af823319fdc0ffdbf1a563d_711, 'templateValue' ) )
    $elseif_cond_995e82e26af823319fdc0ffdbf1a563d_711 = $elseif_cond_995e82e26af823319fdc0ffdbf1a563d_711->templateValue();
while ( is_object( $elseif_cond_995e82e26af823319fdc0ffdbf1a563d_711 ) and method_exists( $elseif_cond_995e82e26af823319fdc0ffdbf1a563d_711, 'templateValue' ) )
    $elseif_cond_995e82e26af823319fdc0ffdbf1a563d_711 = $elseif_cond_995e82e26af823319fdc0ffdbf1a563d_711->templateValue();
$elseif_cond_995e82e26af823319fdc0ffdbf1a563d_71 = isset( $elseif_cond_995e82e26af823319fdc0ffdbf1a563d_711 );unset( $elseif_cond_995e82e26af823319fdc0ffdbf1a563d_711 );
if (! isset( $elseif_cond_995e82e26af823319fdc0ffdbf1a563d_71 ) ) $elseif_cond_995e82e26af823319fdc0ffdbf1a563d_71 = NULL;
while ( is_object( $elseif_cond_995e82e26af823319fdc0ffdbf1a563d_71 ) and method_exists( $elseif_cond_995e82e26af823319fdc0ffdbf1a563d_71, 'templateValue' ) )
    $elseif_cond_995e82e26af823319fdc0ffdbf1a563d_71 = $elseif_cond_995e82e26af823319fdc0ffdbf1a563d_71->templateValue();

// if begins
unset( $if_cond );
unset( $if_cond1 );
unset( $if_cond1 );
$if_cond1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'pagedata', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['pagedata'] : null;
$if_cond2 = compiledFetchAttribute( $if_cond1, 'path_array' );
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
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'pagedata', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['pagedata'] : null;
$var1 = compiledFetchAttribute( $var, 'path_array' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( array_key_exists( $currentNamespace, $vars ) && array_key_exists( 'path', $vars[$currentNamespace] ) )
{
    $vars[$currentNamespace]['path'] = $var;
    unset( $var );
}
$text .= '  ';
}
elseif ( $elseif_cond_995e82e26af823319fdc0ffdbf1a563d_71 )
{
$text .= '    ';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'module_result', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['module_result'] : null;
$var1 = compiledFetchAttribute( $var, 'title_path' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( array_key_exists( $currentNamespace, $vars ) && array_key_exists( 'path', $vars[$currentNamespace] ) )
{
    $vars[$currentNamespace]['path'] = $var;
    unset( $var );
}
$text .= '  ';
}
unset( $if_cond );
// if ends

unset( $elseif_cond_995e82e26af823319fdc0ffdbf1a563d_71 );

$text .= '  ';
unset( $loopItem );
unset( $loopItem );
$loopItem = ( array_key_exists( $currentNamespace, $vars ) and array_key_exists( 'path', $vars[$currentNamespace] ) ) ? $vars[$currentNamespace]['path'] : null;
if (! isset( $loopItem ) ) $loopItem = NULL;
while ( is_object( $loopItem ) and method_exists( $loopItem, 'templateValue' ) )
    $loopItem = $loopItem->templateValue();

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

$text .= '    ';
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $currentNamespace, $vars ) and array_key_exists( 'item', $vars[$currentNamespace] ) ) ? $vars[$currentNamespace]['item'] : null;
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
unset( $var2 );
unset( $var2 );
$var2 = ( array_key_exists( $currentNamespace, $vars ) and array_key_exists( 'reverse_path', $vars[$currentNamespace] ) ) ? $vars[$currentNamespace]['reverse_path'] : null;
if (! isset( $var2 ) ) $var2 = NULL;
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
$var = array_merge( array( $var1 ), $var2 );
unset( $var1, $var2 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( array_key_exists( $currentNamespace, $vars ) && array_key_exists( 'reverse_path', $vars[$currentNamespace] ) )
{
    $vars[$currentNamespace]['reverse_path'] = $var;
    unset( $var );
}
$text .= '  ';
list( $loopItem, $loopKeys, $loopCount, $currentIndex, $index ) = array_pop( $sectionStack );
++$currentIndex;

++$index;

}
unset( $loopKeys, $loopCount, $index, $last, $loopIndex, $loopItem );
if ( !isset( $textStack ) )
    $textStack = array();
$textStack[] = $text;
$text = '';
unset( $loopItem );
$namespace = $rootNamespace;
if ( $namespace == '' )
    $namespace = "Path";
else
    $namespace .= ':Path';
unset( $loopItem );
$loopItem = ( array_key_exists( $namespace, $vars ) and array_key_exists( 'reverse_path', $vars[$namespace] ) ) ? $vars[$namespace]['reverse_path'] : null;
if (! isset( $loopItem ) ) $loopItem = NULL;
while ( is_object( $loopItem ) and method_exists( $loopItem, 'templateValue' ) )
    $loopItem = $loopItem->templateValue();

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

if ( $currentIndex > 1 )
{
$text .= ' / ';
}

unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $currentNamespace, $vars ) and array_key_exists( 'item', $vars[$currentNamespace] ) ) ? $vars[$currentNamespace]['item'] : null;
$var2 = compiledFetchAttribute( $var1, 'text' );
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

list( $loopItem, $loopKeys, $loopCount, $currentIndex, $index ) = array_pop( $sectionStack );
++$currentIndex;

++$index;

}
unset( $loopKeys, $loopCount, $index, $last, $loopIndex, $loopItem );
$text .= ' - ';
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'site', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['site'] : null;
$var2 = compiledFetchAttribute( $var1, 'title' );
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

$blockText = $text;
$vars[$rootNamespace]['site_title'] = $blockText;
unset( $blockText );

$text = array_pop( $textStack );
$currentNamespace = array_pop( $namespaceStack );

$namespace = $currentNamespace;
if ( $namespace == '' )
    $namespace = "Path";
else
    $namespace .= ':Path';
unset( $vars[$namespace]['path'] );
$namespace = $currentNamespace;
if ( $namespace == '' )
    $namespace = "Path";
else
    $namespace .= ':Path';
unset( $vars[$namespace]['reverse_path'] );
}
unset( $if_cond );
// if ends

$text .= '    <title>';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'site_title', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['site_title'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '</title>

    ';
// if begins
unset( $if_cond );
unset( $if_cond1 );
unset( $if_cond2 );
$namespace = 'Header';
unset( $if_cond2 );
$if_cond2 = ( array_key_exists( $namespace, $vars ) and array_key_exists( 'extra_data', $vars[$namespace] ) ) ? $vars[$namespace]['extra_data'] : null;
if (! isset( $if_cond2 ) ) $if_cond2 = NULL;
while ( is_object( $if_cond2 ) and method_exists( $if_cond2, 'templateValue' ) )
    $if_cond2 = $if_cond2->templateValue();
$if_cond1 = isset( $if_cond2 );unset( $if_cond2 );
if (! isset( $if_cond1 ) ) $if_cond1 = NULL;
while ( is_object( $if_cond1 ) and method_exists( $if_cond1, 'templateValue' ) )
    $if_cond1 = $if_cond1->templateValue();
unset( $if_cond2 );
unset( $if_cond3 );
$namespace = 'Header';
unset( $if_cond3 );
$if_cond3 = ( array_key_exists( $namespace, $vars ) and array_key_exists( 'extra_data', $vars[$namespace] ) ) ? $vars[$namespace]['extra_data'] : null;
if (! isset( $if_cond3 ) ) $if_cond3 = NULL;
while ( is_object( $if_cond3 ) and method_exists( $if_cond3, 'templateValue' ) )
    $if_cond3 = $if_cond3->templateValue();
$if_cond2 = is_array( $if_cond3 );unset( $if_cond3 );
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
$text .= '      ';
unset( $loopItem );
$namespace = 'Header';
unset( $loopItem );
$loopItem = ( array_key_exists( $namespace, $vars ) and array_key_exists( 'extra_data', $vars[$namespace] ) ) ? $vars[$namespace]['extra_data'] : null;
if (! isset( $loopItem ) ) $loopItem = NULL;
while ( is_object( $loopItem ) and method_exists( $loopItem, 'templateValue' ) )
    $loopItem = $loopItem->templateValue();

$namespaceStack[] = $currentNamespace;
$currentNamespace .= ( $currentNamespace ? ":" : "" ) . 'ExtraData';

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

$text .= '      ';
unset( $var );
unset( $var );
$var = ( array_key_exists( $currentNamespace, $vars ) and array_key_exists( 'item', $vars[$currentNamespace] ) ) ? $vars[$currentNamespace]['item'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '
      ';
list( $loopItem, $loopKeys, $loopCount, $currentIndex, $index ) = array_pop( $sectionStack );
++$currentIndex;

++$index;

}
unset( $loopKeys, $loopCount, $index, $last, $loopIndex, $loopItem );
$currentNamespace = array_pop( $namespaceStack );

$text .= '    ';
}
unset( $if_cond );
// if ends

$text .= '
    
    ';
// if begins
unset( $if_cond );
unset( $if_cond );
$if_cond = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'site', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['site'] : null;
$if_cond1 = compiledFetchAttribute( $if_cond, 'redirect' );
unset( $if_cond );
$if_cond = $if_cond1;
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '    <meta http-equiv="Refresh" content="';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'site', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['site'] : null;
$var1 = compiledFetchAttribute( $var, 'redirect' );
unset( $var );
$var = $var1;
$var1 = compiledFetchAttribute( $var, 'timer' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '; URL=';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'site', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['site'] : null;
$var1 = compiledFetchAttribute( $var, 'redirect' );
unset( $var );
$var = $var1;
$var1 = compiledFetchAttribute( $var, 'location' );
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

$text .= '    ';
// foreach begins
$skipDelimiter = true;
if ( !isset( $fe_variable_stack_995e82e26af823319fdc0ffdbf1a563d_3 ) ) $fe_variable_stack_995e82e26af823319fdc0ffdbf1a563d_3 = array();
$fe_variable_stack_995e82e26af823319fdc0ffdbf1a563d_3[] = compact( 'fe_array_995e82e26af823319fdc0ffdbf1a563d_3', 'fe_array_keys_995e82e26af823319fdc0ffdbf1a563d_3', 'fe_n_items_995e82e26af823319fdc0ffdbf1a563d_3', 'fe_n_items_processed_995e82e26af823319fdc0ffdbf1a563d_3', 'fe_i_995e82e26af823319fdc0ffdbf1a563d_3', 'fe_key_995e82e26af823319fdc0ffdbf1a563d_3', 'fe_val_995e82e26af823319fdc0ffdbf1a563d_3', 'fe_offset_995e82e26af823319fdc0ffdbf1a563d_3', 'fe_max_995e82e26af823319fdc0ffdbf1a563d_3', 'fe_reverse_995e82e26af823319fdc0ffdbf1a563d_3', 'fe_first_val_995e82e26af823319fdc0ffdbf1a563d_3', 'fe_last_val_995e82e26af823319fdc0ffdbf1a563d_3' );
unset( $fe_array_995e82e26af823319fdc0ffdbf1a563d_3 );
unset( $fe_array_995e82e26af823319fdc0ffdbf1a563d_3 );
$fe_array_995e82e26af823319fdc0ffdbf1a563d_3 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'site', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['site'] : null;
$fe_array_995e82e26af823319fdc0ffdbf1a563d_31 = compiledFetchAttribute( $fe_array_995e82e26af823319fdc0ffdbf1a563d_3, 'http_equiv' );
unset( $fe_array_995e82e26af823319fdc0ffdbf1a563d_3 );
$fe_array_995e82e26af823319fdc0ffdbf1a563d_3 = $fe_array_995e82e26af823319fdc0ffdbf1a563d_31;
if (! isset( $fe_array_995e82e26af823319fdc0ffdbf1a563d_3 ) ) $fe_array_995e82e26af823319fdc0ffdbf1a563d_3 = NULL;
while ( is_object( $fe_array_995e82e26af823319fdc0ffdbf1a563d_3 ) and method_exists( $fe_array_995e82e26af823319fdc0ffdbf1a563d_3, 'templateValue' ) )
    $fe_array_995e82e26af823319fdc0ffdbf1a563d_3 = $fe_array_995e82e26af823319fdc0ffdbf1a563d_3->templateValue();

$fe_array_keys_995e82e26af823319fdc0ffdbf1a563d_3 = is_array( $fe_array_995e82e26af823319fdc0ffdbf1a563d_3 ) ? array_keys( $fe_array_995e82e26af823319fdc0ffdbf1a563d_3 ) : array();
$fe_n_items_995e82e26af823319fdc0ffdbf1a563d_3 = count( $fe_array_keys_995e82e26af823319fdc0ffdbf1a563d_3 );
$fe_n_items_processed_995e82e26af823319fdc0ffdbf1a563d_3 = 0;
$fe_offset_995e82e26af823319fdc0ffdbf1a563d_3 = 0;
$fe_max_995e82e26af823319fdc0ffdbf1a563d_3 = $fe_n_items_995e82e26af823319fdc0ffdbf1a563d_3 - $fe_offset_995e82e26af823319fdc0ffdbf1a563d_3;
$fe_reverse_995e82e26af823319fdc0ffdbf1a563d_3 = false;
if ( $fe_offset_995e82e26af823319fdc0ffdbf1a563d_3 < 0 || $fe_offset_995e82e26af823319fdc0ffdbf1a563d_3 >= $fe_n_items_995e82e26af823319fdc0ffdbf1a563d_3 )
{
    $fe_offset_995e82e26af823319fdc0ffdbf1a563d_3 = ( $fe_offset_995e82e26af823319fdc0ffdbf1a563d_3 < 0 ) ? 0 : $fe_n_items_995e82e26af823319fdc0ffdbf1a563d_3;
    if ( $fe_n_items_995e82e26af823319fdc0ffdbf1a563d_3 || $fe_offset_995e82e26af823319fdc0ffdbf1a563d_3 < 0 )
 {
        eZDebug::writeWarning("Invalid 'offset' parameter specified: '$fe_offset_995e82e26af823319fdc0ffdbf1a563d_3'. Array count: $fe_n_items_995e82e26af823319fdc0ffdbf1a563d_3");   
}
}
if ( $fe_max_995e82e26af823319fdc0ffdbf1a563d_3 < 0 || $fe_offset_995e82e26af823319fdc0ffdbf1a563d_3 + $fe_max_995e82e26af823319fdc0ffdbf1a563d_3 > $fe_n_items_995e82e26af823319fdc0ffdbf1a563d_3 )
{
    if ( $fe_max_995e82e26af823319fdc0ffdbf1a563d_3 < 0 )
 eZDebug::writeWarning("Invalid 'max' parameter specified: $fe_max_995e82e26af823319fdc0ffdbf1a563d_3");
    $fe_max_995e82e26af823319fdc0ffdbf1a563d_3 = $fe_n_items_995e82e26af823319fdc0ffdbf1a563d_3 - $fe_offset_995e82e26af823319fdc0ffdbf1a563d_3;
}
if ( $fe_reverse_995e82e26af823319fdc0ffdbf1a563d_3 )
{
    $fe_first_val_995e82e26af823319fdc0ffdbf1a563d_3 = $fe_n_items_995e82e26af823319fdc0ffdbf1a563d_3 - 1 - $fe_offset_995e82e26af823319fdc0ffdbf1a563d_3;
    $fe_last_val_995e82e26af823319fdc0ffdbf1a563d_3  = 0;
}
else
{
    $fe_first_val_995e82e26af823319fdc0ffdbf1a563d_3 = $fe_offset_995e82e26af823319fdc0ffdbf1a563d_3;
    $fe_last_val_995e82e26af823319fdc0ffdbf1a563d_3  = $fe_n_items_995e82e26af823319fdc0ffdbf1a563d_3 - 1;
}
// foreach
for ( $fe_i_995e82e26af823319fdc0ffdbf1a563d_3 = $fe_first_val_995e82e26af823319fdc0ffdbf1a563d_3; $fe_n_items_processed_995e82e26af823319fdc0ffdbf1a563d_3 < $fe_max_995e82e26af823319fdc0ffdbf1a563d_3 && ( $fe_reverse_995e82e26af823319fdc0ffdbf1a563d_3 ? $fe_i_995e82e26af823319fdc0ffdbf1a563d_3 >= $fe_last_val_995e82e26af823319fdc0ffdbf1a563d_3 : $fe_i_995e82e26af823319fdc0ffdbf1a563d_3 <= $fe_last_val_995e82e26af823319fdc0ffdbf1a563d_3 ); $fe_reverse_995e82e26af823319fdc0ffdbf1a563d_3 ? $fe_i_995e82e26af823319fdc0ffdbf1a563d_3-- : $fe_i_995e82e26af823319fdc0ffdbf1a563d_3++ )
{
$fe_key_995e82e26af823319fdc0ffdbf1a563d_3 = $fe_array_keys_995e82e26af823319fdc0ffdbf1a563d_3[$fe_i_995e82e26af823319fdc0ffdbf1a563d_3];
$fe_val_995e82e26af823319fdc0ffdbf1a563d_3 = $fe_array_995e82e26af823319fdc0ffdbf1a563d_3[$fe_key_995e82e26af823319fdc0ffdbf1a563d_3];
$vars[$rootNamespace]['item'] = $fe_val_995e82e26af823319fdc0ffdbf1a563d_3;
$vars[$rootNamespace]['key'] = $fe_key_995e82e26af823319fdc0ffdbf1a563d_3;
$text .= '        <meta name="';
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'key', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['key'] : null;
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

$text .= '" content="';
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'item', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['item'] : null;
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

$text .= '" />

    ';
$fe_n_items_processed_995e82e26af823319fdc0ffdbf1a563d_3++;
} // foreach
$skipDelimiter = false;
if ( count( $fe_variable_stack_995e82e26af823319fdc0ffdbf1a563d_3 ) ) extract( array_pop( $fe_variable_stack_995e82e26af823319fdc0ffdbf1a563d_3 ) );

else
{

unset( $fe_array_995e82e26af823319fdc0ffdbf1a563d_3 );

unset( $fe_array_keys_995e82e26af823319fdc0ffdbf1a563d_3 );

unset( $fe_n_items_995e82e26af823319fdc0ffdbf1a563d_3 );

unset( $fe_n_items_processed_995e82e26af823319fdc0ffdbf1a563d_3 );

unset( $fe_i_995e82e26af823319fdc0ffdbf1a563d_3 );

unset( $fe_key_995e82e26af823319fdc0ffdbf1a563d_3 );

unset( $fe_val_995e82e26af823319fdc0ffdbf1a563d_3 );

unset( $fe_offset_995e82e26af823319fdc0ffdbf1a563d_3 );

unset( $fe_max_995e82e26af823319fdc0ffdbf1a563d_3 );

unset( $fe_reverse_995e82e26af823319fdc0ffdbf1a563d_3 );

unset( $fe_first_val_995e82e26af823319fdc0ffdbf1a563d_3 );

unset( $fe_last_val_995e82e26af823319fdc0ffdbf1a563d_3 );

unset( $fe_variable_stack_995e82e26af823319fdc0ffdbf1a563d_3 );

}

// foreach ends
$text .= '    ';
// foreach begins
$skipDelimiter = true;
if ( !isset( $fe_variable_stack_995e82e26af823319fdc0ffdbf1a563d_4 ) ) $fe_variable_stack_995e82e26af823319fdc0ffdbf1a563d_4 = array();
$fe_variable_stack_995e82e26af823319fdc0ffdbf1a563d_4[] = compact( 'fe_array_995e82e26af823319fdc0ffdbf1a563d_4', 'fe_array_keys_995e82e26af823319fdc0ffdbf1a563d_4', 'fe_n_items_995e82e26af823319fdc0ffdbf1a563d_4', 'fe_n_items_processed_995e82e26af823319fdc0ffdbf1a563d_4', 'fe_i_995e82e26af823319fdc0ffdbf1a563d_4', 'fe_key_995e82e26af823319fdc0ffdbf1a563d_4', 'fe_val_995e82e26af823319fdc0ffdbf1a563d_4', 'fe_offset_995e82e26af823319fdc0ffdbf1a563d_4', 'fe_max_995e82e26af823319fdc0ffdbf1a563d_4', 'fe_reverse_995e82e26af823319fdc0ffdbf1a563d_4', 'fe_first_val_995e82e26af823319fdc0ffdbf1a563d_4', 'fe_last_val_995e82e26af823319fdc0ffdbf1a563d_4' );
unset( $fe_array_995e82e26af823319fdc0ffdbf1a563d_4 );
unset( $fe_array_995e82e26af823319fdc0ffdbf1a563d_4 );
$fe_array_995e82e26af823319fdc0ffdbf1a563d_4 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'site', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['site'] : null;
$fe_array_995e82e26af823319fdc0ffdbf1a563d_41 = compiledFetchAttribute( $fe_array_995e82e26af823319fdc0ffdbf1a563d_4, 'meta' );
unset( $fe_array_995e82e26af823319fdc0ffdbf1a563d_4 );
$fe_array_995e82e26af823319fdc0ffdbf1a563d_4 = $fe_array_995e82e26af823319fdc0ffdbf1a563d_41;
if (! isset( $fe_array_995e82e26af823319fdc0ffdbf1a563d_4 ) ) $fe_array_995e82e26af823319fdc0ffdbf1a563d_4 = NULL;
while ( is_object( $fe_array_995e82e26af823319fdc0ffdbf1a563d_4 ) and method_exists( $fe_array_995e82e26af823319fdc0ffdbf1a563d_4, 'templateValue' ) )
    $fe_array_995e82e26af823319fdc0ffdbf1a563d_4 = $fe_array_995e82e26af823319fdc0ffdbf1a563d_4->templateValue();

$fe_array_keys_995e82e26af823319fdc0ffdbf1a563d_4 = is_array( $fe_array_995e82e26af823319fdc0ffdbf1a563d_4 ) ? array_keys( $fe_array_995e82e26af823319fdc0ffdbf1a563d_4 ) : array();
$fe_n_items_995e82e26af823319fdc0ffdbf1a563d_4 = count( $fe_array_keys_995e82e26af823319fdc0ffdbf1a563d_4 );
$fe_n_items_processed_995e82e26af823319fdc0ffdbf1a563d_4 = 0;
$fe_offset_995e82e26af823319fdc0ffdbf1a563d_4 = 0;
$fe_max_995e82e26af823319fdc0ffdbf1a563d_4 = $fe_n_items_995e82e26af823319fdc0ffdbf1a563d_4 - $fe_offset_995e82e26af823319fdc0ffdbf1a563d_4;
$fe_reverse_995e82e26af823319fdc0ffdbf1a563d_4 = false;
if ( $fe_offset_995e82e26af823319fdc0ffdbf1a563d_4 < 0 || $fe_offset_995e82e26af823319fdc0ffdbf1a563d_4 >= $fe_n_items_995e82e26af823319fdc0ffdbf1a563d_4 )
{
    $fe_offset_995e82e26af823319fdc0ffdbf1a563d_4 = ( $fe_offset_995e82e26af823319fdc0ffdbf1a563d_4 < 0 ) ? 0 : $fe_n_items_995e82e26af823319fdc0ffdbf1a563d_4;
    if ( $fe_n_items_995e82e26af823319fdc0ffdbf1a563d_4 || $fe_offset_995e82e26af823319fdc0ffdbf1a563d_4 < 0 )
 {
        eZDebug::writeWarning("Invalid 'offset' parameter specified: '$fe_offset_995e82e26af823319fdc0ffdbf1a563d_4'. Array count: $fe_n_items_995e82e26af823319fdc0ffdbf1a563d_4");   
}
}
if ( $fe_max_995e82e26af823319fdc0ffdbf1a563d_4 < 0 || $fe_offset_995e82e26af823319fdc0ffdbf1a563d_4 + $fe_max_995e82e26af823319fdc0ffdbf1a563d_4 > $fe_n_items_995e82e26af823319fdc0ffdbf1a563d_4 )
{
    if ( $fe_max_995e82e26af823319fdc0ffdbf1a563d_4 < 0 )
 eZDebug::writeWarning("Invalid 'max' parameter specified: $fe_max_995e82e26af823319fdc0ffdbf1a563d_4");
    $fe_max_995e82e26af823319fdc0ffdbf1a563d_4 = $fe_n_items_995e82e26af823319fdc0ffdbf1a563d_4 - $fe_offset_995e82e26af823319fdc0ffdbf1a563d_4;
}
if ( $fe_reverse_995e82e26af823319fdc0ffdbf1a563d_4 )
{
    $fe_first_val_995e82e26af823319fdc0ffdbf1a563d_4 = $fe_n_items_995e82e26af823319fdc0ffdbf1a563d_4 - 1 - $fe_offset_995e82e26af823319fdc0ffdbf1a563d_4;
    $fe_last_val_995e82e26af823319fdc0ffdbf1a563d_4  = 0;
}
else
{
    $fe_first_val_995e82e26af823319fdc0ffdbf1a563d_4 = $fe_offset_995e82e26af823319fdc0ffdbf1a563d_4;
    $fe_last_val_995e82e26af823319fdc0ffdbf1a563d_4  = $fe_n_items_995e82e26af823319fdc0ffdbf1a563d_4 - 1;
}
// foreach
for ( $fe_i_995e82e26af823319fdc0ffdbf1a563d_4 = $fe_first_val_995e82e26af823319fdc0ffdbf1a563d_4; $fe_n_items_processed_995e82e26af823319fdc0ffdbf1a563d_4 < $fe_max_995e82e26af823319fdc0ffdbf1a563d_4 && ( $fe_reverse_995e82e26af823319fdc0ffdbf1a563d_4 ? $fe_i_995e82e26af823319fdc0ffdbf1a563d_4 >= $fe_last_val_995e82e26af823319fdc0ffdbf1a563d_4 : $fe_i_995e82e26af823319fdc0ffdbf1a563d_4 <= $fe_last_val_995e82e26af823319fdc0ffdbf1a563d_4 ); $fe_reverse_995e82e26af823319fdc0ffdbf1a563d_4 ? $fe_i_995e82e26af823319fdc0ffdbf1a563d_4-- : $fe_i_995e82e26af823319fdc0ffdbf1a563d_4++ )
{
$fe_key_995e82e26af823319fdc0ffdbf1a563d_4 = $fe_array_keys_995e82e26af823319fdc0ffdbf1a563d_4[$fe_i_995e82e26af823319fdc0ffdbf1a563d_4];
$fe_val_995e82e26af823319fdc0ffdbf1a563d_4 = $fe_array_995e82e26af823319fdc0ffdbf1a563d_4[$fe_key_995e82e26af823319fdc0ffdbf1a563d_4];
$vars[$rootNamespace]['item'] = $fe_val_995e82e26af823319fdc0ffdbf1a563d_4;
$vars[$rootNamespace]['key'] = $fe_key_995e82e26af823319fdc0ffdbf1a563d_4;
$text .= '    ';
// if begins
unset( $if_cond );
unset( $if_cond1 );
unset( $if_cond1 );
$if_cond1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'module_result', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['module_result'] : null;
$if_cond2 = compiledFetchAttribute( $if_cond1, 'content_info' );
unset( $if_cond1 );
$if_cond1 = $if_cond2;
$if_cond2 = compiledFetchAttribute( $if_cond1, 'persistent_variable' );
unset( $if_cond1 );
$if_cond1 = $if_cond2;
unset( $if_cond3 );
unset( $if_cond3 );
$if_cond3 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'key', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['key'] : null;
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
$text .= '        <meta name="';
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'key', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['key'] : null;
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

$text .= '" content="';
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'module_result', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['module_result'] : null;
$var2 = compiledFetchAttribute( $var1, 'content_info' );
unset( $var1 );
$var1 = $var2;
$var2 = compiledFetchAttribute( $var1, 'persistent_variable' );
unset( $var1 );
$var1 = $var2;
unset( $var3 );
unset( $var3 );
$var3 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'key', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['key'] : null;
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
$var = htmlspecialchars( $var1 );
unset( $var1 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= '" />
    ';
}
else
{
$text .= '        <meta name="';
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'key', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['key'] : null;
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

$text .= '" content="';
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'item', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['item'] : null;
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

$text .= '" />
    ';
}
unset( $if_cond );
// if ends

$text .= '
    ';
$fe_n_items_processed_995e82e26af823319fdc0ffdbf1a563d_4++;
} // foreach
$skipDelimiter = false;
if ( count( $fe_variable_stack_995e82e26af823319fdc0ffdbf1a563d_4 ) ) extract( array_pop( $fe_variable_stack_995e82e26af823319fdc0ffdbf1a563d_4 ) );

else
{

unset( $fe_array_995e82e26af823319fdc0ffdbf1a563d_4 );

unset( $fe_array_keys_995e82e26af823319fdc0ffdbf1a563d_4 );

unset( $fe_n_items_995e82e26af823319fdc0ffdbf1a563d_4 );

unset( $fe_n_items_processed_995e82e26af823319fdc0ffdbf1a563d_4 );

unset( $fe_i_995e82e26af823319fdc0ffdbf1a563d_4 );

unset( $fe_key_995e82e26af823319fdc0ffdbf1a563d_4 );

unset( $fe_val_995e82e26af823319fdc0ffdbf1a563d_4 );

unset( $fe_offset_995e82e26af823319fdc0ffdbf1a563d_4 );

unset( $fe_max_995e82e26af823319fdc0ffdbf1a563d_4 );

unset( $fe_reverse_995e82e26af823319fdc0ffdbf1a563d_4 );

unset( $fe_first_val_995e82e26af823319fdc0ffdbf1a563d_4 );

unset( $fe_last_val_995e82e26af823319fdc0ffdbf1a563d_4 );

unset( $fe_variable_stack_995e82e26af823319fdc0ffdbf1a563d_4 );

}

// foreach ends
$text .= '
    
    <!--[if lt IE 9 ]>
        <meta http-equiv="X-UA-Compatible" content="IE=8,chrome=1" />
    <![endif]-->

    <meta name="MSSmartTagsPreventParsing" content="TRUE" />
    <meta name="generator" content="eZ Publish" />
';
// if begins
unset( $if_cond );
unset( $if_cond );
$if_cond = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'canonical_link', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['canonical_link'] : null;
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '    ';
$oldRestoreIncludeArray_867245340f51d196ab9ba938380285f8 = isset( $restoreIncludeArray ) ? $restoreIncludeArray : array();
$restoreIncludeArray = array();

if ( !isset( $dKeys ) )
{
    $resH = $tpl->resourceHandler( "design" );
    $dKeys = $resH->keys();
}

$resourceFound = false;
if ( file_exists( 'var/ezwebin_site/cache/template/compiled/canonical_link-de8b5b676752c38c58b3bff9d63047d5.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$rootNamespace = $currentNamespace;
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/ezwebin/design/ezwebin/templates/canonical_link.tpl' );
include( '' . 'var/ezwebin_site/cache/template/compiled/canonical_link-de8b5b676752c38c58b3bff9d63047d5.php' );
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
$tpl->processURI( 'extension/ezwebin/design/ezwebin/templates/canonical_link.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
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
$restoreIncludeArray = $oldRestoreIncludeArray_867245340f51d196ab9ba938380285f8;

}
unset( $if_cond );
// if ends

// if begins
unset( $if_cond );
unset( $if_cond );
$if_cond = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'enable_link', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['enable_link'] : null;
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '    ';
$oldRestoreIncludeArray_c32f6e179a57aaa71bfae556637662da = isset( $restoreIncludeArray ) ? $restoreIncludeArray : array();
$restoreIncludeArray = array();

if ( isset( $currentNamespace ) and isset( $vars[$currentNamespace]['enable_help'] ) )
    $restoreIncludeArray[] = array( $currentNamespace, 'enable_help', $vars[$currentNamespace]['enable_help'] );
elseif ( !isset( $vars[( isset( $currentNamespace ) ? $currentNamespace : '' )]['enable_help'] ) ) 
    $restoreIncludeArray[] = array( ( isset( $currentNamespace ) ? $currentNamespace : '' ), 'enable_help', 'unset' );

unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'enable_help', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['enable_help'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$vars[$currentNamespace]['enable_help'] = $var;
unset( $var );
if ( isset( $currentNamespace ) and isset( $vars[$currentNamespace]['enable_link'] ) )
    $restoreIncludeArray[] = array( $currentNamespace, 'enable_link', $vars[$currentNamespace]['enable_link'] );
elseif ( !isset( $vars[( isset( $currentNamespace ) ? $currentNamespace : '' )]['enable_link'] ) ) 
    $restoreIncludeArray[] = array( ( isset( $currentNamespace ) ? $currentNamespace : '' ), 'enable_link', 'unset' );

unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'enable_link', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['enable_link'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$vars[$currentNamespace]['enable_link'] = $var;
unset( $var );
if ( !isset( $dKeys ) )
{
    $resH = $tpl->resourceHandler( "design" );
    $dKeys = $resH->keys();
}

$resourceFound = false;
if ( file_exists( 'var/ezwebin_site/cache/template/compiled/link-f6428a72184d2c324f10d79b13c5bab5.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$rootNamespace = $currentNamespace;
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/ezwebin/design/ezwebin/templates/link.tpl' );
include( '' . 'var/ezwebin_site/cache/template/compiled/link-f6428a72184d2c324f10d79b13c5bab5.php' );
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
$tpl->processURI( 'extension/ezwebin/design/ezwebin/templates/link.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
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
$restoreIncludeArray = $oldRestoreIncludeArray_c32f6e179a57aaa71bfae556637662da;

}
unset( $if_cond );
// if ends

if ( isset( $setArray[$currentNamespace]['enable_help'] ) )
{
unset( $vars[$currentNamespace]['enable_help'] );
}

if ( isset( $setArray[$currentNamespace]['enable_link'] ) )
{
unset( $vars[$currentNamespace]['enable_link'] );
}

if ( isset( $setArray[$currentNamespace]['canonical_link'] ) )
{
unset( $vars[$currentNamespace]['canonical_link'] );
}


$setArray = $oldSetArray_3094384005a047ed57741e66db1189ac;
$tpl->Level--;
?>
