<?php
/**
 * File containing the AuthorCollection class
 *
 * @copyright Copyright (C) 1999-2012 eZ Systems AS. All rights reserved.
 * @license http://ez.no/licenses/gnu_gpl GNU General Public License v2.0
 * @version 2012.9
 */

namespace eZ\Publish\Core\FieldType\Author;
use eZ\Publish\Core\FieldType\Author\Author,
    eZ\Publish\Core\Base\Exceptions\InvalidArgumentType,
    ArrayObject;

/**
 * Author collection.
 * This collection can only hold {@link \eZ\Publish\Core\FieldType\Author\Author} objects
 */
class AuthorCollection extends ArrayObject
{
    /**
     * @param \eZ\Publish\Core\FieldType\Author\Author[] $elements
     */
    public function __construct( array $elements = array() )
    {
        // Call parent constructor without $elements because all author elements
        // must be given an id by $this->offsetSet()
        parent::__construct();
        foreach ( $elements as $i => $author )
        {
            $this->offsetSet( $i, $author );
        }
    }

    /**
     * Adds a new author to the collection
     *
     * @throws InvalidArgumentType When $value is not of type Author
     * @param int $offset
     * @param \eZ\Publish\Core\FieldType\Author\Author $value
     */
    public function offsetSet( $offset, $value )
    {
        if ( !$value instanceof Author )
        {
            throw new InvalidArgumentType(
                '$value',
                'eZ\\Publish\\Core\\FieldType\\Author\\Author',
                $value
            );
        }

        $aAuthors = $this->getArrayCopy();
        parent::offsetSet( $offset, $value );
        if ( !isset( $value->id ) || $value->id == -1 )
        {
            if ( !empty( $aAuthors ) )
            {
                $value->id = end( $aAuthors )->id + 1;
            }
            else
            {
                $value->id = 1;
            }
        }
    }

    /**
     * Removes authors from current collection with a list of Ids
     *
     * @param array $authorIds Author's Ids to remove from current collection
     */
    public function removeAuthorsById( array $authorIds )
    {
        $aAuthors = $this->getArrayCopy();
        foreach ( $aAuthors as $i => $author )
        {
            if ( in_array( $author->id, $authorIds ) )
            {
                unset( $aAuthors[$i] );
            }
        }

        $this->exchangeArray( $aAuthors );
    }
}
