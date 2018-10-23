<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use yii\helpers\Url;
use app\models\LoginForm;
use app\models\ContactForm;
use app\modules\admin\models\Photo;

class SiteController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout'],
                'rules' => [
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    /**
     * @inheritdoc
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    public function actionTes(){
        // $basePath = \Yii::getAlias('@webroot').'/download/';
        // $url = 'https://www.youtube.com/watch?v=yoZFZsIdfV8';
        // $cmd = 'youtube-dl '.$url;
        $cmd = 'ls -la';
        shell_exec($cmd, $output, $ret);
        echo 'output: ';
        var_export($output);
        echo "\nret: ";
        var_export($ret);

    }

    public function actionData(){
        \Yii::$app->response->format = \yii\web\Response::FORMAT_JSON;
        $photos = Photo::find()->joinWith('tags')->asArray()->all();
        // print_r($photos);
        return $photos;
    }

    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {
        // $this->layout = 'plain3';
        // return $this->render('gallery');

        // $this->layout = 'plain3';

        $photos = Photo::find()->all();

        $photoArray = [];

        foreach ($photos as $photo) {
            $photoArray[$photo->id_photo]=json_decode($photo->metadata,true);
        }

        if (Yii::$app->user->isGuest) {
           return $this->redirect(Url::to(['/user/security/login']));
        }

        return $this->render('index',[
            'photoArray'=>$photoArray
        ]);

        
    }

    /**
     * Login action.
     *
     * @return Response|string
     */
    public function actionLogin()
    {
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        }
        return $this->render('login', [
            'model' => $model,
        ]);
    }

    /**
     * Logout action.
     *
     * @return Response
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    /**
     * Displays contact page.
     *
     * @return Response|string
     */
    public function actionContact()
    {
        $this->layout = 'plain2';
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post()) && $model->contact(Yii::$app->params['adminEmail'])) {
            Yii::$app->session->setFlash('contactFormSubmitted');

            return $this->refresh();
        }
        return $this->render('contact', [
            'model' => $model,
        ]);
    }

    public function actionGallery(){
        $this->layout = 'plain3';
        return $this->render('gallery');
    }

    public function actionGallery1(){
        $this->layout = 'plain3';
        return $this->render('gallery1');
    }

    public function actionScroll(){ 
        $this->layout = 'plain3';
        return $this->render('scroll');
    }

    /**
     * Displays about page.
     *
     * @return string
     */
    public function actionAbout()
    {
        $this->layout = 'plain2';
        return $this->render('about');
    }

    public function actionPrivacypolicy()
    {
        $this->layout = 'plain2';
        return $this->render('privacypolicy');
    }

    public function actionTos()
    {
        $this->layout = 'plain2';
        return $this->render('tos');
    }
}
