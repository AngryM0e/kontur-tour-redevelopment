<?php

/* views/layouts/admin/menu.twig */
class __TwigTemplate_86d5cd6157e1c544023d60f5da8d1d55 extends Twig_Template
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
        echo "<div class=\"menu\">
            <div class=\"cont\">
                ";
        // line 3
        echo $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "widget", array(0 => "zii.widgets.CMenu", 1 => array("linkLabelWrapper" => "span", "items" => array(0 => array("label" => "Главная", "url" => array(0 => "/admin"), "active" => ((($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "id") == "admin")) ? (true) : (false))), 1 => array("label" => "Основные страницы", "url" => array(0 => "/admin/static_pages"), "active" => ((($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "id") == "pages")) ? (true) : (false))), 2 => array("label" => "Черное море", "url" => array(0 => "/admin/blacksea_pages"), "active" => ((($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "id") == "blackseaPages")) ? (true) : (false))), 3 => array("label" => "Азовское море", "url" => array(0 => "/admin/azovsea_pages"), "active" => ((($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "id") == "azovseaPages")) ? (true) : (false))), 4 => array("label" => "Дополнительные страницы", "url" => array(0 => "/admin/additional_pages"), "active" => ((($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "id") == "additionalPages")) ? (true) : (false))))), 2 => true), "method");
        // line 13
        echo "
            </div>
        </div>
";
    }

    public function getTemplateName()
    {
        return "views/layouts/admin/menu.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 13,  19 => 1,  144 => 104,  136 => 93,  128 => 104,  126 => 103,  115 => 94,  112 => 93,  89 => 72,  87 => 65,  56 => 22,  54 => 21,  47 => 16,  44 => 15,  41 => 14,  39 => 13,  34 => 10,  32 => 9,  23 => 3,  21 => 1,  28 => 2,);
    }
}
