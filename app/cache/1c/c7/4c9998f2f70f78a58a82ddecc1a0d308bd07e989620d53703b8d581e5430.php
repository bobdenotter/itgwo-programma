<?php

/* editfile/editfile.twig */
class __TwigTemplate_1cc74c9998f2f70f78a58a82ddecc1a0d308bd07e989620d53703b8d581e5430 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("_base/_page-nav.twig", "editfile/editfile.twig", 3);
        $this->blocks = array(
            'page_nav' => array($this, 'block_page_nav'),
            'page_title' => array($this, 'block_page_title'),
            'page_subtitle' => array($this, 'block_page_subtitle'),
            'page_main' => array($this, 'block_page_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "_base/_page-nav.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_page_nav($context, array $blocks = array())
    {
        echo "Settings/Configuration";
    }

    // line 7
    public function block_page_title($context, array $blocks = array())
    {
        echo (($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "write_allowed", array())) ? ($this->env->getExtension('Bolt')->trans("page.edit-file.title.edit")) : ($this->env->getExtension('Bolt')->trans("page.edit-file.title.view")));
    }

    // line 9
    public function block_page_subtitle($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["context"]) ? $context["context"] : null), "basename", array()), "html", null, true);
    }

    // line 11
    public function block_page_main($context, array $blocks = array())
    {
        // line 12
        echo "
    ";
        // line 13
        $context["macro"] = $this->loadTemplate("_macro/_macro.twig", "editfile/editfile.twig", 13);
        // line 14
        echo "    ";
        $context["__internal_c091b6f60260401eace33025acdc043650d434f41ab4b7a86414b5c5e7c879df"] = $this->loadTemplate("_macro/_files_path.twig", "editfile/editfile.twig", 14);
        // line 15
        echo "

    ";
        // line 17
        $context["attr_text"] = array("_bind" => (($this->env->getExtension('Bolt')->isMobileClient()) ? ("") : (array(0 => "editfile", 1 => array("readonly" => (($this->getAttribute(        // line 18
(isset($context["context"]) ? $context["context"] : null), "write_allowed", array())) ? (false) : (true)))))), "class" => "CodeMirror-scroll", "id" => "form_contents", "name" => "form[contents]", "required" => false, "style" => "width: 98%; min-height: 350px;");
        // line 25
        echo "
    <div class=\"row\">
        <div class=\"col-xs-12\">
            ";
        // line 28
        echo $context["__internal_c091b6f60260401eace33025acdc043650d434f41ab4b7a86414b5c5e7c879df"]->getfiles_path($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "pathsegments", array()), $this->getAttribute((isset($context["context"]) ? $context["context"] : null), "namespace", array()), array("path" => "", "namespace" => $this->getAttribute((isset($context["context"]) ? $context["context"] : null), "namespace", array())));
        echo "


            <form action=\"\" method=\"post\" class=\"form-inline\" autocomplete=\"off\">
                ";
        // line 32
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "form", array()), "_token", array()), 'widget');
        echo "

                <div>
                    <textarea";
        // line 35
        echo $context["macro"]->getattr((isset($context["attr_text"]) ? $context["attr_text"] : null));
        echo ">";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "form", array()), "vars", array()), "value", array()), "contents", array()), "html", null, true);
        echo "</textarea>
                </div>

                <div>
                    <button type=\"submit\" id=\"saveeditfile\" class=\"btn btn-primary\" ";
        // line 39
        if ( !$this->getAttribute((isset($context["context"]) ? $context["context"] : null), "write_allowed", array())) {
            echo "disabled";
        }
        echo ">
                        <i class=\"fa fa-flag\"></i> ";
        // line 40
        echo $this->env->getExtension('Bolt')->trans("page.edit-file.button.save");
        echo "
                    </button>
                    <a class=\"btn btn-default confirm ";
        // line 42
        if ( !$this->getAttribute((isset($context["context"]) ? $context["context"] : null), "write_allowed", array())) {
            echo "disabled";
        }
        echo "\" style=\"margin-left: 24px;\"
                       data-confirm=\"";
        // line 43
        echo $this->env->getExtension('Bolt')->trans("page.edit-file.confirm-revert");
        echo "\"
                       href=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fileedit", array("namespace" => $this->getAttribute((isset($context["context"]) ? $context["context"] : null), "namespace", array()), "file" => $this->getAttribute((isset($context["context"]) ? $context["context"] : null), "file", array()))), "html", null, true);
        echo "\"
                    >
                        <i class=\"fa fa-undo\"></i> ";
        // line 46
        echo $this->env->getExtension('Bolt')->trans("page.edit-file.button.revert");
        echo "
                    </a>

                  <div class=\"relatedfiles\">
                    ";
        // line 50
        if ((twig_length_filter($this->env, $this->getAttribute((isset($context["context"]) ? $context["context"] : null), "filegroup", array())) > 1)) {
            // line 51
            echo "                      ";
            echo $this->env->getExtension('Bolt')->trans("page.edit-file.note-related");
            echo "
                      ";
            // line 52
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "filegroup", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["related"]) {
                // line 53
                echo "                        ";
                if (($context["related"] != $this->getAttribute((isset($context["context"]) ? $context["context"] : null), "basename", array()))) {
                    // line 54
                    echo "                          <a class=\"btn btn-tertiary btn-small\" href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fileedit", array("namespace" => $this->getAttribute((isset($context["context"]) ? $context["context"] : null), "namespace", array()), "file" => ($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "additionalpath", array()) . $context["related"]))), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $context["related"], "html", null, true);
                    echo "</a>
                        ";
                }
                // line 56
                echo "                      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['related'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 57
            echo "                    ";
        }
        // line 58
        echo "                  </div>
                </div>
            </form>
        </div>
    </div>

    ";
        // line 64
        if ( !$this->env->getExtension('Bolt')->isMobileClient()) {
            // line 65
            echo "        ";
            if (twig_in_filter($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "filetype", array()), array(0 => "twig", 1 => "html", 2 => "htm"))) {
                // line 66
                echo "            ";
                $context["codemirror"] = array(0 => "xml", 1 => "javascript", 2 => "css", 3 => "htmlmixed");
                // line 67
                echo "        ";
            } elseif (($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "filetype", array()) == "php")) {
                // line 68
                echo "            ";
                $context["codemirror"] = array(0 => "matchbrackets", 1 => "javascript", 2 => "css", 3 => "htmlmixed", 4 => "clike", 5 => "php");
                // line 69
                echo "        ";
            } elseif (($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "filetype", array()) == "yml")) {
                // line 70
                echo "            ";
                $context["codemirror"] = array(0 => "yaml");
                // line 71
                echo "        ";
            } elseif (($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "filetype", array()) == "md")) {
                // line 72
                echo "            ";
                $context["codemirror"] = array(0 => "markdown");
                // line 73
                echo "        ";
            } elseif (twig_in_filter($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "filetype", array()), array(0 => "css", 1 => "less"))) {
                // line 74
                echo "            ";
                $context["codemirror"] = "css";
                // line 75
                echo "        ";
            } elseif (($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "filetype", array()) == "js")) {
                // line 76
                echo "            ";
                $context["codemirror"] = array(0 => "javascript");
                // line 77
                echo "        ";
            } else {
                // line 78
                echo "            ";
                $context["codemirror"] = array();
                // line 79
                echo "        ";
            }
            // line 80
            echo "
        ";
            // line 82
            echo "        <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paths"]) ? $context["paths"] : null), "app", array()), "html", null, true);
            echo "view/js/ckeditor/plugins/codemirror/css/codemirror.min.css\">
        <script src=\"";
            // line 83
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paths"]) ? $context["paths"] : null), "app", array()), "html", null, true);
            echo "view/js/ckeditor/ckeditor.js\"></script>
        <script src=\"";
            // line 84
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paths"]) ? $context["paths"] : null), "app", array()), "html", null, true);
            echo "view/js/ckeditor/plugins/codemirror/js/codemirror.min.js\"></script>
        ";
            // line 85
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["codemirror"]) ? $context["codemirror"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["file"]) {
                // line 86
                echo "            <script src=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paths"]) ? $context["paths"] : null), "app", array()), "html", null, true);
                echo "view/js/ckeditor/plugins/codemirror/plugins/";
                echo twig_escape_filter($this->env, $context["file"], "html", null, true);
                echo ".min.js\"></script>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['file'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 88
            echo "    ";
        }
        // line 89
        echo "
";
    }

    public function getTemplateName()
    {
        return "editfile/editfile.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  247 => 89,  244 => 88,  233 => 86,  229 => 85,  225 => 84,  221 => 83,  216 => 82,  213 => 80,  210 => 79,  207 => 78,  204 => 77,  201 => 76,  198 => 75,  195 => 74,  192 => 73,  189 => 72,  186 => 71,  183 => 70,  180 => 69,  177 => 68,  174 => 67,  171 => 66,  168 => 65,  166 => 64,  158 => 58,  155 => 57,  149 => 56,  141 => 54,  138 => 53,  134 => 52,  129 => 51,  127 => 50,  120 => 46,  115 => 44,  111 => 43,  105 => 42,  100 => 40,  94 => 39,  85 => 35,  79 => 32,  72 => 28,  67 => 25,  65 => 18,  64 => 17,  60 => 15,  57 => 14,  55 => 13,  52 => 12,  49 => 11,  43 => 9,  37 => 7,  31 => 5,  11 => 3,);
    }
}
