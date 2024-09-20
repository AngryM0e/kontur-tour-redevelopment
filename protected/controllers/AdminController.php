<?php

class AdminController extends CController
{
    /**
     * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
     * using two-column layout. See 'protected/views/layouts/column2.php'.
     */
    public $layout = 'main_admin';

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
                'actions' => array('Admin', 'main'),
                'users' => array('*'),
            ),
            array('allow', // allow authenticated user to perform 'create' and 'update' actions
                'actions' => array('view', 'accesschange', 'Changeyourpassword'),
                'users' => array('@'),
            ),
            array('allow', // allow admin user to perform 'admin' and 'delete' actions
                'actions' => array('*', 'create', 'Update', 'logout'),
                'users' => array('admin'),
            ),
            array('deny', // deny all users
                'users' => array('*'),
            ),
        );
    }
    
    /* public function actionError()
      {

      $this->redirect('http://test-owebs.owebs.ru/blog/admin');
      } */

    /**
     * Displays a particular model.
     * @param integer $id the ID of the model to be displayed
     */
    public function actionView($id) {
        $this->render('view', array(
            'model' => $this->loadModel($id),
        ));
    }

    /**
     * Creates a new model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     */
    public function actionCreate() {
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
                $this->redirect(array('news/admin'));
            }
        }

        $this->render('create', array(
            'model' => $model,
        ));
    }

    /**
     * Updates a particular model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id the ID of the model to be updated
     */
    public function actionUpdate($id) {


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
                $this->redirect(array('news/admin'));
        }

        $this->render('update', array(
            'model' => $model,
        ));
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
        $dataProvider = new CActiveDataProvider('News');
        $this->render('index', array(
            'dataProvider' => $dataProvider,
        ));
    }

    //первый вход
    public function actionAdmin() {
        $this->layout = false;
        if (Yii::app()->user->id != 1) {
            $model = new LoginForm;

            // if it is ajax validation request
            if (isset($_POST['ajax']) && $_POST['ajax'] === 'login-form') {
                echo CActiveForm::validate($model);
                Yii::app()->end();
            }

            // collect user input data
            if (isset($_POST['LoginForm'])) {
                $model->attributes = $_POST['LoginForm'];
                // validate user input and redirect to the previous page if valid
                if ($_POST['LoginForm']['username'] == "admin") {
                    if ($model->validate() && $model->login()) {
                        $_SESSION['KCFINDER']['disabled'] = false; // enables the file browser in the admin
                        $_SESSION['KCFINDER']['uploadURL'] = Yii::app()->baseUrl . "/uploads/"; // URL for the uploads folder
                        $_SESSION['KCFINDER']['uploadDir'] = Yii::app()->basePath . "/../uploads/"; // path to the uploads folder
                        //$this->redirect(Yii::app()->user->returnUrl);
                        //$this->render('index',array('model'=>$model));
                        $this->redirect(Yii::app()->homeUrl . 'admin/main');
                    }
                }
            }
            // display the login form
            $this->render('login', array('model' => $model));
        }
        else
            $this->redirect(Yii::app()->homeUrl . 'admin/main');
        /* }
          else $this->render('index'); */
    }

    //if(Yii::app()->user->id == 1)
    //Когда вошли
    public function actionMain() {
        if (Yii::app()->user->id == 1) {
            $this->render('index');
        }
        else
            $this->redirect(Yii::app()->homeUrl . 'admin');
    }

    public function actionAccesschange() {
        $this->render('accesschange');
    }

    public function actionChangeyourpassword() {
        $log = $_POST['LoginForm']['username'];
        $oldparol = $_POST['LoginForm']['oldpassword'];
        $parol = $_POST['LoginForm']['newpassword'];

        /* echo $log;
          echo $email;
          echo $oldparol;
          echo $parol; */

        $criteria = new CDbCriteria();
        $criteria->select = "id, salt, password";
        $criteria->condition = "`username` = '$log'";
        $users = User::model()->findAll($criteria);
        $coll = count($users);
        $oldsalt = $users[0]->salt;
        //echo $Zadanie->salt;
        $checkpass = md5($oldsalt . $oldparol);
        //$checkpass = md5($oldparol);

        if ($coll == 0) {
            $this->redirect(Yii::app()->homeUrl . 'admin/accesschange');
            //$this->render('password-changed');
            //$this->redirect(Yii::app()->createUrl("sate/page&view=no-change"));
        } else if ($checkpass == $users[0]->password) {
            //echo "yes";
            $user = User::model()->find('id=:id', array(':id' => $users[0]->id));
            $rn1 = rand(100, 999);
            $salt = md5($rn1);
            $pass = $parol;
            $pass = md5($salt . $pass);
            $user->access = 1;
            $user->salt = $salt;
            $user->password = $pass;
            $user->update();
            $this->render('password-changed');
            //$this->redirect(Yii::app()->createUrl("sate/page&view=password-changed"));
        } else {
            $this->redirect(Yii::app()->homeUrl . 'admin/accesschange');
        }
        //}
    }

    /**
     * Logs out the current user and redirect to homepage.
     */
    public function actionLogout() {
        unset($_SESSION['KCFINDER']['disabled'], $_SESSION['KCFINDER']['uploadURL'], $_SESSION['KCFINDER']['uploadDir']);
        Yii::app()->user->logout();
        //$this->redirect(Yii::app()->homeUrl);
        $this->redirect(Yii::app()->homeUrl . "admin");
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