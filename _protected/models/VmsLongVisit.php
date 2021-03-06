<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "vms_long_visit".
 *
 * @property int $id
 * @property string $name
 */
class VmsLongVisit extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'vms_long_visit';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name'], 'required'],
            [['name'], 'string', 'max' => 50],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Nama Durasi',
        ];
    }
}
