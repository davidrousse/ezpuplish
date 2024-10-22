<?php
/**
 * File containing the eZ\Publish\Core\Repository\Values\Content\ContentInfo class.
 *
 * @copyright Copyright (C) 1999-2012 eZ Systems AS. All rights reserved.
 * @license http://ez.no/licenses/gnu_gpl GNU General Public License v2.0
 * @version 2012.9
 */

namespace eZ\Publish\Core\Repository\Values\Content;

use eZ\Publish\API\Repository\Values\Content\ContentInfo as APIContentInfo;

/**
 * This class provides all version independent information of the content object.
 *
 * @property-read \eZ\Publish\API\Repository\Values\ContentType\ContentType $contentType calls {@link getContentType()}
 * @property-read mixed $id The unique id of the content object
 * @property-read string $name the computed name (via name schema) in the main language of the content object
 * @property-read mixed $sectionId the section to which the content is assigned
 * @property-read int $currentVersionNo Current Version number is the version number of the published version or the version number of a newly created draft (which is 1).
 * @property-read boolean $published true if there exists a published version false otherwise
 * @property-read mixed $ownerId the user id of the owner of the content
 * @property-read \DateTime $modificationDate Content modification date
 * @property-read \DateTime $publishedDate date of the last publish operation
 * @property-read boolean $alwaysAvailable Indicates if the content object is shown in the mainlanguage if its not present in an other requested language
 * @property-read string $remoteId a global unique id of the content object
 * @property-read string $mainLanguageCode The main language code of the content. If the available flag is set to true the content is shown in this language if the requested language does not exist.
 * @property-read mixed $mainLocationId Identifier of the main location.
 */
class ContentInfo extends APIContentInfo
{
    /**
     * @var integer
     */
    protected $contentType;

    /**
     * The content type of this content object
     * @return \eZ\Publish\API\Repository\Values\ContentType\ContentType
     */
    public function getContentType()
    {
        return $this->contentType;
    }

    /**
     * Magic getter for retrieving convenience properties
     *
     * @param string $property The name of the property to retrieve
     *
     * @return mixed
     */
    public function __get( $property )
    {
        switch ( $property )
        {
            case 'contentType':
                return $this->contentType;
        }
        return parent::__get( $property );
    }

    /**
     * Magic isset for singaling existence of convenience properties
     *
     * @param string $property
     *
     * @return bool
     */
    public function __isset( $property )
    {
        if ( $property === 'contentType' )
            return true;

        return parent::__isset( $property );
    }
}
