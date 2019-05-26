<?php

/* landing/index.html */
class __TwigTemplate_7344d2a2e4d9871eda6ef63c26b369da2d3a193e89d97ff848ea0ea690705886 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("shared/base.html", "landing/index.html", 1);
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
        echo "Home";
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
        echo "    <form class=\"show\" method=\"POST\" id=\"appointment\" enctype=\"multipart/form-data\" action=\"/appointments/save\">
        <fieldset class=\"width-350\">
            <label class=\"appointment-label show\" for=\"name\">Name *</label>
            <input class=\"appointment-input show\" type=\"text\" name=\"name\" required>
        </fieldset>
        <fieldset class=\"width-350\">
            <label class=\"appointment-label show\" for=\"email\">Email *</label>
            <input class=\"appointment-input show\" type=\"email\" name=\"email\" required>
        </fieldset>
        <fieldset class=\"width-350\">
            <label class=\"appointment-label show\" for=\"phone\">Phone *</label>
            <input class=\"appointment-input show\" type=\"tel\" name=\"phone\" required>
        </fieldset>
        <fieldset class=\"width-350\">
            <label class=\"appointment-label show\" for=\"age\">Age</label>
            <input class=\"appointment-input show\" type=\"number\" name=\"age\">
        </fieldset>
        <fieldset class=\"width-350\">
            <label class=\"appointment-label show\" for=\"shoes_size\">Shoes Size</label>
            <input class=\"appointment-input show\" type=\"number\" min=\"20\" max=\"45\" step=\"1\" name=\"shoes_size\" />
        </fieldset>
        <fieldset class=\"width-350\">
            <label class=\"appointment-label show\" for=\"hight\">Height in centimeters</label>
            <input type=\"range\" value=\"180\" min=\"30\" max=\"250\" step=\"1\" name=\"height\" onchange=\"rangevalue.value=value\" />
            <output id=\"rangevalue\">180</output>
        </fieldset>
        <fieldset class=\"width-350\">
            <label class=\"appointment-label show\" for=\"birth_date\">Birth Date *</label>
            <input class=\"appointment-input show\" type=\"date\" name=\"birth_date\" required>
        </fieldset>
        <fieldset class=\"width-350\">
            <label class=\"appointment-label show\" for=\"hair_color\">Hair color</label>
            <input class=\"appointment-input show\" type=\"color\" name=\"hair_color\">
        </fieldset>
        <fieldset class=\"width-350\">
            <label class=\"appointment-label show\" for=\"date\">Date *</label>
            <input class=\"appointment-input show\" type=\"date\" name=\"date\" required>
        </fieldset>
        <fieldset class=\"width-350\">
            <label class=\"appointment-label show\" for=\"time\">Time</label>
            <input class=\"appointment-input show\" type=\"time\" min=\"8:00\" max=\"17:00\" step=\"900\" name=\"time\">
        </fieldset>
        <fieldset class=\"width-350\">
            <label class=\"appointment-label show\" for=\"diagnostic\">Attach image</label>
            <input class=\"appointment-input show\" type=\"file\" name=\"diagnostic\" id=\"diagnostic\" accept=\"image/png, image/jpg\">
        </fieldset>
        <fieldset class=\"width-350\">
            <button id=\"submit\" class=\"black-button\" type=\"submit\" form=\"appointment\">Submit</button>
            <button id=\"clear\" class=\"black-button\" type=\"reset\" form=\"appointment\">Clear</button>
        </fieldset>
    </form>
";
    }

    public function getTemplateName()
    {
        return "landing/index.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 16,  66 => 15,  58 => 11,  55 => 10,  49 => 7,  44 => 6,  41 => 5,  35 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"shared/base.html\" %}

{% block title %}Home{% endblock %}

{% block header %}
    {{ include('errors/validation_errors.html') }}
    {{ include('shared/nav.html') }}
{% endblock %}

{% block head %}
    {{ parent() }}
    <meta name=\"keywords\" content=\"PAW,2018,Templates,PHP\">
{% endblock %}

{% block main %}
    <form class=\"show\" method=\"POST\" id=\"appointment\" enctype=\"multipart/form-data\" action=\"/appointments/save\">
        <fieldset class=\"width-350\">
            <label class=\"appointment-label show\" for=\"name\">Name *</label>
            <input class=\"appointment-input show\" type=\"text\" name=\"name\" required>
        </fieldset>
        <fieldset class=\"width-350\">
            <label class=\"appointment-label show\" for=\"email\">Email *</label>
            <input class=\"appointment-input show\" type=\"email\" name=\"email\" required>
        </fieldset>
        <fieldset class=\"width-350\">
            <label class=\"appointment-label show\" for=\"phone\">Phone *</label>
            <input class=\"appointment-input show\" type=\"tel\" name=\"phone\" required>
        </fieldset>
        <fieldset class=\"width-350\">
            <label class=\"appointment-label show\" for=\"age\">Age</label>
            <input class=\"appointment-input show\" type=\"number\" name=\"age\">
        </fieldset>
        <fieldset class=\"width-350\">
            <label class=\"appointment-label show\" for=\"shoes_size\">Shoes Size</label>
            <input class=\"appointment-input show\" type=\"number\" min=\"20\" max=\"45\" step=\"1\" name=\"shoes_size\" />
        </fieldset>
        <fieldset class=\"width-350\">
            <label class=\"appointment-label show\" for=\"hight\">Height in centimeters</label>
            <input type=\"range\" value=\"180\" min=\"30\" max=\"250\" step=\"1\" name=\"height\" onchange=\"rangevalue.value=value\" />
            <output id=\"rangevalue\">180</output>
        </fieldset>
        <fieldset class=\"width-350\">
            <label class=\"appointment-label show\" for=\"birth_date\">Birth Date *</label>
            <input class=\"appointment-input show\" type=\"date\" name=\"birth_date\" required>
        </fieldset>
        <fieldset class=\"width-350\">
            <label class=\"appointment-label show\" for=\"hair_color\">Hair color</label>
            <input class=\"appointment-input show\" type=\"color\" name=\"hair_color\">
        </fieldset>
        <fieldset class=\"width-350\">
            <label class=\"appointment-label show\" for=\"date\">Date *</label>
            <input class=\"appointment-input show\" type=\"date\" name=\"date\" required>
        </fieldset>
        <fieldset class=\"width-350\">
            <label class=\"appointment-label show\" for=\"time\">Time</label>
            <input class=\"appointment-input show\" type=\"time\" min=\"8:00\" max=\"17:00\" step=\"900\" name=\"time\">
        </fieldset>
        <fieldset class=\"width-350\">
            <label class=\"appointment-label show\" for=\"diagnostic\">Attach image</label>
            <input class=\"appointment-input show\" type=\"file\" name=\"diagnostic\" id=\"diagnostic\" accept=\"image/png, image/jpg\">
        </fieldset>
        <fieldset class=\"width-350\">
            <button id=\"submit\" class=\"black-button\" type=\"submit\" form=\"appointment\">Submit</button>
            <button id=\"clear\" class=\"black-button\" type=\"reset\" form=\"appointment\">Clear</button>
        </fieldset>
    </form>
{% endblock %}

", "landing/index.html", "/Users/pandora/Documents/UNLu/ProgramacionEnAmbienteWeb/paw-tp4/app_tp4/app/views/landing/index.html");
    }
}
