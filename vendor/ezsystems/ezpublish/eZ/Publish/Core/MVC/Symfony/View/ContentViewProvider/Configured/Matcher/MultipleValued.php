<?php
/**
 * File containing the MultipleValued matcher class.
 *
 * @copyright Copyright (C) 1999-2012 eZ Systems AS. All rights reserved.
 * @license http://ez.no/licenses/gnu_gpl GNU General Public License v2.0
 * @version 2012.9
 */

namespace eZ\Publish\Core\MVC\Symfony\View\ContentViewProvider\Configured\Matcher;

use eZ\Publish\Core\MVC\RepositoryAware,
    eZ\Publish\Core\MVC\Symfony\View\ContentViewProvider\Configured\Matcher;

/**
 * Abstract class for basic matchers to be used with View\Provider\Content\Configured, accepting multiple values to match against.
 */
abstract class MultipleValued extends RepositoryAware implements Matcher
{
    /**
     * @var array Values to test against with isset(). Key is the actual value.
     */
    protected $values;

    /**
     * Registers the matching configuration for the matcher.
     * $matchingConfig can have single (string|int...) or multiple values (array)
     *
     * @param mixed $matchingConfig
     * @return void
     * @throws \InvalidArgumentException Should be thrown if $matchingConfig is not valid.
     */
    public function setMatchingConfig( $matchingConfig )
    {
        $matchingConfig = !is_array( $matchingConfig ) ? array( $matchingConfig ) : $matchingConfig;
        $this->values = array_fill_keys( $matchingConfig, true );
    }

    /**
     * Returns matcher's values
     *
     * @return array
     */
    public function getValues()
    {
        return array_keys( $this->values );
    }

    /**
     * @return \eZ\Publish\API\Repository\Repository
     */
    public function getRepository()
    {
        return $this->repository;
    }
}
