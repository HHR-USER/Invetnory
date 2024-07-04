<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "cart".
 *
 * @property int $id
 * @property string $catagory
 * @property string $noi
 * @property string $packsize
 * @property string $unit
 * @property string $lot
 * @property int $quantity
 * @property string $dp
 * @property string $expairedate
 * @property int $shelflife
 * @property int $location
 * @property string $shelfname
 * @property string $shelfno
 * @property string $dr
 * @property string $am
 * @property string $department
 * @property double $totalcost
 * @property string $birrformat
 * @property double $cost
 * @property string $purchasefrom
 * @property string $remark
 * @property int $fk_consumable
 * @property int $fk_forcata
 * @property int $fk_borrows
 * @property string $firstname
 * @property string $lastname
 * @property string $username
 * @property string $mobile
 * @property string $office
 * @property string $dep
 * @property string $forwhom
 */
class Cart extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'cart';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['quantity', 'shelflife', 'location', 'fk_consumable', 'fk_forcata', 'fk_borrows'], 'integer'],
            [['dp', 'expairedate', 'dr'], 'safe'],
            [['totalcost', 'cost'], 'number'],
            [['catagory', 'noi', 'packsize', 'unit', 'lot', 'shelfname', 'shelfno', 'am', 'department', 'purchasefrom', 'remark', 'firstname', 'lastname', 'username', 'mobile', 'office', 'dep', 'forwhom'], 'string', 'max' => 45],
            [['birrformat'], 'string', 'max' => 11],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'catagory' => 'Catagory',
            'noi' => 'Noi',
            'packsize' => 'Packsize',
            'unit' => 'Unit',
            'lot' => 'Lot',
            'quantity' => 'Quantity',
            'dp' => 'Dp',
            'expairedate' => 'Expairedate',
            'shelflife' => 'Shelflife',
            'location' => 'Location',
            'shelfname' => 'Shelfname',
            'shelfno' => 'Shelfno',
            'dr' => 'Dr',
            'am' => 'Am',
            'department' => 'Department',
            'totalcost' => 'Totalcost',
            'birrformat' => 'Birrformat',
            'cost' => 'Cost',
            'purchasefrom' => 'Purchasefrom',
            'remark' => 'Remark',
            'fk_consumable' => 'Fk Consumable',
            'fk_forcata' => 'Fk Forcata',
            'fk_borrows' => 'Fk Borrows',
            'firstname' => 'Firstname',
            'lastname' => 'Lastname',
            'username' => 'Username',
            'mobile' => 'Mobile',
            'office' => 'Office',
            'dep' => 'Dep',
            'forwhom' => 'Forwhom',
        ];
    }
}
