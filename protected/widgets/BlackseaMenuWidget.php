<?php

class BlackseaMenuWidget extends CWidget
{
    public $pages = array();

    public function init()
    {
        $criteria = new CDbCriteria();
        $criteria->condition = "disp ='1'";
        $criteria->order = "sort_num ASC";
        $this->pages = BlackseaPages::model()->findAll($criteria);
    }

    public function run()
    {
        $cntr = 1;
        $pitem = "";
        foreach ($this->pages as $page) {
            $url = ($page->url == "/")? "/": $page->url;
            $pitem .= <<<html
            <li class="parent item$cntr">
                <a href="/bs/$url">
                    <span>$page->title</span>
                </a>
            </li>
html;
            $cntr++;
        }
        echo $pitem;
    }
}