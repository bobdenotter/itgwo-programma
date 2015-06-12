<?php

/* dbcheck/dbcheck.twig */
class __TwigTemplate_357732f26c032343de88b9ca7f85b7479971cd70a505ea61c97a71ab06327e22 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("_base/_page-nav.twig", "dbcheck/dbcheck.twig", 3);
        $this->blocks = array(
            'page_nav' => array($this, 'block_page_nav'),
            'page_title' => array($this, 'block_page_title'),
            'page_main' => array($this, 'block_page_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "_base/_page-nav.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 5
        $context["__internal_e72c96b85d0f58965893820a034e5075ab08d8df5709d4fdc98578355d2813b2"] = $this->loadTemplate("dbcheck/_macros.twig", "dbcheck/dbcheck.twig", 5);
        // line 3
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 7
    public function block_page_nav($context, array $blocks = array())
    {
        echo "Settings/Configuration";
    }

    // line 9
    public function block_page_title($context, array $blocks = array())
    {
        echo $this->env->getExtension('Bolt')->trans("Database check / update");
    }

    // line 11
    public function block_page_main($context, array $blocks = array())
    {
        // line 12
        echo "
    ";
        // line 13
        $context["hints"] = (($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "modifications_hints", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "modifications_hints", array()), array())) : (array()));
        // line 14
        echo "
    <div class=\"row\">
        <div class=\"col-xs-12\">
            ";
        // line 17
        if ($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "modifications_made", array())) {
            // line 18
            echo "
                ";
            // line 19
            echo $context["__internal_e72c96b85d0f58965893820a034e5075ab08d8df5709d4fdc98578355d2813b2"]->getlist($this->env->getExtension('Bolt')->trans("Modifications made to the database:"), $this->getAttribute((isset($context["context"]) ? $context["context"] : null), "modifications_made", array()));
            echo "
                ";
            // line 20
            echo $context["__internal_e72c96b85d0f58965893820a034e5075ab08d8df5709d4fdc98578355d2813b2"]->getlist($this->env->getExtension('Bolt')->trans("Hints:"), (isset($context["hints"]) ? $context["hints"] : null));
            echo "

                <p class=\"alert alert-success\" role=\"alert\">";
            // line 22
            echo $this->env->getExtension('Bolt')->trans("Your database is now up to date.");
            echo "</p>

                <form action=\"";
            // line 24
            echo $this->env->getExtension('routing')->getPath("dbcheck");
            echo "\" method=\"get\">
                    <p><button type=\"submit\" class=\"btn btn-default btn-primary\">";
            // line 25
            echo $this->env->getExtension('Bolt')->trans("Check again");
            echo "</button></p>
                </form>

            ";
        } elseif ($this->getAttribute(        // line 28
(isset($context["context"]) ? $context["context"] : null), "modifications_required", array())) {
            // line 29
            echo "
                ";
            // line 30
            echo $context["__internal_e72c96b85d0f58965893820a034e5075ab08d8df5709d4fdc98578355d2813b2"]->getlist($this->env->getExtension('Bolt')->trans("Modifications needed:"), $this->getAttribute((isset($context["context"]) ? $context["context"] : null), "modifications_required", array()));
            echo "
                ";
            // line 31
            echo $context["__internal_e72c96b85d0f58965893820a034e5075ab08d8df5709d4fdc98578355d2813b2"]->getlist($this->env->getExtension('Bolt')->trans("Hints:"), (isset($context["hints"]) ? $context["hints"] : null));
            echo "

                <form action=\"";
            // line 33
            echo $this->env->getExtension('routing')->getPath("dbupdate");
            echo "\" method=\"post\">
                    <p><button type=\"submit\" class=\"btn btn-primary\">";
            // line 34
            echo $this->env->getExtension('Bolt')->trans("Update the database");
            echo "</button></p>
                </form>

            ";
        } else {
            // line 38
            echo "
                <p class=\"alert alert-success\" role=\"alert\">";
            // line 39
            echo $this->env->getExtension('Bolt')->trans("Your database is already up to date.");
            echo "</p>

                ";
            // line 41
            echo $context["__internal_e72c96b85d0f58965893820a034e5075ab08d8df5709d4fdc98578355d2813b2"]->getlist($this->env->getExtension('Bolt')->trans("Hints:"), (isset($context["hints"]) ? $context["hints"] : null));
            echo "

                ";
            // line 43
            if ($this->env->getExtension('Bolt')->isAllowed("prefill")) {
                // line 44
                echo "                <br>
                <hr>

                <p class=\"alert alert-warning\" role=\"alert\">
                    <b>";
                // line 48
                echo $this->env->getExtension('Bolt')->trans("Tip:");
                echo "</b>
                    ";
                // line 49
                echo $this->env->getExtension('Bolt')->trans("Add some sample <a href='%url%' class='btn btn-default'>Records with Loripsum text</a>", array("%url%" => $this->env->getExtension('routing')->getPath("prefill")));
                echo "
                </p>
                ";
            }
            // line 52
            echo "
            ";
        }
        // line 54
        echo "        </div>
    </div>

";
    }

    public function getTemplateName()
    {
        return "dbcheck/dbcheck.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  147 => 54,  143 => 52,  137 => 49,  133 => 48,  127 => 44,  125 => 43,  120 => 41,  115 => 39,  112 => 38,  105 => 34,  101 => 33,  96 => 31,  92 => 30,  89 => 29,  87 => 28,  81 => 25,  77 => 24,  72 => 22,  67 => 20,  63 => 19,  60 => 18,  58 => 17,  53 => 14,  51 => 13,  48 => 12,  45 => 11,  39 => 9,  33 => 7,  29 => 3,  27 => 5,  11 => 3,);
    }
}
