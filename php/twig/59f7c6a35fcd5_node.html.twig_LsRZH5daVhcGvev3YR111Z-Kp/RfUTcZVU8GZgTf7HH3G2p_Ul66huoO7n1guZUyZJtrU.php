<?php

/* themes/custom/fmed_theme/newsplus_lite/templates/node.html.twig */
class __TwigTemplate_82f30bcf635c9c73c90739c315aacb8cbd36e3ee0fdb2d63cfee09e685d62ba1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'node_side' => array($this, 'block_node_side'),
            'above_header' => array($this, 'block_above_header'),
            'title_area' => array($this, 'block_title_area'),
            'meta_area' => array($this, 'block_meta_area'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $tags = array("set" => 65, "block" => 77, "if" => 85, "trans" => 99);
        $filters = array("clean_class" => 67, "without" => 109);
        $functions = array("attach_library" => 75);

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('set', 'block', 'if', 'trans'),
                array('clean_class', 'without'),
                array('attach_library')
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

        // line 65
        $context["classes"] = array(0 => "node", 1 => ("node--type-" . \Drupal\Component\Utility\Html::getClass($this->getAttribute(        // line 67
($context["node"] ?? null), "bundle", array()))), 2 => (($this->getAttribute(        // line 68
($context["node"] ?? null), "isPromoted", array(), "method")) ? ("node--promoted") : ("")), 3 => (($this->getAttribute(        // line 69
($context["node"] ?? null), "isSticky", array(), "method")) ? ("node--sticky") : ("")), 4 => (( !$this->getAttribute(        // line 70
($context["node"] ?? null), "isPublished", array(), "method")) ? ("node--unpublished") : ("")), 5 => ((        // line 71
($context["view_mode"] ?? null)) ? (("node--view-mode-" . \Drupal\Component\Utility\Html::getClass(($context["view_mode"] ?? null)))) : ("")), 6 => "clearfix");
        // line 75
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->attachLibrary("classy/node"), "html", null, true));
        echo "
<article";
        // line 76
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["attributes"] ?? null), "addClass", array(0 => ($context["classes"] ?? null)), "method"), "html", null, true));
        echo ">
  ";
        // line 77
        $this->displayBlock('node_side', $context, $blocks);
        // line 79
        echo "  <div class=\"node-content\">
    ";
        // line 80
        $this->displayBlock('above_header', $context, $blocks);
        // line 82
        echo "    <header>
      ";
        // line 83
        $this->displayBlock('title_area', $context, $blocks);
        // line 92
        echo "      ";
        $this->displayBlock('meta_area', $context, $blocks);
        // line 106
        echo "    </header>
    <div";
        // line 107
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["content_attributes"] ?? null), "addClass", array(0 => "node__content", 1 => "clearfix"), "method"), "html", null, true));
        echo ">
      ";
        // line 108
        $this->displayBlock('content', $context, $blocks);
        // line 111
        echo "      ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["content"] ?? null), "links", array()), "html", null, true));
        echo "
    </div>
  </div>
</article>
";
    }

    // line 77
    public function block_node_side($context, array $blocks = array())
    {
        // line 78
        echo "  ";
    }

    // line 80
    public function block_above_header($context, array $blocks = array())
    {
        // line 81
        echo "    ";
    }

    // line 83
    public function block_title_area($context, array $blocks = array())
    {
        // line 84
        echo "        ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["title_prefix"] ?? null), "html", null, true));
        echo "
        ";
        // line 85
        if ( !($context["page"] ?? null)) {
            // line 86
            echo "          <h2";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["title_attributes"] ?? null), "addClass", array(0 => "node__title title"), "method"), "html", null, true));
            echo ">
            <a href=\"";
            // line 87
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["url"] ?? null), "html", null, true));
            echo "\" rel=\"bookmark\">";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["label"] ?? null), "html", null, true));
            echo "</a>
          </h2>
        ";
        }
        // line 90
        echo "        ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["title_suffix"] ?? null), "html", null, true));
        echo "
      ";
    }

    // line 92
    public function block_meta_area($context, array $blocks = array())
    {
        // line 93
        echo "        ";
        if (($context["display_submitted"] ?? null)) {
            // line 94
            echo "          <div class=\"node__meta\">
            <span";
            // line 95
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["author_attributes"] ?? null), "addClass", array(0 => "user-picture"), "method"), "html", null, true));
            echo ">
              ";
            // line 96
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["author_picture"] ?? null), "html", null, true));
            echo "
            </span>
            <span class=\"post-info\">
              <span>";
            // line 99
            echo t("@posted_ago ago", array("@posted_ago" => ($context["posted_ago"] ?? null), ));
            echo "</span>
              <span>";
            // line 100
            echo t("By @author_name", array("@author_name" => ($context["author_name"] ?? null), ));
            echo "</span>
            </span>
            ";
            // line 102
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["metadata"] ?? null), "html", null, true));
            echo "
          </div>
        ";
        }
        // line 105
        echo "      ";
    }

    // line 108
    public function block_content($context, array $blocks = array())
    {
        // line 109
        echo "        ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, twig_without(($context["content"] ?? null), "links"), "html", null, true));
        echo "
      ";
    }

    public function getTemplateName()
    {
        return "themes/custom/fmed_theme/newsplus_lite/templates/node.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  182 => 109,  179 => 108,  175 => 105,  169 => 102,  164 => 100,  160 => 99,  154 => 96,  150 => 95,  147 => 94,  144 => 93,  141 => 92,  134 => 90,  126 => 87,  121 => 86,  119 => 85,  114 => 84,  111 => 83,  107 => 81,  104 => 80,  100 => 78,  97 => 77,  87 => 111,  85 => 108,  81 => 107,  78 => 106,  75 => 92,  73 => 83,  70 => 82,  68 => 80,  65 => 79,  63 => 77,  59 => 76,  55 => 75,  53 => 71,  52 => 70,  51 => 69,  50 => 68,  49 => 67,  48 => 65,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "themes/custom/fmed_theme/newsplus_lite/templates/node.html.twig", "/mnt/c/Users/Diego/Workspace/fmed.uba.ar/src/web/themes/custom/fmed_theme/newsplus_lite/templates/node.html.twig");
    }
}
