<?php

class NewsController extends CController
{
    /**
     * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
     * using two-column layout. See 'protected/views/layouts/column2.php'.
     */
    public $layout = 'column1';
    public $keywords;
    public $description;
    public $categories;
    public $newscobj;

    /**
     * @return array action filters
     */
    public function filters() {
        return array(
            'accessControl', // perform access control for CRUD operations
        );
    }

    /**
     * Specifies the access control rules.
     * This method is used by the 'accessControl' filter.
     * @return array access control rules
     */
    public function accessRules() {
        return array(
            array('allow', // allow all users to perform 'index' and 'view' actions
                'actions' => array('news', 'create', 'Update', 'Admin', 'delete'),
                'users' => array('*'),
            ),
            array('allow', // allow authenticated user to perform 'create' and 'update' actions
                'actions' => array('news', 'view'),
                'users' => array('@'),
            ),
            array('allow', // allow admin user to perform 'admin' and 'delete' actions
                'actions' => array('*',),
                'users' => array('admin'),
            ),
            array('deny', // deny all users
                'users' => array('*'),
            ),
        );
    }

    /**
     * Displays a particular model.
     * @param integer $id the ID of the model to be displayed
     */
    public function actionView($id) {
        $this->render('view', array(
            'model' => $this->loadModel($id),
        ));
    }

    public function actionNews($id = null) {
        $this->newscobj = $this;        
        if (isset($id)) {
            $criteria = new CDbCriteria();
            $criteria->order = "id ASC";
            //COMMENT:выбираем категории продуктов для верхнего меню
            $this->categories = array_chunk(Categories::model()->findAll($criteria), 11, true);

            $model = $this->loadModel($id);
            $this->pageTitle = isset($model->title) ? $model->title : 'Miss Melisa';
            $this->keywords = isset($model->meta_k) ? $model->meta_k : 'Miss Melisa';
            $this->description = isset($model->meta_d) ? $model->meta_d : 'Miss Melisa';
            $news = News::model()->findAll();
            $this->render('news', array('model' => $model, 'flag' => false,'news'=>$news));
        } else {

            $criteria = new CDbCriteria();
            $criteria->order = "id ASC";
            //COMMENT:выбираем категории продуктов для верхнего меню
            $this->categories = array_chunk(Categories::model()->findAll($criteria), 11, true);

            $count = News::model()->count();
            $criteria = new CDbCriteria();
            $criteria->order = "creation_date ASC";
            $pages = new CPagination($count);
            $pages->pageSize = 20;
            $pages->applyLimit($criteria);
            $news = News::model()->findAll($criteria);
            $this->pageTitle = 'Новости';
            $this->keywords = 'Новости';
            $this->description = 'Новости';
            $this->render('news', array('news' => $news, 'pages' => $pages, 'flag' => true));
        }
    }

    /**
     * Creates a new model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     */
    public function actionCreate() {
        if (Yii::app()->user->id == 1) {
            $model = new News;


            if (isset($_POST['News'])) {
                $model->attributes = $_POST['News'];
                $model->page = $_POST['News']['page'];
                $model->title = $_POST['News']['title'];
                $model->meta_d = $_POST['News']['meta_d'];
                $model->meta_k = $_POST['News']['meta_k'];

                if ($model->save()) {
                    //$vk = new VkWallpost("admin_dielektrik@mail.ru", "3qeruj", "http://vkontakte.ru/club27375942", "-27375942");
                    //$vk->useProxy=false;
                    //$vk->postMessage("linksrunner.ru", $_POST['News']['text']);
                    $this->redirect(Yii::app()->homeUrl . 'news/admin');
                }
            }

            $this->render('create', array(
                'model' => $model,
            ));
        }
        else
            $this->redirect(Yii::app()->homeUrl . 'admin');
    }

    public static function data_convert($data, $year = 1, $time = 0, $second = 0) {
        $month = array(' ', 'января', 'февраля', 'марта', 'апреля', 'мая', 'июня', 'июля', 'августа', 'сентября', 'октября', 'ноября', 'декабря');
        $result = '';
        //$part = explode(' ', $data);
        //$ymd = explode ('-', $part[0]);
        $ymd = explode('-', $data);
        if (isset($part[1]))
            $hms = explode(':', $part[1]);
        if ($year == 1) {
            $result .= $ymd[2];
            $result .= ' ' . $month[(int) $ymd[1]];
            $result .= ' ' . $ymd[0];
        }
        if ($time == 1) {
            $result .= ' ' . $hms[0];
            $result .= ':' . $hms[1];
            if ($second == 1)
                $result .= ':' . $hms[2];
        }
        return $result;
    }

    /**
     * Updates a particular model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id the ID of the model to be updated
     */
    public function actionUpdate($id) {
        if (Yii::app()->user->id == 1) {

            $model = $this->loadModel($id);

            // Uncomment the following line if AJAX validation is needed
            // $this->performAjaxValidation($model);

            if (isset($_POST['News'])) {
                $model->attributes = $_POST['News'];
                $model->page = $_POST['News']['page'];
                $model->title = $_POST['News']['title'];
                $model->meta_d = $_POST['News']['meta_d'];
                $model->meta_k = $_POST['News']['meta_k'];

                if ($model->save())
                    $this->redirect(Yii::app()->homeUrl . 'news/admin');
            }

            $this->render('update', array(
                'model' => $model,
            ));
        }
        else
            $this->redirect(Yii::app()->homeUrl . 'admin');
    }

    /**
     * Deletes a particular model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id the ID of the model to be deleted
     */
    public function actionDelete($id) {

        if (Yii::app()->request->isPostRequest) {
            // we only allow deletion via POST request

            $this->loadModel($id)->delete();
            //Удаляю задание для этго донора сам донор уже удален
            //$connection->createCommand($sql)->query();
            // if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
            if (!isset($_GET['ajax']))
                $this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
        }
        else
            throw new CHttpException(400, 'Invalid request. Please do not repeat this request again.');
    }

    /**
     * Lists all models.
     */
    public function actionIndex() {
        $dataProvider = new CActiveDataProvider('Newss');
        $this->render('index', array(
            'dataProvider' => $dataProvider,
        ));
    }

    /**
     * Manages all models.
     */
    public function actionAdmin() {
        if (Yii::app()->user->id == 1) {
            $model = new News('search');
            $model->unsetAttributes();  // clear any default values
            if (isset($_GET['News']))
                $model->attributes = $_GET['News'];

            // Uncomment the following line if AJAX validation is needed
            // $this->performAjaxValidation($model);

            $model = new News;
            $this->render('admin', array(
                'model' => $model,
            ));
        }
        else
            $this->redirect(Yii::app()->homeUrl . 'admin');
    }

    /**
     * Returns the data model based on the primary key given in the GET variable.
     * If the data model is not found, an HTTP exception will be raised.
     * @param integer the ID of the model to be loaded
     */
    public function loadModel($id) {


        $model = News::model()->findByPk((int) $id);
        if ($model === null)
            throw new CHttpException(404, 'The requested page does not exist.');
        return $model;
    }

    /**
     * Performs the AJAX validation.
     * @param CModel the model to be validated
     */
    protected function performAjaxValidation($model) {
        if (isset($_POST['ajax']) && $_POST['ajax'] === 'news-form') {
            echo CActiveForm::validate($model);
            Yii::app()->end();
        }
    }
}
