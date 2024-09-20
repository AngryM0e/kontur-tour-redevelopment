<?php

/* /views/azovseaPages/admin.twig */
class __TwigTemplate_a981a701c6c08265abf4912a5e378023 extends Twig_Template
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
        echo "<h1>Редактирование страниц</h1><br />
";
        // line 4
        if (isset($context["C"])) { $_C_ = $context["C"]; } else { $_C_ = null; }
        echo $this->getAttribute($this->getAttribute($_C_, "Html"), "link", array(0 => "Добавить страницу", 1 => "/admin/azovsea_pages/create"), "method");
        echo "
";
        // line 5
        if (isset($context["this"])) { $_this_ = $context["this"]; } else { $_this_ = null; }
        if (isset($context["model"])) { $_model_ = $context["model"]; } else { $_model_ = null; }
        $this->getAttribute($_this_, "widget", array(0 => "zii.widgets.grid.CGridView", 1 => array("id" => "pages-grid", "dataProvider" => $this->getAttribute($_model_, "search"), "filter" => $_model_, "columns" => array(0 => "meta_title", 1 => "title", 2 => "description", 3 => "keywords", 4 => "sort_num", 5 => "url", 6 => array("class" => "CButtonColumn", "template" => "{update}&nbsp;{delete}")))), "method");
    }

    public function getTemplateName()
    {
        return "/views/azovseaPages/admin.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 5,  34 => 4,  31 => 3,  28 => 2,);
    }
}
