<?php

/* nav/_secondary-content.twig */
class __TwigTemplate_337b537f2b45da1dc8f890de28cc3ac4bbc36a5659da99279cae2f669121d7cc extends Twig_Template
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
        $context["sub_hide"] = array();
        // line 2
        echo "
";
        // line 3
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "config", array()), "get", array(0 => "contenttypes"), "method"));
        foreach ($context['_seq'] as $context["slug"] => $context["contenttype"]) {
            // line 4
            echo "    ";
            if ($this->env->getExtension('Bolt')->isAllowed(("contenttype:" . $context["slug"]))) {
                // line 5
                echo "
        ";
                // line 6
                $context["label_plural"] = $this->env->getExtension('Bolt')->trans(array(0 => "contenttypes", 1 => (($this->getAttribute($context["contenttype"], "name", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["contenttype"], "name", array()), "contenttype.slug")) : ("contenttype.slug")), 2 => "name", 3 => "plural"), array("DEFAULT" => $this->getAttribute($context["contenttype"], "name", array())));
                // line 7
                echo "        ";
                $context["label_singular"] = $this->env->getExtension('Bolt')->trans(array(0 => "contenttypes", 1 => (($this->getAttribute($context["contenttype"], "name", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["contenttype"], "name", array()), "contenttype.slug")) : ("contenttype.slug")), 2 => "name", 3 => "singular"), array("DEFAULT" => $this->getAttribute($context["contenttype"], "singular_name", array())));
                // line 8
                echo "
        ";
                // line 9
                $context["sub_view"] = array("icon" => (($this->getAttribute(                // line 10
$context["contenttype"], "icon_many", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["contenttype"], "icon_many", array()), (($this->getAttribute($context["contenttype"], "show_in_menu", array())) ? ("fa:files-o") : ("fa:th-list")))) : ((($this->getAttribute($context["contenttype"], "show_in_menu", array())) ? ("fa:files-o") : ("fa:th-list")))), "label" => $this->env->getExtension('Bolt')->trans("contenttypes.generic.view", array("%contenttypes%" =>                 // line 11
(isset($context["label_plural"]) ? $context["label_plural"] : null))), "link" => $this->env->getExtension('routing')->getPath("overview", array("contenttypeslug" =>                 // line 12
$context["slug"])));
                // line 14
                echo "        ";
                $context["sub_new"] = array("icon" => "fa:plus", "label" => $this->env->getExtension('Bolt')->trans("contenttypes.generic.new", array("%contenttype%" =>                 // line 16
(isset($context["label_singular"]) ? $context["label_singular"] : null))), "link" => $this->env->getExtension('routing')->getPath("editcontent", array("contenttypeslug" =>                 // line 17
$context["slug"])), "isallowed" => (("contenttype:" .                 // line 18
$context["slug"]) . ":create"));
                // line 20
                echo "        ";
                $context["sub"] = array(0 => (isset($context["sub_view"]) ? $context["sub_view"] : null), 1 => (isset($context["sub_new"]) ? $context["sub_new"] : null), 2 => "-");
                // line 21
                echo "
        ";
                // line 23
                echo "        ";
                if ($this->getAttribute($context["contenttype"], "show_in_menu", array())) {
                    // line 24
                    echo "
            ";
                    // line 25
                    $template_storage = new Bolt\Storage($context['app']);
                    $context['records'] =                     $template_storage->getContent((isset($context["slug"]) ? $context["slug"] : null), array("limit" => 4, "hydrate" => false, "order" => "-datechanged") );
                    // line 26
                    echo "            ";
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable((isset($context["records"]) ? $context["records"] : null));
                    foreach ($context['_seq'] as $context["_key"] => $context["record"]) {
                        // line 27
                        echo "                ";
                        $context["sub"] = twig_array_merge((isset($context["sub"]) ? $context["sub"] : null), array(0 => array("icon" => (($this->getAttribute(                        // line 29
$context["contenttype"], "icon_one", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["contenttype"], "icon_one", array()), "fa:file-text-o")) : ("fa:file-text-o")), "label" => trim(strtr($this->getAttribute(                        // line 30
$context["record"], "excerpt", array(0 => 80, 1 => true), "method"), array("</b>" => "&nbsp;</b>"))), "link" => $this->env->getExtension('routing')->getPath("editcontent", array("contenttypeslug" =>                         // line 31
$context["slug"], "id" => $this->getAttribute($context["record"], "id", array()))))));
                        // line 34
                        echo "            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['record'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 35
                    echo "
            ";
                    // line 36
                    $context["active"] = (((isset($context["page_nav"]) ? $context["page_nav"] : null) == "Content/*") && ((($this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "contenttype", array(), "any", false, true), "slug", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "contenttype", array(), "any", false, true), "slug", array()))) : ("")) == $context["slug"]));
                    // line 37
                    echo "
            ";
                    // line 38
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["nav"]) ? $context["nav"] : null), "submenu", array(0 => (($this->getAttribute($context["contenttype"], "icon_many", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["contenttype"], "icon_many", array()), "")) : ("")), 1 => (isset($context["label_plural"]) ? $context["label_plural"] : null), 2 => (isset($context["sub"]) ? $context["sub"] : null), 3 => (isset($context["active"]) ? $context["active"] : null), 4 => true), "method"), "html", null, true);
                    echo "

        ";
                    // line 41
                    echo "        ";
                } else {
                    // line 42
                    echo "
            ";
                    // line 43
                    $context["sub_view"] = array("icon" => (($this->getAttribute(                    // line 44
$context["contenttype"], "icon_many", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["contenttype"], "icon_many", array()), (($this->getAttribute($context["contenttype"], "show_in_menu", array())) ? ("fa:files-o") : ("fa:th-list")))) : ((($this->getAttribute($context["contenttype"], "show_in_menu", array())) ? ("fa:files-o") : ("fa:th-list")))), "label" => $this->env->getExtension('Bolt')->trans(array(0 => "contenttypes", 1 => $this->getAttribute(                    // line 45
$context["contenttype"], "slug", array()), 2 => "name", 3 => "plural"), array("DEFAULT" => $this->getAttribute($context["contenttype"], "name", array()))), "link" => $this->env->getExtension('routing')->getPath("overview", array("contenttypeslug" =>                     // line 46
$context["slug"])));
                    // line 48
                    echo "
            ";
                    // line 49
                    $context["sub_hide"] = twig_array_merge((isset($context["sub_hide"]) ? $context["sub_hide"] : null), array(0 => (isset($context["sub_view"]) ? $context["sub_view"] : null)));
                    // line 50
                    echo "
        ";
                }
                // line 52
                echo "    ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['slug'], $context['contenttype'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 54
        echo "
";
        // line 56
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["nav"]) ? $context["nav"] : null), "submenu", array(0 => "fa:th-list", 1 => $this->env->getExtension('Bolt')->trans("Other content"), 2 => (isset($context["sub_hide"]) ? $context["sub_hide"] : null)), "method"), "html", null, true);
        echo "
";
    }

    public function getTemplateName()
    {
        return "nav/_secondary-content.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  128 => 56,  125 => 54,  118 => 52,  114 => 50,  112 => 49,  109 => 48,  107 => 46,  106 => 45,  105 => 44,  104 => 43,  101 => 42,  98 => 41,  93 => 38,  90 => 37,  88 => 36,  85 => 35,  79 => 34,  77 => 31,  76 => 30,  75 => 29,  73 => 27,  68 => 26,  65 => 25,  62 => 24,  59 => 23,  56 => 21,  53 => 20,  51 => 18,  50 => 17,  49 => 16,  47 => 14,  45 => 12,  44 => 11,  43 => 10,  42 => 9,  39 => 8,  36 => 7,  34 => 6,  31 => 5,  28 => 4,  24 => 3,  21 => 2,  19 => 1,);
    }
}
