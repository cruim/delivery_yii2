<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "order_site".
 *
 * @property integer $site_id
 * @property string $site_name
 * @property string $site_activity
 * @property string $site_code
 * @property string $site_order
 * @property integer $site_constant
 * @property string $site-product
 */
class Site extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'order-site';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['site_id'], 'required'],
            [['site_id', 'site_constant'], 'integer'],
            [['site_name', 'site_activity', 'site_code', 'site_order', 'site-product'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'site_id' => 'Site ID',
            'site_name' => 'Магазин',
            'site_activity' => 'Site Activity',
            'site_code' => 'Site Code',
            'site_order' => 'Site Order',
            'site_constant' => 'Site Constant',
            'site-product' => 'Site Product',
        ];
    }
}
