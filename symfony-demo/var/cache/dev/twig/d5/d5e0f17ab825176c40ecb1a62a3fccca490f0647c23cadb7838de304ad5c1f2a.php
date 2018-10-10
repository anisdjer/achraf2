<?php

/* admin/blog/index.html.twig */
class __TwigTemplate_116ff7bac0acd74c146e521d0c2cbab3dfd17e75c5ba78a4966951d50198a679 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("admin/layout.html.twig", "admin/blog/index.html.twig", 1);
        $this->blocks = array(
            'body_id' => array($this, 'block_body_id'),
            'main' => array($this, 'block_main'),
            'sidebar' => array($this, 'block_sidebar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "admin/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ba84dbddce37ace5fbd0c1a95bf94c95e5312f5b19943cefb17b2de88ecbd69b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ba84dbddce37ace5fbd0c1a95bf94c95e5312f5b19943cefb17b2de88ecbd69b->enter($__internal_ba84dbddce37ace5fbd0c1a95bf94c95e5312f5b19943cefb17b2de88ecbd69b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/blog/index.html.twig"));

        $__internal_58af561ce27c7037e027c4093cfc84a75b11dc44e37e39ad86b23929ca60471c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_58af561ce27c7037e027c4093cfc84a75b11dc44e37e39ad86b23929ca60471c->enter($__internal_58af561ce27c7037e027c4093cfc84a75b11dc44e37e39ad86b23929ca60471c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/blog/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ba84dbddce37ace5fbd0c1a95bf94c95e5312f5b19943cefb17b2de88ecbd69b->leave($__internal_ba84dbddce37ace5fbd0c1a95bf94c95e5312f5b19943cefb17b2de88ecbd69b_prof);

        
        $__internal_58af561ce27c7037e027c4093cfc84a75b11dc44e37e39ad86b23929ca60471c->leave($__internal_58af561ce27c7037e027c4093cfc84a75b11dc44e37e39ad86b23929ca60471c_prof);

    }

    // line 3
    public function block_body_id($context, array $blocks = array())
    {
        $__internal_91d830688258cf66e42677c2bb4f88af490c0a7eca8d800ad5b34975cd54da5b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_91d830688258cf66e42677c2bb4f88af490c0a7eca8d800ad5b34975cd54da5b->enter($__internal_91d830688258cf66e42677c2bb4f88af490c0a7eca8d800ad5b34975cd54da5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        $__internal_1d43adb20f005076389cc57c113a6c2e04fb02f7ec723e698d906e79eb62742b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1d43adb20f005076389cc57c113a6c2e04fb02f7ec723e698d906e79eb62742b->enter($__internal_1d43adb20f005076389cc57c113a6c2e04fb02f7ec723e698d906e79eb62742b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        echo "admin_post_index";
        
        $__internal_1d43adb20f005076389cc57c113a6c2e04fb02f7ec723e698d906e79eb62742b->leave($__internal_1d43adb20f005076389cc57c113a6c2e04fb02f7ec723e698d906e79eb62742b_prof);

        
        $__internal_91d830688258cf66e42677c2bb4f88af490c0a7eca8d800ad5b34975cd54da5b->leave($__internal_91d830688258cf66e42677c2bb4f88af490c0a7eca8d800ad5b34975cd54da5b_prof);

    }

    // line 5
    public function block_main($context, array $blocks = array())
    {
        $__internal_c1e0a8c94080458d61e5ee9d5680b90a2bbe995d3a2ae4641c1ee22e24435a7c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c1e0a8c94080458d61e5ee9d5680b90a2bbe995d3a2ae4641c1ee22e24435a7c->enter($__internal_c1e0a8c94080458d61e5ee9d5680b90a2bbe995d3a2ae4641c1ee22e24435a7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        $__internal_b32572ce6490418909a9fca0d62428cadfffe1079fb2e12477be6823423002f3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b32572ce6490418909a9fca0d62428cadfffe1079fb2e12477be6823423002f3->enter($__internal_b32572ce6490418909a9fca0d62428cadfffe1079fb2e12477be6823423002f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 6
        echo "    <h1>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("title.post_list"), "html", null, true);
        echo "</h1>

    <table class=\"table table-striped table-middle-aligned\">
        <thead>
            <tr>
                <th scope=\"col\">";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label.title"), "html", null, true);
        echo "</th>
                <th scope=\"col\"><i class=\"fa fa-calendar\" aria-hidden=\"true\"></i> ";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label.published_at"), "html", null, true);
        echo "</th>
                <th scope=\"col\" class=\"text-center\"><i class=\"fa fa-cogs\" aria-hidden=\"true\"></i> ";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label.actions"), "html", null, true);
        echo "</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["posts"]) || array_key_exists("posts", $context) ? $context["posts"] : (function () { throw new Twig_Error_Runtime('Variable "posts" does not exist.', 17, $this->getSourceContext()); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 18
            echo "            <tr>
                <td>";
            // line 19
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["post"], "title", array()), "html", null, true);
            echo "</td>
                ";
            // line 23
            echo "                <td>";
            echo twig_escape_filter($this->env, twig_localized_date_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["post"], "publishedAt", array()), "medium", "short", null, "UTC"), "html", null, true);
            echo "</td>
                <td class=\"text-right\">
                    <div class=\"item-actions\">
                        <a href=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_post_show", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["post"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-sm btn-default\">
                            <i class=\"fa fa-eye\" aria-hidden=\"true\"></i> ";
            // line 27
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("action.show"), "html", null, true);
            echo "
                        </a>

                        <a href=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_post_edit", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["post"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-sm btn-primary\">
                            <i class=\"fa fa-edit\" aria-hidden=\"true\"></i> ";
            // line 31
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("action.edit"), "html", null, true);
            echo "
                        </a>
                    </div>
                </td>
            </tr>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 37
            echo "            <tr>
                <td colspan=\"4\" align=\"center\">";
            // line 38
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("post.no_posts_found"), "html", null, true);
            echo "</td>
           </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        echo "        </tbody>
    </table>
";
        
        $__internal_b32572ce6490418909a9fca0d62428cadfffe1079fb2e12477be6823423002f3->leave($__internal_b32572ce6490418909a9fca0d62428cadfffe1079fb2e12477be6823423002f3_prof);

        
        $__internal_c1e0a8c94080458d61e5ee9d5680b90a2bbe995d3a2ae4641c1ee22e24435a7c->leave($__internal_c1e0a8c94080458d61e5ee9d5680b90a2bbe995d3a2ae4641c1ee22e24435a7c_prof);

    }

    // line 45
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_14fab05d7e7be5fa157dd12928740e4893189ab945fbe6a0c4badd0b6c09d658 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_14fab05d7e7be5fa157dd12928740e4893189ab945fbe6a0c4badd0b6c09d658->enter($__internal_14fab05d7e7be5fa157dd12928740e4893189ab945fbe6a0c4badd0b6c09d658_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        $__internal_193e23881963ceb3aba546f521255654d8f22702a527c51e2ddbc19e5d3ddee5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_193e23881963ceb3aba546f521255654d8f22702a527c51e2ddbc19e5d3ddee5->enter($__internal_193e23881963ceb3aba546f521255654d8f22702a527c51e2ddbc19e5d3ddee5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 46
        echo "    <div class=\"section actions\">
        <a href=\"";
        // line 47
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_post_new");
        echo "\" class=\"btn btn-lg btn-block btn-success\">
            <i class=\"fa fa-plus\" aria-hidden=\"true\"></i> ";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("action.create_post"), "html", null, true);
        echo "
        </a>
    </div>

    ";
        // line 52
        $this->displayParentBlock("sidebar", $context, $blocks);
        echo "

    ";
        // line 54
        echo $this->env->getExtension('App\Twig\SourceCodeExtension')->showSourceCode($this->env, $this->getTemplateName());
        echo "
";
        
        $__internal_193e23881963ceb3aba546f521255654d8f22702a527c51e2ddbc19e5d3ddee5->leave($__internal_193e23881963ceb3aba546f521255654d8f22702a527c51e2ddbc19e5d3ddee5_prof);

        
        $__internal_14fab05d7e7be5fa157dd12928740e4893189ab945fbe6a0c4badd0b6c09d658->leave($__internal_14fab05d7e7be5fa157dd12928740e4893189ab945fbe6a0c4badd0b6c09d658_prof);

    }

    public function getTemplateName()
    {
        return "admin/blog/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  189 => 54,  184 => 52,  177 => 48,  173 => 47,  170 => 46,  161 => 45,  149 => 41,  140 => 38,  137 => 37,  126 => 31,  122 => 30,  116 => 27,  112 => 26,  105 => 23,  101 => 19,  98 => 18,  93 => 17,  86 => 13,  82 => 12,  78 => 11,  69 => 6,  60 => 5,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'admin/layout.html.twig' %}

{% block body_id 'admin_post_index' %}

{% block main %}
    <h1>{{ 'title.post_list'|trans }}</h1>

    <table class=\"table table-striped table-middle-aligned\">
        <thead>
            <tr>
                <th scope=\"col\">{{ 'label.title'|trans }}</th>
                <th scope=\"col\"><i class=\"fa fa-calendar\" aria-hidden=\"true\"></i> {{ 'label.published_at'|trans }}</th>
                <th scope=\"col\" class=\"text-center\"><i class=\"fa fa-cogs\" aria-hidden=\"true\"></i> {{ 'label.actions'|trans }}</th>
            </tr>
        </thead>
        <tbody>
        {% for post in posts %}
            <tr>
                <td>{{ post.title }}</td>
                {# it's not mandatory to set the timezone in localizeddate(). This is done to
                   avoid errors when the 'intl' PHP extension is not available and the application
                   is forced to use the limited \"intl polyfill\", which only supports UTC and GMT #}
                <td>{{ post.publishedAt|localizeddate('medium', 'short', null, 'UTC') }}</td>
                <td class=\"text-right\">
                    <div class=\"item-actions\">
                        <a href=\"{{ path('admin_post_show', {id: post.id}) }}\" class=\"btn btn-sm btn-default\">
                            <i class=\"fa fa-eye\" aria-hidden=\"true\"></i> {{ 'action.show'|trans }}
                        </a>

                        <a href=\"{{ path('admin_post_edit', {id: post.id}) }}\" class=\"btn btn-sm btn-primary\">
                            <i class=\"fa fa-edit\" aria-hidden=\"true\"></i> {{ 'action.edit'|trans }}
                        </a>
                    </div>
                </td>
            </tr>
        {% else %}
            <tr>
                <td colspan=\"4\" align=\"center\">{{ 'post.no_posts_found'|trans }}</td>
           </tr>
        {% endfor %}
        </tbody>
    </table>
{% endblock %}

{% block sidebar %}
    <div class=\"section actions\">
        <a href=\"{{ path('admin_post_new') }}\" class=\"btn btn-lg btn-block btn-success\">
            <i class=\"fa fa-plus\" aria-hidden=\"true\"></i> {{ 'action.create_post'|trans }}
        </a>
    </div>

    {{ parent() }}

    {{ show_source_code(_self) }}
{% endblock %}
", "admin/blog/index.html.twig", "/var/www/symfony/templates/admin/blog/index.html.twig");
    }
}
