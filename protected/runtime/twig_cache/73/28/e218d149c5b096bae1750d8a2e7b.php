<?php

/* views/layouts/admin/header.twig */
class __TwigTemplate_7328e218d149c5b096bae1750d8a2e7b extends Twig_Template
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
        return array (  19 => 1,  155 => 111,  145 => 100,  137 => 111,  135 => 110,  124 => 101,  121 => 100,  98 => 79,  96 => 72,  58 => 22,  55 => 21,  48 => 16,  45 => 15,  42 => 14,  39 => 13,  34 => 10,  32 => 9,  23 => 2,  21 => 1,  28 => 2,);
    }
}
