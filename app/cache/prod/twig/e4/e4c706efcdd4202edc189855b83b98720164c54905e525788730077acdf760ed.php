<?php

/* PrestaShopBundle:Admin:Translations/include/pagination-bar.html.twig */
class __TwigTemplate_cddc6d0d63f4e38e75f99eadce36dd364a9e04dd27f705dc10db0ebc6995905f extends Twig_Template
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
        echo "<div class=\"navigation-container\">
  <nav class=\"hide\">
    <ul class=\"pagination\">
      <li class=\"page-item active\" data-page-index=\"1\"><a class=\"page-link\" href=\"#_";
        // line 28
        echo twig_escape_filter($this->env, (isset($context["page_id"]) ? $context["page_id"] : null), "html", null, true);
        echo "\">1</a></li>
      <li class=\"page-item tpl hide\"><a class=\"page-link\" href=\"#_";
        // line 29
        echo twig_escape_filter($this->env, (isset($context["page_id"]) ? $context["page_id"] : null), "html", null, true);
        echo "\"></a></li>
    </ul>
  </nav>
</div>
";
    }

    public function getTemplateName()
    {
        return "PrestaShopBundle:Admin:Translations/include/pagination-bar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 29,  24 => 28,  19 => 25,);
    }

    public function getSource()
    {
        return "";
    }
}
