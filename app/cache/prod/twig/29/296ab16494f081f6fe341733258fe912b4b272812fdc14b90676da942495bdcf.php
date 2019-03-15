<?php

/* PrestaShopBundle:Admin:Translations/include/form-edit-message.html.twig */
class __TwigTemplate_9e50c31eee166f91dfdb5286b828cd19c58ed4ec9136c6d0a98d546050e0f23b extends Twig_Template
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
        echo "<form method=\"post\" class=\"hide\" data-hash=\"";
        echo twig_escape_filter($this->env, (isset($context["hash"]) ? $context["hash"] : null), "html", null, true);
        echo "\" action=\"";
        echo twig_escape_filter($this->env, (isset($context["action"]) ? $context["action"] : null), "html", null, true);
        echo "\">
  <div class=\"alerts\">
    <div class=\"hide alert alert-info\">";
        // line 27
        echo twig_escape_filter($this->env, (isset($context["notification_success"]) ? $context["notification_success"] : null), "html", null, true);
        echo "</div>
    <div class=\"hide alert alert-danger\">";
        // line 28
        echo twig_escape_filter($this->env, (isset($context["notification_error"]) ? $context["notification_error"] : null), "html", null, true);
        echo "</div>
  </div>
  <p><verbatim>";
        // line 30
        echo twig_escape_filter($this->env, (isset($context["translation_key"]) ? $context["translation_key"] : null), "html", null, true);
        echo "</verbatim></p>
  <div class=\"form-group row";
        // line 31
        if ( !(isset($context["is_translated"]) ? $context["is_translated"] : null)) {
            echo " has-warning";
        }
        echo "\">
    <div class=\"col-lg-12\">
      <textarea class=\"form-control";
        // line 33
        if ( !(isset($context["is_translated"]) ? $context["is_translated"] : null)) {
            echo " form-control-warning";
        }
        echo "\"
                rows=\"3\"
                name=\"translation_value\">";
        // line 36
        echo twig_escape_filter($this->env, (isset($context["edited_translation_value"]) ? $context["edited_translation_value"] : null), "html", null, true);
        // line 37
        echo "</textarea>
    </div>
    <input type=\"hidden\" name=\"domain\" value=\"";
        // line 39
        echo twig_escape_filter($this->env, (isset($context["domain"]) ? $context["domain"] : null), "html", null, true);
        echo "\"/>
    <input type=\"hidden\" name=\"locale\" value=\"";
        // line 40
        echo twig_escape_filter($this->env, (isset($context["locale"]) ? $context["locale"] : null), "html", null, true);
        echo "\"/>
    <input type=\"hidden\" name=\"default\" value=\"";
        // line 41
        echo twig_escape_filter($this->env, (isset($context["default_translation_value"]) ? $context["default_translation_value"] : null), "html", null, true);
        echo "\"/>
    <input type=\"hidden\" name=\"theme\" value=\"";
        // line 42
        echo twig_escape_filter($this->env, (isset($context["theme"]) ? $context["theme"] : null), "html", null, true);
        echo "\"/>
    <input type=\"hidden\" name=\"translation_key\" value=\"";
        // line 43
        echo twig_escape_filter($this->env, (isset($context["translation_key"]) ? $context["translation_key"] : null), "html", null, true);
        echo "\"/>
  </div>
  <div class=\"col-md-offset-1 buttons\">
    <input class=\"btn btn-primary btn-sm pull-right\" type=\"submit\" value=\"";
        // line 46
        echo twig_escape_filter($this->env, (isset($context["label_edit"]) ? $context["label_edit"] : null), "html", null, true);
        echo "\"/>
    <input class=\"btn btn-tertiary-outline btn-sm pull-right reset-translation-value\" type=\"button\" value=\"";
        // line 47
        echo twig_escape_filter($this->env, (isset($context["label_reset"]) ? $context["label_reset"] : null), "html", null, true);
        echo "\"/>
  </div>
</form>
";
    }

    public function getTemplateName()
    {
        return "PrestaShopBundle:Admin:Translations/include/form-edit-message.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  86 => 47,  82 => 46,  76 => 43,  72 => 42,  68 => 41,  64 => 40,  60 => 39,  56 => 37,  54 => 36,  47 => 33,  40 => 31,  36 => 30,  31 => 28,  27 => 27,  19 => 25,);
    }

    public function getSource()
    {
        return "";
    }
}
