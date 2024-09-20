<?php

/* /views/admin/login.twig */
class __TwigTemplate_56189c1aa58689c11689c8f095799ee4 extends Twig_Template
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
<meta content=\"Вход в админ-панель\" name=\"keywords\" />
<meta content=\"Вход в админ-панель\" name=\"description\" />
    <title>Вход в админ-панель</title>
    <link rel=\"stylesheet\" type=\"text/css\" href=\"/css/admin/login.css\" />
    <script src=\"/js/browsers.js\" type=\"text/javascript\"></script>
</head>
<body>
        <div class=\"container\">
                <div class=\"login_form_wrapper\">
                    ";
        // line 14
        if (isset($context["this"])) { $_this_ = $context["this"]; } else { $_this_ = null; }
        $context["form"] = $this->getAttribute($_this_, "beginWidget", array(0 => "CActiveForm", 1 => array("id" => "login_form", "enableAjaxValidation" => false, "htmlOptions" => array("action" => "/admin"))), "method");
        // line 19
        echo "                                <h1>Вход в админ-панель</h1>
                                <h2>администрирование сайта</h2>
                                <input name=\"LoginForm[username]\" type=\"text\" value=\"Логин...\" onblur=\"if(this.value=='') this.value='Логин...';\" onfocus=\"if(this.value=='Логин...') this.value=''\" />
                                <input name=\"LoginForm[password]\" type=\"password\" value=\"Пароль...\" onblur=\"if(this.value=='') this.value='Пароль...';\" onfocus=\"if(this.value=='Пароль...') this.value=''\" />
                                <p><input type=\"checkbox\" id=\"LoginForm_rememberMe\" value=\"1\" name=\"LoginForm[rememberMe]\" /> запомнить меня</p>
                                <input type=\"submit\" value=\"\" name=\"yt0\" />
                     ";
        // line 25
        if (isset($context["this"])) { $_this_ = $context["this"]; } else { $_this_ = null; }
        echo twig_escape_filter($this->env, ETwigViewRendererVoidFunction($this->getAttribute($_this_, "endWidget", array(), "method")), "html", null, true);
        echo "
                </div>
        </div>
</body>
</html>";
    }

    public function getTemplateName()
    {
        return "/views/admin/login.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 25,  37 => 19,  34 => 14,  19 => 1,);
    }
}
