<?php

namespace common\models\search;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\RefKategoriPekerjaanAsb;

/**
 * RefKategoriPekerjaanAsbSearch represents the model behind the search form about `common\models\RefKategoriPekerjaanAsb`.
 */
class RefKategoriPekerjaanAsbSearch extends RefKategoriPekerjaanAsb
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Kd_Pekerjaan'], 'integer'],
            [['Uraian'], 'safe'],
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
        $query = RefKategoriPekerjaanAsb::find();

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
            'Kd_Pekerjaan' => $this->Kd_Pekerjaan,
        ]);

        $query->andFilterWhere(['like', 'Uraian', $this->Uraian]);

        return $dataProvider;
    }
}
