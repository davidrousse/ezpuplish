<?php
// URI:       design:content/datatype/edit/ezinisetting.tpl
// Filename:  design/standard/templates/content/datatype/edit/ezinisetting.tpl
// Timestamp: 1349721948 (Mon Oct 8 18:45:48 UTC 2012)
$oldSetArray_db4b842d3cc34f36fa32449580157a67 = isset( $setArray ) ? $setArray : array();
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

unset( $show );
if (! isset( $show ) ) $show = NULL;
while ( is_object( $show ) and method_exists( $show, 'templateValue' ) )
    $show = $show->templateValue();
$showData = array( 'value' => $show );
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
        2 => 'attribute',
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
          1 => 'content',
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
          1 => 'modified',
          2 => false,
        ),
      ),
      2 => false,
    ),
  ),
),
                       $rootNamespace, $currentNamespace, $showData, false, false );
$show = $showData['value'];
unset( $showData );
if (! isset( $show ) ) $show = NULL;
while ( is_object( $show ) and method_exists( $show, 'templateValue' ) )
    $show = $show->templateValue();

if ( $show )
{

unset( $show );

$text .= '<div class="message-warning">
<p>Attention : la valeur dans le fichier de configuration ini et la valeur dans l\'objet sont différentes.</p>
<p>Le fichier ini a probablement été modifié depuis la dernière fois.</p>';
unset( $loopItem );
unset( $loopItem );
$loopItem = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'attribute', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['attribute'] : null;
$loopItem1 = compiledFetchAttribute( $loopItem, 'content' );
unset( $loopItem );
$loopItem = $loopItem1;
$loopItem1 = compiledFetchAttribute( $loopItem, 'modified' );
unset( $loopItem );
$loopItem = $loopItem1;
if (! isset( $loopItem ) ) $loopItem = NULL;
while ( is_object( $loopItem ) and method_exists( $loopItem, 'templateValue' ) )
    $loopItem = $loopItem->templateValue();

if ( !isset( $sectionStack ) )
    $sectionStack = array();
$variableValue = new eZTemplateSectionIterator();
$lastVariableValue = false;
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

    $variableValue->setIteratorValues( $item, $loopKey, $currentIndex - 1, $currentIndex, false, $last );
$vars[$currentNamespace]['modified'] = $variableValue;
$sectionStack[] = array( &$variableValue, &$loopItem, $loopKeys, $loopCount, $currentIndex, $index );
unset( $loopItem, $loopKeys );

$text .= '<ul>
<li>Fichier ini : ';
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'modified', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['modified'] : null;
$var2 = compiledFetchAttribute( $var1, 'item' );
unset( $var1 );
$var1 = $var2;
$var2 = compiledFetchAttribute( $var1, 'file' );
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

$text .= '</li>
<li>Valeur ini :';
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'modified', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['modified'] : null;
$var2 = compiledFetchAttribute( $var1, 'item' );
unset( $var1 );
$var1 = $var2;
$var2 = compiledFetchAttribute( $var1, 'ini_value' );
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

$text .= '</li>
</ul>';
list( $variableValue, $loopItem, $loopKeys, $loopCount, $currentIndex, $index ) = array_pop( $sectionStack );
++$currentIndex;

$lastVariableValue = $variableValue;
++$index;

}
unset( $loopKeys, $loopCount, $index, $last, $loopIndex, $loopItem );
$text .= '</div>';
}

$text .= '
';
$textElements = array();
$tpl->processFunction( 'switch', $textElements,
                       array (
  0 => 
  array (
    0 => 2,
    1 => false,
    2 => '
',
    3 => 
    array (
      0 => 
      array (
        0 => 18,
        1 => 56,
        2 => 778,
      ),
      1 => 
      array (
        0 => 20,
        1 => 0,
        2 => 780,
      ),
      2 => 'design/standard/templates/content/datatype/edit/ezinisetting.tpl',
    ),
  ),
  1 => 
  array (
    0 => 4,
    1 => 
    array (
      0 => 
      array (
        0 => 2,
        1 => false,
        2 => '    <input id="ezcoa-',
        3 => 
        array (
          0 => 
          array (
            0 => 21,
            1 => 24,
            2 => 820,
          ),
          1 => 
          array (
            0 => 22,
            1 => 21,
            2 => 842,
          ),
          2 => 'design/standard/templates/content/datatype/edit/ezinisetting.tpl',
        ),
      ),
      1 => 
      array (
        0 => 4,
        1 => 
        array (
          0 => 
          array (
            0 => 3,
            1 => false,
            2 => 
            array (
              0 => 
              array (
                0 => 4,
                1 => 
                array (
                  0 => '',
                  1 => 2,
                  2 => 'attribute_base',
                ),
                2 => false,
              ),
            ),
            3 => 
            array (
              0 => 
              array (
                0 => 22,
                1 => 71,
                2 => 895,
              ),
              1 => 
              array (
                0 => 22,
                1 => 86,
                2 => 910,
              ),
              2 => 'design/standard/templates/content/datatype/edit/ezinisetting.tpl',
            ),
          ),
          1 => 
          array (
            0 => 2,
            1 => false,
            2 => '-',
            3 => 
            array (
              0 => 
              array (
                0 => 22,
                1 => 86,
                2 => 911,
              ),
              1 => 
              array (
                0 => 22,
                1 => 87,
                2 => 912,
              ),
              2 => 'design/standard/templates/content/datatype/edit/ezinisetting.tpl',
            ),
          ),
        ),
        2 => 'if',
        3 => 
        array (
          'condition' => 
          array (
            0 => 
            array (
              0 => 6,
              1 => 
              array (
                0 => 'ne',
                1 => 
                array (
                  0 => 
                  array (
                    0 => 4,
                    1 => 
                    array (
                      0 => '',
                      1 => 2,
                      2 => 'attribute_base',
                    ),
                    2 => false,
                  ),
                ),
                2 => 
                array (
                  0 => 
                  array (
                    0 => 1,
                    1 => 'ContentObjectAttribute',
                    2 => false,
                  ),
                ),
              ),
              2 => false,
            ),
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            0 => 22,
            1 => 21,
            2 => 843,
          ),
          1 => 
          array (
            0 => 22,
            1 => 71,
            2 => 893,
          ),
          2 => 'design/standard/templates/content/datatype/edit/ezinisetting.tpl',
        ),
      ),
      2 => 
      array (
        0 => 3,
        1 => false,
        2 => 
        array (
          0 => 
          array (
            0 => 4,
            1 => 
            array (
              0 => '',
              1 => 2,
              2 => 'attribute',
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
                1 => 'contentclassattribute_id',
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
            0 => 22,
            1 => 89,
            2 => 918,
          ),
          1 => 
          array (
            0 => 22,
            1 => 124,
            2 => 953,
          ),
          2 => 'design/standard/templates/content/datatype/edit/ezinisetting.tpl',
        ),
      ),
      3 => 
      array (
        0 => 2,
        1 => false,
        2 => '_',
        3 => 
        array (
          0 => 
          array (
            0 => 22,
            1 => 124,
            2 => 954,
          ),
          1 => 
          array (
            0 => 22,
            1 => 125,
            2 => 955,
          ),
          2 => 'design/standard/templates/content/datatype/edit/ezinisetting.tpl',
        ),
      ),
      4 => 
      array (
        0 => 3,
        1 => false,
        2 => 
        array (
          0 => 
          array (
            0 => 4,
            1 => 
            array (
              0 => '',
              1 => 2,
              2 => 'attribute',
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
                1 => 'contentclass_attribute_identifier',
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
            0 => 22,
            1 => 125,
            2 => 956,
          ),
          1 => 
          array (
            0 => 22,
            1 => 169,
            2 => 1000,
          ),
          2 => 'design/standard/templates/content/datatype/edit/ezinisetting.tpl',
        ),
      ),
      5 => 
      array (
        0 => 2,
        1 => false,
        2 => '" class="box ezcc-',
        3 => 
        array (
          0 => 
          array (
            0 => 22,
            1 => 169,
            2 => 1001,
          ),
          1 => 
          array (
            0 => 22,
            1 => 187,
            2 => 1019,
          ),
          2 => 'design/standard/templates/content/datatype/edit/ezinisetting.tpl',
        ),
      ),
      6 => 
      array (
        0 => 3,
        1 => false,
        2 => 
        array (
          0 => 
          array (
            0 => 4,
            1 => 
            array (
              0 => '',
              1 => 2,
              2 => 'attribute',
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
                1 => 'identifier',
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
            0 => 22,
            1 => 187,
            2 => 1020,
          ),
          1 => 
          array (
            0 => 22,
            1 => 229,
            2 => 1062,
          ),
          2 => 'design/standard/templates/content/datatype/edit/ezinisetting.tpl',
        ),
      ),
      7 => 
      array (
        0 => 2,
        1 => false,
        2 => ' ezcca-',
        3 => 
        array (
          0 => 
          array (
            0 => 22,
            1 => 229,
            2 => 1063,
          ),
          1 => 
          array (
            0 => 22,
            1 => 236,
            2 => 1070,
          ),
          2 => 'design/standard/templates/content/datatype/edit/ezinisetting.tpl',
        ),
      ),
      8 => 
      array (
        0 => 3,
        1 => false,
        2 => 
        array (
          0 => 
          array (
            0 => 4,
            1 => 
            array (
              0 => '',
              1 => 2,
              2 => 'attribute',
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
                1 => 'identifier',
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
            0 => 22,
            1 => 236,
            2 => 1071,
          ),
          1 => 
          array (
            0 => 22,
            1 => 278,
            2 => 1113,
          ),
          2 => 'design/standard/templates/content/datatype/edit/ezinisetting.tpl',
        ),
      ),
      9 => 
      array (
        0 => 2,
        1 => false,
        2 => '_',
        3 => 
        array (
          0 => 
          array (
            0 => 22,
            1 => 278,
            2 => 1114,
          ),
          1 => 
          array (
            0 => 22,
            1 => 279,
            2 => 1115,
          ),
          2 => 'design/standard/templates/content/datatype/edit/ezinisetting.tpl',
        ),
      ),
      10 => 
      array (
        0 => 3,
        1 => false,
        2 => 
        array (
          0 => 
          array (
            0 => 4,
            1 => 
            array (
              0 => '',
              1 => 2,
              2 => 'attribute',
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
                1 => 'contentclass_attribute_identifier',
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
            0 => 22,
            1 => 279,
            2 => 1116,
          ),
          1 => 
          array (
            0 => 22,
            1 => 323,
            2 => 1160,
          ),
          2 => 'design/standard/templates/content/datatype/edit/ezinisetting.tpl',
        ),
      ),
      11 => 
      array (
        0 => 2,
        1 => false,
        2 => '" type="text" size="50" name="',
        3 => 
        array (
          0 => 
          array (
            0 => 22,
            1 => 323,
            2 => 1161,
          ),
          1 => 
          array (
            0 => 22,
            1 => 353,
            2 => 1191,
          ),
          2 => 'design/standard/templates/content/datatype/edit/ezinisetting.tpl',
        ),
      ),
      12 => 
      array (
        0 => 3,
        1 => false,
        2 => 
        array (
          0 => 
          array (
            0 => 4,
            1 => 
            array (
              0 => '',
              1 => 2,
              2 => 'attribute_base',
            ),
            2 => false,
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            0 => 22,
            1 => 353,
            2 => 1192,
          ),
          1 => 
          array (
            0 => 22,
            1 => 368,
            2 => 1207,
          ),
          2 => 'design/standard/templates/content/datatype/edit/ezinisetting.tpl',
        ),
      ),
      13 => 
      array (
        0 => 2,
        1 => false,
        2 => '_ini_setting_',
        3 => 
        array (
          0 => 
          array (
            0 => 22,
            1 => 368,
            2 => 1208,
          ),
          1 => 
          array (
            0 => 22,
            1 => 381,
            2 => 1221,
          ),
          2 => 'design/standard/templates/content/datatype/edit/ezinisetting.tpl',
        ),
      ),
      14 => 
      array (
        0 => 3,
        1 => false,
        2 => 
        array (
          0 => 
          array (
            0 => 4,
            1 => 
            array (
              0 => '',
              1 => 2,
              2 => 'attribute',
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
                1 => 'id',
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
            0 => 22,
            1 => 381,
            2 => 1222,
          ),
          1 => 
          array (
            0 => 22,
            1 => 394,
            2 => 1235,
          ),
          2 => 'design/standard/templates/content/datatype/edit/ezinisetting.tpl',
        ),
      ),
      15 => 
      array (
        0 => 2,
        1 => false,
        2 => '" value="',
        3 => 
        array (
          0 => 
          array (
            0 => 22,
            1 => 394,
            2 => 1236,
          ),
          1 => 
          array (
            0 => 22,
            1 => 403,
            2 => 1245,
          ),
          2 => 'design/standard/templates/content/datatype/edit/ezinisetting.tpl',
        ),
      ),
      16 => 
      array (
        0 => 3,
        1 => false,
        2 => 
        array (
          0 => 
          array (
            0 => 4,
            1 => 
            array (
              0 => '',
              1 => 2,
              2 => 'attribute',
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
                1 => 'data_text',
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
              0 => 'wash',
            ),
            2 => false,
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            0 => 22,
            1 => 403,
            2 => 1246,
          ),
          1 => 
          array (
            0 => 22,
            1 => 428,
            2 => 1271,
          ),
          2 => 'design/standard/templates/content/datatype/edit/ezinisetting.tpl',
        ),
      ),
      17 => 
      array (
        0 => 2,
        1 => false,
        2 => '" />',
        3 => 
        array (
          0 => 
          array (
            0 => 22,
            1 => 428,
            2 => 1272,
          ),
          1 => 
          array (
            0 => 23,
            1 => 0,
            2 => 1277,
          ),
          2 => 'design/standard/templates/content/datatype/edit/ezinisetting.tpl',
        ),
      ),
    ),
    2 => 'case',
    3 => 
    array (
      'in' => 
      array (
        0 => 
        array (
          0 => 6,
          1 => 
          array (
            0 => 'array',
            1 => 
            array (
              0 => 
              array (
                0 => 2,
                1 => 1,
                2 => false,
              ),
            ),
            2 => 
            array (
              0 => 
              array (
                0 => 2,
                1 => 4,
                2 => false,
              ),
            ),
            3 => 
            array (
              0 => 
              array (
                0 => 2,
                1 => 5,
                2 => false,
              ),
            ),
          ),
          2 => false,
        ),
      ),
    ),
    4 => 
    array (
      0 => 
      array (
        0 => 21,
        1 => 0,
        2 => 795,
      ),
      1 => 
      array (
        0 => 21,
        1 => 24,
        2 => 819,
      ),
      2 => 'design/standard/templates/content/datatype/edit/ezinisetting.tpl',
    ),
  ),
  2 => 
  array (
    0 => 2,
    1 => false,
    2 => '
',
    3 => 
    array (
      0 => 
      array (
        0 => 23,
        1 => 4,
        2 => 1284,
      ),
      1 => 
      array (
        0 => 25,
        1 => 0,
        2 => 1286,
      ),
      2 => 'design/standard/templates/content/datatype/edit/ezinisetting.tpl',
    ),
  ),
  3 => 
  array (
    0 => 4,
    1 => 
    array (
      0 => 
      array (
        0 => 2,
        1 => false,
        2 => '    <select id="ezcoa-',
        3 => 
        array (
          0 => 
          array (
            0 => 26,
            1 => 12,
            2 => 1333,
          ),
          1 => 
          array (
            0 => 27,
            1 => 22,
            2 => 1356,
          ),
          2 => 'design/standard/templates/content/datatype/edit/ezinisetting.tpl',
        ),
      ),
      1 => 
      array (
        0 => 4,
        1 => 
        array (
          0 => 
          array (
            0 => 3,
            1 => false,
            2 => 
            array (
              0 => 
              array (
                0 => 4,
                1 => 
                array (
                  0 => '',
                  1 => 2,
                  2 => 'attribute_base',
                ),
                2 => false,
              ),
            ),
            3 => 
            array (
              0 => 
              array (
                0 => 27,
                1 => 72,
                2 => 1409,
              ),
              1 => 
              array (
                0 => 27,
                1 => 87,
                2 => 1424,
              ),
              2 => 'design/standard/templates/content/datatype/edit/ezinisetting.tpl',
            ),
          ),
          1 => 
          array (
            0 => 2,
            1 => false,
            2 => '-',
            3 => 
            array (
              0 => 
              array (
                0 => 27,
                1 => 87,
                2 => 1425,
              ),
              1 => 
              array (
                0 => 27,
                1 => 88,
                2 => 1426,
              ),
              2 => 'design/standard/templates/content/datatype/edit/ezinisetting.tpl',
            ),
          ),
        ),
        2 => 'if',
        3 => 
        array (
          'condition' => 
          array (
            0 => 
            array (
              0 => 6,
              1 => 
              array (
                0 => 'ne',
                1 => 
                array (
                  0 => 
                  array (
                    0 => 4,
                    1 => 
                    array (
                      0 => '',
                      1 => 2,
                      2 => 'attribute_base',
                    ),
                    2 => false,
                  ),
                ),
                2 => 
                array (
                  0 => 
                  array (
                    0 => 1,
                    1 => 'ContentObjectAttribute',
                    2 => false,
                  ),
                ),
              ),
              2 => false,
            ),
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            0 => 27,
            1 => 22,
            2 => 1357,
          ),
          1 => 
          array (
            0 => 27,
            1 => 72,
            2 => 1407,
          ),
          2 => 'design/standard/templates/content/datatype/edit/ezinisetting.tpl',
        ),
      ),
      2 => 
      array (
        0 => 3,
        1 => false,
        2 => 
        array (
          0 => 
          array (
            0 => 4,
            1 => 
            array (
              0 => '',
              1 => 2,
              2 => 'attribute',
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
                1 => 'contentclassattribute_id',
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
            0 => 27,
            1 => 90,
            2 => 1432,
          ),
          1 => 
          array (
            0 => 27,
            1 => 125,
            2 => 1467,
          ),
          2 => 'design/standard/templates/content/datatype/edit/ezinisetting.tpl',
        ),
      ),
      3 => 
      array (
        0 => 2,
        1 => false,
        2 => '_',
        3 => 
        array (
          0 => 
          array (
            0 => 27,
            1 => 125,
            2 => 1468,
          ),
          1 => 
          array (
            0 => 27,
            1 => 126,
            2 => 1469,
          ),
          2 => 'design/standard/templates/content/datatype/edit/ezinisetting.tpl',
        ),
      ),
      4 => 
      array (
        0 => 3,
        1 => false,
        2 => 
        array (
          0 => 
          array (
            0 => 4,
            1 => 
            array (
              0 => '',
              1 => 2,
              2 => 'attribute',
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
                1 => 'contentclass_attribute_identifier',
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
            0 => 27,
            1 => 126,
            2 => 1470,
          ),
          1 => 
          array (
            0 => 27,
            1 => 170,
            2 => 1514,
          ),
          2 => 'design/standard/templates/content/datatype/edit/ezinisetting.tpl',
        ),
      ),
      5 => 
      array (
        0 => 2,
        1 => false,
        2 => '" class="ezcc-',
        3 => 
        array (
          0 => 
          array (
            0 => 27,
            1 => 170,
            2 => 1515,
          ),
          1 => 
          array (
            0 => 27,
            1 => 184,
            2 => 1529,
          ),
          2 => 'design/standard/templates/content/datatype/edit/ezinisetting.tpl',
        ),
      ),
      6 => 
      array (
        0 => 3,
        1 => false,
        2 => 
        array (
          0 => 
          array (
            0 => 4,
            1 => 
            array (
              0 => '',
              1 => 2,
              2 => 'attribute',
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
                1 => 'identifier',
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
            0 => 27,
            1 => 184,
            2 => 1530,
          ),
          1 => 
          array (
            0 => 27,
            1 => 226,
            2 => 1572,
          ),
          2 => 'design/standard/templates/content/datatype/edit/ezinisetting.tpl',
        ),
      ),
      7 => 
      array (
        0 => 2,
        1 => false,
        2 => ' ezcca-',
        3 => 
        array (
          0 => 
          array (
            0 => 27,
            1 => 226,
            2 => 1573,
          ),
          1 => 
          array (
            0 => 27,
            1 => 233,
            2 => 1580,
          ),
          2 => 'design/standard/templates/content/datatype/edit/ezinisetting.tpl',
        ),
      ),
      8 => 
      array (
        0 => 3,
        1 => false,
        2 => 
        array (
          0 => 
          array (
            0 => 4,
            1 => 
            array (
              0 => '',
              1 => 2,
              2 => 'attribute',
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
                1 => 'identifier',
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
            0 => 27,
            1 => 233,
            2 => 1581,
          ),
          1 => 
          array (
            0 => 27,
            1 => 275,
            2 => 1623,
          ),
          2 => 'design/standard/templates/content/datatype/edit/ezinisetting.tpl',
        ),
      ),
      9 => 
      array (
        0 => 2,
        1 => false,
        2 => '_',
        3 => 
        array (
          0 => 
          array (
            0 => 27,
            1 => 275,
            2 => 1624,
          ),
          1 => 
          array (
            0 => 27,
            1 => 276,
            2 => 1625,
          ),
          2 => 'design/standard/templates/content/datatype/edit/ezinisetting.tpl',
        ),
      ),
      10 => 
      array (
        0 => 3,
        1 => false,
        2 => 
        array (
          0 => 
          array (
            0 => 4,
            1 => 
            array (
              0 => '',
              1 => 2,
              2 => 'attribute',
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
                1 => 'contentclass_attribute_identifier',
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
            0 => 27,
            1 => 276,
            2 => 1626,
          ),
          1 => 
          array (
            0 => 27,
            1 => 320,
            2 => 1670,
          ),
          2 => 'design/standard/templates/content/datatype/edit/ezinisetting.tpl',
        ),
      ),
      11 => 
      array (
        0 => 2,
        1 => false,
        2 => '" name="',
        3 => 
        array (
          0 => 
          array (
            0 => 27,
            1 => 320,
            2 => 1671,
          ),
          1 => 
          array (
            0 => 27,
            1 => 328,
            2 => 1679,
          ),
          2 => 'design/standard/templates/content/datatype/edit/ezinisetting.tpl',
        ),
      ),
      12 => 
      array (
        0 => 3,
        1 => false,
        2 => 
        array (
          0 => 
          array (
            0 => 4,
            1 => 
            array (
              0 => '',
              1 => 2,
              2 => 'attribute_base',
            ),
            2 => false,
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            0 => 27,
            1 => 328,
            2 => 1680,
          ),
          1 => 
          array (
            0 => 27,
            1 => 343,
            2 => 1695,
          ),
          2 => 'design/standard/templates/content/datatype/edit/ezinisetting.tpl',
        ),
      ),
      13 => 
      array (
        0 => 2,
        1 => false,
        2 => '_ini_setting_',
        3 => 
        array (
          0 => 
          array (
            0 => 27,
            1 => 343,
            2 => 1696,
          ),
          1 => 
          array (
            0 => 27,
            1 => 356,
            2 => 1709,
          ),
          2 => 'design/standard/templates/content/datatype/edit/ezinisetting.tpl',
        ),
      ),
      14 => 
      array (
        0 => 3,
        1 => false,
        2 => 
        array (
          0 => 
          array (
            0 => 4,
            1 => 
            array (
              0 => '',
              1 => 2,
              2 => 'attribute',
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
                1 => 'id',
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
            0 => 27,
            1 => 356,
            2 => 1710,
          ),
          1 => 
          array (
            0 => 27,
            1 => 369,
            2 => 1723,
          ),
          2 => 'design/standard/templates/content/datatype/edit/ezinisetting.tpl',
        ),
      ),
      15 => 
      array (
        0 => 2,
        1 => false,
        2 => '">
        <option value="enabled" ',
        3 => 
        array (
          0 => 
          array (
            0 => 27,
            1 => 369,
            2 => 1724,
          ),
          1 => 
          array (
            0 => 28,
            1 => 32,
            2 => 1759,
          ),
          2 => 'design/standard/templates/content/datatype/edit/ezinisetting.tpl',
        ),
      ),
      16 => 
      array (
        0 => 4,
        1 => 
        array (
          0 => 
          array (
            0 => 2,
            1 => false,
            2 => 'selected="selected"',
            3 => 
            array (
              0 => 
              array (
                0 => 28,
                1 => 71,
                2 => 1800,
              ),
              1 => 
              array (
                0 => 28,
                1 => 90,
                2 => 1819,
              ),
              2 => 'design/standard/templates/content/datatype/edit/ezinisetting.tpl',
            ),
          ),
        ),
        2 => 'if',
        3 => 
        array (
          'condition' => 
          array (
            0 => 
            array (
              0 => 4,
              1 => 
              array (
                0 => '',
                1 => 2,
                2 => 'attribute',
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
                  1 => 'data_text',
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
                0 => 'eq',
                1 => 
                array (
                  0 => 
                  array (
                    0 => 1,
                    1 => 'enabled',
                    2 => false,
                  ),
                ),
              ),
              2 => false,
            ),
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            0 => 28,
            1 => 32,
            2 => 1760,
          ),
          1 => 
          array (
            0 => 28,
            1 => 71,
            2 => 1799,
          ),
          2 => 'design/standard/templates/content/datatype/edit/ezinisetting.tpl',
        ),
      ),
      17 => 
      array (
        0 => 2,
        1 => false,
        2 => '>',
        3 => 
        array (
          0 => 
          array (
            0 => 28,
            1 => 92,
            2 => 1824,
          ),
          1 => 
          array (
            0 => 28,
            1 => 93,
            2 => 1825,
          ),
          2 => 'design/standard/templates/content/datatype/edit/ezinisetting.tpl',
        ),
      ),
      18 => 
      array (
        0 => 3,
        1 => false,
        2 => 
        array (
          0 => 
          array (
            0 => 1,
            1 => 'Enabled',
            2 => false,
          ),
          1 => 
          array (
            0 => 6,
            1 => 
            array (
              0 => 'i18n',
              1 => 
              array (
                0 => 
                array (
                  0 => 1,
                  1 => 'design/standard/class/datatype',
                  2 => false,
                ),
              ),
            ),
            2 => false,
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            0 => 28,
            1 => 93,
            2 => 1826,
          ),
          1 => 
          array (
            0 => 28,
            1 => 143,
            2 => 1876,
          ),
          2 => 'design/standard/templates/content/datatype/edit/ezinisetting.tpl',
        ),
      ),
      19 => 
      array (
        0 => 2,
        1 => false,
        2 => '</option>
        <option value="disabled" ',
        3 => 
        array (
          0 => 
          array (
            0 => 28,
            1 => 143,
            2 => 1877,
          ),
          1 => 
          array (
            0 => 29,
            1 => 33,
            2 => 1920,
          ),
          2 => 'design/standard/templates/content/datatype/edit/ezinisetting.tpl',
        ),
      ),
      20 => 
      array (
        0 => 4,
        1 => 
        array (
          0 => 
          array (
            0 => 2,
            1 => false,
            2 => 'selected="selected"',
            3 => 
            array (
              0 => 
              array (
                0 => 29,
                1 => 73,
                2 => 1962,
              ),
              1 => 
              array (
                0 => 29,
                1 => 92,
                2 => 1981,
              ),
              2 => 'design/standard/templates/content/datatype/edit/ezinisetting.tpl',
            ),
          ),
        ),
        2 => 'if',
        3 => 
        array (
          'condition' => 
          array (
            0 => 
            array (
              0 => 4,
              1 => 
              array (
                0 => '',
                1 => 2,
                2 => 'attribute',
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
                  1 => 'data_text',
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
                0 => 'eq',
                1 => 
                array (
                  0 => 
                  array (
                    0 => 1,
                    1 => 'disabled',
                    2 => false,
                  ),
                ),
              ),
              2 => false,
            ),
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            0 => 29,
            1 => 33,
            2 => 1921,
          ),
          1 => 
          array (
            0 => 29,
            1 => 73,
            2 => 1961,
          ),
          2 => 'design/standard/templates/content/datatype/edit/ezinisetting.tpl',
        ),
      ),
      21 => 
      array (
        0 => 2,
        1 => false,
        2 => '>',
        3 => 
        array (
          0 => 
          array (
            0 => 29,
            1 => 94,
            2 => 1986,
          ),
          1 => 
          array (
            0 => 29,
            1 => 95,
            2 => 1987,
          ),
          2 => 'design/standard/templates/content/datatype/edit/ezinisetting.tpl',
        ),
      ),
      22 => 
      array (
        0 => 3,
        1 => false,
        2 => 
        array (
          0 => 
          array (
            0 => 1,
            1 => 'Disabled',
            2 => false,
          ),
          1 => 
          array (
            0 => 6,
            1 => 
            array (
              0 => 'i18n',
              1 => 
              array (
                0 => 
                array (
                  0 => 1,
                  1 => 'design/standard/class/datatype',
                  2 => false,
                ),
              ),
            ),
            2 => false,
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            0 => 29,
            1 => 95,
            2 => 1988,
          ),
          1 => 
          array (
            0 => 29,
            1 => 146,
            2 => 2039,
          ),
          2 => 'design/standard/templates/content/datatype/edit/ezinisetting.tpl',
        ),
      ),
      23 => 
      array (
        0 => 2,
        1 => false,
        2 => '</option>
    </select>',
        3 => 
        array (
          0 => 
          array (
            0 => 29,
            1 => 146,
            2 => 2040,
          ),
          1 => 
          array (
            0 => 31,
            1 => 0,
            2 => 2064,
          ),
          2 => 'design/standard/templates/content/datatype/edit/ezinisetting.tpl',
        ),
      ),
    ),
    2 => 'case',
    3 => 
    array (
      'match' => 
      array (
        0 => 
        array (
          0 => 2,
          1 => 2,
          2 => false,
        ),
      ),
    ),
    4 => 
    array (
      0 => 
      array (
        0 => 26,
        1 => 0,
        2 => 1320,
      ),
      1 => 
      array (
        0 => 26,
        1 => 12,
        2 => 1332,
      ),
      2 => 'design/standard/templates/content/datatype/edit/ezinisetting.tpl',
    ),
  ),
  4 => 
  array (
    0 => 2,
    1 => false,
    2 => '
',
    3 => 
    array (
      0 => 
      array (
        0 => 31,
        1 => 4,
        2 => 2071,
      ),
      1 => 
      array (
        0 => 33,
        1 => 0,
        2 => 2073,
      ),
      2 => 'design/standard/templates/content/datatype/edit/ezinisetting.tpl',
    ),
  ),
  5 => 
  array (
    0 => 4,
    1 => 
    array (
      0 => 
      array (
        0 => 2,
        1 => false,
        2 => '    <select id="ezcoa-',
        3 => 
        array (
          0 => 
          array (
            0 => 34,
            1 => 12,
            2 => 2114,
          ),
          1 => 
          array (
            0 => 35,
            1 => 22,
            2 => 2137,
          ),
          2 => 'design/standard/templates/content/datatype/edit/ezinisetting.tpl',
        ),
      ),
      1 => 
      array (
        0 => 4,
        1 => 
        array (
          0 => 
          array (
            0 => 3,
            1 => false,
            2 => 
            array (
              0 => 
              array (
                0 => 4,
                1 => 
                array (
                  0 => '',
                  1 => 2,
                  2 => 'attribute_base',
                ),
                2 => false,
              ),
            ),
            3 => 
            array (
              0 => 
              array (
                0 => 35,
                1 => 72,
                2 => 2190,
              ),
              1 => 
              array (
                0 => 35,
                1 => 87,
                2 => 2205,
              ),
              2 => 'design/standard/templates/content/datatype/edit/ezinisetting.tpl',
            ),
          ),
          1 => 
          array (
            0 => 2,
            1 => false,
            2 => '-',
            3 => 
            array (
              0 => 
              array (
                0 => 35,
                1 => 87,
                2 => 2206,
              ),
              1 => 
              array (
                0 => 35,
                1 => 88,
                2 => 2207,
              ),
              2 => 'design/standard/templates/content/datatype/edit/ezinisetting.tpl',
            ),
          ),
        ),
        2 => 'if',
        3 => 
        array (
          'condition' => 
          array (
            0 => 
            array (
              0 => 6,
              1 => 
              array (
                0 => 'ne',
                1 => 
                array (
                  0 => 
                  array (
                    0 => 4,
                    1 => 
                    array (
                      0 => '',
                      1 => 2,
                      2 => 'attribute_base',
                    ),
                    2 => false,
                  ),
                ),
                2 => 
                array (
                  0 => 
                  array (
                    0 => 1,
                    1 => 'ContentObjectAttribute',
                    2 => false,
                  ),
                ),
              ),
              2 => false,
            ),
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            0 => 35,
            1 => 22,
            2 => 2138,
          ),
          1 => 
          array (
            0 => 35,
            1 => 72,
            2 => 2188,
          ),
          2 => 'design/standard/templates/content/datatype/edit/ezinisetting.tpl',
        ),
      ),
      2 => 
      array (
        0 => 3,
        1 => false,
        2 => 
        array (
          0 => 
          array (
            0 => 4,
            1 => 
            array (
              0 => '',
              1 => 2,
              2 => 'attribute',
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
                1 => 'contentclassattribute_id',
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
            0 => 35,
            1 => 90,
            2 => 2213,
          ),
          1 => 
          array (
            0 => 35,
            1 => 125,
            2 => 2248,
          ),
          2 => 'design/standard/templates/content/datatype/edit/ezinisetting.tpl',
        ),
      ),
      3 => 
      array (
        0 => 2,
        1 => false,
        2 => '_',
        3 => 
        array (
          0 => 
          array (
            0 => 35,
            1 => 125,
            2 => 2249,
          ),
          1 => 
          array (
            0 => 35,
            1 => 126,
            2 => 2250,
          ),
          2 => 'design/standard/templates/content/datatype/edit/ezinisetting.tpl',
        ),
      ),
      4 => 
      array (
        0 => 3,
        1 => false,
        2 => 
        array (
          0 => 
          array (
            0 => 4,
            1 => 
            array (
              0 => '',
              1 => 2,
              2 => 'attribute',
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
                1 => 'contentclass_attribute_identifier',
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
            0 => 35,
            1 => 126,
            2 => 2251,
          ),
          1 => 
          array (
            0 => 35,
            1 => 170,
            2 => 2295,
          ),
          2 => 'design/standard/templates/content/datatype/edit/ezinisetting.tpl',
        ),
      ),
      5 => 
      array (
        0 => 2,
        1 => false,
        2 => '" class="ezcc-',
        3 => 
        array (
          0 => 
          array (
            0 => 35,
            1 => 170,
            2 => 2296,
          ),
          1 => 
          array (
            0 => 35,
            1 => 184,
            2 => 2310,
          ),
          2 => 'design/standard/templates/content/datatype/edit/ezinisetting.tpl',
        ),
      ),
      6 => 
      array (
        0 => 3,
        1 => false,
        2 => 
        array (
          0 => 
          array (
            0 => 4,
            1 => 
            array (
              0 => '',
              1 => 2,
              2 => 'attribute',
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
                1 => 'identifier',
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
            0 => 35,
            1 => 184,
            2 => 2311,
          ),
          1 => 
          array (
            0 => 35,
            1 => 226,
            2 => 2353,
          ),
          2 => 'design/standard/templates/content/datatype/edit/ezinisetting.tpl',
        ),
      ),
      7 => 
      array (
        0 => 2,
        1 => false,
        2 => ' ezcca-',
        3 => 
        array (
          0 => 
          array (
            0 => 35,
            1 => 226,
            2 => 2354,
          ),
          1 => 
          array (
            0 => 35,
            1 => 233,
            2 => 2361,
          ),
          2 => 'design/standard/templates/content/datatype/edit/ezinisetting.tpl',
        ),
      ),
      8 => 
      array (
        0 => 3,
        1 => false,
        2 => 
        array (
          0 => 
          array (
            0 => 4,
            1 => 
            array (
              0 => '',
              1 => 2,
              2 => 'attribute',
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
                1 => 'identifier',
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
            0 => 35,
            1 => 233,
            2 => 2362,
          ),
          1 => 
          array (
            0 => 35,
            1 => 275,
            2 => 2404,
          ),
          2 => 'design/standard/templates/content/datatype/edit/ezinisetting.tpl',
        ),
      ),
      9 => 
      array (
        0 => 2,
        1 => false,
        2 => '_',
        3 => 
        array (
          0 => 
          array (
            0 => 35,
            1 => 275,
            2 => 2405,
          ),
          1 => 
          array (
            0 => 35,
            1 => 276,
            2 => 2406,
          ),
          2 => 'design/standard/templates/content/datatype/edit/ezinisetting.tpl',
        ),
      ),
      10 => 
      array (
        0 => 3,
        1 => false,
        2 => 
        array (
          0 => 
          array (
            0 => 4,
            1 => 
            array (
              0 => '',
              1 => 2,
              2 => 'attribute',
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
                1 => 'contentclass_attribute_identifier',
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
            0 => 35,
            1 => 276,
            2 => 2407,
          ),
          1 => 
          array (
            0 => 35,
            1 => 320,
            2 => 2451,
          ),
          2 => 'design/standard/templates/content/datatype/edit/ezinisetting.tpl',
        ),
      ),
      11 => 
      array (
        0 => 2,
        1 => false,
        2 => '" name="',
        3 => 
        array (
          0 => 
          array (
            0 => 35,
            1 => 320,
            2 => 2452,
          ),
          1 => 
          array (
            0 => 35,
            1 => 328,
            2 => 2460,
          ),
          2 => 'design/standard/templates/content/datatype/edit/ezinisetting.tpl',
        ),
      ),
      12 => 
      array (
        0 => 3,
        1 => false,
        2 => 
        array (
          0 => 
          array (
            0 => 4,
            1 => 
            array (
              0 => '',
              1 => 2,
              2 => 'attribute_base',
            ),
            2 => false,
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            0 => 35,
            1 => 328,
            2 => 2461,
          ),
          1 => 
          array (
            0 => 35,
            1 => 343,
            2 => 2476,
          ),
          2 => 'design/standard/templates/content/datatype/edit/ezinisetting.tpl',
        ),
      ),
      13 => 
      array (
        0 => 2,
        1 => false,
        2 => '_ini_setting_',
        3 => 
        array (
          0 => 
          array (
            0 => 35,
            1 => 343,
            2 => 2477,
          ),
          1 => 
          array (
            0 => 35,
            1 => 356,
            2 => 2490,
          ),
          2 => 'design/standard/templates/content/datatype/edit/ezinisetting.tpl',
        ),
      ),
      14 => 
      array (
        0 => 3,
        1 => false,
        2 => 
        array (
          0 => 
          array (
            0 => 4,
            1 => 
            array (
              0 => '',
              1 => 2,
              2 => 'attribute',
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
                1 => 'id',
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
            0 => 35,
            1 => 356,
            2 => 2491,
          ),
          1 => 
          array (
            0 => 35,
            1 => 369,
            2 => 2504,
          ),
          2 => 'design/standard/templates/content/datatype/edit/ezinisetting.tpl',
        ),
      ),
      15 => 
      array (
        0 => 2,
        1 => false,
        2 => '">
        <option value="true" ',
        3 => 
        array (
          0 => 
          array (
            0 => 35,
            1 => 369,
            2 => 2505,
          ),
          1 => 
          array (
            0 => 36,
            1 => 29,
            2 => 2537,
          ),
          2 => 'design/standard/templates/content/datatype/edit/ezinisetting.tpl',
        ),
      ),
      16 => 
      array (
        0 => 4,
        1 => 
        array (
          0 => 
          array (
            0 => 2,
            1 => false,
            2 => 'selected="selected"',
            3 => 
            array (
              0 => 
              array (
                0 => 36,
                1 => 65,
                2 => 2575,
              ),
              1 => 
              array (
                0 => 36,
                1 => 84,
                2 => 2594,
              ),
              2 => 'design/standard/templates/content/datatype/edit/ezinisetting.tpl',
            ),
          ),
        ),
        2 => 'if',
        3 => 
        array (
          'condition' => 
          array (
            0 => 
            array (
              0 => 4,
              1 => 
              array (
                0 => '',
                1 => 2,
                2 => 'attribute',
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
                  1 => 'data_text',
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
                0 => 'eq',
                1 => 
                array (
                  0 => 
                  array (
                    0 => 1,
                    1 => 'true',
                    2 => false,
                  ),
                ),
              ),
              2 => false,
            ),
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            0 => 36,
            1 => 29,
            2 => 2538,
          ),
          1 => 
          array (
            0 => 36,
            1 => 65,
            2 => 2574,
          ),
          2 => 'design/standard/templates/content/datatype/edit/ezinisetting.tpl',
        ),
      ),
      17 => 
      array (
        0 => 2,
        1 => false,
        2 => '>',
        3 => 
        array (
          0 => 
          array (
            0 => 36,
            1 => 86,
            2 => 2599,
          ),
          1 => 
          array (
            0 => 36,
            1 => 87,
            2 => 2600,
          ),
          2 => 'design/standard/templates/content/datatype/edit/ezinisetting.tpl',
        ),
      ),
      18 => 
      array (
        0 => 3,
        1 => false,
        2 => 
        array (
          0 => 
          array (
            0 => 1,
            1 => 'True',
            2 => false,
          ),
          1 => 
          array (
            0 => 6,
            1 => 
            array (
              0 => 'i18n',
              1 => 
              array (
                0 => 
                array (
                  0 => 1,
                  1 => 'design/standard/class/datatype',
                  2 => false,
                ),
              ),
            ),
            2 => false,
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            0 => 36,
            1 => 87,
            2 => 2601,
          ),
          1 => 
          array (
            0 => 36,
            1 => 134,
            2 => 2648,
          ),
          2 => 'design/standard/templates/content/datatype/edit/ezinisetting.tpl',
        ),
      ),
      19 => 
      array (
        0 => 2,
        1 => false,
        2 => '</option>
        <option value="false" ',
        3 => 
        array (
          0 => 
          array (
            0 => 36,
            1 => 134,
            2 => 2649,
          ),
          1 => 
          array (
            0 => 37,
            1 => 30,
            2 => 2689,
          ),
          2 => 'design/standard/templates/content/datatype/edit/ezinisetting.tpl',
        ),
      ),
      20 => 
      array (
        0 => 4,
        1 => 
        array (
          0 => 
          array (
            0 => 2,
            1 => false,
            2 => 'selected="selected"',
            3 => 
            array (
              0 => 
              array (
                0 => 37,
                1 => 67,
                2 => 2728,
              ),
              1 => 
              array (
                0 => 37,
                1 => 86,
                2 => 2747,
              ),
              2 => 'design/standard/templates/content/datatype/edit/ezinisetting.tpl',
            ),
          ),
        ),
        2 => 'if',
        3 => 
        array (
          'condition' => 
          array (
            0 => 
            array (
              0 => 4,
              1 => 
              array (
                0 => '',
                1 => 2,
                2 => 'attribute',
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
                  1 => 'data_text',
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
                0 => 'eq',
                1 => 
                array (
                  0 => 
                  array (
                    0 => 1,
                    1 => 'false',
                    2 => false,
                  ),
                ),
              ),
              2 => false,
            ),
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            0 => 37,
            1 => 30,
            2 => 2690,
          ),
          1 => 
          array (
            0 => 37,
            1 => 67,
            2 => 2727,
          ),
          2 => 'design/standard/templates/content/datatype/edit/ezinisetting.tpl',
        ),
      ),
      21 => 
      array (
        0 => 2,
        1 => false,
        2 => '>',
        3 => 
        array (
          0 => 
          array (
            0 => 37,
            1 => 88,
            2 => 2752,
          ),
          1 => 
          array (
            0 => 37,
            1 => 89,
            2 => 2753,
          ),
          2 => 'design/standard/templates/content/datatype/edit/ezinisetting.tpl',
        ),
      ),
      22 => 
      array (
        0 => 3,
        1 => false,
        2 => 
        array (
          0 => 
          array (
            0 => 1,
            1 => 'False',
            2 => false,
          ),
          1 => 
          array (
            0 => 6,
            1 => 
            array (
              0 => 'i18n',
              1 => 
              array (
                0 => 
                array (
                  0 => 1,
                  1 => 'design/standard/class/datatype',
                  2 => false,
                ),
              ),
            ),
            2 => false,
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            0 => 37,
            1 => 89,
            2 => 2754,
          ),
          1 => 
          array (
            0 => 37,
            1 => 137,
            2 => 2802,
          ),
          2 => 'design/standard/templates/content/datatype/edit/ezinisetting.tpl',
        ),
      ),
      23 => 
      array (
        0 => 2,
        1 => false,
        2 => '</option>
    </select>',
        3 => 
        array (
          0 => 
          array (
            0 => 37,
            1 => 137,
            2 => 2803,
          ),
          1 => 
          array (
            0 => 39,
            1 => 0,
            2 => 2827,
          ),
          2 => 'design/standard/templates/content/datatype/edit/ezinisetting.tpl',
        ),
      ),
    ),
    2 => 'case',
    3 => 
    array (
      'match' => 
      array (
        0 => 
        array (
          0 => 2,
          1 => 3,
          2 => false,
        ),
      ),
    ),
    4 => 
    array (
      0 => 
      array (
        0 => 34,
        1 => 0,
        2 => 2101,
      ),
      1 => 
      array (
        0 => 34,
        1 => 12,
        2 => 2113,
      ),
      2 => 'design/standard/templates/content/datatype/edit/ezinisetting.tpl',
    ),
  ),
  6 => 
  array (
    0 => 2,
    1 => false,
    2 => '
',
    3 => 
    array (
      0 => 
      array (
        0 => 39,
        1 => 4,
        2 => 2834,
      ),
      1 => 
      array (
        0 => 41,
        1 => 0,
        2 => 2836,
      ),
      2 => 'design/standard/templates/content/datatype/edit/ezinisetting.tpl',
    ),
  ),
  7 => 
  array (
    0 => 4,
    1 => 
    array (
      0 => 
      array (
        0 => 2,
        1 => false,
        2 => '    <div class="block">
        <label for="ezcoa-',
        3 => 
        array (
          0 => 
          array (
            0 => 42,
            1 => 12,
            2 => 2863,
          ),
          1 => 
          array (
            0 => 44,
            1 => 26,
            2 => 2914,
          ),
          2 => 'design/standard/templates/content/datatype/edit/ezinisetting.tpl',
        ),
      ),
      1 => 
      array (
        0 => 4,
        1 => 
        array (
          0 => 
          array (
            0 => 3,
            1 => false,
            2 => 
            array (
              0 => 
              array (
                0 => 4,
                1 => 
                array (
                  0 => '',
                  1 => 2,
                  2 => 'attribute_base',
                ),
                2 => false,
              ),
            ),
            3 => 
            array (
              0 => 
              array (
                0 => 44,
                1 => 76,
                2 => 2967,
              ),
              1 => 
              array (
                0 => 44,
                1 => 91,
                2 => 2982,
              ),
              2 => 'design/standard/templates/content/datatype/edit/ezinisetting.tpl',
            ),
          ),
          1 => 
          array (
            0 => 2,
            1 => false,
            2 => '-',
            3 => 
            array (
              0 => 
              array (
                0 => 44,
                1 => 91,
                2 => 2983,
              ),
              1 => 
              array (
                0 => 44,
                1 => 92,
                2 => 2984,
              ),
              2 => 'design/standard/templates/content/datatype/edit/ezinisetting.tpl',
            ),
          ),
        ),
        2 => 'if',
        3 => 
        array (
          'condition' => 
          array (
            0 => 
            array (
              0 => 6,
              1 => 
              array (
                0 => 'ne',
                1 => 
                array (
                  0 => 
                  array (
                    0 => 4,
                    1 => 
                    array (
                      0 => '',
                      1 => 2,
                      2 => 'attribute_base',
                    ),
                    2 => false,
                  ),
                ),
                2 => 
                array (
                  0 => 
                  array (
                    0 => 1,
                    1 => 'ContentObjectAttribute',
                    2 => false,
                  ),
                ),
              ),
              2 => false,
            ),
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            0 => 44,
            1 => 26,
            2 => 2915,
          ),
          1 => 
          array (
            0 => 44,
            1 => 76,
            2 => 2965,
          ),
          2 => 'design/standard/templates/content/datatype/edit/ezinisetting.tpl',
        ),
      ),
      2 => 
      array (
        0 => 3,
        1 => false,
        2 => 
        array (
          0 => 
          array (
            0 => 4,
            1 => 
            array (
              0 => '',
              1 => 2,
              2 => 'attribute',
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
                1 => 'contentclassattribute_id',
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
            0 => 44,
            1 => 94,
            2 => 2990,
          ),
          1 => 
          array (
            0 => 44,
            1 => 129,
            2 => 3025,
          ),
          2 => 'design/standard/templates/content/datatype/edit/ezinisetting.tpl',
        ),
      ),
      3 => 
      array (
        0 => 2,
        1 => false,
        2 => '_',
        3 => 
        array (
          0 => 
          array (
            0 => 44,
            1 => 129,
            2 => 3026,
          ),
          1 => 
          array (
            0 => 44,
            1 => 130,
            2 => 3027,
          ),
          2 => 'design/standard/templates/content/datatype/edit/ezinisetting.tpl',
        ),
      ),
      4 => 
      array (
        0 => 3,
        1 => false,
        2 => 
        array (
          0 => 
          array (
            0 => 4,
            1 => 
            array (
              0 => '',
              1 => 2,
              2 => 'attribute',
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
                1 => 'contentclass_attribute_identifier',
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
            0 => 44,
            1 => 130,
            2 => 3028,
          ),
          1 => 
          array (
            0 => 44,
            1 => 174,
            2 => 3072,
          ),
          2 => 'design/standard/templates/content/datatype/edit/ezinisetting.tpl',
        ),
      ),
      5 => 
      array (
        0 => 2,
        1 => false,
        2 => '_make_empty">',
        3 => 
        array (
          0 => 
          array (
            0 => 44,
            1 => 174,
            2 => 3073,
          ),
          1 => 
          array (
            0 => 44,
            1 => 187,
            2 => 3086,
          ),
          2 => 'design/standard/templates/content/datatype/edit/ezinisetting.tpl',
        ),
      ),
      6 => 
      array (
        0 => 3,
        1 => false,
        2 => 
        array (
          0 => 
          array (
            0 => 1,
            1 => 'Make empty array',
            2 => false,
          ),
          1 => 
          array (
            0 => 6,
            1 => 
            array (
              0 => 'i18n',
              1 => 
              array (
                0 => 
                array (
                  0 => 1,
                  1 => 'design/standard/class/datatype',
                  2 => false,
                ),
              ),
            ),
            2 => false,
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            0 => 44,
            1 => 187,
            2 => 3087,
          ),
          1 => 
          array (
            0 => 44,
            1 => 246,
            2 => 3146,
          ),
          2 => 'design/standard/templates/content/datatype/edit/ezinisetting.tpl',
        ),
      ),
      7 => 
      array (
        0 => 2,
        1 => false,
        2 => ':</label>
        <input id="ezcoa-',
        3 => 
        array (
          0 => 
          array (
            0 => 44,
            1 => 246,
            2 => 3147,
          ),
          1 => 
          array (
            0 => 45,
            1 => 25,
            2 => 3182,
          ),
          2 => 'design/standard/templates/content/datatype/edit/ezinisetting.tpl',
        ),
      ),
      8 => 
      array (
        0 => 4,
        1 => 
        array (
          0 => 
          array (
            0 => 3,
            1 => false,
            2 => 
            array (
              0 => 
              array (
                0 => 4,
                1 => 
                array (
                  0 => '',
                  1 => 2,
                  2 => 'attribute_base',
                ),
                2 => false,
              ),
            ),
            3 => 
            array (
              0 => 
              array (
                0 => 45,
                1 => 75,
                2 => 3235,
              ),
              1 => 
              array (
                0 => 45,
                1 => 90,
                2 => 3250,
              ),
              2 => 'design/standard/templates/content/datatype/edit/ezinisetting.tpl',
            ),
          ),
          1 => 
          array (
            0 => 2,
            1 => false,
            2 => '-',
            3 => 
            array (
              0 => 
              array (
                0 => 45,
                1 => 90,
                2 => 3251,
              ),
              1 => 
              array (
                0 => 45,
                1 => 91,
                2 => 3252,
              ),
              2 => 'design/standard/templates/content/datatype/edit/ezinisetting.tpl',
            ),
          ),
        ),
        2 => 'if',
        3 => 
        array (
          'condition' => 
          array (
            0 => 
            array (
              0 => 6,
              1 => 
              array (
                0 => 'ne',
                1 => 
                array (
                  0 => 
                  array (
                    0 => 4,
                    1 => 
                    array (
                      0 => '',
                      1 => 2,
                      2 => 'attribute_base',
                    ),
                    2 => false,
                  ),
                ),
                2 => 
                array (
                  0 => 
                  array (
                    0 => 1,
                    1 => 'ContentObjectAttribute',
                    2 => false,
                  ),
                ),
              ),
              2 => false,
            ),
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            0 => 45,
            1 => 25,
            2 => 3183,
          ),
          1 => 
          array (
            0 => 45,
            1 => 75,
            2 => 3233,
          ),
          2 => 'design/standard/templates/content/datatype/edit/ezinisetting.tpl',
        ),
      ),
      9 => 
      array (
        0 => 3,
        1 => false,
        2 => 
        array (
          0 => 
          array (
            0 => 4,
            1 => 
            array (
              0 => '',
              1 => 2,
              2 => 'attribute',
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
                1 => 'contentclassattribute_id',
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
            0 => 45,
            1 => 93,
            2 => 3258,
          ),
          1 => 
          array (
            0 => 45,
            1 => 128,
            2 => 3293,
          ),
          2 => 'design/standard/templates/content/datatype/edit/ezinisetting.tpl',
        ),
      ),
      10 => 
      array (
        0 => 2,
        1 => false,
        2 => '_',
        3 => 
        array (
          0 => 
          array (
            0 => 45,
            1 => 128,
            2 => 3294,
          ),
          1 => 
          array (
            0 => 45,
            1 => 129,
            2 => 3295,
          ),
          2 => 'design/standard/templates/content/datatype/edit/ezinisetting.tpl',
        ),
      ),
      11 => 
      array (
        0 => 3,
        1 => false,
        2 => 
        array (
          0 => 
          array (
            0 => 4,
            1 => 
            array (
              0 => '',
              1 => 2,
              2 => 'attribute',
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
                1 => 'contentclass_attribute_identifier',
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
            0 => 45,
            1 => 129,
            2 => 3296,
          ),
          1 => 
          array (
            0 => 45,
            1 => 173,
            2 => 3340,
          ),
          2 => 'design/standard/templates/content/datatype/edit/ezinisetting.tpl',
        ),
      ),
      12 => 
      array (
        0 => 2,
        1 => false,
        2 => '_make_empty" class="ezcc-',
        3 => 
        array (
          0 => 
          array (
            0 => 45,
            1 => 173,
            2 => 3341,
          ),
          1 => 
          array (
            0 => 45,
            1 => 198,
            2 => 3366,
          ),
          2 => 'design/standard/templates/content/datatype/edit/ezinisetting.tpl',
        ),
      ),
      13 => 
      array (
        0 => 3,
        1 => false,
        2 => 
        array (
          0 => 
          array (
            0 => 4,
            1 => 
            array (
              0 => '',
              1 => 2,
              2 => 'attribute',
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
                1 => 'identifier',
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
            0 => 45,
            1 => 198,
            2 => 3367,
          ),
          1 => 
          array (
            0 => 45,
            1 => 240,
            2 => 3409,
          ),
          2 => 'design/standard/templates/content/datatype/edit/ezinisetting.tpl',
        ),
      ),
      14 => 
      array (
        0 => 2,
        1 => false,
        2 => ' ezcca-',
        3 => 
        array (
          0 => 
          array (
            0 => 45,
            1 => 240,
            2 => 3410,
          ),
          1 => 
          array (
            0 => 45,
            1 => 247,
            2 => 3417,
          ),
          2 => 'design/standard/templates/content/datatype/edit/ezinisetting.tpl',
        ),
      ),
      15 => 
      array (
        0 => 3,
        1 => false,
        2 => 
        array (
          0 => 
          array (
            0 => 4,
            1 => 
            array (
              0 => '',
              1 => 2,
              2 => 'attribute',
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
                1 => 'identifier',
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
            0 => 45,
            1 => 247,
            2 => 3418,
          ),
          1 => 
          array (
            0 => 45,
            1 => 289,
            2 => 3460,
          ),
          2 => 'design/standard/templates/content/datatype/edit/ezinisetting.tpl',
        ),
      ),
      16 => 
      array (
        0 => 2,
        1 => false,
        2 => '_',
        3 => 
        array (
          0 => 
          array (
            0 => 45,
            1 => 289,
            2 => 3461,
          ),
          1 => 
          array (
            0 => 45,
            1 => 290,
            2 => 3462,
          ),
          2 => 'design/standard/templates/content/datatype/edit/ezinisetting.tpl',
        ),
      ),
      17 => 
      array (
        0 => 3,
        1 => false,
        2 => 
        array (
          0 => 
          array (
            0 => 4,
            1 => 
            array (
              0 => '',
              1 => 2,
              2 => 'attribute',
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
                1 => 'contentclass_attribute_identifier',
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
            0 => 45,
            1 => 290,
            2 => 3463,
          ),
          1 => 
          array (
            0 => 45,
            1 => 334,
            2 => 3507,
          ),
          2 => 'design/standard/templates/content/datatype/edit/ezinisetting.tpl',
        ),
      ),
      18 => 
      array (
        0 => 2,
        1 => false,
        2 => '" type="checkbox" name="',
        3 => 
        array (
          0 => 
          array (
            0 => 45,
            1 => 334,
            2 => 3508,
          ),
          1 => 
          array (
            0 => 45,
            1 => 358,
            2 => 3532,
          ),
          2 => 'design/standard/templates/content/datatype/edit/ezinisetting.tpl',
        ),
      ),
      19 => 
      array (
        0 => 3,
        1 => false,
        2 => 
        array (
          0 => 
          array (
            0 => 4,
            1 => 
            array (
              0 => '',
              1 => 2,
              2 => 'attribute_base',
            ),
            2 => false,
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            0 => 45,
            1 => 358,
            2 => 3533,
          ),
          1 => 
          array (
            0 => 45,
            1 => 373,
            2 => 3548,
          ),
          2 => 'design/standard/templates/content/datatype/edit/ezinisetting.tpl',
        ),
      ),
      20 => 
      array (
        0 => 2,
        1 => false,
        2 => '_ini_setting_make_empty_array_',
        3 => 
        array (
          0 => 
          array (
            0 => 45,
            1 => 373,
            2 => 3549,
          ),
          1 => 
          array (
            0 => 45,
            1 => 403,
            2 => 3579,
          ),
          2 => 'design/standard/templates/content/datatype/edit/ezinisetting.tpl',
        ),
      ),
      21 => 
      array (
        0 => 3,
        1 => false,
        2 => 
        array (
          0 => 
          array (
            0 => 4,
            1 => 
            array (
              0 => '',
              1 => 2,
              2 => 'attribute',
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
                1 => 'id',
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
            0 => 45,
            1 => 403,
            2 => 3580,
          ),
          1 => 
          array (
            0 => 45,
            1 => 416,
            2 => 3593,
          ),
          2 => 'design/standard/templates/content/datatype/edit/ezinisetting.tpl',
        ),
      ),
      22 => 
      array (
        0 => 2,
        1 => false,
        2 => '" ',
        3 => 
        array (
          0 => 
          array (
            0 => 45,
            1 => 416,
            2 => 3594,
          ),
          1 => 
          array (
            0 => 45,
            1 => 418,
            2 => 3596,
          ),
          2 => 'design/standard/templates/content/datatype/edit/ezinisetting.tpl',
        ),
      ),
      23 => 
      array (
        0 => 3,
        1 => false,
        2 => 
        array (
          0 => 
          array (
            0 => 4,
            1 => 
            array (
              0 => '',
              1 => 2,
              2 => 'attribute',
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
                1 => 'data_int',
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
              0 => 'choose',
              1 => 
              array (
                0 => 
                array (
                  0 => 1,
                  1 => '',
                  2 => false,
                ),
              ),
              2 => 
              array (
                0 => 
                array (
                  0 => 1,
                  1 => 'checked=checked',
                  2 => false,
                ),
              ),
            ),
            2 => false,
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            0 => 45,
            1 => 418,
            2 => 3597,
          ),
          1 => 
          array (
            0 => 45,
            1 => 469,
            2 => 3648,
          ),
          2 => 'design/standard/templates/content/datatype/edit/ezinisetting.tpl',
        ),
      ),
      24 => 
      array (
        0 => 2,
        1 => false,
        2 => ' />
    </div>
    <textarea id="ezcoa-',
        3 => 
        array (
          0 => 
          array (
            0 => 45,
            1 => 469,
            2 => 3649,
          ),
          1 => 
          array (
            0 => 47,
            1 => 24,
            2 => 3688,
          ),
          2 => 'design/standard/templates/content/datatype/edit/ezinisetting.tpl',
        ),
      ),
      25 => 
      array (
        0 => 4,
        1 => 
        array (
          0 => 
          array (
            0 => 3,
            1 => false,
            2 => 
            array (
              0 => 
              array (
                0 => 4,
                1 => 
                array (
                  0 => '',
                  1 => 2,
                  2 => 'attribute_base',
                ),
                2 => false,
              ),
            ),
            3 => 
            array (
              0 => 
              array (
                0 => 47,
                1 => 74,
                2 => 3741,
              ),
              1 => 
              array (
                0 => 47,
                1 => 89,
                2 => 3756,
              ),
              2 => 'design/standard/templates/content/datatype/edit/ezinisetting.tpl',
            ),
          ),
          1 => 
          array (
            0 => 2,
            1 => false,
            2 => '-',
            3 => 
            array (
              0 => 
              array (
                0 => 47,
                1 => 89,
                2 => 3757,
              ),
              1 => 
              array (
                0 => 47,
                1 => 90,
                2 => 3758,
              ),
              2 => 'design/standard/templates/content/datatype/edit/ezinisetting.tpl',
            ),
          ),
        ),
        2 => 'if',
        3 => 
        array (
          'condition' => 
          array (
            0 => 
            array (
              0 => 6,
              1 => 
              array (
                0 => 'ne',
                1 => 
                array (
                  0 => 
                  array (
                    0 => 4,
                    1 => 
                    array (
                      0 => '',
                      1 => 2,
                      2 => 'attribute_base',
                    ),
                    2 => false,
                  ),
                ),
                2 => 
                array (
                  0 => 
                  array (
                    0 => 1,
                    1 => 'ContentObjectAttribute',
                    2 => false,
                  ),
                ),
              ),
              2 => false,
            ),
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            0 => 47,
            1 => 24,
            2 => 3689,
          ),
          1 => 
          array (
            0 => 47,
            1 => 74,
            2 => 3739,
          ),
          2 => 'design/standard/templates/content/datatype/edit/ezinisetting.tpl',
        ),
      ),
      26 => 
      array (
        0 => 3,
        1 => false,
        2 => 
        array (
          0 => 
          array (
            0 => 4,
            1 => 
            array (
              0 => '',
              1 => 2,
              2 => 'attribute',
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
                1 => 'contentclassattribute_id',
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
            0 => 47,
            1 => 92,
            2 => 3764,
          ),
          1 => 
          array (
            0 => 47,
            1 => 127,
            2 => 3799,
          ),
          2 => 'design/standard/templates/content/datatype/edit/ezinisetting.tpl',
        ),
      ),
      27 => 
      array (
        0 => 2,
        1 => false,
        2 => '_',
        3 => 
        array (
          0 => 
          array (
            0 => 47,
            1 => 127,
            2 => 3800,
          ),
          1 => 
          array (
            0 => 47,
            1 => 128,
            2 => 3801,
          ),
          2 => 'design/standard/templates/content/datatype/edit/ezinisetting.tpl',
        ),
      ),
      28 => 
      array (
        0 => 3,
        1 => false,
        2 => 
        array (
          0 => 
          array (
            0 => 4,
            1 => 
            array (
              0 => '',
              1 => 2,
              2 => 'attribute',
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
                1 => 'contentclass_attribute_identifier',
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
            0 => 47,
            1 => 128,
            2 => 3802,
          ),
          1 => 
          array (
            0 => 47,
            1 => 172,
            2 => 3846,
          ),
          2 => 'design/standard/templates/content/datatype/edit/ezinisetting.tpl',
        ),
      ),
      29 => 
      array (
        0 => 2,
        1 => false,
        2 => '" class="box ezcc-',
        3 => 
        array (
          0 => 
          array (
            0 => 47,
            1 => 172,
            2 => 3847,
          ),
          1 => 
          array (
            0 => 47,
            1 => 190,
            2 => 3865,
          ),
          2 => 'design/standard/templates/content/datatype/edit/ezinisetting.tpl',
        ),
      ),
      30 => 
      array (
        0 => 3,
        1 => false,
        2 => 
        array (
          0 => 
          array (
            0 => 4,
            1 => 
            array (
              0 => '',
              1 => 2,
              2 => 'attribute',
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
                1 => 'identifier',
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
            0 => 47,
            1 => 190,
            2 => 3866,
          ),
          1 => 
          array (
            0 => 47,
            1 => 232,
            2 => 3908,
          ),
          2 => 'design/standard/templates/content/datatype/edit/ezinisetting.tpl',
        ),
      ),
      31 => 
      array (
        0 => 2,
        1 => false,
        2 => ' ezcca-',
        3 => 
        array (
          0 => 
          array (
            0 => 47,
            1 => 232,
            2 => 3909,
          ),
          1 => 
          array (
            0 => 47,
            1 => 239,
            2 => 3916,
          ),
          2 => 'design/standard/templates/content/datatype/edit/ezinisetting.tpl',
        ),
      ),
      32 => 
      array (
        0 => 3,
        1 => false,
        2 => 
        array (
          0 => 
          array (
            0 => 4,
            1 => 
            array (
              0 => '',
              1 => 2,
              2 => 'attribute',
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
                1 => 'identifier',
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
            0 => 47,
            1 => 239,
            2 => 3917,
          ),
          1 => 
          array (
            0 => 47,
            1 => 281,
            2 => 3959,
          ),
          2 => 'design/standard/templates/content/datatype/edit/ezinisetting.tpl',
        ),
      ),
      33 => 
      array (
        0 => 2,
        1 => false,
        2 => '_',
        3 => 
        array (
          0 => 
          array (
            0 => 47,
            1 => 281,
            2 => 3960,
          ),
          1 => 
          array (
            0 => 47,
            1 => 282,
            2 => 3961,
          ),
          2 => 'design/standard/templates/content/datatype/edit/ezinisetting.tpl',
        ),
      ),
      34 => 
      array (
        0 => 3,
        1 => false,
        2 => 
        array (
          0 => 
          array (
            0 => 4,
            1 => 
            array (
              0 => '',
              1 => 2,
              2 => 'attribute',
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
                1 => 'contentclass_attribute_identifier',
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
            0 => 47,
            1 => 282,
            2 => 3962,
          ),
          1 => 
          array (
            0 => 47,
            1 => 326,
            2 => 4006,
          ),
          2 => 'design/standard/templates/content/datatype/edit/ezinisetting.tpl',
        ),
      ),
      35 => 
      array (
        0 => 2,
        1 => false,
        2 => '" name="',
        3 => 
        array (
          0 => 
          array (
            0 => 47,
            1 => 326,
            2 => 4007,
          ),
          1 => 
          array (
            0 => 47,
            1 => 334,
            2 => 4015,
          ),
          2 => 'design/standard/templates/content/datatype/edit/ezinisetting.tpl',
        ),
      ),
      36 => 
      array (
        0 => 3,
        1 => false,
        2 => 
        array (
          0 => 
          array (
            0 => 4,
            1 => 
            array (
              0 => '',
              1 => 2,
              2 => 'attribute_base',
            ),
            2 => false,
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            0 => 47,
            1 => 334,
            2 => 4016,
          ),
          1 => 
          array (
            0 => 47,
            1 => 349,
            2 => 4031,
          ),
          2 => 'design/standard/templates/content/datatype/edit/ezinisetting.tpl',
        ),
      ),
      37 => 
      array (
        0 => 2,
        1 => false,
        2 => '_ini_setting_',
        3 => 
        array (
          0 => 
          array (
            0 => 47,
            1 => 349,
            2 => 4032,
          ),
          1 => 
          array (
            0 => 47,
            1 => 362,
            2 => 4045,
          ),
          2 => 'design/standard/templates/content/datatype/edit/ezinisetting.tpl',
        ),
      ),
      38 => 
      array (
        0 => 3,
        1 => false,
        2 => 
        array (
          0 => 
          array (
            0 => 4,
            1 => 
            array (
              0 => '',
              1 => 2,
              2 => 'attribute',
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
                1 => 'id',
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
            0 => 47,
            1 => 362,
            2 => 4046,
          ),
          1 => 
          array (
            0 => 47,
            1 => 375,
            2 => 4059,
          ),
          2 => 'design/standard/templates/content/datatype/edit/ezinisetting.tpl',
        ),
      ),
      39 => 
      array (
        0 => 2,
        1 => false,
        2 => '" cols="97" rows="5">',
        3 => 
        array (
          0 => 
          array (
            0 => 47,
            1 => 375,
            2 => 4060,
          ),
          1 => 
          array (
            0 => 47,
            1 => 396,
            2 => 4081,
          ),
          2 => 'design/standard/templates/content/datatype/edit/ezinisetting.tpl',
        ),
      ),
      40 => 
      array (
        0 => 3,
        1 => false,
        2 => 
        array (
          0 => 
          array (
            0 => 4,
            1 => 
            array (
              0 => '',
              1 => 2,
              2 => 'attribute',
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
                1 => 'data_text',
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
              0 => 'wash',
            ),
            2 => false,
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            0 => 47,
            1 => 396,
            2 => 4082,
          ),
          1 => 
          array (
            0 => 47,
            1 => 421,
            2 => 4107,
          ),
          2 => 'design/standard/templates/content/datatype/edit/ezinisetting.tpl',
        ),
      ),
      41 => 
      array (
        0 => 2,
        1 => false,
        2 => '</textarea>',
        3 => 
        array (
          0 => 
          array (
            0 => 47,
            1 => 421,
            2 => 4108,
          ),
          1 => 
          array (
            0 => 48,
            1 => 0,
            2 => 4120,
          ),
          2 => 'design/standard/templates/content/datatype/edit/ezinisetting.tpl',
        ),
      ),
    ),
    2 => 'case',
    3 => 
    array (
      'match' => 
      array (
        0 => 
        array (
          0 => 2,
          1 => 6,
          2 => false,
        ),
      ),
    ),
    4 => 
    array (
      0 => 
      array (
        0 => 42,
        1 => 0,
        2 => 2850,
      ),
      1 => 
      array (
        0 => 42,
        1 => 12,
        2 => 2862,
      ),
      2 => 'design/standard/templates/content/datatype/edit/ezinisetting.tpl',
    ),
  ),
),
                       array (
  'match' => 
  array (
    0 => 
    array (
      0 => 4,
      1 => 
      array (
        0 => '',
        1 => 2,
        2 => 'attribute',
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
          1 => 'contentclass_attribute',
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
          1 => 'data_int1',
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
    1 => 0,
    2 => 721,
  ),
  1 => 
  array (
    0 => 18,
    1 => 56,
    2 => 777,
  ),
  2 => 'design/standard/templates/content/datatype/edit/ezinisetting.tpl',
),
                       $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );

if ( isset( $setArray[$currentNamespace]['attribute_base'] ) )
{
unset( $vars[$currentNamespace]['attribute_base'] );
}


$setArray = $oldSetArray_db4b842d3cc34f36fa32449580157a67;
$tpl->Level--;
?>
