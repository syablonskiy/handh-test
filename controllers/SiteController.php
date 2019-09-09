<?php

namespace app\controllers;

use app\models\LoginForm;
use app\components\Controller;

class SiteController extends Controller
{
    public function actions()
    {
        $actions = parent::actions();
        return array_merge($actions, [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
        ]);
    }

    public function actionAuth()
    {
        $model = new LoginForm();
        $model->load(\Yii::$app->request->bodyParams, '');
        $token = $model->getToken();

        return $token !== false ? $token : $model;
    }
}
