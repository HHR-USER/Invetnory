<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "value".
 *
 * @property int $id
 * @property int $table
 * @property int $chair
 * @property int $shelf
 * @property int $cupb
 * @property int $fil
 * @property int $tvb
 * @property int $loca
 * @property int $adding
 * @property int $photo
 * @property int $comput
 * @property int $ups
 * @property int $stabl
 * @property int $over
 * @property int $tv
 * @property int $photocamera
 * @property int $generator
 * @property int $labor
 * @property int $medic
 * @property int $veh
 * @property int $motor
 */
class Value extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'value';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['table_l', 'chair', 'shelf', 'cupb', 'fil', 'tvb', 'loca', 'adding', 'photo', 'comput', 'ups', 'stabl', 'over', 'tv', 'photocamera', 'generator', 'labor', 'medic', 'veh', 'motor'], 'integer'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'table_l' => 'Table',
            'chair' => 'Chair',
            'shelf' => 'Shelf',
            'cupb' => 'Cupb',
            'fil' => 'Fil',
            'tvb' => 'Tvb',
            'loca' => 'Loca',
            'adding' => 'Adding',
            'photo' => 'Photo',
            'comput' => 'Comput',
            'ups' => 'Ups',
            'stabl' => 'Stabl',
            'over' => 'Over',
            'tv' => 'Tv',
            'photocamera' => 'Photocamera',
            'generator' => 'Generator',
            'labor' => 'Labor',
            'medic' => 'Medic',
            'veh' => 'Veh',
            'motor' => 'Motor',
        ];
    }
}
