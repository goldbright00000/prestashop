<?php

/* PrestaShopBundle:Admin/Module/Includes:tab-module-line.html.twig */
class __TwigTemplate_428dca05321db3f4cebf53489efc27b025ffb0d5f692cde7fa1b69777305906b extends Twig_Template
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
        // line 26
        $context["moduleImage"] = (((null === $this->getAttribute($this->getAttribute((isset($context["module"]) ? $context["module"] : null), "attributes", array()), "img", array()))) ? ((((twig_constant("_MODULE_DIR_") . $this->getAttribute($this->getAttribute(        // line 27
(isset($context["module"]) ? $context["module"] : null), "attributes", array()), "name", array())) . "/") . $this->getAttribute($this->getAttribute((isset($context["module"]) ? $context["module"] : null), "attributes", array()), "logo", array()))) : ($this->getAttribute($this->getAttribute(        // line 28
(isset($context["module"]) ? $context["module"] : null), "attributes", array()), "img", array())));
        // line 30
        echo "<tr>
  <td class=\"fixed-with-sm center\">
    <img
      class=\"img-thumbnail\"
      alt=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["module"]) ? $context["module"] : null), "attributes", array()), "name", array()), "html", null, true);
        echo "\"
      src=\"";
        // line 35
        echo twig_escape_filter($this->env, (isset($context["moduleImage"]) ? $context["moduleImage"] : null), "html", null, true);
        echo "\"
    />
  </td>
  <td>
    <div id=\"anchor";
        // line 39
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["module"]) ? $context["module"] : null), "attributes", array()), "name", array())), "html", null, true);
        echo "\" title=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["module"]) ? $context["module"] : null), "attributes", array()), "displayName", array()), "html", null, true);
        echo "\">
      <div class=\"module_name\">
        <span style=\"display:none\">";
        // line 41
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["module"]) ? $context["module"] : null), "attributes", array()), "name", array()), "html", null, true);
        echo "</span>
        ";
        // line 42
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["module"]) ? $context["module"] : null), "attributes", array()), "displayName", array()), "html", null, true);
        echo "
        <small class=\"text-muted\">v";
        // line 43
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["module"]) ? $context["module"] : null), "attributes", array()), "version", array()), "html", null, true);
        echo " - by ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["module"]) ? $context["module"] : null), "attributes", array()), "author", array()), "html", null, true);
        echo "</small>
        ";
        // line 44
        if (( !twig_test_empty($this->getAttribute($this->getAttribute((isset($context["module"]) ? $context["module"] : null), "attributes", array()), "type", array())) && ($this->getAttribute($this->getAttribute((isset($context["module"]) ? $context["module"] : null), "attributes", array()), "type", array()) == "addonsBought"))) {
            // line 45
            echo "        - <span class=\"module-badge-bought help-tooltip text-warning\" data-title=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("You bought this module on PrestaShop Addons. Thank You.", array()), "html", null, true);
            echo "\"><i class=\"icon-pushpin\"></i> <small>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Bought", array()), "html", null, true);
            echo "</small></span>
        ";
        } elseif (( !twig_test_empty($this->getAttribute($this->getAttribute(        // line 46
(isset($context["module"]) ? $context["module"] : null), "attributes", array()), "type", array())) && ($this->getAttribute($this->getAttribute((isset($context["module"]) ? $context["module"] : null), "attributes", array()), "type", array()) == "addonsMustHave"))) {
            // line 47
            echo "        - <span class=\"module-badge-popular help-tooltip text-primary\" data-title=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("This module is available on PrestaShop Addons.", array()), "html", null, true);
            echo "\"><i class=\"icon-group\"></i> <small>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Popular", array()), "html", null, true);
            echo "</small></span>
        ";
        } elseif (( !twig_test_empty($this->getAttribute($this->getAttribute(        // line 48
(isset($context["module"]) ? $context["module"] : null), "attributes", array()), "type", array())) && ($this->getAttribute($this->getAttribute((isset($context["module"]) ? $context["module"] : null), "attributes", array()), "type", array()) == "addonsPartner"))) {
            // line 49
            echo "        - <span class=\"module-badge-partner help-tooltip text-warning\" data-title=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("This module is available for free thanks to our partner.", array()), "html", null, true);
            echo "\"><i class=\"icon-pushpin\"></i> <small>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Official", array()), "html", null, true);
            echo "</small></span>
        ";
        } elseif (($this->getAttribute($this->getAttribute(        // line 50
(isset($context["module"]) ? $context["module"] : null), "attributes", array(), "any", false, true), "id", array(), "any", true, true) && ($this->getAttribute($this->getAttribute((isset($context["module"]) ? $context["module"] : null), "attributes", array()), "id", array()) >= 0))) {
            // line 51
            echo "          ";
            if (($this->getAttribute($this->getAttribute((isset($context["module"]) ? $context["module"] : null), "attributes", array(), "any", false, true), "version_addons", array(), "any", true, true) && $this->getAttribute($this->getAttribute((isset($context["module"]) ? $context["module"] : null), "attributes", array()), "version_addons", array()))) {
                // line 52
                echo "            <span class=\"label label-warning\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Need update", array()), "html", null, true);
                echo "</span>
          ";
            }
            // line 54
            echo "        ";
        }
        // line 55
        echo "      </div>
      <p class=\"module_description\">
        ";
        // line 57
        if (($this->getAttribute($this->getAttribute((isset($context["module"]) ? $context["module"] : null), "attributes", array(), "any", false, true), "description", array(), "any", true, true) &&  !twig_test_empty($this->getAttribute($this->getAttribute((isset($context["module"]) ? $context["module"] : null), "attributes", array()), "description", array())))) {
            // line 58
            echo "          ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["module"]) ? $context["module"] : null), "attributes", array()), "description", array()), "html", null, true);
            echo "
        ";
        }
        // line 60
        echo "      </p>
      ";
        // line 61
        if ((($this->getAttribute($this->getAttribute((isset($context["module"]) ? $context["module"] : null), "attributes", array(), "any", false, true), "message", array(), "any", true, true) &&  !twig_test_empty($this->getAttribute($this->getAttribute((isset($context["module"]) ? $context["module"] : null), "attributes", array()), "name", array()))) && (( !$this->getAttribute($this->getAttribute((isset($context["module"]) ? $context["module"] : null), "attributes", array(), "any", false, true), "type", array(), "any", true, true) || ($this->getAttribute($this->getAttribute((isset($context["module"]) ? $context["module"] : null), "attributes", array()), "type", array()) != "addonsMustHave")) || ($this->getAttribute($this->getAttribute((isset($context["module"]) ? $context["module"] : null), "attributes", array()), "type", array()) != "addonsNative")))) {
            // line 62
            echo "        <div class=\"alert alert-success\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["module"]) ? $context["module"] : null), "attributes", array()), "message", array()), "html", null, true);
            echo "</div>
      ";
        }
        // line 64
        echo "    </div>
  </td>
  <td class=\"module-container module-quick-action-list clearfix\">
    ";
        // line 67
        echo twig_include($this->env, $context, "PrestaShopBundle:Admin/Module/Includes:action_menu.html.twig", array("module" => (isset($context["module"]) ? $context["module"] : null)));
        echo "
  </td>
</tr>
";
    }

    public function getTemplateName()
    {
        return "PrestaShopBundle:Admin/Module/Includes:tab-module-line.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  130 => 67,  125 => 64,  119 => 62,  117 => 61,  114 => 60,  108 => 58,  106 => 57,  102 => 55,  99 => 54,  93 => 52,  90 => 51,  88 => 50,  81 => 49,  79 => 48,  72 => 47,  70 => 46,  63 => 45,  61 => 44,  55 => 43,  51 => 42,  47 => 41,  40 => 39,  33 => 35,  29 => 34,  23 => 30,  21 => 28,  20 => 27,  19 => 26,);
    }

    public function getSource()
    {
        return "";
    }
}
