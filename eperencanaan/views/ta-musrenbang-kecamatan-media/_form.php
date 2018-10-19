<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model eperencanaan\models\TaMusrenbangKecamatanMedia */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="ta-musrenbang-kecamatan-media-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'Kd_Musrenbang_Kecamatan')->textInput() ?>

    <?= $form->field($model, 'Kd_Media')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
