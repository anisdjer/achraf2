<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_b0cfb770607338bd16e7c5d891fdc4d0ca130731eabfd232ebf1bbd19e411e97 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c4b230fae8b00542d86883774926dabc6e45ae8a18ba91eb02966cd2e64f8f84 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c4b230fae8b00542d86883774926dabc6e45ae8a18ba91eb02966cd2e64f8f84->enter($__internal_c4b230fae8b00542d86883774926dabc6e45ae8a18ba91eb02966cd2e64f8f84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_1c9de64c31566f7aac329e2d1c532a4e5e5d7046a592782c9363347ff3bb8d84 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1c9de64c31566f7aac329e2d1c532a4e5e5d7046a592782c9363347ff3bb8d84->enter($__internal_1c9de64c31566f7aac329e2d1c532a4e5e5d7046a592782c9363347ff3bb8d84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c4b230fae8b00542d86883774926dabc6e45ae8a18ba91eb02966cd2e64f8f84->leave($__internal_c4b230fae8b00542d86883774926dabc6e45ae8a18ba91eb02966cd2e64f8f84_prof);

        
        $__internal_1c9de64c31566f7aac329e2d1c532a4e5e5d7046a592782c9363347ff3bb8d84->leave($__internal_1c9de64c31566f7aac329e2d1c532a4e5e5d7046a592782c9363347ff3bb8d84_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_4d79528cdbe8eb41cf8a3682b8cc1191a9bdc850665fb3152842dd9bc61939e6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4d79528cdbe8eb41cf8a3682b8cc1191a9bdc850665fb3152842dd9bc61939e6->enter($__internal_4d79528cdbe8eb41cf8a3682b8cc1191a9bdc850665fb3152842dd9bc61939e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_20c91778f441888e3603c30945f08833981c552c07f4e48d7eddbe31e18c6eb0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_20c91778f441888e3603c30945f08833981c552c07f4e48d7eddbe31e18c6eb0->enter($__internal_20c91778f441888e3603c30945f08833981c552c07f4e48d7eddbe31e18c6eb0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 4, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 6, $this->getSourceContext()); })()))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_20c91778f441888e3603c30945f08833981c552c07f4e48d7eddbe31e18c6eb0->leave($__internal_20c91778f441888e3603c30945f08833981c552c07f4e48d7eddbe31e18c6eb0_prof);

        
        $__internal_4d79528cdbe8eb41cf8a3682b8cc1191a9bdc850665fb3152842dd9bc61939e6->leave($__internal_4d79528cdbe8eb41cf8a3682b8cc1191a9bdc850665fb3152842dd9bc61939e6_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_8a4c8bea72d06ca9c8f54bd92041326d1d6ee46b840ed6eaa0e5d0dd593554bf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8a4c8bea72d06ca9c8f54bd92041326d1d6ee46b840ed6eaa0e5d0dd593554bf->enter($__internal_8a4c8bea72d06ca9c8f54bd92041326d1d6ee46b840ed6eaa0e5d0dd593554bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_78b5a28d16ec5466351ba33b3d19b24f72ab91bbf6a694643f690cc5264a55e4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_78b5a28d16ec5466351ba33b3d19b24f72ab91bbf6a694643f690cc5264a55e4->enter($__internal_78b5a28d16ec5466351ba33b3d19b24f72ab91bbf6a694643f690cc5264a55e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo ((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 13, $this->getSourceContext()); })()), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 16, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_78b5a28d16ec5466351ba33b3d19b24f72ab91bbf6a694643f690cc5264a55e4->leave($__internal_78b5a28d16ec5466351ba33b3d19b24f72ab91bbf6a694643f690cc5264a55e4_prof);

        
        $__internal_8a4c8bea72d06ca9c8f54bd92041326d1d6ee46b840ed6eaa0e5d0dd593554bf->leave($__internal_8a4c8bea72d06ca9c8f54bd92041326d1d6ee46b840ed6eaa0e5d0dd593554bf_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_8ae2bae48fbc6c772f41f522f8098dd9d1f350ff54de1860066bf3068de39b4f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8ae2bae48fbc6c772f41f522f8098dd9d1f350ff54de1860066bf3068de39b4f->enter($__internal_8ae2bae48fbc6c772f41f522f8098dd9d1f350ff54de1860066bf3068de39b4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_40735e06dfb024588030f7625fb52f000e1c53ef36c8c5e104a34fc82e028b21 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_40735e06dfb024588030f7625fb52f000e1c53ef36c8c5e104a34fc82e028b21->enter($__internal_40735e06dfb024588030f7625fb52f000e1c53ef36c8c5e104a34fc82e028b21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 27, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 33, $this->getSourceContext()); })()))));
            echo "
        </div>
    ";
        }
        
        $__internal_40735e06dfb024588030f7625fb52f000e1c53ef36c8c5e104a34fc82e028b21->leave($__internal_40735e06dfb024588030f7625fb52f000e1c53ef36c8c5e104a34fc82e028b21_prof);

        
        $__internal_8ae2bae48fbc6c772f41f522f8098dd9d1f350ff54de1860066bf3068de39b4f->leave($__internal_8ae2bae48fbc6c772f41f522f8098dd9d1f350ff54de1860066bf3068de39b4f_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "/var/www/symfony/vendor/symfony/web-profiler-bundle/Resources/views/Collector/exception.html.twig");
    }
}
