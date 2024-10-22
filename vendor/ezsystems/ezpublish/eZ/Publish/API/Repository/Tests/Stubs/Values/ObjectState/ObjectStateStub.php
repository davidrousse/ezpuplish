<?php
/**
 * File containing the ObjectState class
 *
 * @copyright Copyright (C) 1999-2012 eZ Systems AS. All rights reserved.
 * @license http://ez.no/licenses/gnu_gpl GNU General Public License v2.0
 * @version 2012.9
 */


namespace eZ\Publish\API\Repository\Tests\Stubs\Values\ObjectState;
use eZ\Publish\API\Repository\Values\ObjectState\ObjectState;

/**
 * This class represents a object state value
 *
 * @property-read mixed $id the id of the content type group
 * @property-read string $identifier the identifier of the content type group
 * @property-read int $priority the priority in the group ordering
 * @property-read string $defaultLanguageCode the default language of the object state group names and description used for fallback.
 * @property-read string[] $languageCodes the available languages
 */
class ObjectStateStub extends ObjectState
{
    /**
     * Names
     *
     * @var string[]
     */
    protected $names = array();

    /**
     * Descriptions
     *
     * @var string[]
     */
    protected $descriptions = array();

    /**
     * The state group this state belongs to
     *
     * @var \eZ\Publish\API\Repository\Values\ObjectState\ObjectStateGroup
     */
    protected $stateGroup;

    /**
     *
     * This method returns the human readable name in all provided languages
     * of the content type
     *
     * The structure of the return value is:
     * <code>
     * array( 'eng' => '<name_eng>', 'de' => '<name_de>' );
     * </code>
     *
     * @return string[]
     */
    public function getNames()
    {
        return $this->names;
    }

    /**
     * this method returns the name of the content type in the given language
     *
     * @param string $languageCode
     *
     * @return string the name for the given language or null if none exists.
     */
    public function getName( $languageCode )
    {
        return $this->names[$languageCode];
    }

    /**
     * This method returns the human readable description of the content type
     *
     * The structure of this field is:
     * <code>
     * array( 'eng' => '<description_eng>', 'de' => '<description_de>' );
     * </code>
     *
     * @return string[]
     */
    public function getDescriptions()
    {
        return $this->descriptions;
    }

    /**
     * this method returns the name of the content type in the given language
     *
     * @param string $languageCode
     *
     * @return string the description for the given language or null if none existis.
     */
    public function getDescription( $languageCode )
    {
        return $this->descriptions[$languageCode];
    }

    /**
     * The object state group this object state belongs to
     *
     * @return eZ\Publish\API\Repository\Values\Content\ObjectStateGroup
     */
    public function getObjectStateGroup()
    {
        return $this->stateGroup;
    }

    /**
     * Sets the priority.
     *
     * ONLY FOR INTERNAL USE IN THE INTEGRATION TEST SUITE.
     *
     * @param int $priority
     * @return void
     */
    public function _setPriority( $priority )
    {
        $this->priority = $priority;
    }
}
