<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Vendor;

/**
 * VendorSearch represents the model behind the search form of `app\models\Vendor`.
 */
class VendorSearch extends Vendor
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'phonenumber'], 'integer'],
            [['vendorid', 'vendorname', 'vendormiddlename', 'contactname', 'email', 'address1', 'address2', 'city', 'state', 'postalcode', 'country', 'vendornumber', 'autobarcode', 'currentdate', 'website'], 'safe'],
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
        $query = Vendor::find();

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
            'phonenumber' => $this->phonenumber,
            'currentdate' => $this->currentdate,
        ]);

        $query->andFilterWhere(['like', 'vendorid', $this->vendorid])
            ->andFilterWhere(['like', 'vendorname', $this->vendorname])
            ->andFilterWhere(['like', 'vendormiddlename', $this->vendormiddlename])
            ->andFilterWhere(['like', 'contactname', $this->contactname])
            ->andFilterWhere(['like', 'email', $this->email])
            ->andFilterWhere(['like', 'address1', $this->address1])
            ->andFilterWhere(['like', 'address2', $this->address2])
            ->andFilterWhere(['like', 'city', $this->city])
            ->andFilterWhere(['like', 'state', $this->state])
            ->andFilterWhere(['like', 'postalcode', $this->postalcode])
            ->andFilterWhere(['like', 'country', $this->country])
            ->andFilterWhere(['like', 'vendornumber', $this->vendornumber])
            ->andFilterWhere(['like', 'autobarcode', $this->autobarcode])
            ->andFilterWhere(['like', 'website', $this->website]);

        return $dataProvider;
    }
}
