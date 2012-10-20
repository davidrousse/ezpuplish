<?php
/**
 * File containing ezcomNotificationManagerTest class
 *
 * @copyright Copyright (C) 1999-2012 eZ Systems AS. All rights reserved.
 * @license http://www.gnu.org/licenses/gpl-2.0.txt GNU General Public License v2
 *
 */

class ezcomNotificationManagerTest extends ezpDatabaseTestCase
{
    /**
    * Path to the DB schema.
    * 
    * @var array
    */
    protected $sqlFiles = array( array( 'extension/ezcomments/sql/', 'schema.sql' ) );
    
    public function __construct()
    {
        parent::__construct();
        $this->setName( "ezcomNotificationManager object test" );
    }
    
    public function setUp()
    {
        parent::setUp();
        ezpTestDatabaseHelper::insertSqlData( $this->sharedFixture, $this->sqlFiles );
    }
    
    
//    /**
//     * Add a content object, a user
//     * Add 3 comments, one of which is notificed
//     * assert sending notification one comment by one comment
//     * assert sending nofication with all comments in one notification
//     *
//     * NB: in the user mail account, he/she should be able to get 4 mail in this case.
//     * 1 mail for all comments notification
//     * 3 mail for 3 comments notification
//     *
//     * email account needed
//     *
//     * @return
//     */
//    public function testSendNotification()
//    {
//        //1. create content and user
//        $content = new ezpObject( 'article' );
//        $content->publish();
//        $contentObject = $content->object;
//        $languageID = 2;
//
//        $userObject = new ezpObject( 'user' );
//        $userObject->publish();
//        $userID = $userObject->object->attribute( 'id' );
//        $user = eZUser::create( $userID );
//        //2. create subscriber, subscription, notification
//        $input = array();
//        $input['email'] = 'xc@ez.no';
//        $input['name'] = 'xc';
//        $input['text'] = 'notification test1!';
//        $input['notified'] = true;
//        $time = time();
//
//        ezcomComment::addComment( $input, $user, $contentObject->attribute( 'id' ), $languageID, $time );
//
//        $input = array();
//        $input['email'] = 'xc@ez.no';
//        $input['name'] = 'xc';
//        $input['text'] = 'notification test2!';
//        $input['notified'] = false;
//        ezcomComment::addComment( $input, $user, $contentObject->attribute( 'id' ), $languageID, $time );
//
//        $input = array();
//        $input['email'] = 'xc@ez.no';
//        $input['name'] = 'xc';
//        $input['text'] = 'notification test3!';
//        $input['notified'] = false;
//        ezcomComment::addComment( $input, $user, $contentObject->attribute( 'id' ), $languageID, $time );
//
//        //get subscriber list and comment list
//        $db = eZDB::instance();
//        $contentID = $contentObject->attribute( 'id' ) . '_' . $languageID;
//        $subscriberIDArray = $db->arrayQuery( "SELECT subscriber_id".
//                                              " FROM ezcomment_subscription" .
//                                              " WHERE content_id='$contentID' " );
//        $subscriberList = array();
//        foreach( $subscriberIDArray as $subscriberID )
//        {
//            $subscriberList[] = ezcomSubscriber::fetch( $subscriberID['subscriber_id'] );
//        }
//
//        $commentIDArray = $db->arrayQuery( "SELECT comment_id ".
//                                           " FROM ezcomment_notification" );
//        $commentList = array();
//        foreach( $commentIDArray as $commentIDArray )
//        {
//            $commentList[] = ezcomComment::fetch( $commentIDArray['comment_id'] );
//        }
//        $notificationManager = ezcomNotificationManager::instance();
//        // test sending all in one mail
//        foreach( $subscriberList as $subscriber )
//        {
//            $notificationManager->sendNotificationInOne( $subscriber, $contentObject );
//        }
//
//        //test sending one by one
//        foreach( $subscriberList as $subscriber )
//        {
//            foreach( $commentList as $comment )
//            {
//                $notificationManager->sendNotificationInMany( $subscriber, $contentObject, $comment );
//            }
//        }
//    }
    
    
    /**
     * Test executeSending method via email
     * email account needed 
     * NB: the user should be able to get one mail with 'email testing' as the subject 
     * @return
     */
    public function testExuecuteSending()
    {
        $subscriber = ezcomSubscriber::create();
        $subscriber->setAttribute( 'email', 'xc@ez.no' );
        $subscriber->store();
        $notificationManager = ezcomNotificationManager::
                                instance( 'ezcomNotificationEmailManager' );
        $notificationManager->executeSending( 'email testing!', 'email test subject', $subscriber );
    }
}
?>
