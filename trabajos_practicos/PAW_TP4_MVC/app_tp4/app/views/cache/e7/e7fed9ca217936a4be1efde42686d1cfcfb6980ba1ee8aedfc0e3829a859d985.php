<?php

/* shared/nav.html */
class __TwigTemplate_e707e7f8ccd46e62434c75e88ca729fef968588d8395e28210cb6f2da6f2f681 extends Twig_Template
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
        echo "<nav class=\"main-nav\">
    <ul>
        <li><a href=\"/\">Home</a></li>
        <li><a href=\"/appointments\">Appointments</a></li>
    </ul>
</nav>
";
    }

    public function getTemplateName()
    {
        return "shared/nav.html";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<nav class=\"main-nav\">
    <ul>
        <li><a href=\"/\">Home</a></li>
        <li><a href=\"/appointments\">Appointments</a></li>
    </ul>
</nav>
", "shared/nav.html", "/Users/pandora/Documents/UNLu/ProgramacionEnAmbienteWeb/paw-tp4/app_tp4/app/views/shared/nav.html");
    }
}
