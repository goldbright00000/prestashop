<?php

/* ::base.html.twig */
class __TwigTemplate_2b308c3daacc1ced7c1fdb1656862e3f2826589f0fc1625b4b31b9f9b1966389 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 25
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 29
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 30
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 31
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 34
        $this->displayBlock('body', $context, $blocks);
        // line 35
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 36
        echo "    </body>
</html>
";
    }

    // line 29
    public function block_title($context, array $blocks = array())
    {
        echo "Welcome!";
    }

    // line 30
    public function block_stylesheets($context, array $blocks = array())
    {
    }

    // line 34
    public function block_body($context, array $blocks = array())
    {
    }

    // line 35
    public function block_javascripts($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 35,  64 => 34,  59 => 30,  53 => 29,  47 => 36,  44 => 35,  42 => 34,  35 => 31,  33 => 30,  29 => 29,  23 => 25,);
    }

    public function getSource()
    {
        return "";
    }
}
