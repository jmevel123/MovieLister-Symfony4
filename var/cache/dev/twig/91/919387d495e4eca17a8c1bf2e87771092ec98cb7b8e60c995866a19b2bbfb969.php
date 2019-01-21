<?php

/* base.html.twig */
class __TwigTemplate_2e258954f8de0221555eb7dda711e77414c4a2dc7aa7e02452c2328cb341139d extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
  <head>
    <meta charset=\"UTF-8\" />
    <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    <link
      rel=\"stylesheet\"
      href=\"https://bootswatch.com/4/lumen/bootstrap.min.css\"
    />
    ";
        // line 10
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 11
        echo "  </head>
  <body style=\"background-color: rgba(223, 222, 222, 0.61)\">
    <nav class=\"navbar navbar-expand-lg navbar-dark bg-dark\">
      <a class=\"navbar-brand\" hre;f=\"";
        // line 14
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("movies");
        echo "\">MovieLister</a>
      <button
        class=\"navbar-toggler\"
        type=\"button\"
        data-toggle=\"collapse\"
        data-target=\"#navbarColor02\"
        aria-controls=\"navbarColor02\"
        aria-expanded=\"false\"
        aria-label=\"Toggle navigation\"
      >
        <span class=\"navbar-toggler-icon\"></span>
      </button>

      <div class=\"collapse navbar-collapse\" id=\"navbarColor02\">
        <ul class=\"navbar-nav mr-auto\">
          <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"";
        // line 30
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("blog");
        echo "\">Articles</a>
          </li>
          <li class=\"nav-item\">
          </li>
          <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"";
        // line 35
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("popular_movies");
        echo "\">Movies</a>
          </li>
          ";
        // line 37
        if ( !twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 37, $this->source); })()), "user", array())) {
            // line 38
            echo "          <li class=\"nav-item\"><a class=\"nav-link\" href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("security_register");
            echo "\">Register</a></li>          
          <li class=\"nav-item\"><a class=\"nav-link\" href=\"";
            // line 39
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("security_login");
            echo "\">Login</a></li>
          ";
        } else {
            // line 41
            echo "          <a class=\"nav-link\" href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("blog_create");
            echo "\">Create an article</a>
          <li class=\"nav-item\"><a class=\"nav-link\" href=\"#\">Create a list</a></li>
          <li class=\"nav-item\"><a class=\"nav-link\" href=\"#\">My lists</a></li>
          <li class=\"nav-item\"><a class=\"nav-link\" href=\"#\">Search</a></li>
          <form class=\"form-inline my-2 my-lg-0\">
          
          
            <li class=\"nav-item\"><a class=\"nav-link active\" href=\"";
            // line 48
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("profile_user", array("id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 48, $this->source); })()), "user", array()), "id", array()))), "html", null, true);
            echo ") }}\">Profile</a></li>
            
            <li class=\"nav-item active\"><a class=\"nav-link\" href=\"";
            // line 50
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("security_logout");
            echo "\">Logout</a></li>
          </form>
          ";
        }
        // line 53
        echo "        </ul>
        
      </div>
    </nav>
    <div class=\"container \">";
        // line 57
        $this->displayBlock('body', $context, $blocks);
        echo "</div>
    ";
        // line 58
        $this->displayBlock('javascripts', $context, $blocks);
        // line 61
        echo "
    ";
        // line 64
        echo "  </body>
</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 10
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 57
    public function block_body($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 58
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 59
        echo "    
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

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
        return array (  208 => 59,  199 => 58,  182 => 57,  165 => 10,  147 => 5,  135 => 64,  132 => 61,  130 => 58,  126 => 57,  120 => 53,  114 => 50,  109 => 48,  98 => 41,  93 => 39,  88 => 38,  86 => 37,  81 => 35,  73 => 30,  54 => 14,  49 => 11,  47 => 10,  39 => 5,  33 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
  <head>
    <meta charset=\"UTF-8\" />
    <title>{% block title %}Welcome!{% endblock %}</title>
    <link
      rel=\"stylesheet\"
      href=\"https://bootswatch.com/4/lumen/bootstrap.min.css\"
    />
    {% block stylesheets %}{% endblock %}
  </head>
  <body style=\"background-color: rgba(223, 222, 222, 0.61)\">
    <nav class=\"navbar navbar-expand-lg navbar-dark bg-dark\">
      <a class=\"navbar-brand\" hre;f=\"{{ path(\"movies\")}}\">MovieLister</a>
      <button
        class=\"navbar-toggler\"
        type=\"button\"
        data-toggle=\"collapse\"
        data-target=\"#navbarColor02\"
        aria-controls=\"navbarColor02\"
        aria-expanded=\"false\"
        aria-label=\"Toggle navigation\"
      >
        <span class=\"navbar-toggler-icon\"></span>
      </button>

      <div class=\"collapse navbar-collapse\" id=\"navbarColor02\">
        <ul class=\"navbar-nav mr-auto\">
          <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"{{ path(\"blog\")}}\">Articles</a>
          </li>
          <li class=\"nav-item\">
          </li>
          <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"{{path(\"popular_movies\")}}\">Movies</a>
          </li>
          {% if not app.user %}
          <li class=\"nav-item\"><a class=\"nav-link\" href=\"{{ path(\"security_register\") }}\">Register</a></li>          
          <li class=\"nav-item\"><a class=\"nav-link\" href=\"{{ path(\"security_login\") }}\">Login</a></li>
          {% else %}
          <a class=\"nav-link\" href=\"{{ path(\"blog_create\")}}\">Create an article</a>
          <li class=\"nav-item\"><a class=\"nav-link\" href=\"#\">Create a list</a></li>
          <li class=\"nav-item\"><a class=\"nav-link\" href=\"#\">My lists</a></li>
          <li class=\"nav-item\"><a class=\"nav-link\" href=\"#\">Search</a></li>
          <form class=\"form-inline my-2 my-lg-0\">
          
          
            <li class=\"nav-item\"><a class=\"nav-link active\" href=\"{{ path(\"profile_user\", {\"id\": app.user.id})}}) }}\">Profile</a></li>
            
            <li class=\"nav-item active\"><a class=\"nav-link\" href=\"{{ path(\"security_logout\") }}\">Logout</a></li>
          </form>
          {% endif %}
        </ul>
        
      </div>
    </nav>
    <div class=\"container \">{% block body %}{% endblock %}</div>
    {% block javascripts %}
    
    {% endblock %}

    {# <script src=\"https://cloud.tinymce.com/5-testing/tinymce.min.js\"></script>
  <script>tinymce.init({ selector:'textarea' });</script> #}
  </body>
</html>
", "base.html.twig", "/home/jeremy/rendu/Symfony4/MyMovieList/templates/base.html.twig");
    }
}
