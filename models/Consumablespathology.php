<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "consumablespathology".
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
 * @property double $shelflife
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
 * @property string $firstname
 * @property string $lastname
 * @property int $mobile
 * @property string $office
 * @property string $username
 * @property int $fk_borrows
 * @property string $dep
 */
class Consumablespathology extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'consumablespathology';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
        [['quantity','mobile'], 'integer'],
        [['remark','noi','dt','dp', 'expairedate', 'dr'], 'safe'],
        [['totalcost', 'cost'], 'number'],
        [['shelflife','shelflifedeicide','personnelid','vendorid','catagory','packsize', 'unit', 'location', 'shelfname', 'shelfno', 'am', 'department', 'purchasefrom','firstname', 'lastname', 'office', 'username', 'dep'], 'string', 'max' => 45],
            [['lot'], 'string', 'max' => 12],
            [['birrformat'], 'string','max' => 11],
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
            'packsize' => 'Packsize',
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
            'dt'=>'Date of transfer',
            'shelflifedeicide'=>'shelf life deicide',
            'remark' => 'Remark',
            'firstname' => 'First name',
            'lastname' => 'Last name',
            'mobile' => 'Mobile',
            'office' =>'Staff',
            'username'=>'Username',
            'dep'=>'Department',
        ];
    }
}
