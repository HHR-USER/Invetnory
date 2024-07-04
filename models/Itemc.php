<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "itemc".
 *
 * @property int $id
 * @property string $noi
 * @property string $type
 */
class Itemc extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'itemc';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['noi'],'safe'],
            [['noi'],'unique'],
            [['type'], 'string', 'max' => 45],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'noi' => 'Name of stock',
            'type' => 'Type',
        ];
    }
}
