<?php
/**
 * File containing the brightness filter handler
 *
 * @copyright Copyright (C) 1999-2012 eZ Systems AS. All rights reserved.
 * @license http://www.gnu.org/licenses/gpl-2.0.txt GNU General Public License v2
 * @version 5.0.0-beta2
 * @package ezie
 */
$prepare_action = new eZIEImagePreAction();

$http = eZHTTPTool::instance();
$value  = $http->hasPostVariable( 'value' ) ? $http->variable( 'value' ) : 0;
$region = $prepare_action->hasRegion() ? $prepare_action->getRegion() : null;

$imageconverter = new eZIEezcImageConverter( eZIEImageFilterBrightness::filter( $value, $region ) );

$imageconverter->perform(
    $prepare_action->getImagePath(),
    $prepare_action->getNewImagePath()
);

eZIEImageToolResize::doThumb(
    $prepare_action->getNewImagePath(),
    $prepare_action->getNewThumbnailPath()
);

echo (string)$prepare_action;
eZExecution::cleanExit();
?>
