<?php

/* views/layouts/admin/footer.twig */
class __TwigTemplate_2bffe79c61c34e29b58572ca577c520e extends Twig_Template
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
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["now"]) ? $context["now"] : null), "Y"), "html", null, true);
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
        return array (  25 => 5,  19 => 1,  144 => 104,  136 => 93,  128 => 104,  126 => 103,  115 => 94,  112 => 93,  89 => 72,  87 => 65,  56 => 22,  54 => 21,  47 => 16,  44 => 15,  41 => 14,  39 => 13,  34 => 10,  32 => 9,  23 => 3,  21 => 1,  28 => 2,);
    }
}
