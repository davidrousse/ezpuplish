<?php
/**
 * File containing antitimeout controller
 *
 * @copyright Copyright (C) 1999-2012 eZ Systems AS. All rights reserved.
 * @license http://www.gnu.org/licenses/gpl-2.0.txt GNU General Public License v2
 *
 */

// This will exit gracefully before timeout occurs


$startTime = time();
$executionTime = 0;
$phpTimeoutLimit = ini_get( 'max_execution_time' );

$tpl = eZTemplate::factory();

while ( true )
{
    $variable = 'text' + 42;

    $executionTime = time() - $startTime;

    if ( $executionTime > ( $phpTimeoutLimit * 0.8 ) )
    {
        $tpl->setVariable( 'execution_time', $executionTime );
        $tpl->setVariable( 'php_timeout_limit', $phpTimeoutLimit );
        break;
    }
}

$Result = array();
$Result['content'] = $tpl->fetch( 'design:test/antitimeout.tpl' );
return $Result;

?>
