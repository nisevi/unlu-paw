<?php

/* shared/base.html */
class __TwigTemplate_0ed689b0cc3c9678110730a87013eca443734cc10632922862af7996e2acdd5a extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'header' => array($this, 'block_header'),
            'main' => array($this, 'block_main'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        ";
        // line 4
        $this->displayBlock('head', $context, $blocks);
        // line 10
        echo "    </head>
    <body>
        <header>";
        // line 12
        $this->displayBlock('header', $context, $blocks);
        echo "</header>
        <main class=\"main-container\">";
        // line 13
        $this->displayBlock('main', $context, $blocks);
        echo "</main>
        <footer>";
        // line 14
        $this->displayBlock('footer', $context, $blocks);
        echo "</footer>
    </body>
</html>
";
    }

    // line 4
    public function block_head($context, array $blocks = array())
    {
        // line 5
        echo "            <meta charset=\"utf-8\">
            <title>";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        echo " - PAW 2019</title>
            <link rel=\"stylesheet\" type=\"text/css\" href=\"/public/css/reset.css\">
            <link rel=\"stylesheet\" type=\"text/css\" href=\"/public/css/main.css\">
        ";
    }

    public function block_title($context, array $blocks = array())
    {
    }

    // line 12
    public function block_header($context, array $blocks = array())
    {
    }

    // line 13
    public function block_main($context, array $blocks = array())
    {
    }

    // line 14
    public function block_footer($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "shared/base.html";
    }

    public function getDebugInfo()
    {
        return array (  83 => 14,  78 => 13,  73 => 12,  61 => 6,  58 => 5,  55 => 4,  47 => 14,  43 => 13,  39 => 12,  35 => 10,  33 => 4,  28 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        {% block head %}
            <meta charset=\"utf-8\">
            <title>{% block title %}{% endblock %} - PAW 2019</title>
            <link rel=\"stylesheet\" type=\"text/css\" href=\"/public/css/reset.css\">
            <link rel=\"stylesheet\" type=\"text/css\" href=\"/public/css/main.css\">
        {% endblock %}
    </head>
    <body>
        <header>{% block header %}{% endblock %}</header>
        <main class=\"main-container\">{% block main %}{% endblock %}</main>
        <footer>{% block footer %}{% endblock %}</footer>
    </body>
</html>
", "shared/base.html", "/Users/pandora/Documents/UNLu/ProgramacionEnAmbienteWeb/paw-tp4/app_tp4/app/views/shared/base.html");
    }
}
