<?php
// URI:       design:content/view/embed.tpl
// Filename:  extension/ezwebin/design/ezwebin/override/templates/embed/image.tpl
// Timestamp: 1350735749 (Sat Oct 20 12:22:29 UTC 2012)
$oldSetArray_cb9d01fefea99a9e8a434530e6a4c2ef = isset( $setArray ) ? $setArray : array();
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

$text .= '<div class="content-view-embed">
<div class="class-image">
    <div class="attribute-image">';
// if begins
unset( $if_cond );
unset( $if_cond1 );
unset( $if_cond1 );
$if_cond1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'link_parameters', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['link_parameters'] : null;
$if_cond2 = compiledFetchAttribute( $if_cond1, 'href' );
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
          1 => 'data_map',
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
          1 => 'image',
          2 => false,
        ),
      ),
      2 => false,
    ),
  ),
  'image_class' => 
  array (
    0 => 
    array (
      0 => 4,
      1 => 
      array (
        0 => '',
        1 => 2,
        2 => 'object_parameters',
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
          1 => 'size',
          2 => false,
        ),
      ),
      2 => false,
    ),
  ),
  'href' => 
  array (
    0 => 
    array (
      0 => 4,
      1 => 
      array (
        0 => '',
        1 => 2,
        2 => 'link_parameters',
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
          1 => 'href',
          2 => false,
        ),
      ),
      2 => false,
    ),
    2 => 
    array (
      0 => 6,
      1 => 
      array (
        0 => 'ezurl',
      ),
      2 => false,
    ),
  ),
  'target' => 
  array (
    0 => 
    array (
      0 => 4,
      1 => 
      array (
        0 => '',
        1 => 2,
        2 => 'link_parameters',
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
          1 => 'target',
          2 => false,
        ),
      ),
      2 => false,
    ),
  ),
  'link_class' => 
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
              2 => 'link_parameters',
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
                1 => 'class',
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
            0 => 1,
            1 => '',
            2 => false,
          ),
        ),
      ),
      2 => false,
    ),
  ),
  'link_id' => 
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
              2 => 'link_parameters',
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
                0 => 1,
                1 => 'xhtml:id',
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
            0 => 1,
            1 => '',
            2 => false,
          ),
        ),
      ),
      2 => false,
    ),
  ),
  'link_title' => 
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
              2 => 'link_parameters',
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
                0 => 1,
                1 => 'xhtml:title',
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
            0 => 1,
            1 => '',
            2 => false,
          ),
        ),
      ),
      2 => false,
    ),
  ),
  'border_size' => 
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
              2 => 'object_parameters',
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
                1 => 'border_size',
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
            0 => 1,
            1 => '0',
            2 => false,
          ),
        ),
      ),
      2 => false,
    ),
  ),
  'border_color' => 
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
              2 => 'object_parameters',
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
                1 => 'border_color',
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
            0 => 1,
            1 => '',
            2 => false,
          ),
        ),
      ),
      2 => false,
    ),
  ),
  'border_style' => 
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
              2 => 'object_parameters',
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
                1 => 'border_style',
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
            0 => 1,
            1 => 'solid',
            2 => false,
          ),
        ),
      ),
      2 => false,
    ),
  ),
  'margin_size' => 
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
              2 => 'object_parameters',
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
                1 => 'margin_size',
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
            0 => 1,
            1 => '',
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
    0 => 3,
    1 => 67,
    2 => 129,
  ),
  1 => 
  array (
    0 => 3,
    1 => 633,
    2 => 695,
  ),
  2 => 'extension/ezwebin/design/ezwebin/override/templates/embed/image.tpl',
),
                       $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );

}
else
{
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
          1 => 'data_map',
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
          1 => 'image',
          2 => false,
        ),
      ),
      2 => false,
    ),
  ),
  'image_class' => 
  array (
    0 => 
    array (
      0 => 4,
      1 => 
      array (
        0 => '',
        1 => 2,
        2 => 'object_parameters',
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
          1 => 'size',
          2 => false,
        ),
      ),
      2 => false,
    ),
  ),
  'border_size' => 
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
              2 => 'object_parameters',
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
                1 => 'border_size',
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
            0 => 1,
            1 => '0',
            2 => false,
          ),
        ),
      ),
      2 => false,
    ),
  ),
  'border_color' => 
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
              2 => 'object_parameters',
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
                1 => 'border_color',
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
            0 => 1,
            1 => '',
            2 => false,
          ),
        ),
      ),
      2 => false,
    ),
  ),
  'border_style' => 
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
              2 => 'object_parameters',
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
                1 => 'border_style',
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
            0 => 1,
            1 => 'solid',
            2 => false,
          ),
        ),
      ),
      2 => false,
    ),
  ),
  'margin_size' => 
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
              2 => 'object_parameters',
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
                1 => 'margin_size',
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
            0 => 1,
            1 => '',
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
    0 => 3,
    1 => 637,
    2 => 703,
  ),
  1 => 
  array (
    0 => 3,
    1 => 974,
    2 => 1040,
  ),
  2 => 'extension/ezwebin/design/ezwebin/override/templates/embed/image.tpl',
),
                       $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );

}
unset( $if_cond );
// if ends

$text .= '</div>

    ';
// if begins
unset( $if_cond );
unset( $if_cond );
$if_cond = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'object', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['object'] : null;
$if_cond1 = compiledFetchAttribute( $if_cond, 'data_map' );
unset( $if_cond );
$if_cond = $if_cond1;
$if_cond1 = compiledFetchAttribute( $if_cond, 'caption' );
unset( $if_cond );
$if_cond = $if_cond1;
$if_cond1 = compiledFetchAttribute( $if_cond, 'has_content' );
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
unset( $if_cond1 );
$if_cond1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'object', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['object'] : null;
$if_cond2 = compiledFetchAttribute( $if_cond1, 'data_map' );
unset( $if_cond1 );
$if_cond1 = $if_cond2;
$if_cond2 = compiledFetchAttribute( $if_cond1, 'image' );
unset( $if_cond1 );
$if_cond1 = $if_cond2;
$if_cond2 = compiledFetchAttribute( $if_cond1, 'content' );
unset( $if_cond1 );
$if_cond1 = $if_cond2;
unset( $if_cond3 );
unset( $if_cond3 );
$if_cond3 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'object_parameters', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['object_parameters'] : null;
$if_cond4 = compiledFetchAttribute( $if_cond3, 'size' );
unset( $if_cond3 );
$if_cond3 = $if_cond4;
if (! isset( $if_cond3 ) ) $if_cond3 = NULL;
while ( is_object( $if_cond3 ) and method_exists( $if_cond3, 'templateValue' ) )
    $if_cond3 = $if_cond3->templateValue();
$if_cond2 = compiledFetchAttribute( $if_cond1, $if_cond3 );
unset( $if_cond1 );
$if_cond1 = $if_cond2;
$if_cond2 = compiledFetchAttribute( $if_cond1, 'width' );
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
// def $image_width
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'object', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['object'] : null;
$var1 = compiledFetchAttribute( $var, 'data_map' );
unset( $var );
$var = $var1;
$var1 = compiledFetchAttribute( $var, 'image' );
unset( $var );
$var = $var1;
$var1 = compiledFetchAttribute( $var, 'content' );
unset( $var );
$var = $var1;
unset( $var2 );
unset( $var2 );
$var2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'object_parameters', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['object_parameters'] : null;
$var3 = compiledFetchAttribute( $var2, 'size' );
unset( $var2 );
$var2 = $var3;
if (! isset( $var2 ) ) $var2 = NULL;
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
$var1 = compiledFetchAttribute( $var, $var2 );
unset( $var );
$var = $var1;
$var1 = compiledFetchAttribute( $var, 'width' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( $tpl->hasVariable( 'image_width', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'image_width' is already defined.", array (
  0 => 
  array (
    0 => 7,
    1 => 8,
    2 => 1190,
  ),
  1 => 
  array (
    0 => 7,
    1 => 88,
    2 => 1270,
  ),
  2 => 'extension/ezwebin/design/ezwebin/override/templates/embed/image.tpl',
) );
    $tpl->setVariable( 'image_width', $var, $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'image_width', $var, $rootNamespace );
}

$text .= '        ';
// if begins
unset( $if_cond );
unset( $if_cond1 );
unset( $if_cond1 );
$if_cond1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'object_parameters', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['object_parameters'] : null;
$if_cond2 = compiledFetchAttribute( $if_cond1, 'margin_size' );
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
$text .= '            ';
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'image_width', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['image_width'] : null;
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
unset( $var2 );
unset( $var3 );
unset( $var3 );
$var3 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'object_parameters', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['object_parameters'] : null;
$var4 = compiledFetchAttribute( $var3, 'margin_size' );
unset( $var3 );
$var3 = $var4;
if (! isset( $var3 ) ) $var3 = NULL;
while ( is_object( $var3 ) and method_exists( $var3, 'templateValue' ) )
    $var3 = $var3->templateValue();
while ( is_object( $var3 ) and method_exists( $var3, 'templateValue' ) )
    $var3 = $var3->templateValue();
$var2 = $var3 * 2.000000;
unset( $var3 );
if (! isset( $var2 ) ) $var2 = NULL;
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
$var = $var1 + $var2;
unset( $var1, $var2 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( array_key_exists( $currentNamespace, $vars ) && array_key_exists( 'image_width', $vars[$currentNamespace] ) )
{
    $vars[$currentNamespace]['image_width'] = $var;
    unset( $var );
}
$text .= '        ';
}
unset( $if_cond );
// if ends

$text .= '        ';
// if begins
unset( $if_cond );
unset( $if_cond1 );
unset( $if_cond1 );
$if_cond1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'object_parameters', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['object_parameters'] : null;
$if_cond2 = compiledFetchAttribute( $if_cond1, 'border_size' );
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
$text .= '            ';
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'image_width', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['image_width'] : null;
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
unset( $var2 );
unset( $var3 );
unset( $var3 );
$var3 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'object_parameters', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['object_parameters'] : null;
$var4 = compiledFetchAttribute( $var3, 'border_size' );
unset( $var3 );
$var3 = $var4;
if (! isset( $var3 ) ) $var3 = NULL;
while ( is_object( $var3 ) and method_exists( $var3, 'templateValue' ) )
    $var3 = $var3->templateValue();
while ( is_object( $var3 ) and method_exists( $var3, 'templateValue' ) )
    $var3 = $var3->templateValue();
$var2 = $var3 * 2.000000;
unset( $var3 );
if (! isset( $var2 ) ) $var2 = NULL;
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
$var = $var1 + $var2;
unset( $var1, $var2 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( array_key_exists( $currentNamespace, $vars ) && array_key_exists( 'image_width', $vars[$currentNamespace] ) )
{
    $vars[$currentNamespace]['image_width'] = $var;
    unset( $var );
}
$text .= '        ';
}
unset( $if_cond );
// if ends

$text .= '        <div class="attribute-caption" style="width: ';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'image_width', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['image_width'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= 'px">
    ';
}
else
{
$text .= '        <div class="attribute-caption">
    ';
}
unset( $if_cond );
// if ends

$text .= '            ';
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
          1 => 'data_map',
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
          1 => 'caption',
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
    0 => 18,
    1 => 12,
    2 => 1738,
  ),
  1 => 
  array (
    0 => 18,
    1 => 65,
    2 => 1791,
  ),
  2 => 'extension/ezwebin/design/ezwebin/override/templates/embed/image.tpl',
),
                       $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );

$text .= ' </div>
        ';
}
unset( $if_cond );
// if ends

$text .= ' </div>
</div>
';

$setArray = $oldSetArray_cb9d01fefea99a9e8a434530e6a4c2ef;
$tpl->Level--;
?>
