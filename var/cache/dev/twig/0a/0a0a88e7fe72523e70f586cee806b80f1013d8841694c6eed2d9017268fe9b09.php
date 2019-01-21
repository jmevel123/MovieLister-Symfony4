<?php

/* movie/show.html.twig */
class __TwigTemplate_6b04fd05a5e0960764361998caf4209d342e65c24e7130cc6900c8c3b56fbfab extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 2
        $this->parent = $this->loadTemplate("base.html.twig", "movie/show.html.twig", 2);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "movie/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "movie/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<h1 class=\"mt-4\"></h1>
<h1 class=\"mt-4 jumbotron\"><div class=\"container text-center\">";
        // line 5
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["movie"]) || array_key_exists("movie", $context) ? $context["movie"] : (function () { throw new Twig_Error_Runtime('Variable "movie" does not exist.', 5, $this->source); })()), "title", array()), "html", null, true);
        echo "</div></h1>

<div class=\"card  mb-4 mt4 mx-auto\">
    <div class=\"ml-4 mt-4\">
            Released the ";
        // line 9
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["movie"]) || array_key_exists("movie", $context) ? $context["movie"] : (function () { throw new Twig_Error_Runtime('Variable "movie" does not exist.', 9, $this->source); })()), "release_date", array()), "html", null, true);
        echo " &nbsp; | &nbsp; <span class=\"badge badge-warning\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["movie"]) || array_key_exists("movie", $context) ? $context["movie"] : (function () { throw new Twig_Error_Runtime('Variable "movie" does not exist.', 9, $this->source); })()), "vote_average", array()), "html", null, true);
        echo "</span>
            <div><a href=\"\" class=\"btn btn-warning btn-sm\">Add to favorites</a></div>
    </div> 
    <div class=\" mb-3   mt-4 mx-auto text-center float-center\">
            <div class=\"card-body\">
            </div>
            <img class=\" mb-4 mt4 mx-auto\" style=\"height: 900px; width: 600px;\" src=\"https://image.tmdb.org/t/p/w600_and_h900_bestv2/";
        // line 15
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["movie"]) || array_key_exists("movie", $context) ? $context["movie"] : (function () { throw new Twig_Error_Runtime('Variable "movie" does not exist.', 15, $this->source); })()), "poster_path", array()), "html", null, true);
        echo "\" alt=\"Card image\">
            <div class=\"card-body\">
            <p class=\"card-text\">";
        // line 17
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["movie"]) || array_key_exists("movie", $context) ? $context["movie"] : (function () { throw new Twig_Error_Runtime('Variable "movie" does not exist.', 17, $this->source); })()), "overview", array()), "html", null, true);
        echo "</p>
            </div>
            <div class=\"card-body\">
            </div>
    </div>
</div>



 ";
        // line 26
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 26, $this->source); })()), "user", array())) {
            // line 27
            echo "
 

  ";
        } else {
            // line 30
            echo " <h2 class=\"mt-4\">You must be logged in to comment </h3> <div class=\"mt-4 mb-4\"> <a href=\" ";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("security_login");
            echo "\" class=\"btn btn-primary btn-lg\">Login here</a> </div>";
        }
        // line 31
        echo "</section>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "movie/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  104 => 31,  99 => 30,  93 => 27,  91 => 26,  79 => 17,  74 => 15,  63 => 9,  56 => 5,  53 => 4,  44 => 3,  15 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("
{% extends 'base.html.twig'%} 
{% block body %}
<h1 class=\"mt-4\"></h1>
<h1 class=\"mt-4 jumbotron\"><div class=\"container text-center\">{{ movie.title }}</div></h1>

<div class=\"card  mb-4 mt4 mx-auto\">
    <div class=\"ml-4 mt-4\">
            Released the {{ movie.release_date }} &nbsp; | &nbsp; <span class=\"badge badge-warning\">{{ movie.vote_average }}</span>
            <div><a href=\"\" class=\"btn btn-warning btn-sm\">Add to favorites</a></div>
    </div> 
    <div class=\" mb-3   mt-4 mx-auto text-center float-center\">
            <div class=\"card-body\">
            </div>
            <img class=\" mb-4 mt4 mx-auto\" style=\"height: 900px; width: 600px;\" src=\"https://image.tmdb.org/t/p/w600_and_h900_bestv2/{{movie.poster_path}}\" alt=\"Card image\">
            <div class=\"card-body\">
            <p class=\"card-text\">{{ movie.overview }}</p>
            </div>
            <div class=\"card-body\">
            </div>
    </div>
</div>



 {% if app.user %}

 

  {% else %} <h2 class=\"mt-4\">You must be logged in to comment </h3> <div class=\"mt-4 mb-4\"> <a href=\" {{ path(\"security_login\")}}\" class=\"btn btn-primary btn-lg\">Login here</a> </div>{% endif %}
</section>
{% endblock %}

", "movie/show.html.twig", "/home/jeremy/rendu/Symfony4/MyMovieList/templates/movie/show.html.twig");
    }
}
