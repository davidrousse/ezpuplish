<?php
/**
 * File containing the FieldTypeProcessorRegistry class.
 *
 * @copyright Copyright (C) 1999-2012 eZ Systems AS. All rights reserved.
 * @license http://ez.no/licenses/gnu_gpl GNU General Public License v2.0
 * @version 2012.9
 */

namespace eZ\Publish\Core\REST\Common;

/**
 * FieldTypeProcessorRegistry
 */
class FieldTypeProcessorRegistry
{
    /**
     * Registered processors
     *
     * @var \eZ\Publish\Core\REST\Common\FieldTypeProcessor[]
     */
    private $processors = array();

    /**
     * @param \eZ\Publish\Core\REST\Common\FieldTypeProcessor[] $processors
     */
    public function __construct( array $processors = array() )
    {
        foreach ( $processors as $fieldTypeIdentifier => $processor )
        {
            $this->registerProcessor( $fieldTypeIdentifier, $processor );
        }
    }

    /**
     * Registers $processor for $fieldTypeIdentifier
     *
     * @param string $fieldTypeIdentifier
     * @param \eZ\Publish\Core\REST\Common\FieldTypeProcessor $processor
     */
    public function registerProcessor( $fieldTypeIdentifier, FieldTypeProcessor $processor )
    {
        $this->processors[$fieldTypeIdentifier] = $processor;
    }

    /**
     * Returns if a processor is registered for $fieldTypeIdentifier
     *
     * @param string $fieldTypeIdentifier
     * @return bool
     */
    public function hasProcessor( $fieldTypeIdentifier )
    {
        return ( isset( $this->processors[$fieldTypeIdentifier] ) );
    }

    /**
     * Returns the processor for $fieldTypeIdentifier
     *
     * @param string $fieldTypeIdentifier
     * @return \eZ\Publish\Core\REST\Common\FieldTypeProcessor
     * @throws \RuntimeException if not processor is registered for $fieldTypeIdentifier
     */
    public function getProcessor( $fieldTypeIdentifier )
    {
        if ( !$this->hasProcessor( $fieldTypeIdentifier ) )
        {
            throw new \RuntimeException(
                "No field type processor for '{$fieldTypeIdentifier}' found."
            );
        }
        return $this->processors[$fieldTypeIdentifier];
    }
}
