<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Usulans */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Usulans', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="usulans-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Ubah', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Hapus', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'id_program',
            'id_satuan',
            'id_skpd',
            'id_kegiatan',
            'indikator',
            'target',
            'jenis',
            'harga',
            'keterangan',
            'id_user',
            'date',
            'time',
            'created_at',
            'updated_at',
            'deleted_at',
        ],
    ]) ?>

</div>
