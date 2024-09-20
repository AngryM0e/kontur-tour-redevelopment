<?php

/* views/layouts/empty.twig */
class __TwigTemplate_1bc68d3c4cb0d4a5223ea1b229444023 extends Twig_Template
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
        echo "<html class=\"gecko firefox2  linux\" xmlns=\"http://www.w3.org/1999/xhtml\" xml:lang=\"ru-ru\" lang=\"ru-ru\">
<head>
    <meta http-equiv=\"content-type\" content=\"text/html; charset=UTF-8\">
</head>
<body>
";
        // line 6
        $this->displayBlock('content', $context, $blocks);
        // line 7
        echo "</body>
</html>        ";
    }

    // line 6
    public function block_content($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "views/layouts/empty.twig";
    }

    public function getDebugInfo()
    {
        return array (  34 => 6,  29 => 7,  27 => 6,  20 => 1,);
    }
}
