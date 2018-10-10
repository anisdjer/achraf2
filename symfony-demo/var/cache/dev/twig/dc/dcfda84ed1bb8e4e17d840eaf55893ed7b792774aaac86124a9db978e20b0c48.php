<?php

/* default/_flash_messages.html.twig */
class __TwigTemplate_4f4683ee651d98b5eed82b0ab5ebfe87ce6c7227ba3cf17271652355a04716c5 extends Twig_Template
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
        $__internal_53072847ef76b73887f552b434e778e17822dec911d26c3cbef32c95c33a7278 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_53072847ef76b73887f552b434e778e17822dec911d26c3cbef32c95c33a7278->enter($__internal_53072847ef76b73887f552b434e778e17822dec911d26c3cbef32c95c33a7278_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/_flash_messages.html.twig"));

        $__internal_2cf287b9483fd4dc6df18f32808981044a7cbdcb2cd845711e238f4d7b80ac11 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2cf287b9483fd4dc6df18f32808981044a7cbdcb2cd845711e238f4d7b80ac11->enter($__internal_2cf287b9483fd4dc6df18f32808981044a7cbdcb2cd845711e238f4d7b80ac11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/_flash_messages.html.twig"));

        // line 9
        echo "
<div class=\"messages\">
    ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 11, $this->getSourceContext()); })()), "flashes", array()));
        foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
            // line 12
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 13
                echo "            ";
                // line 14
                echo "            <div class=\"alert alert-dismissible alert-";
                echo twig_escape_filter($this->env, $context["type"], "html", null, true);
                echo "\" role=\"alert\">
                <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
                    <span aria-hidden=\"true\">&times;</span>
                </button>

                ";
                // line 19
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($context["message"]), "html", null, true);
                echo "
            </div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 22
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "</div>
";
        
        $__internal_53072847ef76b73887f552b434e778e17822dec911d26c3cbef32c95c33a7278->leave($__internal_53072847ef76b73887f552b434e778e17822dec911d26c3cbef32c95c33a7278_prof);

        
        $__internal_2cf287b9483fd4dc6df18f32808981044a7cbdcb2cd845711e238f4d7b80ac11->leave($__internal_2cf287b9483fd4dc6df18f32808981044a7cbdcb2cd845711e238f4d7b80ac11_prof);

    }

    public function getTemplateName()
    {
        return "default/_flash_messages.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 23,  58 => 22,  49 => 19,  40 => 14,  38 => 13,  33 => 12,  29 => 11,  25 => 9,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#
   This is a template fragment designed to be included in other templates
   See https://symfony.com/doc/current/book/templating.html#including-other-templates

   A common practice to better distinguish between templates and fragments is to
   prefix fragments with an underscore. That's why this template is called
   '_flash_messages.html.twig' instead of 'flash_messages.html.twig'
#}

<div class=\"messages\">
    {% for type, messages in app.flashes %}
        {% for message in messages %}
            {# Bootstrap alert, see http://getbootstrap.com/components/#alerts #}
            <div class=\"alert alert-dismissible alert-{{ type }}\" role=\"alert\">
                <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
                    <span aria-hidden=\"true\">&times;</span>
                </button>

                {{ message|trans }}
            </div>
        {% endfor %}
    {% endfor %}
</div>
", "default/_flash_messages.html.twig", "/var/www/symfony/templates/default/_flash_messages.html.twig");
    }
}
