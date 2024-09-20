<?php

/* views/layouts/sidebar.twig */
class __TwigTemplate_9a8cd49b8c9f099d65d40a72faf03e2a extends Twig_Template
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
        echo "<div class=\"art-content-layout\">
<div class=\"art-content-layout-row\">
<div class=\"art-layout-cell art-sidebar1\">
";
        // line 4
        if (isset($context["url"])) { $_url_ = $context["url"]; } else { $_url_ = null; }
        if (($_url_ == "/")) {
            // line 5
            echo "<div class=\"art-block\">
    <div class=\"art-block-tl\"></div>
    <div class=\"art-block-tr\"></div>
    <div class=\"art-block-bl\"></div>
    <div class=\"art-block-br\"></div>
    <div class=\"art-block-tc\"></div>
    <div class=\"art-block-bc\"></div>
    <div class=\"art-block-cl\"></div>
    <div class=\"art-block-cr\"></div>
    <div class=\"art-block-cc\"></div>
    <div class=\"art-block-body\">
        <div class=\"art-blockheader\">
            <div class=\"l\"></div>
            <div class=\"r\"></div>
            <div class=\"t\">
                Табло рейсов
            </div>
        </div>
        <div class=\"art-blockcontent\">
            <div class=\"art-blockcontent-body\">
                <!-- block-content -->
                <!-- /mod_php version 1.0.0.Alpha1-J1.5 (c) www.fijiwebdesign.com -->
                <a href=\"http://www.svo.aero/timetable/today/\">Шереметьево</a>
                <br>
                <a href=\"http://domodedovo.ru/ru/main/airindicator/flightnew/\">Домодедово</a><br>
                <a href=\"http://vnukovo.ru/rus/for-passengers/board/#.T0yPrcjiEe4\">Внуково</a>
                <!-- mod_php version 1.0.0.Alpha1-J1.5/ -->
                <!-- /block-content -->
                <div class=\"cleared\"></div>
            </div>
        </div>
        <div class=\"cleared\"></div>
    </div>
</div>
<div class=\"art-block\">
    <div class=\"art-block-tl\"></div>
    <div class=\"art-block-tr\"></div>
    <div class=\"art-block-bl\"></div>
    <div class=\"art-block-br\"></div>
    <div class=\"art-block-tc\"></div>
    <div class=\"art-block-bc\"></div>
    <div class=\"art-block-cl\"></div>
    <div class=\"art-block-cr\"></div>
    <div class=\"art-block-cc\"></div>
    <div class=\"art-block-body\">
        <div class=\"art-blockheader\">
            <div class=\"l\"></div>
            <div class=\"r\"></div>
            <div class=\"t\">
                Куда поехать?
            </div>
        </div>
        <div class=\"art-blockcontent\">
            <div class=\"art-blockcontent-body\">
                <!-- block-content -->
                <!-- /mod_php version 1.0.0.Alpha1-J1.5 (c) www.fijiwebdesign.com -->
                <a rel=\"rokbox[500 350]\" href=\"/cities\">Страны</a>
                <!-- mod_php version 1.0.0.Alpha1-J1.5/ -->
                <!-- /block-content -->
                <div class=\"cleared\"></div>
            </div>
        </div>
        <div class=\"cleared\"></div>
    </div>
</div>
";
        }
        // line 71
        echo "<div class=\"art-block\">
    <div class=\"art-block-tl\"></div>
    <div class=\"art-block-tr\"></div>
    <div class=\"art-block-bl\"></div>
    <div class=\"art-block-br\"></div>
    <div class=\"art-block-tc\"></div>
    <div class=\"art-block-bc\"></div>
    <div class=\"art-block-cl\"></div>
    <div class=\"art-block-cr\"></div>
    <div class=\"art-block-cc\"></div>
    <div class=\"art-block-body\">
        <div class=\"art-blockheader\">
            <div class=\"l\"></div>
            <div class=\"r\"></div>
            <div class=\"t\">
                Турагентствам
            </div>
        </div>
        <div class=\"art-blockcontent\">
            <div class=\"art-blockcontent-body\">
                <!-- block-content -->
                <ul class=\"menu\">
                    ";
        // line 93
        if (isset($context["this"])) { $_this_ = $context["this"]; } else { $_this_ = null; }
        $this->getAttribute($_this_, "Widget", array(0 => "application.widgets.AgencyMenuWidget"), "method");
        // line 94
        echo "                </ul>
                <!-- /block-content -->
                <div class=\"cleared\"></div>
            </div>
        </div>
        <div class=\"cleared\"></div>
    </div>
</div>
";
        // line 102
        if (isset($context["url"])) { $_url_ = $context["url"]; } else { $_url_ = null; }
        if (($_url_ != "/")) {
            // line 103
            echo "<div class=\"art-block\">
    <div class=\"art-block-tl\"></div>
    <div class=\"art-block-tr\"></div>
    <div class=\"art-block-bl\"></div>
    <div class=\"art-block-br\"></div>
    <div class=\"art-block-tc\"></div>
    <div class=\"art-block-bc\"></div>
    <div class=\"art-block-cl\"></div>
    <div class=\"art-block-cr\"></div>
    <div class=\"art-block-cc\"></div>
    <div class=\"art-block-body\">
        <div class=\"art-blockheader\">
            <div class=\"l\"></div>
            <div class=\"r\"></div>
            <div class=\"t\">
                Черное море</div>
        </div>
        <div class=\"art-blockcontent\">
            <div class=\"art-blockcontent-body\">
                <!-- block-content -->
                ";
            // line 125
            echo "                        <ul>
                            ";
            // line 126
            if (isset($context["this"])) { $_this_ = $context["this"]; } else { $_this_ = null; }
            $this->getAttribute($_this_, "Widget", array(0 => "application.widgets.BlackseaMenuWidget"), "method");
            // line 127
            echo "                        </ul>
                    ";
            // line 130
            echo "                <!-- /block-content -->
                <div class=\"cleared\"></div>
            </div>
        </div>
        <div class=\"cleared\"></div>
    </div>
</div>

<div class=\"art-block\">
    <div class=\"art-block-tl\"></div>
    <div class=\"art-block-tr\"></div>
    <div class=\"art-block-bl\"></div>
    <div class=\"art-block-br\"></div>
    <div class=\"art-block-tc\"></div>
    <div class=\"art-block-bc\"></div>
    <div class=\"art-block-cl\"></div>
    <div class=\"art-block-cr\"></div>
    <div class=\"art-block-cc\"></div>
    <div class=\"art-block-body\">
        <div class=\"art-blockheader\">
            <div class=\"l\"></div>
            <div class=\"r\"></div>
            <div class=\"t\">
                Азовское море</div>
        </div>
        <div class=\"art-blockcontent\">
            <div class=\"art-blockcontent-body\">
                <!-- block-content -->
";
            // line 160
            echo "                        <ul>
                            ";
            // line 161
            if (isset($context["this"])) { $_this_ = $context["this"]; } else { $_this_ = null; }
            $this->getAttribute($_this_, "Widget", array(0 => "application.widgets.AzovseaMenuWidget"), "method");
            // line 162
            echo "                        </ul>
";
            // line 165
            echo "                <!-- /block-content -->

                <div class=\"cleared\"></div>
            </div>
        </div>
        <div class=\"cleared\"></div>
    </div>
</div>
<div class=\"art-block\">
    <div class=\"art-block-tl\"></div>
    <div class=\"art-block-tr\"></div>
    <div class=\"art-block-bl\"></div>
    <div class=\"art-block-br\"></div>
    <div class=\"art-block-tc\"></div>
    <div class=\"art-block-bc\"></div>
    <div class=\"art-block-cl\"></div>
    <div class=\"art-block-cr\"></div>
    <div class=\"art-block-cc\"></div>
    <div class=\"art-block-body\">
        <div class=\"art-blockcontent\">
            <div class=\"art-blockcontent-body\">
                <!-- block-content -->
                <!-- /mod_php version 1.0.0.Alpha1-J1.5 (c) www.fijiwebdesign.com -->
                <table cellspacing=\"0\" cellpadding=\"0\" border=\"0\" style=\"line-height:10px;\">
                    <tbody>
                    <tr>
                        <td style=\"padding:0;\" colspan=\"2\">
                            <a target=\"_blank\" href=\"http://www.24log.ru\"><img border=\"0\" style=\"margin:0;padding:0;\" title=\"Счетчик посетителей сайта\" alt=\"счетчик посетителей сайта\" src=\"http://counter.24log.ru/count3_121513_110_1-0-18_5.pcx\"></a>
                        </td>
                    </tr>
                    </tbody>
                </table>
                <!-- mod_php version 1.0.0.Alpha1-J1.5/ -->
                <!-- /block-content -->
                <div class=\"cleared\"></div>
            </div>
        </div>
        <div class=\"cleared\"></div>
    </div>
</div>
";
        }
        // line 206
        if (isset($context["url"])) { $_url_ = $context["url"]; } else { $_url_ = null; }
        if (($_url_ == "/")) {
            // line 207
            echo "<div class=\"art-block\">
    <div class=\"art-block-tl\"></div>
    <div class=\"art-block-tr\"></div>
    <div class=\"art-block-bl\"></div>
    <div class=\"art-block-br\"></div>
    <div class=\"art-block-tc\"></div>
    <div class=\"art-block-bc\"></div>
    <div class=\"art-block-cl\"></div>
    <div class=\"art-block-cr\"></div>
    <div class=\"art-block-cc\"></div>
    <div class=\"art-block-body\">
        <div class=\"art-blockheader\">
            <div class=\"l\"></div>
            <div class=\"r\"></div>
            <div class=\"t\">
                Погода
            </div>
        </div>
        <div class=\"art-blockcontent\">
            <div class=\"art-blockcontent-body\">
                <!-- block-content -->
                <!-- /mod_php version 1.0.0.Alpha1-J1.5 (c) www.fijiwebdesign.com -->
                <script>URL='http://img.gismeteo.ru/flash/mtown.swf?cset=6&tnumber=4&city0=37004&city1=99423&city2=33976&city3=33975';w='160';h='95';value='cset=6&tnumber=4&city0=37004&city1=99423&city2=33976&city3=33975';lang='ru';</script><script src='http://informer.gismeteo.ru/flash/fcode.js'></script>
                
                <!--<script>URL = 'http://img.gismeteo.ru/flash/mtown.swf?cset=6&tnumber=4&city0=37004&city1=99423&city2=33976&city3=33975';
                    w = '160';
                    h = '95';
                    value = 'cset=6&tnumber=4&city0=37004&city1=99423&city2=33976&city3=33975';
                    lang = 'ru';</script>
                <script src=\"js/fcode.js\"></script>
                <object classid=\"clsid:D27CDB6E-AE6D-11cf-96B8-444553540000\"
                        codebase=\"http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,0,0\"
                        width=\"160\" height=\"95\">
                    <param name=\"movie\"
                           value=\"http://img.gismeteo.ru/flash/mtown.swf?cset=6&amp;tnumber=4&amp;city0=37004&amp;city1=99423&amp;city2=33976&amp;city3=33975&amp;lang=ru\">
                    <param name=\"menu\" value=\"false\">
                    <param name=\"FlashVars\"
                           value=\"city=cset=6&amp;tnumber=4&amp;city0=37004&amp;city1=99423&amp;city2=33976&amp;city3=33975&amp;lang=ru\">
                    <param name=\"quality\" value=\"high\">
                    <param name=\"menu\" value=\"false\">
                    <param name=\"bgcolor\" value=\"#FFFFFF\">
                    <embed src=\"js/mtown.swf\" menu=\"false\" quality=\"high\" bgcolor=\"#FFFFFF\"
                           type=\"application/x-shockwave-flash\"
                           pluginspage=\"http://www.macromedia.com/go/getflashplayer\" width=\"160\" height=\"95\">
                </object>
                 mod_php version 1.0.0.Alpha1-J1.5/ -->
                <!-- /block-content -->
                <div class=\"cleared\"></div>
            </div>
        </div>
        <div class=\"cleared\"></div>
    </div>
</div>
<div class=\"art-block\">
    <div class=\"art-block-tl\"></div>
    <div class=\"art-block-tr\"></div>
    <div class=\"art-block-bl\"></div>
    <div class=\"art-block-br\"></div>
    <div class=\"art-block-tc\"></div>
    <div class=\"art-block-bc\"></div>
    <div class=\"art-block-cl\"></div>
    <div class=\"art-block-cr\"></div>
    <div class=\"art-block-cc\"></div>
    <div class=\"art-block-body\">
        <div class=\"art-blockheader\">
            <div class=\"l\"></div>
            <div class=\"r\"></div>
            <div class=\"t\">
                Курс валют
            </div>
        </div>
        <div class=\"art-blockcontent\">
            <div class=\"art-blockcontent-body\" style=\"text-align:center\">
                
                <a href=\"http://rur.bz/kurs/valuta/usd/\" target=\"_BLANK\"><img style=\"border: 0;\" src=\"http://rur.bz/images/russia_lite.gif\" alt=\"Курс доллара на сегодня\" /></a>
                
                <!-- block-content -->
                <!-- /mod_php version 1.0.0.Alpha1-J1.5 (c) www.fijiwebdesign.com
                <p align=\"center\">
                    <a href=\"http://www.mlmv.com/files/informers.html\">
                        <img name=\"Sample\" src=\"images/usd_dm_cb_000066_88x61.gif\" width=\"88\" align=\"middle\" border=\"0\"
                             height=\"62\">
                    </a><br>
                </p>
                <!-- mod_php version 1.0.0.Alpha1-J1.5/ -->
                <!-- /block-content -->
                <div class=\"cleared\"></div>
            </div>
        </div>
        <div class=\"cleared\"></div>
    </div>
</div>
";
        }
        // line 300
        echo "<div class=\"art-block\">
    <div class=\"art-block-tl\"></div>
    <div class=\"art-block-tr\"></div>
    <div class=\"art-block-bl\"></div>
    <div class=\"art-block-br\"></div>
    <div class=\"art-block-tc\"></div>
    <div class=\"art-block-bc\"></div>
    <div class=\"art-block-cl\"></div>
    <div class=\"art-block-cr\"></div>
    <div class=\"art-block-cc\"></div>
    <div class=\"art-block-body\">
        <div class=\"art-blockcontent\">
            <div class=\"art-blockcontent-body\">
                <!-- block-content 
                Сейчас&nbsp;6 гостей&nbsp;онлайн-->
                <!--LiveInternet counter--><script type=\"text/javascript\"><!--
                document.write(\"<a href='http://www.liveinternet.ru/click' \"+
                \"target=_blank><img src='//counter.yadro.ru/hit?t18.10;r\"+
                escape(document.referrer)+((typeof(screen)==\"undefined\")?\"\":
                \";s\"+screen.width+\"*\"+screen.height+\"*\"+(screen.colorDepth?
                screen.colorDepth:screen.pixelDepth))+\";u\"+escape(document.URL)+
                \";\"+Math.random()+
                \"' alt='' title='LiveInternet: показано число просмотров за 24\"+
                \" часа, посетителей за 24 часа и за сегодня' \"+
                \"border='0' width='88' height='31'><\\/a>\")
                //--></script><!--/LiveInternet-->
                <!-- /block-content -->
                <div class=\"cleared\"></div>
            </div>
        </div>
        <div class=\"cleared\"></div>
    </div>
</div>
</div>";
    }

    public function getTemplateName()
    {
        return "views/layouts/sidebar.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  346 => 300,  251 => 207,  248 => 206,  205 => 165,  202 => 162,  199 => 161,  196 => 160,  166 => 130,  163 => 127,  160 => 126,  157 => 125,  135 => 103,  132 => 102,  122 => 94,  119 => 93,  95 => 71,  27 => 5,  24 => 4,  19 => 1,);
    }
}
