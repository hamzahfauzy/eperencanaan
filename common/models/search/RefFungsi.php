<?php

namespace common\models\search;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\RefFungsi as RefFungsiModel;

/**
 * RefFungsi represents the model behind the search form about `common\models\RefFungsi`.
 */
class RefFungsi extends RefFungsiModel
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Kd_Fungsi'], 'integer'],
            [['Nm_Fungsi'], 'safe'],
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
        $query = RefFungsiModel::find();

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
            'Kd_Fungsi' => $this->Kd_Fungsi,
        ]);

        $query->andFilterWhere(['like', 'Nm_Fungsi', $this->Nm_Fungsi]);

        return $dataProvider;
    }
}
