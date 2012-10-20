<?php
// URI:       design:content/edit/autosave.tpl
// Filename:  extension/ezautosave/design/ezwebin/templates/content/edit/autosave.tpl
// Timestamp: 1349610317 (Sun Oct 7 11:45:17 UTC 2012)
$oldSetArray_013cab1fcec6bbac7d23c2bcefdbc929 = isset( $setArray ) ? $setArray : array();
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

unset( $var );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$varData = array( 'value' => $var );
$tpl->processOperator( 'ezscript_require',
                       array (
  0 => 
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
            0 => 1,
            1 => 'ezjsc::yui3',
            2 => false,
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            0 => 1,
            1 => 'ezautosubmit.js',
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
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '
';
unset( $var );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$varData = array( 'value' => $var );
$tpl->processOperator( 'ezcss_require',
                       array (
  0 => 
  array (
    0 => 
    array (
      0 => 1,
      1 => 'autosave.css',
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

$text .= '
<script type="text/javascript">

YUI(YUI3_config).use(\'ezautosubmit\', \'node-base\', \'node-style\', function (Y) {
    var as = new Y.eZ.AutoSubmit({
            form: \'#editform\',
            action: ';
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
unset( $var7 );
$var7 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'edit_language', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['edit_language'] : null;
if (! isset( $var7 ) ) $var7 = NULL;
while ( is_object( $var7 ) and method_exists( $var7, 'templateValue' ) )
    $var7 = $var7->templateValue();
while ( is_object( $var7 ) and method_exists( $var7, 'templateValue' ) )
    $var7 = $var7->templateValue();
$var1 = ( 'ezjscore/call/ezautosave::savedraft::' . $var3 . '::' . $var5 . '::' . $var7 . '?ContentType=javascript' );
unset( $var3, $var5, $var7 );
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

$text .= ',
            interval: 180,
            trackUserInput: ';
unset( $var );
if ( true )
{
    $var = "true";
}
else
{
    
    $var = 'false';
}
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= '
        }),
        messages = {
            error: "';
unset( $var );
$var = 'Une erreur s\\047est produite durant l\\047enregistrement automatique du brouillon' ;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= '",
            saving: "';
unset( $var );
$var = 'Le brouillon est en cours de d\\047enregistrement' ;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= '"
        },
        timer = false, place;

    

    as.on(\'abort\', function() {
        place.removeClass(\'as-saving\')
             .removeClass(\'as-error\')
             .removeClass(\'as-success\')
             .setContent(\'\');
    });

    as.on(\'error\', function (e) {
        if ( timer ) {
            timer.cancel();
        }
        place.removeClass(\'as-saving\')
             .removeClass(\'as-success\')
             .addClass(\'as-error\')
             .setContent(\'<span>\' + messages.error + \'</span>\');
        if ( e.json && e.json.error_text ) {
             place.setAttribute(\'title\', e.json.error_text);
        }
    });

    as.on(\'init\', function () {
        var that = this;
        Y.one(\'#ezwt\').append(\'<div id="ez-as-place" class="as-init"></div>\');
        place = Y.one(\'#ez-as-place\');
        place.setStyle(\'top\', parseInt(Y.one(\'#ezwt\').get(\'offsetHeight\')) - 1 + \'px\');

        ';
// if begins
$if_cond = true;
if ( $if_cond )
{
$text .= 'Y.all(this.conf.form + \' input[name=StoreButton]\').hide();';
}
unset( $if_cond );
// if ends

$text .= '
        Y.on(\'beforeunload\', function (e) {
            setTimeout(function () {
                that.submit("StoreExitButton=1");
            }, 0);
        });
    });

    as.on(\'beforesave\', function () {
        place.addClass(\'as-saving\')
             .removeClass(\'as-error\')
             .removeClass(\'as-success\')
             .removeClass(\'as-init\')
             .setContent(messages.saving)
             .setAttribute(\'title\', \'\');
    });

    as.on(\'success\', function (e) {
        var counter = 0,
            msgAgo = e.json.content.message_ago,
            updateMsg = function () {
                var n = msgAgo.replace(counter, counter + 1);
                place.setContent(place.getContent().replace(msgAgo, n));
                msgAgo = n;
                counter++;
            };

        place.removeClass(\'as-error\')
             .removeClass(\'as-saving\')
             .addClass(\'as-success\')
             .setContent(e.json.content.message_success + \' \' + msgAgo)
             .setAttribute(\'title\', \'\');
        if ( timer ) {
            timer.cancel();
        }
        timer = Y.later(60000, this, updateMsg, [], true);
    });

    as.start();
    
});

</script>
';

$setArray = $oldSetArray_013cab1fcec6bbac7d23c2bcefdbc929;
$tpl->Level--;
?>
