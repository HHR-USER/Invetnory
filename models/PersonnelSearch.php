<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Personnel;

/**
 * PersonnelSearch represents the model behind the search form of `app\models\Personnel`.
 */
class PersonnelSearch extends Personnel
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'personnelgroup_id', 'mobilephonenumber', 'jobtile_id', 'Fk_pid', 'FK_idp'], 'integer'],
            [['personnelid', 'prbs', 'firstname', 'lastname', 'emailaddress', 'workphonenumber', 'homephonenumber', 'pagernumber', 'autobarcode', 'jobtitle', 'personnelgroup', 'displayname', 'displaynameandnumber', 'status_id', 'personnelstatus', 'currentdate'], 'safe'],
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
        $query = Personnel::find();

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
            'personnelgroup_id' => $this->personnelgroup_id,
            'mobilephonenumber' => $this->mobilephonenumber,
            'jobtile_id' => $this->jobtile_id,
            'currentdate' => $this->currentdate,
            'Fk_pid' => $this->Fk_pid,
            'FK_idp' => $this->FK_idp,
        ]);

        $query->andFilterWhere(['like', 'personnelid', $this->personnelid])
            ->andFilterWhere(['like', 'prbs', $this->prbs])
            ->andFilterWhere(['like', 'firstname', $this->firstname])
            ->andFilterWhere(['like', 'lastname', $this->lastname])
            ->andFilterWhere(['like', 'emailaddress', $this->emailaddress])
            ->andFilterWhere(['like', 'workphonenumber', $this->workphonenumber])
            ->andFilterWhere(['like', 'homephonenumber', $this->homephonenumber])
            ->andFilterWhere(['like', 'pagernumber', $this->pagernumber])
            ->andFilterWhere(['like', 'autobarcode', $this->autobarcode])
            ->andFilterWhere(['like', 'jobtitle', $this->jobtitle])
            ->andFilterWhere(['like', 'personnelgroup', $this->personnelgroup])
            ->andFilterWhere(['like', 'displayname', $this->displayname])
            ->andFilterWhere(['like', 'displaynameandnumber', $this->displaynameandnumber])
            ->andFilterWhere(['like', 'status_id', $this->status_id])
            ->andFilterWhere(['like', 'personnelstatus', $this->personnelstatus]);

        return $dataProvider;
    }
}
