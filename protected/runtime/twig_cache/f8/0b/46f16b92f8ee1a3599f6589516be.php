<?php

/* /views/admin/accesschange.twig */
class __TwigTemplate_f80b46f16b92f8ee1a3599f6589516be extends Twig_Template
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
        echo "<h3>Смена пароля</h3>
<p>Вам необходимо ввести ваш логин, старый и новый пароли:</p>

";
        // line 10
        echo "       
<form action='/admin/changeyourpassword' method='POST'>
   <table>
     <tr>
        <td><div class=\"text_login_form\">Логин:</div></td>
        <td><div><input style=\"width: 136px\" id=\"LoginForm_username\" value=\"\" type=\"text\" name=\"LoginForm[username]\"/></div></td>
        <td>&nbsp;</td>
     </tr>
     <tr>
         <td><div class=\"text_login_form\">Старый пароль:</div></td>
         <td><div><input type=\"text\" style=\"width: 136px\" id=\"LoginForm_passwordold\" value=\"\" type=\"oldpassword\" name=\"LoginForm[oldpassword]\"/></div></td>
        <td></td>
     </tr>
     <tr>
         <td><div class=\"text_login_form\">Новый пароль:</div></td>
         <td><div><input type=\"text\" style=\"width: 136px\" id=\"LoginForm_passwordnew\" value=\"\" type=\"newpassword\" name=\"LoginForm[newpassword]\"/></div></td>
        <td></td>
     </tr>
    </table>
";
        // line 29
        if (isset($context["C"])) { $_C_ = $context["C"]; } else { $_C_ = null; }
        echo $this->getAttribute($this->getAttribute($_C_, "Html"), "submitButton", array(0 => "Сменить"), "method");
        echo "
</form>        
";
    }

    public function getTemplateName()
    {
        return "/views/admin/accesschange.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 29,  36 => 10,  31 => 3,  28 => 2,);
    }
}
