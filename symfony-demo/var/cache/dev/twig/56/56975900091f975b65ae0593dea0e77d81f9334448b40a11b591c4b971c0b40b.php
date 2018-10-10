<?php

/* blog/_rss.html.twig */
class __TwigTemplate_a90b99691a73e66a414ca060b2fb09a91ef5b312193565422d4caee890cbd9a6 extends Twig_Template
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
        $__internal_6ae5cb63916d01e215e816da436c08fbad0c4e20a4e5cc2e7aacc806b7c7f043 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6ae5cb63916d01e215e816da436c08fbad0c4e20a4e5cc2e7aacc806b7c7f043->enter($__internal_6ae5cb63916d01e215e816da436c08fbad0c4e20a4e5cc2e7aacc806b7c7f043_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "blog/_rss.html.twig"));

        $__internal_e1478452f09e65a080fda41e4bb6c17f3219ffd8a07834509583c04af65d4194 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e1478452f09e65a080fda41e4bb6c17f3219ffd8a07834509583c04af65d4194->enter($__internal_e1478452f09e65a080fda41e4bb6c17f3219ffd8a07834509583c04af65d4194_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "blog/_rss.html.twig"));

        // line 1
        echo "<div class=\"section rss\">
    <a href=\"";
        // line 2
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("blog_rss");
        echo "\">
        <i class=\"fa fa-rss\" aria-hidden=\"true\"></i> ";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("menu.rss"), "html", null, true);
        echo "
    </a>
</div>
";
        
        $__internal_6ae5cb63916d01e215e816da436c08fbad0c4e20a4e5cc2e7aacc806b7c7f043->leave($__internal_6ae5cb63916d01e215e816da436c08fbad0c4e20a4e5cc2e7aacc806b7c7f043_prof);

        
        $__internal_e1478452f09e65a080fda41e4bb6c17f3219ffd8a07834509583c04af65d4194->leave($__internal_e1478452f09e65a080fda41e4bb6c17f3219ffd8a07834509583c04af65d4194_prof);

    }

    public function getTemplateName()
    {
        return "blog/_rss.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  32 => 3,  28 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"section rss\">
    <a href=\"{{ path('blog_rss') }}\">
        <i class=\"fa fa-rss\" aria-hidden=\"true\"></i> {{ 'menu.rss'|trans }}
    </a>
</div>
", "blog/_rss.html.twig", "/var/www/symfony/templates/blog/_rss.html.twig");
    }
}
