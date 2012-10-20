<?php
/**
 * File containing the module definition.
 *
 * @copyright Copyright (C) 1999-2012 eZ Systems AS. All rights reserved.
 * @license http://www.gnu.org/licenses/gpl-2.0.txt GNU General Public License v2
 *
 */

$Module = array( 'name' => 'eZ Comments' );

$ViewList = array();

$ViewList['setting'] = array(
                   'functions' => array( 'setting' ),
                   'single_post_actions' => array( 'SaveButton' => 'Save' ),
                   'script' => 'setting.php',
                   'params' => array( 'HashString', 'Page' ),
                   );

$ViewList['view'] = array(
                   'functions' => array( 'read' ),
                   'script' => 'view.php',
                   'params' => array( 'ContentObjectID', 'Page' ),
                   );

$ViewList['add'] = array(
                   'functions' => array( 'add' ),
                   'script' => 'add.php',
                   'params' => array(),
                   'single_post_actions' => array( 'AddCommentButton' => 'AddComment' ),
                   );

$ViewList['edit'] = array(
                   'functions' => array( 'edit' ),
                   'script' => 'edit.php',
                   'single_post_actions' => array( 'UpdateCommentButton' => 'UpdateComment',
                                                   'CancelButton'=>'Cancel' ),
                   'params' => array( 'CommentID' ),
                   );

$ViewList['activate'] = array(
                   'functions' => array( 'activate' ),
                   'script' => 'activate.php',
                   'single_post_actions' => array( 'RedirectButton'=>'Redirect' ),
                   'params' => array( 'HashString' ),
                   );

$ViewList['delete'] = array(
                   'functions' => array( 'delete' ),
                   'script' => 'delete.php',
                   'single_post_actions' => array( 'DeleteCommentButton' => 'DeleteComment',
                                                   'CancelButton'=>'Cancel' ),
                   'params' => array( 'CommentID' ),
                   );

$ViewList['list'] = array(
                   'functions' => array( 'list' ),
                   'default_navigation_part' => 'ezcommentsnavigationpart',
                   'script' => 'list.php',
                   'unordered_params' => array( 'offset' => 'Offset' ),
                   );

$ViewList['removecomments'] = array(
                   'functions' => array( 'removecomments' ),
                   'default_navigation_part' => 'ezcommentsnavigationpart',
                   'script' => 'removecomments.php',
                   'params' => array(),
                   );

$SectionID = array(
    'name'=> 'ContentSection',
    'values'=> array(),
    'path' => 'classes/',
    'file' => 'ezsection.php',
    'class' => 'eZSection',
    'function' => 'fetchList',
    'parameter' => array( false )
    );

$Creator = array(
    'name' => 'CommentCreator',
    'values' => array(
            array(
                'Name' => 'Self',
                'value' => '1'
                )
        )
    );

/* there might be more limitation for security, for instance moderation*/
$antiSpam = array(
    'name' => 'AntiSpam',
    'values' => array(
        array(
            'Name' => 'Bypass Captcha',
            'value' => 'bypass_captcha'
        )
    )
);

$FunctionList = array();

$FunctionList['read'] = array( 'ContentSection' => $SectionID );

$FunctionList['add'] = array( 'ContentSection' => $SectionID );

$FunctionList['edit'] = array( 'ContentSection' => $SectionID,
                               'CommentCreator' => $Creator );

$FunctionList['delete'] = array( 'ContentSection' => $SectionID,
                                 'CommentCreator' => $Creator );
$FunctionList['setting'] = array();

$FunctionList['activate'] = array();

$FunctionList['security'] = array( 'AntiSpam' => $antiSpam );

$FunctionList['list'] = array();

$FunctionList['removecomments'] = array();
?>
