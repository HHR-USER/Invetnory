<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "logtable".
 *
 * @property int $id
 * @property int $pid
 * @property string $fullname
 * @property string $stockname
 * @property string $action
 * @property int $quantity
 * @property string $dateentered
 * @property string $personnelid
 * @property int $ordernumber
 */
class Logtable extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'logtable';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['pid', 'quantity', 'ordernumber'], 'integer'],
            [['dateentered'], 'safe'],
            [['fullname', 'stockname', 'action', 'personnelid'], 'string', 'max' => 45],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'pid' => 'Pid',
            'fullname' => 'Fullname',
            'stockname' => 'Stockname',
            'action' => 'Action',
            'quantity' => 'Quantity',
            'dateentered' => 'Dateentered',
            'personnelid' => 'Personnelid',
            'ordernumber' => 'Ordernumber',
        ];
    }
}
