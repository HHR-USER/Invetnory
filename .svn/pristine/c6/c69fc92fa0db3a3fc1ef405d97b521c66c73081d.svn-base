<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tbltrashhold".
 *
 * @property int $id
 * @property string $st_name
 * @property int $q_blance
 * @property int $fk_cons
 * @property int $fk_asset
 * @property int $status
 *
 * @property Assets $fkAsset
 * @property Consumables $fkCons
 */
class Tbltrashhold extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tbltrashhold';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['st_name', 'q_blance'], 'required'],
            [['q_blance', 'fk_cons', 'fk_asset', 'status'], 'integer'],
            [['st_name'], 'string', 'max' => 500],
            [['fk_asset'], 'exist', 'skipOnError' => true, 'targetClass' => Assets::className(), 'targetAttribute' => ['fk_asset' => 'id']],
            [['fk_cons'], 'exist', 'skipOnError' => true, 'targetClass' => Consumables::className(), 'targetAttribute' => ['fk_cons' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'st_name' => 'St Name',
            'q_blance' => 'Q Blance',
            'fk_cons' => 'Fk Cons',
            'fk_asset' => 'Fk Asset',
            'status' => 'Status',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getFkAsset()
    {
        return $this->hasOne(Assets::className(), ['id' => 'fk_asset']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getFkCons()
    {
        return $this->hasOne(Consumables::className(), ['id' => 'fk_cons']);
    }
}
