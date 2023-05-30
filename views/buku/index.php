<?php

use yii\grid\GridView;
use yii\grid\SerialColumn;
use yii\grid\ActionColumn;
use yii\helpers\Html;

?>

<p>
    <?= Html::a('Buku Baru', ['create'], ['class' => 'btn btn-success'])?>;
</p>


<?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => SerialColumn::className()],
            'id',
            'kode_buku',
            'judul',
            'jml_item',
            ['class' => ActionColumn::className()]
            ]
        ]);
?>
