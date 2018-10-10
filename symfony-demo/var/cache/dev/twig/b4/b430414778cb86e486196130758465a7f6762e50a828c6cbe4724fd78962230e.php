<?php

/* blog/_post_tags.html.twig */
class __TwigTemplate_494ee1165625c1ea818ea158a6e6780fb41e871111f8aa6928e86e94ad2d5847 extends Twig_Template
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
        $__internal_61b18e4193aed063d94a5d592373ef26e4256f22374e2f01a233ea3d94c90317 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_61b18e4193aed063d94a5d592373ef26e4256f22374e2f01a233ea3d94c90317->enter($__internal_61b18e4193aed063d94a5d592373ef26e4256f22374e2f01a233ea3d94c90317_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "blog/_post_tags.html.twig"));

        $__internal_3debecc0edd0e8729093c3ccc0d20dad954cd4fc1cebd93d1a8be6321f0f9375 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3debecc0edd0e8729093c3ccc0d20dad954cd4fc1cebd93d1a8be6321f0f9375->enter($__internal_3debecc0edd0e8729093c3ccc0d20dad954cd4fc1cebd93d1a8be6321f0f9375_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "blog/_post_tags.html.twig"));

        // line 1
        if ( !twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new Twig_Error_Runtime('Variable "post" does not exist.', 1, $this->getSourceContext()); })()), "tags", array()), "empty", array())) {
            // line 2
            echo "    <p class=\"post-tags\">
        ";
            // line 3
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new Twig_Error_Runtime('Variable "post" does not exist.', 3, $this->getSourceContext()); })()), "tags", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
                // line 4
                echo "            <span class=\"label label-default\">
                <i class=\"fa fa-tag\"></i> ";
                // line 5
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["tag"], "name", array()), "html", null, true);
                echo "
            </span>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 8
            echo "    </p>
";
        }
        // line 10
        echo "
";
        
        $__internal_61b18e4193aed063d94a5d592373ef26e4256f22374e2f01a233ea3d94c90317->leave($__internal_61b18e4193aed063d94a5d592373ef26e4256f22374e2f01a233ea3d94c90317_prof);

        
        $__internal_3debecc0edd0e8729093c3ccc0d20dad954cd4fc1cebd93d1a8be6321f0f9375->leave($__internal_3debecc0edd0e8729093c3ccc0d20dad954cd4fc1cebd93d1a8be6321f0f9375_prof);

    }

    public function getTemplateName()
    {
        return "blog/_post_tags.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 10,  46 => 8,  37 => 5,  34 => 4,  30 => 3,  27 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if not post.tags.empty %}
    <p class=\"post-tags\">
        {% for tag in post.tags %}
            <span class=\"label label-default\">
                <i class=\"fa fa-tag\"></i> {{ tag.name }}
            </span>
        {% endfor %}
    </p>
{% endif %}

", "blog/_post_tags.html.twig", "/var/www/symfony/templates/blog/_post_tags.html.twig");
    }
}
