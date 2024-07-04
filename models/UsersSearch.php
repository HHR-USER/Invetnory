<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Users;

/**
 * UsersSearch represents the model behind the search form of `app\models\Users`.
 */
class UsersSearch extends Users
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'active'], 'integer'],
            [['fname', 'mname', 'lname', 'username', 'Type', 'password', 'personnelid', 'email', 'assign', 'role', 'newpassword', 'oldpassword', 'confirmpas'], 'safe'],
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
        $query = Users::find();

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
            'active' => $this->active,
        ]);

        $query->andFilterWhere(['like', 'fname', $this->fname])
            ->andFilterWhere(['like', 'mname', $this->mname])
            ->andFilterWhere(['like', 'lname', $this->lname])
            ->andFilterWhere(['like', 'username', $this->username])
            ->andFilterWhere(['like', 'Type', $this->Type])
            ->andFilterWhere(['like', 'password', $this->password])
            ->andFilterWhere(['like', 'personnelid', $this->personnelid])
            ->andFilterWhere(['like', 'email', $this->email])
            ->andFilterWhere(['like', 'assign', $this->assign])
            ->andFilterWhere(['like', 'role', $this->role])
            ->andFilterWhere(['like', 'newpassword', $this->newpassword])
            ->andFilterWhere(['like', 'oldpassword', $this->oldpassword])
            ->andFilterWhere(['like', 'confirmpas', $this->confirmpas]);

        return $dataProvider;
    }
}
