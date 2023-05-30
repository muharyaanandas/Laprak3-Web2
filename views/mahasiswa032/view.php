<?php
use yii\widgets\DetailView;
?>

<?=
    DetailView::widget([
        'model' => $mhs,
        'attributes' => [
            'id032',
            'nim032',
            'nama032',
            'kelas032',
            'status032',
        ],
    ]);
?>