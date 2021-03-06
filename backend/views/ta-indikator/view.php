<?php

use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\TaIndikator */
?>
<div class="ta-indikator-view">
 
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'Tahun',
            'Kd_Urusan',
            'Kd_Bidang',
            'Kd_Unit',
            'Kd_Sub',
            'Kd_Prog',
            'ID_Prog',
            'Kd_Keg',
            'Kd_Indikator',
            'No_ID',
            'Tolak_Ukur',
            'Target_Angka',
            'Target_Uraian',
        ],
    ]) ?>

</div>
