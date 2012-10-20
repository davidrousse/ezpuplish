<?php
/**
 * File containing the eZ\Publish\API\Repository\FieldTypeTools class.
 *
 * @copyright Copyright (C) 1999-2012 eZ Systems AS. All rights reserved.
 * @license http://ez.no/licenses/gnu_gpl GNU General Public License v2.0
 * @version 2012.9
 * @package eZ\Publish\API\Repository
 */

namespace eZ\Publish\API\Repository;

use eZ\Publish\API\Repository\Values\Content\VersionInfo;
use eZ\Publish\API\Repository\Values\ContentType\FieldDefinition;

/**
 * This class provides service methods available to FieldTypes
 *
 * This interface cannot be retrieved through the Public API and is not meant to be
 * used by its users. It is only available to {@link
 * eZ\Publish\SPI\FieldType\FieldType} implementors through the {@link
 * eZ\Publish\SPI\FieldType\FieldType::handleEvent()} method.
 *
 * @package eZ\Publish\API\Repository
 * @todo Rename to FieldTypeTools
 * @todo Add deleteRelation() method?
 */
interface FieldTypeTools
{
    /**
     * Adds a relation
     *
     * @throws \eZ\Publish\API\Repository\Exceptions\InvalidArgumentException If $relationType has an unsupported value
     * @throws \eZ\Publish\API\Repository\Exceptions\InvalidArgumentException If there is a mismatch between $relationType and provided values.
     *
     * The source of the relation is the content and version
     * referenced by $sourceVersion.
     *
     * @param int $relationType One of Relation::COMMON, Relation::EMBED, Relation::LINK or Relation::FIELD
     * @param \eZ\Publish\API\Repository\Values\Content\VersionInfo $sourceVersion
     * @param mixed $destinationContentId
     * @param \eZ\Publish\API\Repository\Values\ContentType\FieldDefinition|null $fieldDefinition
     *
     * @return \eZ\Publish\API\Repository\Values\Content\Relation The newly created relation
     */
    public function addRelation( $relationType,
                                 VersionInfo $sourceVersion,
                                 $destinationContentId,
                                 FieldDefinition $fieldDefinition = null );
}
