<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\RefAkrual5 */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="ref-akrual5-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'Kd_Akrual_1')->textInput() ?>

    <?= $form->field($model, 'Kd_Akrual_2')->textInput() ?>

    <?= $form->field($model, 'Kd_Akrual_3')->textInput() ?>

    <?= $form->field($model, 'Kd_Akrual_4')->textInput() ?>

    <?= $form->field($model, 'Kd_Akrual_5')->textInput() ?>

    <?= $form->field($model, 'Nm_Akrual_5')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Peraturan')->textInput(['maxlength' => true]) ?>

  
	<?php if (!Yii::$app->request->isAjax){ ?>
	  	<div class="form-group">
	        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
	    </div>
	<?php } ?>

    <?php ActiveForm::end(); ?>
    
</div>
