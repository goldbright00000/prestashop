<?php

/* @PrestaShop/Admin/Module/Includes/modal_read_more_content.html.twig */
class __TwigTemplate_b8bc9083077c402cb2267b7330e33fefda2eda894314e0eac40937f681903154 extends Twig_Template
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
        $context["ats"] = $this->getAttribute((isset($context["module"]) ? $context["module"] : null), "attributes", array());
        // line 26
        list($context["name"], $context["displayName"], $context["nbRates"], $context["starsRate"], $context["img"], $context["serviceUrl"], $context["version"], $context["cover"], $context["additionalDescription"], $context["fullDescription"], $context["changeLog"], $context["customerBenefits"], $context["demoVideo"], $context["author"], $context["notFoundImg"], $context["features"], $context["badges"]) =         array($this->getAttribute(        // line 29
(isset($context["ats"]) ? $context["ats"] : null), "name", array()), $this->getAttribute((isset($context["ats"]) ? $context["ats"] : null), "displayName", array()), $this->getAttribute((isset($context["ats"]) ? $context["ats"] : null), "nbRates", array()), $this->getAttribute((isset($context["ats"]) ? $context["ats"] : null), "starsRate", array()), $this->getAttribute((isset($context["ats"]) ? $context["ats"] : null), "img", array()), ((($this->getAttribute(        // line 30
(isset($context["ats"]) ? $context["ats"] : null), "serviceUrl", array(), "any", true, true) && (twig_length_filter($this->env, $this->getAttribute((isset($context["ats"]) ? $context["ats"] : null), "serviceUrl", array())) > 0))) ? ($this->getAttribute((isset($context["ats"]) ? $context["ats"] : null), "serviceUrl", array())) : (false)), $this->getAttribute(        // line 31
(isset($context["ats"]) ? $context["ats"] : null), "version", array()), $this->getAttribute((isset($context["ats"]) ? $context["ats"] : null), "cover", array()), ((($this->getAttribute(        // line 32
(isset($context["ats"]) ? $context["ats"] : null), "additionalDescription", array(), "any", true, true) && (twig_length_filter($this->env, $this->getAttribute((isset($context["ats"]) ? $context["ats"] : null), "additionalDescription", array())) > 0))) ? ($this->getAttribute((isset($context["ats"]) ? $context["ats"] : null), "additionalDescription", array())) : (false)), ((($this->getAttribute(        // line 33
(isset($context["ats"]) ? $context["ats"] : null), "fullDescription", array(), "any", true, true) && (twig_length_filter($this->env, $this->getAttribute((isset($context["ats"]) ? $context["ats"] : null), "fullDescription", array())) > 0))) ? ($this->getAttribute((isset($context["ats"]) ? $context["ats"] : null), "fullDescription", array())) : (false)), ((($this->getAttribute(        // line 34
(isset($context["ats"]) ? $context["ats"] : null), "changeLog", array(), "any", true, true) && (twig_length_filter($this->env, $this->getAttribute((isset($context["ats"]) ? $context["ats"] : null), "changeLog", array())) > 0))) ? ($this->getAttribute((isset($context["ats"]) ? $context["ats"] : null), "changeLog", array())) : (false)), ((($this->getAttribute(        // line 35
(isset($context["ats"]) ? $context["ats"] : null), "customer_benefits", array(), "any", true, true) && (twig_length_filter($this->env, $this->getAttribute((isset($context["ats"]) ? $context["ats"] : null), "customer_benefits", array())) > 0))) ? ($this->getAttribute((isset($context["ats"]) ? $context["ats"] : null), "customer_benefits", array())) : (false)), ((($this->getAttribute(        // line 36
(isset($context["ats"]) ? $context["ats"] : null), "demo_video", array(), "any", true, true) && (twig_length_filter($this->env, $this->getAttribute((isset($context["ats"]) ? $context["ats"] : null), "demo_video", array())) > 0))) ? ($this->getAttribute((isset($context["ats"]) ? $context["ats"] : null), "demo_video", array())) : (false)), $this->getAttribute(        // line 37
(isset($context["ats"]) ? $context["ats"] : null), "author", array()), "https://cdn4.iconfinder.com/data/icons/ballicons-2-free/100/box-512.png", $this->getAttribute(        // line 38
(isset($context["ats"]) ? $context["ats"] : null), "features", array()), ((($this->getAttribute(        // line 39
(isset($context["ats"]) ? $context["ats"] : null), "badges", array(), "any", true, true) && (twig_length_filter($this->env, $this->getAttribute((isset($context["ats"]) ? $context["ats"] : null), "badges", array())) > 0))) ? ($this->getAttribute((isset($context["ats"]) ? $context["ats"] : null), "badges", array())) : (false)));
        // line 41
        echo "<div class=\"modal-dialog module-modal-dialog\">
  <!-- Modal content-->
  <div class=\"modal-content module-modal-content no-padding\">
    <div class=\"modal-header module-modal-header\">
      <button aria-label=\"Close\" data-dismiss=\"modal\" class=\"close\" type=\"button\">
          <span aria-hidden=\"true\">
            <i class=\"material-icons\">close</i>
          </span>
      </button>
      ";
        // line 50
        if (((isset($context["nbRates"]) ? $context["nbRates"] : null) > 0)) {
            // line 51
            echo "        <div class=\"read-more-stars module-star-ranking-grid-";
            echo twig_escape_filter($this->env, (isset($context["starsRate"]) ? $context["starsRate"] : null), "html", null, true);
            echo "\">
          (
          ";
            // line 53
            echo twig_escape_filter($this->env, (isset($context["nbRates"]) ? $context["nbRates"] : null), "html", null, true);
            echo "
          )
        </div>
      ";
        }
        // line 57
        echo "      <div>
        <img class=\"module-logo-thumb\" height=\"57\" width=\"57\" src=\"";
        // line 58
        echo twig_escape_filter($this->env, (isset($context["img"]) ? $context["img"] : null), "html", null, true);
        echo "\" alt=\"";
        echo twig_escape_filter($this->env, (isset($context["displayName"]) ? $context["displayName"] : null), "html", null, true);
        echo "\"/>
        <div class=\"modal-title module-modal-title\">
          <h1>";
        // line 60
        echo twig_escape_filter($this->env, (isset($context["displayName"]) ? $context["displayName"] : null), "html", null, true);
        echo "<br>
            <small class=\"version\">
              ";
        // line 62
        if ((array_key_exists("serviceUrl", $context) && (twig_length_filter($this->env, (isset($context["serviceUrl"]) ? $context["serviceUrl"] : null)) > 0))) {
            // line 63
            echo "                ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Service by %author%", array("%author%" => (isset($context["author"]) ? $context["author"] : null)), "Admin.Modules.Feature"), "html", null, true);
            echo "
              ";
        } else {
            // line 65
            echo "                ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("v%version% by %author%", array("%version%" => (isset($context["version"]) ? $context["version"] : null), "%author%" => (isset($context["author"]) ? $context["author"] : null)), "Admin.Modules.Feature"), "html", null, true);
            echo "
              ";
        }
        // line 67
        echo "            </small>
          </h1>

        </div>
      </div>
    </div>

    <div class=\"modal-body row module-modal-body\">
      <div class=\"col-md-12 module-big-cover\">
        <img src=\"";
        // line 76
        if ($this->getAttribute((isset($context["cover"]) ? $context["cover"] : null), "big", array(), "any", true, true)) {
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cover"]) ? $context["cover"] : null), "big", array()), "html", null, true);
        } else {
            echo twig_escape_filter($this->env, (isset($context["notFoundImg"]) ? $context["notFoundImg"] : null), "html", null, true);
        }
        echo "\"/>
      </div>
      <div class=\"col-md-12 module-menu-readmore\">
        <nav class=\"navbar navbar-light\">
          ";
        // line 81
        echo "          <ul class=\"nav navbar-nav navbar-separator\">
            <li class=\"nav-item active\">
              <a class=\"nav-link module-readmore-tab\" data-toggle=\"tab\" href=\"#overview-";
        // line 83
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : null), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Overview", array(), "Admin.Modules.Feature"), "html", null, true);
        echo "</a>
            </li>
            ";
        // line 85
        if ((isset($context["additionalDescription"]) ? $context["additionalDescription"] : null)) {
            // line 86
            echo "              <li class=\"nav-item\">
                <a class=\"nav-link module-readmore-tab\" data-toggle=\"tab\" href=\"#additional-";
            // line 87
            echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : null), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Additional information", array(), "Admin.Modules.Feature"), "html", null, true);
            echo "</a>
              </li>
            ";
        }
        // line 90
        echo "            ";
        if ((isset($context["customerBenefits"]) ? $context["customerBenefits"] : null)) {
            // line 91
            echo "              <li class=\"nav-item\">
                <a class=\"nav-link module-readmore-tab\" data-toggle=\"tab\" href=\"#customer_benefits-";
            // line 92
            echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : null), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Benefits", array(), "Admin.Modules.Feature"), "html", null, true);
            echo "</a>
              </li>
            ";
        }
        // line 95
        echo "            ";
        if ((isset($context["features"]) ? $context["features"] : null)) {
            // line 96
            echo "              <li class=\"nav-item\">
                <a class=\"nav-link module-readmore-tab\" data-toggle=\"tab\" href=\"#features-";
            // line 97
            echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : null), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Features", array(), "Admin.Modules.Feature"), "html", null, true);
            echo "</a>
              </li>
            ";
        }
        // line 100
        echo "            ";
        if ((isset($context["demoVideo"]) ? $context["demoVideo"] : null)) {
            // line 101
            echo "              <li class=\"nav-item\">
                <a class=\"nav-link module-readmore-tab\" data-toggle=\"tab\" href=\"#demo_video-";
            // line 102
            echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : null), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Demo video", array(), "Admin.Modules.Feature"), "html", null, true);
            echo "</a>
              </li>
            ";
        }
        // line 105
        echo "            ";
        if ((isset($context["changeLog"]) ? $context["changeLog"] : null)) {
            // line 106
            echo "              <li class=\"nav-item\">
                <a class=\"nav-link module-readmore-tab\" data-toggle=\"tab\" href=\"#changelog-";
            // line 107
            echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : null), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Changelog", array(), "Admin.Modules.Feature"), "html", null, true);
            echo "</a>
              </li>
            ";
        }
        // line 110
        echo "            ";
        // line 111
        echo "          </ul>
        </nav>
        <div class=\"tab-content\">
          ";
        // line 115
        echo "          <div id=\"overview-";
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : null), "html", null, true);
        echo "\" class=\"tab-pane fade in active\">
            <p class=\"module-readmore-tab-content\">
              ";
        // line 117
        if ((isset($context["fullDescription"]) ? $context["fullDescription"] : null)) {
            // line 118
            echo "                ";
            echo (isset($context["fullDescription"]) ? $context["fullDescription"] : null);
            echo "
              ";
        } else {
            // line 120
            echo "                ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("No description found for this module :(", array(), "Admin.Modules.Notification"), "html", null, true);
            echo "
              ";
        }
        // line 122
        echo "            </p>
          </div>

          <div id=\"additional-";
        // line 125
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : null), "html", null, true);
        echo "\" class=\"tab-pane fade\">
            <p class=\"module-readmore-tab-content\">
              ";
        // line 127
        if ((isset($context["additionalDescription"]) ? $context["additionalDescription"] : null)) {
            // line 128
            echo "                ";
            echo (isset($context["additionalDescription"]) ? $context["additionalDescription"] : null);
            echo "
              ";
        } else {
            // line 130
            echo "                ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("No additional description provided for this module :(", array(), "Admin.Modules.Notification"), "html", null, true);
            echo "
              ";
        }
        // line 132
        echo "            </p>
          </div>

          <div id=\"features-";
        // line 135
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : null), "html", null, true);
        echo "\" class=\"tab-pane fade\">
            <p class=\"module-readmore-tab-content\">
              ";
        // line 137
        if ((isset($context["features"]) ? $context["features"] : null)) {
            // line 138
            echo "                ";
            echo (isset($context["features"]) ? $context["features"] : null);
            echo "
              ";
        } else {
            // line 140
            echo "                ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("No feature list provided for this module :(", array(), "Admin.Modules.Notification"), "html", null, true);
            echo "
              ";
        }
        // line 142
        echo "            </p>
          </div>

          <div id=\"customer_benefits-";
        // line 145
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : null), "html", null, true);
        echo "\" class=\"tab-pane fade\">
            <p class=\"module-readmore-tab-content\">
              ";
        // line 147
        if ((isset($context["customerBenefits"]) ? $context["customerBenefits"] : null)) {
            // line 148
            echo "                ";
            echo (isset($context["customerBenefits"]) ? $context["customerBenefits"] : null);
            echo "
              ";
        } else {
            // line 150
            echo "                ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("No customer benefits notes found for this module :(", array(), "Admin.Modules.Notification"), "html", null, true);
            echo "
              ";
        }
        // line 152
        echo "            </p>
          </div>

          <div id=\"demo_video-";
        // line 155
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : null), "html", null, true);
        echo "\" class=\"tab-pane fade\">
            <p class=\"module-readmore-tab-content\">
              ";
        // line 157
        if ((isset($context["demoVideo"]) ? $context["demoVideo"] : null)) {
            // line 158
            echo "                ";
            echo $this->env->getExtension('PrestaShopBundle\Twig\LayoutExtension')->getYoutubeLink((isset($context["demoVideo"]) ? $context["demoVideo"] : null));
            echo "
              ";
        } else {
            // line 160
            echo "                ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("No demonstration video found for this module :(", array(), "Admin.Modules.Notification"), "html", null, true);
            echo "
              ";
        }
        // line 162
        echo "            </p>
          </div>

          <div id=\"changelog-";
        // line 165
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : null), "html", null, true);
        echo "\" class=\"tab-pane fade\">
            ";
        // line 166
        if ((isset($context["changeLog"]) ? $context["changeLog"] : null)) {
            // line 167
            echo "              <ul class=\"module-readmore-tab-content\">
                ";
            // line 168
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_reverse_filter($this->env, $this->env->getExtension('PrestaShopBundle\Twig\DataFormatterExtension')->arrayCast((isset($context["changeLog"]) ? $context["changeLog"] : null))));
            foreach ($context['_seq'] as $context["version"] => $context["lines"]) {
                // line 169
                echo "                  <li>
                    <b>";
                // line 170
                echo twig_escape_filter($this->env, $context["version"], "html", null, true);
                echo ":</b>
                    ";
                // line 171
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["lines"]);
                foreach ($context['_seq'] as $context["_key"] => $context["line"]) {
                    // line 172
                    echo "                      ";
                    echo twig_escape_filter($this->env, $context["line"], "html", null, true);
                    echo "<br/>
                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['line'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 174
                echo "                  </li>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['version'], $context['lines'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 176
            echo "              </ul>
            ";
        } else {
            // line 178
            echo "              ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("No changelog provided for this module :(", array(), "Admin.Modules.Notification"), "html", null, true);
            echo "
            ";
        }
        // line 180
        echo "          </div>
          ";
        // line 182
        echo "        </div>
      </div>
    </div>

    <div class=\"modal-footer module-modal-footer\">
      ";
        // line 187
        if ((isset($context["badges"]) ? $context["badges"] : null)) {
            // line 188
            echo "        <div class=\"pull-left module-badges-display\">
          ";
            // line 189
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["badges"]) ? $context["badges"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["badge"]) {
                // line 190
                echo "            <img src=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["badge"], "img", array()), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["badge"], "label", array()), "html", null, true);
                echo "\"/>
            ";
                // line 191
                echo twig_escape_filter($this->env, $this->getAttribute($context["badge"], "label", array()), "html", null, true);
                echo "
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['badge'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 193
            echo "        </div>
      ";
        }
        // line 195
        echo "      ";
        $this->loadTemplate("PrestaShopBundle:Admin/Module/Includes:action_menu.html.twig", "@PrestaShop/Admin/Module/Includes/modal_read_more_content.html.twig", 195)->display(array_merge($context, array("module" => (isset($context["module"]) ? $context["module"] : null), "level" => (isset($context["level"]) ? $context["level"] : null))));
        // line 196
        echo "    </div>
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Module/Includes/modal_read_more_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  410 => 196,  407 => 195,  403 => 193,  395 => 191,  388 => 190,  384 => 189,  381 => 188,  379 => 187,  372 => 182,  369 => 180,  363 => 178,  359 => 176,  352 => 174,  343 => 172,  339 => 171,  335 => 170,  332 => 169,  328 => 168,  325 => 167,  323 => 166,  319 => 165,  314 => 162,  308 => 160,  302 => 158,  300 => 157,  295 => 155,  290 => 152,  284 => 150,  278 => 148,  276 => 147,  271 => 145,  266 => 142,  260 => 140,  254 => 138,  252 => 137,  247 => 135,  242 => 132,  236 => 130,  230 => 128,  228 => 127,  223 => 125,  218 => 122,  212 => 120,  206 => 118,  204 => 117,  198 => 115,  193 => 111,  191 => 110,  183 => 107,  180 => 106,  177 => 105,  169 => 102,  166 => 101,  163 => 100,  155 => 97,  152 => 96,  149 => 95,  141 => 92,  138 => 91,  135 => 90,  127 => 87,  124 => 86,  122 => 85,  115 => 83,  111 => 81,  100 => 76,  89 => 67,  83 => 65,  77 => 63,  75 => 62,  70 => 60,  63 => 58,  60 => 57,  53 => 53,  47 => 51,  45 => 50,  34 => 41,  32 => 39,  31 => 38,  30 => 37,  29 => 36,  28 => 35,  27 => 34,  26 => 33,  25 => 32,  24 => 31,  23 => 30,  22 => 29,  21 => 26,  19 => 25,);
    }

    public function getSource()
    {
        return "";
    }
}
