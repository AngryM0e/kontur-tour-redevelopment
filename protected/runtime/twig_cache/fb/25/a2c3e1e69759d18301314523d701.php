<?php

/* views/layouts/empty.twig */
class __TwigTemplate_fb25a2c3e1e69759d18301314523d701 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('content', $context, $blocks);
    }

    public function block_content($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "views/layouts/empty.twig";
    }

    public function getDebugInfo()
    {
        return array (  20 => 1,  31 => 3,  28 => 2,);
    }
}
