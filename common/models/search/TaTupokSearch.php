<?php

namespace common\models\search;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\TaTupok;

/**
 * TaTupokSearch represents the model behind the search form about `common\models\TaTupok`.
 */
class TaTupokSearch extends TaTupok
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Tahun', 'Ur_Tupok'], 'safe'],
            [['Kd_Urusan', 'Kd_Bidang', 'Kd_Unit', 'Kd_Sub', 'No_Tupok'], 'integer'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = TaTupok::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $query->andFilterWhere([
            'Tahun' => $this->Tahun,
            'Kd_Urusan' => $this->Kd_Urusan,
            'Kd_Bidang' => $this->Kd_Bidang,
            'Kd_Unit' => $this->Kd_Unit,
            'Kd_Sub' => $this->Kd_Sub,
            'No_Tupok' => $this->No_Tupok,
        ]);

        $query->andFilterWhere(['like', 'Ur_Tupok', $this->Ur_Tupok]);

        return $dataProvider;
    }

    public function searchUnit($params)
    {
        $query = TaTupok::find()
            ->where(Yii::$app->levelcomponent->PosisiUnit());

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $query->andFilterWhere([
            'Tahun' => $this->Tahun,
            'Kd_Urusan' => $this->Kd_Urusan,
            'Kd_Bidang' => $this->Kd_Bidang,
            'Kd_Unit' => $this->Kd_Unit,
            'Kd_Sub' => $this->Kd_Sub,
            'No_Tupok' => $this->No_Tupok,
        ]);

        $query->andFilterWhere(['like', 'Ur_Tupok', $this->Ur_Tupok]);

        return $dataProvider;
    }
}
