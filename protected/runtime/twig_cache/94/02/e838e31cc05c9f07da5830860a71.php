<?php

/* views/layouts/admin/header.twig */
class __TwigTemplate_9402e838e31cc05c9f07da5830860a71 extends Twig_Template
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
        echo "  <div class=\"header\">
            <div class=\"cont\">
                <a class=\"logo\" href=\"#\"><img src=\"/images/admin/logo.png\" alt=\"\" /></a>
                
                <div class=\"status_block\">
                \t<a href=\"/admin/accesschange\">Сменить пароль</a>&nbsp;&nbsp;&nbsp;&nbsp;<a href=\"/admin/logout\">Выход</a>
                    <!--<p>
                        <img src=\"http://victoriatur.ru/images_admin/red-bell-icon.png\" alt=\"\" />
                        <span>У Вас <a href=\"#\">2</a> новых уведомления</span>
                    </p>
                    <p>
                        <img src=\"http://victoriatur.ru/images_admin/black-bell-icon.png\" alt=\"\" />
                        <span>Нет новых уведомления</span>
                    </p>-->
                </div>
                <div class=\"clear\"></div>
            </div>
        </div>";
    }

    public function getTemplateName()
    {
        return "views/layouts/admin/header.twig";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,  144 => 104,  136 => 93,  128 => 104,  126 => 103,  115 => 94,  112 => 93,  89 => 72,  87 => 65,  56 => 22,  54 => 21,  47 => 16,  44 => 15,  41 => 14,  39 => 13,  34 => 10,  32 => 9,  23 => 2,  21 => 1,  28 => 2,);
    }
}
