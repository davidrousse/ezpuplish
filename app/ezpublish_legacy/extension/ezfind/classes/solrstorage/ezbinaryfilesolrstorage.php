<?php

/**
 * @copyright Copyright (C) 1999-2012 eZ Systems AS. All rights reserved.
 * @author pb
 * @license http://www.gnu.org/licenses/gpl-2.0.txt GNU General Public License v2
 * @version 5.0.0-beta2
 * @package ezfind
 *
 */

class ezbinaryfileSolrStorage extends ezdatatypeSolrStorage
{

    /**
     * @param eZContentObjectAttribute $contentObjectAttribute the attribute to serialize
     * @param eZContentClassAttribute $contentClassAttribute the content class of the attribute to serialize
     * @return json encoded string for further processing
     * required first level elements 'method', 'version_format', 'data_type_identifier', 'content'
     * optional first level element is 'rendered' which should store (template) rendered xhtml snippets
     */
    public static function getAttributeContent( eZContentObjectAttribute $contentObjectAttribute, eZContentClassAttribute $contentClassAttribute )
    {

        $dataTypeIdentifier = $contentObjectAttribute->attribute( 'data_type_string' );
        $attributeID = $contentObjectAttribute->attribute( "id" );
        $version = $contentObjectAttribute->attribute( "version" );
        if ( !$contentObjectAttribute->hasContent() )
        {
            $content = null;
        }
        else
        {

            $binaryFile = eZBinaryFile::fetch( $attributeID, $version );
            $content = $binaryFile->storedFileInfo();
        }


        // This is not really the place, but for now initiate the safeguarding of the file itself here
        $archiveFileHandler = ezpFileArchiveFactory::getFileArchiveHandler( 'filesystem' );
        // todo: insert check if handler is really returned and of the right class before calling the archive action
        // maybe use the attribute id as prefix as well, may be useful for bookkeeping/recovery and potentially easier restore as well

        $archiveResult = $archiveFileHandler->archiveFile( $content['filepath'], array( $content['filepath'] ), $attributeID, 'ezbinaryfile' );


        $target = array(

                'content' => $content,
                'has_rendered_content' => false,
                'rendered' => null,
                'archived' => true,
                'archive' => $archiveResult
                );

        return $target;
    }

}


?>
