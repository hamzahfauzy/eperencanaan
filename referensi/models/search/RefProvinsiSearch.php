<?php

namespace referensi\models\search;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\RefProvinsi;

/**
 * RefProvinsiSearch represents the model behind the search form about `common\models\RefProvinsi`.
 */
class RefProvinsiSearch extends RefProvinsi
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Kd_Benua', 'Kd_Benua_Sub', 'Kd_Benua_Sub_Negara', 'Kd_Prov'], 'integer'],
            [['Nm_Prov'], 'safe'],
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
        $query = RefProvinsi::find();

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
            'Kd_Benua' => $this->Kd_Benua,
            'Kd_Benua_Sub' => $this->Kd_Benua_Sub,
            'Kd_Benua_Sub_Negara' => $this->Kd_Benua_Sub_Negara,
            'Kd_Prov' => $this->Kd_Prov,
        ]);

        $query->andFilterWhere(['like', 'Nm_Prov', $this->Nm_Prov]);

        return $dataProvider;
    }
}
