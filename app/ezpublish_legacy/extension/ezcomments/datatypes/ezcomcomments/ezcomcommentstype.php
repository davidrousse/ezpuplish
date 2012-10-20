<?php
/**
 * File containing ezcomCommentsType class
 *
 * @copyright Copyright (C) 1999-2012 eZ Systems AS. All rights reserved.
 * @license http://www.gnu.org/licenses/gpl-2.0.txt GNU General Public License v2
 *
 */

class ezcomCommentsType extends eZDataType
{
    const DATA_TYPE_STRING = "ezcomcomments";

    /*!
     Construction of the class, note that the second parameter in eZDataType
     is the actual name showed in the datatype dropdown list.
    */
    function __construct()
    {
        parent::__construct( self::DATA_TYPE_STRING, ezpI18n::tr( 'ezcomments/datatype', 'Comments', 'Datatype name'),
                             array( 'serialize_supported' => true ) );
    }

    /**
     * store the contentobjectattribute into database
     * @see kernel/classes/eZDataType#storeObjectAttribute($objectAttribute)
     */
    function storeObjectAttribute( $contentObjectAttribute )
    {
        return true;
    }

    function validateClassAttributeHTTPInput( $http, $base, $classAttribute )
    {
        //checking if the recaptcha key is set up if recaptcha is enabled
        $ini = eZINI::instance( 'ezcomments.ini' );
        $fields = $ini->variable( 'FormSettings' , 'AvailableFields' );
        if( in_array( 'recaptcha', $fields ) )
        {
            $publicKey = $ini->variable( 'RecaptchaSetting' , 'PublicKey' );
            $privateKey = $ini->variable( 'RecaptchaSetting' , 'PrivateKey' );
            if( $publicKey === '' || $privateKey === '' )
            {
                eZDebug::writeNotice( 'reCAPTCHA key is not set up. For help please visit http://projects.ez.no/ezcomments', __METHOD__ );
            }
        }
        
        if ( $http->hasPostVariable( 'StoreButton' ) || $http->hasPostVariable( 'ApplyButton' ) )
        {
           // find the class and count how many Comments dattype
            $cond = array( 'contentclass_id' => $classAttribute->attribute( 'contentclass_id' ),
                           'version' => eZContentClass::VERSION_STATUS_TEMPORARY,
                           'data_type_string' => $classAttribute->attribute( 'data_type_string' ) );
            $classAttributeList = eZContentClassAttribute::fetchFilteredList( $cond );
            // if there is more than 1 comment attribute, return it as INVALID
            if ( !is_null( $classAttributeList ) && count( $classAttributeList ) > 1 )
            {
                 if ( $classAttributeList[0]->attribute( 'id' ) == $classAttribute->attribute( 'id' ) )
                 {
                     eZDebug::writeNotice( 'There are more than 1 comment attribute in the class.', __METHOD__ );
                     return eZInputValidator::STATE_INVALID;
                 }
            }
        }
        return eZInputValidator::STATE_ACCEPTED;
    }
    
    
    /**
     * data_float->show comment: 1 to show comment, -1 not to show comment, other value to get default setting
     * data_int->enable commenting: 1 to show comment, -1 not to show comment, other value to get default setting
     * @see kernel/classes/eZDataType#objectAttributeContent($objectAttribute)
     */
    function objectAttributeContent( $objectAttribute )
    {
        $ini = eZINI::instance( 'ezcomments.ini' );
        $defaultShown = $ini->variable( 'GlobalSettings', 'DefaultShown' );
        $defaultEnabled = $ini->variable( 'GlobalSettings', 'DefaultEnabled' );
        $showComments = false;
        switch ( $objectAttribute->attribute( 'data_float' ) )
        {
            case 1:
                $showComments = true;
                break;
            case -1:
                $showComments = false;
                break;
            default:
                $showComments = $defaultShown === 'true'; 
                break;
        }
        $enableComment = false;
        switch ( $objectAttribute->attribute( 'data_int' ) )
        {
            case 1:
                $enableComment = true;
                break;
            case -1:
                $enableComment = false;
                break;
            default:
                $enableComment = $defaultEnabled === 'true'; 
                break;
        }
        $result = array(
            'show_comments' => $showComments,
            'enable_comment' => $enableComment
        );
        return $result;
    }

    /**
     * put the option enabled of ezcomcomment into  data_int of contentobjectattribute
     *
     * @see kernel/classes/eZDataType#fetchObjectAttributeHTTPInput($http, $base, $objectAttribute)
     */
    function fetchObjectAttributeHTTPInput( $http, $base, $contentObjectAttribute )
    {
        $enabledName = $base . '_ezcomcomments_enabled_' . $contentObjectAttribute->attribute( 'id' );
        $shownName = $base . '_ezcomcomments_shown_' . $contentObjectAttribute->attribute( 'id' );
        $enabledValue = -1;
        $shownValue = -1;
        if ( $http->hasPostVariable( $enabledName ) )
        {
            $enabledValue = 1;
        }
        if ( $http->hasPostVariable( $shownName ) )
        {
            $shownValue = 1;
        }
        $contentObjectAttribute->setAttribute( 'data_float', $shownValue );
        $contentObjectAttribute->setAttribute( 'data_int', $enabledValue );
        return true;
    }

    
    function isIndexable()
    {
        return true;
    }


    function sortKeyType()
    {
        return '';
    }

    /**
     * When deleting the content object, deleting all the comments.
     * @see kernel/classes/eZDataType#deleteStoredObjectAttribute($objectAttribute, $version)
     */
    function deleteStoredObjectAttribute( $contentObjectAttribute, $version = null )
    {
        $version = $contentObjectAttribute->objectVersion();
        if ( !is_null( $version ) &&
             $version->attribute( 'status' ) == eZContentObjectVersion::STATUS_PUBLISHED )
        {
            $contentObjectID = $contentObjectAttribute->attribute( 'contentobject_id' );
            $languageID = $contentObjectAttribute->attribute( 'language_id' );
            eZPersistentObject::removeObject( ezcomComment::definition(), 
                                              array( 'contentobject_id' => $contentObjectID,
                                                     'language_id' => $languageID ) );
        }
    }
}

eZDataType::register( ezcomCommentsType::DATA_TYPE_STRING, 'ezcomCommentsType' );
?>
