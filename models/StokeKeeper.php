<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "stoke_keeper".
 *
 * @property int $id
 * @property string $st_email
 * @property int $st_status
 */
class StokeKeeper extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'stoke_keeper';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['st_email'], 'string'],
            [['st_status'], 'integer'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'st_email' => 'St Email',
            'st_status' => 'St Status',
        ];
    }
}
