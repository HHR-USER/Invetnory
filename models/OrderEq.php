<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "order_eq".
 *
 * @property int $id
 * @property string $vendorid
 * @property string $customename
 * @property string $type
 * @property string $noi
 * @property int $quantity
 * @property string $Doo
 * @property double $unitprice
 * @property double $Total
 * @property string $description
 * @property int $foreign_key
 * @property string $status
 *
 * @property Orderitem[] $orderitems
 */
class OrderEq extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'order_eq';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['quantity'], 'integer'],
            [['Doo'], 'safe'],
            [['unitprice', 'Total'], 'number'],
            [['description'], 'string'],
            [['vendorid', 'customename', 'type', 'noi', 'status'], 'string', 'max' => 45],
            [['quantity'],'number','min'=>1],
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
            'customename' => 'Custome name',
            'type' => 'Type',
            'noi' => 'Name of item',
            'quantity' => 'Quantity',
            'Doo' => 'date of order',
            'unitprice' => 'Unit price',
            'Total' => 'Total',
            'description' => 'Description',
            'status' => 'Status',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
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