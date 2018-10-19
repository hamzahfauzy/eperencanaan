<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel emusrenbang\models\TaMusrenbangSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Ta Musrenbangs';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ta-musrenbang-index">
    <div class="box box-success">
        <div class="box-header">
            <p>
                <?= Html::a('Tambah Data', ['create'], ['class' => 'btn btn-success pull-right']) ?>
            </p>

            <h1 class="box-title"><?= $this->title ?></h1>
            
        </div>
        <div class="box-body">
            <table class="table">
                <?= GridView::widget([
                    'dataProvider' => $dataProvider,
                    'filterModel' => $searchModel,
                    'columns' => [
                        ['class' => 'yii\grid\SerialColumn'],

                       // 'id',
                       // 'Tahun',
                       // 'Kd_Prov',
                       // 'Kd_Kab',
                       // 'Kd_Kec',
                        // 'Kd_Kel',
                        // 'Kd_Urut_Kel',
                        // 'Kd_Lingkungan',
                        // 'Kd_Jalan',
                        // 'Kd_Urusan',
                        // 'Kd_Bidang',
                        // 'Kd_Prog',
                        // 'Kd_Keg',
                        // 'Kd_Unit',
                        // 'Kd_Sub',
                        // 'Kd_Pem',
                         'Nm_Permasalahan:ntext',
                        // 'Kd_Klasifikasi',
                         'Jenis_Usulan:ntext',
                        // 'Jumlah',
                        // 'Kd_Satuan',
                        // 'Harga_Satuan',
                        // 'Harga_Total',
                        // 'Kd_Sasaran',
                         'Detail_Lokasi:ntext',
                        // 'Latitute',
                        // 'Longitude',
                        // 'Tanggal',
                        // 'status',
                        // 'Status_Survey',
                        // 'Kd_Prioritas_Pembangunan_Daerah',
                        // 'Skor',
                        // 'Rincian_Skor:ntext',
                        // 'Status_Usulan',
                        // 'Status_Penerimaan_Kelurahan',
                        // 'Alasan_Kelurahan:ntext',
                        // 'Status_Penerimaan_Kecamatan',
                        // 'Alasan_Kecamatan:ntext',
                        // 'Status_Penerimaan_Skpd',
                        // 'Alasan_Skpd:ntext',
                        // 'Status_Penerimaan_Kota',
                        // 'Alasan_Kota:ntext',
                        // 'Kd_User',
                        // 'Kd_Asal',
                        // 'Kd1',
                        // 'Kd2',
                        // 'Kd3',
                        // 'Kd4',
                        // 'Kd5',
                        // 'Kd6',
                        // 'Uraian_Usulan:ntext',
                        // 'Kd_Asal_Usulan',

                        ['class' => 'yii\grid\ActionColumn'],
                    ],
                ]); ?>
            </table>
        </div>
    </div>
</div>