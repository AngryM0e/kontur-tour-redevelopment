<?php

/* views/layouts/admin/main.twig */
class __TwigTemplate_354641308253d580480c7e34be0fe09f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'content' => array($this, 'block_content'),
            'scripts' => array($this, 'block_scripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->env->loadTemplate("views/layouts/admin/head.twig")->display($context);
        // line 2
        echo "
<body>
    
    <!-- site container -->
    <div class=\"container\">
        
        <!-- Header -->
            ";
        // line 9
        $this->env->loadTemplate("views/layouts/admin/header.twig")->display($context);
        // line 10
        echo "        <!-- end Header -->
        
        <!-- Menu -->
            ";
        // line 13
        if (($this->getAttribute($this->getAttribute((isset($context["App"]) ? $context["App"] : null), "user"), "id") == 1)) {
            // line 14
            echo "            \t";
            $this->env->loadTemplate("views/layouts/admin/menu.twig")->display($context);
            // line 15
            echo "            ";
        }
        // line 16
        echo "        <!-- end Menu -->
        
        <!-- Content -->
        <div class=\"content\">
            <!-- Categories -->
            ";
        // line 21
        if (($this->getAttribute($this->getAttribute((isset($context["App"]) ? $context["App"] : null), "request"), "requestUri") == "/admin/main")) {
            // line 22
            echo "            <div id=\"categories\">
                <a class=\"block\" href=\"/admin/static_pages\">
                    <span class=\"img_box\"><!--<img src=\"\" alt=\"\" />--></span>
                    <span class=\"text\">
                        <b>Основные страницы</b>
                        +, -, редактирование
                    </span>
                </a>
                <a class=\"block\" href=\"/admin/blacksea_pages\">
                    <span class=\"img_box\"><!--<img src=\"\" alt=\"\" />--></span>
                    <span class=\"text\">
                        <b>Черное море</b>
                        +, -, редактирование
                    </span>
                </a>
                <a class=\"block\" href=\"/admin/azovsea_pages\">
                    <span class=\"img_box\"><!--<img src=\"\" alt=\"\" />--></span>
                    <span class=\"text\">
                        <b>Азовское море</b>
                        +, -, редактирование
                    </span>
                </a>
                <a class=\"block\" href=\"/admin/additional_pages\">
                    <span class=\"img_box\"><!--<img src=\"\" alt=\"\" />--></span>
                    <span class=\"text\">
                        <b>Дополнительные страницы</b>
                        +, -, редактирование
                    </span>
                </a>
                <a class=\"block\" href=\"/admin/dislinks\">
                    <span class=\"img_box\"><!--<img src=\"\" alt=\"\" />--></span>
                    <span class=\"text\">
                        <b>Выключить все ссылки</b>
                        +, -, редактирование
                    </span>
                </a>
                ";
            // line 72
            echo "                ";
            // line 79
            echo "                <div class=\"clear\"></div>
            </div>
            <!-- end Categories -->
            
            <!-- info block -->
            <div class=\"info_block\">
                <div class=\"top_line\">
                    <h2>Информация</h2>
                    <!--<a class=\"help_link\" href=\"#\">Помощь</a>-->
                    <div class=\"clear\"></div>
                </div>
                <div class=\"wrapper\">
                    <div class=\"text_box\">
                        <span>Добро пожаловать в админ-панель сайта.<br />
                        Слева Вы видите категории, которые помогут Вам в администрировании и контроле за сайтом. <br />
                        К Вашим услугам редактирование страниц сайта; добавление, удаление и редактирование новостей; добавление товаров.
                        </span>
                    </div>
                </div>
            </div>
            ";
        }
        // line 100
        echo "            ";
        $this->displayBlock('content', $context, $blocks);
        // line 101
        echo "
            <!-- end info block -->
            <div class=\"clear\"></div>
        </div>
        <!-- end Content -->
        
    </div>
    <!-- end site container -->
    
    ";
        // line 110
        $this->env->loadTemplate("views/layouts/admin/footer.twig")->display($context);
        // line 111
        $this->displayBlock('scripts', $context, $blocks);
        echo "    
</body>
</html>
";
    }

    // line 100
    public function block_content($context, array $blocks = array())
    {
        if (($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "id") == "pl")) {
            echo (isset($context["content"]) ? $context["content"] : null);
        }
    }

    // line 111
    public function block_scripts($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "views/layouts/admin/main.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  151 => 111,  143 => 100,  135 => 111,  133 => 110,  122 => 101,  119 => 100,  96 => 79,  94 => 72,  56 => 22,  54 => 21,  47 => 16,  44 => 15,  41 => 14,  39 => 13,  34 => 10,  32 => 9,  23 => 2,  21 => 1,);
    }
}
