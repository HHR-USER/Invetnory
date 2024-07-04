<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "cartassets".
 *
 * @property int $id
 * @property string $catagoryname
 * @property string $unit
 * @property string $lotnumber
 * @property string $serial
 * @property string $MODEL
 * @property string $serviceyear
 * @property int $quantity
 * @property string $shelflifedeicide
 * @property int $shelflife
 * @property string $shelfname
 * @property string $shelfno
 * @property string $birrformat
 * @property double $cost
 * @property string $purchasefrom
 * @property double $totalcost
 * @property string $NOA
 * @property string $DOM
 * @property string $DOC
 * @property string $RD
 * @property string $TD
 * @property string $Status
 * @property string $Place
 * @property string $RC
 * @property string $Picture
 * @property string $RNl
 * @property string $RM
 * @property int $ASSETID
 * @property int $PARENTASSET_ID
 * @property int $ASSETGROUP_ID
 * @property int $LOCATION_ID
 * @property string $VENDOR_ID
 * @property int $OWNER_PERSONNELGROUP_ID
 * @property int $OWNER_PERSONNEL_ID
 * @property int $SERVICEAGREEMENT_ID
 * @property int $CUSTODIAN_PERSONNEL_ID
 * @property int $STATUS_ID
 * @property string $ASSETBARCODE
 * @property string $SERIALNUMBER
 * @property string $DEPARTMENT_ID
 * @property string $CONDITION_ID
 * @property string $SCRAPVALUE
 * @property string $CURRENTVALUE
 * @property string $PURCHASEPRICE
 * @property string $ACCOUNTCODE
 * @property string $PURCHASEORDERNUMBER
 * @property string $ISCHECKEDOUT
 * @property string $ASSETNAME
 * @property string $BRAND
 * @property string $MANUFACTURER
 * @property string $AUTOBARCODE
 * @property string $ASSETTYPE
 * @property string $LOCATION
 * @property string $CONDITIONs
 * @property string $CUSTODIAN
 * @property string $INCLUDEINAUDIT
 * @property string $DEPRECIATIONMETHOD
 * @property string $RECOVERYPERIOD
 * @property string $DATEINSERVICE
 * @property string $DATEAUDITED
 * @property string $DUEDATE
 * @property string $DATEPURCHASED
 * @property string $CHECKOUTDATE
 * @property string $DATECREATED
 * @property string $DATEUPDATED
 * @property string $LASTAUDITDATE
 * @property string $DATEWARRANTYEXPIRES
 * @property string $NEXTSERVICEDUEDATE
 * @property string $NOTES
 * @property string $fname
 * @property string $lname
 * @property int $mobile
 * @property string $office
 * @property string $username
 * @property string $dep
 * @property string $returnables
 * @property string $personnelid
 * @property string $dt
 * @property string $doreturnable
 * @property int $monthlyreport
 */
class Cartassets extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'cartassets';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['quantity','ASSETID', 'PARENTASSET_ID', 'ASSETGROUP_ID', 'LOCATION_ID', 'OWNER_PERSONNELGROUP_ID', 'OWNER_PERSONNEL_ID', 'SERVICEAGREEMENT_ID', 'CUSTODIAN_PERSONNEL_ID', 'STATUS_ID', 'mobile', 'monthlyreport'], 'integer'],
            [['cost', 'totalcost'], 'number'],
            [['MANUFACTURER','catagoryname','serial','assetbarcode','RD', 'DATEINSERVICE', 'DATEAUDITED', 'DUEDATE', 'DATEPURCHASED', 'CHECKOUTDATE','LOCATION','fxa', 'DATECREATED', 'DATEUPDATED', 'LASTAUDITDATE', 'DATEWARRANTYEXPIRES', 'NEXTSERVICEDUEDATE', 'dt', 'LOCATION', 'doreturnable'], 'safe'],
            [['store','NOA','Picture', 'NOTES'], 'string'],
            [['shelflife','unit','MODEL', 'serviceyear', 'shelflifedeicide', 'shelfname', 'shelfno', 'birrformat', 'purchasefrom','DOM', 'DOC', 'TD', 'Status', 'Place', 'RC', 'RNl', 'RM', 'VENDOR_ID','SERIALNUMBER', 'DEPARTMENT_ID', 'CONDITION_ID', 'SCRAPVALUE', 'CURRENTVALUE', 'PURCHASEPRICE', 'ACCOUNTCODE', 'PURCHASEORDERNUMBER', 'ISCHECKEDOUT', 'ASSETNAME', 'BRAND','AUTOBARCODE', 'ASSETTYPE', 'CONDITIONs', 'CUSTODIAN', 'INCLUDEINAUDIT', 'DEPRECIATIONMETHOD', 'RECOVERYPERIOD', 'fname', 'lname', 'office', 'username', 'dep', 'returnables', 'personnelid'], 'string', 'max' => 45],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'catagoryname' => 'Catagory name',
            'unit' => 'Unit',
            'serial' => 'Serial number',
            'MODEL' => 'Model',
            'serviceyear' => 'Service year',
            'quantity' => 'Quantity',
            'shelflifedeicide' => 'Shelf life deicide',
            'shelflife' => 'Shelf life',
            'shelfname' => 'Shelf name',
            'shelfno' => 'Shelf number',
            'birrformat' => 'Birr format',
            'cost' => 'Cost',
            'purchasefrom' => 'Purchased from',
            'totalcost' => 'Totalcost',
            'NOA' => 'Asset name',
            'DOM' => 'Date of manufactured',
            'DOC' => 'Date of checking',
            'RD' => 'Registration date',
            'TD' => 'The department',
            'Status' => 'Status',
            'Place' => 'Place',
            'RC' => 'Recommendation',
            'Picture' => 'Picture',
            'RNl' => 'Renewing date',
            'RM' => 'Rm',
            'ASSETID' => 'Asset id',
            'PARENTASSET_ID'=>'Parentasset id',
            'ASSETGROUP_ID'=>'Assetgroup id',
            'LOCATION_ID' => 'Location id',
            'VENDOR_ID' => 'Vendor id',
            'OWNER_PERSONNELGROUP_ID' => 'Owner personnelgroup id',
            'OWNER_PERSONNEL_ID' => 'Owner personnel id',
            'SERVICEAGREEMENT_ID' => 'Service agreement id',
            'CUSTODIAN_PERSONNEL_ID' => 'Custodian personnel id',
            'STATUS_ID' => 'Status id',
            'assetbarcode' => 'Asset barcode',
            'SERIALNUMBER' => 'Serial number',
            'DEPARTMENT_ID' => 'Department id',
            'CONDITION_ID' => 'Condition id',
            'SCRAPVALUE' => 'Scrap value',
            'CURRENTVALUE' => 'Current value',
            'PURCHASEPRICE' => 'Purchaseprice',
            'ACCOUNTCODE' => 'Accountcode',
            'PURCHASEORDERNUMBER' => 'Purchase order number',
            'ISCHECKEDOUT' => 'Ischeckedout',
            'ASSETNAME' => 'Asset name',
            'BRAND' => 'Brand',
            'MANUFACTURER' => 'Manufacturer',
            'AUTOBARCODE' => 'Autobarcode',
            'ASSETTYPE' => 'Asset type',
            'LOCATION' => 'Location',
            'CONDITIONs' => 'ConditioNs',
            'CUSTODIAN' => 'Custodian',
            'INCLUDEINAUDIT' => 'Includeinaudit',
            'DEPRECIATIONMETHOD' => 'Depreciationmethod',
            'RECOVERYPERIOD' => 'Recovery period',
            'DATEINSERVICE' => 'Date in service',
            'DATEAUDITED' => 'Date audited',
            'DUEDATE' => 'Duedate',
            'DATEPURCHASED' => 'Date purchased',
            'CHECKOUTDATE' => 'Checkout date',
            'DATECREATED' => 'Datecreated',
            'DATEUPDATED' => 'Dateupdated',
            'LASTAUDITDATE' => 'Lastauditdate',
            'DATEWARRANTYEXPIRES' => 'Date warranty expires',
            'NEXTSERVICEDUEDATE' => 'Next service duedate',
            'NOTES' => 'Remarks',
            'fname' => 'First name',
            'lname' => 'Last name',
            'mobile' => 'Mobile',
            'office' => 'Location',
            'username' => 'User name',
            'dep' => 'From Staff',
            'returnables' => 'Returnables',
            'personnelid' => 'Personnel id',
            'dt' => 'Date of transfer',
            'doreturnable' => 'Doreturnable',
            'monthlyreport' => 'Monthly report',
        ];
    }
}
