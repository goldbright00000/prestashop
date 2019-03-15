<?php

/* PrestaShopBundle:Admin\Translations:list.html.twig */
class __TwigTemplate_39dc4d4f95d1b541afe21f9666516e4172b9e47cf25c3f07dc970d0388a61326 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 25
        $this->parent = $this->loadTemplate("PrestaShopBundle:Admin:layout.html.twig", "PrestaShopBundle:Admin\\Translations:list.html.twig", 25);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "PrestaShopBundle:Admin:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 27
    public function block_content($context, array $blocks = array())
    {
        // line 28
        echo "<div class=\"search-translation\">
  <h2>";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Search translations", array(), "Admin.International.Feature"), "html", null, true);
        echo "</h2>
  <div class=\"summary pull-right\">
    <span data-template=\"";
        // line 31
        echo twig_escape_filter($this->env, (isset($context["total_translations"]) ? $context["total_translations"] : null), "html", null, true);
        echo "\" class=\"total-translations\"></span>
    <span class=\"hide separator\"> - </span>
    <span data-template=\"";
        // line 33
        echo twig_escape_filter($this->env, (isset($context["total_remaining_translations"]) ? $context["total_remaining_translations"] : null), "html", null, true);
        echo "\" class=\"total-remaining-translations\"></span>
  </div>
  <form>
    <label>";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("(2 characters at least)", array(), "Admin.International.Feature"), "html", null, true);
        echo "</label>
    <div class=\"form-inline\">
      <input class=\"form-control search\"
             pattern=\".{2,}\"
             placeholder=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Search a word or expression, e.g.: \"Order confirmation\"", array(), "Admin.International.Help"), "html", null, true);
        echo "\"
             type=\"search\"
             id=\"jetsSearch\"
      />
      <input class=\"btn btn-primary search-button\" type=\"submit\" value=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Search", array(), "Admin.Actions"), "html", null, true);
        echo "\" />
      <input class=\"btn btn-tertiary-outline\" type=\"reset\" value=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Reset", array(), "Admin.Actions"), "html", null, true);
        echo "\" />
    </div>
  </form>
  <div class=\"hide alert alert-warning\">
    <i class=\"material-icons\">info_outline</i>
    <span>";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("No results found", array(), "Admin.Notifications.Error"), "html", null, true);
        echo "</span>
  </div>
  ";
        // line 52
        $this->loadTemplate("PrestaShopBundle:Admin/Translations/include:translations-forms.html.twig", "PrestaShopBundle:Admin\\Translations:list.html.twig", 52)->display($context);
        // line 53
        echo "</div>

<form method=\"post\" id=\"messages-fragments\" action=\"";
        // line 55
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_international_translations_messages_fragments");
        echo "\">
  <input type=\"hidden\" name=\"lang\" value=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["requestParams"]) ? $context["requestParams"] : null), "lang", array()), "html", null, true);
        echo "\">
  <input type=\"hidden\" name=\"type\" value=\"";
        // line 57
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["requestParams"]) ? $context["requestParams"] : null), "type", array()), "html", null, true);
        echo "\">
  <input type=\"hidden\" name=\"theme\" value=\"";
        // line 58
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["requestParams"]) ? $context["requestParams"] : null), "theme", array()), "html", null, true);
        echo "\">
</form>

<div class=\"container-fluid\">
  <div class=\"row\">
    ";
        // line 63
        $this->loadTemplate("PrestaShopBundle:Admin/Translations/include:translations-tree.html.twig", "PrestaShopBundle:Admin\\Translations:list.html.twig", 63)->display($context);
        // line 64
        echo "    <div class=\"translation-domains col-xs-6\">
      <h1 id=\"domain\">
        <span class=\"name\"></span>
        <span class=\"separator hide\">-</span>
        <span class=\"missing-translations\"></span>
      </h1>
      <p class=\"missing-translations-paragraph\"></p>
      <div class=\"navbar-container pull-right\"></div>
      <div class=\"forms-container\">
      </div>
    </div>
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "PrestaShopBundle:Admin\\Translations:list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  109 => 64,  107 => 63,  99 => 58,  95 => 57,  91 => 56,  87 => 55,  83 => 53,  81 => 52,  76 => 50,  68 => 45,  64 => 44,  57 => 40,  50 => 36,  44 => 33,  39 => 31,  34 => 29,  31 => 28,  28 => 27,  11 => 25,);
    }

    public function getSource()
    {
        return "";
    }
}
