<?php
use yii\helpers\Url;

return [
    [
        'class' => 'kartik\grid\CheckboxColumn',
        'width' => '20px',
    ],
    [
        'class' => 'kartik\grid\SerialColumn',
        'width' => '30px',
    ],
        [
        'class'=>'\kartik\grid\DataColumn',
        'attribute'=>'Tahun',
    ],
    [
        'class'=>'\kartik\grid\DataColumn',
        'attribute'=>'Kd_1',
    ],
    [
        'class'=>'\kartik\grid\DataColumn',
        'attribute'=>'Kd_2',
    ],
    [
        'class'=>'\kartik\grid\DataColumn',
        'attribute'=>'Kd_3',
    ],
    [
        'class'=>'\kartik\grid\DataColumn',
        'attribute'=>'Uraian',
    ],
    // [
        // 'class'=>'\kartik\grid\DataColumn',
        // 'attribute'=>'Harga',
    // ],
    // [
        // 'class'=>'\kartik\grid\DataColumn',
        // 'attribute'=>'Satuan',
    // ],
    // [
        // 'class'=>'\kartik\grid\DataColumn',
        // 'attribute'=>'Keterangan',
    // ],
    [
        'class' => 'kartik\grid\ActionColumn',
        'dropdown' => false,
        'vAlign'=>'middle',
        'urlCreator' => function($action, $model, $key, $index) { 
                return Url::to([$action,'Tahun'=>$key['Tahun'], 'Kd_1'=>$key['Kd_1'],
				'Kd_2'=>$key['Kd_2'], 'Kd_3'=>$key['Kd_3']]);
        },
        'viewOptions'=>['role'=>'modal-remote','title'=>'View','data-toggle'=>'tooltip'],
        'updateOptions'=>['role'=>'modal-remote','title'=>'Update', 'data-toggle'=>'tooltip'],
        'deleteOptions'=>['role'=>'modal-remote','title'=>'Delete', 
                          'data-confirm'=>false, 'data-method'=>false,// for overide yii data api
                          'data-request-method'=>'post',
                          'data-toggle'=>'tooltip',
                          'data-confirm-title'=>'Are you sure?',
                          'data-confirm-message'=>'Are you sure want to delete this item'], 
    ],

];   