<?php

/* /views/pages/_form.twig */
class __TwigTemplate_2c0af9b7303dd189c437dae9825f059a extends Twig_Template
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
            <label>Показывать в верхнем меню</label>
            ";
        // line 13
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        if (isset($context["model"])) { $_model_ = $context["model"]; } else { $_model_ = null; }
        if (isset($context["on"])) { $_on_ = $context["on"]; } else { $_on_ = null; }
        echo $this->getAttribute($_form_, "CheckBox", array(0 => $_model_, 1 => "disp", 2 => array("checked" => ((($this->getAttribute($_model_, "disp") == 1)) ? ($_on_) : ("")))), "method");
        // line 15
        echo "
        </div> 
        <div class=\"row\" style=\"float:right;\">
            <label>Показывать в левом меню</label>
            ";
        // line 19
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        if (isset($context["model"])) { $_model_ = $context["model"]; } else { $_model_ = null; }
        if (isset($context["on"])) { $_on_ = $context["on"]; } else { $_on_ = null; }
        echo $this->getAttribute($_form_, "CheckBox", array(0 => $_model_, 1 => "disp_left", 2 => array("checked" => ((($this->getAttribute($_model_, "disp_left") == 1)) ? ($_on_) : ("")))), "method");
        // line 21
        echo "
        </div>
\t";
        // line 24
        echo "
    <div class=\"row\">
        ";
        // line 26
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        if (isset($context["model"])) { $_model_ = $context["model"]; } else { $_model_ = null; }
        echo $this->getAttribute($_form_, "labelEx", array(0 => $_model_, 1 => "sort_num"), "method");
        echo "
        <br/>
        ";
        // line 28
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        if (isset($context["model"])) { $_model_ = $context["model"]; } else { $_model_ = null; }
        echo $this->getAttribute($_form_, "textField", array(0 => $_model_, 1 => "sort_num", 2 => array("size" => 10, "maxlength" => 10)), "method");
        echo "
        ";
        // line 29
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        if (isset($context["model"])) { $_model_ = $context["model"]; } else { $_model_ = null; }
        echo $this->getAttribute($_form_, "error", array(0 => $_model_, 1 => "sort_num"), "method");
        echo "
    </div>

    <div class=\"row\">
        ";
        // line 33
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        if (isset($context["model"])) { $_model_ = $context["model"]; } else { $_model_ = null; }
        echo $this->getAttribute($_form_, "labelEx", array(0 => $_model_, 1 => "leftm_sort"), "method");
        echo "
        <br/>
        ";
        // line 35
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        if (isset($context["model"])) { $_model_ = $context["model"]; } else { $_model_ = null; }
        echo $this->getAttribute($_form_, "textField", array(0 => $_model_, 1 => "leftm_sort", 2 => array("size" => 10, "maxlength" => 10)), "method");
        echo "
        ";
        // line 36
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        if (isset($context["model"])) { $_model_ = $context["model"]; } else { $_model_ = null; }
        echo $this->getAttribute($_form_, "error", array(0 => $_model_, 1 => "leftm_sort"), "method");
        echo "
    </div>

    <div class=\"row\">
\t\t";
        // line 40
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        if (isset($context["model"])) { $_model_ = $context["model"]; } else { $_model_ = null; }
        echo $this->getAttribute($_form_, "labelEx", array(0 => $_model_, 1 => "url"), "method");
        echo "
                               <br/>
\t\t";
        // line 42
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        if (isset($context["model"])) { $_model_ = $context["model"]; } else { $_model_ = null; }
        echo $this->getAttribute($_form_, "textField", array(0 => $_model_, 1 => "url", 2 => array("size" => 60, "maxlength" => 255)), "method");
        echo "
\t\t";
        // line 43
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        if (isset($context["model"])) { $_model_ = $context["model"]; } else { $_model_ = null; }
        echo $this->getAttribute($_form_, "error", array(0 => $_model_, 1 => "url"), "method");
        echo "
\t</div>

\t<div class=\"row\">
\t\t";
        // line 47
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        if (isset($context["model"])) { $_model_ = $context["model"]; } else { $_model_ = null; }
        echo $this->getAttribute($_form_, "labelEx", array(0 => $_model_, 1 => "meta_title"), "method");
        echo "
                                <br/>
\t\t";
        // line 49
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        if (isset($context["model"])) { $_model_ = $context["model"]; } else { $_model_ = null; }
        echo $this->getAttribute($_form_, "textField", array(0 => $_model_, 1 => "meta_title", 2 => array("size" => 60, "maxlength" => 255)), "method");
        echo "
\t\t";
        // line 50
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        if (isset($context["model"])) { $_model_ = $context["model"]; } else { $_model_ = null; }
        echo $this->getAttribute($_form_, "error", array(0 => $_model_, 1 => "meta_title"), "method");
        echo "
\t</div>

\t<div class=\"row\">
\t\t";
        // line 54
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        if (isset($context["model"])) { $_model_ = $context["model"]; } else { $_model_ = null; }
        echo $this->getAttribute($_form_, "labelEx", array(0 => $_model_, 1 => "keywords"), "method");
        echo "
                                <br/>
\t\t";
        // line 56
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        if (isset($context["model"])) { $_model_ = $context["model"]; } else { $_model_ = null; }
        echo $this->getAttribute($_form_, "textField", array(0 => $_model_, 1 => "keywords", 2 => array("size" => 60)), "method");
        echo "
\t\t";
        // line 57
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        if (isset($context["model"])) { $_model_ = $context["model"]; } else { $_model_ = null; }
        echo $this->getAttribute($_form_, "error", array(0 => $_model_, 1 => "keywords"), "method");
        echo "
\t</div>

               <div class=\"row\">
\t\t";
        // line 61
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        if (isset($context["model"])) { $_model_ = $context["model"]; } else { $_model_ = null; }
        echo $this->getAttribute($_form_, "labelEx", array(0 => $_model_, 1 => "description"), "method");
        echo "
                                <br/>
\t\t";
        // line 63
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        if (isset($context["model"])) { $_model_ = $context["model"]; } else { $_model_ = null; }
        echo $this->getAttribute($_form_, "textArea", array(0 => $_model_, 1 => "description", 2 => array("cols" => 82)), "method");
        echo "
\t\t";
        // line 64
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        if (isset($context["model"])) { $_model_ = $context["model"]; } else { $_model_ = null; }
        echo $this->getAttribute($_form_, "error", array(0 => $_model_, 1 => "description"), "method");
        echo "
\t</div>
        
             <div class=\"row\">
\t\t";
        // line 68
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        if (isset($context["model"])) { $_model_ = $context["model"]; } else { $_model_ = null; }
        echo $this->getAttribute($_form_, "labelEx", array(0 => $_model_, 1 => "title"), "method");
        echo "
                                <br/>
\t\t";
        // line 70
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        if (isset($context["model"])) { $_model_ = $context["model"]; } else { $_model_ = null; }
        echo $this->getAttribute($_form_, "textField", array(0 => $_model_, 1 => "title", 2 => array("size" => 60)), "method");
        echo "
\t\t";
        // line 71
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        if (isset($context["model"])) { $_model_ = $context["model"]; } else { $_model_ = null; }
        echo $this->getAttribute($_form_, "error", array(0 => $_model_, 1 => "title"), "method");
        echo "
\t</div>
        
\t<div class=\"row\">
\t\t";
        // line 76
        echo "\t\t";
        // line 77
        echo "\t\t";
        // line 78
        echo "\t</div>

    <br />
    <p class=\"note\">Основной текст <span class=\"required\">*</span></p>
     ";
        // line 82
        if (isset($context["this"])) { $_this_ = $context["this"]; } else { $_this_ = null; }
        if (isset($context["model"])) { $_model_ = $context["model"]; } else { $_model_ = null; }
        if (isset($context["App"])) { $_App_ = $context["App"]; } else { $_App_ = null; }
        $this->getAttribute($_this_, "widget", array(0 => "ext.editMe.widgets.ExtEditMe", 1 => array("model" => $_model_, "attribute" => "text", "height" => "400px", "width" => "100%", "toolbar" => "Full", "filebrowserImageBrowseUrl" => ($this->getAttribute($_App_, "baseUrl") . "/kcfinder/browse.php?type=images"), "filebrowserImageBrowseLinkUrl" => ($this->getAttribute($_App_, "baseUrl") . "/kcfinder/browse.php?type=images"), "filebrowserImageUploadUrl" => ($this->getAttribute($_App_, "baseUrl") . "/kcfinder/upload.php?type=images"), "filebrowserBrowseUrl" => ($this->getAttribute($_App_, "baseUrl") . "/kcfinder/browse.php?type=files"), "filebrowserUploadUrl" => ($this->getAttribute($_App_, "baseUrl") . "/kcfinder/upload.php?type=files"))), "method");
        // line 95
        echo "
\t<br />
\t<div class=\"row buttons\">
      ";
        // line 98
        if (isset($context["C"])) { $_C_ = $context["C"]; } else { $_C_ = null; }
        echo $this->getAttribute($this->getAttribute($_C_, "Html"), "submitButton", array(0 => "Сохранить"), "method");
        echo "
\t</div>

";
        // line 101
        if (isset($context["this"])) { $_this_ = $context["this"]; } else { $_this_ = null; }
        echo twig_escape_filter($this->env, ETwigViewRendererVoidFunction($this->getAttribute($_this_, "endWidget", array(), "method")), "html", null, true);
        echo "

</div><!-- form -->";
    }

    public function getTemplateName()
    {
        return "/views/pages/_form.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  239 => 101,  232 => 98,  227 => 95,  222 => 82,  216 => 78,  214 => 77,  212 => 76,  203 => 71,  197 => 70,  190 => 68,  181 => 64,  175 => 63,  168 => 61,  159 => 57,  153 => 56,  146 => 54,  137 => 50,  131 => 49,  124 => 47,  115 => 43,  109 => 42,  102 => 40,  93 => 36,  87 => 35,  80 => 33,  71 => 29,  65 => 28,  58 => 26,  54 => 24,  50 => 21,  45 => 19,  39 => 15,  34 => 13,  27 => 8,  24 => 4,  19 => 1,);
    }
}
