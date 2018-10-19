<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Usulans */

$this->title = 'Update Usulans: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Usulans', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Ubah';
?>
<div class="usulans-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
