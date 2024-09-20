<?php

class AgencyMenuWidget extends CWidget
{
    public $pages = array();
    public $apages = array();

    public function init()
    {
        $criteria = new CDbCriteria();
        $criteria->condition = "disp_left ='1'";
        $criteria->order = "leftm_sort ASC";
        $this->pages = Pages::model()->findAll($criteria);
        $criteria->condition = "disp ='1'";
        $criteria->order = "sort_num ASC";
        $this->apages = AdditionalPages::model()->findAll($criteria);
    }

    public function run()
    {
        $cntr = 1;
        $pitem = "";
        foreach ($this->pages as $page) {
            $url = ($page->url == "/") ? "/" : "/" . $page->url;
            $pitem .= <<<html
           <li id="current" class="item$cntr">
              <a href="$url">
                 <span>$page->title</span>
              </a>
           </li>
html;
            $cntr++;
        }
        echo $pitem . $this->GenAdditionalPageMenu($this->apages);
    }

    public function GenAdditionalPageMenu($apages)
    {
        $cntr = 1;
        $pitem = "";
        foreach ($apages as $page) {
            $url = ($page->url == "/") ? "/" : $page->url;
            $pitem .= <<<html
           <li id="current" class="item$cntr">
              <a href="/ad/$url">
                 <span>$page->title</span>
              </a>
           </li>
html;
            $cntr++;
        }
        return $pitem;
    }
}