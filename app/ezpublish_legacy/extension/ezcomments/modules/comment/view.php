<?php
/**
 * File containing logic of comment view(comment/view in uri)
 *
 * @copyright Copyright (C) 1999-2012 eZ Systems AS. All rights reserved.
 * @license http://www.gnu.org/licenses/gpl-2.0.txt GNU General Public License v2
 *
 */

$http = eZHTTPTool::instance();

// fetch the content object
if ( !is_numeric( $Params['ContentObjectID'] ) )
{
    eZDebug::writeError( 'The parameter ContentObjectID is not a number!', 'ezcomments' );
    return;
}
$contentObjectID = (int)$Params['ContentObjectID'];
$contentObject = eZContentObject::fetch( $contentObjectID );

// fetch the language
$iniSite =eZINI::instance();
$languageCode = $iniSite->variable( 'RegionalSettings', 'ContentObjectLocale' );
$languageID = eZContentLanguage::idByLocale( $languageCode );
// fetch the content object attribute
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

if ( is_null( $objectAttribute ) )
{
    eZDebug::writeError( 'The object doesn\'t have a ezcomcomments attribute!', 'ezcomments' );
    return;
}

$tpl = eZTemplate::factory();
$tpl->setVariable( 'contentobject', $contentObject );
$tpl->setVariable( 'node', $contentObject->mainNode() );
$tpl->setVariable( 'objectattribute', $objectAttribute );
$tpl->setVariable( 'language_id', $languageID );
$tpl->setVariable( 'language_code', $languageCode );

$canAdd = false;
$canAddResult = ezcomPermission::hasAccessToFunction( 'add', $contentObject, $languageCode );
$canAdd = $canAddResult['result'];

$canRead = false;
$canReadResult = ezcomPermission::hasAccessToFunction( 'read', $contentObject, $languageCode );
$canRead = $canReadResult['result'];

$user = eZUser::currentUser();
$userID = $user->attribute( 'contentobject_id' );
$Module = $Params['Module'];

$Page = null;
if ( !is_null( $Params['Page'] ) )
{
 if ( !is_numeric( $Params['Page'] ) )
 {
     eZDebug::writeError( 'The page parameter is not a number.', 'ezcomments' );
     $tpl->setVariable( 'error_message', ezpI18n::tr( 'ezcomments/comment/view', 'The page parameter is not a number.' ) );
     return showView( $tpl );
 }
 else
 {
    $Page = $Params['Page'];
 }
}
else
{
 $Page = 1;
}

$tpl->setVariable( 'can_add', $canAdd );
$tpl->setVariable( 'can_read', $canRead );

$ezcommentsINI = eZINI::instance( 'ezcomments.ini' );
$defaultNumPerPage = $ezcommentsINI->variable( 'CommentSettings', 'NumberPerPage' );
$offset =  ( $Page - 1 ) * $defaultNumPerPage;


if( $Page < 1 )
{
     $tpl->setVariable( 'error_message', ezpI18n::tr( 'ezcomments/comment/view', 'The page parameter can\'t be minus.' ) );
     return showView( $tpl );
}

$length = $defaultNumPerPage;

$defaultSortField = $ezcommentsINI->variable( 'CommentSettings', 'DefaultSortField' );
$defaultSortOrder = $ezcommentsINI->variable( 'CommentSettings', 'DefaultSortOrder' );
$sorts = array( $defaultSortField => $defaultSortOrder );

$tpl->setVariable( 'current_page', $Page );
$tpl->setVariable( 'number_per_page', $defaultNumPerPage );
$tpl->setVariable( 'offset', $offset );
$tpl->setVariable( 'length', $length );
$tpl->setVariable( 'sort_field', $defaultSortField );
$tpl->setVariable( 'sort_order', $defaultSortOrder );

$uri = eZURI::instance( eZSys::requestURI() );
$tpl->setVariable( 'uri_string', $uri->uriString() );
return showView( $tpl );

function showView( $tpl )
{
$Result['content'] = $tpl->fetch( 'design:comment/view/view.tpl' );
$Result['path'] = array( array( 'url' => false,
                            'text' => ezpI18n::tr( 'ezcomments/comment/view', 'Comment/View' ) ) );
return $Result;
}
?>
