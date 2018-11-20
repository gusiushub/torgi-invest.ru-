<?php

namespace app\controllers;

use app\models\Notification;
use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\ContactForm;

class SiteController extends Controller
{
    /**
     * {@inheritdoc}
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
     * {@inheritdoc}
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

    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {
        if (isset($_POST['phone'])){
            if (!empty($_POST['name'])){
                $notification = new Notification();
                $notification->name = $_POST['name'];
                $notification->phone = $_POST['phone'];
                $notification->type = 1;
                $notification->save(false);
//                return $this->render('index');

            }else{
                $notification = new Notification();
                $notification->name = 'не указали';
                $notification->phone = $_POST['phone'];
                $notification->type = 1;
                $notification->save(false);
            }
        }
        return $this->render('index');
    }




    /**
     * Displays contact page.
     *
     * @return Response|string
     */
    public function actionContact()
    {
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post()) && $model->contact(Yii::$app->params['adminEmail'])) {
            Yii::$app->session->setFlash('contactFormSubmitted');

            return $this->refresh();
        }
        return $this->render('contact', [
            'model' => $model,
        ]);
    }

    public function actionSitemap()
    {
        if (!$xml_sitemap = Yii::$app->cache->get('sitemap')) {
            $xml_sitemap = $this->renderPartial('sitemap');

            Yii::$app->cache->set('sitemap', $xml_sitemap, 60 * 60 * 12);
        }

//        Yii::$app->response->format = \yii\web\Response::FORMAT_RAW;
        $headers = Yii::$app->response->headers;
        $headers->add('Content-Type', 'text/xml');
        return $xml_sitemap;
    }

}
