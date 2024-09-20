<?php

/* views/layouts/header.twig */
class __TwigTemplate_a02b5498f82ca93692686003891db963 extends Twig_Template
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
        echo "<div id=\"art-page-background-glare\">
    <div id=\"art-page-background-glare-image\"></div>
</div>
<div id=\"art-main\">
    <div class=\"art-sheet\">
        <div class=\"moduletable_search\"></div>
        <div class=\"logo\">
            <a href=\"#\"><img src=\"/images/spacer.gif\" id=\"logo\" width=\"1\" border=\"0\" height=\"1\"></a>
        </div>
        <div class=\"pic\"></div>
        <div class=\"art-sheet-tl\"></div>
        <div class=\"art-sheet-tr\"></div>
        <div class=\"art-sheet-bl\"></div>
        <div class=\"art-sheet-br\"></div>
        <div class=\"art-sheet-tc\"></div>
        <div class=\"art-sheet-bc\"></div>
        <div class=\"art-sheet-cl\"></div>
        <div class=\"art-sheet-cr\"></div>
        <div class=\"art-sheet-cc\"></div>
        <div class=\"art-sheet-body\">
            <div class=\"art-header\">
                <div class=\"art-header-jpeg\"></div>
            </div>
            <div class=\"art-nav\">
                <div class=\"l\"></div>
                <div class=\"r\"></div>
                <ul class=\"art-menu\">
                    ";
        // line 28
        if (isset($context["this"])) { $_this_ = $context["this"]; } else { $_this_ = null; }
        $this->getAttribute($_this_, "Widget", array(0 => "application.widgets.TopMenuWidget"), "method");
        // line 29
        echo "                </ul>
            </div>";
    }

    public function getTemplateName()
    {
        return "views/layouts/header.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 29,  48 => 28,  40 => 10,  38 => 9,  26 => 6,  24 => 3,  22 => 2,  19 => 1,  31 => 6,  28 => 5,);
    }
}
