<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "personnel".
 *
 * @property int $id
 * @property string $personnelid
 * @property int $personnelgroup_id
 * @property string $prbs
 * @property string $firstname
 * @property string $lastname
 * @property string $emailaddress
 * @property string $workphonenumber
 * @property string $homephonenumber
 * @property int $mobilephonenumber
 * @property string $pagernumber
 * @property int $jobtile_id
 * @property string $autobarcode
 * @property string $jobtitle
 * @property string $personnelgroup
 * @property string $displayname
 * @property string $displaynameandnumber
 * @property string $status_id
 * @property string $personnelstatus
 * @property string $currentdate
 * @property int $Fk_pid
 * @property int $FK_idp
 */
class Personnel extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'personnel';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['personnelgroup_id', 'mobilephonenumber', 'jobtile_id', 'Fk_pid', 'FK_idp'], 'integer'],
            [['currentdate','jobtitle'], 'safe'],
            [['personnelid', 'prbs', 'firstname', 'lastname', 'emailaddress', 'workphonenumber', 'homephonenumber', 'pagernumber', 'autobarcode','personnelgroup', 'displayname', 'displaynameandnumber', 'status_id', 'personnelstatus'], 'string', 'max' => 45],
            [['emailaddress'],'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'personnelid' => 'Personnel id',
            'personnelgroup_id' => 'Personnelg roup ID',
            'prbs' => 'Personnel barcode',
            'firstname' => 'Your name and father name',
            'lastname' => 'Last name',
            'emailaddress' => 'Email address',
            'workphonenumber' => 'Work phone number',
            'homephonenumber' => 'Home phone number',
            'mobilephonenumber' => 'Mobile phone number',
            'pagernumber' => 'Pager number',
            'jobtile_id' => 'Jobtile ID',
            'autobarcode' => 'Autobarcode',
            'jobtitle' => 'Jobtitle',
            'personnelgroup' => 'Personnel group',
            'displayname' => 'Displayn ame',
            'displaynameandnumber' => 'Display name and number',
            'status_id' => 'Status ID',
            'personnelstatus' => 'Personnel status',
            'currentdate' => 'Currentdate',
        ];
    }
}
