<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\RefAnalisaSubA */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="ref-analisa-sub-a-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'Kd_Analisa')->textInput() ?>

    <?= $form->field($model, 'Kd_Analisa_Sub')->textInput() ?>

    <?= $form->field($model, 'Kd_Analisa_Sub_A')->textInput() ?>

    <?= $form->field($model, 'Nm_Analisa_Sub_A')->textInput(['maxlength' => true]) ?>

  
	<?php if (!Yii::$app->request->isAjax){ ?>
	  	<div class="form-group">
	        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
	    </div>
	<?php } ?>

    <?php ActiveForm::end(); ?>
    
</div>
