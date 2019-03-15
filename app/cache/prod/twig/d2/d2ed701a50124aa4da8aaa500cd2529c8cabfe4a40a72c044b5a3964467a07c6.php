<?php

/* PrestaShopBundle:Admin/Translations/include:translations-forms.html.twig */
class __TwigTemplate_92d382bd02026d2689df2686f78913c0d9196e213450d302899ad30cce9e6da7 extends Twig_Template
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
        echo "<div id=\"jetsContent\">
  ";
        // line 26
        echo $this->env->getExtension('PrestaShopBundle\Twig\TranslationsExtension')->getTranslationsForms((isset($context["translationsTree"]) ? $context["translationsTree"] : null), (isset($context["theme"]) ? $context["theme"] : null));
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "PrestaShopBundle:Admin/Translations/include:translations-forms.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 26,  19 => 25,);
    }

    public function getSource()
    {
        return "";
    }
}
