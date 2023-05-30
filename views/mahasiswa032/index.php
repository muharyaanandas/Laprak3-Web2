<?php
    use yii\grid\GridView;
    use yii\grid\SerialColumn;
    use yii\grid\ActionColumn;
    use yii\helpers\Html;
?>

<?=
    Html::a('Tambah Mahasiswa',['create'],['class' => 'btn btn-primary']);
?>
<?=
    GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => SerialColumn::className()],
            'id032',
            'nim032',
            'nama032',
            'kelas032',
            'status032',
            ['class' => ActionColumn::className()]
        ]
    ]);
?>