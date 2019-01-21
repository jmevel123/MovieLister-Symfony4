<?php

/* movie/movies.html.twig */
class __TwigTemplate_cbf01c0592ea83611194ed2699b65ec4fbd79f067687581d0fa0d744c09f83c0 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "movie/movies.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "movie/movies.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "movie/movies.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function block_body($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 2
        echo "<h1 class=\"mt-4 jumbotron\"><div class=\"container\">Movie List</div></h1>
<div class=\"row text-center mb-4\">
  ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["movies"]) || array_key_exists("movies", $context) ? $context["movies"] : (function () { throw new Twig_Error_Runtime('Variable "movies" does not exist.', 4, $this->source); })()), "results", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["movie"]) {
            // line 5
            echo "  <div class=\"card  mb-4 mt4 mx-auto\" style=\"width: 18rem;\">
    <a href=\"";
            // line 6
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("display_movie", array("id" => twig_get_attribute($this->env, $this->source, $context["movie"], "id", array()))), "html", null, true);
            echo "\">
    <img
    class=\"card-img-top\"
    src=\"https://image.tmdb.org/t/p/w600_and_h900_bestv2/";
            // line 9
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source,             // line 10
$context["movie"], "poster_path", array()), "html", null, true);
            // line 11
            echo "\"
    alt=\"Card image cap\"
    />

    </a>
    <div class=\"card-body\">
      <h5 class=\"card-title\">";
            // line 17
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["movie"], "title", array()), "html", null, true);
            echo "</h5>
      <p class=\"card-text\">";
            // line 18
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["movie"], "overview", array()), "html", null, true);
            echo "</p>
      <a href=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("display_movie", array("id" => twig_get_attribute($this->env, $this->source, $context["movie"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-primary\">See more..</a>
    </div>
  </div>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['movie'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "movie/movies.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 23,  88 => 19,  84 => 18,  80 => 17,  72 => 11,  70 => 10,  69 => 9,  63 => 6,  60 => 5,  56 => 4,  52 => 2,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %} {% block body %}
<h1 class=\"mt-4 jumbotron\"><div class=\"container\">Movie List</div></h1>
<div class=\"row text-center mb-4\">
  {% for movie in movies.results %}
  <div class=\"card  mb-4 mt4 mx-auto\" style=\"width: 18rem;\">
    <a href=\"{{ path(\"display_movie\", {\"id\": movie.id}) }}\">
    <img
    class=\"card-img-top\"
    src=\"https://image.tmdb.org/t/p/w600_and_h900_bestv2/{{
      movie.poster_path
    }}\"
    alt=\"Card image cap\"
    />

    </a>
    <div class=\"card-body\">
      <h5 class=\"card-title\">{{ movie.title }}</h5>
      <p class=\"card-text\">{{ movie.overview }}</p>
      <a href=\"{{ path(\"display_movie\", {\"id\": movie.id}) }}\" class=\"btn btn-primary\">See more..</a>
    </div>
  </div>
  {% endfor %}
</div>
{% endblock %}
", "movie/movies.html.twig", "/home/jeremy/rendu/Symfony4/MyMovieList/templates/movie/movies.html.twig");
    }
}
