<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "silabus".
 *
 * @property int $idSilabus
 * @property string $kode_silabus
 * @property string $nama_pelatihan
 * @property string $tujuan_pelatihan
 * @property string $materi_pelatihan
 * @property int $durasi_pelatihan
 */
class Silabus extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'silabus';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['kode_silabus'], 'required'],
            [['tujuan_pelatihan', 'materi_pelatihan'], 'string'],
            [['durasi_pelatihan'], 'integer'],
            [['kode_silabus'], 'string', 'max' => 50],
            [['nama_pelatihan'], 'string', 'max' => 200],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'idSilabus' => 'Id Silabus',
            'kode_silabus' => 'Kode Silabus',
            'nama_pelatihan' => 'Nama Pelatihan',
            'tujuan_pelatihan' => 'Tujuan Pelatihan',
            'materi_pelatihan' => 'Materi Pelatihan',
            'durasi_pelatihan' => 'Durasi Pelatihan',
        ];
    }
}
