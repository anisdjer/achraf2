<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_5fe9a861976581513149c279f1af658fd70233df038d5af4340c898e976bac4d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
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
        $__internal_a7d571424c38dbf9b503c720934f05d229ffba4ec7d2d774418f8f5912a42815 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a7d571424c38dbf9b503c720934f05d229ffba4ec7d2d774418f8f5912a42815->enter($__internal_a7d571424c38dbf9b503c720934f05d229ffba4ec7d2d774418f8f5912a42815_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_db10666610d270c40b4687f69f9505a1ba1cd683cd82c7f22f0eaf7c2b807984 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_db10666610d270c40b4687f69f9505a1ba1cd683cd82c7f22f0eaf7c2b807984->enter($__internal_db10666610d270c40b4687f69f9505a1ba1cd683cd82c7f22f0eaf7c2b807984_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a7d571424c38dbf9b503c720934f05d229ffba4ec7d2d774418f8f5912a42815->leave($__internal_a7d571424c38dbf9b503c720934f05d229ffba4ec7d2d774418f8f5912a42815_prof);

        
        $__internal_db10666610d270c40b4687f69f9505a1ba1cd683cd82c7f22f0eaf7c2b807984->leave($__internal_db10666610d270c40b4687f69f9505a1ba1cd683cd82c7f22f0eaf7c2b807984_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_5e55e96732ffc2aad11a77c92d1b18762cbf18aafa75887b7d7c45bdce49f03a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5e55e96732ffc2aad11a77c92d1b18762cbf18aafa75887b7d7c45bdce49f03a->enter($__internal_5e55e96732ffc2aad11a77c92d1b18762cbf18aafa75887b7d7c45bdce49f03a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_399e2f4d0990fbc1111ea37de4f5511d7ccdfb4a6d94dee6f6f04db843cea472 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_399e2f4d0990fbc1111ea37de4f5511d7ccdfb4a6d94dee6f6f04db843cea472->enter($__internal_399e2f4d0990fbc1111ea37de4f5511d7ccdfb4a6d94dee6f6f04db843cea472_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_399e2f4d0990fbc1111ea37de4f5511d7ccdfb4a6d94dee6f6f04db843cea472->leave($__internal_399e2f4d0990fbc1111ea37de4f5511d7ccdfb4a6d94dee6f6f04db843cea472_prof);

        
        $__internal_5e55e96732ffc2aad11a77c92d1b18762cbf18aafa75887b7d7c45bdce49f03a->leave($__internal_5e55e96732ffc2aad11a77c92d1b18762cbf18aafa75887b7d7c45bdce49f03a_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_47bb58fb808cc42e1b12064bfab0d0b717aa820b77880ed18ad33a0521e152ab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_47bb58fb808cc42e1b12064bfab0d0b717aa820b77880ed18ad33a0521e152ab->enter($__internal_47bb58fb808cc42e1b12064bfab0d0b717aa820b77880ed18ad33a0521e152ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_516f0ea928d8b49b3e2eeedd3ff252bd8d369280eb96f9fa24664d2493a109d5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_516f0ea928d8b49b3e2eeedd3ff252bd8d369280eb96f9fa24664d2493a109d5->enter($__internal_516f0ea928d8b49b3e2eeedd3ff252bd8d369280eb96f9fa24664d2493a109d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_516f0ea928d8b49b3e2eeedd3ff252bd8d369280eb96f9fa24664d2493a109d5->leave($__internal_516f0ea928d8b49b3e2eeedd3ff252bd8d369280eb96f9fa24664d2493a109d5_prof);

        
        $__internal_47bb58fb808cc42e1b12064bfab0d0b717aa820b77880ed18ad33a0521e152ab->leave($__internal_47bb58fb808cc42e1b12064bfab0d0b717aa820b77880ed18ad33a0521e152ab_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_fd7fed6fc828536d8c1127e33846d1ee27efe1776896886dbefea5a9e16000e8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fd7fed6fc828536d8c1127e33846d1ee27efe1776896886dbefea5a9e16000e8->enter($__internal_fd7fed6fc828536d8c1127e33846d1ee27efe1776896886dbefea5a9e16000e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_687059c4ec2ff75d86e82de1aab59d9155c6449ea029db4906f43da3c8c0d13f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_687059c4ec2ff75d86e82de1aab59d9155c6449ea029db4906f43da3c8c0d13f->enter($__internal_687059c4ec2ff75d86e82de1aab59d9155c6449ea029db4906f43da3c8c0d13f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 13, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_687059c4ec2ff75d86e82de1aab59d9155c6449ea029db4906f43da3c8c0d13f->leave($__internal_687059c4ec2ff75d86e82de1aab59d9155c6449ea029db4906f43da3c8c0d13f_prof);

        
        $__internal_fd7fed6fc828536d8c1127e33846d1ee27efe1776896886dbefea5a9e16000e8->leave($__internal_fd7fed6fc828536d8c1127e33846d1ee27efe1776896886dbefea5a9e16000e8_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/var/www/symfony/vendor/symfony/web-profiler-bundle/Resources/views/Collector/router.html.twig");
    }
}
