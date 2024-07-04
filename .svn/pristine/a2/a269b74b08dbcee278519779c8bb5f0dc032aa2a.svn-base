<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "lmark".
 *
 * @property int $id
 * @property string $ETAA_ID
 */
class Lmark extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'lmark';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['ETAA_ID'], 'string'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'ETAA_ID' => 'Etaa ID',
        ];
    }
}
