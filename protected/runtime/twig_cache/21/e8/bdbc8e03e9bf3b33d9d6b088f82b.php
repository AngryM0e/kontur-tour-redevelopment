<?php

/* views/layouts/admin/menu.twig */
class __TwigTemplate_21e8bdbc8e03e9bf3b33d9d6b088f82b extends Twig_Template
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
        if (isset($context["this"])) { $_this_ = $context["this"]; } else { $_this_ = null; }
        echo $this->getAttribute($_this_, "widget", array(0 => "zii.widgets.CMenu", 1 => array("linkLabelWrapper" => "span", "items" => array(0 => array("label" => "Главная", "url" => array(0 => "/admin"), "active" => ((($this->getAttribute($_this_, "id") == "admin")) ? (true) : (false))), 1 => array("label" => "Основные страницы", "url" => array(0 => "/admin/static_pages"), "active" => ((($this->getAttribute($_this_, "id") == "pages")) ? (true) : (false))), 2 => array("label" => "Черное море", "url" => array(0 => "/admin/blacksea_pages"), "active" => ((($this->getAttribute($_this_, "id") == "blackseaPages")) ? (true) : (false))), 3 => array("label" => "Азовское море", "url" => array(0 => "/admin/azovsea_pages"), "active" => ((($this->getAttribute($_this_, "id") == "azovseaPages")) ? (true) : (false))), 4 => array("label" => "Дополнительные страницы", "url" => array(0 => "/admin/additional_pages"), "active" => ((($this->getAttribute($_this_, "id") == "additionalPages")) ? (true) : (false))))), 2 => true), "method");
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
        return array (  26 => 13,  19 => 1,  155 => 111,  145 => 100,  137 => 111,  135 => 110,  124 => 101,  121 => 100,  98 => 79,  96 => 72,  58 => 22,  55 => 21,  48 => 16,  45 => 15,  42 => 14,  39 => 13,  34 => 10,  32 => 9,  23 => 3,  21 => 1,  28 => 2,);
    }
}
