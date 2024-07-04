<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tablet".
 *
 * @property int $id
 * @property string $tablet_type
 * @property string $model
 * @property string $serial_no
 * @property string $used_by
 * @property string $date
 * @property string $register_by
 * @property string $dates
 */
class Tablet extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tablet';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['tablet_type','model','mobile','serial_no','used_by','register_by'], 'string'],
		    [['mobile'], 'string'],
            [['date', 'dates'],'safe'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'tablet_type'=>'Enter Tablet Type',
            'model' => 'Enter Tablet Model',
            'serial_no' => 'Enter Tablete Serial No',
            'used_by' => 'Enter Data Collector full name or full name of person who use tablet',
			'mobile'=>'Mobile Number',
            'date' => 'Enter Date of registration',
            'register_by' => 'Register By',
            'dates' => 'Dates',
        ];
    }
}
