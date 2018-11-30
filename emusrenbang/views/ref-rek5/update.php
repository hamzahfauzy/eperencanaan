<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\RefRek5 */

$this->title = 'Ubah rincian Objek: ' . $model->Nm_Rek_5;
$this->params['breadcrumbs'][] = "Referensi Rekening";
$this->params['breadcrumbs'][] = ['label' => 'Data Rincian Objek', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->Nm_Rek_5, 'url' => ['view', 'Kd_Rek_1' => $model->Kd_Rek_1, 'Kd_Rek_2' => $model->Kd_Rek_2, 'Kd_Rek_3' => $model->Kd_Rek_3, 'Kd_Rek_4' => $model->Kd_Rek_4, 'Kd_Rek_5' => $model->Kd_Rek_5]];
$this->params['breadcrumbs'][] = 'Ubah';
?>
<div class="ref-rek5-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
