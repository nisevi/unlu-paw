<?php

/* appointments/index.html */
class __TwigTemplate_cd3bf2f1f8c7b486c165ca0b22d19144bffae1d0f238f31c52111f55e9d38ec9 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("shared/base.html", "appointments/index.html", 1);
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
        echo "Appointments";
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
        echo "    <h2>Appointments List</h2>
    <table>
        ";
        // line 18
        if (($context["appointments"] ?? null)) {
            // line 19
            echo "            <thead>
                <tr>
                    <td>
                        <label>NAME</label>
                    </td>
                    <td>
                        <label>EMAIL</label>
                    </td>
                    <td>
                        <label>PHONE</label>
                    </td>
                    <td>
                        <label>DATE</label>
                    </td>
                    <td>
                        <label>AGE</label>
                    </td>
                    <td>
                        <label>ACTIONS</label>
                    </td>
                </tr>
            <thead>
        ";
        }
        // line 42
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["appointments"] ?? null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["appointment"]) {
            // line 43
            echo "            <tr>
                <td>";
            // line 44
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["appointment"], "name", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 45
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["appointment"], "email", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 46
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["appointment"], "phone", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 47
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["appointment"], "date", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 48
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["appointment"], "age", array()), "html", null, true);
            echo "</td>
                <td>
                    <form method=\"GET\" id=\"show-appointment-";
            // line 50
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["appointment"], "id", array()), "html", null, true);
            echo "\" action=\"/appointments/show\">
                        <input type=\"hidden\" name=\"id\" value=";
            // line 51
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["appointment"], "id", array()), "html", null, true);
            echo ">
                        <button type=\"submit\" form=\"show-appointment-";
            // line 52
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["appointment"], "id", array()), "html", null, true);
            echo "\">Show</button>
                    </form>
                    <form method=\"GET\" id=\"edit-appointment-";
            // line 54
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["appointment"], "id", array()), "html", null, true);
            echo "\" action=\"/appointments/edit\">
                        <input type=\"hidden\" name=\"id\" value=";
            // line 55
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["appointment"], "id", array()), "html", null, true);
            echo ">
                        <button type=\"submit\" form=\"edit-appointment-";
            // line 56
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["appointment"], "id", array()), "html", null, true);
            echo "\">Edit</button>
                    </form>                    
                    <form method=\"POST\" id=\"destroy-appointment-";
            // line 58
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["appointment"], "id", array()), "html", null, true);
            echo "\" action=\"/appointments/delete\" onSubmit=\"return confirm('Deseal eliminar el turno?');\">
                        <input type=\"hidden\" name=\"id\" value=";
            // line 59
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["appointment"], "id", array()), "html", null, true);
            echo ">
                        <button type=\"submit\" form=\"destroy-appointment-";
            // line 60
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["appointment"], "id", array()), "html", null, true);
            echo "\">Delete</button>
                    </form>
                </td>
            </tr>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 65
            echo "            <span>There is no registered appointments at the moment.</span>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['appointment'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 67
        echo "    </table>
";
    }

    public function getTemplateName()
    {
        return "appointments/index.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  181 => 67,  174 => 65,  164 => 60,  160 => 59,  156 => 58,  151 => 56,  147 => 55,  143 => 54,  138 => 52,  134 => 51,  130 => 50,  125 => 48,  121 => 47,  117 => 46,  113 => 45,  109 => 44,  106 => 43,  100 => 42,  75 => 19,  73 => 18,  69 => 16,  66 => 15,  58 => 11,  55 => 10,  49 => 7,  44 => 6,  41 => 5,  35 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"shared/base.html\" %}

{% block title %}Appointments{% endblock %}

{% block header %}
    {{ include('errors/validation_errors.html') }}
    {{ include('shared/nav.html') }}
{% endblock %}

{% block head %}
    {{ parent() }}
    <meta name=\"keywords\" content=\"PAW,2018,Templates,PHP\">
{% endblock %}

{% block main %}
    <h2>Appointments List</h2>
    <table>
        {% if appointments %}
            <thead>
                <tr>
                    <td>
                        <label>NAME</label>
                    </td>
                    <td>
                        <label>EMAIL</label>
                    </td>
                    <td>
                        <label>PHONE</label>
                    </td>
                    <td>
                        <label>DATE</label>
                    </td>
                    <td>
                        <label>AGE</label>
                    </td>
                    <td>
                        <label>ACTIONS</label>
                    </td>
                </tr>
            <thead>
        {% endif %}
        {% for appointment in appointments %}
            <tr>
                <td>{{ appointment.name }}</td>
                <td>{{ appointment.email }}</td>
                <td>{{ appointment.phone }}</td>
                <td>{{ appointment.date }}</td>
                <td>{{ appointment.age }}</td>
                <td>
                    <form method=\"GET\" id=\"show-appointment-{{ appointment.id }}\" action=\"/appointments/show\">
                        <input type=\"hidden\" name=\"id\" value={{ appointment.id }}>
                        <button type=\"submit\" form=\"show-appointment-{{ appointment.id }}\">Show</button>
                    </form>
                    <form method=\"GET\" id=\"edit-appointment-{{ appointment.id }}\" action=\"/appointments/edit\">
                        <input type=\"hidden\" name=\"id\" value={{ appointment.id }}>
                        <button type=\"submit\" form=\"edit-appointment-{{ appointment.id }}\">Edit</button>
                    </form>                    
                    <form method=\"POST\" id=\"destroy-appointment-{{ appointment.id }}\" action=\"/appointments/delete\" onSubmit=\"return confirm('Deseal eliminar el turno?');\">
                        <input type=\"hidden\" name=\"id\" value={{ appointment.id }}>
                        <button type=\"submit\" form=\"destroy-appointment-{{ appointment.id }}\">Delete</button>
                    </form>
                </td>
            </tr>
        {% else %}
            <span>There is no registered appointments at the moment.</span>
        {% endfor %}
    </table>
{% endblock %}
", "appointments/index.html", "/Users/pandora/Documents/UNLu/ProgramacionEnAmbienteWeb/paw-tp4/app_tp4/app/views/appointments/index.html");
    }
}
