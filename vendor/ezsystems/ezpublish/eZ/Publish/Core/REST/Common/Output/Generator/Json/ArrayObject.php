<?php
/**
 * File containing the Json ArrayObject class
 *
 * @copyright Copyright (C) 1999-2012 eZ Systems AS. All rights reserved.
 * @license http://ez.no/licenses/gnu_gpl GNU General Public License v2.0
 * @version 2012.9
 */

namespace eZ\Publish\Core\REST\Common\Output\Generator\Json;

/**
 * Json array object
 *
 * Special JSON array object implementation, which allows to access the
 * parent object it is assigned to again.
 */
class ArrayObject extends \ArrayObject
{
    /**
     * Reference to the parent node
     *
     * @var \eZ\Publish\Core\REST\Common\Output\Generator\Json\Object
     */
    protected $_ref_parent;

    /**
     * Construct from optional parent node
     *
     * @param mixed $_ref_parent
     */
    public function __construct( $_ref_parent )
    {
        $this->_ref_parent = $_ref_parent;
    }

    /**
     * Get Parent of current node
     *
     * @return \eZ\Publish\Core\REST\Common\Output\Generator\Json\Object
     */
    public function getParent()
    {
        return $this->_ref_parent;
    }
}
