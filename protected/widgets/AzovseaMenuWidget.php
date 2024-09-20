<?php

class AzovseaMenuWidget extends CWidget
{
    public $pages = array();

    public function init()
    {
        $criteria = new CDbCriteria();
        $criteria->condition = "disp ='1'";
        $criteria->order = "sort_num ASC";
        $this->pages = AzovseaPages::model()->findAll($criteria);
    }

    public function run()
    {
        $cntr = 1;
        $pitem = "";
        foreach ($this->pages as $page) {
            $url = ($page->url == "/")? "/": $page->url;
            $pitem .= <<<html
            <li class="parent item$cntr">
                <a href="/az/$url">
                    <span>$page->title</span>
                </a>
            </li>
html;
            $cntr++;
        }
        echo $pitem;
    }
}