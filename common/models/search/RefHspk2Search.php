<?php

namespace common\models\search;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\RefHspk2;

/**
 * RefHspk2Search represents the model behind the search form about `common\models\RefHspk2`.
 */
class RefHspk2Search extends RefHspk2
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Kd_Hspk1', 'Kd_Hspk2'], 'integer'],
            [['Nm_Hspk2'], 'safe'],
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
        $query = RefHspk2::find();

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
            'Kd_Hspk1' => $this->Kd_Hspk1,
            'Kd_Hspk2' => $this->Kd_Hspk2,
        ]);

        $query->andFilterWhere(['like', 'Nm_Hspk2', $this->Nm_Hspk2]);

        return $dataProvider;
    }
}
