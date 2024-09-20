<?php

/* /views/pages/pages.twig */
class __TwigTemplate_d21c0a4f1c0d34e000fb4569e4768e0b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("views/layouts/main.twig");

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "views/layouts/main.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        // line 3
        echo "  ";
        if (isset($context["content"])) { $_content_ = $context["content"]; } else { $_content_ = null; }
        echo twig_escape_filter($this->env, $_content_, "html", null, true);
        echo "
";
    }

    public function getTemplateName()
    {
        return "/views/pages/pages.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 3,  28 => 2,);
    }
}
