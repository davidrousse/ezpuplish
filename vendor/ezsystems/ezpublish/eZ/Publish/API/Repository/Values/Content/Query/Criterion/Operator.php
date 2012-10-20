<?php
/**
 * File containing the eZ\Publish\API\Repository\Values\Content\Query\Criterion\Operator class.
 *
 * @copyright Copyright (C) 1999-2012 eZ Systems AS. All rights reserved.
 * @license http://ez.no/licenses/gnu_gpl GNU General Public License v2.0
 * @version 2012.9
 *
 * @package eZ\Publish\API\Repository\Values\Content\Query
 */

namespace eZ\Publish\API\Repository\Values\Content\Query\Criterion;

/**
 * Operators struct
 *
 * Note that the method is abstract as there is no point in instantiating it
 * @package eZ\Publish\API\Repository\Values\Content\Query
 */
abstract class Operator
{
    const EQ = "=";
    const GT = ">";
    const GTE = ">=";
    const LT = "<";
    const LTE = "<=";
    const IN = "in";
    const BETWEEN = "between";
    const LIKE = "like";
}
