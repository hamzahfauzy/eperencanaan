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
    
    /*
    [
        'class'=>'\kartik\grid\DataColumn',
        'attribute'=>'provinsi.Nm_Prov',
    ],
    [
        'class'=>'\kartik\grid\DataColumn',
        'attribute'=>'kabupaten.Nm_Kab',
    ],
    */
    
    [
        'class'=>'\kartik\grid\DataColumn',
        'attribute'=>'Kd_Kec',
        'value'=>'kecamatan.Nm_Kec',
        'label'=>'Kecamatan',
        'filter'=>Yii::$app->runAction('ajax/kecamatan', ['Kd_Prov' => 12,
                                                          'Kd_Kab' => 71])
    ],
    [
        'class'=>'\kartik\grid\DataColumn',
        'attribute'=>'Kd_Urut_Kel',
        'value'=>'kelurahan.Nm_Kel',
        'label'=>'Kelurahan',
        'filter'=>Yii::$app->runAction('ajax/kelurahan', ['Kd_Prov' => 12,
                                                          'Kd_Kab' => 71,
                                                          'Kd_Kec' => $searchModel->Kd_Kec])
    ],
    /*[
        'class'=>'\kartik\grid\DataColumn',
        'attribute'=>'Kd_Prov',
    ],
    [
        'class'=>'\kartik\grid\DataColumn',
        'attribute'=>'Kd_Kab',
    ],
    [
        'class'=>'\kartik\grid\DataColumn',
        'attribute'=>'Kd_Kec',
    ],
    [
        'class'=>'\kartik\grid\DataColumn',
        'attribute'=>'Kd_Kel',
    ],
    
    [
        'class'=>'\kartik\grid\DataColumn',
        'attribute'=>'Kd_Urut_Kel',
    ],
    [
        'class'=>'\kartik\grid\DataColumn',
        'attribute'=>'Kd_Lingkungan',
    ],*/
    [
        'class'=>'\kartik\grid\DataColumn',
        'attribute'=>'Nm_Lingkungan',
        'label' => 'Nama Lingkungan'
    ],
    [
        'class' => 'kartik\grid\ActionColumn',
        'dropdown' => false,
        'vAlign'=>'middle',
        'urlCreator' => function($action, $model, $key, $index) { 
              //  return Url::to([$action,'Kd_Prov, $Kd_Kab, $Kd_Kec, $Kd_Kel, $Kd_Urut_Kel, $Kd_Lingkungan'=>$key]);
                  return Url::to([$action,'Kd_Prov' =>$key['Kd_Prov'], 'Kd_Kab' =>$key['Kd_Kab'] , 'Kd_Kec'=>$key['Kd_Kec'],'Kd_Kel'=>$key['Kd_Kel'],'Kd_Urut_Kel'=>$key['Kd_Urut_Kel'] ,'Kd_Lingkungan'=>$key['Kd_Lingkungan']]);
        },
        'viewOptions'=>['role'=>'modal-remote','title'=>'Lihat','data-toggle'=>'tooltip'],
        'updateOptions'=>['role'=>'modal-remote','title'=>'Ubah', 'data-toggle'=>'tooltip'],
        'deleteOptions'=>['role'=>'modal-remote','title'=>'Hapus', 
                          'data-confirm'=>false, 'data-method'=>false,// for overide yii data api
                          'data-request-method'=>'post',
                          'data-toggle'=>'tooltip',
                          'data-confirm-title'=>'Are you sure?',
                          'data-confirm-message'=>'Are you sure want to delete this item'], 
    ],

];   