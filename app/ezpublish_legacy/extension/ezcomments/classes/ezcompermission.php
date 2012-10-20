<?php
/**
 * File containing ezcomPermission class
 *
 * @copyright Copyright (C) 1999-2012 eZ Systems AS. All rights reserved.
 * @license http://www.gnu.org/licenses/gpl-2.0.txt GNU General Public License v2
 *
 */

/**
 * class dealing with the comment permission
 *
 */
class ezcomPermission
{
    protected static $moduleName = 'comment';
    protected static $sectionKey = 'ContentSection';
    protected static $commentCreatorKey = 'CommentCreator';
    protected static $subtreeKey = 'User_Subtree';
    protected static $userSectionKey = 'User_Section';
    protected static $instance = null;

    /**
     * check if the user has Acceess to the object with limitation of class, section, owner, language, nodes, subtrees
     *
     * return true if has, false if not
     */
    public function hasFunctionAccess( $user, $functionName, $contentObject, $languageCode, $comment = null, $scope = null, $node = null )
    {
        $result = $user->hasAccessTo( self::$moduleName, $functionName );

        if ( $result['accessWord'] !== 'limited' )
        {
            $return = ( $result['accessWord'] === 'yes' ) and ( $scope !== 'personal' );
        }
        else
        {
            foreach( $result['policies'] as $limitationArray )
            {
                // eZDebug::writeDebug( $limitationArray, "limitationArray for function $functionName" );

                $return = true;
                foreach( $limitationArray as $limitationKey => $limitation )
                {
                    // deal with limitation checking
                    $resultItem = $this->checkPermission( $user, $limitationKey, $limitation,
                        $contentObject, $languageCode, $comment, $scope, $node );
                    ezDebugSetting::writeNotice( 'extension-ezcomments',
                        "Permission check result for function '$functionName' with limitation '$limitationKey': " . ( $resultItem === true ? 'true' : 'false' ), __METHOD__ );
                    $return = ( $return and $resultItem );
                }

                if ( $return === true )
                    break;
            }
        }
        return $return;
    }

   /**
    * Check the permission given user contentobject, language and comment(optional)
    * To extend the permission checking, please extend the class and override this method
    * @param $user
    * @param $limitationKey key name of the limitiation, for instance 'Language'
    * @param $limitation limitation array, for instance '{eng-GB,nor-NO}'
    * @param $contentObject contentobject of the comments
    * @param $languageCode language code of the content object
    * @param $comment comment object if the permaission is based on one comment.When the permission checking is for editing and delete, it's useful
    * @return true if the checking result is true, false otherwise
    */
    protected function checkPermission( $user, $limitationKey, $limitation, $contentObject, $languageCode, $comment = null, $scope = null, $node = null )
    {
        switch( $limitationKey )
        {
            // section limited policy
            case self::$sectionKey:
            case self::$userSectionKey:
                // this does not match when looking for personal policies
                if ( $scope == 'personal' )
                    return false;

                $contentSectionID = $contentObject->attribute( 'section_id' );
                return in_array( $contentSectionID, $limitation );

            // owner limited policy
            case self::$commentCreatorKey:
                // this does not match when looking for role wide policies
                if ( $scope == 'role' )
                    return false;

                if ( $user->isAnonymous() )
                {
                    return false;
                }
                else
                {
                    $userID = $user->attribute( 'contentobject_id' );
                    $commentUserID = $comment->attribute( 'user_id' );
                    return ( $userID == $commentUserID );
                }
            // role assignment by subtree limitation
            case self::$subtreeKey:
                if ( !( $node instanceof eZContentObjectTreeNode ) )
                {
                    return false;
                }
                else
                {
                    foreach( $limitation as $subtree )
                    {
                        if ( strpos( $node->attribute( 'path_string' ), $subtree ) === 0 )
                        {
                            return true;
                        }
                    }
                    return false;
                }

            default:
                return false;
        }
    }

    /**
    * Checks if the current user has a 'self' edit/delete policy
    *
    * @param eZContentObject $contentObject Used to check with a possible section
    *
    * @return array An array with edit and delete as keys, and booleans as values
    */
    public static function selfPolicies( $contentObject )
    {
        $return = array( 'edit' => false, 'delete' => false );
        $sectionID = $contentObject->attribute( 'section_id' );

        $user = eZUser::currentUser();
        foreach( array_keys( $return ) as $functionName )
        {
            $policies = $user->hasAccessTo( self::$moduleName, $functionName );

            // unlimited policy, not personal
            if ( $policies['accessWord'] !== 'limited' )
            {
                $return[$functionName] = false;
            }
            else
            {
                // scan limited policies
                foreach( $policies['policies'] as $limitationArray )
                {
                    // a self limitation exists
                    if ( isset( $limitationArray[self::$commentCreatorKey] ) )
                    {
                        // but it also has a section limitation
                        if ( isset( $limitationArray[self::$sectionKey] ) )
                        {
                            if ( in_array( $sectionID, $limitationArray[self::$sectionKey] ) )
                            {
                                $return[$functionName] = true;
                                break;
                            }
                        }
                        else
                        {
                            $return[$functionName] = true;
                            break;
                        }
                    }
                }
            }
        }

        return array( 'result' => $return );
    }

    /**
    * @param $scope What access scope should be accepted.
    *        Default is any, but possible values are:
    *        - role: the permissions is identical for any user sharing the same role
    *        - personal: the permission is limited by ownership (edit self for instance)
    */
    public static function hasAccessToFunction( $functionName, $contentObject, $languageCode, $comment = null, $scope = null, $node = null )
    {
        $user = eZUser::currentUser();
        $permission = ezcomPermission::instance();
        $result = $permission->hasFunctionAccess( $user, $functionName, $contentObject, $languageCode, $comment, $scope, $node );
        return array( 'result' => $result );
    }

    /**
     *
     * @param string $limitation :limitation name of security function
     * @param string $optionValue : option value of the limitation, like bypass_captcha, bypass_moderation, etc
     * @return array
     */
    public static function hasAccessToSecurity( $limitation, $optionValue )
    {
        $user = eZUser::currentUser();
        $permission = ezcomPermission::instance();
        $result = $user->hasAccessTo( self::$moduleName, 'security' );
        if ( $result['accessWord'] !== 'limited' )
        {
            $return = $result['accessWord'] === 'yes';
            return array( 'result' => $return );
        }
        else
        {
            // if there is one limitation marked as true
            $return = false;
            foreach( $result['policies'] as $limitationArray )
            {
                if( isset( $limitationArray[$limitation] ) )
                {
                    if( in_array( $optionValue, $limitationArray[$limitation] ) )
                    {
                        $return = true;
                        break;
                    }
                }
                // if the it's all selected
                else
                {
                    $return = true;
                    break;
                }
            }
            return array( 'result' => $return );
        }
        
    }

    public static function instance()
    {
        if ( is_null( self::$instance ) )
        {
            $ini = eZINI::instance( 'ezcomments.ini' );
            $className = $ini->variable( 'ManagerClasses', 'PermissionClass' );
            self::$instance = new $className();
        }
        return  self::$instance;
    }
}

?>
