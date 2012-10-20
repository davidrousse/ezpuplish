<?php
// URI:       design:parts/websitetoolbar/link.tpl
// Filename:  extension/ezwt/design/standard/templates/parts/websitetoolbar/link.tpl
// Timestamp: 1350735748 (Sat Oct 20 12:22:28 UTC 2012)
$oldSetArray_322ca7811a58194550da62478a15f061 = isset( $setArray ) ? $setArray : array();
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

$text .= '<input type="image" disabled="disabled" class="ezwt-input-image disabled" src="/ezpublish/app/ezpublish_legacy/extension/ezwt/design/standard/images/websitetoolbar/ezwt-icon-url.png" alt="(Dés)activer le mode modification du menu." title="(Dés)activer le mode modification du menu." id="ezwt-link-switcher" />

<script type="text/javascript">

(function( d )
{
    addEvent( window, \'load\', function(){
        var link = d.getElementById(\'ezwt-link-switcher\');
        link.disabled = false;
        link.className = \'ezwt-input-image\';

        addEvent( link, \'click\', function( e ){
            e = e || window.event;
            if( e.preventDefault ) e.preventDefault();
            else e.returnValue = false;
            var links = getByClass( d, \'menu-item-link\' );
            for (var i = 0, l = links.length; i < l; i++)
            {
                var rel = links[i].getAttribute(\'rel\'), href = links[i].getAttribute(\'href\'), target = links[i].getAttribute(\'target\'), rev = links[i].getAttribute(\'rev\');
                links[i].setAttribute(\'rel\',  href );
                links[i].setAttribute(\'href\', rel );
                links[i].setAttribute(\'target\', rev ? rev : \'\' );
                links[i].setAttribute(\'rev\', target ? target : \'\' );
            }
            return false;
        });
    });

    function getByClass( n, className )
    {
        if (n.getElementsByClassName)
          return n.getElementsByClassName(className);

        var hits = [], els = n.getElementsByTagName("*");
        for (var i = 0, l = els.length; i < l; i++)
        {
            if ( els[i].className && ( \' \' + els[i].className + \' \').indexOf( \' \' + className + \' \' ) !== -1 )
                hits.push( els[i] );
        }
        return hits;
    }

    function addEvent( n, trigger, handler )
    {
        if ( n.addEventListener ) n.addEventListener( trigger, handler, true );
        else if ( n.attachEvent ) n.attachEvent( \'on\' + trigger, handler );
    }
})( document );

</script>';

$setArray = $oldSetArray_322ca7811a58194550da62478a15f061;
$tpl->Level--;
?>
