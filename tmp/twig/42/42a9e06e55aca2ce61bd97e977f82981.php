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

/* table/browse_foreigners/column_element.twig */
class __TwigTemplate_99704dbf084acdf52111dd925e78aaa4 extends \Twig\Template
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
        // line 1
        echo "<td";
        echo ((($context["nowrap"] ?? null)) ? (" class=\"nowrap\"") : (""));
        echo ">
    ";
        // line 2
        echo ((($context["is_selected"] ?? null)) ? ("<strong>") : (""));
        echo "
        <a class=\"foreign_value\" data-key=\"";
        // line 3
        echo twig_escape_filter($this->env, ($context["keyname"] ?? null), "html", null, true);
        echo "\" href=\"#\" title=\"";
        // line 4
        echo _gettext("Use this value");
        (( !twig_test_empty(($context["title"] ?? null))) ? (print (twig_escape_filter($this->env, (": " . ($context["title"] ?? null)), "html", null, true))) : (print ("")));
        echo "\">
            ";
        // line 5
        if (($context["nowrap"] ?? null)) {
            // line 6
            echo "                ";
            echo twig_escape_filter($this->env, ($context["keyname"] ?? null), "html", null, true);
            echo "
            ";
        } else {
            // line 8
            echo "                ";
            echo twig_escape_filter($this->env, ($context["description"] ?? null), "html", null, true);
            echo "
            ";
        }
        // line 10
        echo "        </a>
    ";
        // line 11
        echo ((($context["is_selected"] ?? null)) ? ("</strong>") : (""));
        echo "
</td>
";
    }

    public function getTemplateName()
    {
        return "table/browse_foreigners/column_element.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 11,  68 => 10,  62 => 8,  56 => 6,  54 => 5,  49 => 4,  46 => 3,  42 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "table/browse_foreigners/column_element.twig", "C:\\_programmes\\laragon-6.0.0\\etc\\apps\\phpmyadmin\\templates\\table\\browse_foreigners\\column_element.twig");
    }
}
