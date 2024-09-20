<?php

class PagesController extends Controller
{
    public $defaultAction = 'page';

    public function filters() {
        return array(
            'accessControl', // perform access control for CRUD operations
             array(
                'CHttpCacheFilter + index',
            ),
        );
    }

    public function accessRules() {
        return array(
            array('allow', // allow all users to perform 'index' and 'view' actions
                'actions' => array('index', 'view', 'page', 'admin', 'update'),
                'users' => array('*'),
            ),
            array('allow', // allow authenticated user to perform 'create' and 'update' actions
                'actions' => array('create','disableAllLinks'),
                'users' => array('@'),
            ),
            array('allow', // allow admin user to perform 'admin' and 'delete' actions
                'actions' => array('delete'),
                'users' => array('admin'),
            ),
            array('deny', // deny all users
                'users' => array('*'),
            ),
        );
    }

    public function actionPage($url="/") {
        $this->layout = false;
        $content = Pages::model()->findByAttributes(array("url" => $url));
        $this->pageTitle = isset($content->title) ? $content->meta_title : 'kontur-tour.ru';
        $keywords = isset($content->keywords) ? $content->keywords : 'kontur-tour.ru';
        Yii::app()->clientScript->registerMetaTag($keywords, 'keywords');
        $description = isset($content->description) ? $content->description : 'kontur-tour.ru';
        Yii::app()->clientScript->registerMetaTag($description, 'description');
        if($url == 'cities') {
            $this->render('cities', array('content' => $content->text));
            return;
        }
        $this->render('pages',
                array(
                    'content' => $content->text,
                    'url' => $content->url,
                )
             );
    }

    /**
     * Lists all models.
     */
/*    public function actionIndex() {
        Yii::import("application.modules.Shop.controllers.GoodsController");
        $counter_target_date = CounterTargetDateHelper::getCounterTargetDate();
        $gc = new GoodsController(0);
        $criteria = new CDbCriteria();
        $criteria->order = "cdate DESC";
        $criteria->limit = "3";
        $criteria->condition = "disp='1'";
        $products =  Goods::model()->findAll($criteria);
        $main_page_settings= MainPageSettings::model()->findByPk(1);
        $this->pageTitle = isset($main_page_settings->page_title) ? $main_page_settings->page_title : 'Магазин детских товаров kiddy-kids.ru';
        $this->keywords = isset($main_page_settings->meta_keywords) ? $main_page_settings->meta_keywords : 'Магазин детских товаров kiddy-kids.ru';
        $this->description = isset($main_page_settings->meta_description) ? $main_page_settings->meta_description : 'Магазин детских товаров kiddy-kids.ru';
        $slider_disp = $main_page_settings->slider_disp;
        $banners_disp = $main_page_settings->promo_baners;
        $counter_disp = $main_page_settings->counter_disp;
        
        $text = null;
        if($main_page_settings -> text_disp == 1)
            $text = $main_page_settings->text; 
        
        $this->render('index',
                array(
                    'products'=>$products,
                    'gc'=>$gc,
                    'slider_disp'=>$slider_disp,
                    'banners_disp'=>$banners_disp,
                    'counter_disp'=>$counter_disp,
                    'text'=>$text,
                    'settings'=>$main_page_settings,
                    'counter_target_date'=>$counter_target_date,
                ));
    }*/


    public function actionCreate() {
        $this->layout = false;
        if (Yii::app()->user->id == 1) {
            $model = new Pages;

            // Uncomment the following line if AJAX validation is needed
            // $this->performAjaxValidation($model);

            if (isset($_POST['Pages'])) {
                $model->attributes = $_POST['Pages'];
                $model->disp = $_POST['Pages']['disp'];
                $model->disp_left = $_POST['Pages']['disp_left'];
                $model->sort_num = $_POST['Pages']['sort_num'];
                $model->leftm_sort = $_POST['Pages']['leftm_sort'];
                if ($model->save()){
                    //$this->redirect(Yii::app()->homeUrl . 'admin/static_pages');
                    $this->render('update', array(
                        'model' => $model,
                    ));

                }
                return;
            }

            $this->render('create', array(
                'model' => $model,
            ));
        }
        else
            $this->redirect(Yii::app()->homeUrl . 'admin');
    }


    public function actionUpdate($id) {
        if (Yii::app()->user->id == 1) {
            $model = $this->loadModel($id);

            // Uncomment the following line if AJAX validation is needed
            // $this->performAjaxValidation($model);

            if (isset($_POST['Pages'])) {
                $model->attributes = $_POST['Pages'];
                $model->disp = $_POST['Pages']['disp'];
                $model->disp_left = $_POST['Pages']['disp_left'];
                $model->sort_num = $_POST['Pages']['sort_num'];
                $model->leftm_sort = $_POST['Pages']['leftm_sort'];
                if ($model->save())
                   // $this->redirect(Yii::app()->homeUrl . 'admin/static_pages');
                    $this->render('update', array(
                        'model' => $model,
                    ));
                return;
            }
            $this->render('update', array(
                'model' => $model,
            ));
        }
        else
            $this->redirect(Yii::app()->homeUrl . 'admin');
    }


    public function actionDelete($id) {
        if (Yii::app()->request->isPostRequest) {
            // we only allow deletion via POST request
            $this->loadModel($id)->delete();

            // if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
            if (!isset($_GET['ajax']))
                $this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
        }
        else
            throw new CHttpException(400, 'Invalid request. Please do not repeat this request again.');
    }


    public function actionAdmin() {

        if (Yii::app()->user->id == 1) {
            $model = new Pages('search');
            $model->unsetAttributes();  // clear any default values
            if (isset($_GET['Pages']))
                $model->attributes = $_GET['Pages'];

            $this->render('admin', array(
                'model' => $model,
            ));
        }
        else
            $this->redirect(Yii::app()->homeUrl . 'admin');
    }


    public function loadModel($id) {
        $model = Pages::model()->findByPk($id);
        if ($model === null)
            throw new CHttpException(404, 'The requested page does not exist.');
        return $model;
    }


    protected function performAjaxValidation($model) {
        if (isset($_POST['ajax']) && $_POST['ajax'] === 'pages-form') {
            echo CActiveForm::validate($model);
            Yii::app()->end();
        }
    }

    public function actionDisableAllLinks(){
        $bsea_records = BlackseaPages::model()->findAll();
        foreach($bsea_records as $bsea_record){
            $bsea_records->disp_links = 0;
            $bsea_record->update("disp_links");
        }
        $asea_records = AzovseaPages::model()->findAll();
        foreach($asea_records as $asea_record){
            $asea_records->disp_links = 0;
            $asea_record->update("disp_links");
        }
    }

}
