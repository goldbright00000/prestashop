<?php

/* PrestaShopBundle:Admin/Product/Include:form_custom_fields.html.twig */
class __TwigTemplate_c8068618a8ae8f97d5f71a30114a3b209297cd26c61d8b3ca71ae5ecb302dfda extends Twig_Template
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
        echo "<div class=\"row\">
  <div class=\"col-md-3\">
    <fieldset class=\"form-group\">
      <label class=\"form-control-label\">";
        // line 28
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "label", array()), "vars", array()), "label", array()), "html", null, true);
        echo "</label>
      ";
        // line 29
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "label", array()), 'errors');
        echo "
      ";
        // line 30
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "label", array()), 'widget');
        echo "
    </fieldset>
  </div>
  <div class=\"col-md-3\">
    <fieldset class=\"form-group\">
      <label class=\"form-control-label\">";
        // line 35
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "type", array()), "vars", array()), "label", array()), "html", null, true);
        echo "</label>
      ";
        // line 36
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "type", array()), 'errors');
        echo "
      ";
        // line 37
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "type", array()), 'widget');
        echo "
    </fieldset>
  </div>
  <div class=\"col-md-1\">
    <fieldset class=\"form-group\">
      <label class=\"form-control-label\">&nbsp;</label>
      <a class=\"btn btn-block delete\" ><i class=\"material-icons\">delete</i></a>
    </fieldset>
  </div>
  <div class=\"col-md-4\">
    <fieldset class=\"form-group\">
      <div>
        <label class=\"form-control-label\">&nbsp;</label>
      </div>
      <div>
        ";
        // line 52
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "require", array()), 'widget', array("switch" => "tiny"));
        echo "
      </div>
    </fieldset>
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "PrestaShopBundle:Admin/Product/Include:form_custom_fields.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  66 => 52,  48 => 37,  44 => 36,  40 => 35,  32 => 30,  28 => 29,  24 => 28,  19 => 25,);
    }

    public function getSource()
    {
        return "";
    }
}
