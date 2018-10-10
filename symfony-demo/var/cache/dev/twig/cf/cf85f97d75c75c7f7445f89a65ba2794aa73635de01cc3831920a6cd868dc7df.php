<?php

/* blog/post_show.html.twig */
class __TwigTemplate_e876e0522a1b6f7674015c49d87b7b1bdf1caaf810e10dbc31d63e7d2b977adb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "blog/post_show.html.twig", 1);
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
        $__internal_6f1d5d73a406e4d00c9ae1a66fe120835a12fb3a8294e30afae54ab504ecb858 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6f1d5d73a406e4d00c9ae1a66fe120835a12fb3a8294e30afae54ab504ecb858->enter($__internal_6f1d5d73a406e4d00c9ae1a66fe120835a12fb3a8294e30afae54ab504ecb858_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "blog/post_show.html.twig"));

        $__internal_5d36122bdadbea71dc54909c6d91c68092cb0e84880a929567ac8dab9002f91a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5d36122bdadbea71dc54909c6d91c68092cb0e84880a929567ac8dab9002f91a->enter($__internal_5d36122bdadbea71dc54909c6d91c68092cb0e84880a929567ac8dab9002f91a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "blog/post_show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f1d5d73a406e4d00c9ae1a66fe120835a12fb3a8294e30afae54ab504ecb858->leave($__internal_6f1d5d73a406e4d00c9ae1a66fe120835a12fb3a8294e30afae54ab504ecb858_prof);

        
        $__internal_5d36122bdadbea71dc54909c6d91c68092cb0e84880a929567ac8dab9002f91a->leave($__internal_5d36122bdadbea71dc54909c6d91c68092cb0e84880a929567ac8dab9002f91a_prof);

    }

    // line 3
    public function block_body_id($context, array $blocks = array())
    {
        $__internal_2abde9b2d7bc12627254c2fd54b9621aba0433f19dd40d2e35973d98241baab6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2abde9b2d7bc12627254c2fd54b9621aba0433f19dd40d2e35973d98241baab6->enter($__internal_2abde9b2d7bc12627254c2fd54b9621aba0433f19dd40d2e35973d98241baab6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        $__internal_b7bc86d2f457cf179994df7144897955e770a519f572b2d71c8e21c9b08b0107 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b7bc86d2f457cf179994df7144897955e770a519f572b2d71c8e21c9b08b0107->enter($__internal_b7bc86d2f457cf179994df7144897955e770a519f572b2d71c8e21c9b08b0107_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        echo "blog_post_show";
        
        $__internal_b7bc86d2f457cf179994df7144897955e770a519f572b2d71c8e21c9b08b0107->leave($__internal_b7bc86d2f457cf179994df7144897955e770a519f572b2d71c8e21c9b08b0107_prof);

        
        $__internal_2abde9b2d7bc12627254c2fd54b9621aba0433f19dd40d2e35973d98241baab6->leave($__internal_2abde9b2d7bc12627254c2fd54b9621aba0433f19dd40d2e35973d98241baab6_prof);

    }

    // line 5
    public function block_main($context, array $blocks = array())
    {
        $__internal_e43d0f6e8e3ac22d1039876ed52ed12afb9e7eb5ba968e3b0bbbcb01821ca192 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e43d0f6e8e3ac22d1039876ed52ed12afb9e7eb5ba968e3b0bbbcb01821ca192->enter($__internal_e43d0f6e8e3ac22d1039876ed52ed12afb9e7eb5ba968e3b0bbbcb01821ca192_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        $__internal_6c75144f6e2601f21745bb399e767b4ccfac8c8c31e2a7c89ba58ddea247d22b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6c75144f6e2601f21745bb399e767b4ccfac8c8c31e2a7c89ba58ddea247d22b->enter($__internal_6c75144f6e2601f21745bb399e767b4ccfac8c8c31e2a7c89ba58ddea247d22b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 6
        echo "    <h1>";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new Twig_Error_Runtime('Variable "post" does not exist.', 6, $this->getSourceContext()); })()), "title", array()), "html", null, true);
        echo "</h1>

    <p class=\"post-metadata\">
        <span class=\"metadata\"><i class=\"fa fa-calendar\"></i> ";
        // line 9
        echo twig_escape_filter($this->env, twig_localized_date_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new Twig_Error_Runtime('Variable "post" does not exist.', 9, $this->getSourceContext()); })()), "publishedAt", array()), "long", "medium", null, "UTC"), "html", null, true);
        echo "</span>
        <span class=\"metadata\"><i class=\"fa fa-user\"></i> ";
        // line 10
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new Twig_Error_Runtime('Variable "post" does not exist.', 10, $this->getSourceContext()); })()), "author", array()), "fullName", array()), "html", null, true);
        echo "</span>
    </p>

    ";
        // line 13
        echo $this->env->getExtension('App\Twig\AppExtension')->markdownToHtml(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new Twig_Error_Runtime('Variable "post" does not exist.', 13, $this->getSourceContext()); })()), "content", array()));
        echo "

    ";
        // line 15
        echo twig_include($this->env, $context, "blog/_post_tags.html.twig");
        echo "

    <div id=\"post-add-comment\" class=\"well\">
        ";
        // line 24
        echo "        ";
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 25
            echo "            ";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("App\\Controller\\BlogController:commentForm", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new Twig_Error_Runtime('Variable "post" does not exist.', 25, $this->getSourceContext()); })()), "id", array()))));
            echo "
        ";
        } else {
            // line 27
            echo "            <p>
                <a class=\"btn btn-success\" href=\"";
            // line 28
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("security_login");
            echo "\">
                    <i class=\"fa fa-sign-in\" aria-hidden=\"true\"></i> ";
            // line 29
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("action.sign_in"), "html", null, true);
            echo "
                </a>
                ";
            // line 31
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("post.to_publish_a_comment"), "html", null, true);
            echo "
            </p>
        ";
        }
        // line 34
        echo "    </div>

    <h3>
        <i class=\"fa fa-comments\" aria-hidden=\"true\"></i> ";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->transchoice("post.num_comments", twig_length_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new Twig_Error_Runtime('Variable "post" does not exist.', 37, $this->getSourceContext()); })()), "comments", array()))), "html", null, true);
        echo "
    </h3>

    ";
        // line 40
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new Twig_Error_Runtime('Variable "post" does not exist.', 40, $this->getSourceContext()); })()), "comments", array()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
            // line 41
            echo "        <div class=\"row post-comment\">
            <a name=\"comment_";
            // line 42
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["comment"], "id", array()), "html", null, true);
            echo "\"></a>
            <h4 class=\"col-sm-3\">
                <strong>";
            // line 44
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["comment"], "author", array()), "fullName", array()), "html", null, true);
            echo "</strong> ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("post.commented_on"), "html", null, true);
            echo "
                ";
            // line 48
            echo "                <strong>";
            echo twig_escape_filter($this->env, twig_localized_date_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["comment"], "publishedAt", array()), "medium", "short", null, "UTC"), "html", null, true);
            echo "</strong>
            </h4>
            <div class=\"col-sm-9\">
                ";
            // line 51
            echo $this->env->getExtension('App\Twig\AppExtension')->markdownToHtml(twig_get_attribute($this->env, $this->getSourceContext(), $context["comment"], "content", array()));
            echo "
            </div>
        </div>
    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 55
            echo "        <div class=\"post-comment\">
            <p>";
            // line 56
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("post.no_comments"), "html", null, true);
            echo "</p>
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comment'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_6c75144f6e2601f21745bb399e767b4ccfac8c8c31e2a7c89ba58ddea247d22b->leave($__internal_6c75144f6e2601f21745bb399e767b4ccfac8c8c31e2a7c89ba58ddea247d22b_prof);

        
        $__internal_e43d0f6e8e3ac22d1039876ed52ed12afb9e7eb5ba968e3b0bbbcb01821ca192->leave($__internal_e43d0f6e8e3ac22d1039876ed52ed12afb9e7eb5ba968e3b0bbbcb01821ca192_prof);

    }

    // line 61
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_8e3e1e96650df20d8d37dc76d3a2a340602632eb502700fa775d1239d1eac330 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8e3e1e96650df20d8d37dc76d3a2a340602632eb502700fa775d1239d1eac330->enter($__internal_8e3e1e96650df20d8d37dc76d3a2a340602632eb502700fa775d1239d1eac330_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        $__internal_9f22775047c15c129c1d94fb333a739d25d4d396799ae1a56a1cdc3790e47c84 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9f22775047c15c129c1d94fb333a739d25d4d396799ae1a56a1cdc3790e47c84->enter($__internal_9f22775047c15c129c1d94fb333a739d25d4d396799ae1a56a1cdc3790e47c84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 62
        echo "    ";
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("edit", (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new Twig_Error_Runtime('Variable "post" does not exist.', 62, $this->getSourceContext()); })()))) {
            // line 63
            echo "        <div class=\"section\">
            <a class=\"btn btn-lg btn-block btn-success\" href=\"";
            // line 64
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_post_edit", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new Twig_Error_Runtime('Variable "post" does not exist.', 64, $this->getSourceContext()); })()), "id", array()))), "html", null, true);
            echo "\">
                <i class=\"fa fa-edit\" aria-hidden=\"true\"></i> ";
            // line 65
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("action.edit_post"), "html", null, true);
            echo "
            </a>
        </div>
    ";
        }
        // line 69
        echo "
    ";
        // line 73
        echo "    ";
        $this->displayParentBlock("sidebar", $context, $blocks);
        echo "

    ";
        // line 75
        echo $this->env->getExtension('App\Twig\SourceCodeExtension')->showSourceCode($this->env, $this->getTemplateName());
        echo "
    ";
        // line 76
        echo twig_include($this->env, $context, "blog/_rss.html.twig");
        echo "
";
        
        $__internal_9f22775047c15c129c1d94fb333a739d25d4d396799ae1a56a1cdc3790e47c84->leave($__internal_9f22775047c15c129c1d94fb333a739d25d4d396799ae1a56a1cdc3790e47c84_prof);

        
        $__internal_8e3e1e96650df20d8d37dc76d3a2a340602632eb502700fa775d1239d1eac330->leave($__internal_8e3e1e96650df20d8d37dc76d3a2a340602632eb502700fa775d1239d1eac330_prof);

    }

    public function getTemplateName()
    {
        return "blog/post_show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  229 => 76,  225 => 75,  219 => 73,  216 => 69,  209 => 65,  205 => 64,  202 => 63,  199 => 62,  190 => 61,  173 => 56,  170 => 55,  161 => 51,  154 => 48,  148 => 44,  143 => 42,  140 => 41,  135 => 40,  129 => 37,  124 => 34,  118 => 31,  113 => 29,  109 => 28,  106 => 27,  100 => 25,  97 => 24,  91 => 15,  86 => 13,  80 => 10,  76 => 9,  69 => 6,  60 => 5,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body_id 'blog_post_show' %}

{% block main %}
    <h1>{{ post.title }}</h1>

    <p class=\"post-metadata\">
        <span class=\"metadata\"><i class=\"fa fa-calendar\"></i> {{ post.publishedAt|localizeddate('long', 'medium', null, 'UTC') }}</span>
        <span class=\"metadata\"><i class=\"fa fa-user\"></i> {{ post.author.fullName }}</span>
    </p>

    {{ post.content|md2html }}

    {{ include('blog/_post_tags.html.twig') }}

    <div id=\"post-add-comment\" class=\"well\">
        {# The 'IS_AUTHENTICATED_FULLY' role ensures that the user has entered
        his/her credentials (login + password) during this session. If he/she
        is automatically logged via the 'Remember Me' functionality, he/she won't
        be able to add a comment.
        See https://symfony.com/doc/current/cookbook/security/remember_me.html#forcing-the-user-to-re-authenticate-before-accessing-certain-resources
        #}
        {% if is_granted('IS_AUTHENTICATED_FULLY') %}
            {{ render(controller('App\\\\Controller\\\\BlogController:commentForm', {'id': post.id})) }}
        {% else %}
            <p>
                <a class=\"btn btn-success\" href=\"{{ path('security_login') }}\">
                    <i class=\"fa fa-sign-in\" aria-hidden=\"true\"></i> {{ 'action.sign_in'|trans }}
                </a>
                {{ 'post.to_publish_a_comment'|trans }}
            </p>
        {% endif %}
    </div>

    <h3>
        <i class=\"fa fa-comments\" aria-hidden=\"true\"></i> {{ 'post.num_comments'|transchoice(post.comments|length) }}
    </h3>

    {% for comment in post.comments %}
        <div class=\"row post-comment\">
            <a name=\"comment_{{ comment.id }}\"></a>
            <h4 class=\"col-sm-3\">
                <strong>{{ comment.author.fullName }}</strong> {{ 'post.commented_on'|trans }}
                {# it's not mandatory to set the timezone in localizeddate(). This is done to
                   avoid errors when the 'intl' PHP extension is not available and the application
                   is forced to use the limited \"intl polyfill\", which only supports UTC and GMT #}
                <strong>{{ comment.publishedAt|localizeddate('medium', 'short', null, 'UTC') }}</strong>
            </h4>
            <div class=\"col-sm-9\">
                {{ comment.content|md2html }}
            </div>
        </div>
    {% else %}
        <div class=\"post-comment\">
            <p>{{ 'post.no_comments'|trans }}</p>
        </div>
    {% endfor %}
{% endblock %}

{% block sidebar %}
    {% if is_granted('edit', post) %}
        <div class=\"section\">
            <a class=\"btn btn-lg btn-block btn-success\" href=\"{{ path('admin_post_edit', {id: post.id}) }}\">
                <i class=\"fa fa-edit\" aria-hidden=\"true\"></i> {{ 'action.edit_post'|trans }}
            </a>
        </div>
    {% endif %}

    {# the parent() function includes the contents defined by the parent template
      ('base.html.twig') for this block ('sidebar'). This is a very convenient way
      to share common contents in different templates #}
    {{ parent() }}

    {{ show_source_code(_self) }}
    {{ include('blog/_rss.html.twig') }}
{% endblock %}
", "blog/post_show.html.twig", "/var/www/symfony/templates/blog/post_show.html.twig");
    }
}
