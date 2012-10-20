<?php
/**
 * File containing a wrapper for the DB handler
 *
 * @copyright Copyright (C) 1999-2012 eZ Systems AS. All rights reserved.
 * @license http://ez.no/licenses/gnu_gpl GNU General Public License v2.0
 * @version 2012.9
 */

namespace eZ\Publish\Core\Persistence\Legacy\EzcDbHandler;
use eZ\Publish\Core\Persistence\Legacy\EzcDbHandler;

/**
 * Wrapper class for the zeta components database handler, providing some
 * additional utility functions.
 *
 * Functions as a full proxy to the zeta components database class.
 */
class Pgsql extends EzcDbHandler
{
    /**
     * Get auto increment value
     *
     * Returns the value used for autoincrement tables. Usually this will just
     * be null. In case for sequence based RDBMS this method can return a
     * proper value for the given column.
     *
     * @param string $table
     * @param string $column
     * @return mixed
     */
    public function getAutoIncrementValue( $table, $column )
    {
        return "nextval('"  . $this->getSequenceName( $table, $column ) . "')";
    }

    /**
     * Return the name of the affected sequence
     *
     * @param string $table
     * @param string $column
     * @return string
     */
    public function getSequenceName( $table, $column )
    {
        return $table . '_s';
    }
}

