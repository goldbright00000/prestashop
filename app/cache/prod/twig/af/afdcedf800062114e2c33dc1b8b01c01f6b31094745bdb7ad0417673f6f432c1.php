<?php

/* PrestaShopBundle:Admin:Category/categories.html.twig */
class __TwigTemplate_4007d164b06b8448b66aba64b26bd8528450a8ef313aba4391ef5507bc8847c5 extends Twig_Template
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
        echo "<div id=\"ps_categoryTags\" class=\"pstaggerTagsWrapper\" style=\"display: block;\">

</div>

<div id=\"ps_categoryTree\" class=\"hide\">
  ";
        // line 30
        echo twig_escape_filter($this->env, twig_jsonencode_filter((isset($context["categories"]) ? $context["categories"] : null)), "html", null, true);
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "PrestaShopBundle:Admin:Category/categories.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 30,  19 => 25,);
    }

    public function getSource()
    {
        return "";
    }
}
