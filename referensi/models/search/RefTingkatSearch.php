<?php

namespace referensi\models\search;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\RefTingkat;

/**
 * RefTingkatSearch represents the model behind the search form about `common\models\RefTingkat`.
 */
class RefTingkatSearch extends RefTingkat
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Kd_Tingkat'], 'integer'],
            [['Nm_Tingkat'], 'safe'],
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
        $query = RefTingkat::find();

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
            'Kd_Tingkat' => $this->Kd_Tingkat,
        ]);

        $query->andFilterWhere(['like', 'Nm_Tingkat', $this->Nm_Tingkat]);

        return $dataProvider;
    }
}
