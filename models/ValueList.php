<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "value_list".
 *
 * @property int $id
 * @property string $value
 * @property string $index
 */
class ValueList extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'value_list';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['value', 'index'], 'string', 'max' => 45],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'value' => 'Value',
            'index' => 'Index',
        ];
    }
public static function getUnit(){
        $data1=ValueList::find()->where(['index'=>'2'])->one();
        $data=explode(",",$data1->value);
        $result=[];
        $i=1;
      foreach($data as $val){
          $result[$val]=$val;
          $i++;
       }
       return $result;
    }
}
