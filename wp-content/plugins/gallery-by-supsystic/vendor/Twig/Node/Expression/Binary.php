<?php

/*
 * This file is part of Twig.
 *
 * (c) Fabien Potencier
 * (c) Armin Ronacher
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
abstract class Twig_SupTwgSgg_Node_Expression_Binary extends Twig_SupTwgSgg_Node_Expression
{
    public function __construct(Twig_SupTwgSgg_NodeInterface $left, Twig_SupTwgSgg_NodeInterface $right, $lineno)
    {
        parent::__construct(array('left' => $left, 'right' => $right), array(), $lineno);
    }

    public function compile(Twig_SupTwgSgg_Compiler $compiler)
    {
        $compiler
            ->raw('(')
            ->subcompile($this->getNode('left'))
            ->raw(' ')
        ;
        $this->operator($compiler);
        $compiler
            ->raw(' ')
            ->subcompile($this->getNode('right'))
            ->raw(')')
        ;
    }

    abstract public function operator(Twig_SupTwgSgg_Compiler $compiler);
}
