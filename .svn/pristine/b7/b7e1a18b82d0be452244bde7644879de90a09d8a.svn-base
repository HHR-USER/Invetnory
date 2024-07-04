<?php
namespace app\models;
use Yii;
/**
 * This is the model class for table "orderitem".
 *
 * @property int $id
 * @property string $vendorid
 * @property string $noi
 * @property string $pc
 * @property string $itemcode
 * @property double $packsize
 * @property string $measurement
 * @property string $customename
 * @property string $assetbarcode
 * @property int $quantity
 * @property double $cost
 * @property double $Total
 * @property string $type
 * @property string $description
 * @property string $custid
 * @property int $foreign_key
 * @property int $valuecheck
 * @property string $unit
 * @property string $birrformat
 * @property int $monthlyreport
 * @property int $yearlyreport
 *
 * @property OrderEq $foreignKey
 */
class Orderitem extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'orderitem';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['noi', 'pc', 'itemcode', 'assetbarcode', 'description', 'custid'], 'string'],
            [['cost', 'Total'], 'number'],
            [['quantity', 'foreign_key', 'valuecheck', 'monthlyreport', 'yearlyreport'], 'integer'],
            [['vendorid', 'measurement', 'customename','packsize', 'type', 'birrformat'], 'string', 'max' => 45],
            [['unit'], 'string', 'max' => 11],
            [['foreign_key'], 'exist', 'skipOnError' => true, 'targetClass' => OrderEq::className(), 'targetAttribute' => ['foreign_key' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'vendorid' => 'Vendorid',
            'noi' => 'Name of stock',
            'pc' => 'Product code',
            'itemcode' => 'Stock code',
            'packsize' => 'Packsize',
            'measurement' => 'Measurement',
            'customename' => 'created by',
            'assetbarcode' => 'Asset barcode',
            'quantity' => 'Quantity',
            'cost' => 'Cost',
            'Total' => 'Total',
            'type' => 'Type',
            'description' => 'Remark',
            'custid' => 'Custid',
            'foreign_key' => 'Received number',
            'valuecheck' => 'Valuecheck',
            'unit' => 'Unit',
            'birrformat' => 'Currency',
            'monthlyreport' => 'Monthly report',
            'yearlyreport' => 'Yearly report',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getForeignKey()
    {
        return $this->hasOne(OrderEq::className(), ['id' => 'foreign_key']);
    }
public static function createMultiple($modelClass, $multipleModels = [])
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
}

