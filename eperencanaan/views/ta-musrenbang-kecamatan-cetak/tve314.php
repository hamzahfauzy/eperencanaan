<?php
use yii\helpers\Html;

/* @var $this yii\web\View */
$this->title = 'Daftar Urutan kegiatan Prioritas Kecamatan Berdasar SKPD';
$this->params['subtitle'] = 'Hasil';

//$this->params['breadcrumbs'][] ='';
$this->params['breadcrumbs'][] = ['label' => 'Laporan', 'url' => ['#']];
$this->params['breadcrumbs'][] = $this->title;

$this->registerJsFile(
        '@web/js/sistem/musrenbangkeclaporan.js', ['depends' => [\yii\web\JqueryAsset::className()]]
);
?>

<div class="col-md-12">
    <div class="box-widget widget-module">
        <div class="widget-container">
            <div class=" widget-block">
                <div class="control-wrap">
                    <?php
                    $form = \yii\bootstrap\ActiveForm::begin(['id' => 'search-usulan',
                                'action' => ['ta-musrenbang-kecamatan-cetak/tve314cetak'], 'options' => ['target' => '_blank']])
                    ?>
                    <div class="form-group">
                        <div class="col-sm-2">
                            <label class="col-sm-6 control-label">Kelurahan</label>
                            <?= $form->field($model, 'kelurahan')->dropDownList($NASKelurahan)->label(false); ?>
                        </div>
                        <div class="col-sm-4">
                            <label class="col-sm-6 control-label">Bidang Pembangungan</label>
                            <?= $form->field($model, 'bid_pem')->dropDownList($ZUL_bid_pem)->label(false); ?>
                        </div>

                        <div class="col-sm-2">

                            <br>
                            <?= Html::button('&nbsp;Cari&nbsp;', ['id' => 'cari-button-tve314', 'class' => 'btn btn-primary btn-lg']); ?>
                            <?= Html::submitButton('&nbsp;Cetak&nbsp;', ['id' => 'cari-submit', 'class' => 'btn btn-primary btn-lg']); ?>


                        </div>
                    </div>
                    <?php \yii\bootstrap\ActiveForm::end() ?>
                </div>
                <table class="table table-bordered data-table tabel-data">
                    <thead>
                        <tr>
                            <th>
                                No
                            </th>

                            <th>
                                Prioritas Daerah 
                            </th>

                            <th>
                                Sasaran Daerah
                            </th>

                            <th>
                                Program
                            </th>

                            <th>
                                Kegiatan Prioritas
                            </th>
                            <th>
                                Sasaran Kegiatan
                            </th>
                            <th>
                                Lokasi <br> (desa/kel)
                            </th>
                            <th>
                                Volume
                            </th>
                            <th>
                                Pagu
                            </th>
                            <th>
                                SKPD Penanggung Jawab
                            </th>
                        </tr>
                    </thead>
                    <tbody id="body-tabel"></tbody>
                </table>
            </div>
        </div>
    </div>
</div>

