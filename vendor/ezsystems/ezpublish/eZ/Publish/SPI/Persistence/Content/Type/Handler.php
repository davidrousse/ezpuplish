<?php
/**
 * File containing the Content Type Handler class
 *
 * @copyright Copyright (C) 1999-2012 eZ Systems AS. All rights reserved.
 * @license http://ez.no/licenses/gnu_gpl GNU General Public License v2.0
 * @version 2012.9
 */

namespace eZ\Publish\SPI\Persistence\Content\Type;
use eZ\Publish\SPI\Persistence\Content\Type,
    eZ\Publish\SPI\Persistence\Content\Type\Group\CreateStruct as GroupCreateStruct,
    eZ\Publish\SPI\Persistence\Content\Type\Group\UpdateStruct as GroupUpdateStruct;

/**
 */
interface Handler
{
    /**
     * @param \eZ\Publish\SPI\Persistence\Content\Type\Group\CreateStruct $group
     * @return \eZ\Publish\SPI\Persistence\Content\Type\Group
     */
    public function createGroup( GroupCreateStruct $group );

    /**
     * @param \eZ\Publish\SPI\Persistence\Content\Type\Group\UpdateStruct $group
     */
    public function updateGroup( GroupUpdateStruct $group );

    /**
     * @param mixed $groupId
     * @throws \eZ\Publish\API\Repository\Exceptions\BadStateException If type group contains types
     * @throws \eZ\Publish\API\Repository\Exceptions\NotFoundException If type group with id is not found
     */
    public function deleteGroup( $groupId );

    /**
     * @param mixed $groupId
     * @return \eZ\Publish\SPI\Persistence\Content\Type\Group
     * @throws \eZ\Publish\API\Repository\Exceptions\NotFoundException If type group with id is not found
     */
    public function loadGroup( $groupId );

    /**
     * Load Type Group by identifer
     *
     * Legacy note: Uses name for identifier.
     *
     * @param string $identifier
     * @return \eZ\Publish\SPI\Persistence\Content\Type\Group
     * @throws \eZ\Publish\API\Repository\Exceptions\NotFoundException If type group with id is not found
     */
    public function loadGroupByIdentifier( $identifier );

    /**
     * @return \eZ\Publish\SPI\Persistence\Content\Type\Group[]
     */
    public function loadAllGroups();

    /**
     * @param mixed $groupId
     * @param int $status One of Type::STATUS_DEFINED|Type::STATUS_DRAFT|Type::STATUS_MODIFIED
     * @return \eZ\Publish\SPI\Persistence\Content\Type[]
     */
    public function loadContentTypes( $groupId, $status = Type::STATUS_DEFINED );

    /**
     * Load a content type by id and status
     *
     * @param mixed $contentTypeId
     * @param int $status One of Type::STATUS_DEFINED|Type::STATUS_DRAFT|Type::STATUS_MODIFIED
     * @return \eZ\Publish\SPI\Persistence\Content\Type
     * @throws \eZ\Publish\API\Repository\Exceptions\NotFoundException If type with provided status is not found
     */
    public function load( $contentTypeId, $status = Type::STATUS_DEFINED );

    /**
     * Load a (defined) content type by identifier
     *
     * @param string $identifier
     * @return \eZ\Publish\SPI\Persistence\Content\Type
     * @throws \eZ\Publish\API\Repository\Exceptions\NotFoundException If defined type is not found
     */
    public function loadByIdentifier( $identifier );

    /**
     * Load a (defined) content type by remote id
     *
     * @param mixed $remoteId
     * @return \eZ\Publish\SPI\Persistence\Content\Type
     * @throws \eZ\Publish\API\Repository\Exceptions\NotFoundException If defined type is not found
     */
    public function loadByRemoteId( $remoteId );

    /**
     * @param \eZ\Publish\SPI\Persistence\Content\Type\CreateStruct $contentType
     *
     * @return \eZ\Publish\SPI\Persistence\Content\Type
     */
    public function create( CreateStruct $contentType );

    /**
     * @param mixed $contentTypeId
     * @param int $status One of Type::STATUS_DEFINED|Type::STATUS_DRAFT|Type::STATUS_MODIFIED
     * @param \eZ\Publish\SPI\Persistence\Content\Type\UpdateStruct $contentType
     */
    public function update( $contentTypeId, $status, UpdateStruct $contentType );

    /**
     * @param mixed $contentTypeId
     * @param int $status One of Type::STATUS_DEFINED|Type::STATUS_DRAFT|Type::STATUS_MODIFIED
     * @throws \eZ\Publish\API\Repository\Exceptions\BadStateException If type is defined and still has content
     * @throws \eZ\Publish\API\Repository\Exceptions\NotFoundException If type is not found
     */
    public function delete( $contentTypeId, $status );

    /**
     * Creates a draft of existing defined content type
     *
     * Updates modified date, sets $modifierId and status to Type::STATUS_DRAFT on the new returned draft.
     *
     * @param mixed $modifierId
     * @param mixed $contentTypeId
     * @return \eZ\Publish\SPI\Persistence\Content\Type
     * @throws \eZ\Publish\API\Repository\Exceptions\NotFoundException If type with defined status is not found
     */
    public function createDraft( $modifierId, $contentTypeId );

    /**
     * Copy a Type incl fields and group-relations from a given status to a new Type with status {@link Type::STATUS_DRAFT}
     *
     * New Content Type will have $userId as creator / modifier, created / modified should be updated, new remoteId created
     * and identifier should be appended with '_' + the new remoteId or another unique number.
     *
     * @param mixed $userId
     * @param mixed $contentTypeId
     * @param int $status One of Type::STATUS_DEFINED|Type::STATUS_DRAFT|Type::STATUS_MODIFIED
     * @return \eZ\Publish\SPI\Persistence\Content\Type
     * @throws \eZ\Publish\API\Repository\Exceptions\NotFoundException If user or type with provided status is not found
     */
    public function copy( $userId, $contentTypeId, $status );

    /**
     * Unlink a content type group from a content type
     *
     * @param mixed $groupId
     * @param mixed $contentTypeId
     * @param int $status One of Type::STATUS_DEFINED|Type::STATUS_DRAFT|Type::STATUS_MODIFIED
     * @throws \eZ\Publish\API\Repository\Exceptions\NotFoundException If group or type with provided status is not found
     * @throws \eZ\Publish\API\Repository\Exceptions\BadStateException If $groupId is last group on $contentTypeId or
     *                                                                 not a group assigned to type
     */
    public function unlink( $groupId, $contentTypeId, $status );

    /**
     * Link a content type group with a content type
     *
     * @param mixed $groupId
     * @param mixed $contentTypeId
     * @param int $status One of Type::STATUS_DEFINED|Type::STATUS_DRAFT|Type::STATUS_MODIFIED
     * @throws \eZ\Publish\API\Repository\Exceptions\NotFoundException If group or type with provided status is not found
     * @throws \eZ\Publish\API\Repository\Exceptions\BadStateException If type is already part of group
     */
    public function link( $groupId, $contentTypeId, $status );

    /**
     * Returns field definition for the given field definition id
     *
     * @throws \eZ\Publish\API\Repository\Exceptions\NotFoundException If field definition is not found
     *
     * @param mixed $id
     * @param int $status One of Type::STATUS_DEFINED|Type::STATUS_DRAFT|Type::STATUS_MODIFIED
     *
     * @return \eZ\Publish\SPI\Persistence\Content\Type\FieldDefinition
     */
    public function getFieldDefinition( $id, $status );

    /**
     * Adds a new field definition to an existing Type.
     *
     * This method creates a new version of the Type with the $fieldDefinition
     * added. It does not update existing content objects depending on the
     * field (default) values.
     *
     * @param mixed $contentTypeId
     * @param int $status One of Type::STATUS_DEFINED|Type::STATUS_DRAFT|Type::STATUS_MODIFIED
     * @param \eZ\Publish\SPI\Persistence\Content\Type\FieldDefinition $fieldDefinition
     * @return \eZ\Publish\SPI\Persistence\Content\Type\FieldDefinition
     * @throws \eZ\Publish\API\Repository\Exceptions\NotFoundException If type is not found
     * @todo Add FieldDefintion\CreateStruct?
     */
    public function addFieldDefinition( $contentTypeId, $status, FieldDefinition $fieldDefinition );

    /**
     * Removes a field definition from an existing Type.
     *
     * This method creates a new version of the Type with the field definition
     * referred to by $fieldDefinitionId removed. It does not update existing
     * content objects depending on the field (default) values.
     *
     * @param mixed $contentTypeId
     * @param int $status One of Type::STATUS_DEFINED|Type::STATUS_DRAFT|Type::STATUS_MODIFIED
     * @param mixed $fieldDefinitionId
     * @return void
     * @throws \eZ\Publish\API\Repository\Exceptions\NotFoundException If field is not found
     */
    public function removeFieldDefinition( $contentTypeId, $status, $fieldDefinitionId );

    /**
     * This method updates the given $fieldDefinition on a Type.
     *
     * This method creates a new version of the Type with the updated
     * $fieldDefinition. It does not update existing content objects depending
     * on the
     * field (default) values.
     *
     * @param mixed $contentTypeId
     * @param int $status One of Type::STATUS_DEFINED|Type::STATUS_DRAFT|Type::STATUS_MODIFIED
     * @param \eZ\Publish\SPI\Persistence\Content\Type\FieldDefinition $fieldDefinition
     * @return void
     * @throws \eZ\Publish\API\Repository\Exceptions\NotFoundException If field is not found
     * @todo Add FieldDefintion\UpdateStruct?
     */
    public function updateFieldDefinition( $contentTypeId, $status, FieldDefinition $fieldDefinition );

    /**
     * Update content objects
     *
     * Updates content objects, depending on the changed field definitions.
     *
     * A content type has a state which tells if its content objects yet have
     * been adapted.
     *
     * Flags the content type as updated.
     *
     * @param mixed $contentTypeId
     * @return void
     * @throws \eZ\Publish\API\Repository\Exceptions\NotFoundException If type with $contentTypeId and Type::STATUS_DRAFT is not found
     */
    public function publish( $contentTypeId );
}
