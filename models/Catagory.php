<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "catagory".
 *
 * @property int $id
 * @property string $typeof_material
 * @property string $catagoryname
 * @property string $location
 * @property string $purchasefrom
 * @property int $fk_cat
 */
class Catagory extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'catagory';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['typeof_material'], 'required'],
            [['fk_cat'], 'integer'],
            [['typeof_material', 'catagoryname', 'location', 'purchasefrom'], 'string', 'max' => 45],
             [['fx_category','facl'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id'=>'ID',
            'typeof_material'=>'Type of Material',
            'catagoryname'=>'Catagoryname',
            'location'=>'Location',
            'purchasefrom'=>'Purchasefrom',
            'facl'=>'Fixed Asset Category Listing',
            'fk_cat'=>'Fk Cat',
        ];
    }

}
