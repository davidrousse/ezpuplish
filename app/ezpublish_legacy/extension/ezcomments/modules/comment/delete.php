<?php
/**
 * File containing logic of delete view
 *
 * @copyright Copyright (C) 1999-2012 eZ Systems AS. All rights reserved.
 * @license http://www.gnu.org/licenses/gpl-2.0.txt GNU General Public License v2
 *
 */

$tpl = eZTemplate::factory();
$Module = $Params['Module'];
if ( $Module->isCurrentAction( 'DeleteComment' ) )
{
    $http = eZHTTPTool::instance();
    $commentID = null;
    if ( $http->hasPostVariable( 'CommentID' ) )
    {
        $commentID = $http->postVariable( 'CommentID' );
    }
    if ( !is_numeric( $commentID ) )
    {
        eZDebug::writeError( 'The parameter CommentID is not a number!', 'ezcomments' );
        return;
    }
    $tpl = eZTemplate::factory();
    $comment = ezcomComment::fetch( $commentID );
    $permissionResult = checkPermission( $comment );
    if ( $permissionResult !== true )
    {
        $tpl->setVariable( 'error_message', $permissionResult );
        return showDeleteForm( $tpl, $commentID );
    }
    else
    {
        //execute deleting
        $commentManager = ezcomCommentManager::instance();
        $deleteResult = $commentManager->deleteComment( $comment );
        if ( $deleteResult === true )
        {
            //clean up cache
            eZContentCacheManager::clearContentCacheIfNeeded( $comment->attribute( 'contentobject_id' ) );

            $redirectURI = null;
            if ( $http->hasPostVariable( "RedirectURI" ) )
            {
                $redirectURI = $http->postVariable( 'RedirectURI' );
            }
            //todo: deal with the case that there is no last Access URI
            return $Module->redirectTo( $redirectURI );
        }
        else
        {
            $tpl->setVariable( 'error_message', ezpI18n::tr( 'ezcomments/comment/delete', 'Deleting failed!' ) );
            return showDeleteForm( $tpl, $commentID );
        }
    }
}
else if ( $Module->isCurrentAction( 'Cancel' ) )
{
     $http = eZHTTPTool::instance();
     $redirectURI = null;
     if ( $http->hasPostVariable( "RedirectURI" ) )
     {
         $redirectURI = $http->postVariable( 'RedirectURI' );
     }
     //todo: deal with the case that there is no last Access URI
     return $Module->redirectTo( $redirectURI );
     return;
}
else
{
    $commentID = $Params['CommentID'];
    $comment = ezcomComment::fetch( $commentID );
    $permissionResult = checkPermission( $comment );
    if ( $permissionResult !== true )
    {
        $tpl->setVariable( 'error_message', $permissionResult );
    }
    return showDeleteForm( $tpl, $commentID );
}

function checkPermission( $comment )
{
    // check permission
    $contentObject = $comment->contentObject();
    $contentNode = $contentObject->mainNode();
    $languageID = $comment->attribute( 'language_id' );
    $languageCode = eZContentLanguage::fetch( $languageID )->attribute( 'locale' );
    $canDeleteResult = ezcomPermission::hasAccessToFunction( 'delete', $contentObject, $languageCode, $comment, null, $contentNode );

    $objectAttributes = $contentObject->fetchDataMap( false, $languageCode );
    $objectAttribute = null;
    foreach( $objectAttributes as $attribute )
    {
        if ( $attribute->attribute( 'data_type_string' ) === 'ezcomcomments' )
        {
            $objectAttribute = $attribute;
            break;
        }
    }
    $commentContent = $objectAttribute->content();
    if ( !$canDeleteResult['result'] || !$commentContent['show_comments'] )
    {
        return ezpI18n::tr( 'ezcomments/comment/delete', 'You don\'t have'.
                                                    ' access to delete comment' .
                                                    ' or the comment is hidden!' );
    }
    else
    {
        return true;
    }
}

function showDeleteForm( $tpl, $commentID )
{
    if ( is_null( $commentID ) || $commentID == '' )
    {
        eZDebug::writeError( 'No comment id', 'Delete comment' );
        return;
    }
    if ( !is_numeric( $commentID ) )
    {
        eZDebug::writeError( 'Comment id is not a number!', 'Delete comment' );
        return;
    }
    $tpl->setVariable( 'comment_id', $commentID );
    $redirectURI = null;
    $http = eZHTTPTool::instance();
    if ( $http->hasSessionVariable( "LastAccessesURI" ) )
    {
        $redirectURI = $http->sessionVariable( 'LastAccessesURI' );
    }
    if ( is_null( $redirectURI ) )
    {
        //todo: handle the redirectURI
    }
    $tpl->setVariable( 'redirect_uri', $redirectURI );
    $Result = array();
    $Result['path'] = array( array( 'url' => false,
                            'text' => ezpI18n::tr( 'ezcomments/comment/delete', 'Delete comment' ) ) );
    $Result['content'] = $tpl->fetch( 'design:comment/delete.tpl' );
    return $Result;
}
?>
