<?php
class HeaderWidget extends CWidget{
    private  $settings;
    public function init() {
        $this->settings = MainPageSettings::model()->findByPk(1);
        ob_start();
    }
    public function run() {
        $header = ob_get_clean();
        $header = preg_replace("/\(head_text\)/",$this->settings->head_text,$header);
        $header = preg_replace("/\(main_logo\)/",$this->settings->main_logo,$header);
        echo $header;
    }
    
}

