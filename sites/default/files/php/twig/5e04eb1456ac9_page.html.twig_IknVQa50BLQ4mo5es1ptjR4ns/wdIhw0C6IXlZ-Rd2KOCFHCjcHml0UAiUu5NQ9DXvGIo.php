<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* themes/magazine_lite/templates/page.html.twig */
class __TwigTemplate_e1991bce659cfded6d4052ca2e89065679a7c838ac2ce1c03f8a11cefd7fd44f extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["if" => 77];
        $filters = ["escape" => 79, "t" => 202];
        $functions = ["path" => 202];

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['escape', 't'],
                ['path']
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->getSourceContext());

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 77
        if ($this->getAttribute(($context["page"] ?? null), "slideout", [])) {
            // line 78
            echo "  ";
            // line 79
            echo "  <div class=\"clearfix slideout ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["slideout_background_color"] ?? null)), "html", null, true);
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["slideout_blocks_paddings"] ?? null)) ? (" region--no-block-paddings") : ("")));
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["slideout_region_paddings"] ?? null)) ? (" region--no-paddings") : ("")));
            echo "\">
    ";
            // line 81
            echo "    <div class=\"clearfix slideout__container\">
      <div class=\"slideout__section\">
        ";
            // line 83
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "slideout", [])), "html", null, true);
            echo "
      </div>
    </div>
    ";
            // line 87
            echo "  </div>
  ";
            // line 89
            echo "
  ";
            // line 91
            echo "  <button class=\"slideout-toggle slideout-toggle--fixed\"><i class=\"fa fa-align-justify\"></i></button>
  ";
        }
        // line 94
        echo "
";
        // line 96
        echo "<div class=\"page-container\">

  ";
        // line 98
        if ($this->getAttribute(($context["page"] ?? null), "pre_header", [])) {
            // line 99
            echo "    ";
            // line 100
            echo "    <div class=\"clearfix pre-header ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["pre_header_background_color"] ?? null)), "html", null, true);
            echo " ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["pre_header_separator"] ?? null)), "html", null, true);
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["pre_header_blocks_paddings"] ?? null)) ? (" region--no-block-paddings") : ("")));
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["pre_header_region_paddings"] ?? null)) ? (" region--no-paddings") : ("")));
            echo "\">
      <div class=\"";
            // line 101
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["pre_header_layout_container"] ?? null)), "html", null, true);
            echo "\">
        ";
            // line 103
            echo "        <div class=\"clearfix pre-header__container\">
          <div class=\"row\">
            <div class=\"col-md-12\">
              <div class=\"clearfix pre-header__section\">
                ";
            // line 107
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "pre_header", [])), "html", null, true);
            echo "
              </div>
            </div>
          </div>
        </div>
        ";
            // line 113
            echo "      </div>
    </div>
    ";
            // line 116
            echo "  ";
        }
        // line 117
        echo "
  ";
        // line 118
        if ((((((($this->getAttribute(($context["page"] ?? null), "header_top_first", []) || $this->getAttribute(($context["page"] ?? null), "header_top_second", [])) || $this->getAttribute(($context["page"] ?? null), "header_first", [])) || $this->getAttribute(($context["page"] ?? null), "header", [])) || $this->getAttribute(($context["page"] ?? null), "header_third", [])) || $this->getAttribute(($context["page"] ?? null), "header_top_highlighted_first", [])) || $this->getAttribute(($context["page"] ?? null), "header_top_highlighted_second", []))) {
            // line 119
            echo "    ";
            // line 120
            echo "    <div class=\"header-container\">

      ";
            // line 122
            if (($this->getAttribute(($context["page"] ?? null), "header_top_highlighted_first", []) || $this->getAttribute(($context["page"] ?? null), "header_top_highlighted_second", []))) {
                // line 123
                echo "        ";
                // line 124
                echo "        <div class=\"clearfix header-top-highlighted ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["header_top_highlighted_background_color"] ?? null)), "html", null, true);
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["header_top_highlighted_blocks_paddings"] ?? null)) ? (" region--no-block-paddings") : ("")));
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["header_top_highlighted_region_paddings"] ?? null)) ? (" region--no-paddings") : ("")));
                echo "\">
          <div class=\"";
                // line 125
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["header_top_highlighted_layout_container"] ?? null)), "html", null, true);
                echo "\">
            ";
                // line 127
                echo "            <div class=\"clearfix header-top-highlighted__container";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar((((($context["header_top_highlighted_animations"] ?? null) == "enabled")) ? (" fade") : ("")));
                echo "\"
              ";
                // line 128
                if ((($context["header_top_highlighted_animations"] ?? null) == "enabled")) {
                    // line 129
                    echo "                data-animate-effect=\"";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["header_top_highlighted_animation_effect"] ?? null)), "html", null, true);
                    echo "\"
              ";
                }
                // line 130
                echo ">
              <div class=\"row\">
                ";
                // line 132
                if ($this->getAttribute(($context["page"] ?? null), "header_top_highlighted_first", [])) {
                    // line 133
                    echo "                  <div class=\"";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["header_top_highlighted_first_grid_class"] ?? null)), "html", null, true);
                    echo "\">
                    ";
                    // line 135
                    echo "                    <div class=\"clearfix header-top-highlighted__section header-top-highlighted-first\">
                      ";
                    // line 136
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "header_top_highlighted_first", [])), "html", null, true);
                    echo "
                    </div>
                    ";
                    // line 139
                    echo "                  </div>
                ";
                }
                // line 141
                echo "                ";
                if ($this->getAttribute(($context["page"] ?? null), "header_top_highlighted_second", [])) {
                    // line 142
                    echo "                  <div class=\"";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["header_top_highlighted_second_grid_class"] ?? null)), "html", null, true);
                    echo "\">
                    ";
                    // line 144
                    echo "                    <div class=\"clearfix header-top-highlighted__section header-top-highlighted-second\">
                      ";
                    // line 145
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "header_top_highlighted_second", [])), "html", null, true);
                    echo "
                    </div>
                    ";
                    // line 148
                    echo "                  </div>
                ";
                }
                // line 150
                echo "              </div>
            </div>
            ";
                // line 153
                echo "          </div>
        </div>
        ";
                // line 156
                echo "      ";
            }
            // line 157
            echo "
      ";
            // line 158
            if (($this->getAttribute(($context["page"] ?? null), "header_top_first", []) || $this->getAttribute(($context["page"] ?? null), "header_top_second", []))) {
                // line 159
                echo "        ";
                // line 160
                echo "        <div class=\"clearfix header-top ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["header_top_background_color"] ?? null)), "html", null, true);
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["header_top_blocks_paddings"] ?? null)) ? (" region--no-block-paddings") : ("")));
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["header_top_region_paddings"] ?? null)) ? (" region--no-paddings") : ("")));
                echo "\">
          <div class=\"";
                // line 161
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["header_top_layout_container"] ?? null)), "html", null, true);
                echo "\">
            ";
                // line 163
                echo "            <div class=\"clearfix header-top__container";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar((((($context["header_top_animations"] ?? null) == "enabled")) ? (" fade") : ("")));
                echo "\"
              ";
                // line 164
                if ((($context["header_top_animations"] ?? null) == "enabled")) {
                    // line 165
                    echo "                data-animate-effect=\"";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["header_top_animation_effect"] ?? null)), "html", null, true);
                    echo "\"
              ";
                }
                // line 166
                echo ">
              <div class=\"row\">
                ";
                // line 168
                if ($this->getAttribute(($context["page"] ?? null), "header_top_first", [])) {
                    // line 169
                    echo "                  <div class=\"";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["header_top_first_grid_class"] ?? null)), "html", null, true);
                    echo "\">
                    ";
                    // line 171
                    echo "                    <div class=\"clearfix header-top__section header-top-first\">
                      ";
                    // line 172
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "header_top_first", [])), "html", null, true);
                    echo "
                    </div>
                    ";
                    // line 175
                    echo "                  </div>
                ";
                }
                // line 177
                echo "                ";
                if ($this->getAttribute(($context["page"] ?? null), "header_top_second", [])) {
                    // line 178
                    echo "                  <div class=\"";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["header_top_second_grid_class"] ?? null)), "html", null, true);
                    echo "\">
                    ";
                    // line 180
                    echo "                    <div class=\"clearfix header-top__section header-top-second\">
                      ";
                    // line 181
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "header_top_second", [])), "html", null, true);
                    echo "
                    </div>
                    ";
                    // line 184
                    echo "                  </div>
                ";
                }
                // line 186
                echo "              </div>
            </div>
            ";
                // line 189
                echo "          </div>
        </div>
        ";
                // line 192
                echo "      ";
            }
            // line 193
            echo "
      ";
            // line 194
            if ((($this->getAttribute(($context["page"] ?? null), "header_first", []) || $this->getAttribute(($context["page"] ?? null), "header", [])) || $this->getAttribute(($context["page"] ?? null), "header_third", []))) {
                // line 195
                echo "        ";
                // line 196
                echo "        <header role=\"banner\" class=\"clearfix header ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["header_background_color"] ?? null)), "html", null, true);
                echo " ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["header_layout_container_class"] ?? null)), "html", null, true);
                echo " ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["header_layout_columns_class"] ?? null)), "html", null, true);
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["header_blocks_paddings"] ?? null)) ? (" region--no-block-paddings") : ("")));
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["header_region_paddings"] ?? null)) ? (" region--no-paddings") : ("")));
                echo "\">

          ";
                // line 198
                if ((($context["mt_site_name"] ?? null) || ($context["mt_logo"] ?? null))) {
                    // line 199
                    echo "            <div class=\"onscroll-site-name-site-logo-container\">
              ";
                    // line 200
                    if (($context["mt_logo"] ?? null)) {
                        // line 201
                        echo "                <div class=\"onscroll-logo\">
                  <a href=\"";
                        // line 202
                        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\Core\Template\TwigExtension')->getPath("<front>"));
                        echo "\" title=\"";
                        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Home"));
                        echo "\" rel=\"home\"><img class=\"img-responsive\" src=\"";
                        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["mt_logo"] ?? null)), "html", null, true);
                        echo "\" /></a>
                </div>
              ";
                    }
                    // line 205
                    echo "              ";
                    if (($context["mt_site_name"] ?? null)) {
                        // line 206
                        echo "                <div class=\"onscroll-site-name site-name\">
                  <a href=\"";
                        // line 207
                        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\Core\Template\TwigExtension')->getPath("<front>"));
                        echo "\" title=\"";
                        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Home"));
                        echo "\" rel=\"home\">";
                        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["mt_site_name"] ?? null)), "html", null, true);
                        echo "</a>
                </div>
              ";
                    }
                    // line 210
                    echo "            </div>
          ";
                }
                // line 212
                echo "
          <div class=\"";
                // line 213
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["header_layout_container"] ?? null)), "html", null, true);
                echo "\">
            ";
                // line 215
                echo "            <div class=\"clearfix header__container\">
              <div class=\"row\">
                ";
                // line 217
                if ($this->getAttribute(($context["page"] ?? null), "header_third", [])) {
                    // line 218
                    echo "                  <div class=\"";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["header_third_grid_class"] ?? null)), "html", null, true);
                    echo "\">
                    ";
                    // line 220
                    echo "                    <div class=\"clearfix header__section header-third\">
                      ";
                    // line 221
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "header_third", [])), "html", null, true);
                    echo "
                    </div>
                    ";
                    // line 224
                    echo "                  </div>
                ";
                }
                // line 226
                echo "                ";
                if ($this->getAttribute(($context["page"] ?? null), "header_first", [])) {
                    // line 227
                    echo "                  <div class=\"";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["header_first_grid_class"] ?? null)), "html", null, true);
                    echo "\">
                    ";
                    // line 229
                    echo "                    <div class=\"clearfix header__section header-first\">
                      ";
                    // line 230
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "header_first", [])), "html", null, true);
                    echo "
                    </div>
                    ";
                    // line 233
                    echo "                  </div>
                ";
                }
                // line 235
                echo "                ";
                if ($this->getAttribute(($context["page"] ?? null), "header", [])) {
                    // line 236
                    echo "                  <div class=\"";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["header_second_grid_class"] ?? null)), "html", null, true);
                    echo "\">
                    ";
                    // line 238
                    echo "                    <div class=\"clearfix header__section header-second\">
                      ";
                    // line 239
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "header", [])), "html", null, true);
                    echo "
                    </div>
                    ";
                    // line 242
                    echo "                  </div>
                ";
                }
                // line 244
                echo "              </div>
            </div>
            ";
                // line 247
                echo "          </div>
        </header>
        ";
                // line 250
                echo "      ";
            }
            // line 251
            echo "
    </div>
    ";
            // line 254
            echo "  ";
        }
        // line 255
        echo "
  ";
        // line 256
        if ($this->getAttribute(($context["page"] ?? null), "banner", [])) {
            // line 257
            echo "    ";
            // line 258
            echo "    <div class=\"clearfix banner ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["banner_background_color"] ?? null)), "html", null, true);
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["banner_blocks_paddings"] ?? null)) ? (" region--no-block-paddings") : ("")));
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["banner_region_paddings"] ?? null)) ? (" region--no-paddings") : ("")));
            echo "\">
      <div class=\"";
            // line 259
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["banner_layout_container"] ?? null)), "html", null, true);
            echo "\">
        ";
            // line 261
            echo "        <div class=\"clearfix banner__container\">
          <div class=\"row\">
            <div class=\"col-md-12\">
              <div class=\"banner__section\">
                ";
            // line 265
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "banner", [])), "html", null, true);
            echo "
              </div>
            </div>
          </div>
        </div>
        ";
            // line 271
            echo "      </div>
    </div>
    ";
            // line 274
            echo "  ";
        }
        // line 275
        echo "
  ";
        // line 277
        echo "  <div id=\"page-start\" class=\"clearfix page-start\"></div>

  ";
        // line 279
        if ($this->getAttribute(($context["page"] ?? null), "system_messages", [])) {
            // line 280
            echo "    <div class=\"system-messages clearfix\">
      <div class=\"container\">
        <div class=\"row\">
          <div class=\"col-md-12\">
            ";
            // line 284
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "system_messages", [])), "html", null, true);
            echo "
          </div>
        </div>
      </div>
    </div>
  ";
        }
        // line 290
        echo "
  ";
        // line 291
        if ($this->getAttribute(($context["page"] ?? null), "highlighted_top", [])) {
            // line 292
            echo "    ";
            // line 293
            echo "    <div class=\"clearfix highlighted-top ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["highlighted_top_background_color"] ?? null)), "html", null, true);
            echo " ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["highlighted_top_separator"] ?? null)), "html", null, true);
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["highlighted_top_blocks_paddings"] ?? null)) ? (" region--no-block-paddings") : ("")));
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["highlighted_top_region_paddings"] ?? null)) ? (" region--no-paddings") : ("")));
            echo "\">
      <div class=\"";
            // line 294
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["highlighted_top_layout_container"] ?? null)), "html", null, true);
            echo "\">
        ";
            // line 296
            echo "        <div class=\"clearfix highlighted-top__container";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar((((($context["highlighted_top_animations"] ?? null) == "enabled")) ? (" fade") : ("")));
            echo "\"
          ";
            // line 297
            if ((($context["highlighted_top_animations"] ?? null) == "enabled")) {
                // line 298
                echo "            data-animate-effect=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["highlighted_top_animation_effect"] ?? null)), "html", null, true);
                echo "\"
          ";
            }
            // line 299
            echo ">
          <div class=\"row\">
            <div class=\"col-md-12\">
              <div class=\"clearfix highlighted-top__section\">
                ";
            // line 303
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "highlighted_top", [])), "html", null, true);
            echo "
              </div>
            </div>
          </div>
        </div>
        ";
            // line 309
            echo "      </div>
    </div>
    ";
            // line 312
            echo "  ";
        }
        // line 313
        echo "
  ";
        // line 314
        if ($this->getAttribute(($context["page"] ?? null), "highlighted", [])) {
            // line 315
            echo "    ";
            // line 316
            echo "    <div class=\"clearfix highlighted ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["highlighted_background_color"] ?? null)), "html", null, true);
            echo " ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["highlighted_separator"] ?? null)), "html", null, true);
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["highlighted_blocks_paddings"] ?? null)) ? (" region--no-block-paddings") : ("")));
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["highlighted_region_paddings"] ?? null)) ? (" region--no-paddings") : ("")));
            echo "\">
      <div class=\"";
            // line 317
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["highlighted_layout_container"] ?? null)), "html", null, true);
            echo "\">
        ";
            // line 319
            echo "        <div class=\"clearfix highlighted__container";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar((((($context["highlighted_animations"] ?? null) == "enabled")) ? (" fade") : ("")));
            echo "\"
          ";
            // line 320
            if ((($context["highlighted_animations"] ?? null) == "enabled")) {
                // line 321
                echo "            data-animate-effect=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["highlighted_animation_effect"] ?? null)), "html", null, true);
                echo "\"
          ";
            }
            // line 322
            echo ">
          <div class=\"row\">
            <div class=\"col-md-12\">
              <div class=\"clearfix highlighted__section\">
                ";
            // line 326
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "highlighted", [])), "html", null, true);
            echo "
              </div>
            </div>
          </div>
        </div>
        ";
            // line 332
            echo "      </div>
    </div>
    ";
            // line 335
            echo "  ";
        }
        // line 336
        echo "
  ";
        // line 337
        if ($this->getAttribute(($context["page"] ?? null), "content_top", [])) {
            // line 338
            echo "    ";
            // line 339
            echo "    <div class=\"clearfix content-top ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content_top_background_color"] ?? null)), "html", null, true);
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["content_top_blocks_paddings"] ?? null)) ? (" region--no-block-paddings") : ("")));
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["content_top_region_paddings"] ?? null)) ? (" region--no-paddings") : ("")));
            echo "\">
      <div class=\"";
            // line 340
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content_top_layout_container"] ?? null)), "html", null, true);
            echo "\">
        ";
            // line 342
            echo "        <div class=\"clearfix content-top__container";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar((((($context["content_top_animations"] ?? null) == "enabled")) ? (" fade") : ("")));
            echo "\"
          ";
            // line 343
            if ((($context["content_top_animations"] ?? null) == "enabled")) {
                // line 344
                echo "            data-animate-effect=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content_top_animation_effect"] ?? null)), "html", null, true);
                echo "\"
          ";
            }
            // line 345
            echo ">
          <div class=\"row\">
            <div class=\"col-md-12\">
              <div class=\"content-top__section\">
                ";
            // line 349
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "content_top", [])), "html", null, true);
            echo "
              </div>
            </div>
          </div>
        </div>
        ";
            // line 355
            echo "      </div>
    </div>
    ";
            // line 358
            echo "  ";
        }
        // line 359
        echo "
  ";
        // line 360
        if ($this->getAttribute(($context["page"] ?? null), "content_top_highlighted", [])) {
            // line 361
            echo "    ";
            // line 362
            echo "    <div class=\"clearfix content-top-highlighted ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content_top_highlighted_background_color"] ?? null)), "html", null, true);
            echo " ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content_top_highlighted_separator"] ?? null)), "html", null, true);
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["content_top_highlighted_blocks_paddings"] ?? null)) ? (" region--no-block-paddings") : ("")));
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["content_top_highlighted_region_paddings"] ?? null)) ? (" region--no-paddings") : ("")));
            echo "\">
      <div class=\"";
            // line 363
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content_top_highlighted_layout_container"] ?? null)), "html", null, true);
            echo "\">
        ";
            // line 365
            echo "        <div class=\"clearfix content-top-highlighted__container";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar((((($context["content_top_highlighted_animations"] ?? null) == "enabled")) ? (" fade") : ("")));
            echo "\"
          ";
            // line 366
            if ((($context["content_top_highlighted_animations"] ?? null) == "enabled")) {
                // line 367
                echo "            data-animate-effect=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content_top_highlighted_animation_effect"] ?? null)), "html", null, true);
                echo "\"
          ";
            }
            // line 368
            echo ">
          <div class=\"row\">
            <div class=\"col-md-12\">
              <div class=\"content-top-highlighted__section\">
                ";
            // line 372
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "content_top_highlighted", [])), "html", null, true);
            echo "
              </div>
            </div>
          </div>
        </div>
        ";
            // line 378
            echo "      </div>
    </div>
    ";
            // line 381
            echo "  ";
        }
        // line 382
        echo "
  ";
        // line 383
        if (($this->getAttribute(($context["page"] ?? null), "pre_content_first", []) || $this->getAttribute(($context["page"] ?? null), "pre_content_second", []))) {
            // line 384
            echo "    ";
            // line 385
            echo "    <div class=\"clearfix pre-content ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["pre_content_background_color"] ?? null)), "html", null, true);
            echo " ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["pre_content_separator"] ?? null)), "html", null, true);
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["pre_content_blocks_paddings"] ?? null)) ? (" region--no-block-paddings") : ("")));
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["pre_content_region_paddings"] ?? null)) ? (" region--no-paddings") : ("")));
            echo "\">
      <div class=\"";
            // line 386
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["pre_content_layout_container"] ?? null)), "html", null, true);
            echo "\">
        ";
            // line 388
            echo "        <div class=\"clearfix pre-content__container";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar((((($context["pre_content_animations"] ?? null) == "enabled")) ? (" fade") : ("")));
            echo "\"
          ";
            // line 389
            if ((($context["pre_content_animations"] ?? null) == "enabled")) {
                // line 390
                echo "            data-animate-effect=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["pre_content_animation_effect"] ?? null)), "html", null, true);
                echo "\"
          ";
            }
            // line 391
            echo ">
          <div class=\"row\">
            ";
            // line 393
            if ($this->getAttribute(($context["page"] ?? null), "pre_content_first", [])) {
                // line 394
                echo "              <div class=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["pre_content_first_grid_class"] ?? null)), "html", null, true);
                echo "\">
                ";
                // line 396
                echo "                <div class=\"clearfix pre-content__section pre-content-first\">
                  ";
                // line 397
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "pre_content_first", [])), "html", null, true);
                echo "
                </div>
                ";
                // line 400
                echo "              </div>
            ";
            }
            // line 402
            echo "            ";
            if ($this->getAttribute(($context["page"] ?? null), "pre_content_second", [])) {
                // line 403
                echo "              <div class=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["pre_content_second_grid_class"] ?? null)), "html", null, true);
                echo "\">
                ";
                // line 405
                echo "                <div class=\"clearfix pre-content__section pre-content-second\">
                  ";
                // line 406
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "pre_content_second", [])), "html", null, true);
                echo "
                </div>
                ";
                // line 409
                echo "              </div>
            ";
            }
            // line 411
            echo "          </div>
        </div>
        ";
            // line 414
            echo "      </div>
    </div>
    ";
            // line 417
            echo "  ";
        }
        // line 418
        echo "
  ";
        // line 420
        echo "  <div class=\"clearfix main-content region--dark-typography region--white-background  ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["main_content_separator"] ?? null)), "html", null, true);
        echo "\">
    <div class=\"container\">
      <div class=\"clearfix main-content__container\">
        <div class=\"row\">
          <section class=\"";
        // line 424
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["main_grid_class"] ?? null)), "html", null, true);
        echo "\">
            ";
        // line 426
        echo "            <div class=\"clearfix main-content__section";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar((((($context["main_content_animations"] ?? null) == "enabled")) ? (" fade") : ("")));
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["main_content_blocks_paddings"] ?? null)) ? (" region--no-block-paddings") : ("")));
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["main_content_region_paddings"] ?? null)) ? (" region--no-paddings") : ("")));
        echo "\"
              ";
        // line 427
        if ((($context["main_content_animations"] ?? null) == "enabled")) {
            // line 428
            echo "                data-animate-effect=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["main_content_animation_effect"] ?? null)), "html", null, true);
            echo "\"
              ";
        }
        // line 429
        echo ">
              ";
        // line 430
        if ($this->getAttribute(($context["page"] ?? null), "content", [])) {
            // line 431
            echo "                ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "content", [])), "html", null, true);
            echo "
              ";
        }
        // line 433
        echo "            </div>
            ";
        // line 435
        echo "          </section>
          ";
        // line 436
        if ($this->getAttribute(($context["page"] ?? null), "sidebar_first", [])) {
            // line 437
            echo "            <aside class=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sidebar_first_grid_class"] ?? null)), "html", null, true);
            echo "\">
              ";
            // line 439
            echo "              <section class=\"sidebar__section sidebar-first clearfix";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar((((($context["sidebar_first_animations"] ?? null) == "enabled")) ? (" fade") : ("")));
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["sidebar_first_blocks_paddings"] ?? null)) ? (" region--no-block-paddings") : ("")));
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["sidebar_first_region_paddings"] ?? null)) ? (" region--no-paddings") : ("")));
            echo "\"
                ";
            // line 440
            if ((($context["sidebar_first_animations"] ?? null) == "enabled")) {
                // line 441
                echo "                  data-animate-effect=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sidebar_first_animation_effect"] ?? null)), "html", null, true);
                echo "\"
                ";
            }
            // line 442
            echo ">
                ";
            // line 443
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "sidebar_first", [])), "html", null, true);
            echo "
              </section>
              ";
            // line 446
            echo "            </aside>
          ";
        }
        // line 448
        echo "          ";
        if ($this->getAttribute(($context["page"] ?? null), "sidebar_second", [])) {
            // line 449
            echo "            <aside class=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sidebar_second_grid_class"] ?? null)), "html", null, true);
            echo "\">
              ";
            // line 451
            echo "              <section class=\"sidebar__section sidebar-second clearfix";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar((((($context["sidebar_second_animations"] ?? null) == "enabled")) ? (" fade") : ("")));
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["sidebar_second_blocks_paddings"] ?? null)) ? (" region--no-block-paddings") : ("")));
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["sidebar_second_region_paddings"] ?? null)) ? (" region--no-paddings") : ("")));
            echo "\"
                ";
            // line 452
            if ((($context["sidebar_second_animations"] ?? null) == "enabled")) {
                // line 453
                echo "                  data-animate-effect=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sidebar_second_animation_effect"] ?? null)), "html", null, true);
                echo "\"
                ";
            }
            // line 454
            echo ">
                ";
            // line 455
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "sidebar_second", [])), "html", null, true);
            echo "
              </section>
              ";
            // line 458
            echo "            </aside>
          ";
        }
        // line 460
        echo "        </div>
      </div>
    </div>
  </div>
  ";
        // line 465
        echo "
  ";
        // line 466
        if (($this->getAttribute(($context["page"] ?? null), "content_bottom_first", []) || $this->getAttribute(($context["page"] ?? null), "content_bottom_second", []))) {
            // line 467
            echo "    ";
            // line 468
            echo "    <div class=\"clearfix content-bottom ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content_bottom_background_color"] ?? null)), "html", null, true);
            echo " ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content_bottom_separator"] ?? null)), "html", null, true);
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["content_bottom_blocks_paddings"] ?? null)) ? (" region--no-block-paddings") : ("")));
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["content_bottom_region_paddings"] ?? null)) ? (" region--no-paddings") : ("")));
            echo "\">
      <div class=\"";
            // line 469
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content_bottom_layout_container"] ?? null)), "html", null, true);
            echo "\">
        ";
            // line 471
            echo "        <div class=\"clearfix content-bottom__container";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar((((($context["content_bottom_animations"] ?? null) == "enabled")) ? (" fade") : ("")));
            echo "\"
          ";
            // line 472
            if ((($context["content_bottom_animations"] ?? null) == "enabled")) {
                // line 473
                echo "            data-animate-effect=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content_bottom_animation_effect"] ?? null)), "html", null, true);
                echo "\"
          ";
            }
            // line 474
            echo ">
          <div class=\"row\">
            ";
            // line 476
            if ($this->getAttribute(($context["page"] ?? null), "content_bottom_first", [])) {
                // line 477
                echo "              <div class=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content_bottom_first_grid_class"] ?? null)), "html", null, true);
                echo "\">
                ";
                // line 479
                echo "                <div class=\"clearfix content-bottom__section content-bottom-first\">
                  ";
                // line 480
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "content_bottom_first", [])), "html", null, true);
                echo "
                </div>
                ";
                // line 483
                echo "              </div>
            ";
            }
            // line 485
            echo "            ";
            if ($this->getAttribute(($context["page"] ?? null), "content_bottom_second", [])) {
                // line 486
                echo "              <div class=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content_bottom_second_grid_class"] ?? null)), "html", null, true);
                echo "\">
                ";
                // line 488
                echo "                <div class=\"clearfix content-bottom__section content-bottom-second\">
                  ";
                // line 489
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "content_bottom_second", [])), "html", null, true);
                echo "
                </div>
                ";
                // line 492
                echo "              </div>
            ";
            }
            // line 494
            echo "          </div>
        </div>
        ";
            // line 497
            echo "      </div>
    </div>
    ";
            // line 500
            echo "  ";
        }
        // line 501
        echo "
  ";
        // line 502
        if ($this->getAttribute(($context["page"] ?? null), "featured_top", [])) {
            // line 503
            echo "    ";
            // line 504
            echo "    <div class=\"clearfix featured-top ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["featured_top_background_color"] ?? null)), "html", null, true);
            echo " ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["featured_top_separator"] ?? null)), "html", null, true);
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["featured_top_blocks_paddings"] ?? null)) ? (" region--no-block-paddings") : ("")));
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["featured_top_region_paddings"] ?? null)) ? (" region--no-paddings") : ("")));
            echo "\">
      <div class=\"";
            // line 505
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["featured_top_layout_container"] ?? null)), "html", null, true);
            echo "\">
        ";
            // line 507
            echo "        <div class=\"clearfix featured-top__container";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar((((($context["featured_top_animations"] ?? null) == "enabled")) ? (" fade") : ("")));
            echo "\"
          ";
            // line 508
            if ((($context["featured_top_animations"] ?? null) == "enabled")) {
                // line 509
                echo "            data-animate-effect=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["featured_top_animation_effect"] ?? null)), "html", null, true);
                echo "\"
          ";
            }
            // line 510
            echo ">
          <div class=\"row\">
            <div class=\"col-md-12\">
              <div class=\"clearfix featured-top__section\">
                ";
            // line 514
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "featured_top", [])), "html", null, true);
            echo "
              </div>
            </div>
          </div>
        </div>
        ";
            // line 520
            echo "      </div>
    </div>
    ";
            // line 523
            echo "  ";
        }
        // line 524
        echo "
  ";
        // line 525
        if ($this->getAttribute(($context["page"] ?? null), "featured", [])) {
            // line 526
            echo "    ";
            // line 527
            echo "    <div class=\"clearfix featured ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["featured_background_color"] ?? null)), "html", null, true);
            echo " ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["featured_separator"] ?? null)), "html", null, true);
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["featured_blocks_paddings"] ?? null)) ? (" region--no-block-paddings") : ("")));
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["featured_region_paddings"] ?? null)) ? (" region--no-paddings") : ("")));
            echo "\">
      <div class=\"";
            // line 528
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["featured_layout_container"] ?? null)), "html", null, true);
            echo "\">
        ";
            // line 530
            echo "        <div class=\"clearfix featured__container";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar((((($context["featured_animations"] ?? null) == "enabled")) ? (" fade") : ("")));
            echo "\"
          ";
            // line 531
            if ((($context["featured_animations"] ?? null) == "enabled")) {
                // line 532
                echo "            data-animate-effect=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["featured_animation_effect"] ?? null)), "html", null, true);
                echo "\"
          ";
            }
            // line 533
            echo ">
          <div class=\"row\">
            <div class=\"col-md-12\">
              <div class=\"clearfix featured__section\">
                ";
            // line 537
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "featured", [])), "html", null, true);
            echo "
              </div>
            </div>
          </div>
        </div>
        ";
            // line 543
            echo "      </div>
    </div>
    ";
            // line 546
            echo "  ";
        }
        // line 547
        echo "
  ";
        // line 548
        if ($this->getAttribute(($context["page"] ?? null), "featured_bottom", [])) {
            // line 549
            echo "    ";
            // line 550
            echo "    <div class=\"clearfix featured-bottom ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["featured_bottom_background_color"] ?? null)), "html", null, true);
            echo " ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["featured_bottom_separator"] ?? null)), "html", null, true);
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["featured_bottom_blocks_paddings"] ?? null)) ? (" region--no-block-paddings") : ("")));
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["featured_bottom_region_paddings"] ?? null)) ? (" region--no-paddings") : ("")));
            echo "\">
      <div class=\"";
            // line 551
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["featured_bottom_layout_container"] ?? null)), "html", null, true);
            echo "\">
        ";
            // line 553
            echo "        <div class=\"clearfix featured-bottom__container";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar((((($context["featured_bottom_animations"] ?? null) == "enabled")) ? (" fade") : ("")));
            echo "\"
          ";
            // line 554
            if ((($context["featured_bottom_animations"] ?? null) == "enabled")) {
                // line 555
                echo "            data-animate-effect=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["featured_bottom_animation_effect"] ?? null)), "html", null, true);
                echo "\"
          ";
            }
            // line 556
            echo ">
          <div class=\"row\">
            <div class=\"col-md-12\">
              <div class=\"clearfix featured-bottom__section\">
                ";
            // line 560
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "featured_bottom", [])), "html", null, true);
            echo "
              </div>
            </div>
          </div>
        </div>
        ";
            // line 566
            echo "      </div>
    </div>
    ";
            // line 569
            echo "  ";
        }
        // line 570
        echo "
  ";
        // line 571
        if ($this->getAttribute(($context["page"] ?? null), "sub_featured", [])) {
            // line 572
            echo "    ";
            // line 573
            echo "    <div class=\"clearfix sub-featured ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sub_featured_background_color"] ?? null)), "html", null, true);
            echo " ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sub_featured_separator"] ?? null)), "html", null, true);
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["sub_featured_blocks_paddings"] ?? null)) ? (" region--no-block-paddings") : ("")));
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["sub_featured_region_paddings"] ?? null)) ? (" region--no-paddings") : ("")));
            echo "\">
      <div class=\"";
            // line 574
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sub_featured_layout_container"] ?? null)), "html", null, true);
            echo "\">
        ";
            // line 576
            echo "        <div class=\"clearfix sub-featured__container";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar((((($context["sub_featured_animations"] ?? null) == "enabled")) ? (" fade") : ("")));
            echo "\"
          ";
            // line 577
            if ((($context["sub_featured_animations"] ?? null) == "enabled")) {
                // line 578
                echo "            data-animate-effect=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sub_featured_animation_effect"] ?? null)), "html", null, true);
                echo "\"
          ";
            }
            // line 579
            echo ">
          <div class=\"row\">
            <div class=\"col-md-12\">
              <div class=\"clearfix sub-featured__section\">
                ";
            // line 583
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "sub_featured", [])), "html", null, true);
            echo "
              </div>
            </div>
          </div>
        </div>
        ";
            // line 589
            echo "      </div>
    </div>
    ";
            // line 592
            echo "  ";
        }
        // line 593
        echo "
  ";
        // line 594
        if (($this->getAttribute(($context["page"] ?? null), "footer_top_first", []) || $this->getAttribute(($context["page"] ?? null), "footer_top_second", []))) {
            // line 595
            echo "    ";
            // line 596
            echo "    <div class=\"clearfix footer-top ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_top_regions"] ?? null)), "html", null, true);
            echo " ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_top_background_color"] ?? null)), "html", null, true);
            echo " ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_top_separator"] ?? null)), "html", null, true);
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["footer_top_blocks_paddings"] ?? null)) ? (" region--no-block-paddings") : ("")));
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["footer_top_region_paddings"] ?? null)) ? (" region--no-paddings") : ("")));
            echo "\">
      <div class=\"";
            // line 597
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_top_layout_container"] ?? null)), "html", null, true);
            echo "\">
        ";
            // line 599
            echo "        <div class=\"clearfix footer-top__container";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar((((($context["footer_top_animations"] ?? null) == "enabled")) ? (" fade") : ("")));
            echo "\"
          ";
            // line 600
            if ((($context["footer_top_animations"] ?? null) == "enabled")) {
                // line 601
                echo "            data-animate-effect=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_top_animation_effect"] ?? null)), "html", null, true);
                echo "\"
          ";
            }
            // line 602
            echo ">
          <div class=\"row\">
            ";
            // line 604
            if ($this->getAttribute(($context["page"] ?? null), "footer_top_first", [])) {
                // line 605
                echo "              <div class=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_top_first_grid_class"] ?? null)), "html", null, true);
                echo "\">
                ";
                // line 607
                echo "                <div class=\"clearfix footer-top__section footer-top-first\">
                  ";
                // line 608
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer_top_first", [])), "html", null, true);
                echo "
                </div>
                ";
                // line 611
                echo "              </div>
            ";
            }
            // line 613
            echo "            ";
            if ($this->getAttribute(($context["page"] ?? null), "footer_top_second", [])) {
                // line 614
                echo "              <div class=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_top_second_grid_class"] ?? null)), "html", null, true);
                echo "\">
                ";
                // line 616
                echo "                <div class=\"clearfix footer-top__section footer-top-second\">
                  ";
                // line 617
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer_top_second", [])), "html", null, true);
                echo "
                </div>
                ";
                // line 620
                echo "              </div>
            ";
            }
            // line 622
            echo "          </div>
        </div>
        ";
            // line 625
            echo "      </div>
    </div>
    ";
            // line 628
            echo "  ";
        }
        // line 629
        echo "
  ";
        // line 630
        if ((((($this->getAttribute(($context["page"] ?? null), "footer_first", []) || $this->getAttribute(($context["page"] ?? null), "footer_second", [])) || $this->getAttribute(($context["page"] ?? null), "footer_third", [])) || $this->getAttribute(($context["page"] ?? null), "footer_fourth", [])) || $this->getAttribute(($context["page"] ?? null), "footer_fifth", []))) {
            // line 631
            echo "    ";
            // line 632
            echo "    <footer class=\"clearfix footer ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_background_color"] ?? null)), "html", null, true);
            echo " ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_separator"] ?? null)), "html", null, true);
            echo " ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["scroll_to_top_region"] ?? null)), "html", null, true);
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["footer_blocks_paddings"] ?? null)) ? (" region--no-block-paddings") : ("")));
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["footer_region_paddings"] ?? null)) ? (" region--no-paddings") : ("")));
            echo "\">
      ";
            // line 633
            if ((($context["scroll_to_top_display"] ?? null) && (($context["scroll_to_top_region"] ?? null) == "footer-to-top-enabled"))) {
                // line 634
                echo "        <div class=\"to-top\"><i class=\"fa ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["scroll_to_top_icon"] ?? null)), "html", null, true);
                echo "\"></i></div>
      ";
            }
            // line 636
            echo "      <div class=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_layout_container"] ?? null)), "html", null, true);
            echo "\">
        <div class=\"clearfix footer__container\">
          <div class=\"row\">
            ";
            // line 639
            if ($this->getAttribute(($context["page"] ?? null), "footer_first", [])) {
                // line 640
                echo "              <div class=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_first_grid_class"] ?? null)), "html", null, true);
                echo "\">
                ";
                // line 642
                echo "                <div class=\"clearfix footer__section footer-first";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar((((($context["footer_animations"] ?? null) == "enabled")) ? (" fade") : ("")));
                echo "\"
                  ";
                // line 643
                if ((($context["footer_animations"] ?? null) == "enabled")) {
                    // line 644
                    echo "                    data-animate-effect=\"";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_animation_effect"] ?? null)), "html", null, true);
                    echo "\"
                  ";
                }
                // line 645
                echo ">
                  ";
                // line 646
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer_first", [])), "html", null, true);
                echo "
                </div>
                ";
                // line 649
                echo "              </div>
            ";
            }
            // line 651
            echo "            ";
            if ($this->getAttribute(($context["page"] ?? null), "footer_second", [])) {
                // line 652
                echo "              <div class=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_second_grid_class"] ?? null)), "html", null, true);
                echo "\">
                ";
                // line 654
                echo "                <div class=\"clearfix footer__section footer-second";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar((((($context["footer_animations"] ?? null) == "enabled")) ? (" fade") : ("")));
                echo "\"
                  ";
                // line 655
                if ((($context["footer_animations"] ?? null) == "enabled")) {
                    // line 656
                    echo "                    data-animate-effect=\"";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_animation_effect"] ?? null)), "html", null, true);
                    echo "\"
                  ";
                }
                // line 657
                echo ">
                  ";
                // line 658
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer_second", [])), "html", null, true);
                echo "
                </div>
                ";
                // line 661
                echo "              </div>
            ";
            }
            // line 663
            echo "            <div class=\"clearfix ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_4_columns_clearfix_first"] ?? null)), "html", null, true);
            echo "\"></div>
            ";
            // line 664
            if ($this->getAttribute(($context["page"] ?? null), "footer_third", [])) {
                // line 665
                echo "              <div class=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_third_grid_class"] ?? null)), "html", null, true);
                echo "\">
                ";
                // line 667
                echo "                <div class=\"clearfix footer__section footer-third";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar((((($context["footer_animations"] ?? null) == "enabled")) ? (" fade") : ("")));
                echo "\"
                  ";
                // line 668
                if ((($context["footer_animations"] ?? null) == "enabled")) {
                    // line 669
                    echo "                    data-animate-effect=\"";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_animation_effect"] ?? null)), "html", null, true);
                    echo "\"
                  ";
                }
                // line 670
                echo ">
                  ";
                // line 671
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer_third", [])), "html", null, true);
                echo "
                </div>
                ";
                // line 674
                echo "              </div>
            ";
            }
            // line 676
            echo "            <div class=\"clearfix ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_4_columns_clearfix_second"] ?? null)), "html", null, true);
            echo " ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_5_columns_clearfix"] ?? null)), "html", null, true);
            echo "\"></div>
            ";
            // line 677
            if ($this->getAttribute(($context["page"] ?? null), "footer_fourth", [])) {
                // line 678
                echo "              <div class=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_fourth_grid_class"] ?? null)), "html", null, true);
                echo "\">
                ";
                // line 680
                echo "                <div class=\"clearfix footer__section footer-fourth";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar((((($context["footer_animations"] ?? null) == "enabled")) ? (" fade") : ("")));
                echo "\"
                  ";
                // line 681
                if ((($context["footer_animations"] ?? null) == "enabled")) {
                    // line 682
                    echo "                    data-animate-effect=\"";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_animation_effect"] ?? null)), "html", null, true);
                    echo "\"
                  ";
                }
                // line 683
                echo ">
                  ";
                // line 684
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer_fourth", [])), "html", null, true);
                echo "
                </div>
                ";
                // line 687
                echo "              </div>
            ";
            }
            // line 689
            echo "            ";
            if ($this->getAttribute(($context["page"] ?? null), "footer_fifth", [])) {
                // line 690
                echo "              <div class=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_fifth_grid_class"] ?? null)), "html", null, true);
                echo "\">
                ";
                // line 692
                echo "                <div class=\"clearfix footer__section footer-fifth";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar((((($context["footer_animations"] ?? null) == "enabled")) ? (" fade") : ("")));
                echo "\"
                  ";
                // line 693
                if ((($context["footer_animations"] ?? null) == "enabled")) {
                    // line 694
                    echo "                    data-animate-effect=\"";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_animation_effect"] ?? null)), "html", null, true);
                    echo "\"
                  ";
                }
                // line 695
                echo ">
                  ";
                // line 696
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer_fifth", [])), "html", null, true);
                echo "
                </div>
                ";
                // line 699
                echo "              </div>
            ";
            }
            // line 701
            echo "          </div>
        </div>
      </div>
    </footer>
    ";
            // line 706
            echo "  ";
        }
        // line 707
        echo "
  ";
        // line 708
        if (($this->getAttribute(($context["page"] ?? null), "footer_bottom_first", []) || $this->getAttribute(($context["page"] ?? null), "footer_bottom_second", []))) {
            // line 709
            echo "    ";
            // line 710
            echo "    <div class=\"clearfix footer-bottom ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_bottom_background_color"] ?? null)), "html", null, true);
            echo " ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_bottom_separator"] ?? null)), "html", null, true);
            echo " ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["scroll_to_top_region"] ?? null)), "html", null, true);
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["footer_bottom_blocks_paddings"] ?? null)) ? (" region--no-block-paddings") : ("")));
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["footer_bottom_region_paddings"] ?? null)) ? (" region--no-paddings") : ("")));
            echo "\">
      ";
            // line 711
            if ((($context["scroll_to_top_display"] ?? null) && (($context["scroll_to_top_region"] ?? null) == "footer-bottom-to-top-enabled"))) {
                // line 712
                echo "        <div class=\"to-top\"><i class=\"fa ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["scroll_to_top_icon"] ?? null)), "html", null, true);
                echo "\"></i></div>
      ";
            }
            // line 714
            echo "      <div class=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_bottom_layout_container"] ?? null)), "html", null, true);
            echo "\">
        ";
            // line 716
            echo "        <div class=\"clearfix footer-bottom__container\">
          <div class=\"row\">
            ";
            // line 718
            if ($this->getAttribute(($context["page"] ?? null), "footer_bottom_first", [])) {
                // line 719
                echo "              <div class=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_bottom_first_grid_class"] ?? null)), "html", null, true);
                echo "\">
                ";
                // line 721
                echo "                <div class=\"clearfix footer-bottom__section footer-bottom-first\">
                  ";
                // line 722
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer_bottom_first", [])), "html", null, true);
                echo "
                </div>
                ";
                // line 725
                echo "              </div>
            ";
            }
            // line 727
            echo "            ";
            if ($this->getAttribute(($context["page"] ?? null), "footer_bottom_second", [])) {
                // line 728
                echo "              <div class=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_bottom_second_grid_class"] ?? null)), "html", null, true);
                echo "\">
                ";
                // line 730
                echo "                <div class=\"clearfix footer-bottom__section footer-bottom-first\">
                  ";
                // line 731
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer_bottom_second", [])), "html", null, true);
                echo "
                </div>
                ";
                // line 734
                echo "              </div>
            ";
            }
            // line 736
            echo "          </div>
        </div>
        ";
            // line 739
            echo "      </div>
    </div>
    ";
            // line 742
            echo "  ";
        }
        // line 743
        echo "
  ";
        // line 744
        if (($this->getAttribute(($context["page"] ?? null), "sub_footer_first", []) || $this->getAttribute(($context["page"] ?? null), "footer", []))) {
            // line 745
            echo "    ";
            // line 746
            echo "    <div class=\"clearfix subfooter ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["subfooter_background_color"] ?? null)), "html", null, true);
            echo " ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["subfooter_separator"] ?? null)), "html", null, true);
            echo " ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["scroll_to_top_region"] ?? null)), "html", null, true);
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["subfooter_bottom_blocks_paddings"] ?? null)) ? (" region--no-block-paddings") : ("")));
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["subfooter_bottom_region_paddings"] ?? null)) ? (" region--no-paddings") : ("")));
            echo "\">
      ";
            // line 747
            if ((($context["scroll_to_top_display"] ?? null) && (($context["scroll_to_top_region"] ?? null) == "subfooter-to-top-enabled"))) {
                // line 748
                echo "        <div class=\"to-top\"><i class=\"fa ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["scroll_to_top_icon"] ?? null)), "html", null, true);
                echo "\"></i></div>
      ";
            }
            // line 750
            echo "      <div class=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["subfooter_layout_container"] ?? null)), "html", null, true);
            echo "\">
        ";
            // line 752
            echo "        <div class=\"clearfix subfooter__container\">
          <div class=\"row\">
            ";
            // line 754
            if ($this->getAttribute(($context["page"] ?? null), "sub_footer_first", [])) {
                // line 755
                echo "              <div class=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["subfooter_first_grid_class"] ?? null)), "html", null, true);
                echo "\">
                ";
                // line 757
                echo "                <div class=\"clearfix subfooter__section subfooter-first\">
                  ";
                // line 758
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "sub_footer_first", [])), "html", null, true);
                echo "
                </div>
                ";
                // line 761
                echo "              </div>
            ";
            }
            // line 763
            echo "            ";
            if ($this->getAttribute(($context["page"] ?? null), "footer", [])) {
                // line 764
                echo "              <div class=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["subfooter_second_grid_class"] ?? null)), "html", null, true);
                echo "\">
                ";
                // line 766
                echo "                <div class=\"clearfix subfooter__section subfooter-second\">
                  ";
                // line 767
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer", [])), "html", null, true);
                echo "
                </div>
                ";
                // line 770
                echo "              </div>
            ";
            }
            // line 772
            echo "          </div>
        </div>
        ";
            // line 775
            echo "      </div>
    </div>
    ";
            // line 778
            echo "  ";
        }
        // line 779
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "themes/magazine_lite/templates/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1720 => 779,  1717 => 778,  1713 => 775,  1709 => 772,  1705 => 770,  1700 => 767,  1697 => 766,  1692 => 764,  1689 => 763,  1685 => 761,  1680 => 758,  1677 => 757,  1672 => 755,  1670 => 754,  1666 => 752,  1661 => 750,  1655 => 748,  1653 => 747,  1642 => 746,  1640 => 745,  1638 => 744,  1635 => 743,  1632 => 742,  1628 => 739,  1624 => 736,  1620 => 734,  1615 => 731,  1612 => 730,  1607 => 728,  1604 => 727,  1600 => 725,  1595 => 722,  1592 => 721,  1587 => 719,  1585 => 718,  1581 => 716,  1576 => 714,  1570 => 712,  1568 => 711,  1557 => 710,  1555 => 709,  1553 => 708,  1550 => 707,  1547 => 706,  1541 => 701,  1537 => 699,  1532 => 696,  1529 => 695,  1523 => 694,  1521 => 693,  1516 => 692,  1511 => 690,  1508 => 689,  1504 => 687,  1499 => 684,  1496 => 683,  1490 => 682,  1488 => 681,  1483 => 680,  1478 => 678,  1476 => 677,  1469 => 676,  1465 => 674,  1460 => 671,  1457 => 670,  1451 => 669,  1449 => 668,  1444 => 667,  1439 => 665,  1437 => 664,  1432 => 663,  1428 => 661,  1423 => 658,  1420 => 657,  1414 => 656,  1412 => 655,  1407 => 654,  1402 => 652,  1399 => 651,  1395 => 649,  1390 => 646,  1387 => 645,  1381 => 644,  1379 => 643,  1374 => 642,  1369 => 640,  1367 => 639,  1360 => 636,  1354 => 634,  1352 => 633,  1341 => 632,  1339 => 631,  1337 => 630,  1334 => 629,  1331 => 628,  1327 => 625,  1323 => 622,  1319 => 620,  1314 => 617,  1311 => 616,  1306 => 614,  1303 => 613,  1299 => 611,  1294 => 608,  1291 => 607,  1286 => 605,  1284 => 604,  1280 => 602,  1274 => 601,  1272 => 600,  1267 => 599,  1263 => 597,  1252 => 596,  1250 => 595,  1248 => 594,  1245 => 593,  1242 => 592,  1238 => 589,  1230 => 583,  1224 => 579,  1218 => 578,  1216 => 577,  1211 => 576,  1207 => 574,  1198 => 573,  1196 => 572,  1194 => 571,  1191 => 570,  1188 => 569,  1184 => 566,  1176 => 560,  1170 => 556,  1164 => 555,  1162 => 554,  1157 => 553,  1153 => 551,  1144 => 550,  1142 => 549,  1140 => 548,  1137 => 547,  1134 => 546,  1130 => 543,  1122 => 537,  1116 => 533,  1110 => 532,  1108 => 531,  1103 => 530,  1099 => 528,  1090 => 527,  1088 => 526,  1086 => 525,  1083 => 524,  1080 => 523,  1076 => 520,  1068 => 514,  1062 => 510,  1056 => 509,  1054 => 508,  1049 => 507,  1045 => 505,  1036 => 504,  1034 => 503,  1032 => 502,  1029 => 501,  1026 => 500,  1022 => 497,  1018 => 494,  1014 => 492,  1009 => 489,  1006 => 488,  1001 => 486,  998 => 485,  994 => 483,  989 => 480,  986 => 479,  981 => 477,  979 => 476,  975 => 474,  969 => 473,  967 => 472,  962 => 471,  958 => 469,  949 => 468,  947 => 467,  945 => 466,  942 => 465,  936 => 460,  932 => 458,  927 => 455,  924 => 454,  918 => 453,  916 => 452,  909 => 451,  904 => 449,  901 => 448,  897 => 446,  892 => 443,  889 => 442,  883 => 441,  881 => 440,  874 => 439,  869 => 437,  867 => 436,  864 => 435,  861 => 433,  855 => 431,  853 => 430,  850 => 429,  844 => 428,  842 => 427,  835 => 426,  831 => 424,  823 => 420,  820 => 418,  817 => 417,  813 => 414,  809 => 411,  805 => 409,  800 => 406,  797 => 405,  792 => 403,  789 => 402,  785 => 400,  780 => 397,  777 => 396,  772 => 394,  770 => 393,  766 => 391,  760 => 390,  758 => 389,  753 => 388,  749 => 386,  740 => 385,  738 => 384,  736 => 383,  733 => 382,  730 => 381,  726 => 378,  718 => 372,  712 => 368,  706 => 367,  704 => 366,  699 => 365,  695 => 363,  686 => 362,  684 => 361,  682 => 360,  679 => 359,  676 => 358,  672 => 355,  664 => 349,  658 => 345,  652 => 344,  650 => 343,  645 => 342,  641 => 340,  634 => 339,  632 => 338,  630 => 337,  627 => 336,  624 => 335,  620 => 332,  612 => 326,  606 => 322,  600 => 321,  598 => 320,  593 => 319,  589 => 317,  580 => 316,  578 => 315,  576 => 314,  573 => 313,  570 => 312,  566 => 309,  558 => 303,  552 => 299,  546 => 298,  544 => 297,  539 => 296,  535 => 294,  526 => 293,  524 => 292,  522 => 291,  519 => 290,  510 => 284,  504 => 280,  502 => 279,  498 => 277,  495 => 275,  492 => 274,  488 => 271,  480 => 265,  474 => 261,  470 => 259,  463 => 258,  461 => 257,  459 => 256,  456 => 255,  453 => 254,  449 => 251,  446 => 250,  442 => 247,  438 => 244,  434 => 242,  429 => 239,  426 => 238,  421 => 236,  418 => 235,  414 => 233,  409 => 230,  406 => 229,  401 => 227,  398 => 226,  394 => 224,  389 => 221,  386 => 220,  381 => 218,  379 => 217,  375 => 215,  371 => 213,  368 => 212,  364 => 210,  354 => 207,  351 => 206,  348 => 205,  338 => 202,  335 => 201,  333 => 200,  330 => 199,  328 => 198,  316 => 196,  314 => 195,  312 => 194,  309 => 193,  306 => 192,  302 => 189,  298 => 186,  294 => 184,  289 => 181,  286 => 180,  281 => 178,  278 => 177,  274 => 175,  269 => 172,  266 => 171,  261 => 169,  259 => 168,  255 => 166,  249 => 165,  247 => 164,  242 => 163,  238 => 161,  231 => 160,  229 => 159,  227 => 158,  224 => 157,  221 => 156,  217 => 153,  213 => 150,  209 => 148,  204 => 145,  201 => 144,  196 => 142,  193 => 141,  189 => 139,  184 => 136,  181 => 135,  176 => 133,  174 => 132,  170 => 130,  164 => 129,  162 => 128,  157 => 127,  153 => 125,  146 => 124,  144 => 123,  142 => 122,  138 => 120,  136 => 119,  134 => 118,  131 => 117,  128 => 116,  124 => 113,  116 => 107,  110 => 103,  106 => 101,  97 => 100,  95 => 99,  93 => 98,  89 => 96,  86 => 94,  82 => 91,  79 => 89,  76 => 87,  70 => 83,  66 => 81,  59 => 79,  57 => 78,  55 => 77,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "themes/magazine_lite/templates/page.html.twig", "C:\\xampp\\htdocs\\museumsite\\themes\\magazine_lite\\templates\\page.html.twig");
    }
}
