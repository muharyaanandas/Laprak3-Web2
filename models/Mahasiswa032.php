<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "mahasiswa032".
 *
 * @property int $id032
 * @property string $nim032
 * @property string $nama032
 * @property string $kelas032
 * @property string $status032
 */
class Mahasiswa032 extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'mahasiswa032';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nim032', 'nama032', 'kelas032', 'status032'], 'required'],
            [['nim032', 'nama032', 'kelas032', 'status032'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id032' => 'ID',
            'nim032' => 'No Induk Mahasiswa',
            'nama032' => 'Nama Mahasiswa',
            'kelas032' => 'Kelas',
            'status032' => 'Status',
        ];
    }
}
