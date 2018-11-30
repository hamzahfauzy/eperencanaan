<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\RefStandardHarga1 */

$this->title = 'Create Ref Standard Harga1';
$this->params['breadcrumbs'][] = ['label' => 'Ref Standard Harga1s', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ref-standard-harga1-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
