<?php

/* views/layouts/admin/footer.twig */
class __TwigTemplate_9712c41961805f7ec54c12ca08bac897 extends Twig_Template
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
        echo "<!-- footer -->
    <div class=\"footer\">
        <div class=\"cont\">
            <div class=\"copyright\">
                <span>©";
        // line 5
        if (isset($context["now"])) { $_now_ = $context["now"]; } else { $_now_ = null; }
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $_now_, "Y"), "html", null, true);
        echo "</span>
            </div>
            <a class=\"small_logo\" href=\"#\"><img src=\"http://ros-gruz.ru/images_admin/small-logo.png\" alt=\"\" /></a>
            <div class=\"clear\"></div>
        </div>
    </div>
    <!-- end footer -->";
    }

    public function getTemplateName()
    {
        return "views/layouts/admin/footer.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 5,  26 => 13,  19 => 1,  155 => 111,  145 => 100,  137 => 111,  135 => 110,  124 => 101,  121 => 100,  98 => 79,  96 => 72,  58 => 22,  55 => 21,  48 => 16,  45 => 15,  42 => 14,  39 => 13,  34 => 10,  32 => 9,  23 => 3,  21 => 1,  28 => 2,);
    }
}
