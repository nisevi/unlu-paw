<?php

/* appointments/edit.html */
class __TwigTemplate_cf19f44ae7cf0d3d8086f663af37c3f10ce17c52d616b7ebcd2ef2e34d13f1cc extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("shared/base.html", "appointments/edit.html", 1);
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
        echo "Edit";
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
        echo "    <form class=\"show\" method=\"POST\" id=\"appointment\" enctype=\"multipart/form-data\" action=\"/appointments/update\">
        <fieldset class=\"width-350\">
            <label class=\"appointment-label show\" for=\"name\">ID</label>
            <input class=\"appointment-input show\" name=\"id\" readonly value=";
        // line 19
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["appointment"] ?? null), "id", array()), "html", null, true);
        echo ">
        </fieldset>
        <fieldset class=\"width-350\">
            <label class=\"appointment-label show\" for=\"name\">Name *</label>
            <input class=\"appointment-input show\" type=\"text\" name=\"name\" required value=";
        // line 23
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["appointment"] ?? null), "name", array()), "html", null, true);
        echo ">
        </fieldset>
        <fieldset class=\"width-350\">
            <label class=\"appointment-label show\" for=\"email\">Email *</label>
            <input class=\"appointment-input show\" type=\"email\" name=\"email\" required value=";
        // line 27
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["appointment"] ?? null), "email", array()), "html", null, true);
        echo ">
        </fieldset>
        <fieldset class=\"width-350\">
            <label class=\"appointment-label show\" for=\"phone\">Phone *</label>
            <input class=\"appointment-input show\" type=\"tel\" name=\"phone\" required value=";
        // line 31
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["appointment"] ?? null), "phone", array()), "html", null, true);
        echo ">
        </fieldset>
        <fieldset class=\"width-350\">
            <label class=\"appointment-label show\" for=\"age\">Age</label>
            <input class=\"appointment-input show\" type=\"number\" name=\"age\" value=";
        // line 35
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["appointment"] ?? null), "age", array()), "html", null, true);
        echo ">
        </fieldset>
        <fieldset class=\"width-350\">
            <label class=\"appointment-label show\" for=\"shoes_size\">Shoes Size</label>
            <input class=\"appointment-input show\" type=\"number\" min=\"20\" max=\"45\" step=\"1\" name=\"shoes_size\" value=";
        // line 39
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["appointment"] ?? null), "shoes_size", array()), "html", null, true);
        echo ">
        </fieldset>
        <fieldset class=\"width-350\">
            <label class=\"appointment-label show\" for=\"hight\">Height in centimeters</label>
            <input type=\"range\" value=\"180\" min=\"30\" max=\"250\" step=\"1\" name=\"height\" onchange=\"rangevalue.value=value\" value=";
        // line 43
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["appointment"] ?? null), "name", array()), "html", null, true);
        echo ">
            <output id=\"rangevalue\">180</output>
        </fieldset>
        <fieldset class=\"width-350\">
            <label class=\"appointment-label show\" for=\"birth_date\">Birth Date *</label>
            <input class=\"appointment-input show\" type=\"date\" name=\"birth_date\" required value=";
        // line 48
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["appointment"] ?? null), "birth_date", array()), "html", null, true);
        echo ">
        </fieldset>
        <fieldset class=\"width-350\">
            <label class=\"appointment-label show\" for=\"hair_color\">Hair color</label>
            <input class=\"appointment-input show\" type=\"color\" name=\"hair_color\" value=";
        // line 52
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["appointment"] ?? null), "hair_color", array()), "html", null, true);
        echo ">
        </fieldset>
        <fieldset class=\"width-350\">
            <label class=\"appointment-label show\" for=\"date\">Date *</label>
            <input class=\"appointment-input show\" type=\"date\" name=\"date\" required value=";
        // line 56
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["appointment"] ?? null), "date", array()), "html", null, true);
        echo ">
        </fieldset>
        <fieldset class=\"width-350\">
            <label class=\"appointment-label show\" for=\"time\">Time</label>
            <input class=\"appointment-input show\" type=\"time\" min=\"8:00\" max=\"17:00\" step=\"900\" name=\"time\" value=";
        // line 60
        echo twig_escape_filter($this->env, ($context["time"] ?? null), "html", null, true);
        echo ">
        </fieldset>
        <fieldset class=\"width-350\">
            <label class=\"appointment-label show\" for=\"diagnostic\">Attach image</label>
            <input class=\"appointment-input show\" type=\"file\" name=\"diagnostic\" id=\"diagnostic\" accept=\"image/png, image/jpg\">
        </fieldset>
        ";
        // line 66
        if (twig_get_attribute($this->env, $this->source, ($context["appointment"] ?? null), "image", array())) {
            // line 67
            echo "            <fieldset class=\"width-350\">
                <label class=\"appointment-label fill-width show\" for=\"diagnostic\">Uploaded Image</label>
                <img  class=\"uploaded-image show\" src=\"data:image/png;base64,";
            // line 69
            echo twig_escape_filter($this->env, ($context["image_base_64"] ?? null), "html", null, true);
            echo "\" />
            </fieldset>
        ";
        }
        // line 72
        echo "        <fieldset class=\"width-350\">            
            <button id=\"submit\" class=\"black-button\" type=\"submit\" form=\"appointment\">Submit</button>
            <p class=\"align-right\"><a href=\"/appointments\">Back to appointments</a></p>
        </fieldset>
    </form>
";
    }

    public function getTemplateName()
    {
        return "appointments/edit.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  166 => 72,  160 => 69,  156 => 67,  154 => 66,  145 => 60,  138 => 56,  131 => 52,  124 => 48,  116 => 43,  109 => 39,  102 => 35,  95 => 31,  88 => 27,  81 => 23,  74 => 19,  69 => 16,  66 => 15,  58 => 11,  55 => 10,  49 => 7,  44 => 6,  41 => 5,  35 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"shared/base.html\" %}

{% block title %}Edit{% endblock %}

{% block header %}
    {{ include('errors/validation_errors.html') }}
    {{ include('shared/nav.html') }}
{% endblock %}

{% block head %}
    {{ parent() }}
    <meta name=\"keywords\" content=\"PAW,2018,Templates,PHP\">
{% endblock %}

{% block main %}
    <form class=\"show\" method=\"POST\" id=\"appointment\" enctype=\"multipart/form-data\" action=\"/appointments/update\">
        <fieldset class=\"width-350\">
            <label class=\"appointment-label show\" for=\"name\">ID</label>
            <input class=\"appointment-input show\" name=\"id\" readonly value={{ appointment.id }}>
        </fieldset>
        <fieldset class=\"width-350\">
            <label class=\"appointment-label show\" for=\"name\">Name *</label>
            <input class=\"appointment-input show\" type=\"text\" name=\"name\" required value={{ appointment.name }}>
        </fieldset>
        <fieldset class=\"width-350\">
            <label class=\"appointment-label show\" for=\"email\">Email *</label>
            <input class=\"appointment-input show\" type=\"email\" name=\"email\" required value={{ appointment.email }}>
        </fieldset>
        <fieldset class=\"width-350\">
            <label class=\"appointment-label show\" for=\"phone\">Phone *</label>
            <input class=\"appointment-input show\" type=\"tel\" name=\"phone\" required value={{ appointment.phone }}>
        </fieldset>
        <fieldset class=\"width-350\">
            <label class=\"appointment-label show\" for=\"age\">Age</label>
            <input class=\"appointment-input show\" type=\"number\" name=\"age\" value={{ appointment.age }}>
        </fieldset>
        <fieldset class=\"width-350\">
            <label class=\"appointment-label show\" for=\"shoes_size\">Shoes Size</label>
            <input class=\"appointment-input show\" type=\"number\" min=\"20\" max=\"45\" step=\"1\" name=\"shoes_size\" value={{ appointment.shoes_size }}>
        </fieldset>
        <fieldset class=\"width-350\">
            <label class=\"appointment-label show\" for=\"hight\">Height in centimeters</label>
            <input type=\"range\" value=\"180\" min=\"30\" max=\"250\" step=\"1\" name=\"height\" onchange=\"rangevalue.value=value\" value={{ appointment.name }}>
            <output id=\"rangevalue\">180</output>
        </fieldset>
        <fieldset class=\"width-350\">
            <label class=\"appointment-label show\" for=\"birth_date\">Birth Date *</label>
            <input class=\"appointment-input show\" type=\"date\" name=\"birth_date\" required value={{ appointment.birth_date }}>
        </fieldset>
        <fieldset class=\"width-350\">
            <label class=\"appointment-label show\" for=\"hair_color\">Hair color</label>
            <input class=\"appointment-input show\" type=\"color\" name=\"hair_color\" value={{ appointment.hair_color }}>
        </fieldset>
        <fieldset class=\"width-350\">
            <label class=\"appointment-label show\" for=\"date\">Date *</label>
            <input class=\"appointment-input show\" type=\"date\" name=\"date\" required value={{ appointment.date }}>
        </fieldset>
        <fieldset class=\"width-350\">
            <label class=\"appointment-label show\" for=\"time\">Time</label>
            <input class=\"appointment-input show\" type=\"time\" min=\"8:00\" max=\"17:00\" step=\"900\" name=\"time\" value={{ time }}>
        </fieldset>
        <fieldset class=\"width-350\">
            <label class=\"appointment-label show\" for=\"diagnostic\">Attach image</label>
            <input class=\"appointment-input show\" type=\"file\" name=\"diagnostic\" id=\"diagnostic\" accept=\"image/png, image/jpg\">
        </fieldset>
        {% if (appointment.image) %}
            <fieldset class=\"width-350\">
                <label class=\"appointment-label fill-width show\" for=\"diagnostic\">Uploaded Image</label>
                <img  class=\"uploaded-image show\" src=\"data:image/png;base64,{{ image_base_64 }}\" />
            </fieldset>
        {% endif %}
        <fieldset class=\"width-350\">            
            <button id=\"submit\" class=\"black-button\" type=\"submit\" form=\"appointment\">Submit</button>
            <p class=\"align-right\"><a href=\"/appointments\">Back to appointments</a></p>
        </fieldset>
    </form>
{% endblock %}", "appointments/edit.html", "/Users/pandora/Documents/UNLu/ProgramacionEnAmbienteWeb/paw-tp4/app_tp4/app/views/appointments/edit.html");
    }
}
