<?php

namespace backend\models;

use Yii;


class VsTaskCountry extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'vs_task_country';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'english', 'alpha2', 'alpha3', 'iso'], 'required'],
            [['name', 'fullname', 'english', 'alpha2', 'alpha3', 'iso', 'location'], 'string', 'max' => 64],
            [['location-precise'], 'string', 'max' => 128],
            [['name'], 'unique'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Страна',
            'fullname' => 'Fullname',
            'english' => 'English',
            'alpha2' => 'Alpha2',
            'alpha3' => 'Alpha3',
            'iso' => 'Iso',
            'location' => 'Location',
            'location-precise' => 'Location Precise',
        ];
    }
}
