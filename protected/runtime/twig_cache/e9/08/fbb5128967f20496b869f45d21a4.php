<?php

/* views/layouts/head.twig */
class __TwigTemplate_e908fbb5128967f20496b869f45d21a4 extends Twig_Template
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
        echo "<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Transitional//EN\" \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd\">
<html class=\"gecko firefox2  linux\" xmlns=\"http://www.w3.org/1999/xhtml\" xml:lang=\"ru-ru\" lang=\"ru-ru\"><head>
    <!--<meta http-equiv=\"Content-Type\" content=\"text/html; charset=windows-1251\">-->
    <!-- base href=\"http://www.kontur-tour.ru/\" -->
    <meta http-equiv=\"content-type\" content=\"text/html; charset=UTF-8\">
    <title>";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "pageTitle"), "html", null, true);
        echo "</title>
    <link href=\"/templates/travel/favicon.ico\" rel=\"shortcut icon\" type=\"image/x-icon\">
    <link rel=\"stylesheet\" href=\"/css/style.css\" type=\"text/css\">
    <link rel=\"stylesheet\" href=\"/css/rokbox-style.css\" type=\"text/css\">
    <link rel=\"stylesheet\" href=\"/css/attachments.css\" type=\"text/css\">
    <link rel=\"stylesheet\" href=\"/css/slimbox.css\" type=\"text/css\" media=\"screen\" />
    <script type=\"text/javascript\" src=\"/css/proofreader.js\"></script>
    <script type=\"text/javascript\" src=\"/js/xajax.js\"></script>
    <script type=\"text/javascript\" src=\"/js/mootools.js\"></script>
    <script type=\"text/javascript\" src=\"/js/caption.js\"></script>
    <script type=\"text/javascript\" src=\"/js/phocagalleryslideshow.js\"></script>
    <script type=\"text/javascript\" src=\"/js/rokbox.js\"></script>
    <script type=\"text/javascript\" src=\"/js/rokbox-config.js\"></script>
    <script type=\"text/javascript\" src=\"/js/slimbox.js\"></script>
    <link rel=\"stylesheet\" href=\"/css/system.css\" type=\"text/css\">
    <link rel=\"stylesheet\" href=\"/css/general.css\" type=\"text/css\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"/css/template.css\" media=\"screen\">
    <!--[if IE 6]><link rel=\"stylesheet\" href=\"/css/template.ie6.css\" type=\"text/css\" media=\"screen\" /><![endif]-->
    <!--[if IE 7]><link rel=\"stylesheet\" href=\"/css/template.ie7.css\" type=\"text/css\" media=\"screen\" /><![endif]-->
    <script type=\"text/javascript\" src=\"/js/script.js\"></script>
</head>";
    }

    public function getTemplateName()
    {
        return "views/layouts/head.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 6,  19 => 1,);
    }
}
