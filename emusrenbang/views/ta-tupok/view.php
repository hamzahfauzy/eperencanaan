<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\TaTupok */

$this->title = $model->Ur_Tupok;
$this->params['breadcrumbs'][] = ['label' => 'Tugas Pokok', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ta-tupok-view">
    <div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title">Tugas Pokok</h3>

          <div class="box-tools pull-right">
            
            <p>
                <?= Html::a("<i class=\"fa fa-edit\"></i> Ubah", ['update', 'Tahun' => $model->Tahun, 'Kd_Urusan' => $model->Kd_Urusan, 'Kd_Bidang' => $model->Kd_Bidang, 'Kd_Unit' => $model->Kd_Unit, 'Kd_Sub' => $model->Kd_Sub, 'No_Tupok' => $model->No_Tupok], [
                    'class' => 'btn btn-primary',
                    'data-toggle' => 'tooltip',
                    'title' => 'Ubah',
                ]) ?>
                <?= Html::a("<i class=\"fa fa-trash\"></i> Hapus", ['delete', 'Tahun' => $model->Tahun, 'Kd_Urusan' => $model->Kd_Urusan, 'Kd_Bidang' => $model->Kd_Bidang, 'Kd_Unit' => $model->Kd_Unit, 'Kd_Sub' => $model->Kd_Sub, 'No_Tupok' => $model->No_Tupok], [
                    'class' => 'btn btn-danger',
                    'data-toggle' => 'tooltip',
                    'title' => 'Hapus',
                    'data' => [
                        'confirm' => 'Are you sure you want to delete this item?',
                        'method' => 'post',
                    ],
                ]) ?>
            </p>

          </div>
          <!-- /.box-tools -->
        </div>
        <!-- /.box-header -->
        <?= DetailView::widget([
            'model' => $model,
            'attributes' => [
                'Tahun',
                'No_Tupok',
                'Ur_Tupok',
            ],
        ]) ?>

        <!-- /.box-body -->
    </div>

</div>
