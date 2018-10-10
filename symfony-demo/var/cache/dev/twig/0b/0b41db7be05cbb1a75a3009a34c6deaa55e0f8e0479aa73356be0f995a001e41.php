<?php

/* blog/about.html.twig */
class __TwigTemplate_4beb05b9cbad02c5afab1236291b9b5f40808c3b162319b95091ebe0b3d77dd7 extends Twig_Template
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
        $__internal_89ad0e3bdfa03501bc0d115ab0c02f6938ed51460f576f76d483b427e12ccd69 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_89ad0e3bdfa03501bc0d115ab0c02f6938ed51460f576f76d483b427e12ccd69->enter($__internal_89ad0e3bdfa03501bc0d115ab0c02f6938ed51460f576f76d483b427e12ccd69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "blog/about.html.twig"));

        $__internal_f0bd66ba2a92e2a85d9fb848f62f2d76dd3fb4007f5e8e4c4d79081cd5954828 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f0bd66ba2a92e2a85d9fb848f62f2d76dd3fb4007f5e8e4c4d79081cd5954828->enter($__internal_f0bd66ba2a92e2a85d9fb848f62f2d76dd3fb4007f5e8e4c4d79081cd5954828_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "blog/about.html.twig"));

        // line 1
        echo "<div class=\"section about\">
    <div class=\"well well-lg\">
        <p>
            ";
        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("help.app_description");
        echo "
        </p>
        <p>
            ";
        // line 7
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("help.more_information");
        echo "
        </p>
    </div>
</div>

";
        // line 15
        echo "<!-- Fragment rendered on ";
        echo twig_escape_filter($this->env, twig_localized_date_filter($this->env, "now", "long", "long", null, "UTC"), "html", null, true);
        echo " -->
";
        
        $__internal_89ad0e3bdfa03501bc0d115ab0c02f6938ed51460f576f76d483b427e12ccd69->leave($__internal_89ad0e3bdfa03501bc0d115ab0c02f6938ed51460f576f76d483b427e12ccd69_prof);

        
        $__internal_f0bd66ba2a92e2a85d9fb848f62f2d76dd3fb4007f5e8e4c4d79081cd5954828->leave($__internal_f0bd66ba2a92e2a85d9fb848f62f2d76dd3fb4007f5e8e4c4d79081cd5954828_prof);

    }

    public function getTemplateName()
    {
        return "blog/about.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 15,  36 => 7,  30 => 4,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"section about\">
    <div class=\"well well-lg\">
        <p>
            {{ 'help.app_description'|trans|raw }}
        </p>
        <p>
            {{ 'help.more_information'|trans|raw }}
        </p>
    </div>
</div>

{# it's not mandatory to set the timezone in localizeddate(). This is done to
   avoid errors when the 'intl' PHP extension is not available and the application
   is forced to use the limited \"intl polyfill\", which only supports UTC and GMT #}
<!-- Fragment rendered on {{ 'now'|localizeddate('long', 'long', null, 'UTC') }} -->
", "blog/about.html.twig", "/var/www/symfony/templates/blog/about.html.twig");
    }
}
