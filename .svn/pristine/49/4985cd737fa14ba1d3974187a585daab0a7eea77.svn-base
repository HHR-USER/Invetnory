<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "consumablesmicro".
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
 * @property int $mobile
 * @property string $office
 * @property string $username
 * @property string $dep
 */
class Consumablesmicro extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'consumablesmicro';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['quantity', 'shelflife','mobile'], 'integer'],
            [['noi','remark','dt','dp', 'expairedate', 'dr'], 'safe'],
            [['totalcost', 'cost'], 'number'],
            [['packsize','shelflifedeicide','personnelid','vendorid','catagory','packsize', 'unit', 'lot', 'location', 'shelfname', 'shelfno', 'am', 'department', 'purchasefrom','firstname', 'lastname', 'office', 'username', 'dep'], 'string', 'max' => 45],
            [['birrformat'], 'string', 'max' => 11],
            [['quantity'],'number','min'=>1],
            [['mobile'],'number','min'=>10],
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
            'dp' => 'Date of Production',
            'expairedate' => 'Expire date',
            'shelflife' => 'Shelf life',
            'location' => 'Location',
            'shelfname' => 'Shelf name',
            'shelfno' => 'Shelf number',
            'dr' => 'Date Registered',
            'am' => 'Autonomous/Managing',
            'department' => 'Department',
            'totalcost' => 'Total cost',
            'birrformat' => 'Birr format',
            'cost' => 'Cost',
            'purchasefrom' => 'Purchased from',
            'shelflifedeicide'=>'shelf life deicide',
            'remark' => 'Remark',
            'firstname' => 'First name',
            'lastname' => 'Last name',
            'mobile' => 'Mobile',
            'office' => 'Staff',
            'username' => 'Username',
            'dt'=>'date of transfer',
            'dep' => 'Depertmet transfered from',
        ];
    }
}
