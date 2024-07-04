<?php

namespace app\models;

use Yii;
use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "stock".
 *
 * @property int $id
 * @property string $catagory
 * @property string $noi
 * @property string $NOA
 * @property int $quantity
 * @property string $department
 * @property string $birrformat
 * @property double $cost
 * @property string $purchasefrom
 * @property string $customename
 * @property string $vendorid
 */
class Stock extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'stock';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['quantity','line_conf'], 'integer'],
            [['cost'], 'number'],
            [['notice','fname','email','specification','confirmbymicro','dor'], 'safe'],
            [['catagory', 'noi', 'NOA', 'department', 'purchasefrom', 'customename','office','vendorid'], 'string', 'max' =>1000],
            [['birrformat'], 'string', 'max' => 11],
           [['quantity'],'number','min'=>1],
           [['noi','quantity'],'required'],
           [['email'],'email'],
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
            'NOA' => 'Name of item',
            'quantity' => 'Quantity',
            'department' => 'Department',
            'birrformat' => 'Birr format',
            'cost' => 'Cost',
            'fname'=>'First name',
            'specification'=>'specification(ref if possible)',
            'dor'=>'date of request',
            'purchasefrom' => 'Purchased from',
            'customename' => 'Customename',
            'vendorid' => 'Vendor id',
            'confirmbymicro'=>'Line manager feedback',
        ];
    }
public function allData()
{
    $c="Consumable";
    $tw1=Stock::find()->where(['type'=>$c])->count();
    //$tw2=Assetsit::find()->count();
    //$tw3=Assetssbs::find()->count();
    //$tw4=Consumablesit::find()->count();
    //$tw5=Consumablesit::find()->count();
    $ad="Admin";
    $cic="Clinical";
    $mic="Microlab";
    $pa="pathology";
    $it="IT";
    $sbs="SBS";
 $query1=(new \yii\db\Query())->from('stock')->where('vendorid'!=NULL);
$sum1=$query1->sum('quantity');
    //$twin=$tw1/2+$tw2/3+$tw3/4+$tw4/5;
      $part=[
            'assets' => Assets::find()->where(['store'=>$ad])->count(),
            'champc' =>Consumables::find()->where(['store'=>$ad])->sum('quantity'),
            'consc' =>Assets::find()->where(['store'=>$cic])->count(),
            'consc1' =>Consumables::find()->where(['store'=>$cic])->sum('quantity'),
            'microlab' =>Assets::find()->where(['store'=>$mic])->count(),
            'microlabc' =>Consumables::find()->where(['store'=>$mic])->sum('quantity'),
            'pathology' =>Assets::find()->where(['store'=>$pa])->count(),
            'pathologyc' =>Consumables::find()->where(['store'=>$pa])->sum('quantity'),
            'orderitem' =>Orderitem::find()->count(),
            'tw2'=>Assets::find()->where(['store'=>$it])->count(),
            'tw3'=>Consumables::find()->where(['store'=>$it])->sum('quantity'),
            'tw4'=>Assets::find()->where(['store'=>$sbs])->sum('quantity'),
            'tw5'=>Consumables::find()->where(['store'=>$sbs])->sum('quantity'),
         //   'stock'=>$sum1,
           // 'babylist' => Stock::find()->where('baby_name IS NOT NULL')->count(),
         'type' => $tw1,
         
               
        ];
      return $part;
}
public static function createMultiple($modelClass, $multipleModels=[])
    {
        $model    = new $modelClass;
        $formName = $model->formName();
        $post     = Yii::$app->request->post($formName);
        $models   = [];

        if (! empty($multipleModels)) {
            $keys = array_keys(ArrayHelper::map($multipleModels, 'id', 'id'));
            $multipleModels = array_combine($keys, $multipleModels);
        }

        if ($post && is_array($post)) {
            foreach ($post as $i => $item) {
                if (isset($item['id']) && !empty($item['id']) && isset($multipleModels[$item['id']])) {
                    $models[] = $multipleModels[$item['id']];
                } else {
                    $models[] = new $modelClass;
                }
            }
        }

        unset($model, $formName, $post);

        return $models;
    }
public function sendHHRMail($to,$subject,$body){
        Yii::$app->mailer->compose()
                     ->setFrom('do_not_reply@hararghe.org')
                     ->setTo($to)
                     ->setSubject($subject)
                     ->setTextBody($body)
                     ->send();
                     return true;
     }}

