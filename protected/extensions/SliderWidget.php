<?php

class SliderWidget extends CWidget {

    private $slides;

    public function init() {
        $this->slides = Slider::model()->findAll();
        Yii::app()->getClientScript()->registerCoreScript('jquery');
    }

    public function run() {
        $html = null;
        $html .= <<< html
html;
        foreach ($this->slides as $slide) {
            if ($slide['picture'] != "") {
                $picture =  Yii::app()->iwi->load($_SERVER['DOCUMENT_ROOT']."/images/slider/".$slide['picture'])->adaptive(300,400)->cache();
                $html .= <<< html
                 <li class="item"><a href="$slide[url]"><img src="$picture"></a></li>
html;
            }
        }
        $html .= <<< html
html;
        echo $html;
    }

}