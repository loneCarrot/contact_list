<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* main/index.html.twig */
class __TwigTemplate_239cb1150c2d2ded13681de3aba07e0b73ad3f1bcdf1112f1c0e3c276161b8b8 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "main/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "main/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Contact List!";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "  <div class=\"container\">
            <div class=\"input-group mb-3\">
                <div class=\"col-xs-3\">
                <select class=\"form-select col-sm-3\" id=\"inputGroupSelect\" aria-label=\"Example select with button addon\">
                    <option value=\"name\" selected>Name</option>
                    <option value=\"phone_number\">Phone Number</option>
                    <option value=\"phone_number2\">Phone Number2</option>
                    <option value=\"email\">Email</option>
                </select>
                </div>
                <input type=\"text\" class=\"form-control\" id=\"search-field\" aria-label=\"Text input with dropdown button\">
            </div>

            <table class=\"table\">
                <thead>
                    <tr>
                        <th scope=\"col\">Name</th>
                        <th scope=\"col\">Phone Number</th>
                        <th scope=\"col\">Phone Number 2</th>
                        <th scope=\"col\">Description</th>
                        <th scope=\"col\">Email</th>
                        <th scope=\"col\">Action</th>
                    </tr>
                </thead>
                <tbody class=\"table-body\">
                    ";
        // line 31
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["list"]) || array_key_exists("list", $context) ? $context["list"] : (function () { throw new RuntimeError('Variable "list" does not exist.', 31, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
            // line 32
            echo "                    <tr class=\"contact-data\">
                        <td id=\"name\">";
            // line 33
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["data"], "name", [], "any", false, false, false, 33), "html", null, true);
            echo "</td>
                        <td id=\"phone_number\">";
            // line 34
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["data"], "phoneNumber", [], "any", false, false, false, 34), "html", null, true);
            echo "</td>
                        <td id=\"phone_number2\">";
            // line 35
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["data"], "phoneNumber2", [], "any", false, false, false, 35), "html", null, true);
            echo "</td>
                        <td id=\"description\">";
            // line 36
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["data"], "description", [], "any", false, false, false, 36), "html", null, true);
            echo "</td>
                        <td id=\"email\">";
            // line 37
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["data"], "emailAdd", [], "any", false, false, false, 37), "html", null, true);
            echo "</td>
                        <td>
                        <a class=\"btn btn-warning\" href=\"";
            // line 39
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("update", ["id" => twig_get_attribute($this->env, $this->source, $context["data"], "id", [], "any", false, false, false, 39)]), "html", null, true);
            echo "\">Update</a>
                        <a class=\"btn btn-danger\" href=\"";
            // line 40
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("delete", ["id" => twig_get_attribute($this->env, $this->source, $context["data"], "id", [], "any", false, false, false, 40)]), "html", null, true);
            echo "\">Delete</a>
                        </td>
                    </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        echo "                    <tr>
                    <td colspan=\"6\"><a class=\"btn btn-primary col-12\" href=\"";
        // line 45
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("create");
        echo "\">Create a Post</a></td>
                    </tr>
                </tbody>
            </table>
  </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "main/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  145 => 45,  142 => 44,  132 => 40,  128 => 39,  123 => 37,  119 => 36,  115 => 35,  111 => 34,  107 => 33,  104 => 32,  100 => 31,  73 => 6,  66 => 5,  53 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base.html.twig\" %}

{% block title %}Contact List!{% endblock %}

{% block body %}
  <div class=\"container\">
            <div class=\"input-group mb-3\">
                <div class=\"col-xs-3\">
                <select class=\"form-select col-sm-3\" id=\"inputGroupSelect\" aria-label=\"Example select with button addon\">
                    <option value=\"name\" selected>Name</option>
                    <option value=\"phone_number\">Phone Number</option>
                    <option value=\"phone_number2\">Phone Number2</option>
                    <option value=\"email\">Email</option>
                </select>
                </div>
                <input type=\"text\" class=\"form-control\" id=\"search-field\" aria-label=\"Text input with dropdown button\">
            </div>

            <table class=\"table\">
                <thead>
                    <tr>
                        <th scope=\"col\">Name</th>
                        <th scope=\"col\">Phone Number</th>
                        <th scope=\"col\">Phone Number 2</th>
                        <th scope=\"col\">Description</th>
                        <th scope=\"col\">Email</th>
                        <th scope=\"col\">Action</th>
                    </tr>
                </thead>
                <tbody class=\"table-body\">
                    {% for data in list %}
                    <tr class=\"contact-data\">
                        <td id=\"name\">{{ data.name}}</td>
                        <td id=\"phone_number\">{{ data.phoneNumber}}</td>
                        <td id=\"phone_number2\">{{ data.phoneNumber2}}</td>
                        <td id=\"description\">{{ data.description}}</td>
                        <td id=\"email\">{{ data.emailAdd}}</td>
                        <td>
                        <a class=\"btn btn-warning\" href=\"{{ path('update', {'id': data.id }) }}\">Update</a>
                        <a class=\"btn btn-danger\" href=\"{{ path('delete', {'id': data.id }) }}\">Delete</a>
                        </td>
                    </tr>
                    {% endfor %}
                    <tr>
                    <td colspan=\"6\"><a class=\"btn btn-primary col-12\" href=\"{{ path('create')}}\">Create a Post</a></td>
                    </tr>
                </tbody>
            </table>
  </div>
{% endblock %}
", "main/index.html.twig", "C:\\xampp\\htdocs\\contact_list\\templates\\main\\index.html.twig");
    }
}
