<?php
/**
 * File containing the BinaryBase Type class
 *
 * @copyright Copyright (C) 1999-2012 eZ Systems AS. All rights reserved.
 * @license http://ez.no/licenses/gnu_gpl GNU General Public License v2.0
 * @version 2012.9
 */

namespace eZ\Publish\Core\FieldType\BinaryBase;
use eZ\Publish\Core\FieldType\FieldType,
    eZ\Publish\Core\FieldType\FileService,
    eZ\Publish\Core\Base\Exceptions\InvalidArgumentType,
    eZ\Publish\Core\FieldType\ValidationError,
    eZ\Publish\API\Repository\Values\ContentType\FieldDefinition,
    eZ\Publish\SPI\Persistence\Content\FieldValue;

/**
 * Base FileType class for Binary field types (i.e. BinaryBase & Media)
 */
abstract class Type extends FieldType
{
    /**
     * @see eZ\Publish\Core\FieldType::$validatorConfigurationSchema
     */
    protected $validatorConfigurationSchema = array(
        "FileSizeValidator" => array(
            'maxFileSize' => array(
                'type' => 'int',
                'default' => false,
            )
        )
    );

    /**
     * File service for storing binary files
     *
     * @var FileService
     */
    protected $fileService;

    /**
     * MIME type detector
     *
     * @var MimeTypeDetector
     */
    protected $mimeTypeDetector;

    /**
     * Creates a new Image FieldType
     *
     * @param FileService $fileService
     * @param MimeTypeDetector $mimeTypeDetector
     */
    public function __construct( FileService $fileService, MimeTypeDetector $mimeTypeDetector )
    {
        $this->fileService = $fileService;
        $this->mimeTypeDetector = $mimeTypeDetector;
    }

    /**
     * Creates a specific value of the derived class from $inputValue
     *
     * @param array $inputValue
     * @return Value
     */
    abstract protected function createValue( array $inputValue );

    /**
     * Returns the name of the given field value.
     *
     * It will be used to generate content name and url alias if current field is designated
     * to be used in the content name/urlAlias pattern.
     *
     * @param mixed $value
     *
     * @return mixed
     */
    public function getName( $value )
    {
        $value = $this->acceptValue( $value );

        return $value->fileName;
    }

    /**
     * Returns the fallback default value of field type when no such default
     * value is provided in the field definition in content types.
     *
     * @return null
     */
    public function getEmptyValue()
    {
        return null;
    }

    /**
     * Potentially builds and checks the type and structure of the $inputValue.
     *
     * This method first inspects $inputValue, if it needs to convert it, e.g.
     * into a dedicated value object. An example would be, that the field type
     * uses values of MyCustomFieldTypeValue, but can also accept strings as
     * the input. In that case, $inputValue first needs to be converted into a
     * MyCustomFieldTypeClass instance.
     *
     * After that, the (possibly converted) value is checked for structural
     * validity. Note that this does not include validation after the rules
     * from validators, but only plausibility checks for the general data
     * format.
     *
     * @throws \eZ\Publish\API\Repository\Exceptions\InvalidArgumentException if the parameter is not of the supported value sub type
     * @throws \eZ\Publish\API\Repository\Exceptions\InvalidArgumentException if the value does not match the expected structure
     *
     * @param mixed $inputValue
     *
     * @return mixed The potentially converted and structurally plausible value.
     */
    public function acceptValue( $inputValue )
    {
        // null is the empty value for this type
        if ( $inputValue === null )
        {
            return $this->getEmptyValue();
        }

        // construction only from path
        if ( is_string( $inputValue ) )
        {
            $inputValue = array( 'path' => $inputValue );
        }

        // default construction from array
        if ( is_array( $inputValue ) )
        {
            $inputValue = $this->createValue( $inputValue );
        }

        if ( !$inputValue instanceof Value )
        {
            throw new InvalidArgumentType(
                '$inputValue',
                'eZ\\Publish\\Core\\FieldType\\BinaryBase\\Value',
                $inputValue
            );
        }

        // Required paramater $path
        if ( !isset( $inputValue->path ) || !$this->fileExists( $inputValue->path ) )
        {
            throw new InvalidArgumentType(
                '$inputValue->path',
                'Existing fileName',
                $inputValue->path
            );
        }

        $this->completeValue( $inputValue );

        // Required parameter $fileName
        if ( !isset( $inputValue->fileName ) || !is_string( $inputValue->fileName ) )
        {
            throw new InvalidArgumentType(
                '$inputValue->fileName',
                'string',
                $inputValue->fileName
            );
        }

        // Required parameter $fileSize
        if ( !isset( $inputValue->fileSize ) || !is_int( $inputValue->fileSize ) )
        {
            throw new InvalidArgumentType(
                '$inputValue->fileSize',
                'int',
                $inputValue->fileSize
            );
        }

        return $inputValue;
    }

    /**
     * Attempts to complete the data in $value
     *
     * @param Value $value
     * @return void
     */
    protected function completeValue( $value )
    {
        if ( !isset( $value->fileSize ) )
        {
            $value->fileSize = filesize( $value->path );
        }

        if ( !isset( $value->fileName ) )
        {
            $value->fileName = basename( $value->path );
        }

        if ( !isset( $value->mimeType ) )
        {
            $value->mimeType = $this->mimeTypeDetector->getMimeType( $value->path );
        }
    }

    /**
     * BinaryBase does not support sorting
     *
     * @return bool
     */
    protected function getSortInfo( $value )
    {
        return false;
    }

    /**
     * Converts an $hash to the Value defined by the field type
     *
     * @param mixed $hash
     *
     * @return \eZ\Publish\Core\FieldType\BinaryBase\Value $value
     */
    public function fromHash( $hash )
    {
        if( $hash === null )
        {
            // empty value
            return null;
        }

        return $this->createValue( $hash );
    }

    /**
     * Converts a $Value to a hash
     *
     * @param \eZ\Publish\Core\FieldType\BinaryBase\Value $value
     *
     * @return mixed
     */
    public function toHash( $value )
    {
        if ( $value === null )
        {
            return null;
        }

        return array(
            'fileName' => $value->fileName,
            'fileSize' => $value->fileSize,
            'path' => $value->path,
            'mimeType' => $value->mimeType,
        );
    }

    /**
     * Converts a $value to a persistence value.
     *
     * In this method the field type puts the data which is stored in the field of content in the repository
     * into the property FieldValue::data. The format of $data is a primitive, an array (map) or an object, which
     * is then canonically converted to e.g. json/xml structures by future storage engines without
     * further conversions. For mapping the $data to the legacy database an appropriate Converter
     * (implementing eZ\Publish\Core\Persistence\Legacy\FieldValue\Converter) has implemented for the field
     * type. Note: $data should only hold data which is actually stored in the field. It must not
     * hold data which is stored externally.
     *
     * The $externalData property in the FieldValue is used for storing data externally by the
     * FieldStorage interface method storeFieldData.
     *
     * The FieldValuer::sortKey is build by the field type for using by sort operations.
     *
     * @see \eZ\Publish\SPI\Persistence\Content\FieldValue
     *
     * @param mixed $value The value of the field type
     *
     * @return \eZ\Publish\SPI\Persistence\Content\FieldValue the value processed by the storage engine
     */
    public function toPersistenceValue( $value )
    {
        // Store original data as external (to indicate they need to be stored)
        return new FieldValue(
            array(
                "data" => null,
                "externalData" => $this->toHash( $value ),
                "sortKey" => $this->getSortInfo( $value ),
            )
        );
    }

    /**
     * Converts a persistence $fieldValue to a Value
     *
     * This method builds a field type value from the $data and $externalData properties.
     *
     * @param \eZ\Publish\SPI\Persistence\Content\FieldValue $fieldValue
     *
     * @return mixed
     */
    public function fromPersistenceValue( FieldValue $fieldValue )
    {
        if ( $fieldValue->externalData === null )
        {
            // empty value
            return null;
        }

        // Restored data comes in $data, since it has already been processed
        // there might be more data in the persistence value than needed here
        $result = $this->fromHash(
            array(
                'path' => ( isset( $fieldValue->externalData['path'] )
                    ? $fieldValue->externalData['path']
                    : null ),
                'fileName' => ( isset( $fieldValue->externalData['fileName'] )
                    ? $fieldValue->externalData['fileName']
                    : null ),
                'fileSize' => ( isset( $fieldValue->externalData['fileSize'] )
                    ? $fieldValue->externalData['fileSize']
                    : null ),
                'mimeType' => ( isset( $fieldValue->externalData['mimeType'] )
                    ? $fieldValue->externalData['mimeType']
                    : null ),
            )
        );
        return $result;
    }

    /**
     * Returns if the given $path exists on the local disc or in the file
     * storage
     *
     * @param string $path
     * @return bool
     */
    protected function fileExists( $path )
    {
        return (
            ( substr( $path, 0, 1 ) === '/' && file_exists( $path ) )
            || $this->fileService->exists( $this->fileService->getStorageIdentifier( $path ) )
        );
    }

    /**
     * Validates a field based on the validators in the field definition
     *
     * @throws \eZ\Publish\API\Repository\Exceptions\InvalidArgumentException
     *
     * @param \eZ\Publish\API\Repository\Values\ContentType\FieldDefinition $fieldDefinition The field definition of the field
     * @param \eZ\Publish\Core\FieldType\Value $fieldValue The field for which an action is performed
     *
     * @return \eZ\Publish\SPI\FieldType\ValidationError[]
     */
    public function validate( FieldDefinition $fieldDefinition, $fieldValue )
    {
        $errors = array();
        foreach ( (array)$fieldDefinition->getValidatorConfiguration() as $validatorIdentifier => $parameters )
        {
            switch ( $validatorIdentifier )
            {
                case 'FileSizeValidator':
                    if ( !isset( $parameters['maxFileSize'] ) || $parameters['maxFileSize'] == false )
                    {
                        // No file size limit
                        break;
                    }
                    // Database stores maxFileSize in MB
                    if ( $fieldValue !== null && ( $parameters['maxFileSize'] * 1024 * 1024 ) < $fieldValue->fileSize )
                    {
                        $errors[] = new ValidationError(
                            "The file size cannot exceed %size% byte.",
                            "The file size cannot exceed %size% bytes.",
                            array(
                                "size" => $parameters['maxFileSize'],
                            )
                        );
                    }
                    break;
            }
        }
        return $errors;
    }

    /**
     * Validates the validatorConfiguration of a FieldDefinitionCreateStruct or FieldDefinitionUpdateStruct
     *
     * @param mixed $validatorConfiguration
     *
     * @return \eZ\Publish\SPI\FieldType\ValidationError[]
     */
    public function validateValidatorConfiguration( $validatorConfiguration )
    {
        $validationErrors = array();

        foreach ( $validatorConfiguration as $validatorIdentifier => $parameters )
        {
            switch ( $validatorIdentifier )
            {
                case 'FileSizeValidator':
                    if ( !isset( $parameters['maxFileSize'] ) )
                    {
                        $validationErrors[] = new ValidationError(
                            "Validator %validator% expects parameter %parameter% to be set.",
                            null,
                            array(
                                "validator" => $validatorIdentifier,
                                "parameter" => 'maxFileSize',
                            )
                        );
                        break;
                    }
                    if ( !is_int( $parameters['maxFileSize'] ) && !is_bool( $parameters['maxFileSize'] ) )
                    {
                        $validationErrors[] = new ValidationError(
                            "Validator %validator% expects parameter %parameter% to be of %type%.",
                            null,
                            array(
                                "validator" => $validatorIdentifier,
                                "parameter" => 'maxFileSize',
                                "type" => 'integer',
                            )
                        );
                    }
                    break;
                default:
                    $validationErrors[] = new ValidationError(
                        "Validator '%validator%' is unknown",
                        null,
                        array(
                            "validator" => $validatorIdentifier
                        )
                    );
            }
        }

        return $validationErrors;
    }

    /**
     * Returns whether the field type is searchable
     *
     * @return bool
     */
    public function isSearchable()
    {
        return true;
    }
}
