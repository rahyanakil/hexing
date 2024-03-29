<?php

/*
 * This file is part of Twig.
 *
 * (c) Fabien Potencier
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

/**
 * Defines a variable.
 *
 * <pre>
 *  {% set foo = 'foo' %}
 *
 *  {% set foo = [1, 2] %}
 *
 *  {% set foo = {'foo': 'bar'} %}
 *
 *  {% set foo = 'foo' ~ 'bar' %}
 *
 *  {% set foo, bar = 'foo', 'bar' %}
 *
 *  {% set foo %}Some content{% endset %}
 * </pre>
 *
 * @final
 */
class Twig_SupTwgSgg_TokenParser_Set extends Twig_SupTwgSgg_TokenParser
{
    public function parse(Twig_SupTwgSgg_Token $token)
    {
        $lineno = $token->getLine();
        $stream = $this->parser->getStream();
        $names = $this->parser->getExpressionParser()->parseAssignmentExpression();

        $capture = false;
        if ($stream->nextIf(Twig_SupTwgSgg_Token::OPERATOR_TYPE, '=')) {
            $values = $this->parser->getExpressionParser()->parseMultitargetExpression();

            $stream->expect(Twig_SupTwgSgg_Token::BLOCK_END_TYPE);

            if (count($names) !== count($values)) {
                throw new Twig_SupTwgSgg_Error_Syntax('When using set, you must have the same number of variables and assignments.', $stream->getCurrent()->getLine(), $stream->getSourceContext());
            }
        } else {
            $capture = true;

            if (count($names) > 1) {
                throw new Twig_SupTwgSgg_Error_Syntax('When using set with a block, you cannot have a multi-target.', $stream->getCurrent()->getLine(), $stream->getSourceContext());
            }

            $stream->expect(Twig_SupTwgSgg_Token::BLOCK_END_TYPE);

            $values = $this->parser->subparse(array($this, 'decideBlockEnd'), true);
            $stream->expect(Twig_SupTwgSgg_Token::BLOCK_END_TYPE);
        }

        return new Twig_SupTwgSgg_Node_Set($capture, $names, $values, $lineno, $this->getTag());
    }

    public function decideBlockEnd(Twig_SupTwgSgg_Token $token)
    {
        return $token->test('endset');
    }

    public function getTag()
    {
        return 'set';
    }
}
