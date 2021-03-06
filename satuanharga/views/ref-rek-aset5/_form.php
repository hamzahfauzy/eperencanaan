<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\RefRekAset5 */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="ref-rek-aset5-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'Kd_Aset1')->textInput() ?>

    <?= $form->field($model, 'Kd_Aset2')->textInput() ?>

    <?= $form->field($model, 'Kd_Aset3')->textInput() ?>

    <?= $form->field($model, 'Kd_Aset4')->textInput() ?>

    <?= $form->field($model, 'Kd_Aset5')->textInput() ?>

    <?= $form->field($model, 'Nm_Aset5')->textInput(['maxlength' => true]) ?>

  
	<?php if (!Yii::$app->request->isAjax){ ?>
	  	<div class="form-group">
	        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
	    </div>
	<?php } ?>

    <?php ActiveForm::end(); ?>
    
</div>
