<?php
/**
 * File containing the Service class
 *
 * @copyright Copyright (C) 1999-2012 eZ Systems AS. All rights reserved.
 * @license http://ez.no/licenses/gnu_gpl GNU General Public License v2.0
 * @version 2012.9
 */

namespace eZ\Publish\Core\FieldType\Page;
use eZ\Publish\Core\FieldType\Page\Parts\Page;

class Service
{
    /**
     * Zone definition set in YAML config
     *
     * @var array
     */
    protected $zoneDefinition;

    /**
     * Block definition set in YAML config
     *
     * @var array
     */
    protected $blockDefinition;

    /**
     * Constructor
     *
     * @param $zoneDefinition
     * @param $blockDefinition
     */
    public function __construct( array $zoneDefinition = array(), array $blockDefinition = array() )
    {
        $this->zoneDefinition = $zoneDefinition;
        $this->blockDefinition = $blockDefinition;
    }

    /**
     * Returns zone definition as an array
     *
     * @return array
     */
    public function getZoneDefinition()
    {
        return $this->zoneDefinition;
    }

    /**
     * Returns block definition as an array
     *
     * @return array
     */
    public function getBlockDefinition()
    {
        return $this->blockDefinition;
    }

    /**
     * Returns list of available zone definitions
     *
     * @return array
     */
    public function getAvailableZoneTypes()
    {
        return array_keys( $this->zoneDefinition );
    }
}
