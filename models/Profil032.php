<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "profil_032".
 *
 * @property int $Id
 * @property int $Id_mahasiswa
 * @property string $Foto_profil
 *
 * @property Mahasiswa032 $mahasiswa
 */
class Profil032 extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'profil_032';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Id_mahasiswa', 'Foto_profil'], 'required'],
            [['Id_mahasiswa'], 'integer'],
            [['Foto_profil'], 'string', 'max' => 25],
            [['Id_mahasiswa'], 'unique'],
            [['Id_mahasiswa'], 'exist', 'skipOnError' => true, 'targetClass' => Mahasiswa032::class, 'targetAttribute' => ['Id_mahasiswa' => 'Id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'Id' => 'ID',
            'Id_mahasiswa' => 'Id Mahasiswa',
            'Foto_profil' => 'Foto Profil',
        ];
    }

    /**
     * Gets query for [[Mahasiswa]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getMahasiswa032()
    {
        return $this->hasOne(Mahasiswa032::class, ['Id' => 'Id_mahasiswa']);
    }
}
