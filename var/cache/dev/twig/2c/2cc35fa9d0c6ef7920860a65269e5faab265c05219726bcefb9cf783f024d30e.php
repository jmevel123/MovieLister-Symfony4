<?php

/* blog/show.html.twig */
class __TwigTemplate_8c1104d5cd174432f087dfcfb7bb4f1e61ac999894d75e5481acda2bc7f15251 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "blog/show.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "blog/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "blog/show.html.twig"));

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
        echo "<h1 class=\"mt-4\"></h1>
<articles>
  <h2 class=\"mt-4\">";
        // line 4
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new Twig_Error_Runtime('Variable "article" does not exist.', 4, $this->source); })()), "title", array()), "html", null, true);
        echo "</h2>
  <div class=\"metadata\">
    ";
        // line 6
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new Twig_Error_Runtime('Variable "article" does not exist.', 6, $this->source); })()), "createdAt", array()), "d/m/Y"), "html", null, true);
        echo " at
    ";
        // line 7
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new Twig_Error_Runtime('Variable "article" does not exist.', 7, $this->source); })()), "createdAt", array()), "H:i"), "html", null, true);
        echo " in Category : ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new Twig_Error_Runtime('Variable "article" does not exist.', 7, $this->source); })()), "category", array()), "title", array()), "html", null, true);
        echo "
  </div>
  <img src=\"";
        // line 9
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new Twig_Error_Runtime('Variable "article" does not exist.', 9, $this->source); })()), "image", array()), "html", null, true);
        echo "\" alt=\"\" />
  <div class=\"content\">";
        // line 10
        echo twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new Twig_Error_Runtime('Variable "article" does not exist.', 10, $this->source); })()), "content", array());
        echo "</div>
  ";
        // line 11
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 11, $this->source); })()), "user", array())) {
            // line 12
            echo "    <a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("blog_edit", array("id" => twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new Twig_Error_Runtime('Variable "article" does not exist.', 12, $this->source); })()), "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-primary\"> Edit article</a>
  ";
        }
        // line 14
        echo "</articles>
<section id=\"comments\">
  <h3 class=\"mt-4\">";
        // line 16
        echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new Twig_Error_Runtime('Variable "article" does not exist.', 16, $this->source); })()), "comments", array())), "html", null, true);
        echo " Comments</h3>
  ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new Twig_Error_Runtime('Variable "article" does not exist.', 17, $this->source); })()), "comments", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
            // line 18
            echo "
  <div class=\"comment\">
    <div class=\"row\">
      <div class=\"col-3\">
        ";
            // line 22
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "author", array()), "html", null, true);
            echo " (<small>
          ";
            // line 23
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "createdAt", array()), "d/m/Y at H:i"), "html", null, true);
            echo " </small
        >)
      </div>
      <div class=\"col\">";
            // line 26
            echo twig_get_attribute($this->env, $this->source, $context["comment"], "content", array());
            echo "</div>
    </div>
    <div class=\"row\"> <a href=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("delete_comment", array("id" => twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new Twig_Error_Runtime('Variable "article" does not exist.', 28, $this->source); })()), "id", array()), "comment_id" => twig_get_attribute($this->env, $this->source, $context["comment"], "id", array()))), "html", null, true);
            echo "\"  class=\"btn btn-danger btn-sm\">Delete comment</a></div>
  </div>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comment'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo " ";
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 30, $this->source); })()), "user", array())) {
            // line 31
            echo "
  ";
            // line 32
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["commentForm"]) || array_key_exists("commentForm", $context) ? $context["commentForm"] : (function () { throw new Twig_Error_Runtime('Variable "commentForm" does not exist.', 32, $this->source); })()), 'form_start');
            echo " ";
            $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme((isset($context["commentForm"]) || array_key_exists("commentForm", $context) ? $context["commentForm"] : (function () { throw new Twig_Error_Runtime('Variable "commentForm" does not exist.', 32, $this->source); })()), array(0 => "bootstrap_4_layout.html.twig"), true);
            // line 33
            echo " <br />
  <h3 class=\"mt-4\">Post a comment</h3>
  ";
            // line 35
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["commentForm"]) || array_key_exists("commentForm", $context) ? $context["commentForm"] : (function () { throw new Twig_Error_Runtime('Variable "commentForm" does not exist.', 35, $this->source); })()), "content", array()), 'row', array("attr" => array("placeholder" => "Your comment")));
            echo "

  <button type=\"submit\" class=\"btn btn-success\">Post it</button>
  ";
            // line 38
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["commentForm"]) || array_key_exists("commentForm", $context) ? $context["commentForm"] : (function () { throw new Twig_Error_Runtime('Variable "commentForm" does not exist.', 38, $this->source); })()), 'form_end');
            echo "
  <div class=\"mt-4\"></div>

  ";
        } else {
            // line 41
            echo " <h2 class=\"mt-4\">You must be logged in to comment </h3> <div class=\"mt-4 mb-4\"> <a href=\" ";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("security_login");
            echo "\" class=\"btn btn-primary btn-lg\">Login here</a> </div>";
        }
        // line 42
        echo "</section>
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
        return array (  162 => 42,  157 => 41,  150 => 38,  144 => 35,  140 => 33,  136 => 32,  133 => 31,  130 => 30,  121 => 28,  116 => 26,  110 => 23,  106 => 22,  100 => 18,  96 => 17,  92 => 16,  88 => 14,  82 => 12,  80 => 11,  76 => 10,  72 => 9,  65 => 7,  61 => 6,  56 => 4,  52 => 2,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig'%} {% block body %}
<h1 class=\"mt-4\"></h1>
<articles>
  <h2 class=\"mt-4\">{{ article.title }}</h2>
  <div class=\"metadata\">
    {{ article.createdAt | date(\"d/m/Y\")}} at
    {{ article.createdAt | date(\"H:i\")}} in Category : {{ article.category.title }}
  </div>
  <img src=\"{{ article.image }}\" alt=\"\" />
  <div class=\"content\">{{ article.content | raw }}</div>
  {% if app.user %}
    <a href=\"{{ path(\"blog_edit\", {\"id\" :article.id})}}\" class=\"btn btn-primary\"> Edit article</a>
  {% endif %}
</articles>
<section id=\"comments\">
  <h3 class=\"mt-4\">{{ article.comments | length }} Comments</h3>
  {% for comment in article.comments %}

  <div class=\"comment\">
    <div class=\"row\">
      <div class=\"col-3\">
        {{ comment.author }} (<small>
          {{ comment.createdAt | date(\"d/m/Y at H:i\")}} </small
        >)
      </div>
      <div class=\"col\">{{ comment.content | raw }}</div>
    </div>
    <div class=\"row\"> <a href=\"{{path(\"delete_comment\", {\"id\": article.id, \"comment_id\": comment.id})}}\"  class=\"btn btn-danger btn-sm\">Delete comment</a></div>
  </div>
  {% endfor %} {% if app.user %}

  {{ form_start(commentForm) }} {%form_theme commentForm
  \"bootstrap_4_layout.html.twig\" %} <br />
  <h3 class=\"mt-4\">Post a comment</h3>
  {{ form_row(commentForm.content, {\"attr\": {\"placeholder\": \"Your comment\"}})}}

  <button type=\"submit\" class=\"btn btn-success\">Post it</button>
  {{ form_end(commentForm) }}
  <div class=\"mt-4\"></div>

  {% else %} <h2 class=\"mt-4\">You must be logged in to comment </h3> <div class=\"mt-4 mb-4\"> <a href=\" {{ path(\"security_login\")}}\" class=\"btn btn-primary btn-lg\">Login here</a> </div>{% endif %}
</section>
{% endblock %}
", "blog/show.html.twig", "/home/jeremy/rendu/Symfony4/MyMovieList/templates/blog/show.html.twig");
    }
}
