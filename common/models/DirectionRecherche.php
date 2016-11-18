<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Direction;

/**
 * DirectionRecherche represents the model behind the search form about `common\models\Direction`.
 */
class DirectionRecherche extends Direction
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['direction_id'], 'integer'],
            [['lib_court', 'lib_long', 'dependance'], 'safe'],
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
        $query = Direction::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'lib_court' => $this->lib_court,
        ]);

        $query->andFilterWhere(['like', 'direction_id', $this->direction_id])
            ->andFilterWhere(['like', 'lib_long', $this->lib_long])
            ->andFilterWhere(['like', 'dependance', $this->dependance]);

        return $dataProvider;
    }
}
