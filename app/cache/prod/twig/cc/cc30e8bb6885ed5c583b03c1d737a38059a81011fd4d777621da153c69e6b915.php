<?php

/* PrestaShopBundle:Admin/Product/Include:form_manufacturer.html.twig */
class __TwigTemplate_fb03a0a12779bfbf5d8eb1a0bbedbbee502686435182b0d3e59eb72116bfbfe1 extends Twig_Template
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
        echo "<div id=\"manufacturer-content\" class=\"";
        echo ((($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "vars", array()), "value", array()) == "")) ? ("hide") : (""));
        echo "\">
  <h2>";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Brand", array(), "Admin.Catalog.Feature"), "html", null, true);
        echo "</h2>
  <div class=\"row\">
    <div class=\"col-md-8\">
      <fieldset class=\"form-group\">
      ";
        // line 30
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'widget');
        echo "
      <div class=\"col-md-12\">
        ";
        // line 32
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'errors');
        echo "
      </div>
      </fieldset>
    </div>
    <div class=\"col-md-1\">
      <fieldset class=\"form-group\">
        <button type=\"button\" id=\"reset_brand_product\" class=\"btn btn-invisible btn-block delete p-l-0 p-r-0\"><i class=\"material-icons\">delete</i></button>
      </fieldset>
    </div>
  </div>
</div>
<div class=\"row\">
  <div class=\"col-md-4\">
    <button type=\"button\" class=\"btn btn-primary-outline sensitive open ";
        // line 45
        echo ((($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "vars", array()), "value", array()) != "")) ? ("hide") : (""));
        echo "\" id=\"add_brand_button\">
      <i class=\"material-icons\">add_circle</i> ";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Add a brand", array(), "Admin.Catalog.Feature"), "html", null, true);
        echo "
    </button>
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "PrestaShopBundle:Admin/Product/Include:form_manufacturer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 46,  52 => 45,  36 => 32,  31 => 30,  24 => 26,  19 => 25,);
    }

    public function getSource()
    {
        return "";
    }
}
