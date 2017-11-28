<?php

/* {# inline_template_start #}<a href="{{ field_link__uri }}"  class="sliderPortada"">
{{ field_imagen }} 
<div class="sliderText"   data-color="{{ field_color_destaque }}">
 <h2>{{ title }}</h2>
 <p>{{ field_bajada }} </p>
</div>
</a> */
class __TwigTemplate_41819cf46e754c76ef85ffdfd16e26eac9a05550334cf20b055c30b5a93dd069 extends Twig_Template
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
        $tags = array();
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array(),
                array(),
                array()
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

        // line 1
        echo "<a href=\"";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["field_link__uri"] ?? null), "html", null, true));
        echo "\"  class=\"sliderPortada\"\">
";
        // line 2
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["field_imagen"] ?? null), "html", null, true));
        echo " 
<div class=\"sliderText\"   data-color=\"";
        // line 3
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["field_color_destaque"] ?? null), "html", null, true));
        echo "\">
 <h2>";
        // line 4
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["title"] ?? null), "html", null, true));
        echo "</h2>
 <p>";
        // line 5
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["field_bajada"] ?? null), "html", null, true));
        echo " </p>
</div>
</a>";
    }

    public function getTemplateName()
    {
        return "{# inline_template_start #}<a href=\"{{ field_link__uri }}\"  class=\"sliderPortada\"\">
{{ field_imagen }} 
<div class=\"sliderText\"   data-color=\"{{ field_color_destaque }}\">
 <h2>{{ title }}</h2>
 <p>{{ field_bajada }} </p>
</div>
</a>";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  66 => 5,  62 => 4,  58 => 3,  54 => 2,  49 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "{# inline_template_start #}<a href=\"{{ field_link__uri }}\"  class=\"sliderPortada\"\">
{{ field_imagen }} 
<div class=\"sliderText\"   data-color=\"{{ field_color_destaque }}\">
 <h2>{{ title }}</h2>
 <p>{{ field_bajada }} </p>
</div>
</a>", "");
    }
}
