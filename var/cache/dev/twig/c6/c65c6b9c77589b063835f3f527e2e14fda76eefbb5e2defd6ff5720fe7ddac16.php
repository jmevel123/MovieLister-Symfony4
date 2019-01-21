<?php

/* security/profile.html.twig */
class __TwigTemplate_650259b5404798572f385918410a598230f04d73c33c508348d50889e1ff2bb5 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "security/profile.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "security/profile.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "security/profile.html.twig"));

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
        echo "
<h1 class=\"mt-4 jumbotron\"><div class=\"container\">Profile Infos</div></h1>
<br />

";
        // line 6
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme((isset($context["profileForm"]) || array_key_exists("profileForm", $context) ? $context["profileForm"] : (function () { throw new Twig_Error_Runtime('Variable "profileForm" does not exist.', 6, $this->source); })()), array(0 => "bootstrap_4_layout.html.twig"), true);
        // line 7
        echo "
";
        // line 8
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["profileForm"]) || array_key_exists("profileForm", $context) ? $context["profileForm"] : (function () { throw new Twig_Error_Runtime('Variable "profileForm" does not exist.', 8, $this->source); })()), 'form_start');
        echo "

";
        // line 10
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["profileForm"]) || array_key_exists("profileForm", $context) ? $context["profileForm"] : (function () { throw new Twig_Error_Runtime('Variable "profileForm" does not exist.', 10, $this->source); })()), "email", array()), 'row', array("attr" => array("placeholder" => "email")));
        echo "
";
        // line 11
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["profileForm"]) || array_key_exists("profileForm", $context) ? $context["profileForm"] : (function () { throw new Twig_Error_Runtime('Variable "profileForm" does not exist.', 11, $this->source); })()), "username", array()), 'row', array("attr" => array("placeholder" => "username")));
        echo "
";
        // line 12
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["profileForm"]) || array_key_exists("profileForm", $context) ? $context["profileForm"] : (function () { throw new Twig_Error_Runtime('Variable "profileForm" does not exist.', 12, $this->source); })()), "firstname", array()), 'row', array("attr" => array("placeholder" => "firstname")));
        echo "
";
        // line 13
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["profileForm"]) || array_key_exists("profileForm", $context) ? $context["profileForm"] : (function () { throw new Twig_Error_Runtime('Variable "profileForm" does not exist.', 13, $this->source); })()), "lastname", array()), 'row', array("attr" => array("placeholder" => "lastname")));
        echo "
";
        // line 14
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["profileForm"]) || array_key_exists("profileForm", $context) ? $context["profileForm"] : (function () { throw new Twig_Error_Runtime('Variable "profileForm" does not exist.', 14, $this->source); })()), "password", array()), 'row', array("attr" => array("placeholder" => "password")));
        echo "
";
        // line 15
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["profileForm"]) || array_key_exists("profileForm", $context) ? $context["profileForm"] : (function () { throw new Twig_Error_Runtime('Variable "profileForm" does not exist.', 15, $this->source); })()), "confirm_password", array()), 'row', array("attr" => array("placeholder" => "confirm password")));
        echo "

<div class=\" mb-4\">
    <button type=\"submit\" class=\"btn btn-success\">Update infos</button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  |  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;            
    <a href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("delete_user", array("id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 20, $this->source); })()), "user", array()), "id", array()))), "html", null, true);
        echo "\"  class=\"btn btn-danger\">Delete Account</a>
</div>

";
        // line 23
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["profileForm"]) || array_key_exists("profileForm", $context) ? $context["profileForm"] : (function () { throw new Twig_Error_Runtime('Variable "profileForm" does not exist.', 23, $this->source); })()), 'form_end');
        echo " ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "security/profile.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  102 => 23,  96 => 20,  88 => 15,  84 => 14,  80 => 13,  76 => 12,  72 => 11,  68 => 10,  63 => 8,  60 => 7,  58 => 6,  52 => 2,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %} {% block body %}

<h1 class=\"mt-4 jumbotron\"><div class=\"container\">Profile Infos</div></h1>
<br />

{%form_theme profileForm \"bootstrap_4_layout.html.twig\" %}

{{ form_start(profileForm) }}

{{ form_row(profileForm.email, {\"attr\" : { \"placeholder\" : \"email\"}}) }}
{{ form_row(profileForm.username,  {\"attr\" : { \"placeholder\" : \"username\"}}) }}
{{ form_row(profileForm.firstname, {\"attr\" : { \"placeholder\" : \"firstname\"}}) }}
{{ form_row(profileForm.lastname, {\"attr\" : { \"placeholder\" : \"lastname\"}}) }}
{{ form_row(profileForm.password, {\"attr\" : { \"placeholder\" : \"password\"}}) }}
{{ form_row(profileForm.confirm_password, {\"attr\" : { \"placeholder\" : \"confirm password\"}}) }}

<div class=\" mb-4\">
    <button type=\"submit\" class=\"btn btn-success\">Update infos</button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  |  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;            
    <a href=\"{{ path(\"delete_user\", {\"id\": app.user.id}) }}\"  class=\"btn btn-danger\">Delete Account</a>
</div>

{{form_end(profileForm)}} {% endblock %}
", "security/profile.html.twig", "/home/jeremy/rendu/Symfony4/MyMovieList/templates/security/profile.html.twig");
    }
}
