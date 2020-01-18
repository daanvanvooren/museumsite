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

/* themes/magazine_lite/templates/node.html.twig */
class __TwigTemplate_619898139b0a4dfc2094e2f40223baf2f1031da3e5a9c0dfdcea556c97d8fdb8 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'node_side' => [$this, 'block_node_side'],
            'header_top' => [$this, 'block_header_top'],
            'title_area' => [$this, 'block_title_area'],
            'meta_area' => [$this, 'block_meta_area'],
            'content' => [$this, 'block_content'],
            'content_bottom' => [$this, 'block_content_bottom'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["set" => 70, "block" => 84, "if" => 92, "trans" => 108];
        $filters = ["clean_class" => 72, "escape" => 80];
        $functions = ["attach_library" => 80];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'block', 'if', 'trans'],
                ['clean_class', 'escape'],
                ['attach_library']
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
        // line 70
        $context["classes"] = [0 => "node", 1 => ("node--type-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed($this->getAttribute(        // line 72
($context["node"] ?? null), "bundle", [])))), 2 => (($this->getAttribute(        // line 73
($context["node"] ?? null), "isPromoted", [], "method")) ? ("node--promoted") : ("")), 3 => (($this->getAttribute(        // line 74
($context["node"] ?? null), "isSticky", [], "method")) ? ("node--sticky") : ("")), 4 => (( !$this->getAttribute(        // line 75
($context["node"] ?? null), "isPublished", [], "method")) ? ("node--unpublished") : ("")), 5 => ((        // line 76
($context["view_mode"] ?? null)) ? (("node--view-mode-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(($context["view_mode"] ?? null))))) : ("")), 6 => "clearfix"];
        // line 80
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->attachLibrary("classy/node"), "html", null, true);
        echo "
";
        // line 81
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->attachLibrary("magazine_lite/node"), "html", null, true);
        echo "
<article";
        // line 82
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method")), "html", null, true);
        echo ">
  <div class=\"node__container\">
    ";
        // line 84
        $this->displayBlock('node_side', $context, $blocks);
        // line 86
        echo "    <div";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content_attributes"] ?? null), "addClass", [0 => "node__main-content", 1 => "clearfix"], "method")), "html", null, true);
        echo ">
      ";
        // line 87
        $this->displayBlock('header_top', $context, $blocks);
        // line 89
        echo "      <header class=\"node__header\">
        ";
        // line 90
        $this->displayBlock('title_area', $context, $blocks);
        // line 103
        echo "        ";
        $this->displayBlock('meta_area', $context, $blocks);
        // line 119
        echo "      </header>
      ";
        // line 120
        $this->displayBlock('content', $context, $blocks);
        // line 123
        echo "      ";
        $this->displayBlock('content_bottom', $context, $blocks);
        // line 125
        echo "    </div>
  </div>
</article>
";
    }

    // line 84
    public function block_node_side($context, array $blocks = [])
    {
        // line 85
        echo "    ";
    }

    // line 87
    public function block_header_top($context, array $blocks = [])
    {
        // line 88
        echo "      ";
    }

    // line 90
    public function block_title_area($context, array $blocks = [])
    {
        // line 91
        echo "          ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_prefix"] ?? null)), "html", null, true);
        echo "
          ";
        // line 92
        if ( !($context["page"] ?? null)) {
            // line 93
            echo "            <h2";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["title_attributes"] ?? null), "addClass", [0 => "node__title"], "method")), "html", null, true);
            echo ">
              <a href=\"";
            // line 94
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["url"] ?? null)), "html", null, true);
            echo "\" rel=\"bookmark\">";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null)), "html", null, true);
            echo "</a>
            </h2>
          ";
        } else {
            // line 97
            echo "            <h2";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["title_attributes"] ?? null), "addClass", [0 => "node__title title sr-only"], "method")), "html", null, true);
            echo ">
              ";
            // line 98
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null)), "html", null, true);
            echo "
            </h2>
          ";
        }
        // line 101
        echo "          ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_suffix"] ?? null)), "html", null, true);
        echo "
        ";
    }

    // line 103
    public function block_meta_area($context, array $blocks = [])
    {
        // line 104
        echo "          ";
        if (($context["display_submitted"] ?? null)) {
            // line 105
            echo "            <div class=\"node__meta\">
              ";
            // line 106
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["author_picture"] ?? null)), "html", null, true);
            echo "
              <span";
            // line 107
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["author_attributes"] ?? null), "addClass", [0 => "node__submitted-info"], "method")), "html", null, true);
            echo ">
                ";
            // line 108
            echo t("<span class=\"node__submitted-info-text\">By</span> @author_name on 
                  <span class=\"node__submitted-date\">
                    @date
                  </span>", array("@author_name" =>             // line 109
($context["author_name"] ?? null), "@date" =>             // line 111
($context["date"] ?? null), ));
            // line 114
            echo "              </span>
              ";
            // line 115
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["metadata"] ?? null)), "html", null, true);
            echo "
            </div>
          ";
        }
        // line 118
        echo "        ";
    }

    // line 120
    public function block_content($context, array $blocks = [])
    {
        // line 121
        echo "        ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content"] ?? null)), "html", null, true);
        echo "
      ";
    }

    // line 123
    public function block_content_bottom($context, array $blocks = [])
    {
        // line 124
        echo "      ";
    }

    public function getTemplateName()
    {
        return "themes/magazine_lite/templates/node.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  218 => 124,  215 => 123,  208 => 121,  205 => 120,  201 => 118,  195 => 115,  192 => 114,  190 => 111,  189 => 109,  185 => 108,  181 => 107,  177 => 106,  174 => 105,  171 => 104,  168 => 103,  161 => 101,  155 => 98,  150 => 97,  142 => 94,  137 => 93,  135 => 92,  130 => 91,  127 => 90,  123 => 88,  120 => 87,  116 => 85,  113 => 84,  106 => 125,  103 => 123,  101 => 120,  98 => 119,  95 => 103,  93 => 90,  90 => 89,  88 => 87,  83 => 86,  81 => 84,  76 => 82,  72 => 81,  68 => 80,  66 => 76,  65 => 75,  64 => 74,  63 => 73,  62 => 72,  61 => 70,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "themes/magazine_lite/templates/node.html.twig", "C:\\xampp\\htdocs\\museumsite\\themes\\magazine_lite\\templates\\node.html.twig");
    }
}
