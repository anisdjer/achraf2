<?php

/* security/login.html.twig */
class __TwigTemplate_5c482af083182a6ca1c19b9c399e40c66342cad465362af28fe6e6bc87f88c2a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "security/login.html.twig", 1);
        $this->blocks = array(
            'body_id' => array($this, 'block_body_id'),
            'javascripts' => array($this, 'block_javascripts'),
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
        $__internal_6c2a85569cd159d11b1fb8774f0fd41c1a2fae15060fd5eb38d5ccfb3652dff6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6c2a85569cd159d11b1fb8774f0fd41c1a2fae15060fd5eb38d5ccfb3652dff6->enter($__internal_6c2a85569cd159d11b1fb8774f0fd41c1a2fae15060fd5eb38d5ccfb3652dff6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $__internal_79ef93312a54ec8e40d3da51b879ae891e9aa748d012bf0323f18403632afa4d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_79ef93312a54ec8e40d3da51b879ae891e9aa748d012bf0323f18403632afa4d->enter($__internal_79ef93312a54ec8e40d3da51b879ae891e9aa748d012bf0323f18403632afa4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6c2a85569cd159d11b1fb8774f0fd41c1a2fae15060fd5eb38d5ccfb3652dff6->leave($__internal_6c2a85569cd159d11b1fb8774f0fd41c1a2fae15060fd5eb38d5ccfb3652dff6_prof);

        
        $__internal_79ef93312a54ec8e40d3da51b879ae891e9aa748d012bf0323f18403632afa4d->leave($__internal_79ef93312a54ec8e40d3da51b879ae891e9aa748d012bf0323f18403632afa4d_prof);

    }

    // line 3
    public function block_body_id($context, array $blocks = array())
    {
        $__internal_ff194372c958be99da3b456f4fe878612c533760a41a09feec249e7f6be586de = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ff194372c958be99da3b456f4fe878612c533760a41a09feec249e7f6be586de->enter($__internal_ff194372c958be99da3b456f4fe878612c533760a41a09feec249e7f6be586de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        $__internal_ae257c9a1f993369f7ae576e210ebfbf32359bcaa32b629c21fbb7876872e8e4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ae257c9a1f993369f7ae576e210ebfbf32359bcaa32b629c21fbb7876872e8e4->enter($__internal_ae257c9a1f993369f7ae576e210ebfbf32359bcaa32b629c21fbb7876872e8e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        echo "login";
        
        $__internal_ae257c9a1f993369f7ae576e210ebfbf32359bcaa32b629c21fbb7876872e8e4->leave($__internal_ae257c9a1f993369f7ae576e210ebfbf32359bcaa32b629c21fbb7876872e8e4_prof);

        
        $__internal_ff194372c958be99da3b456f4fe878612c533760a41a09feec249e7f6be586de->leave($__internal_ff194372c958be99da3b456f4fe878612c533760a41a09feec249e7f6be586de_prof);

    }

    // line 5
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_4b277d56bdc220695cd107cf6b4b29d064e78e8177120c1a76c00f3d6d06cc59 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4b277d56bdc220695cd107cf6b4b29d064e78e8177120c1a76c00f3d6d06cc59->enter($__internal_4b277d56bdc220695cd107cf6b4b29d064e78e8177120c1a76c00f3d6d06cc59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_01e0bf531819584df64ad43c3a16b105cc70b6ce8f4e05c3bb98cdd9988c5837 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_01e0bf531819584df64ad43c3a16b105cc70b6ce8f4e05c3bb98cdd9988c5837->enter($__internal_01e0bf531819584df64ad43c3a16b105cc70b6ce8f4e05c3bb98cdd9988c5837_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 6
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script src=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("build/js/login.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_01e0bf531819584df64ad43c3a16b105cc70b6ce8f4e05c3bb98cdd9988c5837->leave($__internal_01e0bf531819584df64ad43c3a16b105cc70b6ce8f4e05c3bb98cdd9988c5837_prof);

        
        $__internal_4b277d56bdc220695cd107cf6b4b29d064e78e8177120c1a76c00f3d6d06cc59->leave($__internal_4b277d56bdc220695cd107cf6b4b29d064e78e8177120c1a76c00f3d6d06cc59_prof);

    }

    // line 10
    public function block_main($context, array $blocks = array())
    {
        $__internal_eaf4a2949b37c281982faa198477cab757e9b959748f00cc61711bc6fa6e48bf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eaf4a2949b37c281982faa198477cab757e9b959748f00cc61711bc6fa6e48bf->enter($__internal_eaf4a2949b37c281982faa198477cab757e9b959748f00cc61711bc6fa6e48bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        $__internal_c8e1c643ea902b023638e42d6a0c4adabe0f3d86523ebd63e0b71b9ce909d26e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c8e1c643ea902b023638e42d6a0c4adabe0f3d86523ebd63e0b71b9ce909d26e->enter($__internal_c8e1c643ea902b023638e42d6a0c4adabe0f3d86523ebd63e0b71b9ce909d26e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 11
        echo "    ";
        if ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new Twig_Error_Runtime('Variable "error" does not exist.', 11, $this->getSourceContext()); })())) {
            // line 12
            echo "        <div class=\"alert alert-danger\">
            ";
            // line 13
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new Twig_Error_Runtime('Variable "error" does not exist.', 13, $this->getSourceContext()); })()), "messageKey", array()), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new Twig_Error_Runtime('Variable "error" does not exist.', 13, $this->getSourceContext()); })()), "messageData", array()), "security"), "html", null, true);
            echo "
        </div>
    ";
        }
        // line 16
        echo "
    <div class=\"row\">
        <div class=\"col-sm-5\">
            <div class=\"well\">
                <form action=\"";
        // line 20
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("security_login");
        echo "\" method=\"post\">
                    <fieldset>
                        <legend><i class=\"fa fa-lock\" aria-hidden=\"true\"></i> ";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("title.login"), "html", null, true);
        echo "</legend>
                        <div class=\"form-group\">
                            <label for=\"username\">";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label.username"), "html", null, true);
        echo "</label>
                            <input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 25
        echo twig_escape_filter($this->env, (isset($context["last_username"]) || array_key_exists("last_username", $context) ? $context["last_username"] : (function () { throw new Twig_Error_Runtime('Variable "last_username" does not exist.', 25, $this->getSourceContext()); })()), "html", null, true);
        echo "\" class=\"form-control\"/>
                        </div>
                        <div class=\"form-group\">
                            <label for=\"password\">";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label.password"), "html", null, true);
        echo "</label>
                            <input type=\"password\" id=\"password\" name=\"_password\" class=\"form-control\" />
                        </div>
                        <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("authenticate"), "html", null, true);
        echo "\"/>
                        <button type=\"submit\" class=\"btn btn-primary\">
                            <i class=\"fa fa-sign-in\" aria-hidden=\"true\"></i> ";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("action.sign_in"), "html", null, true);
        echo "
                        </button>
                    </fieldset>
                </form>
            </div>
        </div>

        <div id=\"login-help\" class=\"col-sm-7\">
            <h3>
                <i class=\"fa fa-long-arrow-left\" aria-hidden=\"true\"></i>
                ";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("help.login_users"), "html", null, true);
        echo "
            </h3>

            <table class=\"table table-striped table-bordered table-hover\">
                <thead>
                    <tr>
                        <th scope=\"col\">";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label.username"), "html", null, true);
        echo "</th>
                        <th scope=\"col\">";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label.password"), "html", null, true);
        echo "</th>
                        <th scope=\"col\">";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label.role"), "html", null, true);
        echo "</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>john_user</td>
                        <td>kitten</td>
                        <td><code>ROLE_USER</code> (";
        // line 58
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("help.role_user"), "html", null, true);
        echo ")</td>
                    </tr>
                    <tr>
                        <td>jane_admin</td>
                        <td>kitten</td>
                        <td><code>ROLE_ADMIN</code> (";
        // line 63
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("help.role_admin"), "html", null, true);
        echo ")</td>
                    </tr>
                </tbody>
            </table>

            <div id=\"login-users-help\" class=\"panel panel-default\">
                <div class=\"panel-body\">
                    <p>
                        <span class=\"label label-success\">";
        // line 71
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("note"), "html", null, true);
        echo "</span>
                        ";
        // line 72
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("help.reload_fixtures"), "html", null, true);
        echo "<br/>

                        <code class=\"console\">\$ php bin/console doctrine:fixtures:load</code>
                    </p>

                    <p>
                        <span class=\"label label-success\">";
        // line 78
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("tip"), "html", null, true);
        echo "</span>
                        ";
        // line 79
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("help.add_user"), "html", null, true);
        echo "<br/>

                        <code class=\"console\">\$ php bin/console app:add-user</code>
                    </p>
                </div>
            </div>
        </div>
    </div>
";
        
        $__internal_c8e1c643ea902b023638e42d6a0c4adabe0f3d86523ebd63e0b71b9ce909d26e->leave($__internal_c8e1c643ea902b023638e42d6a0c4adabe0f3d86523ebd63e0b71b9ce909d26e_prof);

        
        $__internal_eaf4a2949b37c281982faa198477cab757e9b959748f00cc61711bc6fa6e48bf->leave($__internal_eaf4a2949b37c281982faa198477cab757e9b959748f00cc61711bc6fa6e48bf_prof);

    }

    // line 89
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_0cd17bc4c82a50832dcfeddf8e2c4199ec74988244e103366e1ad7e3b033bd44 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0cd17bc4c82a50832dcfeddf8e2c4199ec74988244e103366e1ad7e3b033bd44->enter($__internal_0cd17bc4c82a50832dcfeddf8e2c4199ec74988244e103366e1ad7e3b033bd44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        $__internal_d2906e3e22e29124bf06a4c2e0ec364649f699d98922216b3e52ebec6d2e75bd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d2906e3e22e29124bf06a4c2e0ec364649f699d98922216b3e52ebec6d2e75bd->enter($__internal_d2906e3e22e29124bf06a4c2e0ec364649f699d98922216b3e52ebec6d2e75bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 90
        echo "    ";
        $this->displayParentBlock("sidebar", $context, $blocks);
        echo "

    ";
        // line 92
        echo $this->env->getExtension('App\Twig\SourceCodeExtension')->showSourceCode($this->env, $this->getTemplateName());
        echo "
";
        
        $__internal_d2906e3e22e29124bf06a4c2e0ec364649f699d98922216b3e52ebec6d2e75bd->leave($__internal_d2906e3e22e29124bf06a4c2e0ec364649f699d98922216b3e52ebec6d2e75bd_prof);

        
        $__internal_0cd17bc4c82a50832dcfeddf8e2c4199ec74988244e103366e1ad7e3b033bd44->leave($__internal_0cd17bc4c82a50832dcfeddf8e2c4199ec74988244e103366e1ad7e3b033bd44_prof);

    }

    public function getTemplateName()
    {
        return "security/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  255 => 92,  249 => 90,  240 => 89,  221 => 79,  217 => 78,  208 => 72,  204 => 71,  193 => 63,  185 => 58,  175 => 51,  171 => 50,  167 => 49,  158 => 43,  145 => 33,  140 => 31,  134 => 28,  128 => 25,  124 => 24,  119 => 22,  114 => 20,  108 => 16,  102 => 13,  99 => 12,  96 => 11,  87 => 10,  75 => 7,  70 => 6,  61 => 5,  43 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body_id 'login' %}

{% block javascripts %}
    {{ parent() }}
    <script src=\"{{ asset('build/js/login.js') }}\"></script>
{% endblock %}

{% block main %}
    {% if error %}
        <div class=\"alert alert-danger\">
            {{ error.messageKey|trans(error.messageData, 'security') }}
        </div>
    {% endif %}

    <div class=\"row\">
        <div class=\"col-sm-5\">
            <div class=\"well\">
                <form action=\"{{ path('security_login') }}\" method=\"post\">
                    <fieldset>
                        <legend><i class=\"fa fa-lock\" aria-hidden=\"true\"></i> {{ 'title.login'|trans }}</legend>
                        <div class=\"form-group\">
                            <label for=\"username\">{{ 'label.username'|trans }}</label>
                            <input type=\"text\" id=\"username\" name=\"_username\" value=\"{{ last_username }}\" class=\"form-control\"/>
                        </div>
                        <div class=\"form-group\">
                            <label for=\"password\">{{ 'label.password'|trans }}</label>
                            <input type=\"password\" id=\"password\" name=\"_password\" class=\"form-control\" />
                        </div>
                        <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token('authenticate') }}\"/>
                        <button type=\"submit\" class=\"btn btn-primary\">
                            <i class=\"fa fa-sign-in\" aria-hidden=\"true\"></i> {{ 'action.sign_in'|trans }}
                        </button>
                    </fieldset>
                </form>
            </div>
        </div>

        <div id=\"login-help\" class=\"col-sm-7\">
            <h3>
                <i class=\"fa fa-long-arrow-left\" aria-hidden=\"true\"></i>
                {{ 'help.login_users'|trans }}
            </h3>

            <table class=\"table table-striped table-bordered table-hover\">
                <thead>
                    <tr>
                        <th scope=\"col\">{{ 'label.username'|trans }}</th>
                        <th scope=\"col\">{{ 'label.password'|trans }}</th>
                        <th scope=\"col\">{{ 'label.role'|trans }}</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>john_user</td>
                        <td>kitten</td>
                        <td><code>ROLE_USER</code> ({{ 'help.role_user'|trans }})</td>
                    </tr>
                    <tr>
                        <td>jane_admin</td>
                        <td>kitten</td>
                        <td><code>ROLE_ADMIN</code> ({{ 'help.role_admin'|trans }})</td>
                    </tr>
                </tbody>
            </table>

            <div id=\"login-users-help\" class=\"panel panel-default\">
                <div class=\"panel-body\">
                    <p>
                        <span class=\"label label-success\">{{ 'note'|trans }}</span>
                        {{ 'help.reload_fixtures'|trans }}<br/>

                        <code class=\"console\">\$ php bin/console doctrine:fixtures:load</code>
                    </p>

                    <p>
                        <span class=\"label label-success\">{{ 'tip'|trans }}</span>
                        {{ 'help.add_user'|trans }}<br/>

                        <code class=\"console\">\$ php bin/console app:add-user</code>
                    </p>
                </div>
            </div>
        </div>
    </div>
{% endblock %}

{% block sidebar %}
    {{ parent() }}

    {{ show_source_code(_self) }}
{% endblock %}
", "security/login.html.twig", "/var/www/symfony/templates/security/login.html.twig");
    }
}
