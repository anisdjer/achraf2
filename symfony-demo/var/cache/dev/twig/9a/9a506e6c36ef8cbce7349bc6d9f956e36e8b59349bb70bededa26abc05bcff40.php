<?php

/* blog/index.html.twig */
class __TwigTemplate_c02f77b479216109058f548a335e75884ea55157d4df801c46014fb7f2ebed28 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "blog/index.html.twig", 1);
        $this->blocks = array(
            'body_id' => array($this, 'block_body_id'),
            'main' => array($this, 'block_main'),
            'sidebar' => array($this, 'block_sidebar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_47ce26d818a0526e6d7d2bb1c1ed25573082e5e152a8765e85e01056031fef05 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_47ce26d818a0526e6d7d2bb1c1ed25573082e5e152a8765e85e01056031fef05->enter($__internal_47ce26d818a0526e6d7d2bb1c1ed25573082e5e152a8765e85e01056031fef05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "blog/index.html.twig"));

        $__internal_9b670779dbb1380f4d166fd88be0b4f74fd57f340c1bd5bcf47a5752f1594c67 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9b670779dbb1380f4d166fd88be0b4f74fd57f340c1bd5bcf47a5752f1594c67->enter($__internal_9b670779dbb1380f4d166fd88be0b4f74fd57f340c1bd5bcf47a5752f1594c67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "blog/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_47ce26d818a0526e6d7d2bb1c1ed25573082e5e152a8765e85e01056031fef05->leave($__internal_47ce26d818a0526e6d7d2bb1c1ed25573082e5e152a8765e85e01056031fef05_prof);

        
        $__internal_9b670779dbb1380f4d166fd88be0b4f74fd57f340c1bd5bcf47a5752f1594c67->leave($__internal_9b670779dbb1380f4d166fd88be0b4f74fd57f340c1bd5bcf47a5752f1594c67_prof);

    }

    // line 3
    public function block_body_id($context, array $blocks = array())
    {
        $__internal_6abe17b60ee6f9b007d93fad484a47eecf3a5fe228d855e9be571888ed9fff37 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6abe17b60ee6f9b007d93fad484a47eecf3a5fe228d855e9be571888ed9fff37->enter($__internal_6abe17b60ee6f9b007d93fad484a47eecf3a5fe228d855e9be571888ed9fff37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        $__internal_70f947b235e773d65053fcc56a3958a881bd4297f7bb1618b78051d60de1400d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_70f947b235e773d65053fcc56a3958a881bd4297f7bb1618b78051d60de1400d->enter($__internal_70f947b235e773d65053fcc56a3958a881bd4297f7bb1618b78051d60de1400d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        echo "blog_index";
        
        $__internal_70f947b235e773d65053fcc56a3958a881bd4297f7bb1618b78051d60de1400d->leave($__internal_70f947b235e773d65053fcc56a3958a881bd4297f7bb1618b78051d60de1400d_prof);

        
        $__internal_6abe17b60ee6f9b007d93fad484a47eecf3a5fe228d855e9be571888ed9fff37->leave($__internal_6abe17b60ee6f9b007d93fad484a47eecf3a5fe228d855e9be571888ed9fff37_prof);

    }

    // line 5
    public function block_main($context, array $blocks = array())
    {
        $__internal_570578775669e4c89b2629aaabb1b086c259413699184f7cfbc4812c8ecf13e8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_570578775669e4c89b2629aaabb1b086c259413699184f7cfbc4812c8ecf13e8->enter($__internal_570578775669e4c89b2629aaabb1b086c259413699184f7cfbc4812c8ecf13e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        $__internal_3c90468dc483f0df8aaf39d0800b6276cf5d8aa0b774348cf71ecfb94ec4d393 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3c90468dc483f0df8aaf39d0800b6276cf5d8aa0b774348cf71ecfb94ec4d393->enter($__internal_3c90468dc483f0df8aaf39d0800b6276cf5d8aa0b774348cf71ecfb94ec4d393_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 6
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["posts"]) || array_key_exists("posts", $context) ? $context["posts"] : (function () { throw new Twig_Error_Runtime('Variable "posts" does not exist.', 6, $this->getSourceContext()); })()));
        $context['_iterated'] = false;
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 7
            echo "        <article class=\"post\">
            <h2>
                <a href=\"";
            // line 9
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("blog_post", array("slug" => twig_get_attribute($this->env, $this->getSourceContext(), $context["post"], "slug", array()))), "html", null, true);
            echo "\">
                    ";
            // line 10
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["post"], "title", array()), "html", null, true);
            echo "
                </a>
            </h2>

            <p class=\"post-metadata\">
                <span class=\"metadata\"><i class=\"fa fa-calendar\"></i> ";
            // line 15
            echo twig_escape_filter($this->env, twig_localized_date_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["post"], "publishedAt", array()), "long", "medium", null, "UTC"), "html", null, true);
            echo "</span>
                <span class=\"metadata\"><i class=\"fa fa-user\"></i> ";
            // line 16
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["post"], "author", array()), "fullName", array()), "html", null, true);
            echo "</span>
            </p>

            ";
            // line 19
            echo $this->env->getExtension('App\Twig\AppExtension')->markdownToHtml(twig_get_attribute($this->env, $this->getSourceContext(), $context["post"], "summary", array()));
            echo "

            ";
            // line 21
            echo twig_include($this->env, $context, "blog/_post_tags.html.twig");
            echo "
        </article>
    ";
            $context['_iterated'] = true;
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        if (!$context['_iterated']) {
            // line 24
            echo "        <div class=\"well\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("post.no_posts_found"), "html", null, true);
            echo "</div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "
    ";
        // line 27
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["posts"]) || array_key_exists("posts", $context) ? $context["posts"] : (function () { throw new Twig_Error_Runtime('Variable "posts" does not exist.', 27, $this->getSourceContext()); })()), "haveToPaginate", array())) {
            // line 28
            echo "        <div class=\"navigation text-center\">
            ";
            // line 29
            echo $this->env->getExtension('WhiteOctober\PagerfantaBundle\Twig\PagerfantaExtension')->renderPagerfanta((isset($context["posts"]) || array_key_exists("posts", $context) ? $context["posts"] : (function () { throw new Twig_Error_Runtime('Variable "posts" does not exist.', 29, $this->getSourceContext()); })()), "twitter_bootstrap3_translated", array("routeName" => "blog_index_paginated"));
            echo "
        </div>
    ";
        }
        
        $__internal_3c90468dc483f0df8aaf39d0800b6276cf5d8aa0b774348cf71ecfb94ec4d393->leave($__internal_3c90468dc483f0df8aaf39d0800b6276cf5d8aa0b774348cf71ecfb94ec4d393_prof);

        
        $__internal_570578775669e4c89b2629aaabb1b086c259413699184f7cfbc4812c8ecf13e8->leave($__internal_570578775669e4c89b2629aaabb1b086c259413699184f7cfbc4812c8ecf13e8_prof);

    }

    // line 34
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_072ab6c4f4526021bb5be24562b73584dc2657b0a89440fa66bacc2838e0f857 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_072ab6c4f4526021bb5be24562b73584dc2657b0a89440fa66bacc2838e0f857->enter($__internal_072ab6c4f4526021bb5be24562b73584dc2657b0a89440fa66bacc2838e0f857_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        $__internal_2aa5840f9eeaa88794c0bdf26f25a5a0bebe7c618615033156a07d5200cf2a3c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2aa5840f9eeaa88794c0bdf26f25a5a0bebe7c618615033156a07d5200cf2a3c->enter($__internal_2aa5840f9eeaa88794c0bdf26f25a5a0bebe7c618615033156a07d5200cf2a3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 35
        echo "    ";
        $this->displayParentBlock("sidebar", $context, $blocks);
        echo "

    ";
        // line 37
        echo $this->env->getExtension('App\Twig\SourceCodeExtension')->showSourceCode($this->env, $this->getTemplateName());
        echo "
    ";
        // line 38
        echo twig_include($this->env, $context, "blog/_rss.html.twig");
        echo "
";
        
        $__internal_2aa5840f9eeaa88794c0bdf26f25a5a0bebe7c618615033156a07d5200cf2a3c->leave($__internal_2aa5840f9eeaa88794c0bdf26f25a5a0bebe7c618615033156a07d5200cf2a3c_prof);

        
        $__internal_072ab6c4f4526021bb5be24562b73584dc2657b0a89440fa66bacc2838e0f857->leave($__internal_072ab6c4f4526021bb5be24562b73584dc2657b0a89440fa66bacc2838e0f857_prof);

    }

    public function getTemplateName()
    {
        return "blog/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  185 => 38,  181 => 37,  175 => 35,  166 => 34,  152 => 29,  149 => 28,  147 => 27,  144 => 26,  135 => 24,  119 => 21,  114 => 19,  108 => 16,  104 => 15,  96 => 10,  92 => 9,  88 => 7,  69 => 6,  60 => 5,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body_id 'blog_index' %}

{% block main %}
    {% for post in posts %}
        <article class=\"post\">
            <h2>
                <a href=\"{{ path('blog_post', {slug: post.slug}) }}\">
                    {{ post.title }}
                </a>
            </h2>

            <p class=\"post-metadata\">
                <span class=\"metadata\"><i class=\"fa fa-calendar\"></i> {{ post.publishedAt|localizeddate('long', 'medium', null, 'UTC') }}</span>
                <span class=\"metadata\"><i class=\"fa fa-user\"></i> {{ post.author.fullName }}</span>
            </p>

            {{ post.summary|md2html }}

            {{ include('blog/_post_tags.html.twig') }}
        </article>
    {% else %}
        <div class=\"well\">{{ 'post.no_posts_found'|trans }}</div>
    {% endfor %}

    {% if posts.haveToPaginate %}
        <div class=\"navigation text-center\">
            {{ pagerfanta(posts, 'twitter_bootstrap3_translated', {routeName: 'blog_index_paginated'}) }}
        </div>
    {% endif %}
{% endblock %}

{% block sidebar %}
    {{ parent() }}

    {{ show_source_code(_self) }}
    {{ include('blog/_rss.html.twig') }}
{% endblock %}
", "blog/index.html.twig", "/var/www/symfony/templates/blog/index.html.twig");
    }
}
