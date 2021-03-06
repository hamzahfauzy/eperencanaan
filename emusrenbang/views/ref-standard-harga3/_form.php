<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\RefStandardHarga3 */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="ref-standard-harga3-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'Tahun')->textInput() ?>

    <?= $form->field($model, 'Kd_1')->textInput() ?>

    <?= $form->field($model, 'Kd_2')->textInput() ?>

    <?= $form->field($model, 'Kd_3')->textInput() ?>

    <?= $form->field($model, 'Uraian')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Harga')->textInput() ?>

    <?= $form->field($model, 'Satuan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Keterangan')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
