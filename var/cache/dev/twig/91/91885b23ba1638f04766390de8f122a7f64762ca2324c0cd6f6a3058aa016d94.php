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

/* blog/show.html.twig */
class __TwigTemplate_ad4d12a12d76a1f7cfe659605f709c26f6aa220cabcdd85b84cfbd9753e7109c extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "blog/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "blog/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "blog/show.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "WILDREAM";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "        <div class=\"col-sm-7 mt-4 mx-4\">
                <div class=\"row post mb-1\">
                        <div class=\"col-12\">
                                <h2 class=\"text-capitalize text-dark\">";
        // line 9
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 9, $this->source); })()), "title", [], "any", false, false, false, 9), "html", null, true);
        echo "</h2>
                                <p class=\"added\"><a href=\"#\" class=\"username\">";
        // line 10
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 10, $this->source); })()), "username", [], "any", false, false, false, 10), "html", null, true);
        echo "</a> ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 10, $this->source); })()), "time", [], "any", false, false, false, 10), "F jS \\a\\t g:ia"), "html", null, true);
        echo "</p>
                                <p>";
        // line 11
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 11, $this->source); })()), "body", [], "any", false, false, false, 11), "html", null, true);
        echo "</p>
                                <br>
                                <img src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("images/" . twig_get_attribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 13, $this->source); })()), "imageshown", [], "any", false, false, false, 13))), "html", null, true);
        echo "\" class=\"img-thumbnail\" alt=\"\">
                        </div>
                </div>
                <div class=\"row post mb-1\">
                        <div class=\"col-12\">
                                <h2 class=\"text-capitalize text-dark\">Commentaires <span class=\"badge badge-dark\">0</span></h2>
                                <hr>
                               ";
        // line 21
        echo "                                        <form action=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("comment_add");
        echo "\" method=\"post\"></form>
                                        <div class=\"form-group\">
                                                <textarea name=\"body\" id=\"body\" placeholder=\"Ajouter votre commentaire\"cols=\"30\" rows=\"10\" class=\"form-control\"></textarea>
                                        </div>
                                        <div class=\"form-group\">
                                                <button type=\"submit\" class=\"btn btn-success\">Commenter</button>
                                        </div>
                                        <input type=\"hidden\" name=\"_csrf_token\" value=\"\">
                                        <input type=\"hidden\" name=\"post_id\" value=\"\">
                               ";
        // line 32
        echo "
                                ";
        // line 34
        echo "                                ";
        // line 40
        echo "                        </div>
                </div>
        </div>
         <div class=\"col-sm-4 container col-12\">
              ";
        // line 44
        echo twig_include($this->env, $context, "include/sidebar.html.twig", ["latests" => (isset($context["latests"]) || array_key_exists("latests", $context) ? $context["latests"] : (function () { throw new RuntimeError('Variable "latests" does not exist.', 44, $this->source); })())]);
        echo "
         </div>       
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "blog/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  142 => 44,  136 => 40,  134 => 34,  131 => 32,  118 => 21,  108 => 13,  103 => 11,  97 => 10,  93 => 9,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}WILDREAM{% endblock %}

{% block body %}
        <div class=\"col-sm-7 mt-4 mx-4\">
                <div class=\"row post mb-1\">
                        <div class=\"col-12\">
                                <h2 class=\"text-capitalize text-dark\">{{post.title}}</h2>
                                <p class=\"added\"><a href=\"#\" class=\"username\">{{post.username}}</a> {{post.time|date(\"F jS \\\\a\\\\t g:ia\") }}</p>
                                <p>{{post.body}}</p>
                                <br>
                                <img src=\"{{asset('images/'~ post.imageshown)}}\" class=\"img-thumbnail\" alt=\"\">
                        </div>
                </div>
                <div class=\"row post mb-1\">
                        <div class=\"col-12\">
                                <h2 class=\"text-capitalize text-dark\">Commentaires <span class=\"badge badge-dark\">0</span></h2>
                                <hr>
                               {# {% if is_granted('ROLE_USER') %}#}
                                        <form action=\"{{path('comment_add')}}\" method=\"post\"></form>
                                        <div class=\"form-group\">
                                                <textarea name=\"body\" id=\"body\" placeholder=\"Ajouter votre commentaire\"cols=\"30\" rows=\"10\" class=\"form-control\"></textarea>
                                        </div>
                                        <div class=\"form-group\">
                                                <button type=\"submit\" class=\"btn btn-success\">Commenter</button>
                                        </div>
                                        <input type=\"hidden\" name=\"_csrf_token\" value=\"\">
                                        <input type=\"hidden\" name=\"post_id\" value=\"\">
                               {#} {% else %}
                                       {# <a href=\"{{path('security_login')}}\" class=\"btn btn-link\">Connectez-vous pour commenter</a>#}

                                {# {% endif %}#}
                                {#{% for comment in post.comments %}
                                <div class=\"media mt-3\">
                                        <span class=\"comment-userbame\">{{comment.user.username}}</span>
                                </div>

                                {% endfor %}#}
                        </div>
                </div>
        </div>
         <div class=\"col-sm-4 container col-12\">
              {{include('include/sidebar.html.twig',{'latests':latests})}}
         </div>       
{% endblock %}
", "blog/show.html.twig", "C:\\wamp64\\www\\wildream\\templates\\blog\\show.html.twig");
    }
}
