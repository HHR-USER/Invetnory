<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "vendor".
 *
 * @property int $id
 * @property string $vendorid
 * @property string $vendorname
 * @property string $vendormiddlename
 * @property int $phonenumber
 * @property string $contactname
 * @property string $email
 * @property string $address1
 * @property string $address2
 * @property string $city
 * @property string $state
 * @property string $postalcode
 * @property string $country
 * @property string $vendornumber
 * @property string $autobarcode
 * @property string $currentdate
 * @property string $website
 */
class Vendor extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'vendor';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['phonenumber'], 'integer'],
            [['currentdate'], 'safe'],
            [['vendorid', 'vendorname', 'vendormiddlename', 'email', 'address1', 'address2', 'city', 'state', 'postalcode', 'country', 'vendornumber', 'autobarcode', 'website'], 'string', 'max' => 45],
            [['contactname'], 'string', 'max' => 11],
            [['email'], 'unique'],
            [['phonenumber'],'number','min'=>10],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'vendorid' => 'Vendor id',
            'vendorname' => 'Vendor name',
            'vendormiddlename' => 'Vendor middle name',
            'phonenumber' => 'Phone number',
            'contactname' => 'Contact name',
            'email' => 'Email',
            'address1' => 'Address1',
            'address2' => 'Address2',
            'city' => 'City',
            'state' => 'State',
            'postalcode' => 'Postalcode',
            'country' => 'Country',
            'vendornumber' => 'Vendor number',
            'autobarcode' => 'Autobarcode',
            'currentdate' => 'Currentdate',
            'website' => 'Website',
        ];
    }
}
