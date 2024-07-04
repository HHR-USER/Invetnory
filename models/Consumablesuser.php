<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "consumablesuser".
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
 * @property string $location
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
 */
class Consumablesuser extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'consumablesuser';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['quantity', 'shelflife'], 'integer'],
            [['noi','remark','dp', 'expairedate', 'dr'], 'safe'],
            [['totalcost', 'cost'], 'number'],
            [['personnelid','vendorid','catagory','packsize', 'unit', 'lot', 'location', 'shelfname', 'shelfno', 'am', 'department', 'purchasefrom','firstname', 'lastname', 'username', 'mobile', 'office', 'dep'], 'string', 'max' => 45],
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
            'noi' => 'Name of stock',
            'packsize' => 'Packsize',
            'unit' => 'Unit',
            'lot' => 'Lot',
            'quantity' => 'Quantity',
            'dp' => 'Date of production',
            'expairedate' =>'Expire date',
            'shelflife' =>'Shelflife',
            'location' =>'Location',
            'shelfname' =>'Shelf name',
            'shelfno'=>'Shelf number',
            'dr'=>'Date of registration',
            'am'=>'Autonomous/Managing',
            'department' => 'Department',
            'totalcost' => 'Total cost',
            'birrformat' => 'Birr format',
            'cost' => 'Cost',
            'purchasefrom' => 'Purchased from',
            'remark' => 'Remark',
            'firstname' => 'First name',
            'lastname' => 'Last name',
            'username' => 'User name',
            'mobile' => 'Mobile',
            'office' => 'Office',
            'dep' => 'Department',
        ];
    }
}
