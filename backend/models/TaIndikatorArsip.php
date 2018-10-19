<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "Ta_Indikator_Arsip".
 *
 * @property integer $Tahun
 * @property integer $Kd_Perubahan
 * @property integer $Kd_Urusan
 * @property integer $Kd_Bidang
 * @property integer $Kd_Unit
 * @property integer $Kd_Sub
 * @property integer $Kd_Prog
 * @property integer $ID_Prog
 * @property integer $Kd_Keg
 * @property integer $Kd_Indikator
 * @property integer $No_ID
 * @property string $Tolak_Ukur
 * @property double $Target_Angka
 * @property string $Target_Uraian
 * @property string $DateCreate
 */
class TaIndikatorArsip extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'Ta_Indikator_Arsip';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Tahun', 'Kd_Perubahan', 'Kd_Urusan', 'Kd_Bidang', 'Kd_Unit', 'Kd_Sub', 'Kd_Prog', 'ID_Prog', 'Kd_Keg', 'Kd_Indikator', 'No_ID'], 'required'],
            [['Tahun', 'Kd_Perubahan', 'Kd_Urusan', 'Kd_Bidang', 'Kd_Unit', 'Kd_Sub', 'Kd_Prog', 'ID_Prog', 'Kd_Keg', 'Kd_Indikator', 'No_ID'], 'integer'],
            [['Target_Angka'], 'number'],
            [['DateCreate'], 'safe'],
            [['Tolak_Ukur', 'Target_Uraian'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'Tahun' => 'Tahun',
            'Kd_Perubahan' => 'Kd  Perubahan',
            'Kd_Urusan' => 'Kd  Urusan',
            'Kd_Bidang' => 'Kd  Bidang',
            'Kd_Unit' => 'Kd  Unit',
            'Kd_Sub' => 'Kd  Sub',
            'Kd_Prog' => 'Kd  Prog',
            'ID_Prog' => 'Id  Prog',
            'Kd_Keg' => 'Kd  Keg',
            'Kd_Indikator' => 'Kd  Indikator',
            'No_ID' => 'No  ID',
            'Tolak_Ukur' => 'Tolak  Ukur',
            'Target_Angka' => 'Target  Angka',
            'Target_Uraian' => 'Target  Uraian',
            'DateCreate' => 'Date Create',
        ];
    }

    /**
     * @inheritdoc
     * @return \backend\models\query\TaIndikatorArsipQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \backend\models\query\TaIndikatorArsipQuery(get_called_class());
    }
}
