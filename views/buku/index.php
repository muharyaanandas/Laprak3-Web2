<?php
    use yii\helpers\Html;
    use yii\grid\ActionColumn;
    use yii\grid\SerialColumn;
    // use yii\grid\ActiveColumn;
    use yii\grid\GridView;
?>

<?= 
    Html::a('Tambah', ['tambah'], ['class' => 'btn btn-success']);
?>

<?=
    GridView::widget([
        'dataProvider'=>$dataProvider,
        'columns'=>[
            ['class'=>SerialColumn::className()],
            'id',
            'kode_buku',
            'judul',
            'jml_item',
            ['class'=>ActionColumn::className()]
        ]
    ])
?>