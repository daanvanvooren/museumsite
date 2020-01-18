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

/* modules/fullcalendar_view/templates/views-view-fullcalendar.html.twig */
class __TwigTemplate_b438de0242341b6c3e85691d252c0acbcebec29de1e5537955d89d3705f290fd extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["set" => 18, "if" => 25];
        $filters = ["escape" => 22, "t" => 28];
        $functions = ["path" => 27];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if'],
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
        // line 18
        $context["classes"] = [0 => $this->getAttribute(        // line 19
($context["options"] ?? null), "classes", [])];
        // line 22
        echo "<div";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method")), "html", null, true);
        echo ">
  <div class=\"js-drupal-fullcalendar\"></div>
  <div id=\"bottom-buttons fc-button-group\">
    ";
        // line 25
        if (($context["showAddEvent"] ?? null)) {
            // line 26
            echo "    <div class=\"fullcalendar-bottom-btn add-event-btn\">
        <a id=\"calendar-add-event\"  href=\"";
            // line 27
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["language"] ?? null)), "html", null, true);
            echo "fullcalendar-view-event-add?entity=";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["entity_id"] ?? null)), "html", null, true);
            echo "&bundle=";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["options"] ?? null), "bundle_type", [])), "html", null, true);
            echo "&start_field=";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["options"] ?? null), "start", [])), "html", null, true);
            echo "&end_field=";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["options"] ?? null), "end", [])), "html", null, true);
            echo "&destination=";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\Core\Template\TwigExtension')->getPath("<current>"));
            echo "\" class=\"use-ajax\" data-dialog-type=\"dialog\" data-dialog-renderer=\"off_canvas\" 
   data-dialog-options=\"{&quot;width&quot;:400}\">";
            // line 28
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Add event"));
            echo "</a>
    </div>
    ";
        }
        // line 31
        echo "    <div class=\"fullcalendar-bottom-btn locale-selector\">
      <label for=\"locale-selector\">";
        // line 32
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Select Language:"));
        echo "</label>
      <select id='locale-selector'></select>
    </div>
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "modules/fullcalendar_view/templates/views-view-fullcalendar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 32,  90 => 31,  84 => 28,  70 => 27,  67 => 26,  65 => 25,  58 => 22,  56 => 19,  55 => 18,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "modules/fullcalendar_view/templates/views-view-fullcalendar.html.twig", "C:\\xampp\\htdocs\\museumsite\\modules\\fullcalendar_view\\templates\\views-view-fullcalendar.html.twig");
    }
}
