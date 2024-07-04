<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "defualt_idno".
 *
 * @property int $id
 * @property string $PSN
 * @property int $active
 */
class DefualtIdno extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'defualt_idno';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['active'], 'integer'],
            [['PSN'], 'string', 'max' => 20],
            [['PSN'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'PSN' => 'Psn',
            'active' => 'Active',
        ];
    }
static function getdProvinceList(){
        $data = \yii\helpers\ArrayHelper::map(Defualtidno::find()->where(['active'=>0])->all(), 'VND', 'VND');
        return $data;
    }
static function getdProvinceList1(){
        $data = \yii\helpers\ArrayHelper::map(Defualtidno::find()->where(['active1'=>0])->all(), 'PSN', 'PSN');
        return $data;
    }
static function getdProvinceList2(){
        $data = \yii\helpers\ArrayHelper::map(Defualtidno::find()->where(['active2'=>0])->all(), 'SBS', 'SBS');
        return $data;
    }
}
