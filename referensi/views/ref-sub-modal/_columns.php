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
        'attribute'=>'Kd_Rek_1',
    ],
    [
        'class'=>'\kartik\grid\DataColumn',
        'attribute'=>'Kd_Rek_2',
    ],
    [
        'class'=>'\kartik\grid\DataColumn',
        'attribute'=>'Kd_Rek_3',
    ],
    [
        'class'=>'\kartik\grid\DataColumn',
        'attribute'=>'Kd_Rek_4',
    ],
    [
        'class'=>'\kartik\grid\DataColumn',
        'attribute'=>'Kd_Rek_5',
    ],
    // [
        // 'class'=>'\kartik\grid\DataColumn',
        // 'attribute'=>'Kd_Sub_Modal',
    // ],
    // [
        // 'class'=>'\kartik\grid\DataColumn',
        // 'attribute'=>'Nm_Sub_Modal',
    // ],
    [
        'class' => 'kartik\grid\ActionColumn',
        'dropdown' => false,
        'vAlign'=>'middle',
        'urlCreator' => function($action, $model, $key, $index) { 
                return Url::to([$action,'Kd_Rek_4'=>$key['Kd_Rek_4'], 'Kd_Rek_5'=>$key['Kd_Rek_5'], 'Kd_Sub_Modal'=>$key['Kd_Sub_Modal']]);
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