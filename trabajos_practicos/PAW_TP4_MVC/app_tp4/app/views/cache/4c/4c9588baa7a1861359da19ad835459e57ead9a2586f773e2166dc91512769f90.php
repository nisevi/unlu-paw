<?php

/* errors/internal_error.html */
class __TwigTemplate_78412ddac41653e9037555f4594e9936d2a5d77936f65e3cdfa1a68ebbf73bf3 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("shared/base.html", "errors/internal_error.html", 1);
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
        echo "500";
    }

    // line 5
    public function block_header($context, array $blocks = array())
    {
        // line 6
        echo "    ";
        echo twig_include($this->env, $context, "shared/nav.html");
        echo "
";
    }

    // line 9
    public function block_head($context, array $blocks = array())
    {
        // line 10
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
    <meta name=\"keywords\" content=\"PAW,2018,Templates,PHP\">
";
    }

    // line 14
    public function block_main($context, array $blocks = array())
    {
        // line 15
        echo "    <img class=\"img-500\" src=\"/public/images/500.jpg\">
";
    }

    public function getTemplateName()
    {
        return "errors/internal_error.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 15,  62 => 14,  54 => 10,  51 => 9,  44 => 6,  41 => 5,  35 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"shared/base.html\" %}

{% block title %}500{% endblock %}

{% block header %}
    {{ include('shared/nav.html') }}
{% endblock %}

{% block head %}
    {{ parent() }}
    <meta name=\"keywords\" content=\"PAW,2018,Templates,PHP\">
{% endblock %}

{% block main %}
    <img class=\"img-500\" src=\"/public/images/500.jpg\">
{% endblock %}", "errors/internal_error.html", "/Users/pandora/Documents/UNLu/ProgramacionEnAmbienteWeb/paw-tp4/app_tp4/app/views/errors/internal_error.html");
    }
}
