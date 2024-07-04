<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "consumables".
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
 * @property int $forserial
 * @property string $description
 *
 * @property Orderitem $fk0
 */
class Consumables extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'consumables';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['quantity'], 'integer'],
            [['pc','stat','descfr','consbarcode','remark','noi','dp', 'expairedate', 'dr', 'dt'], 'safe'],
            [['totalcost', 'cost', 'unitprice'], 'number'],
            [['shelflife','catagory','packsize', 'unit', 'lot', 'shelflifedeicide', 'location', 'shelfname', 'shelfno', 'am', 'department', 'purchasefrom', 'firstname', 'lastname', 'username', 'mobile', 'personnelid', 'vendorid', 'office', 'dep', 'description','st_avail'], 'string', 'max'=>45],
            [['birrformat'], 'string', 'max'=>11],
            [['quantity'],'number','min'=>0],
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
            'noi' => 'Name of Stock',
            'consbarcode' => 'Barcode',
            'packsize' => 'Pack size',
            'unit' => 'Unit',
            'lot' => 'Lot number',
            'quantity' => 'Quantity',
            'dp' => 'Date of production',
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
            'birrformat' => 'Birrformat',
            'cost' => 'Cost',
            'purchasefrom' => 'Purchased from',
            'remark' => 'Remark',
            'firstname' => 'First name',
            'lastname' => 'Last name',
            'username' => 'User name',
            'mobile' => 'Mobile',
            'personnelid'=>'Personnel id',
            'vendorid'=>'Vendorid',
            'dt'=>'Date of transfer',
            'office'=>'From which Unit/department/staff this man belongs?',
            'dep'=>'Department',
            'unitprice'=>'Unit price',
            'forserial'=>'For serial',
            'description'=>'Remark',
            'pc'=>'Product Code',
            'descfr'=>"Description for receive/reject",
        ];
    }
  //Function for Qauntity changed
public static function getSum($model,$qtold,$m){
       if($model->save()){
               $m->quantity+=$model->quantity-$qtold;//Calculate the current change in quantity
                $m->save();
            \Yii::$app->session->setFlash('success','<div class="alert alert-success rounded"><span class="mr-2">&#10003;</span>Successfully updated</div>');          
                  return ['indexb','id'=>$model->id];//Return the URL as a string
    } 
    else{
        \Yii::$app->session->setFlash('error','Failed to update the quantity');
    }
}
  //Function for Qauntity reduction incase expired
public static function getRedExp($model,$qtold,$m){
       if($model->save()){
          if($model->expairedate<date('Y-m-d')||$model->expairedate<date('m-d-Y'||$model->expairedate<date('d-m-Y'))){
               $m->quantity-=$qtold;//Calculate the current change in quantity
            }
             $m->save();
             \Yii::$app->session->setFlash('success', 
                       '<div class="alert alert-success rounded"><span class="mr-2">&#10003;</span>Successfully updated the quantity of expired date</div>');
        return ['indexb','id'=>$model->id];//Return the URL as a string
    } 
    else {
        \Yii::$app->session->setFlash('error','Failed to update the quantity');
    }
}
//fitlet stock from consumable table
public static function getNoi()
 {
   $data=\yii\helpers\ArrayHelper::map(Consumables::find()->where(['store'=>"Admin"])->all());
 return $data;
}
}