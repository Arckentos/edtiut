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

/* professeur/index.html.twig */
class __TwigTemplate_a1e4657c6f3e8bc8297dd686d649406111d47e1cb0d509583277de234a755f52 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "professeur/index.html.twig"));

        // line 1
        echo "<div class=\"professeur\">
<a href=\"";
        // line 2
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("professeurs.create");
        echo "\">Nouveau</a>
\t<table>
\t\t<thead>
\t\t\t<th>Id</th>
\t\t\t<th>Nom</th>
\t\t\t<th>Prenom</th>
\t\t\t<th>Email</th>
\t\t\t<th>Actions</th>
\t\t</thead>
\t\t<tbody>
\t\t\t";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["professeurs"]) || array_key_exists("professeurs", $context) ? $context["professeurs"] : (function () { throw new RuntimeError('Variable "professeurs" does not exist.', 12, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["professeur"]) {
            // line 13
            echo "\t\t\t\t<tr>
\t\t\t\t\t<td>";
            // line 14
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["professeur"], "id", [], "any", false, false, false, 14), "html", null, true);
            echo "</td>
\t\t\t\t\t<td>";
            // line 15
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["professeur"], "nom", [], "any", false, false, false, 15), "html", null, true);
            echo "</td>
\t\t\t\t\t<td>";
            // line 16
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["professeur"], "prenom", [], "any", false, false, false, 16), "html", null, true);
            echo "</td>
\t\t\t\t\t<td>";
            // line 17
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["professeur"], "email", [], "any", false, false, false, 17), "html", null, true);
            echo "</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t<a href=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("professeurs.edit", ["id" => twig_get_attribute($this->env, $this->source, $context["professeur"], "id", [], "any", false, false, false, 19)]), "html", null, true);
            echo "\">Modifier</a>
\t\t\t\t\t\t<a href=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("professeurs.delete", ["id" => twig_get_attribute($this->env, $this->source, $context["professeur"], "id", [], "any", false, false, false, 20)]), "html", null, true);
            echo "\">Supprimer</a>
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['professeur'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "\t\t</tbody>
\t</table>
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "professeur/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 24,  84 => 20,  80 => 19,  75 => 17,  71 => 16,  67 => 15,  63 => 14,  60 => 13,  56 => 12,  43 => 2,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"professeur\">
<a href=\"{{path('professeurs.create')}}\">Nouveau</a>
\t<table>
\t\t<thead>
\t\t\t<th>Id</th>
\t\t\t<th>Nom</th>
\t\t\t<th>Prenom</th>
\t\t\t<th>Email</th>
\t\t\t<th>Actions</th>
\t\t</thead>
\t\t<tbody>
\t\t\t{% for professeur in professeurs %}
\t\t\t\t<tr>
\t\t\t\t\t<td>{{professeur.id}}</td>
\t\t\t\t\t<td>{{professeur.nom}}</td>
\t\t\t\t\t<td>{{professeur.prenom}}</td>
\t\t\t\t\t<td>{{professeur.email}}</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t<a href=\"{{path('professeurs.edit', {id:professeur.id})}}\">Modifier</a>
\t\t\t\t\t\t<a href=\"{{path('professeurs.delete', {id:professeur.id})}}\">Supprimer</a>
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t{% endfor %}
\t\t</tbody>
\t</table>
</div>
", "professeur/index.html.twig", "C:\\Users\\cpauillac\\OneDrive\\Documents\\Scolarite\\Licence Pro\\progWebAvancee\\edt\\templates\\professeur\\index.html.twig");
    }
}
