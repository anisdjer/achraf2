<?php

/* base.html.twig */
class __TwigTemplate_90acfed4b125b9bf915c5f6bb5f6ed26f773034082d8e0cd2cf04f5dbbddf0b3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body_id' => array($this, 'block_body_id'),
            'header' => array($this, 'block_header'),
            'header_navigation_links' => array($this, 'block_header_navigation_links'),
            'body' => array($this, 'block_body'),
            'main' => array($this, 'block_main'),
            'sidebar' => array($this, 'block_sidebar'),
            'footer' => array($this, 'block_footer'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_42c03932ca1fc33e01d8f74ced873861568ff0680f093d4b8b57c26093f63b8d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_42c03932ca1fc33e01d8f74ced873861568ff0680f093d4b8b57c26093f63b8d->enter($__internal_42c03932ca1fc33e01d8f74ced873861568ff0680f093d4b8b57c26093f63b8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_4475e4128e97fe01bf186462785cb9f5e8174cf1a3d77e86156a4b4355324842 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4475e4128e97fe01bf186462785cb9f5e8174cf1a3d77e86156a4b4355324842->enter($__internal_4475e4128e97fe01bf186462785cb9f5e8174cf1a3d77e86156a4b4355324842_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 6
        echo "<!DOCTYPE html>
<html lang=\"";
        // line 7
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 7, $this->getSourceContext()); })()), "request", array()), "locale", array()), "html", null, true);
        echo "\">
    <head>
        <meta charset=\"UTF-8\" />
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\"/>
        <title>";
        // line 11
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"alternate\" type=\"application/rss+xml\" title=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("rss.title"), "html", null, true);
        echo "\" href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("blog_rss");
        echo "\">
        ";
        // line 13
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 16
        echo "
        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>

    <body id=\"";
        // line 20
        $this->displayBlock('body_id', $context, $blocks);
        echo "\">

        ";
        // line 22
        $this->displayBlock('header', $context, $blocks);
        // line 89
        echo "
        <div class=\"container body-container\">
            ";
        // line 91
        $this->displayBlock('body', $context, $blocks);
        // line 110
        echo "        </div>

        ";
        // line 112
        $this->displayBlock('footer', $context, $blocks);
        // line 137
        echo "
        ";
        // line 138
        $this->displayBlock('javascripts', $context, $blocks);
        // line 143
        echo "
        ";
        // line 147
        echo "        <!-- Page rendered on ";
        echo twig_escape_filter($this->env, twig_localized_date_filter($this->env, "now", "long", "long", null, "UTC"), "html", null, true);
        echo " -->
    </body>
</html>
";
        
        $__internal_42c03932ca1fc33e01d8f74ced873861568ff0680f093d4b8b57c26093f63b8d->leave($__internal_42c03932ca1fc33e01d8f74ced873861568ff0680f093d4b8b57c26093f63b8d_prof);

        
        $__internal_4475e4128e97fe01bf186462785cb9f5e8174cf1a3d77e86156a4b4355324842->leave($__internal_4475e4128e97fe01bf186462785cb9f5e8174cf1a3d77e86156a4b4355324842_prof);

    }

    // line 11
    public function block_title($context, array $blocks = array())
    {
        $__internal_99e57b9af36d4e7307723e76aed1bb91a3de2e02cbd71df9e5e5d8baa5b5cb3e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_99e57b9af36d4e7307723e76aed1bb91a3de2e02cbd71df9e5e5d8baa5b5cb3e->enter($__internal_99e57b9af36d4e7307723e76aed1bb91a3de2e02cbd71df9e5e5d8baa5b5cb3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_540350312674919745ea3cda482bcee6bfe274011f23fa17eb9b693ad8163d05 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_540350312674919745ea3cda482bcee6bfe274011f23fa17eb9b693ad8163d05->enter($__internal_540350312674919745ea3cda482bcee6bfe274011f23fa17eb9b693ad8163d05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Symfony Demo application";
        
        $__internal_540350312674919745ea3cda482bcee6bfe274011f23fa17eb9b693ad8163d05->leave($__internal_540350312674919745ea3cda482bcee6bfe274011f23fa17eb9b693ad8163d05_prof);

        
        $__internal_99e57b9af36d4e7307723e76aed1bb91a3de2e02cbd71df9e5e5d8baa5b5cb3e->leave($__internal_99e57b9af36d4e7307723e76aed1bb91a3de2e02cbd71df9e5e5d8baa5b5cb3e_prof);

    }

    // line 13
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_ec8cbaa3a5e3435b82aa9cd5c544460ebdb2ac911396cb3781070b0d1f5e54a6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ec8cbaa3a5e3435b82aa9cd5c544460ebdb2ac911396cb3781070b0d1f5e54a6->enter($__internal_ec8cbaa3a5e3435b82aa9cd5c544460ebdb2ac911396cb3781070b0d1f5e54a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_0c533d0125c8a1b3dc547f1f495ab0c79c6a3b5ce976ba6bfcedd5e8c2290258 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0c533d0125c8a1b3dc547f1f495ab0c79c6a3b5ce976ba6bfcedd5e8c2290258->enter($__internal_0c533d0125c8a1b3dc547f1f495ab0c79c6a3b5ce976ba6bfcedd5e8c2290258_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 14
        echo "            <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("build/css/app.css"), "html", null, true);
        echo "\">
        ";
        
        $__internal_0c533d0125c8a1b3dc547f1f495ab0c79c6a3b5ce976ba6bfcedd5e8c2290258->leave($__internal_0c533d0125c8a1b3dc547f1f495ab0c79c6a3b5ce976ba6bfcedd5e8c2290258_prof);

        
        $__internal_ec8cbaa3a5e3435b82aa9cd5c544460ebdb2ac911396cb3781070b0d1f5e54a6->leave($__internal_ec8cbaa3a5e3435b82aa9cd5c544460ebdb2ac911396cb3781070b0d1f5e54a6_prof);

    }

    // line 20
    public function block_body_id($context, array $blocks = array())
    {
        $__internal_338c2c8054401e2c186d57becdc9ea95f94f24a110b889663902d7130471c5af = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_338c2c8054401e2c186d57becdc9ea95f94f24a110b889663902d7130471c5af->enter($__internal_338c2c8054401e2c186d57becdc9ea95f94f24a110b889663902d7130471c5af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        $__internal_6ff08ef3bab5cf33119ba7269266eb201a47ab780ef4f106258588d347ee1b64 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6ff08ef3bab5cf33119ba7269266eb201a47ab780ef4f106258588d347ee1b64->enter($__internal_6ff08ef3bab5cf33119ba7269266eb201a47ab780ef4f106258588d347ee1b64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        
        $__internal_6ff08ef3bab5cf33119ba7269266eb201a47ab780ef4f106258588d347ee1b64->leave($__internal_6ff08ef3bab5cf33119ba7269266eb201a47ab780ef4f106258588d347ee1b64_prof);

        
        $__internal_338c2c8054401e2c186d57becdc9ea95f94f24a110b889663902d7130471c5af->leave($__internal_338c2c8054401e2c186d57becdc9ea95f94f24a110b889663902d7130471c5af_prof);

    }

    // line 22
    public function block_header($context, array $blocks = array())
    {
        $__internal_a577df6818d8f24b61fc41b9e7295ee9deb70c28c9f39eb81b6924bb7a541851 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a577df6818d8f24b61fc41b9e7295ee9deb70c28c9f39eb81b6924bb7a541851->enter($__internal_a577df6818d8f24b61fc41b9e7295ee9deb70c28c9f39eb81b6924bb7a541851_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $__internal_4155e70985f4996c0d26b641fa3d1585f88a6c7c16ad63be9d33b453cd09b3b3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4155e70985f4996c0d26b641fa3d1585f88a6c7c16ad63be9d33b453cd09b3b3->enter($__internal_4155e70985f4996c0d26b641fa3d1585f88a6c7c16ad63be9d33b453cd09b3b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 23
        echo "            <header>
                <div class=\"navbar navbar-default navbar-static-top\" role=\"navigation\">
                    <div class=\"container\">
                        <div class=\"navbar-header col-md-3 col-lg-2\">
                            <a class=\"navbar-brand\" href=\"";
        // line 27
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage");
        echo "\">
                                Symfony Demo
                            </a>

                            <button type=\"button\" class=\"navbar-toggle\"
                                    data-toggle=\"collapse\"
                                    data-target=\".navbar-collapse\">
                                <span class=\"sr-only\">";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("menu.toggle_nav"), "html", null, true);
        echo "</span>
                                <span class=\"icon-bar\"></span>
                                <span class=\"icon-bar\"></span>
                                <span class=\"icon-bar\"></span>
                            </button>
                        </div>
                        <div class=\"navbar-collapse collapse\">
                            <ul class=\"nav navbar-nav navbar-right\">

                                ";
        // line 43
        $this->displayBlock('header_navigation_links', $context, $blocks);
        // line 58
        echo "
                                <li>
                                    <a href=\"";
        // line 60
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("blog_search");
        echo "\"> <i class=\"fa fa-search\"></i> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("menu.search"), "html", null, true);
        echo "</a>
                                </li>

                                ";
        // line 63
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 63, $this->getSourceContext()); })()), "user", array())) {
            // line 64
            echo "                                    <li>
                                        <a href=\"";
            // line 65
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("security_logout");
            echo "\">
                                            <i class=\"fa fa-sign-out\" aria-hidden=\"true\"></i> ";
            // line 66
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("menu.logout"), "html", null, true);
            echo "
                                        </a>
                                    </li>
                                ";
        }
        // line 70
        echo "
                                <li class=\"dropdown\">
                                    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-expanded=\"false\" id=\"locales\">
                                        <i class=\"fa fa-globe\" aria-hidden=\"true\"></i>
                                        <span class=\"caret\"></span>
                                        <span class=\"sr-only\">";
        // line 75
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("menu.choose_language"), "html", null, true);
        echo "</span>
                                    </a>
                                    <ul class=\"dropdown-menu locales\" role=\"menu\" aria-labelledby=\"locales\">
                                        ";
        // line 78
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->env->getExtension('App\Twig\AppExtension')->getLocales());
        foreach ($context['_seq'] as $context["_key"] => $context["locale"]) {
            // line 79
            echo "                                            <li ";
            if ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 79, $this->getSourceContext()); })()), "request", array()), "locale", array()) == twig_get_attribute($this->env, $this->getSourceContext(), $context["locale"], "code", array()))) {
                echo "aria-checked=\"true\" class=\"active\"";
            } else {
                echo "aria-checked=\"false\"";
            }
            echo " role=\"menuitem\"><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 79, $this->getSourceContext()); })()), "request", array()), "get", array(0 => "_route", 1 => "blog_index"), "method"), twig_array_merge(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 79, $this->getSourceContext()); })()), "request", array()), "get", array(0 => "_route_params", 1 => array()), "method"), array("_locale" => twig_get_attribute($this->env, $this->getSourceContext(), $context["locale"], "code", array())))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["locale"], "name", array())), "html", null, true);
            echo "</a></li>
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['locale'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 81
        echo "                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </header>
        ";
        
        $__internal_4155e70985f4996c0d26b641fa3d1585f88a6c7c16ad63be9d33b453cd09b3b3->leave($__internal_4155e70985f4996c0d26b641fa3d1585f88a6c7c16ad63be9d33b453cd09b3b3_prof);

        
        $__internal_a577df6818d8f24b61fc41b9e7295ee9deb70c28c9f39eb81b6924bb7a541851->leave($__internal_a577df6818d8f24b61fc41b9e7295ee9deb70c28c9f39eb81b6924bb7a541851_prof);

    }

    // line 43
    public function block_header_navigation_links($context, array $blocks = array())
    {
        $__internal_f4f715c34f4b45c2c353cee22e56d0bba28ef9a289a277c4d4174380021f9f8f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f4f715c34f4b45c2c353cee22e56d0bba28ef9a289a277c4d4174380021f9f8f->enter($__internal_f4f715c34f4b45c2c353cee22e56d0bba28ef9a289a277c4d4174380021f9f8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_navigation_links"));

        $__internal_94e59d1bd97d0a68d1e327d0fb807f95dc781f32bbd830e79df4f60d19dc282d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_94e59d1bd97d0a68d1e327d0fb807f95dc781f32bbd830e79df4f60d19dc282d->enter($__internal_94e59d1bd97d0a68d1e327d0fb807f95dc781f32bbd830e79df4f60d19dc282d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_navigation_links"));

        // line 44
        echo "                                    <li>
                                        <a href=\"";
        // line 45
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("blog_index");
        echo "\">
                                            <i class=\"fa fa-home\" aria-hidden=\"true\"></i> ";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("menu.homepage"), "html", null, true);
        echo "
                                        </a>
                                    </li>

                                    ";
        // line 50
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN")) {
            // line 51
            echo "                                        <li>
                                            <a href=\"";
            // line 52
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_post_index");
            echo "\">
                                                <i class=\"fa fa-lock\" aria-hidden=\"true\"></i> ";
            // line 53
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("menu.admin"), "html", null, true);
            echo "
                                            </a>
                                        </li>
                                    ";
        }
        // line 57
        echo "                                ";
        
        $__internal_94e59d1bd97d0a68d1e327d0fb807f95dc781f32bbd830e79df4f60d19dc282d->leave($__internal_94e59d1bd97d0a68d1e327d0fb807f95dc781f32bbd830e79df4f60d19dc282d_prof);

        
        $__internal_f4f715c34f4b45c2c353cee22e56d0bba28ef9a289a277c4d4174380021f9f8f->leave($__internal_f4f715c34f4b45c2c353cee22e56d0bba28ef9a289a277c4d4174380021f9f8f_prof);

    }

    // line 91
    public function block_body($context, array $blocks = array())
    {
        $__internal_88e88b64fde474335f03abcd07d54c7dc1631122092c317294e17089b0be27a7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_88e88b64fde474335f03abcd07d54c7dc1631122092c317294e17089b0be27a7->enter($__internal_88e88b64fde474335f03abcd07d54c7dc1631122092c317294e17089b0be27a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_bc4ee92e358efe57dd9f1a24e05fc62d8fce53e4fcd40420248f90c97b78e990 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bc4ee92e358efe57dd9f1a24e05fc62d8fce53e4fcd40420248f90c97b78e990->enter($__internal_bc4ee92e358efe57dd9f1a24e05fc62d8fce53e4fcd40420248f90c97b78e990_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 92
        echo "                <div class=\"row\">
                    <div id=\"main\" class=\"col-sm-9\">
                        ";
        // line 94
        echo twig_include($this->env, $context, "default/_flash_messages.html.twig");
        echo "

                        ";
        // line 96
        $this->displayBlock('main', $context, $blocks);
        // line 97
        echo "                    </div>

                    <div id=\"sidebar\" class=\"col-sm-3\">
                        ";
        // line 100
        $this->displayBlock('sidebar', $context, $blocks);
        // line 107
        echo "                    </div>
                </div>
            ";
        
        $__internal_bc4ee92e358efe57dd9f1a24e05fc62d8fce53e4fcd40420248f90c97b78e990->leave($__internal_bc4ee92e358efe57dd9f1a24e05fc62d8fce53e4fcd40420248f90c97b78e990_prof);

        
        $__internal_88e88b64fde474335f03abcd07d54c7dc1631122092c317294e17089b0be27a7->leave($__internal_88e88b64fde474335f03abcd07d54c7dc1631122092c317294e17089b0be27a7_prof);

    }

    // line 96
    public function block_main($context, array $blocks = array())
    {
        $__internal_1d49dc0dbd480cac259bfc1de4333cb276298b81c705e6668060c8ffe0eb8b5f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1d49dc0dbd480cac259bfc1de4333cb276298b81c705e6668060c8ffe0eb8b5f->enter($__internal_1d49dc0dbd480cac259bfc1de4333cb276298b81c705e6668060c8ffe0eb8b5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        $__internal_08b76076655adc2d91b8988dda8e3d2df69eef33e1454545b2c331942551e114 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_08b76076655adc2d91b8988dda8e3d2df69eef33e1454545b2c331942551e114->enter($__internal_08b76076655adc2d91b8988dda8e3d2df69eef33e1454545b2c331942551e114_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        
        $__internal_08b76076655adc2d91b8988dda8e3d2df69eef33e1454545b2c331942551e114->leave($__internal_08b76076655adc2d91b8988dda8e3d2df69eef33e1454545b2c331942551e114_prof);

        
        $__internal_1d49dc0dbd480cac259bfc1de4333cb276298b81c705e6668060c8ffe0eb8b5f->leave($__internal_1d49dc0dbd480cac259bfc1de4333cb276298b81c705e6668060c8ffe0eb8b5f_prof);

    }

    // line 100
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_b9db142aec85d2c161252f5ed6e55ffd4087f06211ef4f2f181750a353f86555 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b9db142aec85d2c161252f5ed6e55ffd4087f06211ef4f2f181750a353f86555->enter($__internal_b9db142aec85d2c161252f5ed6e55ffd4087f06211ef4f2f181750a353f86555_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        $__internal_febe485cca5f1e7ad6eb1a2dbe06b3447edc984b4802a5d86ea0b5ec3d916ca7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_febe485cca5f1e7ad6eb1a2dbe06b3447edc984b4802a5d86ea0b5ec3d916ca7->enter($__internal_febe485cca5f1e7ad6eb1a2dbe06b3447edc984b4802a5d86ea0b5ec3d916ca7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 101
        echo "                            ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragmentStrategy("esi", Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("Symfony\\Bundle\\FrameworkBundle\\Controller\\TemplateController::templateAction", array("template" => "blog/about.html.twig", "sharedAge" => 600, "_locale" => twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(),         // line 104
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 104, $this->getSourceContext()); })()), "request", array()), "locale", array()))));
        // line 105
        echo "
                        ";
        
        $__internal_febe485cca5f1e7ad6eb1a2dbe06b3447edc984b4802a5d86ea0b5ec3d916ca7->leave($__internal_febe485cca5f1e7ad6eb1a2dbe06b3447edc984b4802a5d86ea0b5ec3d916ca7_prof);

        
        $__internal_b9db142aec85d2c161252f5ed6e55ffd4087f06211ef4f2f181750a353f86555->leave($__internal_b9db142aec85d2c161252f5ed6e55ffd4087f06211ef4f2f181750a353f86555_prof);

    }

    // line 112
    public function block_footer($context, array $blocks = array())
    {
        $__internal_c51a7d3fc676bbef2c60308e1cbfcb1105d1ee87e206de445a689a216114b7d5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c51a7d3fc676bbef2c60308e1cbfcb1105d1ee87e206de445a689a216114b7d5->enter($__internal_c51a7d3fc676bbef2c60308e1cbfcb1105d1ee87e206de445a689a216114b7d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        $__internal_2207c4288f32cfa097f8012aa2341a1a71155fea9851b464c4cff5e4f837eed7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2207c4288f32cfa097f8012aa2341a1a71155fea9851b464c4cff5e4f837eed7->enter($__internal_2207c4288f32cfa097f8012aa2341a1a71155fea9851b464c4cff5e4f837eed7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 113
        echo "            <footer>
                <div class=\"container\">
                    <div class=\"row\">
                        <div id=\"footer-copyright\" class=\"col-md-6\">
                            <p>&copy; ";
        // line 117
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo " - The Symfony Project</p>
                            <p>";
        // line 118
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mit_license"), "html", null, true);
        echo "</p>
                        </div>
                        <div id=\"footer-resources\" class=\"col-md-6\">
                            <p>
                                <a href=\"https://twitter.com/symfony\" title=\"Symfony Twitter\">
                                    <i class=\"fa fa-twitter\" aria-hidden=\"true\"></i>
                                </a>
                                <a href=\"https://www.facebook.com/SensioLabs\" title=\"SensioLabs Facebook\">
                                    <i class=\"fa fa-facebook\" aria-hidden=\"true\"></i>
                                </a>
                                <a href=\"https://symfony.com/blog/\" title=\"Symfony Blog\">
                                    <i class=\"fa fa-rss\" aria-hidden=\"true\"></i>
                                </a>
                            </p>
                        </div>
                    </div>
                </div>
            </footer>
        ";
        
        $__internal_2207c4288f32cfa097f8012aa2341a1a71155fea9851b464c4cff5e4f837eed7->leave($__internal_2207c4288f32cfa097f8012aa2341a1a71155fea9851b464c4cff5e4f837eed7_prof);

        
        $__internal_c51a7d3fc676bbef2c60308e1cbfcb1105d1ee87e206de445a689a216114b7d5->leave($__internal_c51a7d3fc676bbef2c60308e1cbfcb1105d1ee87e206de445a689a216114b7d5_prof);

    }

    // line 138
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_c549a33648d182a2baf6367b4f645391ac939374b075089ddb89c89a834f7826 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c549a33648d182a2baf6367b4f645391ac939374b075089ddb89c89a834f7826->enter($__internal_c549a33648d182a2baf6367b4f645391ac939374b075089ddb89c89a834f7826_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_4c42c81a02407ddb00b51e98105e065d639d6a740dafaac80c08eff050bf9d7a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4c42c81a02407ddb00b51e98105e065d639d6a740dafaac80c08eff050bf9d7a->enter($__internal_4c42c81a02407ddb00b51e98105e065d639d6a740dafaac80c08eff050bf9d7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 139
        echo "            <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("build/manifest.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 140
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("build/js/common.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 141
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("build/js/app.js"), "html", null, true);
        echo "\"></script>
        ";
        
        $__internal_4c42c81a02407ddb00b51e98105e065d639d6a740dafaac80c08eff050bf9d7a->leave($__internal_4c42c81a02407ddb00b51e98105e065d639d6a740dafaac80c08eff050bf9d7a_prof);

        
        $__internal_c549a33648d182a2baf6367b4f645391ac939374b075089ddb89c89a834f7826->leave($__internal_c549a33648d182a2baf6367b4f645391ac939374b075089ddb89c89a834f7826_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  478 => 141,  474 => 140,  469 => 139,  460 => 138,  431 => 118,  427 => 117,  421 => 113,  412 => 112,  401 => 105,  399 => 104,  397 => 101,  388 => 100,  371 => 96,  359 => 107,  357 => 100,  352 => 97,  350 => 96,  345 => 94,  341 => 92,  332 => 91,  322 => 57,  315 => 53,  311 => 52,  308 => 51,  306 => 50,  299 => 46,  295 => 45,  292 => 44,  283 => 43,  266 => 81,  249 => 79,  245 => 78,  239 => 75,  232 => 70,  225 => 66,  221 => 65,  218 => 64,  216 => 63,  208 => 60,  204 => 58,  202 => 43,  190 => 34,  180 => 27,  174 => 23,  165 => 22,  148 => 20,  135 => 14,  126 => 13,  108 => 11,  93 => 147,  90 => 143,  88 => 138,  85 => 137,  83 => 112,  79 => 110,  77 => 91,  73 => 89,  71 => 22,  66 => 20,  60 => 17,  57 => 16,  55 => 13,  49 => 12,  45 => 11,  38 => 7,  35 => 6,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#
   This is the base template used as the application layout which contains the
   common elements and decorates all the other templates.
   See https://symfony.com/doc/current/book/templating.html#template-inheritance-and-layouts
#}
<!DOCTYPE html>
<html lang=\"{{ app.request.locale }}\">
    <head>
        <meta charset=\"UTF-8\" />
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\"/>
        <title>{% block title %}Symfony Demo application{% endblock %}</title>
        <link rel=\"alternate\" type=\"application/rss+xml\" title=\"{{ 'rss.title'|trans }}\" href=\"{{ path('blog_rss') }}\">
        {% block stylesheets %}
            <link rel=\"stylesheet\" href=\"{{ asset('build/css/app.css') }}\">
        {% endblock %}

        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>

    <body id=\"{% block body_id %}{% endblock %}\">

        {% block header %}
            <header>
                <div class=\"navbar navbar-default navbar-static-top\" role=\"navigation\">
                    <div class=\"container\">
                        <div class=\"navbar-header col-md-3 col-lg-2\">
                            <a class=\"navbar-brand\" href=\"{{ path('homepage') }}\">
                                Symfony Demo
                            </a>

                            <button type=\"button\" class=\"navbar-toggle\"
                                    data-toggle=\"collapse\"
                                    data-target=\".navbar-collapse\">
                                <span class=\"sr-only\">{{ 'menu.toggle_nav'|trans }}</span>
                                <span class=\"icon-bar\"></span>
                                <span class=\"icon-bar\"></span>
                                <span class=\"icon-bar\"></span>
                            </button>
                        </div>
                        <div class=\"navbar-collapse collapse\">
                            <ul class=\"nav navbar-nav navbar-right\">

                                {% block header_navigation_links %}
                                    <li>
                                        <a href=\"{{ path('blog_index') }}\">
                                            <i class=\"fa fa-home\" aria-hidden=\"true\"></i> {{ 'menu.homepage'|trans }}
                                        </a>
                                    </li>

                                    {% if is_granted('ROLE_ADMIN') %}
                                        <li>
                                            <a href=\"{{ path('admin_post_index') }}\">
                                                <i class=\"fa fa-lock\" aria-hidden=\"true\"></i> {{ 'menu.admin'|trans }}
                                            </a>
                                        </li>
                                    {% endif %}
                                {% endblock %}

                                <li>
                                    <a href=\"{{ path('blog_search') }}\"> <i class=\"fa fa-search\"></i> {{ 'menu.search'|trans }}</a>
                                </li>

                                {% if app.user %}
                                    <li>
                                        <a href=\"{{ path('security_logout') }}\">
                                            <i class=\"fa fa-sign-out\" aria-hidden=\"true\"></i> {{ 'menu.logout'|trans }}
                                        </a>
                                    </li>
                                {% endif %}

                                <li class=\"dropdown\">
                                    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-expanded=\"false\" id=\"locales\">
                                        <i class=\"fa fa-globe\" aria-hidden=\"true\"></i>
                                        <span class=\"caret\"></span>
                                        <span class=\"sr-only\">{{ 'menu.choose_language'|trans }}</span>
                                    </a>
                                    <ul class=\"dropdown-menu locales\" role=\"menu\" aria-labelledby=\"locales\">
                                        {% for locale in locales() %}
                                            <li {% if app.request.locale == locale.code %}aria-checked=\"true\" class=\"active\"{% else %}aria-checked=\"false\"{% endif %} role=\"menuitem\"><a href=\"{{ path(app.request.get('_route', 'blog_index'), app.request.get('_route_params', [])|merge({_locale: locale.code})) }}\">{{ locale.name|capitalize }}</a></li>
                                        {% endfor %}
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </header>
        {% endblock %}

        <div class=\"container body-container\">
            {% block body %}
                <div class=\"row\">
                    <div id=\"main\" class=\"col-sm-9\">
                        {{ include('default/_flash_messages.html.twig') }}

                        {% block main %}{% endblock %}
                    </div>

                    <div id=\"sidebar\" class=\"col-sm-3\">
                        {% block sidebar %}
                            {{ render_esi(controller('Symfony\\\\Bundle\\\\FrameworkBundle\\\\Controller\\\\TemplateController::templateAction', {
                                'template': 'blog/about.html.twig',
                                'sharedAge': 600,
                                '_locale': app.request.locale
                            })) }}
                        {% endblock %}
                    </div>
                </div>
            {% endblock %}
        </div>

        {% block footer %}
            <footer>
                <div class=\"container\">
                    <div class=\"row\">
                        <div id=\"footer-copyright\" class=\"col-md-6\">
                            <p>&copy; {{ 'now'|date('Y') }} - The Symfony Project</p>
                            <p>{{ 'mit_license'|trans }}</p>
                        </div>
                        <div id=\"footer-resources\" class=\"col-md-6\">
                            <p>
                                <a href=\"https://twitter.com/symfony\" title=\"Symfony Twitter\">
                                    <i class=\"fa fa-twitter\" aria-hidden=\"true\"></i>
                                </a>
                                <a href=\"https://www.facebook.com/SensioLabs\" title=\"SensioLabs Facebook\">
                                    <i class=\"fa fa-facebook\" aria-hidden=\"true\"></i>
                                </a>
                                <a href=\"https://symfony.com/blog/\" title=\"Symfony Blog\">
                                    <i class=\"fa fa-rss\" aria-hidden=\"true\"></i>
                                </a>
                            </p>
                        </div>
                    </div>
                </div>
            </footer>
        {% endblock %}

        {% block javascripts %}
            <script src=\"{{ asset('build/manifest.js') }}\"></script>
            <script src=\"{{ asset('build/js/common.js') }}\"></script>
            <script src=\"{{ asset('build/js/app.js') }}\"></script>
        {% endblock %}

        {# it's not mandatory to set the timezone in localizeddate(). This is done to
           avoid errors when the 'intl' PHP extension is not available and the application
           is forced to use the limited \"intl polyfill\", which only supports UTC and GMT #}
        <!-- Page rendered on {{ 'now'|localizeddate('long', 'long', null, 'UTC') }} -->
    </body>
</html>
", "base.html.twig", "/var/www/symfony/templates/base.html.twig");
    }
}
