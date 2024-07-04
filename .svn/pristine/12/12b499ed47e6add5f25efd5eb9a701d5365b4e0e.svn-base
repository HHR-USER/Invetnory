<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "consumablesit".
 *
 * @property int $id
 * @property string $catagory
 * @property string $noi
 * @property string $serial
 * @property string $packsize
 * @property string $unit
 * @property string $lot
 * @property int $quantity
 * @property string $dp
 * @property string $expairedate
 * @property string $shelflifedeicide
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
 * @property string $personnelid
 * @property string $vendorid
 * @property string $dt
 * @property string $office
 * @property string $dep
 * @property int $fk
 * @property double $unitprice
 * @property string $description
 */
class Consumablesit extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'consumablesit';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['quantity', 'shelflife'], 'integer'],
            [['noi','remark','dp', 'expairedate', 'dr', 'dt'], 'safe'],
            [['totalcost', 'cost', 'unitprice'], 'number'],
            [['catagory','serial', 'packsize', 'unit', 'lot', 'shelflifedeicide', 'location', 'shelfname', 'shelfno', 'am', 'department', 'purchasefrom', 'firstname', 'lastname', 'username', 'mobile', 'personnelid', 'vendorid', 'office', 'dep', 'description'], 'string', 'max' => 45],
            [['birrformat'], 'string', 'max' => 11],
            [['quantity'],'number','min'=>1],
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
            'noi' => 'Name of item',
            'serial' => 'Serial number',
            'packsize' => 'Pack size',
            'unit' => 'Unit',
            'lot' => 'Lot number',
            'quantity' => 'Quantity',
            'dp' => 'Date of production',
            'expairedate' => 'Expire date',
            'shelflifedeicide' => 'Shelf life deicide',
            'shelflife' => 'Shelflife',
            'location' => 'Location',
            'shelfname' => 'Shelf name',
            'shelfno' => 'Shelf number',
            'dr' => 'Date of registration',
            'am' => 'Autonomous/Managing',
            'department' => 'Department',
            'totalcost' => 'Total cost',
            'birrformat' => 'Birrformat',
            'cost' => 'Cost',
            'purchasefrom' => 'Purchased from',
            'remark' => 'Remark',
            'firstname' => 'First name',
            'lastname' => 'Last name',
            'username' => 'User name',
            'mobile' => 'Mobile',
            'personnelid' => 'Personnel id',
            'vendorid' => 'Vendor id',
            'dt' => 'Date of transfer',
            'office' => 'Staff',
            'dep' => 'Department',
            'unitprice' => 'Unit price',
            'description' => 'Description',
        ];
    }
}
