<?php

/* _base/_listing.twig */
class __TwigTemplate_8a53f5a24de77570e5445cf3757d2b1e73efb8b057da1add81051a5975764416 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'listing_columns' => array($this, 'block_listing_columns'),
            'listing_header' => array($this, 'block_listing_header'),
            'listing_id' => array($this, 'block_listing_id'),
            'listing_content' => array($this, 'block_listing_content'),
            'listing_meta' => array($this, 'block_listing_meta'),
            'listing_actions' => array($this, 'block_listing_actions'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $context["macro"] = $this->loadTemplate("_macro/_macro.twig", "_base/_listing.twig", 1);
        // line 2
        echo "
";
        // line 4
        if (((( !(isset($context["compact"]) ? $context["compact"] : null) && $this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "group", array(), "any", false, true), "name", array(), "any", true, true)) && ($this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "first", array()) || ($this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "group", array()), "name", array()) != (isset($context["lastgroup"]) ? $context["lastgroup"] : null)))) && ($this->env->getExtension('Bolt')->request("order") == ""))) {
            // line 5
            echo "    ";
            if ( !$this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "first", array())) {
                echo "</tbody>";
            }
            // line 6
            echo "    <tbody ";
            if ($this->env->getExtension('Bolt')->isAllowed("edit", (isset($context["contenttype"]) ? $context["contenttype"] : null))) {
                echo "class=\"sortable\"";
            }
            echo ">
    <tr class=\"grouping\">
        <th colspan=\"";
            // line 8
            $this->displayBlock('listing_columns', $context, $blocks);
            echo "\">
            <h3 ";
            // line 9
            if ($this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "first", array())) {
                echo "class=\"first\"";
            }
            echo ">
                ";
            // line 10
            if ($this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "group", array()), "name", array())) {
                // line 11
                echo "                    ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "group", array()), "name", array()), "html", null, true);
                echo "
                ";
            } else {
                // line 13
                echo "                    ";
                echo $this->env->getExtension('Bolt')->trans("(no group)");
                echo "
                ";
            }
            // line 15
            echo "            </h3>
        </th>
    </tr>
";
        }
        // line 19
        echo "
";
        // line 21
        if (( !(isset($context["compact"]) ? $context["compact"] : null) && ($this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "first", array()) || (($this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "group", array(), "any", false, true), "name", array(), "any", true, true) && ($this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "group", array()), "name", array()) != (isset($context["lastgroup"]) ? $context["lastgroup"] : null))) && ($this->env->getExtension('Bolt')->request("order") == ""))))) {
            // line 22
            echo "    ";
            $context["lastgroup"] = (($this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "group", array(), "any", false, true), "name", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "group", array(), "any", false, true), "name", array()))) : (""));
            // line 23
            echo "    ";
            if (twig_in_filter("filter", twig_get_array_keys_filter($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "query", array()), "all", array())))) {
                // line 24
                echo "        ";
                $context["filter"] = (("filter=" . $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "query", array()), "all", array()), "filter", array())) . "&");
                // line 25
                echo "    ";
            } else {
                // line 26
                echo "        ";
                $context["filter"] = "";
                // line 27
                echo "    ";
            }
            // line 28
            echo "
    ";
            // line 29
            $context["link"] = (("?" . (isset($context["filter"]) ? $context["filter"] : null)) . "order=");
            // line 30
            echo "    <tr>
        ";
            // line 31
            $this->displayBlock('listing_header', $context, $blocks);
            // line 52
            echo "    </tr>
";
        }
        // line 54
        echo "
<tr ";
        // line 55
        if (($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "status", array()) != "published")) {
            echo "class=\"dim\"";
        }
        echo " id=\"item_";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "id", array()), "html", null, true);
        echo "\">
    ";
        // line 56
        $this->displayBlock('listing_id', $context, $blocks);
        // line 66
        echo "
    ";
        // line 67
        $this->displayBlock('listing_content', $context, $blocks);
        // line 89
        echo "
    ";
        // line 90
        if ( !(isset($context["compact"]) ? $context["compact"] : null)) {
            // line 91
            echo "        ";
            $this->displayBlock('listing_meta', $context, $blocks);
            // line 110
            echo "    ";
        }
        // line 111
        echo "
    ";
        // line 112
        $this->displayBlock('listing_actions', $context, $blocks);
        // line 200
        echo "
</tr>
";
    }

    // line 8
    public function block_listing_columns($context, array $blocks = array())
    {
        echo "6";
    }

    // line 31
    public function block_listing_header($context, array $blocks = array())
    {
        // line 32
        echo "        ";
        if (( !(isset($context["compact"]) ? $context["compact"] : null) && (isset($context["editable"]) ? $context["editable"] : null))) {
            // line 33
            echo "            <th class=\"check hidden-xs\"><input type=\"checkbox\" name=\"checkRow\" title=\"";
            echo $this->env->getExtension('Bolt')->trans("Select all");
            echo "\" /></th>
        ";
        } else {
            // line 35
            echo "            <th style=\"margin: 0; padding: 0;\"></th>
        ";
        }
        // line 37
        echo "
        <th class=\"hidden-xs\"><a href=\"";
        // line 38
        echo twig_escape_filter($this->env, (isset($context["link"]) ? $context["link"] : null), "html", null, true);
        if (($this->env->getExtension('Bolt')->request("order") == "id")) {
            echo "-";
        }
        echo "id\">
            ";
        // line 39
        echo $this->env->getExtension('Bolt')->trans("Id");
        echo "
        </a></th>

        <th style=\"width:80%\"><a href=\"";
        // line 42
        echo twig_escape_filter($this->env, (isset($context["link"]) ? $context["link"] : null), "html", null, true);
        if (($this->env->getExtension('Bolt')->request("order") == $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "TitleColumnName", array(), "method"))) {
            echo "-";
        }
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "TitleColumnName", array(), "method"), "html", null, true);
        echo "\">
            ";
        // line 43
        echo $this->env->getExtension('Bolt')->trans("Title");
        echo " / ";
        echo $this->env->getExtension('Bolt')->trans("Excerpt");
        echo "
        </a></th>

        <th>&nbsp;</th>

        <th class=\"username hidden-xs\"><a href=\"";
        // line 48
        echo twig_escape_filter($this->env, (isset($context["link"]) ? $context["link"] : null), "html", null, true);
        if (($this->env->getExtension('Bolt')->request("order") == "datecreated")) {
            echo "-";
        }
        echo "datecreated\">";
        echo $this->env->getExtension('Bolt')->trans("Meta");
        echo "</a></th>

        <th><a href=\"?\">";
        // line 50
        echo $this->env->getExtension('Bolt')->trans("Actions");
        echo "</a></th>
        ";
    }

    // line 56
    public function block_listing_id($context, array $blocks = array())
    {
        // line 57
        echo "
        ";
        // line 58
        if ((( !(isset($context["compact"]) ? $context["compact"] : null) && (isset($context["editable"]) ? $context["editable"] : null)) && $this->env->getExtension('Bolt')->isAllowed("delete", (isset($context["contenttype"]) ? $context["contenttype"] : null)))) {
            // line 59
            echo "            <td class=\"check hidden-xs\"><input type=\"checkbox\" name=\"checkRow\" /></td>
        ";
        } else {
            // line 61
            echo "            <td style=\"margin: 0; padding: 0;\"></td>
        ";
        }
        // line 63
        echo "        <td class=\"id hidden-xs\">№ ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "id", array()), "html", null, true);
        echo "</td>

    ";
    }

    // line 67
    public function block_listing_content($context, array $blocks = array())
    {
        // line 68
        echo "        <td class=\"excerpt ";
        if ( !(isset($context["compact"]) ? $context["compact"] : null)) {
            echo "large";
        }
        echo "\"><span>
            <strong class=\"visible-xs\">№ ";
        // line 69
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "id", array()), "html", null, true);
        echo ". </strong>
            <strong>
                ";
        // line 71
        if ((isset($context["editable"]) ? $context["editable"] : null)) {
            // line 72
            echo "                    <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("editcontent", array("contenttypeslug" => $this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "contenttype", array()), "slug", array()), "id" => $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "id", array()))), "html", null, true);
            echo "\" title=\"Slug: ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "slug", array()), "html", null, true);
            echo "\">
                        ";
            // line 73
            echo (($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "getTitle", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "getTitle", array()), (("<em>(" . $this->env->getExtension('Bolt')->trans("no title …")) . ")</em>"))) : ((("<em>(" . $this->env->getExtension('Bolt')->trans("no title …")) . ")</em>")));
            echo "
                    </a>
                ";
        } else {
            // line 76
            echo "                     <strong>
                        ";
            // line 77
            echo (($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "getTitle", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "getTitle", array()), (("<em>(" . $this->env->getExtension('Bolt')->trans("no title …")) . ")</em>"))) : ((("<em>(" . $this->env->getExtension('Bolt')->trans("no title …")) . ")</em>")));
            echo "
                    </strong>
                 ";
        }
        // line 80
        echo "            </strong>
            ";
        // line 81
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "excerpt", array(0 => (isset($context["excerptlength"]) ? $context["excerptlength"] : null)), "method"), "html", null, true);
        echo "
                        </span></td>
        <td class=\"listthumb\">
            ";
        // line 84
        if ( !twig_test_empty($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "getImage", array()))) {
            // line 85
            echo "                ";
            echo $this->env->getExtension('Bolt')->popup($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "getImage", array()), (isset($context["thumbsize"]) ? $context["thumbsize"] : null), ((isset($context["thumbsize"]) ? $context["thumbsize"] : null) * 0.75), "c");
            echo "
            ";
        }
        // line 87
        echo "        </td>
    ";
    }

    // line 91
    public function block_listing_meta($context, array $blocks = array())
    {
        // line 92
        echo "            <td class=\"username hidden-xs\">
                <i class=\"fa fa-user fa-fw\"></i>
                ";
        // line 94
        if ($this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "user", array(), "any", false, true), "displayname", array(), "any", true, true)) {
            // line 95
            echo "                    ";
            echo $this->env->getExtension('Bolt')->trim($this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "user", array()), "displayname", array()), 15);
            echo "
                ";
        } else {
            // line 97
            echo "                    <s>";
            echo $this->env->getExtension('Bolt')->trim($this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "values", array()), "ownerid", array()), 15);
            echo "</s>
                ";
        }
        // line 98
        echo "<br>
                ";
        // line 99
        if (($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "status", array()) == "timed")) {
            // line 100
            echo "                    <i class=\"fa fa-clock-o status-timed fa-fw\"></i> <time class=\"moment\" datetime=\"";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "datepublish", array()), "c"), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "datepublish", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "datepublish", array()), "html", null, true);
            echo "</time><br>
                ";
        } else {
            // line 102
            echo "                    <i class=\"fa fa-circle status-";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "status", array()), "html", null, true);
            echo " fa-fw\"></i> ";
            echo $this->env->getExtension('Bolt')->localeDateTime($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "datepublish", array()), "%x");
            echo "<br>
                ";
        }
        // line 104
        echo "
                ";
        // line 105
        if (($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "sortorder", array(), "any", true, true) &&  !($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "sortorder", array()) === false))) {
            // line 106
            echo "                    <span class=\"sorthandle\"><i class=\"fa fa-sort fa-fw\"></i> ";
            echo $this->env->getExtension('Bolt')->trans("Order: %sort%", array("%sort%" => $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "sortorder", array())));
            echo "</span> <br>
                ";
        }
        // line 108
        echo "            </td>
        ";
    }

    // line 112
    public function block_listing_actions($context, array $blocks = array())
    {
        // line 113
        echo "        <td class=\"actions\">
            <div class=\"btn-group\">
                ";
        // line 115
        if ((isset($context["editable"]) ? $context["editable"] : null)) {
            // line 116
            echo "                <a class=\"btn btn-default btn-xs\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("editcontent", array("contenttypeslug" => $this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "contenttype", array()), "slug", array()), "id" => $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "id", array()))), "html", null, true);
            echo "\">
                    <i class=\"fa fa-edit\"></i> ";
            // line 117
            echo $this->env->getExtension('Bolt')->trans("Edit");
            echo "
                </a>
                ";
        }
        // line 120
        echo "                <button class=\"btn btn-default dropdown-toggle btn-xs\" data-toggle=\"dropdown\">

                    <i class=\"fa fa-info-sign\"></i>
                    <span class=\"caret\"></span>
                </button>
                <ul class=\"dropdown-menu pull-right\">
                ";
        // line 126
        if ((($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "status", array()) == "published") && $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "link", array(), "any", true, true))) {
            // line 127
            echo "                    <li>
                        <a href=\"";
            // line 128
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "link", array()), "html", null, true);
            echo "\" target=\"_blank\">
                            <i class=\"fa fa-external-link-square\"></i> ";
            // line 129
            echo $this->env->getExtension('Bolt')->trans("View on site");
            echo "
                        </a>
                    </li>
                ";
        }
        // line 133
        echo "                ";
        if ($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "relation", array())) {
            // line 134
            echo "                    <li>
                        <a href=\"";
            // line 135
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("relatedto", array("contenttypeslug" => $this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "contenttype", array()), "slug", array()), "id" => $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "id", array()))), "html", null, true);
            echo "\">
                            <i class=\"fa fa-link\"></i> ";
            // line 136
            echo $this->env->getExtension('Bolt')->trans("View related content");
            echo "
                        </a>
                    </li>
                ";
        }
        // line 140
        echo "

                ";
        // line 142
        $context["__internal_30c116daf95aa4d03d90dce6904205f1790479967e0c0b7d0bb3d85fb488108b"] = $this;
        // line 143
        echo "                ";
        if ((isset($context["editable"]) ? $context["editable"] : null)) {
            // line 144
            echo "                    ";
            if (($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "status", array()) != "published")) {
                // line 145
                echo "                        ";
                if ($this->env->getExtension('Bolt')->isAllowed("publish", (isset($context["content"]) ? $context["content"] : null))) {
                    // line 146
                    echo "
                        <li>";
                    // line 147
                    echo $context["macro"]->getactionform((isset($context["content"]) ? $context["content"] : null), "publish", "fa-circle status-published", $this->env->getExtension('Bolt')->trans("contenttypes.generic.publish", array("%contenttype%" => $this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "contenttype", array()), "slug", array()))));
                    echo "</li>
                        ";
                }
                // line 149
                echo "                    ";
            } else {
                // line 150
                echo "                        ";
                if ($this->env->getExtension('Bolt')->isAllowed("depublish", (isset($context["content"]) ? $context["content"] : null))) {
                    // line 151
                    echo "                        <li>";
                    echo $context["macro"]->getactionform((isset($context["content"]) ? $context["content"] : null), "held", "fa-circle status-held", $this->env->getExtension('Bolt')->trans("Change status to 'held'"));
                    echo "</li>
                        <li>";
                    // line 152
                    echo $context["macro"]->getactionform((isset($context["content"]) ? $context["content"] : null), "draft", "fa-circle status-draft", $this->env->getExtension('Bolt')->trans("Change status to 'draft'"));
                    echo "</li>

                        ";
                }
                // line 155
                echo "                    ";
            }
            // line 156
            echo "                    ";
            if ($this->env->getExtension('Bolt')->isAllowed("create", (isset($context["content"]) ? $context["content"] : null))) {
                // line 157
                echo "                    <li><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("editcontent", array("contenttypeslug" => $this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "contenttype", array()), "slug", array()), "id" => $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "id", array()), "duplicate" => 1)), "html", null, true);
                echo "\">
                        <i class=\"fa fa-copy\"></i> ";
                // line 158
                echo $this->env->getExtension('Bolt')->trans("contenttypes.generic.duplicate", array("%contenttype%" => $this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "contenttype", array()), "slug", array())));
                echo "</a></li>
                    ";
            }
            // line 160
            echo "                    ";
            if ($this->env->getExtension('Bolt')->isAllowed("delete", (isset($context["content"]) ? $context["content"] : null))) {
                // line 161
                echo "                    <li>";
                echo $context["macro"]->getactionform((isset($context["content"]) ? $context["content"] : null), "delete", "fa-trash", $this->env->getExtension('Bolt')->trans("contenttypes.generic.delete", array("%contenttype%" => $this->getAttribute($this->getAttribute(                // line 163
(isset($context["content"]) ? $context["content"] : null), "contenttype", array()), "slug", array()))), (("Are you sure you want to delete '" . $this->getAttribute(                // line 164
(isset($context["content"]) ? $context["content"] : null), "getTitle", array())) . "'?"));
                echo "
                    </li>

                    ";
            }
            // line 168
            echo "                    <li class=\"divider\"></li>
                ";
        }
        // line 170
        echo "                    <li><a class=\"nolink\">";
        echo $this->env->getExtension('Bolt')->trans("Author:");
        echo " <strong><i class=\"fa fa-user\"></i>
                        ";
        // line 171
        if ($this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "user", array(), "any", false, true), "displayname", array(), "any", true, true)) {
            // line 172
            echo "                            ";
            echo $this->env->getExtension('Bolt')->trim($this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "user", array()), "displayname", array()), 15);
            echo "
                        ";
        } else {
            // line 174
            echo "                            <s>user ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "values", array()), "ownerid", array()), "html", null, true);
            echo " </s>
                        ";
        }
        // line 175
        echo "</strong></a></li>
                    <li><a class=\"nolink\">";
        // line 176
        echo $this->env->getExtension('Bolt')->trans("Current status:");
        echo "
                        <strong>";
        // line 177
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "status", array()), "html", null, true);
        echo "</strong></a></li>
                    <li><a class=\"nolink\">";
        // line 178
        echo $this->env->getExtension('Bolt')->trans("Slug:");
        echo "
                        <code title=\"";
        // line 179
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "slug", array()), "html", null, true);
        echo "\">";
        echo $this->env->getExtension('Bolt')->trim($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "slug", array()), 24);
        echo "</code></a></li>
                    <li><a class=\"nolink\">";
        // line 180
        echo $this->env->getExtension('Bolt')->trans("Created on:");
        echo "
                        <i class=\"fa fa-asterisk\"></i> ";
        // line 181
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "datecreated", array()), "Y-m-d H:i"), "html", null, true);
        echo "</a></li>
                    <li><a class=\"nolink\">";
        // line 182
        echo $this->env->getExtension('Bolt')->trans("Published on:");
        echo "
                        <i class=\"fa fa-calendar\"></i> ";
        // line 183
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "datepublish", array()), "Y-m-d H:i"), "html", null, true);
        echo "</a></li>
                    <li><a class=\"nolink\">";
        // line 184
        echo $this->env->getExtension('Bolt')->trans("Last edited on:");
        echo "
                        <i class=\"fa fa-refresh\"></i> ";
        // line 185
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "datechanged", array()), "Y-m-d H:i"), "html", null, true);
        echo "</a></li>
                    ";
        // line 186
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "taxonomy", array()));
        foreach ($context['_seq'] as $context["taxonomyslug"] => $context["values"]) {
            // line 187
            echo "                        ";
            if ((twig_length_filter($this->env, $context["values"]) > 1)) {
                // line 188
                echo "                            <li><a class=\"nolink\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "get", array(0 => "taxonomy"), "method"), $context["taxonomyslug"], array(), "array"), "name", array()), "html", null, true);
                echo ":
                                <i class=\"fa fa-tag\"></i> ";
                // line 189
                echo $this->env->getExtension('Bolt')->trim(twig_join_filter($context["values"], ", "), 24);
                echo "</a></li>
                        ";
            } else {
                // line 191
                echo "                            <li><a class=\"nolink\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "get", array(0 => "taxonomy"), "method"), $context["taxonomyslug"], array(), "array"), "singular_name", array()), "html", null, true);
                echo ":
                                <i class=\"fa fa-tag\"></i> ";
                // line 192
                echo $this->env->getExtension('Bolt')->trim($this->env->getExtension('Bolt')->first($context["values"]), 24);
                echo "</a></li>
                        ";
            }
            // line 194
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['taxonomyslug'], $context['values'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 195
        echo "                </ul>
            </div>

        </td>
    ";
    }

    public function getTemplateName()
    {
        return "_base/_listing.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  600 => 195,  594 => 194,  589 => 192,  584 => 191,  579 => 189,  574 => 188,  571 => 187,  567 => 186,  563 => 185,  559 => 184,  555 => 183,  551 => 182,  547 => 181,  543 => 180,  537 => 179,  533 => 178,  529 => 177,  525 => 176,  522 => 175,  516 => 174,  510 => 172,  508 => 171,  503 => 170,  499 => 168,  492 => 164,  491 => 163,  489 => 161,  486 => 160,  481 => 158,  476 => 157,  473 => 156,  470 => 155,  464 => 152,  459 => 151,  456 => 150,  453 => 149,  448 => 147,  445 => 146,  442 => 145,  439 => 144,  436 => 143,  434 => 142,  430 => 140,  423 => 136,  419 => 135,  416 => 134,  413 => 133,  406 => 129,  402 => 128,  399 => 127,  397 => 126,  389 => 120,  383 => 117,  378 => 116,  376 => 115,  372 => 113,  369 => 112,  364 => 108,  358 => 106,  356 => 105,  353 => 104,  345 => 102,  335 => 100,  333 => 99,  330 => 98,  324 => 97,  318 => 95,  316 => 94,  312 => 92,  309 => 91,  304 => 87,  298 => 85,  296 => 84,  290 => 81,  287 => 80,  281 => 77,  278 => 76,  272 => 73,  265 => 72,  263 => 71,  258 => 69,  251 => 68,  248 => 67,  240 => 63,  236 => 61,  232 => 59,  230 => 58,  227 => 57,  224 => 56,  218 => 50,  208 => 48,  198 => 43,  190 => 42,  184 => 39,  177 => 38,  174 => 37,  170 => 35,  164 => 33,  161 => 32,  158 => 31,  152 => 8,  146 => 200,  144 => 112,  141 => 111,  138 => 110,  135 => 91,  133 => 90,  130 => 89,  128 => 67,  125 => 66,  123 => 56,  115 => 55,  112 => 54,  108 => 52,  106 => 31,  103 => 30,  101 => 29,  98 => 28,  95 => 27,  92 => 26,  89 => 25,  86 => 24,  83 => 23,  80 => 22,  78 => 21,  75 => 19,  69 => 15,  63 => 13,  57 => 11,  55 => 10,  49 => 9,  45 => 8,  37 => 6,  32 => 5,  30 => 4,  27 => 2,  25 => 1,);
    }
}
