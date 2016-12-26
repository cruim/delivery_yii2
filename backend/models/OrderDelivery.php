<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "order_delivery".
 *
 * @property integer $order_id
 * @property string $order_delivery_code
 * @property string $order_delivery_integrationCode
 * @property double $order_delivery_cost
 * @property string $order_delivery_date
 * @property double $order_delivery_netCost
 */
class OrderDelivery extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'order_delivery';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['order_id'], 'required'],
            [['order_id'], 'integer'],
            [['order_delivery_cost', 'order_delivery_netCost'], 'number'],
            [['order_delivery_date',], 'safe'],
            [['order_delivery_code', 'order_delivery_integrationCode'], 'string', 'max' => 45],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'order_id' => 'Order ID',
            'order_delivery_code' => 'Order Delivery Code',
            'order_delivery_integrationCode' => 'Order Delivery Integration Code',
            'order_delivery_cost' => 'Order Delivery Cost',
            'order_delivery_date' => 'Order Delivery Date',
            'order_delivery_netCost' => 'Order Delivery Net Cost',
        ];
    }

    public function getType(){
        
        return $this->hasOne(DeliveryTypes::className(), ['delivery_types_code' => 'order_delivery_code']);
        
    }
}
