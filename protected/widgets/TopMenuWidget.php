<?php

class TopMenuWidget extends CWidget
{
    public $pages = array();

    public function init()
    {
        $criteria = new CDbCriteria();
        $criteria->condition = "disp ='1'";
        $criteria->order = "sort_num ASC";
        $this->pages = Pages::model()->findAll($criteria);
    }

    public function run()
    {
        $cntr = 1;
        $pitem = "";
        foreach ($this->pages as $page) {
            $url = ($page->url == "/")? "/": "/".$page->url;
            $pitem .= <<<html
            <li class="item12$cntr">
              <a href="$url">
                <span class="l"> </span>
                <span class="r"> </span>
                <span class="t">$page->title</span>
              </a>
            </li>
html;
            $cntr++;
        }
        echo $pitem;
    }
}