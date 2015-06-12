<?php

/* nav/_macros.twig */
class __TwigTemplate_63b13f4f6a84d0592d6e3fc662285e7d46f3dc822099cf4058ff0bfa45a0a60a extends Twig_Template
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
        // line 10
        echo "

";
        // line 78
        echo "

";
        // line 97
        echo "

";
        // line 113
        echo "

";
        // line 128
        echo "

";
    }

    // line 4
    public function getheading($__title__ = null, $__icon__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "title" => $__title__,
            "icon" => $__icon__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 5
            echo "    ";
            $context["__internal_201a7ce09ae9bca6f5b3a2e442c3277ea7b70bbae0885249192aececedfb35b2"] = $this;
            // line 6
            echo "    <li class=\"divider\">
        <em>";
            // line 7
            echo $context["__internal_201a7ce09ae9bca6f5b3a2e442c3277ea7b70bbae0885249192aececedfb35b2"]->getlabel((isset($context["icon"]) ? $context["icon"] : null), (isset($context["title"]) ? $context["title"] : null));
            echo "</em>
    </li>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 22
    public function getsubmenu($__icon__ = null, $__label__ = null, $__popoveritems__ = null, $__active__ = null, $__wide__ = null, $__subitems__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "icon" => $__icon__,
            "label" => $__label__,
            "popoveritems" => $__popoveritems__,
            "active" => $__active__,
            "wide" => $__wide__,
            "subitems" => $__subitems__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 23
            echo "
    ";
            // line 24
            $context["__internal_b207d2e4f986107eee774d82e88f28dfa300ec6e035d7203f22def2e3112f758"] = $this;
            // line 25
            echo "
    ";
            // line 26
            if (twig_test_empty((isset($context["subitems"]) ? $context["subitems"] : null))) {
                // line 27
                echo "        ";
                $context["subitems"] = (isset($context["popoveritems"]) ? $context["popoveritems"] : null);
                // line 28
                echo "    ";
            }
            // line 29
            echo "
    ";
            // line 31
            echo "    ";
            $context["allowedany"] = false;
            // line 32
            echo "    ";
            $context["allowedamount"] = 0;
            // line 33
            echo "    ";
            $context["allowedsingle"] = "";
            // line 34
            echo "    ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["subitems"]) ? $context["subitems"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 35
                echo "        ";
                if ((($context["item"] != "-") && $this->env->getExtension('Bolt')->isAllowed((($this->getAttribute($context["item"], "isallowed", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["item"], "isallowed", array()), "dashboard")) : ("dashboard"))))) {
                    // line 36
                    echo "            ";
                    $context["allowedany"] = true;
                    // line 37
                    echo "            ";
                    $context["allowedamount"] = ((isset($context["allowedamount"]) ? $context["allowedamount"] : null) + 1);
                    // line 38
                    echo "            ";
                    $context["allowedsingle"] = $context["item"];
                    // line 39
                    echo "        ";
                }
                // line 40
                echo "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 41
            echo "
    ";
            // line 42
            $context["class"] = trim(((((isset($context["wide"]) ? $context["wide"] : null)) ? (" menu-pop-wide") : ("")) . (((isset($context["active"]) ? $context["active"] : null)) ? (" active") : (""))));
            // line 43
            echo "
    ";
            // line 45
            echo "    ";
            if ((isset($context["allowedany"]) ? $context["allowedany"] : null)) {
                // line 46
                echo "        ";
                if (((isset($context["allowedamount"]) ? $context["allowedamount"] : null) == 1)) {
                    // line 47
                    echo "            ";
                    $context["item"] = (isset($context["allowedsingle"]) ? $context["allowedsingle"] : null);
                    // line 48
                    echo "            <li>
                <a href=\"";
                    // line 49
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "link", array()), "html", null, true);
                    echo "\">
                    ";
                    // line 50
                    echo $context["__internal_b207d2e4f986107eee774d82e88f28dfa300ec6e035d7203f22def2e3112f758"]->geticon($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "icon", array()), "icon");
                    echo (($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "label", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "label", array()), (("<em>(" . $this->env->getExtension('Bolt')->trans("no content …")) . ")</em>"))) : ((("<em>(" . $this->env->getExtension('Bolt')->trans("no content …")) . ")</em>")));
                    echo "
                </a>
            </li>
        ";
                } else {
                    // line 54
                    echo "            <li";
                    if ((isset($context["class"]) ? $context["class"] : null)) {
                        echo " class=\"";
                        echo twig_escape_filter($this->env, (isset($context["class"]) ? $context["class"] : null), "html", null, true);
                        echo "\"";
                    }
                    echo ">
                <a  href=\"";
                    // line 55
                    if ((isset($context["popoveritems"]) ? $context["popoveritems"] : null)) {
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["popoveritems"]) ? $context["popoveritems"] : null), 0, array()), "link", array()), "html", null, true);
                    } else {
                        echo "#";
                    }
                    echo "\" class=\"menu-pop\">
                    ";
                    // line 56
                    echo $context["__internal_b207d2e4f986107eee774d82e88f28dfa300ec6e035d7203f22def2e3112f758"]->getlabel((isset($context["icon"]) ? $context["icon"] : null), (isset($context["label"]) ? $context["label"] : null));
                    echo "
                </a>
                <ul class=\"nav submenu\">
                    ";
                    // line 59
                    $context["divider"] = false;
                    // line 60
                    echo "                    ";
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable((isset($context["popoveritems"]) ? $context["popoveritems"] : null));
                    foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                        // line 61
                        echo "                        ";
                        if (($context["item"] == "-")) {
                            // line 62
                            echo "                            ";
                            $context["divider"] = true;
                            // line 63
                            echo "                        ";
                        } elseif ($this->env->getExtension('Bolt')->isAllowed((($this->getAttribute($context["item"], "isallowed", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["item"], "isallowed", array()), "dashboard")) : ("dashboard")))) {
                            // line 64
                            echo "                            <li";
                            if ((isset($context["divider"]) ? $context["divider"] : null)) {
                                echo " class=\"subdivider\"";
                            }
                            echo ">
                                <a href=\"";
                            // line 65
                            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "link", array()), "html", null, true);
                            echo "\">
                                    ";
                            // line 66
                            echo $context["__internal_b207d2e4f986107eee774d82e88f28dfa300ec6e035d7203f22def2e3112f758"]->geticon($this->getAttribute($context["item"], "icon", array()));
                            echo (($this->getAttribute($context["item"], "label", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["item"], "label", array()), (("<em>(" . $this->env->getExtension('Bolt')->trans("no content …")) . ")</em>"))) : ((("<em>(" . $this->env->getExtension('Bolt')->trans("no content …")) . ")</em>")));
                            echo "
                                </a>
                            </li>
                            ";
                            // line 69
                            $context["divider"] = false;
                            // line 70
                            echo "                        ";
                        }
                        // line 71
                        echo "                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 72
                    echo "                </ul>
            </li>
        ";
                }
                // line 75
                echo "    ";
            }
            // line 76
            echo "
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 83
    public function getcollapse()
    {
        $context = $this->env->getGlobals();

        $blocks = array();

        ob_start();
        try {
            // line 84
            echo "    ";
            $context["__internal_e4c26ac8b2fc9634ecf9a6fd0eacbe99b5020648440619667abff720bd2bc6fe"] = $this;
            // line 85
            echo "
    <li class=\"nav-secondary-collapse\">
        <a href=\"#\">
            ";
            // line 88
            echo $context["__internal_e4c26ac8b2fc9634ecf9a6fd0eacbe99b5020648440619667abff720bd2bc6fe"]->getlabel("fa:compress", $this->env->getExtension('Bolt')->trans("Collapse sidebar"));
            echo "
        </a>
    </li>
    <li class=\"nav-secondary-expand\">
        <a href=\"#\">
            ";
            // line 93
            echo $context["__internal_e4c26ac8b2fc9634ecf9a6fd0eacbe99b5020648440619667abff720bd2bc6fe"]->getlabel("fa:expand", $this->env->getExtension('Bolt')->trans("Expand sidebar"));
            echo "
        </a>
    </li>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 102
    public function getlink($__icon__ = null, $__label__ = null, $__pathname__ = null, $__active__ = null, $__divider__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "icon" => $__icon__,
            "label" => $__label__,
            "pathname" => $__pathname__,
            "active" => $__active__,
            "divider" => $__divider__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 103
            echo "    ";
            $context["__internal_b14a18c149684528cdd9eebb72f65f86ae17fe11bea86451372dd81da8b98ca2"] = $this;
            // line 104
            echo "    ";
            $context["class"] = "";
            // line 105
            echo "    ";
            if (((isset($context["pathname"]) ? $context["pathname"] : null) == "dashboard")) {
                $context["class"] = "nav-secondary-dashboard";
            }
            // line 106
            echo "    ";
            if ((isset($context["active"]) ? $context["active"] : null)) {
                $context["class"] = ((isset($context["class"]) ? $context["class"] : null) . " active");
            }
            // line 107
            echo "    ";
            if ((isset($context["divider"]) ? $context["divider"] : null)) {
                $context["class"] = ((isset($context["class"]) ? $context["class"] : null) . " divider");
            }
            // line 108
            echo "
    <li";
            // line 109
            if ((isset($context["class"]) ? $context["class"] : null)) {
                echo " class=\"";
                echo twig_escape_filter($this->env, trim((isset($context["class"]) ? $context["class"] : null)), "html", null, true);
                echo "\" ";
            }
            echo ">
        <a href=\"";
            // line 110
            echo $this->env->getExtension('routing')->getPath((isset($context["pathname"]) ? $context["pathname"] : null));
            echo "\">";
            echo $context["__internal_b14a18c149684528cdd9eebb72f65f86ae17fe11bea86451372dd81da8b98ca2"]->getlabel((isset($context["icon"]) ? $context["icon"] : null), (isset($context["label"]) ? $context["label"] : null));
            echo "</a>
    </li>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 118
    public function getlabel($__icon__ = null, $__label__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "icon" => $__icon__,
            "label" => $__label__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 119
            echo "    ";
            $context["__internal_037c8f38f8cbb5b9f9394f3246d07f448e92497a6853849cf3dca17ecace0d05"] = $this;
            // line 120
            echo "
    ";
            // line 121
            if (twig_test_empty((isset($context["icon"]) ? $context["icon"] : null))) {
                // line 122
                echo "        <i class=\"icon\">";
                echo twig_escape_filter($this->env, twig_slice($this->env, (isset($context["label"]) ? $context["label"] : null), 0, 1), "html", null, true);
                echo "</i>
    ";
            } elseif ((            // line 123
(isset($context["icon"]) ? $context["icon"] : null) != "-")) {
                // line 124
                echo "        ";
                echo $context["__internal_037c8f38f8cbb5b9f9394f3246d07f448e92497a6853849cf3dca17ecace0d05"]->geticon((isset($context["icon"]) ? $context["icon"] : null), true);
                echo "
    ";
            }
            // line 126
            echo "    ";
            echo (isset($context["label"]) ? $context["label"] : null);
            echo "
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 133
    public function geticon($__icon__ = null, $__box__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "icon" => $__icon__,
            "box" => $__box__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 134
            echo "    ";
            $context["class"] = ((((array_key_exists("box", $context)) ? (_twig_default_filter((isset($context["box"]) ? $context["box"] : null), false)) : (false))) ? ("icon") : ("fa-fw"));
            // line 135
            echo "    ";
            // line 136
            echo "    ";
            if ((twig_slice($this->env, (isset($context["icon"]) ? $context["icon"] : null), 0, 3) == "fa:")) {
                // line 137
                echo "        <i class=\"fa fa-";
                echo twig_escape_filter($this->env, twig_slice($this->env, (isset($context["icon"]) ? $context["icon"] : null), 3), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, (isset($context["class"]) ? $context["class"] : null), "html", null, true);
                echo "\"></i>
    ";
                // line 139
                echo "    ";
            } else {
                // line 140
                echo "        <i class=\"fa fa-question-circle ";
                echo twig_escape_filter($this->env, (isset($context["class"]) ? $context["class"] : null), "html", null, true);
                echo "\" title=\"";
                echo twig_escape_filter($this->env, (isset($context["icon"]) ? $context["icon"] : null), "html", null, true);
                echo "\"></i>
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
        return "nav/_macros.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  443 => 140,  440 => 139,  433 => 137,  430 => 136,  428 => 135,  425 => 134,  413 => 133,  399 => 126,  393 => 124,  391 => 123,  386 => 122,  384 => 121,  381 => 120,  378 => 119,  366 => 118,  350 => 110,  342 => 109,  339 => 108,  334 => 107,  329 => 106,  324 => 105,  321 => 104,  318 => 103,  303 => 102,  288 => 93,  280 => 88,  275 => 85,  272 => 84,  263 => 83,  251 => 76,  248 => 75,  243 => 72,  237 => 71,  234 => 70,  232 => 69,  225 => 66,  221 => 65,  214 => 64,  211 => 63,  208 => 62,  205 => 61,  200 => 60,  198 => 59,  192 => 56,  184 => 55,  175 => 54,  167 => 50,  163 => 49,  160 => 48,  157 => 47,  154 => 46,  151 => 45,  148 => 43,  146 => 42,  143 => 41,  137 => 40,  134 => 39,  131 => 38,  128 => 37,  125 => 36,  122 => 35,  117 => 34,  114 => 33,  111 => 32,  108 => 31,  105 => 29,  102 => 28,  99 => 27,  97 => 26,  94 => 25,  92 => 24,  89 => 23,  73 => 22,  59 => 7,  56 => 6,  53 => 5,  41 => 4,  35 => 128,  31 => 113,  27 => 97,  23 => 78,  19 => 10,);
    }
}
