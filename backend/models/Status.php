<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "order_status".
 *
 * @property string $order_status_id
 * @property string $order_status_name
 * @property string $order_status_code
 * @property integer $order_status_activity
 * @property integer $order_status_order
 * @property integer $order_status_group_id
 * @property integer $order_status_group_three_id
 */
class Status extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'order_status';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['order_status_id', 'order_status_group_id'], 'required'],
            [['order_status_id', 'order_status_activity', 'order_status_order', 'order_status_group_id', 'order_status_group_three_id'], 'integer'],
            [['order_status_name', 'order_status_code'], 'string', 'max' => 255],
            [['order_status_id'], 'unique'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'order_status_id' => 'Order Status ID',
            'order_status_name' => 'Статус заказа',
            'order_status_code' => 'Order Status Code',
            'order_status_activity' => 'Order Status Activity',
            'order_status_order' => 'Order Status Order',
            'order_status_group_id' => 'Order Status Group ID',
            'order_status_group_three_id' => 'Order Status Group Three ID',
        ];
    }
}
