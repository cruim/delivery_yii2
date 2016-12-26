<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "manager".
 *
 * @property integer $manager_id
 * @property string $manager_firstName
 * @property string $manager_lastName
 * @property string $manager_email
 * @property string $manager_prefics
 * @property string $manager_inner_group
 * @property string $manager_note
 */
class Manager extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'manager';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['manager_id'], 'required'],
            [['manager_id'], 'integer'],
            [['manager_firstName'], 'safe'],
            [['manager_firstName', 'manager_lastName', 'manager_email', 'manager_prefics', 'manager_inner_group'], 'string', 'max' => 255],
            [['manager_note'], 'string', 'max' => 1024],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'manager_id' => 'Manager ID',
            'manager_firstName' => 'Имя менеджера',
            'manager_lastName' => 'Manager Last Name',
            'manager_email' => 'Manager Email',
            'manager_prefics' => 'Manager Prefics',
            'manager_inner_group' => 'Manager Inner Group',
            'manager_note' => 'Manager Note',
        ];
    }
}
