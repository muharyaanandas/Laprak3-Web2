<?php

namespace app\controllers;
use app\models\Profil032;
use yii\data\ActiveDataProvider;

class MahasiswaController extends \yii\web\Controller
{
    public function actionIndex()
    {
        $dataProvider = new ActiveDataProvider([
            'query' => Profil032::find()
        ]);
        return $this->render('index', [
            'dataProvider' => $dataProvider
        ]);
    }

}
?>