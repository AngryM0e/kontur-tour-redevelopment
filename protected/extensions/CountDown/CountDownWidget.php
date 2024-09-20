<?php
class CountDownWidget extends CWidget{
    public $t_day;
    public $t_month;
    public $t_year;
    public $t_hour;
    public $t_minutes;
    public $t_seconds;

    public function init() {
         $baseUrl = Yii::app()->assetManager->publish(
             Yii::getPathOfAlias('ext.CountDown.assets')
         );
         Yii::app()->getClientScript()->registerCoreScript('jquery');
         Yii::app()->clientScript->registerCssFile($baseUrl . '/css/dash.css');
         Yii::app()->clientScript->registerScriptFile($baseUrl. '/js/lwtCountDown.js');
//        Yii::app()->clientScript->registerCssFile(
//                Yii::app()->assetManager->publish(
//                        Yii::getPathOfAlias('ext.CountDown.assets') . '/dash.css'
//                )
//        );
    }
    public function run() {
        $script = <<< script
       <script type="text/javascript">
            jQuery(document).ready(function() {
                $('#countdown_dashboard').countDown({
                 targetDate: {
                    'day':$this->t_day,
                    'month':$this->t_month,
                    'year':$this->t_year,
                    'hour':$this->t_hour,
                    'min':$this->t_minutes,
                    'sec':$this->t_seconds
                  },
                });

            });                 
        </script>
script;
        $html = <<< html
                <div id="countdown_dashboard">
                     <div class="dig">:</div>
                     <div class="dash hours_dash">
                          <span class="dash_title">часов</span>
                          <div class="digit">0</div>
                          <div class="digit">0</div>
                     </div>
                     <div class="digc">:</div>
                     <div class="dash minutes_dash">
                          <span class="dash_title">минут</span>
                          <div class="digit">0</div>
                          <div class="digit">0</div>
                     </div>
                     <div class="digr">:</div>
                     <div class="dash seconds_dash">
                          <span class="dash_title">секунд</span>
                          <div class="digit">0</div>
                          <div class="digit">0</div>
                     </div>
              </div>           
html;
        echo $script."\n".$html;
    }
    
}
//<div class="dash days_dash">
//                          <span class="dash_title">дней</span>
//                          <div class="digit">0</div>
//                          <div class="digit">0</div>
//                     </div>








