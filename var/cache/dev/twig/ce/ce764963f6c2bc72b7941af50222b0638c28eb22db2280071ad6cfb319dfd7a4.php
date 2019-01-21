<?php

/* blog/create.html.twig */
class __TwigTemplate_be8ac5b9ff7866df49205b79ad9f0104391ac48b56a7169f8144029ae2cda08b extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "blog/create.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "blog/create.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "blog/create.html.twig"));

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
        echo "<h1 class=\"mt-4 jumbotron\"><div class=\"container\">Create an article</div></h1>
<br />

";
        // line 5
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme((isset($context["formArticle"]) || array_key_exists("formArticle", $context) ? $context["formArticle"] : (function () { throw new Twig_Error_Runtime('Variable "formArticle" does not exist.', 5, $this->source); })()), array(0 => "bootstrap_4_layout.html.twig"), true);
        // line 6
        echo "
";
        // line 7
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formArticle"]) || array_key_exists("formArticle", $context) ? $context["formArticle"] : (function () { throw new Twig_Error_Runtime('Variable "formArticle" does not exist.', 7, $this->source); })()), 'form_start');
        echo "

";
        // line 9
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formArticle"]) || array_key_exists("formArticle", $context) ? $context["formArticle"] : (function () { throw new Twig_Error_Runtime('Variable "formArticle" does not exist.', 9, $this->source); })()), "title", array()), 'row', array("attr" => array("placeholder" => "title")));
        echo "
";
        // line 10
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formArticle"]) || array_key_exists("formArticle", $context) ? $context["formArticle"] : (function () { throw new Twig_Error_Runtime('Variable "formArticle" does not exist.', 10, $this->source); })()), "category", array()), 'row');
        echo "
";
        // line 11
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formArticle"]) || array_key_exists("formArticle", $context) ? $context["formArticle"] : (function () { throw new Twig_Error_Runtime('Variable "formArticle" does not exist.', 11, $this->source); })()), "content", array()), 'row', array("attr" => array("placeholder" => "content")));
        echo "

";
        // line 13
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formArticle"]) || array_key_exists("formArticle", $context) ? $context["formArticle"] : (function () { throw new Twig_Error_Runtime('Variable "formArticle" does not exist.', 13, $this->source); })()), "image", array()), 'row', array("attr" => array("placeholder" => "url")));
        echo "

<button type=\"submit\" class=\"btn btn-success mb-4\">
  ";
        // line 16
        if ((isset($context["editMode"]) || array_key_exists("editMode", $context) ? $context["editMode"] : (function () { throw new Twig_Error_Runtime('Variable "editMode" does not exist.', 16, $this->source); })())) {
            echo " Edit article ";
        } else {
            echo " Create article ";
        }
        // line 17
        echo "</button>
";
        // line 18
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formArticle"]) || array_key_exists("formArticle", $context) ? $context["formArticle"] : (function () { throw new Twig_Error_Runtime('Variable "formArticle" does not exist.', 18, $this->source); })()), 'form_end');
        echo " ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "blog/create.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  95 => 18,  92 => 17,  86 => 16,  80 => 13,  75 => 11,  71 => 10,  67 => 9,  62 => 7,  59 => 6,  57 => 5,  52 => 2,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"base.html.twig\" %} {% block body %}
<h1 class=\"mt-4 jumbotron\"><div class=\"container\">Create an article</div></h1>
<br />

{% form_theme formArticle \"bootstrap_4_layout.html.twig\" %}

{{ form_start(formArticle) }}

{{ form_row(formArticle.title, {\"attr\" : { \"placeholder\" : \"title\"}}) }}
{{ form_row(formArticle.category) }}
{{ form_row(formArticle.content, {\"attr\" : { \"placeholder\": \"content\"}}) }}

{{ form_row(formArticle.image,{\"attr\" : { \"placeholder\" : \"url\"}}) }}

<button type=\"submit\" class=\"btn btn-success mb-4\">
  {% if editMode %} Edit article {% else %} Create article {% endif %}
</button>
{{ form_end(formArticle) }} {% endblock %}
", "blog/create.html.twig", "/home/jeremy/rendu/Symfony4/MyMovieList/templates/blog/create.html.twig");
    }
}
