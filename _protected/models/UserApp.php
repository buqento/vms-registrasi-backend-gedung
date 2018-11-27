<?php

namespace app\models;

use Yii;

class UserApp extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'user_app';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['vms_type_id'], 'integer'],
            [['photo'], 'string'],
            [['created'], 'safe'],
            [['name', 'email'], 'string', 'max' => 50],
            [['id_number', 'username'], 'string', 'max' => 30],
            [['gender'], 'string', 'max' => 1],
            [['phone'], 'string', 'max' => 12],
            [['address', 'password'], 'string', 'max' => 255],
            [['authKey'], 'string', 'max' => 64],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Nama Pengunjung',
            'vms_type_id' => 'Tipe Identitas',
            'id_number' => 'Nomor Identitas',
            'gender' => 'Jenis Kelamin',
            'phone' => 'Nomor Telepon',
            'email' => 'Email',
            'photo' => 'Foto Profil',
            'address' => 'Alamat',
            'username' => 'Username',
            'password' => 'Password',
            'authKey' => 'Auth Key',
            'created' => 'Created',
        ];
    }

    public function getType()
    {
        return $this->hasOne(VmsType::className(), ['id' => 'vms_type_id']);
    }
}
