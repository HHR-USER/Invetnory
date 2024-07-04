<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Catagory;

/**
 * CatagorySearch represents the model behind the search form of `app\models\Catagory`.
 */
class CatagorySearch extends Catagory
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'fk_cat'], 'integer'],
            [['location','purchasefrom','typeof_material', 'catagoryname'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
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
        $query = Catagory::find();

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
            'id' => $this->id,
            'fk_cat' => $this->fk_cat,
        ]);

        $query->andFilterWhere(['like', 'typeof_material', $this->typeof_material])
            ->andFilterWhere(['like', 'catagoryname', $this->catagoryname])
            ->andFilterWhere(['like', 'location', $this->location])
                        ->andFilterWhere(['like', 'purchasefrom', $this->purchasefrom]);
        return $dataProvider;
    }
}
