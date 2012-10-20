<?php
/**
 * File containing the Event base class
 *
 * @copyright Copyright (C) 1999-2012 eZ Systems AS. All rights reserved.
 * @license http://ez.no/licenses/gnu_gpl GNU General Public License v2.0
 * @version 2012.9
 */

namespace eZ\Publish\SPI\FieldType;

/**
 * Abstract base class for FieldType events
 *
 * An instance of a derived class is given to {@link
 * eZ\Publish\SPI\FieldType\FieldType::handleEvent()}. The derived class name
 * identified the occurred event. The properties of the class give the needed
 * event context.
 *
 * @TODO Add VersionInfo parameter
 */
abstract class Event
{
    /**
     * Definition of $field
     *
     * @var \eZ\Publish\API\Repository\Values\ContentType\FieldDefinition
     */
    public $fieldDefinition;

    /**
     * Field the event occurred on
     *
     * @var \eZ\Publish\API\Repository\Values\Content\Field
     */
    public $field;

    /**
     * VersionInfo of the Content the affected field belongs to
     *
     * @var \eZ\Publish\API\Repository\Values\Content\VersionInfo
     */
    public $versionInfo;
}
