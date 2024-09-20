<?php

/* views/layouts/main.twig */
class __TwigTemplate_ed09e042586334d5819d53c28129be17 extends Twig_Template
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
        $this->env->loadTemplate("views/layouts/head.twig")->display($context);
        // line 2
        echo "<body>        
";
        // line 3
        $this->env->loadTemplate("views/layouts/header.twig")->display($context);
        // line 4
        $this->env->loadTemplate("views/layouts/sidebar.twig")->display($context);
        // line 5
        echo "<div class=\"art-layout-cell art-content-sidebar2\">
  ";
        // line 6
        if (isset($context["content"])) { $_content_ = $context["content"]; } else { $_content_ = null; }
        echo $_content_;
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
        return "views/layouts/main.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 10,  38 => 9,  31 => 6,  28 => 5,  26 => 4,  24 => 3,  21 => 2,  19 => 1,);
    }
}
