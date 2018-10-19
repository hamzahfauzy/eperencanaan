<?php

namespace common\models\search;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\RefAplikasi;

/**
 * RefAplikasiSearch represents the model behind the search form about `common\models\RefAplikasi`.
 */
class RefAplikasiSearch extends RefAplikasi
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Kd_Aplikasi', 'Nm_Aplikasi'], 'safe'],
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
        $query = RefAplikasi::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $query->andFilterWhere(['like', 'Kd_Aplikasi', $this->Kd_Aplikasi])
            ->andFilterWhere(['like', 'Nm_Aplikasi', $this->Nm_Aplikasi]);

        return $dataProvider;
    }
}
