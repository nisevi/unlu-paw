<?php

/* errors/not_found.html */
class __TwigTemplate_85f7c588204ce598e7087a981c6926ae4023fadb3b2180e23b93c23ddc5acbe6 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("shared/base.html", "errors/not_found.html", 1);
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
        echo "404";
    }

    // line 5
    public function block_header($context, array $blocks = array())
    {
        // line 6
        echo "  ";
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
        echo "    <img class=\"img-404\" src=\"/public/images/404.jpg\">
";
    }

    public function getTemplateName()
    {
        return "errors/not_found.html";
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

{% block title %}404{% endblock %}

{% block header %}
  {{ include('shared/nav.html') }}
{% endblock %}

{% block head %}
    {{ parent() }}
    <meta name=\"keywords\" content=\"PAW,2018,Templates,PHP\">
{% endblock %}

{% block main %}
    <img class=\"img-404\" src=\"/public/images/404.jpg\">
{% endblock %}", "errors/not_found.html", "/Users/pandora/Documents/UNLu/ProgramacionEnAmbienteWeb/paw-tp4/app_tp4/app/views/errors/not_found.html");
    }
}
