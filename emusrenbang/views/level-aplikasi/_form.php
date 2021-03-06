<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\LevelAplikasi */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="level-aplikasi-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'aplikasi')->dropDownList($data, ['prompt' => 'Pilih Program']) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Tambah' : 'Ubah', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
