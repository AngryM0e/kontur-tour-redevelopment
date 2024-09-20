<?php

/* /views/blackseaPages/_form.twig */
class __TwigTemplate_abf82211983ce9c9739135c50b138030 extends Twig_Template
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
        if (isset($context["this"])) { $_this_ = $context["this"]; } else { $_this_ = null; }
        $context["form"] = $this->getAttribute($_this_, "beginWidget", array(0 => "CActiveForm", 1 => array("id" => "pages-form", "enableAjaxValidation" => false)), "method");
        // line 8
        echo "
\t<p class=\"note\">Поля, отмеченные <span class=\"required\">*</span>, заполнять обязательно.</p>

        <div class=\"row\" style=\"float:right;margin-top:-20px;\">
            <label>Показывать в меню</label>
            ";
        // line 13
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        if (isset($context["model"])) { $_model_ = $context["model"]; } else { $_model_ = null; }
        if (isset($context["on"])) { $_on_ = $context["on"]; } else { $_on_ = null; }
        echo $this->getAttribute($_form_, "CheckBox", array(0 => $_model_, 1 => "disp", 2 => array("checked" => ((($this->getAttribute($_model_, "disp") == 1)) ? ($_on_) : ("")))), "method");
        // line 15
        echo "
        </div>  
\t";
        // line 18
        echo "
    <div class=\"row\">
        ";
        // line 20
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        if (isset($context["model"])) { $_model_ = $context["model"]; } else { $_model_ = null; }
        echo $this->getAttribute($_form_, "labelEx", array(0 => $_model_, 1 => "sort_num"), "method");
        echo "
        <br/>
        ";
        // line 22
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        if (isset($context["model"])) { $_model_ = $context["model"]; } else { $_model_ = null; }
        echo $this->getAttribute($_form_, "textField", array(0 => $_model_, 1 => "sort_num", 2 => array("size" => 10, "maxlength" => 10)), "method");
        echo "
        ";
        // line 23
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        if (isset($context["model"])) { $_model_ = $context["model"]; } else { $_model_ = null; }
        echo $this->getAttribute($_form_, "error", array(0 => $_model_, 1 => "sort_num"), "method");
        echo "
    </div>

    <div class=\"row\">
\t\t";
        // line 27
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        if (isset($context["model"])) { $_model_ = $context["model"]; } else { $_model_ = null; }
        echo $this->getAttribute($_form_, "labelEx", array(0 => $_model_, 1 => "url"), "method");
        echo "
                               <br/>
\t\t";
        // line 29
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        if (isset($context["model"])) { $_model_ = $context["model"]; } else { $_model_ = null; }
        echo $this->getAttribute($_form_, "textField", array(0 => $_model_, 1 => "url", 2 => array("size" => 60, "maxlength" => 255)), "method");
        echo "
\t\t";
        // line 30
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        if (isset($context["model"])) { $_model_ = $context["model"]; } else { $_model_ = null; }
        echo $this->getAttribute($_form_, "error", array(0 => $_model_, 1 => "url"), "method");
        echo "
\t</div>

\t<div class=\"row\">
\t\t";
        // line 34
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        if (isset($context["model"])) { $_model_ = $context["model"]; } else { $_model_ = null; }
        echo $this->getAttribute($_form_, "labelEx", array(0 => $_model_, 1 => "meta_title"), "method");
        echo "
                                <br/>
\t\t";
        // line 36
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        if (isset($context["model"])) { $_model_ = $context["model"]; } else { $_model_ = null; }
        echo $this->getAttribute($_form_, "textField", array(0 => $_model_, 1 => "meta_title", 2 => array("size" => 60, "maxlength" => 255)), "method");
        echo "
\t\t";
        // line 37
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        if (isset($context["model"])) { $_model_ = $context["model"]; } else { $_model_ = null; }
        echo $this->getAttribute($_form_, "error", array(0 => $_model_, 1 => "meta_title"), "method");
        echo "
\t</div>

\t<div class=\"row\">
\t\t";
        // line 41
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        if (isset($context["model"])) { $_model_ = $context["model"]; } else { $_model_ = null; }
        echo $this->getAttribute($_form_, "labelEx", array(0 => $_model_, 1 => "keywords"), "method");
        echo "
                                <br/>
\t\t";
        // line 43
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        if (isset($context["model"])) { $_model_ = $context["model"]; } else { $_model_ = null; }
        echo $this->getAttribute($_form_, "textField", array(0 => $_model_, 1 => "keywords", 2 => array("size" => 60)), "method");
        echo "
\t\t";
        // line 44
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        if (isset($context["model"])) { $_model_ = $context["model"]; } else { $_model_ = null; }
        echo $this->getAttribute($_form_, "error", array(0 => $_model_, 1 => "keywords"), "method");
        echo "
\t</div>

               <div class=\"row\">
\t\t";
        // line 48
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        if (isset($context["model"])) { $_model_ = $context["model"]; } else { $_model_ = null; }
        echo $this->getAttribute($_form_, "labelEx", array(0 => $_model_, 1 => "description"), "method");
        echo "
                                <br/>
\t\t";
        // line 50
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        if (isset($context["model"])) { $_model_ = $context["model"]; } else { $_model_ = null; }
        echo $this->getAttribute($_form_, "textArea", array(0 => $_model_, 1 => "description", 2 => array("cols" => 69)), "method");
        echo "
\t\t";
        // line 51
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        if (isset($context["model"])) { $_model_ = $context["model"]; } else { $_model_ = null; }
        echo $this->getAttribute($_form_, "error", array(0 => $_model_, 1 => "description"), "method");
        echo "
\t</div>
        
             <div class=\"row\">
\t\t";
        // line 55
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        if (isset($context["model"])) { $_model_ = $context["model"]; } else { $_model_ = null; }
        echo $this->getAttribute($_form_, "labelEx", array(0 => $_model_, 1 => "title"), "method");
        echo "
                                <br/>
\t\t";
        // line 57
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        if (isset($context["model"])) { $_model_ = $context["model"]; } else { $_model_ = null; }
        echo $this->getAttribute($_form_, "textField", array(0 => $_model_, 1 => "title", 2 => array("size" => 60)), "method");
        echo "
\t\t";
        // line 58
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        if (isset($context["model"])) { $_model_ = $context["model"]; } else { $_model_ = null; }
        echo $this->getAttribute($_form_, "error", array(0 => $_model_, 1 => "title"), "method");
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
        if (isset($context["this"])) { $_this_ = $context["this"]; } else { $_this_ = null; }
        if (isset($context["model"])) { $_model_ = $context["model"]; } else { $_model_ = null; }
        if (isset($context["App"])) { $_App_ = $context["App"]; } else { $_App_ = null; }
        $this->getAttribute($_this_, "widget", array(0 => "ext.editMe.widgets.ExtEditMe", 1 => array("model" => $_model_, "attribute" => "text", "height" => "250px", "width" => "100%", "toolbar" => "Full", "filebrowserImageBrowseUrl" => ($this->getAttribute($_App_, "baseUrl") . "/kcfinder/browse.php?type=images"), "filebrowserImageBrowseLinkUrl" => ($this->getAttribute($_App_, "baseUrl") . "/kcfinder/browse.php?type=images"), "filebrowserImageUploadUrl" => ($this->getAttribute($_App_, "baseUrl") . "/kcfinder/upload.php?type=images"), "filebrowserBrowseUrl" => ($this->getAttribute($_App_, "baseUrl") . "/kcfinder/browse.php?type=files"), "filebrowserUploadUrl" => ($this->getAttribute($_App_, "baseUrl") . "/kcfinder/upload.php?type=files"))), "method");
        // line 82
        echo "
\t<br />
    <div class=\"row\" style=\"\">
        ";
        // line 85
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        if (isset($context["model"])) { $_model_ = $context["model"]; } else { $_model_ = null; }
        echo $this->getAttribute($_form_, "labelEx", array(0 => $_model_, 1 => "disp_links"), "method");
        echo "
        ";
        // line 86
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        if (isset($context["model"])) { $_model_ = $context["model"]; } else { $_model_ = null; }
        if (isset($context["on"])) { $_on_ = $context["on"]; } else { $_on_ = null; }
        echo $this->getAttribute($_form_, "CheckBox", array(0 => $_model_, 1 => "disp_links", 2 => array("checked" => ((($this->getAttribute($_model_, "disp_links") == 1)) ? ($_on_) : ("")))), "method");
        // line 88
        echo "
    </div>

    <br/>
    ";
        // line 92
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        if (isset($context["model"])) { $_model_ = $context["model"]; } else { $_model_ = null; }
        echo $this->getAttribute($_form_, "labelEx", array(0 => $_model_, 1 => "links"), "method");
        echo "
    ";
        // line 93
        if (isset($context["this"])) { $_this_ = $context["this"]; } else { $_this_ = null; }
        if (isset($context["model"])) { $_model_ = $context["model"]; } else { $_model_ = null; }
        if (isset($context["App"])) { $_App_ = $context["App"]; } else { $_App_ = null; }
        $this->getAttribute($_this_, "widget", array(0 => "ext.editMe.widgets.ExtEditMe", 1 => array("model" => $_model_, "attribute" => "links", "height" => "250px", "width" => "100%", "toolbar" => "Full", "filebrowserImageBrowseUrl" => ($this->getAttribute($_App_, "baseUrl") . "/kcfinder/browse.php?type=images"), "filebrowserImageBrowseLinkUrl" => ($this->getAttribute($_App_, "baseUrl") . "/kcfinder/browse.php?type=images"), "filebrowserImageUploadUrl" => ($this->getAttribute($_App_, "baseUrl") . "/kcfinder/upload.php?type=images"), "filebrowserBrowseUrl" => ($this->getAttribute($_App_, "baseUrl") . "/kcfinder/browse.php?type=files"), "filebrowserUploadUrl" => ($this->getAttribute($_App_, "baseUrl") . "/kcfinder/upload.php?type=files"))), "method");
        // line 106
        echo "
    <br/>
\t<div class=\"row buttons\">
      ";
        // line 109
        if (isset($context["C"])) { $_C_ = $context["C"]; } else { $_C_ = null; }
        echo $this->getAttribute($this->getAttribute($_C_, "Html"), "submitButton", array(0 => "Сохранить"), "method");
        echo "
\t</div>

";
        // line 112
        if (isset($context["this"])) { $_this_ = $context["this"]; } else { $_this_ = null; }
        echo twig_escape_filter($this->env, ETwigViewRendererVoidFunction($this->getAttribute($_this_, "endWidget", array(), "method")), "html", null, true);
        echo "

</div><!-- form -->";
    }

    public function getTemplateName()
    {
        return "/views/blackseaPages/_form.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  239 => 112,  232 => 109,  227 => 106,  222 => 93,  216 => 92,  210 => 88,  205 => 86,  199 => 85,  194 => 82,  189 => 69,  183 => 65,  181 => 64,  179 => 63,  170 => 58,  164 => 57,  157 => 55,  148 => 51,  142 => 50,  135 => 48,  126 => 44,  120 => 43,  113 => 41,  104 => 37,  98 => 36,  91 => 34,  82 => 30,  76 => 29,  69 => 27,  60 => 23,  54 => 22,  47 => 20,  43 => 18,  39 => 15,  34 => 13,  27 => 8,  24 => 4,  19 => 1,);
    }
}
