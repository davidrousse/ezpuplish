<?php
/**
 * File containing the eZ\Publish\API\Repository\Exceptions\ContentTypeFieldDefinitionValidationException class.
 *
 * @copyright Copyright (C) 1999-2012 eZ Systems AS. All rights reserved.
 * @license http://ez.no/licenses/gnu_gpl GNU General Public License v2.0
 * @version 2012.9
 */

namespace eZ\Publish\API\Repository\Exceptions;

/**
 * This Exception is thrown on create or update content type one or more given field definitions are not valid
 */
abstract class ContentTypeFieldDefinitionValidationException extends ForbiddenException
{
    /**
     * Returns an array of field definition validation error messages
     *
     * @return array
     */
    abstract public function getFieldErrors();
}
