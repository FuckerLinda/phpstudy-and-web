<?php

/* database/structure/browse_table.twig */
class __TwigTemplate_f02189c84674f1285dfb95ea59485d33c84b8e75b9016bde55f69bfc138bb526 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo "<a href=\"sql.php";
        echo (isset($context["tbl_url_query"]) ? $context["tbl_url_query"] : null);
        echo "&amp;pos=0\">
    ";
        // line 2
        echo (isset($context["title"]) ? $context["title"] : null);
        echo "
</a>
";
    }

    public function getTemplateName()
    {
        return "database/structure/browse_table.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  24 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "database/structure/browse_table.twig", "C:\\tools\\phpstudy\\phpstudy_pro\\WWW\\phpMyAdmin\\templates\\database\\structure\\browse_table.twig");
    }
}
