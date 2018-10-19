<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\RefRek4Search */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="ref-rek4-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'Kd_Rek_1') ?>

    <?= $form->field($model, 'Kd_Rek_2') ?>

    <?= $form->field($model, 'Kd_Rek_3') ?>

    <?= $form->field($model, 'Kd_Rek_4') ?>

    <?= $form->field($model, 'Nm_Rek_4') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
