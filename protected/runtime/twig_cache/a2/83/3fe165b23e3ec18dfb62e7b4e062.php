<?php

/* views/layouts/head.twig */
class __TwigTemplate_a2833fe165b23e3ec18dfb62e7b4e062 extends Twig_Template
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
        echo "<!DOCTYPE html>
<html class=\"gecko firefox2  linux\" xmlns=\"http://www.w3.org/1999/xhtml\" xml:lang=\"ru-ru\" lang=\"ru-ru\">
<head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\" />
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"yandex-verification\" content=\"b5cceef611505f66\" />
    <!-- base href=\"http://www.kontur-tour.ru/\" -->
    <meta http-equiv=\"content-type\" content=\"text/html; charset=UTF-8\">
    <meta property=\"og:type\" content=\"website\">
    <meta property=\"twitter:card\" content=\"summary\">
    <meta property=\"og:site_name\" content=\"Туристическая компания Контур\">
    <meta property=\"og:title\" content=\"Туры\">
    <meta property=\"og:description\" content=\"Туристическая компания Контур предлагает широкий выбор автобусных туров по России и за рубежом в Туле. Индивидуальный подбор тура, заказ автобусов.\">
    <title>";
        // line 15
        if (isset($context["this"])) { $_this_ = $context["this"]; } else { $_this_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_this_, "pageTitle"), "html", null, true);
        echo "</title>
    <link href=\"/images/favicon.ico\" rel=\"shortcut icon\" type=\"image/x-icon\">
    <link rel=\"stylesheet\" href=\"/css/style.css\" type=\"text/css\">
    <link rel=\"stylesheet\" href=\"/css/rokbox-style.css\" type=\"text/css\">
    <link rel=\"stylesheet\" href=\"/css/attachments.css\" type=\"text/css\">
    <link rel=\"stylesheet\" href=\"/css/slimbox2.css\" type=\"text/css\" media=\"screen\" />
    <!--<script type=\"text/javascript\" src=\"/css/proofreader.js\"></script>-->
    <script type=\"text/javascript\" src=\"/js/xajax.js\"></script>
    <script type=\"text/javascript\" src=\"/js/mootools.js\"></script>
    <script type=\"text/javascript\" src=\"/js/caption.js\"></script>
    <script type=\"text/javascript\" src=\"/js/phocagalleryslideshow.js\"></script>
    <script type=\"text/javascript\" src=\"/js/rokbox.js\"></script>
    <script type=\"text/javascript\" src=\"/js/rokbox-config.js\"></script>
    <script type=\"text/javascript\" src=\"/js/jquery.min.js\"></script>
    <script type=\"text/javascript\" src=\"/js/slimbox2.js\"></script>
    <link rel=\"stylesheet\" href=\"/css/system.css\" type=\"text/css\">
    <link rel=\"stylesheet\" href=\"/css/general.css\" type=\"text/css\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"/css/template.css\" media=\"screen\">
    <!--[if IE 6]><link rel=\"stylesheet\" href=\"/css/template.ie6.css\" type=\"text/css\" media=\"screen\" /><![endif]-->
    <!--[if IE 7]><link rel=\"stylesheet\" href=\"/css/template.ie7.css\" type=\"text/css\" media=\"screen\" /><![endif]-->
    <script type=\"text/javascript\" src=\"/js/script.js\"></script>
    <script type=\"text/javascript\" src=\"/js/blink.js\"></script>
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
        return array (  35 => 15,  19 => 1,);
    }
}
