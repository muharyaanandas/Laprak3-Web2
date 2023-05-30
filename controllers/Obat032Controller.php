<?php

namespace app\controllers;
use app\models\Obat032;
use yii\data\ActiveDataProvider;

class Obat032Controller extends \yii\web\Controller
{
    public function actionIndex()
    {
        $dataProvider = new ActiveDataProvider([
            'query' => Obat032::find(),
        ]);
        return $this->render('index', [
            'dataProvider' => $dataProvider,
        ]);
    }
}
