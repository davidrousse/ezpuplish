<?php
/**
 * File containing the LegacyIncludeNode class.
 *
 * @copyright Copyright (C) 1999-2012 eZ Systems AS. All rights reserved.
 * @license http://ez.no/licenses/gnu_gpl GNU General Public License v2.0
 * @version 2012.9
 */

namespace eZ\Publish\Core\MVC\Legacy\Templating\Twig\Node;
use \Twig_Node,
    \Twig_Node_Expression,
    \Twig_Compiler;

/**
 * Represents an ez_legacy_include node
 */
class LegacyIncludeNode extends Twig_Node
{
    public function __construct( Twig_Node_Expression $tplPath, Twig_Node_Expression $params, $lineno, $tag = null )
    {
        return parent::__construct(
            array(
                 'tplPath'      => $tplPath,
                 'params'       => $params
            ),
            array(),
            $lineno,
            $tag
        );
    }

    public function compile( Twig_Compiler $compiler )
    {
        $compiler
            ->addDebugInfo( $this )
            ->write( "echo \$this->env->getExtension( 'ezpublish.legacy' )->renderTemplate( " )
            ->subcompile( $this->getNode( 'tplPath' ) )
            ->raw( ', ' )
            ->subcompile( $this->getNode( 'params' ) )
            ->raw( " );\n" )
        ;
    }
}
