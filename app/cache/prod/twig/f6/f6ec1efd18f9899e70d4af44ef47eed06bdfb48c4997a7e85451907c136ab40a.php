<?php

/* PrestaShopBundle:Admin/Module:manage.html.twig */
class __TwigTemplate_0f87f90ec2abbbfdc5e1dd8e7c3113f4dd8298ea04cdb55ddb0b98e8673e0f6a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 25
        $this->parent = $this->loadTemplate("PrestaShopBundle:Admin:layout.html.twig", "PrestaShopBundle:Admin/Module:manage.html.twig", 25);
        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "PrestaShopBundle:Admin:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 114
        $context["js_translatable"] = twig_array_merge(array("Bulk Action - One module minimum" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("You need to select at least one module to use the bulk action.", array(), "Admin.Modules.Notification"), "Bulk Action - Request not found" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("The action \"[1]\" is not available, impossible to perform your request.", array(), "Admin.Modules.Notification"), "Bulk Action - Request not available for module" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("The action [1] is not available for module [2]. Skipped.", array(), "Admin.Modules.Notification")),         // line 118
(isset($context["js_translatable"]) ? $context["js_translatable"] : null));
        // line 25
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 27
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 28
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("themes/default/css/bundle/module/drop.css"), "html", null, true);
        echo "\" />
    <link rel=\"stylesheet\" href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("themes/default/css/bundle/plugins/jquery.pstagger.css"), "html", null, true);
        echo "\" />
";
    }

    // line 33
    public function block_javascripts($context, array $blocks = array())
    {
        // line 34
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script src=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("themes/default/js/bundle/plugins/jquery.pstagger.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("themes/default/js/bundle/module/loader.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("themes/default/js/bundle/module/module_card.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("themes/default/js/bundle/module/module.js"), "html", null, true);
        echo "\"></script>
";
    }

    // line 41
    public function block_content($context, array $blocks = array())
    {
        // line 42
        echo "    <div class=\"row\">
        <div class=\"col-lg-10 col-lg-offset-1\">
            ";
        // line 45
        echo "            ";
        $this->loadTemplate("PrestaShopBundle:Admin/Module/Includes:modal_confirm_bulk_action.html.twig", "PrestaShopBundle:Admin/Module:manage.html.twig", 45)->display($context);
        // line 46
        echo "            ";
        // line 47
        echo "            ";
        $this->loadTemplate("PrestaShopBundle:Admin/Module/Includes:modal_addons_connect.html.twig", "PrestaShopBundle:Admin/Module:manage.html.twig", 47)->display(array_merge($context, array("level" => (isset($context["level"]) ? $context["level"] : null), "errorMessage" => (isset($context["errorMessage"]) ? $context["errorMessage"] : null))));
        // line 48
        echo "            ";
        // line 49
        echo "            ";
        $this->loadTemplate("PrestaShopBundle:Admin/Module/Includes:modal_import.html.twig", "PrestaShopBundle:Admin/Module:manage.html.twig", 49)->display(array_merge($context, array("level" => (isset($context["level"]) ? $context["level"] : null), "errorMessage" => (isset($context["errorMessage"]) ? $context["errorMessage"] : null))));
        // line 50
        echo "            ";
        // line 51
        echo "            ";
        $this->loadTemplate("PrestaShopBundle:Admin/Module/Includes:menu_top.html.twig", "PrestaShopBundle:Admin/Module:manage.html.twig", 51)->display(array_merge($context, array("topMenuData" => (isset($context["topMenuData"]) ? $context["topMenuData"] : null))));
        // line 52
        echo "            <div class=\"module-sorting-menu\">
                <div class=\"row\">
                    <div class=\"col-lg-12\">
                        ";
        // line 55
        if (((isset($context["level"]) ? $context["level"] : null) > twig_constant("PrestaShopBundle\\Security\\Voter\\PageVoter::LEVEL_UPDATE"))) {
            // line 56
            echo "                            <div class=\"module-sorting module-bulk-actions pull-right\">
                                <select class=\"c-select c-select-sm\">
                                  <option value=\"\" disabled selected>";
            // line 58
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Bulk Actions", array(), "Admin.Global"), "html", null, true);
            echo "</option>
                                  <option value=\"bulk-uninstall\">";
            // line 59
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Uninstall", array(), "Admin.Actions"), "html", null, true);
            echo "</option>
                                  <option value=\"bulk-disable\">";
            // line 60
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Disable", array(), "Admin.Actions"), "html", null, true);
            echo "</option>
                                  <option value=\"bulk-enable\">";
            // line 61
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Enable", array(), "Admin.Actions"), "html", null, true);
            echo "</option>
                                  <option value=\"bulk-reset\">";
            // line 62
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Reset", array(), "Admin.Actions"), "html", null, true);
            echo "</option>
                                  <option value=\"bulk-enable-mobile\">";
            // line 63
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Enable Mobile", array(), "Admin.Modules.Feature"), "html", null, true);
            echo "</option>
                                  <option value=\"bulk-disable-mobile\">";
            // line 64
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Disable Mobile", array(), "Admin.Modules.Feature"), "html", null, true);
            echo "</option>
                                </select>
                            </div>
                        ";
        }
        // line 68
        echo "                        <div class=\"module-sorting module-sorting-author pull-right\">
                            <select class=\"c-select c-select-sm\">
                              <option value=\"\" disabled>- ";
        // line 70
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Sort by", array(), "Admin.Actions"), "html", null, true);
        echo " -</option>
                              <option value=\"name\">";
        // line 71
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Name", array(), "Admin.Global"), "html", null, true);
        echo "</option>
                              <option value=\"access-desc\" selected>";
        // line 72
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Last access", array(), "Admin.Modules.Feature"), "html", null, true);
        echo "</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>

            ";
        // line 80
        echo "\t\t<div class=\"module-short-list\">
\t\t\t<span class=\"module-search-result-wording\">";
        // line 81
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("%nbModules% installed modules", array("%nbModules%" => twig_length_filter($this->env, $this->getAttribute((isset($context["modules"]) ? $context["modules"] : null), "modules", array()))), "Admin.Modules.Feature"), "html", null, true);
        echo "</span>
                           <span class=\"help-box\" data-toggle=\"popover\"
                                data-title=\"";
        // line 83
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Installed modules", array(), "Admin.Modules.Feature"), "html", null, true);
        echo "\"
                                data-content=\"";
        // line 84
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("These are all the modules you’ve added to your shop, either by buying it from PrestaShop Addons, or by uploading it directly.", array(), "Admin.Modules.Help"), "html", null, true);
        echo "\">
                           </span>
                   </div>
\t\t";
        // line 87
        $this->loadTemplate("PrestaShopBundle:Admin/Module/Includes:grid_manage_installed.html.twig", "PrestaShopBundle:Admin/Module:manage.html.twig", 87)->display(array_merge($context, array("modules" => $this->getAttribute((isset($context["modules"]) ? $context["modules"] : null), "modules", array()), "display_type" => "list", "origin" => "manage", "id" => "all")));
        // line 88
        echo "
\t\t<hr class=\"top-menu-separator\">

\t\t<div class=\"module-short-list\">
\t\t\t<span class=\"module-search-result-wording\">";
        // line 92
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("%nbModules% built-in modules", array("%nbModules%" => twig_length_filter($this->env, $this->getAttribute((isset($context["modules"]) ? $context["modules"] : null), "native_modules", array()))), "Admin.Modules.Feature"), "html", null, true);
        echo "</span>
                           <span class=\"help-box\" data-toggle=\"popover\"
                                 data-title=\"";
        // line 94
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Built-in modules", array(), "Admin.Modules.Feature"), "html", null, true);
        echo "\"
                                data-content=\"";
        // line 95
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("These modules from PrestaShop are preinstalled when you set-up your shop. They cover the basics of e-commerce and comes for free.", array(), "Admin.Modules.Help"), "html", null, true);
        echo "\">
                           </span>
\t\t</div>
\t\t";
        // line 98
        $this->loadTemplate("PrestaShopBundle:Admin/Module/Includes:grid_manage_installed.html.twig", "PrestaShopBundle:Admin/Module:manage.html.twig", 98)->display(array_merge($context, array("modules" => $this->getAttribute((isset($context["modules"]) ? $context["modules"] : null), "native_modules", array()), "display_type" => "list", "origin" => "manage", "id" => "native")));
        // line 99
        echo "
\t\t<hr class=\"top-menu-separator\">

\t\t<div class=\"module-short-list\">
\t\t\t<span class=\"module-search-result-wording\">";
        // line 103
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("%nbModules% theme modules", array("%nbModules%" => twig_length_filter($this->env, $this->getAttribute((isset($context["modules"]) ? $context["modules"] : null), "theme_bundle", array()))), "Admin.Modules.Feature"), "html", null, true);
        echo "</span>
                           <span class=\"help-box\" data-toggle=\"popover\"
                                data-title=\"";
        // line 105
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Theme modules", array(), "Admin.Modules.Feature"), "html", null, true);
        echo "\"
                                data-content=\"";
        // line 106
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Each theme you install will come with its own set of modules. You’ll find here all the modules related to your active theme.", array(), "Admin.Modules.Help"), "html", null, true);
        echo "\">
                           </span>
\t\t</div>
\t\t";
        // line 109
        $this->loadTemplate("PrestaShopBundle:Admin/Module/Includes:grid_manage_installed.html.twig", "PrestaShopBundle:Admin/Module:manage.html.twig", 109)->display(array_merge($context, array("modules" => $this->getAttribute((isset($context["modules"]) ? $context["modules"] : null), "theme_bundle", array()), "display_type" => "list", "origin" => "manage", "id" => "theme")));
        // line 110
        echo "        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "PrestaShopBundle:Admin/Module:manage.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  233 => 110,  231 => 109,  225 => 106,  221 => 105,  216 => 103,  210 => 99,  208 => 98,  202 => 95,  198 => 94,  193 => 92,  187 => 88,  185 => 87,  179 => 84,  175 => 83,  170 => 81,  167 => 80,  157 => 72,  153 => 71,  149 => 70,  145 => 68,  138 => 64,  134 => 63,  130 => 62,  126 => 61,  122 => 60,  118 => 59,  114 => 58,  110 => 56,  108 => 55,  103 => 52,  100 => 51,  98 => 50,  95 => 49,  93 => 48,  90 => 47,  88 => 46,  85 => 45,  81 => 42,  78 => 41,  72 => 38,  68 => 37,  64 => 36,  60 => 35,  55 => 34,  52 => 33,  46 => 30,  42 => 29,  37 => 28,  34 => 27,  30 => 25,  28 => 118,  27 => 114,  11 => 25,);
    }

    public function getSource()
    {
        return "";
    }
}
