<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "users".
 *
 * @property int $id
 * @property string $fname
 * @property string $mname
 * @property string $lname
 * @property int $active
 * @property string $username
 * @property string $Type
 * @property string $password
 * @property string $personnelid
 * @property string $email
 * @property string $assign
 * @property string $role
 * @property string $oldpassword
 * @property string $newpassword
 * @property string $confirmpas
 * @property int $pi_check
 * @property string $lnm_email
 */
class Users extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'users';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['fname', 'mname', 'lname', 'username', 'Type', 'password', 'email', 'role'], 'required'],
            [['active', 'pi_check'], 'integer'],
            [['oldpassword', 'newpassword', 'confirmpas'], 'string'],
            [['fname', 'mname', 'lname', 'username', 'Type', 'password', 'personnelid', 'email', 'assign', 'role', 'lnm_email'], 'string', 'max' => 45],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'fname' => 'First name',
            'mname' => 'Midle name',
            'lname' => 'Last name',
            'active' => 'Active',
            'username' => 'Username',
            'Type' => 'Type',
            'password' => 'Password',
            'personnelid' => 'Personnelid',
            'email' => 'Email',
            'assign' => 'Assign',
            'role' => 'Role',
            'oldpassword' => 'Oldpassword',
            'newpassword' => 'Newpassword',
            'confirmpas' => 'Confirmpas',
            'pi_check' => 'Pi Check',
            'lnm_email' => 'Lnm Email',
        ];
    }
public function sendHHRMail($to,$subjects,$body){
        Yii::$app->mailer->compose()
                     ->setFrom('do_not_reply@hararghe.org')
                     ->setTo($to)
                     ->setSubject($subjects)
                     ->setHtmlBody($body)
                     ->send();
                     return true;
            }
public static function getEmails()
 {
    $data=\yii\helpers\ArrayHelper::map(Users::find()->where(['role'=>"Other staff"])->all(),'email','email');
    return $data;
}}
     