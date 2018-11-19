<?php

use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\TaPeraturan */
?>
<div class="ta-peraturan-view">
 
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'Tahun',
            'Kd_Peraturan',
            'No_ID',
            'No_Peraturan',
            'Tgl_Peraturan',
            'Uraian',
        ],
    ]) ?>

</div>
