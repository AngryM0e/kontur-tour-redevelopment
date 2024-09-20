<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

class GeneralInfoWidget extends CWidget{
    public $get;
    private $generalinfo;
    public function init() {
        $this->generalinfo =  GeneralInfo::model()->findAll();
    }
    public function run() {
        switch($this->get){
            case 'skype':
                    foreach($this->generalinfo as $generalinfo_item)
                        if($generalinfo_item["skype"] == "");
                        else
                            echo $generalinfo_item["skype"]."<br/>";
            break;
            case 'phones':
                foreach($this->generalinfo as $generalinfo_item)
                        if($generalinfo_item['phone'] == "");
                        else
                            echo $generalinfo_item["phone"]."<br/>";
            break;
        }
    }
    
}
