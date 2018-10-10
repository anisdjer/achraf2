<?php

/* debug/source_code.html.twig */
class __TwigTemplate_7113ab02b859fd41da07ec4f80fc68d1db5f5759e2c1038b60b5809b40d3affc extends Twig_Template
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
        $__internal_28a82c602b38052e2473959493bea79c6730f6a060d3dac62b857dfcdf3a1525 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_28a82c602b38052e2473959493bea79c6730f6a060d3dac62b857dfcdf3a1525->enter($__internal_28a82c602b38052e2473959493bea79c6730f6a060d3dac62b857dfcdf3a1525_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "debug/source_code.html.twig"));

        $__internal_239cc891b6830637e02821964e80a1d2bfca375210813484893e5949db11e67c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_239cc891b6830637e02821964e80a1d2bfca375210813484893e5949db11e67c->enter($__internal_239cc891b6830637e02821964e80a1d2bfca375210813484893e5949db11e67c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "debug/source_code.html.twig"));

        // line 1
        echo "<div class=\"section source-code\">
    <p>
        ";
        // line 3
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("help.show_code");
        echo "
    </p>

    <button type=\"button\" class=\"btn btn-default btn-lg btn-block\" data-toggle=\"modal\" data-target=\"#sourceCodeModal\">
      <i class=\"fa fa-cogs\" aria-hidden=\"true\"></i> ";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("action.show_code"), "html", null, true);
        echo "
    </button>

    <div class=\"modal fade\" id=\"sourceCodeModal\" tabindex=\"-1\">
        <div class=\"modal-dialog modal-lg\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                        <span aria-hidden=\"true\">&times;</span>
                    </button>
                    <h4 class=\"modal-title\"><i class=\"fa fa-code\" aria-hidden=\"true\"></i> ";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("title.source_code"), "html", null, true);
        echo "</h4>
                </div>

                <div class=\"modal-body\">
                    ";
        // line 21
        if ((isset($context["controller"]) || array_key_exists("controller", $context) ? $context["controller"] : (function () { throw new Twig_Error_Runtime('Variable "controller" does not exist.', 21, $this->getSourceContext()); })())) {
            // line 22
            echo "                        <h3>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("title.controller_code"), "html", null, true);
            echo "<small class=\"pull-right\">";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->formatFile(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["controller"]) || array_key_exists("controller", $context) ? $context["controller"] : (function () { throw new Twig_Error_Runtime('Variable "controller" does not exist.', 22, $this->getSourceContext()); })()), "file_path", array()), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["controller"]) || array_key_exists("controller", $context) ? $context["controller"] : (function () { throw new Twig_Error_Runtime('Variable "controller" does not exist.', 22, $this->getSourceContext()); })()), "starting_line", array()));
            echo "</small></h3>
                        <pre><code class=\"php\">";
            // line 23
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["controller"]) || array_key_exists("controller", $context) ? $context["controller"] : (function () { throw new Twig_Error_Runtime('Variable "controller" does not exist.', 23, $this->getSourceContext()); })()), "source_code", array()), "html", null, true);
            echo "</code></pre>
                    ";
        } else {
            // line 25
            echo "                        <h3>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("title.controller_code"), "html", null, true);
            echo "</h3>
                        <pre><code>";
            // line 26
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("not_available"), "html", null, true);
            echo "</code></pre>
                    ";
        }
        // line 28
        echo "
                    <h3>";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("title.twig_template_code"), "html", null, true);
        echo "<small class=\"pull-right\">";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->formatFile(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["template"]) || array_key_exists("template", $context) ? $context["template"] : (function () { throw new Twig_Error_Runtime('Variable "template" does not exist.', 29, $this->getSourceContext()); })()), "file_path", array()), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["template"]) || array_key_exists("template", $context) ? $context["template"] : (function () { throw new Twig_Error_Runtime('Variable "template" does not exist.', 29, $this->getSourceContext()); })()), "starting_line", array()));
        echo "</small></h3>
                    <pre><code class=\"twig\">";
        // line 30
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["template"]) || array_key_exists("template", $context) ? $context["template"] : (function () { throw new Twig_Error_Runtime('Variable "template" does not exist.', 30, $this->getSourceContext()); })()), "source_code", array()), "html", null, true);
        echo "</code></pre>
                </div>
            </div>
        </div>
    </div>
</div>
";
        
        $__internal_28a82c602b38052e2473959493bea79c6730f6a060d3dac62b857dfcdf3a1525->leave($__internal_28a82c602b38052e2473959493bea79c6730f6a060d3dac62b857dfcdf3a1525_prof);

        
        $__internal_239cc891b6830637e02821964e80a1d2bfca375210813484893e5949db11e67c->leave($__internal_239cc891b6830637e02821964e80a1d2bfca375210813484893e5949db11e67c_prof);

    }

    public function getTemplateName()
    {
        return "debug/source_code.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 30,  83 => 29,  80 => 28,  75 => 26,  70 => 25,  65 => 23,  58 => 22,  56 => 21,  49 => 17,  36 => 7,  29 => 3,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"section source-code\">
    <p>
        {{ 'help.show_code'|trans|raw }}
    </p>

    <button type=\"button\" class=\"btn btn-default btn-lg btn-block\" data-toggle=\"modal\" data-target=\"#sourceCodeModal\">
      <i class=\"fa fa-cogs\" aria-hidden=\"true\"></i> {{ 'action.show_code'|trans }}
    </button>

    <div class=\"modal fade\" id=\"sourceCodeModal\" tabindex=\"-1\">
        <div class=\"modal-dialog modal-lg\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                        <span aria-hidden=\"true\">&times;</span>
                    </button>
                    <h4 class=\"modal-title\"><i class=\"fa fa-code\" aria-hidden=\"true\"></i> {{ 'title.source_code'|trans }}</h4>
                </div>

                <div class=\"modal-body\">
                    {% if controller %}
                        <h3>{{ 'title.controller_code'|trans }}<small class=\"pull-right\">{{ controller.file_path|format_file(controller.starting_line) }}</small></h3>
                        <pre><code class=\"php\">{{ controller.source_code }}</code></pre>
                    {% else %}
                        <h3>{{ 'title.controller_code'|trans }}</h3>
                        <pre><code>{{ 'not_available'|trans }}</code></pre>
                    {% endif %}

                    <h3>{{ 'title.twig_template_code'|trans }}<small class=\"pull-right\">{{ template.file_path|format_file(template.starting_line) }}</small></h3>
                    <pre><code class=\"twig\">{{ template.source_code }}</code></pre>
                </div>
            </div>
        </div>
    </div>
</div>
", "debug/source_code.html.twig", "/var/www/symfony/templates/debug/source_code.html.twig");
    }
}
