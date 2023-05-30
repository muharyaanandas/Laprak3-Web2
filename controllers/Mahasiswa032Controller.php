<?php

namespace app\controllers;

use app\models\Mahasiswa032;
use yii\data\ActiveDataProvider;
use Yii;

class Mahasiswa032Controller extends  \yii\web\Controller
{
    public function actionIndex()
    {
        $query = Mahasiswa032::find();
        $dataProvider = new ActiveDataProvider([
            'query' => $query
        ]);
        return $this->render('index', [
            'dataProvider' => $dataProvider
        ]);
    }

    public function actionCreate()
    {
        $mhs = new Mahasiswa032;
        $mhs->nim032 = '60200121032-' . rand(100, 999);
        $mhs->nama032 = 'Muhammad Arya Ananda S';
        $mhs->kelas032 = 'A';
        $mhs->status032 = 'Baru';
        if ($mhs->save()) {
            Yii::$app->session->setFlash('success', 'Data Tersimpan');
            return $this->redirect(['index']);
        }
    }

    public function actionUpdate($id)
    {
        $mhs = Mahasiswa032::findOne(['id032' => $id]);
        if ($mhs !== null) {
            $mhs->kelas032 = 'C';
            $mhs->status032 = 'Update';
            $mhs->save();
            Yii::$app->session->setFlash('success', 'Data Terupdate');
        }
        return $this->redirect(['index']);
    }

    public function actionDelete($id)
    {
        $mhs = Mahasiswa032::findOne(['id032' => $id]);
        if ($mhs->delete()) {
            Yii::$app->session->setFlash('danger', 'Data Terhapus');
            return $this->redirect(['index']);
        }
    }

    public function actionView($id)
    {
        $mhs = Mahasiswa032::findOne($id);
        return $this->render('view', ['mhs' => $mhs]);
    }
}
