<?php

use yii\helpers\Html;
use yii\grid\GridView;
use common\components\Helper;

/* @var $this yii\web\View */
/* @var $searchModel app\models\UrusanSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Urusan Kota Medan';
$this->params['breadcrumbs'][] = "Nasional/Kota Medan";
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="row">
    <div class="col-xs-12">
        <div class="box box-success">
            <div class="box-header">
                <h3 class="box-title"><?= $this->title ?></h3>
                <?php 
                    if (Helper::checkRoute('create')) {
                        echo Html::a('Tambah Urusan Kota Medan', ['create'], ['class' => 'btn btn-success pull-right']);
                    }
                ?>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <table class="table-hover">
                <?php // echo $this->render('_search', ['model' => $searchModel]); ?>
        
                <?= GridView::widget([
                    'dataProvider' => $dataProvider,
                    'filterModel' => $searchModel,
                    'columns' => [
                        [
                            'class' => 'yii\grid\SerialColumn',
                            'header' => 'No.'
                        ],
                        [
                            'attribute' =>'namaMisi',
                            'format' => 'text',
                            'value' => function($model){ return $model->idMisi.":".$model->namaMisi; }
                        ],
                        [
                            'attribute' =>'urusan',
                            'format' => 'text',
                            'value' => function($model){ return $model->id.":".$model->urusan; }
                        ],
                        [
                            'class' => 'yii\grid\ActionColumn',
                            'template' => Helper::filterActionColumn('{view}{update}{delete}'),
                        ],
                    ],
                ]);
                ?>
                </table>
            </div>
        </div>            
    </div>
</div>
