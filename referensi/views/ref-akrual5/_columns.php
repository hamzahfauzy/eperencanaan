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
        'attribute'=>'Kd_Akrual_1',
    ],
    [
        'class'=>'\kartik\grid\DataColumn',
        'attribute'=>'Kd_Akrual_2',
    ],
    [
        'class'=>'\kartik\grid\DataColumn',
        'attribute'=>'Kd_Akrual_3',
    ],
    [
        'class'=>'\kartik\grid\DataColumn',
        'attribute'=>'Kd_Akrual_4',
    ],
    [
        'class'=>'\kartik\grid\DataColumn',
        'attribute'=>'Kd_Akrual_5',
    ],
    // [
        // 'class'=>'\kartik\grid\DataColumn',
        // 'attribute'=>'Nm_Akrual_5',
    // ],
    // [
        // 'class'=>'\kartik\grid\DataColumn',
        // 'attribute'=>'Peraturan',
    // ],
    [
        'class' => 'kartik\grid\ActionColumn',
        'dropdown' => false,
        'vAlign'=>'middle',
        'urlCreator' => function($action, $model, $key, $index) { 
                return Url::to([$action,'Kd_Akrual_1'=>$key['Kd_Akrual_1'], 'Kd_Akrual_2'=>$key['Kd_Akrual_2'], 'Kd_Akrual_3'=>$key['Kd_Akrual_3'], 
				'Kd_Akrual_4'=>$key['Kd_Akrual_4'], 'Kd_Akrual_5'=>$key['Kd_Akrual_5']]);
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