<?php
/**
 * File containing the hide.php cronjob.
 *
 * @copyright Copyright (C) 1999-2012 eZ Systems AS. All rights reserved.
 * @license http://www.gnu.org/licenses/gpl-2.0.txt GNU General Public License v2
 * @version  2012.9
 * @package kernel
 */

$ini = eZINI::instance( 'content.ini' );
$rootNodeIDList = $ini->variable( 'HideSettings','RootNodeList' );
$hideAttributeArray = $ini->variable( 'HideSettings', 'HideDateAttributeList' );

$currentDate = time();

eZINI::instance()->setVariable( 'SiteAccessSettings', 'ShowHiddenNodes', 'false' );

$hiddenNodesParams = array(
    'LoadDataMap' => false,
    'Limit' => 50,
    'SortBy' => array( array( 'published', true ) ) );

foreach ( $rootNodeIDList as $nodeID )
{
    $rootNode = eZContentObjectTreeNode::fetch( $nodeID );
    $cli->output( 'Hiding content of node "' . $rootNode->attribute( 'name' ) . '" (' . $nodeID . ')' );
    $cli->output();

    foreach ( $hideAttributeArray as $hideClass => $attributeIdentifier )
    {
        $countParams = array( 'ClassFilterType' => 'include',
                              'ClassFilterArray' => array( $hideClass ),
                              'Limitation' => array(),
                              'AttributeFilter' => array( 'and',
                                  array( "{$hideClass}/{$attributeIdentifier}", '<=', $currentDate ),
                                  array( "{$hideClass}/$attributeIdentifier", '>', 0 ) ) );

        $nodeArrayCount = $rootNode->subTreeCount( $countParams );
        if ( $nodeArrayCount > 0 )
        {
            $cli->output( "Hiding {$nodeArrayCount} node(s) of class {$hideClass}." );

            do
            {
                $nodeArray = $rootNode->subTree( $hiddenNodesParams + $countParams );

                foreach ( $nodeArray as $node )
                {
                    $cli->output( 'Hiding node: "' . $node->attribute( 'name' ) . '" (' . $node->attribute( 'node_id' ) . ')' );
                    eZContentObjectTreeNode::hideSubTree( $node );
                }
                // clear memory after every batch
                eZContentObject::clearCache();
            } while ( is_array( $nodeArray ) && !empty( $nodeArray ) );

            $cli->output();
        }
        else
        {
            $cli->output( "Nothing to hide." );
        }
    }

    $cli->output();
}

?>
