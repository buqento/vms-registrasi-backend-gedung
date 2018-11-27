<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "visited".
 *
 * @property int $id
 * @property string $name
 * @property string $vms_type_id
 * @property string $id_number
 * @property string $gender
 * @property string $phone
 * @property string $email
 * @property string $photo
 * @property string $address
 * @property string $visit_code
 * @property string $visit_date
 * @property string $visit_time
 * @property string $visit_long
 * @property string $employe_id
 * @property string $additional_info
 * @property int $status
 * @property string $created
 */
class Visited extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'visited';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'vms_type_id', 'gender', 'phone', 'email', 'photo', 'address', 'visit_code', 'visit_date', 'visit_time', 'visit_long', 'additional_info'], 'required'],
            [['photo', 'additional_info'], 'string'],
            [['visit_date', 'created'], 'safe'],
            [['status'], 'integer'],
            [['name', 'email', 'visit_code', 'visit_long', 'employe_id'], 'string', 'max' => 50],
            [['vms_type_id'], 'string', 'max' => 25],
            [['id_number'], 'string', 'max' => 30],
            [['gender'], 'string', 'max' => 1],
            [['phone'], 'string', 'max' => 12],
            [['address', 'visit_time'], 'string', 'max' => 255],
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
            'visit_code' => 'Kode Kunjungan',
            'visit_date' => 'Tanggal Kunjungan',
            'visit_time' => 'Visit Time',
            'visit_long' => 'Lama Kunjungan',
            'employe_id' => 'Host',
            'additional_info' => 'Informasi Kunjungan',
            'status' => 'Status Kunjungan',
            'created' => 'Created',
        ];
    }

    public function getType()
    {
        return $this->hasOne(VmsType::className(), ['id' => 'vms_type_id']);
    }
}
