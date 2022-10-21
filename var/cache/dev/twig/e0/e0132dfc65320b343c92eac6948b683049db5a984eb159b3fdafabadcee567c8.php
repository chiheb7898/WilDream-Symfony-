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

/* blog/index.html.twig */
class __TwigTemplate_1f8fa1183929f666ca837ef467e83ff639b89f711e4a338c360fbf6cd9b32e48 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "blog/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "blog/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "blog/index.html.twig", 1);
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
        echo "
        <div class=\"col-sm-7 mt-4 mx-4\">
        <div class=\"row mb-1\">
        <div class=\"p-t-50 p-b-50\">
        <div class=\"wrapper wrapper--w900\">
                
            <div class=\"card-6\">
                <div class=\"card-heading\">
                    <h2 class=\"title dark\">Créer une publication</h2>
                </div>
                <div class=\"card-body\">
                    ";
        // line 17
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formpost"]) || array_key_exists("formpost", $context) ? $context["formpost"] : (function () { throw new RuntimeError('Variable "formpost" does not exist.', 17, $this->source); })()), 'form_start');
        echo "
                        ";
        // line 18
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["formpost"]) || array_key_exists("formpost", $context) ? $context["formpost"] : (function () { throw new RuntimeError('Variable "formpost" does not exist.', 18, $this->source); })()), 'errors');
        echo "
                        <div class=\"form-row\">
                                <div class=\"name\">Votre Titre</div>
                            <div class=\"value\">
                                <div class=\"input-group\">
                                    ";
        // line 23
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formpost"]) || array_key_exists("formpost", $context) ? $context["formpost"] : (function () { throw new RuntimeError('Variable "formpost" does not exist.', 23, $this->source); })()), "title", [], "any", false, false, false, 23), 'row', ["attr" => ["class" => "form-control", "placeholder" => "Votre Titre"]]);
        echo "
                                </div>
                            </div>
                        </div>
                        <div class=\"form-row\">
                            <div class=\"name\">Que voulez-vous dire</div>
                            <div class=\"value\">
                                <div class=\"input-group\">
                                    ";
        // line 31
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formpost"]) || array_key_exists("formpost", $context) ? $context["formpost"] : (function () { throw new RuntimeError('Variable "formpost" does not exist.', 31, $this->source); })()), "body", [], "any", false, false, false, 31), 'row', ["attr" => ["class" => "textarea--style-6", "placeholder" => "Que voulez-vous dire?"]]);
        echo "
                                </div>
                            </div>
                        </div>
                        <div class=\"form-row\">
                            <div class=\"name\">Photo</div>
                            <div class=\"value\">
                                <div class=\"input-group js-input-file\">
                                    ";
        // line 39
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formpost"]) || array_key_exists("formpost", $context) ? $context["formpost"] : (function () { throw new RuntimeError('Variable "formpost" does not exist.', 39, $this->source); })()), "image", [], "any", false, false, false, 39), 'row', ["attr" => ["class" => ""]]);
        echo "
                                </div>
                                <div class=\"label--desc\">Upload your Joint file or any other relevant file. Max file size 50 MB</div>
                            </div>
                        </div>
                </div>
                <div class=\"card-footer\">
                    <!--<button class=\"btn btn--radius-2 btn--blue-2\" type=\"submit\">Publier</button>-->
                    ";
        // line 47
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formpost"]) || array_key_exists("formpost", $context) ? $context["formpost"] : (function () { throw new RuntimeError('Variable "formpost" does not exist.', 47, $this->source); })()), "submit", [], "any", false, false, false, 47), 'row', ["attr" => ["class" => "btn btn-success"]]);
        echo "
                    <!--<button class=\"btn btn--radius-2 btn--blue-2\" type=\"Cancel\">Cancel</button>-->
                </div>
            </div>
        </div>
    </div>
                ";
        // line 53
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formpost"]) || array_key_exists("formpost", $context) ? $context["formpost"] : (function () { throw new RuntimeError('Variable "formpost" does not exist.', 53, $this->source); })()), 'form_end');
        echo "  
        </div>
                ";
        // line 55
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["posts"]) || array_key_exists("posts", $context) ? $context["posts"] : (function () { throw new RuntimeError('Variable "posts" does not exist.', 55, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 56
            echo "                <div class=\"row post mb-1\">
                        <div class=\"col-12\">
                                <h2 class=\"text-capitalize text-dark\">";
            // line 58
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "title", [], "any", false, false, false, 58), "html", null, true);
            echo "</h2>
                                <p class=\"added\"><a href=\"";
            // line 59
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_posts", ["username" => twig_get_attribute($this->env, $this->source, $context["post"], "username", [], "any", false, false, false, 59)]), "html", null, true);
            echo "\" class=\"username\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "username", [], "any", false, false, false, 59), "html", null, true);
            echo "</a> ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "time", [], "any", false, false, false, 59), "F jS \\a\\t g:ia"), "html", null, true);
            echo "</p>
                                <p class=\"lh-1\">";
            // line 60
            echo twig_escape_filter($this->env, (twig_slice($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "body", [], "any", false, false, false, 60), 0, 100) . "..."), "html", null, true);
            echo "</p>
                                <a href=\"";
            // line 61
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("blogshow", ["id" => twig_get_attribute($this->env, $this->source, $context["post"], "id", [], "any", false, false, false, 61)]), "html", null, true);
            echo "\" class=\"btn btn-default float-left text-capitalize\">lire la suite...</a>
                                <img src=\"";
            // line 62
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("images/" . twig_get_attribute($this->env, $this->source, $context["post"], "imageshown", [], "any", false, false, false, 62))), "html", null, true);
            echo "\" class=\"img-thumbnail\" alt=\"\">
                                
                        </div>
                </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 67
        echo "        </div>
         <div class=\"col-sm-4 container col-12\">
              ";
        // line 69
        echo twig_include($this->env, $context, "include/sidebar.html.twig", ["latests" => (isset($context["latests"]) || array_key_exists("latests", $context) ? $context["latests"] : (function () { throw new RuntimeError('Variable "latests" does not exist.', 69, $this->source); })())]);
        echo "
         </div>       
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

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
        return array (  203 => 69,  199 => 67,  188 => 62,  184 => 61,  180 => 60,  172 => 59,  168 => 58,  164 => 56,  160 => 55,  155 => 53,  146 => 47,  135 => 39,  124 => 31,  113 => 23,  105 => 18,  101 => 17,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}WILDREAM{% endblock %}

{% block body %}

        <div class=\"col-sm-7 mt-4 mx-4\">
        <div class=\"row mb-1\">
        <div class=\"p-t-50 p-b-50\">
        <div class=\"wrapper wrapper--w900\">
                
            <div class=\"card-6\">
                <div class=\"card-heading\">
                    <h2 class=\"title dark\">Créer une publication</h2>
                </div>
                <div class=\"card-body\">
                    {{ form_start(formpost) }}
                        {{ form_errors(formpost) }}
                        <div class=\"form-row\">
                                <div class=\"name\">Votre Titre</div>
                            <div class=\"value\">
                                <div class=\"input-group\">
                                    {{ form_row(formpost.title,{'attr':{'class':'form-control','placeholder':'Votre Titre'}}) }}
                                </div>
                            </div>
                        </div>
                        <div class=\"form-row\">
                            <div class=\"name\">Que voulez-vous dire</div>
                            <div class=\"value\">
                                <div class=\"input-group\">
                                    {{ form_row(formpost.body,{'attr':{'class':'textarea--style-6','placeholder':'Que voulez-vous dire?'}}) }}
                                </div>
                            </div>
                        </div>
                        <div class=\"form-row\">
                            <div class=\"name\">Photo</div>
                            <div class=\"value\">
                                <div class=\"input-group js-input-file\">
                                    {{ form_row(formpost.image,{'attr':{'class':''}}) }}
                                </div>
                                <div class=\"label--desc\">Upload your Joint file or any other relevant file. Max file size 50 MB</div>
                            </div>
                        </div>
                </div>
                <div class=\"card-footer\">
                    <!--<button class=\"btn btn--radius-2 btn--blue-2\" type=\"submit\">Publier</button>-->
                    {{ form_row(formpost.submit,{'attr':{'class':'btn btn-success'}}) }}
                    <!--<button class=\"btn btn--radius-2 btn--blue-2\" type=\"Cancel\">Cancel</button>-->
                </div>
            </div>
        </div>
    </div>
                {{ form_end(formpost) }}  
        </div>
                {% for post in posts %}
                <div class=\"row post mb-1\">
                        <div class=\"col-12\">
                                <h2 class=\"text-capitalize text-dark\">{{post.title}}</h2>
                                <p class=\"added\"><a href=\"{{path('user_posts',{'username':post.username})}}\" class=\"username\">{{post.username}}</a> {{post.time|date(\"F jS \\\\a\\\\t g:ia\") }}</p>
                                <p class=\"lh-1\">{{post.body[:100]~'...'}}</p>
                                <a href=\"{{path('blogshow',{'id':post.id})}}\" class=\"btn btn-default float-left text-capitalize\">lire la suite...</a>
                                <img src=\"{{asset('images/'~post.imageshown)}}\" class=\"img-thumbnail\" alt=\"\">
                                
                        </div>
                </div>
                {% endfor %}
        </div>
         <div class=\"col-sm-4 container col-12\">
              {{include('include/sidebar.html.twig',{'latests':latests})}}
         </div>       
{% endblock %}
", "blog/index.html.twig", "C:\\wamp64\\www\\wildream\\templates\\blog\\index.html.twig");
    }
}
