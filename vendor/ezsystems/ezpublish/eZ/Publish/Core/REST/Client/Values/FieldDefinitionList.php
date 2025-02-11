<?php
/**
 * File containing the FieldDefinitionList class
 *
 * @copyright Copyright (C) 1999-2012 eZ Systems AS. All rights reserved.
 * @license http://ez.no/licenses/gnu_gpl GNU General Public License v2.0
 * @version 2012.9
 */

namespace eZ\Publish\Core\REST\Client\Values;

use eZ\Publish\Core\REST\Client\ContentTypeService;

/**
 * FieldDefinitonList
 */
class FieldDefinitionList
{
    /**
     * References to contained field references
     *
     * @var string[]
     */
    protected $fieldDefinitionReferences;

    /**
     * Content type service
     *
     * @var ContentTypeService
     */
    protected $contentTypeService;

    /**
     * @param eZ\Publish\Core\REST\ContentTypeService $contentTypeService
     * @param string[] $fieldDefinitionReferences
     */
    public function __construct( ContentTypeService $contentTypeService, array $fieldDefinitionReferences )
    {
        $this->contentTypeService = $contentTypeService;
        $this->fieldDefinitionReferences = $fieldDefinitionReferences;
    }

    /**
     * Fetches and returnd the field definitions contained in the list
     *
     * @return FieldDefinition[]
     */
    public function getFieldDefinitions()
    {
        $fieldDefinitions = array();
        foreach ( $this->fieldDefinitionReferences as $reference )
        {
            $fieldDefinitions[] = $this->contentTypeService->loadFieldDefinition( $reference );
        }
        return $fieldDefinitions;
    }
}
