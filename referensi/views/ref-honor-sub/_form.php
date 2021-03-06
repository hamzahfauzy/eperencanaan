<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\RefHonorSub */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="ref-honor-sub-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'Kd_Honor')->textInput() ?>

    <?= $form->field($model, 'Kd_Honor_Sub')->textInput() ?>

    <?= $form->field($model, 'Nm_Honor_Sub')->textarea(['rows' => 6]) ?>

  
	<?php if (!Yii::$app->request->isAjax){ ?>
	  	<div class="form-group">
	        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
	    </div>
	<?php } ?>

    <?php ActiveForm::end(); ?>
    
</div>
