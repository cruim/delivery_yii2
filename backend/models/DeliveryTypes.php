<?php

namespace backend\models;

use Yii;


class DeliveryTypes extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'delivery-types';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['delivery-types_id'], 'required'],
            [['delivery-types_id', 'delivery-types_country_id', 'delivery-types_active'], 'integer'],
            [['delivery-types_name', 'delivery-types_code'], 'string', 'max' => 45],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'delivery-types_id' => 'Delivery Types ID',
            'delivery-types_name' => 'Тип доставки',
            'delivery-types_code' => 'Delivery Types Code',
            'delivery-types_country_id' => 'Delivery Types Country ID',
            'delivery-types_active' => 'Delivery Types Active',
        ];
    }
}
