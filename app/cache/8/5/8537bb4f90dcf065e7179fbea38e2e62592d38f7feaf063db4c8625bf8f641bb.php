<?php

/* homepage.twig */
class __TwigTemplate_8537bb4f90dcf065e7179fbea38e2e62592d38f7feaf063db4c8625bf8f641bb extends Twig_Template
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
        // line 1
        $this->loadTemplate("_header.twig", "homepage.twig", 1)->display($context);
        // line 2
        echo "
<h2>";
        // line 3
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["record"]) ? $context["record"] : null), "title", array()), "html", null, true);
        echo "</h2>

";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["record"]) ? $context["record"] : null), "body", array()), "html", null, true);
        echo "


";
        // line 8
        $this->loadTemplate("_footer.twig", "homepage.twig", 8)->display($context);
    }

    public function getTemplateName()
    {
        return "homepage.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 8,  29 => 5,  24 => 3,  21 => 2,  19 => 1,);
    }
}
