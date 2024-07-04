<?php
namespace app\models;
use Yii;
/**
 * This is the model class for table "withdrow".
 *
 * @property int $id
 * @property string $catagory
 * @property string $noi
 * @property string $consbarcode
 * @property string $serial
 * @property string $packsize
 * @property string $unit
 * @property string $lot
 * @property int $quantity
 * @property string $dp
 * @property string $expairedate
 * @property string $shelflife
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
 * @property string $firstname
 * @property string $lastname
 * @property string $username
 * @property string $mobile
 * @property string $personnelid
 * @property string $vendorid
 * @property string $dt
 * @property string $office
 * @property string $dep
 * @property int $monthlyreport
 * @property int $yearlyreport
 * @property string $store
 * @property int $fka
 * @property int $fkm
 * @property int $fkc
 * @property int $fks
 * @property int $fki
 * @property int $fkp
 * @property string $stat
 * @property int $idm
 */
class Withdrow extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'withdrow';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['consbarcode', 'stat'], 'string'],
            [['quantity', 'monthlyreport', 'yearlyreport', 'fka', 'fkm', 'fkc', 'fks', 'fki', 'fkp', 'idm'], 'integer'],
            [['pc','dp','expairedate','dr','dt'],'safe'],
            [['totalcost', 'cost'], 'number'],
            [['catagory', 'serial', 'packsize', 'unit', 'lot', 'shelflife', 'location', 'shelfname', 'shelfno', 'am', 'department', 'purchasefrom', 'remark', 'firstname', 'lastname', 'username', 'mobile', 'personnelid', 'vendorid', 'office', 'dep', 'store'], 'string', 'max' => 45],
            [['noi'], 'string','max'=>10000],
            [['birrformat'], 'string','max'=>11],
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
            'pc'=>'Product code',
            'noi' => 'Name of stock',
            'serial' => 'Serial number',
            'packsize' => 'Pack size',
            'unit' => 'Unit',
            'lot' => 'Lot number',
            'quantity' => 'Quantity',
            'dp' => 'Date of production',
            'expairedate' => 'Expire date',
            'shelflife' => 'Shelf life',
            'location' => 'Location',
            'shelfname' => 'Shelf name',
            'shelfno' => 'Shelf number',
            'dr' => 'Date of transfer',
            'am' => 'Autonomous/Managing',
            'department' => 'Department',
            'totalcost' => 'Total cost',
            'birrformat' => 'Birr format',
            'cost' => 'Cost',
            'purchasefrom' => 'Purchased from',
            'remark' => 'Remark',
            'firstname' => 'Firstname',
            'lastname' => 'Lastname',
            'username' => 'Username',
            'mobile' => 'Mobile',
            'personnelid' => 'Personnel id',
            "consbarcode"=>"Barcode",
            'vendorid' => 'Vendorid',
            'dt' => 'Date',
            'office' => 'Unit/Location',
            'dep' => 'From Staff',
            'monthlyreport' => 'By Month ',
            'yearlyreport' => 'By Year',
            'fka' => 'Fka',
            'fkm' => 'Fkm',
            'fkc' => 'Fkc',
            'fks' => 'Fks',
            'fki' => 'Fki',
            'fkp' => 'Fkp',
        ];
    }
}

