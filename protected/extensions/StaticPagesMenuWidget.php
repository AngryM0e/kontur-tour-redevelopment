<?php
class StaticPagesMenuWidget extends CWidget{
    public $pages;
    public function init() {
       $criteria = new CDbCriteria();
       $criteria->condition = "disp='1'";
       $criteria->order = "id DESC";
       $this->pages = Pages::model()->findAll($criteria);
    }
    public function run() {
      $html = null;
      foreach($this->pages as $page){
        $html .= <<< html
          <li class=""><a href="/pages/$page[url]">$page[title]</a></li>
html;
     }
    echo $html;
    }
}