<?php

/* admin/layout.html.twig */
class __TwigTemplate_5decc9794e94b2bca76d9055971c0768be228bec46df8ac763d97a42cda643ae extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 8
        $this->parent = $this->loadTemplate("base.html.twig", "admin/layout.html.twig", 8);
        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'header_navigation_links' => array($this, 'block_header_navigation_links'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e7d24a2521600e7802a362e5796c6f98d0ec25834d8262d53d614fca9295d039 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e7d24a2521600e7802a362e5796c6f98d0ec25834d8262d53d614fca9295d039->enter($__internal_e7d24a2521600e7802a362e5796c6f98d0ec25834d8262d53d614fca9295d039_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/layout.html.twig"));

        $__internal_153519bb1ddd9fb57eff29e3cbc1d921819771c24dadf052e5d6f73488126cbf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_153519bb1ddd9fb57eff29e3cbc1d921819771c24dadf052e5d6f73488126cbf->enter($__internal_153519bb1ddd9fb57eff29e3cbc1d921819771c24dadf052e5d6f73488126cbf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e7d24a2521600e7802a362e5796c6f98d0ec25834d8262d53d614fca9295d039->leave($__internal_e7d24a2521600e7802a362e5796c6f98d0ec25834d8262d53d614fca9295d039_prof);

        
        $__internal_153519bb1ddd9fb57eff29e3cbc1d921819771c24dadf052e5d6f73488126cbf->leave($__internal_153519bb1ddd9fb57eff29e3cbc1d921819771c24dadf052e5d6f73488126cbf_prof);

    }

    // line 10
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_24b92ebd39abb3768b94a9dc3885af3c23b01bae523cdeec542e61f90cda42ca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_24b92ebd39abb3768b94a9dc3885af3c23b01bae523cdeec542e61f90cda42ca->enter($__internal_24b92ebd39abb3768b94a9dc3885af3c23b01bae523cdeec542e61f90cda42ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_7ab26ca592b73efc4ca3cf85c8d05975af190b17432d774b809a051a633bc8fd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7ab26ca592b73efc4ca3cf85c8d05975af190b17432d774b809a051a633bc8fd->enter($__internal_7ab26ca592b73efc4ca3cf85c8d05975af190b17432d774b809a051a633bc8fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 11
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("build/css/admin.css"), "html", null, true);
        echo "\">
";
        
        $__internal_7ab26ca592b73efc4ca3cf85c8d05975af190b17432d774b809a051a633bc8fd->leave($__internal_7ab26ca592b73efc4ca3cf85c8d05975af190b17432d774b809a051a633bc8fd_prof);

        
        $__internal_24b92ebd39abb3768b94a9dc3885af3c23b01bae523cdeec542e61f90cda42ca->leave($__internal_24b92ebd39abb3768b94a9dc3885af3c23b01bae523cdeec542e61f90cda42ca_prof);

    }

    // line 15
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_f1dc8d4a079375f1f8ad9991e993f278e28726a0018d0218f9b1496abd98e9fe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f1dc8d4a079375f1f8ad9991e993f278e28726a0018d0218f9b1496abd98e9fe->enter($__internal_f1dc8d4a079375f1f8ad9991e993f278e28726a0018d0218f9b1496abd98e9fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_93b20bbf969056e470ce1f9317756121ee20c1d69cfc6fc23b02d4012400ccfb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_93b20bbf969056e470ce1f9317756121ee20c1d69cfc6fc23b02d4012400ccfb->enter($__internal_93b20bbf969056e470ce1f9317756121ee20c1d69cfc6fc23b02d4012400ccfb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 16
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script src=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("build/js/admin.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_93b20bbf969056e470ce1f9317756121ee20c1d69cfc6fc23b02d4012400ccfb->leave($__internal_93b20bbf969056e470ce1f9317756121ee20c1d69cfc6fc23b02d4012400ccfb_prof);

        
        $__internal_f1dc8d4a079375f1f8ad9991e993f278e28726a0018d0218f9b1496abd98e9fe->leave($__internal_f1dc8d4a079375f1f8ad9991e993f278e28726a0018d0218f9b1496abd98e9fe_prof);

    }

    // line 20
    public function block_header_navigation_links($context, array $blocks = array())
    {
        $__internal_c66c589f5133f45c4f15271b528bccb404f32a613b53b40effc4c26959994482 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c66c589f5133f45c4f15271b528bccb404f32a613b53b40effc4c26959994482->enter($__internal_c66c589f5133f45c4f15271b528bccb404f32a613b53b40effc4c26959994482_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_navigation_links"));

        $__internal_b924a8647f391c6483ef2936c20add52258ca70181a2a54d02173b49a62640b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b924a8647f391c6483ef2936c20add52258ca70181a2a54d02173b49a62640b7->enter($__internal_b924a8647f391c6483ef2936c20add52258ca70181a2a54d02173b49a62640b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_navigation_links"));

        // line 21
        echo "    <li>
        <a href=\"";
        // line 22
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_post_index");
        echo "\">
            <i class=\"fa fa-list-alt\" aria-hidden=\"true\"></i> ";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("menu.post_list"), "html", null, true);
        echo "
        </a>
    </li>
    <li>
        <a href=\"";
        // line 27
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("blog_index");
        echo "\">
            <i class=\"fa fa-home\" aria-hidden=\"true\"></i> ";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("menu.back_to_blog"), "html", null, true);
        echo "
        </a>
    </li>
";
        
        $__internal_b924a8647f391c6483ef2936c20add52258ca70181a2a54d02173b49a62640b7->leave($__internal_b924a8647f391c6483ef2936c20add52258ca70181a2a54d02173b49a62640b7_prof);

        
        $__internal_c66c589f5133f45c4f15271b528bccb404f32a613b53b40effc4c26959994482->leave($__internal_c66c589f5133f45c4f15271b528bccb404f32a613b53b40effc4c26959994482_prof);

    }

    public function getTemplateName()
    {
        return "admin/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  121 => 28,  117 => 27,  110 => 23,  106 => 22,  103 => 21,  94 => 20,  82 => 17,  77 => 16,  68 => 15,  56 => 12,  51 => 11,  42 => 10,  11 => 8,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#
   This is the base template of the all backend pages. Since this layout is similar
   to the global layout, we inherit from it to just change the contents of some
   blocks. In practice, backend templates are using a three-level inheritance,
   showing how powerful, yet easy to use, is Twig's inheritance mechanism.
   See https://symfony.com/doc/current/book/templating.html#template-inheritance-and-layouts
#}
{% extends 'base.html.twig' %}

{% block stylesheets %}
    {{ parent() }}
    <link rel=\"stylesheet\" href=\"{{ asset('build/css/admin.css') }}\">
{% endblock %}

{% block javascripts %}
    {{ parent() }}
    <script src=\"{{ asset('build/js/admin.js') }}\"></script>
{% endblock %}

{% block header_navigation_links %}
    <li>
        <a href=\"{{ path('admin_post_index') }}\">
            <i class=\"fa fa-list-alt\" aria-hidden=\"true\"></i> {{ 'menu.post_list'|trans }}
        </a>
    </li>
    <li>
        <a href=\"{{ path('blog_index') }}\">
            <i class=\"fa fa-home\" aria-hidden=\"true\"></i> {{ 'menu.back_to_blog'|trans }}
        </a>
    </li>
{% endblock %}
", "admin/layout.html.twig", "/var/www/symfony/templates/admin/layout.html.twig");
    }
}
