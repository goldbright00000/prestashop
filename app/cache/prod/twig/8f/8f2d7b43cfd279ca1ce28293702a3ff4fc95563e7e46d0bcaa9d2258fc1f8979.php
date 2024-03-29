<?php

/* PrestaShopBundle:Admin\Common:pagination.html.twig */
class __TwigTemplate_2d5228c3f737bef6019376411626361b2b050efd284bc51e6c4ecce6bdbf4337 extends Twig_Template
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
        // line 25
        echo "<div>
    <ul class=\"pagination\">
        <li class=\"page-item ";
        // line 27
        if ((isset($context["first_url"]) ? $context["first_url"] : null)) {
        } else {
            echo "disabled";
        }
        echo "\">
            <a class=\"page-link\" ";
        // line 28
        if ((isset($context["first_url"]) ? $context["first_url"] : null)) {
            echo "href=\"";
            echo twig_escape_filter($this->env, (isset($context["first_url"]) ? $context["first_url"] : null), "html", null, true);
            echo "\"";
        } else {
            echo "nohref";
        }
        echo ">1</a>
        </li>
        <li class=\"page-item ";
        // line 30
        if ((isset($context["previous_url"]) ? $context["previous_url"] : null)) {
        } else {
            echo "disabled";
        }
        echo "\">
            <a class=\"page-link\" ";
        // line 31
        if ((isset($context["previous_url"]) ? $context["previous_url"] : null)) {
            echo "href=\"";
            echo twig_escape_filter($this->env, (isset($context["previous_url"]) ? $context["previous_url"] : null), "html", null, true);
            echo "\"";
        } else {
            echo "nohref";
        }
        echo ">&lt;</a>
        </li>
        <li class=\"page-item active\" style=\"float: left;\">
            <input name=\"paginator_jump_page\" class=\"page-link\" type=\"text\" style=\"width: 4em;\"
                   value=\"";
        // line 35
        echo twig_escape_filter($this->env, (isset($context["current_page"]) ? $context["current_page"] : null), "html", null, true);
        echo "\" psurl=\"";
        echo twig_escape_filter($this->env, (isset($context["jump_page_url"]) ? $context["jump_page_url"] : null), "html", null, true);
        echo "\" psmax=\"";
        echo twig_escape_filter($this->env, (isset($context["page_count"]) ? $context["page_count"] : null), "html", null, true);
        echo "\" pslimit=\"";
        echo twig_escape_filter($this->env, (isset($context["limit"]) ? $context["limit"] : null), "html", null, true);
        echo "\" />
        </li>
        <li class=\"page-item ";
        // line 37
        if ((array_key_exists("next_url", $context) && ((isset($context["next_url"]) ? $context["next_url"] : null) != false))) {
        } else {
            echo "disabled";
        }
        echo "\">
            <a class=\"page-link\" id=\"pagination_next_url\" ";
        // line 38
        if ((array_key_exists("next_url", $context) && ((isset($context["next_url"]) ? $context["next_url"] : null) != false))) {
            echo "href=\"";
            echo twig_escape_filter($this->env, (isset($context["next_url"]) ? $context["next_url"] : null), "html", null, true);
            echo "\"";
        } else {
            echo "nohref";
        }
        echo ">&gt;</a>
        </li>
        <li class=\"page-item ";
        // line 40
        if ((array_key_exists("last_url", $context) && ((isset($context["last_url"]) ? $context["last_url"] : null) != false))) {
        } else {
            echo "disabled";
        }
        echo "\">
            <a class=\"page-link\" ";
        // line 41
        if ((array_key_exists("last_url", $context) && ((isset($context["last_url"]) ? $context["last_url"] : null) != false))) {
            echo "href=\"";
            echo twig_escape_filter($this->env, (isset($context["last_url"]) ? $context["last_url"] : null), "html", null, true);
            echo "\"";
        } else {
            echo "nohref";
        }
        echo ">";
        echo twig_escape_filter($this->env, (isset($context["page_count"]) ? $context["page_count"] : null), "html", null, true);
        echo "</a>
        </li>
    </ul>
    <ul class=\"pagination\">
        <li style=\"float: left; margin-left: 2em;\">
            ";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Viewing %from%-%to% on %total% (page %current_page% / %page_count%)", array("%from%" => (        // line 47
(isset($context["from"]) ? $context["from"] : null) + 1), "%to%" => min((        // line 48
(isset($context["to"]) ? $context["to"] : null) + 1), (isset($context["total"]) ? $context["total"] : null)), "%total%" =>         // line 49
(isset($context["total"]) ? $context["total"] : null), "%current_page%" =>         // line 50
(isset($context["current_page"]) ? $context["current_page"] : null), "%page_count%" =>         // line 51
(isset($context["page_count"]) ? $context["page_count"] : null)), "Admin.Catalog.Feature"), "html", null, true);
        // line 53
        echo "
            &nbsp;
            |
            &nbsp;
            ";
        // line 57
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Items per page:", array(), "Admin.Catalog.Feature"), "html", null, true);
        echo "&nbsp;
            <select name=\"paginator_select_page_limit\" psurl=\"";
        // line 58
        echo twig_escape_filter($this->env, (isset($context["changeLimitUrl"]) ? $context["changeLimitUrl"] : null), "html", null, true);
        echo "\" style=\"display:inline;width:6em;\" class=\"pagination-link\">
                ";
        // line 59
        if (!twig_in_filter((isset($context["limit"]) ? $context["limit"] : null), (isset($context["limit_choices"]) ? $context["limit_choices"] : null))) {
            echo "<option value=\"";
            echo twig_escape_filter($this->env, (isset($context["limit"]) ? $context["limit"] : null), "html", null, true);
            echo "\" selected=\"selected\">";
            echo twig_escape_filter($this->env, (isset($context["limit"]) ? $context["limit"] : null), "html", null, true);
            echo "</option>";
        }
        // line 60
        echo "                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["limit_choices"]) ? $context["limit_choices"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["limit_choice"]) {
            // line 61
            echo "                    <option value=\"";
            echo twig_escape_filter($this->env, $context["limit_choice"], "html", null, true);
            echo "\" ";
            if (((isset($context["limit"]) ? $context["limit"] : null) == $context["limit_choice"])) {
                echo "selected=\"selected\"";
            }
            echo ">";
            echo twig_escape_filter($this->env, $context["limit_choice"], "html", null, true);
            echo "</option>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['limit_choice'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 63
        echo "            </select>
        </li>
    </ul>
</div>
";
    }

    public function getTemplateName()
    {
        return "PrestaShopBundle:Admin\\Common:pagination.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  162 => 63,  147 => 61,  142 => 60,  134 => 59,  130 => 58,  126 => 57,  120 => 53,  118 => 51,  117 => 50,  116 => 49,  115 => 48,  114 => 47,  113 => 46,  97 => 41,  90 => 40,  79 => 38,  72 => 37,  61 => 35,  48 => 31,  41 => 30,  30 => 28,  23 => 27,  19 => 25,);
    }

    public function getSource()
    {
        return "";
    }
}
