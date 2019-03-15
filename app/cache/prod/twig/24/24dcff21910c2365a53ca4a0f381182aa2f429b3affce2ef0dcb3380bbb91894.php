<?php

/* PrestaShopBundle:Admin/Translations/include:translations-tree.html.twig */
class __TwigTemplate_0d611d0c9fc5ebb4dda85a36c0b984e4743adf0fae4d315ab4bdb6fcf9308116 extends Twig_Template
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
        echo "<div class=\"domains-tree col-md-4\">
  <a class=\"btn-expand\">
    <i class=\"material-icons\">&#xE315;</i>
    <span>";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Expand all", array(), "Admin.Actions"), "html", null, true);
        echo "</span>
  </a>
  <a class=\"btn-reduce\">
    <i class=\"material-icons\">&#xE315;</i>
    <span>";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Collapse all", array(), "Admin.Actions"), "html", null, true);
        echo "</span>
  </a>

  <hr />
  ";
        // line 36
        echo $this->env->getExtension('PrestaShopBundle\Twig\TranslationsExtension')->getTranslationsTree((isset($context["translationsTree"]) ? $context["translationsTree"] : null), (isset($context["theme"]) ? $context["theme"] : null));
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "PrestaShopBundle:Admin/Translations/include:translations-tree.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 36,  31 => 32,  24 => 28,  19 => 25,);
    }

    public function getSource()
    {
        return "";
    }
}
