<?php

/* /views/blackseaPages/create.twig */
class __TwigTemplate_42dbfbcd66f9be4428e28484c55940d9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("views/layouts/admin/main.twig");

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "views/layouts/admin/main.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        // line 3
        echo "<h1>Добавить страницу</h1><br />
";
        // line 4
        $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "renderPartial", array(0 => "_form", 1 => array("model" => (isset($context["model"]) ? $context["model"] : null))), "method");
    }

    public function getTemplateName()
    {
        return "/views/blackseaPages/create.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  34 => 4,  31 => 3,  28 => 2,);
    }
}
