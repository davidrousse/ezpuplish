<?php
// URI:       design:dashboard/maintenance.tpl
// Filename:  design/standard/templates/dashboard/maintenance.tpl
// Timestamp: 1349721948 (Mon Oct 8 18:45:48 UTC 2012)
$oldSetArray_4efad8bff47f3d25a0511b0a7f96a416 = isset( $setArray ) ? $setArray : array();
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

$text .= '<h2>Mise à jour et maintenance</h2>

<p>';
unset( $var );
$var = 'Your installation: <span id="ez-version">%1</span>';
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$varData = array( 'value' => $var );
$tpl->processOperator( 'i18n',
                       array (
  0 => 
  array (
    0 => 
    array (
      0 => 1,
      1 => 'design/admin/dashboard/maintenance',
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
        0 => 'array',
        1 => 
        array (
          0 => 
          array (
            0 => 6,
            1 => 
            array (
              0 => 'fetch',
              1 => 
              array (
                0 => 
                array (
                  0 => 1,
                  1 => 'setup',
                  2 => false,
                ),
              ),
              2 => 
              array (
                0 => 
                array (
                  0 => 1,
                  1 => 'version',
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
                       $rootNamespace, $currentNamespace, $varData, false, false );
$var = $varData['value'];
unset( $varData );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= '</p>
<p>';
unset( $var );
$var = 'You are using %edition, the <span id="ez-publish-community-project-is-innovative-and-cutting-edge">innovative and cutting-edge</span> version of eZ Publish, built by <a href="%ez_link">eZ Systems</a> and the <a href="%ez_community_link">eZ Community</a>.</p>
<p>If this platform is critical for your business, we strongly recommend to subscribe to the Enterprise Edition of eZ Publish. More on <a href="%ez_link">eZ Systems</a>\' website.';
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$varData = array( 'value' => $var );
$tpl->processOperator( 'i18n',
                       array (
  0 => 
  array (
    0 => 
    array (
      0 => 1,
      1 => 'design/admin/dashboard/maintenance',
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
            1 => '%edition',
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
              2 => 'edition',
            ),
            2 => false,
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            0 => 1,
            1 => '%ez_link',
            2 => false,
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            0 => 1,
            1 => 'http://ez.no',
            2 => false,
          ),
        ),
        5 => 
        array (
          0 => 
          array (
            0 => 1,
            1 => '%ez_community_link',
            2 => false,
          ),
        ),
        6 => 
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
                  1 => 'http://share.ez.no?utm_content=eZ+Publish+Community+Project+',
                  2 => false,
                ),
              ),
              2 => 
              array (
                0 => 
                array (
                  0 => 6,
                  1 => 
                  array (
                    0 => 'fetch',
                    1 => 
                    array (
                      0 => 
                      array (
                        0 => 1,
                        1 => 'setup',
                        2 => false,
                      ),
                    ),
                    2 => 
                    array (
                      0 => 
                      array (
                        0 => 1,
                        1 => 'version',
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
                  0 => 1,
                  1 => '&utm_source=eZ+Publish+Community+Project+Dashboard&utm_medium=eZ+Publish+Community+Project+Dashboard&utm_campaign=eZ+Publish+Community+Project+Dashboard',
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
                       $rootNamespace, $currentNamespace, $varData, false, false );
$var = $varData['value'];
unset( $varData );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= '
</p>
';

$setArray = $oldSetArray_4efad8bff47f3d25a0511b0a7f96a416;
$tpl->Level--;
?>
