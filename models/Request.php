<?php
namespace app\models;
use Yii;
/**
 * This is the model class for table "request".
 *
 * @property int $id
 * @property string $noi
 * @property double $packsize
 * @property int $quantity
 * @property string $type
 * @property string $dor
 * @property string $remark
 * @property string $personnelid
 * @property int $foreign_key
 * @property int $valuecheck
 * @property string $email
 * @property string $requestno
 * @property string $dep
 * @property string $confirm
 * @property string $office
 * @property string $confirmbymicro
 */
class Request extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'request';
    }
    /**
     * {@inheritdoc}
     */
public function rules()
    {
        return [
            [['packsize'],'number'],
            [['quantity','foreign_key','valuecheck'],'integer'],
            [['noi','dor','department','confirmbymicro'],'safe'],
            [['specification'],'string'],
            [['type','fname','email','requestno','personnelid','dep','confirm', 'office','lnm_email'],'string','max'=>45],
            [['status'],'string','max'=>1000],
            [['quantity'],'number','min'=>1],
            [['office','fname'],'required'],
            //[['fname'],'setValue'],
	    [['requestno'],"unique"],
            ['quantity','checkQuantity'],
        ];
    }

    /**
     * {@inheritdoc}
     */
public function attributeLabels()
       {
        return [
            'id'=>'ID',
            'noi'=>'Name of stock',
            'packsize'=>'Pack size',
            'quantity'=>'Quantity',
            'type'=>'Type',
            'dor'=>'Date of request',
            'specification'=>'Specification(ref if possible)',
            'fname'=>'Full Name',
            'foreign_key'=>'Mobile number',
            'valuecheck'=>'Value check',
            'email'=>'Email',
            'requestno'=>'Request number',
		    'personnelid'=>'Personnel id',
            'dep'=>'Unit',
            'confirm'=>'Confirm',
            'office'=>'Store location/Unit',
            'department'=>'Unit',
            'status'=>'Status',
            'confirmbymicro'=>'Confirm by line manager',
        ];
    }
public static function createMultiple($modelClass, $multipleModels=[])
    {
        $model=new $modelClass;
        $formName =$model->formName();
        $post=Yii::$app->request->post($formName);
        $models=[];

        if (! empty($multipleModels)) {
            $keys=array_keys(ArrayHelper::map($multipleModels, 'id', 'id'));
            $multipleModels=array_combine($keys, $multipleModels);
        }
        if ($post && is_array($post)) {
            foreach ($post as $i=>$item) {
                if (isset($item['id']) && !empty($item['id']) && isset($multipleModels[$item['id']])) {
                    $models[]=$multipleModels[$item['id']];
                } else {
                    $models[]=new $modelClass;
                }
            }
        }

        unset($model, $formName, $post);

        return $models;
    }
    public function getAllData()
    {
        return $this->hasMany(app\models\Stock::className(), ['vendor' => 'id']);
    }
public function sendHHRMail($to,$subject,$body){
        Yii::$app->mailer->compose()
                     ->setFrom('do_not_reply@hararghe.org')
                     ->setTo($to)
                     ->setCc(array("eteklehaymanot@hararghe.org","yworku@hararghe.org"))
                     ->setSubject($subject)
                     ->setHtmlBody($body)
                     ->send();
                     return true;
        
            }
public function sendMailmulp($to,$addemailv,$ap_email,$m,$body){
        Yii::$app->mailer->compose()
                     ->setFrom('do_not_reply@hararghe.org')
                     //->setTo($to)
                     ->setTo(array($to,$addemailv,$ap_email))
                     ->setSubject($m)
                     ->setHtmlBody($body)
                     ->send();
                     return true;
         }
public function checkQuantity($attribute,$params){
 $q=10;//app\models\Consumables::find()->where(['noi'=>$this->noi])->sum('quantity');
if($this->quantity>$q){
$this->addError($attribute,'The quantity you want to out greater than available ammount');
}}
public function setValue(){
    $this->fname=Yii::$app->user->identity->fname." ".Yii::$app->user->identity->mname." ".Yii::$app->user->identity->lname;
    return $this->fname;
}
public static function AssugnCode($model,$val){
    if(Yii::$app->user->identity->Type=="Clinical"){
                $model->requestno="C".$val;
                $model->dep="Clinical";
               }
if(Yii::$app->user->identity->Type=="Microlab"){
                $model->requestno="M".$val;
                $model->dep="Microlab";
               }
if(Yii::$app->user->identity->Type=="Pathology"){
                $model->requestno="P".$val;//$model->id;
                $model->dep="Pathology";
               }
if(Yii::$app->user->identity->Type=="IT"){
                $model->requestno="I".$val;//$model->id;
                $model->dep="IT";
               }
if(Yii::$app->user->identity->Type=="SBS"){
                $model->requestno="S".$val;//$model->id;
                $model->dep="SBS";
               }
if(Yii::$app->user->identity->Type=="Admin"){
                $model->requestno="A".$val;//$model->id;
                $model->dep="Admin";
               }
if(Yii::$app->user->identity->Type=="KHDSS"){
                $model->requestno="K".$val;//$model->id;
                $model->dep="KHDSS";
               }
  if(Yii::$app->user->identity->Type=="PSU"){
                $model->requestno="PSU".$val;//$model->id;
                $model->dep="PSU";
               }
      $model->save();
      return true;
}
public static function AssugnCodeasset($model,$val){
    if(Yii::$app->user->identity->Type=="Clinical"){
                $model->requestno="C".$val;//.$model->id;
                $model->dep="Clinicala";
               }
    if(Yii::$app->user->identity->Type=="Microlab"){
                $model->requestno="M".$val;//$model->id;
                $model->dep="Microlaba";
               }
    if(Yii::$app->user->identity->Type=="Pathology"){
                $model->requestno="P".$val;//$model->id;
                $model->dep="Pathologya";//to display only pathology
               }
    if(Yii::$app->user->identity->Type=="IT"){
                $model->requestno="I".$val;//.$model->id;
                $model->dep="ITa";//to display only IT
               }
    if(Yii::$app->user->identity->Type=="SBS"){
                $model->requestno="S".$val;//.$model->id;
                $model->dep="SBSa";
               }
if(Yii::$app->user->identity->Type=="Admin"){
                $model->requestno="A".$val;//$model->id;
                $model->dep="Admina";
               }
if(Yii::$app->user->identity->Type=="KHDSS"){
                $model->requestno="K".$val;//$model->id;
                $model->dep="KHDSSa";
               }
if(Yii::$app->user->identity->Type=="PSU"){
                $model->requestno="PSU".$val;//.$model->id;
                $model->dep="PSUa";
               }
               $model->save();
               return true;   
    
}}

