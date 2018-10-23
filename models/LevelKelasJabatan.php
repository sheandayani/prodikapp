<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "levelKelasJabatan".
 *
 * @property int $idLevelKelasJabatan
 * @property int $idLevelPeserta
 * @property int $kelasJabatan
 * @property string $namaLevelKelasJabatan
 *
 * @property LevelPeserta $levelPeserta
 */
class LevelKelasJabatan extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'levelKelasJabatan';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['idLevelPeserta', 'kelasJabatan', 'namaLevelKelasJabatan'], 'required'],
            [['idLevelPeserta', 'kelasJabatan'], 'integer'],
            [['namaLevelKelasJabatan'], 'string', 'max' => 50],
            [['idLevelPeserta'], 'exist', 'skipOnError' => true, 'targetClass' => LevelPeserta::className(), 'targetAttribute' => ['idLevelPeserta' => 'idLevelPeserta']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'idLevelKelasJabatan' => 'Id Level Kelas Jabatan',
            'idLevelPeserta' => 'Id Level Peserta',
            'kelasJabatan' => 'Kelas Jabatan',
            'namaLevelKelasJabatan' => 'Nama Level Kelas Jabatan',
            'levelpeserta' => 'Level Peserta',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getLevelpeserta()
    {
        return $this->hasOne(LevelPeserta::className(), ['idLevelPeserta' => 'idLevelPeserta']);
    }
}
