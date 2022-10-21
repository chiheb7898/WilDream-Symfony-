<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* include/sidebar.html.twig */
class __TwigTemplate_97ae9d5f762cffabe8be79575f40d295a49a712d5e3c4d93c2c26e1c717e49f4 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "include/sidebar.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "include/sidebar.html.twig"));

        // line 1
        echo "<div class=\"row post mt-4\">
    <div class=\"col-12\">
        <h2 class=\"text-capitalize text-dark\">Articles Récents</h2>
        <hr>
        <div class=\"row post mb-1\">
        ";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["latests"]) || array_key_exists("latests", $context) ? $context["latests"] : (function () { throw new RuntimeError('Variable "latests" does not exist.', 6, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["latest"]) {
            // line 7
            echo "            <div class=\"col-12\">
                <h4 class=\"latest\">
                <a href=\"";
            // line 9
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("blogshow", ["id" => twig_get_attribute($this->env, $this->source, $context["latest"], "id", [], "any", false, false, false, 9)]), "html", null, true);
            echo "\" class=\"username\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["latest"], "title", [], "any", false, false, false, 9), "html", null, true);
            echo "</a>
                </h4>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['latest'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "        </div>
    </div>
</div>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "include/sidebar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 13,  58 => 9,  54 => 7,  50 => 6,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"row post mt-4\">
    <div class=\"col-12\">
        <h2 class=\"text-capitalize text-dark\">Articles Récents</h2>
        <hr>
        <div class=\"row post mb-1\">
        {% for latest in latests %}
            <div class=\"col-12\">
                <h4 class=\"latest\">
                <a href=\"{{path('blogshow',{'id':latest.id})}}\" class=\"username\">{{latest.title}}</a>
                </h4>
            </div>
        {% endfor %}
        </div>
    </div>
</div>", "include/sidebar.html.twig", "C:\\Users\\chihe\\Desktop\\PI\\New\\wildream\\templates\\include\\sidebar.html.twig");
    }
}
