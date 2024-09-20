<?php

/* /views/azovseaPages/_form.twig */
class __TwigTemplate_e96461f6581b83b439c6d5e1a25ddeb0 extends Twig_Template
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
        echo "<div class=\"form\">
      

";
        // line 4
        $context["form"] = $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "beginWidget", array(0 => "CActiveForm", 1 => array("id" => "pages-form", "enableAjaxValidation" => false)), "method");
        // line 8
        echo "
\t<p class=\"note\">Поля, отмеченные <span class=\"required\">*</span>, заполнять обязательно.</p>

        <div class=\"row\" style=\"float:right;margin-top:-20px;\">
            <label>Показывать в меню</label>
            ";
        // line 13
        echo $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "CheckBox", array(0 => (isset($context["model"]) ? $context["model"] : null), 1 => "disp", 2 => array("checked" => ((($this->getAttribute((isset($context["model"]) ? $context["model"] : null), "disp") == 1)) ? ((isset($context["on"]) ? $context["on"] : null)) : ("")))), "method");
        // line 15
        echo "
        </div>  
\t";
        // line 18
        echo "
    <div class=\"row\">
        ";
        // line 20
        echo $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "labelEx", array(0 => (isset($context["model"]) ? $context["model"] : null), 1 => "sort_num"), "method");
        echo "
        <br/>
        ";
        // line 22
        echo $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "textField", array(0 => (isset($context["model"]) ? $context["model"] : null), 1 => "sort_num", 2 => array("size" => 10, "maxlength" => 10)), "method");
        echo "
        ";
        // line 23
        echo $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "error", array(0 => (isset($context["model"]) ? $context["model"] : null), 1 => "sort_num"), "method");
        echo "
    </div>

    <div class=\"row\">
\t\t";
        // line 27
        echo $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "labelEx", array(0 => (isset($context["model"]) ? $context["model"] : null), 1 => "url"), "method");
        echo "
                               <br/>
\t\t";
        // line 29
        echo $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "textField", array(0 => (isset($context["model"]) ? $context["model"] : null), 1 => "url", 2 => array("size" => 60, "maxlength" => 255)), "method");
        echo "
\t\t";
        // line 30
        echo $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "error", array(0 => (isset($context["model"]) ? $context["model"] : null), 1 => "url"), "method");
        echo "
\t</div>

\t<div class=\"row\">
\t\t";
        // line 34
        echo $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "labelEx", array(0 => (isset($context["model"]) ? $context["model"] : null), 1 => "meta_title"), "method");
        echo "
                                <br/>
\t\t";
        // line 36
        echo $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "textField", array(0 => (isset($context["model"]) ? $context["model"] : null), 1 => "meta_title", 2 => array("size" => 60, "maxlength" => 255)), "method");
        echo "
\t\t";
        // line 37
        echo $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "error", array(0 => (isset($context["model"]) ? $context["model"] : null), 1 => "meta_title"), "method");
        echo "
\t</div>

\t<div class=\"row\">
\t\t";
        // line 41
        echo $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "labelEx", array(0 => (isset($context["model"]) ? $context["model"] : null), 1 => "keywords"), "method");
        echo "
                                <br/>
\t\t";
        // line 43
        echo $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "textField", array(0 => (isset($context["model"]) ? $context["model"] : null), 1 => "keywords", 2 => array("size" => 60)), "method");
        echo "
\t\t";
        // line 44
        echo $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "error", array(0 => (isset($context["model"]) ? $context["model"] : null), 1 => "keywords"), "method");
        echo "
\t</div>

               <div class=\"row\">
\t\t";
        // line 48
        echo $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "labelEx", array(0 => (isset($context["model"]) ? $context["model"] : null), 1 => "description"), "method");
        echo "
                                <br/>
\t\t";
        // line 50
        echo $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "textArea", array(0 => (isset($context["model"]) ? $context["model"] : null), 1 => "description", 2 => array("cols" => 69)), "method");
        echo "
\t\t";
        // line 51
        echo $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "error", array(0 => (isset($context["model"]) ? $context["model"] : null), 1 => "description"), "method");
        echo "
\t</div>
        
             <div class=\"row\">
\t\t";
        // line 55
        echo $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "labelEx", array(0 => (isset($context["model"]) ? $context["model"] : null), 1 => "title"), "method");
        echo "
                                <br/>
\t\t";
        // line 57
        echo $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "textField", array(0 => (isset($context["model"]) ? $context["model"] : null), 1 => "title", 2 => array("size" => 60)), "method");
        echo "
\t\t";
        // line 58
        echo $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "error", array(0 => (isset($context["model"]) ? $context["model"] : null), 1 => "title"), "method");
        echo "
\t</div>
        
\t<div class=\"row\">
\t\t";
        // line 63
        echo "\t\t";
        // line 64
        echo "\t\t";
        // line 65
        echo "\t</div>

    <br />
    <p class=\"note\">Основной текст <span class=\"required\">*</span></p>
     ";
        // line 69
        $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "widget", array(0 => "ext.editMe.widgets.ExtEditMe", 1 => array("model" => (isset($context["model"]) ? $context["model"] : null), "attribute" => "text", "height" => "250px", "width" => "100%", "toolbar" => "Full", "filebrowserImageBrowseUrl" => ($this->getAttribute((isset($context["App"]) ? $context["App"] : null), "baseUrl") . "/kcfinder/browse.php?type=images"), "filebrowserImageBrowseLinkUrl" => ($this->getAttribute((isset($context["App"]) ? $context["App"] : null), "baseUrl") . "/kcfinder/browse.php?type=images"), "filebrowserImageUploadUrl" => ($this->getAttribute((isset($context["App"]) ? $context["App"] : null), "baseUrl") . "/kcfinder/upload.php?type=images"))), "method");
        // line 80
        echo "
\t<br />
    <div class=\"row\" style=\"\">
        ";
        // line 83
        echo $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "labelEx", array(0 => (isset($context["model"]) ? $context["model"] : null), 1 => "disp_links"), "method");
        echo "
        ";
        // line 84
        echo $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "CheckBox", array(0 => (isset($context["model"]) ? $context["model"] : null), 1 => "disp_links", 2 => array("checked" => ((($this->getAttribute((isset($context["model"]) ? $context["model"] : null), "disp_links") == 1)) ? ((isset($context["on"]) ? $context["on"] : null)) : ("")))), "method");
        // line 86
        echo "
    </div>

    <br/>
    ";
        // line 90
        echo $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "labelEx", array(0 => (isset($context["model"]) ? $context["model"] : null), 1 => "links"), "method");
        echo "
    ";
        // line 91
        $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "widget", array(0 => "ext.editMe.widgets.ExtEditMe", 1 => array("model" => (isset($context["model"]) ? $context["model"] : null), "attribute" => "links", "height" => "250px", "width" => "100%", "toolbar" => "Full", "filebrowserImageBrowseUrl" => ($this->getAttribute((isset($context["App"]) ? $context["App"] : null), "baseUrl") . "/kcfinder/browse.php?type=images"), "filebrowserImageBrowseLinkUrl" => ($this->getAttribute((isset($context["App"]) ? $context["App"] : null), "baseUrl") . "/kcfinder/browse.php?type=images"), "filebrowserImageUploadUrl" => ($this->getAttribute((isset($context["App"]) ? $context["App"] : null), "baseUrl") . "/kcfinder/upload.php?type=images"))), "method");
        // line 102
        echo "
    <br/>
    <div class=\"row buttons\">
      ";
        // line 105
        echo $this->getAttribute($this->getAttribute((isset($context["C"]) ? $context["C"] : null), "Html"), "submitButton", array(0 => "Сохранить"), "method");
        echo "
\t</div>

";
        // line 108
        echo twig_escape_filter($this->env, ETwigViewRendererVoidFunction($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "endWidget", array(), "method")), "html", null, true);
        echo "

</div><!-- form -->";
    }

    public function getTemplateName()
    {
        return "/views/azovseaPages/_form.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  185 => 108,  179 => 105,  174 => 102,  172 => 91,  168 => 90,  162 => 86,  160 => 84,  156 => 83,  151 => 80,  149 => 69,  143 => 65,  141 => 64,  139 => 63,  132 => 58,  128 => 57,  123 => 55,  116 => 51,  112 => 50,  107 => 48,  100 => 44,  96 => 43,  91 => 41,  84 => 37,  80 => 36,  75 => 34,  68 => 30,  64 => 29,  59 => 27,  52 => 23,  48 => 22,  43 => 20,  39 => 18,  35 => 15,  33 => 13,  26 => 8,  24 => 4,  19 => 1,);
    }
}
