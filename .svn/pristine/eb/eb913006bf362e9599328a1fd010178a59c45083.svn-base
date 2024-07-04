<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "assetspathology".
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
 * @property string $shelflife
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
 * @property string $personnelid
 * @property int $mobile
 * @property string $office
 * @property string $username
 * @property string $dep
 * @property string $returnables
 * @property string $doreturnable
 * @property int $checks
 * @property string $monthlyreport
 * @property string $yearlyreport
 */
class Assetspathology extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'assetspathology';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['quantity', 'ASSETID', 'PARENTASSET_ID', 'ASSETGROUP_ID', 'LOCATION_ID', 'OWNER_PERSONNELGROUP_ID', 'OWNER_PERSONNEL_ID', 'SERVICEAGREEMENT_ID', 'CUSTODIAN_PERSONNEL_ID', 'STATUS_ID', 'mobile', 'checks'], 'integer'],
            [['cost', 'totalcost'], 'number'],
            [['NOA', 'Picture', 'NOTES'], 'string'],
            [['DATEINSERVICE', 'DATEAUDITED', 'DUEDATE', 'DATEPURCHASED', 'CHECKOUTDATE', 'DATECREATED', 'DATEUPDATED', 'LASTAUDITDATE', 'DATEWARRANTYEXPIRES', 'NEXTSERVICEDUEDATE', 'doreturnable'], 'safe'],
            [['catagoryname', 'unit', 'lotnumber', 'serviceyear', 'shelflifedeicide', 'shelflife', 'shelfname', 'shelfno', 'birrformat', 'purchasefrom', 'DOM', 'DOC', 'RD', 'TD', 'Status', 'Place', 'RC', 'RNl', 'RM', 'VENDOR_ID', 'ASSETBARCODE', 'SERIALNUMBER', 'DEPARTMENT_ID', 'CONDITION_ID', 'SCRAPVALUE', 'CURRENTVALUE', 'PURCHASEPRICE', 'ACCOUNTCODE', 'PURCHASEORDERNUMBER', 'ISCHECKEDOUT', 'ASSETNAME', 'AUTOBARCODE', 'ASSETTYPE', 'LOCATION', 'CONDITIONs', 'CUSTODIAN', 'INCLUDEINAUDIT', 'DEPRECIATIONMETHOD', 'RECOVERYPERIOD', 'fname', 'lname', 'personnelid', 'office', 'username', 'dep', 'returnables', 'monthlyreport', 'yearlyreport'], 'string', 'max' => 45],
            [['serial', 'MODEL', 'BRAND', 'MANUFACTURER'], 'string', 'max' => 1000],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'catagoryname' => 'Catagoryname',
            'unit' => 'Unit',
            'lotnumber' => 'Lotn umber',
            'serial' => 'Serial',
            'MODEL' => 'Model',
            'serviceyear' => 'Service year',
            'quantity' => 'Quantity',
            'shelflifedeicide' => 'Shelf life deicide',
            'shelflife' => 'Shelf life',
            'shelfname' => 'Shelf name',
            'shelfno' => 'Shelf number',
            'birrformat' => 'Birrformat',
            'cost' => 'Cost',
            'purchasefrom' => 'Purchased from',
            'totalcost' => 'Totalcost',
            'NOA' => 'Name of assets',
            'DOM' => 'Date of Manufacture',
            'DOC' => 'Date of Checking',
            'RD' => 'Registration date',
            'TD' => 'The Department',
            'Status' => 'Status',
            'Place' => 'Place',
            'RC' => 'Recommendation',
            'Picture' => 'Picture',
            'RNl' => 'Renewing date',
            'RM' => 'Rm',
            'ASSETID' => 'Asset id',
            'PARENTASSET_ID' => 'Parentasset ID',
            'ASSETGROUP_ID' => 'Assetgroup ID',
            'LOCATION_ID' => 'Location ID',
            'VENDOR_ID' => 'Vendor ID',
            'OWNER_PERSONNELGROUP_ID' => 'Owner Personnelgroup ID',
            'OWNER_PERSONNEL_ID' => 'Owner Personnel ID',
            'SERVICEAGREEMENT_ID' => 'Serviceagreement ID',
            'CUSTODIAN_PERSONNEL_ID' => 'Custodian Personnel ID',
            'STATUS_ID' => 'Status ID',
            'ASSETBARCODE' => 'Assetbarcode',
            'SERIALNUMBER' => 'Serialnumber',
            'DEPARTMENT_ID' => 'Department ID',
            'CONDITION_ID' => 'Condition ID',
            'SCRAPVALUE' => 'Scrap value',
            'CURRENTVALUE' => 'Current value',
            'PURCHASEPRICE' => 'Purchaseprice',
            'ACCOUNTCODE' => 'Accountcode',
            'PURCHASEORDERNUMBER' => 'Purchase order number',
            'ISCHECKEDOUT' => 'Ischeckedout',
            'ASSETNAME' => 'Assetname',
            'BRAND' => 'Brand',
            'MANUFACTURER' => 'Manufacturer',
            'AUTOBARCODE' => 'Autobarcode',
            'ASSETTYPE' => 'Assettype',
            'LOCATION' => 'Location',
            'CONDITIONs' => 'Conditio Ns',
            'CUSTODIAN' => 'Custodian',
            'INCLUDEINAUDIT' => 'Includeinaudit',
            'DEPRECIATIONMETHOD' => 'Depreciationmethod',
            'RECOVERYPERIOD' => 'Recoveryperiod',
            'DATEINSERVICE' => 'Dateinservice',
            'DATEAUDITED' => 'Dateaudited',
            'DUEDATE' => 'Duedate',
            'DATEPURCHASED' => 'Datepurchased',
            'CHECKOUTDATE' => 'Checkoutdate',
            'DATECREATED' => 'Datecreated',
            'DATEUPDATED' => 'Dateupdated',
            'LASTAUDITDATE' => 'Lastauditdate',
            'DATEWARRANTYEXPIRES' => 'Datewarrantyexpires',
            'NEXTSERVICEDUEDATE' => 'Nextserviceduedate',
            'NOTES' => 'Notes',
            'fname' => 'Fname',
            'lname' => 'Lname',
            'personnelid' => 'Personnel id',
            'mobile' => 'Mobile',
            'office' => 'Staff',
            'username' => 'Username',
            'dep' => 'Dep',
            'returnables' => 'Returnables',
            'doreturnable' => 'Doreturnable',
            'checks' => 'Checks',
            'monthlyreport' => 'Monthlyreport',
        ];
    }
}
