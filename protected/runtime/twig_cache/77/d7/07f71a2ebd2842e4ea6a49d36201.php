<?php

/* /views//layouts/main.twig */
class __TwigTemplate_77d707f71a2ebd2842e4ea6a49d36201 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<body>
";
        // line 2
        $this->env->loadTemplate("views/layouts/head.twig")->display($context);
        // line 3
        $this->env->loadTemplate("views/layouts/header.twig")->display($context);
        // line 4
        $this->env->loadTemplate("views/layouts/sidebar.twig")->display($context);
        // line 5
        echo "<div class=\"art-layout-cell art-content-sidebar2\">
  ";
        // line 6
        echo twig_escape_filter($this->env, (isset($context["content"]) ? $context["content"] : null), "html", null, true);
        echo "
</div>
</div>
";
        // line 9
        $this->env->loadTemplate("views/layouts/footer.twig")->display($context);
        // line 10
        echo "</body>
</html>
";
    }

    public function getTemplateName()
    {
        return "/views//layouts/main.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 10,  37 => 9,  31 => 6,  28 => 5,  26 => 4,  24 => 3,  22 => 2,  19 => 1,);
    }
}
