<?php

use yii\helpers\Html;
use yii\grid\GridView;
use common\components\Helper;

/* @var $this yii\web\View */
/* @var $searchModel app\models\RefRek2Search */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Data Kelompok';
$this->params['breadcrumbs'][] = "Referensi Rekening";
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="row">
    <div class="col-xs-12">
        <div class="box box-success">
            <div class="box-header">
                <h3 class="box-title"><?= $this->title ?></h3>
                <?php 
                    if (Helper::checkRoute('create')) {
                        echo Html::a('Tambah Referensi Rekening Kelompok', ['create'], ['class' => 'btn btn-success pull-right']);
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
                        /*[
                            'attribute' =>'namaAkun',
                            'format' => 'text',
                            'value' => function($model){ return $model->Kd_Rek_1.":".$model->namaAkun; }
                        ],*/
			[
                            'attribute' =>'Kd_Rek_1',
                            'format' => 'text',
                            'value' => function($model){ return $model->Kd_Rek_1; }
                        ],

                        [
                            'attribute' =>'Nm_Rek_2',
                            'format' => 'text',
                            'value' => function($model){ return $model->Kd_Rek_2.":".$model->Nm_Rek_2; }
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