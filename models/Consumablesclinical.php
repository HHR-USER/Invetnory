<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "consumablesclinical".
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
class Consumablesclinical extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'consumablesclinical';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['quantity', 'shelflife'], 'integer'],
            [['remark','noi','dp', 'expairedate', 'dr', 'dt'], 'safe'],
            [['totalcost', 'cost', 'unitprice'], 'number'],
            [['shelflife','catagory','packsize', 'unit', 'lot', 'shelflifedeicide', 'location', 'shelfname', 'shelfno', 'am', 'department', 'purchasefrom','firstname', 'lastname', 'username', 'mobile', 'personnelid', 'vendorid', 'office', 'dep', 'description'], 'string', 'max' => 45],
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
            'packsize' => 'Pack size',
            'unit' => 'Unit',
            'lot' => 'Lot number',
            'quantity' => 'Quantity',
            'dp' => 'Date production',
            'expairedate' => 'Expire date',
            'shelflifedeicide' => 'Shelf life deicide',
            'shelflife' => 'Shelf life',
            'location' => 'Location',
            'shelfname' => 'Shelf name',
            'shelfno' => 'Shelf number',
            'dr' => 'Date of registration',
            'am' => 'Autonomous/Managing',
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
