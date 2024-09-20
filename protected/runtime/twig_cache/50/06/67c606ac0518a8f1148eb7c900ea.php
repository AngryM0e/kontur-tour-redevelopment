<?php

/* views/layouts/admin/head.twig */
class __TwigTemplate_500667c606ac0518a8f1148eb7c900ea extends Twig_Template
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
<html xmlns=\"http://www.w3.org/1999/xhtml\">
<head>
<meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
<meta content=\"\" name=\"keywords\" />
<meta content=\"\" name=\"description\" />
    <title>Админ-панель сайта</title>
    <link rel=\"stylesheet\" type=\"text/css\" href=\"/css/admin/style.css\" />
    <script language=\"javascript\">
\t\tfunction add_input()
\t\t{
\t\tvar new_input=document.createElement('div');
\t\tnew_input.innerHTML='<br />Подпись <span class=\"required\">*</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input name=\"my_input'
\t\t\t+(document.getElementById('inputi').getElementsByTagName('div').length + 1)+'\" id=\"myid\" size=\"32\"><br />Изображение <span class=\"required\">*</span>&nbsp;<input type=\"file\" name=\"my_inputi'
\t\t\t+(document.getElementById('inputi').getElementsByTagName('div').length + 1)+'\" id=\"myid\">';
\t\tdocument.getElementById('inputi').appendChild(new_input);
\t\t}
\t\tfunction del_input()
\t\t{
\t\tdocument.getElementById('inputi').removeChild(document.getElementById('inputi').getElementsByTagName('div')[document.getElementById('inputi').getElementsByTagName('div').length-1])
\t\t}
\t</script>
\t<script language=\"javascript\">
\t\tfunction add_inputtov()
\t\t{
\t\tvar new_input=document.createElement('div');
\t\tnew_input.innerHTML='<br /><table><tr><td>Название функциональной особенности <span class=\"required\">*</span>&nbsp;</td><td>Описание функциональной особенности <span class=\"required\">*</span>&nbsp;</td></tr><tr><td style=\"vertical-align:top;\"><input name=\"my_inputf'
\t\t\t+(document.getElementById('inputi').getElementsByTagName('div').length + 1)+'\" id=\"myid\"  size=\"60\"></td><td><textarea cols=\"60\" rows=\"2\" name=\"my_inputd'
\t\t\t+(document.getElementById('inputi').getElementsByTagName('div').length + 1)+'\" value=\"\"></textarea></td></tr></table>';
\t\tdocument.getElementById('inputi').appendChild(new_input);
\t\t}
\t\tfunction del_inputtov()
\t\t{
\t\tdocument.getElementById('inputi').removeChild(document.getElementById('inputi').getElementsByTagName('div')[document.getElementById('inputi').getElementsByTagName('div').length-1])
\t\t}
\t</script>
    <!--<script src=\"/js_admin/browsers.js\" type=\"text/javascript\"></script>-->
</head>";
    }

    public function getTemplateName()
    {
        return "views/layouts/admin/head.twig";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,  155 => 111,  145 => 100,  137 => 111,  135 => 110,  124 => 101,  121 => 100,  98 => 79,  96 => 72,  58 => 22,  55 => 21,  48 => 16,  45 => 15,  42 => 14,  39 => 13,  34 => 10,  32 => 9,  23 => 2,  21 => 1,  28 => 2,);
    }
}
