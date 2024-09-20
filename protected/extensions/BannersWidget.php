<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

class BannersWidget extends CWidget{
    private $banners;
    public function init() {
        $this->banners = Banners::model()->findAll();
        Yii::app()->getClientScript()->registerCoreScript('jquery');
    }
    public function run() {
        $html="<ul class='banner_set'>";
        foreach($this->banners as $banner){
           $picture =  Yii::app()->iwi->load($_SERVER['DOCUMENT_ROOT']."/images/banners/".$banner['img'])->adaptive(323,154)->cache();
           $html .= <<< html
           <li class="item1">
               <a href="$banner[url]" target="_self">
                   <img src="$picture" alt="" title="" width="323" height="154" />
               </a>
               $banner[text]
           </li>    
html;
        }
        echo "</ul>".$html;
    }
    
}                  