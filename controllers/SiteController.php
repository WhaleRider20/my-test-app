<?php
namespace app\controllers;
use yii\console\Controller;

class SiteController extends Controller{

    public function actionIndex()
    {
       return $this->render('index');
    }

    public function actionAbout()
    {
        return $this->render('about');
    }

}