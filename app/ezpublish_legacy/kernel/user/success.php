<?php
/**
 * @copyright Copyright (C) 1999-2012 eZ Systems AS. All rights reserved.
 * @license http://www.gnu.org/licenses/gpl-2.0.txt GNU General Public License v2
 * @version  2012.9
 * @package kernel
 */

$Module = $Params['Module'];
$Module->setTitle( "Successful registration" );
// Template handling

$tpl = eZTemplate::factory();
$tpl->setVariable( "module", $Module );
$ini = eZINI::instance();

$tpl->setVariable( "verify_user_email", $ini->variable( 'UserSettings', 'VerifyUserType' ) === "email" );

$Result = array();
$Result['content'] = $tpl->fetch( "design:user/success.tpl" );
$Result['path'] = array( array( 'text' => ezpI18n::tr( 'kernel/user', 'User' ),
                                'url' => false ),
                         array( 'text' => ezpI18n::tr( 'kernel/user', 'Success' ),
                                'url' => false ) );
if ( $ini->variable( 'SiteSettings', 'LoginPage' ) == 'custom' )
    $Result['pagelayout'] = 'loginpagelayout.tpl';

?>
