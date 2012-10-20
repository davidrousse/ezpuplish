<?php
/**
 * File containing the eZ\Publish\Core\Base\Exceptions\ContentFieldValidationException class.
 *
 * @copyright Copyright (C) 1999-2012 eZ Systems AS. All rights reserved.
 * @license http://ez.no/licenses/gnu_gpl GNU General Public License v2.0
 * @version 2012.9
 */

namespace eZ\Publish\Core\Base\Exceptions;
use eZ\Publish\API\Repository\Exceptions\ContentFieldValidationException as APIContentFieldValidationException;

/**
 * This Exception is thrown on create or update content one or more given fields are not valid
 */
class ContentFieldValidationException extends APIContentFieldValidationException
{
    /**
     * Contains an array of field ValidationError objects indexed with FieldDefinition id and language code
     *
     * Example:
     * <code>
     *  $fieldErrors = $exception->getFieldErrors();
     *  $fieldErrors["43"]["eng-GB"]->getTranslatableMessage();
     * </code>
     *
     * @var \eZ\Publish\Core\FieldType\ValidationError[]
     */
    protected $errors;

    /**
     * Generates: Content fields did not validate
     *
     * Also sets the given $fieldErrors to the internal property, retrievable by getFieldErrors()
     *
     * @param \eZ\Publish\Core\FieldType\ValidationError[] $errors
     */
    public function __construct( array $errors )
    {
        $this->errors = $errors;
        parent::__construct( "Content fields did not validate" );
    }

    /**
     * Returns an array of field validation error messages
     *
     * @return \eZ\Publish\Core\FieldType\ValidationError[]
     */
    public function getFieldErrors()
    {
        return $this->errors;
    }
}
