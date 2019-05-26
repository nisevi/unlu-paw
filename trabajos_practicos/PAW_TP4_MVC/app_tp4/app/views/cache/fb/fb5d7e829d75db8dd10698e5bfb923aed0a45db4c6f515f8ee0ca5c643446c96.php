<?php

/* errors/validation_errors.html */
class __TwigTemplate_c8049284970093a8f7cd119229eca746704d8e822c454410b615730541c8a83d extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        if (($context["errors"] ?? null)) {
            // line 2
            echo "    <p class=\"errors error\">";
            echo twig_escape_filter($this->env, ($context["errors"] ?? null), "html", null, true);
            echo "</p>
";
        }
    }

    public function getTemplateName()
    {
        return "errors/validation_errors.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if (errors) %}
    <p class=\"errors error\">{{errors}}</p>
{% endif %}", "errors/validation_errors.html", "/Users/pandora/Documents/UNLu/ProgramacionEnAmbienteWeb/paw-tp4/app_tp4/app/views/errors/validation_errors.html");
    }
}
