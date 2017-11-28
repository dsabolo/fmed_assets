<?php

/* themes/custom/fmed_theme/newsplus_lite/templates/page.html.twig */
class __TwigTemplate_b9c68b8d671a20cddf8c4f02ba3a267e24e13546e3e935f81aa0b4ed1f2ddae2 extends Twig_Template
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
        $tags = array("if" => 62);
        $filters = array("t" => 144);
        $functions = array("path" => 144);

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('if'),
                array('t'),
                array('path')
            );
        } catch (Twig_Sandbox_SecurityError $e) {
            $e->setSourceContext($this->getSourceContext());

            if ($e instanceof Twig_Sandbox_SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

        // line 59
        echo "
<div id=\"toTop\"><i class=\"fa fa-play-circle fa-rotate-270\"></i></div>
<header class=\"headers-wrapper\">
  ";
        // line 62
        if (($this->getAttribute(($context["page"] ?? null), "pre_header_left", array()) || $this->getAttribute(($context["page"] ?? null), "pre_header_right", array()))) {
            // line 63
            echo "    ";
            // line 64
            echo "    <div id=\"pre-header\" class=\"clearfix colored-area ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["colored_area_class"] ?? null), "html", null, true));
            echo "\">
      <div class=\"container\">
        ";
            // line 67
            echo "        <div id=\"pre-header-inside\" class=\"clearfix\">
          <div class=\"row\">
            ";
            // line 69
            if ($this->getAttribute(($context["page"] ?? null), "pre_header_left", array())) {
                // line 70
                echo "              <div class=\"";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["pre_header_left_grid_class"] ?? null), "html", null, true));
                echo "\">
                ";
                // line 72
                echo "                <div id=\"pre-header-left\" class=\"clearfix\">
                  <div class=\"pre-header-area\">
                    ";
                // line 74
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "pre_header_left", array()), "html", null, true));
                echo "
                  </div>
                </div>
                ";
                // line 78
                echo "              </div>
            ";
            }
            // line 80
            echo "            ";
            if ($this->getAttribute(($context["page"] ?? null), "pre_header_right", array())) {
                // line 81
                echo "              <div class=\"";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["pre_header_right_grid_class"] ?? null), "html", null, true));
                echo "\">
                ";
                // line 83
                echo "                <div id=\"pre-header-right\" class=\"clearfix\">
                  <div class=\"pre-header-area\">
                    ";
                // line 85
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "pre_header_right", array()), "html", null, true));
                echo "
                  </div>
                </div>
                ";
                // line 89
                echo "              </div>
            ";
            }
            // line 91
            echo "          </div>
        </div>
        ";
            // line 94
            echo "      </div>
    </div>
    ";
            // line 97
            echo "  ";
        }
        // line 98
        echo "  ";
        // line 99
        echo "  ";
        if (($this->getAttribute(($context["page"] ?? null), "header_top_left", array()) || $this->getAttribute(($context["page"] ?? null), "header_top_right", array()))) {
            // line 100
            echo "    <div id=\"header-top\" role=\"banner\" class=\"clearfix colored-area ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["colored_area_class"] ?? null), "html", null, true));
            echo "\">
      <div class=\"container\">
        ";
            // line 103
            echo "        <div id=\"header-top-inside\" class=\"clearfix\">
          <div class=\"row\">
            ";
            // line 105
            if ($this->getAttribute(($context["page"] ?? null), "header_top_left", array())) {
                // line 106
                echo "              <div class=\"";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["header_top_inside_grid_class"] ?? null), "html", null, true));
                echo "\">
                ";
                // line 108
                echo "                <div id=\"header-top-left\" class=\"clearfix\">
                  <div class=\"header-top-area\">

                    ";
                // line 111
                if ($this->getAttribute(($context["page"] ?? null), "header_top_left", array())) {
                    // line 112
                    echo "                      ";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "header_top_left", array()), "html", null, true));
                    echo "
                    ";
                }
                // line 114
                echo "
                  </div>
                </div>
                ";
                // line 118
                echo "              </div>
            ";
            }
            // line 120
            echo "            ";
            if ($this->getAttribute(($context["page"] ?? null), "header_top_right", array())) {
                // line 121
                echo "              <div class=\"";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["header_top_inside_grid_class"] ?? null), "html", null, true));
                echo "\">
                ";
                // line 123
                echo "                <div id=\"header-top-right\" class=\"clearfix\">
                  <div class=\"header-top-area\">
                    ";
                // line 125
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "header_top_right", array()), "html", null, true));
                echo "
                  </div>
                </div>
                ";
                // line 129
                echo "              </div>
            ";
            }
            // line 131
            echo "          </div>
        </div>
        ";
            // line 134
            echo "      </div>
    </div>
  ";
        }
        // line 137
        echo "  ";
        // line 138
        echo "
  ";
        // line 140
        echo "  ";
        if (($this->getAttribute(($context["page"] ?? null), "navigation", array()) || $this->getAttribute(($context["page"] ?? null), "header", array()))) {
            // line 141
            echo "    <div id=\"header\" class=\"colored-area ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["colored_area_class"] ?? null), "html", null, true));
            echo "\">
      ";
            // line 142
            if (($context["mt_site_name"] ?? null)) {
                // line 143
                echo "        <div class=\"site-name site-name__header\">
          <a href=\"";
                // line 144
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\Core\Template\TwigExtension')->getPath("<front>")));
                echo "\" title=\"";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Home")));
                echo "\" rel=\"home\">";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["mt_site_name"] ?? null), "html", null, true));
                echo "</a>
        </div>
      ";
            }
            // line 147
            echo "      <div class=\"container\">
        ";
            // line 149
            echo "        <div id=\"header-inside\" class=\"clearfix\">
          <div class=\"row\">
            <div class=\"header-area\">
              <div class=\"";
            // line 152
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["header_inside_left_grid_class"] ?? null), "html", null, true));
            echo "\">
                ";
            // line 154
            echo "                <div id=\"header-inside-left\" class=\"clearfix\">
                  ";
            // line 156
            echo "                  <div id=\"main-navigation\" class=\"clearfix\">
                    <nav role=\"navigation\">
                      ";
            // line 158
            if ($this->getAttribute(($context["page"] ?? null), "navigation", array())) {
                // line 159
                echo "                        ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "navigation", array()), "html", null, true));
                echo "
                      ";
            }
            // line 161
            echo "                    </nav>
                  </div>
                  ";
            // line 164
            echo "                </div>
                ";
            // line 166
            echo "              </div>
              ";
            // line 167
            if ($this->getAttribute(($context["page"] ?? null), "header", array())) {
                // line 168
                echo "                <div class=\"col-md-4\">
                  ";
                // line 170
                echo "                  <div id=\"header-inside-right\" class=\"clearfix\">
                    ";
                // line 171
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "header", array()), "html", null, true));
                echo "
                  </div>
                  ";
                // line 174
                echo "                </div>
              ";
            }
            // line 176
            echo "            </div>
          </div>
        </div>
        ";
            // line 180
            echo "      </div>
    </div>
  ";
        }
        // line 183
        echo "  ";
        // line 184
        echo "</header>

";
        // line 186
        if ($this->getAttribute(($context["page"] ?? null), "page_intro", array())) {
            // line 187
            echo "  ";
            // line 188
            echo "  <div id=\"page-intro\" class=\"clearfix\">
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-md-12\">
          ";
            // line 193
            echo "          <div id=\"page-intro-inside\" class=\"clearfix\">
            ";
            // line 194
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "page_intro", array()), "html", null, true));
            echo "
          </div>
          ";
            // line 197
            echo "        </div>
      </div>
    </div>
  </div>
  ";
        }
        // line 203
        echo "
";
        // line 205
        echo "<div id=\"page\" class=\"clearfix\">
  <div class=\"container\">
    ";
        // line 208
        echo "    <div id=\"page-inside\">

      ";
        // line 210
        if ($this->getAttribute(($context["page"] ?? null), "top_content", array())) {
            // line 211
            echo "        ";
            // line 212
            echo "        <div id=\"top-content\">
          ";
            // line 214
            echo "          <div id=\"top-content-inside\" class=\"clearfix\">
            <div class=\"row\">
              <div class=\"col-md-12\">
                ";
            // line 217
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "top_content", array()), "html", null, true));
            echo "
              </div>
            </div>
          </div>
          ";
            // line 222
            echo "        </div>
        ";
            // line 224
            echo "      ";
        }
        // line 225
        echo "
      ";
        // line 227
        echo "      <div id=\"main-content\">
        <div class=\"row\">
          ";
        // line 229
        if ($this->getAttribute(($context["page"] ?? null), "sidebar_first", array())) {
            // line 230
            echo "            <aside class=\"";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["sidebar_first_grid_class"] ?? null), "html", null, true));
            echo "\">
              ";
            // line 232
            echo "              <section id=\"sidebar-first\" class=\"sidebar clearfix\">
                ";
            // line 233
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "sidebar_first", array()), "html", null, true));
            echo "
              </section>
              ";
            // line 236
            echo "            </aside>
          ";
        }
        // line 238
        echo "
          <section class=\"";
        // line 239
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["main_grid_class"] ?? null), "html", null, true));
        echo "\">

            ";
        // line 241
        if ($this->getAttribute(($context["page"] ?? null), "banner", array())) {
            // line 242
            echo "              ";
            // line 243
            echo "              <div id=\"banner\">
                ";
            // line 245
            echo "                <div id=\"banner-inside\" class=\"clearfix\">
                  ";
            // line 246
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "banner", array()), "html", null, true));
            echo "
                </div>
                ";
            // line 249
            echo "              </div>
              ";
            // line 251
            echo "            ";
        }
        // line 252
        echo "
            ";
        // line 253
        if ($this->getAttribute(($context["page"] ?? null), "highlighted", array())) {
            // line 254
            echo "              <div id=\"highlighted\">
                <div id=\"highlighted-inside\" class=\"clearfix\">
                  ";
            // line 256
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "highlighted", array()), "html", null, true));
            echo "
                </div>
              </div>
            ";
        }
        // line 260
        echo "
            ";
        // line 261
        if ($this->getAttribute(($context["page"] ?? null), "promoted", array())) {
            // line 262
            echo "              ";
            // line 263
            echo "              <div id=\"promoted\" class=\"clearfix\">
                ";
            // line 265
            echo "                <div id=\"promoted-inside\" class=\"clearfix\">
                  ";
            // line 266
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "promoted", array()), "html", null, true));
            echo "
                </div>
                ";
            // line 269
            echo "              </div>
              ";
            // line 271
            echo "            ";
        }
        // line 272
        echo "
            ";
        // line 274
        echo "            <div id=\"main\" class=\"clearfix\">

              ";
        // line 276
        if ($this->getAttribute(($context["page"] ?? null), "content", array())) {
            // line 277
            echo "                ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "content", array()), "html", null, true));
            echo "
              ";
        }
        // line 279
        echo "
            </div>
            ";
        // line 282
        echo "          </section>

          ";
        // line 284
        if ($this->getAttribute(($context["page"] ?? null), "sidebar_second", array())) {
            // line 285
            echo "          <aside class=\"";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["sidebar_second_grid_class"] ?? null), "html", null, true));
            echo "\">
            ";
            // line 287
            echo "            <section id=\"sidebar-second\" class=\"sidebar clearfix\">
              ";
            // line 288
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "sidebar_second", array()), "html", null, true));
            echo "
            </section>
            ";
            // line 291
            echo "          </aside>
          ";
        }
        // line 293
        echo "
        </div>

      </div>
      ";
        // line 298
        echo "
    </div>
    ";
        // line 301
        echo "
  </div>

</div>
";
        // line 306
        echo "

";
        // line 308
        if (((($this->getAttribute(($context["page"] ?? null), "footer_first", array()) || $this->getAttribute(($context["page"] ?? null), "footer_second", array())) || $this->getAttribute(($context["page"] ?? null), "footer_third", array())) || $this->getAttribute(($context["page"] ?? null), "footer_fourth", array()))) {
            // line 309
            echo "  ";
            // line 310
            echo "  <footer id=\"footer\" class=\"clearfix\">
    <div class=\"container\">

      <div class=\"row\">
        ";
            // line 314
            if ($this->getAttribute(($context["page"] ?? null), "footer_first", array())) {
                // line 315
                echo "          <div class=\"";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["footer_grid_class"] ?? null), "html", null, true));
                echo "\">
            <div class=\"footer-area\">
              ";
                // line 317
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "footer_first", array()), "html", null, true));
                echo "
            </div>
          </div>
        ";
            }
            // line 321
            echo "
        ";
            // line 322
            if ($this->getAttribute(($context["page"] ?? null), "footer_second", array())) {
                // line 323
                echo "          <div class=\"";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["footer_grid_class"] ?? null), "html", null, true));
                echo "\">
            <div class=\"footer-area\">
              ";
                // line 325
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "footer_second", array()), "html", null, true));
                echo "
            </div>
          </div>
        ";
            }
            // line 329
            echo "
        ";
            // line 330
            if ($this->getAttribute(($context["page"] ?? null), "footer_third", array())) {
                // line 331
                echo "          <div class=\"";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["footer_grid_class"] ?? null), "html", null, true));
                echo "\">
            <div class=\"footer-area\">
              ";
                // line 333
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "footer_third", array()), "html", null, true));
                echo "
            </div>
          </div>
        ";
            }
            // line 337
            echo "
        ";
            // line 338
            if ($this->getAttribute(($context["page"] ?? null), "footer_fourth", array())) {
                // line 339
                echo "          <div class=\"";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["footer_grid_class"] ?? null), "html", null, true));
                echo "\">
            <div class=\"footer-area\">
              ";
                // line 341
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "footer_fourth", array()), "html", null, true));
                echo "
            </div>
          </div>
        ";
            }
            // line 345
            echo "      </div>

    </div>
  </footer>
  ";
        }
        // line 351
        echo "
";
        // line 352
        if (($this->getAttribute(($context["page"] ?? null), "sub_footer_left", array()) || $this->getAttribute(($context["page"] ?? null), "footer", array()))) {
            // line 353
            echo "  ";
            // line 354
            echo "  <div id=\"subfooter\" class=\"clearfix\">
    <div class=\"container\">
      ";
            // line 357
            echo "      <div id=\"subfooter-inside\" class=\"clearfix\">
        <div class=\"row\">
          <div class=\"col-md-4\">
            ";
            // line 361
            echo "            ";
            if ($this->getAttribute(($context["page"] ?? null), "sub_footer_left", array())) {
                // line 362
                echo "              <div class=\"subfooter-area left\">
                ";
                // line 363
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "sub_footer_left", array()), "html", null, true));
                echo "
              </div>
            ";
            }
            // line 366
            echo "            ";
            // line 367
            echo "          </div>
          <div class=\"col-md-8\">
            ";
            // line 370
            echo "            ";
            if ($this->getAttribute(($context["page"] ?? null), "footer", array())) {
                // line 371
                echo "              <div class=\"subfooter-area right\">
                ";
                // line 372
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "footer", array()), "html", null, true));
                echo "
              </div>
            ";
            }
            // line 375
            echo "            ";
            // line 376
            echo "          </div>
        </div>
      </div>
      ";
            // line 380
            echo "    </div>
  </div>";
        }
    }

    public function getTemplateName()
    {
        return "themes/custom/fmed_theme/newsplus_lite/templates/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  646 => 380,  641 => 376,  639 => 375,  633 => 372,  630 => 371,  627 => 370,  623 => 367,  621 => 366,  615 => 363,  612 => 362,  609 => 361,  604 => 357,  600 => 354,  598 => 353,  596 => 352,  593 => 351,  586 => 345,  579 => 341,  573 => 339,  571 => 338,  568 => 337,  561 => 333,  555 => 331,  553 => 330,  550 => 329,  543 => 325,  537 => 323,  535 => 322,  532 => 321,  525 => 317,  519 => 315,  517 => 314,  511 => 310,  509 => 309,  507 => 308,  503 => 306,  497 => 301,  493 => 298,  487 => 293,  483 => 291,  478 => 288,  475 => 287,  470 => 285,  468 => 284,  464 => 282,  460 => 279,  454 => 277,  452 => 276,  448 => 274,  445 => 272,  442 => 271,  439 => 269,  434 => 266,  431 => 265,  428 => 263,  426 => 262,  424 => 261,  421 => 260,  414 => 256,  410 => 254,  408 => 253,  405 => 252,  402 => 251,  399 => 249,  394 => 246,  391 => 245,  388 => 243,  386 => 242,  384 => 241,  379 => 239,  376 => 238,  372 => 236,  367 => 233,  364 => 232,  359 => 230,  357 => 229,  353 => 227,  350 => 225,  347 => 224,  344 => 222,  337 => 217,  332 => 214,  329 => 212,  327 => 211,  325 => 210,  321 => 208,  317 => 205,  314 => 203,  307 => 197,  302 => 194,  299 => 193,  293 => 188,  291 => 187,  289 => 186,  285 => 184,  283 => 183,  278 => 180,  273 => 176,  269 => 174,  264 => 171,  261 => 170,  258 => 168,  256 => 167,  253 => 166,  250 => 164,  246 => 161,  240 => 159,  238 => 158,  234 => 156,  231 => 154,  227 => 152,  222 => 149,  219 => 147,  209 => 144,  206 => 143,  204 => 142,  199 => 141,  196 => 140,  193 => 138,  191 => 137,  186 => 134,  182 => 131,  178 => 129,  172 => 125,  168 => 123,  163 => 121,  160 => 120,  156 => 118,  151 => 114,  145 => 112,  143 => 111,  138 => 108,  133 => 106,  131 => 105,  127 => 103,  121 => 100,  118 => 99,  116 => 98,  113 => 97,  109 => 94,  105 => 91,  101 => 89,  95 => 85,  91 => 83,  86 => 81,  83 => 80,  79 => 78,  73 => 74,  69 => 72,  64 => 70,  62 => 69,  58 => 67,  52 => 64,  50 => 63,  48 => 62,  43 => 59,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "themes/custom/fmed_theme/newsplus_lite/templates/page.html.twig", "/mnt/c/Users/Diego/Workspace/fmed.uba.ar/src/web/themes/custom/fmed_theme/newsplus_lite/templates/page.html.twig");
    }
}
