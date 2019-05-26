<?php

/* appointments/show.html */
class __TwigTemplate_dac44b9c0b68dba83fb6af29644ef61a7cad8c115f7988827461779b9ed30829 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("shared/base.html", "appointments/show.html", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'header' => array($this, 'block_header'),
            'head' => array($this, 'block_head'),
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "shared/base.html";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "Show";
    }

    // line 5
    public function block_header($context, array $blocks = array())
    {
        // line 6
        echo "    ";
        echo twig_include($this->env, $context, "errors/validation_errors.html");
        echo "
    ";
        // line 7
        echo twig_include($this->env, $context, "shared/nav.html");
        echo "
";
    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        // line 11
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
    <meta name=\"keywords\" content=\"PAW,2018,Templates,PHP\">
";
    }

    // line 15
    public function block_main($context, array $blocks = array())
    {
        // line 16
        echo "    <form class=\"show\">
        <fieldset class=\"width-350\">
            <label class=\"appointment-label show\" for=\"name\">ID</label>
            <input class=\"appointment-input show\" name=\"id\" readonly value=";
        // line 19
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["appointment"] ?? null), "id", array()), "html", null, true);
        echo ">
        </fieldset>
        <fieldset class=\"width-350\">
            <label class=\"appointment-label show\" for=\"name\">NAME</label>
            <input class=\"appointment-input show\" name=\"name\" readonly value=";
        // line 23
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["appointment"] ?? null), "name", array()), "html", null, true);
        echo ">
        </fieldset>
        <fieldset class=\"width-350\">
            <label class=\"appointment-label show\" for=\"email\">EMAIL</label>
            <input class=\"appointment-input show\" name=\"email\" readonly value=";
        // line 27
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["appointment"] ?? null), "email", array()), "html", null, true);
        echo ">
        </fieldset>
        <fieldset class=\"width-350\">
            <label class=\"appointment-label show\" for=\"phone\">PHONE</label>
            <input class=\"appointment-input show\" name=\"phone\" readonly value=";
        // line 31
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["appointment"] ?? null), "phone", array()), "html", null, true);
        echo ">
        </fieldset>
        <fieldset class=\"width-350\">
            <label class=\"appointment-label show\" for=\"age\">AGE</label>
            <input class=\"appointment-input show\" name=\"age\" readonly value=";
        // line 35
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["appointment"] ?? null), "age", array()), "html", null, true);
        echo ">
        </fieldset>
        <fieldset class=\"width-350\">
            <label class=\"appointment-label show\" for=\"shoes_size\">SHOES SIZE</label>
            <input class=\"appointment-input show\" name=\"shoes_size\" readonly value=";
        // line 39
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["appointment"] ?? null), "shoes_size", array()), "html", null, true);
        echo ">
        </fieldset>
        <fieldset class=\"width-350\">
            <label class=\"appointment-label show\" for=\"hight\">HEIGHT</label>
            <input class=\"appointment-input show\" name=\"height\" readonly value=";
        // line 43
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["appointment"] ?? null), "height", array()), "html", null, true);
        echo ">
        </fieldset>
        <fieldset class=\"width-350\">
            <label class=\"appointment-label show\" for=\"birth_date\">BIRTH DATE</label>
            <input class=\"appointment-input show\" name=\"birth_date\" readonly value=";
        // line 47
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["appointment"] ?? null), "birth_date", array()), "html", null, true);
        echo ">
        </fieldset>
        <fieldset class=\"width-350\">
            <label class=\"appointment-label show\" for=\"hair_color\">HAIR COLOR</label>
            <input class=\"appointment-input show\" type=\"color\" name=\"hair_color\" readonly value=";
        // line 51
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["appointment"] ?? null), "hair_color", array()), "html", null, true);
        echo ">
        </fieldset>
        <fieldset class=\"width-350\">
            <label class=\"appointment-label show\" for=\"date\">DATE</label>
            <input class=\"appointment-input show\" name=\"date\" readonly value=";
        // line 55
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["appointment"] ?? null), "date", array()), "html", null, true);
        echo ">
        </fieldset>
        <fieldset class=\"width-350\">
            <label class=\"appointment-label show\" for=\"time\">TIME</label>
            <input class=\"appointment-input show\" name=\"time\" readonly value=";
        // line 59
        echo twig_escape_filter($this->env, ($context["time"] ?? null), "html", null, true);
        echo ">
        </fieldset>
        ";
        // line 61
        if (twig_get_attribute($this->env, $this->source, ($context["appointment"] ?? null), "image", array())) {
            // line 62
            echo "            <fieldset class=\"width-350\">
                <label class=\"appointment-label fill-width show\" for=\"diagnostic\">UPLOADED IMAGE</label>
                <img  class=\"uploaded-image show\" src=\"data:image/png;base64,";
            // line 64
            echo twig_escape_filter($this->env, ($context["image_base_64"] ?? null), "html", null, true);
            echo "\" />
            </fieldset>
        ";
        }
        // line 67
        echo "    </form>
    <p class=\"align-right\"><a href=\"/appointments\">Back to appointments</a></p>
";
    }

    public function getTemplateName()
    {
        return "appointments/show.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  161 => 67,  155 => 64,  151 => 62,  149 => 61,  144 => 59,  137 => 55,  130 => 51,  123 => 47,  116 => 43,  109 => 39,  102 => 35,  95 => 31,  88 => 27,  81 => 23,  74 => 19,  69 => 16,  66 => 15,  58 => 11,  55 => 10,  49 => 7,  44 => 6,  41 => 5,  35 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"shared/base.html\" %}

{% block title %}Show{% endblock %}

{% block header %}
    {{ include('errors/validation_errors.html') }}
    {{ include('shared/nav.html') }}
{% endblock %}

{% block head %}
    {{ parent() }}
    <meta name=\"keywords\" content=\"PAW,2018,Templates,PHP\">
{% endblock %}

{% block main %}
    <form class=\"show\">
        <fieldset class=\"width-350\">
            <label class=\"appointment-label show\" for=\"name\">ID</label>
            <input class=\"appointment-input show\" name=\"id\" readonly value={{ appointment.id }}>
        </fieldset>
        <fieldset class=\"width-350\">
            <label class=\"appointment-label show\" for=\"name\">NAME</label>
            <input class=\"appointment-input show\" name=\"name\" readonly value={{ appointment.name }}>
        </fieldset>
        <fieldset class=\"width-350\">
            <label class=\"appointment-label show\" for=\"email\">EMAIL</label>
            <input class=\"appointment-input show\" name=\"email\" readonly value={{ appointment.email }}>
        </fieldset>
        <fieldset class=\"width-350\">
            <label class=\"appointment-label show\" for=\"phone\">PHONE</label>
            <input class=\"appointment-input show\" name=\"phone\" readonly value={{ appointment.phone }}>
        </fieldset>
        <fieldset class=\"width-350\">
            <label class=\"appointment-label show\" for=\"age\">AGE</label>
            <input class=\"appointment-input show\" name=\"age\" readonly value={{ appointment.age }}>
        </fieldset>
        <fieldset class=\"width-350\">
            <label class=\"appointment-label show\" for=\"shoes_size\">SHOES SIZE</label>
            <input class=\"appointment-input show\" name=\"shoes_size\" readonly value={{ appointment.shoes_size }}>
        </fieldset>
        <fieldset class=\"width-350\">
            <label class=\"appointment-label show\" for=\"hight\">HEIGHT</label>
            <input class=\"appointment-input show\" name=\"height\" readonly value={{ appointment.height }}>
        </fieldset>
        <fieldset class=\"width-350\">
            <label class=\"appointment-label show\" for=\"birth_date\">BIRTH DATE</label>
            <input class=\"appointment-input show\" name=\"birth_date\" readonly value={{ appointment.birth_date}}>
        </fieldset>
        <fieldset class=\"width-350\">
            <label class=\"appointment-label show\" for=\"hair_color\">HAIR COLOR</label>
            <input class=\"appointment-input show\" type=\"color\" name=\"hair_color\" readonly value={{ appointment.hair_color}}>
        </fieldset>
        <fieldset class=\"width-350\">
            <label class=\"appointment-label show\" for=\"date\">DATE</label>
            <input class=\"appointment-input show\" name=\"date\" readonly value={{ appointment.date }}>
        </fieldset>
        <fieldset class=\"width-350\">
            <label class=\"appointment-label show\" for=\"time\">TIME</label>
            <input class=\"appointment-input show\" name=\"time\" readonly value={{ time }}>
        </fieldset>
        {% if (appointment.image) %}
            <fieldset class=\"width-350\">
                <label class=\"appointment-label fill-width show\" for=\"diagnostic\">UPLOADED IMAGE</label>
                <img  class=\"uploaded-image show\" src=\"data:image/png;base64,{{ image_base_64 }}\" />
            </fieldset>
        {% endif %}
    </form>
    <p class=\"align-right\"><a href=\"/appointments\">Back to appointments</a></p>
{% endblock %}
", "appointments/show.html", "/Users/pandora/Documents/UNLu/ProgramacionEnAmbienteWeb/paw-tp4/app_tp4/app/views/appointments/show.html");
    }
}
