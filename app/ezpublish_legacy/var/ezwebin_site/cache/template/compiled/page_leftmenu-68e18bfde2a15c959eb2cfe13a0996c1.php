<?php
// URI:       extension/ezwebin/design/ezwebin/templates/page_leftmenu.tpl
// Filename:  extension/ezwebin/design/ezwebin/templates/page_leftmenu.tpl
// Timestamp: 1350735749 (Sat Oct 20 12:22:29 UTC 2012)
$oldSetArray_f661a9092199bc4a9cb8998f6d60adc3 = isset( $setArray ) ? $setArray : array();
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

$text .= '    <div id="sidemenu-position">
      <div id="sidemenu">
        ';
// if begins
unset( $if_cond );
unset( $if_cond1 );
unset( $if_cond1 );
$if_cond1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'pagedata', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['pagedata'] : null;
$if_cond2 = compiledFetchAttribute( $if_cond1, 'left_menu' );
unset( $if_cond1 );
$if_cond1 = $if_cond2;
if (! isset( $if_cond1 ) ) $if_cond1 = NULL;
while ( is_object( $if_cond1 ) and method_exists( $if_cond1, 'templateValue' ) )
    $if_cond1 = $if_cond1->templateValue();
$if_cond = is_array( $if_cond1 );unset( $if_cond1 );
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '            ';
// foreach begins
$skipDelimiter = true;
if ( !isset( $fe_variable_stack_08ca932e3a8f7bf3b4b7f16c312c8c8b_3 ) ) $fe_variable_stack_08ca932e3a8f7bf3b4b7f16c312c8c8b_3 = array();
$fe_variable_stack_08ca932e3a8f7bf3b4b7f16c312c8c8b_3[] = compact( 'fe_array_08ca932e3a8f7bf3b4b7f16c312c8c8b_3', 'fe_array_keys_08ca932e3a8f7bf3b4b7f16c312c8c8b_3', 'fe_n_items_08ca932e3a8f7bf3b4b7f16c312c8c8b_3', 'fe_n_items_processed_08ca932e3a8f7bf3b4b7f16c312c8c8b_3', 'fe_i_08ca932e3a8f7bf3b4b7f16c312c8c8b_3', 'fe_key_08ca932e3a8f7bf3b4b7f16c312c8c8b_3', 'fe_val_08ca932e3a8f7bf3b4b7f16c312c8c8b_3', 'fe_offset_08ca932e3a8f7bf3b4b7f16c312c8c8b_3', 'fe_max_08ca932e3a8f7bf3b4b7f16c312c8c8b_3', 'fe_reverse_08ca932e3a8f7bf3b4b7f16c312c8c8b_3', 'fe_first_val_08ca932e3a8f7bf3b4b7f16c312c8c8b_3', 'fe_last_val_08ca932e3a8f7bf3b4b7f16c312c8c8b_3' );
unset( $fe_array_08ca932e3a8f7bf3b4b7f16c312c8c8b_3 );
unset( $fe_array_08ca932e3a8f7bf3b4b7f16c312c8c8b_3 );
$fe_array_08ca932e3a8f7bf3b4b7f16c312c8c8b_3 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'pagedata', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['pagedata'] : null;
$fe_array_08ca932e3a8f7bf3b4b7f16c312c8c8b_31 = compiledFetchAttribute( $fe_array_08ca932e3a8f7bf3b4b7f16c312c8c8b_3, 'left_menu' );
unset( $fe_array_08ca932e3a8f7bf3b4b7f16c312c8c8b_3 );
$fe_array_08ca932e3a8f7bf3b4b7f16c312c8c8b_3 = $fe_array_08ca932e3a8f7bf3b4b7f16c312c8c8b_31;
if (! isset( $fe_array_08ca932e3a8f7bf3b4b7f16c312c8c8b_3 ) ) $fe_array_08ca932e3a8f7bf3b4b7f16c312c8c8b_3 = NULL;
while ( is_object( $fe_array_08ca932e3a8f7bf3b4b7f16c312c8c8b_3 ) and method_exists( $fe_array_08ca932e3a8f7bf3b4b7f16c312c8c8b_3, 'templateValue' ) )
    $fe_array_08ca932e3a8f7bf3b4b7f16c312c8c8b_3 = $fe_array_08ca932e3a8f7bf3b4b7f16c312c8c8b_3->templateValue();

$fe_array_keys_08ca932e3a8f7bf3b4b7f16c312c8c8b_3 = is_array( $fe_array_08ca932e3a8f7bf3b4b7f16c312c8c8b_3 ) ? array_keys( $fe_array_08ca932e3a8f7bf3b4b7f16c312c8c8b_3 ) : array();
$fe_n_items_08ca932e3a8f7bf3b4b7f16c312c8c8b_3 = count( $fe_array_keys_08ca932e3a8f7bf3b4b7f16c312c8c8b_3 );
$fe_n_items_processed_08ca932e3a8f7bf3b4b7f16c312c8c8b_3 = 0;
$fe_offset_08ca932e3a8f7bf3b4b7f16c312c8c8b_3 = 0;
$fe_max_08ca932e3a8f7bf3b4b7f16c312c8c8b_3 = $fe_n_items_08ca932e3a8f7bf3b4b7f16c312c8c8b_3 - $fe_offset_08ca932e3a8f7bf3b4b7f16c312c8c8b_3;
$fe_reverse_08ca932e3a8f7bf3b4b7f16c312c8c8b_3 = false;
if ( $fe_offset_08ca932e3a8f7bf3b4b7f16c312c8c8b_3 < 0 || $fe_offset_08ca932e3a8f7bf3b4b7f16c312c8c8b_3 >= $fe_n_items_08ca932e3a8f7bf3b4b7f16c312c8c8b_3 )
{
    $fe_offset_08ca932e3a8f7bf3b4b7f16c312c8c8b_3 = ( $fe_offset_08ca932e3a8f7bf3b4b7f16c312c8c8b_3 < 0 ) ? 0 : $fe_n_items_08ca932e3a8f7bf3b4b7f16c312c8c8b_3;
    if ( $fe_n_items_08ca932e3a8f7bf3b4b7f16c312c8c8b_3 || $fe_offset_08ca932e3a8f7bf3b4b7f16c312c8c8b_3 < 0 )
 {
        eZDebug::writeWarning("Invalid 'offset' parameter specified: '$fe_offset_08ca932e3a8f7bf3b4b7f16c312c8c8b_3'. Array count: $fe_n_items_08ca932e3a8f7bf3b4b7f16c312c8c8b_3");   
}
}
if ( $fe_max_08ca932e3a8f7bf3b4b7f16c312c8c8b_3 < 0 || $fe_offset_08ca932e3a8f7bf3b4b7f16c312c8c8b_3 + $fe_max_08ca932e3a8f7bf3b4b7f16c312c8c8b_3 > $fe_n_items_08ca932e3a8f7bf3b4b7f16c312c8c8b_3 )
{
    if ( $fe_max_08ca932e3a8f7bf3b4b7f16c312c8c8b_3 < 0 )
 eZDebug::writeWarning("Invalid 'max' parameter specified: $fe_max_08ca932e3a8f7bf3b4b7f16c312c8c8b_3");
    $fe_max_08ca932e3a8f7bf3b4b7f16c312c8c8b_3 = $fe_n_items_08ca932e3a8f7bf3b4b7f16c312c8c8b_3 - $fe_offset_08ca932e3a8f7bf3b4b7f16c312c8c8b_3;
}
if ( $fe_reverse_08ca932e3a8f7bf3b4b7f16c312c8c8b_3 )
{
    $fe_first_val_08ca932e3a8f7bf3b4b7f16c312c8c8b_3 = $fe_n_items_08ca932e3a8f7bf3b4b7f16c312c8c8b_3 - 1 - $fe_offset_08ca932e3a8f7bf3b4b7f16c312c8c8b_3;
    $fe_last_val_08ca932e3a8f7bf3b4b7f16c312c8c8b_3  = 0;
}
else
{
    $fe_first_val_08ca932e3a8f7bf3b4b7f16c312c8c8b_3 = $fe_offset_08ca932e3a8f7bf3b4b7f16c312c8c8b_3;
    $fe_last_val_08ca932e3a8f7bf3b4b7f16c312c8c8b_3  = $fe_n_items_08ca932e3a8f7bf3b4b7f16c312c8c8b_3 - 1;
}
// foreach
for ( $fe_i_08ca932e3a8f7bf3b4b7f16c312c8c8b_3 = $fe_first_val_08ca932e3a8f7bf3b4b7f16c312c8c8b_3; $fe_n_items_processed_08ca932e3a8f7bf3b4b7f16c312c8c8b_3 < $fe_max_08ca932e3a8f7bf3b4b7f16c312c8c8b_3 && ( $fe_reverse_08ca932e3a8f7bf3b4b7f16c312c8c8b_3 ? $fe_i_08ca932e3a8f7bf3b4b7f16c312c8c8b_3 >= $fe_last_val_08ca932e3a8f7bf3b4b7f16c312c8c8b_3 : $fe_i_08ca932e3a8f7bf3b4b7f16c312c8c8b_3 <= $fe_last_val_08ca932e3a8f7bf3b4b7f16c312c8c8b_3 ); $fe_reverse_08ca932e3a8f7bf3b4b7f16c312c8c8b_3 ? $fe_i_08ca932e3a8f7bf3b4b7f16c312c8c8b_3-- : $fe_i_08ca932e3a8f7bf3b4b7f16c312c8c8b_3++ )
{
$fe_key_08ca932e3a8f7bf3b4b7f16c312c8c8b_3 = $fe_array_keys_08ca932e3a8f7bf3b4b7f16c312c8c8b_3[$fe_i_08ca932e3a8f7bf3b4b7f16c312c8c8b_3];
$fe_val_08ca932e3a8f7bf3b4b7f16c312c8c8b_3 = $fe_array_08ca932e3a8f7bf3b4b7f16c312c8c8b_3[$fe_key_08ca932e3a8f7bf3b4b7f16c312c8c8b_3];
$vars[$rootNamespace]['left_menu'] = $fe_val_08ca932e3a8f7bf3b4b7f16c312c8c8b_3;
if ( $skipDelimiter )
    $skipDelimiter = false;
else
{ // delimiter begins
$text .= '<div class="hr"></div>';
} // delimiter ends

$text .= '                ';
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
            1 => 'design:menu/',
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
              2 => 'left_menu',
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
    0 => 5,
    1 => 16,
    2 => 177,
  ),
  1 => 
  array (
    0 => 5,
    1 => 70,
    2 => 231,
  ),
  2 => 'extension/ezwebin/design/ezwebin/templates/page_leftmenu.tpl',
),
                       $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );

$text .= '                            ';
$fe_n_items_processed_08ca932e3a8f7bf3b4b7f16c312c8c8b_3++;
} // foreach
$skipDelimiter = false;
if ( count( $fe_variable_stack_08ca932e3a8f7bf3b4b7f16c312c8c8b_3 ) ) extract( array_pop( $fe_variable_stack_08ca932e3a8f7bf3b4b7f16c312c8c8b_3 ) );

else
{

unset( $fe_array_08ca932e3a8f7bf3b4b7f16c312c8c8b_3 );

unset( $fe_array_keys_08ca932e3a8f7bf3b4b7f16c312c8c8b_3 );

unset( $fe_n_items_08ca932e3a8f7bf3b4b7f16c312c8c8b_3 );

unset( $fe_n_items_processed_08ca932e3a8f7bf3b4b7f16c312c8c8b_3 );

unset( $fe_i_08ca932e3a8f7bf3b4b7f16c312c8c8b_3 );

unset( $fe_key_08ca932e3a8f7bf3b4b7f16c312c8c8b_3 );

unset( $fe_val_08ca932e3a8f7bf3b4b7f16c312c8c8b_3 );

unset( $fe_offset_08ca932e3a8f7bf3b4b7f16c312c8c8b_3 );

unset( $fe_max_08ca932e3a8f7bf3b4b7f16c312c8c8b_3 );

unset( $fe_reverse_08ca932e3a8f7bf3b4b7f16c312c8c8b_3 );

unset( $fe_first_val_08ca932e3a8f7bf3b4b7f16c312c8c8b_3 );

unset( $fe_last_val_08ca932e3a8f7bf3b4b7f16c312c8c8b_3 );

unset( $fe_variable_stack_08ca932e3a8f7bf3b4b7f16c312c8c8b_3 );

}

// foreach ends
$text .= '        ';
}
else
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
            1 => 'design:menu/',
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
              2 => 'pagedata',
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
                1 => 'left_menu',
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
    0 => 9,
    1 => 12,
    2 => 346,
  ),
  1 => 
  array (
    0 => 9,
    1 => 75,
    2 => 409,
  ),
  2 => 'extension/ezwebin/design/ezwebin/templates/page_leftmenu.tpl',
),
                       $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );

$text .= '        ';
}
unset( $if_cond );
// if ends

$text .= '       </div>
    </div>';

$setArray = $oldSetArray_f661a9092199bc4a9cb8998f6d60adc3;
$tpl->Level--;
?>
