<?php

use yii\helpers\Html;
use yii\grid\GridView;
use common\components\Helper;

/* @var $this yii\web\View */
/* @var $searchModel app\models\MenuAssignmentLevelSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Menu Assignment Level';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="menu-assignment-level-index">
    <div class="box box-success">
        <div class="box-header">
            <p>
                <?php 
                    if (Helper::checkRoute('create')) {
                        echo Html::a('Tambah Menu Assignment Level', ['create'], ['class' => 'btn btn-success pull-right']);
                    }
                ?>
            </p>
            <h3 class="box-title"><?= $this->title ?></h3>
        </div>
        <div class="box-body">
            <?php // echo $this->render('_search', ['model' => $searchModel]); ?>
            <?= GridView::widget([
                'dataProvider' => $dataProvider,
                'filterModel' => $searchModel,
                'columns' => [
                    ['class' => 'yii\grid\SerialColumn'],
                    [
                        'attribute' => 'Level',
                        'format' => 'text',
                        'value' => function ($model) { return $model->level.":".$model->NmLevel; }
                    ],
                    'level',
                    'id_menu',

                    [
                        'class' => 'yii\grid\ActionColumn',
                        'template' => Helper::filterActionColumn('{view}{update}{delete}'),
                    ],
                ],
            ]); ?>
        </div>
    </div>
</div>