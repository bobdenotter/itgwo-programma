<?php

/* dbcheck/_macros.twig */
class __TwigTemplate_69b5fa20162b77c9fabc967b9d07f73730b2b967805dd1b0ccb40b22c64d0d78 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
    }

    // line 1
    public function getlist($__headline__ = null, $__list__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "headline" => $__headline__,
            "list" => $__list__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 2
            echo "    ";
            if ((twig_length_filter($this->env, (isset($context["list"]) ? $context["list"] : null)) > 0)) {
                // line 3
                echo "        <h4>";
                echo twig_escape_filter($this->env, (isset($context["headline"]) ? $context["headline"] : null), "html", null, true);
                echo "</h4>

        <ul>
            ";
                // line 6
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["list"]) ? $context["list"] : null));
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 7
                    echo "                <li>";
                    echo $this->env->getExtension('Bolt')->decorateTT($context["item"]);
                    echo "</li>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 9
                echo "        </ul>
    ";
            }
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "dbcheck/_macros.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 9,  47 => 7,  43 => 6,  36 => 3,  33 => 2,  21 => 1,);
    }
}
