<?php

/* /views/azovseaPages/admin.twig */
class __TwigTemplate_97020e3dbd68d0f488ff7befe2da6f7d extends Twig_Template
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
        echo $this->getAttribute($this->getAttribute((isset($context["C"]) ? $context["C"] : null), "Html"), "link", array(0 => "Добавить страницу", 1 => "/admin/azovsea_pages/create"), "method");
        echo "
";
        // line 5
        $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "widget", array(0 => "zii.widgets.grid.CGridView", 1 => array("id" => "pages-grid", "dataProvider" => $this->getAttribute((isset($context["model"]) ? $context["model"] : null), "search"), "filter" => (isset($context["model"]) ? $context["model"] : null), "columns" => array(0 => "meta_title", 1 => "title", 2 => "description", 3 => "keywords", 4 => "sort_num", 5 => "url", 6 => array("class" => "CButtonColumn", "template" => "{update}&nbsp;{delete}")))), "method");
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
        return array (  38 => 5,  34 => 4,  31 => 3,  28 => 2,);
    }
}
