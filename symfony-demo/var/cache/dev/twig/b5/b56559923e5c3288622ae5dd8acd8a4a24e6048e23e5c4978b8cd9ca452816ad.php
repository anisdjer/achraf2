<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_9e018aedd59b0670a7c905b207f3e6e35f97253491ba3e890da7c4d1bdf373ef extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f156de14b004a34f6470f1e69bcde70fccad004606fd434dafd9c884d612ae9c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f156de14b004a34f6470f1e69bcde70fccad004606fd434dafd9c884d612ae9c->enter($__internal_f156de14b004a34f6470f1e69bcde70fccad004606fd434dafd9c884d612ae9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_add7e1586574ceb8b81021a5626504e73ab4eaed793705dfd423367fe8452b98 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_add7e1586574ceb8b81021a5626504e73ab4eaed793705dfd423367fe8452b98->enter($__internal_add7e1586574ceb8b81021a5626504e73ab4eaed793705dfd423367fe8452b98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f156de14b004a34f6470f1e69bcde70fccad004606fd434dafd9c884d612ae9c->leave($__internal_f156de14b004a34f6470f1e69bcde70fccad004606fd434dafd9c884d612ae9c_prof);

        
        $__internal_add7e1586574ceb8b81021a5626504e73ab4eaed793705dfd423367fe8452b98->leave($__internal_add7e1586574ceb8b81021a5626504e73ab4eaed793705dfd423367fe8452b98_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_0f9dcfce35d2b83e3342ae3ed2a58c60a744a24399cc89117fb0876302cd3551 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0f9dcfce35d2b83e3342ae3ed2a58c60a744a24399cc89117fb0876302cd3551->enter($__internal_0f9dcfce35d2b83e3342ae3ed2a58c60a744a24399cc89117fb0876302cd3551_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_8ee1dcfbbd4d8a63e91e4b73a50fd9b36baad66afd10c4a32e5554e5d6bea0bb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8ee1dcfbbd4d8a63e91e4b73a50fd9b36baad66afd10c4a32e5554e5d6bea0bb->enter($__internal_8ee1dcfbbd4d8a63e91e4b73a50fd9b36baad66afd10c4a32e5554e5d6bea0bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_8ee1dcfbbd4d8a63e91e4b73a50fd9b36baad66afd10c4a32e5554e5d6bea0bb->leave($__internal_8ee1dcfbbd4d8a63e91e4b73a50fd9b36baad66afd10c4a32e5554e5d6bea0bb_prof);

        
        $__internal_0f9dcfce35d2b83e3342ae3ed2a58c60a744a24399cc89117fb0876302cd3551->leave($__internal_0f9dcfce35d2b83e3342ae3ed2a58c60a744a24399cc89117fb0876302cd3551_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "@WebProfiler/Collector/ajax.html.twig", "/var/www/symfony/vendor/symfony/web-profiler-bundle/Resources/views/Collector/ajax.html.twig");
    }
}
