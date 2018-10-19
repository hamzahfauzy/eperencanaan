<?php

namespace referensi\models\search;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\RefGolongan;

/**
 * RefGolonganSearch represents the model behind the search form about `common\models\RefGolongan`.
 */
class RefGolonganSearch extends RefGolongan
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Kd_Golongan'], 'integer'],
            [['Nm_Golongan'], 'safe'],
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
        $query = RefGolongan::find();

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
            'Kd_Golongan' => $this->Kd_Golongan,
        ]);

        $query->andFilterWhere(['like', 'Nm_Golongan', $this->Nm_Golongan]);

        return $dataProvider;
    }
}
